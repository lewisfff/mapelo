@extends('_root')

@section('content')
    <main>
        <section id="intro">
            <p>Hello <span class="user">{{ $user->username }}!</span></p>
            <div class="image"
            style="background-image:url('{!! $user->avatar !!}')"></div>
            <p>Which is easiest?</p>
        </section>

        <section class="vote">
            <div class="container">
                <div>
                    <button class="map" id="map1">{{ $maps[0] }}</button>
                </div>
                <div>
                    <button class="map" id="map2">{{ $maps[1] }}</button>
                </div>
            </div>
        </section>
        <section class="skip">
            <p>Not sure? Skip it</p>
            <div class="container">
                <div>
                    <button id="dontknow">I'm not sure 🤔</button>
                </div>
            </div>
        </section>

    </main>
@endsection