
 <div class="col-md-12 ">
  <div class="panel panel-default">
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="images/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
            <div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           <script>
              $(document).ready(function (e) {
	$("#register-form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "ajaxupload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{
				//$("#preview").fadeOut();
				$("#err").fadeOut();
			},
			success: function(data)
		    {
				if(data=='invalid')
				{
					// invalid file format.
					$("#err").html("Invalid File !").fadeIn();
				}
				else
				{
					// view uploaded file.
					$("#preview").html(data).fadeIn();
					$("#form")[0].reset();	
				}
		    },
		  	error: function(e) 
	    	{
				$("#err").html(e).fadeIn();
	    	} 	        
	   });
	}));
});
   
                
   </script>             
          
 <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script>            
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6"><span>
            <h4 style="color:#00b1b1;">Prasad Shankar Huddedar </h4></span>
              <span><p>Aspirant</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
             <form class="form-control">
    <div class="md-form form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname">
   </div>

   <div class="md-form form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname">
   </div>

   <div class="md-form form-group">
        <label for="d.o.b">Date of Birth</label>
        <input type="text" id="d.o.b">
   </div>

   <div class="md-form form-group">
        <label for="nation">Nationality</label>
        <input type="text" id="nation">
   </div>

   <div class="md-form form-group">
        <label for="religion">Religion</label>
        <input type="text" id="religion">
   </div>
             </form>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
      </div> </div></div>
