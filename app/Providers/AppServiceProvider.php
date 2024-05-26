<?php

namespace App\Providers;

use App\Logging\Processor\ExecuteInfoProcessor;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function (QueryExecuted $query) {
            $context = [
                'log_type' => 'query',
                'bindings' => $query->bindings,
                'time' => $query->time,
                ];
            Log::debug($query->sql, $context);
        });
    }
}
