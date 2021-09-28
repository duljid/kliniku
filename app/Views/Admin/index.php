<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4 admin">
    <section>
        <div>
            <h1 class="h3 mb-4 text-gray-800">Daftar Users</h1>
        </div>
        <div class="kotak p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0; foreach ($users as $user) : ?>
                    <?php $nomor++ ?>
                    <tr>
                        <th scope="row"><?= $nomor?></th>
                        <td><?= $user->username ?></td>
                        <td><?= $user->fullname ?></td>
                        <td><?= $user->name ?></td>
                        <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-danger" href="/Admin/deleteakun/<?= $user->userid ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>