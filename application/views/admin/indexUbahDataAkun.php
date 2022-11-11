<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Ubah Akun</h1>
        </div>
      </div>
      <hr class="divider">
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <a class="btn btn-primary btn-sm mb-2" href="<?= base_url('Admin/indexAkun') ?>"><i class="fa-solid fa-caret-left"></i> Kembali</a>
      <form class="user" enctype="multipart/form-data" id="inputFormUbah" action="<?= base_url('Admin/ubahData/' . 'tabel_admin/' . $detailData->id . '/indexAkun/' . 'indexUbahDataAkun'); ?>" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" value="<?= $detailData->username; ?>" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password..." required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group mb-3">
              <label for="password2">Konfirmasi Password</label>
              <input type="password" class="form-control" id="password2" placeholder="Konfirmasi Password..." required>
            </div>
          </div>
        </div>
        <button class="btn btn-primary disabled" type="submit" id="submit"><i class="fa-solid fa-circle-plus"></i> Ubah Data</button>
        <small id="msg" class="text-danger"></small>
      </form>
    </div>
  </section>
</div>
<script>
  $('input:password').keyup(function() {
    if ($('#password').val() != '' && $('#password2').val() != '') {
      if ($('#password').val() == $('#password2').val()) {
        $('#submit').removeClass('disabled');
        $('#msg').html('');
      } else {
        $('#submit').addClass('disabled');
        $('#msg').html('Konfirmasi Password tidak sesuai!<br>');
      }
    } else {
      $('#submit').addClass('disabled');
    }
  });

  <?php if ($this->session->flashdata('noticeGagalUbah')) : ?>
    Swal.fire({
      icon: 'error',
      title: 'Data sudah ada!',
      timer: 2000
    })
  <?php endif; ?>
</script>