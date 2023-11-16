<?php


namespace Website\Forms;


use KikCMS\Classes\WebForm\DataForm\DataForm;
use Phalcon\Filter\Validation\Validator\PresenceOf;
use Website\Models\ProjectImage;

class ProjectImageForm extends DataForm
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
    protected function initialize()
    {
        $this->addFileField(ProjectImage::FIELD_IMAGE_ID, 'Afbeelding', [new PresenceOf]);
    }
}