<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>


<p> Bonjour RealVilla;</p>
<p>{{$mailData['sujet']}}</p>
<p>{{$mailData['message']}}</p>
<p>Email : {{$mailData['email']}}</p>
<p>Telephone : {{$mailData['phone']}}</p>
<p>{{$mailData['name']}}</p>
<p>Bien cordialement</p>
</div> 
</body>
</html>