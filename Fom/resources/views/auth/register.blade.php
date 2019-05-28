@extends('layouts.app')

@section('content')
        <!-- This is the sign up tab-->
        <div class="ui centered grid">
          <div class="eight wide column">
            <fieldset>
                <!--This is the steps Header-->
                <div class="ui mini fluid steps">
                  <div class="active step">
                    <i class="user icon"></i>
                    <div class="content">
                      <div class="title">Create an account </div>
                      <div class="description">Create your user account</div>
                    </div>
                  </div>
                  <div class="disabled step">
                    <i class="tasks icon"></i>
                    <div class="content">
                      <div class="title">Preferences </div>
                      <div class="description">Select your Preferences</div>
                    </div>
                  </div>
                </div>
                <!-- This is the sign up form-->
                <form method="POST" action="{{ route('register') }}" class="ui form">
                  @csrf
                <div class="field">
                  <label>Name</label>
                  <div class="two fields">
                    <div class="field">
                      <input type="text" name="firstname" id="firstname" placeholder="First Name" Required>
                    </div>
            
                    <div class="field">
                      <input type="text" name="lastname" id="lastname" placeholder="Last Name" Required>
                    </div>
                  </div>
                </div>
                <div class="field">
                  <label>Email</label>
                  <div class="fields">
                    <div class="twelve wide field">
                      <input type="text" name="email" id="email" placeholder="Email" Required>
                    </div>
                  </div>
                </div>
				        <div class="field">
                  <label>Password</label>
                  <div class="fields">
                    <div class="twelve wide field">
                      <input type="password" name="password" id="password" placeholder="Password" Required>
                    </div>
                  </div>
                </div>
				        <div class="field">
                  <label>Confirm Password</label>
                  <div class="fields">
                    <div class="twelve wide field">
                      <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                <!--
                <div class="fields">
                  <div class="seven wide field">
                    <label>County</label>
                    <input type="text" name="card[number]" maxlength="16" placeholder="County">
                  </div>
                  <div class="three wide field">
                    <label>Date of Birth</label>
                    <input type="text" name="card[cvc]" maxlength="3" placeholder="Date">
                  </div>
                  <div class="six wide field">
                    <label>Month</label>
                    <div class="two fields">
                      <div class="field">
                        <select class="ui fluid search dropdown" name="card[expire-month]">
                          <option value="">Month</option>
                          <option value="1">January</option>
                          <option value="2">February</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                      </div>
                      <div class="field">
                        <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                      </div>
                    </div>
                  </div>
                </div>-->
                <button type="submit" class="ui primary button" >Create Account </button>
                </form>
            </fieldset>
          </div>
        </div>
        @endsection