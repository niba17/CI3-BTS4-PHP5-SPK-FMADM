<div class="content-wrapper">
    <?php $semuaData['dataKriteria'] = [
		'Temperatur',
		'Curah Hujan',
		'Kelembaban',
		'Drainase',
		'Tekstur Tanah',
		'Kedalaman Tanah',
		'PH H2O'
	]; ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan</h1>
                </div>
            </div>
            <hr class="divider">
            <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/indexPerhitunganPerankingan') ?>">Ke Perankingan
                <i class="fa-solid fa-caret-right"></i></a>

        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Data Alternatif</div>
                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped" style="font-size:13px;" id="table2">
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

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($FMADM as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->C1F; ?></td>
                                        <td><?= $value->C2F; ?></td>
                                        <td><?= $value->C3F; ?></td>
                                        <td><?= $value->C4F; ?></td>
                                        <td><?= $value->C5F; ?></td>
                                        <td><?= $value->C6F; ?></td>
                                        <td><?= $value->C7F; ?></td>

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Range Bobot Kriteria
                        </div>
                        <div class="table-responsive px-3 py-3">
                            <table class="table table-striped text-center" style="font-size:13px;" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Range Bobot Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($semuaData['dataKriteria'] as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value; ?></td>
                                        <td><button class="btn btn-primary"
                                                onclick="range<?= str_replace(' ', '', $value) ?>('<?= $value; ?>')"><i
                                                    class="fa-solid fa-eye"></i></button></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- $text = str_replace(' ', '', $kalimat); -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">Tabel Pemobotan Kriteria &
                            Kurva</div>
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
                                        <th>Kurva</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
									foreach ($FMADM as $key => $value) : ?>
                                    <tr>
                                        <td><?= ++$no; ?></td>
                                        <td><?= $value->nama; ?></td>
                                        <td><?= $value->C1F; ?></td>
                                        <td><?= $value->C2F; ?></td>
                                        <td><?= $value->C3F; ?></td>
                                        <td><?= $value->C4F; ?></td>
                                        <td><?= $value->C5F; ?></td>
                                        <td><?= $value->C6F; ?></td>
                                        <td><?= $value->C7F; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown"><i class="fa-solid fa-chart-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item"
                                                            onclick="chart('<?= $value->nama; ?>','Temperatur','<?= $value->C1F; ?>')">Temperatur</button>
                                                    </li>
                                                    <li><button class="dropdown-item"
                                                            onclick="chart('<?= $value->nama; ?>','Curah Hujan','<?= $value->C2F; ?>')">Curah
                                                            Hujan</button></li>
                                                    <li><button class="dropdown-item"
                                                            onclick="chart('<?= $value->nama; ?>','Kelembaban','<?= $value->C3F; ?>')">Kelembaban</button>
                                                    </li>
                                                    <!-- <li><button class="dropdown-item">Drainase</button></li> -->
                                                    <!-- <li><button class="dropdown-item">Tekstur Tanah</button></li> -->
                                                    <li><button class="dropdown-item"
                                                            onclick="chart('<?= $value->nama; ?>','Kedalaman Tanah','<?= $value->C6F; ?>')">Kedalaman
                                                            Tanah</button></li>
                                                    <li><button class="dropdown-item"
                                                            onclick="chart('<?= $value->nama; ?>','PH H2O','<?= $value->C7F; ?>')">PH
                                                            H2O</button></li>
                                                </ul>
                                            </div>
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
    $('#table1').dataTable();
    $('#table2').dataTable();
});

function rangeTemperatur(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>18 > x > 35</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>18 =< x <= 24</td>
                        <td>( x - 18 ) / ( 24 - 18 )</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>29 =< x <= 35</td>
                        <td>( 35 - x ) / ( 35 - 29 )</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>24 < x < 29</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function rangeCurahHujan(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>100 > x > 750</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>100 =< x <= 175</td>
                        <td>( x - 100 ) / ( 175 - 100 )</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>500 =< x <= 750</td>
                        <td>( 750 - x ) / ( 750 - 500 )</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>175 < x < 500</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function rangeKelembaban(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>60 > x > 95</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>60 =< x <= 70</td>
                        <td>( x - 70 ) / ( 70 - 60 )</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>85 =< x <= 95</td>
                        <td>( 95 - x ) / ( 95 - 85 )</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>70 < x < 85</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function rangeDrainase(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sangat Terhambat</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Terhambat</td>
                        <td>0.25</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Agak Cepat</td>
                        <td>0.75</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Baik</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function rangeTeksturTanah(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>Agak Kasar-Kasar</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kasar</td>
                        <td>0.75</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Halus</td>
                        <td>0.25</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sangat Halus</td>
                        <td>0</td>
                    </tr>  
              </tbody>
              </table>`
    })
};

function rangeKedalamanTanah(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                <tr>
                <th class="bg-primary" colspan="3">
                Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>x > 11</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>11 =< x <= 15</td>
                        <td>( x - 11 ) / ( 15 - 11 )</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>x > 15</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function rangePHH2O(kriteria) {
    swal.fire({
        html: `<div class="table-responsive">
              <table class="table table-striped text-center" style="font-size:13px;">
                <thead>
                    <tr>
                    <th class="bg-primary" colspan="3">
                    Tabel Range Bobot Kriteria ` + kriteria +
            `</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Range</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>4.7 > x > 9.0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4.7 =< x <= 5.5</td>
                        <td>( x - 5.5 ) / ( 5.5 - 4.7 )</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>8.2 =< x <= 9.0</td>
                        <td>( 9.0 - x ) / ( 9.0 - 8.2 )</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5.5 < x < 8.2</td>
                        <td>1</td>
                    </tr>
              </tbody>
              </table>`
    })
};

function chart(alternatif, kriteria, bobot) {
    Swal.fire({
        title: '<canvas id="myChart" width="400" height="400"></canvas>',
        // icon: 'info',
        // html: 'Kurva (' + alternatif + ') ' + kriteria,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
    });
    // bobot = 0;
    let label;
    let data;
    if (kriteria == 'Temperatur') {
        label = ['0', '18', '21', '24', '29', '32', '35', ''];

        if (bobot == 1) {
            data = ['0', '0', '0', bobot, bobot, '0', '0', '0'];
        } else if (bobot > 0.25 && bobot < 1) {
            data = ['0', bobot, bobot, bobot, '0', '0', '0', '0'];
        } else if (bobot > 0 && bobot <= 0.25) {
            data = ['0', '0', '0', '0', bobot, bobot, bobot, '0'];
        } else if (bobot == 0) {
            data = ['0', '0', '0', '0', '0', '0', '0', '0'];
        }

    } else if (kriteria == 'Curah Hujan') {
        label = ['0', '100', '125', '175', '500', '650', '750', ''];

        if (bobot == 1) {
            data = ['0', '0', '0', bobot, bobot, '0', '0', '0'];
        } else if (bobot > 0.25 && bobot < 1) {
            data = ['0', bobot, bobot, bobot, '0', '0', '0', '0'];
        } else if (bobot > 0 && bobot <= 0.25) {
            data = ['0', '0', '0', '0', bobot, bobot, bobot, '0'];
        } else if (bobot == 0) {
            data = ['0', '0', '0', '0', '0', '0', '0', '0'];
        }
    } else if (kriteria == 'Kelembaban') {
        label = ['0', '60', '65', '70', '85', '90', '95', ''];

        if (bobot == 1) {
            data = ['0', '0', '0', bobot, bobot, '0', '0', '0'];
        } else if (bobot > 0.25 && bobot < 1) {
            data = ['0', bobot, bobot, bobot, '0', '0', '0', '0'];
        } else if (bobot > 0 && bobot <= 0.25) {
            data = ['0', '0', '0', '0', bobot, bobot, bobot, '0'];
        } else if (bobot == 0) {
            data = ['0', '0', '0', '0', '0', '0', '0', '0'];
        }
    } else if (kriteria == 'Kedalaman Tanah') {
        label = ['0', '10', '13', '15', '20'];

        if (bobot == 1) {
            data = ['0', '0', '0', bobot, bobot];
        } else if (bobot > 0.25 && bobot < 1) {
            data = ['0', '0', bobot, bobot, bobot];
        } else if (bobot > 0 && bobot <= 0.25) {
            data = ['0', '0.25', bobot, bobot, bobot];
        } else if (bobot == 0) {
            data = ['0', '0', '0', '0', '0'];
        }
    } else if (kriteria == 'PH H2O') {
        label = ['0', '4.7', '5.1', '5.5', '8.2', '8.6', '9.0', ''];

        if (bobot == 1) {
            data = ['0', '0', '0', bobot, bobot, '0', '0', '0'];
        } else if (bobot > 0.25 && bobot < 1) {
            data = ['0', bobot, bobot, bobot, '0', '0', '0', '0'];
        } else if (bobot > 0 && bobot <= 0.25) {
            data = ['0', '0', '0', '0', bobot, bobot, bobot, '0'];
        } else if (bobot == 0) {
            data = ['0', '0', '0', '0', '0', '0', '0', '0'];
        }
    }

    const ctx = document.getElementById('myChart').getContext('2d');
    let gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, "rgba(58,123,213,1)");
    gradient.addColorStop(1, "rgba(1,210,225,0.3)");
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: label,
            datasets: [{
                label: 'Kurva ' + alternatif + ' ( ' + kriteria + ' ) = ' + bobot,
                data: data,
                fill: true,
                backgroundColor: gradient,
                borderColor: '#fff',
                pointBackgroundColor: '#315172',
                tension: 0
            }]
        },
        options: {
            radius: 5,
            hitRadius: 30,
            hoverRadius: 12,
            responsive: true,
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true,
                        // steps: 4,




         
               // stepValue: 0.25,
                        max: 1
                    }
                }]
            },
        }
    });
};
</script>