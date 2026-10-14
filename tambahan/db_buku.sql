
CREATE DATABASE `fpw_inf_buku`;

USE `fpw_inf_buku`;

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT 0,
  `genre_id` char(3) NOT NULL DEFAULT '',
  `author` varchar(100) NOT NULL DEFAULT '',
  `tahun` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4;

/*Data for the table `book` */

insert  into `book`(`id`,`title`,`price`,`genre_id`,`author`,`tahun`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'STTS Song',71234,'G01','Budiman',0,NULL,NULL,NULL),
(2,'A Guide to the Project Managements',39.99,'G01','Project Management Institute',2004,NULL,NULL,NULL),
(3,'A Whole New Mind: Moving from the Information Age',17.49,'G01','Kenneth H. P.',2005,NULL,NULL,NULL),
(4,'Better: A Surgeon\'s Notes on Performance',16.47,'G01','Atul Gawande',2008,NULL,NULL,NULL),
(5,'Bird Songs: 250 North American Birds in Song',29.7,'G01','Les Beletsky',2006,NULL,NULL,NULL),
(6,'Blink: The Power of Thinking Without Thinking',10.87,'G01','Malcolm Gladwell',2007,NULL,NULL,NULL),
(7,'Blue Ocean Strategy: How to Create Uncontested',19.77,'G01','W. Chan Kim',2005,NULL,NULL,NULL),
(8,'Bonk: The Curious Coupling of Science and Sex',14.97,'G01','Mary Roach',2008,NULL,NULL,NULL),
(9,'Brain Rules: 12 Principles for Surviving',19.77,'G01','John Medina',2008,NULL,NULL,NULL),
(10,'Buried in Treasures: Help for Compulsive Acquiring',16.95,'G01','David F. T.',2007,NULL,NULL,NULL),
(11,'Change Your Brain',17.95,'G01','Daniel G. A.',1998,NULL,NULL,NULL),
(12,'Climate Confusion',14.93,'G01','Roy Spencer',2008,NULL,NULL,NULL),
(13,'Common Wealth: Economics for a Crowded Planet',26.37,'G01','Jeffrey D. Sachs',2008,NULL,NULL,NULL),
(14,'Confessions of an Economic Hit Man',10.2,'G01','John Perkins',2005,NULL,NULL,NULL),
(15,'Cradle to Cradle: Remaking the Way We Make Things',18.15,'G01','William McDonough',2002,NULL,NULL,NULL),
(16,'Crash Proof: How to Profit',18.45,'G01','Peter D. S.',2007,NULL,NULL,NULL),
(17,'Creating a World Without Poverty: Social Business',17.16,'G01','Muhammad Yunus',2008,NULL,NULL,NULL),
(18,'Debt Cures They Do not Want You to Know About',17.13,'G01','Kevin Trudeau',2008,NULL,NULL,NULL),
(19,'Diagnostic and Statistical Manual of Mental',75.6,'G01','American Psychiatric',2000,NULL,NULL,NULL),
(20,'DRIVEN TO DISTRACTION: Recognizing',18.6,'G01','Edward M. H.',1994,NULL,NULL,NULL),
(21,'Earth: The Sequel: The Race to Reinvent Energy',16.47,'G01','Fred Krupp',2008,NULL,NULL,NULL),
(22,'to Live: The Revolutionary Formula for Fast',16.31,'G01','Joel Fuhrman',2003,NULL,NULL,NULL),
(23,'Economic Facts and Fallacies',17.16,'G01','Thomas Sowell',2007,NULL,NULL,NULL),
(24,'Einstein: His Life and Universe',12.21,'G01','Walter Isaacson',2008,NULL,NULL,NULL),
(25,'Emotional Intelligence: 10th Anniversary Edition',18.48,'G01','Daniel Goleman',2006,NULL,NULL,NULL),
(26,'Execution: The Discipline of Getting Things Done',18.15,'G01','Larry Bossidy',2002,NULL,NULL,NULL),
(27,'FairTax: The Truth: Answering the Critics',10.17,'G01','Neal Boortz',2008,NULL,NULL,NULL),
(28,'Fast Food Nation',17.16,'G01','Eric Schlosser',2001,NULL,NULL,NULL),
(29,'First Aid for the USMLE Step 1',40.46,'G01','Tao Le',2007,NULL,NULL,NULL),
(30,'First, Break All the Rules',19.8,'G02','Marcus Buckingham',1999,NULL,NULL,NULL),
(31,'Fish [SPANISH]',12.89,'G02','Stephen C. L.',2002,NULL,NULL,NULL),
(32,'Free Lunch: How the Wealthiest Americans',16.47,'G02','David Cay J.',2007,NULL,NULL,NULL),
(33,'From Belly Fat to Belly Flat',14.95,'G02','C.W. Randolph M.D.',2007,NULL,NULL,NULL),
(34,'Getting to Yes: Negotiating Agreement',10.2,'G02','Roger Fisher',1991,NULL,NULL,NULL),
(35,'Go Green, Live Rich',8.97,'G02','David Bach',2008,NULL,NULL,NULL),
(36,'Good to Great and the Social Sectors: A Monograph',9.56,'G02','Jim Collins',2005,NULL,NULL,NULL),
(37,'Good to Great: Why Some Companies Make the Leap',16.5,'G02','Jim Collins',2001,NULL,NULL,NULL),
(38,'Greenspan\'s Bubbles: The Age of Ignorance',14.93,'G02','William F.',2008,NULL,NULL,NULL),
(39,'Gusher of Lies: The Dangerous Delusions of Energy',17.79,'G02','Robert Bryce',2008,NULL,NULL,NULL),
(40,'Harrison\'s Principles of Internal Medicine',159.2,'G02','Anthony S. Fauci',2008,NULL,NULL,NULL),
(41,'Here Comes Everybody: The Power of Organizing',17.13,'G02','Clay Shirky',2008,NULL,NULL,NULL),
(42,'How Doctors Think',10.85,'G02','Jerome Groopman',2008,NULL,NULL,NULL),
(43,'How Come That Idiot\'s Rich and I\'m Not?',16.47,'G02','Robert Shemin',2008,NULL,NULL,NULL),
(44,'Influence: The Psychology of Persuasion',12.21,'G02','Robert B. C.',2006,NULL,NULL,NULL),
(45,'I: Reality and Subjectivity',18.95,'G02','Dr. David R. Hawkins M.D. Ph.D',1980,NULL,NULL,NULL),
(46,'I.',18,'G02','Stephen Dixon',1981,NULL,NULL,NULL),
(47,'I Read It, but I Do not Get It: Comprehension Stra',19.5,'G02','Cris Tovani',1982,NULL,NULL,NULL),
(48,'101 Things I Learned in Architecture School',12.95,'G02','Matthew Frederick',1983,NULL,NULL,NULL),
(49,'How I Raised Myself from Failure to Success',14,'G02','Frank Bettger',1992,NULL,NULL,NULL),
(50,'I Do not Know What I Want, But I Know',15,'G02','Julie Jansen',2003,NULL,NULL,NULL),
(51,'I am Chocolate, You are Vanilla: Raising Healthy',15.95,'G02','Marguerite Wright',2000,NULL,NULL,NULL),
(52,'I Love a Cop, Revised Edition: What Police',16.95,'G02','Ellen Kirschman',2006,NULL,NULL,NULL),
(53,'The Last Time I Wore a Dress',16.95,'G02','Daphne Scholinski',1997,NULL,NULL,NULL),
(54,'I Spy Little Numbers (I Spy)',16.95,'G02','Jean Marzoll0',1999,NULL,NULL,NULL),
(55,'21 Things I Wish My Broker Had Told Me,: Practical',17.63,'G02','Frank Cook',2007,NULL,NULL,NULL),
(56,'i before e (except after c)',14.95,'G02','Parkinson Judy',2008,NULL,NULL,NULL),
(57,'I Will Carry the Fork! Recovering a Life',16.95,'G02','Kara L. Swanson',1999,NULL,NULL,NULL),
(58,'Basic Books',22.95,'G02','Daniel C. Dennett',2001,NULL,NULL,NULL),
(59,'Where Did I Leave My Glasses?',22.99,'G02','Martha Lear',2008,NULL,NULL,NULL),
(60,'The Jesus I Never Knew',12.99,'G03','Martha Lear',1996,NULL,NULL,NULL),
(61,'McGraw-Hill PRAXIS I and II, 2nd Ed.',19.95,'G03','Laurie Rozakis',2007,NULL,NULL,NULL),
(62,'I Did not See It Coming: The Only Book',24.95,'G03','Nancy C. Widmann',2007,NULL,NULL,NULL),
(63,'Now I Get It: Strategies for Building Confident',24.5,'G03','Susan O Connell',2005,NULL,NULL,NULL),
(64,'I Will Take Learning for 500: Using Game Shows',40,'G03','Dan Yaman',2006,NULL,NULL,NULL),
(65,'What Do I Say?: Talking with Patients about Spirit',29.95,'G03','Elizabeth Johnston-Taylor',2007,NULL,NULL,NULL),
(66,'You are Not The Person I Hired!: A CEO Survival',36.99,'G03','Janet Boydell',2005,NULL,NULL,NULL),
(67,'The I-Search Paper: Revised Edition of Searching',30,'G03','Ken Macrorie',1988,NULL,NULL,NULL),
(68,'Teach Me - I Dare You!',29.95,'G03','Judith Allen Brough',2006,NULL,NULL,NULL),
(69,'Who Am I in the Lives of Children?',14.46,'G03','Stephanie Feeney',2000,NULL,NULL,NULL),
(70,'I Like the World to Buy a Coke: The Life',23.5,'G03','David Greising',1999,NULL,NULL,NULL),
(71,'The Best I.T. Sales & Marketing BOOK EVER!',149.9,'G03','Erick Simpson',2007,NULL,NULL,NULL),
(72,'Should I Be Tested for Cancer?: Maybe Not and Here',12.95,'G03','H. Gilbert Welch M.D. M.P.H.',2006,NULL,NULL,NULL),
(73,'Louis I. Kahn: 1901-1974: Enlightened Space',9.99,'G03','Joseph Rosa',2006,NULL,NULL,NULL),
(74,'Literature Guide: Jacob Have I Loved (Grades 4-8)',6.99,'G03','Katherine Paterson',1999,NULL,NULL,NULL),
(75,'Zero to One Million: How I Built A Company to $1 M',16.95,'G03','Ryan P. Allis',2008,NULL,NULL,NULL),
(76,'Nothing Personal Doc, But I Hate Dentists!',10.2,'G03','McHenry Lee',1999,NULL,NULL,NULL),
(77,'My Name is Chellis and I am in Recovery',17.95,'G03','Chellis Glendinning',2007,NULL,NULL,NULL),
(78,'Trump: The Best Real Estate Advice I Ever Received',19.99,'G03','Donald J. Trump',2006,NULL,NULL,NULL),
(79,'Real Science-4-Kids Chemistry Pre-Level I Teacher',23.95,'G03','R. W. Keller',2005,NULL,NULL,NULL),
(80,'Leadership Gold: Lessons I Have Learned',25.99,'G03','John C. Maxwell',2008,NULL,NULL,NULL),
(81,'Learning American Sign Language: Levels I & II',56.99,'G03','Tom L. Humphries',2004,NULL,NULL,NULL),
(82,'Mathematical Methods of Classical Mechanics',64.95,'G03','V. I. Arnold',1997,NULL,NULL,NULL),
(83,'Just What I Said: Bloomberg Economics Columnist',19.95,'G03','Caroline Baum',2005,NULL,NULL,NULL),
(84,'Sprout!: Everything I Need to Know about Sales',19.95,'G03','Alan A. Vengel',2004,NULL,NULL,NULL),
(85,'Karim Rashid: I Want to Change the World',45,'G03','Karim Rashid',2001,NULL,NULL,NULL),
(86,'United States Foreign Oil Policy Since World War I',65,'G03','Stephen J. Randall',2001,NULL,NULL,NULL),
(87,'Little Britches: Father and I Were Ranchers',14.95,'G03','Ralph Moody',1991,NULL,NULL,NULL),
(88,'Should I Home School?: How to Decide',0.94,'G03','Elizabeth Guignard Hamilton',1997,NULL,NULL,NULL),
(89,'Pocket Handbook of Clinical Psychiatry',0.4,'G03','Harold I. Kaplan',1996,NULL,NULL,NULL),
(90,'PLEASE DO NOT JUST DO WHAT I TELL YOU,',17.95,'G04','Bob Nelson',2001,NULL,NULL,NULL),
(91,'Reinventing the Warehouse',0.01,'G04','Roy L. Harmon',1993,NULL,NULL,NULL),
(92,'The Phoenix Effect: 9 Revitalizing Strategies',26.37,'G04','Carter Pate',2002,NULL,NULL,NULL),
(93,'Why Good Girls Do not Get Ahead...',11.19,'G04','Kate White',1996,NULL,NULL,NULL),
(94,'God in the Machine: What Robots Teach Us',1,'G04','Anne Foerst',2005,NULL,NULL,NULL),
(95,'Kids Paper Airplane Book',10.36,'G04','Ken Blackburn',1996,NULL,NULL,NULL),
(96,'The Professional Chef, 8th Edition',44.1,'G04','The Culinary Institute of Amer',2006,NULL,NULL,NULL),
(97,'Adobe Flash CS3 Professional Hands-On Training',31.49,'G04','Todd Perkins',2007,NULL,'2020-10-15 13:28:17','2020-10-15 13:28:17'),
(98,'Professional No-Limit Hold em: Volume I',19.77,'G04','Matt Flynn',2007,NULL,NULL,NULL),
(99,'contoh1',111,'G02','auth1',1111,NULL,'2020-10-15 13:28:21',NULL);

/*Table structure for table `genre` */

DROP TABLE IF EXISTS `genre`;

CREATE TABLE `genre` (
  `genre_id` char(5) NOT NULL,
  `genre_nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `genre` */

insert  into `genre`(`genre_id`,`genre_nama`) values 
('G01','HOROR'),
('G02','ADVENTURE'),
('G03','ROMANCE'),
('G04','HISTORY'),
('G05','TESTING'),
('G06','Scottie Huel MD'),
('G07','Mr. Caden Cremin DDS'),
('G08','Marielle Bruen V'),
('G09','Mr. Arvid Gottlieb'),
('G10','Rosemarie Maggio'),
('G11','Gideon Skiles I'),
('G12','Prof. Richmond Bogan'),
('G13','Efren Schamberger'),
('G14','Damaris Bartoletti'),
('G15','Fletcher Bednar MD'),
('G16','Dr. Autumn Gleichner DDS');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2020_10_26_092547_create_pengguna_table',1);

/*Table structure for table `toko` */

DROP TABLE IF EXISTS `toko`;

CREATE TABLE `toko` (
  `toko_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `toko_nama` varchar(255) DEFAULT NULL,
  `toko_kota` varchar(255) DEFAULT NULL,
  `toko_owner` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`toko_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `toko` */

insert  into `toko`(`toko_id`,`toko_nama`,`toko_kota`,`toko_owner`) values 
(1,'Toko Buku Sumber Pintar','Surabaya','evan'),
(2,'Toko Buku Pokoke Lulus','Jakarta','mimi'),
(3,'Toko Buku Dicampur Air Hangat Diminum','Jogjakarta','rian');

/*Table structure for table `toko_book` */

DROP TABLE IF EXISTS `toko_book`;

CREATE TABLE `toko_book` (
  `tb_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `toko_id` int(11) DEFAULT NULL,
  `tb_stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`tb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `toko_book` */

insert  into `toko_book`(`tb_id`,`book_id`,`toko_id`,`tb_stok`) values 
(1,1,1,100),
(2,5,1,77),
(3,1,3,33),
(4,10,1,NULL),
(5,10,2,NULL),
(6,10,3,NULL),
(7,5,2,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`username`,`password`,`nama`,`email`,`role`,`remember_token`) values 
('admin','$2y$10$d.4J.XS32dxBLpkkssT.jO.U5ytS7QmkBNZ7vHIRiEPgBz/MuBIOq','admin','admin@gmail.com',0,NULL),
('evan','$2y$10$88TbiGa/x3UWH5ZaH33tQ.J2jm0s4XhYx2BmToxKgoP5X86VPVNHW','evan','evan@gmail.com',1,NULL),
('mimi','$2y$10$PxaZjHpboZVmPByZ.CZVPesgtRK.0lE8JB49prBcj.i3O2wCDyCAu','mimi','mimi@gmail.com',1,NULL),
('rian','$2y$10$5bVkGxSWUX9pBXg4jQQ/V.dITui2RA3a2906PQjBn2JtDmAfgKpZO','rian','rian@gmail.com',1,NULL);