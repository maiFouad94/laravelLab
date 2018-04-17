<h1>post page</h1>
<br />
 <h4>Title:{{ $post->title }}</h4>
<br />
 <h4>Description:{{ $post->description }}</h4>
<br />
<h4>created at: {{ $post->user->format }}</h4>
<br />
<h4>created by: {{ $post->user['name'] }}</h4>
