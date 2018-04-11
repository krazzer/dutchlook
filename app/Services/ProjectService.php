<?php


namespace Website\Services;


use KikCMS\Models\Page;
use KikCmsCore\Services\DbService;
use Phalcon\Di\Injectable;
use Phalcon\Mvc\Model\Query\Builder;
use Website\Models\Project;
use Website\ObjectList\ProjectMap;

/**
 * @property DbService $dbService
 */
class ProjectService extends Injectable
{
    /**
     * @param Page $page
     * @return ProjectMap
     */
    public function getByCategoryPage(Page $page): ProjectMap
    {
        $query = (new Builder)
            ->from(Project::class)
            ->where(Project::FIELD_CATEGORY_ID . ' = :id:', ['id' => $page->getId()]);

        return $this->dbService->getObjectMap($query, ProjectMap::class);
    }
}