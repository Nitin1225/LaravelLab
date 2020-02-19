@extends('common.static')

    @section('containerContent')

        <h2> Detials </h2>

        @foreach($postData as $key=>$value)
        
            <div class="container">
                @if($key=="image")
                    <h4>
                        {{$key}} : 
                            <img src = "{{asset($value)}}" altname="Profile Image" height="150px" width="150px">
                            <br>
                            &emsp; {{$value}}
                    </h4>
                @else
                    <h4>{{$key}} : {{$value}}</h4>
                @endif
            </div>

        @endforeach

    @endsection
