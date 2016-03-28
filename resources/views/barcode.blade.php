@extends('layouts.master')

@section('menu')
    <h1>User Barcode Renderer</h1>
    <img src="/img/creative-barcode.png" alt="cartoon barcode">
    <form action="/barcode" method="POST">
        {{ csrf_field() }} <br>
        <label for="text"> Read text of barcode:</label> <br>
        <input class="text-uppercase" type="text" name="text" id="bartext"  value="{{ $_POST['text'] or old('text') }}">
        <button class="btn btn-default">Ready</button>
        <br>{{ $errors->first('text') }}
        <div>
            {{--type of barcode standard--}} <br>
            <label>Type:</label>
            <select class="badge" name="object" id="object">
                <option value="code39">Code39</option>
                <option value="code25">Code25</option>
                <option value="code128">Code128</option>
                <option value="codabar">Codabar</option>
            </select>

            {{--type of output file--}}
            <label>Renderer:</label>
            <select class="badge" name="render" id="render">
                <option value="image">Image</option>
                <option value="pdf">PDF</option>
            </select> <br> <br>

        </div>
    </form> <br><br>
@stop

@section('content')
        @if ($imageResource)
            <div id="barcode-image" >
            <img src='/barcodes/{{$text}}.jpg' alt="barcode">

            </div>
        @endif
@stop

        
        