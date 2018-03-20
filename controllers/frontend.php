<?php



function homepage()
{
	$oPost 		= new PostsManager();
    $aListposts = $oPost->getPosts();
	require(ABSOLUTE_PATH.'/views/frontend/listPostsView.php');
}

function listPosts()
{
	$oPost 		= new PostsManager();
    $aListposts = $oPost->getPosts();
	require(ABSOLUTE_PATH.'/views/frontend/listPostsView.php');
}

// function postX()
// {
//     $post = getPost($_GET['id']);
//     $comments = getComments($_GET['id']);
//     require('view/frontend/postView.php');
// }