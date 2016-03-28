@extends('layouts.master')

@section('menu')
    <h1>Random User Generator</h1>
    <img src="/img/funny-crow.png" alt="cartoon barcode">

    <form action="/profile" method="POST">
        {{ csrf_field() }} <br>

        <label for="number"> Crew number of profiles:</label> <br>
        <input type="number" name="number" id="number" value="{{ $formFill['number'] or old('number') }}">
        <button class="btn-default btn" >Collect</button>
        <br> {{ $errors->first('number') }}

        {{--options--}}
        <div class="checkbox">
        <label>
                <input type="checkbox"  name="address" @if (isset($formFill['address']) or old('address')) checked @endif > Include a mailing address
            </label>
        </div>
        <div class="checkbox">
        <label>
                <input type="checkbox"  name="birthday" @if (isset($formFill['birthday']) or old('birthday')) checked @endif> Include a birthday
            </label>
        </div>
        <div class="checkbox">
        <label>
                <input type="checkbox"  name="text" @if (isset($formFill['text']) or old('text')) checked @endif> Include profile text
            </label>
        </div>
        <div class="checkbox">
        <label>
                <input type="checkbox"  name="photo" @if (isset($formFill['photo']) or old('photo')) checked @endif> Include a profile photo
            </label>
        </div>
    </form>
@stop

@section('content')
    <?php for($i=0; $i < $profileNumber; $i++){ ?>
    <div class="row"><br>
        <div class="col-xs-6 col-md-3" id="cats">
            @if(isset($formFill['photo']))
                <img src="{{$profileBuilder[$i]['photo']}}" alt="profile-image" class="img-circle"/>
            @endif
        </div>
        <div class="col-xs-6 col-md-9" id="hats">
            <p> <strong>{{$profileBuilder[$i]['name']}}</strong>  <br>
                {{$profileBuilder[$i]['email']}} <br>
                @if(isset($formFill['text']))
                    {{$profileBuilder[$i]['text']}} <br>
                @endif
                @if(isset($formFill['birthday']))
                    {{$profileBuilder[$i]['birthday']}} <br>
                @endif
                {{--@if(isset($formFill['phone']))--}}
                    {{--{{$profileBuilder[$i]['phone']}} <br>--}}
                {{--@endif--}}
                @if(isset($formFill['address']))
                    {{$profileBuilder[$i]['address']}} <br>
                @endif
            </p>
        </div>
    </div>
    <?php } ?>
@stop
