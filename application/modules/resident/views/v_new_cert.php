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
                        $cert_title = '';
                      if( $certtype == 'SPES'){
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'CERTIFICATION';
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
                        $cert_title = 'BARANGAY CLEARANCE';
                        $par1 .= 'THIS IS TO CERTIFY that ';
                        $par1 .= '<strong>'.$rname.'</strong> ';
                        $par1 .= 'a bonafide resident of this Barangay is personally with postal address at ';
                        $par1 .= '<strong><u>'.$str.'</u></strong> ';
                        $par1 .= 'known to me to be a good moral character, peaceful and law-abiding citizen in this country.';

                        $par2 .= 'IT IS FURTHER CERTIFIED that the subject person has no derogatory record or any criminal record as per the data have in barangay.';

                        $par3 .= 'ISSUED upon the request of the above-named person for whatever legal purpose it may serve him/her.';

                        $par4 .= 'Given this ';
                        $par4.=  '<u>'.date('j').'</u><sup>'.date('S').'</sup> day of <u>'.date('F Y').'</u>, ';
                        $par4 .= 'at Barangay Maimpis, City of San Fernando, Pampanga. ';
                      }

                      if($certtype == 'RESIDENCY' || $certtype == 'SP' || $certtype == 'PWD' || $certtype == 'BURIAL' || $certtype == 'ITR' || $certtype == 'SPES'  || $certtype == 'EDUCASSIST'  || $certtype == 'MEDICAL'  || $certtype == 'FINANCIAL'){
                    ?>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-width: 800px;" id="printthis">
         
                        <!-- <table class="tg" id="table"> -->
                        <div class="bg1-top-blue"></div>
                        <div class="bg1-top-green"></div>

                        <div class="bg1-left-blue"></div>
                        <div class="bg1-left-green"></div>
                        <div class="bg1-left-green1"></div>

                        <!-- <div class="bg1-bottom-blue telno">Tel No.: (045) 300-2629</div> -->
                        <div class="bg1-bottom-green"></div>

                  <!-- </div> -->
                <?php } 
                // if($certtype == 'CLEARANCE'){ ?>
                  <!-- Brgy Clearance -->
                  <!-- <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="printthis"> -->
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
                          height: 106px !important;
                          position: absolute !important;
                          margin-right: 10px !important;
                          left: 40px !important;
                          border-radius: 10px !important;
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
                            padding-bottom: 18px !important;
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
                        margin-top: 50px !important;
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
                            /* margin-top: 15px !important; */
                            color: #fff !important;
                            line-height: 17px !important;
                            letter-spacing: 1px !important;
                      }
                      img:before {
                            content: ' ';
                            /* display: block;
                            position: absolute;
                            height: 50px;
                            width: 50px; */
                            background-image: url(../../../images/default.jpg); }
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
        <div style="position: absolute !important;z-index: 1 !important;opacity: 0.25 !important;top: 84px !important;  min-width: 400px !important;left: 269px !important;margin: 0 auto !important;"><img
          src="<?php echo base_url('images/maimpislogo.png') ?>"> </div>

        <h3 class="council">COUNCIL</h3></center>
        <img style="height:100px; margin-bottom: 12px;  border-radius:10px !important;position: relative; top: 96px; left: 48px;" src="<?php echo base_url('images/kapics.jpg');?>" >
        <div class="hon">Hon. SUSAN L. SERRANO</div>
          <p class="leftpunongbrgy">Punong Barangay</p>
    </td>
    <td rowspan="12" valign="top">
      <div class="hr"></div>
      <div class="vr"></div>
      <h3 class="brgyclearance"><?php echo $cert_title ?></h3>
     
      <div class="clearancecontent">
        <i class="addresee"><strong>To whom it may concern,<br><br></strong></i>
        <p class="clearancebody"><?php echo $par1; ?><br></p>
        <p class="clearancebody"><?php echo $par2; ?><br></p>
        <p class="clearancebody"><?php echo $par3; ?><br></p>
        <p class="clearancebody"><?php echo $par4; ?><br></p>
    
      <img  class="residentimg" src="<?php echo base_url('residentsimages/'.$id.'.jpg');?>"  onerror="this.onerror=null;this.src='<?php echo base_url('images/default.jpg') ?>';">
      
      <h5 style="position: relative;top: 140px;left: 40px; font-weight:700;"><u><?php echo $rname; ?></u><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature</h5>
      
      
        <div class="signature">
        <br/><br/>
          <img style="height: 58px !important;width: 226px !important; z-index: 999 !important; position: absolute !important; opacity: 999; margin-top: -37px;  margin-left: -120px;" src="<?php echo base_url('images/kapsig.png') ?>" >
          <h6>HON. SUSAN L. SERRANO</h6>
          <p>Punong Barangay</p>
        </div>
            
      <img style="position: relative;opacity: 31%; height: 135px;left: 30px;" src="<?php  echo base_url('images/box.png');?>">
      <h6 style="margin-bottom: 0px;margin-top: -10px;margin-left: 45px;">Right Thumb Mark</h6>
        <br><br><br>
      </div>
    </td>
  </tr>
  <tr colspan="11">
    <td class="sidecol">
      <div class="brgykagawads">Barangay Kagawad:</div>
      <div class="councilor">Hon. JOSE C. SICAT</div>
      <p class="counsilordesig">Com. on Cooperatives / Labor &amp; Employment</p>

      <div class="councilor">Hon. ROEL M. DE MESA</div>
      <p class="counsilordesig">Com. On Peace &amp; Order, Public Safety, &amp; Human Rights</p>


      <div class="councilor">Hon. ARNEL J. STA. CRUZ</div>
        <p class="counsilordesig">Com. On Public Works &amp; Development</p>
        <p class="counsilordesig">Com. On Finance, Budget &amp; Appropriation</p>

      <div class="councilor">Hon. MA. LUISA M. MALLARI</div>
        <p class="counsilordesig">Com. on Educational, Culture, &amp; Religion</p>

      <div class="councilor">Hon. LEONILA C. HERNANDEZ</div>
        <p class="counsilordesig">Com. on Health &amp; Social Welfare</p>

        <div class="councilor">Hon. HANSEL C. GALANG</div>
      <p class="counsilordesig">Com. On Agriculture</p>

      <div class="councilor">Hon. JOJO P. LORDAN</div>
        <p class="counsilordesig">Com. On Emvironmental Protection</p>

      <div class="councilor">JOHN PAUL M. GALANG</div>
    <p class="counsilordesig"> SK Chairman</p>
    <p class="counsilordesig"> Com. On Youth &amp; Sports Development</p>

      <div class="councilor">VANESSA ANN B. MANARANG</div>
    <p class="counsilordesig">  Barangay Secretary</p>
      <div class="councilor">VALENTINA S. DAVID</div>
      <p class="counsilordesig">  Barangay Treasurer</p>
      <div class="councilor">ELVIN M. REYES</div>
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
      <div style="top: -56px !important;position: absolute !important;width: 580px !important;background: linear-gradient(90deg, rgba(176,216,237,1) 0%, rgba(31,9,205,1) 77%)  !important;right: 0 !important;height: 116px !important;">
        <div style="width: 479px !important;right: 0 !important;text-align: justify !important; font-size: 17px !important;margin-left: 94px !important;margin-top: 9px !important;line-height: 20px !important;font-family: serif !important;font-weight: 550 !important;">
          <i style="color: #fff !important;">"Ang Barangay Maimpis ay isang modelong pamayanan na may maunlad na industriya at kalakalan at sentro ng servisyong publiko ng Rehiyon."</i>
        </div>
        <div class="telnum"><br/>
          Tel No.: (045) 300-26-29<br/>
          
        </div>
      </div>
    </td>
  </tr>

</table>
<br/><br/><br/>
                  </div>
                <?php  // } ?>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
