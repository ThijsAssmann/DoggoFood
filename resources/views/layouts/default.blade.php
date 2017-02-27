<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Thijs Assmann, Rob Biemans">
    <link rel="icon" href="../../favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('../resources/assets/css/bootstrap-material-design.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('../resources/assets/css/ripples.min.css') }}">

    <link href="{{ URL::asset('../resources/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../resources/assets/css/thijs.css') }}" rel="stylesheet">

      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </head>

    <body class="landing-page">

      @include('static.header')
        @yield('content')


    </body>

    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('../resources/assets/js/holder.min.js') }}"></script>
    <script src="{{ URL::asset('../resources/assets/js/material.min.js') }}"></script>
    <script src="{{ URL::asset('../resources/assets/js/ripples.min.js') }}"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });


      $.material.init();
    </script>


</html>
