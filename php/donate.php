<?php 
  //include header file
include ('include/header.php');
include ('include/config.php');

if(isset($_POST['submit'])){
if(isset($_POST['term']) === true){
	if(isset($_POST['name']) && !empty($_POST['name'])){
		if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
			$name =$_POST['name'];
		}else{
			$namemerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   			<strong>Only lower and upper case and space characters are allowed.</strong>
  			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 		<span aria-hidden="true">&times;</span>
	 		</button>
			</div>';
		}
		
	}else{
		$nameerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   		<strong>please fill the name field.</strong>
   		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
	 	</button>
		</div>';

		}
		if(isset($_POST['gender']) && !empty($_POST['gender'])){
			$gender = $_POST['gender'];
		}else{
			$gendererror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
	   		<strong>select your gender.</strong>
	   		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 </button>
			</div>';
	
			}
			if(isset($_POST['day']) && !empty($_POST['day'])){
				$day = $_POST['day'];
			}else{
				$dayerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		   <strong>select your day.</strong>
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 </button>
			</div>';
			}

			if(isset($_POST['month']) && !empty($_POST['month'])){
				$month = $_POST['month'];
			}else{
				$montherror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			   <strong>select your month.</strong>
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
				 </button>
				</div>';
			}
			if(isset($_POST['year']) && !empty($_POST['year'])){
				$year = $_POST['year'];
				}else{
					$yearerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				   <strong>select your year.</strong>
				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
				</div>';
				
				}
				if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
					$blood_group = $_POST['blood_group'];
				}else{
					$blood_grouperror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
				   <strong>select your blood group.</strong>
				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					</div>';
					
							}
						if(isset($_POST['city']) && !empty($_POST['city'])){
							if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
								$city =$_POST['city'];
							}else{
								$citymerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					   <strong>Only lower and upper case and space characters are allowed.</strong>
					   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
					</div>';
							}
							
						}else{
							$cityerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					   <strong>please fill the city field.</strong>
					   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
					</div>';
					
							}
							if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
								if(preg_match('/\d{10}/',$_POST['contact_no'])){
									$contact_no =$_POST['contact_no'];
								}else{
									$contact_nomerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
						   <strong>contact should consist of 10 character.</strong>
						   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
						</div>';
								}
								
							}else{
								$contact_noerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
						   <strong>please fill the contact_no field.</strong>
						   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
						</div>';
						
								}
							if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
								if(strlen($_POST['password']) >= 6){
									if($_POST['password'] == $_POST['c_password']){
										$password = $_POST['c_password'];
									}else{
										$passworderror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							   <strong>Password are not same.</strong>
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
							</div>';
									}

								}else{
									$passworderror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							   <strong>Password should consists of 6 characters.</strong>
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
							</div>';
							
									}
							}else{
								$passworderror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
						   <strong>Please fill password field.</strong>
						   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
						</div>';
						
								}
								if(isset($_POST['email']) && !empty($_POST['email'])){
									$pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
									if(preg_match($pattern, $_POST['email'])){
										$email =$_POST['email'];
									}else{
										$emailerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							   <strong>please enter valid email address.</strong>
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
							</div>';
									}
									
								}else{
									$emailerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							   <strong>please fill the email field.</strong>
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
							</div>';
							
									}
									//insertion of data

									if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city) && isset($password)){
										$donorDOB= $year."-".$month."-".$day;
										$password= md5($password);

										$sql ="INSERT INTO donor(name,gender,email,city,dob,contact_no,save_life_date,password,blood_group) VALUES('$name','$gender','$email','$city','$donorDOB','$contact_no','0','$password','$blood_group')";

									if(mysqli_query($connection, $sql)){
										header("Location: signin.php");
									}else{
										$submiterror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
							   <strong>oops! data not inserted try again.</strong>
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
							</div>';
									}
								}
	  	}else{
		$termerror = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Please agree with our term and condition.</strong>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 <span aria-hidden="true">&times;</span>
	 </button>
</div>';

		}
		
	}
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>

					<hr class="red-bar">
					<?php if(isset($termerror)) echo $termerror;
						if(isset($submitSuccess)) echo $submitSuccess;
						if(isset($submiterror)) echo $submiterror;
					?>
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name; ?>">
						<?php if(isset($nameerror)) echo $nameerror; ?>

					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>'; ?>
                <option selected="" value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
			<?php if(isset($blood_grouperror)) echo $blood_grouperror; ?>
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
								<?php if(isset($gendererror)) echo $gendererror; ?>
				    </div><!--gender-->
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>

                <option value="">---Date---</option>
				<?php if(isset($day)) echo '<option selected="" value="'.$day.'">'.$day.'</option>'; ?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php if(isset($month)) echo '<option selected="" value="'.$month.'">'.$month.'</option>'; ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if(isset($month)) echo '<option selected="" value="'.$month.'">'.$month.'</option>'; ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
				<?php if(isset($dayerror)) echo $dayerror; ?>
				<?php if(isset($montherror)) echo $montherror; ?>
				<?php if(isset($yearerror)) echo $yearerror; ?>
				</div><!--End form-group-->
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"  value="<?php if(isset($email)) echo $email; ?>">>
					<?php if(isset($emailerror)) echo $emailerror; ?>
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="91********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10"  value="<?php if(isset($contact_no)) echo $contact_no; ?>">>
			<?php if(isset($contact_noerror)) echo $contact_noerror; ?>
            </div><!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
	<?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>'; ?>
	<optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
	<?php if(isset($cityerror)) echo $cityerror; ?>
            </div><!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
			<?php if(isset($passworderror)) echo $passworderror; ?>
            </div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" checked="" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>