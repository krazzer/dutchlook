<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use Website\Forms\HomeImageForm;
use Website\Models\HomeImage;

class HomeImages extends DataTable
{
    /**
     * @inheritdoc
     */
    public function getModel(): string
    {
        return HomeImage::class;
    }

    /**
     * @inheritdoc
     */
    public function getFormClass(): string
    {
        return HomeImageForm::class;
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
            HomeImage::FIELD_ID       => 'Id',
            HomeImage::FIELD_IMAGE_ID => 'Afbeelding',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        $this->setFieldFormatting(HomeImage::FIELD_IMAGE_ID, [$this, 'formatFinderImage']);
    }
}