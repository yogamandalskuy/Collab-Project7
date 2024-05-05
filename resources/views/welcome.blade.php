<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    <style>
        .container {
            position: relative;

        }

        .img-thumbnail {
            position: absolute;
            top: 30%;
            left: 55%;
            width: 50%; /* Set the width of the image */
            height: auto; /* Maintain aspect ratio */
            border: none;
        }
        h1{
           margin-top: 20%;
           font-weight: 800;
           font-size: 300%;
           font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        .col1 p{
            font-size: 150%;
        }
        .navbar-brand{
            font-weight: bold;
            color: #164228;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
        .nav-link {
            color: #164228; /* Change the text color to red */
            font-weight: bold;
        }
        .nav-link active{
            background-color: #164228;
        }
        .nav-link:hover {
            color:black; /* Change background color on hover */
        }
        .Profile{
            padding : 25%;
            text-align: center;
        }
        h2{
            font-weight: 700;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

    </style>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-md">
              <a class="navbar-brand" href="/home">Kelompok 5</a>
              <ul class="nav nav-pills">
                <li class="nav-item">
                   <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home">Next</a>
                </li>
              </ul>
            </div>
        </nav>
    </section>

    <section class="container">
            <div class="row">
              <div class="col1">
               <h1>Kelompok 5</h1>
               <p>Praktikum Modul 7 - Pemrograman Framework</p>
              </div>
              <div class="col2">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image">
              </div>
    </section>

    <section class="Profile">
        <h2>My Profile</h2>
        <p> Perkenalkan kami dari Kelompok 5 kelas IS-05-04. Kelompok kami terdiri dari Yoga, Cheasario, Naomi dan Trisna.
        </p>
    </section>


    @vite('resources/js/app.js')
</body>
</html>
