<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;

class Client extends Model
{
    const TABLE = 'dutchlook_client';
    const ALIAS = 'c';

    const FIELD_ID   = 'id';
    const FIELD_NAME = 'name';

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int) $this->id;
    }
}