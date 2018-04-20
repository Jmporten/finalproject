<?php

class CommentsController extends Controller{

    public $postObject;
    public $pID;

    public function index(){
        $this->postObject = new Post();
        $this->set('pID', $_GET['pID']);
        $comments = $this->postObject->getComments($_GET['pID']);
        $this->set('comments',$comments);
    }

    public function addComment(){
        $this->postObject = new Post();
        $data = array('uID'=> $_SESSION['uID'],'commentText'=> $_POST['commentText'],'date'=>date("Y/m/d"),'pID'=>$_POST['pID']);
        $result = $this->postObject->addComment($data);
        $comments = $this->postObject->getComments($_POST['pID']);
        $this->set('message', $result);
        $this->set('comments',$comments);
    }

    public function deleteComment(){
        $this->postObject = new Post();
        $result = $this->postObject->deleteComment($_GET['commentID']);
        $this->set('message', $result);
    }

}

?>