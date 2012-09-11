<?php
/**
 * Thumburl Docs
 *
 * @category Thumburl
 * @package  Controller
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class Thumburl_Thumburl_Controller extends Controller
{
    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string   $method
     * @param  array    $parameters
     * @return Response
     */
    public function __call($method, $parameters)
    {
        return Response::error('404');
    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string   $size
     * @param  string   $url
     * @return Response
     */
    public function action_resize($size, $url)
    {
        return 'a';
    }

}
