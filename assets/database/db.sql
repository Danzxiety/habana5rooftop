CREATE TABLE reservas_tel (
    tel_id INT AUTO_INCREMENT,
    business_id int DEFAULT NULL,
    account_telefono VARCHAR(20) NOT NULL,
    PRIMARY KEY(tel_id),
);
