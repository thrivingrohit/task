<?php
  
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Laravel\Socialite\Facades\Socialite;
  use Illuminate\Support\Facades\Auth;
  use Exception;
  use App\User;
  
  class GoogleController extends Controller
  {
      /**
       * Redirect the user to the GitHub authentication page.
       *
       * @return \Illuminate\Http\Response
       */
      public function redirectToGoogle()
      {
          return Socialite::driver('google')->redirect();
      }
  
      /**
       * Obtain the user information from GitHub.
       *
       * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
       */
      public function handleGoogleCallback()
      {
          try {
              //create a user using socialite driver google
              $user = Socialite::driver('google')->user();
              // if the user exits, use that user and login
              $finduser = User::where('email', $user->getEmail())->first();
              if($finduser){
                  //if the user exists, login and show dashboard
                  Auth::login($finduser);
                  return redirect('/home');
              }else{
                  //user is not yet created, so create first
                  $newUser = User::create([
                      'name' => $user->name,
                      'email' => $user->email,
                      'password' => encrypt('hi-google')
                  ]);
                  //every user needs a team for dashboard/jetstream to work.
                  //create a personal team for the user
                  Auth::login($newUser);
                  // go to the dashboard
                  return redirect('/home');
              }
              //catch exceptions
          } catch (Exception $e) {
              dd($e->getMessage());
            // return redirect('/home');
          }
      }
}
  
