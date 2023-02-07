@extends('layouts.app')

@section('content')
<h1>{{ $course->name }}</h1>
{{ $course->lecturers }}
<br>
{{ $course->available_seats }}
@endsection
