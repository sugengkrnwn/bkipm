<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_SURAT_MASUK</h3>
            </div>
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            
		<table class='table table-bordered'>        

	    <tr>
	    	<td width='200'>Asal Surat <?php echo form_error('asal_surat') ?></td>
	    	<td><input type="text" class="form-control" name="asal_surat" id="asal_surat" placeholder="Asal Surat" value="<?php echo $asal_surat; ?>" /></td>
	    </tr>
	    <tr>
	    	<td width='200'>Nomor Surat <?php echo form_error('nomor_surat') ?></td>
	    	<td><input type="text" class="form-control" name="nomor_surat" id="nomor_surat" placeholder="Nomor Surat" value="<?php echo $nomor_surat; ?>" /></td>
	    </tr>
	    <tr>
	    	<td width='200'>Tanggal Surat <?php echo form_error('tanggal_surat') ?></td>
	    	<td><input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat" placeholder="Tanggal Surat" value="<?php echo $tanggal_surat; ?>" /></td>
	    </tr>
	    <tr>
	    	<td width='200'>Keterangan <?php echo form_error('keterangan') ?></td><td><input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" /></td>
	    </tr>
	    <tr>
	    	<td width='200'>File Sm <?php echo form_error('file_sm') ?></td><td><input type="file" class="form-control" name="file_sm" id="file_sm" placeholder="File Sm" value="<?php echo $file_sm; ?>" /></td>
	    </tr>
	    <tr>
	    	<td></td>
	    	<td><input type="hidden" name="id_sm" value="<?php echo $id_sm; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?> </button> 
	    <a href="<?php echo site_url('surat_masuk') ?>" class="btn btn-info">
	    	<i class="fa fa-sign-out"></i> Kembali</a></td>
		</tr>
	
		</table>
	</form>      
	  </div>
</div>
</div>