<?php

namespace App\Http\Repositories;

use Optimizely\Optimizely;

class OptimizelyRepository
{
    /** @var Optimizely */
    protected $optimizelyInstance;

    public function __construct(Optimizely $optimizelyInstance)
    {
        $this->optimizelyInstance = $optimizelyInstance;
    }

    public function getActive(array $attributes) : ?array 
    {
        return $this->optimizelyInstance->getEnabledFeatures('', $attributes);
    }

    public function isFeatureEnabled($featureName, array $attributes) : bool 
    {
        return $this->optimizelyInstance->isFeatureEnabled($featureName,'', $attributes);
    }
}