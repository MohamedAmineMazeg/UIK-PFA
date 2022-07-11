<?php
session_start();
include("../config.php");

$idUser = $_SESSION['idUser'];
$profile = $_SESSION['profile'];
$fullName = $_SESSION['fullName'];

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title>page9 – 1</title>
	<style id="applicationStylesheet" type="text/css">
		.mediaViewInfo {
			--web-view-name: page9 – 1;
			--web-view-id: page9__1;
			--web-scale-to-fit: true;
			--web-scale-to-fit-type: width;
			--web-scale-on-resize: true;
			--web-enable-deep-linking: true;
		}

		:root {
			--web-view-ids: page9__1;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			border: none;
		}

		#page9__1 {
			position: absolute;
			width: 1920px;
			height: 2868px;
			background-color: rgba(255, 255, 255, 1);
			overflow: hidden;
			--web-view-name: page9 – 1;
			--web-view-id: page9__1;
			--web-scale-to-fit: true;
			--web-scale-to-fit-type: width;
			--web-scale-on-resize: true;
			--web-enable-deep-linking: true;
		}

		#Rectangle_128 {
			fill: rgba(244, 246, 250, 1);
		}

		.Rectangle_128 {
			position: absolute;
			overflow: visible;
			width: 1939px;
			height: 2609px;
			left: -19px;
			top: -115px;
		}

		#Rectangle_181 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_181 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 84px;
			top: 931px;
		}

		#Rectangle_158_da {
			fill: url(#Rectangle_158_da);
		}

		.Rectangle_158_da {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 611px;
			height: 905px;
			left: 1285px;
			top: 803px;
		}

		#Calendrier_des_examans__2021_- {
			left: 706px;
			top: 183px;
			position: absolute;
			overflow: visible;
			width: 509px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 44px;
			color: rgba(4, 4, 4, 1);
		}

		#Group_280 {
			opacity: 0.52;
			position: absolute;
			width: 254px;
			height: 256px;
			left: 120px;
			top: 470px;
			overflow: visible;
		}

		#Group_256 {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_dh {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_268 {
			position: absolute;
			width: 254px;
			height: 215px;
			left: 0px;
			top: 41px;
			overflow: visible;
		}

		#Group_263 {
			position: absolute;
			width: 47px;
			height: 15px;
			left: 202px;
			top: 0px;
			overflow: visible;
		}

		#n_ {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__do {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264 {
			position: absolute;
			width: 247px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__dq {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__dr {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ds {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__dt {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__du {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__dv {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__dw {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265 {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_5 {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0 {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1 {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2 {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3 {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4 {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6 {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266 {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_2_d {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7 {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8 {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9 {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_ea {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_eb {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_ec {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267 {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_9_ee {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_ef {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_eg {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_eh {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_ei {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_ej {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_ek {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_155 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_155 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 467px;
			top: 445px;
		}

		#Rectangle_159 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_159 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 850px;
			top: 445px;
		}

		#Group_283 {
			position: absolute;
			width: 254px;
			height: 276px;
			left: 503px;
			top: 465px;
			overflow: visible;
		}

		#Group_256_eo {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_ep {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_eq {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_er {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_es {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_et {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_eu {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_ev {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_268_ew {
			position: absolute;
			width: 254px;
			height: 215px;
			left: 0px;
			top: 61px;
			overflow: visible;
		}

		#Group_263_ex {
			position: absolute;
			width: 47px;
			height: 15px;
			left: 202px;
			top: 0px;
			overflow: visible;
		}

		#n__ey {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ez {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_e {
			position: absolute;
			width: 247px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__e {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__fa {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__fb {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__fc {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__fd {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__fe {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ff {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_e {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_5_e {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_fa {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_fb {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_fc {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_fd {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_fe {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_ff {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_fg {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_2_fh {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_fi {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_fj {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_fk {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_fl {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_fm {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_fn {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_fo {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_9_fp {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_fq {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_fr {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_fs {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_ft {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_fu {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_fv {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_279 {
			position: absolute;
			width: 257px;
			height: 276px;
			left: 885px;
			top: 464px;
			overflow: visible;
		}

		#Group_257 {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_fy {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_fz {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_f {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_ga {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_f {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_f {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_f {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_269 {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 1px;
			top: 61px;
			overflow: visible;
		}

		#Group_263_f {
			position: absolute;
			width: 207px;
			height: 15px;
			left: 42px;
			top: 0px;
			overflow: visible;
		}

		#n__f {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ga {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gb {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gc {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gd {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ge {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_gd {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_2_ge {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gf {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gg {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__gh {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_gi {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_gj {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_gk {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_gl {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_9_gm {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_gn {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_go {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_gp {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_gq {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_gr {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_gs {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_gt {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_6_gu {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_gv {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_gw {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_gx {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_gy {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_gz {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_g {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_g {
			position: absolute;
			width: 94px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_8_g {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_g {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_g {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_160 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_160 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 84px;
			top: 444px;
		}

		#Group_273 {
			position: absolute;
			width: 256px;
			height: 272px;
			left: 120px;
			top: 475px;
			overflow: visible;
		}

		#Group_258 {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_g {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_g {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_ha {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_hb {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_hc {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_hd {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_he {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_270 {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 57px;
			overflow: visible;
		}

		#Group_263_hg {
			position: absolute;
			width: 127px;
			height: 15px;
			left: 122px;
			top: 0px;
			overflow: visible;
		}

		#n__hh {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hi {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hj {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hk {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_hl {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_0_hm {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hn {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ho {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hp {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hq {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__hr {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_hs {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_ht {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_7_hu {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_hv {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_hw {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_hx {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_hy {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_hz {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_h {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_h {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_4_h {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_h {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_h {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_h {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_h {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_h {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_h {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_h {
			position: absolute;
			width: 174px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_6_ia {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_ib {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_ic {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_id {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_ie {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_292 {
			opacity: 0.3;
			position: absolute;
			width: 320px;
			height: 376px;
			left: 87px;
			top: 392px;
			display: none;
			overflow: visible;
		}

		#Rectangle_160_ig {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_160_ig {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 0px;
			top: 52px;
		}

		#September {
			left: 8px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 130px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.25px;
		}

		#Group_273_ii {
			position: absolute;
			width: 256px;
			height: 272px;
			left: 36px;
			top: 83px;
			overflow: visible;
		}

		#Group_258_ij {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_ik {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_il {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_im {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_in {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_io {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_ip {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_iq {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_270_ir {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 57px;
			overflow: visible;
		}

		#Group_263_is {
			position: absolute;
			width: 127px;
			height: 15px;
			left: 122px;
			top: 0px;
			overflow: visible;
		}

		#n__it {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__iu {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__iv {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__iw {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_ix {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_0_iy {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__iz {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__i {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ja {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__jb {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__jc {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_i {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_i {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_7_i {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_i {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_i {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_i {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_ja {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_jb {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_jc {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_jd {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_4_je {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_jf {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_jg {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_jh {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_ji {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_jj {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_jk {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_jl {
			position: absolute;
			width: 174px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_6_jm {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_jn {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_jo {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_jp {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_jq {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_310 {
			position: absolute;
			width: 256px;
			height: 276px;
			left: 120px;
			top: 950px;
			overflow: visible;
		}

		#Group_258_js {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_jt {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_ju {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_jv {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_jw {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_jx {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_jy {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_jz {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_270_j {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 61px;
			overflow: visible;
		}

		#Group_263_j {
			position: absolute;
			width: 127px;
			height: 15px;
			left: 122px;
			top: 0px;
			overflow: visible;
		}

		#n__j {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ka {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kb {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kc {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_j {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_0_j {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kd {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ke {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kf {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kg {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__kh {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_kd {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_ke {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_7_kf {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_kg {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_kh {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_ki {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_kj {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_kk {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_kl {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_km {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_4_kn {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_ko {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_kp {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_kq {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_kr {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_ks {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_kt {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_ku {
			position: absolute;
			width: 214px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_1_kv {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_kw {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_kx {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_ky {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_kz {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_k {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_169 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_169 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 388px;
			left: 467px;
			top: 931px;
		}

		#Rectangle_172 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_172 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 850px;
			top: 931px;
		}

		#Group_293 {
			position: absolute;
			width: 254px;
			height: 256px;
			left: 503px;
			top: 957px;
			overflow: visible;
		}

		#Group_256_k {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_k {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_k {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_k {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_la {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_k {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_la {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_lb {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_268_lc {
			position: absolute;
			width: 254px;
			height: 215px;
			left: 0px;
			top: 41px;
			overflow: visible;
		}

		#Group_263_ld {
			position: absolute;
			width: 47px;
			height: 15px;
			left: 202px;
			top: 0px;
			overflow: visible;
		}

		#n__le {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__lf {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_lg {
			position: absolute;
			width: 247px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__lh {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__li {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__lj {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__lk {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ll {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__lm {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ln {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_lo {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_5_lp {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_lq {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_lr {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_ls {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_lt {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_lu {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_lv {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_lw {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_2_lx {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_ly {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_lz {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_l {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_l {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_l {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_l {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_l {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_9_ma {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_l {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_l {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_l {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_l {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_ma {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_mb {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_257_mc {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 885px;
			top: 957px;
			overflow: visible;
		}

		#D_md {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_me {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_mf {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_mg {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_mh {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_mi {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_mj {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_269_mk {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 886px;
			top: 998px;
			overflow: visible;
		}

		#Group_263_ml {
			position: absolute;
			width: 207px;
			height: 15px;
			left: 42px;
			top: 0px;
			overflow: visible;
		}

		#n__mm {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mn {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mo {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mp {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mq {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mr {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_ms {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_2_mt {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mu {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mv {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__mw {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_mx {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_my {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_mz {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_m {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_9_m {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_m {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_m {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_m {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_m {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_m {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_m {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_m {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_6_na {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_na {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_nb {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_nc {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_nd {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_ne {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_nf {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_ng {
			position: absolute;
			width: 14px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_8_nh {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_170 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_170 {
			position: absolute;
			overflow: visible;
			width: 24px;
			height: 22px;
			left: 618px;
			top: 1144px;
		}

		#Rectangle_176 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_176 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 84px;
			top: 1429px;
		}

		#Group_301 {
			position: absolute;
			width: 256px;
			height: 256px;
			left: 120px;
			top: 1455px;
			overflow: visible;
		}

		#Group_258_nl {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_nm {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_nn {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_no {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_np {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_nq {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_nr {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_ns {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_270_nt {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 41px;
			overflow: visible;
		}

		#Group_263_nu {
			position: absolute;
			width: 207px;
			height: 15px;
			left: 42px;
			top: 0px;
			overflow: visible;
		}

		#n__nv {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__nw {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__nx {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ny {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__nz {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__n {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_n {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_2_n {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__oa {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ob {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__oc {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_n {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_n {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_n {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_n {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_9_oa {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_ob {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_oc {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_od {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_oe {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_of {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_og {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_oh {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_6_oi {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_oj {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_ok {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_ol {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_om {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_on {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_oo {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_op {
			position: absolute;
			width: 134px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_8_oq {
			opacity: 0.8;
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_or {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_os {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_ot {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_182 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_182 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 467px;
			top: 1429px;
		}

		#Rectangle_183 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_183 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 850px;
			top: 1429px;
		}

		#Group_312 {
			position: absolute;
			width: 256px;
			height: 275px;
			left: 503px;
			top: 1459px;
			overflow: visible;
		}

		#Group_256_ox {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_oy {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_oz {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_o {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_pa {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_o {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_o {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_o {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_268_o {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 60px;
			overflow: visible;
		}

		#Group_263_o {
			position: absolute;
			width: 87px;
			height: 15px;
			left: 162px;
			top: 0px;
			overflow: visible;
		}

		#n__o {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pa {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pb {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_pa {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__pc {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pd {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pe {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pf {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__pg {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ph {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_ph {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_pi {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_6_pj {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_pk {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_pl {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_pm {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_pn {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_po {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_pp {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_pq {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_3_pr {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_ps {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_pt {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_pu {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_pv {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_pw {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_px {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_py {
			position: absolute;
			width: 214px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_0_pz {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_p {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_p {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_p {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_p {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_p {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_313 {
			position: absolute;
			width: 255px;
			height: 275px;
			left: 885px;
			top: 1459px;
			overflow: visible;
		}

		#Group_257_p {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_p {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_p {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_p {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_qa {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_qb {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_qc {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_qd {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_269_qe {
			position: absolute;
			width: 254px;
			height: 215px;
			left: 1px;
			top: 60px;
			overflow: visible;
		}

		#Group_263_qf {
			position: absolute;
			width: 7px;
			height: 15px;
			left: 242px;
			top: 0px;
			overflow: visible;
		}

		#n__qg {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_qh {
			position: absolute;
			width: 247px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__qi {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qj {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qk {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ql {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qm {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qn {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qo {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_qp {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_4_qq {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__qr {
			opacity: 0.9;
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_qs {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_qt {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_qu {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_qv {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_qw {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_qx {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_1_qy {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_qz {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_q {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_q {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_q {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_q {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_q {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_q {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_8_ra {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_q {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_q {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_q {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_ra {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_rb {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_rc {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_184 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_184 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 84px;
			top: 1905px;
		}

		#Group_314 {
			position: absolute;
			width: 256px;
			height: 275px;
			left: 120px;
			top: 1935px;
			overflow: visible;
		}

		#Group_258_rf {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_rg {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_rh {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_ri {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_rj {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_rk {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_rl {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_rm {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_270_rn {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 60px;
			overflow: visible;
		}

		#Group_263_ro {
			position: absolute;
			width: 167px;
			height: 15px;
			left: 82px;
			top: 0px;
			overflow: visible;
		}

		#n__rp {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rq {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rr {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rs {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rt {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_ru {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_1_rv {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rw {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rx {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__ry {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__rz {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_r {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_r {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_r {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_8_r {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_r {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_r {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_r {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_r {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_r {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_r {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_sa {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_5_sb {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_sc {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_sd {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_se {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_sf {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_sg {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_sh {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_si {
			position: absolute;
			width: 94px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_8_sj {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_sk {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_sl {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_185 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_185 {
			filter: drop-shadow(10px 15px 25px rgba(74, 74, 74, 0.2));
			position: absolute;
			overflow: visible;
			width: 395px;
			height: 399px;
			left: 467px;
			top: 1905px;
		}

		#Group_316 {
			position: absolute;
			width: 256px;
			height: 272px;
			left: 503px;
			top: 1936px;
			overflow: visible;
		}

		#Group_256_so {
			position: absolute;
			width: 249px;
			height: 19px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_sp {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 11px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_sq {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_sr {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_ss {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_st {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 9px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_su {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_sv {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 10px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_268_sw {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 57px;
			overflow: visible;
		}

		#Group_263_sx {
			position: absolute;
			width: 87px;
			height: 15px;
			left: 162px;
			top: 0px;
			overflow: visible;
		}

		#n__sy {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__sz {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__s {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_264_s {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n__ta {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__tb {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__tc {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__td {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__te {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n__tf {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 8px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_s {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_265_s {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_6_ta {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_tb {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_tc {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_3_td {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_te {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_tf {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_tg {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_266_th {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_3_ti {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_tj {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_tk {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_0_tl {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_tm {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_2_tn {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_4_to {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Group_267_tp {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_0_tq {
			left: 200px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_5_tr {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_6_ts {
			left: 40px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_7_tt {
			left: 80px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_8_tu {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_9_tv {
			left: 160px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#n_1_tw {
			left: 240px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 15px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 12px;
			color: rgba(126, 124, 124, 1);
		}

		#Rectangle_187 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_187 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 232px;
			top: 726px;
		}

		#Rectangle_188 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_188 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 575px;
			top: 620px;
		}

		#Rectangle_190 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_190 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 695px;
			top: 670px;
		}

		#Rectangle_189 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_189 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 956px;
			top: 568px;
		}

		#Rectangle_191 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_191 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 958px;
			top: 668px;
		}

		#Rectangle_192 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_192 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 1077px;
			top: 992px;
		}

		#Rectangle_212 {
			fill: transparent;
			stroke: rgba(241, 216, 57, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_212 {
			position: absolute;
			overflow: visible;
			width: 46px;
			height: 42px;
			left: 1649px;
			top: 1068px;
		}

		#Rectangle_213 {
			fill: transparent;
			stroke: rgba(239, 239, 49, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_213 {
			position: absolute;
			overflow: visible;
			width: 46px;
			height: 42px;
			left: 1530px;
			top: 1295px;
		}

		#Rectangle_198 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_198 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 916px;
			top: 1563px;
		}

		#Rectangle_199 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_199 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 918px;
			top: 1613px;
		}

		#Rectangle_200 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_200 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 1078px;
			top: 1664px;
		}

		#Rectangle_201 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_201 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 534px;
			top: 2087px;
		}

		#Rectangle_206 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_206 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 150px;
			top: 2039px;
		}

		#Rectangle_207 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_207 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 150px;
			top: 2090px;
		}

		#Rectangle_208 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_208 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 192px;
			top: 2090px;
		}

		#Rectangle_209 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_209 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 314px;
			top: 2039px;
		}

		#Rectangle_202 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_202 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 574px;
			top: 2087px;
		}

		#Rectangle_203 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_203 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 614px;
			top: 2089px;
		}

		#Rectangle_204 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_204 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 654px;
			top: 2089px;
		}

		#Rectangle_205 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_205 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 694px;
			top: 2087px;
		}

		#Rectangle_195 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_195 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 612px;
			top: 1563px;
		}

		#Rectangle_196 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_196 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 534px;
			top: 1613px;
		}

		#Rectangle_197 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_197 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 534px;
			top: 1663px;
		}

		#Rectangle_194 {
			fill: transparent;
			stroke: rgba(255, 174, 75, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_194 {
			position: absolute;
			overflow: visible;
			width: 30px;
			height: 27px;
			left: 998px;
			top: 1142px;
		}

		#n_9_valuation_gnrale {
			left: 117px;
			top: 793px;
			position: absolute;
			overflow: visible;
			width: 109px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_2_Ds_anglais {
			left: 506px;
			top: 794px;
			position: absolute;
			overflow: visible;
			width: 65px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_9_Ds_algbre {
			left: 887px;
			top: 793px;
			position: absolute;
			overflow: visible;
			width: 67px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_5_Examen_programation {
			left: 893px;
			top: 1266px;
			position: absolute;
			overflow: visible;
			width: 119px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_7_Ds_JavaScript_ {
			left: 503px;
			top: 1770px;
			position: absolute;
			overflow: visible;
			width: 83px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_3_Ds_anglais_ {
			left: 885px;
			top: 1770px;
			position: absolute;
			overflow: visible;
			width: 67px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_7_examen_arabe {
			left: 120px;
			top: 2248px;
			position: absolute;
			overflow: visible;
			width: 83px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_2_examen_franais {
			left: 503px;
			top: 2248px;
			position: absolute;
			overflow: visible;
			width: 93px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_3_Ds_algorythm {
			left: 887px;
			top: 817px;
			position: absolute;
			overflow: visible;
			width: 79px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_4_Examen_arabe {
			left: 888px;
			top: 1290px;
			position: absolute;
			overflow: visible;
			width: 83px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_2_Ds_algbre {
			left: 503px;
			top: 1794px;
			position: absolute;
			overflow: visible;
			width: 67px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_0_Ds_math {
			left: 885px;
			top: 1794px;
			position: absolute;
			overflow: visible;
			width: 57px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_0_Ds_physique {
			left: 885px;
			top: 1818px;
			position: absolute;
			overflow: visible;
			width: 75px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_1_examen_anglais {
			left: 120px;
			top: 2272px;
			position: absolute;
			overflow: visible;
			width: 89px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_3_examen_JavaScript {
			left: 503px;
			top: 2272px;
			position: absolute;
			overflow: visible;
			width: 105px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_9_Ds_franais {
			left: 503px;
			top: 1818px;
			position: absolute;
			overflow: visible;
			width: 69px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_4_examen_algbre {
			left: 120px;
			top: 2296px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_4_examen_math {
			left: 503px;
			top: 2296px;
			position: absolute;
			overflow: visible;
			width: 81px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_5_examen_physique {
			left: 120px;
			top: 2320px;
			position: absolute;
			overflow: visible;
			width: 99px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_5_examen_programation {
			left: 503px;
			top: 2320px;
			position: absolute;
			overflow: visible;
			width: 119px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_6_valuation_finale {
			left: 503px;
			top: 2344px;
			position: absolute;
			overflow: visible;
			width: 95px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_2_Ds_math {
			left: 506px;
			top: 818px;
			position: absolute;
			overflow: visible;
			width: 57px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#n_9_DS_JEE {
			left: 504px;
			top: 1255px;
			position: absolute;
			overflow: visible;
			width: 51px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 10px;
			color: rgba(4, 4, 4, 1);
		}

		#Fvrier {
			left: 1502px;
			top: 931px;
			position: absolute;
			overflow: visible;
			width: 99px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 30px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Group_317 {
			position: absolute;
			width: 388px;
			height: 386px;
			left: 1359px;
			top: 1016px;
			overflow: visible;
		}

		#Group_257_va {
			position: absolute;
			width: 376px;
			height: 29px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#D_vb {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 16px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#L_vc {
			left: 61px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_vd {
			left: 121px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 19px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#M_ve {
			left: 182px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 19px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#J_vf {
			left: 242px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 13px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#V_vg {
			left: 302px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 14px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#S_vh {
			left: 363px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 14px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(1, 1, 1, 1);
			letter-spacing: 0.25px;
		}

		#Group_269_vi {
			position: absolute;
			width: 387px;
			height: 324px;
			left: 1px;
			top: 62px;
			overflow: visible;
		}

		#Group_263_vj {
			position: absolute;
			width: 314px;
			height: 23px;
			left: 64px;
			top: 0px;
			overflow: visible;
		}

		#n__vk {
			left: 242px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vl {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vm {
			left: 60px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vn {
			left: 121px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vo {
			left: 181px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vp {
			left: 303px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#Group_264_vq {
			position: absolute;
			width: 383px;
			height: 23px;
			left: 4px;
			top: 75px;
			overflow: visible;
		}

		#n_2_vr {
			left: 302px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vs {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vt {
			left: 60px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n__vu {
			left: 120px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 12px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#n_0_vv {
			left: 181px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_1_vw {
			left: 241px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_3_vx {
			left: 363px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#Group_265_vy {
			position: absolute;
			width: 382.999px;
			height: 22px;
			left: 0px;
			top: 150px;
			overflow: visible;
		}

		#n_9_vz {
			left: 302px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_4_v {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_5_v {
			left: 61px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_6_v {
			left: 122px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_7_v {
			left: 182px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_8_v {
			left: 243px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_0_v {
			left: 363px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#Group_266_v {
			position: absolute;
			width: 382.999px;
			height: 22px;
			left: 0px;
			top: 227px;
			overflow: visible;
		}

		#n_6_wa {
			left: 302px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_1_v {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_2_v {
			left: 61px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_3_wa {
			left: 122px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_4_wb {
			left: 182px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_5_wc {
			left: 243px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#n_7_wd {
			left: 363px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#Group_267_we {
			position: absolute;
			width: 20px;
			height: 22px;
			left: 0px;
			top: 302px;
			overflow: visible;
		}

		#n_8_wf {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 21px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 17px;
			color: rgba(255, 255, 255, 1);
		}

		#Path_620 {
			opacity: 0.61;
			fill: rgba(255, 255, 255, 1);
		}

		.Path_620 {
			overflow: visible;
			position: absolute;
			width: 11.096px;
			height: 18.826px;
			left: 1366.834px;
			top: 941.087px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_621 {
			opacity: 0.61;
			fill: rgba(255, 255, 255, 1);
		}

		.Path_621 {
			overflow: visible;
			position: absolute;
			width: 11.096px;
			height: 18.826px;
			left: 1728.07px;
			top: 941.087px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Rectangle_210 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_210 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 554px;
			height: 75px;
			left: 1285px;
			top: 826px;
		}

		#Rectangle_214 {
			fill: rgba(42, 80, 148, 1);
		}

		.Rectangle_214 {
			filter: drop-shadow(0px 8px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 554px;
			height: 75px;
			left: 1285px;
			top: 1463px;
		}

		#Rectangle_215 {
			fill: rgba(36, 68, 124, 1);
		}

		.Rectangle_215 {
			filter: drop-shadow(0px 8px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 554px;
			height: 75px;
			left: 1285px;
			top: 1534px;
		}

		#Group_319 {
			position: absolute;
			width: 405px;
			height: 19px;
			left: 1351px;
			top: 845px;
			overflow: visible;
		}

		#Jour_ {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 37px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Semaine_ {
			left: 169px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 67px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Mois_ {
			left: 368px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 38px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Rectangle_211 {
			fill: transparent;
			stroke: rgba(230, 211, 35, 1);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_211 {
			position: absolute;
			overflow: visible;
			width: 62px;
			height: 32px;
			left: 1703px;
			top: 839px;
		}

		#Group_320 {
			position: absolute;
			width: 295px;
			height: 19px;
			left: 1309px;
			top: 1482px;
			overflow: visible;
		}

		#n_2052021_Examen_programation_ {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 255px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#n_0h_ {
			left: 265px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 31px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#Salle_labo4 {
			left: 1659px;
			top: 1482px;
			position: absolute;
			overflow: visible;
			width: 83px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#Salle_C3 {
			left: 1659px;
			top: 1553px;
			position: absolute;
			overflow: visible;
			width: 61px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#Group_321 {
			position: absolute;
			width: 241px;
			height: 19px;
			left: 1309px;
			top: 1553px;
			overflow: visible;
		}

		#n_2h_ {
			left: 211px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 31px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#n_4052021_Examen_arabe_a {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 201px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(255, 255, 255, 1);
		}

		#task_alt_black_24dp {
			position: absolute;
			width: 24px;
			height: 24px;
			left: 1776px;
			top: 1480px;
			overflow: visible;
		}

		#Rectangle_216 {
			fill: transparent;
		}

		.Rectangle_216 {
			position: absolute;
			overflow: visible;
			width: 24px;
			height: 24px;
			left: 0px;
			top: 0px;
		}

		#Path_622 {
			fill: rgba(196, 223, 55, 1);
		}

		.Path_622 {
			overflow: visible;
			position: absolute;
			width: 20px;
			height: 20px;
			left: 0px;
			top: 4px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#task_alt_black_24dp_w {
			position: absolute;
			width: 24px;
			height: 24px;
			left: 1776px;
			top: 1551px;
			overflow: visible;
		}

		#Rectangle_216_w {
			fill: transparent;
		}

		.Rectangle_216_w {
			position: absolute;
			overflow: visible;
			width: 24px;
			height: 24px;
			left: 0px;
			top: 0px;
		}

		#Path_622_w {
			fill: rgba(255, 255, 255, 1);
		}

		.Path_622_w {
			overflow: visible;
			position: absolute;
			width: 20px;
			height: 20px;
			left: 0px;
			top: 4px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Rectangle_264 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_264 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 84px;
			top: 1373px;
		}

		#Rectangle_273 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_273 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 850px;
			top: 389px;
		}

		#Rectangle_275 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_275 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 467px;
			top: 389px;
		}

		#Rectangle_274 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_274 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 84px;
			top: 388px;
		}

		#Rectangle_271 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_271 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 467px;
			top: 1849px;
		}

		#Rectangle_272 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_272 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 84px;
			top: 1849px;
		}

		#Rectangle_268 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_268 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 84px;
			top: 875px;
		}

		#Rectangle_269 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_269 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 467px;
			top: 875px;
		}

		#Rectangle_270 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_270 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 853px;
			top: 875px;
		}

		#Rectangle_265 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_265 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 467px;
			top: 1373px;
		}

		#Rectangle_266 {
			fill: rgba(69, 131, 242, 1);
		}

		.Rectangle_266 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 338px;
			height: 61px;
			left: 853px;
			top: 1373px;
		}

		#Mars {
			left: 92px;
			top: 1378px;
			position: absolute;
			overflow: visible;
			width: 58px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Dcembre {
			left: 95px;
			top: 880px;
			position: absolute;
			overflow: visible;
			width: 121px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Janvier {
			left: 485px;
			top: 880px;
			position: absolute;
			overflow: visible;
			width: 86px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Fvrier_xi {
			left: 866px;
			top: 880px;
			position: absolute;
			overflow: visible;
			width: 82px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Avril {
			left: 485px;
			top: 1378px;
			position: absolute;
			overflow: visible;
			width: 54px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Mai {
			left: 867px;
			top: 1378px;
			position: absolute;
			overflow: visible;
			width: 42px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Juillet {
			left: 485px;
			top: 1853px;
			position: absolute;
			overflow: visible;
			width: 74px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#Juin {
			left: 97px;
			top: 1854px;
			position: absolute;
			overflow: visible;
			width: 50px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#October {
			left: 482px;
			top: 392px;
			position: absolute;
			overflow: visible;
			width: 95px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#November {
			left: 863px;
			top: 392px;
			position: absolute;
			overflow: visible;
			width: 122px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}

		#September_xp {
			left: 92px;
			top: 392px;
			position: absolute;
			overflow: visible;
			width: 130px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 25px;
			color: rgba(255, 255, 255, 1);
			letter-spacing: 0.25px;
		}
	</style>
	<script id="applicationScript">
		///////////////////////////////////////
		// INITIALIZATION
		///////////////////////////////////////

		/**
		 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
		 * Code subject to change.
		 **/

		if (window.console == null) {
			window["console"] = {
				log: function() {}
			}
		}; // some browsers do not set console

		var Application = function() {
			// event constants
			this.prefix = "--web-";
			this.NAVIGATION_CHANGE = "viewChange";
			this.VIEW_NOT_FOUND = "viewNotFound";
			this.VIEW_CHANGE = "viewChange";
			this.VIEW_CHANGING = "viewChanging";
			this.STATE_NOT_FOUND = "stateNotFound";
			this.APPLICATION_COMPLETE = "applicationComplete";
			this.APPLICATION_RESIZE = "applicationResize";
			this.SIZE_STATE_NAME = "data-is-view-scaled";
			this.STATE_NAME = this.prefix + "state";

			this.lastTrigger = null;
			this.lastView = null;
			this.lastState = null;
			this.lastOverlay = null;
			this.currentView = null;
			this.currentState = null;
			this.currentOverlay = null;
			this.currentQuery = {
				index: 0,
				rule: null,
				mediaText: null,
				id: null
			};
			this.inclusionQuery = "(min-width: 0px)";
			this.exclusionQuery = "none and (min-width: 99999px)";
			this.LastModifiedDateLabelName = "LastModifiedDateLabel";
			this.viewScaleSliderId = "ViewScaleSliderInput";
			this.pageRefreshedName = "showPageRefreshedNotification";
			this.application = null;
			this.applicationStylesheet = null;
			this.showByMediaQuery = null;
			this.mediaQueryDictionary = {};
			this.viewsDictionary = {};
			this.addedViews = [];
			this.viewStates = [];
			this.views = [];
			this.viewIds = [];
			this.viewQueries = {};
			this.overlays = {};
			this.overlayIds = [];
			this.numberOfViews = 0;
			this.verticalPadding = 0;
			this.horizontalPadding = 0;
			this.stateName = null;
			this.viewScale = 1;
			this.viewLeft = 0;
			this.viewTop = 0;
			this.horizontalScrollbarsNeeded = false;
			this.verticalScrollbarsNeeded = false;

			// view settings
			this.showUpdateNotification = false;
			this.showNavigationControls = false;
			this.scaleViewsToFit = false;
			this.scaleToFitOnDoubleClick = false;
			this.actualSizeOnDoubleClick = false;
			this.scaleViewsOnResize = false;
			this.navigationOnKeypress = false;
			this.showViewName = false;
			this.enableDeepLinking = true;
			this.refreshPageForChanges = false;
			this.showRefreshNotifications = true;

			// view controls
			this.scaleViewSlider = null;
			this.lastModifiedLabel = null;
			this.supportsPopState = false; // window.history.pushState!=null;
			this.initialized = false;

			// refresh properties
			this.refreshDuration = 250;
			this.lastModifiedDate = null;
			this.refreshRequest = null;
			this.refreshInterval = null;
			this.refreshContent = null;
			this.refreshContentSize = null;
			this.refreshCheckContent = false;
			this.refreshCheckContentSize = false;

			var self = this;

			self.initialize = function(event) {
				var view = self.getVisibleView();
				var views = self.getVisibleViews();
				if (view == null) view = self.getInitialView();
				self.collectViews();
				self.collectOverlays();
				self.collectMediaQueries();

				for (let index = 0; index < views.length; index++) {
					var view = views[index];
					self.setViewOptions(view);
					self.setViewVariables(view);
					self.centerView(view);
				}

				// sometimes the body size is 0 so we call this now and again later
				if (self.initialized) {
					window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
					window.addEventListener("keyup", self.keypressHandler);
					window.addEventListener("keypress", self.keypressHandler);
					window.addEventListener("resize", self.resizeHandler);
					window.document.addEventListener("dblclick", self.doubleClickHandler);

					if (self.supportsPopState) {
						window.addEventListener('popstate', self.popStateHandler);
					} else {
						window.addEventListener('hashchange', self.hashChangeHandler);
					}

					// we are ready to go
					window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
				}

				if (self.initialized == false) {
					if (self.enableDeepLinking) {
						self.syncronizeViewToURL();
					}

					if (self.refreshPageForChanges) {
						self.setupRefreshForChanges();
					}

					self.initialized = true;
				}

				if (self.scaleViewsToFit) {
					self.viewScale = self.scaleViewToFit(view);

					if (self.viewScale < 0) {
						setTimeout(self.scaleViewToFit, 500, view);
					}
				} else if (view) {
					self.viewScale = self.getViewScaleValue(view);
					self.centerView(view);
					self.updateSliderValue(self.viewScale);
				} else {
					// no view found
				}

				if (self.showUpdateNotification) {
					self.showNotification();
				}

				//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
				//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
			}


			///////////////////////////////////////
			// AUTO REFRESH 
			///////////////////////////////////////

			self.setupRefreshForChanges = function() {
				self.refreshRequest = new XMLHttpRequest();

				if (!self.refreshRequest) {
					return false;
				}

				// get document start values immediately
				self.requestRefreshUpdate();
			}

			/**
			 * Attempt to check the last modified date by the headers 
			 * or the last modified property from the byte array (experimental)
			 **/
			self.requestRefreshUpdate = function() {
				var url = document.location.href;
				var protocol = window.location.protocol;
				var method;

				try {

					if (self.refreshCheckContentSize) {
						self.refreshRequest.open('HEAD', url, true);
					} else if (self.refreshCheckContent) {
						self.refreshContent = document.documentElement.outerHTML;
						self.refreshRequest.open('GET', url, true);
						self.refreshRequest.responseType = "text";
					} else {

						// get page last modified date for the first call to compare to later
						if (self.lastModifiedDate == null) {

							// File system does not send headers in FF so get blob if possible
							if (protocol == "file:") {
								self.refreshRequest.open("GET", url, true);
								self.refreshRequest.responseType = "blob";
							} else {
								self.refreshRequest.open("HEAD", url, true);
								self.refreshRequest.responseType = "blob";
							}

							self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

							// In some browsers (Chrome & Safari) this error occurs at send: 
							// 
							// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
							// has been blocked by CORS policy: 
							// Cross origin requests are only supported for protocol schemes: 
							// http, data, chrome, chrome-extension, https.
							// 
							// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
							// 
							// Solution is to run a local server, set local permissions or test in another browser
							self.refreshRequest.send(null);

							// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
							// 
							// DOM7011: The code on this page disabled back and forward caching.

							// In Brave (Chrome) error when on the server
							// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
							// self.refreshRequest.send(null);

						} else {
							self.refreshRequest = new XMLHttpRequest();
							self.refreshRequest.onreadystatechange = self.refreshHandler;
							self.refreshRequest.ontimeout = function() {
								self.log("Couldn't find page to check for updates");
							}

							var method;
							if (protocol == "file:") {
								method = "GET";
							} else {
								method = "HEAD";
							}

							//refreshRequest.open('HEAD', url, true);
							self.refreshRequest.open(method, url, true);
							self.refreshRequest.responseType = "blob";
							self.refreshRequest.send(null);
						}
					}
				} catch (error) {
					self.log("Refresh failed for the following reason:")
					self.log(error);
				}
			}

			self.refreshHandler = function() {
				var contentSize;

				try {

					if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {

						if (self.refreshRequest.status === 2 ||
							self.refreshRequest.status === 200) {
							var pageChanged = false;

							self.updateLastModifiedLabel();

							if (self.refreshCheckContentSize) {
								var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
								contentSize = self.refreshRequest.getResponseHeader("Content-Length");
								//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
								var headers = self.refreshRequest.getAllResponseHeaders();
								var hasContentHeader = headers.indexOf("Content-Length") != -1;

								if (hasContentHeader) {
									contentSize = self.refreshRequest.getResponseHeader("Content-Length");

									// size has not been set yet
									if (self.refreshContentSize == null) {
										self.refreshContentSize = contentSize;
										// exit and let interval call this method again
										return;
									}

									if (contentSize != self.refreshContentSize) {
										pageChanged = true;
									}
								}
							} else if (self.refreshCheckContent) {

								if (self.refreshRequest.responseText != self.refreshContent) {
									pageChanged = true;
								}
							} else {
								lastModifiedHeader = self.getLastModified(self.refreshRequest);

								if (self.lastModifiedDate != lastModifiedHeader) {
									self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" + lastModifiedHeader);
									pageChanged = true;
								}

							}


							if (pageChanged) {
								clearInterval(self.refreshInterval);
								self.refreshUpdatedPage();
								return;
							}

						} else {
							self.log('There was a problem with the request.');
						}

					}
				} catch (error) {
					//console.log('Caught Exception: ' + error);
				}
			}

			self.refreshOnLoadOnceHandler = function(event) {

				// get the last modified date
				if (self.refreshRequest.response) {
					self.lastModifiedDate = self.getLastModified(self.refreshRequest);

					if (self.lastModifiedDate != null) {

						if (self.refreshInterval == null) {
							self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
						}
					} else {
						self.log("Could not get last modified date from the server");
					}
				}
			}

			self.refreshUpdatedPage = function() {
				if (self.showRefreshNotifications) {
					var date = new Date().setTime((new Date().getTime() + 10000));
					document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
				}

				document.location.reload(true);
			}

			self.showNotification = function(duration) {
				var notificationID = self.pageRefreshedName + "ID";
				var notification = document.getElementById(notificationID);
				if (duration == null) duration = 4000;

				if (notification != null) {
					return;
				}

				notification = document.createElement("div");
				notification.id = notificationID;
				notification.textContent = "PAGE UPDATED";
				var styleRule = ""
				styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
				styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
				styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
				notification.setAttribute("style", styleRule);

				notification.className = "PageRefreshedClass";
				notification.addEventListener("click", function() {
					notification.parentNode.removeChild(notification);
				});

				document.body.appendChild(notification);

				setTimeout(function() {
					notification.style.opacity = "0";
					notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
					setTimeout(function() {
						try {
							notification.parentNode.removeChild(notification);
						} catch (error) {}
					}, duration)
				}, duration);

				document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
			}

			/**
			 * Get the last modified date from the header 
			 * or file object after request has been received
			 **/
			self.getLastModified = function(request) {
				var date;

				// file protocol - FILE object with last modified property
				if (request.response && request.response.lastModified) {
					date = request.response.lastModified;
				}

				// http protocol - check headers
				if (date == null) {
					date = request.getResponseHeader("Last-Modified");
				}

				return date;
			}

			self.updateLastModifiedLabel = function() {
				var labelValue = "";

				if (self.lastModifiedLabel == null) {
					self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
				}

				if (self.lastModifiedLabel) {
					var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
					var minutes = 0;
					var hours = 0;

					if (seconds < 60) {
						seconds = Math.floor(seconds / 10) * 10;
						labelValue = seconds + " seconds";
					} else {
						minutes = parseInt((seconds / 60) + "");

						if (minutes > 60) {
							hours = parseInt((seconds / 60 / 60) + "");
							labelValue += hours == 1 ? " hour" : " hours";
						} else {
							labelValue = minutes + "";
							labelValue += minutes == 1 ? " minute" : " minutes";
						}
					}

					if (seconds < 10) {
						labelValue = "Updated now";
					} else {
						labelValue = "Updated " + labelValue + " ago";
					}

					if (self.lastModifiedLabel.firstElementChild) {
						self.lastModifiedLabel.firstElementChild.textContent = labelValue;

					} else if ("textContent" in self.lastModifiedLabel) {
						self.lastModifiedLabel.textContent = labelValue;
					}
				}
			}

			self.getShortString = function(string, length) {
				if (length == null) length = 30;
				string = string != null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
				return string;
			}

			self.getShortNumber = function(value, places) {
				if (places == null || places < 1) places = 4;
				value = Math.round(value * Math.pow(10, places)) / Math.pow(10, places);
				return value;
			}

			///////////////////////////////////////
			// NAVIGATION CONTROLS
			///////////////////////////////////////

			self.updateViewLabel = function() {
				var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
				var view = self.getVisibleView();
				var viewIndex = view ? self.getViewIndex(view) : -1;
				var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
				var viewId = view ? view.id : null;

				if (viewNavigationLabel && view) {
					if (viewName && viewName.indexOf('"') != -1) {
						viewName = viewName.replace(/"/g, "");
					}

					if (self.showViewName) {
						viewNavigationLabel.textContent = viewName;
						self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
					} else {
						viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
						self.setTooltip(viewNavigationLabel, viewName);
					}

				}
			}

			self.updateURL = function(view) {
				view = view == null ? self.getVisibleView() : view;
				var viewId = view ? view.id : null
				var viewFragment = view ? "#" + viewId : null;

				if (viewId && self.viewIds.length > 1 && self.enableDeepLinking) {

					if (self.supportsPopState == false) {
						self.setFragment(viewId);
					} else {
						if (viewFragment != window.location.hash) {

							if (window.location.hash == null) {
								window.history.replaceState({
									name: viewId
								}, null, viewFragment);
							} else {
								window.history.pushState({
									name: viewId
								}, null, viewFragment);
							}
						}
					}
				}
			}

			self.updateURLState = function(view, stateName) {
				stateName = view && (stateName == "" || stateName == null) ? self.getStateNameByViewId(view.id) : stateName;

				if (self.supportsPopState == false) {
					self.setFragment(stateName);
				} else {
					if (stateName != window.location.hash) {

						if (window.location.hash == null) {
							window.history.replaceState({
								name: view.viewId
							}, null, stateName);
						} else {
							window.history.pushState({
								name: view.viewId
							}, null, stateName);
						}
					}
				}
			}

			self.setFragment = function(value) {
				window.location.hash = "#" + value;
			}

			self.setTooltip = function(element, value) {
				// setting the tooltip in edge causes a page crash on hover
				if (/Edge/.test(navigator.userAgent)) {
					return;
				}

				if ("title" in element) {
					element.title = value;
				}
			}

			self.getStylesheetRules = function(styleSheet) {
				try {
					if (styleSheet) return styleSheet.cssRules || styleSheet.rules;

					return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
				} catch (error) {
					// ERRORS:
					// SecurityError: The operation is insecure.
					// Errors happen when script loads before stylesheet or loading an external css locally

					// InvalidAccessError: A parameter or an operation is not supported by the underlying object
					// Place script after stylesheet

					console.log(error);
					if (error.toString().indexOf("The operation is insecure") != -1) {
						console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
					}
					return [];
				}
			}

			/**
			 * If single page application hide all of the views. 
			 * @param {Number} selectedIndex if provided shows the view at index provided
			 **/
			self.hideViews = function(selectedIndex, animation) {
				var rules = self.getStylesheetRules();
				var queryIndex = 0;
				var numberOfRules = rules != null ? rules.length : 0;

				// loop through rules and hide media queries except selected
				for (var i = 0; i < numberOfRules; i++) {
					var rule = rules[i];
					var cssText = rule && rule.cssText;

					if (rule.media != null && cssText.match("--web-view-name:")) {

						if (queryIndex == selectedIndex) {
							self.currentQuery.mediaText = rule.conditionText;
							self.currentQuery.index = selectedIndex;
							self.currentQuery.rule = rule;
							self.enableMediaQuery(rule);
						} else {
							if (animation) {
								self.fadeOut(rule)
							} else {
								self.disableMediaQuery(rule);
							}
						}

						queryIndex++;
					}
				}

				self.numberOfViews = queryIndex;
				self.updateViewLabel();
				self.updateURL();

				self.dispatchViewChange();

				var view = self.getVisibleView();
				var viewIndex = view ? self.getViewIndex(view) : -1;

				return viewIndex == selectedIndex ? view : null;
			}

			/**
			 * If single page application hide all of the views. 
			 * @param {HTMLElement} selectedView if provided shows the view passed in
			 **/
			self.hideAllViews = function(selectedView, animation) {
				var views = self.views;
				var queryIndex = 0;
				var numberOfViews = views != null ? views.length : 0;

				// loop through rules and hide media queries except selected
				for (var i = 0; i < numberOfViews; i++) {
					var viewData = views[i];
					var view = viewData && viewData.view;
					var mediaRule = viewData && viewData.mediaRule;

					if (view == selectedView) {
						self.currentQuery.mediaText = mediaRule.conditionText;
						self.currentQuery.index = queryIndex;
						self.currentQuery.rule = mediaRule;
						self.enableMediaQuery(mediaRule);
					} else {
						if (animation) {
							self.fadeOut(mediaRule)
						} else {
							self.disableMediaQuery(mediaRule);
						}
					}

					queryIndex++;
				}

				self.numberOfViews = queryIndex;
				self.updateViewLabel();
				self.updateURL();
				self.dispatchViewChange();

				var visibleView = self.getVisibleView();

				return visibleView == selectedView ? selectedView : null;
			}

			/**
			 * Hide view
			 * @param {Object} view element to hide
			 **/
			self.hideView = function(view) {
				var rule = view ? self.mediaQueryDictionary[view.id] : null;

				if (rule) {
					self.disableMediaQuery(rule);
				}
			}

			/**
			 * Hide overlay
			 * @param {Object} overlay element to hide
			 **/
			self.hideOverlay = function(overlay) {
				var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

				if (rule) {
					self.disableMediaQuery(rule);

					//if (self.showByMediaQuery) {
					overlay.style.display = "none";
					//}
				}
			}

			/**
			 * Show the view by media query. Does not hide current views
			 * Sets view options by default
			 * @param {Object} view element to show
			 * @param {Boolean} setViewOptions sets view options if null or true
			 */
			self.showViewByMediaQuery = function(view, setViewOptions) {
				var id = view ? view.id : null;
				var query = id ? self.mediaQueryDictionary[id] : null;
				var isOverlay = view ? self.isOverlay(view) : false;
				setViewOptions = setViewOptions == null ? true : setViewOptions;

				if (query) {
					self.enableMediaQuery(query);

					if (isOverlay && view && setViewOptions) {
						self.setViewVariables(null, view);
					} else {
						if (view && setViewOptions) self.setViewOptions(view);
						if (view && setViewOptions) self.setViewVariables(view);
					}
				}
			}

			/**
			 * Show the view. Does not hide current views
			 */
			self.showView = function(view, setViewOptions) {
				var id = view ? view.id : null;
				var query = id ? self.mediaQueryDictionary[id] : null;
				var display = null;
				setViewOptions = setViewOptions == null ? true : setViewOptions;

				if (query) {
					self.enableMediaQuery(query);
					if (view == null) view = self.getVisibleView();
					if (view && setViewOptions) self.setViewOptions(view);
				} else if (id) {
					display = window.getComputedStyle(view).getPropertyValue("display");
					if (display == "" || display == "none") {
						view.style.display = "block";
					}
				}

				if (view) {
					if (self.currentView != null) {
						self.lastView = self.currentView;
					}

					self.currentView = view;
				}
			}

			self.showViewById = function(id, setViewOptions) {
				var view = id ? self.getViewById(id) : null;

				if (view) {
					self.showView(view);
					return;
				}

				self.log("View not found '" + id + "'");
			}

			self.getElementView = function(element) {
				var view = element;
				var viewFound = false;

				while (viewFound == false || view == null) {
					if (view && self.viewsDictionary[view.id]) {
						return view;
					}
					view = view.parentNode;
				}
			}

			/**
			 * Show overlay over view
			 * @param {Event | HTMLElement} event event or html element with styles applied
			 * @param {String} id id of view or view reference
			 * @param {Number} x x location
			 * @param {Number} y y location
			 */
			self.showOverlay = function(event, id, x, y) {
				var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
				var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
				var centerHorizontally = false;
				var centerVertically = false;
				var anchorLeft = false;
				var anchorTop = false;
				var anchorRight = false;
				var anchorBottom = false;
				var display = null;
				var reparent = true;
				var view = null;

				if (overlay == null || overlay == false) {
					self.log("Overlay not found, '" + id + "'");
					return;
				}

				// get enter animation - event target must have css variables declared
				if (event) {
					var button = event.currentTarget || event; // can be event or htmlelement
					var buttonComputedStyles = getComputedStyle(button);
					var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix + "action-target").trim();
					var animation = buttonComputedStyles.getPropertyValue(self.prefix + "animation").trim();
					var isAnimated = animation != "";
					var targetType = buttonComputedStyles.getPropertyValue(self.prefix + "action-type").trim();
					var actionTarget = self.application ? null : self.getElement(actionTargetValue);
					var actionTargetStyles = actionTarget ? actionTarget.style : null;

					if (actionTargetStyles) {
						actionTargetStyles.setProperty("animation", animation);
					}

					if ("stopImmediatePropagation" in event) {
						event.stopImmediatePropagation();
					}
				}

				if (self.application == false || targetType == "page") {
					document.location.href = "./" + actionTargetValue;
					return;
				}

				// remove any current overlays
				if (self.currentOverlay) {

					// act as switch if same button
					if (self.currentOverlay == actionTarget || self.currentOverlay == null) {
						if (self.lastTrigger == button) {
							self.removeOverlay(isAnimated);
							return;
						}
					} else {
						self.removeOverlay(isAnimated);
					}
				}

				if (reparent) {
					view = self.getElementView(button);
					if (view) {
						view.appendChild(overlay);
					}
				}

				if (query) {
					//self.setElementAnimation(overlay, null);
					//overlay.style.animation = animation;
					self.enableMediaQuery(query);

					var display = overlay && overlay.style.display;

					if (overlay && display == "" || display == "none") {
						overlay.style.display = "block";
						//self.setViewOptions(overlay);
					}

					// add animation defined in event target style declaration
					if (animation && self.supportAnimations) {
						self.fadeIn(overlay, false, animation);
					}
				} else if (id) {

					display = window.getComputedStyle(overlay).getPropertyValue("display");

					if (display == "" || display == "none") {
						overlay.style.display = "block";
					}

					// add animation defined in event target style declaration
					if (animation && self.supportAnimations) {
						self.fadeIn(overlay, false, animation);
					}
				}

				// do not set x or y position if centering
				var horizontal = self.prefix + "center-horizontally";
				var vertical = self.prefix + "center-vertically";
				var style = overlay.style;
				var transform = [];

				centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
				centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
				anchorLeft = self.getIsStyleDefined(id, "left");
				anchorRight = self.getIsStyleDefined(id, "right");
				anchorTop = self.getIsStyleDefined(id, "top");
				anchorBottom = self.getIsStyleDefined(id, "bottom");


				if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
					style = self.viewsDictionary[overlay.id].styleDeclaration.style;
				}

				if (centerHorizontally) {
					style.left = "50%";
					style.transformOrigin = "0 0";
					transform.push("translateX(-50%)");
				} else if (anchorRight && anchorLeft) {
					style.left = x + "px";
				} else if (anchorRight) {
					//style.right = x + "px";
				} else {
					style.left = x + "px";
				}

				if (centerVertically) {
					style.top = "50%";
					transform.push("translateY(-50%)");
					style.transformOrigin = "0 0";
				} else if (anchorTop && anchorBottom) {
					style.top = y + "px";
				} else if (anchorBottom) {
					//style.bottom = y + "px";
				} else {
					style.top = y + "px";
				}

				if (transform.length) {
					style.transform = transform.join(" ");
				}

				self.currentOverlay = overlay;
				self.lastTrigger = button;
			}

			self.goBack = function() {
				if (self.currentOverlay) {
					self.removeOverlay();
				} else if (self.lastView) {
					self.goToView(self.lastView.id);
				}
			}

			self.removeOverlay = function(animate) {
				var overlay = self.currentOverlay;
				animate = animate === false ? false : true;

				if (overlay) {
					var style = overlay.style;

					if (style.animation && self.supportAnimations && animate) {
						self.reverseAnimation(overlay, true);

						var duration = self.getAnimationDuration(style.animation, true);

						setTimeout(function() {
							self.setElementAnimation(overlay, null);
							self.hideOverlay(overlay);
							self.currentOverlay = null;
						}, duration);
					} else {
						self.setElementAnimation(overlay, null);
						self.hideOverlay(overlay);
						self.currentOverlay = null;
					}
				}
			}

			/**
			 * Reverse the animation and hide after
			 * @param {Object} target element with animation
			 * @param {Boolean} hide hide after animation ends
			 */
			self.reverseAnimation = function(target, hide) {
				var lastAnimation = null;
				var style = target.style;

				style.animationPlayState = "paused";
				lastAnimation = style.animation;
				style.animation = null;
				style.animationPlayState = "paused";

				if (hide) {
					//target.addEventListener("animationend", self.animationEndHideHandler);

					var duration = self.getAnimationDuration(lastAnimation, true);
					var isOverlay = self.isOverlay(target);

					setTimeout(function() {
						self.setElementAnimation(target, null);

						if (isOverlay) {
							self.hideOverlay(target);
						} else {
							self.hideView(target);
						}
					}, duration);
				}

				setTimeout(function() {
					style.animation = lastAnimation;
					style.animationPlayState = "paused";
					style.animationDirection = "reverse";
					style.animationPlayState = "running";
				}, 30);
			}

			self.animationEndHandler = function(event) {
				var target = event.currentTarget;
				self.dispatchEvent(new Event(event.type));
			}

			self.isOverlay = function(view) {
				var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

				return result;
			}

			self.animationEndHideHandler = function(event) {
				var target = event.currentTarget;
				self.setViewVariables(null, target);
				self.hideView(target);
				target.removeEventListener("animationend", self.animationEndHideHandler);
			}

			self.animationEndShowHandler = function(event) {
				var target = event.currentTarget;
				target.removeEventListener("animationend", self.animationEndShowHandler);
			}

			self.setViewOptions = function(view) {

				if (view) {
					self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
					self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
					self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
					self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
					self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
					self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
					self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
					self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
					self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
					self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
					self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
					self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
					self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
					self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
					self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
					self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
					self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
					self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
					self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
					self.showUpdateNotification = document.cookie != "" ? document.cookie.indexOf(self.pageRefreshedName) != -1 : false;
					self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
					self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

					if (self.scaleViewsToFit) {
						var newScaleValue = self.scaleViewToFit(view);

						if (newScaleValue < 0) {
							setTimeout(self.scaleViewToFit, 500, view);
						}
					} else {
						self.viewScale = self.getViewScaleValue(view);
						self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
						self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
						self.updateSliderValue(self.viewScale);
					}

					if (self.imageComparisonDuration != null) {
						// todo
					}

					if (self.refreshPageForChangesInterval != null) {
						self.refreshDuration = Number(self.refreshPageForChangesInterval);
					}
				}
			}

			self.previousView = function(event) {
				var rules = self.getStylesheetRules();
				var view = self.getVisibleView()
				var index = view ? self.getViewIndex(view) : -1;
				var prevQueryIndex = index != -1 ? index - 1 : self.currentQuery.index - 1;
				var queryIndex = 0;
				var numberOfRules = rules != null ? rules.length : 0;

				if (event) {
					event.stopImmediatePropagation();
				}

				if (prevQueryIndex < 0) {
					return;
				}

				// loop through rules and hide media queries except selected
				for (var i = 0; i < numberOfRules; i++) {
					var rule = rules[i];

					if (rule.media != null) {

						if (queryIndex == prevQueryIndex) {
							self.currentQuery.mediaText = rule.conditionText;
							self.currentQuery.index = prevQueryIndex;
							self.currentQuery.rule = rule;
							self.enableMediaQuery(rule);
							self.updateViewLabel();
							self.updateURL();
							self.dispatchViewChange();
						} else {
							self.disableMediaQuery(rule);
						}

						queryIndex++;
					}
				}
			}

			self.nextView = function(event) {
				var rules = self.getStylesheetRules();
				var view = self.getVisibleView();
				var index = view ? self.getViewIndex(view) : -1;
				var nextQueryIndex = index != -1 ? index + 1 : self.currentQuery.index + 1;
				var queryIndex = 0;
				var numberOfRules = rules != null ? rules.length : 0;
				var numberOfMediaQueries = self.getNumberOfMediaRules();

				if (event) {
					event.stopImmediatePropagation();
				}

				if (nextQueryIndex >= numberOfMediaQueries) {
					return;
				}

				// loop through rules and hide media queries except selected
				for (var i = 0; i < numberOfRules; i++) {
					var rule = rules[i];

					if (rule.media != null) {

						if (queryIndex == nextQueryIndex) {
							self.currentQuery.mediaText = rule.conditionText;
							self.currentQuery.index = nextQueryIndex;
							self.currentQuery.rule = rule;
							self.enableMediaQuery(rule);
							self.updateViewLabel();
							self.updateURL();
							self.dispatchViewChange();
						} else {
							self.disableMediaQuery(rule);
						}

						queryIndex++;
					}
				}
			}

			/**
			 * Enables a view via media query
			 */
			self.enableMediaQuery = function(rule) {

				try {
					rule.media.mediaText = self.inclusionQuery;
				} catch (error) {
					//self.log(error);
					rule.conditionText = self.inclusionQuery;
				}
			}

			self.disableMediaQuery = function(rule) {

				try {
					rule.media.mediaText = self.exclusionQuery;
				} catch (error) {
					rule.conditionText = self.exclusionQuery;
				}
			}

			self.dispatchViewChange = function() {
				try {
					var event = new Event(self.NAVIGATION_CHANGE);
					window.dispatchEvent(event);
				} catch (error) {
					// In IE 11: Object doesn't support this action
				}
			}

			self.getNumberOfMediaRules = function() {
				var rules = self.getStylesheetRules();
				var numberOfRules = rules ? rules.length : 0;
				var numberOfQueries = 0;

				for (var i = 0; i < numberOfRules; i++) {
					if (rules[i].media != null) {
						numberOfQueries++;
					}
				}

				return numberOfQueries;
			}

			/////////////////////////////////////////
			// VIEW SCALE 
			/////////////////////////////////////////

			self.sliderChangeHandler = function(event) {
				var value = self.getShortNumber(event.currentTarget.value / 100);
				var view = self.getVisibleView();
				self.setViewScaleValue(view, false, value, true);
			}

			self.updateSliderValue = function(scale) {
				var slider = document.getElementById(self.viewScaleSliderId);
				var tooltip = parseInt(scale * 100 + "") + "%";
				var inputType;
				var inputValue;

				if (slider) {
					inputValue = self.getShortNumber(scale * 100);
					if (inputValue != slider["value"]) {
						slider["value"] = inputValue;
					}
					inputType = slider.getAttributeNS(null, "type");

					if (inputType != "range") {
						// input range is not supported
						slider.style.display = "none";
					}

					self.setTooltip(slider, tooltip);
				}
			}

			self.viewChangeHandler = function(event) {
				var view = self.getVisibleView();
				var matrix = view ? getComputedStyle(view).transform : null;

				if (matrix) {
					self.viewScale = self.getViewScaleValue(view);

					var scaleNeededToFit = self.getViewFitToViewportScale(view);
					var isViewLargerThanViewport = scaleNeededToFit < 1;

					// scale large view to fit if scale to fit is enabled
					if (self.scaleViewsToFit) {
						self.scaleViewToFit(view);
					} else {
						self.updateSliderValue(self.viewScale);
					}
				}
			}

			self.getViewScaleValue = function(view) {
				var matrix = getComputedStyle(view).transform;

				if (matrix) {
					var matrixArray = matrix.replace("matrix(", "").split(",");
					var scaleX = parseFloat(matrixArray[0]);
					var scaleY = parseFloat(matrixArray[3]);
					var scale = Math.min(scaleX, scaleY);
				}

				return scale;
			}

			/**
			 * Scales view to scale. 
			 * @param {Object} view view to scale. views are in views array
			 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
			 * @param {Number} desiredScale scale to define. not used if scale to fit is false
			 * @param {Boolean} isSliderChange indicates if slider is callee
			 */
			self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
				var enableScaleUp = self.enableScaleUp;
				var scaleToFitType = self.scaleToFitType;
				var minimumScale = self.minimumScale;
				var maximumScale = self.maximumScale;
				var hasMinimumScale = !isNaN(minimumScale) && minimumScale != "";
				var hasMaximumScale = !isNaN(maximumScale) && maximumScale != "";
				var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
				var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
				var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
				var scaleToFitFull = self.getViewFitToViewportScale(view, true);
				var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
				var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
				var scaleToWidth = scaleToFitType == "width";
				var scaleToHeight = scaleToFitType == "height";
				var shrunkToFit = false;
				var topPosition = null;
				var leftPosition = null;
				var translateY = null;
				var translateX = null;
				var transformValue = "";
				var canCenterVertically = true;
				var canCenterHorizontally = true;
				var style = view.style;

				if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
					style = self.viewsDictionary[view.id].styleDeclaration.style;
				}

				if (scaleToFit && isSliderChange != true) {
					if (scaleToFitType == "fit" || scaleToFitType == "") {
						desiredScale = scaleNeededToFit;
					} else if (scaleToFitType == "width") {
						desiredScale = scaleNeededToFitWidth;
					} else if (scaleToFitType == "height") {
						desiredScale = scaleNeededToFitHeight;
					}
				} else {
					if (isNaN(desiredScale)) {
						desiredScale = 1;
					}
				}

				self.updateSliderValue(desiredScale);

				// scale to fit width
				if (scaleToWidth && scaleToHeight == false) {
					canCenterVertically = scaleNeededToFitHeight >= scaleNeededToFitWidth;
					canCenterHorizontally = scaleNeededToFitWidth >= 1 && enableScaleUp == false;

					if (isSliderChange) {
						canCenterHorizontally = desiredScale < scaleToFitFullWidth;
					} else if (scaleToFit) {
						desiredScale = scaleNeededToFitWidth;
					}

					if (hasMinimumScale) {
						desiredScale = Math.max(desiredScale, Number(minimumScale));
					}

					if (hasMaximumScale) {
						desiredScale = Math.min(desiredScale, Number(maximumScale));
					}

					desiredScale = self.getShortNumber(desiredScale);

					canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
					canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

					if (desiredScale > 1 && (enableScaleUp || isSliderChange)) {
						transformValue = "scale(" + desiredScale + ")";
					} else if (desiredScale >= 1 && enableScaleUp == false) {
						transformValue = "scale(" + 1 + ")";
					} else {
						transformValue = "scale(" + desiredScale + ")";
					}

					if (self.centerVertically) {
						if (canCenterVertically) {
							translateY = "-50%";
							topPosition = "50%";
						} else {
							translateY = "0";
							topPosition = "0";
						}

						if (style.top != topPosition) {
							style.top = topPosition + "";
						}

						if (canCenterVertically) {
							transformValue += " translateY(" + translateY + ")";
						}
					}

					if (self.centerHorizontally) {
						if (canCenterHorizontally) {
							translateX = "-50%";
							leftPosition = "50%";
						} else {
							translateX = "0";
							leftPosition = "0";
						}

						if (style.left != leftPosition) {
							style.left = leftPosition + "";
						}

						if (canCenterHorizontally) {
							transformValue += " translateX(" + translateX + ")";
						}
					}

					style.transformOrigin = "0 0";
					style.transform = transformValue;

					self.viewScale = desiredScale;
					self.viewToFitWidthScale = scaleNeededToFitWidth;
					self.viewToFitHeightScale = scaleNeededToFitHeight;
					self.viewLeft = leftPosition;
					self.viewTop = topPosition;

					return desiredScale;
				}

				// scale to fit height
				if (scaleToHeight && scaleToWidth == false) {
					//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
					//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
					canCenterVertically = scaleNeededToFitHeight >= scaleNeededToFitWidth;
					canCenterHorizontally = scaleNeededToFitWidth >= 1 && enableScaleUp == false;

					if (isSliderChange) {
						canCenterHorizontally = desiredScale < scaleToFitFullHeight;
					} else if (scaleToFit) {
						desiredScale = scaleNeededToFitHeight;
					}

					if (hasMinimumScale) {
						desiredScale = Math.max(desiredScale, Number(minimumScale));
					}

					if (hasMaximumScale) {
						desiredScale = Math.min(desiredScale, Number(maximumScale));
						//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
					}

					desiredScale = self.getShortNumber(desiredScale);

					canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
					canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

					if (desiredScale > 1 && (enableScaleUp || isSliderChange)) {
						transformValue = "scale(" + desiredScale + ")";
					} else if (desiredScale >= 1 && enableScaleUp == false) {
						transformValue = "scale(" + 1 + ")";
					} else {
						transformValue = "scale(" + desiredScale + ")";
					}

					if (self.centerHorizontally) {
						if (canCenterHorizontally) {
							translateX = "-50%";
							leftPosition = "50%";
						} else {
							translateX = "0";
							leftPosition = "0";
						}

						if (style.left != leftPosition) {
							style.left = leftPosition + "";
						}

						if (canCenterHorizontally) {
							transformValue += " translateX(" + translateX + ")";
						}
					}

					if (self.centerVertically) {
						if (canCenterVertically) {
							translateY = "-50%";
							topPosition = "50%";
						} else {
							translateY = "0";
							topPosition = "0";
						}

						if (style.top != topPosition) {
							style.top = topPosition + "";
						}

						if (canCenterVertically) {
							transformValue += " translateY(" + translateY + ")";
						}
					}

					style.transformOrigin = "0 0";
					style.transform = transformValue;

					self.viewScale = desiredScale;
					self.viewToFitWidthScale = scaleNeededToFitWidth;
					self.viewToFitHeightScale = scaleNeededToFitHeight;
					self.viewLeft = leftPosition;
					self.viewTop = topPosition;

					return scaleNeededToFitHeight;
				}

				if (scaleToFitType == "fit") {
					//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
					//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
					canCenterVertically = scaleNeededToFitHeight >= scaleNeededToFit;
					canCenterHorizontally = scaleNeededToFitWidth >= scaleNeededToFit;

					if (hasMinimumScale) {
						desiredScale = Math.max(desiredScale, Number(minimumScale));
					}

					desiredScale = self.getShortNumber(desiredScale);

					if (isSliderChange || scaleToFit == false) {
						canCenterVertically = scaleToFitFullHeight >= desiredScale;
						canCenterHorizontally = desiredScale < scaleToFitFullWidth;
					} else if (scaleToFit) {
						desiredScale = scaleNeededToFit;
					}

					transformValue = "scale(" + desiredScale + ")";

					//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
					//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);

					if (self.centerVertically) {
						if (canCenterVertically) {
							translateY = "-50%";
							topPosition = "50%";
						} else {
							translateY = "0";
							topPosition = "0";
						}

						if (style.top != topPosition) {
							style.top = topPosition + "";
						}

						if (canCenterVertically) {
							transformValue += " translateY(" + translateY + ")";
						}
					}

					if (self.centerHorizontally) {
						if (canCenterHorizontally) {
							translateX = "-50%";
							leftPosition = "50%";
						} else {
							translateX = "0";
							leftPosition = "0";
						}

						if (style.left != leftPosition) {
							style.left = leftPosition + "";
						}

						if (canCenterHorizontally) {
							transformValue += " translateX(" + translateX + ")";
						}
					}

					style.transformOrigin = "0 0";
					style.transform = transformValue;

					self.viewScale = desiredScale;
					self.viewToFitWidthScale = scaleNeededToFitWidth;
					self.viewToFitHeightScale = scaleNeededToFitHeight;
					self.viewLeft = leftPosition;
					self.viewTop = topPosition;

					self.updateSliderValue(desiredScale);

					return desiredScale;
				}

				if (scaleToFitType == "default" || scaleToFitType == "") {
					desiredScale = 1;

					if (hasMinimumScale) {
						desiredScale = Math.max(desiredScale, Number(minimumScale));
					}
					if (hasMaximumScale) {
						desiredScale = Math.min(desiredScale, Number(maximumScale));
					}

					canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
					canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

					if (self.centerVertically) {
						if (canCenterVertically) {
							translateY = "-50%";
							topPosition = "50%";
						} else {
							translateY = "0";
							topPosition = "0";
						}

						if (style.top != topPosition) {
							style.top = topPosition + "";
						}

						if (canCenterVertically) {
							transformValue += " translateY(" + translateY + ")";
						}
					}

					if (self.centerHorizontally) {
						if (canCenterHorizontally) {
							translateX = "-50%";
							leftPosition = "50%";
						} else {
							translateX = "0";
							leftPosition = "0";
						}

						if (style.left != leftPosition) {
							style.left = leftPosition + "";
						}

						if (canCenterHorizontally) {
							transformValue += " translateX(" + translateX + ")";
						} else {
							transformValue += " translateX(" + 0 + ")";
						}
					}

					style.transformOrigin = "0 0";
					style.transform = transformValue;


					self.viewScale = desiredScale;
					self.viewToFitWidthScale = scaleNeededToFitWidth;
					self.viewToFitHeightScale = scaleNeededToFitHeight;
					self.viewLeft = leftPosition;
					self.viewTop = topPosition;

					self.updateSliderValue(desiredScale);

					return desiredScale;
				}
			}

			/**
			 * Returns true if view can be centered horizontally
			 * @param {HTMLElement} view view
			 * @param {String} type type of scaling - width, height, all, none
			 * @param {Boolean} scaleUp if scale up enabled 
			 * @param {Number} scale target scale value 
			 */
			self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
				var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
				var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
				var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
				var canCenter = false;
				var minScale;

				type = type == null ? "none" : type;
				scale = scale == null ? scale : scaleNeededToFitWidth;
				scaleUp = scaleUp == null ? false : scaleUp;

				if (type == "width") {

					if (scaleUp && maximumScale == null) {
						canCenter = false;
					} else if (scaleNeededToFitWidth >= 1) {
						canCenter = true;
					}
				} else if (type == "height") {
					minScale = Math.min(1, scaleNeededToFitHeight);
					if (minimumScale != "" && maximumScale != "") {
						minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
					} else {
						if (minimumScale != "") {
							minScale = Math.max(minimumScale, scaleNeededToFitHeight);
						}
						if (maximumScale != "") {
							minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
						}
					}

					if (scaleUp && maximumScale == "") {
						canCenter = false;
					} else if (scaleNeededToFitWidth >= minScale) {
						canCenter = true;
					}
				} else if (type == "fit") {
					canCenter = scaleNeededToFitWidth >= scaleNeededToFit;
				} else {
					if (scaleUp) {
						canCenter = false;
					} else if (scaleNeededToFitWidth >= 1) {
						canCenter = true;
					}
				}

				self.horizontalScrollbarsNeeded = canCenter;

				return canCenter;
			}

			/**
			 * Returns true if view can be centered horizontally
			 * @param {HTMLElement} view view to scale
			 * @param {String} type type of scaling
			 * @param {Boolean} scaleUp if scale up enabled 
			 * @param {Number} scale target scale value 
			 */
			self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
				var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
				var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
				var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
				var canCenter = false;
				var minScale;

				type = type == null ? "none" : type;
				scale = scale == null ? 1 : scale;
				scaleUp = scaleUp == null ? false : scaleUp;

				if (type == "width") {
					canCenter = scaleNeededToFitHeight >= scaleNeededToFitWidth;
				} else if (type == "height") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
					canCenter = scaleNeededToFitHeight >= minScale;
				} else if (type == "fit") {
					canCenter = scaleNeededToFitHeight >= scaleNeededToFit;
				} else {
					if (scaleUp) {
						canCenter = false;
					} else if (scaleNeededToFitHeight >= 1) {
						canCenter = true;
					}
				}

				self.verticalScrollbarsNeeded = canCenter;

				return canCenter;
			}

			self.getViewFitToViewportScale = function(view, scaleUp) {
				var enableScaleUp = scaleUp;
				var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
				var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
				var elementWidth = parseFloat(getComputedStyle(view, "style").width);
				var elementHeight = parseFloat(getComputedStyle(view, "style").height);
				var newScale = 1;

				// if element is not added to the document computed values are NaN
				if (isNaN(elementWidth) || isNaN(elementHeight)) {
					return newScale;
				}

				availableWidth -= self.horizontalPadding;
				availableHeight -= self.verticalPadding;

				if (enableScaleUp) {
					newScale = Math.min(availableHeight / elementHeight, availableWidth / elementWidth);
				} else if (elementWidth > availableWidth || elementHeight > availableHeight) {
					newScale = Math.min(availableHeight / elementHeight, availableWidth / elementWidth);
				}

				return newScale;
			}

			self.getViewFitToViewportWidthScale = function(view, scaleUp) {
				// need to get browser viewport width when element
				var isParentWindow = view && view.parentNode && view.parentNode === document.body;
				var enableScaleUp = scaleUp;
				var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
				var elementWidth = parseFloat(getComputedStyle(view, "style").width);
				var newScale = 1;

				// if element is not added to the document computed values are NaN
				if (isNaN(elementWidth)) {
					return newScale;
				}

				availableWidth -= self.horizontalPadding;

				if (enableScaleUp) {
					newScale = availableWidth / elementWidth;
				} else if (elementWidth > availableWidth) {
					newScale = availableWidth / elementWidth;
				}

				return newScale;
			}

			self.getViewFitToViewportHeightScale = function(view, scaleUp) {
				var enableScaleUp = scaleUp;
				var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
				var elementHeight = parseFloat(getComputedStyle(view, "style").height);
				var newScale = 1;

				// if element is not added to the document computed values are NaN
				if (isNaN(elementHeight)) {
					return newScale;
				}

				availableHeight -= self.verticalPadding;

				if (enableScaleUp) {
					newScale = availableHeight / elementHeight;
				} else if (elementHeight > availableHeight) {
					newScale = availableHeight / elementHeight;
				}

				return newScale;
			}

			self.keypressHandler = function(event) {
				var rightKey = 39;
				var leftKey = 37;

				// listen for both events 
				if (event.type == "keypress") {
					window.removeEventListener("keyup", self.keypressHandler);
				} else {
					window.removeEventListener("keypress", self.keypressHandler);
				}

				if (self.showNavigationControls) {
					if (self.navigationOnKeypress) {
						if (event.keyCode == rightKey) {
							self.nextView();
						}
						if (event.keyCode == leftKey) {
							self.previousView();
						}
					}
				} else if (self.navigationOnKeypress) {
					if (event.keyCode == rightKey) {
						self.nextView();
					}
					if (event.keyCode == leftKey) {
						self.previousView();
					}
				}
			}

			///////////////////////////////////
			// GENERAL FUNCTIONS
			///////////////////////////////////

			self.getViewById = function(id) {
				id = id ? id.replace("#", "") : "";
				var view = self.viewIds.indexOf(id) != -1 && self.getElement(id);
				return view;
			}

			self.getViewIds = function() {
				var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
				var viewId = null;

				viewIds = viewIds != null && viewIds != "" ? viewIds.split(",") : [];

				if (viewIds.length == 0) {
					viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
					viewIds = viewId ? [viewId] : [];
				}

				return viewIds;
			}

			self.getInitialViewId = function() {
				var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
				return viewId;
			}

			self.getApplicationStylesheet = function() {
				var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
				self.applicationStylesheet = document.getElementById("applicationStylesheet");
				return self.applicationStylesheet.sheet;
			}

			self.getVisibleView = function() {
				var viewIds = self.getViewIds();

				for (var i = 0; i < viewIds.length; i++) {
					var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
					var view = self.getElement(viewId);
					var postName = "_Class";

					if (view == null && viewId && viewId.lastIndexOf(postName) != -1) {
						view = self.getElement(viewId.replace(postName, ""));
					}

					if (view) {
						var display = getComputedStyle(view).display;

						if (display == "block" || display == "flex") {
							return view;
						}
					}
				}

				return null;
			}

			self.getVisibleViews = function() {
				var viewIds = self.getViewIds();
				var views = [];

				for (var i = 0; i < viewIds.length; i++) {
					var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
					var view = self.getElement(viewId);
					var postName = "_Class";

					if (view == null && viewId && viewId.lastIndexOf(postName) != -1) {
						view = self.getElement(viewId.replace(postName, ""));
					}

					if (view) {
						var display = getComputedStyle(view).display;

						if (display == "none") {
							continue;
						}

						if (display == "block" || display == "flex") {
							views.push(view);
						}
					}
				}

				return views;
			}

			self.getStateNameByViewId = function(id) {
				var state = self.viewsDictionary[id];
				return state && state.stateName;
			}

			self.getMatchingViews = function(ids) {
				var views = self.addedViews.slice(0);
				var matchingViews = [];

				if (self.showByMediaQuery) {
					for (let index = 0; index < views.length; index++) {
						var viewId = views[index];
						var state = self.viewsDictionary[viewId];
						var rule = state && state.rule;
						var matchResults = window.matchMedia(rule.conditionText);
						var view = self.views[viewId];

						if (matchResults.matches) {
							if (ids == true) {
								matchingViews.push(viewId);
							} else {
								matchingViews.push(view);
							}
						}
					}
				}

				return matchingViews;
			}

			self.ruleMatchesQuery = function(rule) {
				var result = window.matchMedia(rule.conditionText);
				return result.matches;
			}

			self.getViewsByStateName = function(stateName, matchQuery) {
				var views = self.addedViews.slice(0);
				var matchingViews = [];

				if (self.showByMediaQuery) {

					// find state name
					for (let index = 0; index < views.length; index++) {
						var viewId = views[index];
						var state = self.viewsDictionary[viewId];
						var rule = state.rule;
						var mediaRule = state.mediaRule;
						var view = self.views[viewId];
						var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
						var stateFoundAtt = view.getAttribute(self.STATE_NAME) == state;
						var matchesResults = false;

						if (viewStateName == stateName) {
							if (matchQuery) {
								matchesResults = self.ruleMatchesQuery(rule);

								if (matchesResults) {
									matchingViews.push(view);
								}
							} else {
								matchingViews.push(view);
							}
						}
					}
				}

				return matchingViews;
			}

			self.getInitialView = function() {
				var viewId = self.getInitialViewId();
				viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
				var view = self.getElement(viewId);
				var postName = "_Class";

				if (view == null && viewId && viewId.lastIndexOf(postName) != -1) {
					view = self.getElement(viewId.replace(postName, ""));
				}

				return view;
			}

			self.getViewIndex = function(view) {
				var viewIds = self.getViewIds();
				var id = view ? view.id : null;
				var index = id && viewIds ? viewIds.indexOf(id) : -1;

				return index;
			}

			self.syncronizeViewToURL = function() {
				var fragment = self.getHashFragment();

				if (self.showByMediaQuery) {
					var stateName = fragment;

					if (stateName == null || stateName == "") {
						var initialView = self.getInitialView();
						stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
					}

					self.showMediaQueryViewsByState(stateName);
					return;
				}

				var view = self.getViewById(fragment);
				var index = view ? self.getViewIndex(view) : 0;
				if (index == -1) index = 0;
				var currentView = self.hideViews(index);

				if (self.supportsPopState && currentView) {

					if (fragment == null) {
						window.history.replaceState({
							name: currentView.id
						}, null, "#" + currentView.id);
					} else {
						window.history.pushState({
							name: currentView.id
						}, null, "#" + currentView.id);
					}
				}

				self.setViewVariables(view);
				return view;
			}

			/**
			 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
			 */
			self.setViewVariables = function(view, overlay, parentView) {
				if (view) {
					if (self.currentView) {
						self.lastView = self.currentView;
					}
					self.currentView = view;
				}

				if (overlay) {
					if (self.currentOverlay) {
						self.lastOverlay = self.currentOverlay;
					}
					self.currentOverlay = overlay;
				}
			}

			self.getViewPreferenceBoolean = function(view, property, altValue) {
				var computedStyle = window.getComputedStyle(view);
				var value = computedStyle.getPropertyValue(property);
				var type = typeof value;

				if (value == "true" || (type == "string" && value.indexOf("true") != -1)) {
					return true;
				} else if (value == "" && arguments.length == 3) {
					return altValue;
				}

				return false;
			}

			self.getViewPreferenceValue = function(view, property, defaultValue) {
				var value = window.getComputedStyle(view).getPropertyValue(property);

				if (value === undefined) {
					return defaultValue;
				}

				value = value.replace(/^[\s\"]*/, "");
				value = value.replace(/[\s\"]*$/, "");
				value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function(match, capture) {
					return capture;
				});

				return value;
			}

			self.getStyleRuleValue = function(cssRule, property) {
				var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

				if (value === undefined) {
					return null;
				}

				value = value.replace(/^[\s\"]*/, "");
				value = value.replace(/[\s\"]*$/, "");
				value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function(match, capture) {
					return capture;
				});

				return value;
			}

			/**
			 * Get the first defined value of property. Returns empty string if not defined
			 * @param {String} id id of element
			 * @param {String} property 
			 */
			self.getCSSPropertyValueForElement = function(id, property) {
				var styleSheets = document.styleSheets;
				var numOfStylesheets = styleSheets.length;
				var values = [];
				var selectorIDText = "#" + id;
				var selectorClassText = "." + id + "_Class";
				var value;

				for (var i = 0; i < numOfStylesheets; i++) {
					var styleSheet = styleSheets[i];
					var cssRules = self.getStylesheetRules(styleSheet);
					var numOfCSSRules = cssRules.length;
					var cssRule;

					for (var j = 0; j < numOfCSSRules; j++) {
						cssRule = cssRules[j];

						if (cssRule.media) {
							var mediaRules = cssRule.cssRules;
							var numOfMediaRules = mediaRules ? mediaRules.length : 0;

							for (var k = 0; k < numOfMediaRules; k++) {
								var mediaRule = mediaRules[k];

								if (mediaRule.selectorText == selectorIDText || mediaRule.selectorText == selectorClassText) {

									if (mediaRule.style && mediaRule.style.getPropertyValue(property) != "") {
										value = mediaRule.style.getPropertyValue(property);
										values.push(value);
									}
								}
							}
						} else {

							if (cssRule.selectorText == selectorIDText || cssRule.selectorText == selectorClassText) {
								if (cssRule.style && cssRule.style.getPropertyValue(property) != "") {
									value = cssRule.style.getPropertyValue(property);
									values.push(value);
								}
							}
						}
					}
				}

				return values.pop();
			}

			self.getIsStyleDefined = function(id, property) {
				var value = self.getCSSPropertyValueForElement(id, property);
				return value !== undefined && value != "";
			}

			self.collectViews = function() {
				var viewIds = self.getViewIds();

				for (let index = 0; index < viewIds.length; index++) {
					const id = viewIds[index];
					const view = self.getElement(id);
					self.views[id] = view;
				}

				self.viewIds = viewIds;
			}

			self.collectOverlays = function() {
				var viewIds = self.getViewIds();
				var ids = [];

				for (let index = 0; index < viewIds.length; index++) {
					const id = viewIds[index];
					const view = self.getViewById(id);
					const isOverlay = view && self.isOverlay(view);

					if (isOverlay) {
						ids.push(id);
						self.overlays[id] = view;
					}
				}

				self.overlayIds = ids;
			}

			self.collectMediaQueries = function() {
				var viewIds = self.getViewIds();
				var styleSheet = self.getApplicationStylesheet();
				var cssRules = self.getStylesheetRules(styleSheet);
				var numOfCSSRules = cssRules ? cssRules.length : 0;
				var cssRule;
				var id = viewIds.length ? viewIds[0] : ""; // single view
				var selectorIDText = "#" + id;
				var selectorClassText = "." + id + "_Class";
				var viewsNotFound = viewIds.slice();
				var viewsFound = [];
				var selectorText = null;
				var property = self.prefix + "view-id";
				var stateName = self.prefix + "state";
				var stateValue = null;
				var view = null;

				for (var j = 0; j < numOfCSSRules; j++) {
					cssRule = cssRules[j];

					if (cssRule.media) {
						var mediaRules = cssRule.cssRules;
						var numOfMediaRules = mediaRules ? mediaRules.length : 0;
						var mediaViewInfoFound = false;
						var mediaId = null;

						for (var k = 0; k < numOfMediaRules; k++) {
							var mediaRule = mediaRules[k];

							selectorText = mediaRule.selectorText;

							if (selectorText == ".mediaViewInfo" && mediaViewInfoFound == false) {

								mediaId = self.getStyleRuleValue(mediaRule, property);
								stateValue = self.getStyleRuleValue(mediaRule, stateName);

								selectorIDText = "#" + mediaId;
								selectorClassText = "." + mediaId + "_Class";
								view = self.getElement(mediaId);

								// prevent duplicates from load and domcontentloaded events
								if (self.addedViews.indexOf(mediaId) == -1) {
									self.addView(view, mediaId, cssRule, mediaRule, stateValue);
								}

								viewsFound.push(mediaId);

								if (viewsNotFound.indexOf(mediaId) != -1) {
									viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
								}

								mediaViewInfoFound = true;
							}

							if (selectorIDText == selectorText || selectorClassText == selectorText) {
								var styleObject = self.viewsDictionary[mediaId];
								if (styleObject) {
									styleObject.styleDeclaration = mediaRule;
								}
								break;
							}
						}
					} else {
						selectorText = cssRule.selectorText;

						if (selectorText == null) continue;

						selectorText = selectorText.replace(/[#|\s|*]?/g, "");

						if (viewIds.indexOf(selectorText) != -1) {
							view = self.getElement(selectorText);
							self.addView(view, selectorText, cssRule, null, stateValue);

							if (viewsNotFound.indexOf(selectorText) != -1) {
								viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
							}

							break;
						}
					}
				}

				if (viewsNotFound.length) {
					console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
					console.log("Views found:" + viewsFound.join(",") + "");
				}
			}

			/**
			 * Adds a view
			 * @param {HTMLElement} view view element
			 * @param {String} id id of view element
			 * @param {CSSRule} cssRule of view element
			 * @param {CSSMediaRule} mediaRule media rule of view element
			 * @param {String} stateName name of state if applicable
			 **/
			self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
				var viewData = {};
				viewData.name = viewId;
				viewData.rule = cssRule;
				viewData.id = viewId;
				viewData.mediaRule = mediaRule;
				viewData.stateName = stateName;

				self.views.push(viewData);
				self.addedViews.push(viewId);
				self.viewsDictionary[viewId] = viewData;
				self.mediaQueryDictionary[viewId] = cssRule;
			}

			self.hasView = function(name) {

				if (self.addedViews.indexOf(name) != -1) {
					return true;
				}
				return false;
			}

			/**
			 * Go to view by id. Views are added in addView()
			 * @param {String} id id of view in current
			 * @param {Boolean} maintainPreviousState if true then do not hide other views
			 * @param {String} parent id of parent view
			 **/
			self.goToView = function(id, maintainPreviousState, parent) {
				var state = self.viewsDictionary[id];

				if (state) {
					if (maintainPreviousState == false || maintainPreviousState == null) {
						self.hideViews();
					}
					self.enableMediaQuery(state.rule);
					self.updateViewLabel();
					self.updateURL();
				} else {
					var event = new Event(self.STATE_NOT_FOUND);
					self.stateName = id;
					window.dispatchEvent(event);
				}
			}

			/**
			 * Go to the view in the event targets CSS variable
			 **/
			self.goToTargetView = function(event) {
				var button = event.currentTarget;
				var buttonComputedStyles = getComputedStyle(button);
				var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix + "action-target").trim();
				var animation = buttonComputedStyles.getPropertyValue(self.prefix + "animation").trim();
				var targetType = buttonComputedStyles.getPropertyValue(self.prefix + "action-type").trim();
				var targetView = self.application ? null : self.getElement(actionTargetValue);
				var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
				var actionTargetStyles = targetView ? targetView.style : null;
				var state = self.viewsDictionary[actionTargetValue];

				// navigate to page
				if (self.application == false || targetType == "page") {
					document.location.href = "./" + actionTargetValue;
					return;
				}

				// if view is found
				if (targetView) {

					if (self.currentOverlay) {
						self.removeOverlay(false);
					}

					if (self.showByMediaQuery) {
						var stateName = targetState;

						if (stateName == null || stateName == "") {
							var initialView = self.getInitialView();
							stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
						}
						self.showMediaQueryViewsByState(stateName, event);
						return;
					}

					// add animation set in event target style declaration
					if (animation && self.supportAnimations) {
						self.crossFade(self.currentView, targetView, false, animation);
					} else {
						self.setViewVariables(self.currentView);
						self.hideViews();
						self.enableMediaQuery(state.rule);
						self.scaleViewIfNeeded(targetView);
						self.centerView(targetView);
						self.updateViewLabel();
						self.updateURL();
					}
				} else {
					var stateEvent = new Event(self.STATE_NOT_FOUND);
					self.stateName = name;
					window.dispatchEvent(stateEvent);
				}

				event.stopImmediatePropagation();
			}

			/**
			 * Cross fade between views
			 **/
			self.crossFade = function(from, to, update, animation) {
				var targetIndex = to.parentNode
				var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
				var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

				if (from.parentNode == to.parentNode) {
					var reverse = self.getReverseAnimation(animation);
					var duration = self.getAnimationDuration(animation, true);

					// if target view is above (higher index)
					// then fade in target view 
					// and after fade in then hide previous view instantly
					if (fromIndex < toIndex) {
						self.setElementAnimation(from, null);
						self.setElementAnimation(to, null);
						self.showViewByMediaQuery(to);
						self.fadeIn(to, update, animation);

						setTimeout(function() {
							self.setElementAnimation(to, null);
							self.setElementAnimation(from, null);
							self.hideView(from);
							self.updateURL();
							self.setViewVariables(to);
							self.updateViewLabel();
						}, duration)
					}
					// if target view is on bottom
					// then show target view instantly 
					// and fade out current view
					else if (fromIndex > toIndex) {
						self.setElementAnimation(to, null);
						self.setElementAnimation(from, null);
						self.showViewByMediaQuery(to);
						self.fadeOut(from, update, reverse);

						setTimeout(function() {
							self.setElementAnimation(to, null);
							self.setElementAnimation(from, null);
							self.hideView(from);
							self.updateURL();
							self.setViewVariables(to);
						}, duration)
					}
				}
			}

			self.fadeIn = function(element, update, animation) {
				self.showViewByMediaQuery(element);

				if (update) {
					self.updateURL(element);

					element.addEventListener("animationend", function(event) {
						element.style.animation = null;
						self.setViewVariables(element);
						self.updateViewLabel();
						element.removeEventListener("animationend", arguments.callee);
					});
				}

				self.setElementAnimation(element, null);

				element.style.animation = animation;
			}

			self.fadeOutCurrentView = function(animation, update) {
				if (self.currentView) {
					self.fadeOut(self.currentView, update, animation);
				}
				if (self.currentOverlay) {
					self.fadeOut(self.currentOverlay, update, animation);
				}
			}

			self.fadeOut = function(element, update, animation) {
				if (update) {
					element.addEventListener("animationend", function(event) {
						element.style.animation = null;
						self.hideView(element);
						element.removeEventListener("animationend", arguments.callee);
					});
				}

				element.style.animationPlayState = "paused";
				element.style.animation = animation;
				element.style.animationPlayState = "running";
			}

			self.getReverseAnimation = function(animation) {
				if (animation && animation.indexOf("reverse") == -1) {
					animation += " reverse";
				}

				return animation;
			}

			/**
			 * Get duration in animation string
			 * @param {String} animation animation value
			 * @param {Boolean} inMilliseconds length in milliseconds if true
			 */
			self.getAnimationDuration = function(animation, inMilliseconds) {
				var duration = 0;
				var expression = /.+(\d\.\d)s.+/;

				if (animation && animation.match(expression)) {
					duration = parseFloat(animation.replace(expression, "$" + "1"));
					if (duration && inMilliseconds) duration = duration * 1000;
				}

				return duration;
			}

			self.setElementAnimation = function(element, animation, priority) {
				element.style.setProperty("animation", animation, "important");
			}

			self.getElement = function(id) {
				id = id ? id.trim() : id;
				var element = id ? document.getElementById(id) : null;

				return element;
			}

			self.getElementById = function(id) {
				id = id ? id.trim() : id;
				var element = id ? document.getElementById(id) : null;

				return element;
			}

			self.getElementByClass = function(className) {
				className = className ? className.trim() : className;
				var elements = document.getElementsByClassName(className);

				return elements.length ? elements[0] : null;
			}

			self.resizeHandler = function(event) {

				if (self.showByMediaQuery) {
					if (self.enableDeepLinking) {
						var stateName = self.getHashFragment();

						if (stateName == null || stateName == "") {
							var initialView = self.getInitialView();
							stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
						}
						self.showMediaQueryViewsByState(stateName, event);
					}
				} else {
					var visibleViews = self.getVisibleViews();

					for (let index = 0; index < visibleViews.length; index++) {
						var view = visibleViews[index];
						self.scaleViewIfNeeded(view);
					}
				}

				window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
			}

			self.scaleViewIfNeeded = function(view) {

				if (self.scaleViewsOnResize) {
					if (view == null) {
						view = self.getVisibleView();
					}

					var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME) == "false" ? false : true;

					if (isViewScaled) {
						self.scaleViewToFit(view, true);
					} else {
						self.scaleViewToActualSize(view);
					}
				} else if (view) {
					self.centerView(view);
				}
			}

			self.centerView = function(view) {

				if (self.scaleViewsToFit) {
					self.scaleViewToFit(view, true);
				} else {
					self.scaleViewToActualSize(view); // for centering support for now
				}
			}

			self.preventDoubleClick = function(event) {
				event.stopImmediatePropagation();
			}

			self.getHashFragment = function() {
				var value = window.location.hash ? window.location.hash.replace("#", "") : "";
				return value;
			}

			self.showBlockElement = function(view) {
				view.style.display = "block";
			}

			self.hideElement = function(view) {
				view.style.display = "none";
			}

			self.showStateFunction = null;

			self.showMediaQueryViewsByState = function(state, event) {
				// browser will hide and show by media query (small, medium, large)
				// but if multiple views exists at same size user may want specific view
				// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
				// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
				// if no state is defined show view 
				// an viewChanging event is dispatched before views are shown or hidden that can be prevented 

				// get all matched queries
				// if state name is specified then show that view and hide other views
				// if no state name is defined then show
				var matchedViews = self.getMatchingViews();
				var matchMediaQuery = true;
				var foundViews = self.getViewsByStateName(state, matchMediaQuery);
				var showViews = [];
				var hideViews = [];

				// loop views that match media query 
				for (let index = 0; index < matchedViews.length; index++) {
					var view = matchedViews[index];

					// let user determine visible view
					if (self.showStateFunction != null) {
						if (self.showStateFunction(view, state)) {
							showViews.push(view);
						} else {
							hideViews.push(view);
						}
					}
					// state was defined so check if view matches state
					else if (foundViews.length) {

						if (foundViews.indexOf(view) != -1) {
							showViews.push(view);
						} else {
							hideViews.push(view);
						}
					}
					// if no state names are defined show view (define unused state name to exclude)
					else if (state == null || state == "") {
						showViews.push(view);
					}
				}

				if (showViews.length) {
					var viewChangingEvent = new Event(self.VIEW_CHANGING);
					viewChangingEvent.showViews = showViews;
					viewChangingEvent.hideViews = hideViews;
					window.dispatchEvent(viewChangingEvent);

					if (viewChangingEvent.defaultPrevented == false) {
						for (var index = 0; index < hideViews.length; index++) {
							var view = hideViews[index];

							if (self.isOverlay(view)) {
								self.removeOverlay(view);
							} else {
								self.hideElement(view);
							}
						}

						for (var index = 0; index < showViews.length; index++) {
							var view = showViews[index];

							if (index == showViews.length - 1) {
								self.clearDisplay(view);
								self.setViewOptions(view);
								self.setViewVariables(view);
								self.centerView(view);
								self.updateURLState(view, state);
							}
						}
					}

					var viewChangeEvent = new Event(self.VIEW_CHANGE);
					viewChangeEvent.showViews = showViews;
					viewChangeEvent.hideViews = hideViews;
					window.dispatchEvent(viewChangeEvent);
				}

			}

			self.clearDisplay = function(view) {
				view.style.setProperty("display", null);
			}

			self.hashChangeHandler = function(event) {
				var fragment = self.getHashFragment();
				var view = self.getViewById(fragment);

				if (self.showByMediaQuery) {
					var stateName = fragment;

					if (stateName == null || stateName == "") {
						var initialView = self.getInitialView();
						stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
					}
					self.showMediaQueryViewsByState(stateName);
				} else {
					if (view) {
						self.hideViews();
						self.showView(view);
						self.setViewVariables(view);
						self.updateViewLabel();

						window.dispatchEvent(new Event(self.VIEW_CHANGE));
					} else {
						window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
					}
				}
			}

			self.popStateHandler = function(event) {
				var state = event.state;
				var fragment = state ? state.name : window.location.hash;
				var view = self.getViewById(fragment);

				if (view) {
					self.hideViews();
					self.showView(view);
					self.updateViewLabel();
				} else {
					window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
				}
			}

			self.doubleClickHandler = function(event) {
				var view = self.getVisibleView();
				var scaleValue = view ? self.getViewScaleValue(view) : 1;
				var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
				var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
				var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
				var scaleToFitType = self.scaleToFitType;

				// Three scenarios
				// - scale to fit on double click
				// - set scale to actual size on double click
				// - switch between scale to fit and actual page size

				if (scaleToFitType == "width") {
					scaleNeededToFit = scaleNeededToFitWidth;
				} else if (scaleToFitType == "height") {
					scaleNeededToFit = scaleNeededToFitHeight;
				}

				// if scale and actual size enabled then switch between
				if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
					var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
					var isScaled = false;

					// if scale is not 1 then view needs scaling
					if (scaleNeededToFit != 1) {

						// if current scale is at 1 it is at actual size
						// scale it to fit
						if (scaleValue == 1) {
							self.scaleViewToFit(view);
							isScaled = true;
						} else {
							// scale is not at 1 so switch to actual size
							self.scaleViewToActualSize(view);
							isScaled = false;
						}
					} else {
						// view is smaller than viewport 
						// so scale to fit() is scale actual size
						// actual size and scaled size are the same
						// but call scale to fit to retain centering
						self.scaleViewToFit(view);
						isScaled = false;
					}

					view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled + "");
					isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
				} else if (self.scaleToFitOnDoubleClick) {
					self.scaleViewToFit(view);
				} else if (self.actualSizeOnDoubleClick) {
					self.scaleViewToActualSize(view);
				}

			}

			self.scaleViewToFit = function(view) {
				return self.setViewScaleValue(view, true);
			}

			self.scaleViewToActualSize = function(view) {
				self.setViewScaleValue(view, false, 1);
			}

			self.onloadHandler = function(event) {
				self.initialize();
			}

			self.setElementHTML = function(id, value) {
				var element = self.getElement(id);
				element.innerHTML = value;
			}

			self.getStackArray = function(error) {
				var value = "";

				if (error == null) {
					try {
						error = new Error("Stack");
					} catch (e) {

					}
				}

				if ("stack" in error) {
					value = error.stack;
					var methods = value.split(/\n/g);

					var newArray = methods ? methods.map(function(value, index, array) {
						value = value.replace(/\@.*/, "");
						return value;
					}) : null;

					if (newArray && newArray[0].includes("getStackTrace")) {
						newArray.shift();
					}
					if (newArray && newArray[0].includes("getStackArray")) {
						newArray.shift();
					}
					if (newArray && newArray[0] == "") {
						newArray.shift();
					}

					return newArray;
				}

				return null;
			}

			self.log = function(value) {
				console.log.apply(this, [value]);
			}

			// initialize on load
			// sometimes the body size is 0 so we call this now and again later
			window.addEventListener("load", self.onloadHandler);
			window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
		}

		window.application = new Application();
	</script>
</head>

<body>
	<?php include('../header/head.php'); ?>
	<div id="page9__1">
		<svg class="Rectangle_128">
			<rect id="Rectangle_128" rx="0" ry="0" x="0" y="0" width="1939" height="2609">
			</rect>
		</svg>
		<svg class="Rectangle_181">
			<rect id="Rectangle_181" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<svg class="Rectangle_158_da">
			<linearGradient id="Rectangle_158_da" spreadMethod="pad" x1="0.5" x2="0.5" y1="0" y2="1">
				<stop offset="0" stop-color="#4583f2" stop-opacity="1"></stop>
				<stop offset="1" stop-color="#234279" stop-opacity="1"></stop>
			</linearGradient>
			<rect id="Rectangle_158_da" rx="20" ry="20" x="0" y="0" width="536" height="830">
			</rect>
		</svg>
		<div id="Calendrier_des_examans__2021_-">
			<span>Calendrier des examans <br />2021 - 2020</span>
		</div>
		<div id="Group_280">
			<div id="Group_256">
				<div id="D">
					<span>D</span>
				</div>
				<div id="L">
					<span>L</span>
				</div>
				<div id="M">
					<span>M</span>
				</div>
				<div id="M_dh">
					<span>M</span>
				</div>
				<div id="J">
					<span>J</span>
				</div>
				<div id="V">
					<span>V</span>
				</div>
				<div id="S">
					<span>S</span>
				</div>
			</div>
			<div id="Group_268">
				<div id="Group_263">
					<div id="n_">
						<span>1</span>
					</div>
					<div id="n__do">
						<span>2</span>
					</div>
				</div>
				<div id="Group_264">
					<div id="n__dq">
						<span>8</span>
					</div>
					<div id="n__dr">
						<span>3</span>
					</div>
					<div id="n__ds">
						<span>4</span>
					</div>
					<div id="n__dt">
						<span>5</span>
					</div>
					<div id="n__du">
						<span>6</span>
					</div>
					<div id="n__dv">
						<span>7</span>
					</div>
					<div id="n__dw">
						<span>9</span>
					</div>
				</div>
				<div id="Group_265">
					<div id="n_5">
						<span>15</span>
					</div>
					<div id="n_0">
						<span>10</span>
					</div>
					<div id="n_1">
						<span>11</span>
					</div>
					<div id="n_2">
						<span>12</span>
					</div>
					<div id="n_3">
						<span>13</span>
					</div>
					<div id="n_4">
						<span>14</span>
					</div>
					<div id="n_6">
						<span>16</span>
					</div>
				</div>
				<div id="Group_266">
					<div id="n_2_d">
						<span>22</span>
					</div>
					<div id="n_7">
						<span>17</span>
					</div>
					<div id="n_8">
						<span>18</span>
					</div>
					<div id="n_9">
						<span>19</span>
					</div>
					<div id="n_0_ea">
						<span>20</span>
					</div>
					<div id="n_1_eb">
						<span>21</span>
					</div>
					<div id="n_3_ec">
						<span>23</span>
					</div>
				</div>
				<div id="Group_267">
					<div id="n_9_ee">
						<span>29</span>
					</div>
					<div id="n_4_ef">
						<span>24</span>
					</div>
					<div id="n_5_eg">
						<span>25</span>
					</div>
					<div id="n_6_eh">
						<span>26</span>
					</div>
					<div id="n_7_ei">
						<span>27</span>
					</div>
					<div id="n_8_ej">
						<span>28</span>
					</div>
					<div id="n_0_ek">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_155">
			<rect id="Rectangle_155" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<svg class="Rectangle_159">
			<rect id="Rectangle_159" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_283">
			<div id="Group_256_eo">
				<div id="D_ep">
					<span>D</span>
				</div>
				<div id="L_eq">
					<span>L</span>
				</div>
				<div id="M_er">
					<span>M</span>
				</div>
				<div id="M_es">
					<span>M</span>
				</div>
				<div id="J_et">
					<span>J</span>
				</div>
				<div id="V_eu">
					<span>V</span>
				</div>
				<div id="S_ev">
					<span>S</span>
				</div>
			</div>
			<div id="Group_268_ew">
				<div id="Group_263_ex">
					<div id="n__ey">
						<span>1</span>
					</div>
					<div id="n__ez">
						<span>2</span>
					</div>
				</div>
				<div id="Group_264_e">
					<div id="n__e">
						<span>8</span>
					</div>
					<div id="n__fa">
						<span>3</span>
					</div>
					<div id="n__fb">
						<span>4</span>
					</div>
					<div id="n__fc">
						<span>5</span>
					</div>
					<div id="n__fd">
						<span>6</span>
					</div>
					<div id="n__fe">
						<span>7</span>
					</div>
					<div id="n__ff">
						<span>9</span>
					</div>
				</div>
				<div id="Group_265_e">
					<div id="n_5_e">
						<span>15</span>
					</div>
					<div id="n_0_fa">
						<span>10</span>
					</div>
					<div id="n_1_fb">
						<span>11</span>
					</div>
					<div id="n_2_fc">
						<span>12</span>
					</div>
					<div id="n_3_fd">
						<span>13</span>
					</div>
					<div id="n_4_fe">
						<span>14</span>
					</div>
					<div id="n_6_ff">
						<span>16</span>
					</div>
				</div>
				<div id="Group_266_fg">
					<div id="n_2_fh">
						<span>22</span>
					</div>
					<div id="n_7_fi">
						<span>17</span>
					</div>
					<div id="n_8_fj">
						<span>18</span>
					</div>
					<div id="n_9_fk">
						<span>19</span>
					</div>
					<div id="n_0_fl">
						<span>20</span>
					</div>
					<div id="n_1_fm">
						<span>21</span>
					</div>
					<div id="n_3_fn">
						<span>23</span>
					</div>
				</div>
				<div id="Group_267_fo">
					<div id="n_9_fp">
						<span>29</span>
					</div>
					<div id="n_4_fq">
						<span>24</span>
					</div>
					<div id="n_5_fr">
						<span>25</span>
					</div>
					<div id="n_6_fs">
						<span>26</span>
					</div>
					<div id="n_7_ft">
						<span>27</span>
					</div>
					<div id="n_8_fu">
						<span>28</span>
					</div>
					<div id="n_0_fv">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_279">
			<div id="Group_257">
				<div id="D_fy">
					<span>D</span>
				</div>
				<div id="L_fz">
					<span>L</span>
				</div>
				<div id="M_f">
					<span>M</span>
				</div>
				<div id="M_ga">
					<span>M</span>
				</div>
				<div id="J_f">
					<span>J</span>
				</div>
				<div id="V_f">
					<span>V</span>
				</div>
				<div id="S_f">
					<span>S</span>
				</div>
			</div>
			<div id="Group_269">
				<div id="Group_263_f">
					<div id="n__f">
						<span>5</span>
					</div>
					<div id="n__ga">
						<span>1</span>
					</div>
					<div id="n__gb">
						<span>2</span>
					</div>
					<div id="n__gc">
						<span>3</span>
					</div>
					<div id="n__gd">
						<span>4</span>
					</div>
					<div id="n__ge">
						<span>6</span>
					</div>
				</div>
				<div id="Group_264_gd">
					<div id="n_2_ge">
						<span>12</span>
					</div>
					<div id="n__gf">
						<span>7</span>
					</div>
					<div id="n__gg">
						<span>8</span>
					</div>
					<div id="n__gh">
						<span>9</span>
					</div>
					<div id="n_0_gi">
						<span>10</span>
					</div>
					<div id="n_1_gj">
						<span>11</span>
					</div>
					<div id="n_3_gk">
						<span>13</span>
					</div>
				</div>
				<div id="Group_265_gl">
					<div id="n_9_gm">
						<span>19</span>
					</div>
					<div id="n_4_gn">
						<span>14</span>
					</div>
					<div id="n_5_go">
						<span>15</span>
					</div>
					<div id="n_6_gp">
						<span>16</span>
					</div>
					<div id="n_7_gq">
						<span>17</span>
					</div>
					<div id="n_8_gr">
						<span>18</span>
					</div>
					<div id="n_0_gs">
						<span>20</span>
					</div>
				</div>
				<div id="Group_266_gt">
					<div id="n_6_gu">
						<span>26</span>
					</div>
					<div id="n_1_gv">
						<span>21</span>
					</div>
					<div id="n_2_gw">
						<span>22</span>
					</div>
					<div id="n_3_gx">
						<span>23</span>
					</div>
					<div id="n_4_gy">
						<span>24</span>
					</div>
					<div id="n_5_gz">
						<span>25</span>
					</div>
					<div id="n_7_g">
						<span>27</span>
					</div>
				</div>
				<div id="Group_267_g">
					<div id="n_8_g">
						<span>28</span>
					</div>
					<div id="n_9_g">
						<span>29</span>
					</div>
					<div id="n_0_g">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_160">
			<rect id="Rectangle_160" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_273">
			<div id="Group_258">
				<div id="D_g">
					<span>D</span>
				</div>
				<div id="L_g">
					<span>L</span>
				</div>
				<div id="M_ha">
					<span>M</span>
				</div>
				<div id="M_hb">
					<span>M</span>
				</div>
				<div id="J_hc">
					<span>J</span>
				</div>
				<div id="V_hd">
					<span>V</span>
				</div>
				<div id="S_he">
					<span>S</span>
				</div>
			</div>
			<div id="Group_270">
				<div id="Group_263_hg">
					<div id="n__hh">
						<span>3</span>
					</div>
					<div id="n__hi">
						<span>1</span>
					</div>
					<div id="n__hj">
						<span>2</span>
					</div>
					<div id="n__hk">
						<span>4</span>
					</div>
				</div>
				<div id="Group_264_hl">
					<div id="n_0_hm">
						<span>10</span>
					</div>
					<div id="n__hn">
						<span>5</span>
					</div>
					<div id="n__ho">
						<span>6</span>
					</div>
					<div id="n__hp">
						<span>7</span>
					</div>
					<div id="n__hq">
						<span>8</span>
					</div>
					<div id="n__hr">
						<span>9</span>
					</div>
					<div id="n_1_hs">
						<span>11</span>
					</div>
				</div>
				<div id="Group_265_ht">
					<div id="n_7_hu">
						<span>17</span>
					</div>
					<div id="n_2_hv">
						<span>12</span>
					</div>
					<div id="n_3_hw">
						<span>13</span>
					</div>
					<div id="n_4_hx">
						<span>14</span>
					</div>
					<div id="n_5_hy">
						<span>15</span>
					</div>
					<div id="n_6_hz">
						<span>16</span>
					</div>
					<div id="n_8_h">
						<span>18</span>
					</div>
				</div>
				<div id="Group_266_h">
					<div id="n_4_h">
						<span>24</span>
					</div>
					<div id="n_9_h">
						<span>19</span>
					</div>
					<div id="n_0_h">
						<span>20</span>
					</div>
					<div id="n_1_h">
						<span>21</span>
					</div>
					<div id="n_2_h">
						<span>22</span>
					</div>
					<div id="n_3_h">
						<span>23</span>
					</div>
					<div id="n_5_h">
						<span>25</span>
					</div>
				</div>
				<div id="Group_267_h">
					<div id="n_6_ia">
						<span>26</span>
					</div>
					<div id="n_7_ib">
						<span>27</span>
					</div>
					<div id="n_8_ic">
						<span>28</span>
					</div>
					<div id="n_9_id">
						<span>29</span>
					</div>
					<div id="n_0_ie">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_292">
			<svg class="Rectangle_160_ig">
				<rect id="Rectangle_160_ig" rx="20" ry="20" x="0" y="0" width="320" height="324">
				</rect>
			</svg>
			<div id="September">
				<span>September</span>
			</div>
			<div id="Group_273_ii">
				<div id="Group_258_ij">
					<div id="D_ik">
						<span>D</span>
					</div>
					<div id="L_il">
						<span>L</span>
					</div>
					<div id="M_im">
						<span>M</span>
					</div>
					<div id="M_in">
						<span>M</span>
					</div>
					<div id="J_io">
						<span>J</span>
					</div>
					<div id="V_ip">
						<span>V</span>
					</div>
					<div id="S_iq">
						<span>S</span>
					</div>
				</div>
				<div id="Group_270_ir">
					<div id="Group_263_is">
						<div id="n__it">
							<span>3</span>
						</div>
						<div id="n__iu">
							<span>1</span>
						</div>
						<div id="n__iv">
							<span>2</span>
						</div>
						<div id="n__iw">
							<span>4</span>
						</div>
					</div>
					<div id="Group_264_ix">
						<div id="n_0_iy">
							<span>10</span>
						</div>
						<div id="n__iz">
							<span>5</span>
						</div>
						<div id="n__i">
							<span>6</span>
						</div>
						<div id="n__ja">
							<span>7</span>
						</div>
						<div id="n__jb">
							<span>8</span>
						</div>
						<div id="n__jc">
							<span>9</span>
						</div>
						<div id="n_1_i">
							<span>11</span>
						</div>
					</div>
					<div id="Group_265_i">
						<div id="n_7_i">
							<span>17</span>
						</div>
						<div id="n_2_i">
							<span>12</span>
						</div>
						<div id="n_3_i">
							<span>13</span>
						</div>
						<div id="n_4_i">
							<span>14</span>
						</div>
						<div id="n_5_ja">
							<span>15</span>
						</div>
						<div id="n_6_jb">
							<span>16</span>
						</div>
						<div id="n_8_jc">
							<span>18</span>
						</div>
					</div>
					<div id="Group_266_jd">
						<div id="n_4_je">
							<span>24</span>
						</div>
						<div id="n_9_jf">
							<span>19</span>
						</div>
						<div id="n_0_jg">
							<span>20</span>
						</div>
						<div id="n_1_jh">
							<span>21</span>
						</div>
						<div id="n_2_ji">
							<span>22</span>
						</div>
						<div id="n_3_jj">
							<span>23</span>
						</div>
						<div id="n_5_jk">
							<span>25</span>
						</div>
					</div>
					<div id="Group_267_jl">
						<div id="n_6_jm">
							<span>26</span>
						</div>
						<div id="n_7_jn">
							<span>27</span>
						</div>
						<div id="n_8_jo">
							<span>28</span>
						</div>
						<div id="n_9_jp">
							<span>29</span>
						</div>
						<div id="n_0_jq">
							<span>30</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_310">
			<div id="Group_258_js">
				<div id="D_jt">
					<span>D</span>
				</div>
				<div id="L_ju">
					<span>L</span>
				</div>
				<div id="M_jv">
					<span>M</span>
				</div>
				<div id="M_jw">
					<span>M</span>
				</div>
				<div id="J_jx">
					<span>J</span>
				</div>
				<div id="V_jy">
					<span>V</span>
				</div>
				<div id="S_jz">
					<span>S</span>
				</div>
			</div>
			<div id="Group_270_j">
				<div id="Group_263_j">
					<div id="n__j">
						<span>3</span>
					</div>
					<div id="n__ka">
						<span>1</span>
					</div>
					<div id="n__kb">
						<span>2</span>
					</div>
					<div id="n__kc">
						<span>4</span>
					</div>
				</div>
				<div id="Group_264_j">
					<div id="n_0_j">
						<span>10</span>
					</div>
					<div id="n__kd">
						<span>5</span>
					</div>
					<div id="n__ke">
						<span>6</span>
					</div>
					<div id="n__kf">
						<span>7</span>
					</div>
					<div id="n__kg">
						<span>8</span>
					</div>
					<div id="n__kh">
						<span>9</span>
					</div>
					<div id="n_1_kd">
						<span>11</span>
					</div>
				</div>
				<div id="Group_265_ke">
					<div id="n_7_kf">
						<span>17</span>
					</div>
					<div id="n_2_kg">
						<span>12</span>
					</div>
					<div id="n_3_kh">
						<span>13</span>
					</div>
					<div id="n_4_ki">
						<span>14</span>
					</div>
					<div id="n_5_kj">
						<span>15</span>
					</div>
					<div id="n_6_kk">
						<span>16</span>
					</div>
					<div id="n_8_kl">
						<span>18</span>
					</div>
				</div>
				<div id="Group_266_km">
					<div id="n_4_kn">
						<span>24</span>
					</div>
					<div id="n_9_ko">
						<span>19</span>
					</div>
					<div id="n_0_kp">
						<span>20</span>
					</div>
					<div id="n_1_kq">
						<span>21</span>
					</div>
					<div id="n_2_kr">
						<span>22</span>
					</div>
					<div id="n_3_ks">
						<span>23</span>
					</div>
					<div id="n_5_kt">
						<span>25</span>
					</div>
				</div>
				<div id="Group_267_ku">
					<div id="n_1_kv">
						<span>31</span>
					</div>
					<div id="n_6_kw">
						<span>26</span>
					</div>
					<div id="n_7_kx">
						<span>27</span>
					</div>
					<div id="n_8_ky">
						<span>28</span>
					</div>
					<div id="n_9_kz">
						<span>29</span>
					</div>
					<div id="n_0_k">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_169">
			<rect id="Rectangle_169" rx="20" ry="20" x="0" y="0" width="320" height="313">
			</rect>
		</svg>
		<svg class="Rectangle_172">
			<rect id="Rectangle_172" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_293">
			<div id="Group_256_k">
				<div id="D_k">
					<span>D</span>
				</div>
				<div id="L_k">
					<span>L</span>
				</div>
				<div id="M_k">
					<span>M</span>
				</div>
				<div id="M_la">
					<span>M</span>
				</div>
				<div id="J_k">
					<span>J</span>
				</div>
				<div id="V_la">
					<span>V</span>
				</div>
				<div id="S_lb">
					<span>S</span>
				</div>
			</div>
			<div id="Group_268_lc">
				<div id="Group_263_ld">
					<div id="n__le">
						<span>1</span>
					</div>
					<div id="n__lf">
						<span>2</span>
					</div>
				</div>
				<div id="Group_264_lg">
					<div id="n__lh">
						<span>8</span>
					</div>
					<div id="n__li">
						<span>3</span>
					</div>
					<div id="n__lj">
						<span>4</span>
					</div>
					<div id="n__lk">
						<span>5</span>
					</div>
					<div id="n__ll">
						<span>6</span>
					</div>
					<div id="n__lm">
						<span>7</span>
					</div>
					<div id="n__ln">
						<span>9</span>
					</div>
				</div>
				<div id="Group_265_lo">
					<div id="n_5_lp">
						<span>15</span>
					</div>
					<div id="n_0_lq">
						<span>10</span>
					</div>
					<div id="n_1_lr">
						<span>11</span>
					</div>
					<div id="n_2_ls">
						<span>12</span>
					</div>
					<div id="n_3_lt">
						<span>13</span>
					</div>
					<div id="n_4_lu">
						<span>14</span>
					</div>
					<div id="n_6_lv">
						<span>16</span>
					</div>
				</div>
				<div id="Group_266_lw">
					<div id="n_2_lx">
						<span>22</span>
					</div>
					<div id="n_7_ly">
						<span>17</span>
					</div>
					<div id="n_8_lz">
						<span>18</span>
					</div>
					<div id="n_9_l">
						<span>19</span>
					</div>
					<div id="n_0_l">
						<span>20</span>
					</div>
					<div id="n_1_l">
						<span>21</span>
					</div>
					<div id="n_3_l">
						<span>23</span>
					</div>
				</div>
				<div id="Group_267_l">
					<div id="n_9_ma">
						<span>29</span>
					</div>
					<div id="n_4_l">
						<span>24</span>
					</div>
					<div id="n_5_l">
						<span>25</span>
					</div>
					<div id="n_6_l">
						<span>26</span>
					</div>
					<div id="n_7_l">
						<span>27</span>
					</div>
					<div id="n_8_ma">
						<span>28</span>
					</div>
					<div id="n_0_mb">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_257_mc">
			<div id="D_md">
				<span>D</span>
			</div>
			<div id="L_me">
				<span>L</span>
			</div>
			<div id="M_mf">
				<span>M</span>
			</div>
			<div id="M_mg">
				<span>M</span>
			</div>
			<div id="J_mh">
				<span>J</span>
			</div>
			<div id="V_mi">
				<span>V</span>
			</div>
			<div id="S_mj">
				<span>S</span>
			</div>
		</div>
		<div id="Group_269_mk">
			<div id="Group_263_ml">
				<div id="n__mm">
					<span>5</span>
				</div>
				<div id="n__mn">
					<span>1</span>
				</div>
				<div id="n__mo">
					<span>2</span>
				</div>
				<div id="n__mp">
					<span>3</span>
				</div>
				<div id="n__mq">
					<span>4</span>
				</div>
				<div id="n__mr">
					<span>6</span>
				</div>
			</div>
			<div id="Group_264_ms">
				<div id="n_2_mt">
					<span>12</span>
				</div>
				<div id="n__mu">
					<span>7</span>
				</div>
				<div id="n__mv">
					<span>8</span>
				</div>
				<div id="n__mw">
					<span>9</span>
				</div>
				<div id="n_0_mx">
					<span>10</span>
				</div>
				<div id="n_1_my">
					<span>11</span>
				</div>
				<div id="n_3_mz">
					<span>13</span>
				</div>
			</div>
			<div id="Group_265_m">
				<div id="n_9_m">
					<span>19</span>
				</div>
				<div id="n_4_m">
					<span>14</span>
				</div>
				<div id="n_5_m">
					<span>15</span>
				</div>
				<div id="n_6_m">
					<span>16</span>
				</div>
				<div id="n_7_m">
					<span>17</span>
				</div>
				<div id="n_8_m">
					<span>18</span>
				</div>
				<div id="n_0_m">
					<span>20</span>
				</div>
			</div>
			<div id="Group_266_m">
				<div id="n_6_na">
					<span>26</span>
				</div>
				<div id="n_1_na">
					<span>21</span>
				</div>
				<div id="n_2_nb">
					<span>22</span>
				</div>
				<div id="n_3_nc">
					<span>23</span>
				</div>
				<div id="n_4_nd">
					<span>24</span>
				</div>
				<div id="n_5_ne">
					<span>25</span>
				</div>
				<div id="n_7_nf">
					<span>27</span>
				</div>
			</div>
			<div id="Group_267_ng">
				<div id="n_8_nh">
					<span>28</span>
				</div>
			</div>
		</div>
		<svg class="Rectangle_170">
			<rect id="Rectangle_170" rx="11" ry="11" x="0" y="0" width="24" height="22">
			</rect>
		</svg>
		<svg class="Rectangle_176">
			<rect id="Rectangle_176" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_301">
			<div id="Group_258_nl">
				<div id="D_nm">
					<span>D</span>
				</div>
				<div id="L_nn">
					<span>L</span>
				</div>
				<div id="M_no">
					<span>M</span>
				</div>
				<div id="M_np">
					<span>M</span>
				</div>
				<div id="J_nq">
					<span>J</span>
				</div>
				<div id="V_nr">
					<span>V</span>
				</div>
				<div id="S_ns">
					<span>S</span>
				</div>
			</div>
			<div id="Group_270_nt">
				<div id="Group_263_nu">
					<div id="n__nv">
						<span>5</span>
					</div>
					<div id="n__nw">
						<span>1</span>
					</div>
					<div id="n__nx">
						<span>2</span>
					</div>
					<div id="n__ny">
						<span>3</span>
					</div>
					<div id="n__nz">
						<span>4</span>
					</div>
					<div id="n__n">
						<span>6</span>
					</div>
				</div>
				<div id="Group_264_n">
					<div id="n_2_n">
						<span>12</span>
					</div>
					<div id="n__oa">
						<span>7</span>
					</div>
					<div id="n__ob">
						<span>8</span>
					</div>
					<div id="n__oc">
						<span>9</span>
					</div>
					<div id="n_0_n">
						<span>10</span>
					</div>
					<div id="n_1_n">
						<span>11</span>
					</div>
					<div id="n_3_n">
						<span>13</span>
					</div>
				</div>
				<div id="Group_265_n">
					<div id="n_9_oa">
						<span>19</span>
					</div>
					<div id="n_4_ob">
						<span>14</span>
					</div>
					<div id="n_5_oc">
						<span>15</span>
					</div>
					<div id="n_6_od">
						<span>16</span>
					</div>
					<div id="n_7_oe">
						<span>17</span>
					</div>
					<div id="n_8_of">
						<span>18</span>
					</div>
					<div id="n_0_og">
						<span>20</span>
					</div>
				</div>
				<div id="Group_266_oh">
					<div id="n_6_oi">
						<span>26</span>
					</div>
					<div id="n_1_oj">
						<span>21</span>
					</div>
					<div id="n_2_ok">
						<span>22</span>
					</div>
					<div id="n_3_ol">
						<span>23</span>
					</div>
					<div id="n_4_om">
						<span>24</span>
					</div>
					<div id="n_5_on">
						<span>25</span>
					</div>
					<div id="n_7_oo">
						<span>27</span>
					</div>
				</div>
				<div id="Group_267_op">
					<div id="n_8_oq">
						<span>28</span>
					</div>
					<div id="n_9_or">
						<span>29</span>
					</div>
					<div id="n_0_os">
						<span>30</span>
					</div>
					<div id="n_1_ot">
						<span>31</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_182">
			<rect id="Rectangle_182" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<svg class="Rectangle_183">
			<rect id="Rectangle_183" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_312">
			<div id="Group_256_ox">
				<div id="D_oy">
					<span>D</span>
				</div>
				<div id="L_oz">
					<span>L</span>
				</div>
				<div id="M_o">
					<span>M</span>
				</div>
				<div id="M_pa">
					<span>M</span>
				</div>
				<div id="J_o">
					<span>J</span>
				</div>
				<div id="V_o">
					<span>V</span>
				</div>
				<div id="S_o">
					<span>S</span>
				</div>
			</div>
			<div id="Group_268_o">
				<div id="Group_263_o">
					<div id="n__o">
						<span>2</span>
					</div>
					<div id="n__pa">
						<span>1</span>
					</div>
					<div id="n__pb">
						<span>3</span>
					</div>
				</div>
				<div id="Group_264_pa">
					<div id="n__pc">
						<span>9</span>
					</div>
					<div id="n__pd">
						<span>4</span>
					</div>
					<div id="n__pe">
						<span>5</span>
					</div>
					<div id="n__pf">
						<span>6</span>
					</div>
					<div id="n__pg">
						<span>7</span>
					</div>
					<div id="n__ph">
						<span>8</span>
					</div>
					<div id="n_0_ph">
						<span>10</span>
					</div>
				</div>
				<div id="Group_265_pi">
					<div id="n_6_pj">
						<span>16</span>
					</div>
					<div id="n_1_pk">
						<span>11</span>
					</div>
					<div id="n_2_pl">
						<span>12</span>
					</div>
					<div id="n_3_pm">
						<span>13</span>
					</div>
					<div id="n_4_pn">
						<span>14</span>
					</div>
					<div id="n_5_po">
						<span>15</span>
					</div>
					<div id="n_7_pp">
						<span>17</span>
					</div>
				</div>
				<div id="Group_266_pq">
					<div id="n_3_pr">
						<span>23</span>
					</div>
					<div id="n_8_ps">
						<span>18</span>
					</div>
					<div id="n_9_pt">
						<span>19</span>
					</div>
					<div id="n_0_pu">
						<span>20</span>
					</div>
					<div id="n_1_pv">
						<span>21</span>
					</div>
					<div id="n_2_pw">
						<span>22</span>
					</div>
					<div id="n_4_px">
						<span>24</span>
					</div>
				</div>
				<div id="Group_267_py">
					<div id="n_0_pz">
						<span>30</span>
					</div>
					<div id="n_5_p">
						<span>25</span>
					</div>
					<div id="n_6_p">
						<span>26</span>
					</div>
					<div id="n_7_p">
						<span>27</span>
					</div>
					<div id="n_8_p">
						<span>28</span>
					</div>
					<div id="n_9_p">
						<span>29</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_313">
			<div id="Group_257_p">
				<div id="D_p">
					<span>D</span>
				</div>
				<div id="L_p">
					<span>L</span>
				</div>
				<div id="M_p">
					<span>M</span>
				</div>
				<div id="M_qa">
					<span>M</span>
				</div>
				<div id="J_qb">
					<span>J</span>
				</div>
				<div id="V_qc">
					<span>V</span>
				</div>
				<div id="S_qd">
					<span>S</span>
				</div>
			</div>
			<div id="Group_269_qe">
				<div id="Group_263_qf">
					<div id="n__qg">
						<span>1</span>
					</div>
				</div>
				<div id="Group_264_qh">
					<div id="n__qi">
						<span>7</span>
					</div>
					<div id="n__qj">
						<span>2</span>
					</div>
					<div id="n__qk">
						<span>3</span>
					</div>
					<div id="n__ql">
						<span>4</span>
					</div>
					<div id="n__qm">
						<span>5</span>
					</div>
					<div id="n__qn">
						<span>6</span>
					</div>
					<div id="n__qo">
						<span>8</span>
					</div>
				</div>
				<div id="Group_265_qp">
					<div id="n_4_qq">
						<span>14</span>
					</div>
					<div id="n__qr">
						<span>9</span>
					</div>
					<div id="n_0_qs">
						<span>10</span>
					</div>
					<div id="n_1_qt">
						<span>11</span>
					</div>
					<div id="n_2_qu">
						<span>12</span>
					</div>
					<div id="n_3_qv">
						<span>13</span>
					</div>
					<div id="n_5_qw">
						<span>15</span>
					</div>
				</div>
				<div id="Group_266_qx">
					<div id="n_1_qy">
						<span>21</span>
					</div>
					<div id="n_6_qz">
						<span>16</span>
					</div>
					<div id="n_7_q">
						<span>17</span>
					</div>
					<div id="n_8_q">
						<span>18</span>
					</div>
					<div id="n_9_q">
						<span>19</span>
					</div>
					<div id="n_0_q">
						<span>20</span>
					</div>
					<div id="n_2_q">
						<span>22</span>
					</div>
				</div>
				<div id="Group_267_q">
					<div id="n_8_ra">
						<span>28</span>
					</div>
					<div id="n_3_q">
						<span>23</span>
					</div>
					<div id="n_4_q">
						<span>24</span>
					</div>
					<div id="n_5_q">
						<span>25</span>
					</div>
					<div id="n_6_ra">
						<span>26</span>
					</div>
					<div id="n_7_rb">
						<span>27</span>
					</div>
					<div id="n_9_rc">
						<span>29</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_184">
			<rect id="Rectangle_184" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_314">
			<div id="Group_258_rf">
				<div id="D_rg">
					<span>D</span>
				</div>
				<div id="L_rh">
					<span>L</span>
				</div>
				<div id="M_ri">
					<span>M</span>
				</div>
				<div id="M_rj">
					<span>M</span>
				</div>
				<div id="J_rk">
					<span>J</span>
				</div>
				<div id="V_rl">
					<span>V</span>
				</div>
				<div id="S_rm">
					<span>S</span>
				</div>
			</div>
			<div id="Group_270_rn">
				<div id="Group_263_ro">
					<div id="n__rp">
						<span>4</span>
					</div>
					<div id="n__rq">
						<span>1</span>
					</div>
					<div id="n__rr">
						<span>2</span>
					</div>
					<div id="n__rs">
						<span>3</span>
					</div>
					<div id="n__rt">
						<span>5</span>
					</div>
				</div>
				<div id="Group_264_ru">
					<div id="n_1_rv">
						<span>11</span>
					</div>
					<div id="n__rw">
						<span>6</span>
					</div>
					<div id="n__rx">
						<span>7</span>
					</div>
					<div id="n__ry">
						<span>8</span>
					</div>
					<div id="n__rz">
						<span>9</span>
					</div>
					<div id="n_0_r">
						<span>10</span>
					</div>
					<div id="n_2_r">
						<span>12</span>
					</div>
				</div>
				<div id="Group_265_r">
					<div id="n_8_r">
						<span>18</span>
					</div>
					<div id="n_3_r">
						<span>13</span>
					</div>
					<div id="n_4_r">
						<span>14</span>
					</div>
					<div id="n_5_r">
						<span>15</span>
					</div>
					<div id="n_6_r">
						<span>16</span>
					</div>
					<div id="n_7_r">
						<span>17</span>
					</div>
					<div id="n_9_r">
						<span>19</span>
					</div>
				</div>
				<div id="Group_266_sa">
					<div id="n_5_sb">
						<span>25</span>
					</div>
					<div id="n_0_sc">
						<span>20</span>
					</div>
					<div id="n_1_sd">
						<span>21</span>
					</div>
					<div id="n_2_se">
						<span>22</span>
					</div>
					<div id="n_3_sf">
						<span>23</span>
					</div>
					<div id="n_4_sg">
						<span>24</span>
					</div>
					<div id="n_6_sh">
						<span>26</span>
					</div>
				</div>
				<div id="Group_267_si">
					<div id="n_8_sj">
						<span>28</span>
					</div>
					<div id="n_9_sk">
						<span>29</span>
					</div>
					<div id="n_0_sl">
						<span>30</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_185">
			<rect id="Rectangle_185" rx="20" ry="20" x="0" y="0" width="320" height="324">
			</rect>
		</svg>
		<div id="Group_316">
			<div id="Group_256_so">
				<div id="D_sp">
					<span>D</span>
				</div>
				<div id="L_sq">
					<span>L</span>
				</div>
				<div id="M_sr">
					<span>M</span>
				</div>
				<div id="M_ss">
					<span>M</span>
				</div>
				<div id="J_st">
					<span>J</span>
				</div>
				<div id="V_su">
					<span>V</span>
				</div>
				<div id="S_sv">
					<span>S</span>
				</div>
			</div>
			<div id="Group_268_sw">
				<div id="Group_263_sx">
					<div id="n__sy">
						<span>2</span>
					</div>
					<div id="n__sz">
						<span>1</span>
					</div>
					<div id="n__s">
						<span>3</span>
					</div>
				</div>
				<div id="Group_264_s">
					<div id="n__ta">
						<span>9</span>
					</div>
					<div id="n__tb">
						<span>4</span>
					</div>
					<div id="n__tc">
						<span>5</span>
					</div>
					<div id="n__td">
						<span>6</span>
					</div>
					<div id="n__te">
						<span>7</span>
					</div>
					<div id="n__tf">
						<span>8</span>
					</div>
					<div id="n_0_s">
						<span>10</span>
					</div>
				</div>
				<div id="Group_265_s">
					<div id="n_6_ta">
						<span>16</span>
					</div>
					<div id="n_1_tb">
						<span>11</span>
					</div>
					<div id="n_2_tc">
						<span>12</span>
					</div>
					<div id="n_3_td">
						<span>13</span>
					</div>
					<div id="n_4_te">
						<span>14</span>
					</div>
					<div id="n_5_tf">
						<span>15</span>
					</div>
					<div id="n_7_tg">
						<span>17</span>
					</div>
				</div>
				<div id="Group_266_th">
					<div id="n_3_ti">
						<span>23</span>
					</div>
					<div id="n_8_tj">
						<span>18</span>
					</div>
					<div id="n_9_tk">
						<span>19</span>
					</div>
					<div id="n_0_tl">
						<span>20</span>
					</div>
					<div id="n_1_tm">
						<span>21</span>
					</div>
					<div id="n_2_tn">
						<span>22</span>
					</div>
					<div id="n_4_to">
						<span>24</span>
					</div>
				</div>
				<div id="Group_267_tp">
					<div id="n_0_tq">
						<span>30</span>
					</div>
					<div id="n_5_tr">
						<span>25</span>
					</div>
					<div id="n_6_ts">
						<span>26</span>
					</div>
					<div id="n_7_tt">
						<span>27</span>
					</div>
					<div id="n_8_tu">
						<span>28</span>
					</div>
					<div id="n_9_tv">
						<span>29</span>
					</div>
					<div id="n_1_tw">
						<span>31</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_187">
			<rect id="Rectangle_187" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_188">
			<rect id="Rectangle_188" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_190">
			<rect id="Rectangle_190" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_189">
			<rect id="Rectangle_189" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_191">
			<rect id="Rectangle_191" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_192">
			<rect id="Rectangle_192" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_212">
			<rect id="Rectangle_212" rx="20" ry="20" x="0" y="0" width="46" height="42">
			</rect>
		</svg>
		<svg class="Rectangle_213">
			<rect id="Rectangle_213" rx="20" ry="20" x="0" y="0" width="46" height="42">
			</rect>
		</svg>
		<svg class="Rectangle_198">
			<rect id="Rectangle_198" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_199">
			<rect id="Rectangle_199" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_200">
			<rect id="Rectangle_200" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_201">
			<rect id="Rectangle_201" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_206">
			<rect id="Rectangle_206" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_207">
			<rect id="Rectangle_207" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_208">
			<rect id="Rectangle_208" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_209">
			<rect id="Rectangle_209" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_202">
			<rect id="Rectangle_202" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_203">
			<rect id="Rectangle_203" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_204">
			<rect id="Rectangle_204" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_205">
			<rect id="Rectangle_205" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_195">
			<rect id="Rectangle_195" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_196">
			<rect id="Rectangle_196" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_197">
			<rect id="Rectangle_197" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<svg class="Rectangle_194">
			<rect id="Rectangle_194" rx="13.5" ry="13.5" x="0" y="0" width="30" height="27">
			</rect>
		</svg>
		<div id="n_9_valuation_gnrale">
			<span>29: évaluation générale</span>
		</div>
		<div id="n_2_Ds_anglais">
			<span>12: Ds anglais</span>
		</div>
		<div id="n_9_Ds_algbre">
			<span>09: Ds algébre</span>
		</div>
		<div id="n_5_Examen_programation">
			<span>05: Examen programation</span>
		</div>
		<div id="n_7_Ds_JavaScript_">
			<span>07: Ds JavaScript </span>
		</div>
		<div id="n_3_Ds_anglais_">
			<span>03: Ds anglais </span>
		</div>
		<div id="n_7_examen_arabe">
			<span>07: examen arabe</span>
		</div>
		<div id="n_2_examen_franais">
			<span>12: examen français</span>
		</div>
		<div id="n_3_Ds_algorythm">
			<span>23: Ds algorythm</span>
		</div>
		<div id="n_4_Examen_arabe">
			<span>24: Examen arabe</span>
		</div>
		<div id="n_2_Ds_algbre">
			<span>12: Ds algébre</span>
		</div>
		<div id="n_0_Ds_math">
			<span>10: Ds math</span>
		</div>
		<div id="n_0_Ds_physique">
			<span>10: Ds physique</span>
		</div>
		<div id="n_1_examen_anglais">
			<span>11: examen anglais</span>
		</div>
		<div id="n_3_examen_JavaScript">
			<span>13: examen JavaScript</span>
		</div>
		<div id="n_9_Ds_franais">
			<span>19: Ds français</span>
		</div>
		<div id="n_4_examen_algbre">
			<span>14: examen algébre</span>
		</div>
		<div id="n_4_examen_math">
			<span>14: examen math</span>
		</div>
		<div id="n_5_examen_physique">
			<span>15: examen physique</span>
		</div>
		<div id="n_5_examen_programation">
			<span>15: examen programation</span>
		</div>
		<div id="n_6_valuation_finale">
			<span>16: évaluation finale</span>
		</div>
		<div id="n_2_Ds_math">
			<span>22: Ds math</span>
		</div>
		<div id="n_9_DS_JEE">
			<span>29: DS JEE</span>
		</div>
		<div id="Fvrier">
			<span>Février</span>
		</div>
		<div id="Group_317">
			<div id="Group_257_va">
				<div id="D_vb">
					<span>D</span>
				</div>
				<div id="L_vc">
					<span>L</span>
				</div>
				<div id="M_vd">
					<span>M</span>
				</div>
				<div id="M_ve">
					<span>M</span>
				</div>
				<div id="J_vf">
					<span>J</span>
				</div>
				<div id="V_vg">
					<span>V</span>
				</div>
				<div id="S_vh">
					<span>S</span>
				</div>
			</div>
			<div id="Group_269_vi">
				<div id="Group_263_vj">
					<div id="n__vk">
						<span>5</span>
					</div>
					<div id="n__vl">
						<span>1</span>
					</div>
					<div id="n__vm">
						<span>2</span>
					</div>
					<div id="n__vn">
						<span>3</span>
					</div>
					<div id="n__vo">
						<span>4</span>
					</div>
					<div id="n__vp">
						<span>6</span>
					</div>
				</div>
				<div id="Group_264_vq">
					<div id="n_2_vr">
						<span>12</span>
					</div>
					<div id="n__vs">
						<span>7</span>
					</div>
					<div id="n__vt">
						<span>8</span>
					</div>
					<div id="n__vu">
						<span>9</span>
					</div>
					<div id="n_0_vv">
						<span>10</span>
					</div>
					<div id="n_1_vw">
						<span>11</span>
					</div>
					<div id="n_3_vx">
						<span>13</span>
					</div>
				</div>
				<div id="Group_265_vy">
					<div id="n_9_vz">
						<span>19</span>
					</div>
					<div id="n_4_v">
						<span>14</span>
					</div>
					<div id="n_5_v">
						<span>15</span>
					</div>
					<div id="n_6_v">
						<span>16</span>
					</div>
					<div id="n_7_v">
						<span>17</span>
					</div>
					<div id="n_8_v">
						<span>18</span>
					</div>
					<div id="n_0_v">
						<span>20</span>
					</div>
				</div>
				<div id="Group_266_v">
					<div id="n_6_wa">
						<span>26</span>
					</div>
					<div id="n_1_v">
						<span>21</span>
					</div>
					<div id="n_2_v">
						<span>22</span>
					</div>
					<div id="n_3_wa">
						<span>23</span>
					</div>
					<div id="n_4_wb">
						<span>24</span>
					</div>
					<div id="n_5_wc">
						<span>25</span>
					</div>
					<div id="n_7_wd">
						<span>27</span>
					</div>
				</div>
				<div id="Group_267_we">
					<div id="n_8_wf">
						<span>28</span>
					</div>
				</div>
			</div>
		</div>
		<svg class="Path_620" viewBox="0 0 11.096 18.826">
			<path id="Path_620" d="M 11.095703125 1.682895660400391 L 9.403298377990723 0 L 0 9.412807464599609 L 9.412807464599609 18.82561492919922 L 11.095703125 17.14271545410156 L 3.365791797637939 9.412807464599609 L 11.095703125 1.682895660400391 Z">
			</path>
		</svg>
		<svg class="Path_621" viewBox="0 0 11.096 18.826">
			<path id="Path_621" d="M 0 1.682896256446838 L 1.692404747009277 0 L 11.095703125 9.412811279296875 L 1.682895660400391 18.82562255859375 L 0 17.14272117614746 L 7.729911327362061 9.412811279296875 L 0 1.682896256446838 Z">
			</path>
		</svg>
		<svg class="Rectangle_210">
			<rect id="Rectangle_210" rx="0" ry="0" x="0" y="0" width="536" height="57">
			</rect>
		</svg>
		<svg class="Rectangle_214">
			<rect id="Rectangle_214" rx="0" ry="0" x="0" y="0" width="536" height="57">
			</rect>
		</svg>
		<svg class="Rectangle_215">
			<rect id="Rectangle_215" rx="0" ry="0" x="0" y="0" width="536" height="57">
			</rect>
		</svg>
		<div id="Group_319">
			<div id="Jour_">
				<span>Jour </span>
			</div>
			<div id="Semaine_">
				<span>Semaine </span>
			</div>
			<div id="Mois_">
				<span>Mois </span>
			</div>
		</div>
		<svg class="Rectangle_211">
			<rect id="Rectangle_211" rx="16" ry="16" x="0" y="0" width="62" height="32">
			</rect>
		</svg>
		<div id="Group_320">
			<div id="n_2052021_Examen_programation_">
				<span>02/05/2021 Examen </span><span style="font-style:normal;font-weight:bold;">programation</span><span> a</span>
			</div>
			<div id="n_0h_">
				<span>10h </span>
			</div>
		</div>
		<div id="Salle_labo4">
			<span>Salle: labo4</span>
		</div>
		<div id="Salle_C3">
			<span>Salle: C3</span>
		</div>
		<div id="Group_321">
			<div id="n_2h_">
				<span>12h </span>
			</div>
			<div id="n_4052021_Examen_arabe_a">
				<span>24/05/2021 Examen</span><span style="font-style:normal;font-weight:bold;"> arabe</span><span> a</span>
			</div>
		</div>
		<div id="task_alt_black_24dp">
			<svg class="Rectangle_216">
				<rect id="Rectangle_216" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
			<svg class="Path_622" viewBox="2 2 20 20">
				<path id="Path_622" d="M 22 5.179999828338623 L 10.59000015258789 16.60000038146973 L 6.350000381469727 12.36000061035156 L 7.760000228881836 10.95000076293945 L 10.59000015258789 13.78000068664551 L 20.59000015258789 3.780000686645508 L 22 5.179999828338623 Z M 19.79000091552734 10.22000026702881 C 19.92000007629395 10.78999996185303 20 11.39000034332275 20 12 C 20 16.42000007629395 16.42000007629395 20 12 20 C 7.579999923706055 20 4 16.42000007629395 4 12 C 4 7.579999923706055 7.579999923706055 4 12 4 C 13.57999992370605 4 15.03999996185303 4.460000038146973 16.28000068664551 5.25 L 17.72000122070312 3.809999942779541 C 16.10000038146973 2.670000076293945 14.13000011444092 2 12 2 C 6.480000019073486 2 2 6.480000019073486 2 12 C 2 17.52000045776367 6.480000019073486 22 12 22 C 17.52000045776367 22 22 17.52000045776367 22 12 C 22 10.80999946594238 21.78000068664551 9.670000076293945 21.39999961853027 8.609999656677246 L 19.79000091552734 10.22000026702881 Z">
				</path>
			</svg>
		</div>
		<div id="task_alt_black_24dp_w">
			<svg class="Rectangle_216_w">
				<rect id="Rectangle_216_w" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
			<svg class="Path_622_w" viewBox="2 2 20 20">
				<path id="Path_622_w" d="M 22 5.179999828338623 L 10.59000015258789 16.60000038146973 L 6.350000381469727 12.36000061035156 L 7.760000228881836 10.95000076293945 L 10.59000015258789 13.78000068664551 L 20.59000015258789 3.780000686645508 L 22 5.179999828338623 Z M 19.79000091552734 10.22000026702881 C 19.92000007629395 10.78999996185303 20 11.39000034332275 20 12 C 20 16.42000007629395 16.42000007629395 20 12 20 C 7.579999923706055 20 4 16.42000007629395 4 12 C 4 7.579999923706055 7.579999923706055 4 12 4 C 13.57999992370605 4 15.03999996185303 4.460000038146973 16.28000068664551 5.25 L 17.72000122070312 3.809999942779541 C 16.10000038146973 2.670000076293945 14.13000011444092 2 12 2 C 6.480000019073486 2 2 6.480000019073486 2 12 C 2 17.52000045776367 6.480000019073486 22 12 22 C 17.52000045776367 22 22 17.52000045776367 22 12 C 22 10.80999946594238 21.78000068664551 9.670000076293945 21.39999961853027 8.609999656677246 L 19.79000091552734 10.22000026702881 Z">
				</path>
			</svg>
		</div>
		<svg class="Rectangle_264">
			<rect id="Rectangle_264" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_273">
			<rect id="Rectangle_273" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_275">
			<rect id="Rectangle_275" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_274">
			<rect id="Rectangle_274" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_271">
			<rect id="Rectangle_271" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_272">
			<rect id="Rectangle_272" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_268">
			<rect id="Rectangle_268" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_269">
			<rect id="Rectangle_269" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_270">
			<rect id="Rectangle_270" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_265">
			<rect id="Rectangle_265" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<svg class="Rectangle_266">
			<rect id="Rectangle_266" rx="15" ry="15" x="0" y="0" width="320" height="43">
			</rect>
		</svg>
		<div id="Mars">
			<span>Mars</span>
		</div>
		<div id="Dcembre">
			<span>Décembre</span>
		</div>
		<div id="Janvier">
			<span>Janvier</span>
		</div>
		<div id="Fvrier_xi">
			<span>Février</span>
		</div>
		<div id="Avril">
			<span>Avril</span>
		</div>
		<div id="Mai">
			<span>Mai</span>
		</div>
		<div id="Juillet">
			<span>Juillet</span>
		</div>
		<div id="Juin">
			<span>Juin</span>
		</div>
		<div id="October">
			<span>October</span>
		</div>
		<div id="November">
			<span>November</span>
		</div>
		<div id="September_xp">
			<span>September</span>
		</div>
		<footer style="position:absolute;bottom:0;width:100%">
			<?php include('../header/footer.php'); ?>
		</footer>
	</div>

</body>
<script src="../js/main2.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>

</html>