<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Resident's List<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  <input type="hidden" class="form-control" id="r_id" name="r_id" readonly>
                  <input type="text" class="form-control" id="r_name" name="r_name" readonly>
                  <hr>
                  <div class="hidden" id="results">Your captured image will appear here...</div>
                    <div class="row" style="margin-left: 14px;">
                      <div id="my_camera"></div>
                    </div>
                  <form>
                		<div id="pre_take_buttons">
                        <hr>
                			<button type=button onClick="preview_snapshot()" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-camera"></i> Take Snapshot</button>
                		</div>
                		<div id="post_take_buttons" style="display:none">
                      <hr>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="btn-group">
                        <button type=button onClick="cancel_preview()" class="btn btn-primary"><i class="fa fa-camera"></i> Take Another</button>
                      <button type=button onClick="save_photo()" class="btn btn-success"><i class="fa fa-save"></i> Save Photo</button>
                      </div>
                      </div>
                		</div>
                	</form>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr>
                    <label class="control-label">Certification</label>
                    <select id="certtype" name="certtype" class="form-control">
                        <option value="">- choose -</option>
                        <option value="SPES">SPES <small>(cert. of indigent)</small></option>
                        <option value="BMFA">Burial/Medical/FA <small>(cert. of indigent)</small></option>
                        <option value="ITR"> ITR <small>(cert. of indigent)</small></option>
                        <option value="CLEARANCE">BRGY CLEARANCE <small></small></option>
                    </select>
                    <br/>
                    <button type="button"
                            class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12" id="btn_confirmcert" name="btn_confirmcert"><i class="fa fa-print"></i> PRINT</button>
                  </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <label class="control-label"> Civil Status</label>
                      <select id="ftr_civilstatus" name="ftr_civilstatus" class="form-control" required>
                        <option value="ALL">- ALL -</option>
                        <option value="SINGLE">SINGLE</option>
                        <option value="MARRIED">MARRIED</option>
                        <option value="WIDOWED">WIDOWED</option>
                        <option value="SEPERATED (ANNULLED)">SEPERATED (ANNULLED)</option>
                        <option value="SEPERATED (DI ANNULLED)">SEPERATED (DI ANNULLED)</option>
                        <option value="LIVE IN">LIVE IN</option>
                      </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                      <label class="control-label">Age <small>(from)</small></label>
                      <select id="ftr_agefrom" name="ftr_agefrom" class="form-control" required>
                        <option value="ALL">- ALL -</option>
                        <?php
                        for ($i = 1; $i < 70; $i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                      <label class="control-label">Age <small>(to)</small></label>
                      <select id="ftr_ageto" name="ftr_ageto" class="form-control" required>
                        <option value="ALL">- ALL -</option>
                        <?php
                        for ($i = 1; $i < 70; $i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr>
                  <table id="dt_residents" name="dt_residents" class="cell-border compact hover width-full">
                    <thead>
                      <td>Resident Name</td>
                      <td>Gender</td>
                      <td>Age</td>
                      <td>Purok</td>
                      <td>Street</td>
                      <td>House #</td>
                      <td>Action</td>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /page content -->
  <!-- <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="mdl_" name="mdl_rpt_receipt">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default bt-menu-control-sticky" data-dismiss="modal" id="mdlClose" name="mdlClose">Close</button>
        <button type="button" class="btn btn-primary print" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade bs-example-modal-sm" id="modal_confirm" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form id="mdlfrm_printcert" name="mdlfrm_printcert">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <h4 id="mdl_cert">Text in a modal</h4>
        <input type="hidden" id="mdl_certtype" name="mdl_certtype" class="form-control">
        <input type="hidden" id="mdl_r_id" name="mdl_r_id" class="form-control">
      <div id="mdl_content">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="mdlbtn_printcert" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--------------------------------------------------->


<div class="modal fade bs-example-modal-sm" id="mdl_rinfo" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form id="mdlfrm_printcert" name="mdlfrm_printcert">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <h4 id="mdl_cert">Text in a modal</h4>
        <input type="hidden" id="mdl_certtype" name="mdl_certtype" class="form-control">
        <input type="hidden" id="mdl_r_id" name="mdl_r_id" class="form-control">
      <div id="mdl_content">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mdlbtn_close" data-dismiss="modal">Close</button>
        <button type="button" id="mdlbtn_printcert" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
      </div>
    </form>
    </div>
  </div>
</div>
