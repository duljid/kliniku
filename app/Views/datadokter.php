    <!-- <select class="form-select" id="disabledSelect" name="dokter_berobat" id="floatingSelect"
        aria-label="Floating label select example"> -->
        <option value="">-- Pilih Dokter --</option>
        <?php foreach($dokter as $row): ?>
        <option value="<?= $row->fullname ?>"><?= $row->fullname ?></option>
        <?php endforeach;?>
    <!-- </select>
    <label for="floatingSelect">Dokter Poli</label> -->