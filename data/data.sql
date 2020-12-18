DROP TABLE IF EXISTS `dinosaur`;

CREATE TABLE `dinosaur` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `gender` VARCHAR(6) NOT NULL,
  `age` INT NOT NULL,
  `race` VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `firstName` VARCHAR(255) NOT NULL,
  `lastName` VARCHAR(255) NOT NULL
);

INSERT INTO `dinosaur` (name, gender, age, race) VALUES
  ("Callie", "Female", 34, "Tyrannosaurus"),
  ("Sebastian", "Male", 25, "Triceratops"),
  ("Natalia", "Female", 3, "Pterodactyl"),
  ("Dakota", "Male", 37, "Pterodactyl")
;

INSERT INTO `user` (email, password, firstName, lastName) VALUES
  ("edgar@knplabs.com", "I<3dinos", "Edgar", "KNP"),
  ("denver@knplabs.com", "D3nv3r", "Denver", "The last dinosaur")
;
