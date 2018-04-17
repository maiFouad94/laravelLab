@extends('layouts.master')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action='{{ '/posts/'.$post->id }}'" >
<?php echo method_field('PUT') ?>

{{csrf_field()}}

Title :- <input type="text" name="title" value="{{ $post->title }}">
<br><br>
Description :- 
<textarea name="description" >{{ $post->description }}</textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id" >
@foreach ($users as $user)
	@if($user->name==$post->user['name'])
    <option  selected="selected" value="{{ $user->id}} ">{{$user->name}}</option>
    @else
    <option value="{{ $user->id }}">{{$user->name}}</option>
    @endif

@endforeach

</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection
