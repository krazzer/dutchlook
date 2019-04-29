<?php

namespace Website\ObjectList;

use KikCmsCore\Classes\ObjectList;
use Website\Models\HomeImageRandom;

class HomeImageRandomList extends ObjectList
{
    /**
     * @inheritdoc
     * @return HomeImageRandom|false
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @inheritdoc
     * @return HomeImageRandom|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @inheritdoc
     * @return HomeImageRandom|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @inheritdoc
     * @return HomeImageRandom|false
     */
    public function getLast()
    {
        return parent::getLast();
    }
}
