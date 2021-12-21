<!doctype html>

<head>
  <!-- ... --->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/components/fonts.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-main-bg bg-center bg-cover bg-fixed antialiased overflow-hidden bg-no-repeat">
  <div class="bg-main-board bg-cover bg-no-repeat bg-center h-[1079px] w-[2048px] absolute text-center" id="main-board">
    <input id="routeName" type="hidden" value="{{ Route::currentRouteName() }}">
    <div class="absolute z-10 top-12 left-64 bottom-28 right-80">
      @section('content')

      @show
    </div>
  </div>
</body>
