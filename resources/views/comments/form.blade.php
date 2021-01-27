<form method="POST" action="" accept-charset="UTF-8">
    {{csrf_field()}}
{{--    {{url('post/'.$post->id.'/comments')}}--}}


    <div class="form-group">
{{--        <label for="body" class="control-label">Info:</label>--}}
        <textarea id="body" name="body"  class="form-control" required="required" placeholder="内容"></textarea>
    </div>
    @if(isset($parentId) && $parentId != 0)
        <input type="hidden" name="parent_id" value="{{$parentId}}">
        <button type="submit" class="btn btn-success">回复</button>
    @else
        <button type="submit" class="btn btn-success">评论</button>
    @endif
</form>
