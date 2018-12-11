-- INSERTAR FAMILIAS
INSERT INTO ciisastore.families (name) VALUES ('Tecnología');
INSERT INTO ciisastore.families (name) VALUES ('Ropa hombre');
INSERT INTO ciisastore.families (name) VALUES ('Ropa mujer');
INSERT INTO ciisastore.families (name) VALUES ('Juguetes');
INSERT INTO ciisastore.families (name) VALUES ('Hogar');
INSERT INTO ciisastore.families (name) VALUES ('Deporte');



-- INSERTAR PRODUCTOS
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod001', 'Huawei mate 10 pro', 'Celular huawei', 450000, 20, 2, 0, '/images/products/huawei-p10-pro.jpg', 1);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod002', 'Iphone 6s', 'Celular iphone', 400000, 20, 2, 0, '/images/products/iphone-6s.jpg', 1);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod003', 'Notebook acer', 'Notebook marca acer', 600000, 10, 2, 0, '/images/products/notebook-acer.jpg', 1);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod004', 'Pantalon largo', 'Pantalon de tela largo', 25000, 40, 10, 0, '/images/products/pantalon-largo.jpg', 2);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod005', 'Pantalon corto', 'Pantalon de tela corto', 20000, 30, 10, 0, '/images/products/pantalon-corto.jpg', 2);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod006', 'Jeans negros', 'Pantalon jeans color negro', 9000, 50, 8, 0, '/images/products/jeans-negros.jpg', 2);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod007', 'Polera amarilla', 'Polera de tela amarilla', 9990, 40, 10, 0, '/images/products/polera-amarilla.jpg', 3);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod008', 'Falda corta', 'Falda negra corta', 15000, 25, 8, 0, '/images/products/falda-corta.jpg', 3);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod009', 'Pañuelo floreado', 'Pañuelo de tela floreado', 10000, 100, 10, 0, '/images/products/pañuelo-floreado.jpg', 3);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0010', 'Duende magico', 'Un duende muy mágico', 9990, 20, 5, 0, '/images/products/duende-magico.jpg', 4);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0011', 'Chicas super poderosas', 'Juguete de plastico de las chicas super poderosas', 25000, 20, 2, 0, '/images/products/chicas-super-poderosas.jpg', 4);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0012', 'Pista hot wheels dinosaurio', 'Pista para autos', 40000, 20, 2, 0, '/images/products/pista-hot-wheels-dinosaurio.jpg', 4);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0013', 'Sillon verde', 'Sillon de tela verde', 200000, 10, 2, 0, '/images/products/sillon-verde.jpg', 5);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0014', 'Cama 2 plazas', 'Cama de 2 plazas muy buena', 250000, 8, 2, 0, '/images/products/cama-2-plazas.jpg', 5);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0015', 'cocina 6 quemadores', 'Cocina a gas con 6 quemadores', 99000, 40, 15, 0, '/images/products/cocina-6-quemadores.jpg', 5);

INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0016', 'Pelota futbol', 'Pelota de futbol roteiro', 9990, 40, 8, 0, '/images/products/pelota-futbol.jpg', 6);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0017', 'Pelota basketball', 'Pelota de basketball', 19990, 30, 10, 0, '/images/products/pelota-basketball.jpg', 6);
INSERT INTO ciisastore.products (code, name, description, price, stock, stock_treshold, status, image_route, family_id)
VALUES ('prod0018', 'Raqueta de tenis', 'Una raqueta de tenis', 12990, 50, 10, 0, '/images/products/raqueta-tenis.jpg', 6);