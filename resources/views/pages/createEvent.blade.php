@extends('layouts.app')

    @section('content')
    @if (!Auth::guest())
        
        <h1>You're login</h1>
        <div id="create_event_div" class="container">
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
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="reset" class="btn btn-primary">Cancel</button>
            </form>
        </div>



    @else
        <h3>You must login to your account</h3>
    @endif

    @endsection