<?php


namespace Website\ObjectList;


use KikCmsCore\Classes\ObjectMap;
use Website\Models\Client;

class ClientMap extends ObjectMap
{
    /**
     * @param int|string $key
     * @return Client|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @return Client|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @return Client|false
     */
    public function getLast()
    {
        return parent::getLast();
    }

    /**
     * @return Client|false
     */
    public function current()
    {
        return parent::current();
    }
}