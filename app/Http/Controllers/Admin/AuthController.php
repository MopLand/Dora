<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;

class AuthController extends Controller
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

		//var_dump( 'xxxx' );

		//var_dump( app_path().'/../modules/Frontend/Views/' );

		$finder = new \Illuminate\View\FileViewFinder(app()['files'], array(app_path().'/../modules/Admin/Views/'));
		View::setFinder($finder);

        //$this->middleware('guest')->except('logout');
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
	
	public function login( ){
		//var_dump( $request );
		//var_dump( resource_path('views') );
		//var_dump( module_path('views') );
		//var_dump( base_path() );
		//Config::set('view.paths', array(__DIR__.'/../Frontend/Views'));

		//View::setPath(base_path().'/modules/Frontend/views');
		return view('auth/login');
	}

}
