
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Welcome To Little Helal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/log_page.css')}}">
    <meta name="theme-color" content="#000">
</head>
<body>

    <div class="login-page mx-auto">
        <div class="container">
            <div class="row">
            <div class="bg-glass shadow rounded">
                <div class="form-left h-100 py-3 px-3">
                    <div class="tubelight text-center">
                        <a style="font-size: 8px" href="/"><span>H</span><span>E</span><span>L</span><span>A</span><span>L</span><span> </span><span>U</span><span>D</span><span>D</span><span>I</span><span>N</span>
                        </a>

                    </div>

                    <form method="post" action="{{ route('login') }}" class="row g-4 mt-3">
                        @csrf
    <div class="col-12">

 <div class="input-group">
 <div class="custominputgroup"><i class="bi bi-telephone-fill"></i></div>
<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="current-username" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus id="email">
@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
                        </div>

                        <div class="col-12">

                            <div class="input-group">
                                <div class="custominputgroup"><i class="bi bi-lock-fill"></i></div>
 <input type="password" name="password" autocomplete="current-password" id="password" class="form-control @error('password') is-invalid @enderror" value="" placeholder="Enter Password" required autocomplete="current-password">
 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 ">
                            <div class="form-check">
 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-light" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

  {{-- <div class="col-6 col-sm-6 col-md-6">
@if (Route::has('password.request'))
<a href="{{route('password.request')}}" class="float-end text-light">{{ __('Forgot Password')}}?</a>
@endif


                        </div> --}}

                        <div class="col-12">
                            <button type="submit" name="submit" style="width: 100%;" class="btn btn-custom px-4 float-end mb-2">login
                            </button>
                            <!-- <a href="/login/demo" style="width: 100%;" class="btn btn-custom px-4 float-end mb-2">Demo Login
                            </a> -->
                        </div>
                    </form>
                </div> </div>
            </div>
            <p class="text-end text-white mt-3">Powered By Little Helal</p>
        </div>
    </div>


    <!-- Bootstrap JS -->


    </body>
</html>
