<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="/assets/readToInnovateLogo.png">
    <link rel="stylesheet" href="{{asset('/css/stylesheet.css?v=').time()}}">
</head>
<body dir="rtl" class="bg-gray-100">
<div class="flex justify-center mt-32 w-full">
    <form class="lg:w-4/12 w-10/12" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="flex flex-col">
            <label for="email" class="text-gray-800 text-lg"> البريد الالكتروني</label>
            <input id="email" type="email"
                   class="mt-3 rounded-lg focus:outline-none border border-indigo-200 px-3 py-2 form-control @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="password" class="mt-2 text-gray-800 text-lg">باسورد</label>
            <input id="password" type="password"
                   class="mt-3 rounded-lg focus:outline-none border border-indigo-200 px-3 py-2 form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        {{--        <div class="form-group row">--}}
        {{--            <div class="col-md-6 offset-md-4">--}}
        {{--                <div class="form-check">--}}
        {{--                    <input class="form-check-input" type="checkbox" name="remember"--}}
        {{--                           id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--                    <label class="form-check-label" for="remember">--}}
        {{--                        {{ __('Remember Me') }}--}}
        {{--                    </label>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class=flex>
            <button type="submit" class="mt-4 rounded px-4 py-2 text-lg bg-indigo-500 text-white">
              تسجيل الدخول
            </button>
            {{--                @if (Route::has('password.request'))--}}
            {{--                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
            {{--                        {{ __('Forgot Your Password?') }}--}}
            {{--                    </a>--}}
            {{--                @endif--}}

        </div>
    </form>

</div>
</body>
</html>








