<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>

<head>
    <title>MASTER DATA PASIEN BERSALIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="m-4 rumahbersalin">
    <div class="container pt-5">

        <div class="card">
            <div class="card-header bg-info text-white">

                <center>
                    <h4 class="card-title">DATA PASIEN BERSALIN</h4>
                    </>
            </div>
            <br>
            <a href="<?= base_url('Bersalin/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>Umur Pasien</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Dokter Penanganan</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                        foreach ($getBarang as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama_pasien']; ?></td>
                                <td><?= $isi['umur_pasien']; ?></td>
                                <td><?= $isi['alamat']; ?></td>
                                <td><?= $isi['tgl']; ?></td>
                                <td><?= $isi['dokter']; ?></td>

                                <td>
                                    <center><a href="<?= base_url('Bersalin/edit/' . $isi['no_pasien']); ?>"
                                            class="btn btn-success">
                                            Update</a></>


                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>