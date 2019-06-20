@extends('layouts.app')

@section('content')
        <!-- This is the sign up tab-->
        <div class="ui container">
          <div class="eight wide column">
            <fieldset>  
            <form class="ui large form" action="/createevent" enctype="multipart/form-data" method="post">
                @csrf
                <div class="three fields">
                    <div class="eight wide field">
                    <label>Name of the event</label>
                    <input type="text" placeholder="Name of the event" id="NameOfEvent" name="NameOfEvent">
                    </div>
                    <div class="six wide field">
                    <label>Venue of the event</label>
                    <input type="text" placeholder="Venue of the event" id="VenueOfEvent" name="VenueOfEvent">
                    </div>
                    <div class="three wide field">
                    <label>Town </label>
                    <input type="text" placeholder="Town" id="Town" name="Town">
                    </div>        
                </div>
                <div class="fields">
                    <div class="ui three wide field">
                    <label>Date</label>
                    <div class="ui calendar">
                    <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input type="text" placeholder="Pick up a date" name="DateOfTheEvent" id="DateOfTheEvent">
                    </div>
                    </div>
                    </div>
                    <div class="ui seven wide field">
                    <label>Organizing company or group</label>
                    <input type="text" placeholder="Organizing company or group" id="OrganizingCompany" name="OrganizingCompany">      
                    </div>
                    <div class="ui six wide field">
                    <label>Contact email</label>
                    <input type="text" placeholder="info@nameofcompany.com" id="ContactEmail" name="ContactEmail">
                    </div>
                </div>
                <div class="field">
                    <label>Description of the event</label>
                    <textarea rows="3" id="Description" name="Description"></textarea>
                </div>

                <div class="grouped fields">
                <label>Please select two of the most relevant event categories</label>
                <div class="inline field">
                    <div class="ui toggle checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>Concerts</label>
                </div>
                <div class="inline field">
                    <div class="ui toggle checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>Expos</label>
                </div>
                <div class="inline field">
                    <div class="ui toggle checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>Festivals</label>
                </div>
                </div>
                <div>
                <input class="ui basic button" type="file" name="photo" id="photo">
                </div>
                <div class="field">
                <input class="ui basic button" type="submit" value="Create Event" name="submit">
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif
            </fieldset>
          </div>
        </div>
        <script src="js/script.js"></script>
        @endsection