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
            background: #000;
        }
        section {
            position: relative;
            width: 100%;
            padding: 50px;
        }
        .circle {
            position: relative;
            overflow: hidden;
        }
        .circle.circle1 {
            width: 500px;
            height: 500px;
            float: left;
            border-radius: 50%;
            margin: 24px;
            shape-outside: circle();
        }
        .circle.circle2 {
            width: 300px;
            height: 300px;
            float: right;
            border-radius: 50%;
            margin: 24px;
            shape-outside: circle();
        }
        .circle img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        section h2 {
            color: #fff;
            font-size: 2em;
            margin-bottom: 8px;
        }
        section p {
            color: #fff;
        }
    </style>
</head>
<body>
    <section>
        <div class="circle circle1">
            <img src="1686550606.png" alt="image">
        </div>
        <div class="circle circle2">
            <img src="1686550606.png" alt="image">
        </div>
        <div>
            <h2>Khaled Zeid</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum autem, explicabo voluptatum magni dolor nostrum possimus odit adipisci quis esse pariatur suscipit? Minus quod, autem consequuntur ipsa dolore fugit mollitia labore alias veritatis voluptatibus est sapiente illum rerum eos vitae odit. Ipsum architecto eaque adipisci dolor facere, dolorem nulla expedita id temporibus laudantium, explicabo itaque est quod, magnam voluptatibus eius excepturi modi vel? Odit ipsam natus similique et perspiciatis delectus consequatur, sunt neque quibusdam totam praesentium quo error nihil perferendis pariatur, sit ducimus cupiditate quaerat numquam! Illo quasi harum ex provident distinctio voluptas quam quas? Nulla tempore quia voluptatum quo, corrupti explicabo nisi doloremque! Laudantium alias nobis dolore est reprehenderit repellendus sit nesciunt ex, officia impedit facere praesentium quia ipsum inventore, sint officiis dignissimos, nam neque? Sit necessitatibus pariatur laboriosam assumenda, iure cum minus vitae voluptatem iste delectus. Aliquid autem recusandae facere labore sint pariatur, totam, quasi quis illo dicta rerum aliquam quam quos possimus optio excepturi earum magni deserunt quo, quibusdam sapiente mollitia itaque. Odio assumenda quos, soluta distinctio consectetur sapiente accusantium libero magni laudantium dicta quas voluptatibus, vero, facilis inventore repellat earum fugiat! Exercitationem est nisi excepturi cumque tempora incidunt officia reprehenderit quibusdam atque vitae voluptatibus obcaecati alias, earum ipsam minus ipsa repellat illo sit corrupti temporibus unde.</p>
        </div>
    </section>
</body>
</html>