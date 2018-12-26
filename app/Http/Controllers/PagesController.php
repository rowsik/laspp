<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
		{
			return view('pages.index');
		}

	public function about()
		{
			return view('pages.about');
		}

	public function services()
		{
			$services =array(
							'services'=> ['Web Designing','App Development','Seo','And various others']
							);
			return view('pages.services')->with($services);
		}
}
