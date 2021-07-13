var ftr_data = {
  ftr_name : 'ALL',
  ftr_nametype : 'ALL',
  ftr_senior : 'ALL',
  ftr_monthlyincome : 'ALL',
  ftr_highiesteduc : 'ALL',
  ftr_voter : 'ALL',
  ftr_purok : 'ALL',
  ftr_gender : 'ALL',
  ftr_agefrom : 'ALL',
  ftr_ageto :  'ALL',
  ftr_civilstatus :  'ALL',
  ftr_employed :  'ALL',
  ftr_osy :  'ALL',
  ftr_renting :  'ALL',
};
$('#dt_residents').DataTable({
     dom: "Bfrtip",
					  buttons: [
						{
						  extend: "excel",
						  className: "btn-sm",
              text:'<i class="fa fa-download"></i>',
						},
						{
						  extend: "pdfHtml5",
						  className: "btn-sm"
						},
						{
						  extend: "print",
						  className: "btn-sm",
              text:'<i class="fa fa-print"></i>',
						},
					  ],
    deferRender: true,
    scrollY: 300,
    paging: false,
    scrollCollapse: true,
    scroller: true,
    scrollX: true,
    fixedColumns: {
      leftColumns: 1,
      rightColumns: 1
    },
    autoWidth: false,
});

$('#dt_residents tbody').on( 'click', 'tr', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }else {
        $('#dt_residents tbody tr').removeClass('selected');
        $(this).toggleClass('selected');
        $('#r_name').val($(this).data('residentname'));
        $('#r_id').val($(this).data('r_id'));
    }
});


var r_id = document.getElementById('r_id'),
  r_name = document.getElementById('r_name'),
  certtype = document.getElementById('certtype')
  mdl_r_id = document.getElementById('mdl_r_id'),
  myModalLabel = document.getElementById('myModalLabel'),
  mdl_cert = document.getElementById('mdl_cert'),
  mdl_certtype = document.getElementById('mdl_certtype'),
  btn_confirmcert = document.getElementById('btn_confirmcert');
  password = document.getElementById('password');

var $content = '';

var mdl_body = document.getElementsByClassName('modal-body');

btn_confirmcert.onclick = function(){
  // var certtype = $('#certtype').val();
var mdl_content = document.getElementById('mdl_content');
  if(r_id.value.length != 0){

    switch(certtype.value) {
    case "SPES":
      $('#modal_confirm').modal({show: true});
        mdl_r_id.value = r_id.value;
        mdl_certtype.innerHTML = certtype.value;
        myModalLabel.innerHTML = r_name.value;
        mdl_cert.innerHTML = "Certificate of Indigent  - SPES";
        $content += '<label class="control-label"> Parents Name</label>';
        $content += '<input type="text" id="mdl_r_parents" name="mdl_r_parents" class="form-control">';
        $content += '<label class="control-label"> Work</label>';
        $content += '<input type="text" id="mdl_work" name="mdl_work" class="form-control">';
        $content += '<label class="control-label"> Monthly Salary</label>';
        $content += '<input type="text" id="mdl_msalary" name="mdl_msalary" class="form-control currency">';
        mdl_content.innerHTML = $content;
        // console.log('SPES');
        break;

        case "EDUCASSIST":
          $('#modal_confirm').modal({show: true});
            mdl_r_id.value = r_id.value;
            mdl_certtype.innerHTML = certtype.value;
            myModalLabel.innerHTML = r_name.value;
            mdl_cert.innerHTML = "Certificate of Indigent  - Educational Assistance";
            $content += '<label class="control-label"> Parents Name</label>';
            $content += '<input type="text" id="mdl_r_parents" name="mdl_r_parents" class="form-control">';
            $content += '<label class="control-label"> Work</label>';
            $content += '<input type="text" id="mdl_work" name="mdl_work" class="form-control">';
            $content += '<label class="control-label"> Monthly Salary</label>';
            $content += '<input type="text" id="mdl_msalary" name="mdl_msalary" class="form-control currency">';
            mdl_content.innerHTML = $content;
            // console.log('SPES');
            break;

    case "BURIAL":
      $('#modal_confirm').modal({show: true});
        mdl_r_id.value = r_id.value;
        mdl_certtype.innerHTML = certtype.value;
        myModalLabel.innerHTML = r_name.value;
        mdl_cert.innerHTML = "Certificate of Indigent  - for Burial";
        $content += '<label class="control-label"> Requested by:</label>';
        $content += '<input type="text" id="mdl_reqby" name="mdl_reqby" class="form-control">';
        $content += '<label class="control-label"> Date of death</label>';
        $content += '<input type="text" id="mdl_deathdate" name="mdl_deathdate" class="form-control">';
        mdl_content.innerHTML = $content;
        break;

        case "FINANCIAL":
          $('#modal_confirm').modal({show: true});
            mdl_r_id.value = r_id.value;
            mdl_certtype.innerHTML = certtype.value;
            myModalLabel.innerHTML = r_name.value;
            mdl_cert.innerHTML = "Certificate of Indigent  - for FINANCIAL ASSISTANCE";
            $content += '<label class="control-label"> Requested by:</label>';
            $content += '<input type="text" id="mdl_reqby" name="mdl_reqby" class="form-control">';
            mdl_content.innerHTML = $content;
            break;

            case "MEDICAL":
              $('#modal_confirm').modal({show: true});
                mdl_r_id.value = r_id.value;
                mdl_certtype.innerHTML = certtype.value;
                myModalLabel.innerHTML = r_name.value;
                mdl_cert.innerHTML = "Certificate of Indigent  - for MEDICAL ASSISTANCE";
                $content += '<label class="control-label"> Requested by:</label>';
                $content += '<input type="text" id="mdl_reqby" name="mdl_reqby" class="form-control">';
                mdl_content.innerHTML = $content;
                break;
    case "ITR":
      $('#modal_confirm').modal({show: true});
        mdl_r_id.value = r_id.value;
        mdl_certtype.innerHTML = certtype.value;
        myModalLabel.innerHTML = r_name.value;
        mdl_cert.innerHTML = "Certificate of Indigent  - for ITR";
        // console.log('ITR');
        $content += '<label class="control-label"> Parents Name</label>';
        $content += '<input type="text" id="mdl_r_parents" name="mdl_r_parents" class="form-control">';
        $content += '<label class="control-label"> Work</label>';
        $content += '<input type="text" id="mdl_work" name="mdl_work" class="form-control">';
        $content += '<label class="control-label"> Monthly Salary</label>';
        $content += '<input type="text" id="mdl_msalary" name="mdl_msalary" class="form-control currency">';
        mdl_content.innerHTML = $content;
        break;

    case "PWD":
    $('#modal_confirm').modal({show: true});
      mdl_r_id.value = r_id.value;
      mdl_certtype.innerHTML = certtype.value;
      myModalLabel.innerHTML = r_name.value;
      mdl_cert.innerHTML = "PWD Certification";
      $content += '<label class="control-label"> Disability Type</label>';
      $content += '<input type="text" id="mdl_r_disability" name="mdl_r_disability" class="form-control">';
      mdl_content.innerHTML = $content;
    break;

    case "SP":
    $('#modal_confirm').modal({show: true});
      mdl_r_id.value = r_id.value;
      mdl_certtype.innerHTML = certtype.value;
      myModalLabel.innerHTML = r_name.value;
      mdl_cert.innerHTML = "SOLO PARENT";
      $content += '<label class="control-label"> Dependents</label>';
      $content += '<input type="text" id="mdl_r_dependents" name="mdl_r_dependents" class="form-control">';
      mdl_content.innerHTML = $content;
    break;

    case "RESIDENCY":
    $('#modal_confirm').modal({show: true});
      mdl_r_id.value = r_id.value;
      mdl_certtype.innerHTML = certtype.value;
      myModalLabel.innerHTML = r_name.value;
      mdl_cert.innerHTML = "SOLO PARENT";
      $content += '<label class="control-label"> Since <small>(Month, Year)</small></label>';
      $content += '<input type="text" id="mdl_reside_since" name="mdl_reside_since" class="form-control">';
      mdl_content.innerHTML = $content;
    break;

    case "CLEARANCE":
        // check if has blotter report
        var array = {
          r_id : r_id.value
        };

        // var isPasswordNeeded = 0;

        postAjax(base_url + 'resident/ajax_check_blotter/', array,
           function(data) {
             if (data.status == "yes") {
               $('#modal_confirm').modal({show: true});
                 mdl_r_id.value = r_id.value;
                 mdl_certtype.innerHTML = certtype.value;
                 myModalLabel.innerHTML = r_name.value;
                 mdl_cert.innerHTML = "BARANGAY CLEARANCE";
                 password.innerHTML = "<label class='form-label'> Brgy. Captain Password</label><input  type='hidden' id='isPasswordNeeded' name='isPasswordNeeded' value='1'><input type='password' class='form-control nontextransform' id='brgycaptainpassword' name='brgycaptainpassword'>";
             } else {
               $('#modal_confirm').modal({show: true});
                 mdl_r_id.value = r_id.value;
                 mdl_certtype.innerHTML = certtype.value;
                 myModalLabel.innerHTML = r_name.value;
                 mdl_cert.innerHTML = "BARANGAY CLEARANCE";
                 password.innerHTML = "<input type='hidden' id='isPasswordNeeded' name='isPasswordNeeded' value='0'>";
             }
           }
         );
          break;

    default:
        $('#modal_confirm').modal({show: false});
        new PNotify({
            title: 'Error',
            text: 'Please certificate..',
            type: 'danger',
            styling: 'bootstrap3'
        });
    }

  }else{
    $('.alert-warning .glyphicon-remove').trigger("click");
    new PNotify({
        title: 'Error',
        text: 'Please choose resident',
        type: 'danger',
        styling: 'bootstrap3'
    });
  }
}

$("#mdlbtn_close").on("click", function () {
  $('#mdl_content').empty();
  $('#password').empty();
  $content = '';
});

$('#mdl_summoninfo').on('shown.bs.modal', function () {

});


var mdlbtn_printcert = document.getElementById('mdlbtn_printcert');
mdlbtn_printcert.onclick = function(e){
  // var data = {
  //   isPasswordNeeded : isPasswordNeeded.value
  // };
  postAjax(base_url + 'resident/update_resident',
     $('#mdlfrm_printcert').serialize(),
     function(data) {
       $('.alert-info .glyphicon-remove').trigger("click");
       $('.alert-warning .glyphicon-remove').trigger("click");
       $('.alert-success .glyphicon-remove').trigger("click");
       if (data.status == "yes") {
         notify('Success!', data.content , 'success', 5000);
         $('#mdl_content').empty();
         $('#password').empty();
         $content = '';
         $('#modal_confirm').modal('hide');
         var win = window.open(base_url+"resident/printcert/"+r_id.value+"/"+certtype.value, '_blank');
         win.focus();
       } else {
         notify('Failed!', data.content, '', 9999);
       }
     }
   );
}

var btn_flter_resident = document.getElementById('btn_flter_resident');



  btn_flter_resident.onclick = function(e){

    var  $ftr_agefrom = $('#ftr_agefrom').val(),
         $ftr_ageto = $('#ftr_ageto').val(),
         $ftr_name = $('#ftr_name').val(),
         name = 'ALL',
         from = 'ALL',
         to = 'ALL';
    if( $ftr_agefrom.length != 0 ){
          from = $ftr_agefrom;
    }else{
          from ='ALL';
    }

    if($ftr_ageto.length != 0 ){
          to = $ftr_ageto;
    }else{
          to = 'ALL';
    }

    if($ftr_name.length != 0 ){
          name = $ftr_name;
    }else{
          name = 'ALL';
    }

    var ftr_data = {
      ftr_nametype : $('#ftr_nametype').val(),
      ftr_name : name,
      ftr_senior : $('#ftr_senior').val(),
      ftr_monthlyincome : $('#ftr_monthlyincome').val(),
      ftr_highiesteduc : $('#ftr_highiesteduc').val(),
      ftr_voter : $('#ftr_voter').val(),
      ftr_purok : $('#ftr_purok').val(),
      ftr_gender : $('#ftr_gender').val(),
      ftr_agefrom : from,
      ftr_ageto : to,
      ftr_civilstatus : $('#ftr_civilstatus').val(),
      ftr_employed : $('#ftr_employed').val(),
      ftr_osy : $('#ftr_osy').val(),
      ftr_renting : $('#ftr_renting').val(),
    };
  // $('#btn_flter_resident').on('click', function(){
  //
  // });
  // $('#dt_residents').empty();

  $("#dt_residents").dataTable().fnDestroy();
  $('#dt_residents').DataTable({
  "ajax" : {
    "url": base_url + "resident/ajax_get_residents/",
    "type": 'POST',
    "data": ftr_data,
    "dataSrc": ""
  },
  "columns": [
    {"data":"residentname"},
    { "data": function(data, type, row, meta) {
          if(data.r_gender == 'M'){
            return 'MALE';
          }else if(data.r_gender == 'F'){
            return 'FEMALE';
          }else{
            return 'N/A';
          }
    }},
    {"data":"ageInYears"},
    {"data":"r_purok"},
    {"data":"r_street"},
    {"data":"r_housenum"},
    { "data": function(data, type, row, meta) {
            return '<a target="_window" href="'+base_url+'resident/info/'+data.r_id+'" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>';
    }}
  ],
  fnCreatedRow: function(nRow, data, iDisplayIndex) {
     $(nRow).attr('data-residentname', data.residentname);
     $(nRow).attr('data-r_id', data.r_id);
   },
   dom: "Bfrtip",
          buttons: [

          {
            extend: "excel",
            className: "btn-sm"
          },
          {
            extend: "pdfHtml5",
            className: "btn-sm"
          },
          {
            extend: "print",
            className: "btn-sm"
          },
          ],
  deferRender: true,
  scrollY: 300,
  paging: false,
  scrollCollapse: true,
  scroller: true,
  scrollX: true,
  fixedColumns: {
    leftColumns: 1,
    rightColumns: 1
  },
  autoWidth: false,
  });
}
