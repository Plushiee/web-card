@extends('template.template')
@section('title', "Plushiee's Minecraft Map")

@section('css')
    <link rel="stylesheet" href="/css/map.css">
@endsection

@section('main')
    <main>
        <noscript>
            For full functionality of this site it is necessary to enable JavaScript.
            Here are the <a href="http://www.enable-javascript.com/" target="_blank">
                instructions how to enable JavaScript in your web browser</a>.
        </noscript>
        <div class="container-fluid main px-0">
            <iframe src="{{ route('minecraft.map') }}" frameborder="0"></iframe>
        </div>
    </main>
@endsection

@section('javascript')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection
