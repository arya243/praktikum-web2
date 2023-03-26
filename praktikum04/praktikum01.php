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
                    <h1>Praktikum01</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Siswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            $nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 83, "tugas" => 90];
                            $nilai2 = ["id" => 2, "nim" => "01102", "uts" => 81, "uas" => 84, "tugas" => 91];
                            $nilai3 = ["id" => 3, "nim" => "01103", "uts" => 82, "uas" => 85, "tugas" => 92];
                            $nilai4 = ["id" => 4, "nim" => "01104", "uts" => 90, "uas" => 86, "tugas" => 93];

                            $kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

                            ?>

                            <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
                            <table class="table table-light">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">UAS</th>
                                        <th scope="col">UTS</th>
                                        <th scope="col">Tugas</th>
                                        <th scope="col">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kumpulan_nilai as $nilai) : ?>
                                        <tr>
                                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                            <td><?= $nilai["id"]; ?></td>
                                            <td><?= $nilai["nim"]; ?></td>
                                            <td><?= $nilai["uts"]; ?></td>
                                            <td><?= $nilai["uas"]; ?></td>
                                            <td><?= $nilai["tugas"]; ?></td>
                                            <td><?= $nilai_akhir; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>