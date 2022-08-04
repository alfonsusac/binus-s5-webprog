<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 10</title>
    <style>
        * {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #515490;
            border: none;
            background: #e0e0e0;
        }
        form{
            padding:10px;
        }
        input{
            border-bottom:#515490 solid 1px;
            padding:8px;
        }
        button, .button{
            background-color: #515490;
            color:white;
            font-size:0.8em;
            margin-top:10px;
            border-radius: 50px;
            padding:10px 40px;
            transition: box-shadow 0.2s, padding 0.2s, color 0.2s;
        }
        button:hover, .button:hover{
            border-radius: 50px;
            background: #515490;
            box-shadow: inset 7px 7px 14px #3b3d69;
            padding:12px 38px 8px 42px;
            color:#e0e0e0;
        }
        .pd10{
            padding:10px;
        }
        .card{
            padding:4px;
            box-shadow:
        }
        .content{
            border-radius: 20px;
            background: #e0e0e0;
            padding: 20px;
            margin: 100px;
            box-shadow:  20px 20px 60px #bebebe,
                        -20px -20px 60px #ffffff;
        }
        .header{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .navbar{
            display:flex;
            flex-direction:row;
        }
        .hlist{
            padding:10px;
            text-decoration: none;
            margin: 10px;
            background: #e0e0e0;
            border-radius: 20px;
            transition: box-shadow 0.2s;
            margin-left: 40px;
            margin-right: 40px;
        }
        .hlist:hover{
            box-shadow:  20px 20px 60px #bebebe,
                        -20px -20px 60px #ffffff;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="navbar">
            @guest
            <a href="/login"><div class="hlist">
                Login
            </div></a>
            <a href="/register"><div class="hlist">
                Register
            </div></a>
            @endguest
            @auth
            <a href="/logout"><div class="hlist">
                Logout
            </div></a>
            <a href="/home"><div class="hlist">
                Home
            </div></a>
            @endauth
        </div>
    </div>
    <div class="content">
        <div style="width:100%; padding:10px;font-size:1.8em;font-weight:bold;color:#515490">Welcome!</div>
        @yield('content')
    </div>
</body>
</html>
