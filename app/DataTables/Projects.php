<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use KikCMS\Models\PageLanguage;
use Website\Forms\ProjectForm;
use Website\Models\Project;

class Projects extends DataTable
{
    /**
     * @inheritdoc
     */
    public function getDefaultQuery()
    {
        return parent::getDefaultQuery()
            ->columns([
                'pr.' . Project::FIELD_ID,
                'pr.' . Project::FIELD_NAME,
                'pl.' . PageLanguage::FIELD_NAME . ' AS category',
            ])
            ->leftJoin(PageLanguage::class, 'pl.page_id = pr.category_id', 'pl');
    }

    /**
     * @inheritdoc
     */
    public function getModel(): string
    {
        return Project::class;
    }

    /**
     * @inheritdoc
     */
    public function getFormClass(): string
    {
        return ProjectForm::class;
    }

    /**
     * @inheritdoc
     */
    public function getLabels(): array
    {
        return ['project', 'projecten'];
    }

    /**
     * @inheritdoc
     */
    public function getTableFieldMap(): array
    {
        return [
            Project::FIELD_ID   => 'Id',
            Project::FIELD_NAME => 'Naam',
            'category'          => 'Categorie',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        // nothing yet
    }
}