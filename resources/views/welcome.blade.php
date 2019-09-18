@extends('app.layout')

@section('content')
    <h1>My First Laravel Website!</h1>
    <p>{{ $foobar }}</p>
    <ul>
{{--        Special Laravel syntax is an option, but the normal PHP syntax would also work. --}}
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
