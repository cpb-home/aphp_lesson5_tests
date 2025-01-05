<?php

function autoloader($classname): string
{
    $pathFile = search_file('.', $classname);
    return require __DIR__ . '/' . $pathFile[count($pathFile) - 1];
}

function search_file( $folderName, $fileName ){
	$found = array();
	$folderName = rtrim( $folderName, '/' );
	$dir = opendir( $folderName );

	while( ($file = readdir($dir)) !== false ){
		$file_path = "$folderName/$file";

		if( $file == '.' || $file == '..' ) continue;

		if( is_file($file_path) ){
			if( false !== strpos($file, $fileName) ) $found[] = $file_path;
		}
		elseif( is_dir($file_path) ){
			$res = search_file( $file_path, $fileName );
			$found = array_merge( $found, $res );
		}
	}

	closedir($dir);

	return $found;
}