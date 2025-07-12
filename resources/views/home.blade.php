@php
 $alph = ['A','B','C','D'];
 $alp = ["one"=>'A','two'=>'B','three'=>'C'];
 $abc=[];
 $bolen = true;
 $value = '';
@endphp
{{-- send Noraml Value --}}
      {{-- @include('pages.header',['name'=>'Balram']) --}}
{{-- send empty array --}}
     {{-- @include('pages.header',['name'=>$abc])  --}} 

{{-- IncludeWhen  Method--}}
      {{-- @includeWhen(false,'pages.header',['name'=>'balram'] )  --}}
             {{-- Not show (flase) --}} {{-- show (true) --}}
      {{-- @includeWhen(true,'pages.header',['name'=>'balram'] )  --}}
            {{-- show (true) --}}
{{-- IncludeWhen  Method use variable--}}
      {{-- @includeWhen($bolen,'pages.header',['name'=>'balram'] )  --}}
{{-- IncludeWhen  Method use empty method--}}
      {{-- @includeWhen(empty($value),'pages.header',['name'=>'balram'] )   --}}

{{-- Normal Include --}}
    @include('pages.header')
      
<h1>Home Page</h1>
    @include('pages.footer')

{{-- IncludeUnless  Method use empty method--}}
    {{-- @includeUnless(empty($value),'pages.header',['name'=>'balram'] )   --}}

{{-- chaeck the page is exist or not --}}
    @includeIf('pages.body')

{{-- send normal array --}}
      {{-- @include('pages.footer',['names'=>$alph]) --}}
{{-- send associative array --}}
      {{-- @include('pages.footer',['names'=>$alp]) --}}  
