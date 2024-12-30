<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    <script src="{{asset('js/flowbite.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <x-hero-1 />
    <x-partner />
    <x-section-cari-domain />
    <x-section-cloud-hosting />
    <x-section_tawaran_lain />
    <x-section_hosting />
    <x-section_trust />
    <x-section_testimonial />
    <x-sectio_faq />
    <x-button-top />
    @include('footer')

</body>

</html>