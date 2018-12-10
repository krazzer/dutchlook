<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\WebsiteSettingsBase;
use KikCMS\Config\MenuConfig;
use KikCMS\ObjectLists\MenuGroupMap;
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
        $backend->add('/projects', 'Module::projects');
        $backend->add('/clients', 'Module::clients');
    }

    /**
     * @inheritdoc
     */
    public function getMenuGroupMap(MenuGroupMap $menuGroupMap): MenuGroupMap
    {
        $menuGroup = (new CmsMenuGroup('projects', "Projecten"))
            ->add(new CmsMenuItem('projects', 'Projecten', 'cms/projects'))
            ->add(new CmsMenuItem('clients', 'Klanten', 'cms/clients'));

        return $menuGroupMap->addAfter($menuGroup, 'Projecten', MenuConfig::MENU_GROUP_CONTENT);
    }
}