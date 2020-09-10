<?php


namespace Website\Services;


use KikCMS\Models\Page;
use KikCMS\Models\PageLanguage;
use KikCmsCore\Services\DbService;
use KikCMS\Classes\Phalcon\Injectable;
use Phalcon\Mvc\Model\Query\Builder;

/**
 * @property DbService $dbService
 */
class CategoryService extends Injectable
{
    /**
     * @return array
     */
    public function getNameMap(): array
    {
        $query = (new Builder)
            ->from(['p' => Page::class])
            ->join(PageLanguage::class, 'pl.page_id = p.id', 'pl')
            ->columns([
                'pl.' . PageLanguage::FIELD_ID,
                'pl.' . PageLanguage::FIELD_NAME,
            ])
            ->inWhere(Page::FIELD_TEMPLATE, ['category'])
            ->orderBy(PageLanguage::FIELD_NAME);

        return $this->dbService->getAssoc($query);
    }
}