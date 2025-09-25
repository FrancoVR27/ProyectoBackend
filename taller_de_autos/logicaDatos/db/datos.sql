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
('Valeria', 'Díaz', 'valeria.diaz@mail.com', '76767676', 'CI-345678');


-- Insertar socios
INSERT INTO socios (nombre, direccion, telefono, email) VALUES
('Taller Central', 'Av. Libertad 123', '76540000', 'taller.central@mail.com'),
('Almacenes AutoFix', 'Calle Lucas Jaime 789', '70110011', NULL),
('Ferretería Mecánica', 'Av. Siempre Viva 321', '70223344', NULL),
('Mecánica El Rápido', 'Calle Sucre 456', '70112233', 'rapido@mail.com'),
('Repuestos El Buen Amigo', 'Av. Ayacucho 100', '70334455', 'repuestos.amigo@mail.com'),
('Taller La Llave', 'Calle 21 de Mayo 50', '70445566', NULL),
('ServiAuto Express', 'Av. Las Américas 70', '70556677', 'serviauto@mail.com');

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
('Nissan Versa', 'Plata', 2021, '2026-05-18', 'Leve', '2025-09-23', NULL, 'En cola', 10);

-- Insertar citas
INSERT INTO citas (vehiculo_id, fecha_cita, tipo_servicio, socio_id, estado) VALUES
(1, '2025-09-25 09:00:00', 'Mantenimiento', 1, 'Pendiente'),
(2, '2025-09-26 14:00:00', 'Reparación', 2, 'Confirmada'),
(3, '2025-09-27 11:30:00', 'Reparación', 1, 'Pendiente'),
(7, '2025-10-01 10:00:00', 'Mantenimiento', 3, 'Pendiente'),
(8, '2025-10-02 15:00:00', 'Reparación', 4, 'Confirmada'),
(9, '2025-10-03 09:30:00', 'Reparación', 5, 'Pendiente'),
(10, '2025-10-04 11:00:00', 'Mantenimiento', 6, 'Confirmada'),
(11, '2025-10-05 16:00:00', 'Reparación', 7, 'Pendiente');


-- Insertar remolques
INSERT INTO remolque (vehiculo_id, distancia_km) VALUES
(1, 15.5),
(3, 40.0),
(8, 25.0),
(9, 10.2),
(11, 55.8);

-- Insertar revisiones técnicas
INSERT INTO revisiones_tecnicas (vehiculo_id, fecha_revision, resultados) VALUES
(1, '2025-09-15', 'Frenos desgastados, cambio recomendado'),
(2, '2025-09-18', 'Todo en orden'),
(3, '2025-09-20', 'Motor con fuga de aceite, requiere reparación mayor'),
(7, '2025-09-22', 'Luces de freno no funcionan, requiere revisión eléctrica'),
(8, '2025-09-23', 'Alineación de dirección fuera de especificación'),
(9, '2025-09-24', 'Revisión de neumáticos: necesitan ser reemplazados'),
(10, '2025-09-21', 'Nivel de fluidos bajo, se recomienda rellenar');