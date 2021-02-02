@extends('templates.default')


@section('content')
    <div class="mt-3">
        <h2>Sign Up</h2>
        <form method="POST" action="{{ route('auth.signUp') }}" novalidate>
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value=" {{old('email')}} " name="email"
                    id="email" aria-describedby="emailHelp">
                @if ($errors->has('email'))
                    <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="login" class="form-label">Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" name="username" value=" {{old('username')}} " id="username" aria-describedby="usernameHelp">
                @if ($errors->has('username'))
                    <div class="invalid-feedback"> {{ $errors->first('username') }} </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
                @if ($errors->has('password'))
                    <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
                @endif
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
