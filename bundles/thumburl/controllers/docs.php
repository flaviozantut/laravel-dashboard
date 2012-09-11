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
 * Thumburl Docs
 * 
 * @category Docs
 * @package  Thumbur
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class Thumburl_Docs_Controller extends Controller
{
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
     * Get docs
     * 
     * @return response
     */
    public function action_index()
    {
        return 'Doc';
    }

}
