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















-- INSERTAR FAMILIAS
INSERT INTO ciisastore.families (name) VALUES ('Tecnología');
INSERT INTO ciisastore.families (name) VALUES ('Ropa hombre');
INSERT INTO ciisastore.families (name) VALUES ('Ropa mujer');
INSERT INTO ciisastore.families (name) VALUES ('Juguetes');
INSERT INTO ciisastore.families (name) VALUES ('Hogar');
INSERT INTO ciisastore.families (name) VALUES ('Deporte');


-- INSERT PROVIDERS DATA
INSERT INTO ciisastore.providers (name) VALUES ('Waltmart');


-- INSERTAR PRODUCTOS
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod001', 'Huawei mate 10 pro', 'Celular huawei', 450000, 20, 2, 0, '/images/products/huawei-p10-pro.jpg', 1,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod001', 0, 0, 1);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod002', 'Iphone 6s', 'Celular iphone', 400000, 20, 2, 0, '/images/products/iphone-6s.jpg', 1,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod002', 0, 0, 1);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod003', 'Notebook acer', 'Notebook marca acer', 600000, 10, 2, 0, '/images/products/notebook-acer.jpg', 1,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod003', 0, 0, 1);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod004', 'Pantalon largo', 'Pantalon de tela largo', 25000, 40, 10, 0, '/images/products/pantalon-largo.jpg', 2,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod004', 0, 0, 2);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod005', 'Pantalon corto', 'Pantalon de tela corto', 20000, 30, 10, 0, '/images/products/pantalon-corto.jpg', 2,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod005', 0, 0, 2);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod006', 'Jeans negros', 'Pantalon jeans color negro', 9000, 50, 8, 0, '/images/products/jeans-negros.jpg', 2,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod006', 0, 0, 2);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod007', 'Polera amarilla', 'Polera de tela amarilla', 9990, 40, 10, 0, '/images/products/polera-amarilla.jpg', 3,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod007', 0, 0, 3);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod008', 'Falda corta', 'Falda negra corta', 15000, 25, 8, 0, '/images/products/falda-corta.jpg', 3,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod008', 0, 0, 3);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod009', 'Pañuelo floreado', 'Pañuelo de tela floreado', 10000, 100, 10, 0, '/images/products/pañuelo-floreado.jpg', 3,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod009', 0, 0, 3);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0010', 'Duende magico', 'Un duende muy mágico', 9990, 20, 5, 0, '/images/products/duende-magico.jpg', 4,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0010', 0, 0, 4);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0011', 'POP burbuja', 'Juguete de plastico de las chicas super poderosas', 9990, 20, 2, 0, '/images/products/pop-burbuja.jpg', 4,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0011', 0, 0, 4);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0012', 'Pista hot wheels dinosaurio', 'Pista para autos', 40000, 20, 2, 0, '/images/products/pista-hot-wheels-dinosaurio.jpg', 4,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0012', 0, 0, 4);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0013', 'Sillon verde', 'Sillon de tela verde', 200000, 10, 2, 0, '/images/products/sillon-verde.jpg', 5,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0013', 0, 0, 5);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0014', 'Cama 2 plazas', 'Cama de 2 plazas muy buena', 250000, 8, 2, 0, '/images/products/cama-2-plazas.jpg', 5,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0014', 0, 0, 5);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0015', 'cocina 6 quemadores', 'Cocina a gas con 6 quemadores', 99000, 40, 15, 0, '/images/products/cocina-6-quemadores.jpg', 5,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0015', 0, 0, 5);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0016', 'Pelota futbol', 'Pelota de futbol roteiro', 9990, 40, 8, 0, '/images/products/pelota-futbol.jpg', 6,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0016', 0, 0, 6);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0017', 'Pelota basketball', 'Pelota de basketball', 19990, 30, 10, 0, '/images/products/pelota-basketball.jpg', 6,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0017', 0, 0, 6);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id, provider_id, purchase_quantity)
VALUES ('prod0018', 'Raqueta de tenis', 'Una raqueta de tenis', 12990, 50, 10, 0, '/images/products/raqueta-tenis.jpg', 6,1,20);
-- crea reporte en tabla sales_report
INSERT INTO ciisastore.sales_reports (product_code, quantity, amount, family_id) VALUES ('prod0018', 0, 0, 6);
