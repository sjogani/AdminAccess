<?php

class Reminders extends Controller {

  public function index() {
    $R = $this->model('Reminder');
    $list_of_reminders = $R->get_all_reminders();
    $this->view('reminders/index', ['reminders' => $list_of_reminders]);
  }

    public function create() {
      $subject = $_REQUEST['subject'];
      $R = $this->model('Reminder');
      $R->create_reminder($subject);
      $this->index();
    }

    public function update(){
      $id = $_REQUEST['id'];
      $subject = $_REQUEST['subject'];
      $R = $this->model('Reminder');
      $R->update_reminder($id, $subject);
      $this->index();
    }

    public function delete() {
      $id = $_REQUEST['id'];
      $R = $this->model('Reminder');
      $R->delete_reminder($id);
      $this->index();
    }
}
