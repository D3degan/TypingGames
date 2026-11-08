@extends('layouts.app')

@section('title', 'About')

@section('content')
    <main class="page-area">
        <div class="accent-line l1" aria-hidden="true"></div>
        <div class="accent-line l2" aria-hidden="true"></div>
        <div class="accent-line l3" aria-hidden="true"></div>
        <div class="accent-line r1" aria-hidden="true"></div>
        <div class="accent-line r2" aria-hidden="true"></div>
        <div class="accent-line r3" aria-hidden="true"></div>

        <article class="page-content">
            <h2>About Type Mages</h2>
            <p>Type Mages is a game for practicing typing. Jump in, play a round, and build your speed one word at a time.</p>
            <a class="back-to-game" href="{{ route('home') }}">Play Type Mages</a>
        </article>
    </main>
@endsection
