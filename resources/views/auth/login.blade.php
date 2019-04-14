<!DOCTYPE html>
<html lang="en">

<head>
    <title>Weone</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">




</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    main{
        height: 100vh;
        background: url(/images/login_bg.png) no-repeat fixed center;
        background-size: cover;
    }
    #container{
        width: 350px;
        height: 500px;
        background: inherit;
        position: absolute;
        overflow: hidden;
        top: 50%;
        left: 50%;
        margin-left: -175px;
        margin-top: -250px;
        border-radius: 8px;
    }
    #container:before{
        width: 400px;
        height: 550px;
        content: "";
        position: absolute;
        top: -25px;
        left: -25px;
        bottom: 0;
        right: 0;

        background: inherit;
        box-shadow: inset 0 0 0 200px rgba(255,255,255,0.2);
        filter: blur(10px);
    }
    form img{
        width: 120px;
        height: 120px;
        border-radius: 100%;
        margin-top: -10px;
    }
    form{
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    input[name="email"]{
        background: 0;
        width: 250px;

        border: none;
        border-bottom: 2px solid rgba(255,255,255, 0.3);
        margin: 20px 0;
        padding-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
        color: rgba(255,255,255, 0.8);
    }

    input[name="password"]{
        background: 0;
        width: 250px;
        border: none;
        border-bottom: 2px solid rgba(255,255,255, 0.3);
        margin: 20px 0;
        padding-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
        color: rgba(255,255,255, 0.8);
    }
    input[type="submit"]{
        border: 0;
        width: 250px;
        border-radius: 8px;
        padding-bottom: 0;
        height: 60px;
        background: #df2359;
        color: white;
        cursor: pointer;
        transition: all 600ms ease-in-out;
    }
    input[type="submit"]:hover{
        background: #C0392B;

    }
    span a{
        color: rgba(255,255,255, 0.8);
    }
    ::placeholder {
        color: white;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: white;
        opacity: 1;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: white;
        opacity: 1;
    }
</style>
<body>

<main>
    {{--<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">--}}

        {{--<img src="/images/ROUSHUNLOGOwhite.png" style="width: 20%;margin-top: 20px">--}}

        {{--<!--<input id="date" value="" type="text">-->--}}
        {{--<!--<button onclick="myFunction()">Try it</button>-->--}}

    {{--</div>--}}
    <div id="container" class="col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="/images/header/weone.png" style="margin-top: -30px;margin-bottom: 20px"><br>


            <div>
                <input id="email" name="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}"  required placeholder="Enter email" >
                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div>
                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">{{ __('Login') }}</button>



        </form>
    </div>
</main>
</body>
</html>
