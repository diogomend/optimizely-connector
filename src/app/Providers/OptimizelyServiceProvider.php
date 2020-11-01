<?php

namespace App\Providers;

use App\Http\Repositories\OptimizelyRepository;
use Illuminate\Support\ServiceProvider;
use Optimizely\OptimizelyFactory;

class OptimizelyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(OptimizelyRepository::class, function () {
            return new OptimizelyRepository(
                OptimizelyFactory::createDefaultInstance(
                    config('services.optimizely.key')
                )
            );
            //return new Connection(config('riak'));
        });
    }

}
