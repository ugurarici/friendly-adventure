@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('courses.store') }}">
    @csrf
    Kurs Adı: <input name="name" value="{{ old('name') }}" required>
    @error('name')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <hr>
    Kurs Eğitmenleri: <input name="lecturers" value="{{ old('lecturers') }}">
    @error('lecturers')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <hr>
    Kontenjan: <input name="available_seats" value="{{ old('available_seats') }}" type="number" required>
    @error('available_seats')
    <br> <small style="color: rgb(170, 0, 0);"> {{ $message }} </small>
    @enderror
    <br>
    <button>Ekle</button>
</form>
@endsection
