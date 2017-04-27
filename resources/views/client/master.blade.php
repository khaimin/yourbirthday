<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="shortcut icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<title>@yield('head.title')</title>
<link rel="stylesheet" href="{{ url('public/css/stuck.css') }}">
<link rel="stylesheet" href="{{ url('public/css/style.css') }}">
<link rel="stylesheet" href="{{ url('public/css/touchTouch.css') }}">
@yield('head.css')
</head>
<body>
	@include('client.partials.navbar')

	@yield('body.content')

	@include('client.partials.footer')


<script src="{{ url('public/js/jquery.js') }}"></script>
<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  }); 
</script>
<script src="{{ url('public/js/jquery-migrate-1.1.1.js') }}"></script>
<script src="{{ url('public/js/script.js') }}"></script> 
<script src="{{ url('public/js/superfish.js') }}"></script>
<script src="{{ url('public/js/jquery.equalheights.js') }}"></script>
<script src="{{ url('public/js/jquery.mobilemenu.js') }}"></script>
<script src="{{ url('public/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('public/js/tmStickUp.js') }}"></script>
<script src="{{ url('public/js/jquery.ui.totop.js') }}"></script>
<script src="{{ url('public/js/touchTouch.jquery.js') }}"></script>
@yield('body.js')

</body>
</html>
