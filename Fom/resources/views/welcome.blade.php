@extends('layouts.app')

@section('content')
    <!--This is the placeholder for the container -->
    <div class="ui container">
      <img class="ui fluid image" src="images/poster.png">
    </div>
    <!-- This is the cards place holder-->
    <div class="ui four doubling stackable cards">
    @foreach ($events as $event)
      <div class="card">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div class="description">
                {{ $event -> Description}} 
                </div>
              </div>
            </div>
          </div>
          <img src="{{ asset("/". $event -> eventphoto ->filename)}}">
          <a class="ui red ribbon label">{{ $event -> DateOfTheEvent}} </a>
            <i class="map pin icon"></i>
            {{ $event -> VenueOfEvent}}
        </div>
          <div class="content">
          <div class="header">{{ $event -> NameOfEvent}}</div>
          </div>
          <div class="ui bottom attached button">
            <i class="add icon"></i>
            register
          </div>
        </div>
        @endforeach
      </div>
      </div>
    </div>
    
    <!-- This is the footer-->
    <div class="ui fluid center aligned container">
    <div class="ui centered horizontal list">
    <div class="item">
        <i class="users icon"></i>
        <div class="content">
          Created by Fom LLC
        </div>
      </div>
      <div class="item">
        <i class="marker icon"></i>
        <div class="content">
          Nairobi Ke
        </div>
      </div>
      <div class="item">
        <i class="mail icon"></i>
        <div class="content">
          <a href="mailto:info@fom.co.ke">info@fom.co.ke</a>
        </div>
      </div>
      <div class="item">
        <i class="linkify icon"></i>
        <div class="content">
          <a href="http://www.fom.co.ke">fom.co.ke</a>
        </div>
      </div>
    </div>
    </div>
    <script src="script.js"></script>
@endsection