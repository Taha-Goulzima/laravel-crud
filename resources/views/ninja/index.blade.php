<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-layout>
    <h1>All Ninjas</h1>
    <ul>
        @foreach ($ninjas as $ninja)
        <x-card href='/ninja/{{$ninja->id}}'>
           <div>
            <h1>Full name: {{$ninja->name}} {{$ninja->lastname}}</h1>
            <p>{{$ninja->gym->name}}</p>
           </div>
        </x-card>
    @endforeach
    
    </ul>
    {{$ninjas->Links()}}
    </x-layout>
</body>
</html>
