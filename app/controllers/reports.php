<?php

class Reports extends Controller {

  public function index() {
    $R = $this->model('Report');
    $list_of_reminders = $R->get_all_reminders();
    $most_reminders = $R->count_reminder();
    $this->view('reports/index', ['reminders' => $list_of_reminders]);
    $this->view('reports/index', ['most_reminders' => $most_reminders]);
  }

    public function count() {
      $R = $this->model('Report');
      $R->count_reminder();
      $this->index();
    }

    public function logcount(){
      $R = $this->model('Report');
      $R->count_logs();
      $this->index();
    }
}
