@extends('layouts.main')
@section('content')
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #c3073f !important;">
                        <div class="card-body p-5">
                            <div style="display: flex; justify-content: space-between; padding-bottom: 5px;">
                                <p class="lead fw-bold" style="color: #c3073f;">{{ $post->title }}</p>
                                @auth
                                <form action="{{ route('news.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="close" aria-label="Close"
                                        style="color: #c3073f; border-color: #ffffff; background-color: #ffffff;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                                @endauth
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>{{ $post->created_at }}</p>
                                </div>
                            </div>

                            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                <div class="row">
                                    <div>
                                        <p style="font-weight: bold; text-align: center;">Content</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <p class="mb-0">{{ $post->content }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div
                                    style="display: flex; justify-content: space-between; padding-left:21px; margin-right:10px;">
                                    <p class="lead fw-bold mb-0" style="color: #141414;">Likes: </p>
                                    @if (empty($post->likes))
                                        <p class="lead fw-bold mb-0" style="color: #c3073f;">0</p>
                                    @else
                                        <p class="lead fw-bold mb-0" style="color: #c3073f;">{{ $post->likes }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row my-4">
                                <div style="display: flex; justify-content: space-between;">
                                    @auth
                                        <p class="mt-4 pt-2 mb-0"><a href="{{ route('news.edit', $post->id) }}"
                                                style="color: #c3073f;">Edit</a></p>
                                    @endauth
                                    <p class="mt-4 pt-2 mb-0"><a href="{{ route('news.index') }}"
                                            style="color: #c3073f;">Back</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
