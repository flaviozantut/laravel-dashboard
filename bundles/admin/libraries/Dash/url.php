<?php
/**
 * Dash lib
 *
 * @category Admin
 * @package  Dash
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
namespace Dash;

 /**
 * Url Class
 *
 * @category Admin
 * @package  Dash
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class Url
{
    /**
     * switch site language
     *
     * @param string $lang Idioma
     * @param string $url  Site url
     *
     * @return string
     */
    public static function switchUri($lang,  $url = '')
    {
        $url = $url or \URL::full();

        $idiomas = implode("|", \Config::get('application.languages'));
        $url = preg_replace("/\/({$idiomas})\//", "/$lang/",  $url);

        return $url;
    }

}
