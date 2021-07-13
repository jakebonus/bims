<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Business Information<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

              <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <form id="frm_permit" name="frm_permit">
                      <input type="hidden" id="id" name="id" class="form-control">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label class="control-label">TYPE<span>*</span></label>
                        <select id="permtype" name="permtype" class="form-control" required>
                          <option value="">- Choose -</option>
                          <option value="NEW">New Business</option>
                          <option value="RENEWAL">Renewal of Permit</option>
                        </select>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <label class="control-label">BUSINESS NAME / TRADE NAME<span>*</span></label>
                        <input type="text" id="businessname" name="businessname" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Building<span>*</span></label>
                        <input type="text" id="bldgno" name="bldgno" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Street<span>*</span></label>
                        <input type="text" id="str" name="str" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Purok<span>*</span></label>
                        <!-- <input type="text" id="purok" name="purok" class="form-control" required> -->
                        <select id="purok" name="purok" class="form-control" required>
                          <option value="">  - - - </option>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Propietor / Operator / Manager<span>*</span></label>
                        <input type="text" id="operator" name="operator" class="form-control" required>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <label class="control-label">Full Address<span>*</span></label>
                        <input type="text" id="opaddress" name="opaddress" class="form-control" required>
                    </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                          <h2>Activities<small> </small></h2>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">1.)</label>
                          <input type="text" id="activity1" name="activity1" class="form-control" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">2.)</label>
                          <input type="text" id="activity2" name="activity2" class="form-control" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">3.)</label>
                          <input type="text" id="activity3" name="activity3" class="form-control" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                        <button class="btn btn-success col-lg-3 col-md-3 col-sm-6 col-xs-12" type="submit"><i class="fa fa-save"></i> Save</button>
                      </div>
                      </form>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                      <label class="control-label">&nbsp;</label>
                      <table id="dt_business" name="dt_business" class="table display table-bordered">
                        <thead>
                          <td style="min-width: 100px !important;">Business</td>
                          <td style="min-width: 100px !important;">Last Transaction</td>
                          <td style="min-width: 20px !important;">Act ion</td>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                      <hr>
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
