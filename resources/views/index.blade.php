@extends('_root')

@section('content')
    <main>
        <section id="intro">
            <p>Hello <span class="user">{{ $user->username }}!
            </span></p>
            <div class="image"
            style="background-image:url('{!! $user->avatar !!}')"></div>
            <p>Please help me decide which maps are easier.<br><span class="easier">Click on the easier maps.</span><br>If you are not sure click on <span class="dontknow">I don't know</span> at the bottom. We trust you to vote with a pure heart!</p>
        </section>

        <section class="prevote">
            <div class="container">
                <div>
                    <a class="help" href="/vote">I am ready to help!</a>
                </div>
            </div>
        </section>
    </main>
@endsection