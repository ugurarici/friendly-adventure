<h1>Kurslar</h1>
<ul>
    @foreach($courses as $course)
    {{ $course->name }}
    @endforeach
</ul>
