<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('css')
  <link rel="stylesheet" href="share.css">
  <link rel="stylesheet" href="{{ asset('/css/.css') }}">
  <title>@yield('title')</title>
</head>
<body>
  <h1>@yield('title')</h1>
  @yield('content')
</body>
</html>