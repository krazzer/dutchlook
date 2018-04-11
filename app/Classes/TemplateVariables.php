<?php

namespace Website\Classes;


use KikCMS\Classes\Frontend\Extendables\TemplateVariablesBase;
use KikCMS\Services\Website\FrontendHelper;
use Website\Services\HomeImageService;
use Website\Services\ProjectService;

/**
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

        foreach ($projectMap as $project)
        {
            dlog($project->images->getFirst()->image_id);
        }

        return [
            'projectMap' => $projectMap,
        ];
    }
}