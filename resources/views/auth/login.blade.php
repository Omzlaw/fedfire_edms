<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fire Service</title>
    <meta property="og:title" content="Fire Service">
    <meta name="description" content="Fire Service EDMS and Employee Management">
    <link rel="icon" type="image/png" sizes="60x60" href="{{ asset('custom/img/logo.png') }}">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('custom/css/styles.css') }}">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css')}}" rel="stylesheet">
</head>

<body>
    {{-- <div><img src="{{ asset('custom/img/bg2.png')}}" style="margin-left: 40px;margin-top: 20px;"></div> --}}
    <section class="section2">
        <div class="row col-12">
            <div class="col-md-6 col-sm-12">
                <img class=""
                src="{{ asset('custom/img/bg2.jpg') }}"
                style="width: 334px;height: 433px; margin-left: 120px; margin-top: 20px;">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="ml-3 login-card">
                    <form action="{{ route('login') }}" id="authentication" method="post" class="shadow sign_validator"
                        style="width: 320px;height: 456px;margin-top: 10px;margin-left: 30px;padding-top: 60px;filter: sepia(0%);margin-right: 30px;margin-bottom: 20px;">
                        @csrf
                        <header></header>
                        <div class="form-group @error('email') is-invalid @enderror"
                            style="width: 240px;margin-left: 40px;margin-top: 60px;">
                            <!-- Start: Email--><input class="form-control d-xl-flex justify-content-xl-center" type="email"
                                data-toggle="tooltip" data-bs-tooltip="" name="email" placeholder="E-mail"
                                value="{{ old('email') }}" required
                                style="width: 240px;height: 42px;background-color: rgb(247,249,252);font-family: 'Source Sans Pro', sans-serif;"
                                title="Input email" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- End: Email -->
                        </div>
                        <div class="form-group" style="width: 240px;margin-left: 40px;"><input
                                class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                placeholder="Password"
                                style="width: 240px;height: 42px;background-color: rgb(247,249,252);font-family: 'Source Sans Pro', sans-serif;"
                                required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
        
                        <div class="form-group" style="font-family: 'Source Sans Pro', sans-serif;"><button
                                class="btn secondary-color-bg text-white d-xl-flex" type="submit"
                                style="background-color: rgb(6,12,56);padding-right: 95px;padding-left: 95px;margin-left: 40px;">LOG
                                IN</button>
                        </div>
                        <div class="form-group">
                            <div class="form-check" style="margin-left: 40px;"><input id="remember"
                                    {{ old('remember') ? 'checked' : '' }} class="form-check-input" type="checkbox"
                                    id="formCheck-1" style="color: rgb(247,249,252);"><label class="form-check-label d-xl-flex"
                                    for="formCheck-1" style="font-family: 'Source Sans Pro', sans-serif;">Remember me</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- begining of page level js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>
</body>

</html>
