<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<?php $no = 1; ?>
<div class="m-4 apotek">
    <section>
        <h1 class="h3 mb-4 text-gray-800">Data Obat</h1>
    </section>
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('apotek/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <b>Tambah Data</b></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="data-list">
                <thead>
                    <tr align="center">
                        <td width="5%">No</td>
                        <td>Kode</td>
                        <td>Nama</td>
                        <td>Satuan</td>
                        <td>Jenis</td>
                        <td>Stok</td>
                        <td>Tanggal Kadaluarasa</td>
                        <td>Kegunaan</td>
                        <td width="10%">Opsi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($obat as $row) { ?>
                        <tr align="center">
                            <td><?= $no++; ?></td>
                            <td><?= $row['kode_obat']; ?></td>
                            <td><?= $row['nama_obat']; ?></td>
                            <td><?= $row['satuan_obat']; ?></td>
                            <td><?= $row['jenis_obat']; ?></td>
                            <td><?= $row['stok_obat']; ?></td>
                            <td><?= $row['tgl_exp']; ?></td>
                            <td><?= $row['kegunaan']; ?></td>
                            <td>
                                <a href="<?= base_url('/apotek/ubah/'.$row['kode_obat']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('/apotek/hapus/'.$row['kode_obat']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>