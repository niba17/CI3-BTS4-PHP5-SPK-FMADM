<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="m-0">Beranda</h1>
        </div>
      </div>
      <hr class="divider mb-0">
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title"></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> -->
                <!-- <i class="fas fa-times"></i> -->
                <!-- </button> -->
              </div>
            </div>
            <div class="card-body h5">
              Selamat datang di aplikasi Implementasi Sistem Pendukung Keputusan Pemilihan Lokasi Lahan Padi Sawah dengan menggunakan Metode <i>Fuzzy Multi Atribute Decission Making
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= count($semuaData['dataAlternatif']) ?></h3>
              <!-- <p>ALTERNATIF</p> -->
            </div>
            <div class="icon p-3">
              <i class="fa-solid fa-tags fa-2x p-3"></i>
            </div>
            <a href="<?= base_url('Admin/indexAlternatif'); ?>" class="small-box-footer">Alternatif <i class="fa-solid fa-eye"></i></a>
          </div>
        </div>

        <!-- <div class="col-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= count($semuaData['dataKriteria']); ?></h3>
              <p>Kriteria</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('Admin/indexKriteria'); ?>" class="small-box-footer">Detail <i class="fa-solid fa-eye"></i></a>
          </div>
        </div> -->

        <div class="col-4">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= count($semuaData['dataLokasi']) ?></h3>
              <!-- <p>LOKASI</p> -->
            </div>
            <div class="icon p-3">
              <i class="fa-solid fa-map-location-dot fa-2x p-3"></i>
            </div>
            <a href="<?= base_url('Admin/indexLokasi'); ?>" class="small-box-footer">Lokasi <i class="fa-solid fa-eye"></i></a>
          </div>
        </div>

        <div class="col-4">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= count($semuaData['dataAdmin']) ?></h3>
              <!-- <p>AKUN</p> -->
            </div>
            <div class="icon p-3">
              <i class="fa-solid fa-user-shield fa-2x p-3"></i>
            </div>
            <a href="<?= base_url('Admin/indexAkun'); ?>" class="small-box-footer">Akun <i class="fa-solid fa-eye"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title"></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <img src="<?= base_url('assets/img/beranda.jpeg'); ?>" alt="kostratani.jpeg" style="width:100%; height:350px;">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title"></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <img src="<?= base_url('assets/img/beranda2.jpeg'); ?>" alt="kostratani.jpeg" style="width:100%; height:350px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
  <?php if ($this->session->flashdata('noticeGagalHitung')) : ?>
    Swal.fire({
      icon: 'error',
      title: 'Data Alternatif harus lebih dari 1!',
      // timer: 1000
      // // text: 'Something went wrong!',
      // // footer: '<a href="">Why do I have this issue?</a>'
    })
  <?php endif; ?>
  <?php if ($this->session->flashdata('noticeBerhasilLogin')) : ?>
    let timerInterval
    Swal.fire({
      // title: 'Selamat Datang Admin!',

      html: 'Menyiapkan data.',
      timer: 1500,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
        Swal.fire({
          icon: 'success',
          title: 'Selamat Datang Admin!',
          timer: 1000
          // text: 'Something went wrong!',
          // footer: '<a href="">Why do I have this issue?</a>'
        })
      }
    })
  <?php endif; ?>
</script>