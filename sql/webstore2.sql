SET SESSION FOREIGN_KEY_CHECKS=0;

/* Drop Tables */

DROP TABLE IF EXISTS combo_product;
DROP TABLE IF EXISTS combos;
DROP TABLE IF EXISTS order_details;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS purchase_orders;
DROP TABLE IF EXISTS sales_reports;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS families;
DROP TABLE IF EXISTS providers;




/* Create Tables */

CREATE TABLE combos
(
	-- codigo del combo
	-- 
	code varchar(36) NOT NULL COMMENT 'codigo del combo
',
	-- precio del combo
	price int unsigned NOT NULL COMMENT 'precio del combo',
	-- stock del combo
	stock int unsigned NOT NULL COMMENT 'stock del combo',
	PRIMARY KEY (code),
	UNIQUE (code)
);


CREATE TABLE combo_product
(
	-- codigo del producto
	product_code varchar(36) NOT NULL COMMENT 'codigo del producto',
	-- codigo del combo
	-- 
	combo_code varchar(36) NOT NULL COMMENT 'codigo del combo
'
);


CREATE TABLE customers
(
	-- id del customer
	id int NOT NULL AUTO_INCREMENT COMMENT 'id del customer',
	-- nombre del customer
	name varchar(20) NOT NULL COMMENT 'nombre del customer',
	-- apellido del customer
	lastname varchar(20) COMMENT 'apellido del customer',
	-- correo del customer
	email varchar(30) NOT NULL COMMENT 'correo del customer',
	-- telefono del usuario
	phone int unsigned COMMENT 'telefono del usuario',
	-- calle del comprador
	street_name varchar(30) NOT NULL COMMENT 'calle del comprador',
	-- numero de la calle del customer
	street_number int NOT NULL COMMENT 'numero de la calle del customer',
	-- ciudad de entrega
	city varchar(20) NOT NULL COMMENT 'ciudad de entrega',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE families
(
	-- id de la familia
	id int NOT NULL AUTO_INCREMENT COMMENT 'id de la familia',
	-- nombre de la familia
	name varchar(30) NOT NULL COMMENT 'nombre de la familia',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (name)
);


CREATE TABLE orders
(
	-- id de la orden
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'id de la orden',
	-- marca de tiempo
	date timestamp NOT NULL COMMENT 'marca de tiempo',
	-- total de la compra
	total_price int unsigned NOT NULL COMMENT 'total de la compra',
	-- estado de la orden
	-- 
	-- 1 emitida
	-- 0 cancelada
	status int DEFAULT 1 NOT NULL COMMENT 'estado de la orden

1 emitida
0 cancelada',
	-- id del customer
	customer_id int NOT NULL COMMENT 'id del customer',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE order_details
(
	-- id 
	id int unsigned NOT NULL AUTO_INCREMENT COMMENT 'id ',
	-- cantidad del producto
	quantity int unsigned NOT NULL COMMENT 'cantidad del producto',
	-- total de la cantidad por el valor del producto
	total_price int unsigned NOT NULL COMMENT 'total de la cantidad por el valor del producto',
	-- id de la orden
	order_id int unsigned NOT NULL COMMENT 'id de la orden',
	-- codigo del producto
	product_code varchar(36) NOT NULL COMMENT 'codigo del producto',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE products
(
	-- codigo del producto
	code varchar(36) NOT NULL COMMENT 'codigo del producto',
	-- nombre del producto
	name varchar(50) NOT NULL COMMENT 'nombre del producto',
	-- descripcion del producto
	description varchar(300) COMMENT 'descripcion del producto',
	-- precio del producto
	price int unsigned NOT NULL COMMENT 'precio del producto',
	-- stock del producto
	stock int NOT NULL COMMENT 'stock del producto',
	-- limite del stock
	stock_treshold int unsigned NOT NULL COMMENT 'limite del stock',
	-- estado de producto
	status int NOT NULL COMMENT 'estado de producto',
	-- ruta de la imagen
	image_route varchar(50) COMMENT 'ruta de la imagen',
	-- id de la familia
	family_id int NOT NULL COMMENT 'id de la familia',
	provider_id int unsigned NOT NULL,
	purchase_quantity int unsigned,
	PRIMARY KEY (code),
	UNIQUE (code)
);


CREATE TABLE providers
(
	id int unsigned NOT NULL AUTO_INCREMENT,
	-- nombre del proveedor
	name varchar(30) NOT NULL COMMENT 'nombre del proveedor',
	PRIMARY KEY (id),
	UNIQUE (id)
);


CREATE TABLE purchase_orders
(
	-- numero de orde
	number int NOT NULL AUTO_INCREMENT COMMENT 'numero de orde',
	-- fecha y hora de la orden de compra
	date timestamp NOT NULL COMMENT 'fecha y hora de la orden de compra',
	-- estado de la orden de compra
	-- 
	-- 0 - emitida
	-- 1 - aceptada
	-- 2 - rechazada
	-- 3 - cancelada
	status int DEFAULT 0 NOT NULL COMMENT 'estado de la orden de compra

0 - emitida
1 - aceptada
2 - rechazada
3 - cancelada',
	-- precio total
	total_price int unsigned NOT NULL COMMENT 'precio total',
	provider_id int unsigned NOT NULL,
	-- codigo del producto
	product_code varchar(36) NOT NULL COMMENT 'codigo del producto',
	quantity int unsigned NOT NULL,
	PRIMARY KEY (number),
	UNIQUE (number)
);


CREATE TABLE sales_reports
(
	-- id del registro
	id int NOT NULL AUTO_INCREMENT COMMENT 'id del registro',
	-- cantidad de productos vendidos
	quantity int unsigned NOT NULL COMMENT 'cantidad de productos vendidos',
	-- monto de ventas 
	amount int unsigned NOT NULL COMMENT 'monto de ventas ',
	-- id de la familia
	family_id int NOT NULL COMMENT 'id de la familia',
	-- codigo del producto
	product_code varchar(36) NOT NULL COMMENT 'codigo del producto',
	PRIMARY KEY (id),
	UNIQUE (id),
	UNIQUE (product_code)
);



/* Create Foreign Keys */

ALTER TABLE combo_product
	ADD FOREIGN KEY (combo_code)
	REFERENCES combos (code)
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


ALTER TABLE sales_reports
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


ALTER TABLE combo_product
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


ALTER TABLE purchase_orders
	ADD FOREIGN KEY (product_code)
	REFERENCES products (code)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE sales_reports
	ADD FOREIGN KEY (product_code)
	REFERENCES products (code)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE products
	ADD FOREIGN KEY (provider_id)
	REFERENCES providers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE purchase_orders
	ADD FOREIGN KEY (provider_id)
	REFERENCES providers (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



