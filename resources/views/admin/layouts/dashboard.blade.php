<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
  
  @include('admin.includes.dashboard.meta')

  <title>@yield('title', 'eStore')</title>
  
  @include('admin.includes.dashboard.styles')

  @yield('css')

</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  {{-- Start Header  --}}
  @include('admin.includes.dashboard.header')
  {{-- End Header  --}}

  {{-- Start Sidebar  --}}
  @include('admin.includes.dashboard.sidebar')
  {{-- End Sidebar  --}}

  {{-- Start Content  --}}
  @yield('content')
  {{-- End Content  --}}


  {{-- Start Footer  --}}
  @include('admin.includes.dashboard.footer')
  {{-- End Footer  --}}

  {{-- Start Scripts  --}}
  @include('admin.includes.dashboard.scripts')
  @yield('js')
  {{-- Start Scripts  --}}

</body>
</html>