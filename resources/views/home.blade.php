@extends('layouts.app')
<style>
.jumbotron
{
    background-color:orange !important;
    color:white;
    font-family: "Arial Rounded MT Bold";
    font-size: x-large;
}
    .card
    {
        background-color:thistle !important;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="container">
                        <div class="jumbotron">
<p class="text-center"> WELCOME TO YOUR PORTAL</p>
                        </div>

                    </div>

                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                            <!-- COMPONENT START -->
                        <div class="form-group">
                            <label for="usr">Title:</label>
                            <input type="text" name="title" class="form-control" id="usr">
                        </div>
                        <div class="form-group">
                            <label for="crt">Category:</label>
                            <input type="text" name="category" class="form-control" id="crt">
                        </div>
                        <div class="form-group">
                            <div class="input-group input-file" name="Fichier1">

                                    <input type="file" name="image" class="form-control" placeholder='Choose a file...' />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-reset" type="reset">Reset</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="body" class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit"> POST</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
