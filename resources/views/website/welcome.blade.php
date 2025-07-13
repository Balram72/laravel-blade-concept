 @extends('website.layout.masterlayout')

 @section('content')
 {{-- <section class="hero">
        <h2>Home Page</h2>
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
</section> --}}
@endsection
@section('title')
    Home
@endsection

@push('scripts')
  <script src="/exaple.js"></script>
  <script src="/jquery.js"></script>
  <script src="/bootstrap.js"></script>
@endpush
@push('scripts')
  <script src="/vue.js"></script>
@endpush

@push('csss')
  <link rel="stylesheet" href="/bootstrap.css">
@endpush


@prepend('csss')
  <style>
    .logo{
        color:red;
      }
  </style>
@endprepend

