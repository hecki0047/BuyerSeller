@extends('protected.admin.master')
@section('title', 'Register')

@section('content')


        <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'registration.store']) !!}
                        <fieldset>

                            @if (session()->has('flash_message'))
                                <div class="form-group">
                                    <p>{{ session()->get('flash_message') }}</p>
                                </div>
                            @endif

                            <!-- Email field -->
                            <div class="form-group">
                                {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])!!}
                                {!! errors_for('email', $errors) !!}
                            </div>

                            <!-- Password field -->
                            <div class="form-group">
                                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
                                {!! errors_for('password', $errors) !!}
                            </div>

                            <!-- Password Confirmation field -->
                            <div class="form-group">
                                {!! Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control', 'required' => 'required'])!!}

                            </div>

                            <!-- First name field -->
                            <div class="form-group">
                                {!! Form::text('first_name', null, ['placeholder' => 'First Name', 'class' => 'form-control', 'required' => 'required'])!!}
                                {!! errors_for('first_name', $errors) !!}
                            </div>

                            <!-- Last name field -->
                            <div class="form-group">
                                {!! Form::text('last_name', null, ['placeholder' => 'Last Name', 'class' => 'form-control', 'required' => 'required'])!!}
                                {!! errors_for('last_name', $errors) !!}
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                               {!! Form::label('account_type', 'Account Type:') !!}
                            {!! Form::select('account_type',[''=>'--select--','Suppliers'=>'Suppliers','Buyers'=>'Buyers'],null, ['class' => 'form-control']) !!}
                            {!! errors_for('account_type', $errors) !!}
                            </div>
                            </div>

                            <!-- Submit field -->
                            <div class="form-group">
                                {!! Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
                            </div>




                        </fieldset>
                        {!! Form::close() !!}
                    </div>
                </div>

                <p style="text-align:center">Already have an account? <a href="{{ url('login') }}">Login</a></p>

            </div>
        </div>
    </div>

@endsection