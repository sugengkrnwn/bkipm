<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_LAPORAN_LEMBUR</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;"'>
        <?php echo anchor(site_url('laporanv2/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
		<?php echo anchor(site_url('laporanv2/pdf'), 'PDF', 'class="btn btn-primary"'); ?></div>
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('laporanv2/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('laporanv2'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            </div>
        
   
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama 1</th>
		<th>Nama 2</th>
		<th>Hari</th>
		<th>Tanggal</th>
		<th>Tempat</th>
		<th>Jam Awal</th>
		<th>Jam Akhir</th>
		<th>Uraian</th>
		<th>Action</th>
            </tr><?php
            foreach ($laporanv2_data as $laporanv2)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $laporanv2->nama_1 ?></td>
			<td><?php echo $laporanv2->nama_2 ?></td>
			<td><?php echo $laporanv2->hari ?></td>
			<td><?php echo $laporanv2->tanggal ?></td>
			<td><?php echo $laporanv2->tempat ?></td>
			<td><?php echo $laporanv2->jam_awal ?></td>
			<td><?php echo $laporanv2->jam_akhir ?></td>
			<td><?php echo $laporanv2->uraian ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('laporanv2/read/'.$laporanv2->id),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('laporanv2/update/'.$laporanv2->id),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('laporanv2/delete/'.$laporanv2->id),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>