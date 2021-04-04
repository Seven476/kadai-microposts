
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入り削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unlike', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unlike', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.like', $micropost->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif