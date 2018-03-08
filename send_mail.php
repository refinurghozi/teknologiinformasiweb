<?php
						$name=$_POST['name'];
						$email=$_POST['email'];
						$message=$_POST['message'];
						

                        $to="r3f1nurghozi@gmail.com";

						$message="From:$name <br />".$message;

						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

						// More headers
						$headers .= 'From: '.$email.' <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
						$headers .= 'Cc: admin@yourdomain.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
						@mail($to,"Feedback",$message,$headers);
						if(@mail)
						{	
                            header("Refresh:0; url=index.php");
						}
						?>