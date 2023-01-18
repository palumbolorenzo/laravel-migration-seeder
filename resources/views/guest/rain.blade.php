<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
@extends('layouts.base')

@section('content')
    <ol>
        @foreach ($trains as $train)
            <li>{{ $trains->title }}</li>
        @endforeach
    </ol>
@endsection
</body>
</html>
