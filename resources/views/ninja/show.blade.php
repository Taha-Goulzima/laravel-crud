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
    <h2>{{$ninja->name}}</h2>

    <div>
        <h3>gym information</h3>
        <p>gym name : {{$ninja->gym->name}}</p>
        <p>location :{{$ninja->gym->location}} </p>
        <p>discription : {{$ninja->gym->description}}</p>
    </div>

    <form action="{{route('ninja.destroy' ,$ninja->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
    <form action="{{ route('ninja.edit', $ninja->id) }}" method="GET">
        <button type="submit">Edit</button>
    </form>
    
    </x-layout>
</body>
</html>