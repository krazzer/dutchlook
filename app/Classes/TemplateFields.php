<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\TemplateFieldsBase;
use KikCMS\Classes\Page\Template;
use KikCMS\Classes\WebForm\Fields\ButtonField;
use KikCMS\Classes\WebForm\Fields\WysiwygField;
use Phalcon\Validation\Validator\PresenceOf;

class TemplateFields extends TemplateFieldsBase
{
    /**
     * @inheritdoc
     */
    public function getTemplates(): array
    {
        return [
            (new Template('default', 'Standaard', ['content'])),
            (new Template('home', 'Home')),
            (new Template('category', 'Categorie', ['projects'])),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFields(): array
    {
        return [
            'content' => (new WysiwygField('content', 'Inhoud pagina', [new PresenceOf()]))->storePage(),
            'projects' => (new ButtonField('Projecten', 'Projecten kunnen worden bewerkt in de projecten module', 'Ga naar projecten', '/cms/projects')),
        ];
    }
}