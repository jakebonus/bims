      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
      var gdate  = "<?php echo date("Y-m-d")?>";
    </script>

    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/nprogress/nprogress.min.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/easyautocomplete/jquery.easy-autocomplete.min.js'); ?>"></script>

    <?php if($this->uri->segment(1) == "encode" || $this->uri->segment(1) == "admin") { ?>
    <script src="<?php echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <?php } ?>

    <script src="<?php echo base_url('vendors/jquery.tagsinput/dist/jquery.tagsinput-revisited.min.js'); ?>"></script>

    <!-- <?php //if($this->uri->segment(1) == "inventory" || $this->uri->segment(1) == "report" || $this->uri->segment(1) == "admin" || $this->uri->segment(1) == "maintenance") { ?> -->
    <!-- <script src="<?php //echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script> -->
    <script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <!-- <?php //} ?> -->

    <!-- dataTables -->
    <!-- <?php // if($this->uri->segment(1) != "encode" && $this->uri->segment(2) != "encode") { ?> -->
    <script src="<?php echo base_url('vendors/pdatatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('build/js/custom.js?v='.VERSION); ?>"></script>
    <script src="<?php echo base_url('build/js/globalfunction.js?v='.VERSION); ?>"></script>

    <?php if($this->uri->segment(2) == "residentslist"){ ?>
      <script src="<?php echo base_url('build/js/webcam.min.js?v='.VERSION); ?>"></script>
      <script src="<?php echo base_url('build/js/capturefunction.js?v='.VERSION); ?>"></script>
		<!--script src="<?php // echo base_url('build/js/_capturefunction.js?v='.VERSION); ?>"></script-->
      <script src="<?php echo base_url('build/js/residentlist.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(1) == "resident" && $this->uri->segment(2) == ""  || $this->uri->segment(2) == "info") { ?>
      <script src="<?php echo base_url('build/js/resident.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(1) == "permit" && ($this->uri->segment(2) == "" || $this->uri->segment(2) == "encode")) { ?>
      <script src="<?php echo base_url('build/js/permit.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(1) == "permit" && $this->uri->segment(2) == "list") { ?>
      <script src="<?php echo base_url('build/js/businesslist.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(1) == "account" && $this->uri->segment(2) == "profile") { ?>
      <script src="<?php echo base_url('build/js/profile.js?v='.VERSION); ?>"></script>
    <?php } ?>


    <?php if($this->uri->segment(1) == "blotter"){ ?>

        <!-- <script src="<?php // echo base_url('vendors/bootstrap-wysihtml5-master/dist/bootstrap-wysihtml5-0.0.2.min.js'); ?>"></script> -->
        <!-- <script src="<?php //  echo base_url('vendors/bootstrap-wysihtml5-master/lib/js/wysihtml5-0.3.0.min.js'); ?>"></script> -->
        <!-- <script src="<?php //  echo base_url('vendors/bootstrap-wysihtml5-master/lib/js/prettify.js'); ?>"></script> -->
        <!-- <script src="<?php //  echo base_url('vendors/bootstrap-wysihtml5-master/src/bootstrap-wysihtml5.js'); ?>"></script> -->
        <script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js'); ?>"></script>
        <script src="<?php echo base_url('build/js/blotter.js?v='.VERSION); ?>"></script>
    <?php } ?>


    <script type="text/javascript">
    $('.currency').inputmask("numeric", {
      radixPoint: ".",
      groupSeparator: ",",
      digits: 2,
      autoGroup: true,
      prefix: '₱ ', //Space after $, this will not truncate the first character.
      rightAlign: false,
      oncleared: function () { self.Value(''); }
  });

  $('.time').inputmask("hh:mm", {
    mask: "h:s t\\m",
    placeholder: "hh:mm xm - hh:mm xm",
    alias: "datetime",
    hourFormat: "12"
    }
 );

 $(".numberonly").keydown(function (e) {
          // Allow: backspace, delete, tab, escape, enter and .
          if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
               // Allow: Ctrl+A, Command+A
              (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
               // Allow: home, end, left, right, down, up
              (e.keyCode >= 35 && e.keyCode <= 40)) {
                   // let it happen, don't do anything
                   return;
          }
          // Ensure that it is a number and stop the keypress
          if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
              e.preventDefault();
          }
      });

    function printDiv(printthis) {
     var printContents = document.getElementById('printthis').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;


     // $('#frm_resident').on('submit',function(){
    $.ajax({
    		type: "POST",
    		dataType: "json",
    		url: base_url + "account/ajax_save_printed/",
    		cache: false,
    		data: $('#frm_printeddetails').serialize(),
    		//  beforeSend: function(){
    		// 	new PNotify({
    		// 		title: 'Please wait...',
        //             text: 'Please wait',
        //             type: 'info',
        //             styling: 'bootstrap3'
        //         });
    		// },
    		success: function(data){
    			// $('.alert-info .glyphicon-remove').trigger("click");
    			// $('.alert-success .glyphicon-remove').trigger("click");
    			// if(data.status == 'yes'){
    			// 	 	new PNotify({
          //                   title: 'Success',
          //                   text: data.content,
          //                   type: 'success',
          //                   styling: 'bootstrap3'
          //               });
          //               $('#frm_resident')[0].reset();
    			// }else{
    			// 	new PNotify({
          //                   title: 'Error',
          //                   text: data.content,
          //                   type: 'danger',
          //                   styling: 'bootstrap3'
          //               });
    			// }
    		}
    	});
    	return false;
  // });

   }
    </script>
  </body>
</html>
