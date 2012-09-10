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
 * Upload Class
 *
 * @category Admin
 * @package  Dash
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class Upload
{
    /**
    * Save file
    * 
    * @param string $field 'image' fild to upload
    * @param string $path  path to file save
    * @param string $name  file name
    * 
    * @return string fila name
    */
    public static function save($field = 'image', $path = 'public/uploads', $name = false)
    {
        $input = \Input::file($field);
        if ( $input['tmp_name'] ) {
            $path = path('public') . \Config::get('admin::settings.upload_path');
            if ( self::checkPath($path) ) {
                
                $ext = \File::extension($input['name']);
                $filename = md5_file($input['tmp_name']) . '.' . $ext;
                if (\Input::get($field) != $filename) {
                    \File::delete($path . '/' . \Input::get($field));
                    if ( \Input::upload($field, $path, $filename) ) {
                        return $filename;
                    }
                } else {
                    return \Input::get($field);
                }
                
            } else {
                return false;
            }
        } else {
            return \Input::get($field);
        }
        
        
    }


    /**
    * Verifica se o caminho existe, senão o cria
    * 
    * @param string $path Path to upload
    * 
    * @return boolean Path
    */
    public static function checkPath($path)
    {   
        
        //return true;
        if ( is_dir($path) ) {
            return true;
        } else {
            if ( mkdir($path) ) {
                return true;
            } else {
                return false;  
            }
        }
    }
   

}
