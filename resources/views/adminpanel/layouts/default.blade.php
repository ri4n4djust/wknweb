
<!DOCTYPE html>
<html>
<head>
  @include('adminpanel.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
<header class="main-header">
  @include('adminpanel.includes.headmenu')
</header>
<aside class="main-sidebar">
  @include('adminpanel.includes.sidemenu')
</aside>
<div class="content-wrapper">
  @yield('content')
</div>
<footer class="main-footer">
  @include('adminpanel.includes.footer')
</footer>

<div class="control-sidebar-bg"></div>
</div>
@include('adminpanel.includes.footerjs')
</body>
</html>
