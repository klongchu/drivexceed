<?php
if ( !isset( $_GET['id'] ) || !$_GET['id'] ) {
	header( 'Content-Type: application/json' );
	$log = array(
		'error' => true,
		'message' => 'Require parameter GET named "id" which value is id of Google Drive file.'
	);
	exit( json_encode( $log ) );
}
$id = $_GET['id'];
$source = sprintf( 'https://www.googleapis.com/drive/v3/files/%s?alt=media&key=AIzaSyBXV3qGJ2rwDaxvUmAzaVpZMmn1t6PyU0E', $id );
$altsource = sprintf( 'https://zeydhan.me/drive/index.php?id=%s', $id );
$image = sprintf( 'https://drive.google.com/thumbnail?id=%s&authuser=0&sz=w640-h360-n-k-rw', $id );
?>