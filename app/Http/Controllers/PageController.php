<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

=======
>>>>>>> 10955096453bd6177bb20d813de8d13537b0c2f1
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    public function index($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
<<<<<<< HEAD

=======
>>>>>>> 10955096453bd6177bb20d813de8d13537b0c2f1
}
