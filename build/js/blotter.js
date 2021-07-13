var btn_saveasvictim = document.getElementById('btn_saveasvictim'),
    mdlbtn_savesched = document.getElementById('mdlbtn_savesched'),
    btn_saveasvictimaddress = document.getElementById('btn_saveasvictimaddress');

$('#b_report').wysiwyg();

btn_saveasvictimaddress.onclick = function(){
  $('#b_complainantaddress').val($('#b_victimsaddress').val());
}

btn_saveasvictim.onclick = function(){
  $('#b_complainant').val($('#b_victims').val());
}

var dt_blotter = $('#dt_blotter').DataTable({
    "ajax": {
      "url": base_url + "blotter/ajax_get_blotterlist/",
      "dataSrc": ""
    },
    "columns": [
      {"data":"b_accused"},
      {"data":"b_incidentdate"},
      {"data":"b_casesolve"},
      { "data": function(data, type, row, meta) {
        return '<div class="btn-group btn-group-sm">' +
                        '<a target="_window" href="'+base_url+'blotter/print/'+data.b_id+'/cfa" class="btn btn-default" type="button">CFA</a>' +
                        '<a target="_window" class="btn btn-default" type="button" data-toggle="modal" data-target="#mdl_summoninfo" onClick="showmodal(this)" data-b_id="'+data.b_id+'">Summon</a>' +
                        '<a target="_window" href="'+base_url+'blotter/print/'+data.b_id+'/blotter" class="btn btn-default" type="button">Blotter</a>' +
                      '</div>';

      }}
    ],
    fnCreatedRow: function(nRow, data, iDisplayIndex) {
       $(nRow).attr('data-b_id', data.b_id);
       $(nRow).attr('data-b_casefor', data.b_casefor);
       $(nRow).attr('data-b_caseno', data.b_caseno);
       $(nRow).attr('data-b_accused', data.b_accused);
       $(nRow).attr('data-b_accusedaddress', data.b_accusedaddress);
       $(nRow).attr('data-b_complainant', data.b_complainant);
       $(nRow).attr('data-b_complainantaddress', data.b_complainantaddress);
       $(nRow).attr('data-b_victims', data.b_victims);
       $(nRow).attr('data-b_victimsaddress', data.b_victimsaddress);
       $(nRow).attr('data-b_report', data.b_report);
       $(nRow).attr('data-b_classification', data.b_classification);
       $(nRow).attr('data-b_incidentdate', data.b_incidentdate);
       $(nRow).attr('data-b_incidenttime', data.b_incidenttime);
       $(nRow).attr('data-b_incidentplace', data.b_incidentplace);
       $(nRow).attr('data-b_blotterdate', data.b_blotterdate);
       $(nRow).attr('data-b_blottertime', data.b_blottertime);
       $(nRow).attr('data-b_casesolve', data.b_casesolve);
       $(nRow).attr('data-b_detective', data.b_detective);
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
    scrollY: 400,
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


$('#dt_blotter tbody').on( 'click', 'tr', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        $('#frm_blotter #b_id').val('');
        $('#frm_blotter #b_accused').val('');
        $('#frm_blotter #b_caseno').val('');
        $('#frm_blotter #b_casefor').val('');
        $('#frm_blotter #b_accusedaddress').val('');
        $('#frm_blotter #b_complainant').val('');
        $('#frm_blotter #b_complainantaddress').val('');
        $('#frm_blotter #b_victims').val('');
        $('#frm_blotter #b_victimsaddress').val('');
        $('#frm_blotter #b_report').html('');
        $('#frm_blotter #b_classification').val('');
        $('#frm_blotter #b_incidentdate').val('');
        $('#frm_blotter #b_incidenttime').val('');
        $('#frm_blotter #b_incidentplace').val('');
        $('#frm_blotter #b_blotterdate').val('');
        $('#frm_blotter #b_blottertime').val('');
        $('#frm_blotter #b_casesolve').val('');
        $('#frm_blotter #b_detective').val('');
    }else {
        $('#dt_blotter tbody tr').removeClass('selected');
        $(this).toggleClass('selected');
        $('#frm_blotter #b_id').val($(this).data('b_id'));
        $('#frm_blotter #b_accused').val($(this).data('b_accused'));
        $('#frm_blotter #b_caseno').val($(this).data('b_caseno'));
        $('#frm_blotter #b_casefor').val($(this).data('b_casefor'));
        $('#frm_blotter #b_accusedaddress').val($(this).data('b_accusedaddress'));
        $('#frm_blotter #b_complainant').val($(this).data('b_complainant'));
        $('#frm_blotter #b_complainantaddress').val($(this).data('b_complainantaddress'));
        $('#frm_blotter #b_victims').val($(this).data('b_victims'));
        $('#frm_blotter #b_victimsaddress').val($(this).data('b_victimsaddress'));
        $('#frm_blotter #b_report').html($(this).data('b_report'));
        $('#frm_blotter #b_classification').val($(this).data('b_classification'));
        $('#frm_blotter #b_incidentdate').val($(this).data('b_incidentdate'));
        $('#frm_blotter #b_incidenttime').val($(this).data('b_incidenttime'));
        $('#frm_blotter #b_incidentplace').val($(this).data('b_incidentplace'));
        $('#frm_blotter #b_blotterdate').val($(this).data('b_blotterdate'));
        $('#frm_blotter #b_blottertime').val($(this).data('b_blottertime'));
        $('#frm_blotter #b_casesolve').val($(this).data('b_casesolve'));
        $('#frm_blotter #b_detective').val($(this).data('b_detective'));

    }
});

$('#frm_blotter').on('submit',function(){
    var arr = {
        a : $('#b_report').html(),
    };
    console.log($('#frm_blotter').serialize() +'&a='+$('#b_report').html());
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "blotter/ajax_save/",
    		cache: false,
    		data: $('#frm_blotter').serialize() +'&a='+$('#b_report').html(),
    		 beforeSend: function(){
    			new PNotify({
    				title: 'Please wait...',
                    text: 'Please wait',
                    type: 'info',
                    styling: 'bootstrap3'
                });
    		},
    		success: function(data){
    			$('.alert-info .glyphicon-remove').trigger("click");
    			$('.alert-success .glyphicon-remove').trigger("click");
    			if(data.status == 'yes'){
    				 	new PNotify({
                            title: 'Success',
                            text: data.content,
                            type: 'success',
                            styling: 'bootstrap3'
                        });
                dt_blotter.ajax.reload();
                $('#frm_blotter')[0].reset();
    			}else{
    				new PNotify({
                            title: 'Error',
                            text: data.content,
                            type: 'danger',
                            styling: 'bootstrap3'
                        });
    			}
    		}
    	});
    	return false;
  });


$('#b_classification').on('change', function(){
  if($('#b_classification').val() == 'OTHERS'){
    $('#txt_classiOthers').removeAttr('disabled','disabled');
  }else{
    $('#txt_classiOthers').attr('disabled','disabled');
  }
});



$('#frm_summoninfo').on('submit',function(){
  var b_id = $('#frm_summoninfo #mb_id').val();
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "blotter/ajax_save_sched/",
    		cache: false,
    		data: $('#frm_summoninfo').serialize(),
    		 beforeSend: function(){
    			new PNotify({
    				title: 'Please wait...',
                    text: 'Please wait',
                    type: 'info',
                    styling: 'bootstrap3'
                });
    		},
    		success: function(data){
    			$('.alert-info .glyphicon-remove').trigger("click");
    			$('.alert-success .glyphicon-remove').trigger("click");
    			if(data.status == 'yes'){
    				 	new PNotify({
                  title: 'Success',
                  text: data.content,
                  type: 'success',
                  styling: 'bootstrap3'
              });
              $('#frm_summoninfo')[0].reset();
              window.open(base_url+'blotter/print/'+b_id+'/summon');
              $('#mdl_summoninfo').modal('toggle');
    			}else{
    				new PNotify({
                title: 'Error',
                text: data.content,
                type: 'danger',
                styling: 'bootstrap3'
            });
    			}
    		}
    	});
    	return false;
  });

function showmodal(j){
  $('#mdl_summoninfo').on('shown.bs.modal', function () {
    $('#mb_id').val(j.dataset.b_id);
  });
}
