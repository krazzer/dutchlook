<?php

namespace Website\ObjectList;

use KikCmsCore\Classes\ObjectMap;
use Website\Models\HomeImage;

class HomeImageMap extends ObjectMap
{
    /**
     * @inheritdoc
     * @return HomeImage|false
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @inheritdoc
     * @return HomeImage|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @inheritdoc
     * @return HomeImage|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @inheritdoc
     * @return HomeImage|false
     */
    public function getLast()
    {
        return parent::getLast();
    }
}
