<!-- <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Validation</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Validation</li>
        </ol>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class="content"> -->


<div class="container-fluid d-flex justify-content-center align-items-center" style="height:700px;">
  <div class="card card-primary shadow" style="width: 500px; height:300px;">
    <div class="card-header shadow">
      <h3 class="card-title mb-0 font-weight-bold">SPK - FMADM</h3>
    </div>
    <form action="<?= base_url('Autentifikasi/verifikasi') ?>" method="post">
      <div class="card-body" style="background-color: #007bff2e;">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="username" name="username" class="form-control" id="username" placeholder="Masukkan Username..." required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password..." required>
        </div>
      </div>
      <div class="card-footer bg-primary">
        <button type="submit" class="btn btn-primary">Login <i class="fa-solid fa-right-to-bracket"></i></button>
      </div>
    </form>
  </div>
</div>
<script>
  <?php if ($this->session->flashdata('noticeGagalLogin')) : ?>
    Swal.fire({
      icon: 'error',
      title: 'Username atau Password tidak sesuai!'
      // timer: 2000
    })
  <?php endif; ?>
  <?php if ($this->session->flashdata('noticeBerhasilLogout')) : ?>
    Swal.fire({
      icon: 'success',
      title: 'Logout!',
      timer: 1500
    })
  <?php endif; ?>
  <?php if ($this->session->flashdata('berhasilBuatAkun')) : ?>
    Swal.fire({
      icon: 'success',
      title: 'Akun Berhasil Dibuat!',
      timer: 1500
    })
  <?php endif; ?>
</script>
<!-- </section> -->