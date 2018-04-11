<?php


namespace Website\ObjectList;


use KikCmsCore\Classes\ObjectMap;
use Website\Models\HomeImage;

class HomeImageMap extends ObjectMap
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