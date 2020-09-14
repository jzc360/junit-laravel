<?php
namespace Jzc\JunitLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvide extends ServiceProvider
{
//    public function register()
//    {
//        echo '这是junit服务提供者a';
//    }

    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Jzc\JunitLaravel\Http\Controllers',
            'prefix' => 'jjunit',
            'middleware'=>'web'
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}
?>
