@extends('users.skeleton')
@section('content')
    <style>
        .sub-level{margin-top: 33.3333vh;}
    </style>
    <div class="row my-2 justify-content-center d-flex sub-level">
        <div class="col-md-5">
            <h3 class="text-left">Send Message</h3>
            <hr>
            <form action="send-message" method="post">
                @csrf
                <h4>From:</h4>
                <input type="text" class="form-control my-1" name = "from" value = "muga@mail.com" readonly>
                <h4>To:</h4>
                <input type="text" class="form-control my-1" name = "to" value = "chris@mail.com" readonly>
                <br>
                <input type="text" class="form-control my-1" name = "title" placeholder="Title" required>
                <hr>
                <textarea name="msg" id="" cols="30" rows="10" class="form-control" placeholder="Message" required></textarea>
                <div class="row my-1 p-2">
                    <div class="col-md-6">
                        <button class="btn btn-success form-control">Enter</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary form-control">Clear</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection