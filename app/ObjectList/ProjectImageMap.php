<?php


namespace Website\ObjectList;


use KikCmsCore\Classes\ObjectMap;
use Website\Models\ProjectImage;

class ProjectImageMap extends ObjectMap
{
    /**
     * @param int|string $key
     * @return ProjectImage|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @return ProjectImage|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @return ProjectImage|false
     */
    public function getLast()
    {
        return parent::getLast();
    }

    /**
     * @return ProjectImage|false
     */
    public function current()
    {
        return parent::current();
    }
}