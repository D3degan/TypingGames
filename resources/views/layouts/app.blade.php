<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Type Mages')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            min-height: 100svh;
            background: #242323;
            overflow-x: hidden;
            position: relative;
            font-family: sans-serif;
            color: #f9f7f7;
        }

        .site-navbar {
            position: relative;
            z-index: 10;
            min-height: 82px;
            padding: 12px clamp(20px, 5vw, 72px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            background: rgba(25, 24, 24, 0.88);
            border-bottom: 1px solid rgba(255, 204, 95, 0.25);
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.2);
        }

        .brand {
            color: inherit;
            text-decoration: none;
            flex-shrink: 0;
        }

        .brand h1 {
            font-family: 'Cinzel', serif;
            color: #ffcc5f;
            font-size: clamp(24px, 4vw, 34px);
            line-height: 1.15;
            font-weight: 700;
        }

        .site-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: clamp(8px, 2vw, 28px);
        }

        .site-nav a {
            color: #f9f7f7;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            padding: 10px 4px;
            transition: color 160ms ease;
        }

        .site-nav a:hover {
            color: #ffcc5f;
        }

        .brand:focus-visible,
        .site-nav a:focus-visible,
        .back-to-game:focus-visible {
            outline: 2px solid #ffcc5f;
            outline-offset: 4px;
        }

        .game-area,
        .page-area {
            position: relative;
            min-height: calc(100vh - 82px);
            min-height: calc(100svh - 82px);
            display: grid;
            place-items: center;
            padding: 28px 16px;
            overflow: hidden;
        }

        .game-container {
            width: min(816px, 100%);
            z-index: 5;
        }

        .game-container iframe {
            display: block;
            width: 100%;
            aspect-ratio: 17 / 13;
            height: auto;
            border: none;
            background: #171616;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.4);
        }

        .page-content {
            width: min(680px, 100%);
            z-index: 5;
            padding: clamp(24px, 5vw, 40px);
            background: #302e2e;
            border: 1px solid rgba(255, 204, 95, 0.5);
            border-radius: 12px;
            box-shadow: 0 24px 80px rgba(0, 0, 0, 0.4);
        }

        .page-content h2 {
            margin-bottom: 18px;
            color: #ffcc5f;
            font-family: 'Cinzel', serif;
            font-size: clamp(24px, 5vw, 32px);
        }

        .page-content p,
        .page-content li {
            color: #e4e0e0;
            line-height: 1.7;
        }

        .page-content p + p {
            margin-top: 12px;
        }

        .page-content ul {
            display: grid;
            gap: 10px;
            padding-left: 22px;
        }

        .back-to-game {
            display: inline-block;
            margin-top: 24px;
            padding: 10px 16px;
            border: 1px solid #ffcc5f;
            border-radius: 6px;
            background: #ffcc5f;
            color: #242323;
            font-weight: 700;
            text-decoration: none;
        }

        .back-to-game:hover {
            background: #f4bb42;
        }

        .accent-line {
            position: absolute;
            width: 2px;
            height: 130px;
            background: rgba(249, 247, 247, 0.45);
            pointer-events: none;
        }

        .accent-line.l1 { top: 15%; left: 8%; transform: rotate(35deg); }
        .accent-line.l2 { top: 42%; left: 12%; transform: rotate(35deg); }
        .accent-line.l3 { top: 68%; left: 8%; transform: rotate(35deg); }
        .accent-line.r1 { top: 15%; right: 8%; transform: rotate(-35deg); }
        .accent-line.r2 { top: 42%; right: 12%; transform: rotate(-35deg); }
        .accent-line.r3 { top: 68%; right: 8%; transform: rotate(-35deg); }

        @media (max-width: 560px) {
            .site-navbar {
                min-height: 72px;
                padding: 12px 16px;
                flex-wrap: wrap;
                gap: 8px 16px;
            }

            .site-nav {
                width: 100%;
                justify-content: space-between;
                gap: 10px;
            }

            .site-nav a {
                font-size: 14px;
            }

            .game-area,
            .page-area {
                min-height: calc(100vh - 126px);
                min-height: calc(100svh - 126px);
                padding: 20px 12px;
            }

            .accent-line {
                opacity: 0.35;
            }
        }
    </style>
</head>
<body>
    <header class="site-navbar">
        <a class="brand" href="{{ route('home') }}" aria-label="Type Mages home">
            <h1>Type Mages</h1>
        </a>
        <nav class="site-nav" aria-label="Main navigation">
            <a href="{{ route('home') }}">Play</a>
            <a href="{{ route('how-to-play') }}">How to Play</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>

    @yield('content')
</body>
</html>
