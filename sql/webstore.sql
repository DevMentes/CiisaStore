SET SESSION FOREIGN_KEY_CHECKS=0;

/* Drop Tables */

DROP TABLE IF EXISTS addresses;
DROP TABLE IF EXISTS cities;
DROP TABLE IF EXISTS combo_producto;
DROP TABLE IF EXISTS combos;
DROP TABLE IF EXISTS company_data;
DROP TABLE IF EXISTS memberships;
DROP TABLE IF EXISTS order_details;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS purchase_order_details;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS families;
DROP TABLE IF EXISTS purchase_orders;
DROP TABLE IF EXISTS providers;
DROP TABLE IF EXISTS regions;




/* Create Tables */

CREATE TABLE addresses
(
	-- Id de la direccion.
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la direccion.',
	-- Nombre de la calle
	street_name varchar(100) NOT NULL COMMENT 'Nombre de la calle',
	-- Numero de la calle
	street_number int unsigned NOT NULL COMMENT 'Numero de la calle',
	-- Observaciones de la direccion
	observation varchar(100) COMMENT 'Observaciones de la direccion',
	-- Id del comprador
	customer_id int unsigned NOT NULL COMMENT 'Id del comprador',
	-- Id de la ciudad
	city_id int unsigned NOT NULL COMMENT 'Id de la ciudad',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE cities
(
	-- Id de la ciudad
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la ciudad',
	-- Nombre de la ciudad
	name varchar(60) NOT NULL COMMENT 'Nombre de la ciudad',
	-- Id de la region
	region_id int unsigned NOT NULL COMMENT 'Id de la region',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (name)
);


CREATE TABLE combos
(
	-- Id del producto
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id del producto',
	-- Nombre del producto
	name varchar(20) NOT NULL COMMENT 'Nombre del producto',
	-- Descripcion del combo
	description varchar(300) NOT NULL COMMENT 'Descripcion del combo',
	-- Precio del combo
	price int unsigned NOT NULL COMMENT 'Precio del combo',
	-- Stock del combo
	stock int unsigned NOT NULL COMMENT 'Stock del combo',
	-- Indica si el producto esta activo o no.
	-- 0 - inactivo
	-- 1 - activo
	-- 
	is_enabled binary DEFAULT '0' NOT NULL COMMENT 'Indica si el producto esta activo o no.
0 - inactivo
1 - activo
',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (name)
);


CREATE TABLE combo_producto
(
	-- Id del combo
	combo_id int unsigned NOT NULL COMMENT 'Id del combo',
	-- Codigo del producto
	product_code varchar(20) NOT NULL COMMENT 'Codigo del producto'
);


CREATE TABLE company_data
(
	-- Rut de la empresa
	rut varchar(20) NOT NULL COMMENT 'Rut de la empresa',
	-- Nombre de la empresa
	name varchar(60) NOT NULL COMMENT 'Nombre de la empresa',
	-- Numero telefonico de la empresa
	phone int unsigned COMMENT 'Numero telefonico de la empresa',
	-- direccion de la empresa
	address varchar(50) NOT NULL COMMENT 'direccion de la empresa',
	-- ciudad de la empresa
	city varchar(30) NOT NULL COMMENT 'ciudad de la empresa',
	-- pais de la empresa
	country varchar(20) NOT NULL COMMENT 'pais de la empresa',
	PRIMARY KEY (rut),
	UNIQUE (rut),
	UNIQUE (name)
);


CREATE TABLE customers
(
	-- Id del comprador
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id del comprador',
	-- Nombre del comprador
	name varchar(30) NOT NULL COMMENT 'Nombre del comprador',
	-- Apellido del comprador
	lastname varchar(30) NOT NULL COMMENT 'Apellido del comprador',
	-- Email del comprador
	email varchar(100) NOT NULL COMMENT 'Email del comprador',
	-- Numero de telefono del comprador
	phone int unsigned NOT NULL COMMENT 'Numero de telefono del comprador',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (email)
);


CREATE TABLE families
(
	-- Id de la familia
	-- 
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la familia
',
	-- Nombre de categoria
	name varchar(20) NOT NULL COMMENT 'Nombre de categoria',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (name)
);


CREATE TABLE memberships
(
	-- Id de la membresia
	id int unsigned NOT NULL COMMENT 'Id de la membresia',
	-- Email asociado a la membresia
	email varchar(100) NOT NULL COMMENT 'Email asociado a la membresia',
	-- Contrasena de la cuenta
	password varbinary(30) NOT NULL COMMENT 'Contrasena de la cuenta',
	-- Id del comprador
	customer_id int unsigned NOT NULL COMMENT 'Id del comprador',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (email)
);


CREATE TABLE orders
(
	-- Id de la orden del usuario
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la orden del usuario',
	-- Fecha de la compra
	date varchar(12) NOT NULL COMMENT 'Fecha de la compra',
	-- Precio total de la compra
	total_price int unsigned NOT NULL COMMENT 'Precio total de la compra',
	-- Status de la orden
	status int unsigned NOT NULL COMMENT 'Status de la orden',
	-- Id del comprador
	customer_id int unsigned NOT NULL COMMENT 'Id del comprador',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE order_details
(
	-- id de la orden de compra
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'id de la orden de compra',
	-- Cantidad de productos 
	quantity int unsigned NOT NULL COMMENT 'Cantidad de productos ',
	-- Id de la orden del usuario
	order_id int unsigned NOT NULL COMMENT 'Id de la orden del usuario',
	-- Codigo del producto
	product_code varchar(20) NOT NULL COMMENT 'Codigo del producto',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (product_code)
);


CREATE TABLE products
(
	-- Codigo del producto
	code varchar(20) NOT NULL COMMENT 'Codigo del producto',
	-- Nombre del producto
	name varchar(60) NOT NULL COMMENT 'Nombre del producto',
	-- Descripcion del producto
	description varchar(1000) NOT NULL COMMENT 'Descripcion del producto',
	-- Precio del producto
	price int unsigned DEFAULT 800 NOT NULL COMMENT 'Precio del producto',
	-- Stock del producto
	stock int unsigned NOT NULL COMMENT 'Stock del producto',
	-- Limite de stock del producto
	stock_treshold int unsigned NOT NULL COMMENT 'Limite de stock del producto',
	-- Id de la familia
	-- 
	family_id int unsigned NOT NULL COMMENT 'Id de la familia
',
	-- Indica si el producto estara activo para su venta o no
	-- 
	-- 0 - esta inactivo
	-- 1 - esta activo
	-- 2 - disponible
	-- 3 - no disponible
	status bit(1) DEFAULT 0 NOT NULL COMMENT 'Indica si el producto estara activo para su venta o no

0 - esta inactivo
1 - esta activo
2 - disponible
3 - no disponible',
	PRIMARY KEY (code),
	UNIQUE (code)
);


CREATE TABLE providers
(
	-- Id del proveedor
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id del proveedor',
	-- Nombre del proveedor
	name varchar(50) NOT NULL COMMENT 'Nombre del proveedor',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE purchase_orders
(
	-- numero de la orden de compra
	number int unsigned NOT NULL AUTO_INCREMENT COMMENT 'numero de la orden de compra',
	-- Fecha de emision de orden de compra en formato yyyy/mm/dd
	date varchar(12) NOT NULL COMMENT 'Fecha de emision de orden de compra en formato yyyy/mm/dd',
	-- Id del proveedor
	provider_id int unsigned NOT NULL COMMENT 'Id del proveedor',
	-- Indica el estado de la orden de compra
	-- 
	-- 0 - rechazada
	-- 1 - enviada
	-- 2 - cancelada
	status bit(1) DEFAULT 0 NOT NULL COMMENT 'Indica el estado de la orden de compra

0 - rechazada
1 - enviada
2 - cancelada',
	-- precio total de la orden de compra
	total_price int unsigned NOT NULL COMMENT 'precio total de la orden de compra',
	PRIMARY KEY (number),
	UNIQUE (number)
);


CREATE TABLE purchase_order_details
(
	-- Id de detalle de la orden de compra
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de detalle de la orden de compra',
	-- cantidad del profucto comprado
	quantity int unsigned NOT NULL COMMENT 'cantidad del profucto comprado',
	-- numero de la orden de compra
	purchase_order_number int unsigned NOT NULL COMMENT 'numero de la orden de compra',
	-- Codigo del producto
	product_code varchar(20) NOT NULL COMMENT 'Codigo del producto',
	-- Precio total de la compra
	total_price int unsigned NOT NULL COMMENT 'Precio total de la compra',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE regions
(
	-- Id de la region
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la region',
	-- Nombre de la region
	-- 
	name varchar(50) NOT NULL COMMENT 'Nombre de la region
',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (name)
);



/* Create Foreign Keys */

ALTER TABLE addresses
	ADD FOREIGN KEY (city_id)
	REFERENCES cities (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE combo_producto
	ADD FOREIGN KEY (combo_id)
	REFERENCES combos (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE addresses
	ADD FOREIGN KEY (customer_id)
	REFERENCES customers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE memberships
	ADD FOREIGN KEY (customer_id)
	REFERENCES customers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE orders
	ADD FOREIGN KEY (customer_id)
	REFERENCES customers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE products
	ADD FOREIGN KEY (family_id)
	REFERENCES families (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE order_details
	ADD FOREIGN KEY (order_id)
	REFERENCES orders (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE combo_producto
	ADD FOREIGN KEY (product_code)
	REFERENCES products (code)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE order_details
	ADD FOREIGN KEY (product_code)
	REFERENCES products (code)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE purchase_order_details
	ADD FOREIGN KEY (product_code)
	REFERENCES products (code)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE purchase_orders
	ADD FOREIGN KEY (provider_id)
	REFERENCES providers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE purchase_order_details
	ADD FOREIGN KEY (purchase_order_number)
	REFERENCES purchase_orders (number)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE cities
	ADD FOREIGN KEY (region_id)
	REFERENCES regions (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



