<div class="col-md-8">
    <h5><span style="color:#31b0d5">{{$comment->author->name}}</span>:</h5>
    <h5>{{$comment->content}}</h5>

    @include('comments.form',['parentId'=>$comment->id])
    <hr>

    {{-- 次级评论--}}
    @if(isset($comment->replies))
        @include('comments.list',['collections'=>$comment->replies])
    @endif
</div>
