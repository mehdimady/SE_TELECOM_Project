<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        {{-- <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico"> --}}
        
        <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
        <script src="https://kit.fontawesome.com/37b7b786f3.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
        <link rel="stylesheet" href="{{asset('css\style.css')}}">
    

<body>
    @include('navbar')
    @yield('content')
    @include('footer')
    <script type="text/javascript" src="{{asset('js\vanilla-tilt.js')}}"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src={{asset('js\checkout.js')}}></script>
    <script>VanillaTilt.init(document.querySelectorAll(".cardStyle"), {max: 25,speed: 400});</script>
    <script>const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
          if (window.pageYOffset > 100) {
            toTop.classList.add("active");
          } else {
            toTop.classList.remove("active");
          }
        })</script>
</body>
</html>