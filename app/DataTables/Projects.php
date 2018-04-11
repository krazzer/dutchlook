<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use KikCMS\Models\PageContent;
use KikCMS\Models\PageLanguage;
use Website\Forms\ProjectForm;
use Website\Models\Project;

class Projects extends DataTable
{
    public function getDefaultQuery()
    {
        return parent::getDefaultQuery()
            ->columns([
                Project::FIELD_ID,
                Project::FIELD_NAME,
                PageLanguage::FIELD_NAME . ' as category',
            ])
            ->leftJoin(PageContent::class, 'pc.page_id = pr.category_id', 'pc');
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