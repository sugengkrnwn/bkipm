<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_laporan_lembur List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama 1</th>
		<th>Nama 2</th>
		<th>Hari</th>
		<th>Tanggal</th>
		<th>Tempat</th>
		<th>Jam Awal</th>
		<th>Jam Akhir</th>
		<th>Uraian</th>
		
            </tr><?php
            foreach ($laporanv2_data as $laporanv2)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $laporanv2->nama_1 ?></td>
		      <td><?php echo $laporanv2->nama_2 ?></td>
		      <td><?php echo $laporanv2->hari ?></td>
		      <td><?php echo $laporanv2->tanggal ?></td>
		      <td><?php echo $laporanv2->tempat ?></td>
		      <td><?php echo $laporanv2->jam_awal ?></td>
		      <td><?php echo $laporanv2->jam_akhir ?></td>
		      <td><?php echo $laporanv2->uraian ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>