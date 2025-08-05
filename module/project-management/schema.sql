CREATE TABLE module_projects (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11),
    user_updated INT(11),
    name VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(50),
    start_date DATE,
    end_date DATE,
    date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    memo TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
