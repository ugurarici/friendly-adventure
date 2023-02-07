@extends('layouts.app')

@section('content')
<h1>{{ $course->name }}</h1>
{{ $course->lecturers }}
<br>
Toplam Kontenjan: {{ $course->available_seats }}
<br>Eklenme Zamanı: {{ $course->created_at }}
<br>Güncellenme Zamanı: {{ $course->updated_at }}
<hr>
<h2>Öğrenciler</h2>
<ol>
    @foreach($course->students as $student)
    <li>{{ $student->name }}</li>
    @endforeach
</ol>
<hr>
<a href="{{ route('courses.edit', $course) }}">Düzenle</a>
<form method="POST" action="{{ route('courses.destroy', $course) }}">
    @method('DELETE')
    @csrf
    <button>Sil</button>
</form>
@endsection
