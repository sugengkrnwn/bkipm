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
        <h2>Tbl_pegawai List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Jk</th>
		<th>Jab</th>
		<th>Pangkat</th>
		<th>Gologan</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Gol Darah</th>
		<th>Agama</th>
		<th>Status</th>
		<th>Telp</th>
		<th>Alamat</th>
		<th>File Ijazah</th>
		<th>File Kk</th>
		
            </tr><?php
            foreach ($pegawai_data as $pegawai)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pegawai->nama ?></td>
		      <td><?php echo $pegawai->jk ?></td>
		      <td><?php echo $pegawai->jab ?></td>
		      <td><?php echo $pegawai->pangkat ?></td>
		      <td><?php echo $pegawai->gologan ?></td>
		      <td><?php echo $pegawai->tmp_lahir ?></td>
		      <td><?php echo $pegawai->tgl_lahir ?></td>
		      <td><?php echo $pegawai->gol_darah ?></td>
		      <td><?php echo $pegawai->agama ?></td>
		      <td><?php echo $pegawai->status ?></td>
		      <td><?php echo $pegawai->telp ?></td>
		      <td><?php echo $pegawai->alamat ?></td>
		      <td><?php echo $pegawai->file_ijazah ?></td>
		      <td><?php echo $pegawai->file_kk ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>