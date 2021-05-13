<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Website\Forms\HomeImageForm;
use Website\Models\HomeImage;
use Website\Models\HomeImageRandom;

class HomeImages extends DataTable
{
    /** @inheritdoc */
    protected $sortable = true;

    /**
     * @inheritdoc
     */
    public function getDefaultQuery(): BuilderInterface
    {
        $query = parent::getDefaultQuery();

        $query->columns([
            'hi.id',
            'hi.image_id',
            '(SELECT hir1.image_id FROM ' . HomeImageRandom::class . ' hir1 WHERE home_image_id = hi.id LIMIT 0, 1) AS image1',
            '(SELECT hir2.image_id FROM ' . HomeImageRandom::class . ' hir2 WHERE home_image_id = hi.id LIMIT 1, 2) AS image2',
            '(SELECT hir3.image_id FROM ' . HomeImageRandom::class . ' hir3 WHERE home_image_id = hi.id LIMIT 2, 3) AS image3',
            '(SELECT hir4.image_id FROM ' . HomeImageRandom::class . ' hir4 WHERE home_image_id = hi.id LIMIT 3, 4) AS image4',
            '(SELECT hir5.image_id FROM ' . HomeImageRandom::class . ' hir5 WHERE home_image_id = hi.id LIMIT 4, 5) AS image5',
        ]);

        return $query;
    }

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
            'image1'                  => '1e',
            'image2'                  => '2e',
            'image3'                  => '3e',
            'image4'                  => '4e',
            'image5'                  => '5e',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        $this->setFieldFormatting(HomeImage::FIELD_IMAGE_ID, [$this, 'formatFinderImage']);
        $this->setFieldFormatting('image1', [$this, 'formatFinderImage']);
        $this->setFieldFormatting('image2', [$this, 'formatFinderImage']);
        $this->setFieldFormatting('image3', [$this, 'formatFinderImage']);
        $this->setFieldFormatting('image4', [$this, 'formatFinderImage']);
        $this->setFieldFormatting('image5', [$this, 'formatFinderImage']);
    }
}