<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
	{
		$page = 'index';
		return \View::make('layout.master_template')
			->nest('content',$page)
			->nest('headerscript','headerscript')
			->nest('footerscript','footerscript');
	}

    public function getView($page)
	{
		if($page == null)
			$page = 'index';
		return \View::make('layout.master_template')
			->nest('content',$page)
			->nest('headerscript','headerscript')
			->nest('footerscript','footerscript');
	}
}
