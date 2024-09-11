<div>
    <h1>About Page</h1>
    <h2>User name is {{$user}}</h2>
</div>
@if($user == 'ayushi')
<h2>This is Ayushi</h2>
@elseif($user == 'anand')
<h2>This is Anand</h2>
@else
<h2>Other User</h2>
@endif

@for($i=0;$i<5;$i++)
<h3>{{$i}}</h3>
@endfor