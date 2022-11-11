<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Alternatif</h1>
        </div>
      </div>
      <hr class="divider">
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <a class="btn btn-primary btn-sm mb-2" href="<?= base_url('Admin/indexAlternatif') ?>"><i class="fa-solid fa-caret-left"></i> Kembali</a>
      <form class="user" enctype="multipart/form-data" id="inputFormTambah" action="<?= base_url('Admin/tambahData/' . 'tabel_alternatif/' . 'indexAlternatif/' . 'indexTambahDataAlternatif'); ?>" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <label for="nama">Alternatif</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Alternatif..." required>
            </div>
            <div class="form-group mb-3">
              <div class="input-group-prepend">
                <label for="id_lokasi">Lokasi</label>
              </div>
              <select class="custom-select" name="id_lokasi" id="id_lokasi" required>
                <option selected>Pilih Lokasi...</option>
                <?php foreach ($semuaData["dataLokasi"] as $key => $value) : ?>
                  <option value="<?= $value->id; ?>"><?= $value->nama; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="C1">Temperatur</label>
              <input type="number" class="form-control" name="C1" id="C1" placeholder="Masukkan Temperatur..." required>
            </div>
            <div class="form-group mb-3">
              <label for="C2">Curah Hujan</label>
              <input type="number" class="form-control" name="C2" id="C2" placeholder="Masukkan Curah Hujan..." required>
            </div>
            <div class="form-group mb-3">
              <label for="C3">Kelembaban</label>
              <input type="number" class="form-control" name="C3" id="C3" placeholder="Masukkan Kelembaban..." required>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <div class="input-group-prepend">
                <label for="C4">Drainase</label>
              </div>
              <select class="custom-select" name="C4" id="C4" required>
                <option selected value="">Pilih Kondisi...</option>
                <option value="Baik">Baik</option>
                <option value="Agak Cepat">Agak Cepat</option>
                <option value="Terhambat">Terhambat</option>
                <option value="Sangat Terhambat">Sangat Terhambat</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <div class="input-group-prepend">
                <label for="C5">Tekstur Tanah</label>
              </div>
              <select class="custom-select" name="C5" id="C5" required>
                <option selected value="">Pilih Kondisi...</option>
                <option value="Agak Kasar-Kasar">Agak Kasar-Kasar</option>
                <option value="Kasar">Kasar</option>
                <option value="Halus">Halus</option>
                <option value="Sangat Halus">Sangat Halus</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="C6">Kedalaman Tanah</label>
              <input type="number" class="form-control" name="C6" id="C6" placeholder="Masukkan Kedalaman Tanah..." required>
            </div>
            <div class="form-group mb-3">
              <label for="C7">PH H2O</label>
              <input type="text" class="form-control" name="C7" id="C7" placeholder="Masukkan PH H2O..." required>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-circle-plus"></i> Tambah Data</button>
      </form>
    </div>
  </section>
</div>
<script>
  <?php if ($this->session->flashdata('noticeGagalTambah')) : ?>
    Swal.fire({
      icon: 'error',
      title: 'Data sudah ada!'
      // timer: 2000
    })
  <?php endif; ?>
</script>