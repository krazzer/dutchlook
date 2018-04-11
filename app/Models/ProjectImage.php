<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;

class ProjectImage extends Model
{
    const TABLE = 'dutchlook_project_image';
    const ALIAS = 'pi';

    const FIELD_ID            = 'id';
    const FIELD_PROJECT_ID    = 'project_id';
    const FIELD_IMAGE_ID      = 'image_id';
    const FIELD_DISPLAY_ORDER = 'display_order';
}