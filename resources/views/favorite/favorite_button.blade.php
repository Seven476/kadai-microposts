
    @if (Auth::user()->is_favorites($micropost->id))
        {{-- お気に入り削除ボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.like', $micropost->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-default btn-block"]) !!}
        {!! Form::close() !!}
    @endif