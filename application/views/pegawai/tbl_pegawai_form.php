<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA PEGAWAI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nip <?php echo form_error('nip') ?></td><td><input type="text" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $nip; ?>" /></td></tr>
	    <tr><td width='200'>Nama <?php echo form_error('nama') ?></td><td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" /></td></tr>
	    <tr><td width='200'>Jenis kelamin <?php echo form_error('jk') ?></td><td>
			<?php echo form_dropdown('jk',array('Laki-Laki'=>"Laki-Laki",'Perempuan'=>"Perempuan"),$jk,array('class' => 'form-control'));  ?>
<!-- 	    	<input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" /> --></td></tr>
	    <tr><td width='200'>Jabatan <?php echo form_error('jab') ?></td><td><input type="text" class="form-control" name="jab" id="jab" placeholder="Jab" value="<?php echo $jab; ?>" /></td></tr>
	    
	    <tr><td width='200'>Pangkat <?php echo form_error('pangkat') ?></td><td><input type="text" class="form-control" name="pangkat" id="pangkat" placeholder="Pangkat" value="<?php echo $pangkat; ?>" /></td></tr>
	    
	    <tr><td width='200'>Golongan <?php echo form_error('golongan') ?></td><td><input type="text" class="form-control" name="golongan" id="golongan" placeholder="Golongan" value="<?php echo $golongan; ?>" /></td></tr>
	    <tr><td width='200'>Tempat Lahir <?php echo form_error('tmp_lahir') ?></td><td><input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tmp Lahir" value="<?php echo $tmp_lahir; ?>" /></td></tr>
	   
	    <tr><td width='200'>Tangal Lahir <?php echo form_error('tgl_lahir') ?></td><td><input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /></td></tr>
	   
	    <tr><td width='200'>Golongan Darah <?php echo form_error('gol_darah') ?></td><td>
			<?php echo form_dropdown('gol_darah',array('A'=>'A','AB'=>'AB','B'=>'B','O'=>'O'),$gol_darah,array('class' => 'form-control'));  ?>
	    	<!-- <input type="text" class="form-control" name="gol_darah" id="gol_darah" placeholder="Gol Darah" value="<?php echo $gol_darah; ?>" /> --></td></tr>
	    <tr><td width='200'>Agama <?php echo form_error('agama') ?></td><td>
			<?php echo form_dropdown('agama',array('Islam'=>'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Hindu'=>'Hindu','Budha'=>'Budha','Kepercayaan'=>'Kepercayaan'),$agama,array('class' => 'form-control'));  ?>
<!-- 	    	<input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" /> --></td></tr>
	   
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td>
			<?php echo form_dropdown('status',array('Aktif'=>"Aktif",'Pensiun'=>"Pensiun"),$status,array('class' => 'form-control'));  ?>
	<!--     	<input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /> --></td></tr>
	    <tr><td width='200'>Telp <?php echo form_error('telp') ?></td><td><input type="text" class="form-control" name="telp" id="telp" placeholder="Telp" value="<?php echo $telp; ?>" /></td></tr>
	   
	    <tr><td width='200'>Alamat <?php echo form_error('alamat') ?></td><td><input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" /></td></tr>
	   
	    <tr><td></td><td><input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('pegawai') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>