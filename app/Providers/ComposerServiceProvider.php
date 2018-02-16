<?php

namespace App\Providers;

use App\Models\Gallery;
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

      view()->composer('composers.review', function($view) {
          $view->with('reviews', Review::reviews());
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
