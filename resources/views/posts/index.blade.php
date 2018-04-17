@extends('layouts.master')


@section('content')

<h1>Posts Index</h1>
<button onclick="location.href='{{ url('/posts/create') }}'">add post</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Postes by</th>
      <th scope="col">Created at</th>
      <th scope="col">slug</th>

      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @foreach ($posts as $post)

    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{$post->user['name']}}</td>
      <td>{{ $post->user->format }}</td>
      <td>{{ $post->slug }}</td>
      <td><button onclick="location.href='{{ url('/posts/'.$post->id) }}'">view</button>
      <button onclick="location.href='{{ url('/posts/'.$post->id).'/edit' }}'">edit</button>
    <form method="post" action="/posts/{{ $post->id }}">
     {{ method_field('DELETE') }}	

{{csrf_field()}}
<button id="del" type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Would Like to Delete This Post?');">Delete</button>

     </form></td>
    </tr>
    @endforeach

  </tbody>

</table>
<div class="panel-heading" style="display:flex; justify-content:center;align-items:center;">
        {{$posts->links()}}
    </div>










@endsection