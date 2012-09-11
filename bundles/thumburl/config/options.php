<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cache folder
    |--------------------------------------------------------------------------
    |
    |Cache files location
    |
    */

   'caching' => array(
        /**
         * Caching
         *
         * Globally enable caching for all assets, this is only recommended once an application
         * is live.
         */
        'enabled' => false,

        /**
         * Time
         *
         * The time in minutes to cache the assets for. By default it is set to one month, or 44640
         * minutes.
         */
        'time' => 44640,
    ),

    /*
    |--------------------------------------------------------------------------
    | Lib to images manipulation
    |--------------------------------------------------------------------------
    |
    |'Gd' or 'Imagick' or 'Gmagick'
    |
    */
   'lib' => 'Gd' ,

   /*
    |--------------------------------------------------------------------------
    | Mode
    |--------------------------------------------------------------------------
    |
    |THUMBNAIL_INSET or THUMBNAIL_OUTBOUND
    |
    | Imagine\Image\ImageInterface::THUMBNAIL_INSET
    | Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND
    |
    */
   'mode' => Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND ,
);
