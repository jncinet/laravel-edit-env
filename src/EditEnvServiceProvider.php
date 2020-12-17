<?php

namespace Qihucms\EditEnv;

use Illuminate\Support\ServiceProvider;

class EditEnvServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EditEnv::class, function () {
            return new EditEnv();
        });

        $this->app->alias(EditEnv::class, 'edit-env');
    }
}
