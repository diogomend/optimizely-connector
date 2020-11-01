<?php

namespace Tests\Unit\Controllers;

use Optimizely\Optimizely;
use Tests\TestCase;
use App\Http\Repositories\OptimizelyRepository;

class OptimizelyRepositoryTest extends TestCase
{
    /** @var Optimizely */
    protected $optimizelyInstance;

    /** @var OptimizelyRepository */
    protected $optimizelyRepository;

    public function setUp(): void
    {
        $this->optimizelyInstance = $this->createMock(Optimizely::class);
        $this->optimizelyRepository = new OptimizelyRepository($this->optimizelyInstance);
    }

    /**
     * @testWith [["featureA"], ["featureA"]]
     *          [null, null]
     */
    public function testGetActive($response, $expected)
    {
        $this->optimizelyInstance->expects($this->once())
            ->method('getEnabledFeatures')
            ->willReturn($response);

        $actual = $this->optimizelyRepository->getActive([]);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @testWith [true, true]
     *          [false, false]
     */
    public function testIsFeatureEnabled($response, $expected)
    {
        $this->optimizelyInstance->expects($this->once())
            ->method('isFeatureEnabled')
            ->willReturn($response);

        $actual = $this->optimizelyRepository->isFeatureEnabled(
            "MOCK_NAME",
            []
        );
        $this->assertEquals($expected, $actual);
    }

}
