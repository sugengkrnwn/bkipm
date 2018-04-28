<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SURAT LEMBUR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nomor <?php echo form_error('nomor') ?></td><td><input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor" value="<?php echo $nomor; ?>" /></td></tr>
	    <tr><td width='200'>Nama Penanggung jawab <?php echo form_error('nama_pj') ?></td><td>
			<?php echo datalist_dinamis('nama_pj', 'tbl_pegawai', 'nama', $nama_pj,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pj" id="nama_pj" placeholder="Nama Pj" value="<?php echo $nama_pj; ?>" /> --></td></tr>
	    <tr><td width='200'>Tanggal Skpl <?php echo form_error('tgl_skpl') ?></td><td><input type="date" class="form-control" name="tgl_skpl" id="tgl_skpl" placeholder="Tgl Skpl" value="<?php echo $tgl_skpl; ?>" /></td></tr>
	    <tr><td width='200'>Seksi <?php echo form_error('seksi') ?></td><td><input type="text" class="form-control" name="seksi" id="seksi" placeholder="Seksi" value="<?php echo $seksi; ?>" /></td></tr>
	    <tr><td width='200'>Lembur Waktu <?php echo form_error('lembur_waktu') ?></td>
		<td>
		<?php echo form_dropdown('lembur_waktu',array('Libur Hari besar/Kerja'=>"Libur Hari besar/Kerja",'Libur Sabtu - Minggu'=>"Libur Sabtu - Minggu"),$lembur_waktu,array('class' => 'form-control'));  ?>
		</td>
<!-- 	    	<td><input type="text" class="form-control" name="lembur_waktu" id="lembur_waktu" placeholder="Lembur Waktu" value="<?php echo $lembur_waktu; ?>" /></td> --></tr>
	    <tr><td width='200'>Uraian Lembur <?php echo form_error('uraian_lembur') ?></td>
	    	<td><textarea class="form-control" name="uraian_lembur" id="uraian_lembur" placeholder="Uraian Lembur" value="<?php echo $uraian_lembur; ?>"><?php echo $uraian_lembur; ?></textarea></td></tr>
	    <tr><td width='200'>Taggal Lembur <?php echo form_error('tgl_lembur') ?></td><td><input type="date" class="form-control" name="tgl_lembur" id="tgl_lembur" placeholder="Tgl Lembur" value="<?php echo $tgl_lembur; ?>" /></td></tr>
	    <tr><td width='200'>Nama Pegawai1 <?php echo form_error('nama_pg1') ?></td><td>
			<?php echo datalist_dinamis('nama_pg1', 'tbl_pegawai', 'nama', $nama_pg1,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pg1" id="nama_pg1" placeholder="Nama Pg1" value="<?php echo $nama_pg1; ?>" /></td> --></tr>
	    <tr><td width='200'>Nip Pegawai1 <?php echo form_error('nip_pg1') ?></td><td><input type="text" class="form-control" name="nip_pg1" id="nip_pg1" placeholder="/Nip Pg1" value="<?php echo $nip_pg1; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan Pegawai1 <?php echo form_error('jabatan_pg1') ?></td><td>

	    	<input type="text" class="form-control" name="jabatan_pg1" id="jabatan_pg1" placeholder="Jabatan Pegawai1" value="<?php echo $jabatan_pg1; ?>" /></td></tr>
	    
	    <tr><td width='200'>Nama Pegawai2 <?php echo form_error('nama_pg2') ?></td><td>
		<?php echo datalist_dinamis('nama_pg2', 'tbl_pegawai', 'nama', $nama_pg2,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pg2" id="nama_pg2" placeholder="Nama Pg2" value="<?php echo $nama_pg2; ?>" /> --></td></tr>
	    <tr><td width='200'>Nip Pegawai2 <?php echo form_error('nip_pg2') ?></td><td><input type="text" class="form-control" name="nip_pg2" id="nip_pg2" placeholder="/Nip Pg2" value="<?php echo $nip_pg2; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan Pegawai2 <?php echo form_error('jabatan_pg2') ?></td><td><input type="text" class="form-control" name="jabatan_pg2" id="jabatan_pg2" placeholder="Jabatan Pegawai2" value="<?php echo $jabatan_pg2; ?>" /></td></tr>

	    <tr><td width='200'>Nama Pegawai3 <?php echo form_error('nama_pg3') ?></td><td>
		<?php echo datalist_dinamis('nama_pg3', 'tbl_pegawai', 'nama', $nama_pg3,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pg3" id="nama_pg3" placeholder="Nama Pg3" value="<?php echo $nama_pg3; ?>" /> --></td></tr>
	    <tr><td width='200'>Nip Pegawai3 <?php echo form_error('nip_pg3') ?></td><td><input type="text" class="form-control" name="nip_pg3" id="nip_pg3" placeholder="/Nip Pg3" value="<?php echo $nip_pg3; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan Pegawai3 <?php echo form_error('jabatan_pg3') ?></td><td><input type="text" class="form-control" name="jabatan_pg3" id="jabatan_pg3" placeholder="Jabatan Pegawai3" value="<?php echo $jabatan_pg3; ?>" /></td></tr>

	    <tr><td width='200'>Nama Pegawai4 <?php echo form_error('nama_pg4') ?></td><td>
		<?php echo datalist_dinamis('nama_pg4', 'tbl_pegawai', 'nama', $nama_pg4,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pg4" id="nama_pg4" placeholder="Nama Pg4" value="<?php echo $nama_pg4; ?>" /> --></td></tr>
	    <tr><td width='200'>Nip Pegawai4 <?php echo form_error('nip_pg4') ?></td><td><input type="text" class="form-control" name="nip_pg4" id="nip_pg4" placeholder="/Nip Pg4" value="<?php echo $nip_pg4; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan Pegawai4 <?php echo form_error('jabatan_pg4') ?></td><td><input type="text" class="form-control" name="jabatan_pg4" id="jabatan_pg4" placeholder="Jabatan Pegawai 4" value="<?php echo $jabatan_pg4; ?>" /></td></tr>

	    <tr><td width='200'>Nama Pegawai5 <?php echo form_error('nama_pg5') ?></td><td>
			<?php echo datalist_dinamis('nama_pg5', 'tbl_pegawai', 'nama', $nama_pg5,'DESC') ?>
	    	<!-- <input type="text" class="form-control" name="nama_pg5" id="nama_pg5" placeholder="Nama Pg5" value="<?php echo $nama_pg5; ?>" /> --></td></tr>
	    <tr><td width='200'>Nip Pegawai5 <?php echo form_error('nip_pg5') ?></td><td><input type="text" class="form-control" name="nip_pg5" id="nip_pg5" placeholder="/Nip Pg5" value="<?php echo $nip_pg5; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan Pegawai5 <?php echo form_error('jabatan_pg5') ?></td><td><input type="text" class="form-control" name="jabatan_pg5" id="jabatan_pg5" placeholder="Jabatan Pegawai5" value="<?php echo $jabatan_pg5; ?>" /></td></tr>
	   
	    <tr><td width='200'>Jam Mulai Lembur <?php echo form_error('jam_lembur1') ?></td><td><input type="text" class="form-control" name="jam_lembur1" id="jam_lembur1" placeholder="00.00 WIB" value="<?php echo $jam_lembur1; ?>" /></td></tr>
	   
	    <tr><td width='200'>Jam Selesai Lembur <?php echo form_error('jam_lembur2') ?></td><td><input type="text" class="form-control" name="jam_lembur2" id="jam_lembur2" placeholder="00.00 WIB" value="<?php echo $jam_lembur2; ?>" /></td></tr>
	   
	    <tr><td width='200'>Bagian Mengetahui <?php echo form_error('bg_mengetahui') ?></td><td><input type="text" class="form-control" name="bg_mengetahui" id="bg_mengetahui" placeholder="Bagian Mengetahui" value="<?php echo $bg_mengetahui; ?>" /></td></tr>
	   
	    <tr><td width='200'>Nama Mengetahui <?php echo form_error('nama_mengetahui') ?></td><td><input type="text" class="form-control" name="nama_mengetahui" id="nama_mengetahui" placeholder="Nama Mengetahui" value="<?php echo $nama_mengetahui; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_sl" value="<?php echo $id_sl; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_lembur') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>