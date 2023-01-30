<?php


class m0001_initial {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "ALTER DATABASE icarusBase COLLATE = 'utf8mb4_bin';";
        
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DROP DATABASE IF EXISTS icarusBase;";
        $db->pdo->exec($SQL);
    }
}
