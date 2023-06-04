@extends('layouts.main')
@section('content')
    <form style="padding: 20px 25px 20px 30px;" action="{{ route('news.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input class="form-control" name="title" id="exampleFormControlInput1"
                placeholder="Great headlines for great news" value="{{ $post->title }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group" style="padding-top: 10px;">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"
                placeholder="Write a few words">{{ $post->content }}</textarea>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Update</button>
    </form>
@endsection
