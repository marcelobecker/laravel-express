@extends('template')

@section('title')
    Blog
@endsection

@section('content')
    <h1>Edit Post: {{ $post->id }}</h1>

    @if($errors->any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form');

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        {!! Form::textarea('tags', $post->TagList, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save Post', ['class'=>'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}

@endsection

