<?php require_once 'add_query_reserve.php'?>
<!DOCTYPE html>
<html lang ="en">
<head>
<title>HILLTOP POOL RESORT & HOTEL</title>
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
		<meta charset = "utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body style="background-color:#b3cccc ">
    <div class ="container p-3 mb-2 bg-light text-dark"> 
        <div class="p-3 mb-2 bg-secondary text-white">
             <strong><center><h3 style="font-family:Garamond;">MAKE A RESERVATION</h3></strong>
        </div>
        <?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
        <hr>
       <br />
       <div class="text-center">
            <img src="photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px" class="rounded" alt="Rooms">
        </div>
        <hr>
        <form method = "POST" enctype = "multipart/form-data" class="needs-validation" novalidate>
				<div class ="row">		
          <div class="col">
             <div class = "form-group">
							<label for="validationCustom01">Firstname<span class="asteriskField text-danger">*</span></label>
							<input type = "text" class = "form-control" id="validationCustom01" name = "firstname" required = "required" />
              <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please provide Firstname
            </div>
						</div>
         </div>  
          <div class="col">
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" id="validationCustom02" name = "middlename"/>
						</div>
        </div>
          <div class="col">
						<div class = "form-group">
							<label for="validationCustom03">Lastname<span class="asteriskField text-danger">*</span></label>
							<input type = "text" class = "form-control"  id="validationCustom03"name = "lastname" required = "required" />
              <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please provide Lastname
            </div>
						</div>
        </div>
</div>
<div class="row">
<div class="col">
						<div class = "form-group">
							<label for="validationCustom04">Address<span class="asteriskField text-danger">*</span></label>
							<input type = "text" class = "form-control" id="validationCustom04" name = "address" placeholder="City" required = "required" />
              <div class="invalid-feedback">
              Please provide a valid Address
            </div>
						</div>
</div>
<div class="col">
						<div class = "form-group">
							<label for="validationCustomUsername">Email<span class="asteriskField text-danger">*</span></label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
							<input type = "text" class = "form-control" name = "email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required = "required" />
              <div class="invalid-feedback">
                Please provide a valid username
              </div>
						</div>
  </div>
</div>
<div class="col">
            <div class = "form-group">
							<label for="validationCustom05">Contact No<span class="asteriskField text-danger">*</span></label>
              <input type="tel" name="contactno"  id="validationCustom05" onKeyPress="if(this.value.length==10) return false;" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" class="form-control" value="" maxlength="11" required="required">
              <div class="invalid-feedback">
              Please provide a Contact Number
            </div>
						</div>
</div>
</div>
<div class="row">
  <div class ="col">
						<div class = "form-group">
							<label for="validationCustom04">Check in<span class="asteriskField text-danger">*</span></label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
              <div class="invalid-feedback">
              Please provide a date
            </div>
						</div>
</div>
<div class ="col">
						<div class = "form-group" >
						<label for="validationCustom06">Number of Guest<span class="asteriskField text-danger">*</span></label>
						<input type = "number" min = "0" max = "24" name = "guest_total" class = "form-control" id="validationCustom06" required = "required"/>
            <div class="invalid-feedback">
              Please provide a valid no. of Guest
            </div>
					</div>
</div>
          <div class ="col">
					<div class = "form-group">
						<label for="validationCustom06">Day<span class="asteriskField text-danger">*</span></label>
						<input type = "number" value = "<?php echo $row['days']?>" min = "0" max = "12" name = "day" class = "form-control" id="validationCustom07" required = "required"/>
            <div class="invalid-feedback">
              Please provide a valid no. of days
            </div>
					</div>
        </div>
        <div class="col">
        <!----Radio Option----->
             <label for="validationCustom07">Payment Method<span class="asteriskField text-danger">*</span></label>
                        <div class ="p-t-10" > 
                            <input type="radio" name="payment_method" value="Cash"/>
                            <img src="./favicon_io/cash-icons.png" style="width: 60px;"><label class="radio-container m-r-45">Cash</label>
                                <br>
                            <input type="radio" name="payment_method" value="Paymaya" title="Required to downpayment the half of the bill" />

                            <img src="./favicon_io/paymaya-icon.png" style="width: 60px;"><label class="radio-container m-r-45">Paymaya</img></label>
                                <br>
                            <input type="radio" name="payment_method" value="Gcash" title="Required to downpayment the half of the bill"/>

                            <img src="./favicon_io/gcash-icons.png" style="width: 60px;"><label class="radio-container m-r-45">Gcash</label>
                                <br>
                        </div>
                    </div>
</div>
<!-------------Discount -------->
<div class = "row">
<div class="col">
                <label class="Child float-center font-weight-bold">Discounts </label>
                <select class="form-control" id="discount" name="discount"onchange = "ShowHideDiv()" required = "required">
                         <option value="" disabled selected>Select your option</option>
                         <option value="None" >None</option>
                         <option value="Senior/PWD" >Senior/PWD</option>
                         <option value="PROMOVOUCHER" >Promo/Voucher</option>
                  </select>
                     <div id="spwddiscounts"  style="display: none" >
                        <div class="row">
                                <div class="col">
                                  <label label class="Child float-left font-weight-bold">Senior/PWD ID No.
                                        <span class="asteriskField text-danger">*
                                        </span></label>
                                          <input type="tel" onKeyPress="if(this.value.length==14) return false;"  maxlength="14" name ="IDno" class="form-control" placeholder="Enter your Senior/PWD ID no.">
                                          <label style="color:red; text-align:center;" >Please present your ID's upon arriving in hotel <label style="color:grey">(discount will only apply in the Price of Room)</label></label>
                                        </div>
                        </div>
                     </div>
</div>
<div id="promovoucher"  style="display: none" >
                       <div class="row">
                                <div class="col">
                                  <label class="Child float-left font-weight-bold ">Promo Code
                                  <span class="asteriskField text-danger">*
                                  </span></label>
                                  <input type="tel" onKeyPress="if(this.value.length==6) return false;"  maxlength="6" name ="PVcode"class="form-control" placeholder="Enter your Promo Code">
                                </div>
                     </div>
                     </div>
                     <script>

                         /*Discounts */
                        function ShowHideDiv() {
                            var discount = document.getElementById("discount");
                            var spwddiscounts = document.getElementById("spwddiscounts");
                            spwddiscounts.style.display = discount.value == "Senior/PWD" ? "block" : "none";
                            var promovoucher = document.getElementById("promovoucher");
                            promovoucher.style.display = discount.value == "PROMOVOUCHER" ? "block" : "none";
                        }

                    </script>
</div> 

<div class="row">
<div class="col">
<div class="form-group">
                      </br>
  <textarea class="form-control" placeholder="Additional Charges/Comment's" rows="3" name="Additional"></textarea>
</div>
</div>
</div>
        <div class="form-group text-center">
          <div class="form-check text-center">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Agree to <a href="TermOfUse.php">terms and conditions</a>
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="form-group text-center">
          <div class="form-check text-center">
        <div class="g-recaptcha" data-sitekey="6Lfms9YcAAAAABq-wK_j0UniucPpcjrY2CF4k-zY"></div>
        </div>
        </div>
        <div class="card-footer  text-center bg-secondary text-light">
          <button class="btn btn-info" name = "add_guest" type="submit">Submit form</button>
          
         </div>
         </form>
        </div>
    </div>
   
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
      <script>
        function reCaptcha($recaptcha){
  $secret = "6Lfms9YcAAAAAG9V_aft8XWta_vEMvVRgXAZBV_9";
  $ip = $_SERVER['REMOTE_ADDR'];

  $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
  $url = "https://www.google.com/recaptcha/api/siteverify";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
  $data = curl_exec($ch);
  curl_close($ch);

  return json_decode($data, true);
}
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<!-- I Agree Checkbox by https://www.TermsFeed.com -->
<script type="text/javascript" src="//www.termsfeed.com/public/i-agree-checkbox/releases/1.0.0/i-agree-checkbox.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
i_agree_checkbox.run({"palette":"dark","terms_and_conditions_url":"","privacy_policy_url":"","privacy_policy_text_container_id":"#user_i_agree_checkbox_privacy_policy_text_container","terms_and_conditions_text_container_id":"#user_i_agree_checkbox_terms_and_conditions_text_container","warning_dialog_text":"Warning. You must accept our terms.","consent_to_agreements":["privacy_policy","terms_and_conditions"],"agreements_display_type":"full_text","checkbox_text_area_id":"#i_agree_checkbox_insertable_area","checkbox_text":"By clicking submit you agree to our %PrivacyPolicy% and %TermsAndConditions%.","submit_button_id":"#submit_button","agree_button_text":"OK","close_button_text":"Cancel"});
});
</script>
<noscript>I Agree Checkbox by <a href="https://www.TermsFeed.com/i-agree-checkbox/" rel="nofollow noopener">TermsFeed.com</a></noscript>
<!-- End I Agree Checkbox --> 
</body>
</html>
