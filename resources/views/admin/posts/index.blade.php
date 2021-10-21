@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>I miei post</h1>
        <table class="table table-hover bg-white border">
            <thead>
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Titolo</th>
                <th scope="col">Scritto il</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
              <tr>
                <th scope="row">1</th>
                <td>{{ $post->title}}</td>
                <td>{{ $post->created_at}}</td>
                <td><a href="{{ route('admin.posts.show', $post->id)}}" class="btn btn-primary">Vai</a></td>
             
              @empty
              <tr>
                  <td colspan="3" class="text-center">Non ci sono post da visualizzare</td>
              </tr>
              @endforelse
            </tbody>
          </table>
    </section>
@endsection
