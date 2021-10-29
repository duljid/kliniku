<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4 pendaftaran">
    <section>
        <div>
            <h1 class="h3 mb-4 text-gray-800">Data Pasien Berobat</h1>
        </div>
        <div class="kotak p-5">
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
                    <?php $nomor = 0; foreach ($users as $user) : ?>
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