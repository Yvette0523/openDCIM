<?php
	require_once( '../db.inc.php' );
	header("Content-type: text/css");
?>


/* Reset All Broswers to Nothing */
@import url('reset.css');

/* ======== 阴影变量 ======== */
:root {
  --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
  --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
  --shadow-lg: 0 10px 15px rgba(0,0,0,0.15);
  --shadow-card: 0 2px 8px rgba(0,0,0,0.08);  /* 卡片专用 */
}

html {
  font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
  font-size: .875em;
  background-color: #f8f9fa;
  color: #495057;
  line-height: 1.6;
  padding: 0;
}


#header {
  padding: 12px 0;
  background: linear-gradient(135deg, #2c3e50 0%, #4a6491 100%) no-repeat left center;
  box-shadow: var(--shadow-md); /* 替換原有陰影 */
  transition: box-shadow 0.3s ease; /* 新增過渡效果 */
}

#header:hover {
  box-shadow: var(--shadow-hover); /* 懸停時加深陰影 */
}

select {padding: .05em;}
fieldset table, table {border: 1px solid #fff;}
textarea {white-space: pre;word-wrap: break-word;}
.hide {display: none !important;}
.show {display: block;}
.greybg {background-color: #fff;}
.warning {text-align: center; color: red; text-transform: uppercase;}
.right {text-align: right;}
.left {text-align: left;}
.custom-combobox {position: relative;display: inline-block;}
.monospace {font-family: monospace !important;}
.noborder {border: 0px !important;}

.floatleft { float: left; margin-right: 5px; }
.floatright { float: right; margin-left: 5px; }

[readonly],[disabled] {
	background-color: #fff;
	border: 1px dotted #fff;
	padding: 1px;
	color: #000000;
	cursor: default;
} 

.arrow_left { position: relative; background: #ffffff; border: 1px solid #000000; } 
.arrow_left:after, .arrow_left:before { right: 100%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; } 
.arrow_left:after { border-color: rgba(255, 255, 255, 0); border-right-color: #ffffff; border-width: 15px; top: 15px; margin-top: -15px; } 
.arrow_left:before { border-color: rgba(0, 0, 0, 0); border-right-color: #000000; border-width: 16px; top: 15px; margin-top: -16px; }

.no-close .ui-dialog-titlebar-close {display: none;}

@keyframes loading {
  from {
    transform: rotate(0deg);
    background: conic-gradient(
      #4dabf7 0deg, 
      #9775fa 120deg, 
      #f783ac 240deg, 
      transparent 360deg
    );
  }
  to {
    transform: rotate(360deg);
    background: conic-gradient(
      #4dabf7 360deg, 
      #9775fa 480deg, 
      #f783ac 600deg, 
      transparent 720deg
    );
  }
}


.rotate{
	animation: loading 0.8s;
	-webkit-animation: loading 0.8s;

	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite; /*Safari and Chrome*/

	overflow:hidden;
}   


/* css for timepicker */
.ui-timepicker-div .ui-widget-header {margin-bottom: 8px;}
.ui-timepicker-div dl {text-align: left;}
.ui-timepicker-div dl dt {height: 25px; margin-bottom: -25px;}
.ui-timepicker-div dl dd {margin: 0 10px 10px 65px;}
.ui-timepicker-div td {font-size: 90%;}
.ui-tpicker-grid-label {background: none; border: none; margin: 0; padding: 0;}

/*  Header/logo */
#header{
	padding:5px 0;
	background:#6BB1E0 url("../images/logo.png") no-repeat left center;
	height:66px;
	position: relative;
}
#header > span {color: white;display: block;margin-top: 5px;text-align: center;
	text-shadow: 1px 1px 0 #063, 1px 1px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
#header1 {font-size: xx-large;}
#header2 {font-size: x-large;}
#header > #version {bottom: 2px;position: absolute;right: 4px;font-size:small;
	text-shadow: 1px 1px 0 #063, 1px 1px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}

/* Configuration Page */
div.cp { position: relative;}
.miniColors-trigger { position: absolute; top: 0; right: 0;}
.config .center input { width: 95%; }
#configtabs { min-width: 670px; }
#configtabs button { margin-left: 0.5em; margin-right: 0.5em;}
#configtabs span { font-style: italic; font-size: -1;}
#configtabs label:after {content:":"; margin-right: 0.5em;}
#configtabs #general div > input {width: 20em; }
#configtabs #general #rackusage input {width: 2em; }
#configtabs #general #rackusage > div > div:nth-child(5) { width: 6em; }
#configtabs #style .cp > input {width: 7em; }
#configtabs #email div > input {width: 20em; }

#configtabs #reporting div:first-child + div > input {width: 20em; }

div#directoryselection { display: none;}
#directoryselection #filelist { position: absolute; top: 30px; left: 1em; height: 380px; width: 245px; overflow-y: scroll; overflow-x: hidden; white-space: nowrap;}
#directoryselection #filelist a { line-height: 1.5em; }
#directoryselection #filelist a::before,
#imageselection #filelist a.dir::before {
	display: inline-block;
	background-image: url(../images/folder.gif);
	content: '';
	background-size: 1.5em;
	height: 1.75em;
	width: 1.5em;
	padding-right: 5px;
	margin-bottom: -5px;
	background-repeat: no-repeat;
}

div#imageselection { display: none;}
#imageselection span { display: block; padding: 0.25em 0 0.5em 0.5em; cursor: pointer; text-decoration: underline; border: 1px solid white;}
#imageselection a.dir span { display: inherit; }
#imageselection #preview { position: absolute; top: 30px; right: 0; height: 340px; width: 340px; margin: 0.1em 0 0 0; padding: 0; border: 0px solid black;}
#imageselection #filelist { position: absolute; top: 30px; left: 1em; height: 380px; width: 245px; overflow-y: scroll; overflow-x: hidden; white-space: nowrap;}

#configtabs .ui-menu-item ul { max-height: 200px; /* overflow: auto; */ }
#tzmenu {display: none;}
#tzmenu li > a {display: block; width: 100%; line-height: 1.25; color: #fff !important;}
#tzmenu li > a.ui-state-active {color: black !important; line-height: 1.5 !important; background: url(images/ui-bg_glass_55_fbf9ee_1x400.png) 50% 50% repeat-x !important;}
#tzmenu li > ul { overflow-x: hidden; }
#tzmenu li > ul { -ms-overflow-style: none; scrollbar-width: none; }
#tzmenu li > ul::-webkit-scrollbar { display: none; }

#tooltip, #cdutooltip { min-height: 300px; min-width: 550px; }

#tt .available.connected-list {
	-ms-overflow-style: none;
	scrollbar-width: none;
}
#tt .available.connected-list::-webkit-scrollbar {
	display: none;
}

.customattrsheader { padding-right: 10px; }
#customattrs input, #customattrs select { background-color: transparent; border-style: ridge; }

/* index */
.index .table, .index .table .title {background-color: white;}
.index .table .title {font-weight: bold; font-size: 1.25em;}
.index .table div {padding: 3px;}
.rackrequest div:first-child div {background-color: #fff;text-align: center;color: white;font-weight: bold;}
.overdue {background-color:#FFE6F4;}
.soon {background-color:#FFFFAA;}
.clear {background-color:#fff;}

/* Rack Request Page */
.request fieldset {
		background-color: white;
		border: 1px solid #fff;
		padding: 10px;
		margin-bottom: 8px;
}
.request legend {border: 1px #6BB1E0 solid;background-color: white; padding: .15em;}
.errmsg {display:block;font-style:italic;margin-left:2em;}
.hlight {color: red;}



/* Data Center Stats */
.dcstats .heading > div{width: 89%;display: inline-block;vertical-align: middle;}
.dcstats .heading > div + div {width: 10%;}
.dcstats .heading > div + div button {display: block;width: 100%;}
.dcstats .table, .dcstats .table .title { background-color: white; }
.dcstats .table .title { font-weight: bold; font-size: 1.25em; }
.dcstats .table .title span { font-size: 0.6em; vertical-align: top;}
.dcstats .table .title span:before { content:"  [ "; }
.dcstats .table .title span:after { content:" ]";}
.dcstats .table div {padding: 3px;}
div#dcstats { display: table;}
div#dcstats > div{ width: 100%;}
div#dcstats .table + .table > div > div + div{white-space: pre; text-align: right;}
.canvas {position: relative; background-repeat: no-repeat;}
.canvas img {position: absolute; top: 0; left: 0; z-index: 10;}
.dcstats ~ #tt span {font-size: 1.5em; text-align: center; font-weight: bold;}
.dcstats ~ #tt ul {list-style-type: none;}
.dcstats ~ #tt ul li.red {background: url('../images/rs.png') left center no-repeat; line-height: 20px; padding-left: 20px;}
.dcstats ~ #tt ul li.green {background: url('../images/gs.png') left center no-repeat; line-height: 20px; padding-left: 20px;}
.dcstats ~ #tt ul li.yellow {background: url('../images/ys.png') left center no-repeat; line-height: 20px; padding-left: 20px;}
.dcstats ~ #tt ul li.wtf {background: url('../images/us.png') left center no-repeat; line-height: 20px; padding-left: 20px;}
#maptitle {padding: 8px; font-size: 120%; font-weight: bold;} 
#maptitle .nav {float: right; height: 21px;}
#mapCanvas { margin-bottom: 50px; position: relative;}
canvas#background { position: absolute; }

/* Storage Room */
.storage .table, .storage .table #title { background: #fff; }
.storage .table #title {filter: none;}
.storage .table .title { font-weight: bold; font-size: 1.25em; }
.storage .table div {padding: 3px;}
.storage .table {min-width: 400px; max-width: 600px; margin-top: 2em;}

/* Sidebar Menu */
#sidebar {
	position: relative;
	min-width: 200px;
	display: inline-block;
	vertical-align: top;
}
#sidebar input, #sidebar textarea {
	height: 27px;
	width: 170px;
	margin: 0;
	vertical-align: text-bottom;
	clear: left;
	display: inline-block;
	white-space: nowrap;
	word-wrap: normal;
	padding: 5px;
}
#sidebar textarea {
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
	border-style: solid none solid solid;
	border-width: 1px 0 1px 1px;
	border-color: black;
	resize: none;
}
#sidebar input + button, #sidebar .text-core + button, button.iebug, #sidebar textarea + button {
	height: 27px;
	padding: 0px;
	margin: 0px;
	display: inline-block;
	vertical-align: top;
	clear: right;
	border-left: 0px solid;
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
	-moz-border-radius: 0px;
	-moz-box-shadow: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}
#sidebar form { margin-bottom: 4px; }
#sidebar input.search { height: 15px; padding: 5px; width: 141px; border: 1px solid black; border-right: 0; vertical-align: top;}
#sidebar input + button img, #sidebar .text-arrow + button img {height: 27px;}
#sidebar div.text-core {width: 150px; height: 27px;}
#sidebar div.text-core textarea{ width: 151px; height: 27px;}
#sidebar .advsearch { background: #fff; display: block; height: 4.5em; position: absolute; top: 0px; width: 350px; z-index: 99; }
#searchadv ~ select { padding: 5px; border: 1px solid black; }
#sidebar .advsearch.hide { display: none; }
#advsrch { color: #000000; cursor: pointer; }
#advsrch:before {content:"[ ";}
#advsrch:after {content:" ]";}
#searchadv ~ .ui-icon.ui-icon-close { position: absolute; top: 0; right: 0; cursor: pointer;}

.text-arrow {
	-moz-box-sizing: border-box;
	background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAOAQMAAADHWqTrAAAAA3NCSVQICAjb4U/gAAAABlBMVEX///8yXJnt8Ns4AAAACXBIWXMAAAsSAAALEgHS3X78AAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1MzmNZGAwAAABpJREFUCJljYEAF/xsY6hkY7BgYZBgYOFBkADkdAmFDagYFAAAAAElFTkSuQmCC") no-repeat scroll 50% 50% transparent;
	cursor: pointer;
	height: 22px;
	position: absolute;
	right: 0;
	top: 0;
	width: 22px;
	z-index: 2;
}
.text-core { display: inline-block; }

.ui-menu {z-index: 100;}
.ui-autocomplete { max-height: 10em; overflow-y: auto; overflow-x: hidden; padding-right: 20px;}
* html .ui-autocomplete {height: 100px;}
.ui-autocomplete li.ui-menu-item {display: block;}
.ui-menu .ui-menu-item a { line-height: 1 !important; white-space: nowrap !important; overflow: hidden;}
#mapadjust .main .ui-menu .ui-menu-item a { line-height: 1.5 !important;}

#gandalf {
	height: 100%;
	width: 100%;
	z-index: 99;
	background-color: white;
	position: absolute;
	top: 0;
}
#gandalf div {
	font-family: monospace;
	white-space: pre;
	width: 400px;
	margin-left: auto;
	margin-right: auto;
}

/* Mapmaker */
.mapmaker > div{width: 77%;display: inline-block;vertical-align: middle;}
.mapmaker > div + div {width: 19%;}
.mapmaker .table .table {margin-left: auto;}
.mapmaker + .center div{position: relative;width: 100%;}
.mapmaker + .center > div > div.container {position: absolute;top: 0px;left: 0px;}

/* Zonemaker */
.zonemaker > div{width: 100%;display: inline-block;vertical-align: middle;}
.zonemaker .table .table {margin-left: auto;}
.zonemaker + .center div{position: relative;width: 100%;}
.zonemaker + .center > div > div.container {position: absolute;top: 0px;left: 0px;}

/* templatemaker */
#regulartemplateattributes, #hiddencdudata, #hiddensensordata {display:inline-block;vertical-align:top;}
.templatemaker > div{width: 100%;display: inline-block;vertical-align: middle;}
.templatemaker .table .table {margin-left: auto;}
.templatemaker + .center div{position: relative;width: 100%;}
.templatemaker + .center > div > div.container {position: absolute; top: 0px; left: 0px;}
.templatemaker input + button, #btn_override, #btn_snmptest { line-height: 1em; vertical-align: middle; height: 1.5em; margin-top: -1px; }
.templatemaker #hiddencoords { position: absolute; left: -10000px; top: -10000px;}
.templatemaker #previewimage { width: 400px;}
.templatemaker fieldset label {padding-right: 1em;padding-left:0.25em;}
.templatemaker #atsbox {border: 1px solid black;padding:0.25em;margin-top: 1em;}
.templatemaker .ui-button { margin: 0; }
.table.front #previewimage, .table.rear #previewimage { position: relative; }
.table.front #coordstable, .table.rear #coordstable { width: 320px; padding-left: 10px;}
#coordstable input { width: 40px; }
#coordstable > .table > div:first-child { text-align: center; }
table.coordinates th {background-color: #fff; text-align: center; vertical-align: middle; padding-left: .5em; padding-right: .5em; padding-top: .2em;padding-bottom: .2em;}
table.coordinates td {text-align: center; padding-left: .5em; padding-right: .5em; padding-top: 0.1em;padding-bottom: 0.1em;}
table.coordinates input {text-align: center; border: 0px;}
table.coordinates select {text-align: center; border: 0px;}
span.cdudisclaimer {color:red;font-weight:bold;}

#hiddenports,#hiddenpowerports { position: absolute; left: -10000px; top: -10000px;}
.hiddenports .table { border: 1px solid black; }
.hiddenports .table > div:first-child { text-align: center; background-color: #fff; border: 1px solid black;}
.hiddenports .table > div { background-color: #fff; }
.hiddenports .table > div > div { padding: 3px; }

#rightside { vertical-align: top; }
#img_FrontPictureFile, #img_RearPictureFile { max-width: 125px; max-height: 200px; padding-right: 5px;}

/* Basic Page Layout */
.page {position: relative;width: 100%;}
.clear {clear: both;}
p, h2, h3, h1 {margin-top: 1em;margin-bottom: 1em;}
h2 {font-size: 1.5em;text-align: center;}
h3 {font-size: 1.16em;text-align: center;}
h3 + h3 {color: red;font-weight: bold;}
h4 {font-size: 1.1em;text-align: center;}
h3 + h5 {margin-bottom: 0.5em;}
a:link, a:hover, a:visited:hover {color:#000000;}
a:visited {color: #6D71AB;}

div.main {
	display: inline-block;
	vertical-align: top;
	min-height: 500px;
	padding: 5px;
	background-color: #ffffaa2b;
	border: 1px dotted #333;
	margin-bottom: 2em;
}
.main > div {
	margin-bottom: 2em;
}
div.center > div {display: inline-block;text-align: left;}
.center {text-align: center;min-height: 400px;}
.centermargin {margin-left: auto;margin-right: auto;}

.table {display: table;text-align: left;border-collapse: collapse;}
.caption {caption-side: bottom; text-align: center; display: table-caption !important; white-space: nowrap;}
.title {caption-side: top; text-align: center; display: table-caption !important;}
div.table > div {display: table-row;}
div.table > div > div {display: table-cell;vertical-align: middle; /* padding-bottom: .75em; */}
/* div.table > div > div span {display: block;font-size: 0.75em;} */
.table label{width:130px;}
.whiteborder, .whiteborder div {border: 1px solid white;}
.border, .border div {border: 1px solid #fff;}

/* Search Results */
.search .center {text-align: left;}
.search .main ol, .search .main ul{list-style-type: none;margin-left: 1em;}
.search ol {margin-top: .35em;}
.search ol li {margin-bottom: .35em;}
.search ol ul li {margin-left: 1em;margin-bottom: 0em;}
.search ol ul li div, .search ol li.datacenter div {display: inline;}
.search ol ul li div, .search ol li.cabinet div {display: inline;}
.search ol ul li div img, .search ol li.cabinet div img {vertical-align: middle;height: 1em;margin-right: .25em;}
.search .main .bullet { background: url("minus.gif") no-repeat scroll left center transparent; cursor: pointer; padding-left: 15px;}
.search .hidecontents li.cabinet > ol { display: none; }

/* User Rights */
.rights > div:nth-last-child(2) div {text-align: center;padding-top: .75em;padding-bottom: .75em;}
div.table > div + div + div + div > div + div label {float: none;}
#primarycontact {cursor:pointer;}
#deptgroup .ui-multiselect ul.available li { overflow-x: hidden; }

/* Project Catalog */
#projectgroup .ui-multiselect ul.available li { padding: 0.5em 0.5em 0.5em 20px; height: auto; line-height: inherit;}

/* Contact Editor */
#deletedialog {display: none;}
#deletedialog p {font-weight: bold;}
#deletedialog li {margin-left: 1em; list-style: disc outside none;}
#deletedialog div {width: 45%; display: inline-block; vertical-align: top;}
#deletedialog .middle {width: 9%;}

/* Inventory Reports */
.reports fieldset {margin-right: 20px;}
#reports > div {display: inline-block;vertical-align: top;}
#reports > div a {display: block;}

/* PDU Info */
.pdu .center > div + div > .table > div > div{padding: 3px;}
.pdu #btn_override { height: 1.2em; line-height: 1em; margin: 3px 0 3px 10px; vertical-align: middle; }

/* Power Panels */
div.center > div + div {vertical-align: top;padding-left: 1em;}
div.center > div + div div.table {background-color: white;}
div.center div table {
	background-color: white;
	border-collapse: collapse;
	margin-left: auto;
	margin-right: auto;
/*	max-width: 400px; */
}
div.center div table table{min-width: 150px;}
div.center div table, div.center div tr, div.center div td {border: 1px solid #fff;}
.cabinet tr > td:first-child, .panelmgr .polenumber {padding: 0.25em 0.5em;text-align: center;}
.panelmgr .polelabel {
	min-width: 150px;
	max-width: 400px;
	padding: 0.25em 0.5em 0.25em 1em;
	vertical-align: middle;
}
.panelmgr .main form input, .panelmgr .main form select {
	padding-right: 0px;
	width: 100%;
}
.polelabel a {display: block;margin-bottom: 0.35em;}
.polelabel a span {display: block;margin-left: 1.5em;}
td#oddeven {padding: 0px;text-align: left;width: 150px;}
.caption h3 {margin-bottom: 0px;font-size: 1.25em;}
#powerinfo {margin-top: 0em;}
#powerinfo .table {background-color: white;}
#powerinfo .caption {border: 0px !important;}
div.error {margin-top: 2em;margin-bottom: 2em;border: 1px dotted #fff;}
.error legend {color: red;font-weight: bold;}
.error > div > div {width: 200px;vertical-align: top !important;}
.error > div > div + div {font-style: italic;}
.error span {display: block;margin-left: 1.5em;}
#pdutest {display: none;}
.panelmgr .main form, .panelmgr .main form ~ div { display: inline-block; vertical-align: top;}
.panelmgr .main .center > div { margin-right: 200px; }
.pwr_gauge { position: absolute; right: 50px; top: 0px; }
.pwr_gauge + .pwr_gauge { top: 200px; }
.pwr_gauge + .pwr_gauge + .pwr_gauge { top: 400px; }

/* Department Administration */
#groupadmin {
	overflow: hidden;
	min-width: 580px;
	min-height: 150px;
	display: none;
	margin-top: 20px;
	border: 1px solid #fff;
}
#deptgroup {background-color: #fff;}
#deptgroup > div {padding:5px 10px;width:580px;min-height:300px;}
#deptgroup > div h3 {margin-top: 0;margin-bottom: 5px;}
#deptgroup > div h3 button {margin-left:10px;vertical-align:middle;}
#deptgroup h3 + div {margin-left: 42.5px;}
#deptgroup select {width: 440px;}
#displaynone {display: none !important;}
#cnt_cabinets, #cnt_devices, #cnt_users { cursor: pointer; text-decoration: underline; }

#projectadmin {
	overflow: hidden;
	min-width: 700px;
	min-height: 150px;
	display: none;
	margin-top: 20px;
	border: 1px solid #fff;
}
#projectgroup {background-color: #fff;}
#projectgroup > div {padding:5px 10px;width:580px;min-height:300px;}
#projectgroup > div h3 {margin-top: 0;margin-bottom: 5px;}
#projectgroup > div h3 button {margin-left:10px;vertical-align:middle;}
#projectgroup h3 + div {margin-left: 42.5px;}
#projectgroup select {width: 600px;}

/* Rack Content */
.legenditem {padding: 0.2em;height: 1.1em;line-height: 1.2em;overflow: hidden;padding: 0.2em;white-space: nowrap;width: 210px;}
.colorbox {width: 1.1em; display: inline-block; vertical-align: text-bottom;height: 1.1em; margin: 0px; padding: 0px;}
#infopanel {
		position: relative;
		display: inline-block;
		max-width: 240px;
}
#infopanel fieldset, .reports fieldset {
		background-color: white;
		border: 1px solid #fff;
		padding: 10px;
		margin-bottom: 8px;
}
#infopanel fieldset button, #infopanel fieldset input[type=submit], #infopanel fieldset input[type=button],.reports fieldset button, .reports fieldset input[type=submit], .reports fieldset input[type=button] {width: 100%;}
#infopanel legend, .device legend, .reports legend {border: 1px #6BB1E0 solid;background-color: white;}
div.cabinet {
	display: inline-block;
	vertical-align: top;
	min-width: 200px;
	max-width: 250px;
	margin-right: 20px;
}

#servercontainer .dept0, #servercontainer-rear .dept0, #servercontainer-side .dept0 {background-color: #fff;}

.cabinet .pos { text-align: center; }
/* stupid safari layout glitch */
.cabinet table.cabinet { border-collapse: collapse; }
.cabinet table.cabinet tr:nth-child(n+3) {height: 21px;}
.cabinet #servercontainer, .cabinet #servercontainer-rear, .cabinet #servercontainer-side { background-image: url("../images/racku-background.png"); position: relative; padding: 0px; margin: 0px;}
.genericdevice {display: flex;justify-content: center; align-items: center; height: 100%; border: 2px black solid; background-color: inherit; overflow: hidden; white-space: nowrap;}

.cabinet td + td {vertical-align: middle;width: 220px; }
.cabinet td.cabpos {text-align: center; vertical-align: middle;padding: 0.25em 0.5em;width: 10%;}
.cabinet th{font-size: 1.5em;padding: 0.25em;text-align: center;}
#zerou a{display: block;}

.cabnavigator .nav { text-align: center; }
.cabnavigator .nav li { margin-top: 0.1em; border: 1px solid #fff;}
.cabnavigator .nav a:hover li { border-color: black; }

.cabnavigator th a { color: black; text-decoration: none; pointer-events: none; }

.cabnavigator.tooltip {
	min-height: 30px;
	min-width: 30px;
	z-index: 99;
	position: absolute;
	white-space: nowrap;
}
.cabnavigator.tooltip div {
	border: 0 none;
	line-height: 1.25em;
	margin: 5px;
	padding: 3px;
}
.blackout { background-color: black; }
.rowview .noprint span:last-child {display: none;}
.rowview div.cabinet { vertical-align: bottom; }
.cabinet .error { background-color: #CC0000 !important; }

/* flippingpostits - START */
.loader {
  width: 100px;
  height: 100px;
  -webkit-perspective: 100px;
          perspective: 100px;
  position: absolute;
  top: 25%;
  left: 50%;
  margin-top: -50px;
  margin-left: -50px;
}

.loader__tile {
  display: block;
  float: left;
  width: 33.33%;
  height: 33.33%;
  -webkit-animation-name: flip;
          animation-name: flip;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
  z-index: 0;
}

.loader__tile__1 {background-color: #943048;-webkit-animation-delay: 0.1s;animation-delay: 0.1s;}
.loader__tile__2 {background-color: #d7532d;-webkit-animation-delay: 0.2s;animation-delay: 0.2s;}
.loader__tile__3 {background-color: #d2cabb;-webkit-animation-delay: 0.3s;animation-delay: 0.3s;}
.loader__tile__4 {background-color: #9faad0;-webkit-animation-delay: 0.4s;animation-delay: 0.4s;}
.loader__tile__5 {background-color: #b39a3b;-webkit-animation-delay: 0.5s;animation-delay: 0.5s;}
.loader__tile__6 {background-color: #dc2c34;-webkit-animation-delay: 0.6s;animation-delay: 0.6s;}
.loader__tile__7 {background-color: #ece5be;-webkit-animation-delay: 0.7s;animation-delay: 0.7s;}
.loader__tile__8 {background-color: #d07500;-webkit-animation-delay: 0.8s;animation-delay: 0.8s;}
.loader__tile__9 {background-color: #7983a9;-webkit-animation-delay: 0.9s;animation-delay: 0.9s;}

@-webkit-keyframes flip {
	0%  {-webkit-transform: rotateY(0deg);  transform: rotateY(0deg);  }
	11% {-webkit-transform: rotateY(180deg);transform: rotateY(180deg);}
}

@keyframes flip {
	0%  {-webkit-transform: rotateY(0deg);  transform: rotateY(0deg);  }
	11% {-webkit-transform: rotateY(180deg);transform: rotateY(180deg);}
}

/* flippingpostits - END */
/* spinningsquares - START */

.dizzy-gillespie {
  -webkit-filter: saturate(3);
          filter: saturate(3);
  width: 0.1px;
  height: 0.1px;
  border: 40px solid transparent;
  border-radius: 5px;
  -webkit-animation: loader 3s ease-in infinite, spin 1s linear infinite;
          animation: loader 3s ease-in infinite, spin 1s linear infinite;
  position: absolute;
  top: 25%;
  left: 50%;
  margin-top: -50px;
  margin-left: -50px;
}

.dizzy-gillespie::before {
  -webkit-filter: saturate(0.3);
          filter: saturate(0.3);
  display: block;
  position: absolute;
  z-index: -1;
  margin-left: -40px;
  margin-top: -40px;
  content: '';
  height: 0.1;
  width: 0.1;
  border: 40px solid transparent;
  border-radius: 5px;
  animation: loader 2s ease-in infinite reverse, spin 0.8s linear infinite reverse;
}

.dizzy-gillespie::after {
  display: block;
  position: absolute;
  z-index: 2;
  margin-left: -10px;
  margin-top: -10px;
  content: '';
  height: 20px;
  width: 20px;
  border-radius: 20px;
  background-color: white;
}

@-webkit-keyframes loader {
  0%   {border-bottom-color: transparent;border-top-color: #114357;}
  25%  {border-left-color: transparent;border-right-color: #826C75;}
  50%  {border-top-color: transparent;border-bottom-color: #F29492;}
  75%  {border-right-color: transparent;border-left-color: #826C75;}
  100% {border-bottom-color: transparent;border-top-color: #114357;}
}

@keyframes loader {
  0%   {border-bottom-color: transparent;border-top-color: #114357;}
  25%  {border-left-color: transparent;border-right-color: #826C75;}
  50%  {border-top-color: transparent;border-bottom-color: #F29492;}
  75%  {border-right-color: transparent;border-left-color: #826C75;}
  100% {border-bottom-color: transparent;border-top-color: #114357;}
}
@-webkit-keyframes spin {
  0%   {-webkit-transform: rotate(0deg);   transform: rotate(0deg);}
  100% {-webkit-transform: rotate(-360deg);transform: rotate(-360deg);}
}
@keyframes spin {
  0%   {-webkit-transform: rotate(0deg);   transform: rotate(0deg);}
  100% {-webkit-transform: rotate(-360deg);transform: rotate(-360deg);}
}

/* spinningsquares - END */
/* multiaxistrainer - START */

.preloader {
  position: absolute;
  margin: -48px 0 0 -48px;
  display: block;
  position: relative;
  width: 90px;
  height: 90px;
  border: 3px solid #eb1777;
  border-radius: 50%;
  top: 25%;
  left: 50%;
  -webkit-animation-delay:0.2s;
          animation-delay:0.2s
}

.preloader:before {
  content: "";
  display: block;
  position: absolute;
  width: 58px;
  height: 58px;
  border: 3px solid #3bb4e5;
  top: 50%;
  left: 50%;
  margin: -32px 0 0 -32px;
  border-radius: 50%;
  -webkit-animation-delay:0.4s;
          animation-delay:0.4s
}

.preloader:after {
  content: "";
  display: block;
  position: absolute;
  border: 3px solid #ccdc25;
  width: 26px;
  height: 26px;
  top: 50%;
  left: 50%;
  margin: -16px 0 0 -16px;
  border-radius: 50%;
  -webkit-animation-delay:0.6s;
          animation-delay:0.6s
}

.preloader,
.preloader:before,
.preloader:after {
  animation-name: Scale;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  animation-direction: alternate;
  -webkit-animation-name: Scale;
  -webkit-animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-direction: alternate;
}

@keyframes Scale {
  25%  {-webkit-transform: scale(-1.2, 1.2);transform: scale(-1.2, 1.2)}
  50%  {-webkit-transform: scale(-1, -1);   transform: scale(-1, -1)}
  75%  {-webkit-transform: scale(1.2, -1.2);transform: scale(1.2, -1.2)}
  100% {-webkit-transform: scale(1, 1);     transform: scale(1, 1)}
}

@-webkit-keyframes Scale {
  25% {-webkit-transform: scale(-1.2, 1.2)}
  50% {-webkit-transform: scale(-1, -1)}
  75% {-webkit-transform: scale(1.2, -1.2)}
}

/* multiaxistrainer - END */
/* rotatingloader - START */

@-webkit-keyframes rotate {
  from {transform: rotate(0deg);}
  to   {transform: rotate(360deg);}
}
@-moz-keyframes rotate {
  from {transform: rotate(0deg);}
  to   {transform: rotate(360deg);}
}
@-o-keyframes rotate {
  from {transform: rotate(0deg);}
  to   {transform: rotate(360deg);}
}
@keyframes rotate {
  from {transform: rotate(0deg);}
  to   {transform: rotate(360deg);}
}
@-webkit-keyframes rotateCounter {
  from {transform: rotate(0deg);}
  to   {transform: rotate(-360deg);}
}
@-moz-keyframes rotateCounter {
  from {transform: rotate(0deg);}
  to   {transform: rotate(-360deg);}
}
@-o-keyframes rotateCounter {
  from {transform: rotate(0deg);}
  to   {transform: rotate(-360deg);}
}
@keyframes rotateCounter {
  from {transform: rotate(0deg);}
  to   {transform: rotate(-360deg);}
}

.rotateloader {
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  max-width: 200px;
  margin: 5em;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  position: absolute;
  top: 15%;
}
.rotateloader.one            {animation-duration: 3s;animation-name: rotate;}
.rotateloader.one .row .box  {animation-duration: 1.5s;animation-name: rotateCounter;}
.rotateloader.two            {animation-duration: 3s;animation-name: rotate;}
.rotateloader.two .row       {animation-duration: 1.5s;animation-name: rotateCounter;}
.rotateloader.two .row .box  {animation-duration: 3s;}
.rotateloader.three .row     {animation-duration: 2s;animation-name: rotateCounter;}
.rotateloader.four           {animation-name: rotate;}
.rotateloader.four .row      {animation-duration: 10s;animation-name: rotate;}
.rotateloader.four .row .box {animation-duration: 4s;animation-name: rotateCounter;transform-origin: 50% 75%;}

.rotateloader .row      {animation-duration: 1s;animation-iteration-count: infinite;animation-timing-function: linear;display: flex;justify-content: center;flex-direction: row;}
.rotateloader .row .box {animation-duration: 2s;animation-iteration-count: infinite;animation-timing-function: linear;animation-name: rotate;}

.box {
  width: 20px;
  height: 20px;
  line-height: 20px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
  border-radius: 5px;
  margin: 0.2em;
  text-align: center;
}
.box.white {background-color: white;}
.box.red   {background-color: #fff;}
.box.blue  {background-color: #6BB1E0;}

/* rotatingloader - END */
/* rollingbox - START */
.boxLoading {
  width: 50px;
  height: 50px;
  margin: auto;
  position: relative;
  left: 0;
  right: 0;
  top: 25%;
  bottom: 0;
}
.boxLoading:before {
  content: '';
  width: 50px;
  height: 5px;
  background: #000;
  opacity: 0.1;
  position: absolute;
  top: 59px;
  left: 0;
  border-radius: 50%;
  animation: shadow .5s linear infinite;
}
.boxLoading:after {
  content: '';
  width: 50px;
  height: 50px;
  background: #6BB1E0;
  animation: animate .5s linear infinite;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 3px;
}
@keyframes animate {
  17%  {border-bottom-right-radius: 3px;}
  25%  {transform: translateY(9px) rotate(22.5deg);}
  50%  {transform: translateY(18px) scale(1, 0.9) rotate(45deg);border-bottom-right-radius: 40px;}
  75%  {transform: translateY(9px) rotate(67.5deg);}
  100% {transform: translateY(0) rotate(90deg);}
}
@keyframes shadow {
  0%,
  100% {transform: scale(1, 1);}
  50%  {transform: scale(1.2, 1);}
}
/* rollingbox - END */


/* PICTURES */
.disabled {pointer-events: none;cursor: default;}
.cabnavigator div.picture {position:relative; left:0px; top:0px; z-index: 5;}
.picture div {position:absolute; z-index: 10; padding: 0 !important;}
.picture .label {
	z-index: 11;
	text-align: center;
	vertical-align: middle;
	color: white;
	font-family: arial;
	text-shadow: 1px 1px 0 #063, 1px 1px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
	filter: glow(color=#063,strength=2), alpha(opacity=90);
} 
.picture .label { height: 16px; }
.picture .label > div {text-align: center;width: 100%;}
.picture .label > div,
.picture div > a > div > div { top: 10%; height: 80%; padding-left: 0.3em;}
.picture div > a > div > div {overflow: hidden;}
.picture div .label {overflow: hidden;}
.label.noimage { margin: -2px; border: 2px solid black; }
.cabnavigator .picture div img:hover, .cabnavigator .picture a > div:hover { border: 2px solid red; margin: -2px;}
.cabnavigator .picture div img.rlt:hover { margin: -2px 0 0 2px;}

.picture {
	left: 0;
	position: relative;
	top: 0;
	z-index: 5;
	display: inline-block;
	padding: 0 !important;
}
.picture div {
	position: absolute;
}
.picture img {
	height: 100%;
	width: 100%;
	position: absolute;
}
.picture div > a ~ .label {
	pointer-events: none;
}
.picture > .label {
	text-align: center;
	pointer-events: none;
}
.picture > div > .label {
	pointer-events: none;
}
.picture > div .label {
	top: 0;
}
.label {
	display: block;
	z-index: 5;
	top: 25%;
	width: 90%;
	height: 13px;
	left: 5%;
	overflow: hidden;
	word-break: break-all;
}
.rotar_d{
	transform:rotate(90deg);
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-ms-transform:rotate(90deg);
	-o-transform:rotate(90deg);}
.rlt {
	transform-origin: left top;
	-webkit-transform-origin: left top;
	-moz-transform-origin: left top;
	-ms-transform-origin: left top;
	-o-transform-origin: left top;
}

/* Cabinet Properties */

#infopanel #cabprop {
	margin: 0px 0px 2px 0px;
	border-collapse: separate;
	border: 0px none;
	border-spacing: 3px;
	width: 100%;
	min-width: 200px; max-width: 350px;
}
#infopanel #cabprop td:first-child{
	padding: 3px 2px 3px 2px;
	font-weight: bold;
	border: 0px none;
	border-bottom: 1px solid #fff;
	margin: 2px 2px 2px 0px;
}
#infopanel #cabprop td:nth-child(2){
	text-align: left;
	padding: 3px 2px 3px 4px;
	border-style: none solid solid none;
	border-width: 0 2px 1px 0;
	margin: 2px 0px 2px 2px;
}
#infopanel #cabprop td:nth-child(2) > span {
	-webkit-border-radius: 2px;
	border-radius: 2px;
	box-sizing: border-box;
	border: 1px solid #9daccc;
	background: #e2e6f0;
	padding: 0px 3px 0px 3px;
	margin: 0 2px 2px 0;
	font: 11px "lucida grande",tahoma,verdana,arial,sans-serif;
	display: inline-block;
}

/* image_management */
.imagem div.center > div { width: 350px; }
.imagem div.center > div + div { width: 550px; }

.imagem div.preview {
	background-color: #FFFFFF;
	border: 1px solid #fff;
	height: 300px;
	padding: 5px;
	width: 500px;
	overflow: scroll;
}

.imagem .preview > div {
	border: 1px solid #000000;
	display: inline-block;
	margin: 3px;
	padding: 5px;
	position: relative;
}
.imagem .preview > div > .del {
	position: absolute;
	top: 0;
	right: 0;
	height: 20px;
	width: 20px;
	background-image: url('../images/x.gif');
	opacity: .4;
	z-index: 5;
}
.imagem .preview > div > div:first-child { 
	background-size: contain;
	height: 100px;
	width: 100px;
	background-repeat: no-repeat; 
	background-position: center center;
	margin: -1px auto 5px;
	padding: 2px;
}
.preview .filename { max-width: 100px; word-break: break-all; }
.imagem .heading { border-bottom: 1px solid; font-size: 2em; margin-bottom: 5px; text-align: right; }

.uploadifive-queue-item .close { cursor: pointer; }
.uploadifive-button { padding: 0 8px; }

/* devices.php  Device Detail */
.device fieldset {
  display: block;
  vertical-align: top; /* 保留原始布局属性 */
  margin: 1.5em 0;     /* 更合理的垂直间距 */
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 16px rgba(0,0,0,0.08); /* 更柔和的阴影 */
  padding: 1.5em;      /* 改用em单位保持响应式 */
  border: none;
  transition: all 0.3s ease; /* 添加悬停动画 */
}

/* 可选：添加悬停效果提升交互感 */
.device fieldset:hover {
  box-shadow: 0 4px 20px rgba(0,0,0,0.12);
  transform: translateY(-2px);
}
//.device fieldset .custom-combobox{margin: 0;padding: 0 0 0 2px;}
.device fieldset .custom-combobox{margin: 0;padding: 0;}
.device fieldset .custom-combobox input{margin: 0;}
.device fieldset .custom-combobox a {padding: 1px 0;position: absolute;}
.device div.right { max-width: 495px; }
.device div.left, .device div.right {
	margin-bottom: 1.5em;
	display: inline-block;
	vertical-align: top;
	text-align: left;
}

.on { color: green; }
.off { color: red; }

.device #deviceimages > div { width: 355px; margin-left: auto; margin-right: auto; }
.device #deviceimages > div > img { width: 175px; }

.device #auditdate { line-height: 2em; }

.device .table {width: 100%;}
.device .table.style > div:nth-child(2n+1) > div {border-top: 1px solid #fff;vertical-align: top;}
.device .table.style > div:nth-child(2n+1) > div:first-child {background-color: #fff;border-left: 1px solid grey;}
.device .table > div > div {min-width: 100px;}
.device .caption {margin-top: 2em;}
.device .table .table .table, .right .table + .table {background-color: white;width: 100%; height: 100%;}
.device .table .table .table > div > div {padding: 3px;}
.right .table + .table {margin-top: 1em;}

.table.patchpanel > div:first-child > div > div,
.table.switch > div:first-child > div > div,
.table.power > div:first-child > div > div { position: relative; border: 0px none; margin: -3px; padding-right: 20px; }
.table.patchpanel > div:first-child > div select,
.table.switch > div:first-child > div select,
.table.power > div:first-child > div select { position: absolute; top: -3px; right: 0px; }

.table.patchpanel > div:first-child, .table.switch > div:first-child { white-space: nowrap; }

.device div[id^="controls"] { border: 0 none; white-space: nowrap; }

.device .table.patchpanel div[id^="pp"] { border-left: 2px solid black; min-width: 10px;}
.device .table.patchpanel > div:first-child div[id^="pp"],
.device .table.patchpanel > div:first-child div[id^="mt"] {border-top: 1px solid black; }
.device .table.patchpanel > div:last-child div[id^="pp"],
.device .table.patchpanel > div:last-child div[id^="mt"] {border-bottom: 1px solid black; }
.device .table.patchpanel div[id^="pp"]:NOT([id="pp"]) { cursor: pointer; text-decoration: underline; }
.device .table.patchpanel div[id^="mt"] { border-right: 2px solid black; }
.device .table.patchpanel div[id^="pp"],
.device .table.patchpanel div[id^="mt"] { background-color: rgba(211, 211, 211, 0.5);}
.device .table.patchpanel > div > div {min-width: auto;}
.device .table.patchpanel > div:first-child select,
.device .table.switch > div:first-child select,
.device .table.power > div:first-child select { position: absolute; background-color: transparent; border: 0px none; width: auto;}
.device .table.patchpanel > div:first-child select::-moz-focus-inner, 
.device .table.patchpanel > div:first-child select:focus::-moz-focus-inner, 
.device .table.switch > div:first-child select::-moz-focus-inner, 
.device .table.switch > div:first-child select:focus::-moz-focus-inner {border: none;}

.device .path div { border: 0px none; }
.device .path > div > div { position: relative; height: 1em; }
.device .path > div > div > div { position: absolute; top: 0.15em; min-width: 550px; padding-left: 25px; white-space: nowrap; font-weight: 100; font-size: 0.85em;}
.device .path span:after{ content: "\2192";}
.device .path span:last-child:after{ content: "";}

#pandn.table span.custom-combobox { width: 100%;}
#pandn.table .custom-combobox input, #pandn.table .custom-combobox a {border-top: 2px; border-bottom: 2px; border-style: inset;  width: auto; height: 18px;}
#pandn.table .custom-combobox input {width: calc(100% - 18px);}
#pandn.table .custom-combobox input {background-image: none; border-left: 2px; border-right: 0px; padding-left: 4px; font-size: inherit;} 
#pandn.table .custom-combobox a {margin: 0; vertical-align: top; border-left: 0px; border-right: 2px; position: absolute;} 

#olog > div:first-child { border-bottom: 2px solid black; }
#olog > div > div:first-child { width: 100px; padding-right: 5px; white-space: nowrap; }
#olog > div:first-child > div:first-child { border-right: 0 none; }
#olog > div:first-child > div:first-child ~ div { border-left: 0 none; }

#olog > div:nth-child(2) > div { padding: 0px; }
#olog > div:nth-child(2) > div > div { max-height: 9em; overflow-y: scroll; overflow-x: hidden; border: 0;}

#olog > div:last-child > div > button { float: right; line-height: 1em; height: 1.75em;}
#olog > div:last-child > div > button ~ div { overflow: hidden; padding-right: 1em; border: 0 none; }
#olog > div:last-child > div > button ~ div > input { width: 100%; } 

#olog .table > div > div ~ div {white-space: pre-wrap; max-width: 800px; word-wrap: break-word;}

#devicetype-limiter, #connection-limiter { display: inline-block; margin-top: 10px; margin-bottom: 2px; vertical-align: super; }
#devicetype-limiter .ui-button-text-only .ui-button-text,
#connection-limiter .ui-button-text-only .ui-button-text { padding: 0.2em; }
#devicetype-limiter label, #connection-limiter label { width: auto; }

.device #tags { width: 95%; min-width: 250px;}

#firstport.hide { display: none; }

.device fieldset .table label { white-space: nowrap;}

.device .delete .ui-icon.status.down {cursor: pointer;}
.switch .delete, .patchpanel .delete { border: 0 none; }
.switch.table > div > div,
.power.table > div > div,
.patchpanel.table > div > div { min-width: 0px; }
.switch.table > div > div:first-child,
.patchpanel.table > div > div:first-child { min-width: 15px; }
/* can't explain where the 2px is coming from */
.switch.table input, .patchpanel.table input { height: 18px; }
.switch.table input, .switch.table select, 
.patchpanel.table input, .patchpanel.table select { padding: 0; background-color: transparent;}
.switch.table div[id^=n] input { width:98%; }

.switch .down {
  background: #ff6b6b; /* 红色 */
  box-shadow: inset 0 0 0 2px #ff8787;
}

.switch .up {
  background: #51cf66; /* 绿色 */
  box-shadow: inset 0 0 0 2px #94d82d;
}

.patchpanel .down {
  background: #ff922b; /* 橙色 */
}

.chassis .table input{text-align:center;}
.chassis .table > div > div{text-align:center;}
.chassis .table + .table > div > div{text-align:left;}
.chassis .table > div:first-child > div, .chassis label{font-weight:bold;padding-bottom:0.5em;}
.chassis .table + .table > div > div{min-width:0px;padding-right:0.75em;padding-bottom:0.25em;}
.chassis .table + .table > div > div:first-child, .chassis .table + .table > div > div:nth-child(2){text-align: center;}

.positionselector {font-size: .7em; background-color: white;}
.positionselector > div > div > div {width: 1em; height: 1em; padding-left: .5em; padding-right: .5em; text-align: right;}
.positionselector > div > div + div > div {width: 3em; padding-right: 1em; padding-right: 1em;}
.notavail {background-color: black; border-color: black !important;}
/* borders were too thick looking */
.positionselector > div > div > div{ border-top: 0px; border-left: 0px;}
.positionselector > div > div + div > div{ border-top: 0px; border-right: 0px;}
.positionselector > div { border-width: 1px;}
.positionselector, .positionselector > div > div {border-width: 0px;}
#Positionselector .positionselector > div > div {min-width: 0;}
#Positionselector {padding: 10px; position: absolute; left: -1000px; background-color: white; border: 1px solid black; z-index: 99;}

#editbtn { display: block; margin-bottom: 5px;}
#preview { width: 340px; min-height: 130px; background-color: white; border: 1px solid #fff; padding: 5px;}
#preview img { display: block; border: 0px; max-width: 330px;}

/* hey I do something function */
.wade{
	position: relative;
	width: 250px;
	height: 120px;
	padding: 0px;
	background: #FFFFFF;
	-webkit-border-radius: 17px;
	-moz-border-radius: 17px;
	border-radius: 17px;
	border: #000000 solid 1px;
}

.wade:after{
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 15px 16px 0;
	border-color: #FFFFFF transparent;
	display: block;
	width: 0;
	z-index: 1;
	bottom: -15px;
	left: 19px;
}

.wade:before{
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 15px 16px 0;
	border-color: #000000 transparent;
	display: block;
	width: 0;
	z-index: 0;
	bottom: -16px;
	left: 19px;
}



/* Logging style */
#logtable { width: 100%; width: calc(100% - 36px); border: 1px solid black; }
#logtable > div:first-child { border-bottom: 1px solid black; font-size: large;}
#logtable > div:nth-child(2n) { background-color: #fff; border-bottom: 1px dotted black; }
#logtable > div ~ div > div:first-child{ padding: 3px; white-space: nowrap;}
#logtable > div ~ div > div:nth-child(4){ border-left: 2px dotted black; padding-left: 3px; white-space: nowrap;}
#logtable > div ~ div > div:nth-child(5){ text-align: right; }
#logtable > div ~ div > div:nth-child(5):before{ content:"'"; }
#logtable > div ~ div > div:nth-child(5):after{ content:"' => "; }
.logtable > div.ui-dialog-content { overflow-y: auto; overflow-x: hidden; }

/* Button code primarily from http://somadesign.ca */
/* Button */
.button, input[type=button], input[type=submit], button {
  background: linear-gradient(to bottom, #fff, #f5f5f5);
  border: 1px solid #ddd;
  border-radius: 6px;
  color: #333;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  transition: all 0.2s ease;
  padding: 8px 16px;
}

.button, .button:after, button, button:after, input[type=submit], input[type=button], ul.nav li {
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border-width:1px;
	border-style:solid;
}
.button:after, button:after {
	display:block;
	position:absolute;
	width:100%;
	height:100%;
	border-color: transparent transparent #fff;
	border-color: transparent transparent rgba(255, 255, 255, 0.67);
	bottom:-2px;
	left:-1px;
}
.button:hover, .button:focus, button:hover, button:focus, input[type=button]:hover, input[type=button]:focus, input[type=submit]:hover, input[type=submit]:focus {
	background-color:#a8c0cb;
}
.button:active, button:active, input[type=submit]:active, input[type=button]:active {
	line-height:2.2;
	-moz-box-shadow:0 .33em 1em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	-webkit-box-shadow:0 .33em 2em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	box-shadow:0 .33em 2em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	-webkit-transition: line-height .1s linear;
	-moz-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear;
}
.button.bg, .button.bg:hover, .button.bg:focus, ul.nav li {
	background-image:url(gradient.png);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.75), rgba(255,255,255,0));
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,.75)), to(rgba(255,255,255,0)));
}

/* Put this inside a @media qualifier so Netscape 4 ignores it */
@media screen, print { 
	/* Set printouts to landscape */
	@page {size: landscape}

	/* Turn off list bullets */
	ul.mktree  li { list-style: none; } 
	/* Control how "spaced out" the tree is */
	ul.mktree, ul.mktree ul , ul.mktree li { margin-left:5px; padding:2px; }
	/* Provide space for our own "bullet" inside the LI */
	ul.mktree  li           .bullet { padding-left: 15px; }
	/* Show "bullets" in the links, depending on the class of the LI that the link's in */
	ul.mktree  li.liOpen    .bullet { cursor: pointer; background: url(minus.gif)  center left no-repeat; }
	ul.mktree  li.liClosed  .bullet { cursor: pointer; background: url(plus.gif)   center left no-repeat; }
	ul.mktree  li.liBullet  .bullet { cursor: default; background: url(bullet.gif) center left no-repeat; }
	/* Sublists are visible or not based on class of parent LI */
	ul.mktree  li.liOpen    ul { display: block; }
	ul.mktree  li.liClosed  ul { display: none; }
	/* Format menu items differently depending on what level of the tree they are in */
	ul.mktree  li { font-family: arial, helvetica; font-size: 11pt; font-weight: bold; }
	ul.mktree  a.DC { color: #000088; font-weight: bold; }
	ul.mktree  a.CONTAINER { color: #005500; }
	ul.mktree  a.ZONE { color: #330066; }
	ul.mktree  a.CABROW { color: #AA3300; }
	ul.mktree  a.RACK { color: #660000; }
	ul.mktree  a { text-decoration: none; white-space: pre;}
	ul.mktree  a:hover { color: red; }
	ul.mktree  li ul li { font-family: arial, helvetica; font-size: 11pt; font-weight: normal;}
}
@media print {
	.noprint { display: none; }
	.page {
		page-break-after: always;
	}
}
.meter-wrap{position: relative;background-color: #fff;overflow:hidden;}
.meter-wrap, .meter-value, .meter-text {width: 210px; height: 1.1em;}
.meter-text {
	position: absolute;
	top:0; left:0;
	padding-top: 0px;
	color: #000;
	text-align: center;
	width: 100%;
}
fieldset[name=pdu] > div > img { vertical-align: text-bottom; }

/* Supplies */
.supply .table > div:first-child > div {padding-bottom:0.5em;font-weight: bold;}
.supply .table > div > div {padding-right: 0.25em;}
.supply .table > div > div:first-child {width: 22px;}
.supply .table .quantity {text-align: center;}
.supply .table { margin-bottom: 2em; width: 100%;}
.supply .table select { width: 100%; }
.supply .table:first-child { margin-left: 25px; width: auto;}
.supply .table:first-child > div > div:first-child {width: auto;}
.supply #location {width: 97%;}

.supply .table ~ .table { background-color: white; }
.supply .table ~ .table > div > div:first-child { width: auto; }
.supply .table ~ .table > div > div { padding: 3px; }


/* Installer */
.installer ul li, ul.nav li{
	display: block;
	padding: 1.5em;
	background-color: #ffffaa5c;
	border: 0px solid #fff;
}
.installer ul li{border: 1px dashed #fff;}
.installer #sidebar a, .nav a {text-decoration: none;}
.installer #sidebar a:hover li.active, .nav a:hover li.active {background-color: white;border-color: lightGray;}
.installer .active, .nav .active {background-color: white;border: 1px solid #fff;}
.installer a.active span:first-child, .nav a.active span:first-child {background-position: -144px 0;}
.installer div.table > div > div + div {width: 300px;}
.installer .rights > div:nth-last-child(2) div {padding-top: 0;padding-bottom: 2em;text-align: left;}
.installer #configtabs div.table > div > div + div {width: auto;}
.installer .center #configtabs ~ div input {width: auto;}
div.page.installer {min-width: 1100px;}
div.page.installer .main{max-width: 850px;}

.installer .ui-multiselect ul li { padding: 0.5em 0.5em 0.5em 20px; height: auto; line-height: inherit;}


/* Menu */
ul.nav li {padding: 1.5em;}
.nav a:visited {color: #000000;}
#sidebar .nav li a { display: block;}
#sidebar .nav .ui-state-focus {
	background: white;
	border-color: black;
	border-width: 1px;
	border-style: solid;
	margin: 0;
}

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #fff !important;
	background: url(images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x !important;
	font-weight: normal !important;
	color: rgb(51, 51, 51) !important;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #212121 !important;
}
.ui-state-active .ui-icon, .ui-button:active .ui-icon {
  background-image: url("images/ui-icons_222222_256x240.png") !important;
}
.active.ui-state-focus, .active.ui-state-active {
  margin: 0px !important;
}

/* Search Export */
div.center div table#export { margin: auto; max-width: none; }
#export_wrapper a.dt-button { margin-right: 0px; }


/* Paths */
/* Paths form */
fieldset.crit_busc {border: 1px solid #fff; padding:0.5em; background-color: #EEEEEE;}
fieldset.crit_busc legend {background-color: white; padding:0.5em; border: 1px solid grey;}
table#crit_busc {border: 0px; background: transparent; padding:0.5em;}
table#crit_busc tr {border: 0px; background: transparent; padding:0.5em;}
table#crit_busc td {border: 0px; background: transparent; padding:0.5em;}

table#parcheos {border: 3px outset; text-align: center; text-valign: center; max-width: 800px; margin-left: auto; margin-right: auto;}
table#parcheos tr {border: 0px;}	
table#parcheos td {padding: 0px; border: 0px; vertical-align: top;}

#parcheos .f-right {background: url("../images/a2f.png") no-repeat #FFF; width:25px;}
#parcheos .f-left {background: url("../images/a1f.png") no-repeat #FFF; width:25px;}
#parcheos .r-right {background: url("../images/a2r.png") no-repeat #FFF; width:25px;}
#parcheos .r-left {background: url("../images/a1r.png") no-repeat #FFF; width:25px;}

#parcheos .base-f, #parcheos .base-r {background: url("../images/b0f.png") no-repeat top left #FFF; height: 5px; padding: 0px; border: 0px;}

#parcheos .connection-f-1 {background: url("../images/b1f.png") no-repeat #FFF;}
#parcheos .connection-f-2 {background: url("../images/b2f.png") no-repeat #FFF; width:25px;}
#parcheos .connection-f-3 {background: url("../images/b3f.png") no-repeat #FFF; height:30px;}
#parcheos .connection-f-4 {background: url("../images/b4f.png") no-repeat top right #FFF; height:30px;}
#parcheos .connection-r-1 {background: url("../images/b1r.png") no-repeat #FFF;}
#parcheos .connection-r-2 {background: url("../images/b2r.png") no-repeat #FFF; width:25px;}
#parcheos .connection-r-3 {background: url("../images/b3r.png") no-repeat #FFF; height:30px;}
#parcheos .connection-r-4 {background: url("../images/b4r.png") no-repeat top right #FFF; height:30px;}

table#parcheos table tr + tr > td + td{background-color:yellow;}
table#parcheos table {margin: 0px; border: 0px; border-collapse: collapse; text-align: left; vertical-align: middle; min-width: 50px; white-space: nowrap;}
table#parcheos table tr th {background-color: #fffefe; padding: 2px; border: 1px solid #fff; text-align: left; border-collapse: collapse;}
table#parcheos table tr td {padding: 2px; border: 1px solid #fff; text-align: left; border-collapse: collapse;}
table#parcheos tr td:first-child + td table {margin-left: auto;}

p.errormsg {padding: 20px; background-color: #fff; font-size: 120%; font-weight: bold; color: red;}


