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
                
                <div>
                    <div class="container-fluid">
                        <div id="event_container" class="container row">
                            @if(count($event) > 0)

                            @foreach($event->all() as $events)

                                    <div class="event_div col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <a href="" class="event_link" title="see details">
                                            <div class="event">
                                                <img src="images/reserve-slide2.jpg" alt="event picture" class="event_picture">
                                                <span class="ticket_price">{{ $events->ticket}}</span>
                                                <h2>{{ $events->title}}</h2>
                                                <p><span>Categorie * View * $$$$$</span></p>
                                                <p><i class="fa fa-map-marker"></i><span> {{ $events->location}} </span></p>
                                                <p><i class="fa fa-mobile-phone"></i><span> Phone </span></p>
                                                <p><i class="fa fa-link"></i><span> Web Site</span></p>
                                                <p><span>Status</span></p>
                                            </div>
                                        </a>
                                    </div>                            
                                
                            @endforeach

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
