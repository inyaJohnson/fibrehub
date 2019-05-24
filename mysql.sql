CREATE DATABASE fibrehub;
USE fibrehub;
CREATE TABLE customer_info(
    customer_id INT AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(50), 
    last_name VARCHAR(50), 
    address VARCHAR(60), 
    contact_name VARCHAR(60), 
    official_tel VARCHAR(20), 
    mobile_tel VARCHAR(20), 
    email VARCHAR(50), 
    );

CREATE TABLE service_info(
    service_id INT AUTO_INCREMENT PRIMARY KEY, 
    activation_date VARCHAR(50), 
    product_type VARCHAR(50),
    bandwidth VARCHAR(20), 
     


)