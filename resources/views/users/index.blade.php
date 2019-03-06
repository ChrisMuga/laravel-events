@extends('users.skeleton')
@section('content')
    <div class="row d-flex justify-content-center my-2 ">
        <div class="col-md-7 text-center bg-light p-2">
            <h4>Messages [{{count($messages)}}]</h4>
            <hr>
            <a href="/chris" class="btn btn-primary">Chris</a>
            <a href="/muga" class="btn btn-success">Muga</a>
        </div>
    </div>
    <div class="row " id="app">
        <div class="col-4">
            <h4>Chris</h4>
            <hr>
            @foreach ($messages as $message)
                @if($message->to == 'chris@mail.com')
                    <b class="text-info">{{$message->title}}</b>
                    <p>{{$message->msg}}</p>
                    <h6 class="text-right text-danger">{{$message->from}}</h6>
                    <hr>
                @endif
            @endforeach
        </div>
        <div class="col-4">
            <h4>Muga</h4>
            <hr>
            @foreach ($messages as $message)
                @if($message->to == 'muga@mail.com')
                    <b class="text-info">{{$message->title}}</b>
                    <p>{{$message->msg}}</p>
                    <h6 class="text-right text-danger">{{$message->from}}</h6>
                    <hr>
                @endif
            @endforeach
        </div>
        <div class="col-md-4">
            <notifications-component/>
        </div>
    </div>
    <script>
        var pusher = new Pusher('82392777e89d910bbb8f', {
            cluster: 'ap2'
        });
        var channel = pusher.subscribe('muga');
        channel.bind('send-message', function(data) {
            alertify.success(`${data.message.from} say: ${data.message.msg}`);
        });
    </script>
@endsection