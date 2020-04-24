<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>PhotoShow</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootpag/1.0.7/jquery.bootpag.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootpag/1.0.7/jquery.bootpag.min.js">

</head>
<body>
   
    @include('includes.nav')
        <div class="container">
            @include('includes.messages')
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
</body>
</html>