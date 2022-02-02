@extends('app')

@section('title', '게시물 상세내용')

@section('content')
    <section class="section-1 t-mt-4">
        <div class="t-container t-mx-auto t-px-4">
            <div class="t-grid t-grid-cols-1 t-gap-4">

                <div class="t-flex t-gap-4">
                    <div>
                        <span class="badge bg-primary">{{ $article->id }}</span>
                    </div>
                    <div class="t-mr-auto">
                        <span class="badge bg-secondary">
                            {{ $article->created_at->format('y.m.d H:i') }}
                        </span>
                    </div>
                    <div>
                        <span class="badge bg-success">{{ $article->user->name }}</span>
                    </div>
                </div>

                <div class="t-font-bold t-text-lg">
                    {{ $article->title }}
                </div>

                <div>
                    <img src="{{ $article->thumb_img_url }}" class="t-rounded">
                </div>

                <div class="t-text-gray-500">
                    {{ nl2br($article->body) }}
                </div>
            </div>
        </div>
    </section>
@endsection
