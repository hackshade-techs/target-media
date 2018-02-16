<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('composers.gallery', function($view) {
          $view->with('images', Gallery::galleryImages());
      });

      view()->composer('composers.service', function($view) {
          $view->with('services', Service::services());
      });

      view()->composer('composers.slide', function($view) {
          $view->with('slides', Slide::slides());
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
