<?php

/**
 * Insert admin role 
 */
class m0006_insert_admin_role {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "INSERT INTO roles (
            role_title,
            role_description
        ) VALUES (
            'admin',
            'Admin users have access to everything'
            )";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DELETE FROM roles WHERE `title` = 'admin';";
        $db->pdo->exec($SQL);
    }
}
