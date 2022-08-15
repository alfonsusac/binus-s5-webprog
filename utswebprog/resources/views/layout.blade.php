<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <style>
        a{text-decoration: none;color:#204380;font-weight: 500;}
        hr{margin:20px 0 20px 0;}
        .heading-2{font-size:1.8em;font-weight: 500;margin-bottom:10px;color:#5E81AC}
        .heading-3{font-size:1.4em;font-weight: 500;margin:0px 0px 10px 0px;display:flex;align-items: center;}
        .heading-3 span{margin-right:8px;color:#5E81AC}
        .paragraph{margin-bottom:40px;line-height: 1.4em;}
        .navbar-item-dropdown {display:none;position: absolute;background-color: #E5E9F0;z-index: 1;width:160px;margin-top:24px;padding:10px 20px 20px 20px;border-radius:0 0 10px 10px;}
        .navbar-item-dropdown-item{padding:10px 0px;}
        .navbar-item span{padding-right:5px;}
        .navbar-item{display:flex;flex-direction: row;justify-content: center;width:100px;text-align:center;vertical-align: middle;padding:10px 50px;margin-left:20px;border-radius:10px;will-change: background-color;transition: background-color 150ms ease-out;}
        .navbar-item:hover{background-color: #E5E9F0;}
        .navbar-item:hover::before{content:'>';padding:0px 10px;}
        .navbar-item:hover::after{content:'<';padding:0px 10px;}
        .navbar-dropdown{ border-radius:10px 10px 0 0; }
        .navbar-dropdown:hover{background-color: #E5E9F0;}
        .navbar-dropdown:hover .navbar-item-dropdown{display:block;box-shadow:0px 10px 20px -10px rgba(0,0,0,0.2);}
        .navbar-item-dropdown-item{width:100%;will-change: background-color;transition: background-color 150ms ease-out;}
        .navbar-item-dropdown-item:hover{border-radius:10px;background-color:#E5E9F0;color:#112d5e;}
        .navbar-item-dropdown-item:hover::before{content:'>';padding:0px 10px;}
        .navbar-item-dropdown-item:hover::after{content:'<';padding:0px 10px;}
        .content-box{padding:32px;border-radius: 30px;background-color: white;margin: 20px 20px;height:100%;box-shadow:0px 0px 30px -20px rgba(0,0,0,0.1), 0px 0px 30px rgba(0,0,0,0.05);}
        .sidebar-item{will-change: transform;transition: transform 150ms ease-out;}
        .sidebar-item:hover::before{position:absolute;margin-left:-10px;content:'>  ';}
        .sidebar-item:hover{transform: translateX(10px);}
        .sidebar-item::before{content:'';position:absolute;margin-left:-10px;}
        .material-icons-round{margin-top:-3px;}
        .book-item{background-color:#f9f9f9}
        .book-item:hover{background-color:#E5E9F0}
        .book-detail{padding:6px 0px;}
    </style>
    <title>Home</title>
</head>
<body style="margin:0;background-color:#ECEFF4;font-family:'Roboto Condensed','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:16px;color:#2E3440">
    <div style="display:flex; flex-direction: column;">
        <div class="header" style="text-align:center; font-family: 'Oswald', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 64px; background-color:#3B4252; color:white;padding:30px;padding-top:80px;letter-spacing:10px;font-weight:400;text-shadow: 0px 4px 4px #2E3440;">
            HAPPY BOOK STORE
        </div>
        <div class="navbar" style="display:flex;padding:10px 0;margin:auto;background-color:#FFFFFF;width:100%;justify-content: center;box-shadow:0px -10px 150px rgba(0,0,0,0.1)">
            <a href="/"><div class="navbar-item" style="color:#B48EAD;"><span class="material-icons-round">home</span> <div>Home</div></div></a>
            <a href="#"><div class="navbar-item navbar-dropdown" style="color:#D08770;">
                <div class="" style="border-radius:10px 10px 0px 0px; display:flex;flex-direction:row;color:#D08770;" >
                    <span class="material-icons-round">category</span>
                    <div>Category</div>
                    <span class="material-icons-round">expand_more</span>
                </div>
                <div class="navbar-item-dropdown">
                    @foreach ($categories as $category)
                        <a href="/category/{{$category->id}}"><div class="navbar-item-dropdown-item">{{$category->category}}</div></a>
                    @endforeach
                </div>
            </div></a>
            <a href="/contact"><div class="navbar-item" style="color:#A3BE8C;"><span class="material-icons-round">contact_page</span> <div>Contact</div></div></a>
        </div>
        <div class="content" style="display:flex;flex-direction:row;justify-content:center;padding:10px;">
            <div class="content-box" style="width:600px;"">
                @yield('body')
            </div>
            <div class="content-box">
                <div class="heading-3" style="color:#5E81AC">Categories</div>
                <hr>
                <div style="display:flex;flex-direction:column;width:140px">
                @foreach ($categories as $category)
                    <a href="/category/{{$category->id}}" style="padding:6px;" class="sidebar-item">
                        {{$category->category}}
                    </a>
                @endforeach
                </div>
            </div>
        </div>
        <div class="footer" style="width:100%;text-align:center;padding:10px 0px;color:#4C566A">
            (c) Alfonsus Ardani 2021
        </div>
    </div>
</body>
</html>



