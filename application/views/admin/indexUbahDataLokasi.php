<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Ubah Lokasi</h1>
        </div>
      </div>
      <hr class="divider">
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <a class="btn btn-primary btn-sm mb-2" href="<?= base_url('Admin/indexLokasi') ?>"><i class="fa-solid fa-caret-left"></i> Kembali</a>
      <form class="user" enctype="multipart/form-data" id="inputFormTambah" action="<?= base_url('Admin/ubahData/' . 'tabel_lokasi/' . $detailData->id . '/indexLokasi/' . 'indexUbahDataLokasi'); ?>" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <label for="nama">Lokasi</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= $detailData->nama ?>" required>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-circle-plus"></i> Ubah Data</button>
      </form>
    </div>

  </section>
</div>
<script>
  <?php if ($this->session->flashdata('noticeGagalUbah')) : ?>
    Swal.fire({
      icon: 'error',
      title: 'Data sudah ada!',
      timer: 2000
    })
  <?php endif; ?>
</script>