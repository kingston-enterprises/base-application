<?php

class m0009_insert_normal_role {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "INSERT INTO roles (
            title,
            description
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
