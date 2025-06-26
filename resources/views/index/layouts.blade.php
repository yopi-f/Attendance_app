<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','アプリ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('components.stylecss')<!--スタイルシート読み込み-->
  </head>
  
    <body class="d-flex flex-column min-vh-100">
      @include('components.header')<!--ヘッダー読み込み-->
      <main class="flex-grow-1">
     
        
       @yield('content')
       
      </main>
    </body>
  @include('components.footer')<!--フッター読み込み-->
</html>
