
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Form Input Produk</h1>

    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="POST" action="<?php echo e(url('produk/update/' . $p->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control" value="<?php echo e($p->kode); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" value="<?php echo e($p->nama); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                <div class="col-8">
                    <input id="harga_jual" name="harga_jual" type="text" class="form-control"
                        value="<?php echo e($p->harga_jual); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <input id="harga_beli" name="harga_beli" type="text" class="form-control"
                        value="<?php echo e($p->harga_beli); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <input id="stok" name="stok" type="text" class="form-control" value="<?php echo e($p->stok); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                <div class="col-8">
                    <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?php echo e($p->min_stok); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"><?php echo e($p->deskripsi); ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
                <div class="col-8">
                    <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                        <?php $__currentLoopData = $kategori_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($d->id); ?>" <?php echo e($p->kategori_produk_id == $d->id ? 'selected' : ''); ?>>
                                <?php echo e($d->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum-web2\praktikum10\resources\views/admin/produk/edit.blade.php ENDPATH**/ ?>