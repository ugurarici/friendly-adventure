@extends('layouts.app')

@section('content')
<ul>
    @foreach($courses as $course)
    <li>
        <a href="{{ route('courses.show', $course) }}">
            {{ $course->name }}
        </a>
    </li>
    @endforeach
</ul>
@endsection
