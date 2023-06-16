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
            background: #07252d;
        }
        h2 {
            position: relative;
            font-size: 6em;
            letter-spacing: 16px;
            color: #0e3742;
            text-transform: uppercase;
            width: 100%;
            text-align: center;
            -webkit-box-reflect: below 1px linear-gradient(transparent, #0004);
            line-height: 0.70em;
            outline: none;
            animation: animate 5s linear infinite;
        }
        @keyframes animate {
            0%, 18%, 20%, 50.1%, 60%, 65.1%, 80%, 90.1%, 92% {
                color: #0e3742;
                box-shadow: none;
            }
            18.1%, 20.1%, 30%, 50%, 60.1%, 65%, 80.1%, 90%, 92.1%, 100% {
                color: #fff;
                text-shadow: 0 0 8px #03bcf4,
                            0 0 24px #03bcf4,
                            0 0 48px #03bcf4,
                            0 0 82px #03bcf4,
                            0 0 160px #03bcf4;
            }
        }
    </style>
</head>
<body>
    <h2 contenteditable="true">Hello!</h2>
</body>
</html>