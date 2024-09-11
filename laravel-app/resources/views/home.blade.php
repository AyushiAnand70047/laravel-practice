<h1>This is home page</h1>

<!-- generate random number -->

<h1>{{rand()}}</h1>

@foreach ( $users as $user )
<h5>{{$user}}</h5>
@endforeach