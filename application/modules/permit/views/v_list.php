<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Business List<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                <form id="frm_ftr_business" name="frm_ftr_business">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="col-xs-2">
                    <label class="control-label ">Date from</label>
                    <input type="text" class="form-control input-sm fdate" id="ftr_releasedatefrom" name="ftr_releasedatefrom">
                    <!-- <select class="form-control input-sm" id="ftr_releaseyear" name="ftr_releaseyear">
                        <option value="">- - -</option>
                          <?php
                          // $pyless10 = date('Y') - 10;
                          // for($py = date('Y'); $py >= $pyless10; $py--){
                          //   echo "<option value=".$py.">".$py."</option>";
                          //   }
                          ?>
                    </select> -->
                  </div>
                  <div class="col-xs-2">
                    <label class="control-label ">Date to</label>
                    <input type="text" class="form-control input-sm fdate" id="ftr_releasedateto" name="ftr_releasedateto">
                    <!-- <select class="form-control input-sm" id="ftr_releaseyear" name="ftr_releaseyear">
                        <option value="">- - -</option>
                          <?php
                          // $pyless10 = date('Y') - 10;
                          // for($py = date('Y'); $py >= $pyless10; $py--){
                          //   echo "<option value=".$py.">".$py."</option>";
                          //   }
                          ?>
                    </select> -->
                  </div>
                  <div class="col-xs-2">
                    <label class="control-label ">Purok</label>
                    <select id="ftr_purok" name="ftr_purok" class="form-control input-sm" required>
                      <option value="ALL">  - - - </option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                  <div class="col-xs-2">
                    <label class="control-label ">Type of Permit</label>
                    <select class="form-control input-sm" id="ftr_permittypes" name="ftr_permittypes" required>
                        <option value="ALL">- ALL -</option>
                        <option value="NEW">NEW</option>
                        <option value="RENEWAL">RENEWAL</option>
                        <!-- <option value="NOT RENEWED">NOT RENEWED</option> -->
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <div class="actionBar">
                      <button type="button" id="btn_reset" class="buttonFinish btn  btn-default"><i class="fa fa-refresh"></i> Reset</button>
                      <button type="button" id="btn_search" class="buttonNext btn  btn-success"><i class="fa fa-filter"></i> Search</button>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <table id="dt_business" name="dt_business" class="table display table-bordered">
                    <thead>
                      <td style="min-width: 100px !important;">Business</td>
                      <td style="min-width: 100px !important;">Last Transaction</td>
                      <td style="min-width: 100px !important;">Operator</td>
                      <td style="min-width: 100px !important;">Location</td>
                      <td style="min-width: 100px !important;">Activities</td>
                      <td style="min-width: 20px !important;">Act ion</td>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <hr>
                </div>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade bs-example-modal-sm" id="modal_confirm" tabindex="-1" role="dialog" aria-hidden="true">
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
</div> -->
