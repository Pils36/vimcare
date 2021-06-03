<?php

namespace App\Http\Middleware;

use Closure;

use Auth;


class UserRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $token = Auth::user()->api_token;

        if(isset($token) == true){

            $user = \App\User::where('api_token', $token)->first();


            if(isset($user)){
                if($user->userType == "Certified Professional"){

                    return \redirect()->route('MM Homepage');
                }
                else{
                    return \redirect()->route('Licence Holders');
                }
                
            }
            else{
                return redirect()->back();
            }

        }
        else{
            return \redirect()->route('home');
        }


        return $next($request);
    }
}
