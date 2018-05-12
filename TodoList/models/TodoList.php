<?php
class TodoList {

    public $workName;
    public $startDate;
    public $endDate;
    public $status;

    public function __construct($id, $workName, $startDate, $endDate, $status)
    {
        $this->id = $id;
        $this->workName = $workName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = $status;
    }

    public static function listAllWork() {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM work');

        // we create a list of Post objects from the database results
        $list = [];
        foreach($req->fetchAll() as $work) {
            $list[] = new TodoList($work['id'], $work['work_name'], $work['start_date'], $work['end_date'], $work['status']);
        }
        // print_r($list);
        return $list;
    }

    public static function view($id)
    {
        // print_r($id);
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM work where id='.$id);
        return $req->fetch();
    }

    public static function addWork($post) {
        $db = Db::getInstance();
        // Add new work
        $db->query("INSERT INTO `work` (`id`, `work_name`, `start_date`, `end_date`, `status`) VALUES (NULL, '{$post['workName']}', '{$post['startDate']}', '{$post['endDate']}', '{$post['status']}');");
    }

    public function editWork($data, $id) {
        $db = Db::getInstance();
        // Edit work
        $db->query("UPDATE `work` SET work_name='{$data['workName']}', start_date='{$data['startDate']}', end_date='{$data['endDate']}', status='{$data['status']}' WHERE id='{$id}';");
    }
    public function deleteWork($id) {
        $db = Db::getInstance();
        // Delete work based on id
        $db->query('DELETE FROM work where id='.$id);
    }
}