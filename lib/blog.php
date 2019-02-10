   <?php
   include("../include/config.php"); 
   include("../include/imgfunction.php");
if(isset($_POST['submit']))
{
        $service_id = $_POST['service_id'];
	    $subcategory_id = $_POST['subcategory_id'];
		$blog_title = $_POST['blog_title'];
		$blog_decription=$_POST['blog_decription'];
    $blog_date=date('d/m/Y');
    $seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];

		
		$blog_image = $_FILES['blog_image']['name'];
		
       $blog_image = imgvalidationnotreq($blog_image);

      if($blog_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_blog.php';</script>";die;
      }
	    copy($_FILES['blog_image']['tmp_name'],"../images/service/".$blog_image);
     
	    $add_blog = mysqli_query($con,"INSERT INTO `blog` (`service_id`,`subcategory_id`, `blog_title`, `blog_date`, `blog_decription`, `blog_image`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES ('$service_id','$subcategory_id', '$blog_title', '$blog_date', '$blog_decription', '$blog_image', '$seo_title', '$seo_keyword', '$seo_desc')");

      if($add_blog)
      {
	  $msg_body=" <table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td align='center' bgcolor='#f67b7c' style='background-image: url(http://rsjestore.enoxi.co.in/eimg/header_bg.jpg); background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;'>
		
			<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tr >
					<td width='100%' align='center'>
					<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full' style='background: #1f0808a1;;'>
							<tr>
								<td width='800px' valign='middle' align='center' >
								
									<!-- View Online --> 
									<table width='250' border='0' cellpadding='0' cellspacing='0' align='right' style=' border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>	
										<tr>
											<td height='60' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif, Open Sans;border-radius: 18px; color: #ffffff; font-weight: 400;'>
											
												<a href='#' style='text-decoration: none; color: #ffffff; padding:34px;'>Visit Website</a>
												 
											</td>
										</tr>
									</table>
									
									<!-- Logo -->
									<table width='250' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tr>
											<td height='60' valign='middle' width='100%' style='text-align: right;' class='fullCenter' id='logo'>
												<a href='#'><img width='125' src='http://rsjestore.enoxi.co.in/eimg/logo.png' alt='' border='0'></a>
											</td>
										</tr>
									</table>
									
									<!-- Space -->
									<table width='40' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' height='30' class='erase'></td>
										</tr>
									</table><!-- End Space -->
									
																	
								</td>
							</tr>
						</table><!-- End Nav -->
						
						<!-- Start Header -->
					
					
						
						<!-- End Header Text -->
						
					</td>
				</tr>
			</table><!-- End Wrapper -->
			
		</td>
	</tr>
</table>

<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td width='800px' bgcolor='#344b61' align='center'>
		
			
			

		</td>
	</tr>
</table>


<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td width='100%' valign='top' bgcolor='#ffffff' align='center'>
		
			
			<!-- Wrapper -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tr>
					<td align='center'>
					
						<!-- Space -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tr>
								<td width='100%' height='50'></td>
							</tr>
						</table><!-- End Space -->
									
						<!-- Wrapper -->
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tr>
								<td width='100%' align='center'>
									
									<!-- Image 600 -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tr>
											<td width='100%' class='image600'>
												<a href='#' style='text-decoration: none;'><img src='http://rsjestore.enoxi.co.in/admin/images/service/$blog_image' alt='' border='0' width='600' height='250' class='hover' style='border-radius: 4px;'></a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' class='h10'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%'>
											
												<table width='190' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tr>
														<td height='35' width='100%' style='text-align: right; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 13px; color: #fa6f6f; line-height: 24px; font-weight: 400;' class='textLeft' id='icon13'>
														
															
														</td>
													</tr>
												</table>
												
												<table width='400' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tr>
														<td height='35' width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 24px; color: #444444; line-height: 32px; font-weight: 700;'>
															$blog_title
														</td>
													</tr>
												</table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 14px; color: #808080; line-height: 22px; font-weight: 400;'>
												$blog_decription
											</td>
										</tr>
										<tr>
											<td width='100%' height='30'></td>
										</tr>
										
										<!-- Button Left -->
										<tr>
											<td width='auto' align='left'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='left'>
													<tr>
														<td width='auto' align='center' height='37' bgcolor='#fa6f6f' style='border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: bold; font-family: Helvetica, Arial, sans-serif, Open Sans; color: #ffffff; font-weight: 600;'>
															<a href='rsjestore.enoxi.co.in' style='color: #ffffff; font-size: 14px; text-decoration: none; line-height: 34px; width: 100%;'>Read more</a>
														</td>
													</tr>
												</table>
											
											</td>
										</tr>
										<!-- Button Left -->
										<tr>
											<td width='100%' height='70'></td>
										</tr>
									</table>
								</td>
							</tr>
						</table><!-- End Wrapper 2 -->
						
					</td>
				</tr>
			</table><!-- End Wrapper -->
		
		</td>
	</tr>
</table>


<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td width='100%' valign='top' align='center'>
		
			<!-- Wrapper -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tr>
					<td align='center'>
						
					
						<!-- Space -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tr>
								<td width='100%' height='25'></td>
							</tr>
						</table><!-- End Space -->
						
					</td>
				</tr>
			</table><!-- End Wrapper -->
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'>
	<tr>
		<td width='100%' valign='top' align='center'>
		
					
			<!-- Divider -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tr>
					<td width='100%' valign='middle' align='center'>
					
						<!-- Wrapper -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tr>
								<td width='100%' height='25'>&nbsp;</td>
							</tr>
							<tr>
								<td width='100' height='1' bgcolor='#f8f8f8' style='font-size: 1px; line-height: 1px;'>&nbsp;</td> 
							</tr>
							<tr>
								<td width='100%' height='25'>&nbsp;</td>
							</tr>
						</table><!-- End Wrapper --> 
												
					</td>
				</tr>
			</table><!-- End Divider -->
			
		</td>
	</tr>
</table>

<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td align='center' width='100%' valign='top' bgcolor='#344b61'>
			
			<!-- Wrapper -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tr>
					<td align='center'>
						
						<!-- Wrapper -->
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tr>
								<td width='100%' class='icon30'>
									
									<!-- Space -->
									<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' height='50'></td>
										</tr>
									</table><!-- End Space -->
									
									<!-- Icon 30 - 3 -->
									<table width='260' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 20px; color: #ffffff; line-height: 28px; font-weight: 700;' class='fullCenter'>
											
												<a style='text-decoration: none;'><img src='http://rsjestore.enoxi.co.in/eimg/icon_30_3.png' width='30' alt='' border='0' style='vertical-align: middle; padding-bottom: 4px;'></a>
												&nbsp;	
												Contact us
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='fullCenter'>
								RSJ eStore Private Limited<br> Office: 2/11B, Basement,
        Jangpura Block-A New Delhi-110014
												
											</td>
										</tr>
									</table>
									
									<!-- Space -->
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' height='30'></td>
										</tr>
									</table><!-- End Space -->
									
									<!-- Icon 30 - 4 -->
									<table width='260' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 20px; color: #ffffff; line-height: 28px; font-weight: 700;' class='fullCenter'>
											
												<a style='text-decoration: none;'><img src='http://rsjestore.enoxi.co.in/eimg/icon_30_4.png' width='30' alt='' border='0' style='vertical-align: middle; padding-bottom: 4px;'></a>
												&nbsp;	
												About us
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='fullCenter'>
												<img src='http://rsjestore.enoxi.co.in/eimg/phone.png' style='height: 16px;'> (+91) 9910219977 <br>
												<img src='http://rsjestore.enoxi.co.in/eimg/email.png' style='height: 21px;vertical-align: middle; padding-bottom: 4px;'> info@rsjestore.com<br>
										<a href='http://rsjestore.enoxi.co.in/index.php' style='text-decoration: none; color: #ffffff;'>
www.rsjestore.com</a>
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table><!-- End Wrapper 2 -->
						
						<!-- Space -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tr>
								<td width='100%' height='25'></td>
							</tr>
						</table><!-- End Space -->
						
					</td>
				</tr>
			</table><!-- End Wrapper -->
		
		</td>
	</tr>
</table>


<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#344b61'>
	<tr>
		<td align='center' width='100%' valign='top'>
					
			
		</td>
	</tr>
</table>

<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
	<tr>
		<td align='center' width='100%' valign='top' bgcolor='#344b61'>	
			
			<!-- Wrapper -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tr>
					<td align='center'>
					
						<!-- Space -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tr>
								<td width='100%' height='10'></td>
							</tr>
						</table><!-- End Space -->
								
						<!-- Wrapper -->
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tr>
								<td width='100%' align='center'>
								
									<!-- Logo Footer -->
									<table width='140' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tr>
											<td height='60' valign='middle' width='100%' style='text-align: left;' class='fullCenter' id='logo_footer'>
												<a href='#'><img width='100' src='http://rsjestore.enoxi.co.in/eimg/logo.png' alt='' border='0' style='padding-bottom: 4px;'></a>
											</td>
										</tr>
									</table>
									
									<!-- Space -->
									<table width='20' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%' height='1'></td>
										</tr>
									</table><!-- End Space -->
																
									<!-- Text Left -->
									<table width='300' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tr>
											<td width='100%'>
												<table border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tr>
														<td height='60' style='text-align: center; font-family: Helvetica, Arial, sans-serif, Open Sans; font-size: 14px; color: #aebecd; line-height: 21px; vertical-align: middle; word-break:break-all; font-weight: 400;'>
															
															<a href='#' style='text-decoration: none; color: #f67b7c;'></a>
														
															
														</td>
													</tr>
												</table>					
											</td>
										</tr>
									</table>
									
									<!-- Social Icons -->
									<table width='96' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='buttonScale'>	
										<tr>
											<td height='45' valign='middle' width='32' align='center' class='icons17' style='text-align: center;'>
												<a href='#' style='text-decoration: none;'><img src='eimg/social_icon_1.png' width='17' alt='' border='0' class='hover'></a>
											</td>
											<td height='45' valign='middle' width='32' align='center' class='icons17' style='text-align: center;'>	
												<a href='#' style='text-decoration: none;'><img src='eimg/social_icon_2.png' width='17' alt='' border='0' class='hover'></a>
											</td>
											<td height='45' valign='middle' width='32' align='center' class='icons17' style='text-align: center;'>	
												<a href='#' style='text-decoration: none;'><img src='eimg/social_icon_3.png' width='17' alt='' border='0' class='hover'></a>
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table><!-- End Wrapper 2 -->
						
						<!-- Space -->
						<!-- End Space -->
					
					</td>
				</tr>
			</table><!-- End Wrapper -->
		
		</td>
	</tr>
</table>

<table width='800px' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#344b61'>
	<tr>
		<td width='100%' valign='top' align='center'>
		
					
			<!-- Space -->
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tr>
					<td width='100%' valign='middle' align='center'>
					
						<!-- Wrapper -->
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tr>
								<td width='100%' height='25'>&nbsp;</td>
							</tr>
							<tr>
								<td width='100%' height='1'></td>
							</tr>
						</table><!-- End Wrapper --> 
												
					</td>
				</tr>
			</table><!-- End Space -->
			
		</td>
	</tr>
</table>";
$sql2=mysqli_query($con,"select * from subscribe_email where status='0'");
while($data=mysqli_fetch_assoc($sql2))
{
$to_admin=$data['email'];
$subject_admin=$title;
$from_admin = "mhs.rahulpandey@gmail.com";
$header_admin = "MIME-Version: 1.0" . "\r\n";
$header_admin  .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$header_admin .= "From:" . $from_admin;
mail($to_admin,$subject_admin,$msg_body,$header_admin);
  }
	 ?>
      <script>
      alert("Your Blog Successfully Added");
	 window.top.location="../add_blog.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your blog not added");
	window.top.location="../add_blog.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
$blogid=$_REQUEST['blog_id'];
	 $service_id = $_POST['service_id'];
    $blog_title = $_POST['blog_title'];
    $subcategory_id = $_POST['subcategory_id'];
    $blog_decription=$_POST['blog_decription'];
    $blog_date=date('d/m/Y');
    $seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		$image=$_POST['blog_image'];
		$blog_image = $_FILES['blog_image']['name'];
		    $blog_image = imgvalidationnotreq($blog_image);

      if($blog_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_blog.php';</script>";die;
      }
		if($blog_image)
		  {
		  copy($_FILES['blog_image']['tmp_name'],"../images/service/".$blog_image);		  }
		 else
		 {
		 $blog_image=$image;
		 }
	     
 $update_blog=mysqli_query($con,"UPDATE `blog` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `blog_title` = '$blog_title', `blog_date` = '$blog_date', `blog_decription` = '$blog_decription', `blog_image` = '$blog_image', `seo_title` = '$seo_title', `seo_keyword` = '$seo_keyword', `seo_desc` = '$seo_desc' WHERE `blog`.`blog_id` = '$blogid'");
 if($update_blog)
  {
  ?>
    <script>
    alert("Your Blog successfully Update");
	window.top.location="../add_blog.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your BLog not updated");
    window.top.location="../add_blog.php";
</script>
<?php
}
}
?>
                 