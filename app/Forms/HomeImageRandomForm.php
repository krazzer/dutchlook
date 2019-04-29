<?php

namespace Website\Forms;

use KikCMS\Classes\WebForm\DataForm\DataForm;
use Phalcon\Validation\Validator\PresenceOf;
use Website\Models\HomeImageRandom;

class HomeImageRandomForm extends DataForm
{
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
    protected function initialize()
    {
        $this->addFileField(HomeImageRandom::FIELD_IMAGE_ID, 'Afbeelding', [new PresenceOf]);
    }
}
