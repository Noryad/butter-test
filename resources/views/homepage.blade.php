<html>
  <head>
    <title>{{$seoTitle}}</title>
  </head>
  <body>
    <img width="100%" src="{{ $heroImage }}">
    <h1>{{ $headline }}</h1>
    <button>{{$callToAction}}</button>
    <h3>Customers Love Us!</h3>
    <!-- Loop over customer logos -->
    @foreach($customerLogos as $logo)
    <img width="100%" src="{{ $logo['logo_image'] }}" style="width: 400px;">
    <br>
    @endforeach
  </body>
</html>