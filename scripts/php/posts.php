<?php

/*
 * Post related database functions
 * 
 */
 
 	define('MyConst', TRUE);	// Avoids direct access to config.php
	include "config.php"; 
	
	
	$action = $_POST['action'];
	
	if($action == 'addPost'){
			$post = $_POST['post'];
			
			$postFromId		= 	$post['postFromId'];
			$postAuthorId	= 	$post['postAuthorId'];
			$postMessage	= 	$post['postMessage'];
			$postType		= 	$post['postType'];
			
												
			$addPostQuery = mysql_query("INSERT INTO posts (postFromId, postAuthorId, postMessage, postType) VALUES('".$postFromId."', '".$postAuthorId."', '".$postMessage."','".$postType."')"); 
			
			$postID = mysql_insert_id();
			
			if($addPostQuery)
			{
				echo $postID; 
				
			} else 
			{
				echo " Post NOT added. "; 
				
			}

	}	
	