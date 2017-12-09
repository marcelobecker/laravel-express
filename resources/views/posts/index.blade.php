@extends('template')

@section('title')
    Blog
@endsection

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }} </h2>
        <h5><i> ({{ $post->created_at }})</i></h5>
        <p>{{ $post->content }}</p>
        <b>Tags:</b><br>
        <ul>
            @foreach($post->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
        <h3> Comments</h3>
        @foreach($post->comments as $comment)
            <b>Name: </b> {{ $comment->name }}<br>
            <b>Comment: </b> {{ $comment->comment }}
        @endforeach
        <hr>
    @endforeach

    {!! $posts->render() !!}

@endsection

