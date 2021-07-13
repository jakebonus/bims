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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm"> NAME</label>
                      <input id="ftr_name" name="ftr_name" type="text" class="form-control input-sm">
                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm"> -in</label>
                    <select id="ftr_nametype" name="ftr_nametype" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="F" >FIRST NAME</option>
                      <option value="L">LAST NAME</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm"> Gender</label>
                    <select id="ftr_gender" name="ftr_gender" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="M">MALE</option>
                      <option value="F">FEMALE</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm"> Civil Status</label>
                    <select id="ftr_civilstatus" name="ftr_civilstatus" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="SINGLE">SINGLE</option>
                      <option value="MARRIED">MARRIED</option>
                      <option value="WIDOWED">WIDOWED</option>
                      <option value="SEPERATED (ANNULLED)">SEPERATED (ANNULLED)</option>
                      <option value="SEPERATED (DI ANNULLED)">SEPERATED (DI ANNULLED)</option>
                      <option value="LIVE IN">LIVE IN</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm"> Purok</label>
                    <select id="ftr_purok" name="ftr_purok" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">Renting?</label>
                    <select id="ftr_renting" name="ftr_renting" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">Voter</label>
                    <select id="ftr_voter" name="ftr_voter" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">Senior</label>
                    <select id="ftr_senior" name="ftr_senior" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">Education</label>
                    <select id="ftr_highiesteduc" name="ftr_highiesteduc" class="form-control input-sm" required="">
                          <option value="ALL"> - ALL- </option>
                          <option value="DI NAKAPAG ARAL">DI NAKAPAG ARAL</option>
                          <option value="DI PA NAG AARAL">DI PA NAG AARAL</option>
                          <option value="DAYCARE">DAYCARE</option>
                          <option value="PRE-SCHOOL">PRE-SCHOOL</option>
                          <option value="ELEMENTARY">ELEMENTARY</option>
                          <option value="HIGH SCHOOL">HIGH SCHOOL</option>
                          <option value="VOCATIONAL">VOCATIONAL</option>
                          <option value="COLLEGE LEVEL">COLLEGE LEVEL</option>
                          <option value="COLLEGE GRADUATE">COLLEGE GRADUATE</option>
                          <option value="MASTER/DOCTOR">MASTER/DOCTOR</option>
                        </select>
                  </div>

                  <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                    <label class="control-label label-sm">Age <small>(from)</small></label>
                    <input type="text" class="form-control numberonly input-sm" name="ftr_agefrom" id="ftr_agefrom"  maxlength="150">

                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                    <label class="control-label label-sm">Age <small>(to)</small></label>
                    <input type="text" class="form-control numberonly input-sm" name="ftr_ageto" id="ftr_ageto" maxlength="150">

                  </div>
                  <div class="col-lg-1 col-md-4 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">Employed</label>
                    <select id="ftr_employed" name="ftr_employed" class="form-control input-sm" required>
                      <option value="ALL">- ALL -</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12" style="max-height: 50px;">
                    <label class="control-label label-sm">O.S.Y.?</label>
                    <select id="ftr_osy" name="ftr_osy" class="form-control input-sm" required="">
                          <option value="ALL"> - ALL- </option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                    <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <button class="btn btn-primary col-lg-12  input-sm" id="btn_flter_resident"><i class="fa fa-filter"></i> Search</button>
                  </div>
                  <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                    <!-- <hr> -->
                  <!-- </div> -->
                  <div class="col-md-12"><hr></div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                  <input type="hidden" class="form-control" id="r_id" name="r_id" readonly>
                  <input type="text" class="form-control input-sm" id="r_name" name="r_name" readonly>
                  <br/>
                  <div class="hidden" id="results">Your captured image will appear here...</div>
                    <div class="row" style="margin-left: 14px;">
                      <div id="my_camera"></div>
                    </div>
                  <form>
                		<div id="pre_take_buttons">
                        <hr>
                			<button type=button onClick="preview_snapshot()" class=" input-sm btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-camera"></i> Take Snapshot</button>
                		</div>
                		<div id="post_take_buttons" style="display:none">
                      <hr>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="btn-group">
                        <button type="button" onClick="cancel_preview()" class="btn btn-primary"><i class="fa fa-camera"></i> Take Another</button>
                      <button  type="button" onClick="save_photo()" class="btn btn-success"><i class="fa fa-save"></i> Save Photo</button>
                      </div>
                      </div>
                		</div>
                	</form>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <label class="control-label">Certification</label>
                    <select id="certtype" name="certtype" class="form-control input-sm">
                        <option value="">- choose -</option>
                        <option value="SPES">SPES</option>
                        <option value="EDUCASSIST">EDUCATIONAL ASSISTANCE</small></option>
                        <option value="BURIAL">BURIAL</option>
                        <option value="MEDICAL">MEDICAL</option>
                        <option value="FINANCIAL">FINANCIAL ASSISTANCE</option>
                        <option value="ITR"> ITR</option>
                        <option value="PWD">PWD</option>
                        <option value="SP">SOLO PARENT</option>
                        <option value="RESIDENCY">CERTIFICATION OF RESIDENCY</option>
                        <option value="CLEARANCE">BRGY CLEARANCE</option>

                    </select>
                    <br/>
                    <button type="button"
                            class="btn btn-success col-lg-12 col-md-12 col-sm-12 col-xs-12" id="btn_confirmcert" name="btn_confirmcert"><i class="fa fa-print"></i> PRINT</button>
                  </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
      <div id="password"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mdlbtn_close" name="mdlbtn_close" data-dismiss="modal">Close</button>
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
