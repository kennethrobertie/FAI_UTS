CREATE DATABASE `fpw_inf_supp`;

USE `fpw_inf_supp`;

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `supp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supp_username` varchar(255) DEFAULT NULL,
  `supp_password` text DEFAULT NULL,
  `supp_nama` varchar(255) DEFAULT NULL,
  `supp_email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`supp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

insert  into `supplier`(`supp_id`,`supp_username`,`supp_password`,`supp_nama`,`supp_email`,`remember_token`) values 
(1,'supp1','$2y$10$BWUqxUNUdvyYM8skiclcqOdsCu7KMsSiz1Lg9LdyJDpXfArRxiz.m','supp1','supp1@gmail.com',NULL),
(2,'supp2','$2y$10$x041diz685DG926BqtlLXOd7dhlTE2DjX2hbVkG3NEIeOus6plvyO','supp2','supp2@gmail.com',NULL),
(3,'supp3','$2y$10$.qI.x7ELIE1wsb1PijCSxuHhpY8X1OqQ0SsRi6eIzJfVd5ElQ4uVu','supp3','supp3@gmail.com',NULL),
(4,'supp4','$2y$10$JA6MYtDOdbd6SuDXfDvUseG8KHibvieXGv4Gnrqxvns4NO0bJH90O','supp4','supp4@gmail.com',NULL),
(5,'supp5','$2y$10$mj80XUgam5OSyHPzXLTezett9h61KU0WC.QA34owEbHZSdXh63wT.','supp5','supp5@gmail.com',NULL);