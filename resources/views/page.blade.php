<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Обо мне</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image:url(/img/fon2.jpg);
                color: #fe0141;
                font-family: 'Kumar One', cursive;
                font-weight: 100;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: underline;
                text-transform: uppercase;
            }
            .text {
				color: #f8f849;
                padding: 10px 50px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase; 
			}
            

            .m-b-md {
                margin-bottom: 70px;
            }
        </style>
    </head>
    <body>
     <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Обо мне!
                </div>
                <div class="text">Меня зовут Зверев Никита</div>

                <div class="text" style="display: table;">
                    <div style="display: table-cell; vertical-align: middle; width: 33%; text-align: right;"> Мне 19 лет</div>
                    <div style="display: table-cell; width: 34%"><a href="https://vk.com/dj_narkosha"><img src="/img/photo1.jpg" width="300" height="400" alt="Зверев Никита"></a></div>
                    <div style="display: table-cell; vertical-align: middle; width: 33%; text-align: left;"> Я учусь на 2-м курсе университета</div>
                    </div>
                    <div class="links">
                    <a href=/>Назад</a>
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>
