@if (count($favorites) > 0)
                <ul class="list-unstyled">
                    @foreach ($users as $user)
                        <li class="media">
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
                {{ $favorites->links() }}
@endif


