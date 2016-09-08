<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">    
	<title>Document</title>
</head>
<body>
   @yield('content')

   {!! Html::script('js/jquery-2.1.1.min.js') !!}
   {!! Html::script('js/dropdown.js') !!}
</body>
</html>