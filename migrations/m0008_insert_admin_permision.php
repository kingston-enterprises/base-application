<?php

/**
 * Insert admin permission 
 */
class m0008_insert_admin_permision {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "INSERT INTO permissions (
            user_id,
            role_id
        ) VALUES (
            '1',
            '1'
            )";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DELETE FROM permissions WHERE `user_id` = '1';";
        $db->pdo->exec($SQL);
    }
}
