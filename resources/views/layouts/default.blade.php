<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Sun App')suntest</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
<!-- header, nav 是 HTML5 提供的一种语义化标签，其实际作用与 div 一致，
语义化的标签能帮助机器更方便理解代码，使代码更简洁，有助于网站的 SEO 优化。
我们在上面代码使用到一些如 navbar, container 等类名在 Bootstrap 中都拥有特殊含义。 -->
	@include('layouts._header')
	<div class="container">
      @yield('content')
      @include('layouts._footer')
      <!-- @  include 是 Blade 提供的视图引用方法，可通过传送一个具体的文件路径名称来引用视图。 -->
    </div>
</body>
</html>