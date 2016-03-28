<?php
/**
 * Created by PhpStorm.
 * User: bc
 * Date: 3/7/2016
 * Time: 2:24 PM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;


class ParGenController extends Controller
{
    // get function
    public function getParagraph(){

        return view('loremipsum')->with('nav1','active')
                                 ->with('nav2',"")
                                 ->with('nav3',"")
                                 ->with('paragraphs',"");
    }
    // post function
    public function postParagraph(Request $request){

        $this->validate($request, ['number' => 'required|numeric|min:1|max:10']);
        // faker instance
        $generator = new Generator(20);
        $text = $generator->getParagraphs($request->input('number'));
        $paragraphs = implode('<p><p>',$text);
        return view('loremipsum')->with('nav1','active')
                                 ->with('nav2',"")
                                 ->with('nav3',"")
                                 ->with('paragraphs',$paragraphs);
    }
}