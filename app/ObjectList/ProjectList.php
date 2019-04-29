<?php

namespace Website\ObjectList;

use KikCmsCore\Classes\ObjectList;
use Website\Models\Project;

class ProjectList extends ObjectList
{
    /**
     * @inheritdoc
     * @return Project|false
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @inheritdoc
     * @return Project|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @inheritdoc
     * @return Project|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @inheritdoc
     * @return Project|false
     */
    public function getLast()
    {
        return parent::getLast();
    }
}
