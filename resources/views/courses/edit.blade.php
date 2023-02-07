@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('courses.update', $course) }}">
    @method('put')
    @csrf
    Kurs Adı: <input name="name" value="{{ old('name') ? old('name') : $course->name }}" required>
    @error('name')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <hr>
    Kurs Eğitmenleri: <input name="lecturers" value="{{ old('lecturers') ? old('lecturers') : $course->lecturers }}">
    @error('lecturers')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <hr>
    Kontenjan: <input name="available_seats"
        value="{{ old('available_seats') ? old('available_seats') : $course->available_seats }}" type="number" required>
    @error('available_seats')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <br>
    <button>Güncelle</button>
</form>
@endsection
