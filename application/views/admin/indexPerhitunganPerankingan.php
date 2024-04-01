<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan Perankingan</h1>
                </div>
            </div>
            <hr class="divider">

            <!-- <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/cetak') ?>">Cetak <i
                    class="fa-solid fa-toilet-paper"></i>
            </a> -->
            <div class="dropdown">
                <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/indexPerhitungan') ?>"><i
                        class="fa-solid fa-caret-left"></i> Kembali
                </a>
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cetak <i class="fa-solid fa-toilet-paper"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url('Admin/cetak') ?>">Semua Hasil Perankingan</a>
                    <?php foreach ($lokasi as $key => $value) : ?>
                    <a class="dropdown-item" href="<?= base_url('Admin/cetak/') . $value->id ?>">Perankingan
                        <?= $value->nama ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Normalisasi & Perankingan
                        </div>
                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="table0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Temperatur</th>
                                        <th>Curah Hujan</th>
                                        <th>Kelembaban</th>
                                        <th>Drainase</th>
                                        <th>Tekstur Tanah</th>
                                        <th>Kedalaman Tanah</th>
                                        <th>PH H2O</th>
                                        <th>FMADM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($FMADM as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->C1N; ?></td>
                                        <td><?= $value->C2N; ?></td>
                                        <td><?= $value->C3N; ?></td>
                                        <td><?= $value->C4N; ?></td>
                                        <td><?= $value->C5N; ?></td>
                                        <td><?= $value->C6N; ?></td>
                                        <td><?= $value->C7N; ?></td>
                                        <td><?= $value->ranking; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan Perankingan</h1>
                </div>
            </div>
            <hr class="divider">

        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <?php foreach ($lokasi as $rowL) : ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Perankingan di
                            <?= $rowL->nama ?>
                        </div>

                        <div class="btn-group mt-3 ml-3">
                        </div>

                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Temperatur</th>
                                        <th>Curah Hujan</th>
                                        <th>Kelembaban</th>
                                        <th>Drainase</th>
                                        <th>Tekstur Tanah</th>
                                        <th>Kedalaman Tanah</th>
                                        <th>PH H2O</th>
                                        <th>FMADM</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
										foreach ($ranking as $key => $value) : ?>
                                    <?php if ($value->id_lokasi == $rowL->id) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->C1N; ?></td>
                                        <td><?= $value->C2N; ?></td>
                                        <td><?= $value->C3N; ?></td>
                                        <td><?= $value->C4N; ?></td>
                                        <td><?= $value->C5N; ?></td>
                                        <td><?= $value->C6N; ?></td>
                                        <td><?= $value->C7N; ?></td>
                                        <td><?= $value->ranking; ?></td>
                                        <td><?= $value->nama_lokasi; ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Alternatif yang belum
                            ditentukan lokasi
                        </div>

                        <div class="btn-group mt-3 ml-3">
                        </div>

                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Temperatur</th>
                                        <th>Curah Hujan</th>
                                        <th>Kelembaban</th>
                                        <th>Drainase</th>
                                        <th>Tekstur Tanah</th>
                                        <th>Kedalaman Tanah</th>
                                        <th>PH H2O</th>
                                        <th>FMADM</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($lokasi_null as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->C1N; ?></td>
                                        <td><?= $value->C2N; ?></td>
                                        <td><?= $value->C3N; ?></td>
                                        <td><?= $value->C4N; ?></td>
                                        <td><?= $value->C5N; ?></td>
                                        <td><?= $value->C6N; ?></td>
                                        <td><?= $value->C7N; ?></td>
                                        <td><?= $value->ranking; ?></td>
                                        <td>
                                            <?php if (isset($value2->nama_lokasi)) {
													if ($value2->nama_lokasi != null) {
														echo (urldecode($value2->nama_lokasi));
													} else {
														echo '<span class="text-danger">Belum ada lokasi !</span>';
													}
												} else {
													echo '<span class="text-danger">Belum ada lokasi !</span>';
												} ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<script>
$(document).ready(function() {


    $('#table0').dataTable();

    $('#table1 ').dataTable();









































});
</script>