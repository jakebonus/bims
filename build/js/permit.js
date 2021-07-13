$('#frm_permit').on('submit',function(){
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "permit/ajax_save/",
    		cache: false,
    		data: $('#frm_permit').serialize(),
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
              dt_business.ajax.reload();
              $('#frm_permit')[0].reset()
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


var dt_business =   $('#dt_business').DataTable({
      "ajax": {
        "url": base_url + "permit/ajax_get_business/",
        "dataSrc": ""
      },
      createdRow: function( row, data, dataIndex ) {
			     $(row).find('td').attr('data-id', data.id);
			     $(row).find('td').attr('data-permtype', data.permtype);
			     $(row).find('td').attr('data-businessname', data.businessname);
			     $(row).find('td').attr('data-operator', data.operator);
			     $(row).find('td').attr('data-bldgno', data.bldgno);
			     $(row).find('td').attr('data-str', data.str);
			     $(row).find('td').attr('data-purok', data.purok);
			     $(row).find('td').attr('data-opaddress', data.opaddress);
			     $(row).find('td').attr('data-activity1', data.activity1);
			     $(row).find('td').attr('data-activity2', data.activity2);
			     $(row).find('td').attr('data-activity3', data.activity3);
		  },
      "columns": [
        {"data":"businessname"},
        { "data": function(data, type, row, meta) {
                return data.permtype+' <small>('+data.lastrelease+')</small>';
        }},
        { "data": function(data, type, row, meta) {
                return '<a target="_windows" href="'+base_url+"/permit/cert/"+data.id+'"><i class="fa fa-print"></i></a>';
        }}
      ],
      // fnCreatedRow: function(nRow, data, iDisplayIndex) {
      //    $(nRow).attr('data-residentname', data.residentname);
      //    $(nRow).attr('data-r_id', data.r_id);
      //  },
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
      scrollX: 50,
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


$('#dt_business tbody').on( 'click', 'td', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        $('#frm_permit #id').val('');
        $('#frm_permit #businessname').val('');
        $('#frm_permit #permtype').val('');
        $('#frm_permit #operator').val('');
        $('#frm_permit #bldgno').val('');
        $('#frm_permit #str').val('');
        $('#frm_permit #purok').val('');
        $('#frm_permit #opaddress').val('');
        $('#frm_permit #activity1').val('');
        $('#frm_permit #activity2').val('');
        $('#frm_permit #activity3').val('');
    }else {
        $('#dt_business tbody tr').removeClass('selected');
        $(this).toggleClass('selected');

        $('#frm_permit #id').val($(this).data('id'));
        $('#frm_permit #businessname').val($(this).data('businessname'));
        $('#frm_permit #permtype').val($(this).data('permtype'));
        $('#frm_permit #operator').val($(this).data('operator'));
        $('#frm_permit #bldgno').val($(this).data('bldgno'));
        $('#frm_permit #str').val($(this).data('str'));
        $('#frm_permit #purok').val($(this).data('purok'));
        $('#frm_permit #opaddress').val($(this).data('opaddress'));
        $('#frm_permit #activity1').val($(this).data('activity1'));
        $('#frm_permit #activity2').val($(this).data('activity2'));
        $('#frm_permit #activity3').val($(this).data('activity3'));

    }
});
