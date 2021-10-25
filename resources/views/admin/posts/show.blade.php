@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="card my-4">
                <div class="card-header">
                    <h5>{{ $post->title }}</h5>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.posts.index')}}" class="btn btn-primary">Indietro</a>    
                </div>
            </div>
        </div>
    </section>
@endsection