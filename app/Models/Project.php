<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;

class Project extends Model
{
    const TABLE = 'dutchlook_project';
    const ALIAS = 'pr';

    const FIELD_ID          = 'id';
    const FIELD_NAME        = 'name';
    const FIELD_CATEGORY_ID = 'category_id';
    const FIELD_CLIENT_ID   = 'client_id';
    const FIELD_CREATED     = 'created';
}