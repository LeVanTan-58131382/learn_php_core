<?php
namespace App;

class getNewString{
    public function sluggify($string, $separator = "_", $maxLength = 90)
    {
        $title = iconv("UTF-8", "ASCII//TRANSLIT//IGNORE", $string);
        $title = preg_replace("%[^-?+|\w]%", '-', $title);
        $title = strtoLower(trim(substr($title, 0, $maxLength)));
        $title = preg_replace("/[\/_|+-]+/", $separator, $title);

        return $title;
    }
}