<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a> -->

  <div class="sidebar">

    <div class="user-panel d-flex mb-3 mt-3" style="padding-bottom:6px;">
      <div class="image">
        <!-- <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <i class="nav-icon fa-solid fa-user-shield fa-2x" style="color:#c2c7d0 ;"></i>

      <div class="info">
        <div class="d-block" style="color:#c2c7d0 ;">
          <b>
            <?= $this->session->userdata('detailAdmin')->username; ?>
          </b>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('Admin/indexBeranda'); ?>" class="nav-link <?php if ($sidebar == 'beranda') {
                                                                              echo 'active';
                                                                            } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Beranda
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('Admin/indexPerhitungan'); ?>" class="nav-link <?php if ($sidebar == 'perhitungan') {
                                                                                  echo 'active';
                                                                                } ?>">
            <i class="fa-solid fa-plus-minus nav-icon"></i>
            <p>
              Perhitungan
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link <?php if ($sidebar == 'data') {
                                        echo 'active';
                                      } ?>">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Data
              <i class="fas fa-angle-left right"></i>
              <!-- <span class="badge badge-info right">6</span> -->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('Admin/indexAlternatif'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Alternatif</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= base_url('Admin/indexKriteria'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kriteria</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= base_url('Admin/indexLokasi'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lokasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Admin/indexAkun'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Akun</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" onclick="logout()">
            <i class="fa-solid fa-right-from-bracket nav-icon"></i>
            <p>
              Logout
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<script>
  function logout() {
    Swal.fire({
      title: 'Logout?',
      // text: "You won't be able to revert this!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Logout!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.replace(baseUrl + 'Autentifikasi/logout');
      }
    })
  }
</script>