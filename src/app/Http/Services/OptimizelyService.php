<?php

namespace App\Http\Services;

use App\Http\Repositories\OptimizelyRepository;

class OptimizelyService
{
    /** @var OptimizelyRepository */
    protected $optimizelyRepository;

    public function __construct(OptimizelyRepository $optimizelyRepository)
    {
        $this->optimizelyRepository = $optimizelyRepository;    
    }

    public function getActive($attributes) : ? array
    {
        return $this->optimizelyRepository->getActive($attributes);
    }

    public function isFeatureEnabled($featureName, $attributes) : bool
    {
        return $this->optimizelyRepository->isFeatureEnabled($featureName, $attributes);
    }
}