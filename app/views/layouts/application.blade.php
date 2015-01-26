<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Laravel4 Blog</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    @if (Session::has('message'))
      <div class="alert alert-warning">
        {{ Session::get('message') }}
      </div>
    @endif

    @yield('main')
  </div>
</body>
</html>
