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
    <div class="table-responsive">
        <?php echo ('Tanggal : ' . $date1);
		echo ('<br>');
		echo ('Waktu : ' . $date2);
		echo ('<br>');
		echo ('<br>'); ?>
        <h2 class="text-center mb-5"><b>Hasil Rekomendasi</ b>
        </h2>
        <table class="table table-bordered text-center" id="" width="100%" cellspacing="0">
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
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
				foreach ($semua['dataPerankinganSementara'] as $key => $value) : ?>
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
                    <td><?= $value->lokasi; ?></td>
                </tr>
                <?php
				endforeach; ?>
            </tbody>
        </table>
        <script>
        window.print();
        </script>
</body>

</html>
