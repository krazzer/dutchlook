<?php

namespace Website\ObjectList;

use KikCmsCore\Classes\ObjectList;
use Website\Models\ProjectImage;

class ProjectImageList extends ObjectList
{
    /**
     * @inheritdoc
     * @return ProjectImage|false
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @inheritdoc
     * @return ProjectImage|false
     */
    public function get($key)
    {
        return parent::get($key);
    }

    /**
     * @inheritdoc
     * @return ProjectImage|false
     */
    public function getFirst()
    {
        return parent::getFirst();
    }

    /**
     * @inheritdoc
     * @return ProjectImage|false
     */
    public function getLast()
    {
        return parent::getLast();
    }
}
