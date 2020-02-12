@extends('layouts.app')

@section('title', '新規作成')

@section('content')
    <form action="/articles" method="post">
        {{ csrf_field() }}
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" placeholder="記事のタイトルを入れる"/>
        </div>
        <div>
            <label for="body">内容</label>
            <textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる"></textarea>
        </div>
        <div>
            <input type="submit" value="送信"/>
        </div>
    </form>
@endsection