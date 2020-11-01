<?php

namespace Tests\Unit\Controllers;

use App\Http\Services\OptimizelyService;
use Tests\TestCase;
use App\Http\Repositories\OptimizelyRepository;

class OptimizelyServiceTest extends TestCase
{
    /** @var OptimizelyService */
    protected $optimizelyService;

    /** @var OptimizelyRepository */
    protected $optimizelyRepository;

    public function setUp(): void
    {
        $this->optimizelyRepository = $this->createMock(OptimizelyRepository::class);
        $this->optimizelyService = new OptimizelyService($this->optimizelyRepository);
    }

    /**
     * @testWith [["featureA"], ["featureA"]]
     *          [null, null]
     */
    public function testGetActive($response, $expected)
    {
        $this->optimizelyRepository->expects($this->once())
            ->method('getActive')
            ->willReturn($response);

        $actual = $this->optimizelyService->getActive([]);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @testWith [true, true]
     *          [false, false]
     */
    public function testIsFeatureEnabled($response, $expected)
    {
        $this->optimizelyRepository->expects($this->once())
            ->method('isFeatureEnabled')
            ->willReturn($response);

        $actual = $this->optimizelyService->isFeatureEnabled(
            "MOCK_NAME",
            []
        );
        $this->assertEquals($expected, $actual);
    }

}
