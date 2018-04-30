<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_laporan_lembur Read</h2>
        <table class="table">
	    <tr><td>Nama 1</td><td><?php echo $nama_1; ?></td></tr>
	    <tr><td>Nama 2</td><td><?php echo $nama_2; ?></td></tr>
	    <tr><td>Hari</td><td><?php echo $hari; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Tempat</td><td><?php echo $tempat; ?></td></tr>
	    <tr><td>Jam Awal</td><td><?php echo $jam_awal; ?></td></tr>
	    <tr><td>Jam Akhir</td><td><?php echo $jam_akhir; ?></td></tr>
	    <tr><td>Uraian</td><td><?php echo $uraian; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('laporanv2') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>