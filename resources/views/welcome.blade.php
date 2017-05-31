<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mysite</title>

        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ff0000;
                background-image:url(/img/fon1.jpg);
                color: #36b121;
                font-family: 'Barrio', cursive;
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
                font-size: 100px;
                color: #45f50a;
                
            }

            .links > a {
                color: #1ae6cc;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: underline;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 250px;
            }
        </style>
    </head>
    <body>
 		<div class="flex-center position-ref full-height">    
            <div class="content">
                <div class="title m-b-md">
                    Zverev Nikita site
                </div>

                <div class="links">
                    <a href=page>Обо мне</a>
                    <a href=pagepage>Контакты</a>
                    <a href=pagepages>Университет</a>
                    <a href=pagepagepage>Github</a>
                </div>
            </div>
        </div>
    </body>
</html>
