<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum02</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Belanja Online</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="praktikum02.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active text-uppercase font-weight-bold">Daftar Harga</a>
                    <div class="list-group-item">
                        TV : Rp. 4.200.000
                    </div>
                    <div class="list-group-item">
                        KULKAS : Rp. 3.100.000
                    </div>
                    <div class="list-group-item justify-content-between">
                        Mesin Cuci : Rp. 3.800.000
                    </div>
                    <a href="#" class="list-group-item list-group-item-action active text-uppercase font-weight-bold">Harga Dapat Berubah Setiap Saat !</a>
                </div>
            </div>
            <div class="row">

                <?php
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                $harga;

                if ($produk >= 'TV') {
                    $harga = 4200000;
                } elseif ($produk >= 'Kulkas') {
                    $harga = 3500000;
                } elseif ($produk >= 'Mesin Cuci') {
                    $harga = 3500000;
                } else {
                    $harga = 0;
                }
                $total = $jumlah * $harga;
                $hasil = "Rp " . number_format($total, 2, ',', '.');
                ?>

                <div class="col-md-4">
                    <table>
                        <tr>
                            <td>Nama Customer</td>
                            <td>: <?= $customer ?></td>
                        </tr>
                        <tr>
                            <td>Produk</td>
                            <td>: <?= $produk ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: <?= $jumlah ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>: <?= $hasil ?></td>
                        </tr>

                    </table>
                </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>