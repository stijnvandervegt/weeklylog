@extends('layout.default')

@section('content')


    <div class="container">
        <div class="col-md-3 col-md-offset-4">
            <div class="panel member_signin">
                <div class="panel-body">
                    <div class="fa_user">
                        <i class="fa fa-user"></i>
                    </div>
                    <p class="member">Member Login</p>

                    <form method="POST" action="/auth/login" class="form">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="email">Email address</label>

                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>

                            <input type="password" class="form-control" name="password" id="password">

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </form>
                    @include('parts.errors')
                    <a href="{{ route('register') }}">No member yet? Register here</a>
                </div>
            </div>
        </div>
    </div>
@stop