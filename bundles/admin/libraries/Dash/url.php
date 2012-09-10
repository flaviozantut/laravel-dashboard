<?php namespace Dash;

class Url
{
    /**
     * switch site language
     *
     * @param  string $lang
     * @param  string $url
     * @return string
     */
    public static function switchUri($lang,  $url = '')
    {
        $url = $url or \URL::full();

        $idiomas = implode("|" , \Config::get('application.languages'));
        $url = preg_replace ( "/\/({$idiomas})\//" , "/$lang/" ,  $url);

        return $url;
    }

}
