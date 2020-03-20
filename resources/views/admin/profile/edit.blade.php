@extends('layouts.profile')
@section('title','プロフィールの編集')

@section('content')
    <div class= "container">
        <div class= "row">
            <div class= "col-md-8 mx-auto">
                <h2>プロフィールの編集</h2>
                <form action= "{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">      
                     @if(count($errors) >0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="name" >{{ $profile_form->name}}</textarea>
                                <!--<input type="text" class="form-control" name="name" value="{{$profile_form->name}}">-->
                            </div>
                    </div>
                     
                     <div class= "form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="row col-md-10">
                        　<label><input type="radio"  name="gender" value="man">男性</label>
　　　　　　　　　　　　　<label><input type="radio"  name="gender" value="woman">女性</label>　
                        </div>
                    </div>
                    
                    <div class= "form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{$profile_form->hobby}}</textarea>
                        </div>
                    </div>
                    
                    <div class= "form-group row">
                        <label class="col-md-2" for="introduction">自己紹介</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="introduction" rows="5">{{$profile_form->introduction}}</textarea>
                            </div>
                    </div>
                        <input type="hidden" name="id" value="{{$profile_form->id}}">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-primary" value="更新">
                </form>

            </div>
        </div>
    </div>
@endsection
