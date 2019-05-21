<!DOCTYPE html>
<html>
   <head>
       @include('inc.head')
   </head>
   <body>
      
     @include('inc.header')
     <div id="wrapper">
     @yield('content')
     </div>
     @include('inc.footer')
     @yield('javascript')
     
   </body>
</html>