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

        <h3 align="center"><u>DAFTAR SURAT PERINTAH KERJA LEMBUR</u></h3>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nomor</th>
        <th>Nama Pj</th>
        <th>Tgl Skpl</th>
        <th>Seksi</th>
        <th>Lembur Waktu</th>
        <th>Uraian Lembur</th>
        <th>Tgl Lembur</th>
        <th>Nama Pg1</th>
        <th>Nip Pg1</th>
        <th>Nama Pg2</th>
        <th>Nip Pg2</th>
        <th>Jabatan</th>
        <th>Jam Lembur1</th>
        <th>Jam Lembur2</th>
        <th>Bg Mengetahui</th>
        <th>Nama Mengetahui</th>
        
            </tr><?php
            foreach ($surat_lembur_data as $surat_lembur)
            {
                ?>
                <tr>
              <td><?php echo ++$start ?></td>
              <td><?php echo $surat_lembur->nomor ?></td>
              <td><?php echo $surat_lembur->nama_pj ?></td>
              <td><?php echo $surat_lembur->tgl_skpl ?></td>
              <td><?php echo $surat_lembur->seksi ?></td>
              <td><?php echo $surat_lembur->lembur_waktu ?></td>
              <td><?php echo $surat_lembur->uraian_lembur ?></td>
              <td><?php echo $surat_lembur->tgl_lembur ?></td>
              <td><?php echo $surat_lembur->nama_pg1 ?></td>
              <td><?php echo $surat_lembur->nip_pg1 ?></td>
              <td><?php echo $surat_lembur->nama_pg2 ?></td>
              <td><?php echo $surat_lembur->nip_pg2 ?></td>
              <td><?php echo $surat_lembur->jabatan_pg1 ?></td>
              <td><?php echo $surat_lembur->jam_lembur1 ?></td>
              <td><?php echo $surat_lembur->jam_lembur2 ?></td>
              <td><?php echo $surat_lembur->bg_mengetahui ?></td>
              <td><?php echo $surat_lembur->nama_mengetahui ?></td> 
                </tr>
            <?php }  ?>
        </table>
    </body>
</html>