DELIMITER //

CREATE PROCEDURE login(
	IN userValue VARCHAR(30),
    IN passValue VARCHAR(90)
)
BEGIN
	SELECT usuarios.id,usuarios.user,usuarios.pass,usuarios.nombre,usuarios.apellido  FROM usuarios
    WHERE usuarios.user = userValue AND usuarios.pass = passValue;
END// 

DELIMITER ;