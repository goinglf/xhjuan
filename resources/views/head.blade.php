<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客</title>
    <meta name="keywords" content="个人博客" />
    <meta name="description" content="" />
    <link href="/css/base.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/js/modernizr.js"></script>
    <![endif]-->
    <style>
        .topnav span{
            color: white;
            font-size: 15px;
        }
        body{
            background: rgb(248,248,248);
        }
    </style>
</head>
<body>
<header style="background: url(../images/demo/bg-main.jpg);background-size: 1000px 200px;height: 200px">
    <nav class="topnav" id="topnav" style="margin: 120px 50px 0 0">
        <nav class="topnav" id="topnav">
            @foreach( $nav as $v )
                <a href="/#{{$v['menu']}}"><span>{{$v['nav_name']}}</span>
                    <span class="en">{{$v['menu']}}</span></a>
            @endforeach
        </nav>
    </nav>

    </nav>
</header>
<article class="blogs">
    <h1 class="t_nav"><a href="/" class="n1">网站首页</a>
        <a href="/#skill" class="n2">{{$article[0]->cate_name}}</a></h1>