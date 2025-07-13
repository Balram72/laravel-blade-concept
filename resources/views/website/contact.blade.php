@extends('website.layout.masterlayout')
@section('content')
 <section class="hero">
    <h2>Contact Page</h2>
      <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum inventore odio pariatur corrupti odit delectus dignissimos autem tempore nisi, atque enim deserunt recusandae quos libero at sapiente quidem beatae qui!
                Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
      <p>
      <h1>
        @verbatim
          <div id="app">{{ message }}</div>
        @endverbatim
      </h1>
  </section>
@endsection

@section('sidebar')
  @parent
  <p> This is appended to the master sidebar</p>
@endsection

{{-- @section('title')
    Contact
@endsection --}}

@push('scripts')
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp} = Vue
  createApp({
    data() {
      return {
        message :'Use the dynamic value vuejs in laravel blade file!'
      }
    }
  }).mount('#app')
</script>
@endpush