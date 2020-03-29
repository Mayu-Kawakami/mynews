@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="gender mt-3">
                                     @if($post->gender == 'man')
                                     男性
                                     @else
                                      女性
                                      @endif
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 150) }}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ action('Admin\ProfileController@edit', ['id' => $post->id]) }}">編集</a>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection