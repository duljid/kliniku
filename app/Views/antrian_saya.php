<?= $this->extend('template/template_home'); ?>

<?= $this->Section('content');?>
<div class="m-4 pendaftaran">
    <section class="container">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Antrian Saya</h1>
        </div>
        <div class="card p-5">
            <table class="table" id="data-list">
                <thead>
                    <tr class="text-left">
                        <th scope="col">No Antrian</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Poli</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Tanggal Berobat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0; foreach ($antrian as $user) : ?>
                    <?php $nomor++ ?>
                    <tr>
                        <th scope="row"><?= $user->id_berobat ?></th>
                        <td><?= $user->nama_pasien ?></td>
                        <td><?= $user->poli_berobat ?></td>
                        <td><?= $user->dokter_berobat ?></td>
                        <td><?= $user->tanggal_berobat ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>