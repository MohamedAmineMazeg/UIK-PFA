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
	<title>evenement</title>
	<style id="applicationStylesheet" type="text/css">
		.mediaViewInfo {
			--web-view-name: evenement;
			--web-view-id: evenement;
			--web-scale-to-fit: true;
			--web-scale-to-fit-type: width;
			--web-scale-on-resize: true;
			--web-enable-deep-linking: true;
		}

		:root {
			--web-view-ids: evenement;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			border: none;
		}

		#evenement {
			position: absolute;
			width: 1920px;
			height: 4550px;
			background-color: rgba(255, 255, 255, 1);
			overflow: hidden;
			--web-view-name: evenement;
			--web-view-id: evenement;
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
			width: 1987px;
			height: 4158px;
			left: -33px;
			top: 12px;
		}

		#Untitled-12 {
			opacity: 0.3;
			position: absolute;
			width: 596.659px;
			height: 543.038px;
			left: 1772.671px;
			top: 402.981px;
			overflow: visible;
		}

		#Path_35_c {
			fill: url(#Path_35_c);
		}

		.Path_35_c {
			overflow: visible;
			position: absolute;
			width: 202.216px;
			height: 202.268px;
			left: 0px;
			top: 340.771px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_36_db {
			fill: url(#Path_36_db);
		}

		.Path_36_db {
			overflow: visible;
			position: absolute;
			width: 61.521px;
			height: 61.528px;
			left: 468.348px;
			top: 21.26px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_37_dd {
			fill: url(#Path_37_dd);
		}

		.Path_37_dd {
			overflow: visible;
			position: absolute;
			width: 98.874px;
			height: 98.883px;
			left: 497.784px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_38_df {
			fill: url(#Path_38_df);
		}

		.Path_38_df {
			overflow: visible;
			position: absolute;
			width: 29.668px;
			height: 29.668px;
			left: 71.29px;
			top: 500.741px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_39_dh {
			fill: url(#Path_39_dh);
		}

		.Path_39_dh {
			overflow: visible;
			position: absolute;
			width: 119.757px;
			height: 119.755px;
			left: 104.239px;
			top: 378.872px;
			transform: matrix(1, 0, 0, 1, 0, 0);
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

		#Rectangle_160 {
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_160 {
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

		#Group_273 {
			position: absolute;
			width: 256px;
			height: 272px;
			left: 36px;
			top: 83px;
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

		#M_dq {
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

		#Group_270 {
			position: absolute;
			width: 256px;
			height: 215px;
			left: 0px;
			top: 57px;
			overflow: visible;
		}

		#Group_263 {
			position: absolute;
			width: 127px;
			height: 15px;
			left: 122px;
			top: 0px;
			overflow: visible;
		}

		#n_ {
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

		#n__dx {
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

		#n__dy {
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

		#n__dz {
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

		#Group_264 {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 2px;
			top: 50px;
			overflow: visible;
		}

		#n_0 {
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

		#n__d {
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

		#n__ea {
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

		#n__eb {
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

		#n__ec {
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

		#n__ed {
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

		#n_1 {
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

		#Group_265 {
			position: absolute;
			width: 254px;
			height: 15px;
			left: 0px;
			top: 100px;
			overflow: visible;
		}

		#n_7 {
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

		#n_2 {
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

		#n_3 {
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

		#n_4 {
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

		#n_5 {
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

		#n_6 {
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

		#n_8 {
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

		#n_4_eh {
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

		#n_9 {
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

		#n_0_ej {
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

		#n_1_ek {
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

		#n_2_el {
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

		#n_3_em {
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

		#n_5_en {
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
			width: 174px;
			height: 15px;
			left: 0px;
			top: 200px;
			overflow: visible;
		}

		#n_6_ep {
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

		#n_7_eq {
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

		#n_8_er {
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

		#n_9_es {
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

		#n_0_et {
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

		#Rectangle_211 {
			fill: transparent;
			stroke: rgba(112, 112, 112, 1);
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
			left: 1693px;
			top: 796px;
		}

		#n_51990512_899099780732410_230 {
			position: absolute;
			width: 1920px;
			height: 956px;
			left: 0px;
			top: 98px;
			overflow: visible;
		}

		#annie-spratt-hCb3lIB8L8E-unspl {
			opacity: 0.4;
			fill: rgba(105, 123, 162, 1);
		}

		.annie-spratt-hCb3lIB8L8E-unspl {
			position: absolute;
			overflow: visible;
			width: 1920px;
			height: 963px;
			left: 0px;
			top: 91px;
		}

		#vnement {
			left: 775px;
			top: 196px;
			position: absolute;
			overflow: visible;
			width: 371px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 70px;
			color: rgba(252, 249, 249, 1);
		}

		#Rectangle_222 {
			fill: transparent;
			stroke: rgba(254, 249, 249, 1);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_222 {
			position: absolute;
			overflow: visible;
			width: 205px;
			height: 61px;
			left: 741px;
			top: 814px;
		}

		#Rectangle_223 {
			fill: transparent;
			stroke: rgba(254, 249, 249, 1);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_223 {
			position: absolute;
			overflow: visible;
			width: 205px;
			height: 61px;
			left: 974px;
			top: 814px;
		}

		#n_2__Jours {
			left: 797px;
			top: 535px;
			position: absolute;
			overflow: visible;
			width: 107px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			color: rgba(252, 249, 249, 1);
		}

		#n_0__Heurs {
			left: 1148px;
			top: 535px;
			position: absolute;
			overflow: visible;
			width: 113px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			color: rgba(252, 249, 249, 1);
		}

		#n_80__Invits {
			left: 1477px;
			top: 535px;
			position: absolute;
			overflow: visible;
			width: 133px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			color: rgba(252, 249, 249, 1);
		}

		#n_4__Sujets {
			left: 440px;
			top: 535px;
			position: absolute;
			overflow: visible;
			width: 119px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			color: rgba(252, 249, 249, 1);
		}

		#Path_628 {
			fill: transparent;
			stroke: rgba(255, 254, 254, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_628 {
			overflow: visible;
			position: absolute;
			width: 204.156px;
			height: 186.988px;
			left: 351.844px;
			top: 548.006px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_629 {
			fill: transparent;
			stroke: rgba(255, 254, 254, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_629 {
			overflow: visible;
			position: absolute;
			width: 204.156px;
			height: 186.988px;
			left: 697.844px;
			top: 548.006px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_630 {
			fill: transparent;
			stroke: rgba(255, 254, 254, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_630 {
			overflow: visible;
			position: absolute;
			width: 204.156px;
			height: 186.988px;
			left: 1051.844px;
			top: 548.006px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_631 {
			fill: transparent;
			stroke: rgba(255, 254, 254, 1);
			stroke-width: 5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Path_631 {
			overflow: visible;
			position: absolute;
			width: 204.156px;
			height: 186.988px;
			left: 1390.844px;
			top: 548.006px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#VOIR {
			left: 814px;
			top: 828px;
			position: absolute;
			overflow: visible;
			width: 61px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 25px;
			color: rgba(252, 249, 249, 1);
		}

		#PARTAGER {
			left: 1015px;
			top: 828px;
			position: absolute;
			overflow: visible;
			width: 125px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 25px;
			color: rgba(252, 249, 249, 1);
		}

		#Rectangle_224 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_224 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 174px;
			top: 1712px;
		}

		#Rectangle_225 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_225 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 374px;
			top: 1712px;
		}

		#Rectangle_228 {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_228 {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 305px;
			height: 80px;
			left: 817px;
			top: 3994px;
		}

		#Bienvenue_a_lUIK_hackaton_un_n {
			left: 174px;
			top: 1489px;
			position: absolute;
			overflow: visible;
			width: 705px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#n_69956422_1071688930311185_55 {
			position: absolute;
			width: 730px;
			height: 380px;
			left: 994px;
			top: 1378px;
			overflow: visible;
		}

		#n_8022020__LUIK_hackaton {
			left: 174px;
			top: 1358px;
			position: absolute;
			overflow: visible;
			width: 208px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(161, 163, 165, 1);
			letter-spacing: 0.1px;
		}

		#Line_11 {
			fill: transparent;
			stroke: rgba(15, 65, 171, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_11 {
			overflow: visible;
			position: absolute;
			width: 130px;
			height: 3px;
			left: 174.5px;
			top: 1459.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Voir_plus {
			left: 219px;
			top: 1721px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Participer {
			left: 419px;
			top: 1721px;
			position: absolute;
			overflow: visible;
			width: 102px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Voir_plus_fj {
			left: 915px;
			top: 4011px;
			position: absolute;
			overflow: visible;
			width: 92px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.2px;
		}

		#Group_325 {
			position: absolute;
			width: 1550px;
			height: 400px;
			left: 185px;
			top: 2028px;
			overflow: visible;
		}

		#Rectangle_224_fl {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_224_fl {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 0px;
			top: 354px;
		}

		#Rectangle_225_fm {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_225_fm {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 200px;
			top: 354px;
		}

		#Le_dpartement_dinformatique_de {
			left: 0px;
			top: 131px;
			position: absolute;
			overflow: visible;
			width: 729px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#JPOFST12112021 {
			position: absolute;
			width: 730px;
			height: 380px;
			left: 820px;
			top: 20px;
			overflow: visible;
		}

		#n_0112021__Journe_Portes_Ouver {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 341px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(161, 163, 165, 1);
			letter-spacing: 0.1px;
		}

		#Line_11_fq {
			fill: transparent;
			stroke: rgba(15, 65, 171, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_11_fq {
			overflow: visible;
			position: absolute;
			width: 130px;
			height: 3px;
			left: 0.5px;
			top: 101.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Voir_plus_fr {
			left: 45px;
			top: 363px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Participer_fs {
			left: 245px;
			top: 363px;
			position: absolute;
			overflow: visible;
			width: 102px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Group_326 {
			position: absolute;
			width: 1550px;
			height: 399px;
			left: 185px;
			top: 2699px;
			overflow: visible;
		}

		#Rectangle_224_fu {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_224_fu {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 0px;
			top: 353px;
		}

		#Rectangle_225_fv {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_225_fv {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 200px;
			top: 353px;
		}

		#LUniversit_UIK_en_collaboratio {
			left: 0px;
			top: 130px;
			position: absolute;
			overflow: visible;
			width: 727px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#utm-utica-ia-15112019-2 {
			position: absolute;
			width: 730px;
			height: 380px;
			left: 820px;
			top: 19px;
			overflow: visible;
		}

		#n_1062021__Rencontre_UTM {
			left: 1px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 212px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(161, 163, 165, 1);
			letter-spacing: 0.1px;
		}

		#Line_11_fz {
			fill: transparent;
			stroke: rgba(15, 65, 171, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_11_fz {
			overflow: visible;
			position: absolute;
			width: 130px;
			height: 3px;
			left: 0.5px;
			top: 100.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Voir_plus_f {
			left: 45px;
			top: 362px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Participer_f {
			left: 245px;
			top: 362px;
			position: absolute;
			overflow: visible;
			width: 102px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Group_327 {
			position: absolute;
			width: 1550px;
			height: 401px;
			left: 185px;
			top: 3367px;
			overflow: visible;
		}

		#Rectangle_224_f {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_224_f {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 0px;
			top: 355px;
		}

		#Rectangle_225_f {
			fill: transparent;
			stroke: rgba(0, 0, 0, 1);
			stroke-width: 1.5px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Rectangle_225_f {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			position: absolute;
			overflow: visible;
			width: 198px;
			height: 64px;
			left: 200px;
			top: 355px;
		}

		#Dans_le_cadre_du_cycle_de_conf {
			left: 0px;
			top: 132px;
			position: absolute;
			overflow: visible;
			width: 715px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#issit-conf-27022019 {
			position: absolute;
			width: 730px;
			height: 380px;
			left: 820px;
			top: 21px;
			overflow: visible;
		}

		#n_7022022__Confrence_dbat_-_Pr {
			left: 0px;
			top: 0px;
			position: absolute;
			overflow: visible;
			width: 553px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 20px;
			color: rgba(161, 163, 165, 1);
			letter-spacing: 0.1px;
		}

		#Line_11_f {
			fill: transparent;
			stroke: rgba(15, 65, 171, 1);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Line_11_f {
			overflow: visible;
			position: absolute;
			width: 130px;
			height: 3px;
			left: 0.5px;
			top: 102.5px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Voir_plus_ga {
			left: 45px;
			top: 364px;
			position: absolute;
			overflow: visible;
			width: 91px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Participer_ga {
			left: 245px;
			top: 364px;
			position: absolute;
			overflow: visible;
			width: 102px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: normal;
			font-size: 22px;
			color: rgba(15, 65, 171, 1);
			letter-spacing: 0.1px;
		}

		#Group_333 {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 994px;
			top: 1777px;
			overflow: visible;
		}

		#Group_332 {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Rectangle_226 {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_226 {
			position: absolute;
			overflow: visible;
			width: 369px;
			height: 49px;
			left: 0px;
			top: 0px;
		}

		#Rectangle_227 {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_227 {
			position: absolute;
			overflow: visible;
			width: 358px;
			height: 49px;
			left: 372px;
			top: 0px;
		}

		#Group_328 {
			position: absolute;
			width: 100.734px;
			height: 35.667px;
			left: 318.162px;
			top: 7px;
			overflow: visible;
		}

		#favorite_black_24dp {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Path_632 {
			fill: transparent;
		}

		.Path_632 {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_633 {
			fill: rgba(222, 32, 32, 1);
		}

		.Path_633 {
			overflow: visible;
			position: absolute;
			width: 29.723px;
			height: 27.271px;
			left: 2.973px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#delete_black_24dp {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 65.067px;
			top: 0px;
			overflow: visible;
		}

		#Path_634 {
			fill: transparent;
		}

		.Path_634 {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_635 {
			fill: rgba(0, 0, 0, 1);
		}

		.Path_635 {
			overflow: visible;
			position: absolute;
			width: 20.806px;
			height: 26.75px;
			left: 7.431px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_334 {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 994px;
			top: 2447px;
			overflow: visible;
		}

		#Group_332_gn {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Rectangle_226_go {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_226_go {
			position: absolute;
			overflow: visible;
			width: 369px;
			height: 49px;
			left: 0px;
			top: 0px;
		}

		#Rectangle_227_gp {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_227_gp {
			position: absolute;
			overflow: visible;
			width: 358px;
			height: 49px;
			left: 372px;
			top: 0px;
		}

		#Group_328_gq {
			position: absolute;
			width: 100.734px;
			height: 35.667px;
			left: 318.162px;
			top: 7px;
			overflow: visible;
		}

		#favorite_black_24dp_gr {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Path_632_gs {
			fill: transparent;
		}

		.Path_632_gs {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_633_gt {
			fill: rgba(222, 32, 32, 1);
		}

		.Path_633_gt {
			overflow: visible;
			position: absolute;
			width: 29.723px;
			height: 27.271px;
			left: 2.973px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#delete_black_24dp_gu {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 65.067px;
			top: 0px;
			overflow: visible;
		}

		#Path_634_gv {
			fill: transparent;
		}

		.Path_634_gv {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_635_gw {
			fill: rgba(0, 0, 0, 1);
		}

		.Path_635_gw {
			overflow: visible;
			position: absolute;
			width: 20.806px;
			height: 26.75px;
			left: 7.431px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_335 {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 994px;
			top: 3117px;
			overflow: visible;
		}

		#Group_332_gy {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Rectangle_226_gz {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_226_gz {
			position: absolute;
			overflow: visible;
			width: 369px;
			height: 49px;
			left: 0px;
			top: 0px;
		}

		#Rectangle_227_g {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_227_g {
			position: absolute;
			overflow: visible;
			width: 358px;
			height: 49px;
			left: 372px;
			top: 0px;
		}

		#Group_328_g {
			position: absolute;
			width: 100.734px;
			height: 35.667px;
			left: 318.162px;
			top: 7px;
			overflow: visible;
		}

		#favorite_black_24dp_g {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Path_632_g {
			fill: transparent;
		}

		.Path_632_g {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_633_g {
			fill: rgba(222, 32, 32, 1);
		}

		.Path_633_g {
			overflow: visible;
			position: absolute;
			width: 29.723px;
			height: 27.271px;
			left: 2.973px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#delete_black_24dp_g {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 65.067px;
			top: 0px;
			overflow: visible;
		}

		#Path_634_g {
			fill: transparent;
		}

		.Path_634_g {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_635_g {
			fill: rgba(0, 0, 0, 1);
		}

		.Path_635_g {
			overflow: visible;
			position: absolute;
			width: 20.806px;
			height: 26.75px;
			left: 7.431px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Group_336 {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 994px;
			top: 3787px;
			overflow: visible;
		}

		#Group_332_g {
			position: absolute;
			width: 730px;
			height: 49px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Rectangle_226_ha {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_226_ha {
			position: absolute;
			overflow: visible;
			width: 369px;
			height: 49px;
			left: 0px;
			top: 0px;
		}

		#Rectangle_227_hb {
			opacity: 0.8;
			fill: rgba(255, 255, 255, 1);
		}

		.Rectangle_227_hb {
			position: absolute;
			overflow: visible;
			width: 358px;
			height: 49px;
			left: 372px;
			top: 0px;
		}

		#Group_328_hc {
			position: absolute;
			width: 100.734px;
			height: 35.667px;
			left: 318.162px;
			top: 7px;
			overflow: visible;
		}

		#favorite_black_24dp_hd {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Path_632_he {
			fill: transparent;
		}

		.Path_632_he {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_633_hf {
			fill: rgba(222, 32, 32, 1);
		}

		.Path_633_hf {
			overflow: visible;
			position: absolute;
			width: 29.723px;
			height: 27.271px;
			left: 2.973px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#delete_black_24dp_hg {
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 65.067px;
			top: 0px;
			overflow: visible;
		}

		#Path_634_hh {
			fill: transparent;
		}

		.Path_634_hh {
			overflow: visible;
			position: absolute;
			width: 35.667px;
			height: 35.667px;
			left: 0px;
			top: 0px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Path_635_hi {
			fill: rgba(0, 0, 0, 1);
		}

		.Path_635_hi {
			overflow: visible;
			position: absolute;
			width: 20.806px;
			height: 26.75px;
			left: 7.431px;
			top: 4.458px;
			transform: matrix(1, 0, 0, 1, 0, 0);
		}

		#Text {
			left: 1689px;
			top: 1325px;
			position: absolute;
			overflow: visible;
			width: 25px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#Text_hk {
			left: 1689px;
			top: 1994px;
			position: absolute;
			overflow: visible;
			width: 25px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#Text_hl {
			left: 1689px;
			top: 2675px;
			position: absolute;
			overflow: visible;
			width: 25px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#Text_hm {
			left: 1689px;
			top: 3341px;
			position: absolute;
			overflow: visible;
			width: 25px;
			white-space: nowrap;
			text-align: left;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 26px;
			color: rgba(3, 3, 3, 1);
		}

		#Les_journaux_vnementielle_de_l {
			left: 559px;
			top: 320px;
			position: absolute;
			overflow: visible;
			width: 851px;
			white-space: nowrap;
			text-align: center;
			font-family: IBM Plex Sans;
			font-style: normal;
			font-weight: bold;
			font-size: 51px;
			color: rgba(252, 249, 249, 1);
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
	<div id="evenement">
		<svg class="Rectangle_128">
			<rect id="Rectangle_128" rx="0" ry="0" x="0" y="0" width="1987" height="4158">
			</rect>
		</svg>
		<div id="Untitled-12">
			<svg class="Path_35_c" viewBox="432.952 430.032 202.216 202.267">
				<linearGradient id="Path_35_c" spreadMethod="pad" x1="-0.019" x2="1.605" y1="1.019" y2="-0.605">
					<stop offset="0" stop-color="#fd5f97" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#4a2aba" stop-opacity="1"></stop>
				</linearGradient>
				<path id="Path_35_c" d="M 435.6300048828125 629.6300048828125 L 435.6300048828125 629.6300048828125 C 433.915283203125 627.91748046875 432.9517822265625 625.593505859375 432.9517822265625 623.1700439453125 C 432.9517822265625 620.74658203125 433.915283203125 618.422607421875 435.6300048828125 616.7100219726562 L 619.5700073242188 432.7100219726562 C 621.2825927734375 430.9953002929688 623.6065673828125 430.0317993164062 626.030029296875 430.0317993164062 C 628.4534912109375 430.0317993164062 630.7774658203125 430.9953002929688 632.4900512695312 432.7100219726562 L 632.489990234375 432.7100219726562 C 634.2047729492188 434.4225769042969 635.1682739257812 436.74658203125 635.1682739257812 439.1700439453125 C 635.1682739257812 441.5934753417969 634.2047729492188 443.9175109863281 632.4900512695312 445.6300354003906 L 448.5399780273438 629.6300048828125 C 444.972412109375 633.1888427734375 439.1975402832031 633.1888427734375 435.6299743652344 629.6300659179688 Z">
				</path>
			</svg>
			<svg class="Path_36_db" viewBox="901.299 110.521 61.521 61.528">
				<linearGradient id="Path_36_db" spreadMethod="pad" x1="-0.34" x2="1.603" y1="1.34" y2="-0.603">
					<stop offset="0" stop-color="#fd5f97" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#4a2aba" stop-opacity="1"></stop>
				</linearGradient>
				<path id="Path_36_db" d="M 903.5499877929688 169.7899932861328 L 903.5499877929688 169.7899932861328 C 900.5491943359375 166.7840576171875 900.5491943359375 161.9159393310547 903.5499267578125 158.9099884033203 L 949.6900024414062 112.7799835205078 C 951.1310424804688 111.3339309692383 953.0885620117188 110.5211334228516 955.1300048828125 110.5211410522461 C 957.1715087890625 110.5211410522461 959.1289672851562 111.3339462280273 960.5700073242188 112.7799911499023 L 960.5700073242188 112.7799835205078 C 963.5707397460938 115.7859268188477 963.5707397460938 120.6540298461914 960.5700073242188 123.6599807739258 L 914.4299926757812 169.7899780273438 C 912.9889526367188 171.2360382080078 911.031494140625 172.0488433837891 908.989990234375 172.0488433837891 C 906.948486328125 172.0488433837891 904.9910278320312 171.2360534667969 903.5499877929688 169.7899932861328 Z">
				</path>
			</svg>
			<svg class="Path_37_dd" viewBox="930.736 89.261 98.874 98.883">
				<linearGradient id="Path_37_dd" spreadMethod="pad" x1="-0.212" x2="1.297" y1="1.211" y2="-0.297">
					<stop offset="0" stop-color="#fd5f97" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#4a2aba" stop-opacity="1"></stop>
				</linearGradient>
				<path id="Path_37_dd" d="M 933 185.8899993896484 L 933 185.8899993896484 C 931.5509033203125 184.4485931396484 930.7361450195312 182.4889678955078 930.7361450195312 180.4450225830078 C 930.7361450195312 178.4010772705078 931.5509033203125 176.4414520263672 933 175.0000152587891 L 1016.47998046875 91.51999664306641 C 1017.921020507812 90.07391357421875 1019.878540039062 89.26111602783203 1021.920043945312 89.26112365722656 C 1023.961486816406 89.26112365722656 1025.9189453125 90.07393646240234 1027.359985351562 91.52000427246094 L 1027.359985351562 91.51999664306641 C 1030.360717773438 94.52593994140625 1030.360717773438 99.39404296875 1027.359985351562 102.3999938964844 L 943.8800048828125 185.8800048828125 C 942.4403686523438 187.327392578125 940.4835815429688 188.1419982910156 938.442138671875 188.1438751220703 C 936.400634765625 188.145751953125 934.4423828125 187.3347473144531 933 185.8900146484375 Z">
				</path>
			</svg>
			<svg class="Path_38_df" viewBox="504.242 590.002 29.668 29.668">
				<linearGradient id="Path_38_df" spreadMethod="pad" x1="-1.269" x2="4.503" y1="2.268" y2="-3.504">
					<stop offset="0" stop-color="#fd5f97" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#4a2aba" stop-opacity="1"></stop>
				</linearGradient>
				<path id="Path_38_df" d="M 506.9200134277344 617 L 506.9200134277344 617 C 505.2053527832031 615.2874145507812 504.2418823242188 612.9634399414062 504.2418823242188 610.5400390625 C 504.2418823242188 608.1166381835938 505.2053833007812 605.7926025390625 506.9200744628906 604.080078125 L 518.3200073242188 592.6799926757812 C 520.0325927734375 590.96533203125 522.3565673828125 590.0018310546875 524.780029296875 590.0018310546875 C 527.2034912109375 590.0018310546875 529.5274658203125 590.96533203125 531.2400512695312 592.6800537109375 L 531.239990234375 592.6799926757812 C 534.7999267578125 596.2509765625 534.7999267578125 602.0289306640625 531.239990234375 605.5999145507812 L 519.8400268554688 617 C 516.26904296875 620.5599975585938 510.4909973144531 620.5599975585938 506.9199829101562 617.0000610351562 Z">
				</path>
			</svg>
			<svg class="Path_39_dh" viewBox="537.192 468.133 119.756 119.756">
				<linearGradient id="Path_39_dh" spreadMethod="pad" x1="-0.584" x2="0.845" y1="1.584" y2="0.155">
					<stop offset="0" stop-color="#fd5f97" stop-opacity="1"></stop>
					<stop offset="1" stop-color="#4a2aba" stop-opacity="1"></stop>
				</linearGradient>
				<path id="Path_39_dh" d="M 539.8699951171875 585.2100219726562 L 539.8699951171875 585.2100219726562 C 538.1552734375 583.4974365234375 537.1917724609375 581.1734619140625 537.1917724609375 578.75 C 537.1917724609375 576.3265380859375 538.1552734375 574.0025634765625 539.8699951171875 572.2900390625 L 641.3599853515625 470.8099975585938 C 643.07080078125 469.0958557128906 645.3931884765625 468.1325988769531 647.8150024414062 468.1325988769531 C 650.23681640625 468.1325988769531 652.5591430664062 469.0958557128906 654.2699584960938 470.8099670410156 L 654.2699584960938 470.8099975585938 C 655.9846801757812 472.5225219726562 656.9481811523438 474.8465576171875 656.9481811523438 477.2699890136719 C 656.9481811523438 479.6934204101562 655.9846801757812 482.0174560546875 654.2699584960938 483.72998046875 L 552.7899780273438 585.2100219726562 C 551.077392578125 586.9247436523438 548.75341796875 587.8882446289062 546.3299560546875 587.8882446289062 C 543.906494140625 587.8882446289062 541.58251953125 586.9247436523438 539.8699951171875 585.2100219726562 Z">
				</path>
			</svg>
		</div>
		<div id="Group_292">
			<svg class="Rectangle_160">
				<rect id="Rectangle_160" rx="20" ry="20" x="0" y="0" width="320" height="324">
				</rect>
			</svg>
			<div id="September">
				<span>September</span>
			</div>
			<div id="Group_273">
				<div id="Group_258">
					<div id="D">
						<span>D</span>
					</div>
					<div id="L">
						<span>L</span>
					</div>
					<div id="M">
						<span>M</span>
					</div>
					<div id="M_dq">
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
				<div id="Group_270">
					<div id="Group_263">
						<div id="n_">
							<span>3</span>
						</div>
						<div id="n__dx">
							<span>1</span>
						</div>
						<div id="n__dy">
							<span>2</span>
						</div>
						<div id="n__dz">
							<span>4</span>
						</div>
					</div>
					<div id="Group_264">
						<div id="n_0">
							<span>10</span>
						</div>
						<div id="n__d">
							<span>5</span>
						</div>
						<div id="n__ea">
							<span>6</span>
						</div>
						<div id="n__eb">
							<span>7</span>
						</div>
						<div id="n__ec">
							<span>8</span>
						</div>
						<div id="n__ed">
							<span>9</span>
						</div>
						<div id="n_1">
							<span>11</span>
						</div>
					</div>
					<div id="Group_265">
						<div id="n_7">
							<span>17</span>
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
						<div id="n_5">
							<span>15</span>
						</div>
						<div id="n_6">
							<span>16</span>
						</div>
						<div id="n_8">
							<span>18</span>
						</div>
					</div>
					<div id="Group_266">
						<div id="n_4_eh">
							<span>24</span>
						</div>
						<div id="n_9">
							<span>19</span>
						</div>
						<div id="n_0_ej">
							<span>20</span>
						</div>
						<div id="n_1_ek">
							<span>21</span>
						</div>
						<div id="n_2_el">
							<span>22</span>
						</div>
						<div id="n_3_em">
							<span>23</span>
						</div>
						<div id="n_5_en">
							<span>25</span>
						</div>
					</div>
					<div id="Group_267">
						<div id="n_6_ep">
							<span>26</span>
						</div>
						<div id="n_7_eq">
							<span>27</span>
						</div>
						<div id="n_8_er">
							<span>28</span>
						</div>
						<div id="n_9_es">
							<span>29</span>
						</div>
						<div id="n_0_et">
							<span>30</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg class="Rectangle_211">
			<rect id="Rectangle_211" rx="16" ry="16" x="0" y="0" width="62" height="32">
			</rect>
		</svg>
		<img id="n_51990512_899099780732410_230" src="../../img/n_51990512_899099780732410_230.png" srcset="../../img/n_51990512_899099780732410_230.png 1x, n_51990512_899099780732410_230@2x.png 2x">

		<svg class="annie-spratt-hCb3lIB8L8E-unspl">
			<rect id="annie-spratt-hCb3lIB8L8E-unspl" rx="0" ry="0" x="0" y="0" width="1920" height="963">
			</rect>
		</svg>
		<div id="vnement">
			<span>Événement</span>
		</div>
		<svg class="Rectangle_222">
			<rect id="Rectangle_222" rx="0" ry="0" x="0" y="0" width="205" height="61">
			</rect>
		</svg>
		<svg class="Rectangle_223">
			<rect id="Rectangle_223" rx="0" ry="0" x="0" y="0" width="205" height="61">
			</rect>
		</svg>
		<div id="n_2__Jours">
			<span>12 <br />Jours</span>
		</div>
		<div id="n_0__Heurs">
			<span>60 <br />Heurs</span>
		</div>
		<div id="n_80__Invits">
			<span>180 <br />Invités</span>
		</div>
		<div id="n_4__Sujets">
			<span>04 <br />Sujets</span>
		</div>
		<svg class="Path_628" viewBox="19343.988 -1491.961 199.156 181.988">
			<path id="Path_628" d="M 19412.6640625 -1491.961059570312 L 19343.98828125 -1491.961059570312 L 19343.98828125 -1309.972778320312 L 19459.09765625 -1309.972778320312 L 19543.14453125 -1309.972778320312 L 19543.14453125 -1380.364501953125">
			</path>
		</svg>
		<svg class="Path_629" viewBox="19343.988 -1491.961 199.156 181.988">
			<path id="Path_629" d="M 19412.6640625 -1491.961059570312 L 19343.98828125 -1491.961059570312 L 19343.98828125 -1309.972778320312 L 19459.09765625 -1309.972778320312 L 19543.14453125 -1309.972778320312 L 19543.14453125 -1380.364501953125">
			</path>
		</svg>
		<svg class="Path_630" viewBox="19343.988 -1491.961 199.156 181.988">
			<path id="Path_630" d="M 19412.6640625 -1491.961059570312 L 19343.98828125 -1491.961059570312 L 19343.98828125 -1309.972778320312 L 19459.09765625 -1309.972778320312 L 19543.14453125 -1309.972778320312 L 19543.14453125 -1380.364501953125">
			</path>
		</svg>
		<svg class="Path_631" viewBox="19343.988 -1491.961 199.156 181.988">
			<path id="Path_631" d="M 19412.6640625 -1491.961059570312 L 19343.98828125 -1491.961059570312 L 19343.98828125 -1309.972778320312 L 19459.09765625 -1309.972778320312 L 19543.14453125 -1309.972778320312 L 19543.14453125 -1380.364501953125">
			</path>
		</svg>
		<div id="VOIR">
			<span>VOIR</span>
		</div>
		<div id="PARTAGER">
			<span>PARTAGER</span>
		</div>
		<svg class="Rectangle_224">
			<rect id="Rectangle_224" rx="0" ry="0" x="0" y="0" width="180" height="46">
			</rect>
		</svg>
		<svg class="Rectangle_225">
			<rect id="Rectangle_225" rx="0" ry="0" x="0" y="0" width="180" height="46">
			</rect>
		</svg>
		<svg class="Rectangle_228">
			<rect id="Rectangle_228" rx="0" ry="0" x="0" y="0" width="287" height="62">
			</rect>
		</svg>
		<div id="Bienvenue_a_lUIK_hackaton_un_n">
			<span>Bienvenue a "l'UIK hackaton", un nouveaux challenge pour <br />les passioner de Dévelopement. Que vous cherchiez à <br />améliorer vos compétences, ajoutez à votre portefolio ou <br />connaitre de nouvelle personnes "'l'uik hackaton" sera une <br />expérience inoubliable ...</span>
		</div>
		<img id="n_69956422_1071688930311185_55" src="../../img/n_69956422_1071688930311185_55.png" srcset="../../img/n_69956422_1071688930311185_55.png 1x, n_69956422_1071688930311185_55@2x.png 2x">

		<div id="n_8022020__LUIK_hackaton">
			<span>18/02/2020<br /></span><br /><span style="font-style:normal;font-weight:bold;font-size:30px;color:rgba(3,3,3,1);">L'UIK hackaton</span>
		</div>
		<svg class="Line_11" viewBox="0 0 130 3">
			<path id="Line_11" d="M 0 0 L 130 0">
			</path>
		</svg>
		<div id="Voir_plus">
			<span>Voir plus</span>
		</div>
		<div id="Participer">
			<span>Participer</span>
		</div>
		<div id="Voir_plus_fj">
			<span>Voir plus</span>
		</div>
		<div id="Group_325">
			<svg class="Rectangle_224_fl">
				<rect id="Rectangle_224_fl" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<svg class="Rectangle_225_fm">
				<rect id="Rectangle_225_fm" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<div id="Le_dpartement_dinformatique_de">
				<span>Le département d'informatique de la Faculté UIK va organisé <br />le 10 novembre 2021, la « Journée Portes Ouvertes » au <br />monde socio-économique, afin de permettre aux entreprises <br />partenaires qui ont apporté leur soutien moral, de prendre <br />contact avec les étudiants pour présenter leurs projets.</span>
			</div>
			<img id="JPOFST12112021" src="../../img/JPOFST12112021.png" srcset="../../img/JPOFST12112021.png 1x, JPOFST12112021@2x.png 2x">

			<div id="n_0112021__Journe_Portes_Ouver">
				<span>10/11/2021</span><br /><span style="font-style:normal;font-weight:bold;color:rgba(0,0,0,1);"></span><br /><span style="font-style:normal;font-weight:bold;font-size:30px;color:rgba(0,0,0,1);">Journée Portes Ouvertes</span>
			</div>
			<svg class="Line_11_fq" viewBox="0 0 130 3">
				<path id="Line_11_fq" d="M 0 0 L 130 0">
				</path>
			</svg>
			<div id="Voir_plus_fr">
				<span>Voir plus</span>
			</div>
			<div id="Participer_fs">
				<span>Participer</span>
			</div>
		</div>
		<div id="Group_326">
			<svg class="Rectangle_224_fu">
				<rect id="Rectangle_224_fu" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<svg class="Rectangle_225_fv">
				<rect id="Rectangle_225_fv" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<div id="LUniversit_UIK_en_collaboratio">
				<span>L'Université UIK, en collaboration avec l'Union Tunisienne de <br />l'Industrie, du commerce et de l'artisanat (UTICA), la 4ème <br />Journée d'Information : "Rencontre UTM - Entreprise à l'ère <br />de l'intelligence artificielle"</span>
			</div>
			<img id="utm-utica-ia-15112019-2" src="../../img/utm-utica-ia-15112019-2.png" srcset="../../img/utm-utica-ia-15112019-2.png 1x, utm-utica-ia-15112019-2@2x.png 2x">

			<div id="n_1062021__Rencontre_UTM">
				<span>21/06/2021<br /></span><br /><span style="font-style:normal;font-weight:bold;font-size:30px;color:rgba(3,3,3,1);">Rencontre UTM</span>
			</div>
			<svg class="Line_11_fz" viewBox="0 0 130 3">
				<path id="Line_11_fz" d="M 0 0 L 130 0">
				</path>
			</svg>
			<div id="Voir_plus_f">
				<span>Voir plus</span>
			</div>
			<div id="Participer_f">
				<span>Participer</span>
			</div>
		</div>
		<div id="Group_327">
			<svg class="Rectangle_224_f">
				<rect id="Rectangle_224_f" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<svg class="Rectangle_225_f">
				<rect id="Rectangle_225_f" rx="0" ry="0" x="0" y="0" width="180" height="46">
				</rect>
			</svg>
			<div id="Dans_le_cadre_du_cycle_de_conf">
				<span>Dans le cadre du cycle de conférences scientifiques de <br />l'ISSIT 2021-2022, vous êtes cordialement invités à la <br />conférence débat qui sera animée par Pr Samir BOUBAKER, <br />Président du comité d'éthique Bio-médical de l'Institut <br />Pasteur de Tunis...</span>
			</div>
			<img id="issit-conf-27022019" src="../../img/issit-conf-27022019.png" srcset="../../img/issit-conf-27022019.png 1x, issit-conf-27022019@2x.png 2x">

			<div id="n_7022022__Confrence_dbat_-_Pr">
				<span>27/02/2022<br /></span><br /><span style="font-style:normal;font-weight:bold;font-size:30px;color:rgba(3,3,3,1);">Conférence débat - Pr Samir BOUBAKER</span>
			</div>
			<svg class="Line_11_f" viewBox="0 0 130 3">
				<path id="Line_11_f" d="M 0 0 L 130 0">
				</path>
			</svg>
			<div id="Voir_plus_ga">
				<span>Voir plus</span>
			</div>
			<div id="Participer_ga">
				<span>Participer</span>
			</div>
		</div>
		<div id="Group_333">
			<div id="Group_332">
				<svg class="Rectangle_226">
					<rect id="Rectangle_226" rx="22" ry="22" x="0" y="0" width="369" height="49">
					</rect>
				</svg>
				<svg class="Rectangle_227">
					<rect id="Rectangle_227" rx="0" ry="0" x="0" y="0" width="358" height="49">
					</rect>
				</svg>
			</div>
			<div id="Group_328">
				<div id="favorite_black_24dp">
					<svg class="Path_632" viewBox="0 0 35.667 35.667">
						<path id="Path_632" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_633" viewBox="2 3 29.723 27.271">
						<path id="Path_633" d="M 16.86134147644043 30.27056503295898 L 14.70644855499268 28.30886840820312 C 7.0528564453125 21.36861991882324 1.99999988079071 16.79132461547852 1.99999988079071 11.17373752593994 C 1.99999988079071 6.596445083618164 5.596444606781006 3.000000238418579 10.17373847961426 3.000000238418579 C 12.75961303710938 3.000000238418579 15.24145698547363 4.203768730163574 16.86134147644043 6.106020927429199 C 18.48122596740723 4.203768730163574 20.96306991577148 3.000000238418579 23.5489444732666 3.000000238418579 C 28.1262378692627 3.000000238418579 31.72268104553223 6.596445083618164 31.72268104553223 11.17373752593994 C 31.72268104553223 16.79132461547852 26.66982460021973 21.36862182617188 19.0162353515625 28.32372856140137 L 16.86134147644043 30.27056503295898 Z">
						</path>
					</svg>
				</div>
				<div id="delete_black_24dp">
					<svg class="Path_634" viewBox="0 0 35.667 35.667">
						<path id="Path_634" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_635" viewBox="5 3 20.806 26.75">
						<path id="Path_635" d="M 21.34747505187988 11.91680526733398 L 21.34747505187988 26.77814674377441 L 9.458402633666992 26.77814674377441 L 9.458402633666992 11.91680526733398 L 21.34747505187988 11.91680526733398 M 19.11827278137207 3.000000238418579 L 11.68760395050049 3.000000238418579 L 10.20146942138672 4.48613452911377 L 4.999999046325684 4.48613452911377 L 4.999999046325684 7.458402633666992 L 25.80587577819824 7.458402633666992 L 25.80587577819824 4.48613452911377 L 20.60440635681152 4.48613452911377 L 19.11827278137207 3.000000238418579 Z M 24.31974220275879 8.944537162780762 L 6.486134052276611 8.944537162780762 L 6.486134052276611 26.77814674377441 C 6.486134052276611 28.41289329528809 7.823654174804688 29.75041198730469 9.458402633666992 29.75041198730469 L 21.34747505187988 29.75041198730469 C 22.98221969604492 29.75041198730469 24.31974220275879 28.41289329528809 24.31974220275879 26.77814674377441 L 24.31974220275879 8.944537162780762 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_334">
			<div id="Group_332_gn">
				<svg class="Rectangle_226_go">
					<rect id="Rectangle_226_go" rx="22" ry="22" x="0" y="0" width="369" height="49">
					</rect>
				</svg>
				<svg class="Rectangle_227_gp">
					<rect id="Rectangle_227_gp" rx="0" ry="0" x="0" y="0" width="358" height="49">
					</rect>
				</svg>
			</div>
			<div id="Group_328_gq">
				<div id="favorite_black_24dp_gr">
					<svg class="Path_632_gs" viewBox="0 0 35.667 35.667">
						<path id="Path_632_gs" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_633_gt" viewBox="2 3 29.723 27.271">
						<path id="Path_633_gt" d="M 16.86134147644043 30.27056503295898 L 14.70644855499268 28.30886840820312 C 7.0528564453125 21.36861991882324 1.99999988079071 16.79132461547852 1.99999988079071 11.17373752593994 C 1.99999988079071 6.596445083618164 5.596444606781006 3.000000238418579 10.17373847961426 3.000000238418579 C 12.75961303710938 3.000000238418579 15.24145698547363 4.203768730163574 16.86134147644043 6.106020927429199 C 18.48122596740723 4.203768730163574 20.96306991577148 3.000000238418579 23.5489444732666 3.000000238418579 C 28.1262378692627 3.000000238418579 31.72268104553223 6.596445083618164 31.72268104553223 11.17373752593994 C 31.72268104553223 16.79132461547852 26.66982460021973 21.36862182617188 19.0162353515625 28.32372856140137 L 16.86134147644043 30.27056503295898 Z">
						</path>
					</svg>
				</div>
				<div id="delete_black_24dp_gu">
					<svg class="Path_634_gv" viewBox="0 0 35.667 35.667">
						<path id="Path_634_gv" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_635_gw" viewBox="5 3 20.806 26.75">
						<path id="Path_635_gw" d="M 21.34747505187988 11.91680526733398 L 21.34747505187988 26.77814674377441 L 9.458402633666992 26.77814674377441 L 9.458402633666992 11.91680526733398 L 21.34747505187988 11.91680526733398 M 19.11827278137207 3.000000238418579 L 11.68760395050049 3.000000238418579 L 10.20146942138672 4.48613452911377 L 4.999999046325684 4.48613452911377 L 4.999999046325684 7.458402633666992 L 25.80587577819824 7.458402633666992 L 25.80587577819824 4.48613452911377 L 20.60440635681152 4.48613452911377 L 19.11827278137207 3.000000238418579 Z M 24.31974220275879 8.944537162780762 L 6.486134052276611 8.944537162780762 L 6.486134052276611 26.77814674377441 C 6.486134052276611 28.41289329528809 7.823654174804688 29.75041198730469 9.458402633666992 29.75041198730469 L 21.34747505187988 29.75041198730469 C 22.98221969604492 29.75041198730469 24.31974220275879 28.41289329528809 24.31974220275879 26.77814674377441 L 24.31974220275879 8.944537162780762 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_335">
			<div id="Group_332_gy">
				<svg class="Rectangle_226_gz">
					<rect id="Rectangle_226_gz" rx="22" ry="22" x="0" y="0" width="369" height="49">
					</rect>
				</svg>
				<svg class="Rectangle_227_g">
					<rect id="Rectangle_227_g" rx="0" ry="0" x="0" y="0" width="358" height="49">
					</rect>
				</svg>
			</div>
			<div id="Group_328_g">
				<div id="favorite_black_24dp_g">
					<svg class="Path_632_g" viewBox="0 0 35.667 35.667">
						<path id="Path_632_g" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_633_g" viewBox="2 3 29.723 27.271">
						<path id="Path_633_g" d="M 16.86134147644043 30.27056503295898 L 14.70644855499268 28.30886840820312 C 7.0528564453125 21.36861991882324 1.99999988079071 16.79132461547852 1.99999988079071 11.17373752593994 C 1.99999988079071 6.596445083618164 5.596444606781006 3.000000238418579 10.17373847961426 3.000000238418579 C 12.75961303710938 3.000000238418579 15.24145698547363 4.203768730163574 16.86134147644043 6.106020927429199 C 18.48122596740723 4.203768730163574 20.96306991577148 3.000000238418579 23.5489444732666 3.000000238418579 C 28.1262378692627 3.000000238418579 31.72268104553223 6.596445083618164 31.72268104553223 11.17373752593994 C 31.72268104553223 16.79132461547852 26.66982460021973 21.36862182617188 19.0162353515625 28.32372856140137 L 16.86134147644043 30.27056503295898 Z">
						</path>
					</svg>
				</div>
				<div id="delete_black_24dp_g">
					<svg class="Path_634_g" viewBox="0 0 35.667 35.667">
						<path id="Path_634_g" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_635_g" viewBox="5 3 20.806 26.75">
						<path id="Path_635_g" d="M 21.34747505187988 11.91680526733398 L 21.34747505187988 26.77814674377441 L 9.458402633666992 26.77814674377441 L 9.458402633666992 11.91680526733398 L 21.34747505187988 11.91680526733398 M 19.11827278137207 3.000000238418579 L 11.68760395050049 3.000000238418579 L 10.20146942138672 4.48613452911377 L 4.999999046325684 4.48613452911377 L 4.999999046325684 7.458402633666992 L 25.80587577819824 7.458402633666992 L 25.80587577819824 4.48613452911377 L 20.60440635681152 4.48613452911377 L 19.11827278137207 3.000000238418579 Z M 24.31974220275879 8.944537162780762 L 6.486134052276611 8.944537162780762 L 6.486134052276611 26.77814674377441 C 6.486134052276611 28.41289329528809 7.823654174804688 29.75041198730469 9.458402633666992 29.75041198730469 L 21.34747505187988 29.75041198730469 C 22.98221969604492 29.75041198730469 24.31974220275879 28.41289329528809 24.31974220275879 26.77814674377441 L 24.31974220275879 8.944537162780762 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Group_336">
			<div id="Group_332_g">
				<svg class="Rectangle_226_ha">
					<rect id="Rectangle_226_ha" rx="22" ry="22" x="0" y="0" width="369" height="49">
					</rect>
				</svg>
				<svg class="Rectangle_227_hb">
					<rect id="Rectangle_227_hb" rx="0" ry="0" x="0" y="0" width="358" height="49">
					</rect>
				</svg>
			</div>
			<div id="Group_328_hc">
				<div id="favorite_black_24dp_hd">
					<svg class="Path_632_he" viewBox="0 0 35.667 35.667">
						<path id="Path_632_he" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_633_hf" viewBox="2 3 29.723 27.271">
						<path id="Path_633_hf" d="M 16.86134147644043 30.27056503295898 L 14.70644855499268 28.30886840820312 C 7.0528564453125 21.36861991882324 1.99999988079071 16.79132461547852 1.99999988079071 11.17373752593994 C 1.99999988079071 6.596445083618164 5.596444606781006 3.000000238418579 10.17373847961426 3.000000238418579 C 12.75961303710938 3.000000238418579 15.24145698547363 4.203768730163574 16.86134147644043 6.106020927429199 C 18.48122596740723 4.203768730163574 20.96306991577148 3.000000238418579 23.5489444732666 3.000000238418579 C 28.1262378692627 3.000000238418579 31.72268104553223 6.596445083618164 31.72268104553223 11.17373752593994 C 31.72268104553223 16.79132461547852 26.66982460021973 21.36862182617188 19.0162353515625 28.32372856140137 L 16.86134147644043 30.27056503295898 Z">
						</path>
					</svg>
				</div>
				<div id="delete_black_24dp_hg">
					<svg class="Path_634_hh" viewBox="0 0 35.667 35.667">
						<path id="Path_634_hh" d="M 0 0 L 35.66722106933594 0 L 35.66722106933594 35.66722106933594 L 0 35.66722106933594 L 0 0 Z">
						</path>
					</svg>
					<svg class="Path_635_hi" viewBox="5 3 20.806 26.75">
						<path id="Path_635_hi" d="M 21.34747505187988 11.91680526733398 L 21.34747505187988 26.77814674377441 L 9.458402633666992 26.77814674377441 L 9.458402633666992 11.91680526733398 L 21.34747505187988 11.91680526733398 M 19.11827278137207 3.000000238418579 L 11.68760395050049 3.000000238418579 L 10.20146942138672 4.48613452911377 L 4.999999046325684 4.48613452911377 L 4.999999046325684 7.458402633666992 L 25.80587577819824 7.458402633666992 L 25.80587577819824 4.48613452911377 L 20.60440635681152 4.48613452911377 L 19.11827278137207 3.000000238418579 Z M 24.31974220275879 8.944537162780762 L 6.486134052276611 8.944537162780762 L 6.486134052276611 26.77814674377441 C 6.486134052276611 28.41289329528809 7.823654174804688 29.75041198730469 9.458402633666992 29.75041198730469 L 21.34747505187988 29.75041198730469 C 22.98221969604492 29.75041198730469 24.31974220275879 28.41289329528809 24.31974220275879 26.77814674377441 L 24.31974220275879 8.944537162780762 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Text">
			<span>...</span>
		</div>
		<div id="Text_hk">
			<span>...</span>
		</div>
		<div id="Text_hl">
			<span>...</span>
		</div>
		<div id="Text_hm">
			<span>...</span>
		</div>
		<div id="Les_journaux_vnementielle_de_l">
			<span>Les journaux événementielle de l'UIK</span>
		</div>
		<footer style="position:absolute;bottom:0; width:100%; ">
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