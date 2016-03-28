@extends('layouts.master')


@section('menu')
     <h1>Lorem Ipsum Generator</h1>
     <img src="/img/cartoon-crow.png" alt="lorem cartton">

     <form action="/loremipsum" method="POST">

         {{ csrf_field() }} <br>
         <label for="check"> Yield number of paragraphs:</label> <br>
         <input type="number" name="number" id="number" value="{{ $_POST['number'] or old('number') }}">

         <button class="btn btn-default">Produce</button>
         <br>  {{ $errors->first('number') }}
     </form>
@stop

@section('content') <br>
    <?php echo $paragraphs ?>
@stop
