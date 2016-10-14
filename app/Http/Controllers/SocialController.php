<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Socialite;

class SocialController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

       public function getSocialAuth($provider=null)
       {
           if(!config("services.$provider")) abort('404');

           return Socialite::driver($provider)->redirect();
       }


       public function getSocialAuthCallback($provider=null)
       {
          if($user = Socialite::driver($provider)->user()){
             dd($user);  
          }else{
             return 'erro!!';
          }
       }
}


