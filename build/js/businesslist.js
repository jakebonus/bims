var btn_search = $('#btn_search'),
    ftr_releasedatefrom = $('#ftr_releasedatefrom'),
    ftr_releasedateto = $('#ftr_releasedateto'),
    ftr_permittypes = $('#ftr_permittypes'),
    ftr_purok = $('#ftr_purok'),
    $dt_business = $('#dt_business');

var dt_business = $dt_business.DataTable({
    "ajax": {
      "url": base_url + "permit/ajax_get_business/",
      "dataSrc": ""
    },
    "columns": [
      {"data":"businessname"},
      { "data": function(data, type, row, meta) {
              return data.permtype+' <small>('+data.lastrelease+')</small>';
      }},
      {"data":"operator"},
      { "data": function(data, type, row, meta) {
              return data.bldgno+' '+data.str+' '+data.purok;
      }},
      { "data": function(data, type, row, meta) {
              return data.activity1+', '+data.activity2+', '+data.activity3;
      }},
      { "data": function(data, type, row, meta) {
              return '<a target="_windows" href="'+base_url+"/permit/cert/"+data.id+'"><i class="fa fa-print"></i></a>';
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

  $('#btn_search').on('click', function(){

    // $dt_business.dataTable().fnClearTable();
    // $dt_business.dataTable().fnDestroy();
    var ftr_data = {
      ftr_releasedatefrom : $('#ftr_releasedatefrom').val(),
      ftr_releasedateto : $('#ftr_releasedateto').val(),
      ftr_purok : $('#ftr_purok').val(),
      ftr_permittypes : $('#ftr_permittypes option:selected').val(),
    };

    var url = base_url + "permit/ajax_fltr_business/"
    filter_business(url,ftr_data);

});

function filter_business(url,ftr_data){
  $dt_business.dataTable().fnDestroy()
  $dt_business.DataTable({
  "ajax" : {
    "type": 'GET',
    "url": url,
    "data": ftr_data,
    "dataSrc": ""
  },
  "columns": [
    {"data":"businessname"},
    { "data": function(data, type, row, meta) {
            return data.permtype+' <small>('+data.lastrelease+')</small>';
    }},
    {"data":"operator"},
    { "data": function(data, type, row, meta) {
            return data.bldgno+' '+data.str+' '+data.purok;
    }},
    { "data": function(data, type, row, meta) {
            return data.activity1+', '+data.activity2+', '+data.activity3;
    }},
    { "data": function(data, type, row, meta) {
          return '<a target="_windows" href="'+base_url+"/permit/cert/"+data.id+'"><i class="fa fa-print"></i></a>';
		  }}
  ],
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
