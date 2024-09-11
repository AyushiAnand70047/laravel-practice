@include('common.header')
<h1>This is home page</h1>

<!-- generate random number -->

<h1>{{rand()}}</h1>
@include('common.inner',['page'=>"this is home page"])
@foreach ( $users as $user )
<h5>{{$user}}</h5>
@endforeach

@includeIf('common.outer')
