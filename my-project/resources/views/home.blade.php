@include('common.header',["data"=>"message from home page"])
<h1>This is home page</h1>
@includeIf('common.footer')

{{-- <div>
    <h1>This is home page</h1>
    <h2>Hello {{$name}}</h2>
    <h2>First User: {{$users[0]}}</h2>
    <h2>Users are {{print_r($users)}}</h2>
</div>

<div>
    @if($name == 'Ayushi')
    <h2>This is {{$name}}</h2>
    @elseif($name == 'Tauqueer')
    <h2>This is Tauqueer</h2>
    @else
    <h2>Other user</h2>
    @endif
</div>

<div>
    @foreach ($users as $user)
    <h2>{{$user}}</h2>
    @endforeach
</div>

<div>
    @for($i=0;$i<=5;$i++)
    <h2>{{$i}}</h2>
    @endfor
</div> --}}
