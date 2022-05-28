CREATE TABLE restaurant (
    ID int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64)
);

CREATE TABLE restaurant_table(
	ID int PRIMARY KEY AUTO_INCREMENT,
	restaurantID int,
	tableNumber int,
	viewOrderStatus int,
	callWaiterStatus int,
	requestBillStatus int,
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

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia1");

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia2");

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia3");

INSERT INTO `restaurant` (`name`) VALUES ("MammaMia4");

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1');

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1'); 

INSERT INTO `product` ( `restaurantID`, `title`, `price`, `imageURL`, `previewDescription` , `description`, `cantity`, `disponibility`) VALUES ( '1', 'Crispy la lipie', '25', 'img\productDummyImg.png', 'Cartofi, piept de pui, salata', 'Cartofi prăjiţi, maioneză cu usturoi, piept de pui uşor picant, salata coleslaw', '540', '1');


INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`, `viewOrderStatus`, `callWaiterStatus`, `requestBillStatus`) VALUES (NULL, '1', '1', '0', '0', '0'); 

INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`, `viewOrderStatus`, `callWaiterStatus`, `requestBillStatus`) VALUES (NULL, '2', '1', '0', '0', '0'); 

INSERT INTO `restaurant_table` (`ID`, `restaurantID`, `tableNumber`, `viewOrderStatus`, `callWaiterStatus`, `requestBillStatus`) VALUES (NULL, '3', '1', '0', '0', '0'); 



INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '7', 'Pasta'); 
INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '6', 'Pork'); 
INSERT INTO `categories` (`ID`, `productID`, `name`) VALUES (NULL, '3', 'Chicken'); 