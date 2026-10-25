<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Type Mages</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            height: 100vh;
            background: #3c3a3a;
            overflow: hidden;
            position: relative;
            font-family: sans-serif;
        }

        /* Title kiri atas */
        .title-box {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #3c3a3a;
            padding: 12px 24px;
            z-index: 10;
        }

        .title-box h1 {
            font-family: 'Cinzel', serif;
            color: #ffcc5f;
            font-size: 40px;
            font-weight: 60;
        }

        /* Game box center */
        .game-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
        }

        .game-container iframe {
            display: block;
            border: none;
        }

        /* Garis aksen dekoratif */
        .accent-line {
            position: absolute;
            width: 2px;
            height: 130px;
            background: #f9f7f7;
        }

        /* Sisi kiri */
        .accent-line.l1 { top: 10%;  left: 8%;  transform: rotate(35deg); }
        .accent-line.l2 { top: 35%;  left: 12%; transform: rotate(35deg); }
        .accent-line.l3 { top: 55%;  left: 8%;  transform: rotate(35deg); }
        .accent-line.l4 { top: 78%;  left: 12%; transform: rotate(35deg); }

        /* Sisi kanan */
        .accent-line.r1 { top: 10%;  right: 8%;  transform: rotate(-35deg); }
        .accent-line.r2 { top: 35%;  right: 12%; transform: rotate(-35deg); }
        .accent-line.r3 { top: 55%;  right: 8%;  transform: rotate(-35deg); }
        .accent-line.r4 { top: 78%;  right: 12%; transform: rotate(-35deg); }
    </style>
</head>
<body>

    <div class="title-box">
        <h1>Type Mages</h1>
    </div>

    <div class="accent-line l1"></div>
    <div class="accent-line l2"></div>
    <div class="accent-line l3"></div>
    <div class="accent-line l4"></div>

    <div class="accent-line r1"></div>
    <div class="accent-line r2"></div>
    <div class="accent-line r3"></div>
    <div class="accent-line r4"></div>

    <div class="game-container">
        <iframe
            src="{{ asset('game/index.html') }}"
            width="816"
            height="624"
        ></iframe>
    </div>

</body>
</html>