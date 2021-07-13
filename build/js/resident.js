$('#frm_resident').on('submit',function(){
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "resident/ajax_save/",
    		cache: false,
    		data: $('#frm_resident').serialize(),
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
                        $('#frm_resident')[0].reset();
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


$('#frm_updateinfo').on('submit',function(){
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "resident/ajax_update/",
    		cache: false,
    		data: $('#frm_updateinfo').serialize(),
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

var r_bdate = document.getElementById('r_bdate');
var age = document.getElementById('age');
var present_date = new Date();
// var r_bdate = document.getElementById('r_bdate');
r_bdate.focusout = function(){
  age.value = calculateAge(r_bdate.value, present_date);
}

function calculateAge (bdate, present_date) {
    birthDate = new Date(bdate);
    otherDate = new Date(present_date);

    var years = (otherDate.getFullYear() - birthDate.getFullYear());

    if (otherDate.getMonth() < birthDate.getMonth() ||
        otherDate.getMonth() == birthDate.getMonth() && otherDate.getDate() < birthDate.getDate()) {
        years--;
    }
    return years;
}
