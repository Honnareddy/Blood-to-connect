<?php
    include('include/config.php');
		 if ((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))) {
			
			$city = $_GET['city'];
			$blood_group = $_GET['blood_group'];
			$sql = "SELECT * From donor WHERE city='$city' and blood_group ='$blood_group'";
		$result = mysqli_query($connection,$sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				if($row['save_life_date'] == '0'){
					echo '<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
					<span></span><span class = "name">'.$row['name'].'</span>
					<span>'.$row['city'].'</span>
					<span>'.$row['blood_group'].'</span>
					<span>'.$row['gender'].'</span>
					<span>'.$row['email'].'</span>
					<span>'.$row['contact_no'].'</span>
					</div>';

				}else{
					echo '<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class = "name">'.$row['name'].'</span>
					<span>'.$row['city'].'</span>
					<span>'.$row['blood_group'].'</span>
					<span>'.$row['gender'].'</span>
					<h4 class = "name text-center">Donated</h4>
					</div>';

				}
				}

		} else{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>data not found</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		}
		 ?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>