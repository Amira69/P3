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
use Zend\Barcode\Barcode;


class BarcodeController extends Controller{
    // get function
    public function getBarcode(){
        return view('barcode')->with('nav1',"")
            ->with('nav2',"")
            ->with('nav3','active')
            ->with('imageResource',"");
    }

    // post function
    public function postBarcode(Request $request){

        // select each barcode for proper validation
        switch ($request->input('object')){
            case 'code128' :
                $mask = 'required|max:20';
                break;
            case 'code39'  :
                $mask = 'required|alpha_num|max:20';
                break;
            case 'codabar' :
                $mask = 'required|numeric|max:20';
                break;
            case 'code25'  :
                $mask = 'required|numeric|max:20';
                break;
        }
        // server validation
        $request['text'] = strtoupper($_POST['text']);
        $this->validate($request, ['text' => $mask ] );
        // common options
        $barcodeOptions = ['text' => $request->input('text') , 'barHeight' => 80, 'font' => 5,
            'withBorder' => True, 'stretchText' => True, 'factor' => 2 ];
        $rendererOptions = [];

        // Draw the barcode, capturing the resource:
        $renderer = Barcode::factory(
            $request->input('object'),
            'image',
            $barcodeOptions,
            $rendererOptions
        );
        // render barcode
        $imageResource = $renderer->draw();
       # $renderResource = $renderer->render();
        $imageFile = public_path().'/barcodes/'.$request['text'].'.jpg';
        imagejpeg($imageResource,$imageFile);

        // display in view

        return view('barcode')->with('nav1',"")
            ->with('nav2',"")
            ->with('nav3','active')
            ->with('text',$request['text'])
            ->with('imageResource',$imageResource);

    }

}