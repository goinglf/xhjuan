@include('head')
<link href="/css/style1.css" rel="stylesheet">

    <div class="newblog left" style="margin-left: 150px">
        @if(!isset($article[0]->aid))
       <p>暂时没有文章</p>
            @else
            @foreach( $article as $a)
                <h2>{{$a->title}}</h2>
                <p class="dateview"><span>发布时间：{{$a->create_time}}</span>
                    <span>作者：{{$a->author}}</span><span>分类：[<a href="/#">{{$a->cate_name}}</a>]</span></p>
                <ul class="nlist">
                    <p>{{str_limit(strip_tags($a->content), $limit = 50, $end = '...') }} </p>
                    <a  href="/article/{{$a->aid}}" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <div class="line"></div>
            @endforeach
            <div class="blank"></div>
            <div class="page">
                {!! $article->render() !!}
            </div>
            @endif
    </div>
</article>
<footer>
</footer>
<script src="js/silder.js"></script>
</body>
</html>