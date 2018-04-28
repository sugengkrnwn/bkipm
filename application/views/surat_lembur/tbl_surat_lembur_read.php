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
        <h2 style="margin-top:0px">Tbl_surat_lembur Read</h2>
        <table class="table">
	    <tr><td>Nomor</td><td><?php echo $nomor; ?></td></tr>
	    <tr><td>Nama Pj</td><td><?php echo $nama_pj; ?></td></tr>
	    <tr><td>Tgl Skpl</td><td><?php echo $tgl_skpl; ?></td></tr>
	    <tr><td>Seksi</td><td><?php echo $seksi; ?></td></tr>
	    <tr><td>Lembur Waktu</td><td><?php echo $lembur_waktu; ?></td></tr>
	    <tr><td>Uraian Lembur</td><td><?php echo $uraian_lembur; ?></td></tr>
	    <tr><td>Tgl Lembur</td><td><?php echo $tgl_lembur; ?></td></tr>
	    <tr><td>Nama Pg1</td><td><?php echo $nama_pg1; ?></td></tr>
	    <tr><td>Nip Pg1</td><td><?php echo $nip_pg1; ?></td></tr>
	    <tr><td>Jabatan Pg1</td><td><?php echo $jabatan_pg1; ?></td></tr>
	    <tr><td>Nama Pg2</td><td><?php echo $nama_pg2; ?></td></tr>
	    <tr><td>Nip Pg2</td><td><?php echo $nip_pg2; ?></td></tr>
	    <tr><td>Jabatan Pg2</td><td><?php echo $jabatan_pg2; ?></td></tr>
	    <tr><td>Nama Pg3</td><td><?php echo $nama_pg3; ?></td></tr>
	    <tr><td>Nip Pg3</td><td><?php echo $nip_pg3; ?></td></tr>
	    <tr><td>Jabatan Pg3</td><td><?php echo $jabatan_pg3; ?></td></tr>
	    <tr><td>Nama Pg4</td><td><?php echo $nama_pg4; ?></td></tr>
	    <tr><td>Nip Pg4</td><td><?php echo $nip_pg4; ?></td></tr>
	    <tr><td>Jabatan Pg4</td><td><?php echo $jabatan_pg4; ?></td></tr>
	    <tr><td>Nama Pg5</td><td><?php echo $nama_pg5; ?></td></tr>
	    <tr><td>Nip Pg5</td><td><?php echo $nip_pg5; ?></td></tr>
	    <tr><td>Jabatan Pg5</td><td><?php echo $jabatan_pg5; ?></td></tr>
	    <tr><td>Jam Lembur1</td><td><?php echo $jam_lembur1; ?></td></tr>
	    <tr><td>Jam Lembur2</td><td><?php echo $jam_lembur2; ?></td></tr>
	    <tr><td>Bg Mengetahui</td><td><?php echo $bg_mengetahui; ?></td></tr>
	    <tr><td>Nama Mengetahui</td><td><?php echo $nama_mengetahui; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat_lembur') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>