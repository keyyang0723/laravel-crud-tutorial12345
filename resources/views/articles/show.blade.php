@extends('layouts.app')

@section('title', '記事詳細')

@section('content')
        <h4>{{$article->title}}</h4>
        <p>{{$article->body}}</p>
        <br><br>
        <a href="/articles/{{$article->id}}/edit">編集する</a>
        <form action="/articles/{{$article->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="submit" name="" value="削除する">
        </form>
        <a href="/articles">一覧にもどる</a>
@endsection