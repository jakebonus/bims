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
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" onclick="printDiv(printthis)"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>

              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                      $certtype = $this->uri->segment(4);
                      $id = $this->uri->segment(3);
                      if(is_array($info)){
                        foreach ($info as $i) {

                          $rname = $i->residentname;
                          $r_parents = $i->r_parents;
                          $r_parentwork = $i->r_parentwork;
                          $annualsalary = $i->r_parentsalary * 12;
                          $spannual = $i->r_monthlyincome * 12;
                          $reqby = $i->r_bmfareqby;
                          $str = $i->str;
                          $r_disability = $i->r_disability;
                          $r_work = $i->r_work;
                          $r_dependents = $i->r_dependents;
                          $reside_since = $i->reside_since;
                          $r_deathdate = $i->r_deathdate;
                        }
                      }
                      ?>
                      <div class="row">
                        <form id="frm_printeddetails" name="frm_printeddetails">
                          <input type="hidden" name="r_parents" id="r_parents" value="<?php echo $r_parents; ?>">
                          <input type="hidden" name="r_parentwork" id="r_parentwork" value="<?php echo $r_parentwork; ?>">
                          <input type="hidden" name="annualsalary" id="annualsalary" value="<?php echo $annualsalary; ?>">
                          <input type="hidden" name="reqby" id="reqby" value="<?php echo $reqby; ?>">
                          <input type="hidden" name="str" id="str" value="<?php echo $str; ?>">

                          <input type="hidden" name="type" id="type" value="<?php echo $this->uri->segment(4); ?>">
                          <input type="hidden" name="ref_if" id="ref_if" value="<?php echo $this->uri->segment(3); ?>">
                        </form>
                      </div>
                      <?php
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
                        $par1 .= 'which exempts them for filing Income Tax Return with the BIR.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$r_parents.'</u></strong> ';
                        $par2 .= 'parent of  ';
                        $par2 .= '<strong><u>'.$rname.'</u></strong>  ';
                        $par2 .= 'as requirement in <i> Special Program for Employment of Students (SPES) of City Governement of San Fernando,</i> Pampanga.';

                        $par3 .= 'Given this ';
                        $par3.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').' ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'EDUCASSIST'){
                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$r_parents.'</u></strong> with postal address at ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job and their income derives from  ';
                        $par1 .= '<strong><u> '.$r_parentwork.' </u></strong>';
                        $par1 .= 'has an annual income of less than  ₱';
                        $par1 .= '<strong><u> '.$annualsalary.' </u></strong>';
                        $par1 .= 'which exempts them for filing Income Tax Return with the BIR.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$r_parents.'</u></strong> ';
                        $par2 .= 'parent of  ';
                        $par2 .= '<strong><u>'.$rname.'</u></strong>  ';
                        $par2 .= 'as requirement for <i> Educational Assistance </i>';

                        $par3 .= 'Given this ';
                        $par3.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').' ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'ITR'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$r_parents.'</u></strong> ';
                        /** $par2 .= 'parent of  ';
                        $par2 .= '<strong><u>'.$rname.'</u></strong>  '; **/
                        $par2 .= 'for whatever legal purpose it may serve.';

                        $par3 .= 'Given this ';
                        $par3.=  date('j').'<sup>'.date('S').'</sup> day of '.date('F Y').' ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'BURIAL'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga, died last <u>'.$r_deathdate.'.</u>';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$reqby.'</u></strong> ';
                        $par2 .= 'for burial assistance.';

                        $par3 .= 'Given this ';
                        $par3.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u> ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';

                      }else if( $certtype == 'MEDICAL'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$reqby.'</u></strong> ';
                        $par2 .= 'for medical assistance.';

                        $par3 .= 'Given this ';
                        $par3.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u> ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';

                      }else if( $certtype == 'FINANCIAL'){

                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u></strong> of ';
                        $par1 .= $str.', Barangay Maimpis, City of San Fernando, Pampanga belongs to an indigent family and have no permanent job.';

                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .=   '<strong><u>'.$reqby.'</u></strong> ';
                        $par2 .= 'for financial assistance.';

                        $par3 .= 'Given this ';
                        $par3.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u> ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';

                      }else if( $certtype == 'PWD'){
                        $par1 .= 'This is to certify that ';
                        $par1 .= '<u>'.$rname.'</u> ';
                        $par1 .= 'is a bonafide resident of this Barangay with postal address of ';
                        $par1 .= '<u>'.$str.' Barangay Maimpis, City of San Fernando</u> belongs to indigent family and have no permanent job.';
                        $par2 .= 'It is further certified that <strong><u>'.$rname.'</u></strong> is a person with ';
                        $par2 .= '<strong><u>'.$r_disability.'</u></strong>.';

                        $par3 .= 'This certification is being issued upon the request of ';
                        $par3 .= '<u>'.$rname.'</u> ';
                        $par3 .= 'for whatever legal purpose it may serve.';
                        $par4 .= 'Issued this ';
                        $par4.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u>, ';
                        $par4 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'SP'){
                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong><u>'.$rname.'</u> </strong>';
                        $par1 .= 'of <u>'.$str.' Barangay Maimpis, City of San Fernando</u> ';
                        $par1 .= 'belongs to indigent family and have no permanent job and his/her income derives from being a/an';
                        $par1 .= '<u>'.$r_work.'</u> and has estimate annual income of less than ';
                        $par1 .= '<strong><u>'.$spannual.'</u></strong> which exempts them from filing Income Tax Return In BIR (Bureau of Internal Revenue).';
                        $par2 .= 'This certification is being issued upon the request of ';
                        $par2 .= '<u>'.$rname.'</u>';
                        $par2 .= ' SOLO PARENT of ';
                        $par2 .= '<u>'.$r_dependents.'</u>';
                        $par2 .= ' for whatever legal purpose it may serve.';

                        $par3 .= 'Given this ';
                        $par3.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u>, ';
                        $par3 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'RESIDENCY'){
                        $par1 .= 'This is to certify that ';
                        $par1 .= '<strong>'.$rname.'</strong> a resident of this barangay with postal address at ';
                        $par1 .= 'of <strong>'.$str.' Barangay Maimpis, City of San Fernando</strong> ';

                        $par2 .= 'It is further certified that the said person already resides on this barangay since ';
                        $par2 .= '<strong>'.$reside_since.'</strong> to the present date.';
                        $par3 .= 'This certification is being issued upon the request of ';
                        $par3 .= '<strong>'.$rname.'</strong>';
                        $par3 .= ' for whatever legal purpose it may serve.';

                        $par4 .= 'Given this ';
                        $par4.=  '<strong>'.date('j').'</strong><sup>'.date('S').'</sup> day of <strong>'.date('F Y').'</strong>, ';
                        $par4 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }else if( $certtype == 'CLEARANCE'){
                        $par1 .= 'THIS IS TO CERTIFY that ';
                        $par1 .= '<strong>'.$rname.'</strong> ';
                        $par1 .= 'a bonafide resident of this Barangay is personally known to me to be a good moral character, peaceful and law-abiding citizen in this country.';

                        $par2 .= 'IT IS FURTHER CERTIFIED that the subject person has no derogatory record or any criminal record in this Barangay as of this date.';

                        $par3 .= 'ISSUED upon the request of the above-named person for whatever legal purpose it may serve him/her.';

                        $par4 .= 'Given this ';
                        $par4.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u>, ';
                        $par4 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }

                      if($certtype == 'RESIDENCY' || $certtype == 'SP' || $certtype == 'PWD' || $certtype == 'BURIAL' || $certtype == 'ITR' || $certtype == 'SPES'  || $certtype == 'EDUCASSIST'  || $certtype == 'MEDICAL'  || $certtype == 'FINANCIAL'){
                    ?>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-width: 800px;" id="printthis">
                      <style type="text/css">

                      #table {
                       max-width:500px !important;
                       width: 100% !important;
                       border: 0 !important;
                       border-spacing: 0 !important;
                       border-collapse: collapse !important;
                       font-size: 12px !important;
                       font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif !important;
                       color: #1d1d1d !important;
                       margin: 0 auto !important;
                       position: relative !important;
                      }

                      #table td {
                       border: 1px none black !important;
                       padding: 0 !important;
                       margin: 0 !important;
                       line-height: 1.6 !important;
                       font-size: 14px !important;
                       position: relative !important;
                      }

                      #table.table-wborder td {
                       border: 0 !important;
                       padding: 5px 5px !important;
                      }

                      #table tr th, #table tr td {
                       padding: 5px !important;
                      }

                      #table b, strong {
                       font-weight: 700 !important;
                      }

                      #table td span {
                       line-height: 1 !important;
                      }

                      .leftlogo{
                        height: 120px !important;
                        width: 120px !important;
                        position: absolute !important;
                        left: -80px !important;
                        margin-left: 50px !important;
                        margin-top: 8px !important;
                          position: absolute !important;
                      }
                      .roghtlogo{
                        height: 120px !important;
                        width: 120px !important;
                        position: absolute !important;
                        right: -80px !important;
                        margin-right: 50px !important;
                        margin-top: 8px !important;
                        position: absolute !important;
                      }
                      .title{
                        text-align: center !important;
                         font-family: Constantia !important;
                         font-size: 16px !important;
                         font-style: italic !important;
                         font-weight: 650 !important;
                      }

                      .ph{
                        font-family: times new roman !important;
                        font-size: 13px !important;
                      }

                      #table .brgyname {
                        font-family: "Cambria (Headings)" !important;
                        font-weight: bold !important;
                        font-size: 20px !important;
                        color: #0808c2 !important;
                      }

                      #table .office {
                        font-family: Arial Black;
                        font-weight: bold;
                        color: #d50101 !important;
                        font-size: 18px;
                      }

                      .clearancebody{
                        line-height: 30px !important;
                        margin-right: 14px !important;
                        text-align: justify !important;
                      }
                      .gulis{
                        position: relative !important;
                      }
                      .gulis:after {
                      content: '' !important;
                      height: 1px !important;
                      width: 100% !important;
                      top: 5px !important;
                      background-color: #0c2dff !important;
                      display: block !important;
                      position: absolute !important;
                      }
                      .gulis:before {
                      content: '' !important;
                      height: 1px !important;
                      width: 100% !important;
                      top: 0 !important;
                      background-color: #0c2dff !important;
                      display: block !important;
                      position: absolute !important;
                      }
                      div.signature h6{
                          text-align: right !important;
                          margin-right: 39px !important;
                          font-size: 14px !important;
                          font-family: Arial Black !important;
                          font-weight: bold !important;
                          text-decoration: underline !important;
                          color: black !important;
                      }

                        .tg  {border-collapse:collapse;border-spacing:0;}
                        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:none;border-width:1px;overflow:hidden;word-break:normal;}
                        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:none;border-width:1px;overflow:hidden;word-break:normal;}
                        .tg .tg-s6z2{text-align:center}
                        .header{font-size:20px !important;padding:10px 5px;}
                        .tg .tg-baqh{text-align:center;vertical-align:top}
                        .tg .tg-yw4l{vertical-align:top}
                        .tg .tg-hgcj{font-weight:bold;text-align:center}
                        .justify{text-align: justify;  text-justify: inter-word;  }
                        
                        .bg1-left-blue {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(top, #f0f9ff 0%, #375ce5 0%, #ffffff 100%)!important;
  background: -webkit-linear-gradient(top, #f0f9ff 0%,#375ce5 0%,#ffffff 100%)!important;
  background: linear-gradient(to bottom, #f0f9ff 0%,#375ce5 0%,#ffffff 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#ffffff',GradientType=0 )!important;
  width: 40px;
  height: 1060px;
  position: absolute;
  top: 0;
  left: 31px;
}
.bg1-left-green {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(top, #f0f9ff 0%, #1c7063 0%, #ffffff 100%)!important;
  background: -webkit-linear-gradient(top, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  background: linear-gradient(to bottom, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#ffffff',GradientType=0 )!important;
  width: 10px;
  height: 872px;
  position: absolute;
  top: 187px;
  left: 52px;
}

.bg1-left-green1 {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(top, #f0f9ff 0%, #1c7063 0%, #ffffff 100%)!important;
  background: -webkit-linear-gradient(top, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  background: linear-gradient(to bottom, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#ffffff',GradientType=0 )!important;
  width: 5px;
  height: 1060px;
  position: absolute;
  top: 0;
  left: 73px;
}

.bg1-top-blue {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(left, #f0f9ff 0%, #375ce5 0%, #ffffff 100%)!important;
  background: -webkit-linear-gradient(left, #f0f9ff 0%,#375ce5 0%,#ffffff 100%)!important;
  background: linear-gradient(to right, #f0f9ff 0%,#375ce5 0%,#ffffff 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#ffffff',GradientType=1 )!important;
  width: 620px;
  height: 20px;
  position: absolute;
  top: 144px;
  left: 69px;
}

.bg1-top-green {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(left, #f0f9ff 0%, #1c7063 0%, #ffffff 100%)!important;
  background: -webkit-linear-gradient(left, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  background: linear-gradient(to right, #f0f9ff 0%,#1c7063 0%,#ffffff 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#ffffff',GradientType=1 )!important;
  width: 645px;
  height: 8px;
  position: absolute;
  top: 164px;
  left: 43px;
  z-index: 1;
}

.bg1-bottom-blue {
background: #f0f9ff!important;
background: -moz-linear-gradient(left, #f0f9ff 0%, #ffffff 0%, #375ce5 100%)!important;
background: -webkit-linear-gradient(left, #f0f9ff 0%,#ffffff 0%,#375ce5 100%)!important;
background: linear-gradient(to right, #f0f9ff 0%,#ffffff 0%,#375ce5 100%)!important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#375ce5',GradientType=1 )!important;
width: 620px;
height: 20px;
position: absolute;
bottom: 8px;
left: 69px;
z-index: 1;
}

.bg1-bottom-green {
  background: #f0f9ff!important;
  background: -moz-linear-gradient(left, #f0f9ff 0%, #ffffff 0%, #1c7063 100%)!important;
  background: -webkit-linear-gradient(left, #f0f9ff 0%,#ffffff 0%,#1c7063 100%)!important;
  background: linear-gradient(to right, #f0f9ff 0%,#ffffff 0%,#1c7063 100%)!important;
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#1c7063',GradientType=1 )!important;
  width: 620px;
  height: 8px;
  position: absolute;
  bottom: 0;
  left: 69px;
  z-index: 1;
}

.telno {
  text-align: right;
  color: #fff !important;
  padding-right: 10px;
}
                        </style>
                        <!-- <table class="tg" id="table"> -->
                        <div class="bg1-top-blue"></div>
<div class="bg1-top-green"></div>

<div class="bg1-left-blue"></div>
<div class="bg1-left-green"></div>
<div class="bg1-left-green1"></div>

<div class="bg1-bottom-blue telno">Tel No.: (045) 300-2629</div>
<div class="bg1-bottom-green"></div>
                        <table id="table">
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
                        <tr >
                        <td colspan="20">
                            <img  class="leftlogo" src="<?php echo base_url('images/maimpislogo.png') ?>">
                              <img  class="roghtlogo" src="<?php echo base_url('images/csfplogo.png') ?>">
                              <center>
                                  <div class="ph">Republic of the Philippines<br>
                                    Province of Pampanga<br>
                                    City of San Fernando<br></div>
                                    <p class="brgyname">BARANGAY MAIMPIS<br></p>
                                    <p class="office">Office of the Punong Barangay</p>
                                  </center>
                          </td>
                        </tr>

                        <tr>
                        <td class="tg-yw4l" colspan="20">
                            <!--<div class="gulis"></div>-->
                            <br/><br/>
                            <br/><br/>
                            <br/><br/>
                        </td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>
                          <?php
                            if($certtype == 'PWD' || $certtype == 'SP' || $certtype == 'BURIAL'){ ?>
                            <td class="title" colspan="20">CERTIFICATION</td>
                          <?php    }else if($certtype == 'RESIDENCY'){ ?>
                                <td class="title" colspan="20">CERTIFICATION OF RESIDENCY </td>


                        <?php    }else{ ?>
                              <td class="title" colspan="20">CERTIFICATION OF INDIGENT</td>
                        <?php } ?>

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
                        <!-- <td class="tg-yw4l justify" colspan="20"><?php echo $par1; ?></td> -->
                        <td class="clearancebody" colspan="20"><?php echo $par1; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <!-- <td class="tg-yw4l justify" colspan="20"><?php echo $par2; ?></td> -->
                        <td class="clearancebody" colspan="20"><?php echo $par2; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20"></td>
                        </tr>
                        <tr>
                        <!-- <td class="tg-yw4l justify" colspan="20"><?php echo $par3; ?></td> -->
                        <td class="clearancebody" colspan="20"><?php echo $par3; ?></td>
                        </tr>
                         <tr>
                        <td class="clearancebody" colspan="20"><?php echo $par4; ?></td>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" colspan="20">
                          <br/>
                          <br/>
                          <br/>
                                  <div class="signature">
                                    <img style="    height: 50px !important;
                                        width: 225px !important;
                                        z-index: 999 !important;
                                        position: absolute !important;
                                        opacity: 999;
                                        margin-top: -33px;
                                        margin-left: -123px;"
                                    src="<?php echo base_url('images/kapsig.png'); ?>" >
                                    <h6>HON. SUSAN L. SERRANO</h6>
                                    <p>Punong Barangay</p>
                                  </div>
                        </td>
                        </tr>

                      
                        <tr>
                        <td class="tg-yw4l" colspan="20">cc: File</td>
                        </tr>
                        </table>
                  </div>
                <?php }
                  if($certtype == 'CLEARANCE'){ ?>
                  <!-- Brgy Clearance -->
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="printthis">
                    <style>

                    #table {
 max-width:750px !important;
 width: 100% !important;
 border: 0 !important;
 border-spacing: 0 !important;
 border-collapse: collapse !important;
 font-size: 12px !important;
 font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif !important;
 color: #1d1d1d !important;
}

#table td {
 border: 1px none black !important;
 padding: 0 !important;
 margin: 0 !important;
 line-height: 1 !important;
 font-size: 10px !important;
 position: relative !important;
}

#table.table-wborder td {
 border: 0 !important;
 padding: 3px 3px !important;
}

#table b, strong {
 font-weight: 700 !important;
}

#table td span {
 line-height: 1 !important;
}
.residentimg{
    height: 150px !important;
    width: 150px !important;
    position: absolute !important;
    /* right: 0 !important; */
    margin-right: 10px !important;
}
#table .brgyname {
  font-family: "Cambria (Headings)" !important;
  font-weight: bold !important;
  font-size: 20px !important;
  color: #0808c2 !important;
}

#table .office {
  font-family: Arial Black !important;
  font-weight: bold !important;
  color: #d50101 !important;
  font-size: 18px !important;}
#table tbody tr td center div{
  display: block !important;
}
table tbody tr td h4.certtitle {
  font-family: Constantia !important;
    font-size: 22px !important;
    text-align: center !important;
    color:black !important;
}

.hon{
    margin-top: 93px !important;
    margin-bottom: 1px !important;
    font-size: 16px !important;
    font-family: Bookman Old Style !important;
    font-weight: bold !important;
    color: #169c16 !important;
    display: block !important;
}
#table h4{

    display: block !important;
    width: 235px !important;
    text-align: center !important;
    margin-top: 25px !important;
    margin-left: -32px !important;
    margin-bottom: 1px !important;
    color: #169c16 !important;
    font-weight: bold !important;
    font-family: "Arial" !important;
}
#table h4 p{
  text-align: center !important;
}

.leftpunongbrgy{
  font-size: 13px !important;
      font-weight: bold !important;
      color: #0808c2 !important;
      margin: 0px 0 -9px !important;
      margin-top: 2px !important;
      margin-right: 0px !important;
      /* margin-bottom: -50px !important; */
      display: block !important;
      text-align: center !important;
      width: 223px !important;
      margin-left: -19px !important;
}
.brgykagawads{
      margin-bottom: 20px !important;
      font-size: 13px !important;
      font-weight: bold !important;
      color: #0808c2 !important;
      margin-top: 50px !important;
      margin-right: 0px !important;
      display: block !important;
      text-align: center !important;
      width: 223px !important;
      margin-left: -19px !important;
}

.counsilordesig{
      margin-bottom: 3px !important;
      font-size: 10px !important;
      font-weight: 600 !important;
      color: #0808c2 !important;
      margin-right: 0px !important;
      display: block !important;
      width: 223px !important;
}
.leftcol {
  font-family: "Calibri (Body)" !important;
  width: 235px !important;
}

.clearancebody{
  line-height: 30px !important;
  margin-right: 10px !important;
  text-align: justify !important;

}

.leftlogo{
  height: 120px !important;
  width: 120px !important;
  position: absolute !important;
  left: 0 !important;
  margin-left: 50px !important;
  margin-top: 8px !important;
}
.roghtlogo{
  height: 120px !important;
  width: 120px !important;
  position: absolute !important;
  right: 0 !important;
  margin-right: 50px !important;
  margin-top: 8px !important;
}

.ph{
  font-family: times new roman !important;
  font-size: 13px !important;
}

.clearancecontent{
  font-size: 16px !important;
  font-family: times new roman !important;
  margin-top: 110px !important;
}

.brgycouncil{

    width: 200px !important;
    display: block !important;
    text-align: center !important;
    top: 26px !important;
    position: absolute !important;
    font-size: 24px !important;
    font-family: "Arial" !important;
    font-weight: bold !important;
    color: #169c16 !important
}
.council{

    width: 200px !important;
    display: block !important;
    text-align: center !important;
    top: 54px !important;
    position: absolute !important;
    font-size: 24px !important;
    font-family: "Arial" !important;
    font-weight: bold !important;
    color: #169c16 !important

}

div.signature h6{
    text-align: right;
    margin-right: 39px;
    font-size: 14px !important;
    font-family: Arial Black !important;
    font-weight: bold !important;
    text-decoration: underline !important;
    color: black !important;
}
.signature p{
  text-align: right;
  margin-right: 67px;
  font-size: 14px !important;
  font-family: Times New Roman !important;
  font-weight: bold !important;
  font-style: italic;
}
.brgyclearance {
  position: relative !important;;
  margin-top: 60px !important;;
  font-family: Constantia !important;
    font-size: 27px !important;
    text-align: center;
    color: #000 !important;
}

.watermark{
  position: absolute !important;
  z-index: 1 !important;
  opacity: 0.20 !important;
  top: 216px;
  left: 269px !important;
  margin: 0 auto !important;
}
.hr {
  top: 37px;
      display: block !important;
      height: 1px !important;
      border: 0 !important;
      border-top: 3px solid #3577ef !important;
      margin: 1em 0 !important;
      padding: 0 !important;
      min-width: 537px !important;
      right: 0 !important;
      margin-right: 10px !important;
      position: absolute !important;
}
.vr {
      transform: rotate(90deg) !important;
      display: block !important;
      height: 1px !important;
      border: 0 !important;
      border-top: 3px solid #3577ef !important;
      margin: 1em 0 !important;
      padding: 0 !important;
      min-width: 780px !important;
      left: 0 !important;
      margin-left: -395px !important;
      top: 400px !important;
      position: absolute !important;
}
.footer{

}
.councilor{
    margin-bottom: 2px !important;
    font-size: 14px !important;
    font-family: Bookman Old Style !important;
    font-weight: bold !important;
    color: #169c16 !important;
    display: block !important;
    margin-top: 12px;
}
.sidecol{
    position: relative !important;
      top: -39px !important;
}
.slogan{
  width: 479px !important;
  right: 0 !important;
  color: #fff !important;
  text-align: justify !important;
  font-size: 17px !important;
  margin-left: 94px !important;
  margin-top: 9px !important;
  line-height: 20px !important;
  font-family: serif !important;
  font-weight: 600 !important;
}
.telnum{
      width: 200px !important;
      right: 0 !important;
      position: absolute !important;
      text-align: right !important;
      font-size: 14px !important;
      margin-right: 15px !important;
      margin-top: 15px !important;
      color: #fff !important;
      line-height: 17px !important;
      letter-spacing: 1px !important;
}
                    </style>
                    <table id="table">

  <tr>
    <td colspan="2">
      <img  class="leftlogo" src="<?php echo base_url('images/maimpislogo.png') ?>">
        <img  class="roghtlogo" src="<?php echo base_url('images/csfplogo.png') ?>">
      <center>
          <div class="ph">Republic of the Philippines<br>
            Province of Pampanga<br>
            City of San Fernando<br></div>
            <p class="brgyname">BARANGAY MAIMPIS<br></p>
            <p class="office">Office of the Punong Barangay</p>
          </center>

      </td>
  </tr>
  <tr>
    <td class="leftcol">
        <center>
        <h3 class="brgycouncil">BARANGAY</h3>
        <div style="position: absolute !important;z-index: 1 !important;opacity: 0.25 !important;top: 216px !important;  min-width: 400px !important;left: 269px !important;margin: 0 auto !important;"><img
          src="<?php echo base_url('images/maimpislogo.png') ?>"> </div>

        <h3 class="council">COUNCIL</h3></center>
        <div class="hon">Hon. SUSAN L. SERRANO</div>
          <p class="leftpunongbrgy">Punong Barangay</p>
    </td>
    <td rowspan="12" valign="top">
      <div class="hr"></div>
      <div class="vr"></div>
      <h3 class="brgyclearance">BARANGAY CLEARANCE<br><br></h3>
     
      <div class="clearancecontent">
      <i class="addresee"><strong>To whom it may concern,<br><br></strong></i>
      <p class="clearancebody"><?php echo $par1; ?><br></p>
      <p class="clearancebody"><?php echo $par2; ?><br></p>
      <p class="clearancebody"><?php echo $par3; ?><br></p>
      <p class="clearancebody"><?php echo $par4; ?><br></p>
      <br>
      <div>
      <span><img  class="residentimg" src="<?php echo base_url('residentsimages/'.$id.'.jpg');?>"></span><br><br>
      </div>

        <div class="signature">
        <img  class="residentimg" src="<?php echo base_url('residentsimages/'.$id.'.jpg');?>">
          <img style="    height: 58px !important;
    width: 226px !important;
    z-index: 999 !important;
    position: absolute !important;
    opacity: 999;
    margin-top: -37px;
    margin-left: -120px;"
         src="<?php echo base_url('images/kapsig.png') ?>" >
          <h6>HON. SUSAN L. SERRANO</h6>
          <p>Punong Barangay</p>
        </div>
        <br><br><br>
      </div>
    </td>
  </tr>
  <tr colspan="11">
    <td class="sidecol">
      <div class="brgykagawads">Barangay Kagawad:</div>
      <div class="councilor">Hon. JOSE C. SICAT</div>
      <p class="counsilordesig">Com. on Cooperatives / Labor &amp; Employment</p>

      <div class="councilor">Hon. HANSEL C. GALANG</div>
      <p class="counsilordesig">Com. On Agriculture</p>

      <div class="councilor">Hon. ARNEL J. STA. CRUZ</div>
        <p class="counsilordesig">Com. On Public Works &amp; Development</p>
        <p class="counsilordesig">Com. On Finance, Budget &amp; Appropriation</p>

      <div class="councilor">Hon. MA. LUISA M. MALLARI</div>
        <p class="counsilordesig">Com. on Educational, Culture, &amp; Religion</p>

      <div class="councilor">Hon. LEONILA C. HERNANDEZ</div>
        <p class="counsilordesig">Com. on Health &amp; Social Welfare</p>

      <div class="councilor">Hon. ROEL M. DE MESA</div>
      <p class="counsilordesig">Com. On Peace &amp; Order, Public Safety, &amp; Human Rights</p>

      <div class="councilor">Hon. JOJO P. LORDAN</div>
        <p class="counsilordesig">Com. On Emvironmental Protection</p>

      <div class="councilor">JOHN PAUL M. GALANG</div>
    <p class="counsilordesig"> SK Chairman</p>
    <p class="counsilordesig"> Com. On Youth &amp; Sports Development</p>

      <div class="councilor">VANESSA ANN B. MANARANG</div>
    <p class="counsilordesig">  Barangay Secretary</p>
      <div class="councilor">VALENTINA S. DAVID</div>
      <p class="counsilordesig">  Barangay Treasurer</p>
      <div class="councilor">ENRICO G. PEÑA</div>
      <p class="counsilordesig"> Bantay Tanod Chief</p>


      <div style="margin-top: 25px;font-size: 12px;font-style: italic;font-weight: 800;display: block;margin-bottom: 4px;">NOT VALID WITHOUT</div>
      <div style="font-size: 12px;  font-style: italic;font-weight: 800;display: block;">THE BARANGAY SEAL</div>
      </td>
  </tr>
  <tr>
    <td>
      <div style="font-size: 12px;">CTC No. &nbsp;&nbsp;:________</div>
      <div style="font-size: 12px;">Issued on&nbsp;:________</div>
      <div style="font-size: 12px;">Issued at&nbsp; :________</div>
    </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>

    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      <div style="top: -56px !important;position: absolute !important;width: 580px !important;background: linear-gradient(90deg, rgba(176,216,237,1) 0%, rgba(31,9,205,1) 77%)  !important;right: 0 !important;height: 140px !important;">
        <div style="width: 479px !important;right: 0 !important;text-align: justify !important; font-size: 17px !important;margin-left: 94px !important;margin-top: 9px !important;line-height: 20px !important;font-family: serif !important;font-weight: 550 !important;">
          <i style="color: #fff !important;">"Ang Barangay Maimpis ay isang modelong pamayanan na may maunlad na industriya at kalakalan at sentro ng servisyong publiko ng Rehiyon."</i>
        </div>
        <div class="telnum">
        <br/>
          <br/>
          Tel No.: (045) 300-26-29<br/>
          
        </div>
      </div>
    </td>
  </tr>

</table>
<br/><br/><br/>
                  </div>
                <?php } ?>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
