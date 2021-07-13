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
                    <?php
                      $certtype = $this->uri->segment(4);
                      if(is_array($info)){
                        foreach ($info as $i) {
                          $rname = $i->residentname;
                          $r_parents = $i->r_parents;
                          $r_parentwork = $i->r_parentwork;
                          $annualsalary = $i->r_parentsalary * 12;
                          $reqby = $i->r_bmfareqby;
                          $str = $i->str;
                        }
                      }
                        $par1 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        $par2 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        $par3 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        $par4 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                      if( $certtype == 'SPES'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> with postal address at ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job and their income derives from  ';
                        $par1 .= '<strong><u> '.$r_parentwork.' </u></strong>';
                        $par1 .= 'has an annual income of less than  ₱';
                        $par1 .= '<strong><u> '.$annualsalary.' </u></strong>';
                        $par1 .= 'which exempts them for filling Income Tax Return with the BIR.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$r_parents.'</u></strong> ';
                        $par2 .= 'parent of  ';
                        $par2 .= '<strong><u>'.$rname.'</u></strong>  ';
                        $par2 .= 'as requirement in <i> Special Program for Employment of Students (SPES) of City Governement of San Fernando,</i> Pampanga.';

                        $par3 .= 'Given this ';
                        $par3.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').' ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'ITR'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job and their income derives from  ';
                        $par1 .= '<strong><u> '.$r_parentwork.' </u></strong>';
                        $par1 .= 'has an annual income of less than  ₱';
                        $par1 .= '<strong><u> '.$annualsalary.' </u></strong>';
                        $par1 .= 'which exempts them for filling Income Tax Return with the BIR.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$r_parents.'</u></strong> ';
                        $par2 .= 'parent of  ';
                        $par2 .= '<strong><u>'.$rname.'</u></strong>  ';
                        $par2 .= 'as requirement for educational assistance.';

                        $par3 .= 'Given this ';
                        $par3.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').' ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'BMFA'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$reqby.'</u></strong> ';
                        $par2 .= 'for burial assistance.';

                        $par3 .= 'Given this ';
                        $par3.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u> ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'CLEARANCE'){
                        $par1 .= 'THIS IS TO CERTIFY that ';
                        $par1 .= $rname.' ';
                        $par1 .= 'a bonafide resident of this Barangay is personally known to me to be a good moral character, peaceful and law-abiding citizen in this country.';

                        $par2 .= 'IT IS FURTHER CERTIFIED that the subject person has no derogatory record or any criminal record in this Barangay as of this date.';

                        $par3 .= 'ISSUED upon the request of the above-named person for whatever legal purpose it may serve him/her.';

                        $par4 .= 'Given this ';
                        $par4.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').', ';
                        $par4 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }

                      if($certtype == 'BMFA' || $certtype == 'ITR' || $certtype == 'SPES'){
                    ?>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <style type="text/css">
                        .tg  {border-collapse:collapse;border-spacing:0;}
                        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:none;border-width:1px;overflow:hidden;word-break:normal;}
                        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:none;border-width:1px;overflow:hidden;word-break:normal;}
                        .tg .tg-s6z2{text-align:center}
                        .header{font-size:20px !important;padding:10px 5px;}
                        .tg .tg-baqh{text-align:center;vertical-align:top}
                        .tg .tg-yw4l{vertical-align:top}
                        .tg .tg-hgcj{font-weight:bold;text-align:center}
                        .justify{text-align: justify;  text-justify: inter-word;  }
                        </style>
                        <table class="tg" style="table-layout: fixed; width: 852px">
                        <colgroup>
                        <col style="width: 80px">
                        <col style="width: 77px">
                        <col style="width: 64px">
                        <col style="width: 61px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 21px">
                        <col style="width: 86px">
                        <col style="width: 73px">
                        <col style="width: 85px">
                        <col style="width: 74px">
                        </colgroup>
                        <tr>
                        <th class="tg-yw4l" colspan="4" rowspan="3"><img src="<?php echo base_url('images/maimpislogo.png') ?>" style="max-height:150px;max-width:150px;"></th>
                        <th class="tg-s6z2" colspan="12"></th>
                        <th class="tg-031e" colspan="4" rowspan="3"><img src="<?php echo base_url('images/csfplogo.png') ?>" style="max-height:200px;max-width:200px;"></th>
                        </tr>
                        <tr>
                        <td class="tg-s6z2" colspan="12">Republic of the Philippines<br>Province of Pampanga<br>City of San Fernando</td>
                        </tr>
                        <tr>
                        <td class="tg-s6z2  header" colspan="12">BARANGAY MAIMPIS</td>
                        </tr>
                        <tr>
                        <td class="tg-s6z2 header" colspan="20">Office of the Punong Barangay</td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20">=====================================================================================================</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        <td class="tg-baqh" colspan="20">CERTIFICATION OF INDIGENT</td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20">TO WHOM IT MAY CONCERN:</td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l justify" colspan="20"><?php echo $par1; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l justify" colspan="20"><?php echo $par2; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l justify" colspan="20"><?php echo $par3; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="16" rowspan="4"></td>
                        <td class="tg-031e" colspan="4"></td>
                        </tr>
                        <tr>
                        <td class="tg-031e" colspan="4"></td>
                        </tr>
                        <tr>
                        <td class="tg-hgcj" colspan="4">Hon. ROMEO S. DIZON</td>
                        </tr>
                        <tr>
                        <td class="tg-s6z2" colspan="4">Punong Barangay</td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20">cc: File</td>
                        </tr>
                        </table>
                  </div>
                <?php }
                  if($certtype == 'CLEARANCE'){ ?>
                  <!-- Brgy Clearance -->
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <style type="text/css">

                      .tg  {border-collapse:collapse;border-spacing:0;}
                      .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                      .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                      .tg .tg-29rf{font-size:12px;font-family:Arial, Helvetica, sans-serif !important;}
                      .tg .tg-ycvv{font-size:14px;font-family:"Times New Roman", Times, serif !important;;vertical-align:top}
                      .tg .tg-h31u{font-family:Arial, Helvetica, sans-serif !important;;vertical-align:top}
                      .tg .tg-hfl5{font-size:14px;font-family:Arial, Helvetica, sans-serif !important;}
                      .tg .tg-lrzf{font-size:14px;font-family:Arial, Helvetica, sans-serif !important;;text-align:center}
                      .tg .tg-7wmk{font-size:14px;font-family:"Times New Roman", Times, serif !important;}
                      .tg .tg-2w0i{font-size:14px;font-family:"Times New Roman", Times, serif !important;;text-align:center}
                      .tg .tg-d6mp{font-weight:bold;font-style:italic;font-size:15px;font-family:"Times New Roman", Times, serif !important;}
                      .tg .tg-yw4l{vertical-align:top}
                      .justify{text-align: justify;  text-justify: inter-word;  }
                      .twidth {max-width: 1000px;}
                      .leftwidth {min-width: 270px;}
                      .rightwidth {min-width: 60px;}
                      .imgmargin {margin-left: 300px};

                      </style>
                      <table class="tg twidth">
                        <tr>
                          <th class="tg-7wmk" colspan="4" rowspan="4"><img src="<?php echo base_url('images/maimpislogo.png') ?>" style="max-height:150px;max-width:150px;"></th>
                          <th class="tg-2w0i" colspan="12">Republic of the Philippines<br>Province of Pampanga<br>City of san Fernando</th>
                          <th class="tg-7wmk" colspan="4" rowspan="4"><img src="<?php echo base_url('images/csfplogo.png') ?>" style="max-height:200px;max-width:200px;"></th>
                        </tr>
                        <tr>
                          <td class="tg-2w0i" colspan="12"></td>
                        </tr>
                        <tr>
                          <td class="tg-2w0i" colspan="12">BARANGAY MAIMPIS</td>
                        </tr>
                        <tr>
                          <td class="tg-2w0i" colspan="12">Office of the Punong Barangay</td>
                        </tr>
                        <tr>
                          <td class="tg-lrzf leftwidth" colspan="5">BARANGAY</td>
                          <td class="tg-7wmk" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-lrzf" colspan="5">COUNCIL</td>
                          <td class="tg-2w0i" colspan="15">BARANGAY CLEARANCE</td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. ROMEO S. DIZON<br>Punong Barangay</td>
                          <td class="tg-7wmk" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Barangay Kagawad:</td>
                          <td class="tg-7wmk" colspan="11" rowspan="3"></td>
                          <td class="tg-7wmk" colspan="3" rowspan="3"><span class="imgmargin"><img src="<?php echo base_url('residentsimages/4.jpg');?>"></span></td>
                          <td class="tg-7wmk" rowspan="3"></td>
                        </tr>
                        <tr>
                          <td class="tg-29rf" colspan="5">Hon. SUSAN L. SERRANO<br>Com. on Health &amp; Gender and Development</td>
                        </tr>
                        <tr>
                          <td class="tg-h31u" colspan="5">Hon. ARNEL J. STA CRUZ</td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. JOSE C. SICAT</td>
                          <td class="tg-7wmk"></td>
                          <td class="tg-d6mp" colspan="13">To whom it may concern,</td>
                          <td class="tg-7wmk rightwidth"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. NESTOR C. MANARANG</td>
                          <td class="tg-7wmk" rowspan="2"></td>
                          <td class="tg-7wmk justify" colspan="13" rowspan="2"><?php echo $par1; ?></td>
                          <td class="tg-7wmk" rowspan="2"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. EDILBERTO G. MENDOZA</td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. ROEL M. DE MESA</td>
                          <td class="tg-7wmk" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">Hon. JAMES S. MANALO</td>
                          <td class="tg-7wmk" rowspan="2"></td>
                          <td class="tg-7wmk justify" colspan="13" rowspan="2"><?php echo $par2; ?></td>
                          <td class="tg-7wmk" rowspan="2"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">JOJO P. LORDAN</td>
                          <td class="tg-7wmk" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">EDGAR R. SERRANO</td>
                          <td class="tg-7wmk" rowspan="2"></td>
                          <td class="tg-7wmk justify" colspan="13" rowspan="2"><?php echo $par3; ?></td>
                          <td class="tg-7wmk" rowspan="2"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">AFRITO V. SALAZAR</td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" colspan="5"></td>
                          <td class="tg-yw4l" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5"></td>
                          <td class="tg-7wmk"></td>
                          <td class="tg-7wmk justify" colspan="13"><?php echo $par4; ?></td>
                          <td class="tg-7wmk"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                          <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                          <td class="tg-hfl5" colspan="5">NOT VALID WITHOUT<br>THE BARANGAY SEAL</td>
                          <td class="tg-7wmk" colspan="9"></td>
                          <td class="tg-2w0i" colspan="5">HON. ROMEO S. DIZON</td>
                          <td class="tg-7wmk"></td>
                        </tr>
                        <tr>
                          <td class="tg-7wmk" colspan="5"></td>
                          <td class="tg-7wmk" colspan="9"></td>
                          <td class="tg-2w0i" colspan="5">Punong Barangay</td>
                          <td class="tg-7wmk"></td>
                        </tr>
                        <tr>
                          <td class="tg-7wmk" colspan="5">CTC No.:</td>
                          <td class="tg-7wmk" colspan="15"></td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="4">Issued on:</td>
                          <td class="tg-ycvv" colspan="16" rowspan="2">"Ang Barangay Maimpis ay isang modelong pamayanan na may maunlad na industriya at sentro ng serbisyo publiko ng Rehiyon."</td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="4">Issued at:</td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="13"></td>
                          <td class="tg-ycvv" colspan="6">Tel No.: (045) 300-26-29</td>
                          <td class="tg-ycvv"></td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="13"></td>
                          <td class="tg-ycvv" colspan="6">09215348671(SMART)</td>
                          <td class="tg-ycvv"></td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="13"></td>
                          <td class="tg-ycvv" colspan="6">09565270339(GLOBE)</td>
                          <td class="tg-ycvv"></td>
                        </tr>
                        <tr>
                          <td class="tg-ycvv" colspan="20"></td>
                        </tr>
                      </table>
                  </div>
                <?php } ?>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
