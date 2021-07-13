<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>BLOTTER<small> </small></h2>
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
                      // $id = $this->uri->segment(3);
                      if(is_array($result)){
                        foreach ($result as $r) {

                          $b_accused = $r->b_accused;
                          $arr_respondend = explode(',', $b_accused);
                          $b_complainant = $r->b_complainant;
                          $arr_complainant = explode(',', $b_complainant);

                          $b_caseno = $r->b_caseno;
                          $b_casefor = $r->b_casefor;
                          $b_report = $r->b_report;
                          $b_classification = $r->b_classification;

                          $b_scheddate = $r->b_scheddate;
                          $b_schedtime = $r->b_schedtime;

                          $day = date("dS", strtotime($b_scheddate));
                          $mo = strtoupper(date("F", strtotime($b_scheddate)));
                          $yr = date("Y", strtotime($b_scheddate));

                          // $t = date("H:i", strtotime($b_schedtime));

                          // $myString = "9,admin@example.com,8";
                          $schedarr = explode(' ', $b_schedtime);

                          $t = $schedarr[0];
                          $a = strtoupper($schedarr[1]);


                          // $a = date("A", strtotime($b_schedtime));


                          // $day = date("dS", strtotime($b_scheddate));

                        }
                      }


                      ?>


                  <!-- Brgy Clearance -->
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="printthis">
                    <style>

                    #table {
 max-width:780px;
 width: 100%;
 border: 0;
 border-spacing: 0;
 border-collapse: collapse;
    font-size: 16px;
 font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
 color: #1d1d1d;
}

#table td {
 border: 1px none black;
 padding: 0;
 margin: 0;
 line-height: 1;
 font-size: 10px;
 position: relative;
}

#table.table-wborder td {
 border: 0;
 padding: 5px 5px;
}

#table tr th, #table tr td {
 padding: 5px;
}

#table b, strong {
 font-weight: 700;
}

#table td span {
 line-height: 1;
}
/*#table p{text-align: justify;  text-justify: inter-word;  }*/
/*#table span img{*/
.residentimg{
    height: 150px;
    width: 150px;
    position: absolute;
    right: 0;
    margin-right: 47px;
}
#table .brgyname {
  font-family: "Cambria (Headings)" !important;
  font-weight: bold;
  font-size: 20px;
  color: #0808c2 !important;
}
#table .office {
  /* font-family: Arial Black;
  font-weight: bold;
  color: #d50101 !important;
  font-size: 18px; */
  margin-top: 40px !important;
  font-family: "Cambria (Headings)" !important;
  font-weight: bold !important;
  /* text-decoration: underline; */
  font-size: 20px !important;
  color: #2e2e2f !important;
}
#table tbody tr td center div{
  padding-top: 30px;
  padding-bottom: 30px;
  display: block;
}
table tbody tr td h4.certtitle {
  font-family: Constantia !important;
    font-size: 22px !important;
    text-align: center;
    color:black !important;
}
#table h5{
  margin-top: 1px;
  margin-bottom: 1px;
  font-size: 12px;
  font-family: Bookman Old Style;
  font-weight: bold;
  color:#169c16  !important;
}
#table h4{
  margin-top: 14px;
    margin-bottom: 1px;
    color:#169c16 !important;
    font-weight: bold;
    font-family: "Arial";
}
#table h4 p{
  text-align: center;
}
/* .counsilordesig {
  font-size: 10px;
  font-weight: bold;
  color:#0808c2 !important;
  margin: 0px 0 -9px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: -9px;
    margin-left: 0px;
} */
/* .leftcol {
  font-family: "Calibri (Body)";
      width: 235px;
} */

.clearancebody{
  line-height: 20px;
  margin-right: 20px;
  text-align: justify;
    text-justify: inter-word;
}



.leftlogo{
  height: 120px;
  width: 120px;
  position: absolute;
  left: 0;
  margin-left: 50px;
  margin-top: 8px;
}
.roghtlogo{
  height: 120px;
  width: 120px;
  position: absolute;
  right: 0;
  margin-right: 50px;
  margin-top: 8px;
}

.ph{
  font-family: times new roman;
  font-size: 14px;
  line-height: 18px;
}

.clearancecontent{
    font-size: 16px;
    font-family: times new roman;
    margin-top: 30px;
    margin-left: 60px;
    margin-right: 60px
}

.brgycouncil{
  font-size: 24px;
  font-family: "Arial";
  font-weight: bold;
  color:#169c16 !important;
}


div.signature h6{
    text-align: right;
    margin-right: 57px;
    font-size: 14px !important;
    font-family: Arial Black !important;
    font-weight: bold !important;
    text-decoration: underline !important;
    color: black !important;
}
.signature p{
  text-align: right;
  margin-right: 85px;
  font-size: 16px !important;
  font-family: Times New Roman !important;
  font-weight: bold !important;
  /* font-style: italic; */
}
.attested p{
  top: -60px;
  position: relative;
  margin-right: 67px;
  font-size: 16px !important;
  font-family: Times New Roman !important;
  font-weight: bold !important;
  /* font-style: italic; */
}
div.attested h6{
  position: relative;
      top: -55px;
    text-align: left;
    left: 0;
    font-size: 14px !important;
    font-family: Arial Black !important;
    font-weight: bold !important;
    text-decoration: underline !important;
    color: black !important;
}
.rescom{
  position: relative;
  left: 0;
  /* margin-left: 50px; */
}
.rescom p{
  margin-left: 70px;
}
.brgycase{
    font-family: "Cambria (Headings)" !important;
  position: absolute !important;
  right: 0 !important;
  top: 24px  !important;
  padding-right: 80px !important;
  font-size: 12px !important;
}

.item{
  margin-left: 50px;
}
.gulis {
    font-size: 14px !important;
    text-align: center !important;
    position: relative !important;
    max-width: 200px !important;
}
.gulis1 {
    position: relative !important;
    max-width: 625px;
    padding: 0!important;
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

.gulis1:before {
    content: '' !important;
    height: 1px !important;
    width: 100% !important;
    top: 0 !important;
    background-color: #0c2dff !important;
    display: block !important;
    position: absolute !important;
}

.gulis1:after {
    content: '' !important;
    height: 1px !important;
    width: 100% !important;
    top: 3px !important;
    background-color: #0c2dff !important;
    display: block !important;
    position: absolute !important;
}

.rescom1 h6 {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 2px;
}
.rescom1 div {
  font-size: 16px;
}

.font_roboto * {
  font-family: Roboto,sans-serif !important;
}

.align-right {
  text-align: right;
}

</style>
<?php if($certtype == 'cfa'){ ?>

  <table id="table" class="font_roboto">
    <tr>
      <td colspan="2">
        <img  class="leftlogo" src="<?php echo base_url('images/maimpislogo.png') ?>">
          <img  class="roghtlogo" src="<?php echo base_url('images/csfplogo.png') ?>">
        <center>
            <div class="ph" style="padding-bottom: 10px;">Republic of the Philippines<br>
              Province of Pampanga<br>
              City of San Fernando<br></div>
              <p class="brgyname">BARANGAY MAIMPIS<br></p>
              <!-- <p class="office">Office of the Lupong Tagapamayapa</p> -->
              <p class="office" style="margin-top: 10px !important;margin-bottom: 20px;">OFFICE OF THE LUPONG TAGAPAMAYAPA</p>
              <div class="gulis1"></div>
            </center>
        </td>
    </tr>
    <tr>
      <td rowspan="12" valign="top">
        <div class="clearancecontent">
          <div class="rescom1">
            <?php foreach($arr_complainant as $c){
              echo '<h6>'.$c.'</h6>';
            } ?>
            <div>Complainant/s</div>
          </div>
          <div class="brgycase rescom1">
            <h6>Barangay Case No. <u><?php  echo $b_caseno; ?></u></h6>
            <div >For:  <u><?php  echo $b_casefor; ?></u></div>
          </div>
          <div class="rescom">
            <br/>
            <div>- againts -</div>
            <br/>
          </div>
          <div class="rescom1">
            <?php foreach($arr_respondend as $r){
              echo '<h6>'.$r.'</h6>';
            } ?>
            <div>Respondent/s</div>
          </div>

        <p class="clearancebody "><center><p class="">CERTIFICATE TO FILE ACTION</p></center></p>
        <br/>

        <p class="clearancebody">This is to certify that:</p>
        <p class="clearancebody item">1.	There was a personal confrontation between the parties before the Punong Barangay but mediation failed;</p>
        <p class="clearancebody item">2.	The Punong Barangay set the meeting of the parties for the constitution of the Pangkat;</p>
        <p class="clearancebody item">3.	The respondent willfully failed or refused to appear without justifiable reason at the conciliation proceedings before the Pangkat;</p>
        <p class="clearancebody item">4.	Therefore, the corresponding complaint for the dispute may now be filed in court/government office.</p>
        <p class="clearancebody">This <?php echo date('dS'); ?> day of <?php echo date('F Y'); ?></p>

        <br/>  <div class="rescom1 align-right">
            <h6>__________________________ <br>
              VANESSA ANN B. MANARANG&nbsp;</h6>
            <p>Pankat Secretary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
          </div>
          <div class="rescom1 font_roboto">
            <p>ATTESTED BY:</p><br><br><br>
            <h6>
              _______________________ <br>
              Hon. SUSAN L. SERRANO</h6>
            <p>Pangkat Chairman</p>
          </div>
        </div>
      </td>
    </tr>
  </table>

<table id="table" style="display:none">
  <tr>
    <td colspan="2">
      <img  class="leftlogo" src="<?php echo base_url('images/maimpislogo.png') ?>">
        <img  class="roghtlogo" src="<?php echo base_url('images/csfplogo.png') ?>">
      <center>
          <div class="ph">Republic of the Philippines<br>
            Province of Pampanga<br>
            City of San Fernando<br></div>
            <p class="brgyname">BARANGAY MAIMPIS<br></p>
            <!-- <p class="office">Office of the Lupong Tagapamayapa</p> -->
            <p class="office" style="color: #e00101 !important;">OFFICE OF THE LUPONG TAGAPAMAYAPA</p>
          </center>
      </td>
  </tr>
  <tr>
    <td rowspan="12" valign="top">
      <div class="clearancecontent">
        <div class="rescom">
          <?php foreach($arr_complainant as $c){
            echo '<h6 class="gulis">'.$c.'</h6>';
          } ?>
          <p>complainant/s</p>
        </div>
        <div class="brgycase">
          <h6>Barangay Case No. <u><?php  echo $b_caseno; ?></u></h6>
          <h6 >For:  <u><?php  echo $b_casefor; ?></u></h6>
        </div>
        <div class="rescom">
          <br/>
          <p>- againts -</p>
          <br/>
        </div>
        <div class="rescom">
          <?php foreach($arr_respondend as $r){
            echo '<h6 class="gulis">'.$r.'</h6>';
          } ?>
          <p>respondent/s</p>
        </div>

      <p class="clearancebody "><center><p class="">CERTIFICATE TO FILE ACTION</p></center></p>
      <br/>

      <p class="clearancebody">This is to certify that:</p>
      <p class="clearancebody item">1.	There was a personal confrontation between the parties before the Punong Barangay but mediation failed;</p>
      <p class="clearancebody item">2.	The Punong Barangay set the meeting of the parties for the constitution of the Pangkat;</p>
      <p class="clearancebody item">3.	The respondent willfully failed or refused to appear without justifiable reason at the conciliation proceedings before the Pangkat;</p>
      <p class="clearancebody item">4.	Therefore, the corresponding complaint for the dispute may now be filed in court/government office.</p>
      <p class="clearancebody">This <?php echo date('dS'); ?> day of <?php echo date('F Y'); ?></p>

      <br/>  <div class="signature">
          <h6>VANESSA ANN B. MANARANG</h6>
          <p>Pankat Secretary</p>
        </div>
        <div class="attested">
          <p>ATTESTED BY:</p><br/>
          <h6>Hon. SUSAN L. SERRANO</h6>
          <p>Pangkat Chairman</p>
        </div>
      </div>
    </td>
  </tr>
</table>
<?php }else if($certtype == 'summon'){ ?>
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
              <!-- <p class="office">Office of the Lupong Tagapamayapa</p> -->
              <p class="office">OFFICE OF THE LUPONG TAGAPAMAYAPA</p>
            </center>
        </td>
    </tr>
    <tr>
      <td rowspan="12" valign="top">
        <div class="clearancecontent">
          <div class="rescom">
            <?php foreach($arr_complainant as $c){
              echo '<h6 class="gulis">'.$c.'</h6>';
            } ?>
            <p>complainant/s</p>
          </div>
          <div class="rescom">
            <br/>
            <p>- againts -</p>
          </div>
          <div class="brgycase">
            <h6>Barangay Case No. <u><?php  echo $b_caseno; ?></u></h6>
            <h6 >For:  <u><?php  echo $b_classification; ?></u></h6>
          </div>
          <br/>
          <div class="rescom">
            <?php foreach($arr_respondend as $r){
              echo '<h6 class="gulis">'.$r.'</h6>';
            } ?>
            <p>respondent/s</p>
          </div>
        <p class="clearancebody "><center><p class="">S U M M O N S</p></center></p>
        <br/>

        <div> TO : <u> <?php echo $b_accused; ?></u><br/><p class="item">Respondent/s</p></div><br/>
        <?php if($a == 'AM'){
            $x = 'MORNING';
        }else{
            $x = 'AFTERNOON';
        } ?>

        <p class="clearancebody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You hereby summoned to appear before me in person, together with your witnesses, on the <?php echo '<u>'.$day.'</u>'; ?> day of <?php echo '<u>'.$mo.'</u>'; ?>, <?php echo '<u>'.$yr.'</u>'; ?> , at <?php echo '<u>'.$t.'</u>'; ?> o’clock in the <?php echo '<u>'.$x.'</u>'; ?>, then and there to answer to a complaint made before me, copy of which is attached hereto, for mediation/conciliation of your dispute with complainant/s.</p>
        <p class="clearancebody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are hereby warned that if you refuse or willfully fail to appear in obedience to this summons, you may be barred from filing any counterclaim arising from said complaint.</p>
        <p class="clearancebody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAIL NOT or else face punishment as contempt of court.</p>
        <p class="clearancebody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This <?php echo '<u>'.date('dS').'</u>'; ?>  day of <?php echo '<u>'.strtoupper(date('F')).'</u>'; ?>, <?php echo '<u>'.date('Y').'</u>'; ?>.</p>

        <br/>  <div class="signature">
            <h6>Hon. SUSAN L. SERRANO</h6>
            <p>Punong Barangay</p>
          </div>
        </div>


        <!-- page2 -->
        <div class="clearancecontent" style="page-break-before: always;">
        <br><br><br>
        <center>
          <p class="">OFFICER'S RETURN</p>
        </center>
        <br>
        <p class="clearancebody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I served this summons upon respondent
          ____________________________________ <br>
          on the ___ day of _______,  _____, and upon respondent __________________________ <br>
          on the ___ day of _______,  _____, by:
        </p>
        <br>
        <p>
          (Write name/s of respondent/s before mode by which he/ they was/were served.)
        </p>

        <br><br><br>

        <p style="position: relative;">
          _____________________________1. handing to him/them said summons in person, or<br><br>
          _____________________________2. handing to him/them said summons and he/they <br>refused to receive it, or<br><br>
          _____________________________3. leaving said summons at his/her dwelling with<br>
          ________________, a person of suitable age and discretion residing therein, or<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(name)<br><br>
          _____________________________4. leaving said summons at his/their office/place of <br>
          business with ___________ a competent person in charge thereof. ____________<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(name)
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(office)
        </p>

        <br><br><br><br>

        <p>Received by Respondent/s representative/s:</p>

        <br><br><br><br>

        _____________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _____________________________<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;(Signature)
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Date)

        <br><br><br>

        _____________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _____________________________<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;(Signature)
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Date)

        </div>

      </td>

    </tr>


  </table>
<?php }else if($certtype == 'blotter'){ ?>
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
              <!-- <p class="office">Office of the Lupong Tagapamayapa</p> -->
              <p class="office">OFFICE OF THE LUPONG TAGAPAMAYAPA</p>
            </center>
        </td>
    </tr>
    <tr>
      <td rowspan="12" valign="top">
        <div class="clearancecontent">
          <div class="rescom">
            <?php foreach($arr_complainant as $c){
              echo '<h6 class="gulis">'.$c.'</h6>';
            } ?>
            <p>complainant/s</p>
          </div>
          <div class="brgycase">
            <h6>Barangay Case No. <u><?php  echo $b_caseno; ?></u></h6>
            <h6 >For:  <u><?php  echo $b_casefor; ?></u></h6>
          </div>
          <br/>
          <div class="rescom">
            <?php foreach($arr_respondend as $r){
              echo '<h6 class="gulis">'.$r.'</h6>';
            } ?>
            <p>respondent/s</p>
          </div>

            <p class="">x-----------------------------------------------x</p>
        <p class="clearancebody "><center><p class="office">BLOTTER REPORT</p></center></p>
        <br/>
        <p class="clearancebody"><?php echo $b_report; ?></p>

        <br/>  <div class="signature">
            <h6>Hon. SUSAN L. SERRANO</h6>
            <p>Punong Barangay</p>
          </div>
        </div>
      </td>
    </tr>
  </table>
<?php } ?>
                  </div>
              </div>
          </div><!-- x_content -->
        </div>
      </div>
    </div>
  </div>
</div>
