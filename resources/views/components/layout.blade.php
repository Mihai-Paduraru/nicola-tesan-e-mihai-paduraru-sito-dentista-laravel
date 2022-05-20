<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

</head>
<body>

    <div class="icon-head-top">
        <i class="icon-custom fa-solid fa-arrow-turn-down fa-2x"></i>
    </div>

    <x-navbar />
    
    {{$slot}}


    

    <x-footer />

    <script src="https://kit.fontawesome.com/cde98cbd4e.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>