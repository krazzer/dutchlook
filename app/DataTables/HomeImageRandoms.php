<?php

namespace Website\DataTables;

use KikCMS\Classes\DataTable\DataTable;
use Website\Forms\HomeImageRandomForm;
use Website\Models\HomeImageRandom;

class HomeImageRandoms extends DataTable
{
    /**
     * @inheritdoc
     */
    public function getFormClass(): string
    {
        return HomeImageRandomForm::class;
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
    public function getModel(): string
    {
        return HomeImageRandom::class;
    }

    /**
     * @inheritdoc
     */
    public function getTableFieldMap(): array
    {
        return [
            HomeImageRandom::FIELD_ID       => 'Id',
            HomeImageRandom::FIELD_IMAGE_ID => 'Afbeelding',
        ];
    }

    /**
     * @inheritdoc
     */
    public function initialize()
    {
        $this->setFieldFormatting(HomeImageRandom::FIELD_IMAGE_ID, [$this, 'formatFinderImage']);
    }
}
