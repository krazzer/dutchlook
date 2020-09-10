<?php


namespace Website\Services;


use KikCmsCore\Services\DbService;
use KikCMS\Classes\Phalcon\Injectable;
use Phalcon\Mvc\Model\Query\Builder;
use Website\Models\HomeImage;
use Website\ObjectList\HomeImageList;

/**
 * @property DbService $dbService
 */
class HomeImageService extends Injectable
{
    /**
     * @return HomeImageList
     */
    public function getList(): HomeImageList
    {
        $query = (new Builder)
            ->from(HomeImage::class)
            ->orderBy(HomeImage::FIELD_DISPLAY_ORDER);

        return $this->dbService->getObjectList($query, HomeImageList::class);
    }
}