<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use Website\Forms\ProjectImageForm;
use Website\Models\ProjectImage;

class ProjectImages extends DataTable
{
    /**
     * @inheritdoc
     */
    public function getModel(): string
    {
        return ProjectImage::class;
    }

    /**
     * @inheritdoc
     */
    public function getFormClass(): string
    {
        return ProjectImageForm::class;
    }

    /**
     * @inheritdoc
     */
    public function getLabels(): array
    {
        return ['afbeelding', 'afbeeldingen'];
    }

    /**
     * @inheritdoc
     */
    public function getTableFieldMap(): array
    {
        return [
            ProjectImage::FIELD_ID       => 'Id',
            ProjectImage::FIELD_IMAGE_ID => 'Afbeelding',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        $this->setFieldFormatting(ProjectImage::FIELD_IMAGE_ID, [$this, 'formatFinderImage']);
    }
}