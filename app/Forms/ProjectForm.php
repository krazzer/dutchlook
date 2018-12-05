<?php


namespace Website\Forms;


use KikCMS\Classes\WebForm\DataForm\DataForm;
use Phalcon\Validation\Validator\PresenceOf;
use Website\DataTables\ProjectImages;
use Website\Models\Project;
use Website\Services\CategoryService;
use Website\Services\ClientService;

/**
 * @property ClientService $clientService
 * @property CategoryService $categoryService
 */
class ProjectForm extends DataForm
{
    /** @inheritdoc */
    protected $saveCreatedAt;

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
    protected function initialize()
    {
        $categoryNameMap = $this->categoryService->getNameMap();
        $clientNameMap = $this->clientService->getNameMap();

        $this->addTextField(Project::FIELD_NAME, 'Naam', [new PresenceOf]);
        $this->addSelectField(Project::FIELD_CATEGORY_ID, 'Categorie', $categoryNameMap, [new PresenceOf])->addPlaceholder();
        $this->addSelectField(Project::FIELD_CLIENT_ID, 'Klant', $clientNameMap, [new PresenceOf])->addPlaceholder();
        $this->addDataTableField(Project::IMAGES, ProjectImages::class, 'Afbeeldingen');
    }
}