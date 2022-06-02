CREATE TABLE restaurant (
    ID int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64)
);

CREATE TABLE restaurant_table(
	ID int PRIMARY KEY AUTO_INCREMENT,
	restaurantID int,
	tableNumber int,
	viewOrderStatus int default 0,
	callWaiterStatus int default 0,
	requestBillStatus int default 0,
	FOREIGN  KEY(restaurantID) REFERENCES restaurant(ID)
);

CREATE TABLE product(
	ID int PRIMARY KEY AUTO_INCREMENT,
	restaurantID int,
    title VARCHAR(64),
    price FLOAT,
	previewDescription VARCHAR(32),
	imageURL VARCHAR(256),
    description VARCHAR(256),
    cantity INT,
    disponibility BOOLEAN,
	FOREIGN KEY (restaurantID) REFERENCES restaurant(ID)
);


CREATE TABLE categories(
	ID int PRIMARY KEY AUTO_INCREMENT,
	productID int,
    	name VARCHAR(64),
	FOREIGN KEY (productID) REFERENCES product(ID)
);

create table allergens(
    id integer primary key auto_increment,
    name varchar(50)
);

create table product_allergens(
    id integer primary key auto_increment,
    product_id integer,
    allergen_id integer,
    foreign key (product_id) references product(id) on delete cascade,
    foreign key (allergen_id) references allergens(id) on delete cascade
);

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia");
-- //de facut
INSERT INTO `restaurant` (`name`) VALUES ("MammaMia2");

-- // produse "MammaMia"

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '31,90', 'img\productDummyImg.png', 'Cartofi prăjiţi, maioneză cu usturoi', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '550', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Shawarma sandwich F.G.', '24,90', 'img\Shawarma sandwich F.G..png', 'Cartofi prăjiţi, lipie, salată de varză', 'Cartofi prăjiţi, lipie, salată de varză, piept de pui uşor picant, castraveti in otet, sos cocktail', '450', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Clasică Full meat', '40,90', 'img\Pizza Clasică Full meat.png', 'Kaizer, piept de pui, salam demisec', 'Kaizer, piept de pui, salam demisec, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '900', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Clasică Mamma mia', '41,90', 'img\Pizza Clasică Mamma mia.png', 'Ardei gras, piept de pui, salam demisec', 'Ardei gras, piept de pui, salam demisec, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat, măsline kalamata', '800', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Spaghetti Carbonara', '30.90', 'img\Spaghetti Carbonara.png', 'Smântână, spaghetti, kaiser', 'Smântână, spaghetti, kaiser, specialitate de branza tare ', '400', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Meniu burger Mammamia', '35,90', 'img\Meniu burger Mammamia.png', 'Carne de vită, cartofi prăjiţi', 'Carne de vită, cartofi prăjiţi, sos barbeque, kaiser, mix de salate, castraveti in otet, chifla, branza gouda, sos tartar ', '580', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Meniu snitel de pui', '31,90', 'img\Meniu snitel de pui.png', 'Cartofi prăjiţi, maioneză cu usturoi', ' Cartofi prăjiţi, maioneză cu usturoi, ouă, pesmet, piept de pui, salata coleslaw', '550', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy sandwich F.G.', '23,90', 'img\Crispy sandwich F.G..png', 'Cartofi prăjiţi, lipie, piept de pui', ' Cartofi prăjiţi, lipie, piept de pui uşor picant, castraveti in otet, sos cocktail', '400', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Clasică Specialitatea casei', '36.90', 'img\Pizza Clasică Specialitatea casei.png', 'Ciuperci, kaizer, măsline kalamata', 'Ciuperci, kaizer, măsline kalamata, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, ardei copţi, aluat', '900', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Pollo', '37,90', 'img\Pizza Pollo.png', 'Piept de pui, mix branzeturi mamma mia', ' Piept de pui, mix branzeturi mamma mia (cascaval si mozzarella), sos, roșii bruschette (contin usturoi), aluat, măsline kalamata', '800', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Meniu shawarma', '31,90', 'img\Meniu shawarma.png', 'Cartofi prăjiţi, maioneză cu usturoi', ' Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '550', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Clasică Prosciutto funghi salami', '34,90', 'img\Pizza Clasică Prosciutto funghi salami.png', 'Ciuperci, salam vară, sunca de porc', ' Ciuperci, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '750', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Italian queen', '39,90', 'img\Pizza Italian queen.png', 'Ardei gras, ciuperci, măsline kalamata', ' Ardei gras, ciuperci, măsline kalamata, piept de pui, porumb, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '800', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pizza Clasică Quattro stagioni', '37,90', 'img\Pizza Clasică Quattro stagioni.png', 'Ardei gras, ciuperci, salam vară', ' Ardei gras, ciuperci, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '700', '1');
INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Pui vienez', '34,90', 'img\Pui vienez.png', 'Ceapă albă, ciuperci, piept de pui', 'Ceapă albă, ciuperci, piept de pui, smântână, cartofi, mix branzeturi mamma mia (cascaval si mozzarella)', '400', '1');

-- //tabels MammaMia

INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '1');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '2');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '3');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '4');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '5');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '6');

-- INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`, `viewOrderStatus`, `callWaiterStatus`, `requestBillStatus`) VALUES (NULL, '2', '1', '0', '0', '0');
--
-- INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`, `viewOrderStatus`, `callWaiterStatus`, `requestBillStatus`) VALUES (NULL, '3', '1', '0', '0', '0');



INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '7', 'Pasta'); 
INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '6', 'Pork'); 
INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '3', 'Chicken'); 