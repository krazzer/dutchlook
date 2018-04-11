<?php


namespace Website\DataTables;


use KikCMS\Classes\DataTable\DataTable;
use Website\Forms\ClientForm;
use Website\Models\Client;

class Clients extends DataTable
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
    public function getFormClass(): string
    {
        return ClientForm::class;
    }

    /**
     * @inheritdoc
     */
    public function getLabels(): array
    {
        return ['klant', 'klanten'];
    }

    /**
     * @inheritdoc
     */
    public function getTableFieldMap(): array
    {
        return [
            Client::FIELD_ID   => 'Id',
            Client::FIELD_NAME => 'Naam',
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