<?php

namespace Tests\Unit\Controllers;

use App\Http\Services\OptimizelyService;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Http\Controllers\OptimizelyController;

class OptimizelyControllerTest extends TestCase
{
    protected $optimizelyService;
    protected $optimizelyController;

    public function setUp(): void
    {
        $this->optimizelyService = $this->createMock(OptimizelyService::class);
        $this->optimizelyController = new OptimizelyController($this->optimizelyService);
    }

    public function testActive()
    {
        $expects = '{"enabled":["MOCK_RESPONSE"]}';
        $request = $this->createMock(Request::class);
        $this->optimizelyService->expects($this->once())
            ->method('getActive')
            ->willReturn(['MOCK_RESPONSE']);

        $actual = $this->optimizelyController->active($request);
        $this->assertEquals($expects, $actual);
    }

    public function testFeature()
    {
        $expects = '{"status":false}';
        $featureName = "MOCK_NAME";
        $request = $this->createMock(Request::class);
        $this->optimizelyService->expects($this->once())
            ->method('isFeatureEnabled')
            ->willReturn(false);

        $actual = $this->optimizelyController->feature($featureName, $request);
        $this->assertEquals($expects, $actual);
    }
}
