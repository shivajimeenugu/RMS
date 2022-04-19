<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script src="/__/firebase/8.10.1/firebase-messaging.js"></script> --}}
    <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-analytics.js";
    import { getMessaging, getToken } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-messaging.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyBm5XsI_aa2OCWCOEA0oy0DcofxLn9RWdY",
        authDomain: "room-management-system-17ebc.firebaseapp.com",
        projectId: "room-management-system-17ebc",
        storageBucket: "room-management-system-17ebc.appspot.com",
        messagingSenderId: "412544328439",
        appId: "1:412544328439:web:fb43f9aabf25d61a0869f2",
        measurementId: "G-SQWMEFMX5B"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);


        // Get registration token. Initially this makes a network call, once retrieved
        // subsequent calls to getToken will return from cache.
        const messaging = getMessaging();
        getToken(messaging, { vapidKey: 'AAAAYA2O4vc:APA91bHS6m5QBWzOnWQHr5E1Zc56IOHnoaSVXX39JwvD7F2l2iGaHPEk4ixP5OwONsgciWu8s54LWdX2q-KS2VG-z8UPZ2hlgFiR13b4cgClv_7mlHBDKmVX1p4ReIyVJYb-pX-WaVbH' }).then((currentToken) => {
        if (currentToken) {
            // Send the token to your server and update the UI if necessary
            // ...
            console.log('Sivaji FCM Token',currentToken);
            // alert(currentToken);
        } else {
            // Show permission request UI
            console.log('No registration token available. Request permission to generate one.');
            // alert(currentToken);
            // ...
        }
        }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        // alert(currentToken);
        // ...
        });
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    @yield('style')

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>
<body>
    <div id="app">
        @include("nav")
        <main class=" h-full">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    const btn = document.querySelector(".mobile-menu-button");
          const close = document.querySelector(".close");
          const sidebar = document.querySelector(".sidebar");

          // add our event listener for the click
          btn.addEventListener("click", () => {
          sidebar.classList.toggle("-translate-x-full");
          });
          close.addEventListener("click", () => {
          sidebar.classList.add("-translate-x-full");
          });
          close.addEventListener("click", () => {
          sidebar.classList.add("lg:hidden");
          });
          btn.addEventListener("click", () => {
          sidebar.classList.toggle("lg:hidden");
          });
</script>
</body>
</html>
