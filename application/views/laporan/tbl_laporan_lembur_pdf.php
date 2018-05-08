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

     <h3 align="center"><u> LAPORAN KERJA LEMBUR</u></h3>
     <br><br><br><br>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
         <td>Nama Pelaksana Lembur</td><td><?php echo $laporanlembur['nama_1'] ?><br><?php echo $laporanlembur['nama_2'] ?></td><br></tr>
         <tr>
        <td>Hari</td><td><?php echo $laporanlembur['hari'] ?></td><br>
        </tr>
        <tr>
<!--                         <td><#?php echo $laporan->tanggal?></td> -->
        <td>Tanggal</td><td><?php echo date('d-m-Y', strtotime($laporanlembur['tanggal']));?></td><br>
        </tr>
        <tr>
        <td>Tempat</td><td><?php echo $laporanlembur['tempat']?></td><br>
        </tr>
        <tr>
        <td>Jam Awal</td><td><?php echo $laporanlembur['jam_awal']?></td><br>
        </tr>
        <tr>
        <td>Jam Akhir</td><td><?php echo $laporanlembur['jam_akhir']?></td><br>
        </tr>
        <tr>
        <td colspan="2" align="center">Uraian Kegiatan Yang Dilakukan</td>
        </tr>
        <tr>
        <td colspan="2"><?php echo $laporanlembur['uraian']?></td><br>
        </tr>
        <div class="row">
      </table>
           <br><br><br><br><br>
        <table style="width:100%" >
          
          <tr>

            <td style="width: 50%" class="text-center" ><br>Pelaksana Tugas<br><br><br><br><br><br><br>
                <?php echo $laporanlembur['nama_1'] ?></td>
            <td style="width: 50%" class="text-center" >Semarang,<?php echo date('d-m-Y', strtotime($laporanlembur['tanggal']));?><br>Pelaksana Tugas<br><br><br><br><br><br><br><?php echo $laporanlembur['nama_2']?></td>
            
          </tr>
        </table>
        </div>
<!-- 		<th>Nama 1</th>
		<th>Nama 2</th>
		<th>Hari</th>
		<th>Tanggal</th>
		<th>Tempat</th>
		<th>Jam Awal</th>
		<th>Jam Akhir</th>
		<th>Uraian</th> -->
		
                <!-- <tr>

                </tr> -->
              

    </body>
</html>