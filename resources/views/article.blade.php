@include('head')

<link href="/css/new.css" rel="stylesheet">
<style>
    .n1 { background: #999; }
    .n2 { background: #8c8c8c; }
</style>
    <div class="index_about" style="margin-left: 150px">
        @foreach( $article as $a)
        <h2 class="c_titile">{{$a->title}}</h2>
        <p class="box_c"><span class="d_time">发布时间：{{$a->create_time}}</span><span>编辑：{{$a->author}}</span></p>
        <ul class="infos">
            {!! $a->content !!}
        </ul>
        @endforeach
        <div class="nextinfo">
            <p>上一篇：<a href="/article/{{$next[0]['aid']}}">{{$next[0]['title']}}</a></p>
            <p>下一篇：<a href="/article/{{$pre[0]['aid']}}">{{$pre[0]['title']}}</a></p>
        </div>
    </div>
</article>
<footer>
</footer>
<script src="js/silder.js"></script>
</body>
</html>