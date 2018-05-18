<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;




class LoginController extends Controller
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
use AuthenticatesUsers;
/**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
/**
     * Get the needed authorization credentials from the request.
     
     
     */
    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('email')))
        {
            return ['telephone'=>$request->get('email'),'password'=>$request->get('password')];
        }
        return $request->only($this->username(), 'password');
    }
}


//if('telephone'->$request->get('telephone')'password'->$request->get('password'));

//if($request->get('telephone'),'password'->$request->get('password'));

/*public function telephone()
    {
        return 'telephone';
    }
*/    