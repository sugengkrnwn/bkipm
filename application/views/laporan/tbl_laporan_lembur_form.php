<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_LAPORAN_LEMBUR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama pegawai1 <?php echo form_error('nama_1') ?></td><td>
	    	<?php echo datalist_dinamis('nama_1','tbl_pegawai','nama',$nama_1);  ?>
	    	<!-- <input type="text" class="form-control" name="nama_1" id="nama_1" placeholder="Nama 1" value="<?php echo $nama_1; ?>" /> --></td></tr>
	    <tr><td width='200'>Nama pegawai2 <?php echo form_error('nama_2') ?></td><td>
	    	<?php echo datalist_dinamis('nama_2','tbl_pegawai','nama',$nama_2);  ?>
	    	<!-- <input type="text" class="form-control" name="nama_2" id="nama_2" placeholder="Nama 2" value="<?php echo $nama_2; ?>" /> --></td></tr>
	    <tr><td width='200'>Hari <?php echo form_error('hari') ?></td><td><input type="text" class="form-control" name="hari" id="hari" placeholder="Hari" value="<?php echo $hari; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal <?php echo form_error('tanggal') ?></td><td><input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" /></td></tr>
	    <tr><td width='200'>Tempat <?php echo form_error('tempat') ?></td><td><input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" value="<?php echo $tempat; ?>" /></td></tr>
	    <tr><td width='200'>Jam Awal <?php echo form_error('jam_awal') ?></td><td><input type="text" class="form-control" name="jam_awal" id="jam_awal" placeholder="Jam Awal" value="<?php echo $jam_awal; ?>" /></td></tr>
	    <tr><td width='200'>Jam Akhir <?php echo form_error('jam_akhir') ?></td><td><input type="text" class="form-control" name="jam_akhir" id="jam_akhir" placeholder="Jam Akhir" value="<?php echo $jam_akhir; ?>" /></td></tr>
	    
        <tr><td width='200'>Uraian <?php echo form_error('uraian') ?></td><td> <textarea class="form-control" rows="3" name="uraian" id="uraian" placeholder="Uraian"><?php echo $uraian; ?></textarea></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>