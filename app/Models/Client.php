<?php


namespace Website\Models;


use KikCmsCore\Classes\Model;
use Phalcon\Mvc\Model\Resultset\Simple;

/**
 * @property Simple|Project[] $projects
 */
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

    /**
     * @inheritdoc
     */
    public function initialize()
    {
        parent::initialize();

        $this->hasMany(self::FIELD_ID, Project::class, Project::FIELD_CLIENT_ID, ['alias' => 'projects']);
    }

    /**
     * @return null|ProjectImage
     */
    public function getFirstImage(): ?ProjectImage
    {
        /** @var $firstProject Project */
        if ( ! $firstProject = $this->projects->getFirst()) {
            return null;
        }

        return $firstProject->getFirstImage();
    }

    /**
     * Get all imageId's of all the productImages of all the projects for the client, excluding the first image
     *
     * @return array
     */
    public function getAllImageIdsButFirst(): array
    {
        $imageIds = [];

        foreach ($this->projects as $i => $project){
            foreach ($project->images as $j => $image){
                if($i == 0 && $j == 0){
                    continue;
                }

                $imageIds[] = $image->image_id;
            }
        }

        return $imageIds;
    }
}