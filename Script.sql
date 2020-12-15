CREATE DATABASE surprise
DEFAULT CHARSET utf8
COLLATE utf8_bin;

USE surprise;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(20) NOT NULL UNIQUE,
    created_at datetime DEFAULT current_timestamp,
    updated_at datetime DEFAULT current_timestamp ON UPDATE current_timestamp
);

DROP TABLE IF EXISTS profile;
CREATE TABLE profile (
	user_id int UNSIGNED NOT NULL UNIQUE,
	firstname varchar(100),
	lastname varchar(100),
	gender enum('m','f'),
	birthday_at date,
	city varchar(100)
);


DROP TABLE IF EXISTS user_login;
CREATE TABLE user_login (
	user_id int UNSIGNED NOT NULL UNIQUE,
	login varchar(20) NOT NULL UNIQUE PRIMARY KEY,
	email varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    retypepassword varchar(30) NOT NULL,
    secretquestion varchar(255) NOT NULL,
    answer varchar(50) NOT NULL
);

DROP TABLE IF EXISTS user_gifts;
CREATE TABLE user_gifts (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_id int UNSIGNED NOT NULL UNIQUE,
	gift_id int UNSIGNED NOT NULL UNIQUE
);
	

DROP TABLE IF EXISTS catalogs;
CREATE TABLE catalogs (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100)
);


DROP TABLE IF EXISTS category;
CREATE TABLE category (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100)
);


DROP TABLE IF EXISTS gifts;
CREATE TABLE gifts (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100),
	category_id int UNSIGNED NOT NULL,
	catalog_id int UNSIGNED NOT NULL,
	price decimal,
	desription text,
	created_at datetime DEFAULT current_timestamp,
    updated_at datetime DEFAULT current_timestamp ON UPDATE current_timestamp	
);


DROP TABLE IF EXISTS box_gifts;
CREATE TABLE box_gifts (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100),
	gift_id int  UNSIGNED NOT NULL UNIQUE,
	desription text,
	created_at datetime DEFAULT current_timestamp,
    updated_at datetime DEFAULT current_timestamp ON UPDATE current_timestamp	
);

DROP TABLE IF EXISTS send_gift;
CREATE TABLE send_gift (
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	gift_id int  UNSIGNED NOT NULL UNIQUE,
	from_user_id int UNSIGNED NOT NULL UNIQUE,
	to_user_id int  UNSIGNED NOT NULL UNIQUE,
	sent datetime,
	received datetime
);

INSERT INTO users (username) VALUES 
('Mary'), ('Thomas'), ('Richard'), ('James'), ('Donald'), ('David'), ('Matt'), ('Jack'), ('Peter'), ('Nicholas');
INSERT INTO category (name)	VALUES ('goods'), ('services');
INSERT INTO catalogs (name)	VALUE ('new_year');
INSERT INTO gifts VALUES 
('1','quia','1','1','849830','Aperiam suscipit sapiente explicabo voluptatum ut molestiae eos.','1997-01-30 17:48:51','1973-01-06 14:38:25'),
('2','sunt','2','1','11562','Aliquam maiores quos magni.','1991-12-12 20:25:08','1996-01-23 19:39:07'),
('3','qui','1','1','55042','Qui nesciunt culpa error voluptates incidunt maxime a.','1996-03-21 00:35:00','1989-11-03 17:24:41'),
('4','sed','2','1','20935234','Quam consequuntur aperiam dolor labore ab dolorem.','1995-05-01 04:14:07','2002-09-05 09:20:34'),
('5','facere','1','1','0','Similique voluptatem incidunt nihil minus nemo.','2003-05-12 10:54:06','2017-12-26 14:55:34'),
('6','unde','2','1','0','Temporibus accusantium excepturi iusto eos.','2007-12-26 14:58:29','1978-08-18 19:00:32'),
('7','ipsum','1','1','0','Praesentium aut dolorem consectetur rerum temporibus soluta ut.','1976-09-10 18:13:10','1978-04-27 00:24:13'),
('8','exercitationem','2','1','773','Sit possimus possimus inventore quasi.','1970-01-26 04:50:08','2018-03-31 07:24:35'),
('9','quo','1','1','90','Sed illum quia sit suscipit ut consequatur necessitatibus.','2006-05-23 22:35:08','1986-10-25 03:29:54'),
('10','esse','2','1','4366','Aperiam quis modi necessitatibus reiciendis ex deserunt.','1971-03-18 11:15:41','1984-10-09 22:16:58'),
('11','et','1','1','6561592','Quam magnam quo consectetur harum.','1994-08-17 23:51:41','2012-09-09 19:00:15'),
('12','vel','2','1','6446244','Aut id sequi qui veritatis minus est.','2017-06-13 10:51:40','1984-09-22 13:31:22'),
('13','aut','1','1','1','Commodi quod odit qui et eaque qui.','2016-08-17 14:17:25','2018-06-13 04:00:31'),
('14','modi','2','1','17227479','Odit nostrum facere possimus cupiditate qui est veniam.','2012-10-02 18:25:13','1977-10-23 14:29:34'),
('15','doloribus','1','1','3107','Illo aut est asperiores.','2011-12-18 20:12:41','2013-02-23 23:15:46'),
('16','et','2','1','24','Consequuntur enim iusto doloribus architecto veniam quibusdam.','1997-01-14 19:18:12','2002-02-04 08:01:19'),
('17','nemo','1','1','134','Nostrum quibusdam temporibus aut corrupti neque vero.','2013-09-26 21:33:45','2002-03-03 21:54:57'),
('18','est','2','1','2','Eius voluptas doloremque neque culpa id.','1997-08-07 04:10:03','1996-10-24 20:57:43'),
('19','ad','1','1','4418','Provident est consequatur quia sed ullam.','1995-11-16 02:44:49','1985-10-13 11:41:29'),
('20','voluptate','2','1','1585','A assumenda inventore soluta consequatur ipsa ducimus.','2002-12-03 11:26:16','1996-10-14 02:54:35'),
('21','alias','1','1','7459607','Dignissimos est accusantium sed quas rem voluptatem repellendus.','1987-08-02 06:11:44','2011-01-24 18:05:27'),
('22','sint','2','1','51486429','Vel qui saepe molestiae omnis cumque est.','2011-10-04 21:29:21','2007-06-13 07:59:20'),
('23','temporibus','1','1','93751143','Molestias sapiente quam velit unde.','2008-06-25 19:00:30','1996-07-18 20:16:22'),
('24','qui','2','1','118','Maiores maiores voluptatem exercitationem ratione error porro.','2008-11-23 21:04:56','1981-03-02 10:21:24'),
('25','ab','1','1','5854133','Sunt iure temporibus aliquam optio tempora est accusamus.','1978-07-04 20:41:05','2000-08-13 03:16:11'),
('26','eos','2','1','3346','Quibusdam voluptatum est perferendis necessitatibus et quasi.','1972-10-15 04:44:10','1976-07-22 13:28:46'),
('27','similique','1','1','232','Iure minus omnis quis minima perspiciatis excepturi illo.','1975-10-01 19:05:05','2014-10-13 11:50:43'),
('28','sint','2','1','789','Architecto nesciunt quaerat dolores et animi iste.','1989-09-10 01:09:19','2012-07-15 14:43:27'),
('29','sint','1','1','401574095','Aut quis excepturi nihil maxime.','1999-05-03 05:03:43','2003-09-20 21:08:57'),
('30','provident','2','1','21432','Impedit laboriosam itaque vero placeat.','2004-01-03 16:40:25','2020-07-21 04:09:15'),
('31','molestiae','1','1','37163','Et repellat et et dolores et et.','2011-01-19 00:20:36','1996-11-03 14:55:34'),
('32','quos','2','1','8574569','Voluptatem totam mollitia rem quam qui.','1991-03-31 02:09:58','2002-01-22 06:47:28'),
('33','aliquam','1','1','6626845','Nobis ex quis fugiat qui.','2014-03-29 12:05:32','1974-05-28 06:56:00'),
('34','repellat','2','1','142236244','Velit ad perspiciatis blanditiis qui officiis.','1987-05-02 23:44:21','1985-11-05 20:07:16'),
('35','non','1','1','21013','Officiis tempora qui odio consequatur suscipit.','2013-03-13 05:00:46','2011-03-02 21:02:52'),
('36','voluptatem','2','1','5539264','Saepe non provident in qui corporis ut accusamus.','2000-01-01 14:40:11','1999-09-02 22:25:11'),
('37','aliquid','1','1','0','Cupiditate aliquam et pariatur distinctio.','1978-10-09 16:45:39','1982-09-21 21:58:16'),
('38','unde','2','1','3414622','A et fugit voluptatem quia corrupti ut.','1984-09-10 23:16:49','2012-06-02 15:34:13'),
('39','nobis','1','1','259858','Esse at vel dignissimos id explicabo molestiae pariatur quas.','1994-11-13 02:44:56','1977-08-27 06:28:58'),
('40','molestiae','2','1','3214379','Possimus qui fugiat aut dolore.','2020-10-05 20:02:18','2013-04-17 15:06:11'),
('41','blanditiis','1','1','81','Ipsam consequatur voluptatibus tenetur rerum minus nesciunt.','1989-06-03 09:04:26','2015-02-07 01:14:32'),
('42','quisquam','2','1','478441','Consequatur at omnis sunt.','1987-11-04 18:52:30','1983-01-24 22:01:27'),
('43','voluptates','1','1','12','Molestias commodi et sed qui rerum.','1978-11-21 16:07:15','1996-08-02 13:49:30'),
('44','autem','2','1','637673246','Enim ipsa qui qui.','2017-10-31 01:12:02','1979-02-27 03:34:54'),
('45','voluptatem','1','1','51','Est tenetur consequatur et.','2018-12-03 13:27:59','1989-10-18 14:22:38'),
('46','corporis','2','1','1588529','Officia veniam perferendis aut sunt ea est.','1982-07-22 19:15:27','1987-06-16 22:18:41'),
('47','a','1','1','42310','Et quas est ab vel fugiat quod.','1982-04-24 20:52:24','1982-06-11 01:53:39'),
('48','temporibus','2','1','1','Ullam architecto id impedit vel.','2010-06-20 02:53:35','2001-07-11 17:18:22'),
('49','ea','1','1','184906','Sit nulla quis iure.','2015-02-24 14:29:38','1999-12-18 06:48:15'),
('50','est','2','1','2','In totam necessitatibus quibusdam eum.','1981-03-11 09:00:24','2001-09-10 21:05:46'),
('51','placeat','1','1','3991122','Sint qui doloribus magnam voluptatem sequi aut.','2005-01-02 11:19:31','2009-07-12 14:49:24'),
('52','quaerat','2','1','421897','Ad nihil ut a beatae eos.','1985-08-20 07:54:17','1970-12-01 04:00:55'),
('53','ducimus','1','1','116591','Assumenda ut est non repudiandae quod.','1984-02-12 20:24:35','2011-06-04 13:54:33'),
('54','a','2','1','321','Tempore minus quo sit numquam aut magni et.','1998-10-31 12:38:13','2009-08-23 16:24:29'),
('55','et','1','1','4233','Atque eaque et voluptas nisi.','1982-06-21 23:04:19','1995-05-28 16:04:14'),
('56','consequatur','2','1','154','Sit possimus et consequatur veniam illo quisquam.','1976-04-04 01:10:20','1977-10-29 17:06:13'),
('57','non','1','1','412725319','Ad perferendis et qui sed non neque.','2009-06-11 17:46:41','2009-07-28 01:18:01'),
('58','voluptatibus','2','1','0','Qui non ea est eos quos.','1975-10-29 00:11:01','1982-02-03 04:56:21'),
('59','ut','1','1','5084','Enim nihil repudiandae quia amet.','1998-05-05 19:59:02','1974-05-13 10:42:57'),
('60','perspiciatis','2','1','0','Rerum ratione exercitationem sit nihil qui consequuntur ut omnis.','2000-09-10 00:31:17','1984-12-09 06:22:06'),
('61','culpa','1','1','1324625','Repellendus vero cum nam temporibus aut distinctio mollitia.','2020-07-08 14:31:34','1993-06-06 00:12:59'),
('62','ut','2','1','145','Non est aspernatur eum in.','2010-04-10 07:42:43','1996-05-24 10:51:13'),
('63','nihil','1','1','56','Sit esse dicta velit reiciendis architecto odio labore.','2010-03-19 14:28:10','1995-12-26 16:16:36'),
('64','voluptates','2','1','652','Sed unde maiores autem ut est sed nesciunt quasi.','2001-01-04 18:41:01','1970-08-01 04:33:34'),
('65','omnis','1','1','8281591','Nihil saepe ullam est et deserunt facilis.','1976-09-19 21:05:57','1970-03-09 00:56:41'),
('66','aut','2','1','11','Deleniti atque itaque officia expedita officiis nobis asperiores.','1993-06-10 07:29:43','1984-04-30 21:49:30'),
('67','sunt','1','1','24599674','Omnis quidem optio libero nemo ad provident.','1981-08-22 17:35:31','1971-11-07 01:52:07'),
('68','at','2','1','6859','Dignissimos voluptatem maiores sit eligendi omnis.','1991-12-09 08:09:09','1983-08-31 17:54:48'),
('69','quisquam','1','1','354109','Velit quidem ab consectetur.','2010-02-25 22:00:08','1984-03-22 22:46:29'),
('70','consequatur','2','1','308583','Nesciunt assumenda facilis animi quia iusto omnis.','1992-06-15 06:42:57','2017-07-01 18:49:13'),
('71','qui','1','1','0','Illum laborum rerum eaque tenetur voluptatem veritatis dicta.','1979-04-17 00:41:17','1979-08-03 11:16:53'),
('72','rerum','2','1','4','Vero autem unde iste id voluptatem.','1994-08-21 09:21:16','1979-10-20 02:28:37'),
('73','quae','1','1','18','In fuga earum quod officiis.','1995-11-24 10:12:16','1975-12-30 11:50:20'),
('74','similique','2','1','463','Explicabo eos vero eum voluptatibus.','1980-02-23 01:41:54','2008-03-15 02:58:34'),
('75','exercitationem','1','1','7799','Non et perspiciatis delectus tempore sunt commodi.','1975-01-30 18:47:32','1992-08-05 21:16:12'),
('76','rerum','2','1','13','Ut labore dolorem dignissimos esse aut doloremque.','1999-06-27 11:59:35','2001-05-09 15:33:39'),
('77','dolor','1','1','13779819','Sit earum non nemo voluptatum officiis inventore id.','1972-12-16 10:24:31','2017-01-19 20:57:18'),
('78','autem','2','1','6664051','Odit amet aut omnis sapiente necessitatibus ullam sed.','1988-01-16 02:40:53','1990-12-18 06:01:07'),
('79','eos','1','1','388','Distinctio voluptates id illo ipsum voluptatem explicabo earum.','1986-10-12 18:49:43','1980-03-17 00:20:27'),
('80','qui','2','1','27490','Odit nam error omnis velit blanditiis rerum.','1984-05-19 08:38:20','1981-03-06 04:15:37'),
('81','sapiente','1','1','16','Ut dolores odit voluptatum dolores sapiente sunt.','2019-09-28 08:13:09','2019-01-26 20:39:22'),
('82','est','2','1','0','Id itaque porro et eveniet.','1976-05-28 06:18:15','1977-08-16 02:02:20'),
('83','cum','1','1','21728','Qui ut qui illo rerum.','1988-09-02 20:30:35','2019-08-12 04:34:48'),
('84','quo','2','1','13650918','Ipsum delectus velit quis dolor ut atque aliquam.','2013-05-22 08:14:14','2012-10-19 21:45:48'),
('85','error','1','1','2','Vero officia repudiandae aliquam illo officiis quia.','1980-07-21 07:43:30','1990-03-12 21:47:41'),
('86','sequi','2','1','3510936','Ut maiores assumenda ipsum nihil ducimus.','2019-09-12 00:50:32','1973-08-09 01:54:52'),
('87','laboriosam','1','1','5','In consequatur fuga ut enim.','1990-03-29 21:04:48','1981-04-18 04:57:28'),
('88','cupiditate','2','1','1231623','Ipsa minus possimus sed reprehenderit harum.','1985-08-18 02:25:00','1997-03-08 22:10:22'),
('89','iusto','1','1','367563','Fugit alias cupiditate labore iusto enim.','1990-08-30 20:48:32','1973-05-31 02:29:31'),
('90','quam','2','1','4350','Eveniet et hic recusandae dolores ut ut odio.','1986-12-23 05:23:05','2010-06-03 08:02:48'),
('91','est','1','1','8546166','Iusto corporis aliquam repellendus sunt et.','1976-08-25 02:00:51','2006-01-12 16:21:52'),
('92','provident','2','1','5','Labore corrupti quaerat nulla aut vel eos sed.','2007-09-13 18:51:33','2003-03-31 22:42:13'),
('93','laborum','1','1','281337457','A quo delectus et et ipsum iusto.','1983-10-07 07:16:01','1979-03-21 16:44:52'),
('94','earum','2','1','1042850','Mollitia et ipsa qui eum.','2003-01-11 19:11:55','2010-02-16 07:37:52'),
('95','tempore','1','1','21126331','Autem mollitia aliquam natus.','1987-10-09 20:26:59','2010-08-30 12:30:10'),
('96','unde','2','1','816528843','Non officia ipsa ea sed nobis quia.','2016-06-13 09:21:40','2010-08-05 15:58:00'),
('97','voluptas','1','1','459607','Ut id et quia occaecati expedita dignissimos expedita.','1999-04-24 07:31:34','1982-06-04 18:29:35'),
('98','ad','2','1','192471445','Voluptatem amet ut omnis sapiente sunt tempore qui.','2003-02-16 03:02:46','1992-01-10 01:22:00'),
('99','maiores','1','1','194377','Veniam qui et ea earum incidunt iste.','2002-07-31 22:02:04','1999-09-14 06:16:56'),
('100','et','2','1','52033','Modi reiciendis pariatur beatae sed quidem.','2008-01-16 15:26:31','1990-07-11 00:42:19'),	
('101','Pistol', 1, 1, 1000, 'deadly weapon','2008-01-16 15:26:31','1990-07-11 00:42:19'),
('102','Robot', 1, 1, 2000, 'iron machine','2008-01-16 15:26:31','1990-07-11 00:42:19'),
('103','Ticket', 2, 1, 1500, 'on football','2008-01-16 15:26:31','1990-07-11 00:42:19'),
('104','Subscription', 2, 1, 500, 'on twich','2008-01-16 15:26:31','1990-07-11 00:42:19'),
('105','Generator', 2, 1, 9999, 'for DB MySQL','2008-01-16 15:26:31','1990-07-11 00:42:19');





