<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>ACCOUNT REGISTRATION FORM</title>
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/style.css') }}">
</head>

<body>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

@include('tinymce::tpl')
<div class="container">
    @include('flash::message')
</div>
<div class="wrapper">
    <h1>Register For An Account</h1>
    <p>To sign-up for a free basic account please provide us with some basic information using
        the contact form below. Please use valid credentials.</p>
    {!! Form::model($user = new App\User ,['route' => 'register.post','files'=>true]) !!}

    @include('users.form', ['submitButtonText' => 'Save'])

            {!! Form::close() !!}
    @include('errors.list')
</div>
<p class="optimize">
    Optimized for Chrome & Firefox!
</p>{{--
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- This is only necessary if you do Flash::overlay('...') -->
<script>
    $('#flash-overlay-modal').modal();
</script>
<script src="{{ url('assets/js/index.js') }}"></script>

</body>
</html>
