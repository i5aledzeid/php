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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f1f1f1;
            overflow: hidden;
        }
        #text {
            position: relative;
            color: #fff;
            font-weight: 700;
            font-size: 12em;
            line-height: 0.9em;
            letter-spacing: 2px;
            text-align: center;
            transform: rotate(-28deg)skew(25deg);
        }
        #text::before {
            content: attr(data-text);
            position: absolute;
            top: 30px;
            left: -30px;
            color: rgba(0, 0, 0, 0.3);
            text-shadow: none;
            filter: blur(8px);
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="text" id="text" data-text="Khaled Zeid">Khaled Zeid</div>
    <script type="text/javascript">
        var text = document.getElementById('text');
        var shadow = '';
        for (var i = 0; i < 30; i++) {
            shadow += (shadow ? ',' : '') + -i * 1 + 'px ' + i * 1 + 'px 0 #d9d9d9';
        }
        text.style.textShadow = shadow;
    </script>
</body>
</html>