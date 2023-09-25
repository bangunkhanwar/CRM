<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Elcorps Member</title>
		<meta name="viewport" content="width=device-width">
		<style type="text/css">
			@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
				body[yahoo] .buttonwrapper { background-color: transparent !important; }
				body[yahoo] .button { padding: 0 !important; }
				body[yahoo] .button a { background-color: #9b59b6; padding: 15px 25px !important; }
			}

			@media only screen and (min-device-width: 601px) {
				.content { width: 600px !important; }
				.col387 { width: 387px !important; }
			}
		</style>
		<script>
		var site_url = "<?= site_url()?>";
			function main_reset()
			{
				window.location = site_url+'login/reset_password';
			}
			function activate(user)
			{
				$.post(site_url+'login/verify_email_account/'+user
					,$("#form-input").serialize()
					,function(result) {
						if (result.error)
						{
							// pesan_error(result.error);
							alert('error');
						}else{
							// alert("Data berhasil dikirim");
							window.location = site_url+'login';
						}
					}						
					,"json"
				);
			}
		</script>
	
	</head>
	<body bgcolor="#34495E" style="margin: 0; padding: 0;" yahoo="fix">
		<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
			<!--tr>
					<td align="left" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
						Assalamualaikum Wr. Wb.<br/> 
						<b><?= $name; ?>,</b>
					</td>
				</tr-->
			<tbody>
				<tr>
					<td align="center" bgcolor="#dddddd" style="padding: 5px 0px 5px 0px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
					<img src="https://crm.elcorps.com/file_storage/assets/images/lifestyle-logo.png" width="170" height="55" style="display:block;">
						
					</td>
				</tr>
				<!-->
					<td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
						<b>Welcome <?= $email_user; ?>,</b>
					</td>
				</tr-->
				<tr>
					<td align="left" bgcolor="#f9f9f9" style="padding: 20px 20px 0 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;">
						Assalamualaikum Wr. Wb.<br/> 
						<b><?= $name; ?>,</b><br/><br/>
						Kami ucapkan terima kasih karena telah tergabung sebagai member ELCORPS Lifestyle. <br/><br/>
						Untuk mengaktifkan akun member silahkan salin kode OTP dibawah ini.
					</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#f9f9f9" style="font-family: Arial, sans-serif; border-bottom: 1px solid #f6f6f6;border-radius:5px;">
						<table bgcolor="#0073AA" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper">
							<tbody>
								<tr>
									<td align="center" height="30" style=" padding: 0 15px 0 15px;border-radius:2px; font-family: Arial, sans-serif; font-size: 23px; font-weight: bold;" class="button">
										<a style="color: #ffffff; text-align: center; text-decoration: none;"><?=$OTP?></a>
									</td>
								</tr>
							</tbody>
						</table>
					</td>

				</tr>
				<tr>
					<td align="left" bgcolor="#f9f9f9" style="padding: 20px 20px 0 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;">
						Jika anda membutuhkan informasi atau bantuan lebih lanjut, anda dapat menghubungi kami melalui layanan pelanggan pada hari kerja pukul 08.00 - 18.00.<br/><br/>
					</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#f9f9f9" style="padding: 10px 20px 10px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px;">
						Phone 1500617
						<br>
						WA 085975115292<br><br>

						Hormat kami,<br><br>

						ELCORPS lifestyle<br>
						Membership Team
					</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#dddddd" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
						<b><a href="https://elcorps.com/">elcorps</a></b>&nbsp;&copy;<?=date('Y')?>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>