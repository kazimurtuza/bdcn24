<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Helpers\CommonHelper;
use App\Models\MediaImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use PhpParser\Node\Expr\Array_;

//use Image;

class UploadController extends Controller
{
    public function imageUploadView()
    {

        $common_data = new Array_();
        $common_data->title = 'Uploaded Images';
        $imgList = MediaImage::orderBy('id', 'desc')->where('type','upload')->get();
        return view('backend.admin.media.upload.uploaded_image')
            ->with(compact('common_data', 'imgList'));
    }

    public function resourceImageUpload()
    {
        $common_data = new Array_();
        $common_data->title = 'Uploaded Resource Images';
        $imgList = MediaImage::orderBy('id', 'desc')->where('type','resource')->get();
        return view('backend.admin.media.upload.resource_image_upload')
            ->with(compact('common_data', 'imgList'));
    }

    public function imgSave(Request $request)
    {

        /* image store start*/
        if (isset($request->crop_logo) && ($request->crop_logo != '') && ($request->crop_logo != null)) {
            $ext = explode('/', mime_content_type($request->crop_logo))[1];
            $logo_url = "media_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/media_images/';
            $date_directory = date('Y') . '/' . date('m') . '/' . date('d') . '/';
            $filePath = $logo_directory . $date_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/media_images/' . $date_directory . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }
            $logo_image = Image::make(file_get_contents($request->crop_logo))->resize(800, 450);

            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
//            $logo_image->colorize(25, 50, 35);
            list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
//            dd($r,$g,$b);
//            $logo_image->colorize($r,$g,$b);

            /*image lower third/watermark image placement*/
//          Start  img bottom frame
//            $logo_image->insert(public_path('assets/frame.png'), 'bottom');
//           End img bottom frame


            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);


        }
        $media_images = new MediaImage();
        $media_images->image_full_path = $db_media_img_path;
        $media_images->image = $logo_url;
        $media_images->type = $request->type;
        $media_images->created_by = Auth::id();
        $media_images->created_at = Carbon::now();
        $media_images->save();

//        return redirect()->back()->with('success', 'Successfully saved Image');

        if ($media_images) {
            return ['msg' => 200, 'imgUrl' => asset($db_media_img_path), 'id' => $media_images->id];
        } else {
            return ['msg' => 404, 'imgUrl' => ''];
        }

    }

    public function imgInfoGet(Request $request)
    {
        $imgInfo = MediaImage::find($request->img_id);
        $imgInfo->fullPathImg = asset($imgInfo->image_full_path);
        return $imgInfo;
    }

    public function mediaImgDelete(Request $request)
    {

        $media = MediaImage::where('id', $request->id)->delete();
        if ($media) {
            return [
                'msg' => 200,
                'id' => $request->id

            ];
        } else {
            return [
                'msg' => 404,
                'id' => '',

            ];
        }

    }

    public function imgDataUpdate(Request $request)
    {
        $imgInfo = MediaImage::find($request->img_id);
        $imgInfo->name = $request->name;
        $imgInfo->alt_text = $request->alt_text;
        $imgInfo->save();
        return redirect()->back()->with('success', 'Successfully  Image Date Updated');
    }

    public function imgDataUpdateAjax(Request $request)
    {
        $imgInfo = MediaImage::find($request->img_id);
        $imgInfo->name = $request->name;
        $imgInfo->alt_text = $request->alt_text;
        $imgInfo->save();
        return 'success';
    }

    public function imgDataDeleteAjax(Request $request){
//         MediaImage::where('id',$request->img_id)->uplate(['']);
//         return 'success';
    }




    public function imageSaturation(&$image, $saturationPercentage)
    {
        $width = imagesx($image);
        $height = imagesy($image);

        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $rgb = imagecolorat($image, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
                $alpha = ($rgb & 0x7F000000) >> 24;
                list($h, $s, $l) = $this->rgb2hsl($r, $g, $b);
                $s = $s * (100 + $saturationPercentage) / 100;
                $s = $s * (100 + $saturationPercentage) / 100;
                if ($s > 1) $s = 1;
                list($r, $g, $b) = $this->hsl2rgb($h, $s, $l);
                imagesetpixel($image, $x, $y, imagecolorallocatealpha($image, $r, $g, $b, $alpha));
            }
        }
    }

    function rgb2hsl($r, $g, $b)
    {
        $r /= 255;
        $g /= 255;
        $b /= 255;
        $max = max($r, $g, $b);
        $min = min($r, $g, $b);
        $l = ($max + $min) / 2;
        if ($max == $min) {
            $h = $s = 0;
        } else {
            $d = $max - $min;
            $s = $l > 0.5 ? $d / (2 - $max - $min) : $d / ($max + $min);
            switch ($max) {
                case $r:
                    $h = ($g - $b) / $d + ($g < $b ? 6 : 0);
                    break;
                case $g:
                    $h = ($b - $r) / $d + 2;
                    break;
                case $b:
                    $h = ($r - $g) / $d + 4;
                    break;
            }
            $h /= 6;
        }
        $h = floor($h * 360);
        $s = floor($s * 100);
        $l = floor($l * 100);
        return [$h, $s, $l];
        return ['h' => $h, 's' => $s, 'l' => $l];
    }

    function hsl2rgb($h, $s, $l)
    {

        $h /= 60;
        if ($h < 0) $h = 6 - fmod(-$h, 6);
        $h = fmod($h, 6);

        $s = max(0, min(1, $s / 100));
        $l = max(0, min(1, $l / 100));

        $c = (1 - abs((2 * $l) - 1)) * $s;
        $x = $c * (1 - abs(fmod($h, 2) - 1));

        if ($h < 1) {
            $r = $c;
            $g = $x;
            $b = 0;
        } elseif ($h < 2) {
            $r = $x;
            $g = $c;
            $b = 0;
        } elseif ($h < 3) {
            $r = 0;
            $g = $c;
            $b = $x;
        } elseif ($h < 4) {
            $r = 0;
            $g = $x;
            $b = $c;
        } elseif ($h < 5) {
            $r = $x;
            $g = 0;
            $b = $c;
        } else {
            $r = $c;
            $g = 0;
            $b = $x;
        }

        $m = $l - $c / 2;
        $r = round(($r + $m) * 255);
        $g = round(($g + $m) * 255);
        $b = round(($b + $m) * 255);

        return [$r, $g, $b];
        return ['r' => $r, 'g' => $g, 'b' => $b];

    }

    public function mediaImgSrcList(Request $request)
    {

        if ($request->img_name == '') {
            $imgList = MediaImage::where('type',$request->type)->get();
        } else {
            $imgList = MediaImage::where('type',$request->type)->where('name', 'LIKE', '%' . $request->img_name . '%')->get();
        }


        return view('backend.admin.media.upload._src_upload_img')->with(compact('imgList'))->render();

    }

    public function getUploadList(Request $request){
        $imgList = MediaImage::orderBy('id', 'desc')->where('created_by',Auth::user()->id)->where('type', 'upload')->paginate(25);
//       return $imgList;
        return view('backend.admin.media.upload._src_upload_img')->with(compact('imgList'))->render();
    }
    public function getResourceList(){
        $imgList = MediaImage::orderBy('id', 'desc')->where('type', 'resource')->paginate(25);
        return view('backend.admin.media.upload._src_upload_img')->with(compact('imgList'))->render();
    }


}
