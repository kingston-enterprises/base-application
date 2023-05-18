<?php

/**
 * Insert admin user - this is the Default user for the sys amdin
 *      this user will be granted all permissions
 */
class m0005_insert_admin_user
{
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "INSERT INTO users (
            user_email,
            first_name,
            last_name,
            user_password
        ) VALUES (
            'admin@localhost.com',
            'Super',
            'Admin',
            '" . password_hash("adminpassword", PASSWORD_DEFAULT) . "'
            )";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DELETE FROM users WHERE `email` = 'admin@localhost.com';";
        $db->pdo->exec($SQL);
    }
}
