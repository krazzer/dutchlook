<?php


namespace Website\ObjectList;


use KikCmsCore\Classes\ObjectMap;
use Website\Models\Project;

class ProjectMap extends ObjectMap
{
    /**
     * @param int|string $key
     * @return Project|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @return Project|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @return Project|false
     */
    public function getLast()
    {
        return parent::getLast();
    }

    /**
     * @return Project|false
     */
    public function current()
    {
        return parent::current();
    }
}