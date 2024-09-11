@include('common.header')
<h1>This is home page</h1>

<!-- generate random number -->

<x-message-banner msg="Login successfully" class="success"/>
<x-message-banner msg="Login failed" class="failed"/>
<h1>{{rand()}}</h1>
@include('common.inner',['page'=>"this is home page"])
@foreach ( $users as $user )
<h5>{{$user}}</h5>
@endforeach

@includeIf('common.outer')


<style>
    .success{
        background: green;
        color: wheat;
        padding: 3px 10 px;
    }
    .failed{
        background: red;
        color: wheat;
        padding: 3px 10 px;
    }
</style>