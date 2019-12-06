<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service invoice</title>
    <link href="{!! asset('assets/fontend/bootstrap.min.css',is_secured()) !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!! asset('assets/fontend/bdtdccss/invoice-style.css',is_secured()) !!}" rel="stylesheet" media="print">
    <link href="{!! asset('assets/fontend/bdtdccss/invoice-style.css',is_secured()) !!}" rel="stylesheet" media="screen">
     <script src="{!! asset('assets/fontend/jquery.min.js',is_secured()) !!}"></script>
     <script type="text/javascript" src="{!! asset('assets/fontend/bootstrap.min.js',is_secured()) !!}"></script>
     <style type="text/css" media="print">
		     @media print
		{
		.noprint {display:none;}
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}

		body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
			color: #777777;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 30px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			height: 100%;
		}

		header {
			height: 40px;
			margin-top: 20px;
			margin-bottom: 40px;
			padding: 0px 5px 0;
		}
		header figure {
			float: left;
			width: 40px;
			margin-right: 10px;
		}
		header figure img {
			height: 40px;
		}
		header .company-info {
			color: #082154;
			text-align: right;
		}
		header .company-info .title {
			margin-bottom: 5px;
			color: #082154;
			font-weight: 600;
			font-size: 2em;
		}
		header .company-info .line {
			display: inline-block;
			height: 9px;
			margin: 0 4px;
			border-left: 1px solid #2A8EAC;
		}

		section .details {
			min-width: 500px;
			margin-bottom: 40px;
			padding: 10px 35px;
			background-color: #255E98;
			color: #ffffff;
		}
		section .details .client {
			width: 50%;
			line-height: 16px;
		}
		section .details .client .name {
			font-weight: 600;
		}
		section .details .data {
			width: 50%;
			text-align: right;
		}
		section .details .title {
			margin-bottom: 15px;
			font-size: 3em;
			font-weight: 400;
			text-transform: uppercase;
		}
		section .table-wrapper {
			position: relative;
			overflow: hidden;
		}
		section .table-wrapper:before {
			content: "";
			display: block;
			position: absolute;
			top: 33px;
			left: 30px;
			width: 90%;
			height: 100%;
			border-top: 2px solid #BDB9B9;
			border-left: 2px solid #BDB9B9;
			z-index: -1;
		}
		section .no-break {
			page-break-inside: avoid;
		}
		section table {
			width: 100%;
			margin-bottom: -20px;
			table-layout: fixed;
			border-collapse: separate;
			border-spacing: 5px 20px;
		}
		section table .no {
			width: 50px;
		}
		section table .desc {
			width: 55%;
		}
		section table .qty, section table .unit, section table .total {
			width: 15%;
		}
		section table tbody.head {
			vertical-align: middle;
			border-color: inherit;
		}
		section table tbody.head th {
			text-align: center;
			color: white;
			font-weight: 600;
			text-transform: uppercase;
		}
		section table tbody.head th div {
			display: inline-block;
			padding: 7px 0;
			width: 100%;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		section table tbody.head th.desc div {
			width: 115px;
			margin-left: -110px;
		}
		section table tbody.body td {
			padding: 10px 5px;
			background: #F3F3F3;
			text-align: center;
		}
		section table tbody.body h3 {
			margin-bottom: 5px;
			color: #255E98;
			font-weight: 600;
		}
		section table tbody.body .no {
			padding: 0px;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
			color: #ffffff;
			font-size: 1.66666666666667em;
			font-weight: 600;
			line-height: 50px;
		}
		section table tbody.body .desc {
			padding-top: 0;
			padding-bottom: 0;
			background-color: transparent;
			color: #777787;
			text-align: left;
		}
		section table tbody.body .total {
			color: #255E98;
			font-weight: 600;
		}
		section table tbody.body tr.total td {
			padding: 5px 10px;
			background-color: transparent;
			border: none;
			color: #777777;
			text-align: right;
		}
		section table tbody.body tr.total .empty {
			background: white;
		}
		section table tbody.body tr.total .total {
			font-size: 1.18181818181818em;
			font-weight: 600;
			color: #255E98;
		}
		section table.grand-total {
			margin-top: 40px;
			margin-bottom: 0;
			border-collapse: collapse;
			border-spacing: 0px 0px;
			margin-bottom: 40px;
		}
		section table.grand-total tbody td {
			padding: 0 10px 10px;
			background-color: #255E98;
			color: #ffffff;
			font-weight: 400;
			text-align: right;
		}
		section table.grand-total tbody td.no, section table.grand-total tbody td.desc, section table.grand-total tbody td.qty {
			background-color: transparent;
		}
		section table.grand-total tbody td.total, section table.grand-total tbody td.grand-total {
			border-right: 5px solid #ffffff;
		}
		section table.grand-total tbody td.grand-total {
			padding: 0;
			font-size: 1.16666666666667em;
			font-weight: 600;
			background-color: transparent;
		}
		section table.grand-total tbody td.grand-total div {
			float: right;
			padding: 10px 5px;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		section table.grand-total tbody td.grand-total div span {
			margin-right: 5px;
		}
		section table.grand-total tbody tr:first-child td {
			padding-top: 10px;
		}

		footer {
			margin-bottom: 20px;
			padding: 0 5px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #255E98;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #255E98;
			text-align: center;
		}
		.bgmain{

    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;

			/* Style for "Rectangle" */
background-image: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		.banner-info-w3ls a {
    background: #17c0eb;
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 19px;
    letter-spacing: 1px;
    color: #fff;
    border-radius: 4px;
    display: inline-block;
    margin-bottom: 15px;
    /* font-size: 3em; */
    font-weight: 400;
    text-transform: uppercase;
    box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
}
body a, .btn, button {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    cursor: pointer !important;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.sub-main-w3 {
    background: #17c0eb;
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 14px;
    letter-spacing: 1px;
    color: #fff;
    border-radius: 4px;
    display: inline-block;
    box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
}
		}
</style>
<style type="text/css" media="screen">

		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}

		body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
			color: #777777;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 30px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			height: 100%;
		}

		header {
			height: 40px;
			margin-top: 20px;
			margin-bottom: 40px;
			padding: 0px 5px 0;
		}
		header figure {
			float: left;
			width: 40px;
			margin-right: 10px;
		}
		header figure img {
			height: 40px;
		}
		header .company-info {
			color: #082154;
			text-align: right;
		}
		header .company-info .title {
			margin-bottom: 5px;
			color: #082154;
			font-weight: 600;
			font-size: 2em;
		}
		header .company-info .line {
			display: inline-block;
			height: 9px;
			margin: 0 4px;
			border-left: 1px solid #2A8EAC;
		}

		section .details {
			min-width: 500px;
			margin-bottom: 40px;
			padding: 10px 35px;
			background-color: #255E98;
			color: #ffffff;
		}
		section .details .client {
			width: 50%;
			line-height: 16px;
		}
		section .details .client .name {
			font-weight: 600;
		}
		section .details .data {
			width: 50%;
			text-align: right;
		}
		section .details .title {
			margin-bottom: 15px;
			font-size: 3em;
			font-weight: 400;
			text-transform: uppercase;
		}
		section .table-wrapper {
			position: relative;
			overflow: hidden;
		}
		section .table-wrapper:before {
			content: "";
			display: block;
			position: absolute;
			top: 33px;
			left: 30px;
			width: 90%;
			height: 100%;
			border-top: 2px solid #BDB9B9;
			border-left: 2px solid #BDB9B9;
			z-index: -1;
		}
		section .no-break {
			page-break-inside: avoid;
		}
		section table {
			width: 100%;
			margin-bottom: -20px;
			table-layout: fixed;
			border-collapse: separate;
			border-spacing: 5px 20px;
		}
		section table .no {
			width: 50px;
		}
		section table .desc {
			width: 55%;
		}
		section table .qty, section table .unit, section table .total {
			width: 15%;
		}
		section table tbody.head {
			vertical-align: middle;
			border-color: inherit;
		}
		section table tbody.head th {
			text-align: center;
			color: white;
			font-weight: 600;
			text-transform: uppercase;
		}
		section table tbody.head th div {
			display: inline-block;
			padding: 7px 0;
			width: 100%;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		section table tbody.head th.desc div {
			width: 115px;
			margin-left: -110px;
		}
		section table tbody.body td {
			padding: 10px 5px;
			background: #F3F3F3;
			text-align: center;
		}
		section table tbody.body h3 {
			margin-bottom: 5px;
			color: #255E98;
			font-weight: 600;
		}
		section table tbody.body .no {
			padding: 0px;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
			color: #ffffff;
			font-size: 1.66666666666667em;
			font-weight: 600;
			line-height: 50px;
		}
		section table tbody.body .desc {
			padding-top: 0;
			padding-bottom: 0;
			background-color: transparent;
			color: #777787;
			text-align: left;
		}
		section table tbody.body .total {
			color: #255E98;
			font-weight: 600;
		}
		section table tbody.body tr.total td {
			padding: 5px 10px;
			background-color: transparent;
			border: none;
			color: #777777;
			text-align: right;
		}
		section table tbody.body tr.total .empty {
			background: white;
		}
		section table tbody.body tr.total .total {
			font-size: 1.18181818181818em;
			font-weight: 600;
			color: #255E98;
		}
		section table.grand-total {
			margin-top: 40px;
			margin-bottom: 0;
			border-collapse: collapse;
			border-spacing: 0px 0px;
			margin-bottom: 40px;
		}
		section table.grand-total tbody td {
			padding: 0 10px 10px;
			background-color: #255E98;
			color: #ffffff;
			font-weight: 400;
			text-align: right;
		}
		section table.grand-total tbody td.no, section table.grand-total tbody td.desc, section table.grand-total tbody td.qty {
			background-color: transparent;
		}
		section table.grand-total tbody td.total, section table.grand-total tbody td.grand-total {
			border-right: 5px solid #ffffff;
		}
		section table.grand-total tbody td.grand-total {
			padding: 0;
			font-size: 1.16666666666667em;
			font-weight: 600;
			background-color: transparent;
		}
		section table.grand-total tbody td.grand-total div {
			float: right;
			padding: 10px 5px;
			background: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		section table.grand-total tbody td.grand-total div span {
			margin-right: 5px;
		}
		section table.grand-total tbody tr:first-child td {
			padding-top: 10px;
		}

		footer {
			margin-bottom: 20px;
			padding: 0 5px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #255E98;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #255E98;
			text-align: center;
		}
		.bgmain{

    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;

			/* Style for "Rectangle" */
background-image: linear-gradient(135deg, #a14eea 0%, #4990e2 100%);
		}
		.banner-info-w3ls a {
    background: #17c0eb;
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 19px;
    letter-spacing: 1px;
    color: #fff;
    border-radius: 4px;
    display: inline-block;
    margin-bottom: 15px;
    /* font-size: 3em; */
    font-weight: 400;
    text-transform: uppercase;
    box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
}
body a, .btn, button {
    text-decoration: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    cursor: pointer !important;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.sub-main-w3 {
    background: #17c0eb;
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 14px;
    letter-spacing: 1px;
    color: #fff;
    border-radius: 4px;
    display: inline-block;
    box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -webkit-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -o-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
    -ms-box-shadow: 0 12px 60px rgba(0, 0, 0, .2);
}

	</style>
  	</head>
	<body>
	   <header class="clearfix">
	      <div class="container">
	         <figure>
	            <a href="{{ URL::to('/',null,is_secured())}}"><img class="logo" src="{{ asset('assets/logo.png')}}" style="height: 50px" alt="">
	         </figure>
	         <div class="data right company-info">
	            <h2 class="title">BuyerSeller.Asia</h2>
	            <span>House: 818, Floor: 02, Road: 12, Avenue: 06
	               Mirpur DOHS, Dhaka 1216</span>
	            <span class="line"></span>
	            <a class="phone" href="tel:880170-8884440">(880) 170-8884440</a>
	            <span class="line"></span>
	            <a class="email" href="mailto:billing@buyerseller.asia">billing@buyerseller.asia</a>
	         </div>
	      </div>
	   </header>
	   <section>
	      <div class="details clearfix bgmain">
	         <div class="container">
	            <div class="client left">
	               <p>INVOICE TO:</p>
	               <p class="name">{{$supplier_info->orders->inq_sender_user->first_name}} {{$supplier_info->orders->inq_sender_user->last_name}}</p>
	               <p>
	                  {{ $supplier_info->orders->sender_company->street ?? '' }}<br>
	                  {{ $supplier_info->orders->sender_company->city ?? '' }}- {{ $supplier_info->orders->sender_company->zip_code ?? '' }}, {{ $supplier_info->orders->sender_company->region ?? '' }}
	               </p>
	               <a href="mailto:{{$supplier_info->orders->inq_sender_user->email}}">{{$supplier_info->orders->inq_sender_user->email}}</a>
	            </div>
	            <div class="data right">
	               <div class="title">Invoice: {{$supplier_info->order_invoice->invoice_number}}</div>
	               <div class="date">
	                  Date of Invoice: {{ date_format($supplier_info->order_invoice->created_at,"d/m/Y H:i:s")}}<br>
	                  Payment Type: {{ $supplier_info->pay_type }}
	               </div>
	               <div class="date banner-info-w3ls">
	                  Status: <a class="btn">Paid</a>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="container">
	         <div class="table-wrapper ">
	            <table>
	               <tbody class="head">
	                  <tr>
	                     <th class="no"></th>
	                     <th class="desc">
	                        <div>Description</div>
	                     </th>
	                     <th class="qty">
	                        <div>QTY</div>
	                     </th>
	                     <th class="unit">
	                        <div>Unit price</div>
	                     </th>
	                     <th class="total">
	                        <div>Total</div>
	                     </th>
	                  </tr>
	               </tbody>
	               <tbody class="body">
	                  <?php $total_price = 0; ?>

	                  <?php $product_price_count = 1; $num_count = 1; ?>
	                  @if($supplier_info->orders->bdtdcOrderDetails)
	                  @if(count($supplier_info->orders->bdtdcOrderDetails)>0)
	                  @foreach($supplier_info->orders->bdtdcOrderDetails as $p_order_details)




	                  <td class="no sub-main-w3">{{$num_count}}</td>
	                  <td class="desc">
	                     @if($p_order_details->orderProductDetails)
	                     {{ $p_order_details->orderProductDetails->name }}
	                     @else
	                     {{$p_order_details->product_name}}
	                     @endif
	                  </td>
	                  <td class="qty">{{$p_order_details->quantity}} {{$p_order_details->orderProductUnit?$p_order_details->orderProductUnit->name:'Pieces'}}</td>
	                  <td class="unit">

	                     {{$p_order_details->unit_price}} USD

	                  </td>
	                  <td class="total">
	                     {{$p_order_details->quantity*$p_order_details->unit_price}} USD
	                     <?php $total_price += ($p_order_details->quantity*$p_order_details->unit_price); ?>
	                  </td>

	                  </tr>
	                  <?php $product_price_count++; $num_count++; ?>
	                  @endforeach
	                  @else
	                  <tr>
	                     <td>Not Available</td>
	                     <td></td>
	                  </tr>
	                  @endif

	                  @else
	                  <tr>
	                     <td>Not Available</td>
	                     <td></td>
	                  </tr>
	                  @endif

	                  </tr>

	                  <tr>
	                     <td class="no sub-main-w3">02</td>
	                     <td class="desc">Service Charge</td>
	                     <td class="qty">0</td>
	                     <td class="unit">$0.00</td>
	                     <td class="total">$0.00</td>
	                  </tr>

	               </tbody>
	            </table>
	         </div>
	         <div class="no-break">
	            <table class="grand-total">
	               <tbody>
	                  <tr>
	                     <td class="no"></td>
	                     <td class="desc"></td>
	                     <td class="qty"></td>
	                     <td class="unit">Shipping:</td>
	                     <td class="total">$ {{ $supplier_info->orders->shipping_fee }} USD
	                        @php
	                        $total_price += $supplier_info->orders->shipping_fee
	                        @endphp</td>
	                  </tr>
	                  <tr>
	                     <td class="no"></td>
	                     <td class="desc"></td>
	                     <td class="qty"></td>
	                     <td class="unit">Insurance:</td>
	                     <td class="total">$ {{ $supplier_info->orders->insurance_charge }} USD
	                        @php
	                        $total_price += $supplier_info->orders->insurance_charge
	                        @endphp</td>
	                  </tr>
	                  {{ $supplier_info->order_invoice->pay_type}}
	                  <tr>
	                     <td class="no"></td>
	                     <td class="desc"></td>
	                     <td class="qty"></td>
	                     <td class="unit">Tax :</td>
	                     <td class="total">$0.00</td>
	                  </tr>
	                  <tr>
	                     <td class="grand-total" colspan="5">
	                        <div><span>TOTAL PAYMENT:</span>

	                           @if($supplier_info->order_invoice)
	                           @if($supplier_info->pay_type=='initial')
	                           $ {{$supplier_info->orders->initial_payment}}
	                           @php
	                           $total_price -= $supplier_info->orders->initial_payment
	                           @endphp
	                           @else
	                           $ {{ $total_price }}
	                           @endif
	                           @else
	                           @endif

	                        </div>
	                     </td>
	                  </tr>
	               </tbody>
	            </table>
	         </div>
	      </div>
	   </section>

	   <footer>
	      <div class="container">
	         <div class="thanks">Thank you!</div>
	         <div class="notice">
	            <div>NOTICE:</div>
	            <div>A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
	         </div>
	         <div class="end">Invoice was created on a computer and is valid without the signature and seal.</div>
	      </div>
	   </footer>
	   <div class="container noprint">

	      <div class="date banner-info-w3ls" style="text-align: right;float: right;">
	         <a href="javascript:window.print()" class="btn">Print</a>
	      </div>
	      <div class="banner-info-w3ls" style="text-align: right;float: right;margin-right: 30px;">
	         <a href="{{ URL::to('payment-history')}}" class="btn">Back</a>
	      </div>
	   </div>
	</body>
</html>