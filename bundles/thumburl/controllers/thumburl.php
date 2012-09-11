<?php
/**
 * Thumburl
 *
 * @category Thumburl
 * @package  Thumburl
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */

/**
 * Thumburl Controller
 *
 * @category Controller
 * @package  Thumburl
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class Thumburl_Thumburl_Controller extends Controller
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        
        \Config::set('application.profiler', false);
    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param string $method     method
     * @param array  $parameters parameters
     * 
     * @return Response
     */
    public function __call($method, $parameters)
    {
        return Response::error('404');
    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param string $size image size
     * @param string $mode image mode
     * @param string $url  image url
     * 
     * @return Response
     */
    public function action_thumbnail($size, $mode, $url)
    {  
        $url = implode('/', array_diff(func_get_args(), array($size, $mode)));

        $thumb = new Thumburl();
        $response = $thumb->thumbnail($size, $mode, $url);
       var_dump($response);
        //require extension=php_fileinfo
        /*$finfo   = new finfo(FILEINFO_MIME);
        $headers = array(
            'Content-type' => $finfo->buffer($response),
        );
        return Response::make($response, 200, $headers);*/
    }
}
