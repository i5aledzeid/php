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
            background: #252839;
        }
        .year {
            position: relative;
            display: flex;
            gap: 32px;
        }
        .year span {
            position: relative;
            width: 120px;
            height: 120px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
        }
        .year span b {
            font-size: 6em;
            font-weight: 700;
            -webkit-text-stroke: 2px var(--clr);
            color: transparent;
            transition: 0.5s;
        }
        .year span:hover b {
            opacity: 0;
        }
        .year span::before {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            font-size: 6em;
            font-weight: 700;
            text-align: center;
            line-height: 120px;
            color: var(--clr);
            border-bottom: 8px solid var(--clr);
            overflow: hidden;
            transition: 0.5s ease-in-out;
        }
        .year span:hover::before {
            height: 100%;
            filter: drop-shadow(0 0 24px var(--clr));
        }

        .year .span {
            position: relative;
            width: 620px;
            height: 120px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
        }

        img {
            width: 0px;
        }

        @media (max-width: 700px) {
            .year .span {
                position: relative;
                width: 320px;
                height: 120px;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
            }
            .year span b {
                font-size: 3em;
                font-weight: 700;
                -webkit-text-stroke: 2px var(--clr);
                color: transparent;
                transition: 0.5s;
            }
            .year span:hover b {
                opacity: 0;
            }
            .year span::before {
                content: attr(data-text);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 0;
                font-size: 3em;
                font-weight: 700;
                text-align: center;
                line-height: 120px;
                color: var(--clr);
                border-bottom: 8px solid var(--clr);
                overflow: hidden;
                transition: 0.5s ease-in-out;
            }
            .year span:hover::before {
                height: 100%;
                filter: drop-shadow(0 0 24px var(--clr));
            }
        }
    </style>
</head>
<body>
    <div class="year">
        <!--<span style="--clr: #1da1f2" data-text="2"><b>2</b></span>
        <span style="--clr: #fffc00" data-text="0"><b>0</b></span>
        <span style="--clr: #ff1359" data-text="2"><b>2</b></span>
        <span style="--clr: #25d366" data-text="4"><b>4</b></span>-->
        <span class="span" style="--clr: #1da1f2" data-text="تحت الصيانة"><b>تحت الصيانة</b></span>
    </div>
</body>
</html>