<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\WebsiteSettingsBase;
use KikCMS\Config\MenuConfig;
use KikCMS\Services\Cms\CmsMenuGroup;
use KikCMS\Services\Cms\CmsMenuItem;
use Phalcon\Mvc\Router\Group;

/**
 * @inheritdoc
 */
class WebsiteSettings extends WebsiteSettingsBase
{
    /**
     * @inheritdoc
     */
    public function addFrontendRoutes(Group $frontend)
    {
    }

    /**
     * @inheritdoc
     */
    public function addBackendRoutes(Group $backend)
    {
    }

    /**
     * @inheritdoc
     */
    public function getMenuGroups(array $menuGroups): array
    {
        $webshopMenuGroup = (new CmsMenuGroup('projects', "Projecten"))
            ->add(new CmsMenuItem('projects', 'Projecten', 'cms/projects'))
            ->add(new CmsMenuItem('clients', 'Klanten', 'cms/clients'));

        return array_add_after_key($menuGroups, MenuConfig::MENU_GROUP_CONTENT, 'projects', $webshopMenuGroup);
    }

    /**
     * @inheritdoc
     */
    public function getServices(): array
    {
        return [];
    }
}