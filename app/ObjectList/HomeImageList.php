<?php


namespace Website\ObjectList;


use KikCmsCore\Classes\ObjectList;
use Website\Models\HomeImage;

class HomeImageList extends ObjectList
{
    /**
     * @param int|string $key
     * @return HomeImage|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @return HomeImage|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @return HomeImage|false
     */
    public function getLast()
    {
        return parent::getLast();
    }

    /**
     * @return HomeImage|false
     */
    public function current()
    {
        return parent::current();
    }
}