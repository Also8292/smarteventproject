@extends('layouts.template')

@section('title', 'Add event')

@section('style')

    <!-- add event style CSS -->
    <link rel="stylesheet" href="{{ asset('../css/addEventStyle.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('header')

    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed header">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/home">Home</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-menu"></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
@if (!Auth::guest())
    <div id="create_event_div" class="container">
        @if(session('info'))
            <div class="alert alert-warning">
                <strong>Warning ! </strong>{{session('info')}} 
            </div>
        @endif

        <form class="form-horizontal" action="{{ url('/insertevent') }}" method="post">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="title" placeholder="Event title" required autofocus>
            <br>
            <input class="form-control" type="datetime-local" name="opening" placeholder="Event opening day" required>
            <br>
            <input class="form-control" type="datetime-local" name="closing" placeholder="Event closing day" required>
            <br>
            <input class="form-control" type="text" name="location" placeholder="Event location" required>
            <br>
            <input class="form-control" type="number" name="ticket" placeholder="Event ticket price $" required>
            <br>
            <textarea class="form-control" name="description" id="description" placeholder="Event description" required></textarea>
            <br>
            <button type="submit" id="createBtn" class="btn btn-primary">Create</button>
            <button type="reset" id="cancelBtn" class="btn btn-primary">Cancel</button>
        </form>
    </div>



@else
    <h3>You must login to your account</h3>
@endif

@endsection