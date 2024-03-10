<?php

declare(strict_types=1);

define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_NAME', 'Shop');
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

try {
    $dsn = 'mysql:host='. DB_HOST .';port='. DB_PORT .';dbname='. DB_NAME .';charset='. DB_CHARSET ;

    $connect = new PDO($dsn,DB_USER,DB_PASSWORD);

//    $id = 9;
//    $query = "SELECT * FROM `things` WHERE `id`= :id";
//    $stmt = $connect->prepare($query);
//    $stmt->bindParam('id',$id);
//    $stmt->execute();
//    echo "<pre>";
//    print_r($stmt->fetchAll());
//    echo "<pre>";


//    $query = "CREATE TABLE IF NOT EXISTS `NewTable`(
//        `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
//        `name_product` CHAR(100) NOT NULL,
//        `price` TINYINT UNSIGNED NOT NULL,
//        `weight` TINYINT UNSIGNED NOT NULL,
//        `deleted_at` TIMESTAMP DEFAULT NULL,
//        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//        ) ENGINE=InnoDB CHARACTER SET utf8";
//    $connect->prepare($query);
//    $stmt = $connect->query($query)->execute([]);


//    $product = 'oil';
//    $price = 25;
//    $weight = 35;
//
//    $query = "INSERT INTO `NewTable`(`product`,`price`, `weight`) VALUES (:product,:price,:weight)";
//
//    $query = $connect->prepare($query);
//    $stmt = $query->bindParam('product',$product);
//    $stmt = $query->bindParam('price',$price);
//    $stmt = $query->bindParam('weight',$weight);
//    $query->execute();


//    $price = 23;
//    $id = 2;
//    $weight = 98;
//    $query = "UPDATE `NewTable` set `price` = :price, `weight` = :weight where `id` = :id;";
//
//    $query = $connect->prepare($query);
//    $stmt = $query->bindParam('price', $price);
//    $stmt = $query->bindParam('id', $id);
//    $stmt = $query->bindParam('weight', $weight);
//    $stmt = $query->execute();


    $price = 64;
    $weight = 98;

    $query = "DELETE FROM `NewTable` where `price` > :price or `weight` = :weight";

    $query = $connect->prepare($query);
    $stmt = $query->bindParam('price', $price);
    $stmt = $query->bindParam('weight', $weight);
    $stmt = $query->execute();




} catch (PDOException $error){

    echo $error->getMessage();
}



