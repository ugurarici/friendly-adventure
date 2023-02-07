@extends('layouts.app')

@section('content')
<ul>
    @foreach($courses as $course)
    <a href="{{ route('courses.show', $course) }}">
        {{ $course->name }}
    </a>
    @endforeach
</ul>
@endsection
