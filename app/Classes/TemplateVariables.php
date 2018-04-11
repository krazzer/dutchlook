<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\TemplateVariablesBase;
use KikCMS\Services\Website\FrontendHelper;
use Website\Services\HomeImageService;

/**
 * @property FrontendHelper $frontendHelper
 * @property HomeImageService $homeImageService
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

    public function getHomeVariables(): array
    {
        return [
            'homeImageList' => $this->homeImageService->getList(),
        ];
    }
}