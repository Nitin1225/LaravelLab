@extends('common.static')

    @section('containerContent')

        <h2> Detials </h2>

        @foreach($postData as $key=>$value)
        
            <div class="container">
                <h4>{{$key}} : {{$value}}</h4>
            </div>

        @endforeach

    @endsection
