<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Prepare and execute SQL statement to insert data
    $insertSQL = "INSERT INTO subscribers (email) VALUES (?)";
    $stmt = $conn->prepare($insertSQL);
    $stmt->bind_param("s", $email);
    
    if ($stmt->execute()) {
       // echo "Thank you for subscribing!";
    } else {
        echo "Error subscribing.";
    }
    
    $stmt->close();
}
$name="Sir/Mam";
$message="";
         
include('smtp/PHPMailerAutoload.php');
echo smtp_mailer($_POST['email'],$message,$name);
function smtp_mailer($to,$msg,$name){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 0;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
    $mail->Username = "devshahmirkhan@gmail.com";
    $mail->Password = "hoefhmswrvucrfkb";
	$mail->SetFrom("hassantalha243@gmail.com");
    $emailSignature='<br><br><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td width="150" style="vertical-align: middle;"><span class="template3__ImageContainer-sc-vj949k-0 jeScQV" style="margin-right: 20px; display: block;"><img src="https://media.licdn.com/dms/image/C560BAQG97ie6CXj7Jg/company-logo_200_200/0/1646708029995?e=2147483647&amp;v=beta&amp;t=dHdyhlpQZIA4k0v7zdC1L8YRC3X_rGc9BWPbAk-5htc" role="presentation" width="130" class="image__StyledImage-sc-hupvqm-0 gYgOut" style="max-width: 130px;"></span></td><td style="vertical-align: middle;"><h2 color="#000000" class="name__NameContainer-sc-1m457h3-0 jxbGUj" style="margin: 0px; font-size: 18px; color: rgb(0, 0, 0); font-weight: 600;"><span>Muhammad Shahmir</span><span>&nbsp;</span><span>Khan</span></h2><p color="#000000" font-size="medium" class="job-title__Container-sc-1hmtp73-0 ifJNJc" style="margin: 0px; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;"><span>Founder and CEO</span></p><p color="#000000" font-size="medium" class="company-details__CompanyContainer-sc-j5pyy8-0 VnOLK" style="margin: 0px; font-weight: 500; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;"><span>GrowUp Tech Solutions</span></p></td><td width="30"><div style="width: 30px;"></div></td><td color="#52be00" direction="vertical" width="1" height="auto" class="color-divider__Divider-sc-1h38qjv-0 llIisW" style="width: 1px; border-bottom: none; border-left: 1px solid rgb(82, 190, 0);"></td><td width="30"><div style="width: 30px;"></div></td><td style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#52be00" width="11" class="contact-info__IconWrapper-sc-mmkjr6-1 bglVXe" style="display: inline-block; background-color: rgb(82, 190, 0);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/phone-icon-2x.png" color="#52be00" alt="mobilePhone" width="13" class="contact-info__ContactLabelIcon-sc-mmkjr6-0 cnkwri" style="display: block; background-color: rgb(82, 190, 0);"></span></td></tr></tbody></table></td><td style="padding: 0px; color: rgb(0, 0, 0);"><a href="tel:+923369294248" color="#000000" class="contact-info__ExternalLink-sc-mmkjr6-2 ibLXSU" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>+923369294248</span></a></td></tr><tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#52be00" width="11" class="contact-info__IconWrapper-sc-mmkjr6-1 bglVXe" style="display: inline-block; background-color: rgb(82, 190, 0);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/email-icon-2x.png" color="#52be00" alt="emailAddress" width="13" class="contact-info__ContactLabelIcon-sc-mmkjr6-0 cnkwri" style="display: block; background-color: rgb(82, 190, 0);"></span></td></tr></tbody></table></td><td style="padding: 0px;"><a href="mailto:DevShahmirKhan@gmail.com" color="#000000" class="contact-info__ExternalLink-sc-mmkjr6-2 ibLXSU" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>DevShahmirKhan@gmail.com</span></a></td></tr><tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#52be00" width="11" class="contact-info__IconWrapper-sc-mmkjr6-1 bglVXe" style="display: inline-block; background-color: rgb(82, 190, 0);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/link-icon-2x.png" color="#52be00" alt="website" width="13" class="contact-info__ContactLabelIcon-sc-mmkjr6-0 cnkwri" style="display: block; background-color: rgb(82, 190, 0);"></span></td></tr></tbody></table></td><td style="padding: 0px;"><a href="//www.GrowUp.Solutions" color="#000000" class="contact-info__ExternalLink-sc-mmkjr6-2 ibLXSU" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>www.GrowUp.Solutions</span></a></td></tr><tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#52be00" width="11" class="contact-info__IconWrapper-sc-mmkjr6-1 bglVXe" style="display: inline-block; background-color: rgb(82, 190, 0);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/address-icon-2x.png" color="#52be00" alt="address" width="13" class="contact-info__ContactLabelIcon-sc-mmkjr6-0 cnkwri" style="display: block; background-color: rgb(82, 190, 0);"></span></td></tr></tbody></table></td><td style="padding: 0px;"><span color="#000000" class="contact-info__Address-sc-mmkjr6-3 jxDmGK" style="font-size: 12px; color: rgb(0, 0, 0);"><span>H-9, Pakistan</span></span></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="width: 100%; vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td height="30"></td></tr><tr><td color="#52be00" direction="horizontal" width="auto" height="1" class="color-divider__Divider-sc-1h38qjv-0 llIisW" style="width: 100%; border-bottom: 1px solid rgb(82, 190, 0); border-left: none; display: block;"></td></tr><tr><td height="30"></td></tr></tbody></table></td></tr><tr><td><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="width: 100%; vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: top;"></td><td style="text-align: right; vertical-align: top;"><table cellpadding="0" cellspacing="0" class="table__StyledTable-sc-1avdl6r-0 kAbRZI" style="display: inline-block; vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr style="text-align: right;"><td><a href="https://www.facebook.com/growuptechsolutions" color="#88d16b" class="social-links__LinkAnchor-sc-py8uhj-2 hBVWAh" style="display: inline-block; padding: 0px; background-color: rgb(136, 209, 107);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/facebook-icon-2x.png" alt="facebook" color="#88d16b" height="24" class="social-links__LinkImage-sc-py8uhj-1 hSTSwA" style="background-color: rgb(136, 209, 107); max-width: 135px; display: block;"></a></td><td width="5"><div></div></td><td><a href="https://www.linkedin.com/company/growup-tech-solutions/mycompany/verification/?viewAsMember=true" color="#88d16b" class="social-links__LinkAnchor-sc-py8uhj-2 hBVWAh" style="display: inline-block; padding: 0px; background-color: rgb(136, 209, 107);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/linkedin-icon-2x.png" alt="linkedin" color="#88d16b" height="24" class="social-links__LinkImage-sc-py8uhj-1 hSTSwA" style="background-color: rgb(136, 209, 107); max-width: 135px; display: block;"></a></td><td width="5"><div></div></td><td><a href="https://www.instagram.com/growuptechsolutions/" color="#88d16b" class="social-links__LinkAnchor-sc-py8uhj-2 hBVWAh" style="display: inline-block; padding: 0px; background-color: rgb(136, 209, 107);"><img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/instagram-icon-2x.png" alt="instagram" color="#88d16b" height="24" class="social-links__LinkImage-sc-py8uhj-1 hSTSwA" style="background-color: rgb(136, 209, 107); max-width: 135px; display: block;"></a></td><td width="5"><div></div></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="30"></td></tr><tr><td style="text-align: center;"><a href="https://www.hubspot.com/email-signature-generator?utm_source=create-signature" target="_blank" rel="noopener noreferrer" class="viral-link__Anchor-sc-1kv0kjx-0 bZUgRQ" style="font-size: 12px; display: block; color: rgb(0, 0, 0);"></a></td></tr></tbody></table>';
    $mail->Subject = "Thank you for subscribing to GrowUp TechSolution!";
	$mail->Body = "Dear <b>$name</b>,<br>
Thank you for subscribing to GrowUp TechSolution's newsletter.<br>We're excited to keep you updated on the latest tech trends, news, and offers.<br>
Stay tuned for our upcoming emails and feel free to reach out to us if you have any questions.<br>
Best regards,<br>
The GrowUp TechSolution Team<br>".$emailSignature;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		 echo $mail->ErrorInfo;
	}else{
       
	}
}
echo "<script>
window.location.href = '/Growstation(version-1)/index.html';
</script>";
$conn->close();

?>