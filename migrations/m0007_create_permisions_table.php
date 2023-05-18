<?php

/**
 * Create permissions table
 * a permission is a role that has been assigned to a user
 */
class m0007_create_permisions_table {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS permissions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT,
                role_id INT,
                FOREIGN KEY (user_id) REFERENCES users (id),
                FOREIGN KEY (role_id) REFERENCES roles (id)
               ) ENGINE=INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS permissions;";
        $db->pdo->exec($SQL);
    }
}
