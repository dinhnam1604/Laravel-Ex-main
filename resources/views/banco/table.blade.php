<!DOCTYPE html>
<html>
<head>
    <title>Bàn Cờ Vua {{ $n }}×{{ $n }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            max-width: fit-content;
            margin: 0 auto;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #8B4513;
            padding-bottom: 10px;
            text-align: center;
        }
        .board {
            display: inline-block;
            border: 4px solid #8B4513;
            margin: 20px auto;
        }
        .row {
            display: flex;
        }
        .cell {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 24px;
        }
        .white {
            background-color: #F0D9B5;
        }
        .black {
            background-color: #B58863;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bàn Cờ Vua {{ $n }}×{{ $n }}</h1>
        
        <div class="board">
            @for ($i = 0; $i < $n; $i++)
                <div class="row">
                    @for ($j = 0; $j < $n; $j++)
                        <div class="cell {{ ($i + $j) % 2 == 0 ? 'white' : 'black' }}">
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</body>
</html>
