<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services;
use App\Http\Services\OptimizelyService;

class OptimizelyController extends Controller
{
    /** @var OptimizelyService */
    protected $optimizelyService;

    public function __construct(OptimizelyService $optimizelyService)
    {
        $this->optimizelyService = $optimizelyService;    
    }
    /**
     * @OA\Get(
     *     path="/active",
     *     description="Get active feature flags",
     *     @OA\Response(response="200", description="Get list of active feature flags from the request")
     * )
     */
    public function active(Request $request)
    {
        $attributes = $request->all();
        return json_encode([
            'enabled' => $this->optimizelyService->getActive($attributes)
        ]);
    }

    /**
     * @OA\Get(
     *     path="/feature/:featureName",
     *     description="Verify if specific feature flag is active",
     *     @OA\Response(response="200", description="")
     * )
     */
    public function feature($featureName, Request $request)
    {
        $attributes = $request->all();
        return json_encode(["status" => $this->optimizelyService->isFeatureEnabled($featureName, $attributes)]);
    }
}
