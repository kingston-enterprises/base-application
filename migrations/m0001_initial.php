<?php


class m0001_initial {
    public function up()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "ALTER DATABASE kingstonenterprises\ COLLATE = 'utf8mb4_bin';";
        
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "DROP DATABASE IF EXISTS kingstonenterprises\;";
        $db->pdo->exec($SQL);
    }
}
