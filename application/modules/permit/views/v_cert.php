<?php
if(is_array($result)){
  foreach ($result as $r) {
    $permtype = $r->permtype;
    $businessname = $r->businessname;
    $bldgno = $r->bldgno;
    $str = $r->str;
    $purok = $r->purok;
    $operator = $r->operator;
    $opaddress = $r->opaddress;
    $activity1 = $r->activity1;
    $activity2 = $r->activity2;
    $activity3 = $r->activity3;
  }
}
 ?><!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Barangay Permit<small> </small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" onclick="printDiv(printthis)"><i class="fa fa-print"></i> Print</button>
                  </div>
              </div>
              <div class="row">
                  <div class="printcontent" id="printthis">
                    <style type="text/css">
/* .tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-s6z2{text-align:center}
.tg .tg-lqy6{text-align:right;vertical-align:top}
.tg .tg-yw4l{vertical-align:top} */
/* @media print {
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
} */
                      #table {
                       max-width:800px !important;
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

                      .permitcontent{
                        max-width:850px !important;
                        width: 95% !important;
                        border: 0 !important;
                        border-spacing: 0 !important;
                        border-collapse: collapse !important;
                        margin-left: auto;
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

                      #table tr th,
                      #table tr td {
                        padding: 5px !important;
                      }

                      #table b, strong {
                        font-weight: 700 !important;
                      }

                      #table td span {
                        line-height: 1 !important;
                      }

                      .leftlogo{
                        height: 140px !important;
                        width: 142px !important;
                        position: absolute !important;
                        left: -20px !important;
                        margin-left: 50px !important;
                        margin-top: 8px !important;
                        position: absolute !important;
                      }

                      .roghtlogo{
                        height: 140px !important;
                        width: 140px !important;
                        position: absolute !important;
                        right: -20px !important;
                        margin-right: 50px !important;
                        margin-top: 8px !important;
                        position: absolute !important;
                      }
                      #table .brgyname {
                        font-family: Arial, Helvetica, sans-serif !important;
                        font-weight: bold !important;
                        font-size: 24px !important;
                        color: #0808c2 !important;
                        margin-bottom: 0!important;
                      }

                      #table .office {
                        font-family: Impact, Charcoal, sans-serif !important;
                        font-weight: bold !important;
                        color: #d50101 !important;
                        font-size: 23px !important;
                      }

                      .brgypermit{
                        /* margin: 2px 58px; */
                        margin-top: 22px;
                        margin-left: auto;
                        margin-right: auto;
                        border-radius: 4px !important;
                        padding: 0 15px !important;
                        display: block !important;
                        background-color: #3688d3 !important;
                        color: white !important;
                        letter-spacing: 6px !important;
                        font-family: Impact, Charcoal, sans-serif !important;
                        font-weight: 700 !important;
                        font-size: 24px !important;
                        max-width: 593px !important;
                      }
                      .granted{
                        /* right: 0 !important;;
                        left: 0 !important;; */
                        /* margin: 0 auto !important;; */
                        margin-left: 225px !important;
                        font-family: serif !important;
                        font-weight: 500 !important;
                        text-align: center !important;
                        letter-spacing: 2px !important;
                        font-size: 14px !important;
                      }
                      .buslabel{
                        font-size: 14px !important;
                        font-weight: 700 !important;
                        margin-bottom: 5px;
                      }

                      .businfo{
                        display: block !important;
                        margin-left: 80px !important;
                        margin-right: 80px !important;
                        max-width: 600px !important;
                        height: 35px !important;
                        padding: 6px 15px 4px 15px !important;
                        font-size: 13px !important;
                        line-height: 1.57142857 !important;
                        color: #454545 !important;
                        background-color: #fff !important;
                        background-image: none !important;
                        border: 1px solid #2e2e2e !important;
                        border-radius: 3px !important;
                        margin-bottom: 0;
                      }
                      .details{
                        display: block !important;
                        margin-left: 90px !important;
                        margin-right: 90px !important;
                        max-width: 600px !important;
                        font-family: serif !important;
                        font-size: 14px !important;
                        padding-top: 8px !important;
                        padding-bottom: 8px !important;
                      }

                      .items {
                        padding-left: 20px !important;
                        padding-right: 10px !important;
                        /* text-decoration: underline !important; */
                        padding-top: 5px !important;
                        padding-bottom: 5px !important;
                      }

                      .signature{
                        margin-top: 50px !important;
                      }
                      div.signature h6{
                          text-align: right !important;
                          margin-right: 130px !important;
                          font-size: 14px !important;
                          font-family: Arial Black !important;
                          font-weight: bold !important;
                          text-decoration: underline !important;
                          color: black !important;
                      }
                      .signature p{
                        text-align: right !important;
                        margin-top: -15px !important;
                        margin-right: 176px !important;
                        font-size: 17px !important;
                        font-family: Times New Roman !important;
                        font-weight: bold !important;
                        font-style: italic !important;
                      }

                      .printcontent{
                        max-width: 800px !important;
                        position: relative;
                        padding-bottom: 30px;
                        width: 21cm;
                        height: 29.7cm;
                      }

                      .bustype1{
                        display: block !important;
                        position: absolute !important;
                        font-family: Times New roman !important;
                        font-size: 17px !important;
                        font-weight: 700 !important;
                        margin-left: 160px !important;
                        margin-top: 30px !important;
                      }

                      .bustype2{
                        display: block !important;
                        position: absolute !important;
                        font-family: Times New roman !important;
                        font-size: 17px !important;
                        font-weight: 700 !important;
                        margin-left: 160px !important;
                        margin-top: 60px !important;
                      }

                      .checknew{
                        border-radius: 8px !important;
                        margin-left: 125px !important;
                        margin-top: 25px !important;
                        position: absolute !important;
                        border: solid 1px !important;
                        padding: 7px !important;
                      }
                      .checkrenew{
                        border-radius: 8px !important;
                        margin-left: 125px !important;
                        margin-top: 58px !important;
                        position: absolute !important;
                        border: solid 1px !important;
                        padding: 7px !important;
                      }

                      .watermark{
                        position: absolute !important;
                        z-index: 1 !important;
                        opacity: 0.18 !important;
                        left: 165px !important;
                        margin: 0 auto !important;
                      }

                      .gulis{
                        position: relative !important;
                        max-width: 500px !important;
                      }
                      .gulis:before {

                      content: '' !important;
                      height: 1px !important;
                      width: 100% !important;
                      bottom: 0 !important;
                      background-color: black !important;
                      display: block !important;
                      position: absolute !important;
                      }
                      /* .box {
                        width: 20px;
                        border: 1px solid black;
                        padding: 5px;
                        margin: 5px;
                      } */
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

<div class="bg1-top-blue"></div>
<div class="bg1-top-green"></div>

<div class="bg1-left-blue"></div>
<div class="bg1-left-green"></div>
<div class="bg1-left-green1"></div>

<div class="bg1-bottom-blue telno">Tel No.: (045) 300-2629</div>
<div class="bg1-bottom-green"></div>

<table id="table">
  <tr>
  <td>
    <img  class="leftlogo" src="<?php echo base_url('images/maimpislogo.png') ?>">
      <img  class="roghtlogo" src="<?php echo base_url('images/csfplogo.png') ?>">
      <center>
          <div class="ph" style="line-height: 1.3;">Republic of the Philippines<br>
            Province of Pampanga<br>
            City of San Fernando<br></div>
            <p class="brgyname">BARANGAY MAIMPIS<br></p>
            <p class="office">Office of the Punong Barangay</p>
          </center>
  </td>
  </tr>
</table>
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->
  <div class="permitcontent">
    <div class="row">
      <form id="frm_printeddetails" name="frm_printeddetails">
        <input type="hidden" name="r_parents" id="r_parents" value="<?php echo $businessname; ?>">
        <!-- <input type="text" name="r_parentwork" id="r_parentwork" value="<?php // echo $r_parentwork; ?>">
        <input type="text" name="annualsalary" id="annualsalary" value="<?php // echo $annualsalary; ?>">
        <input type="text" name="reqby" id="reqby" value="<?php // echo $reqby; ?>">
        <input type="text" name="str" id="str" value="<?php // echo $str; ?>"> -->

        <!-- <input type="text" name="type" id="type" value="<?php // echo $this->uri->segment(4); ?>"> -->
        <input type="hidden" name="ref_if" id="ref_if" value="<?php echo $this->uri->segment(3); ?>">
      </form>
    </div>
    <br/>
    <label class="brgypermit"><center style="color: #fff!important;">BARANGAY BUSINESS CLEARANCE</center></label>
  <!-- </div> -->
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->
    <br/>
    <img  class="watermark" src="<?php echo base_url('images/maimpislogo.png') ?>">
    <label class="granted"><center>THIS CLEARANCE IS HEREBY GRANTED TO</center></label>
    <label class="businfo"><center><?php echo $businessname; ?></center></label>
    <div class="buslabel"><center>(BUSINESS OR TRADE NAME)</center></div>
  <!-- </div> -->
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->
    <label class="businfo"><center><?php echo $bldgno.' '.$str.' '.$purok.' Maimpis, City of San Fernando, Pampanga'; ?></center></label>
    <div class="buslabel"><center>(LOCATION)</center></div>
  <!-- </div> -->
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->
    <label class="businfo"><center><?php echo $operator; ?></center></label>
    <div class="buslabel"><center>(PROPRIETOR / OPERATOR / MANAGER)</center></div>
  <!-- </div> -->
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->
    <label class="businfo"><center><?php echo $opaddress; ?></center></label>
    <div class="buslabel"><center>(ADDRESS)</center></div>
  <!-- </div> -->
  <!-- <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-xs-12 col-sm-12"> -->

    <span class="details">To engage and operate the above-mentioned business or trade activity, especially as follows:</span>
    <span class="details items gulis">1. <strong><?php echo $activity1; ?></strong></span>
    <span class="details items gulis">2. <strong><?php echo $activity2; ?></strong></span>
    <span class="details items gulis">3. <strong><?php echo $activity3; ?></strong></span>
    <span class="details">The permit hereby granted is subject to all existing laws and ordinances, rules and regulations governing the business or trade hereby permited.</span>
    <span class="details">Any violation of the conditions for this permit or when public interest will so require shall be enough ground to revoke the said permit and close or padlock the place of business.</span>
    <span class="details">This permit is valid up to December 31, <?php if(date('m') == '12'){ echo date('Y')+1; }else{ echo date('Y');} ?>, renewal before January 2 of each year unless otherwise revoked.</span>
    <span class="details">Issued this <strong><u><?php echo date('j').'</u><sup>'.date('S').'</sup>'; ?></strong> day of <u><strong><?php echo date('F').' '.date('Y'); ?></strong></u> , at the Barangay Maimpis, City of San Fernando, Pampanga.</span>
    <div>
      <?php if($permtype == 'NEW'){ echo '<i class="fa fa-check checknew"></i>'; } ?>
      <span class="bustype1">New Business</span>
    </div>
    <div>
      <?php if($permtype == 'RENEWAL'){ echo '<i class="fa fa-check checkrenew"></i>'; } ?>
      <span class="bustype2">Renewal of Permit</span>
    </div>
  <div class="signature">
  
      <h6 style="position:relative !important;">
         <img style="height: 47px !important;
    width: 222px !important;
    z-index: 999 !important;
    position: absolute !important;
    opacity: 999;
    right: -16px;
    bottom: 0;
    margin-bottom: 1px;" src="<?php echo base_url('images/kapsig.png'); ?>" >
          HON. SUSAN L. SERRANO</h6>
      <p>Punong Barangay</p>
    </div>
  </div>
</div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
