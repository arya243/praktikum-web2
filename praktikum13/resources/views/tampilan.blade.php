@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="styles1.css">
    <style>
        .card {
            margin-bottom: 20px;
            background-color: #787878;
        }

        .card .card-body {
            background-color: #787878;
            color: rgb(255, 255, 255);
        }

        .jumbotron {
            background-color: #cacaca;
            color: rgb(0, 0, 0);
        }

        body {
            background-color: #cacaca;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Toko Trial</h1>
            <p class="lead">Selamat Datang</p>
            <hr class="my-4">

            <h4 class="text-center font-bold mt-4"><strong>KATEGORI TERBARU</strong></h4>

            <div class="row mx-auto my-4 justify-content-center">
                <div class="card" style="width: 16rem; margin-right: 10px;">
                    <img src="img/6yU9jpc7Vj.jpg" class="card-img-top" alt="" width="200">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Furniture</strong></h5>
                        <p class="card-text">Menyediakan berbagai macam Furniture.</p>
                        <a href="login" class="btn btn-dark">Lihat</a>
                    </div>
                </div>

                <div class="card" style="width: 16rem; margin-right: 10px;">
                    <img src="img/6yU9jpc7Vj.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Furniture</strong></h5>
                        <p class="card-text">Menyediakan berbagai macam Furniture Bekas.</p>
                        <a href="login" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
                <div class="card" style="width: 16rem; margin-right: 10px;">
                    <img src="img/6yU9jpc7Vj.jpg" class="card-img-top" alt="" width="200">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Elektronik</strong></h5>
                        <p class="card-text">Menyediakan berbagai macam Elektronik.</p>
                        <a href="login" class="btn btn-dark">Lihat</a>
                    </div>
                </div>

                <div class="card" style="width: 16rem;">
                    <img src="img/oklaj.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Elektronik</strong></h5>
                        <p class="card-text">Menyediakan berbagai macam Elektronik Bekas.</p>
                        <a href="login" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
            </div>

            <a class="btn btn-success btn-lg" href="login" role="button">Login</a>
            <p>Silahkan Login Terlebih Dahulu.</p>
        </div>
    </div>
</body>
@endsection