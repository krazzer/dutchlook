<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\TemplateVariablesBase;
use KikCMS\Services\Website\FrontendHelper;
use Website\Forms\ContactForm;
use Website\Services\ClientService;
use Website\Services\HomeImageService;
use Website\Services\ProjectService;

/**
 * @property ClientService $clientService
 * @property FrontendHelper $frontendHelper
 * @property HomeImageService $homeImageService
 * @property ProjectService $projectService
 */
class TemplateVariables extends TemplateVariablesBase
{
    /**
     * @inheritdoc
     */
    public function getGlobalVariables(): array
    {
        return [
        ];
    }

    /**
     * @return array
     */
    public function getContactVariables(): array
    {
        return [
            'form' => (new ContactForm)->render()
        ];
    }

    /**
     * @return array
     */
    public function getHomeVariables(): array
    {
        return [
            'homeImageList' => $this->homeImageService->getList(),
        ];
    }

    /**
     * @return array
     */
    public function getCategoryVariables(): array
    {
        $page       = $this->frontendHelper->getCurrentPageLanguage()->page;
        $projectMap = $this->projectService->getByCategoryPage($page);

        return [
            'projectMap' => $projectMap,
        ];
    }

    /**
     * @return array
     */
    public function getClientsVariables(): array
    {
        return [
            'clientMap' => $this->clientService->getMap(),
        ];
    }
}