<?php

namespace App\Http\Controllers\Backend\Admin;


use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\BdDistrict;
use App\Models\BdDivision;
use App\Models\BdThana;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostChildCategory;
use App\Models\PostSection;
use App\Models\PostSubCategory;
use App\Models\PostTag;
use App\Models\ReporterRole;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;
use PhpParser\Node\Expr\Array_;
use function Symfony\Component\Console\Style\comment;
use function Symfony\Component\Finder\size;
use function Symfony\Component\String\width;

use App\Helpers\CommonHelpe;
use App\Models\MediaImage;


class PostController extends Controller
{
    public function postCategoryShow()
    {
        $common_data = new Array_();
        $common_data->title = 'Post Category';
        $categoryList = PostCategory::where('language', 'bn')->where('deleted', 0)->get();
        return view('backend.admin.post.post_category')->with(compact('categoryList', 'common_data'));
    }

    public function postSubcategoryShow()
    {
        $common_data = new Array_();
        $common_data->title = 'Post Subcategory';
        $subCategoryList = PostSubCategory::where('language', 'bn')->where('deleted', 0)->get();
        $categoryList = PostCategory::where('language', 'bn')->where('deleted', 0)->get();
        return view('backend.admin.post.post_sub_category')->with(compact('subCategoryList', 'categoryList', 'common_data'));
    }

    public function postCategoryAdd(Request $request)
    {
        $postCategory = new PostCategory();
        $postCategory->language = $request->language;
        $postCategory->name = $request->name;
        if (isset($request->image) && ($request->image != '') && ($request->image != null)) {
            $ext = explode('/', mime_content_type($request->image))[1];
            $logo_url = "category_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/category_images/';
            $filePath = $logo_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/category_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }

            $logo_image = Image::make(file_get_contents($request->image))->resize(800, 450);


            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);
            $postCategory->image = $db_media_img_path;

        }
        $postCategory->slug = $request->slug;
        $postCategory->color = $request->color;
        $postCategory->created_by = Auth::id();
        $postCategory->deleted_at = Carbon::now();
        $postCategory->save();

        if ($postCategory) {
            return redirect()->back()->with('success', 'category Successfully  Created');
        } else {
            return redirect()->back()->with('fail', 'category creation fail');
        }

    }

    public function postSubcategoryAdd(Request $request)
    {

        $subcategory = new PostSubCategory();
        $subcategory->post_category_id = $request->category_id;
        $subcategory->language = $request->language;
        $subcategory->name = $request->name;
        $subcategory->slug = $request->slug;
        $subcategory->save();

        if ($subcategory) {
            return redirect()->back()->with('success', 'Successfully Subcategory added');
        } else {
            return redirect()->back()->with('fail', 'failed to add Subcategory');
        }

    }

    public function getPostEditData(Request $request)
    {

        $categoryInfo = PostCategory::find($request->id);


        return view('backend.admin.post.jspage._post_category_edit')->with(compact('categoryInfo'))->render();
    }

    public function postSubcategoryEditView(Request $request)
    {
        $common_data = new Array_();
        $common_data->title = 'Post Subcategory Edit';

        $subcategorylist = PostSubCategory::find($request->id);
        $categoryList = PostCategory::where('language', 'bn')->where('deleted', 0)->get();
        $subcategory_id = $request->id;

        return view('backend.admin.post.jspage._subcategory_edit')->with(compact('subcategorylist', 'categoryList', 'subcategory_id', 'common_data'))->render();

    }

    public function postSubcategoryEdit(Request $request)
    {
        $subcategory = PostSubCategory::find($request->subcategory_id);
        $subcategory->post_category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->language = $request->language;
        $subcategory->slug = $request->slug;
        $subcategory->save();
        return redirect()->back()->with('success', 'Successfully update Subcategory');
    }

    public function getPostCategoryJs(Request $request)
    {
        $categoryList = PostCategory::where('language', $request->language)->where('deleted', 0)->get();

        return view('backend.admin.post.jspage._categorylist_get')->with(compact('categoryList'))->render();

    }

    public function postCategoryEditStore(Request $request)
    {

        $postCategory = PostCategory::find($request->category_id);
        $postCategory->language = $request->language;
        $postCategory->name = $request->name;
        if (isset($request->image) && ($request->image != '') && ($request->image != null)) {
            $ext = explode('/', mime_content_type($request->image))[1];
            $logo_url = "category_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/category_images/';
            $filePath = $logo_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/category_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }

            $logo_image = Image::make(file_get_contents($request->image))->resize(800, 450);


            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);
            $postCategory->image = $db_media_img_path;

        }
        $postCategory->slug = $request->slug;
        $postCategory->color = $request->color;
        $postCategory->created_by = Auth::id();
        $postCategory->deleted_at = Carbon::now();
        $postCategory->save();

        if ($postCategory) {
            return redirect()->back()->with('success', 'category Successfully  Created');
        } else {
            return redirect()->back()->with('fail', 'category creation fail');
        }
    }

    public function getLanguageWiseCategoryList(Request $request)
    {

        $categoryList = PostCategory::where('language', $request->language)->where('deleted', 0)->get();

        return view('backend.admin.post.jspage._category_list_change')->with(compact('categoryList'))->render();

    }

    public function getLanguageWiseSubcategoryList(Request $request)
    {

        $subCategoryList = PostSubCategory::where('language', $request->language)->where('deleted', 0)->get();

        return view('backend.admin.post.jspage._subcategory_list_change')->with(compact('subCategoryList'))->render();

    }

    public function getLanguageWiseChildcategoryList(Request $request)
    {

        $childCategoryList = PostChildCategory::where('language', $request->language)->where('deleted', 0)->get();

        return view('backend.admin.post.jspage._childcategory_list_change')->with(compact('childCategoryList'))->render();

    }

    public function postChildcategoryShow()
    {
        $childCategoryList = PostChildCategory::where('deleted', 0)->where('language', 'bn')->get();
        $subCategoryList = PostSubCategory::where('language', 'bn')->where('deleted', 0)->get();
        $categoryList = PostCategory::where('language', 'bn')->where('deleted', 0)->get();
        return view('backend.admin.post.post_child_category')->with(compact('subCategoryList', 'categoryList', 'childCategoryList'));

    }

    public function getPostSubCategoryJs(Request $request)
    {
        $subCategoryList = PostSubCategory::where('post_category_id', $request->category_id)->where('deleted', 0)->get();
        return view('backend.admin.post.jspage._post_sub_category_list')->with(compact('subCategoryList'))->render();

    }

    public function getPostChildCategoryJs(Request $request)
    {
        $childCategoryList = PostChildCategory::where('post_sub_category_id', $request->sub_category_id)->where('deleted', 0)->get();
        return view('backend.admin.post.jspage._post_child_category_list')->with(compact('childCategoryList'))->render();

    }


    public function getPostChildCategoryAdd(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'language' => 'required',
            'slug' => 'required',
            'name' => 'required',
        ]);

        $category = new PostChildCategory();
        $category->post_category_id = $request->category_id;
        $category->post_sub_category_id = $request->sub_category_id;
        $category->language = $request->language;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        if ($category) {
            return redirect()->back()->with('Success', 'Child Category Successfully  Created');
        } else {
            return redirect()->back()->with('Fail', 'Child Category creation Fail');
        }

    }

    public function postChildCategoryEditView(Request $request)
    {
        $chilod_id = $request->id;
        $childCategory = PostChildCategory::find($chilod_id);

        $categoryList = PostChildCategory::where('deleted', 0)->get();
        $subCategoryList = PostSubCategory::where('deleted', 0)->get();

        $childCategory = PostChildCategory::find($chilod_id);
        return view('backend.admin.post.jspage._post_child_category_edit_view')->with(compact('categoryList', 'subCategoryList', 'childCategory'));
    }

    public function editChildCategoryStore(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'language' => 'required',
            'slug' => 'required',
            'name' => 'required',
        ]);

        $category = PostChildCategory::find($request->child_category_id);
        $category->post_category_id = $request->category_id;
        $category->post_sub_category_id = $request->sub_category_id;
        $category->language = $request->language;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        if ($category) {
            return redirect()->back()->with('Success', 'Child Category Successfully  Update');
        } else {
            return redirect()->back()->with('Fail', 'Child Category creation Fail');
        }
    }

    public function postAddView()
    {
        $common_data = new Array_();
        $common_data->title = 'Create Article';
        $imgList = MediaImage::orderBy('id', 'desc')
            ->where('type', 'upload')
            ->get();
        $resourceImgList = MediaImage::orderBy('id', 'desc')
            ->where('type', 'resource')
            ->get();
        $division = BdDivision::get();

        $publishPostList = Post::where('post_status', 1)
            ->where('deleted', 0)
            ->select('id', 'title')
            ->get();

        $categoryuList = PostCategory::where('deleted', 0)
            ->where('language', 'bn')
            ->get();
        $reporterList=User::where('deleted',0)
            ->where('status',1)
            ->get();
        $postTags = PostTag::where('status', 1)
            ->pluck('tag')
            ->toArray();
        return view('backend.admin.post.add_article')->with(compact(
            'categoryuList',
            'imgList',
            'division',
            'publishPostList',
            'resourceImgList',
            'common_data',
            'reporterList',
            'postTags'
        ));
    }


    public function postAdd(Request $request)
    {
        $request->validate([
            "title" => 'required',
            "first_description" => 'required',
            "slug" => 'required',
            "fetature_img" => 'required',
            "post_category_id" => 'required',
        ]);

        DB::beginTransaction();
        try {
            if ($request->post_type == 'save-preview') {
                $post_status = 0;
            } else if ('publish-request') {
                $post_status = 2;
            }
            $is_base64 = str_contains($request->fetature_img, "base64");

            if (is_string($request->fetature_img) && $is_base64) {

                $fetature_img_id = $this->uploadBase64Image($request->fetature_img, $request->title);

            } else {
                $fetature_img_id = $request->fetature_img;
            }

            $post = new Post();
            $post->language = $request->language;
            $post->related_post_type = $request->related_post_type;
            $post->post_category_id = $request->post_category_id;
            $post->post_sub_category_id = $request->post_sub_category_id;
            $post->post_child_category_id = $request->post_child_category_id;
            $post->division_id = $request->division_id;
            $post->district_id = $request->district_id;
            $post->thana_id = $request->thana_id;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->subtitle = $request->subtitle;
            $post->first_description = $request->first_description;
            $post->second_description = $request->second_description;
            $post->post_tags = $request->post_tags;
            $post->seo_meta_keyword = $request->meta_tags;
            $post->seo_meta_description = $request->meta_description;
            $post->featured_image_id = $fetature_img_id;
            $post->youtube_video_link = $request->video_link;
            $post->soundcloud_audio_link = $request->audio_link;
            if ($request->placement == 'featured') {
                $post->is_featured = 1;
            }
            if ($request->placement == 'left') {
                $post->is_featured_left = 1;
            }
            if ($request->placement == 'right') {
                $post->is_featured_right = 1;
            }
            if ($request->breaking_placement) {
                $post->is_breaking_news = 1;
            }
            $post->post_status = $post_status;
            if ($request->isSchedule) {
                $post->is_schedule = 1;
            $post->publish_at =Carbon::make($request->schedule_post_date);
            }
            $post->author_id = Auth::user()->id;
            $post->created_at = Carbon::now();
            $post->created_by = Auth::user()->id;
            $upload_post = $post->save();



            if ($upload_post && $request->another_post_details) {

                foreach ($request->another_post_details as $key => $detail_data) {
                    if ($detail_data) {
                        $post_image_base64 = $request->post_img[$key];
                        $post_image_name = $request->img_caption[$key];
                        $post_upload_image_id = '';
                        if (is_string($post_image_base64) && isset($post_image_base64) && ($post_image_base64 != '') && ($post_image_base64 != null)) {
                            $post_upload_image_id = $this->uploadBase64Image($post_image_base64, $post_image_name);
                        }
                        $section_post = new PostSection;
                        $section_post->post_id = $post->id;
                        if ($request->related_post_id[$key] && $request->related_post_type == 1) {
                            $section_post->related_post_id = $request->related_post_id[$key];
                        }
                        $section_post->description = $detail_data;
                        if ($post_upload_image_id) {
                            $section_post->image_id = $post_upload_image_id;
                        }
                        $section_post->image_caption = $post_image_name;
                        $section_post->created_by = Auth::user()->id;
                        $section_post->created_at = Carbon::now();
                        $section_post->save();
                    }

                }
            }

            if ($request->post_tags) {
                $postTagsList = explode(",", $request->post_tags);

                foreach ($postTagsList as $key => $postInfodata) {
                    $isStay = PostTag::where('tag', $postInfodata)->first();
                    if (!$isStay) {
                        $PostTypeInfo = new PostTag();
                        $PostTypeInfo->tag = $postInfodata;
                        $PostTypeInfo->save();
                    }

                }
            }


        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed  to Create Post');
        }
        DB::commit();



        if ($request->post_type == 'save-preview') {

            $postDetails = Post::find($post->id);

            return view('backend.admin.post.post_preview')->with(compact('postDetails'));

        }

        return redirect()->back()->with('success', 'Post Created Successfully');

    }

    function postPreview(Request $request)
    {
        $postDetails = Post::find($request->id);
        return view('backend.admin.post.post_preview')->with(compact('postDetails'));
    }


    public function draftList()
    {
        $common_data = new Array_();
        $common_data->title = 'Draft Post';
        $draft_list = Post::where('post_status', 0)->where('deleted', 0)->get();
        return view('backend.admin.post.draft_post_list')->with(compact('draft_list', 'common_data'));
    }

    public function publishRequest(Request $request){
        $postId= $request->post_id;
        $findPost=Post::find($postId);
        $findPost->post_status=2;
        $findPost->save();
        return redirect()->back()->with('success','successfully Publish Request Send');
    }

    public function postPublish(Request $request){
        $postId= $request->post_id;
        $findPost=Post::find($postId);
        $findPost->post_status=1;
        $findPost->publish_at=Carbon::now();
        $findPost->save();
        return redirect()->back()->with('success','Successfully Post Published ');
    }

    public function postEdit(Request $request)
    {
        $common_data = new Array_();
        $common_data->title = 'Edit Article';
        $imgList = MediaImage::orderBy('id', 'desc')->get();
        $post_info = Post::with('postSection')->find($request->post_id);
        $division = BdDivision::get();
        $category_list = [];
        $subcategory_list = [];
        $child_category_list = [];
        $publishPostList = Post::where('post_status', 1)->where('deleted', 0)->select('id', 'title')->get();

        if ($post_info->post_category_id) {
            $category_info = PostCategory::find($post_info->post_category_id);
            $category_list = PostCategory::where('language', $category_info->language)->where('deleted', 0)->get();
            $subcategory_list = PostSubCategory::where(['post_category_id' => $post_info->post_category_id, 'language' => $category_info->language])->where('deleted', 0)->get();
            $child_category_list = PostChildCategory::where(['post_sub_category_id' => $post_info->post_sub_category_id, 'language' => $category_info->language])->where('deleted', 0)->get();

        }
        $district_list = [];
        $thana_list = [];
        if ($post_info->division_id && $post_info->district_id) {
            $district_list = BdDistrict::where('division_id', $post_info->division_id)->get();
            if ($post_info->thana_id) {
                $thana_list = BdThana::where('district_id', $post_info->district_id)->get();
            }

        }

        return view('backend.admin.post.post_edit')->with(compact('post_info', 'division', 'district_list', 'thana_list', 'common_data', 'imgList', 'category_list', 'subcategory_list', 'child_category_list', 'publishPostList'));

    }

    public function postSetPending(Request $request)
    {
        $info = Post::where('id', $request->post_id)->update(['post_status' => 2]);
        if ($info) {
            return redirect()->back()->with('success', 'Successfully Updated Status');
        } else {
            return redirect()->back()->with('error', 'Unable To Updated Status');
        }

    }

    public function postSetUnPublish(Request $request)
    {
        $info = Post::where('id', $request->post_id)->update(['post_status' => 3]);
        if ($info) {
            return redirect()->back()->with('success', 'Successfully UnPublished Post');
        } else {
            return redirect()->back()->with('error', 'Unable To UnPublished Post');
        }
    }


    public function searchPlacePostList(Request $request)
    {

        $src_type = $request->src_type;
        $colum = $request->colum;
        $status = $request->status;
        $src_by_status = $request->src_by_status;

        if (isset($request->start_date) && ($request->start_date != '')) {
            $start_date = Carbon::make($request->start_date)->startOfDay();
        } else {
            $start_date = null;
        }
        if (isset($request->end_date) && ($request->end_date != '')) {
            $end_date = Carbon::make($request->end_date)->endOfDay();
        } else {
            $end_date = null;
        }

        $language = $request->language;


        $common_data = new Array_();
        $common_data->status = $status;


        if (isset($colum) && !$colum == '') {
            $postList = Post::where([[$colum, '=', 1],
                ['language', '=', $language],
                ['post_status', '=', 1],
                ['deleted', '=', 0]])
                ->when($src_type == 'date', function ($q) use ($request, $start_date, $end_date) {
                    $q->whereBetween('publish_at', [$start_date, $end_date]);
                })
                ->when($src_type == 'reporter', function ($q) use ($request) {
                    $q->where('author_id', $request->reporter_id);
                })
                ->when($src_type == 'category', function ($q) use ($request) {
                    if ($request->post_child_category_id) {
                        $q->where('post_child_category_id', $request->post_child_category_id);
                    } elseif ($request->post_sub_category_id) {
                        $q->where('post_sub_category_id', $request->post_sub_category_id);
                    } elseif ($request->post_child_category_id) {
                        $q->where('post_child_category_id', $request->post_child_category_id);
                    }
                })
                ->when($src_type == 'location', function ($q) use ($request) {
                    if ($request->thana_id) {
                        $q->where('thana_id', $request->thana_id);
                    } elseif ($request->district_id) {
                        $q->where('thana_id', $request->district_id);
                    } elseif ($request->division_id) {
                        $q->where('division_id', $request->division_id);
                    }
                })
                ->get();
        } elseif (isset($src_by_status) && !$src_by_status == '') {
            $postList = Post::where([
                ['language', '=', $language],
                ['post_status', '=', $src_by_status],
                ['deleted', '=', 0]])
                ->when($src_type == 'date', function ($q) use ($request, $start_date, $end_date) {
                    $q->whereBetween('publish_at', [$start_date, $end_date]);
                })
                ->when($src_type == 'reporter', function ($q) use ($request) {
                    $q->where('author_id', $request->reporter_id);
                })
                ->when($src_type == 'category', function ($q) use ($request) {
                    if ($request->post_child_category_id) {
                        $q->where('post_child_category_id', $request->post_child_category_id);
                    } elseif ($request->post_sub_category_id) {
                        $q->where('post_sub_category_id', $request->post_sub_category_id);
                    } elseif ($request->post_child_category_id) {
                        $q->where('post_child_category_id', $request->post_child_category_id);
                    }
                })
                ->when($src_type == 'location', function ($q) use ($request) {
                    if ($request->thana_id) {
                        $q->where('thana_id', $request->thana_id);
                    } elseif ($request->district_id) {
                        $q->where('thana_id', $request->district_id);
                    } elseif ($request->division_id) {
                        $q->where('division_id', $request->division_id);
                    }
                })
                ->get();
        }

        return view('backend.admin.post.jspage._featured_wise_post_list')->with(compact('postList'))->render();

    }

    public function getSrcPostLIst(Request $request){

        $postList=Post::where('post_status',$request->post_status)->where('title','like','%'.$request->title.'%')->get();
        return view('backend.admin.post.jspage._featured_wise_post_list')->with(compact('postList'))->render();

    }


    public function allPublishPostList()
    {
        $common_data = new Array_();
        $common_data->title = 'All Publish Post';
        $postList = Post::where([['post_status', '=', 1], ['deleted', '=', 0]])->get();
        $division = BdDivision::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        return view('backend.admin.post.all_publish_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));
    }


    public function featured()
    {
        $common_data = new Array_();
        $common_data->title = 'Publish Featured Post';
        $common_data->status = 'Featured Post';
        $common_data->post_src_by = 'is_featured';
        $division = BdDivision::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        $postList = Post::where([['is_featured', '=', 1], ['post_status', '=', 1], ['deleted', '=', 0]])->get();
        return view('backend.admin.post.featured_wise_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));
    }

    public function featuredLeft()
    {
        $common_data = new Array_();
        $common_data->title = 'Publish Featured Left post';
        $common_data->status = 'Left Featured';
        $common_data->post_src_by = 'is_featured_left';
        $division = BdDistrict::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        $postList = Post::where([['is_featured_left', '=', 1], ['post_status', '=', 1], ['deleted', '=', 0]])->get();
        return view('backend.admin.post.featured_wise_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));
    }

    public function featuredRight()
    {
        $common_data = new Array_();
        $common_data->title = 'Publish Featured Right post';
        $common_data->status = 'Right Featured';
        $common_data->post_src_by = 'is_featured_right';
        $division = BdDistrict::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        $postList = Post::where([['is_featured_right', '=', 1], ['post_status', '=', 1], ['deleted', '=', 0]])->get();
        return view('backend.admin.post.featured_wise_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));
    }

    public function breaking()
    {
        $common_data = new Array_();
        $common_data->title = 'Breaking News post';
        $common_data->status = 'Breaking Post';
        $common_data->post_src_by = 'is_featured_right';
        $division = BdDistrict::get();
        $reporter = User::get()->take(3);
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $postList = Post::where([['is_breaking_news', '=', 1], ['post_status', '=', 1], ['deleted', '=', 0]])->get();

        return view('backend.admin.post.featured_wise_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));
    }

    public function unPublishPostList()
    {
        $common_data = new Array_();
        $common_data->title = 'UnPublish Post';
        $postList = Post::where([['post_status', '=', 3], ['deleted', '=', 0]])->get();
        $division = BdDivision::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        return view('backend.admin.post.unpublish_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));

    }

    public function pendingPostList()
    {
        $common_data = new Array_();
        $common_data->title = 'Pending Post';
        $postList = Post::where([['post_status', '=', 2], ['deleted', '=', 0]])->get();
        $division = BdDivision::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        return view('backend.admin.post.pending_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));

    }

    public function schedulePostList()
    {
        $common_data = new Array_();
        $common_data->title = 'Publish Schedule Post';
        $common_data->status = 'Schedule Post';
        $common_data->post_src_by = 'is_schedule';
        $division = BdDivision::get();
        $category = PostCategory::where('deleted', 0)->where('language', 'bn')->get();
        $reporter = User::get()->take(3);
        $postList = Post::where([['is_schedule', '=', 1], ['deleted', '=', 0]])->get();
        return view('backend.admin.post.schedule_post_list')->with(compact('postList', 'common_data', 'division', 'category', 'reporter'));

    }


    public function postUpdate(Request $request)
    {

        $request->validate([
            "title" => 'required',
            "first_description" => 'required',
            "slug" => 'required',
            "fetature_img" => 'required',
            "post_category_id" => 'required',
        ]);
        DB::beginTransaction();
        try {
            if ($request->post_type == 'edit') {
                $post_status = 0;
            } else {
                $post_status = 1;
            }
            $is_base64 = str_contains($request->fetature_img, "base64");

            if (is_string($request->fetature_img) && $is_base64) {

                $fetature_img_id = $this->uploadBase64Image($request->fetature_img, $request->title);

            } else {
                $fetature_img_id = $request->fetature_img;
            }

            $post = Post::find($request->post_id);
            $post->language = $request->language;
            $post->related_post_type = $request->related_post_type;
            $post->post_category_id = $request->post_category_id;
            $post->post_sub_category_id = $request->post_sub_category_id;
            $post->post_child_category_id = $request->post_child_category_id;
            $post->division_id = $request->division_id;
            $post->district_id = $request->district_id;
            $post->thana_id = $request->thana_id;
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->subtitle = $request->subtitle;
            $post->first_description = $request->first_description;
            $post->second_description = $request->second_description;
            $post->seo_meta_keyword = $request->meta_tags;
            $post->post_tags = $request->post_tags;
            $post->seo_meta_description = $request->meta_description;
            $post->featured_image_id = $fetature_img_id;
            $post->youtube_video_link = $request->video_link;
            $post->soundcloud_audio_link = $request->audio_link;
            if ($request->placement == 'featured') {
                $post->is_featured = 1;
                $post->is_featured_left = 0;
                $post->is_featured_right = 0;
            } else if ($request->placement == 'left') {
                $post->is_featured_left = 1;
                $post->is_featured_right = 0;
                $post->is_featured = 0;
            } else if ($request->placement == 'right') {
                $post->is_featured_right = 1;
                $post->is_featured = 0;
                $post->is_featured_left = 0;
            } else {
                $post->is_featured_right = 0;
                $post->is_featured = 0;
                $post->is_featured_left = 0;
            }
            if ($request->breaking_placement) {
                $post->is_breaking_news = 1;
            } else {
                $post->is_breaking_news = 0;
            }
//            $post->post_status = $post_status;
            if ($request->isSchedule) {
                $post->is_schedule = 1;
//            $post->publish_at = $request->schedule_post_date;
            } else {
                $post->is_schedule = 0;
            }
//            $post->author_id = Auth::user()->id;

            $post->created_by = Auth::user()->id;
            $upload_post = $post->save();

            if(isset($request->post_section_id)){
                PostSection::where('post_id', $request->post_id)->whereNotIn('id', $request->post_section_id)->delete();
            }


            if ($request->another_post_details) {

                foreach ($request->another_post_details as $key => $detail_data) {
                    $post_image_base64 = $request->post_img[$key];
                    $post_image_name = $request->img_caption[$key];
                    $post_upload_image_id = '';

                    if (isset($request->post_section_id[$key])) {
                        $is_it_base64 = str_contains($post_image_base64, "base64");
                        $section_post = PostSection::find($request->post_section_id[$key]);
                        $section_post->description = $detail_data;
                        if ($is_it_base64) {
                            if (is_string($post_image_base64) && isset($post_image_base64) && ($post_image_base64 != '') && ($post_image_base64 != null)) {
                                $post_upload_image_id = $this->uploadBase64Image($post_image_base64, $post_image_name);
                            }
                            $section_post->image_id = $post_upload_image_id;
                        } else {
                            $section_post->image_id = $post_image_base64;
                        }

                        $section_post->image_caption = $post_image_name;
                        $section_post->related_post_id = $request->related_post_id[$key];
                        $section_post->save();
                    } else {
                        if ($detail_data) {
                            if (is_string($post_image_base64) && isset($post_image_base64) && ($post_image_base64 != '') && ($post_image_base64 != null)) {
                                $post_upload_image_id = $this->uploadBase64Image($post_image_base64, $post_image_name);
                            }
                            $section_post_add = new PostSection;
                            $section_post_add->post_id = $post->id;
                            $section_post_add->description = $detail_data;
                            $section_post_add->image_id = $post_upload_image_id;
                            $section_post_add->related_post_id = $request->related_post_id[$key];
                            $section_post_add->image_caption = $post_image_name;
                            $section_post_add->created_by = Auth::user()->id;
                            $section_post_add->created_at = Carbon::now();
                            $section_post_add->save();
                        }

                    }


                }
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed  to Update Post');
        }
        DB::commit();

        return redirect()->back()->with('success', 'Post Updated Successfully');
    }


    public function uploadBase64Image($img, $img_name)
    {
        $base64Image = $img;
        if (is_string($base64Image) && isset($base64Image) && ($base64Image != '') && ($base64Image != null)) {
            $ext = explode('/', mime_content_type($base64Image))[1];
            $logo_url = "media_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/media_images/';
            $date_directory = date('Y') . '/' . date('m') . '/' . date('d') . '/';
            $filePath = $logo_directory . $date_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/media_images/' . $date_directory . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }
            $logo_image = Image::make(file_get_contents($base64Image))->resize(800, 450);
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);


            $media_images = new MediaImage();
            $media_images->image_full_path = $db_media_img_path;
            $media_images->image = $logo_url;
            $media_images->name = $img_name;
            $media_images->alt_text = $img_name;
            $media_images->created_by = Auth::id();
            $media_images->created_at = Carbon::now();
            $media_images->save();
            $upload_image_id = $media_images->id;
            return $upload_image_id;
        } else {
            return 0;
        }
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


}
