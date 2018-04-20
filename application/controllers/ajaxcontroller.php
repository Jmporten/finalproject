<?php

class AjaxController extends Controller{
	
	protected $postObject;
    protected $userObject;
    protected $categoryObject;

	
	public function index(){
		$this->set("response","Invalid Request");
	}

    public function get_post_content() {
        $this->postObject = new Post();
        $post = $this->postObject->getPost($_GET['pID']);
        $this->set('response',$post['content']);
    }

    public function get_all_comments(){
	    $this->postObject = new Post();
	    $this->userObject = new Users();
	    $comments = $this->postObject->getComments($_GET['pID']);
	    $html ='';
	    foreach($comments as $c) {
            $userinfo = $this->userObject->getUser($c['uID']);

            $read_date = strtotime($c->date);
            date_default_timezone_set('America/New_York');
            $read_date =  date("F j, Y, g:i a",$read_date);

            $html.= '<div style="margin-top:15px;"><p>'.$c['commentText'].'</p></div><sub> Posted on ' . $read_date . ' Name: ' . $userinfo['first_name'] . ' ' . $userinfo['last_name'] . '</a></sub>';
            if(($c['uID'] == $_SESSION['uID']) || ($this->userObject->isAdmin())){
                $html .= '<sub><a href="'. BASE_URL .'comments/deleteComment/?commentID='. $c['commentID'] .'"> Delete</a></sub>';
            }
            $html.='<hr/>';
        }
	    $this->set('comments', $html);
    }
	
}

?>