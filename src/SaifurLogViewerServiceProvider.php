<?php

namespace Saifur\LogViewer;

use Illuminate\Support\ServiceProvider;
use Saifur\LogViewer\app\Facades\Helpers\SLVCommonHelper;
use Saifur\LogViewer\app\Http\Middleware\SaifurLogViewerMiddleware;

class SaifurLogViewerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Facades Registration
        $this->app->bind('slvcommonhelper', function () {  return new SLVCommonHelper();   });
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'logviewer');
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/saifur/logviewer'),
        ], 'public');

        // middlewares
        $this->app['router']->aliasMiddleware('SaifurLogViewerMiddleware', SaifurLogViewerMiddleware::class);

        require_once __DIR__.'/app/Libraries/Helpers.php';
    }


}
