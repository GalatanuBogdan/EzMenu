CREATE TABLE restaurant (
    ID int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64)
);

CREATE TABLE restaurant_table(
	ID int PRIMARY KEY AUTO_INCREMENT,
	tableLocalID int
);

CREATE TABLE product(
	ID int PRIMARY KEY AUTO_INCREMENT,
	restaurantID int,
    title VARCHAR(64),
    price FLOAT,
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

CREATE TABLE allergens(
	ID int PRIMARY KEY AUTO_INCREMENT,
	productID int,
    name VARCHAR(64),
	FOREIGN KEY (productID) REFERENCES product(ID)
);

-- INSERT INTO `product` (`ID`, `restaurantID`, `title`, `price`, `description`, `cantity`, `disponibility`) VALUES ('1', '1', 'Crispy la lipie', '25', 'Extra sos si mai putini castraveti', '540', '1'); 