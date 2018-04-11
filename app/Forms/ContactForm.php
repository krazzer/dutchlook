<?php


namespace Website\Forms;


use KikCMS\Classes\WebForm\MailForm;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;

class ContactForm extends MailForm
{
    /**
     * @inheritdoc
     */
    protected function initialize()
    {
        $this->addTextField('name', 'Naam', [new PresenceOf]);
        $this->addTextField('email', 'E-mail', [new Email]);
        $this->addTextField('phone', 'Telefoon');
        $this->addTextareaField('message', 'Bericht');
    }
}