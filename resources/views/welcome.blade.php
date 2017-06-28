<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>My blog</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css"  rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand page-scroll" href="#page-top" style=" margin-top: 20px;color: white">
                {{--<img src="images/logo.png" alt="Lattes theme logo">--}}
                <span style="font-weight: bold">Hello World</span>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                @foreach( $nav as $v )
                    <li>
                        <a class="page-scroll" href="#{{$v['menu']}}">{{$v['nav_name']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header>
    <div class="container">
        <div class="slider-container">
            <div class="intro-text">
                <div class="intro-lead-in" style="font-size: 60px">It's Nice To Meet You</div>
                <div class="intro-heading"></div>
                <a href="#about" class="page-scroll btn btn-xl">About Me</a>
            </div>
        </div>
    </div>
</header>
<section id="about" class="light-bg">
    <div class="container">
        @foreach( $user as $vo )
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>个人简历</h2>
                    <p style="margin-top: 30px">{{$vo['info']}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-briefcase ot-circle"></i>
                    <h3>基本信息</h3>
                    <p>姓名&nbsp;&nbsp;{{$vo['name']}}
                   <br>年龄&nbsp;&nbsp;&nbsp;{{$vo['age']}}<br>
                        手机号 {{$vo['phone']}}
                    </p>
                </div>
            </div>
            <!-- end about module -->
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-photo ot-circle"></i>
                    <h3>教育</h3>
                    <p>{!! $vo['education'] !!} </p>
                </div>
            </div>
            <!-- end about module -->
            <!-- about module -->
            <!-- end about module -->
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-cube ot-circle"></i>
                    <h3>工作</h3>
                    <p>{!! $vo['job'] !!}</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-camera-retro ot-circle"></i>
                    <h3>爱好</h3>
                    <p>{{$vo['hobby']}}</p>
                </div>
            </div>
            <!-- end about module -->
        </div>
            @endforeach
    </div>
    <!-- /.container -->
</section>
<section >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skills-text">
                    <h2>职业技能</h2>
                    <p>{!!$vo['self'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- skill bar item -->
                <div class="skillbar-item">
                    <div class="skillbar-score">
                        <span class="score">85</span><span class="percent">%</span>
                    </div>
                    <div class="skillbar" data-percent="85%">
                        <h3>PHP、MVC</h3>
                        <div class="skillbar-bar">
                            <div class="skillbar-percent" style="width: 85%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- skill bar item -->
                <div class="skillbar-item">
                    <div class="skillbar-score">
                        <span class="score">75</span><span class="percent">%</span>
                    </div>
                    <div class="skillbar" data-percent="80%">
                        <h3>ThinkPHP、MySql、OOP</h3>
                        <div class="skillbar-bar">
                            <div class="skillbar-percent" style="width: 75%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- skill bar item -->
                <div class="skillbar-item">
                    <div class="skillbar-score">
                        <span class="score">65</span><span class="percent">%</span>
                    </div>
                    <div class="skillbar" data-percent="70%">
                        <h3>JS、Ajax、jQuery</h3>
                        <div class="skillbar-bar">
                            <div class="skillbar-percent" style="width: 65%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- skill bar item -->
                <div class="skillbar-item">
                    <div class="skillbar-score">
                        <span class="score">62</span><span class="percent">%</span>
                    </div>
                    <div class="skillbar" data-percent="62%">
                        <h3>Linux、Laravel、Composer</h3>
                        <div class="skillbar-bar">
                            <div class="skillbar-percent" style="width: 62%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skill" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>技术知识</h2>
                    <p>好的程序员要会学习，也要会总结和吸取知识</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start portfolio item -->
            @foreach( $cate as $c )
                    <div class="col-md-4">
                        <div class="ot-portfolio-item">
                            <figure class="effect-bubba">
                                <a href="/category/{{$c['cid']}}" > <img src="{{$c['cate_img']}}" class="img-responsive" style="width: 500px;height: 220px"/>
                                    <figcaption>
                                        <h2></h2>
                                        <p>{{$c['cate_name']}}</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
        @endforeach
        </div>
            <!-- end portfolio item -->
        </div>
    </div><!-- end container -->
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>php学习网站</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="partner-logo"><a href="http://www.imooc.com/"><img src="images/demo/partners-1.png" alt="partners" style="width: 100px;height: 50px"></a></div>
                    </div>
                    <div class="item">
                        <div class="partner-logo"><a href="http://edu.51cto.com/center/wejob/promotion/index?pinpai"><img src="images/demo/partners-2.png" alt="partners" style="width: 100px;height: 50px"></a></div>
                    </div>
                    <div class="item">
                        <div class="partner-logo"><a href="http://www.jikexueyuan.com/"><img src="images/demo/partners-3.png" alt="partners" style="width: 100px;height: 50px"></a></div>
                    </div>
                    <div class="item">
                        <div class="partner-logo"><a href="http://laravelacademy.org/laravel-docs-5_1"><img src="images/demo/partners-4.png" alt="partners" style="width: 100px;height: 50px"></a></div>
                    </div>
                    <div class="item">
                        <div class="partner-logo"><a href="http://study.163.com/"><img src="images/demo/partners-5.png" alt="partners" style="width: 300px"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="life" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>生活点滴</h2>
                    <p>生活不止眼前的苟且</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($art as $ar)
                <a href="/article/{{$ar->aid}}">
            <div class="col-md-3">
                <div class="team-item">
                    <div class="team-image">
                        <img src="{{$ar->cate_img}}" class="img-responsive" >
                    </div>
                    <div class="team-text">
                        <h3>{{$ar->title}}</h3>
                        <p>{{str_limit(strip_tags($ar->content), $limit = 30, $end = '...') }}</p>
                    </div>
                </div>
            </div>
                </a>
            @endforeach
            <!-- end team member item -->
        </div>
    </div>
</section>
<section id="future">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>畅想未来</h2>
                    <p>还有诗和远方的田野</p>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="overlay-dark bg-img1 dark-bg short-section">
                <div class="container text-center">
                    @foreach( $future as $f )
                    <div class="row">
                        <div class="col-md-3 mb-sm-30">
                            <div class="counter-item">
                                <h2 data-count="{{$f['id']}}">{{$f['id']}}</h2>
                                <h6>{{$f['goal']}}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/theme-scripts.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>