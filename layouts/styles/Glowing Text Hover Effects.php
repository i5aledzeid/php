<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texts</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #000;
        }
        h2 {
            font-size: 6em;
            font-weight: 500;
            color: #222;
            letter-spacing: 8px;
            cursor: pointer;
        }
        h2 span {
            transition: 0.5s;
        }
        h2:hover span:nth-child(1) {
            margin-right: 8px;
        }
        h2:hover span:nth-child(1)::after {
            content: "'";
        }
        h2:hover span:nth-child(2) {
            margin-left: 48px;
        }
        h2:hover span {
            color: #fff;
            text-shadow: 0 0 8px #fff,
                         0 0 24px #fff,
                         0 0 48px #fff,
                         0 0 82px #fff,
                         0 0 120px #fff;
        }
    </style>
</head>
<body>
    <h2><span>I</span>M <span>Khaled Zeid</span></h2>
</body>
</html>