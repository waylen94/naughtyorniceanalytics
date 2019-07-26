<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Analytics') - NaughtyorNice</title>
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app" class="{{ route_class() }}-page">
  
  <!-- Page Wrapper -->
  	<div id="wrapper">

        @include('layouts._sidebar')
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        @include('layouts._header')
        
        
        
        @yield('content')
        
        @include('layouts._footer')
        </div>
    <!-- End of Content Wrapper -->
    
  	</div>
  <!-- End of Page Wrapper -->
  
  </div>
  

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>