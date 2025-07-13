<h1>User page</h1>
<p>{!! $msg !!}</p>
<p>User Name : {{ $user }}</p>
<p>User City Name : {{ $city }}</p>
<p> {{!empty($msgs)?$msgs:'No Messaeg'}} </p>

@foreach ($array as $id => $u)
   <h4>{{$id}}|{{$u['name']}} |  {{$u['phone']}} | <a href="{{ route('view.user',$id) }}">Show</a></h4>
@endforeach