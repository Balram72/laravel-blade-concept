<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BalramS - @yield('title','Website')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  @stack('csss')
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container">
      <h1 class="logo">MyWebsite</h1>
      <nav>
        <ul class="nav-links">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
   <div class="sidebar">
    @section('sidebar')
      <ul>
      <li><a href="/">Dashboard</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
    @show
  </div>
  <div class="main-content">
    <main id="home">
      @hasSection('content')
        @yield('content')
      @else
       <h2>No Content Found</h2> 
      @endif
      
    </main>
    <!-- Footer -->
    <footer>
      <div class="container" style="justify-content:center">
        <p style="text-align: center;">&copy; 2025 MyWebsite. All rights reserved.</p>
      </div>
    </footer>
  </div>

  {{-- Us the Javascript file --}}
   @stack('scripts')

</body>
</html>