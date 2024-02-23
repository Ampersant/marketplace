<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dev, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css?family=Gilroy&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/features.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
</head>
<body>
    <div id="app">
        <feature ></feature>
    </div>
</body>
</html>