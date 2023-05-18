<?php

/**
 * create user roles - these are used to grant users`s permisions
 */
class m0004_create_user_roles_table {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS roles (
                id INT AUTO_INCREMENT PRIMARY KEY,
                role_title VARCHAR(255) NOT NULL,
                role_description VARCHAR(255) NOT NULL
               ) ENGINE=INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS roles;";
        $db->pdo->exec($SQL);
    }
}
