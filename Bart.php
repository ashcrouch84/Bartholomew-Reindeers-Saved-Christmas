<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
//echo session_id();
?>

<html>
	<head>
		<title>Bartholomew</title>
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/formM1.css">
		<link rel="stylesheet" href="css/formM2.css">
		<link rel="stylesheet" href="css/logo.css">
		<link rel="stylesheet" href="css/vMenu.css">
		<link rel="stylesheet" href="css/formVideo1.css">
		<link rel="stylesheet" href="css/formVideo2.css">
				
		<style type="text/css">
		.center {
					display: block;
					margin-left: auto;
					margin-right: auto;
					width: 50%;
					}
			form {
				width: 300px;
				margin: 0 auto;
				}
			
			table {
				width: 100%;
				table-layout: fixed;
				}
			.twentyW {
				width: 20%;
				background: white;
				}
			.twentyG {
				width: 20%;
				background: grey;
				}
			.twentyR {
				width: 20%;
				background: Red;
				}
			.twentyB {
				width: 20%;
				background: Blue;
				}
			.twentyfiveW {
				width: 25%;
				background: white;
				}
			.twentyfiveG {
				width: 25%;
				background: grey;
				}
			.twentyfiveR {
				width: 25%;
				background: Red;
				}
			.twentyfiveB {
				width: 25%;
				background: Blue;
				}
			.sixteenG {
				width: 16%;
				background: grey;
				}
			.sixteenW {
				width: 16%
				background: white;
				}
			/* see me */
			td {
				border: solid;
				}
			/* play with bg cells and cols ? */

			tr:nth-child(even) :nth-child(odd) {
				background:rgba(100,255,50,0.3);
			  }
			tr:nth-child(odd) :nth-child(even) {
				background:rgba(255,255,255,0.3);
			  }
			
		</style>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<?php
			$user = "Ashleigh Crouch";
		?>
				
			<div class="content">
				<ul class="exo-menu">
					<li><a></i><?php echo "Logged in as:".$user; ?></a></li>
					<li><a href=Bart.php ><id = "a" class="fa-solid fa-teddy-bear"></i> Bartholomew</a></li>	
					<li><a href=Reindeer1.php><i class="fa fa-users"></i> Reindeer 1</a></li>
					<li><a href=Reindeer2.php><i class="fa fa-home"></i> Reindeer 2</a></li>
					<li><a href=Toy.php><i class="fa fa-home"></i> Toy Factory</a></li>
					<li><a href=ChangePW.php><i class="fa fa-unlock"></i> Change Password</a></li>
					<li><a href=AddUser.php><i class="fa fa-unlock"></i> Add User</a></li>
					</li>
					<li><a href="LogOutStaff.php"><i class="fa fa-power-off"></i> Log Out</a></li>
					
					<a href="#" class="toggle-menu visible-xs-block">|||</a>		
				</ul>
			 </div>
				 
	</head>
	<body>
			<p class="alignleft">
				<img class="img" src="The Magical Christmas Adventure Logo.png" alt="centered image" width="100" height="100" />
			</p>
		<p><center><font size = "6" color="white">Bartholomew Information</font></center></p>
		

	</body>

	<?
		ini_set('display_errors', 1);
		error_reporting(E_ALL);

		//variables
		$PTime="";
		$PDate="";
		$check="";
		$message_to_encrypt = "Yoroshikune";
		$secret_key = "my-secret-key";
		$method = "aes128";
		$iv_length = openssl_cipher_iv_length($method);
		$iv = 7089371908532113;
		$hiddenX = array();
		if(isset($_REQUEST['QTime']))
			{
				$PTime = ($_REQUEST['QTime']);
				$PDate = ($_REQUEST['QDate']);
			}
		if(isset($_REQUEST['checkX']))
		{
			$check = ($_REQUEST['checkX']);
			echo $check;
		}
	?>

	<center><form action="Bart.php" method=post enctype='multipart/form-data'></center>

		<font size="6" color="white">Date of Booking</font>
		<select id="time" name="QDate">
			<option value=<?php echo $PDate ; ?>><?php echo $PDate ; ?></option>	
			<option value="01/11/2021">01/11/2021</option>
			<option value="02/11/2021">02/11/2021</option>
			<option value="03/11/2021">03/11/2021</option>
			<option value="04/11/2021">04/11/2021</option>
			<option value="05/11/2021">05/11/2021</option>
			<option value="06/11/2021">06/11/2021</option>
			<option value="07/11/2021">07/11/2021</option>
			<option value="08/11/2021">08/11/2021</option>
			<option value="09/11/2021">09/11/2021</option>
			<option value="10/11/2021">10/11/2021</option>
			<option value="11/11/2021">11/11/2021</option>
			<option value="12/11/2021">12/11/2021</option>
			<option value="13/11/2021">13/11/2021</option>
			<option value="14/11/2021">14/11/2021</option>
			<option value="15/11/2021">15/11/2021</option>
			<option value="16/11/2021">16/11/2021</option>
			<option value="17/11/2021">17/11/2021</option>
			<option value="18/11/2021">18/11/2021</option>
			<option value="19/11/2021">19/11/2021</option>
			<option value="20/11/2021">20/11/2021</option>
			<option value="21/11/2021">21/11/2021</option>
			<option value="22/11/2021">22/11/2021</option>
			<option value="23/11/2021">23/11/2021</option>
			<option value="24/11/2021">24/11/2021</option>
			<option value="25/11/2021">25/11/2021</option>
			<option value="26/11/2021">26/11/2021</option>
			<option value="27/11/2021">27/11/2021</option>
			<option value="28/11/2021">28/11/2021</option>
			<option value="29/11/2021">29/11/2021</option>
			<option value="30/11/2021">30/11/2021</option>
			<option value="31/11/2021">31/11/2021</option>
			<option value="01/12/2021">01/12/2021</option>
			<option value="02/12/2021">02/12/2021</option>
			<option value="03/12/2021">03/12/2021</option>
			<option value="04/12/2021">04/12/2021</option>
			<option value="05/12/2021">05/12/2021</option>
			<option value="06/12/2021">06/12/2021</option>
			<option value="07/12/2021">07/12/2021</option>
			<option value="08/12/2021">08/12/2021</option>
			<option value="09/12/2021">09/12/2021</option>
			<option value="10/12/2021">10/12/2021</option>
			<option value="11/12/2021">11/12/2021</option>
			<option value="12/12/2021">12/12/2021</option>
			<option value="13/12/2021">13/12/2021</option>
			<option value="14/12/2021">14/12/2021</option>
			<option value="15/12/2021">15/12/2021</option>
			<option value="16/12/2021">16/12/2021</option>
			<option value="17/12/2021">17/12/2021</option>
			<option value="18/12/2021">18/12/2021</option>
			<option value="19/12/2021">19/12/2021</option>
			<option value="20/12/2021">20/12/2021</option>
			<option value="21/12/2021">21/12/2021</option>
			<option value="22/12/2021">22/12/2021</option>
			<option value="23/12/2021">23/12/2021</option>
			<option value="24/12/2021">24/12/2021</option>
		</select>


		<left><font size="6" color="white">Time of Booking</font></left>
		<select id="time" name="QTime">
			<option value=<?php echo $PTime ; ?>><?php echo $PTime; ?></option>	
			<option value="8:30">8:30</option>
			<option value="8:40">8:40</option>
			<option value="8:50">8:50</option>
			<option value="9:00">9:00</option>
			<option value="9:10">9:10</option>
			<option value="9:20">9:20</option>
			<option value="9:30">9:30</option>
			<option value="9:40">9:40</option>
			<option value="9:50">9:50</option>
			<option value="10:00">10:00</option>
			<option value="10:10">10:10</option>
			<option value="10:20">10:20</option>
			<option value="10:30">10:30</option>
			<option value="10:40">10:40</option>
			<option value="10:50">10:50</option>
			<option value="11:00">11:00</option>
			<option value="11:10">11:10</option>
			<option value="11:20">11:20</option>
			<option value="11:30">11:30</option>
			<option value="11:40">11:40</option>
			<option value="11:50">11:50</option>
			<option value="12:00">12:00</option>
			<option value="12:10">12:10</option>
			<option value="12:20">12:20</option>
			<option value="12:30">12:30</option>
			<option value="12:40">12:40</option>
			<option value="12:50">12:50</option>
			<option value="13:00">13:00</option>
			<option value="13:10">13:10</option>
			<option value="13:20">13:20</option>
			<option value="13:30">13:30</option>
			<option value="13:40">13:40</option>
			<option value="13:50">13:50</option>
			<option value="14:00">14:00</option>
			<option value="14:10">14:10</option>
			<option value="14:20">14:20</option>
			<option value="14:30">14:30</option>
			<option value="14:40">14:40</option>
			<option value="14:50">14:50</option>
			<option value="15:00">15:00</option>
			<option value="15:10">15:10</option>
			<option value="15:20">15:20</option>
			<option value="15:30">15:30</option>
			<option value="15:40">15:40</option>
			<option value="15:50">15:50</option>
			<option value="16:00">16:00</option>
			<option value="16:10">16:10</option>
			<option value="16:20">16:20</option>
			<option value="16:30">16:30</option>
			<option value="16:40">16:40</option>
			<option value="16:50">16:50</option>
			<option value="17:00">17:00</option>
		</select>

		<input type=submit value='Submit' style="font-size:25px"> 

	</form>

	<?php

		// Create a connection to the web service
		$ws_username = "4kingdoms";
		$ws_password = "sdfsdiF@%@dIAS82729FBX_322";
		$ws_url = "https://4kingdoms.fusemetrix.com/ws/soap/";

		$client = new FuseMetrixWebService_SOAP($ws_username, $ws_password, $ws_url);
		//echo $client->getItWorks(); // Returns 'FMX web service successfully called' if successful

		//convert time to fusemetrix format
		//$PDate1 = date('Y-m-d', strtotime($PDate) );
		//Data from other form
		if(isset($_REQUEST['QTime']))
			{
				$PTime = ($_REQUEST['QTime']);
				$PDate = ($_REQUEST['QDate']);
				
				$old_date = explode('/', $PDate);
				$PDate1 = $old_date[2].'-'.$old_date[1].'-'.$old_date[0]; 	
				$response = $client->getChristmasBookings($PDate1,$PTime);

				//echo "<h2>validateChristmasBooking(\$email, \$orderRef, \$childName)</h2>";
				//echo "<h2>getChristmasBookings(\$date, \$time)</h2>";
				//echo "<pre>".print_r($response, true)."</pre>";

				if($response['valid']<>"1")
					{
						echo '<span style="color:white;text-align:center;">No families on this tour</span>';
					}
				else
					{		
						$bookings = $response['bookings'];
						$count = count($response['bookings']);
						$familyCount = 0;
						foreach ($bookings as $booking)

							{
								$hiddenX[] = "Hidden";
							}
						if ($check == "")
							{}
						else
							{
								$hiddenX[$check-1] = "Show";
							}
							
						foreach($bookings as $booking)
						{
							$familyCount = $familyCount +1;
							echo "<b><hr></b>";
							$message = $booking['name']." & family";
							echo "<p align='center'><b><u><font color=red font face='arial' size='6'>".$message."</font></u></b></p>";


							$orderID = $booking['orderId'];
							$response = $client->getChristmasBooking($booking['orderId']);
							//echo "<pre>".print_r($response, true)."</pre>";
							?>
								<table border="2">
									<colgroup>
										<col class="twentyfiveW" />
										<col class="twentyfiveG" />
										<col class="twentyfiveW" />
										<col class="twentyfiveG" />
										<col class="twentyfiveW" />
										<col class="twentyfiveG" />
										<col class="twentyfiveW" />
										<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
										<col class="twentyfiveR" />
										<col class="twentyfiveB" />
										<col class="twentyfiveR" />
										<col class="twentyfiveB" />
										<col class="twentyfiveR" />
										<col class="twentyfiveB" />
										<col class="twentyfiveR" />
											<?php 
													}
												?>
									</colgroup>	
									<TR>
										<TH COLSPAN="12">Child Details</TH>
											<tr>
												<th>Name</th>
												<th>DOB</th>
												<th>Present Expecting</th>
												<th>Special People</th>
												<th>Pets</th>
												<th>Best Friends</th>
												<th>School</th>
												<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
												<th>Fav TV Show</th>
												<th>Sports</th>
												<th>Clubs</th>
												<th>Achievements</th>
												<th>Gender</th>
												<th>Lockdown</th>
												<th>Present Last Year</th>
												<?php 
													}
												?>
											</tr>
									</TR>
								</table>
							<?php
				
							//child questions
							$i=0;
							$kids =array ();
							while ($i < $count+1)
								{
									//variables
									$DOB="";
									$Present = "";
									$Special = "";
									$Pets = "";
									$Best = "";
									$School = "";
									$TV = "";
									$Sports = "";
									$Club = "";
									$Achievements = "";
									$Gender = "";
									$Lockdown = "";
									$LastYearPre = "";
									$SpecialMess = "";

									$RemoteFolder = "f6F9e9x8L2pAkj6nUTBePKEmLRZvPnfLpSHjN99tndUd5dCE2tRTvwMDFKkhRTtJ";

									if(isset($response['booking'][$i]['25']['answer']))
										{	
											$var_child = $response['booking'][$i]['25']['answer'];
				
											$orderID = str_replace("\n", '', $orderID);
											$result = substr($orderID, 0, 3);
											if ($result == "000")
												{}
											else
												{$orderID = '000'.$orderID;}

											$var_child= str_replace("\n", '', $var_child);
											$var_child = str_replace(' ','-',$var_child);

											$file = $orderID."_".strtolower($var_child).".txt";
											$filename = $RemoteFolder."/".$file;
											if (file_exists($filename))
											{
												$Ofile = fopen($filename,"r");
												while (! feof($Ofile))
													{
													$line = fgets($Ofile);
													}
												fclose($Ofile);

												$decrypted_message = openssl_decrypt($line, $method, $secret_key, 0, $iv);
												list($var_child,$DOB,$Present,$Special,$Pets,$Best,$School,$TV,$Sports,$Club,$Achievements,$Lockdown,$LastYearPre,$SpecialMess,$Gender)=explode(',',$decrypted_message);
												array_push($kids, $decrypted_message);		
											}
											?>

												<table border="2">

												<tr>
													<th><font color="white"><?php echo $var_child; ?></font></th>
													<th><?php echo $DOB; ?></th>
													<th><font color="white"><?php echo $Present; ?></font></th>
													<th><?php echo $Special; ?></th>
													<th><font color="white"><?php echo $Pets; ?></font></th>
													<th><?php echo $Best; ?></th>
													<th><font color="white"><?php echo $School; ?></font></th>
													<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
													<th><?php echo $TV; ?></th>
													<th><font color="white"><?php echo $Sports; ?></font></th>
													<th><?php echo $Club; ?></th>
													<th><font color="white"><?php echo $Achievements; ?></font></th>
													<th><?php echo $Gender; ?></th>
													<th><font color="white"><?php echo $Lockdown; ?></font></th>
													<th><?php echo $LastYearPre; ?></th>
														<?php 
													}
												?>
												</tr>
											</table>
										<?php
									}		
									$i=$i+1;
								}


								//adult information
								?>
									<table border="2">
										<colgroup>
											<col class="twentyW" />
											<col class="twentyG" />
											<col class="twentyW" />
											<col class="twentyG" />
											<col class="twentyW" />
											<col class="twentyG" />
											<col class="twentyW" />
											<col class="twentyG" />
											<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
													<col class="twentyR" />
													<col class="twentyB" />
													<col class="twentyR" />
													<col class="twentyB" />
													<col class="twentyR" />
													<col class="twentyB" />
													<col class="twentyR" />
													<col class="twentyB" />
													<col class="twentyR" />
													<col class="twentyB" />
												<?php 
												}
											?>
										</colgroup>
										<TR>
											<TH COLSPAN="7">Adult Details</TH>
										</TR>
										<tr>
											<th>Adult Names</th>
											<th>Relationship to Child</th>
											<th>Childhood Present</th>
											<th>Favourite</th>
											<th>Something Naughty</th>
											<th>Job</th>
											<th>Previous Job</th>
											<th>Achievement</th>
											<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
													<th>Lifetime Achievement</th>
													<th>Up Laugh</th>
													<th>Old School</th>
													<th>Teachers Name</th>
													<th>Favourite C</th>
													<th>Favourite Memory</th>
													<th>Proud</th>
													<th>Wish</th>
													<th>Special Message</th>
													<th>Message to kids</th> 
												<?php 
												}
											?>
										</tr>
									</table>
								<?

								$RemoteFolder = "tfE4rE3sTV8xdf9Wa7RU3SuxbrwQEXJWf35tfCP5hbyhhUuks4wc7qKGS4Zmv7kU";

								//$count = $count($response['booking']);
								$i=0;
								$adults = array ();
								while ($i < $count)
									{
										$aNames ="";
										$ARelationship="";
										$APresent="";
										$AFav="";
										$ANaughty="";
										$AJob="";
										$APJob="";
										$AAchieve="";
										$ALifeA="";
										$ALaugh="";
										$AOldSchool="";
										$ATeacher="";
										$AFavC="";
										$AFavM="";
										$AProud="";
										$AWish="";
										$AMess="";
										$AMessChild="";

										if(isset($response['booking'][$i]['37']['answer']))
											{
												$var_adult = $response['booking'][$i]['37']['answer'];

												$orderID = str_replace("\n", '', $orderID);
												$var_adult= str_replace("\n", '', $var_adult);

												$file = $orderID."_".str_replace(' ','-',strtolower($var_adult)).".txt";
												$filename = $RemoteFolder."/".$file;
												if (file_exists($filename))
													{
														$Ofile = fopen($filename,"r");
														while (! feof($Ofile))
															{
															$line = fgets($Ofile);
															}
														fclose($Ofile);

														$decrypted_message = openssl_decrypt($line, $method, $secret_key, 0, $iv);
														list($var_adult,$ARelationship,$AName,$APresent,$AFav,$ANaughty,$AJob,$APJob,$AAchieve,$ALifeA,$ALaugh,$AOldSchool,$ATeacher,$AFavC,$AFavM,$AProud,$AWish,$AMess,$AMessChild)=explode(',',$decrypted_message);
														array_push($adults, $decrypted_message);
													}
												?>

												<table border="2">
													<tr>
														<th><font color="white"><?php echo $var_adult; ?></font></th>
														<th><?php echo $ARelationship; ?></th>
														<th><font color="white"><?php echo $APresent; ?></font></th>
														<th><?php echo $AFav; ?></th>
														<th><font color="white"><?php echo $ANaughty; ?></font></th>
														<th><?php echo $AJob; ?></th>
														<th><font color="white"><?php echo $APJob; ?></font></th>
														<th><?php echo $AAchieve; ?></th>
															<?php
													if ($hiddenX[$familyCount-1]=="Hidden")
													{
													}
													else
													{
												?>
														<th><?php echo $ALifeA; ?></th>
														<th><font color="white"><?php echo $ALaugh; ?></font></th>
														<th><?php echo $AOldSchool; ?></th>
														<th><font color="white"><?php echo $ATeacher; ?></font></th>
														<th><?php echo $AFavC; ?></th>
														<th><font color="white"><?php echo $AFavM; ?></font></th>
														<th><?php echo $AProud; ?></th>
														<th><font color="white"><?php echo $AWish; ?></font></th>
														<th><?php echo $AMess; ?></th>
														<th><font color="white"><?php echo $AMessChild; ?></font></th>
														<?php 
												}
											?>
														</tr>
												</table>
												<?php
											}
										$i=$i+1;
									}
									//family details
									$RemoteFolder = "bCE25DXzGfEfxtQZLQSBv8jmu9FMK932UrvrRcLVHc8JsYzducnCPNvcv6GC8c8x";

									$file = $orderID."_Family.txt";
									$filename = $RemoteFolder."/".$file;
									if (file_exists($filename))
										{
											$Ofile = fopen($filename,"r");
											while (! feof($Ofile))
												{
												$line = fgets($Ofile);
												}
											fclose($Ofile);
														
														$decrypted_message = openssl_decrypt($line, $method, $secret_key, 0, $iv);
														list($FMention,$FGames,$FBefore,$FTraditions,$FLeave,$FKeep)=explode(',',$decrypted_message);
											
														$message = ucwords("Please do not mention: ".$FMention);
														echo "<p align='center'><u><font color=red font face='arial' size='4'>".$message."</font></u></p>";	
										}
										
									if ($hiddenX[$familyCount-1] == "Hidden")
										{
									?>
										<form action="Bart.php" method=post enctype='multipart/form-data'>
												<a>
													<span></span>
													<span></span>
													<span></span>
													<span></span>
													<input type=submit value='Show hidden Info' style="font-size:25px">
												</a>
												<input type="hidden" name="checkX" value=<?php echo $familyCount; ?>>
												<input type="hidden" name="QTime" value=<?php echo $PTime; ?>>
												<input type="hidden" name="QDate" value=<?php echo $PDate; ?>>
												<input type="hidden" name="hiddenCheck" value="Show">
											</form>
									<?php
										}
									else
										{
											?>
												<form action="Bart.php" method=post enctype='multipart/form-data'>
														<a>
															<span></span>
															<span></span>
															<span></span>
															<span></span>
															<input type=submit value='Hide hidden Info' style="font-size:25px">
														</a>
														<input type="hidden" name="checkX" value="">
														<input type="hidden" name="QTime" value=<?php echo $PTime; ?>>
														<input type="hidden" name="QDate" value=<?php echo $PDate; ?>>
														<input type="hidden" name="hiddenCheck" value="Hide">
													</form>
											<?php
										}
									echo "<br>";
									
									

						}	
					}
			}
		else
			{
				echo '<span style="color:white;text-align:center;">Please select a date and time</span>';
			}
	?>

	</body>
</html>

<?

// Example classes to connect to the web service and call the methods
// You shouldn't need to make any changes to these functions!

class FuseMetrixWebService_SOAP {
    private $client;
    private $username;
    private $password;
    private $token;
    private $headersGenerated;

    function __construct($username, $password, $url) {
        $this->client = new SoapClient(null, array("location" => $url, "uri" => "fusemetrix", "soap_version" => SOAP_1_2));
        $this->username = $username;
        $this->password = $password;
        $this->getToken();
        $this->headersGenerated = false;
    }

    private function getToken($force = false) {
        if($force || !isset($_SESSION["fmxwebservice_soap"]["token"])) {
            $this->token = $this->client->requestToken($this->username);
            $_SESSION["fmxwebservice_soap"]["token"] = $this->token;
        } else {
            $this->token = $_SESSION["fmxwebservice_soap"]["token"];
        }
    }

    private function generateHeaders() {
        $digest = md5($this->password . $this->token);
        $usernameToken = new SoapHeaderUsernameToken($this->username, $digest);
        
        $soapHeaders[] = new SoapHeader("fusemetrix", "auth", $usernameToken);

        $this->client->__setSoapHeaders($soapHeaders);
    }

    public function __call($function, $arguments) {
        if(!$this->headersGenerated) {
            $this->generateHeaders();
        }
        try {
            return $this->client->__soapCall($function, $arguments);
        } catch (SoapFault $e) {
            if($e->faultcode == "0002") {
                $this->client->__setSoapHeaders(null);
                $this->getToken(true);
                $this->generateHeaders();
                return $this->client->__soapCall($function, $arguments);
                throw($e);
            }
        }
    }
}

class SoapHeaderUsernameToken {
    public $digest;
    public $username;

    public function __construct($l, $d) {
        $this->digest = $d;
        $this->username = $l;
    }
}
?>


