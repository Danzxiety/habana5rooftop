CREATE TABLE user_account (
    account_id INT AUTO_INCREMENT,
    account_nombre VARCHAR(255) NOT NULL,
    account_apellido VARCHAR(255) NOT NULL,
    account_telefono VARCHAR(20) NOT NULL,
    account_correo_electronico VARCHAR(255) NOT NULL,
    account_contrasena VARCHAR(255) NOT NULL,
    account_status VARCHAR(255) DEFAULT '1',
    account_saldo DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    PRIMARY KEY(account_id)
);


CREATE TABLE tarjetas (
    tarjeta_id INT AUTO_INCREMENT,
    account_id INT NOT NULL,
    numero_tarjeta VARCHAR(16) NOT NULL,
    fecha_expiracion DATE NOT NULL,
    cvv INT NOT NULL,
    nombre_titular VARCHAR(255) NOT NULL,
    PRIMARY KEY(tarjeta_id),
    FOREIGN KEY(account_id) REFERENCES user_account(account_id)
);

CREATE TABLE contactos (
    destinatario_id INT AUTO_INCREMENT,
    account_id INT NOT NULL,
    contact_nombre VARCHAR(255) NOT NULL,
    contact_apellido VARCHAR(255) NOT NULL,
    contact_telefono VARCHAR(20) NOT NULL,
    pais VARCHAR(255) NULL,
    tipo_operacion VARCHAR(255) NULL,
    PRIMARY KEY(destinatario_id),
    FOREIGN KEY(account_id) REFERENCES user_account(account_id)
);