@extends('layouts.agent')



@section('content')
<div class="_page">
    <div class="container">

        <form class="form-horizontal _signup" method="POST" action="{{ route('register') }}">

            {{ csrf_field() }}

        

            <h1 class="_signup__headline">Customer Registration</h1>

            <div class="row">

                <div class="col-sm-6">

                    {{-- <h2 class="_signup__title">Company Details</h2> --}}

                    <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                        <label for="user_name" class="col-md-4 control-label">User Name*</label>
                        <div class="col-md-8">
                            <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required autofocus />
                            @if ($errors->has('user_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name*</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required />
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                        <label for="company_name" class="col-md-4 control-label">Company Name</label>
                        <div class="col-md-8">
                            <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" />

                            @if ($errors->has('company_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address*</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required />

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">
                        <label for="email_confirmation" class="col-md-4 control-label"> Confirm E-mail Address*</label>
                        <div class="col-md-8">
                            <input id="email_confirmation" type="email" class="form-control" name="email_confirmation" value="{{ old('email_confirmation') }}" required />

                            @if ($errors->has('email_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Choose your Password*</label>
                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" name="password" required />

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password_confirmation" class="col-md-4 control-label">Confirm Your Password*</label>
                        <div class="col-md-8">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required />

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                </div>

            </div>

            <div class="_signup__footer">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
                {{ csrf_field() }}
            </div>

        </form>


    </div>
</div>
@endsection
