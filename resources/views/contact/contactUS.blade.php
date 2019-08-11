@include('partials.head')
@include('partials.navbar')

  <div class="container">
  <h1>Contact US Form</h1>
  @if(Session::has('success'))
     <div class="alert alert-success">
       {{ Session::get('success') }}
     </div>
  @endif
  <form class="" action="index.html" method="post">
    
  </form>
  </div>


@include('partials.footer')
