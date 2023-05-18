<?php

/**
 * insert the default role for new users
 */
class m0009_insert_normal_role {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "INSERT INTO roles (
            role_title,
            role_description
        ) VALUES (
            'normal',
            'Just a normal user'
            )";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DELETE FROM roles WHERE `title` = 'normal';";
        $db->pdo->exec($SQL);
    }
}
