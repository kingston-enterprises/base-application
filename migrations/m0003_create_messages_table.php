<?php

class m0003_create_messages_table {
    public function up()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS messages (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name varchar(55),
                email varchar(55),
                message varchar(255),
                datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                visitor_id int,
                FOREIGN KEY(visitor_id) REFERENCES visitors(id)
                ) ENGINE=INNODB";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \kingstonenterprises\\core\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS messages;";
        $db->pdo->exec($SQL);
    }
}
