{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロファイル新規作成</h2>
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <p>
                        名前：<input type="text" name="name">
                    </p>
                    <p>
                        性別：<input type="radio" name="sex" value="male">男
                        <input type="radio" name="sex" value="female">女
                    </p>
                    <p>
                        趣味:<input type="text" name="hobby"/>
                    </p>
                    <p>
                        自己紹介:<input type="textarea" name="introduction" >
                    </p>
                    
                    
                    <input type="submit" value="Submit"/>
            　　</form>
                
               
                   
                
                
                
                
            </div>
        </div>
    </div>
@endsection