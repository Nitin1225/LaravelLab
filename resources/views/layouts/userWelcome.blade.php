@extends('common.static')

    @section('containerContent')

        <!-- <h2> User Detials </h2> -->

        <div class="">
                <div class="modal-header">
                    <button type="button" class="close" ></button>
                    <h2 class="modal-title" id="myModalLabel" align="center">User Detials</h2>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="{{asset($postData['image'])}}" name="Profile Pic" width="140" height="140" border="0" class="img-circle"></a>
                        <h3 class="media-heading">{{$postData['name']}}</h3>
                        <!-- <span><strong>Skills: </strong></span>
                            <span class="label label-warning">HTML5/CSS</span>
                            <span class="label label-info">Adobe CS 5.5</span>
                            <span class="label label-info">Microsoft Office</span>
                            <span class="label label-success">Windows XP, Vista, 7</span> -->
                    </center>
                    <hr>
                    <center>
                        <p class="text-center"><strong>Information : </strong><br>
                            <span class="label label-info">Email : {{$postData['email']}}</span>
                            <span class="label label-warning">Password : {{$postData['pass1']}}</span>
                            <!-- <span class="label label-warning">{{$postData['pass']}}</span> -->
                            <span class="label label-info">Contact No. : {{$postData['mobile']}}</span>
                        </p>
                    <br>
                    </center>
                </div>
                <div class="footer">
                    <center>
                        
                    </center>
                </div>
        </div>

        <!-- @foreach($postData as $key=>$value)
            <div class="container">
                @if($key=="image")
                    <h4>
                        {{$key}} : 
                            <img src = "{{asset($value)}}" alt="Profile Image" height="150px" width="150px">
                            <br>
                            &emsp; {{$value}}
                    </h4>
                @else
                    <h4>{{$key}} : {{$value}}</h4>
                @endif
            </div>
        @endforeach -->

    @endsection
