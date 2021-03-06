<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;

class IndexController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
	//protected $redirectTo = '/home';	
	
	public function index(){		
		return 'index';
	}
	
	public function test( ){
		//var_dump( $request );
		//var_dump( resource_path('views') );
		//var_dump( module_path('views') );
		//var_dump( base_path() );
		//Config::set('view.paths', array(__DIR__.'/../Frontend/Views'));

		//View::setPath(base_path().'/modules/Frontend/views');
		return view('admin/index/test');
	}

}
