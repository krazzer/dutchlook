<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\MediaResizeBase;
use Phalcon\Image\Adapter;

class MediaResize extends MediaResizeBase
{
    /**
     * Will automatically resize an image called by /finder/thumb/example/1 (where 1 is the finder_file id)
     *
     * @param Adapter $image
     */
    public function resizeExample(Adapter $image)
    {
        $this->resize($image, 50, 50);
    }

    /**
     * Will automatically resize an image called by /finder/thumb/example/1 (where 1 is the finder_file id)
     *
     * @param Adapter $image
     */
    public function resizeGallery(Adapter $image)
    {
        $this->resize($image, 1200, 1200);
    }
}