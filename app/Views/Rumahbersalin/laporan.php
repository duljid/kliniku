<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>

<head>
    <title>LAPORAN PASIEN BERSALIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container pt-5">
    <h3>FILTER DATA PASIEN</h3>
    <hr>
    <form action="<?php echo base_url('Rumahbersalin/laporan')?>" action="GET">
        <div class="row">
            <div class="col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                    </div>
                </div>

    </form>

    <div class="card">
        <div class="card-header bg-info text-white">
            <center>
                <h4 class="card-title">DATA PASIEN BERSALIN</h4>
                </>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Umur Pasien</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Dokter Penanganan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    if(count($data)>0) {
        foreach ($data as $user) {
            echo "<tr>";
            echo "<td>" . $user['nama_pasien'] . "</td>";
            echo "<td>" . $user['umur_pasien'] . "</td>";
            echo "<td>" . $user['alamat'] . "</td>";
            echo "<td>" . $user['tgl'] . "</td>";
            echo "<td>" . $user['dokter'] . "</td>";
            echo "<td>" . $user['status'] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "Data tidak ditemukan";
    }
    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>