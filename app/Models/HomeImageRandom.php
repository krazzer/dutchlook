<?php

namespace Website\Models;

use KikCmsCore\Classes\Model;

class HomeImageRandom extends Model
{
    const TABLE = 'dutchlook_home_image_random';
    const ALIAS = 'hir';

    const FIELD_ID            = 'id';
    const FIELD_HOME_IMAGE_ID = 'home_image_id';
    const FIELD_IMAGE_ID      = 'image_id';
    const FIELD_DISPLAY_ORDER = 'display_order';

    /**
     * @inheritdoc
     */
    public function initialize()
    {
        parent::initialize();
    }
}
