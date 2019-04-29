<?php

namespace Website\ObjectList;

use KikCmsCore\Classes\ObjectList;
use Website\Models\Client;

class ClientList extends ObjectList
{
    /**
     * @inheritdoc
     * @return Client|false
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @inheritdoc
     * @return Client|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @inheritdoc
     * @return Client|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @inheritdoc
     * @return Client|false
     */
    public function getLast()
    {
        return parent::getLast();
    }
}
