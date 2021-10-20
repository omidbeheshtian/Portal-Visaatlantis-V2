<?php
/* if a hacker want to brute force attack on our forms in website we can show this errors with 2 functions ==> wp_nonce_filde and wp_verify_nonce */
	if(isset($_POST['SendLogin'])){

			valogin($_POST['phonenumberlogin']);
		}

	if(isset($_POST['SubmitSignUp'])){

	vasignup($_POST['phonenumbersignup']);
		}

	if(isset($_POST['SendAuth'])){

		vaauth($_POST['code']);
	}


	if(isset($_POST['SendAuthLogin'])){

		vaauthlogin($_POST['codelogin']);
	}