@extends('layouts.app')

@section('title', 'How to Play')

@section('content')
    <main class="page-area">
        <div class="accent-line l1" aria-hidden="true"></div>
        <div class="accent-line l2" aria-hidden="true"></div>
        <div class="accent-line l3" aria-hidden="true"></div>
        <div class="accent-line r1" aria-hidden="true"></div>
        <div class="accent-line r2" aria-hidden="true"></div>
        <div class="accent-line r3" aria-hidden="true"></div>

        <article class="page-content">
            <h2>How to Play</h2>
            <ul>
                <li>Read the words shown in the game.</li>
                <li>Type each word as accurately and quickly as you can.</li>
                <li>Keep going to improve your typing speed and score.</li>
            </ul>
            <a class="back-to-game" href="{{ route('home') }}">Back to Play</a>
        </article>
    </main>
@endsection
