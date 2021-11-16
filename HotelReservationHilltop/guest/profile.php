<?php 
require_once("../includes/initialize.php");

  
$guest = New Guest();
$res = $guest->single_guest($_SESSION['guest_id']);


?>

 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Account 
        <small>Account Details</small>
      </h1> 
    </section>

  <form class="form-horizontal" action="<?php echo WEB_ROOT; ?>guest/update.php" method="post" onsubmit="return personalInfo()" name="personal" >
    <!-- Main content -->
    <section class="content">

      <div class="row">
 
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
    <br/>
       
            <!-- /.box-header -->
            <div class="box-body no-padding">
 
              <div class="table-responsive mailbox-messages">
     
                <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "name">FIRST NAME:</label>

                        <div class="col-md-8">
                          <input name="" type="hidden">
                          <input name="name" type="text"  value="<?php echo $res->firstname; ?>"class="form-control input-sm" id="name" />
                        </div>
                      </div>
                    </div>  

                      <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "last">LAST NAME:</label>

                        <div class="col-md-8">
                          <input name="last" type="text" value="<?php echo $res->lastname; ?>" class="form-control input-sm" id="last" />
                        </div>
                      </div>
                    </div>

                

                     <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "city">Middle Name:</label>

                        <div class="col-md-8">
                          <input name="midllename" type="text" value="<?php echo $res->middlename; ?>" class="form-control input-sm" id="middlename" />
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "address">ADDRESS:</label>

                        <div class="col-md-8">
                          <input name="address" type="text" value="<?php echo $res->address; ?>" class="form-control input-sm" id="address" />
                        </div>
                      </div>
                    </div> 

                     <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "phone">PHONE:</label>

                        <div class="col-md-8">
                          <input name="phone" type="text" value="<?php echo $res->contactno; ?>" class="form-control input-sm" id="phone" />
                        </div>
                      </div>
                     </div>

                    
                     <!--  <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "username">USERNAME:</label>

                        <div class="col-md-8">
                          <input name="username" type="text" value="<?php echo $res->G_UNAME; ?>" class="form-control input-sm" id="username" />
                        </div>
                      </div>
                     </div>
            
                    <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for=
                        "password">PASSWORD:</label>

                        <div class="col-md-8">
                          <input name="pass" type="password" class="form-control input-sm" id="password" />
                        </div>
                      </div>
                    </div> -->
 
            </div>  
     
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding"> 
                <div class="pull-right"> 
                  <div class="btn-group">
                   <input name="submit" type="submit" value="Save"  class="btn btn-primary" onclick="return personalInfo();"/>
                     </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box --> 
    </section>
    <!-- /.content -->
  </form>
  <script type="text/javascript">
$(document).ready( function() {

    $('.gallery-item').hover( function() {
        $(this).find('.img-title').fadeIn(400);
    }, function() {
        $(this).find('.img-title').fadeOut(100);
    });
  
});



$('.dbirth').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/1960', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });



  //Validates Personal Info
        function personalInfo(){
        var a=document.forms["personal"]["name"].value;
        var b=document.forms["personal"]["middlename"].value;
        var b=document.forms["personal"]["last"].value;
        var c=document.forms["personal"]["city"].value;
        var d=document.forms["personal"]["address"].value;
        var g=document.forms["personal"]["phone"].value;
        var h=document.forms["personal"]["username"].value;
        var i=document.forms["personal"]["password"].value;


        // var atpos=f.indexOf("@");
        // var dotpos=f.lastIndexOf(".");
        // if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
        //   {
        //   alert("Not a valid e-mail address");
        //   return false;
        //   }
        // if( f != g ) {
        // alert("email does not match");
        //   return false;
        // }
         if (document.personal.condition.checked == false)
        {
        alert ('pls. agree the term and condition of this hotel');
        return false;
        }
        if ((a=="Firstname" || a=="") || (a=="middlename" || a=="") ||(b=="lastname" || b=="") || (c=="City" || c=="") || (d=="address" || d=="") || (g=="Phone" || g=="")|| (h=="username" || h=="") || (j=="password" || j==""))
          {
          alert("all field are required!");
          return false;
          }


   
        
        // else
        // {
        // return true;
        // }

        }
</script>