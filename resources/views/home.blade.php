@extends('layouts.app')

@section('title', 'Type Mages')

@section('content')
    <main class="game-area">
        <div class="accent-line l1" aria-hidden="true"></div>
        <div class="accent-line l2" aria-hidden="true"></div>
        <div class="accent-line l3" aria-hidden="true"></div>
        <div class="accent-line r1" aria-hidden="true"></div>
        <div class="accent-line r2" aria-hidden="true"></div>
        <div class="accent-line r3" aria-hidden="true"></div>

        <div class="game-container" id="game">
            <iframe
                src="{{ asset('game/index.html') }}"
                width="816"
                height="624"
                title="Type Mages game"
            ></iframe>
        </div>
    </main>
@endsection
