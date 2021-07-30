<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Список виджетов, которые необходимо подключить в шаблоны
     *
     * @var array
     */
    protected $widgets = [
        \App\Admin\Widgets\NavigationUserBlock::class,
    ];


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
        // Регистрация виджетов в реестре
        /** @var WidgetsRegistryInterface $widgetsRegistry */
        $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];

        // dd($widgetsRegistry->registerWidget($this->widgets[]));
 
        foreach ($this->widgets as $widget) {
            $widgetsRegistry->registerWidget($widget);
        }
    }
}
