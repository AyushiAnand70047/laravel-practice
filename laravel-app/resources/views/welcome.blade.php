<h1>My first laravel app</h1>
<a href="/user-home">Home Page</a>
<a href="{{URL::to('user-home')}}">Home Page</a>
<a href="{{URL::to('user-about',['ayushi'])}}">About Page</a>

<a href="{{route('hm')}}">Go to user home page</a>