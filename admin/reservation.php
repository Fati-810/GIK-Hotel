<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION GIK HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href=".."><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
								<div class="form-group">
                                            <label>Nationality</label>
                                            <select name="nationality" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
                           
                                  </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room</label>
                                            <select name="room_type"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Standard">Standard</option>
                                                <option value="Luxury">Luxury</option>
												<option value="Executive">Executive</option>
												
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bedding" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Master">Master</option>
                                             
                                                
                                             
                                            </select>
                              </div>
							  
							 
							 
							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                       
						<input type="submit" name="submit" class="btn btn-primary">
 <?php
							if(isset($_POST['submit']))
							{
							
									$con=mysqli_connect("localhost","root","","hotel");
									
                                        
                                        
                                        
                                        $check="SELECT * FROM room WHERE room_type = '$_POST[room_type]' AND bedding_type = '$_POST[bedding]' AND room.status='Available' ";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
                                            //echo "<script type='text/javascript'> alert('Room Available')</script>";
                                            $newUser="INSERT INTO `customer`(`title`, `fname`, `lname`,`nationality`,`email`, `phone` ) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[nationality]','$_POST[email]','$_POST[phone]')";
                                            mysqli_query($con,$newUser);
										  
										    
                                            $check2="SELECT * from customer WHERE customer_id=(SELECT MAX(customer_id) from customer) ";
                                            $rs2 = mysqli_query($con,$check2);
                                            $data2 = mysqli_fetch_array($rs2, MYSQLI_NUM);
                                            // echo "<script type='text/javascript'> alert($data2[0])</script>";
                                            // echo "<script type='text/javascript'> alert($data[0])</script>";
                                            $newRoom="UPDATE `room` SET `customer` = '$data2[0]',`meal_type` = '$_POST[meal]',`in_date` = '$_POST[cin]',`out_date` = '$_POST[cout]',`status` = 'Not Available' WHERE room_no=$data[0]";
                                            mysqli_query($con,$newRoom);
										   
                                            $no_of_days = "SELECT DATEDIFF(out_date, in_date) from room where customer=$data2[0]";
                                            $rs3 = mysqli_query($con,$no_of_days);
                                            $data3 = mysqli_fetch_array($rs3, MYSQLI_NUM);
                                            //echo "<script type='text/javascript'> alert($data3[0])</script>";
                                            
                                            $newRoom2="UPDATE `room` SET `no_of_day` = '$data3[0]' where customer=$data2[0]";
                                            
                                            if (mysqli_query($con,$newRoom2))
										    {
											    echo "<script type='text/javascript'> alert('Your Room Has Been Booked')</script>";
                                            }
                                            else
										    {
										    	echo "<script type='text/javascript'> alert('Error in Booking!')</script>";
											
										    }
                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'> alert('Room is not Available!')</script>";
                                        }
										
										
									

							$msg="Your code is correct";
							}
							?>
                    
							</form> 
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
