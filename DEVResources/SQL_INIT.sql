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
     categories JSON,
     allergens JSON,
      FOREIGN KEY (restaurantID) REFERENCES restaurant(ID)
);


CREATE TABLE categories(
    ID int PRIMARY KEY AUTO_INCREMENT,
     restaurantID int,
     name VARCHAR(64),
     FOREIGN KEY (restaurantID) REFERENCES restaurant(ID)
);

create table allergens(
    id integer primary key auto_increment,
     name varchar(64)
);

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia");
INSERT INTO `restaurant` (`name`) VALUES ("Take & Eat");

-- products with categories and allergens
INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Crispy la lipie', '31,90', 'img\productDummyImg.png', 'Cartofi prăjiţi, maioneză cu usturoi', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '550', '1',"[7]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Shawarma sandwich F.G.', '24,90', 'img\Shawarma sandwich F.G..png', 'Cartofi prăjiţi, lipie, salată de varză', 'Cartofi prăjiţi, lipie, salată de varză, piept de pui uşor picant, castraveti in otet, sos cocktail', '450', '1',"[7]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Clasică Full meat', '40,90', 'img\Pizza Clasică Full meat.png', 'Kaizer, piept de pui, salam demisec', 'Kaizer, piept de pui, salam demisec, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '900', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Clasică Mamma mia', '41,90', 'img\Pizza Clasică Mamma mia.png', 'Ardei gras, piept de pui, salam demisec', 'Ardei gras, piept de pui, salam demisec, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat, măsline kalamata', '800', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Spaghetti Carbonara', '30.90', 'img\Spaghetti Carbonara.png', 'Smântână, spaghetti, kaiser', 'Smântână, spaghetti, kaiser, specialitate de branza tare ', '400', '1',"[6]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Meniu burger Mammamia', '35,90', 'img\Meniu burger Mammamia.png', 'Carne de vită, cartofi prăjiţi', 'Carne de vită, cartofi prăjiţi, sos barbeque, kaiser, mix de salate, castraveti in otet, chifla, branza gouda, sos tartar ', '580', '1',"[3]","[1,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Meniu snitel de pui', '31,90', 'img\Meniu snitel de pui.png', 'Cartofi prăjiţi, maioneză cu usturoi', ' Cartofi prăjiţi, maioneză cu usturoi, ouă, pesmet, piept de pui, salata coleslaw', '550', '1',"[7]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Crispy sandwich F.G.', '23,90', 'img\Crispy sandwich F.G..png', 'Cartofi prăjiţi, lipie, piept de pui', ' Cartofi prăjiţi, lipie, piept de pui uşor picant, castraveti in otet, sos cocktail', '400', '1',"[7]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Clasică Specialitatea casei', '36.90', 'img\Pizza Clasică Specialitatea casei.png', 'Ciuperci, kaizer, măsline kalamata', 'Ciuperci, kaizer, măsline kalamata, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, ardei copţi, aluat', '900', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Pollo', '37,90', 'img\Pizza Pollo.png', 'Piept de pui, mix branzeturi mamma mia', ' Piept de pui, mix branzeturi mamma mia (cascaval si mozzarella), sos, roșii bruschette (contin usturoi), aluat, măsline kalamata', '800', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Meniu shawarma', '31,90', 'img\Meniu shawarma.png', 'Cartofi prăjiţi, maioneză cu usturoi', ' Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '550', '1',"[7]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Clasică Prosciutto funghi salami', '34,90', 'img\Pizza Clasică Prosciutto funghi salami.png', 'Ciuperci, salam vară, sunca de porc', ' Ciuperci, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '750', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Italian queen', '39,90', 'img\Pizza Italian queen.png', 'Ardei gras, ciuperci, măsline kalamata', ' Ardei gras, ciuperci, măsline kalamata, piept de pui, porumb, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '800', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pizza Clasică Quattro stagioni', '37,90', 'img\Pizza Clasică Quattro stagioni.png', 'Ardei gras, ciuperci, salam vară', ' Ardei gras, ciuperci, salam vară, sunca de porc, mix branzeturi mamma mia (cascaval si mozzarella), sos, aluat', '700', '1',"[30]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '1', 'Pui vienez', '34,90', 'img\Pui vienez.png', 'Ceapă albă, ciuperci, piept de pui', 'Ceapă albă, ciuperci, piept de pui, smântână, cartofi, mix branzeturi mamma mia (cascaval si mozzarella)', '400', '1',"[7]","[1]");
-- //tabels MammaMia

INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '1');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '2');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '3');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '4');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '5');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '1', '6');


INSERT INTO `allergens` (`name`) VALUE ('lapte');
INSERT INTO `allergens` (`name`) VALUE ('ou');
INSERT INTO `allergens` (`name`) VALUE ('gluten');

INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','MIC DEJUN');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','CIORBE SI SUPE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','BURGERI');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','SALATE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE DE POST/VEGANE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PASTE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE DE PUI');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE DE PORC');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE DE CURCAN');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE DE PESTE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','BUCĂTĂRIE MEXICANĂ');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PREPARATE TRADIȚIONALE');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','GARNITURI');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','SOSURI');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','DESERT');
INSERT INTO `categories` (`restaurantID`,`name`) VALUE ('1','PIZZA');

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Shaorma de pui la lipie Big', '21,00', 'img\2ShaormadepuilalipieBig.png', 'Piept de pui rotisat, cartofi pai', 'Piept de pui rotisat, cartofi pai, salata, lipie, sosuri', '500', '1',"[17,20]","[2]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Shaorma de pui la farfurie', '27,00', 'img\2Shaormadepuilafarfurie.png', 'Piept de pui rotisat, cartofi pai', 'Piept de pui rotisat, cartofi pai, salata, paine, sosuri', '500', '1',"[17,20]","[2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Crispy la lipie Big', '21,00', 'img\2CrispylalipieBig.png', 'Crispy, sos cocktail', 'Crispy, sos cocktail, salata de varza, rosii, castraveti, salata verde', '500', '1',"[17,20,23]","[]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Paste Carbonara', '27,00', 'img\2PasteCarbonara.png', 'Paste, ou', 'Paste, ou, smântână, parmezan, bacon', '450', '1',"[22]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Pizza Take & Eat 32cm', '34,00', 'img\2PizzaTake&Eat32cm.png', 'Sos pizza, mozzarella', 'Sos pizza, mozzarella, prosciutto cotto, salam milano, piept pui, ardei, porumb, ciuperci', '500', '1',"[16]","[1,2,3]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Salata crispy', '26,00', 'img\2Salatacrispy.png', 'Salata asortata, piept de pui crocant', 'Salata asortata, piept de pui crocant, masline, branza feta, cocktail dressing, crutoane', '500', '1',"[17,23]","[1]");

INSERT INTO product ( restaurantID, title, price, imageURL, previewDescription , description, cantity, disponibility,categories,allergens) VALUES ( '2', 'Pizza Capriciosa 32cm', '32,00', 'img\2PizzaCapriciosa32cm.png', 'Sos pizza, mozzarella', 'Sos pizza, mozzarella, sunca, ardei, masline, ciuperci', '500', '1',"[16]","[1,2,3]");

INSERT INTO categories (restaurantID,`name`) VALUE ('2','PIZZA');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','PREPARATE DIN PASARE');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','GRILL');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','BURGERI');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','FAST FOOD');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','SANDWICH');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','PASTE');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','SALATE APERITIV');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','PINSA');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','GARNITURI');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','SALATE DE INSOTIRE');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','SOSURI');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','DESERT');
INSERT INTO categories (restaurantID,`name`) VALUE ('2','BAUTURI');

INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '1');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '2');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '3');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '4');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '5');
INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`) VALUES (NULL, '2', '6');

