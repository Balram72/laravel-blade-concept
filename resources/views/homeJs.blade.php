<h1>Use the js in blade file</h1>

@php
  $data = "Balram Panda";
  $a = ['a','b','c','d'];
  $new = ["ram","shyam","balram","sona"];
@endphp
<script>
   
  let data = @json($data);
  console.log(data);

  let a = @json($a);
  a.forEach(element => {
    console.log(element);
  });

  let newvalue = {{ Js::from($new) }}
  console.log(newvalue);

</script>