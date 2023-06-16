<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiple Texts Typing Animation | CodingNepal</title>
    <style>
        /*@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #343F4F;
        }

        .wrapper {
            display: flex;
        }

        .wrapper .static-txt {
            color: #fff;
            font-size: 60px;
            font-weight: 400;
        }

        .wrapper .dynamic-txts {
            margin-left: 15px;
            height: 90px;
            line-height: 90px;
            overflow: hidden;
        }

        .dynamic-txts li {
            list-style: none;
            color: #FC6D6D;
            font-size: 60px;
            font-weight: 500;
            position: relative;
            top: 0;
            animation: slide 12s steps(4) infinite;
        }

        @keyframes slide {
            100% {
                top: -360px;
            }
        }

        .dynamic-txts li span {
            position: relative;
            margin: 5px 0;
            line-height: 90px;
        }

        .dynamic-txts li span::after {
            content: "";
            position: absolute;
            left: 0;
            height: 100%;
            width: 100%;
            background: #343F4F;
            border-left: 2px solid #FC6D6D;
            animation: typing 3s steps(10) infinite;
        }

        @keyframes typing {

            40%,
            60% {
                left: calc(100% + 30px);
            }

            100% {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="static-txt">صرف السائقين</div>
        <ul class="dynamic-txts">
            <li><span>d</span></li>
            <li><span>Designer</span></li>
            <li><span>Developer</span></li>
            <li><span>Freelancer</span></li>
        </ul>
    </div>
</body>

</html>