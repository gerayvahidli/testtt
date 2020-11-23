<?php

namespace App\Helpers;

use App\City;
use App\Country;
use App\ExternalProgram;
use App\Region;
use App\User;
use App\UserLog;
use League\Flysystem\Filesystem;
use League\Flysystem\ZipArchive\ZipArchiveAdapter;
use Carbon\Carbon;
use Auth;

class Helper
{

    public static  function getOnlyNumericValuesFromArray($array)
    {
        foreach ($array as $key => $value) {
            // Check if the value is numeric
            if (is_numeric($value)) {
                $newArray[$key] = $value;
            }
        }

        return $newArray;
    }

    public static function getMonths($months = null)
    {
        if (is_null($months))
        {
            return null;
        }

        //explode month column value for make array and get only numeric values
        $months_in_numbers = json_decode($months) ;

        $month_in_words = "";
        foreach ($months_in_numbers as $month)
        {
            //sprintf("%02d",$month) doing : if month is 1 it converted to 01 format
            $month_in_words .= __('month.'.sprintf("%02d", $month))." - ";
        }

        //rtrim($month_in_words,", ") doing: delete last comma fro string
        return rtrim($month_in_words, "- ") ;

    }


    public static function getAuthors($authors)
    {

       $authors =  json_decode($authors);

       if (is_null($authors))
       {
           return null;
       }

        $authors_string = "";
        foreach ($authors as $author)
        {
            $authors_string .= $author.", ";
        }


        return rtrim($authors_string, ", ") ;
    }


}
