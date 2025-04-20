<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function home()
    {
        return view('home');
    }

    public function menu(){
		return view('menu', [
            'breadcrumbText' => 'Menu',
			'title' => 'Our Menu'
        ]);
	}

    public function services(){
		return view('services',[
            'breadcrumbText' => 'Services',
			'title' => 'Services'
        ]);
	}

	public function about(){
		return view('about',[
            'breadcrumbText' => 'About',
			'title' => 'About Us'
        ]);
	}

    public function shop(){
		return view('shop',[
            'breadcrumbText' => 'Shop',
			'title' => 'Order Online'
        ]);
	}

	public function contact(){
		return view('contact',[
            'breadcrumbText' => 'Contact',
			'title' => 'Contact Us'
        ]);
	}

	public function cart(){
    return view('cart', [
        'breadcrumbText' => 'Cart',
        'title' => 'Cart'
    ]);
	}	
	
}