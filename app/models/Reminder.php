<?php

class Reminder {

    public function __construct() {

    }

      public function get_all_reminders () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function create_reminder ($reminder_id) {
      

      $db = db_connect();
      $statement = $db->prepare("INSERT INTO reminders (user_id,subject) VALUES (:userid, :subject);");
      $statement->bindValue(':userid', $_SESSION['userid']);
      $statement->bindValue(':subject', $reminder_id);
      $statement->execute();
    }

    public function update_reminder ($id, $subject) {
      $db = db_connect();
      $statement = $db->prepare("UPDATE reminders SET subject = :subject WHERE id = :id;");
      $statement->bindValue(':subject', $subject);
      $statement->bindValue(':id', $id);
      $statement->execute();
    }

    public function delete_reminder ($reminder_id) {
      $db = db_connect();
      $statement = $db->prepare("DELETE FROM reminders WHERE id = :id;");
      $statement->bindValue(':id', $reminder_id); 
      $statement->execute();

    }

}

?>