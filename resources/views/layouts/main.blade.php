<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        header {
            position: relative;
            height: 10vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 3em;
        }
        header ul {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
        }
        header ul li {
            margin: 0 10px;
        }
        .a h1 {
            margin-bottom: 40px;
            text-align: center;
        }
        .a table {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .a table tr td{
            padding: 8px;
        }
        .a table tr:nth-child(2n-1) td{
            background-color: skyblue;
        }
        .a table tr:nth-child(2n) td{
            background-color: salmon;
        }
        .a table tr td:nth-child(1) {
            width: 100px;    
        }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        @yield('name')
    </div>

</body>
</html>