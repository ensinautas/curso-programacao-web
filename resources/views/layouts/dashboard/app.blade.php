<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("dashboard/vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{asset("dashboard/vendors/ti-icons/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("dashboard/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("dashboard/vendors/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("dashboard/vendors/font-awesome/css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{asset("dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}}">
     <link rel="stylesheet" href="{{asset("dashboard/css/style.css")}}">
    <link rel="shortcut icon" href="{{asset("dashboard/images/favicon.png")}}" />
    @vite(["/resources/css/app.css" , "/resources/js/app.js"])

</head>
  <body>

  {{ $slot }}
  <script src="{{ url("dashboard/js/sweetalert.js") }}"></script>
  <x-livewire-alert::scripts />

    <script src="{{asset("dashboard/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{asset("dashboard/vendors/chart.js/chart.umd.js")}}"></script>
    <script src="{{asset("dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{asset("dashboard/js/off-canvas.js")}}"></script>
    <script src="{{asset("dashboard/js/misc.js")}}"></script>
    <script src="{{asset("dashboard/js/settings.js")}}"></script>
    <script src="{{asset("dashboard/js/todolist.js")}}"></script>
    <script src="{{asset("dashboard/js/jquery.cookie.js")}}"></script>
    <script src="{{asset("dashboard/js/dashboard.js")}}"></script>

  </body>
</html>
