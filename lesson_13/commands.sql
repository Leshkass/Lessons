CREATE DATABASE `Shop`;
use Shop;

CREATE TABLE IF NOT EXISTS `grocery`(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT
    `name_product` CHAR(100) NOT NULL,
    `price` TINYINT UNSIGNED NOT NULL,
    `weight` TINYINT UNSIGNED NOT NULL,
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB CHARACTER SET utf8;


CREATE TABLE IF NOT EXISTS `things`(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name_clothes` CHAR(100) NOT NULL,
    `size` ENUM('XL','XXL','XXXL'),
    `gender` ENUM('male', 'female'),
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB CHARACTER SET utf8;


CREATE TABLE IF NOT EXISTS `Testnig`(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name_product` CHAR(100) NOT NULL,
    `price` TINYINT UNSIGNED NOT NULL,
    `weight` TINYINT UNSIGNED NOT NULL,
    `deleted_at` TIMESTAMP DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB CHARACTER SET utf8;

INSERT INTO `things`(`name_clothes`,`size`,`gender`) VALUES ('sweater','XL','female');
INSERT INTO `things`(`name_clothes`,`size`,`gender`) VALUES ('shirt','XXL','male');
INSERT INTO `things`(`name_clothes`,`size`,`gender`) VALUES ('jacket','XL','female');


INSERT INTO `grocery`(`name_product`, `price`, `weight`) VALUES ('buckwheat',35,3),('potato',25,9), ('tomato',12,7);


select * from things;
select `name_product` from `grocery`;
select `size` from things;
select `name_product`, `price` from grocery;
select `name_product` from grocery where `price` > 20;

alter table `things` add `price` TINYINT UNSIGNED NOT NULL;

select * from `grocery` where `price` > 20 and `weight` < 10;

update `grocery` set `price` = 30 where `id` = 2;

delete from `things` where `id` = 1;

insert into `things`(`name_clothes`,`size`,`gender`, `price`) VALUES ('jacket','XL','female',120),('socks','XXL','male',45);

update `things` set `price` = 100 where `name_clothes` = 'socks';

delete from `things` where `price` > 400 or `gender` = 'female';

drop table `Testinggg`;
use Shop;
drop table `Testnig`;

alter table `NewTable` change `name_product` `product` char(100) not null;