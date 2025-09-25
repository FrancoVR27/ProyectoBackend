--
-- Archivo de datos para la base de datos "taller_autos"
--
-- Contiene datos de ejemplo para las tablas de la estructura
--

-- Insertar clientes
INSERT INTO clientes (nombre, apellido, email, telefono, ci) VALUES
('Juan', 'Pérez', 'juan.perez@mail.com', '76543210', 'CI-123456'),
('María', 'López', 'maria.lopez@mail.com', '71234567', 'CI-654321'),
('Ricardo','Castro','ricardo.castro@gamil.com','70123456','CI-345678'),
('Ana', 'Martínez','ana.marinez@gmail.com','79987654','CI-567890'),
('Carlos', 'Gutiérrez', 'carlos.g@mail.com', '79876543', 'CI-789012'),
('Laura', 'Gómez', 'laura.gomez@mail.com', '77654321', 'CI-987654'),
('Pedro', 'Ramírez', 'pedro.ramirez@mail.com', '75432109', 'CI-109876'),
('Sofía', 'Torres', 'sofia.torres@mail.com', '73210987', 'CI-234567'),
('Diego', 'Sánchez', 'diego.sanchez@mail.com', '78901234', 'CI-876543'),
('Valeria', 'Díaz', 'valeria.diaz@mail.com', '76767676', 'CI-345678'),
('Roberto', 'Silva', 'roberto.silva@mail.com', '75555555', 'CI-111222'),
('Carmen', 'Vargas', 'carmen.vargas@mail.com', '76666666', 'CI-333444'),
('Miguel', 'Rojas', 'miguel.rojas@mail.com', '77777777', 'CI-555666'),
('Patricia', 'Mendoza', 'patricia.mendoza@mail.com', '78888888', 'CI-777888'),
('Fernando', 'Blanco', 'fernando.blanco@mail.com', '79999999', 'CI-999000'),
('Isabella', 'Herrera', 'isabella.herrera@mail.com', '70000001', 'CI-000111'),
('Andrés', 'Morales', 'andres.morales@mail.com', '71111111', 'CI-222333'),
('Gabriela', 'Vega', 'gabriela.vega@mail.com', '72222222', 'CI-444555'),
('Javier', 'Ortiz', 'javier.ortiz@mail.com', '73333333', 'CI-666777'),
('Natalia', 'Cruz', 'natalia.cruz@mail.com', '74444444', 'CI-888999');


-- Insertar socios
INSERT INTO socios (nombre, direccion, telefono, email) VALUES
('Taller Central', 'Av. Libertad 123', '76540000', 'taller.central@mail.com'),
('Almacenes AutoFix', 'Calle Lucas Jaime 789', '70110011', NULL),
('Ferretería Mecánica', 'Av. Siempre Viva 321', '70223344', NULL),
('Mecánica El Rápido', 'Calle Sucre 456', '70112233', 'rapido@mail.com'),
('Repuestos El Buen Amigo', 'Av. Ayacucho 100', '70334455', 'repuestos.amigo@mail.com'),
('Taller La Llave', 'Calle 21 de Mayo 50', '70445566', NULL),
('ServiAuto Express', 'Av. Las Américas 70', '70556677', 'serviauto@mail.com'),
('Mecánica Pro', 'Calle Bolívar 200', '70667788', 'mecanicapro@mail.com'),
('AutoService Premium', 'Av. 6 de Agosto 150', '70778899', 'premium@mail.com'),
('Taller Especializado', 'Calle Murillo 300', '70889900', NULL),
('Repuestos Import', 'Av. El Prado 250', '70990011', 'import@mail.com'),
('Mecánica Técnica', 'Calle Comercio 180', '71001122', 'tecnica@mail.com'),
('AutoCenter Plus', 'Av. Arce 400', '71112233', NULL),
('Servicio Integral', 'Calle Rosendo Gutiérrez 90', '71223344', 'integral@mail.com');

-- Insertar vehículos
INSERT INTO vehiculos (modelo, color, anio, fecha_fin_garantia, nivel_dano, fecha_almacenaje, ultima_actualizacion_reparacion, estado, cliente_id) VALUES
('Toyota Corolla', 'Rojo', 2018, '2023-05-10', 'Moderado', '2025-09-01', '2025-09-20 10:30:00', 'En reparación', 1),
('Nissan Frontier', 'Blanco', 2020, '2025-01-15', 'Leve', '2025-08-15', NULL, 'En cola', 2),
('Ford Mustang', 'Azul', 2017, '2022-11-30', 'Severo', '2024-12-05', '2025-09-18 09:45:00', 'Reparado', 1),
('Chevrolet Spark', 'Gris', 2021, '2026-07-22', 'Leve', '2025-09-10', NULL, 'En cola', 3),
('Volkswagen Golf', 'Plata', 2016, '2021-09-30', 'Moderado', '2025-07-20', '2025-08-30 16:15:00', 'En reparación', 4),
('Hyundai Tucson', 'Negro', 2019, '2024-03-20', 'Severo', '2025-09-10', '2025-09-18 14:00:00', 'Reparado', 3),
('Kia Sorento', 'Gris', 2022, '2027-02-10', 'Leve', '2025-09-21', NULL, 'En cola', 5),
('BMW X5', 'Negro', 2015, '2020-06-01', 'Severo', '2025-08-25', '2025-09-22 11:00:00', 'En reparación', 6),
('Honda Civic', 'Blanco', 2019, '2024-10-05', 'Moderado', '2025-09-15', NULL, 'En cola', 7),
('Mazda CX-5', 'Rojo', 2020, '2025-03-12', 'Leve', '2025-09-17', '2025-09-23 09:00:00', 'Reparado', 8),
('Audi A4', 'Azul', 2018, '2023-08-25', 'Moderado', '2025-08-01', '2025-09-10 15:30:00', 'En reparación', 9),
('Nissan Versa', 'Plata', 2021, '2026-05-18', 'Leve', '2025-09-23', NULL, 'En cola', 10),
('Mercedes-Benz C-Class', 'Negro', 2019, '2024-12-15', 'Moderado', '2025-09-24', NULL, 'En cola', 11),
('Toyota RAV4', 'Verde', 2020, '2025-06-30', 'Leve', '2025-09-25', NULL, 'En cola', 12),
('Ford Explorer', 'Azul', 2018, '2023-04-20', 'Severo', '2025-09-22', '2025-09-24 14:30:00', 'En reparación', 13),
('Chevrolet Cruze', 'Blanco', 2017, '2022-08-10', 'Moderado', '2025-09-20', '2025-09-23 11:15:00', 'Reparado', 14),
('Volkswagen Tiguan', 'Gris', 2021, '2026-03-25', 'Leve', '2025-09-19', NULL, 'En cola', 15),
('Hyundai Elantra', 'Rojo', 2020, '2025-09-05', 'Moderado', '2025-09-18', '2025-09-24 16:00:00', 'En reparación', 16),
('Kia Sportage', 'Plata', 2019, '2024-11-18', 'Severo', '2025-09-17', '2025-09-22 10:45:00', 'Reparado', 17),
('BMW 320i', 'Azul', 2016, '2021-07-12', 'Moderado', '2025-09-16', NULL, 'En cola', 18),
('Honda CR-V', 'Negro', 2022, '2027-01-30', 'Leve', '2025-09-15', NULL, 'En cola', 19),
('Mazda 3', 'Blanco', 2018, '2023-10-08', 'Moderado', '2025-09-14', '2025-09-23 13:20:00', 'En reparación', 20);

-- Insertar citas
INSERT INTO citas (vehiculo_id, fecha_cita, tipo_servicio, socio_id, estado) VALUES
(1, '2025-09-25 09:00:00', 'Mantenimiento', 1, 'Pendiente'),
(2, '2025-09-26 14:00:00', 'Reparación', 2, 'Confirmada'),
(3, '2025-09-27 11:30:00', 'Reparación', 1, 'Pendiente'),
(7, '2025-10-01 10:00:00', 'Mantenimiento', 3, 'Pendiente'),
(8, '2025-10-02 15:00:00', 'Reparación', 4, 'Confirmada'),
(9, '2025-10-03 09:30:00', 'Reparación', 5, 'Pendiente'),
(10, '2025-10-04 11:00:00', 'Mantenimiento', 6, 'Confirmada'),
(11, '2025-10-05 16:00:00', 'Reparación', 7, 'Pendiente'),
(13, '2025-10-06 08:00:00', 'Mantenimiento', 8, 'Confirmada'),
(14, '2025-10-07 10:30:00', 'Reparación', 9, 'Pendiente'),
(15, '2025-10-08 13:00:00', 'Mantenimiento', 10, 'Confirmada'),
(16, '2025-10-09 15:30:00', 'Reparación', 11, 'Pendiente'),
(17, '2025-10-10 09:15:00', 'Reparación', 12, 'Confirmada'),
(18, '2025-10-11 11:45:00', 'Mantenimiento', 13, 'Pendiente'),
(19, '2025-10-12 14:20:00', 'Reparación', 14, 'Confirmada'),
(20, '2025-10-13 16:10:00', 'Mantenimiento', 1, 'Pendiente'),
(21, '2025-10-14 08:30:00', 'Reparación', 2, 'Confirmada'),
(22, '2025-10-15 12:00:00', 'Mantenimiento', 3, 'Pendiente');


-- Insertar remolques
INSERT INTO remolque (vehiculo_id, distancia_km) VALUES
(1, 15.5),
(3, 40.0),
(8, 25.0),
(9, 10.2),
(11, 55.8),
(13, 30.5),
(15, 18.7),
(17, 45.3),
(19, 22.1),
(21, 38.9),
(5, 12.8),
(6, 60.2),
(12, 27.4),
(14, 35.6),
(16, 42.0);

-- Insertar revisiones técnicas
INSERT INTO revisiones_tecnicas (vehiculo_id, fecha_revision, resultados) VALUES
(1, '2025-09-15', 'Frenos desgastados, cambio recomendado'),
(2, '2025-09-18', 'Todo en orden'),
(3, '2025-09-20', 'Motor con fuga de aceite, requiere reparación mayor'),
(7, '2025-09-22', 'Luces de freno no funcionan, requiere revisión eléctrica'),
(8, '2025-09-23', 'Alineación de dirección fuera de especificación'),
(9, '2025-09-24', 'Revisión de neumáticos: necesitan ser reemplazados'),
(10, '2025-09-21', 'Nivel de fluidos bajo, se recomienda rellenar'),
(4, '2025-09-19', 'Sistema de suspensión en buen estado'),
(5, '2025-09-17', 'Batería con carga baja, necesita reemplazo'),
(6, '2025-09-16', 'Transmisión automática presenta ruidos anormales'),
(11, '2025-09-25', 'Filtro de aire obstruido, cambio inmediato'),
(12, '2025-09-14', 'Sistema eléctrico funcionando correctamente'),
(13, '2025-09-13', 'Pastillas de freno al 30%, cambio próximo'),
(14, '2025-09-12', 'Radiador con pequeña fuga, reparación menor'),
(15, '2025-09-11', 'Correa de distribución en buen estado'),
(16, '2025-09-10', 'Amortiguadores posteriores desgastados'),
(17, '2025-09-09', 'Sistema de escape con ligera fuga'),
(18, '2025-09-08', 'Dirección asistida con ruido al girar'),
(19, '2025-09-07', 'Embrague en perfecto funcionamiento'),
(20, '2025-09-06', 'Luces delanteras necesitan alineación'),
(21, '2025-09-05', 'Neumáticos con desgaste irregular'),
(22, '2025-09-04', 'Sistema de climatización requiere recarga');