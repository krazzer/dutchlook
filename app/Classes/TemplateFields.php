<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\TemplateFieldsBase;
use KikCMS\Classes\Page\Template;
use KikCMS\Classes\WebForm\Fields\ButtonField;
use KikCMS\Classes\WebForm\Fields\DataTableField;
use KikCMS\Classes\WebForm\Fields\TextField;
use KikCMS\Classes\WebForm\Fields\WysiwygField;
use Phalcon\Validation\Validator\PresenceOf;
use Website\DataTables\HomeImages;

class TemplateFields extends TemplateFieldsBase
{
    /**
     * @inheritdoc
     */
    public function getTemplates(): array
    {
        return [
            (new Template('default', 'Standaard', ['content', 'video'])),
            (new Template('home', 'Home', ['homeImages'])),
            (new Template('category', 'Categorie', ['projects'])),
            (new Template('clients', 'Klanten', ['projects'])),
            (new Template('contact', 'Contact', ['content'])),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFields(): array
    {
        return [
            'content'    => (new WysiwygField('content', 'Inhoud pagina', [new PresenceOf()]))->storePage(),
            'projects'   => (new ButtonField('Projecten', 'Projecten kunnen worden bewerkt in de projecten module', 'Ga naar projecten', '/cms/projects')),
            'homeImages' => (new DataTableField(new HomeImages, 'Afbeeldingen')),
            'video'      => (new TextField('video', 'Video'))->storePage(false),
        ];
    }
}