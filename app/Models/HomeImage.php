<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;

class HomeImage extends Model
{
    const TABLE = 'dutchlook_home_image';
    const ALIAS = 'hi';

    const FIELD_ID            = 'id';
    const FIELD_IMAGE_ID      = 'image_id';
    const FIELD_DISPLAY_ORDER = 'display_order';
}