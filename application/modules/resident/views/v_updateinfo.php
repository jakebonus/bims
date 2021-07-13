<!-- page content -->
<?php
if(is_array($info)){
  foreach ($info as $i) {

    $id = $i->r_id;
    $r_fname = $i->r_fname;
    $r_mname = $i->r_mname;
    $r_mi = $i->r_mi;
    $r_lname = $i->r_lname;
    $r_next = $i->r_next;
    $r_purok = $i->r_purok;
    $r_street = $i->r_street;
    $r_housenum = $i->r_housenum;
    $r_gender = $i->r_gender;
    $r_bdate = $i->r_bdate;
    $r_osy = $i->r_osy;
    $r_reltohousehead = $i->r_reltohousehead;
    $r_numfaminhouse = $i->r_numfaminhouse;
    $r_civilstatus = $i->r_civilstatus;
    $r_registeredvoters = $i->r_registeredvoters;
    $r_pleaceregistered = $i->r_pleaceregistered;
    $r_rentinghouse = $i->r_rentinghouse;
    $r_ownerofrentinghouse = $i->r_ownerofrentinghouse;
    $r_highiesteduc = $i->r_highiesteduc;
    $r_course = $i->r_course;
    $r_employed = $i->r_employed;
    $r_work = $i->r_work;
    $r_regularinwork = $i->r_regularinwork;
    $r_monthlyincome = $i->r_monthlyincome;
    $r_encodedby = $i->r_encodedby;
    $r_parents = $i->r_parents;
    $r_parentwork = $i->r_parentwork;
    $r_parentsalary = $i->r_parentsalary;
    $r_bmfareqby = $i->r_bmfareqby;
    $ageInYears = $i->ageInYears;
  }
}
?>
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
                <form id="frm_updateinfo" name="frm_updateinfo">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">First Name<span>*</span></label>
                        <input type="hidden" id="r_id" name="r_id" class="form-control" required value="<?php echo $id; ?>">
                        <input type="text" id="r_fname" name="r_fname" class="form-control" required value="<?php echo $r_fname;  ?>">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Middle Name</label>
                        <input type="text" id="r_mname" name="r_mname" class="form-control" value="<?php echo $r_mname; ?>">
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">M.I.</label>
                        <input type="text" id="r_mi" name="r_mi" class="form-control" value="<?php echo $r_mi; ?>">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Last Name<span>*</span></label>
                        <input type="text" id="r_lname" name="r_lname" class="form-control" required value="<?php echo $r_lname; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Name Ext. <span>&nbsp;</span></label>
                        <input type="text" id="r_next" name="r_next" class="form-control" value="<?php echo $r_next; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Purok #<span>*</span></label>
                        <!-- <input type="text" id="r_purok" name="r_purok" class="form-control" required value="<?php echo $r_purok; ?>"> -->
                        <select id="r_purok" name="r_purok" class="form-control" required>
                          <option value="">   - - - </option>
                          <option <?php echo ($r_purok == '1') ? 'selected' : ''; ?> value="1">1</option>
                          <option <?php echo ($r_purok == '2') ? 'selected' : ''; ?> value="2">2</option>
                          <option <?php echo ($r_purok == '3') ? 'selected' : ''; ?> value="3">3</option>
                          <option <?php echo ($r_purok == '4') ? 'selected' : ''; ?> value="4">4</option>
                          <option <?php echo ($r_purok == '5') ? 'selected' : ''; ?> value="5">5</option>
                          <option <?php echo ($r_purok == '6') ? 'selected' : ''; ?> value="6">6</option>
                          <option <?php echo ($r_purok == '7') ? 'selected' : ''; ?> value="7">7</option>
                          <option <?php echo ($r_purok == '8') ? 'selected' : ''; ?> value="8">8</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <label class="control-label">Street</label>
                        <input type="text" id="r_street" name="r_street" class="form-control" value="<?php echo $r_street; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">House #</label>
                        <input type="text" id="r_housenum" name="r_housenum" class="form-control" value="<?php echo $r_housenum; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Gender<span>*</span></label>
                        <select id="r_gender" name="r_gender" class="form-control" required>
                          <option>- Gender -</option>
                          <option <?php echo ($r_gender == 'M') ? 'selected' : ''; ?> value="M">Male</option>
                          <option <?php echo ($r_gender == 'F') ? 'selected' : ''; ?> value="F">Female</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Birth date<span>*</span></label>
                        <input type="text" id="r_bdate" name="r_bdate" class="form-control fdate" required value="<?php echo $r_bdate; ?>">
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Age<span>*</span></label>
                        <input type="text" id="age" name="age" class="form-control" readonly value="<?php echo $ageInYears; ?>">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <label class="control-label"><small>Relation to the head of house</small><span>*</span></label>
                        <select id="r_reltohousehead" name="r_reltohousehead" class="form-control" required>
                          <option>- Choose -</option>
                          <option <?php echo ($r_reltohousehead == 'PUNO') ? 'selected' : ''; ?> value="PUNO">PUNO</option>
                          <option <?php echo ($r_reltohousehead == 'ASAWA') ? 'selected' : ''; ?>  value="ASAWA">ASAWA</option>
                          <option <?php echo ($r_reltohousehead == 'ANAK') ? 'selected' : ''; ?>  value="ANAK">ANAK</option>
                          <option <?php echo ($r_reltohousehead == 'MAGULANG') ? 'selected' : ''; ?>  value="MAGULANG">MAGULANG</option>
                          <option <?php echo ($r_reltohousehead == 'APO') ? 'selected' : ''; ?>  value="APO">APO</option>
                          <option <?php echo ($r_reltohousehead == 'KAMAG ANAK') ? 'selected' : ''; ?>  value="KAMAG ANAK">KAMAG ANAK</option>
                          <option <?php echo ($r_reltohousehead == 'IBA PA') ? 'selected' : ''; ?>  value="IBA PA">IBA PA</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label"># of family in the house<span>*</span></label>
                        <input type="text" id="r_numfaminhouse" name="r_numfaminhouse" class="form-control" required value="<?php echo $r_numfaminhouse; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Civil Status<span>*</span></label>
                        <select id="r_civilstatus" name="r_civilstatus" class="form-control" required>
                          <option>- Civil Status -</option>
                          <option <?php echo ($r_civilstatus == 'SINGLE') ? 'selected' : ''; ?> value="SINGLE">SINGLE</option>
                          <option <?php echo ($r_civilstatus == 'MARRIED') ? 'selected' : ''; ?> value="MARRIED">MARRIED</option>
                          <option <?php echo ($r_civilstatus == 'WIDOWED') ? 'selected' : ''; ?> value="WIDOWED">WIDOWED</option>
                          <option <?php echo ($r_civilstatus == 'SEPERATED (ANNULLED)') ? 'selected' : ''; ?> value="SEPERATED (ANNULLED)">SEPERATED (ANNULLED)</option>
                          <option <?php echo ($r_civilstatus == 'SEPERATED (DI ANNULLED)') ? 'selected' : ''; ?> value="SEPERATED (DI ANNULLED)">SEPERATED (DI ANNULLED)</option>
                          <option <?php echo ($r_civilstatus == 'LIVE IN') ? 'selected' : ''; ?> value="LIVE IN">LIVE IN</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Registered Voter<span>*</span></label>
                        <select id="r_registeredvoters" name="r_registeredvoters" class="form-control" required>
                          <option>- Registered?  -</option>
                          <option <?php echo ($r_registeredvoters == 'YES') ? 'selected' : ''; ?> value="YES">YES</option>
                          <option <?php echo ($r_registeredvoters == 'NO') ? 'selected' : ''; ?> value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Place of registered<span>*</span></label>
                        <input type="text" id="r_pleaceregistered" name="r_pleaceregistered" class="form-control" value="<?php echo $r_pleaceregistered; ?>">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <label class="control-label">Renting a house<span>*</span></label>
                        <select id="r_rentinghouse" name="r_rentinghouse" class="form-control" required>
                          <option>- Renting?  -</option>
                          <option <?php echo ($r_rentinghouse == 'YES') ? 'selected' : ''; ?> value="YES">YES</option>
                          <option <?php echo ($r_rentinghouse == 'NO') ? 'selected' : ''; ?> value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label">Name of owner<span>*</span></label>
                        <input type="text" id="r_ownerofrentinghouse" name="r_ownerofrentinghouse" class="form-control" value="<?php echo $r_ownerofrentinghouse; ?>">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Out of School Youth<span></span></label>
                        <select id="r_osy" name="r_osy" class="form-control">
                          <option>- - -</option>
                          <option <?php echo ($r_osy == 'YES') ? 'selected' : ''; ?> value="YES">YES</option>
                          <option <?php echo ($r_osy == 'NO') ? 'selected' : ''; ?> value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Highiest Education<span>*</span></label>
                        <select id="r_highiesteduc" name="r_highiesteduc" class="form-control" required>
                          <option>- Education?  -</option>
                          <option <?php echo ($r_highiesteduc == 'DI NAKAPAG ARAL') ? 'selected' : ''; ?> value="DI NAKAPAG ARAL">DI NAKAPAG ARAL</option>
                          <option <?php echo ($r_highiesteduc == 'DI PA NAG AARAL') ? 'selected' : ''; ?> value="DI PA NAG AARAL">DI PA NAG AARAL</option>
                          <option <?php echo ($r_highiesteduc == 'DAYCARE') ? 'selected' : ''; ?> value="DAYCARE">DAYCARE</option>
                          <option <?php echo ($r_highiesteduc == 'PRE-SCHOOL') ? 'selected' : ''; ?> value="PRE-SCHOOL">PRE-SCHOOL</option>
                          <option <?php echo ($r_highiesteduc == 'ELEMENTARY') ? 'selected' : ''; ?> value="ELEMENTARY">ELEMENTARY</option>
                          <option <?php echo ($r_highiesteduc == 'HIGH SCHOOL') ? 'selected' : ''; ?> value="HIGH SCHOOL">HIGH SCHOOL</option>
                          <option <?php echo ($r_highiesteduc == 'VOCATIONAL') ? 'selected' : ''; ?> value="VOCATIONAL">VOCATIONAL</option>
                          <option <?php echo ($r_highiesteduc == 'COLLEGE LEVEL') ? 'selected' : ''; ?> value="COLLEGE LEVEL">COLLEGE LEVEL</option>
                          <option <?php echo ($r_highiesteduc == 'COLLEGE GRADUATE') ? 'selected' : ''; ?> value="COLLEGE GRADUATE">COLLEGE GRADUATE</option>
                          <option <?php echo ($r_highiesteduc == 'MASTER/DOCTOR') ? 'selected' : ''; ?> value="MASTER/DOCTOR">MASTER/DOCTOR</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Course<span>*</span></label>
                        <input type="text" id="r_course" name="r_course" class="form-control" value="<?php echo $r_course; ?>">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Employed<span>*</span></label>
                        <select id="r_employed" name="r_employed" class="form-control" required>
                          <option value=''>- Employed? -</option>
                          <option <?php echo ($r_employed == 'YES') ? 'selected' : ''; ?> value="YES">YES</option>
                          <option <?php echo ($r_employed == 'NO') ? 'selected' : ''; ?> value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Work<span>*</span></label>
                        <input type="text" id="r_work" name="r_work" class="form-control" value="<?php echo $r_work; ?>">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Regular in work?<span>*</span></label>
                        <select id="r_regularinwork" name="r_regularinwork" class="form-control">
                          <option>- Regular?  -</option>
                          <option <?php echo ($r_regularinwork == 'YES') ? 'selected' : ''; ?> value="YES">YES</option>
                          <option <?php echo ($r_regularinwork == 'NO') ? 'selected' : ''; ?> value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <label class="control-label">Monthly Income<span>*</span></label>
                        <input type="text" id="r_monthlyincome" name="r_monthlyincome" class="form-control currency" value="<?php echo $r_monthlyincome; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <hr>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Update Information</button>
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
