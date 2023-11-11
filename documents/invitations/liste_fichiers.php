<?php
/*
*** OPTIONS ***/

	// TITLE OF PAGE
	$title = "Liste des invitations au format pdf";

	// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
	$ignore_file_list = array( ".htaccess", "Thumbs.db", ".DS_Store", "index.php" );

	// ADD SPECIFIC FILE EXTENSIONS YOU WANT TO IGNORE HERE, EXAMPLE: array('psd','jpg','jpeg')
	$ignore_ext_list = array('php','txt','doc','docx','xls','xslx','ppt','pptx','jpg','png','mp3','wav','mp4','avi','mepg' );

	// SORT BY
	$sort_by = "name_asc"; // options: name_asc, name_desc, date_asc, date_desc

	// ICON URL
	// icon source: https://lucide.dev/
	$icon_url = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xml:space='preserve' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round' clip-rule='evenodd' viewBox='0 0 1000 50'%3E%3Cpath fill='none' d='M0 0h1000v50H0z'/%3E%3CclipPath id='a'%3E%3Cpath d='M0 0h1000v50H0z'/%3E%3C/clipPath%3E%3Cg fill='none' clip-path='url(%23a)'%3E%3Cpath d='M0 0h50v50H0z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M28.8 10H16a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2L28.7 10Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M28 10v9h9'/%3E%3Cpath d='M50 0h50v50H50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M78.8 10H66a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2L78.7 10Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M78 10v9h9'/%3E%3Ccircle cx='72' cy='26.5' r='3' stroke='%23333' stroke-width='3'/%3E%3Cpath stroke='%23333' stroke-width='3' d='m87 32.5-1.6-1.6a3 3 0 0 0-4.3 0L72 40'/%3E%3Cpath d='M100 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M128.8 10H116a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2l-8.3-8.2Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M128 10v9h9m-6 7.5h-12m12 6h-12m3-12h-3'/%3E%3Cpath d='M150 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M178.8 10H166a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2l-8.3-8.2Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M178 10v9h9m-6 7.5h-12m12 6h-12m3-12h-3'/%3E%3Cpath d='M200 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M228.8 10H216a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2l-8.3-8.2Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M228 10v9h9m-18 7.5h3m-3 6h3m6-6h3m-3 6h3'/%3E%3Cpath d='M250 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M282.5 40h3a3 3 0 0 0 3-3V18.2l-8.3-8.2h-12.7a3 3 0 0 0-3 3v4.5'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M279.5 10v9h9m-24 5.6A8.8 8.8 0 1 0 276.8 37'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M279.2 31c0-4.8-4-8.7-8.7-8.7V31h8.7Z'/%3E%3Cpath d='M300 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M328.8 10H316a3 3 0 0 0-3 3v24a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V18.2l-8.3-8.2Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M328 10v9h9m-6 7.5h-12m12 6h-12m3-12h-3'/%3E%3Cpath d='M350 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M363 40V13c0-.8.3-1.5.9-2.1a3 3 0 0 1 2.1-.9h12.8l8.2 8.3V37a3 3 0 0 1-.9 2.1 3 3 0 0 1-2.1.9h-3'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M378 10v9h9'/%3E%3Ccircle cx='372' cy='37' r='3' stroke='%23333' stroke-width='3'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M372 17.5V16m0 9v-1.5m0 10.5v-3'/%3E%3Cpath d='M400 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M414.5 16v-3a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M429.5 10v9h9'/%3E%3Ccircle cx='417.5' cy='28' r='4.5' stroke='%23333' stroke-width='3'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M417.5 22v1.5m0 9V34m6-6H422m-9 0h-1.5m10.5-4.5-1.3 1.3m-6.4 6.4-1.3 1.3m9 0-1.3-1.3m-6.4-6.4-1.3-1.3'/%3E%3Cpath d='M450 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M464.5 16v-3a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M479.5 10v9h9'/%3E%3Ccircle cx='467.5' cy='28' r='4.5' stroke='%23333' stroke-width='3'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M467.5 22v1.5m0 9V34m6-6H472m-9 0h-1.5m10.5-4.5-1.3 1.3m-6.4 6.4-1.3 1.3m9 0-1.3-1.3m-6.4-6.4-1.3-1.3'/%3E%3Cpath d='M500 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M534.8 40h.7a3 3 0 0 0 2.1-.9 3 3 0 0 0 .9-2.1V18.2l-8.3-8.2h-12.7a3 3 0 0 0-2.1.9 3 3 0 0 0-.9 2.1v4.5'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M529.5 10v9h9m-15 18v-1.5a3 3 0 0 1 3-3 3 3 0 0 1 3 3V37a3 3 0 0 1-3 3 3 3 0 0 1-3-3Zm-6 0v-1.5a3 3 0 0 0-3-3 3 3 0 0 0-3 3V37a3 3 0 0 0 3 3 3 3 0 0 0 3-3Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M511.5 35.5V31c0-5 4-9 9-9s9 4 9 9v4.5'/%3E%3Cpath d='M550 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M584.8 40h.7a3 3 0 0 0 2.1-.9 3 3 0 0 0 .9-2.1V18.2l-8.3-8.2h-12.7a3 3 0 0 0-2.1.9 3 3 0 0 0-.9 2.1v4.5'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M579.5 10v9h9m-15 18v-1.5a3 3 0 0 1 3-3 3 3 0 0 1 3 3V37a3 3 0 0 1-3 3 3 3 0 0 1-3-3Zm-6 0v-1.5a3 3 0 0 0-3-3 3 3 0 0 0-3 3V37a3 3 0 0 0 3 3 3 3 0 0 0 3-3Z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M561.5 35.5V31c0-5 4-9 9-9s9 4 9 9v4.5'/%3E%3Cpath d='M600 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M614.5 19v-6a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M629.5 10v9h9m-15 11.3 6 3.7v-9l-6 3.8m0-2.8c0-.6-.4-1-1-1h-10a1 1 0 0 0-1 1v7c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-7Z'/%3E%3Cpath d='M650 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M664.5 19v-6a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M679.5 10v9h9m-15 11.3 6 3.7v-9l-6 3.8m0-2.8c0-.6-.4-1-1-1h-10a1 1 0 0 0-1 1v7c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-7Z'/%3E%3Cpath d='M700 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M714.5 19v-6a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M729.5 10v9h9m-15 11.3 6 3.7v-9l-6 3.8m0-2.8c0-.6-.4-1-1-1h-10a1 1 0 0 0-1 1v7c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-7Z'/%3E%3Cpath d='M750 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M764.5 19v-6a3 3 0 0 1 3-3h12.8l8.2 8.3V37a3 3 0 0 1-3 3h-21'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M779.5 10v9h9m-15 11.3 6 3.7v-9l-6 3.8m0-2.8c0-.6-.4-1-1-1h-10a1 1 0 0 0-1 1v7c0 .6.4 1 1 1h10c.6 0 1-.4 1-1v-7Z'/%3E%3Cpath d='M800 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M814.5 40h21a3 3 0 0 0 3-3V18.2l-8.3-8.2h-12.7a3 3 0 0 0-3 3v6'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M829.5 10v9h9'/%3E%3Cpath stroke='%23333' stroke-miterlimit='1.5' stroke-width='3' d='M811.5 34v-9h6v4.5h-6m18-4.5h-6v4.5h6V34h-6'/%3E%3Cpath d='M849.9 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M864.5 40h21a3 3 0 0 0 3-3V18.2l-8.3-8.2h-12.7a3 3 0 0 0-3 3v6'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M879.5 10v9h9'/%3E%3Cpath stroke='%23333' stroke-miterlimit='1.5' stroke-width='3' d='M861.5 34v-9h6v9m-6-4.5h6m6-4.5v9'/%3E%3Cpath d='M900 0h50v50h-50z'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M914.5 40h21a3 3 0 0 0 3-3V18.2l-8.3-8.2h-12.7a3 3 0 0 0-3 3v6'/%3E%3Cpath stroke='%23333' stroke-width='3' d='M929.5 10v9h9M922 34l4.5-4.5L922 25m-6 0-4.5 4.5L916 34m47 3.8h24a3 3 0 0 0 3-3v-15a3 3 0 0 0-3-3h-11.9c-1 0-2-.6-2.5-1.4l-1.2-1.8a3 3 0 0 0-2.5-1.4H963a3 3 0 0 0-3 3v19.6a3 3 0 0 0 3 3Z'/%3E%3C/g%3E%3C/svg%3E";

	// TOGGLE SUB FOLDERS, SET TO false IF YOU WANT OFF
	$toggle_sub_folders = true;


// SET TITLE BASED ON FOLDER NAME, IF NOT SET ABOVE	
if( !$title ) { $title = cleanTitle(basename(dirname(__FILE__))); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title; ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:700,400,300,300italic,700italic" rel="stylesheet" type="text/css" />
	<style>
		*, *:before, *:after { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
		body { font-family: "Lato", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 400; font-size: 14px; line-height: 18px; padding: 0; margin: 0; background: #f5f5f5; }
		.wrap { max-width: 600px; margin: 20px auto; background: white; padding: 40px; box-shadow: 0 0 2px #ccc; }
		@media only screen and (max-width: 700px) { .wrap { padding: 15px; } }
		h1 { text-align: center; margin: 40px 0; font-size: 22px; font-weight: bold; color: #666; }
		a { color: #399ae5; text-decoration: none; } a:hover { color: #206ba4; text-decoration: none; }
		.note { padding:  0 5px 25px 0; font-size:80%; color: #666; line-height: 18px; }
		.block { clear: both;  min-height: 50px; border-top: solid 1px #ECE9E9; }
		.block:first-child { border: none; }
		.block .img { width: 50px; height: 50px; display: block; float: left; margin-right: 10px; background: transparent url("<?php echo $icon_url; ?>") no-repeat 0 0; background-size: auto 50px; }
		.block .date { margin-top: 4px; font-size: 70%; color: #666; }
		.block a { display: block; padding: 10px 15px; transition: all 0.35s; }
		.block a:hover { text-decoration: none; background: #efefef; }

		.jpg, .jpeg, .gif, .png { background-position: -50px 0 !important; }
		.pdf { background-position: -100px 0 !important; }
		.txt, .rtf { background-position: -150px 0 !important; }
		.xls, .xlsx { background-position: -200px 0 !important; }
		.ppt, .pptx { background-position: -250px 0 !important; }
		.doc, .docx { background-position: -300px 0 !important; }
		.zip, .rar, .tar, .gzip { background-position: -350px 0 !important; }
		.swf { background-position: -400px 0 !important; }
		.fla { background-position: -450px 0 !important; }
		.mp3 { background-position: -500px 0 !important; }
		.wav { background-position: -550px 0 !important; }
		.mp4 { background-position: -600px 0 !important; }
		.mov, .aiff, .m2v, .avi, .pict, .qif { background-position: -650px 0 !important; }
		.wmv, .avi, .mpg { background-position: -700px 0 !important; }
		.flv, .f2v { background-position: -750px 0 !important; }
		.psd { background-position: -800px 0 !important; }
		.ai { background-position: -850px 0 !important; }
		.html, .xhtml, .dhtml, .php, .asp, .css, .js, .inc { background-position: -900px 0 !important; }
		.dir { background-position: -950px 0 !important; }

		.sub { margin-left: 20px; border-left: solid 1px #ECE9E9; display: none; }

	</style>
</head>
<body>
<h1><?php echo $title ?></h1>
<div class="wrap">
<?php

// FUNCTIONS TO MAKE THE MAGIC HAPPEN, BEST TO LEAVE THESE ALONE
function cleanTitle($title)
{
	return ucwords( str_replace( array("-", "_"), " ", $title) );
}

function getFileExt($filename)
{
	return substr( strrchr( $filename,'.' ),1 );
}

function format_size($file)
{
	$bytes = filesize($file);
	if ($bytes < 1024) return $bytes.'b';
	elseif ($bytes < 1048576) return round($bytes / 1024, 2).'kb';
	elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).'mb';
	elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).'gb';
	else return round($bytes / 1099511627776, 2).'tb';
}


// SHOW THE MEDIA BLOCK
function display_block( $file )
{
	global $ignore_file_list, $ignore_ext_list;

	$file_ext = getFileExt($file);
	if( !$file_ext AND is_dir($file)) { $file_ext = "dir"; }
	if(in_array($file, $ignore_file_list)) { return; }
	if(in_array($file_ext, $ignore_ext_list)) { return; }

	echo "<div class=\"block\">";
	echo "<a href=\"$file\" class=\"$file_ext\">";
	echo "	<div class=\"img $file_ext\">&nbsp;</div>";
	echo "	<div class=\"name\">\n";
	echo "		<div class=\"file\">" . basename($file) . "</div>\n";
	echo "		<div class=\"date\">Size: " . format_size($file) . "<br />Last modified: " .  date("D. F jS, Y - h:ia", filemtime($file)) . "</div>\n";
	echo "	</div>\n";
	echo "	</a>\n";
	echo "</div>";
}


// RECURSIVE FUNCTION TO BUILD THE BLOCKS
function build_blocks( $items, $folder )
{
	global $ignore_file_list, $ignore_ext_list, $sort_by, $toggle_sub_folders;
	$objects = array();
	$objects['directories'] = array();
	$objects['files'] = array();

	foreach($items as $c => $item)
	{
		if( $item == ".." OR $item == ".") continue;

		// IGNORE FILE
		if(in_array($item, $ignore_file_list)) { continue; }

		if( $folder )
		{
			$item = "$folder/$item";
		}

		$file_ext = getFileExt($item);

		// IGNORE EXT
		if(in_array($file_ext, $ignore_ext_list)) { continue; }

		// DIRECTORIES
		if( is_dir($item) )
		{
			$objects['directories'][] = $item;
			continue;
		}

		// FILE DATE
		$file_time = date("U", filemtime($item));

		// FILES
		$objects['files'][$file_time . "-" . $item] = $item;
	}

	foreach($objects['directories'] as $c => $file)
	{
		display_block( $file );

		if($toggle_sub_folders)
		{
			$sub_items = (array) scandir( $file );
			if( $sub_items )
			{
				echo "<div class='sub' data-folder=\"$file\">";
				build_blocks( $sub_items, $file );
				echo "</div>";
			}
		}
	}

	// SORT BEFORE LOOP
	if( $sort_by == "date_asc" ) { ksort($objects['files']); }
	elseif( $sort_by == "date_desc" ) { krsort($objects['files']); }
	elseif( $sort_by == "name_asc" ) { natsort($objects['files']); }
	elseif( $sort_by == "name_desc" ) { arsort($objects['files']); }

	foreach($objects['files'] as $t => $file)
	{
		$fileExt = getFileExt($file);
		if(in_array($file, $ignore_file_list)) { continue; }
		if(in_array($fileExt, $ignore_ext_list)) { continue; }
		display_block( $file );
	}
}

// GET THE BLOCKS STARTED, FALSE TO INDICATE MAIN FOLDER
$items = scandir( dirname(__FILE__) );
build_blocks( $items, false );
?>

<?php if($toggle_sub_folders) { ?>
<script>
	$(document).ready(function()
	{
		$("a.dir").click(function(e)
		{
		 	$('.sub[data-folder="' + $(this).attr('href') + '"]').slideToggle();
			e.preventDefault();
		});
	});
</script>
<?php } ?>
</div>
</body>
</html>