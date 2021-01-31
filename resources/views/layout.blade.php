
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bakehouse</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
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
                font-family: 'Raleway', sans-serif;
                font-weight: 900;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
                counter-reset: rowNumber;
                border: 1px solid black; 
                border-spacing: 15px;
                position: center;
                margin-left: auto;
                margin-right: auto;
            }

            tbody tr::before {
                display: table-cell;
                counter-increment: rowNumber;
                content: counter(rowNumber) ".";
                padding-right: 0.3em;
                text-align: right;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                    <a href="/">Bakehouse</a>
                </div>

                <div class="links">
                    <a href="/merchant_product">Merchant Product View</a>                   
                    <a href="/merchant">Merchant</a>
                    <a href="/product">Product</a>
                    <a href="/category">Category</a>
                </div>

                <div class="container">
                    <a>-----------------------------------------------------------------------------------</a>
                </div><br><br><br>

           

                <div class="content">
                    @yield('mainContent')
                </div>
            </div>
        </div>
    </body>
</html>
