<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Blotter<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                <form id="frm_blotter" name="frm_blotter">
                  <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                          <label class="control-label">Incident date<span>*</span></label>
                            <input type="hidden" id="b_id" name="b_id">
                          <input type="text" id="b_incidentdate" name="b_incidentdate" class="form-control fdate input-sm" required>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                          <label class="control-label">Incident time<span>*</span></label>
                          <input type="text" id="b_incidenttime" name="b_incidenttime" class="form-control input-sm time" required>
                      </div>

                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                          <label class="control-label">Incident place<span>*</span></label>
                          <input type="text" id="b_incidentplace" name="b_incidentplace" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                          <label class="control-label">Case No.<span>*</span></label>
                          <input type="text" id="b_caseno" name="b_caseno" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                          <label class="control-label">For:<span>*</span></labsel>
                          <input type="text" id="b_casefor" name="b_casefor" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label">Case Close?<span>*</span></label>
                          <select id="b_casesolve" name="b_casesolve" class="form-control  input-sm" required>
                            <option value="">- Choose -</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                          </select>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                          <label class="control-label"> Classification of case<span>*</span></label>
                          <select id="b_classification" name="b_classification" class="form-control input-sm" required>
                            <option value="">- Choose -</option>
                            <option value="THEFT/QUALIFIED THEFT">THEFT/QUALIFIED THEFT</option>
                            <option value="ORAD DEFAMATION/SLANDER">ORAD DEFAMATION/SLANDER</option>
                            <option value="SERIOUS PHYSICAL INJURY">SERIOUS PHYSICAL INJURY</option>
                            <option value="SMALL CLAIMS">SMALL CLAIMS</option>
                            <option value="RA 9165">RA 9165</option>
                            <option value="RA 7610">RA 7610</option>
                            <option value="VAWC CASES">VAWC CASES</option>
                            <option value="OTHERS">OTHERS</option>
                          </select>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                          <label class="control-label"> Others</label>
                          <input type="text" class="form-control input-sm" id="txt_classiOthers" name="txt_classiOthers" disabled>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Respondent - Age<span>*</span></label>
                          <input type="text" id="b_accused" name="b_accused" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Respondent - Address<span>*</span></label>
                          <input type="text" id="b_accusedaddress" name="b_accusedaddress" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Victim/s - Age<span>*</span></label>
                          <input type="text" id="b_victims" name="b_victims" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Victim/s - Address<span>*</span></label>
                          <input type="text" id="b_victimsaddress" name="b_victimsaddress" class="form-control input-sm" required>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Complainant - Age<span>*</span></label>
                          <div class="input-group">
                            <input type="text" id="b_complainant" name="b_complainant" class="form-control input-sm" required>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary btn-sm" id="btn_saveasvictim"><i class="fa fa-copy"></i> Same as Victim Info</button>
                            </span>
                          </div>
                      </div>
                      <!-- <div class="input-group">
                          <input type="text" class="form-control">
                          <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button>
                                        </span>
                        </div> -->
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label">Complainant Address<span>*</span></label>

                          <div class="input-group">
                              <input type="text" id="b_complainantaddress" name="b_complainantaddress" class="form-control input-sm" required>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary btn-sm" id="btn_saveasvictimaddress"><i class="fa fa-copy"></i> Same as Victim Address</button>
                            </span>
                          </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label class="control-label"> Investigator<span>*</span></label>
                          <input type="text" id="b_detective" name="b_detective" class="form-control input-sm" required>
                      </div>
                  </div>
                  <!-- <div class="row"> -->
                    <div class="form-group col-lg-5 col-md-5 col-sm-12 col-xs-12">
                      <table id="dt_blotter" name="dt_blotter" class="table display table-bordered">
                        <thead>
                          <td style="min-width:270px;">Respondent</td>
                          <td style="min-width:100px;">Incident Date</td>
                          <td>Close?</td>
                          <td style="min-width:200px;">Action</td>
                        </thead>
                      </table>
                    </div>
                  <!-- </div> -->
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-lg-12">Incident Report<span>*</span></label>

                    <!-- <div class="hero-unit" style="margin-top:40px">
                        <textarea class="form-control input-sm wysiwyg" rows="6" id="b_report" name="b_report"></textarea>
                      </div> -->
                     <div id="alerts"></div>
                      <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#b_report">
                      <div class="btn-group">
                       <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li>
                           <a data-edit="fontSize 5">
                             <p style="font-size:17px">Huge</p>
                           </a>
                         </li>
                         <li>
                           <a data-edit="fontSize 3">
                             <p style="font-size:14px">Normal</p>
                           </a>
                         </li>
                         <li>
                           <a data-edit="fontSize 1">
                             <p style="font-size:11px">Small</p>
                           </a>
                         </li>
                       </ul>
                     </div>

                  <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>



                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                 <div id="b_report" class="editor-wrapper"></div>
                   <textarea name="descr" id="descr" style="display:none;"></textarea>
                   <!-- <textarea class="form-control  input-sm" rows="6" id="b_report" name="b_report"></textarea> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <hr>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <button type="submit" class="btn btn-sm btn-success"> <i class="fa fa-save"></i> Save Information</button>
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


  <div class="modal fade" id="mdl_summoninfo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form id="frm_summoninfo" name="frm_summoninfo">
        <div class="modal-header btn-primary">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel"><center>- S U M M O N -</center></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="hidden" id="mb_id" name="mb_id" class="form-control">
            <label class="control-label"> SCHEDULE DATE </label>
            <input typp6ye="text" id="b_scheddate" name="b_scheddate" class="form-control input-sm fdate">
            <label class="control-label"> SCHEDULE TIME </label>
            <input typp6ye="text" id="b_schedtime" name="b_schedtime" class="form-control input-sm time">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="mdlbtn_close" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" id="mdlbtn_savesched" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
        </div>
      </form>
      </div>
    </div>
  </div>
