@extends('layout.default')

@section('content')


    <div class="container">
        <div class="col-md-6 col-md-offset-4">
            <div class="panel member_signin">
                <div class="panel-body">
                    <div class="fa_user">
                        <i class="fa fa-user"></i>
                    </div>
                    <p class="member">Member Register</p>

                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>

                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>

                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">

                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>


                            <input type="password" class="form-control" name="password_confirmation"
                                   value="{{ old('password_confirmation') }}">

                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                    </form>
                    @include('parts.errors')
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>