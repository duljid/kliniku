<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4 pendaftaran">
    <section>
        <div>
            <h1 class="h3 mb-4 text-gray-800">Pendaftaran Poli Pasien</h1>
        </div>
        <div class="kotak p-5">
            <table class="table" id="data-list">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Kode Pasien</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Daftar Poli</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0; foreach ($query as $row) : ?>
                    <?php $nomor++ ?>
                    <tr>
                        <th scope="row"><?= $row['kode_pasien']?></th>
                        <td><?= $row['nama_pasien'] ?></td>
                        <td><?= $row['jeniskelamin_pasien'] ?></td>
                        <td><?= $row['telepon_pasien'] ?></td>
                        <td class="text-center">
                        <a class="btn btn-info" href="#">Daftar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>