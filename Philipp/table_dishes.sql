/*

CREATE DATABASE `crud_example`;
CREATE  TABLE `crud_example`.`products` (
  `id`  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL ,
  `price` DECIMAL(13,2) NOT  NULL,
  `picture` VARCHAR(255)  NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

*/

--create database restaurant;

create table dishes(
    dish_id int primary key auto_increment,
    name varchar(255) not null,
    price decimal(13,2) unsigned not null,
    image varchar(255) not null
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;
;
insert into dishes values
(default, "Bun", 6, "https://preview.redd.it/rqe1orquyia91.jpg?width=640&crop=smart&auto=webp&s=6740612566eda2efbd253efa2c0729f50d6154a5"),
(default, "Chocolate", 5, "https://external-preview.redd.it/PdzaVgxsMndSqDKJacsszftET7ycwtE9iCQ4IpzELzM.jpg?width=960&crop=smart&auto=webp&s=22f5848fdb2bd4401695467f4b4a9e281228d0a3"),
(default, "Fries", 6, "https://external-preview.redd.it/2rzuwXf9JAEsyVdK1xV5snQxEvsP7jlg9Nz-lqeil9o.jpg?width=960&crop=smart&auto=webp&s=5d3fb018c43a4209086f72612ddce8033e5ab2c8")
;