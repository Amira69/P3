@extends('layouts.master')

@section('menu')
    <h1>User Barcode Renderer</h1>
    <img src="/img/creative--barcode.png" alt="cartoon barcode">
    <form action="/barcode" method="POST">
        {{ csrf_field() }} <br>
        <label for="text"> Read text of barcode:</label> <br>
        <input class="text-uppercase" type="text" name="text" id="bartext"  value="{{ $_POST['text'] or old('text') }}">
        <button class="btn btn-default">Ready</button>
        <br>{{ $errors->first('text') }}
        <div>
            {{--type of barcode standard--}} <br>
            <label>Type:</label>
            <select class="btn btn-default" name="object" id="object">
                <option value="code39" @if ( $object == 'code39' or old('object') == 'code39') selected @endif >Code 39</option>
                <option value="code25" @if ( $object == 'code25' or old('object') == 'code25') selected @endif>Code 25</option>
                <option value="code128" @if ( $object == 'code128' or old('object') == 'code128') selected @endif>Code 128</option>
                <option value="codabar" @if ( $object == 'codabar' or old('object') == 'codabar') selected @endif>Codabar</option>
                <option value="ean2" @if ( $object == 'ean2' or old('object') == 'ean2') selected @endif>EAN-2</option>
                <option value="ean5" @if ( $object == 'ean5' or old('object') == 'ean5') selected @endif>EAN-5</option>
                <option value="ean8" @if ( $object == 'ean8' or old('object') == 'ean8') selected @endif>EAN-8</option>
                <option value="ean13" @if ( $object == 'ean13' or old('object') == 'ean13') selected @endif>EAN-13</option>
                <option value="identcode" @if ( $object == 'identcode' or old('object') == 'identcode') selected @endif>Identcode</option>
                <option value="itf14" @if ( $object == 'itf14' or old('object') == 'itf14') selected @endif>ITF-14</option>
                <option value="leitcode" @if ( $object == 'leitcode' or old('object') == 'leitcode') selected @endif>Leitcode</option>
                <option value="upca" @if ( $object == 'upca' or old('object') == 'upca') selected @endif>UPC-A</option>
                <option value="upce" @if ( $object == 'upce' or old('object') == 'upce') selected @endif>UPC-E</option>
                <option value="planet" @if ( $object == 'planet' or old('object') == 'planet') selected @endif>Planet</option>
                <option value="postnet" @if ( $object == 'postnet' or old('object') == 'postnet') selected @endif>Postnet</option>
                <option value="royalmail" @if ( $object == 'royalmail' or old('object') == 'royalmail') selected @endif>Royal Mail</option>
            </select>

            {{--type of output file--}}
            <label>Render:</label>
            <select class="btn btn-default" name="render" id="render">
                <option value="image">Image</option>
                <option value="pdf">PDF</option>
            </select> <br> <br>

        </div>
    </form> <br><br>
@stop

@section('content')
        @if ($imageResource)
            <h1 class="text-center">{{$object}}</h1>
            <div id="barcode-image" >
            <img src='/barcodes/{{$text}}.jpg?nocache=<?php echo time(); ?>' alt="barcode" class="img-responsive">
            </div>

        @endif
@stop

