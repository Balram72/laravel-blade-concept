<h1>
    Home : Blade file code
</h1>
{{-- Arithmetic operations --}}
     {{ 1 + 2 }}  
<br/>
    {{"Hello World"}}
<br/>
    {{"<h1>Hello World</h1>"}}
<br/>
   {!!"<h1>Html Code</h1>"!!}
<br/>
   {{-- {!!"<script>alert('js code')</script>"!!} --}}
<br/>
   {{"<script>alert('js code')</script>"}}
<br/>
  @php
    $user = "Variable declared"
  @endphp
  {{$user}}
<br/>
@php
    $code = ["html","css","js","php","node"]
@endphp
<ul>
@foreach ($code as $codes)
 <li>{{$codes}}</li>
@endforeach
</ul>
<br/>
@{{$user}}
<br/>
@php
    $name= ["ram","shyam","radha"]
@endphp
<ul>
@foreach ($name as $n)
 <li>{{$loop->index}} - {{$n}}</li>
@endforeach
</ul>
<br/>
@php
    $alpha= ["A","B","C"]
@endphp
<ul>
@foreach ($alpha as $a)
 <li>{{$loop->iteration}} - {{$a}}</li>
@endforeach
</ul>
<br/>
@php
    $alpha= ["A","B","C"]
@endphp
<ul>
@foreach ($alpha as $a)
  <li>{{$loop->count}} - {{$a}}</li>
@endforeach
</ul>
<br>
@php
    $alpha= ["A","B","C"]
@endphp
<ul>
@foreach ($alpha as $a)
    @if ($loop->first)
     <li style="color:red">{{$a}}</li>
    @elseif($loop->last)
      <li style="color:green">{{$a}}</li>
    @else
     <li>{{$a}}</li>
    @endif
@endforeach
</ul>
<ul>
@foreach ($alpha as $a)
    @if ($loop->even)
     <li style="color:red">{{$a}}</li>
    @elseif ($loop->odd)
     <li style="color:green">{{$a}}</li>
    @endif
@endforeach
</ul>
