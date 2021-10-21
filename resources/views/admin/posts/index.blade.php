@extends('layouts.app')

@section('content')
    <section class="container">
        <header class="d-flex justify-content-between align-items-center">
            <h1>I miei post</h1>
            <a href="{{ route('admin.posts.create')}}" class="btn btn-success">Crea nuovo post</a>
        </header>
        <table class="table table-hover bg-white border">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Scritto il</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
              <tr>
                <td>{{ $post->title}}</td>
                <td>{{ $post->getFormattedDate('created_at', 'd-m-y')}}</td>
                <td class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('admin.posts.show', $post->id)}}" class="btn btn-primary">Vai</a>
                    <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning mx-2">Modifica post</a>
                    <form action={{route('admin.posts.destroy', $post->id)}} method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Cancella post</button>
                    </form>
                </td>
              @empty
              <tr>
                  <td colspan="3" class="text-center">Non ci sono post da visualizzare</td>
              </tr>
              @endforelse
            </tbody>
          </table>
    </section>
@endsection
