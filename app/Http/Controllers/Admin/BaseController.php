<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;

class BaseController extends Controller
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

	public function init()
    {

		//$finder = new \Illuminate\View\FileViewFinder(app()['files'], array(app_path().'/../modules/Admin/Views/'));
		//View::setFinder($finder);

		//echo 'xxx';

	}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

		$this->init();

		//var_dump( 'xxxx' );

		//var_dump( app_path().'/../modules/Frontend/Views/' );

		//$finder = new \Illuminate\View\FileViewFinder(app()['files'], array(app_path().'/../modules/Frontend/Views/'));
		//View::setFinder($finder);

        //$this->middleware('guest')->except('logout');
	}

}
