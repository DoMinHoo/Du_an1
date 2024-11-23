<?php 
class CommentController{

    public $comment;
    
    public function __construct(){
        $this->comment = new AdminCommentModels();
    }
    public function getAllComment()
    {
        $listComment = $this -> comment ->getAllComment();
        require_once 'views/admin/comment/listComment.php';
    }
}
?>