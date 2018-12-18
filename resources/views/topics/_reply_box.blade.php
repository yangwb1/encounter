@include('common.error')
<div class="reply-box">
    <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="分享你的想法" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share"></i>回复</button>
        <div class="buttons pull-right" >
            @if($favored)
                <button class="btn btn-danger btn-disfavor btn-sm ">取消收藏</button>
            @else
                <button class="btn btn-success btn-favor btn-sm ">❤ 收藏</button>
            @endif
        </div>
    </form>
</div>
<hr>