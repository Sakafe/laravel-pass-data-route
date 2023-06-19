<h1>Hello Users!</h1>
{{-- <h3>{{$user}}</h3>
<h2>{!!$city!!}</h2> --}}

@foreach ($user as $id => $u)
    <h3>{{$id}} : Name: {{$u['name']}} | Phone: {{$u['phone']}} | City: {{$u['city']}}

    | <a href="{{route('usersId',$id)}}">Users Id</a>

    </h3>
@endforeach
