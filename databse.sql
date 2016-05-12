CREATE DATABASE IF NOT EXISTS b2b;
USE b2b;

CREATE TABLE suppliers(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	logo_url VARCHAR(255)
);
CREATE TABLE clients(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	logo_url VARCHAR(255)
);
CREATE TABLE products(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	sku VARCHAR(6),
	stock int(11),
	picture_url VARCHAR(255),
	price DECIMAL(19,4),
	supplier_id int(11) UNSIGNED NOT NULL,
	created DATETIME,
	modified DATETIME,
	FOREIGN KEY(supplier_id) REFERENCES suppliers(id)
);

CREATE TABLE categories(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	created DATETIME,
	modified DATETIME,
	parent_id int(11) UNSIGNED,
	FOREIGN KEY(parent_id) REFERENCES categories(id)
);
CREATE TABLE transports(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255)
	/* add price */
);
CREATE TABLE orders(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	arrival_date DATETIME,
	article_count int(11),
	delivered tinyint(1),
	subtotal DECIMAL(19,4),
	status int(2),
	created DATETIME,
	modified DATETIME
);
CREATE TABLE sales(
	id int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	quantity int(11),
	total DECIMAL(19,4),
	product_id int(11) UNSIGNED NOT NULL,
	order_id int(11) UNSIGNED NOT NULL,
	created DATETIME,
	modified DATETIME,
	FOREIGN KEY(order_id) REFERENCES orders(id),
	FOREIGN KEY(product_id) REFERENCES products(id)
);
ALTER TABLE `sales` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `orders` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `transports` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `categories` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `clients` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `suppliers` DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO products(name, sku, picture_url, price, supplier_id, created, modified) VALUES
('Ave Aceite Vegetal', 'CZ0L', 'img/ave.jpg', 10.00, 1, NOW(), NOW()),
('Pan blanco en barra 680g', '2JNF', 'img/bimbo.jpg', 13.00, 2, NOW(), NOW()),
('Nutrioli DHA Aceite Soya', '10WG', 'img/dha.jpg', 19.00, 1, NOW(), NOW()),
('MASECA 1kg', '5FHK', 'img/maseca.jpg', 8.00, 4, NOW(), NOW()),
('Nutrioli Aceite Vegetal Tri-Pack', 'B0E0', 'img/nutripack.jpg', 50.00, 1, NOW(), NOW()),
('Nutrioli Aceite Vegetal', '17FA', 'img/nutrioli.jpg', 16.00, 1, NOW(), NOW()),
('Nutrioli Aceite en Spray', 'O63Q', 'img/aceitespray.jpg', 18.00, 1, NOW(), NOW()),
('Sabrosano Aceite Vegetal Tri-Pack', 'N4J0', 'img/sabrosano.jpg', 42.00, 1, NOW(), NOW()),
('Aceite de Coco', 'GWAB', 'img/coco1.png', 44.00, 3, NOW(), NOW()),
('Crema de Coco', '0VN5', 'img/coco2.png', 48.00, 3, NOW(), NOW()),
('Granola con miel de agave','0I92', 'img/granola1.png', 55.00, 3, NOW(), NOW()),
('Granola con miel de abeja','OI93', 'img/granola2.png', 55.00, 3, NOW(), NOW()),
('Harina de Coco Orgánica', '3JLW', 'img/harinadecoco.png', 38.00, 3, NOW(), NOW()),
('Miel de Abeja', 'RL81', 'img/mieldeabeja.png', 39.00, 3, NOW(), NOW()),
('Quinoa Orgánica', 'SAB2', 'img/quinoa.png', 67.00, 3, NOW(), NOW()),
('Santa Clara Leche Entera', 'JOP6', 'img/santaclara.png', 15.00, 5, NOW(), NOW()),
('Santa Clara Leche Deslactosada', 'JOP7', 'img/santaclarades.png', 15.00, 5, NOW(), NOW());


-- proveedores
-- order has many products
-- ordenes
-- categories
-- photos
-- ventas
-- carts
-- users
