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
          <h1 class="m-0">Kriteria</h1>
        </div>
      </div>
      <hr class="divider">
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="table-responsive px-3 py-3">
              <table class="table table-striped" style="font-size:13px;" id="dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kriteria</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($semuaData['dataKriteria'] as $key => $value) : ?>
                    <tr>
                      <td><?= ++$no; ?></td>
                      <td><?= $value; ?></td>
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