<!doctype html>
<html>
    <head>
        <title>SURAT PERINTAH KERJA LEMBUR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
                <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
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
   
        <h3 align="center"><u> SURAT PERINTAH KERJA LEMBUR</u></h3>
        <p align="center">Nomor: <?php echo $suratlembur['nomor'] ?></p><br><br><br><br>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>

            </tr>

                <tr>
         <td>Tanggal SPL</td><td><?php echo date('d-m-Y', strtotime($suratlembur['tgl_skpl']));?></td>
        <td rowspan="2">Lembur Waktu</td><td rowspan="2"><?php echo $suratlembur['lembur_waktu'] ?></td>
        <tr>
        <td>Seksi</td><td><?php echo $suratlembur['seksi'] ?></td><tr>
        
        <td colspan="4" height="100">Uraian lembur: <br><?php echo $suratlembur['uraian_lembur'] ?></td>
        </table>
        <table  class="word-table" style="margin-bottom: 5px">
        <tr>
           <!--  <th rowspan="2">no</th> -->
            <th rowspan="2">Hari/Tanggal</th>
            <th rowspan="2">Nama Pegawai / NIP</th>
            <th rowspan="2">jabatan</th>
            <th colspan="2">Jam Lembur</th>
        <tr>
            <td>mulai</td>
            <td>berakhir</td>
        <tr>
<!--             <td><#?php echo  ++$start ?></td> -->
            <td><?php echo date('d-m-Y', strtotime($suratlembur['tgl_lembur']));?></td>
            <td><?php echo $suratlembur['nama_pg1'] ?> <?php echo $suratlembur['nip_pg1'] ?> <br>
                <?php echo $suratlembur['nama_pg2']  ?> <?php echo $suratlembur['nip_pg2'] ?><br>
                <?php echo $suratlembur['nama_pg3']  ?> <?php echo $suratlembur['nip_pg3'] ?><br>
                <?php echo $suratlembur['nama_pg4']  ?> <?php echo $suratlembur['nip_pg4'] ?><br>
                <?php echo $suratlembur['nama_pg5']  ?> <?php echo $suratlembur['nip_pg5'] ?>
            </td>

            <td>
                <?php echo $suratlembur['jabatan_pg1'] ?><br>
                <?php echo $suratlembur['jabatan_pg2'] ?><br>
                <?php echo $suratlembur['jabatan_pg3'] ?><br>
                <?php echo $suratlembur['jabatan_pg4'] ?><br>
                <?php echo $suratlembur['jabatan_pg5'] ?>
            </td>
            <td><?php echo $suratlembur['jam_lembur1'] ?></td><td><?php echo $suratlembur['jam_lembur2'] ?></td>
        </tr>
         </tr>
     </tr>
     </table>
<br><br><br><br>
        <div class="row">
        <table style="width:100%" >
          
          <tr>
           <br><br><br><br>
            <td style="width: 50%" class="text-center" >Diajukan oleh<br>Penanggung jawab<br><br><br><br><br><br><br>
                <?php echo $suratlembur['nama_pj'] ?></td>
            <td style="width: 50%" class="text-center" >Mengetahui<br><?php echo $suratlembur['bg_mengetahui'] ?><br><br><br><br><br><br><br><?php echo $suratlembur['nama_mengetahui'] ?></td>
            
            
          </tr>
        </table>
        </div>        
    </body>
</html>

