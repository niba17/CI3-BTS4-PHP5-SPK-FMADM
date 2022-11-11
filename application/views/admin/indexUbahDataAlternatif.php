<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Alternatif</h1>
                </div>
            </div>
            <hr class="divider">
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-primary btn-sm mb-2" href="<?= base_url('Admin/indexAlternatif') ?>"><i
                    class="fa-solid fa-caret-left"></i> Kembali</a>
            <form class="user" enctype="multipart/form-data" id="inputFormTambah"
                action="<?= base_url('Admin/ubahData/' . 'tabel_alternatif/' . $detailData->id . '/' . 'indexAlternatif/' . 'indexUbahDataAlternatif'); ?>"
                method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="nama">Alternatif</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="<?= $detailData->nama ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <label for="id_lokasi">Lokasi</label>
                            </div>
                            <select class="custom-select" name="id_lokasi" id="id_lokasi" required>
                                <option selected>Pilih Lokasi...</option>
                                <?php foreach ($semuaData["dataLokasi"] as $key => $value) : ?>
                                <?php if ($detailData->id_lokasi == $value->id) : ?>
                                <option value="<?= $value->id; ?>" selected><?= $value->nama; ?></option>
                                <?php endif; ?>
                                <?php if ($detailData->id_lokasi != $value->id) : ?>
                                <option value="<?= $value->id; ?>"><?= $value->nama; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="C1">Temperatur</label>
                            <input type="number" class="form-control" name="C1" id="C1" value="<?= $detailData->C1 ?>"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="C2">Curah Hujan</label>
                            <input type="number" class="form-control" name="C2" id="C2" value="<?= $detailData->C2 ?>"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="C3">Kelembaban</label>
                            <input type="number" class="form-control" name="C3" id="C3" value="<?= $detailData->C3 ?>"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <label for="C4">Drainase</label>
                            </div>
                            <?php $kDrainase = ['Baik', 'Agak Cepat', 'Terhambat', 'Sangat Terhambat']; ?>
                            <select class="custom-select" name="C4" id="C4" required>
                                <?php foreach ($kDrainase as $key => $value) : ?>
                                <?php if ($detailData->C4 == $value) : ?>
                                <option selected value="<?= $value ?>"><?= $value ?></option>
                                <?php endif; ?>
                                <?php if ($detailData->C4 != $value) : ?>
                                <option value="<?= $value ?>"><?= $value ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <label for="C5">Tekstur Tanah</label>
                            </div>
                            <?php $kTTanah = ['Agak Kasar-Kasar', 'Kasar', 'Halus', 'Sangat Halus']; ?>
                            <select class="custom-select" name="C5" id="C5" required>
                                <?php foreach ($kTTanah as $key => $value) : ?>
                                <?php if ($detailData->C5 == $value) : ?>
                                <option selected value="<?= $value ?>"><?= $value ?></option>
                                <?php endif; ?>
                                <?php if ($detailData->C5 != $value) : ?>
                                <option value="<?= $value ?>"><?= $value ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="C6">Kedalaman Tanah</label>
                            <input type="number" class="form-control" name="C6" id="C6" value="<?= $detailData->C6 ?>"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="C7">PH H2O</label>
                            <input type="text" class="form-control" name="C7" id="C7" value="<?= $detailData->C7 ?>"
                                required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-circle-plus"></i> Ubah Data</button>
            </form>
        </div>
    </section>
</div>
<script>
$(document).ready(function() {

    //tombolResetFormTambah
    $('#resetTambah').click(function() {
        $('.custom-select').prop('selectedIndex', 0);
        $('#inputFormTambah').find("input[type=text], textarea").each(function() {
            $(this).val('');
            $('#FTinputKelurahan').val('');
        });
    })

    $("#FTinputKecamatan").change(function() {
        $idKecamatan = $(this).val();

        $.ajax({
            url: base_url + 'Admin/jsonGetKelurahanFT',
            method: 'post',
            data: {
                FTidKecamatan: $idKecamatan
            },
            cache: false,
            dataType: 'json',
            success: function(data) {
                $html = "";
                for ($i = 0; $i < data.length; $i++) {
                    $html += '<option value="' + data[$i].id + '">' + data[$i].nama +
                        '</option>';
                }
                $("#FTinputKelurahan").html($html);
            }
        });
    });
});

<?php if ($this->session->flashdata('noticeGagalUbah')) : ?>
Swal.fire({
    icon: 'error',
    title: 'Data sudah ada!',
    timer: 2000
})
<?php endif; ?>
</script>