<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dev, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
</head>
<body>
    <div id="app">
        <!-- <marketplace-main></marketplace-main> -->

        <!-- 
            Здесь я создал отдельный компонент "AutorisationPage.vue", который был создан в файле app.js, как и MarketPlace.vue
            в роли главного компонента
            И он же по идее должен быть прикручен ко кнопке "Go Ahead!", находящаяся в компоненте Header.vue на строке 19
        -->
        <autorisation-page></autorisation-page>
    </div>
</body>
</html>