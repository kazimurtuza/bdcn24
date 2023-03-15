<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CommonHelper
{
    public static function getUploadPath()
    {
        return public_path('storage');
    }

    public static function uploadFile($file, $name, $folder_name)
    {
        $url = $file->storeAs($folder_name, $name);
        return "storage/" . $url;
    }

    public static function saveUrlFile($url, $name, $folder_name)
    {
        $full_name = $folder_name.'/'.$name;
        Storage::disk('public')->put($full_name, file_get_contents($url));
        return "storage/" . $full_name;
    }

    public static function getInvoiceFooterText($initial_text)
    {
        $text = "<div style='text-align: center;'>".$initial_text.". Powered By: <b>Retinasoft</b> | Hotline: +8801877756677 | <a href='http://www.retinasoft.com.bd' target='_blank'>http://www.retinasoft.com.bd</a></div>";
        return $text;
    }

    public static function getRealStringSubStr($string, $limit, $extra = '...')
    {
        $string = strip_tags($string);
        if (strlen($string) > $limit) {
            $string = substr($string, 0, $limit).$extra;
        }
        return $string;
    }

    public static function showDate($date)
    {
        if ($date != '') {
            $date = Carbon::make($date)->format('F j, Y');
        }
        return $date;
    }

    public static function getDayDate($date)
    {
        if ($date != '') {
            $date = Carbon::make($date)->format('d');
        }
        return $date;
    }

    public static function getShortMonth($date)
    {
        if ($date != '') {
            $date = Carbon::make($date)->format('M');
        }
        return $date;
    }

    public static function showDateTime($date)
    {
        if ($date != '') {
            $date = Carbon::make($date)->format('F j, Y, g:i a');
        }
        return $date;
    }

    public static function showViewMore($string, $limit)
    {
        $string = strip_tags($string);
        if (strlen($string) > $limit) {
            return true;
        }
        return false;
    }

    public static function removeUnderscore($string)
    {
        $string = str_replace("_", " ", $string);
        return ucwords($string);
    }

    public static function dateRangeItem(){
        return config('sitedata.day_range_list');
    }

    public static function getPaymentMethods(){
        return config('sitedata.payment_methods');
    }


}
