@php use Illuminate\Support\Str; @endphp
@extends('layout.main')


@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard/index.css') }}">

<div class="about">

    <p>
        My name is <strong>Anang Ardhiansyah</strong>, a Software Engineer and a Undergraduate Student. I am passionate about backend systems and constantly improving my skills. I am always eager to learn new technologies and apply them to real-world projects. I am currently studying Informatics Engineering at <strong>Institut Teknologi Sepuluh Nopember</strong>. I am currently looking for opportunities to gain valuable experience and expand my portfolio. Feel free to explore my projects and contact me if you would like to hire me for a project.
    </p>

    <p>
        In the past, I have experience developing some web with CodeIgniter and Laravel. But now, I want to learn more about backend development with Node.js and Express.js.
    </p>

    <p>
        My dream is to become a software architecture engineer. I'm very open to collaborations or projects. Let's connect together.
    </p>
</div>

<div class="experience">
    <h2>--- Experience ---</h2>
    @foreach ($experiences as $experience)
    <div class="experience-item">
        <a href="{{ route('experience.show', $experience->hashid) }}">
            <h4>{{ $experience->date }}</h4>
            <h3>{{ $experience->title }}</h3>
            <p>{{ Str::limit($experience->description, 150) }}</p>
        </a>
    </div>
    @endforeach
</div>

<div class="project">
    <h2>--- Project ---</h2>
    @foreach ($projects as $project)
    <div class="project-item">
        <a href="{{ route('project.show', $project->hashid) }}">
            <h4>{{ $project->date }}</h4>
            <h3>{{ $project->title }}</h3>
            <p>{{ Str::limit($project->description, 150) }}</p>
        </a>
    </div>
    @endforeach
</div>
@endsection