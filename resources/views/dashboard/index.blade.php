@php use Illuminate\Support\Str; @endphp
@extends('layout.main')


@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard/index.css') }}">

<div class="about">

    <p>
        I'm <strong>Anang Ardhiansyah</strong>, a Software Engineer and Student. I'm passionate about developing backend systems and continuously improving my skills. I'm always eager to learn new technologies and apply them in real-world projects.
        Now, i'm studying at <strong>Institut Teknologi Sepuluh Nopember</strong> majoring in <strong>Informatics Engineering</strong>.
        Currently, I'm seeking opportunities to gain valuable experience and enhance my portfolio. Feel free to explore my projects and reach out if you'd like to hire me in a project.
    </p>

    <p>
        In the past, I have experience developing some web with CodeIgniter and Laravel. But now, I want to learn more about backend development with Node.js and Express.js.
    </p>
</div>

<div class="experience">
    <h2>--- Experience ---</h2>
    @foreach ($experiences as $experience)
    <div class="experience-item">
        <h4>{{ $experience->date }}</h4>
        <h3>{{ $experience->title }}</h3>
        <p>{{ Str::limit($experience->description, 100) }}</p>
    </div>
    @endforeach
</div>
@endsection