<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="icon" href="{{ asset('ardhi-code.png') }}" type="image/png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    {{-- static-bar --}}
    <div class="background-effect"></div>
    <div data-aos="fade-right" data-aos-duration="1000" class="static-bar">
        <div class="identity">
            <h1>Anang Ardhiansyah</h1>
            <h3>Software Engineer | Student</h3>
            <h4>Still looking for a good experience to fill my portfolio. </h4>
            <div class="nav">
                <ul>
                    About
                </ul>
                <ul>
                    Experience
                </ul>
                <ul>
                    Projects
                </ul>
            </div>
        </div>

        <div class="static-footer">

        </div>
    </div>



    <div data-aos="fade-left" data-aos-duration="1000" class="content">
        @yield('content')
    </div>

    <script>
        const bgEffect = document.querySelector(".background-effect");

        document.addEventListener("mousemove", (e) => {
            const x = e.clientX;
            const y = e.clientY;
            bgEffect.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(126, 134, 133, 0.179), transparent 40%)`;
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>