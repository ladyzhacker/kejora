<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="myModalLabel">Permohonan Keluar Pejabat</h4>
</div>
<div class="modal-body">
	<div class="row">
        <form id="frm-param-timeslip" class="form-horizontal" role="form">
            <div class="col-lg-8 col-lg-offset-2">
                <input id="comRptKakitangan" name="comRptKakitangan" type="hidden" value="<?php echo $this->session->userdata('uid')?>">
                <div class="form-group">
                    <label class="control-label">Jenis Permohonan</label>
                    <select id="comJenis" name="comJenis" class="form-control input-sm">
                        <option value="1">Rasmi</option>
                        <option value="2">Tidak Rasmi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Tarikh</label>
                    <input id="txtTarikh" name="txtTarikh" type="text" class="form-control input-sm" required >
                </div>
                <div class="form-group">
                    <label class="control-label">Masa Keluar</label>
                    <input id="txtFrom" name="txtFrom" type="text" class="form-control input-sm" required >
                </div>
                <div class="form-group">
                    <label class="control-label">Masa Balik</label>
                    <input id="txtTo" name="txtTo" type="text" class="form-control input-sm" required >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Perihal Permohonan</label>
                    <textarea id="txtPerihalPermohonan" name="txtPerihalPermohonan" rows="5" class="form-control" required ></textarea>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    <button id="btn-mohon" type="button" class="btn btn-primary" name="btn-mohon">Mohon</button>
</div>
<?php
	if(isset($js_plugin_xtra)){
		foreach($js_plugin_xtra as $js_plugin_x){
			echo $js_plugin_x;
		}
	}
?>
