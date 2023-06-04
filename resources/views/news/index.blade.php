@extends('layouts.main')
@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>

                    <th scope="row"><a href="{{ route('news.show', $post->id) }}">{{ $post->id }}</a></th>
                    <td><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td><a href="{{ route('news.show', $post->id) }}">{{ $post->content }}</a></td>
                    <td><a href="{{ route('news.show', $post->id) }}">{{ $post->likes }}</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $posts->links() }}
    </div>
@endsection
