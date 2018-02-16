<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function services()
    {
      return view('pages.services');
    }
    public function service_detail()
    {
      return view('pages.service_detail');
    }
    public function whatwedo()
    {
      return view('pages.whatwedo');
    }
    public function whatwedo_detail()
    {
      return view('pages.whatwedo_detail');
    }
    public function contact()
    {
      return view('pages.contact_us');
    }
    public function about()
    {
      return view('pages.about_us');
    }


}
