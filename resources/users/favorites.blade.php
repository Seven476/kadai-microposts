@if (count($microposts) > 0)
                <ul class="list-unstyled">
                    @foreach ($microposts as $micropost)
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $micropost->content }}
                                </div>
                                <div>
                                    {{-- 投稿詳細ページへのリンク --}}
                                    <p>{!! link_to_route('microposts.microposts', 'View More', ['user' => $user->id]) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{-- ページネーションのリンク --}}
                {{ $microposts->links() }}
@endif


