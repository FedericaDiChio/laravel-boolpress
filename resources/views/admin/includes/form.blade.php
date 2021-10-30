
@if ($post->exists)
<form method="POST" enctype="multipart/form-data" action="{{ route('admin.posts.update', $post->id) }}">
    @method('PATCH')
@else
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">
@endif
@csrf  
<div class="container">
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            placeholder="Scrivi il titolo" value="{{ old('title', $post->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Contenuto del post</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
            rows="5">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Salva</button>
    </form>
</div>