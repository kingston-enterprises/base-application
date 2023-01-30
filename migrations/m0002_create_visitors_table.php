<?php

class m0002_create_visitors_table {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS visitors (
                id INT AUTO_INCREMENT PRIMARY KEY,
                datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                ip varchar(55),
                agent varchar(255)
                ) ENGINE=INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS visitors;";
        $db->pdo->exec($SQL);
    }
}
