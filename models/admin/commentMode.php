<?php 
class AdminCommentModels{
    public $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllComment(){
        $sql = "SELECT * FROM comment ORDER BY id_cmt desc";
        return $this->db->getAll($sql);
    }

    public function getOneComment($id_cmt){
        $sql = "SELECT * FROM comment where id_cmt = $id_cmt";
        return $this->db->getOne($sql);
    }

    public function editComment($id_cmt, $id_user, $id_pro, $content, $time_comment, $evaluate){
        $sql = "UPDATE `comment` SET `id_cmt` = '$id_cmt', `id_user` = '$id_user', `id_pro` = '$id_pro'
        , `content` = '$content', `time_comment` = '$time_comment', `evaluate` = '$evaluate' WHERE id_cmt = $id_cmt";
        return $this->db->insert($sql);
    }

}
?>