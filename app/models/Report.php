<?php

class Report {

    public function __construct() {

    }

      public function get_all_reminders () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function count_reminder () {


      $db = db_connect();
      $statement = $db->prepare("SELECT u.username, COUNT(*) AS frequency
            FROM reminders r
            JOIN users u ON r.user_id = u.id
            GROUP BY u.username
            ORDER BY frequency DESC;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function count_logs () {
      $db = db_connect();
      $statement = $db->prepare("SELECT username, COUNT(*) AS frequency
FROM logs
GROUP BY username
ORDER BY frequency DESC;");
      $statement->execute();
    }

}

?>