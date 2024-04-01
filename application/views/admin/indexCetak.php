<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi Lokasi Lahan Padi Sawah</title>
</head>


<body>
    <?php date_default_timezone_set('Asia/Jakarta');
	// echo (date("d-M-Y"));
	$date1 = date("d-M-Y");
	date_default_timezone_set('Asia/Jakarta');
	// echo (date("H:i:s"));
	$date2 = date("H:i:s");
	// $save_date = $this->input->post('save_date');
	$date2 = explode(":", date("H:i:s"));
	$date2[0]++;
	$date2 = implode(":", $date2);
	?>

    <?php
	if ($id_lokasi != null) {
		$dataLokasi = $lokasiById;
	}

	foreach ($dataLokasi as $key => $value) : ?>

    <h2 class="text-center mt-5"><b>Hasil Rekomendasi di <?= $value->nama ?></b></h2>
    <?php echo ('Tanggal : ' . $date1);
		echo ('<br>');
		echo ('Waktu : ' . $date2);
		echo ('<br>');
		echo ('<br>'); ?>
    <div class="table-responsive">
        <table class="table table-bordered text-center" id="" width="100%" cellspacing="0">
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
                <?php
					if ($id_lokasi != null) {
						$semua['dataPerankinganSementara'] = $dataPerankinganSementaraById;
					}
					$no = 0;
					foreach ($semua['dataPerankinganSementara'] as $key2 => $value2) : ?>
                <?php if ($value2->id_lokasi == $value->id) : ?>
                <tr>
                    <td><?= ++$no; ?></td>
                    <td><?= $value2->nama; ?></td>
                    <td><?= $value2->C1N; ?></td>
                    <td><?= $value2->C2N; ?></td>
                    <td><?= $value2->C3N; ?></td>
                    <td><?= $value2->C4N; ?></td>
                    <td><?= $value2->C5N; ?></td>
                    <td><?= $value2->C6N; ?></td>
                    <td><?= $value2->C7N; ?></td>
                    <td><?= $value2->ranking; ?></td>
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
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
        <?php if (count($lokasi_null) > 0 && $id_lokasi == null) : ?>
        <h2 class="text-center mt-5"><b>Alternatif yang belum ditentukan lokasi</ b>
        </h2>
        <?php echo ('Tanggal : ' . $date1);
			echo ('<br>');
			echo ('Waktu : ' . $date2);
			echo ('<br>');
			echo ('<br>'); ?>
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="" width="100%" cellspacing="0">
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
                    <?php
						$no = 0;
						foreach ($lokasi_null as $key2 => $value2) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $value2->nama; ?></td>
                        <td><?= $value2->C1N; ?></td>
                        <td><?= $value2->C2N; ?></td>
                        <td><?= $value2->C3N; ?></td>
                        <td><?= $value2->C4N; ?></td>
                        <td><?= $value2->C5N; ?></td>
                        <td><?= $value2->C6N; ?></td>
                        <td><?= $value2->C7N; ?></td>
                        <td><?= $value2->ranking; ?></td>
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
            <?php endif; ?>

            <script>
            window.print();
            </script>
</body>

</html>
