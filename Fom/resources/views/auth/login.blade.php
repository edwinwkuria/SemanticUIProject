@extends('layouts.app')

@section('content')
<!-- This is the log in segment-->
        
<div class="ui centered inverted card">
		            <div class="ui card">
                <div class="content">
                  <div class="center aligned header">Sign In</div>
                </div>
                <div class="center aligned">
                <i class="massive user circle icon"></i>
                </div>
                <div class="content">
                <div class="ui form" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="fifteen wide field">
                    <label>Username</label>
                    <input placeholder="Username" type="text">
                  </div>

                  <div class="fifteen wide field">
                    <label>Password</label>
                    <input placeholder="Password" type="Password">
                  </div>
                  <div class="ui description">
                   <a href="#">Forgot your password</a>
                  </div>
                </div>
                <div class="center aligned extra content">
                <div class="ui field ">
                  <button class="ui primary button" type="submit">Sign in </button>
                  <div class="ui description">
                    Don't have an account? Create one <a href="signup.html">here</a>
                  </div>
                </div>
                </div>
                </div>
              </div>
        </div>
@endsection