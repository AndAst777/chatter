<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
      <a href="{{route('profile', $post->user->id)}}">{{$post->user->name}}</a>
        {{$post->text}}
        {{$post->image}}
        
    @endforeach
</body>
</html>