<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea class="form-control" id="editor" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{ old('content') }}</textarea>
  <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>


@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
  <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

  <script>
      $(document).ready(function(){
          var editor = new Simditor({
              textarea: $('#editor'),
              upload: {
                  url: '{{ route('users.upload_image') }}',
                  params: { _token: '{{ csrf_token() }}' },
                  fileKey: 'upload_file',
                  connectionCount: 3,
                  leaveConfirm: '文件上传中，关闭此页面将取消上传。'
              },
              pasteImage: true,
          });
      });
  </script>

@stop