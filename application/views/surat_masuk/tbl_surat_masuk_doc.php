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
        <h2>Tbl_surat_masuk List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Agenda</th>
		<th>Asal Surat</th>
		<th>Nomor Surat</th>
		<th>Tanggal Surat</th>
		<th>Keterangan</th>
		<th>File Sm</th>
		
            </tr><?php
            foreach ($surat_masuk_data as $surat_masuk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $surat_masuk->no_agenda ?></td>
		      <td><?php echo $surat_masuk->asal_surat ?></td>
		      <td><?php echo $surat_masuk->nomor_surat ?></td>
		      <td><?php echo $surat_masuk->tanggal_surat ?></td>
		      <td><?php echo $surat_masuk->keterangan ?></td>
		      <td><?php echo $surat_masuk->file_sm ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>