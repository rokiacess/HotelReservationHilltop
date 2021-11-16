 <?php 
//echo date_format(date_create($_POST['dbirth']), 'Y-m-d');

if(isset($_POST['submit'])){
$guest = New Guest();
$guest->firstname          = $_POST['name']; 
$guest->middlename          = $_POST['middlename'];     
$guest->lastname          = $_POST['last']; 
$guest->address        = $_POST['address'] ;       
$guest->Contactus          = $_POST['phone'];           
// $guest->G_UNAME          = $_POST['username'];    
// $guest->G_PASS           = sha1($_POST['pass']);    
$guest->update($_SESSION['guest_id']); 

?>
<script type="text/javascript">
	window.location = '<?php echo WEB_ROOT; ?>Home.php';
</script>

<?php  } 

if(isset($_POST['photo'])){
	if (!isset($_FILES['photo'])) {
			message("No Image Selected!", "error");
			 redirect(WEB_ROOT."Home.php");
		}else{
			$file=$_FILES['photo'];
			$image= addslashes(file_get_contents($_FILES['photo']));
			$image_name= addslashes($_FILES['photo']['name']);
			$image_size= getimagesize($_FILES['image']);
			
			if ($image_size==FALSE) {
				message("That's not an image!");
				redirect(WEB_ROOT."Home.php");
		   }else{
			
		
				$location= "photos".$_FILES["photo"]["name"];
				
				move_uploaded_file($_FILES["image"]["tmp_name"], "photos/".$_FILES["image"]["name"]);
				
	 				$g = new Guest(); 
			    	
					$g->LOCATION = $location;
					$g->update($_SESSION['guestid']); 
					
				 	// message("Room Image Upadated successfully!", "success");
				 	// unset($_SESSION['id']);
				 	 redirect(WEB_ROOT."Home.php");
 			}
 		}

}

?>
