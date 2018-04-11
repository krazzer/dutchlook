<?php


namespace Website\Forms;


use KikCMS\Classes\WebForm\DataForm\DataForm;
use Phalcon\Validation\Validator\PresenceOf;
use Website\Models\Client;

class ClientForm extends DataForm
{
    /**
     * @inheritdoc
     */
    public function getModel(): string
    {
        return Client::class;
    }

    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        $this->addTextField(Client::FIELD_NAME, 'Naam', [new PresenceOf]);
    }
}