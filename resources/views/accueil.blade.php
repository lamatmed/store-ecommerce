<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
   
    <p>Nom d'utilisateur est {{ $name }}
        il a {{$age}} ans 
    </p>
    
   @if ($name=='Lamat')
     <p>Admin </p>
     @else
     <p>Simple utilisateur</p>
    @endif
</body>
</html>