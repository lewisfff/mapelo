@extends('_root')

@section('content')
    <main>
        <section id="intro">
            <p>Hello <span class="user">{{ $user->username }}!</span></p>
            <div class="image"
            style="background-image:url('{!! $user->avatar !!}')"></div>
            <p>Which is harder?</p>
        </section>


        @if ($user->votes_remaining > 0 || $user->last_voted === null)

            <section class="vote">
                <div class="container">
                    <div>
                        <form action="/vote" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="map_easier" value="{{ $maps[1] }}">
                            <input type="hidden" name="map_harder" value="{{ $maps[0] }}">
                            <button class="map" id="map1">
                                {{ $maps[0] }}
                            </button>
                        </form>
                    </div>
                    <div>
                        <form action="/vote" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="map_easier" value="{{ $maps[0] }}">
                            <input type="hidden" name="map_harder" value="{{ $maps[1] }}">
                            <button class="map" id="map2">
                                {{ $maps[1] }}
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="skip">
                <p>Not sure? Skip it</p>
                <div class="container">
                    <div>
                        <form action="/vote" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="map_easier" value="skip">
                            <button id="dontknow">I'm not sure 🤔</button>
                        </form>
                    </div>
                </div>
            </section>

        @else
            <section class="vote">
                <div class="container">
                    <div>
                        <p>You have done all of your votes.</p>
                        <p>Try again tomorrow!</p>
                    </div>
        @endif
    </main>
@endsection