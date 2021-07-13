<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Resident's Information<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

              <div class="row">
                <form id="frm_resident" name="frm_resident">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">First Name<span>*</span></label>
                        <input type="text" id="r_fname" name="r_fname" class="form-control input-sm" required>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Middle Name</label>
                        <input type="text" id="r_mname" name="r_mname" class="form-control input-sm">
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">M.I.</label>
                        <input type="text" id="r_mi" name="r_mi" class="form-control input-sm">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Last Name<span>*</span></label>
                        <input type="text" id="r_lname" name="r_lname" class="form-control input-sm" required>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Name Ext. <span>&nbsp;</span></label>
                        <input type="text" id="r_next" name="r_next" class="form-control input-sm">
                    </div>
                    <div style="max-height: 50px;" class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Purok #<span>*</span></label>
                        <!-- <input type="text" id="r_purok" name="r_purok" class="form-control" required> -->
                        <select id="r_purok" name="r_purok" class="form-control input-sm" required>
                          <option value="">   - - - </option>
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
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <label class="control-label">Street</label>
                        <input type="text" id="r_street" name="r_street" class="form-control input-sm">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">House #</label>
                        <input type="text" id="r_housenum" name="r_housenum" class="form-control input-sm">
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Gender<span>*</span></label>
                        <select id="r_gender" name="r_gender" class="form-control input-sm" required>
                          <option>- Gender -</option>
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Birth date<span>*</span></label>
                        <input type="text" id="r_bdate" name="r_bdate" class="form-control fdate input-sm" required>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Age<span>*</span></label>
                        <input type="text" id="age" name="age" class="form-control input-sm" readonly>
                    </div>
                    <div  style="max-height: 50px;"  class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <label class="control-label"><small>Relation to the head of house</small></label>
                        <select id="r_reltohousehead" name="r_reltohousehead" class="form-control input-sm">
                          <option>- Choose -</option>
                          <option value="PUNO">PUNO</option>
                          <option value="ASAWA">ASAWA</option>
                          <option value="ANAK">ANAK</option>
                          <option  value="MAGULANG">MAGULANG</option>
                          <option value="APO">APO</option>
                          <option value="KAMAG ANAK">KAMAG ANAK</option>
                          <option value="IBA PA">IBA PA</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label"># of family in the house</label>
                        <input type="text" id="r_numfaminhouse" name="r_numfaminhouse" class="form-control numberonly input-sm" maxlength="1" >
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Civil Status</label>
                        <select id="r_civilstatus" name="r_civilstatus" class="form-control input-sm" >
                          <option>- Civil Status -</option>
                          <option value="SINGLE">SINGLE</option>
                          <option value="MARRIED">MARRIED</option>
                          <option value="WIDOWED">WIDOWED</option>
                          <option value="SEPERATED (ANNULLED)">SEPERATED (ANNULLED)</option>
                          <option value="SEPERATED (DI ANNULLED)">SEPERATED (DI ANNULLED)</option>
                          <option value="LIVE IN">LIVE IN</option>
                        </select>
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Registered Voter</label>
                        <select id="r_registeredvoters" name="r_registeredvoters" class="form-control input-sm" >
                          <option>- Registered?  -</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Place of registered</label>
                        <input type="text" id="r_pleaceregistered" name="r_pleaceregistered" class="form-control input-sm">
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Renting a house</label>
                        <select id="r_rentinghouse" name="r_rentinghouse" class="form-control input-sm" >
                          <option>- Renting?  -</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label">Name of owner</label>
                        <input type="text" id="r_ownerofrentinghouse" name="r_ownerofrentinghouse" class="form-control input-sm">
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Out of School Youth</label>
                        <select id="r_osy" name="r_osy" class="form-control input-sm" >
                          <option>- - -</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Highiest Education</label>
                        <select id="r_highiesteduc" name="r_highiesteduc" class="form-control input-sm" >
                          <option>- Education?  -</option>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Course<span></span></label>
                        <input type="text" id="r_course" name="r_course" class="form-control input-sm">
                    </div>
                    <div  style="max-height: 50px;" class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Employed</label>
                        <select id="r_employed" name="r_employed" class="form-control input-sm" >
                          <option value=''>- Employed? -</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Work<span></span></label>
                        <input type="text" id="r_work" name="r_work" class="form-control input-sm">
                    </div>

                    <div  style="max-height: 50px;" class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Regular in work?<span></span></label>
                        <select id="r_regularinwork" name="r_regularinwork" class="form-control input-sm">
                          <option>- Regular?  -</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Monthly Income<span></span></label>
                        <input type="text" id="r_monthlyincome" name="r_monthlyincome" class="form-control currency input-sm">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <hr>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Save Information</button>
                      </div>
                    </div>
                  </div>
              </form>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /page content -->
