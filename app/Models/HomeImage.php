<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;
use Phalcon\Mvc\Model\Resultset\Simple;

/**
 * @property HomeImageRandom[]|Simple randomImages
 */
class HomeImage extends Model
{
    const TABLE = 'dutchlook_home_image';
    const ALIAS = 'hi';

    const FIELD_ID            = 'id';
    const FIELD_IMAGE_ID      = 'image_id';
    const FIELD_DISPLAY_ORDER = 'display_order';

    /**
     * @inheritdoc
     */
    public function initialize()
    {
        parent::initialize();

        $this->hasMany(self::FIELD_ID, HomeImageRandom::class, HomeImageRandom::FIELD_HOME_IMAGE_ID, ['alias' => 'randomImages']);
    }
}