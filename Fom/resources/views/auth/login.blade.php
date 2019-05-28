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
                <form class="ui form" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="fifteen wide field">
                    <label>Email</label>
                    <input placeholder="Email" type="text" name="email" id="email">
                  </div>

                  <div class="fifteen wide field">
                    <label>Password</label>
                    <input placeholder="Password" type="Password" name="password" id="password">
                  </div>
                  <div class="ui description">
                   <a href="#">Forgot your password</a>
                  </div>
                </div>
                <div class="center aligned extra content">
                <div class="ui field ">
                  <button type="submit" class="ui primary button" >Sign in </button>
                
                  <div class="ui description">
                    Don't have an account? Create one <a href="{{ route('register')}}">here</a>
                  </div>
                </div>
                </form>
                </div>
                </div>
              </div>
        </div>
@endsection