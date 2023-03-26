<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once "process_registrasi.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum03</h1>
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
                    <div class="container">
        <h2>Form Registrasi IT Club</h2>
        <br>
        <form method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required">
                        <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required">
                        <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach ($domisili as $dom) { ?>
                            <option value="Jakarta"><?= $dom; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="program_studi" name="program_studi" class="custom-select" required="required">
                        <?php foreach ($program_studi as $key => $value) { ?>
                            <option><? $key ?><?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label>
                <div class="col-8">
                    <?php foreach ($skills as $key => $value) { ?>
                        <div class="custom-control custon-checkbox custon-control-inline">
                            <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>">
                            <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <br>
        </form>
        <table class="table table-bordered">
            <tr class="table-info text-uppercase">
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis kelamin</th>
                <th>Domisili</th>
                <th>Program Studi</th>
                <th>Skill Programing</th>
                <th>Skor</th>
                <th>Predikat</th>
            </tr>

            <?php
            if (isset($_POST['submit'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $domisili = $_POST['domisili'];
                $program_studi = $_POST['program_studi'];
                $skill_user = $_POST['skill'];
                $skor_user = 0;
                $predikat = "";
                foreach ($skill_user as $skor) {
                    $skor_user += $skills[$skor];
                };
                if ($skor_user >= 100) {
                    $predikat = "Sangat Baik";
                } else if ($skor_user >= 60 && $skor_user < 100) {
                    $predikat = "Baik";
                } else if ($skor_user >= 40 && $skor_user < 60) {
                    $predikat = "Cukup";
                } else if ($skor_user > 0 && $skor_user < 40) {
                    $predikat = "Kurang";
                } else if ($skor_user == 0) {
                    $predikat = "Tidak Memadai";
                }
                // last 1 by : "arya243"
            ?>
                <tr>
                    <td><?= $nim; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $jenis_kelamin; ?></td>
                    <td><?= $domisili; ?></td>
                    <td><?= $program_studi; ?></td>
                    <td><?php foreach ($skill_user as $skill) {
                            echo $skill . " ";
                        }; ?></td>
                    <td><?= $skor_user; ?></td>
                    <td><?= $predikat; ?></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>