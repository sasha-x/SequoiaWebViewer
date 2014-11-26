<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
		<link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/ui-lightness/jquery-ui.css" media=screen>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.ui.treemap.js?v=<? echo time(); ?>"></script>
		<script type="text/javascript" src="js/functions.js?v=<? echo time(); ?>"></script>
		<script type="text/javascript" src="js/init.js?v=<? echo time(); ?>"></script>
		
        <link rel="stylesheet" type="text/css" href="index.css" media=screen>
		
		<title>SequoiaViewNix</title>
    </head>
    <body>
		<div id="inform" class="w100blc">
			<form style="display: inline;" name='inform' method='post'>
				Dir: <input type='text' name='path' id='inpath' size='50' value='/var/www/hst1'>
				Size on disk: <input type='checkbox' name='blksize' value='1' >
				<input type='submit' id='insubmit' value='Show'>
			</form>
			<span id="rightinfo">Total size: <span id="tsize" ></span></span>
		</div>
		<div id="debug" ></div>
		<div id="content">
			<div id="treemap"></div>
		</div>
		
		<div id="mouseoverbox" class="w100blc">
			<span id='fname' >Choose directory, plz..</span>
			<span id="rightinfo">|Dir: <span id="dsize" ></span>|File: <span id="fsize" ></span></span>
		</div>
        <div id='waitload'><img src="ajax-loader.gif"><br>Please wait...</div>            
    </body>
</html>

