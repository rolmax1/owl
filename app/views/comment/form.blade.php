<div class="media">
  <a class="pull-left" href="/{{{$User->username}}}">
    {{ HTML::gravator($User->email, 40,'mm','g','true',array('class'=>'media-object')) }}
  </a>
  <div class="media-body">
    <div>
      <div style="margin-top:10px"><h4 class="media-heading" style="font-weight:bold">コメントを投稿する</h4></div>
    </div>
  </div>
  <div style="margin-bottom:5px;">
    {{Form::open(array('url'=>'comment/create','class'=>'form-comments', 'id'=>'comment', 'onsubmit' => 'return false;'))}}
        {{Form::textarea('body', isset($template->body) ? $template->body : '' ,array('class'=>'form-control', 'rows'=>'5', 'id' => 'comment_text', 'placeholder' => 'コメントを入力して下さい。'))}}
        {{Form::hidden('open_item_id',$item->open_item_id)}}
        {{Form::hidden('user_id', $User->id)}}
  </div>
  <div style="text-align:right">
        {{Form::submit('投稿する',array('class'=>'btn'))}}
    {{Form::close()}}
  </div>
</div>
