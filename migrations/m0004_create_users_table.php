<?php

class m0004_create_users_table {
    public function up()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                password VARCHAR(512) NOT NULL,
                joined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
               ) ENGINE=INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS users;";
        $db->pdo->exec($SQL);
    }
}
