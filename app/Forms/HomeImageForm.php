<?php


namespace Website\Forms;


use KikCMS\Classes\WebForm\DataForm\DataForm;
use Phalcon\Validation\Validator\PresenceOf;
use Website\DataTables\HomeImageRandoms;
use Website\Models\HomeImage;

class HomeImageForm extends DataForm
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
    protected function initialize()
    {
        $this->addFileField(HomeImage::FIELD_IMAGE_ID, 'Afbeelding', [new PresenceOf]);
        $this->addDataTableField('randomImages', HomeImageRandoms::class, 'Random opvolg afbeeldingen');
    }
}