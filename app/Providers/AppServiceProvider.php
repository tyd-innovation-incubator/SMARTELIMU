<?php

namespace App\Providers;

use App\Repositories\Sysdef\CodeValueRepository;
use App\Services\Access\Facades\Access;
use App\Services\Sysdef\System;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Schema;
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
        $this->registerAccess();
        $this->registerFacade();

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

    }


    /**
     * Register the service provider.
     *
     * @return void
     */


    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerAccess()
    {
        $this->app->bind('access', function ($app) {
            return new Access();
        });
        $this->app->bind('code_value', function ($app) {
            return new CodeValueRepository();
        });
        $this->app->bind('sysdef', function ($app) {
            return new System();
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade()
    {
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Access', AccessFacade::class);
        });
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('CodeValueRepository', CodeValueFacade::class);
        });
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('System', SystemFacade::class);
        });

    }

    /**
     * Register the blade extender to use new blade sections.
     */
    protected function registerBladeExtensions()
    {
        /*
         * Role based blade extensions
         * Accepts either string of Role Name or Role ID
         */
        Blade::directive('role', function ($role) {
            return "<?php if (access()->hasRole({$role})): ?>";
        });

        /*
         * Accepts array of names or id's
         */
        Blade::directive('roles', function ($roles) {
            return "<?php if (access()->hasRoles({$roles})): ?>";
        });

        Blade::directive('needsroles', function ($roles) {
            return '<?php if (access()->hasRoles('.$roles.', true)): ?>';
        });

        /*
         * Permission based blade extensions
         * Accepts wither string of Permission Name or Permission ID
         */
        Blade::directive('permission', function ($permission) {
            return "<?php if (access()->allow({$permission})): ?>";
        });

        /*
         * Accepts array of names or id's
         */
        Blade::directive('permissions', function ($permissions) {
            return "<?php if (access()->allowMultiple({$permissions})): ?>";
        });

        Blade::directive('needspermissions', function ($permissions) {
            return '<?php if (access()->allowMultiple('.$permissions.', true)): ?>';
        });

        /*
         * Generic if closer to not interfere with built in blade
         */
        Blade::directive('endauth', function () {
            return '<?php endif; ?>';
        });

        Blade::directive('hasdefinition', function ($wf_module_group_id, $level) {
            return '<?php if (access()->hasWorkflowDefinition('.$wf_module_group_id.', '.$level.',)): ?>';
        });



    }


}
