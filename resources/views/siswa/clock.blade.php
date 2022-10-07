@extends('siswa.admin')
{{-- @section('title')
@section('content-title') --}}
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('asset/css/clock.css')}}">
    </head>
    <body>
        
    
    <div class="container">
        <h1 id="current-time"></h1>
    </div>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"> -->
    <script>
        let time = document.getElementById("current-time");

        setInterval(() => {
           let d = new Date() ;
           time.innerHTML = d.toLocaleTimeString(); 
        }, 1000)
        </script>
    </body>
</html>
@endsection