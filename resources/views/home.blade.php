@extends('layouts.app')

@section('content')
    @if(session('info'))
        <div id="info">
            {{session('info')}}   
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
                    @if(count($event) > 0)

                    @foreach($event->all() as $events)

                    <h3>{{$events->title}} / {{$events->description}} / {{$events->ticket}}</h3>

                    @endforeach

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
