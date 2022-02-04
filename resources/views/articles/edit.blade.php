@extends('app')

@section('title', '게시물 상세내용')

@section('content')
    <section class="section-1 t-mt-4">
        <div class="t-container t-mx-auto t-px-4">
            <h1 class="t-font-bold">게시물 수정</h1>

            <form class="t-grid t-grid-cols-1 t-gap-4 t-mt-4" action="{{ route('articles.update', $article->id) }}"
                method="POST">
                @method('PUT')
                @csrf

                <div class="t-flex t-gap-4 t-flex-wrap">
                    <div>
                        <span class="badge bg-primary">No. {{ $article->id }}</span>
                    </div>
                    <div class="t-mr-auto">
                        <span class="badge bg-secondary">
                            Date. {{ $article->created_at->format('y.m.d H:i') }}
                        </span>
                    </div>
                    <div>
                        <span class="badge bg-success">
                            by {{ $article->user->name }}
                        </span>
                    </div>
                </div>

                <div>
                    <label class="form-label">제목</label>
                    <input name="title" type="text" maxlength="100"
                        class="@error('title') is-invalid @enderror form-control" placeholder="제목을 입력해주세요."
                        value="{{ old('title', $article->title) }}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label>내용</label>
                    <textarea name="body" maxlength="5000" class="@error('body') is-invalid @enderror form-control"
                        rows="10" placeholder="내용을 입력해주세요.">{{ old('body', $article->body) }}</textarea>

                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="t-flex t-gap-4">
                    <button class="btn btn-primary t-mr-auto">수정</button>
                    <a href="{{ route('articles.index') }}" class="btn btn-link">리스트</a>

                    <a class="t-m-0 btn btn-outline-danger"
                        href="javascript:if ( confirm('정말로 삭제하시겠습니까?') ) document.article_destory_form.submit();">삭제</a>
                </div>
            </form>

            <form class="t-hidden" name="article_destory_form"
                action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @method('DELETE')
                @csrf
            </form>
        </div>
    </section>
@endsection
