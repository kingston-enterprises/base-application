<?php

/**
 * Create visitors table
 */
class m0002_create_visitors_table {
    public function up()
    {
        $db = kingston\icarus\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS visitors (
                id INT AUTO_INCREMENT PRIMARY KEY,
                datetime_visited TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                ip_address VARCHAR(55),
                agent_used VARCHAR(255)
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
