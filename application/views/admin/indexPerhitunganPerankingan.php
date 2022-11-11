<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan Perankingan</h1>
                </div>
            </div>
            <hr class="divider">
            <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/indexPerhitungan') ?>"><i class="fa-solid fa-caret-left"></i> Kembali</a>
            <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/cetak') ?>">Cetak <i class="fa-solid fa-toilet-paper"></i></a>
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
                                        <th>B Temperatur</th>
                                        <th>B Curah Hujan</th>
                                        <th>B Kelembaban</th>
                                        <th>B Drainase</th>
                                        <th>B Tekstur Tanah</th>
                                        <th>B Kedalaman Tanah</th>
                                        <th>B PH H2O</th>
                                        <th>Ranking</th>
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
                                    <?php
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Perankingan Terurutkan
                        </div>
                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>B Temperatur</th>
                                        <th>B Curah Hujan</th>
                                        <th>B Kelembaban</th>
                                        <th>B Drainase</th>
                                        <th>B Tekstur Tanah</th>
                                        <th>B Kedalaman Tanah</th>
                                        <th>B PH H2O</th>
                                        <th>Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($ranking as $key => $value) : ?>
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
                                    <?php
                                    endforeach; ?>
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
        $('#table1').dataTable();
    });
</script>