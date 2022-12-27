<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>editBlog</title>
    </head>
    <body>
        <h1>投稿編集</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="edit_title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" value="{{ $post->title}}">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="edit_body">
                <h2>本文</h2>
                <input type="text" name="post[body]" value="{{ $post->body }}">
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>