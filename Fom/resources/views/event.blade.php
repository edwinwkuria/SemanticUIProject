@extends('layouts.app')

@section('content')
        <!-- This is the sign up tab-->
        <div class="ui container">
          <div class="eight wide column">
            <fieldset>  
            <div class="ui large form">
                <div class="three fields">
                    <div class="eight wide field">
                    <label>Name of the event</label>
                    <input type="text" placeholder="Name of the event">
                    </div>
                    <div class="six wide field">
                    <label>Venue of the event</label>
                    <input type="text" placeholder="Venue of the event">
                    </div>
                    <div class="three wide field">
                    <label>Town </label>
                    <input type="text" placeholder="Town">
                    </div>        
                </div>
                <div class="fields">
                    <div class="ui three wide field">
                    <label>Date</label>
                    <div class="ui calendar">
                    <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input type="text" placeholder="Pick up a date" name="date">
                    </div>
                    </div>
                    </div>
                    <div class="ui seven wide field">
                    <label>Organizing company or group</label>
                    <input type="text" placeholder="Organizing company or group">      
                    </div>
                    <div class="ui six wide field">
                    <label>Contact email</label>
                    <input type="text" placeholder="info@nameofcompany.com">
                    </div>
                </div>
                <div class="field">
                    <label>Description of the event</label>
                    <textarea rows="3"></textarea>
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
                <input class="ui basic button" type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="field">
                <input class="ui basic button" type="submit" value="Create Event" name="submit">
                </div>
            </fieldset>
          </div>
        </div>
        <script src="js/script.js"></script>
        @endsection