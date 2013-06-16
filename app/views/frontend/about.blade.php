@extends('frontend.base')

@section('topcontent')

<div class="container" id="bigPhotoThree">
    <div class="row">
        <!-- info -->
    </div>
</div>

<div class="container" id="subNavigationCanvas">
    <div class="row">
        <ul id="subNavigation">
            <li><a href="{{ URL::to('/about') }}" class="current">About</a> /</li>
            <li><a href="{{ URL::to('/about/blood-donation') }}">Blood Donation in General</a> /</li>
            <li><a href="{{ URL::to('/about/10-facts') }}">10 Facts from WHO</a> /</li>
            <li><a href="{{ URL::to('/about/misconceptions') }}">Misconceptions about Donating Blood</a> /</li>
            <li><a href="{{ URL::to('/about/lists-of-hospital') }}">Lists of Hospitals</a></li>
        </ul>
    </div>
</div>
@stop

@section('content')
<div class="row" id="whywedo">
    <div class="twelvecol">
        <br /><br />
        <h2>The problem</h2>
        <br />
    </div>
    <div class="sevencol">
        <article>
            <h4>This is how it all began.</h4>
            <p>There have been many discoveries made in the medical sector on how to save someone’s life, but there is still no substitute for blood. Blood is very vital in a medical emergency. Blood donations can help a variety of individuals: trauma victims, surgery patients, premature babies, individuals with anemia, cancer patients and many more.Your single unit of blood can help save the lives of up to three separate patients.</p>
        </article>
    </div>
    <div class="twelvecol">
        <br /><br />
        <h2>Our solution</h2>
        <br />
    </div>
    <div class="sevencol">
        <article>
            <h4>Why donate blood?</h4>
            <p>There have been many discoveries made in the medical sector on how to save someone’s life, but there is still no substitute for blood. Blood is very vital in a medical emergency. Blood donations can help a variety of individuals: trauma victims, surgery patients, premature babies, individuals with anemia, cancer patients and many more.Your single unit of blood can help save the lives of up to three separate patients.</p>
        </article>
    </div>
</div>
@stop