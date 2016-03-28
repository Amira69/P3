<?php
/**
 * Created by PhpStorm.
 * User: bc
 * Date: 3/7/2016
 * Time: 2:24 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker;


class ProfileController extends Controller
{
    // get function
    public function getProfile(){
    return view('profile')->with('nav1',"")
                          ->with('nav2','active')
                          ->with('nav3',"")
                          ->with('profileBuilder',"")
                          ->with('profileNumber','0');
    }

    // form post function
    public function postProfile(Request $request){
        $this->validate($request, ['number' => 'required|numeric|min:1|max:10']);
        $profile = Faker\Factory::create();
        for($i=0; $i < $request->input('number'); $i++) {
            $data[$i]['name'] = $profile->name;
            $data[$i]['email'] = $profile->email;
            $data[$i]['address'] = $profile->address;
            $data[$i]['phone'] = $profile->phoneNumber;
            $data[$i]['birthday'] = $profile->date($format = 'Y-m-d', $max = '1980-1-1');
            $data[$i]['text'] = $profile->text($maxNbChars = 100);
            $data[$i]['photo'] = $profile->imageUrl($width = 168, $height = 126);
        }

        return view('profile')->with('nav1',"")
            ->with('nav2','active')
            ->with('nav3',"")
            ->with('profileBuilder', $data)
            ->with('profileNumber',$request->input('number'))
            ->with('formFill',$request);
    }

}