@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="col-md-6 col-xs-12">

            <h1>Register</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'register_path']) }}

                <!-- Username Form Input -->
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', null, ['class' => 'form-control']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <!-- Password_confirmation Form Input -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                </div>

                <!-- Form Submit Button -->
                <div class="form-group">
                    {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
                </div>

            </div>

        </div>

    {{ Form::close() }}

@stop