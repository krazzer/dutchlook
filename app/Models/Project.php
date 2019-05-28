<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;
use Phalcon\Mvc\Model\Resultset\Simple;

/**
 * @property ProjectImage[]|Simple $projectImages
 */
class Project extends Model
{
    const TABLE = 'dutchlook_project';
    const ALIAS = 'pr';

    const FIELD_ID          = 'id';
    const FIELD_NAME        = 'name';
    const FIELD_CATEGORY_ID = 'category_id';
    const FIELD_CLIENT_ID   = 'client_id';
    const FIELD_CREATED     = 'created';

    const IMAGES = 'projectImages';

    /**
     * @inheritdoc
     */
    public function initialize()
    {
        parent::initialize();

        $this->hasMany(self::FIELD_ID, ProjectImage::class, ProjectImage::FIELD_PROJECT_ID, ['alias' => self::IMAGES]);
        $this->skipAttributesOnCreate([self::FIELD_CREATED]);
    }

    /**
     * @return null|ProjectImage
     */
    public function getFirstImage(): ?ProjectImage
    {
        return $this->projectImages->getFirst();
    }
}