<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4">
    <section class="pendaftaran">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Pendaftaran Poli Pasien</h1>
            <div class="text-center">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
        </div>
        <div class="kotak p-5" style="background-color: white">
            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row">
                    <h1 class="h4 text-gray-800">Biodata Pasien</h1>
                    <div class="col">
                        <div class="mb-3">
                            <h5>Nama Pasien</h5>
                            <h6><?= $nama_pasien ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                        <div class="mb-3">
                            <h5>Jenis Kelamin</h5>
                            <h6><?= $jenis_kelamin ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                        <div class="mb-3">
                            <h5>Umur Pasien</h5>
                            <h6><?= $umur_pasien ?> Tahun</h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <h5>Tanggal Lahir</h5>
                            <h6><?= $tanggal_lahir ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                        <div class="mb-3">
                            <h5>Telepon Pasien</h5>
                            <h6><?= $telepon_pasien ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                        <div class="mb-3">
                            <h5>Alamat Pasien</h5>
                            <h6><?= $alamat_pasien ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('#akun').on('change', function() {
            if($(this).val() == 'Dokter'){
                document.getElementById('fullname').innerHTML = 'Nama Dokter';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
            }else if($(this).val() == 'Apotek'){
                // ganti place holder
                document.getElementById('fullname').innerHTML = 'Nama Apotek';

                // ngilangin tanggal lahir
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "hidden").css("position" , "absolute");
                
                // default tanggal
                var now = new Date();
                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                $('#input_tanggal').val(today);

            }else if($(this).val() == 'Rumah Bersalin'){
                document.getElementById('fullname').innerHTML = 'Nama Rumah Bersalin';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "hidden").css("position" , "absolute");

                // default tanggal
                var now = new Date();
                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                $('#input_tanggal').val(today);
            }else{
                document.getElementById('fullname').innerHTML = 'Nama Lengkap';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
            }
        });
    });
</script>
<?= $this->endSection(); ?>