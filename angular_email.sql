CREATE TABLE `header` (
  `h_id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `info1` varchar(200) NOT NULL,
  `info2` text NOT NULL,
  `info3` varchar(200) NOT NULL,
  `footer1` text NOT NULL,
  `footer2` text NOT NULL,
   PRIMARY KEY (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `header` (`h_id`, `title`, `info1`, `info2`, `info3` , `footer1`, `footer2`)
VALUES ('1', 'Launch<strong>.</strong>', 'We Are Coming Very Soon!', 'Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>', 'Notify me when its ready', '&copy; 2016 Free HTML5. All Rights Reserved.', 'Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>');

CREATE TABLE `social1` (
  `s1_id` int(15) NOT NULL AUTO_INCREMENT,
  `s1_link` varchar(200) NOT NULL,
  `s1_icons` varchar(200) NOT NULL,
   PRIMARY KEY (`s1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `social1` (`s1_id`, `s1_link`, `s1_icons`) VALUES ('1', '#', 'icon-twitter-with-circle');
INSERT INTO `social1` (`s1_id`, `s1_link`, `s1_icons`) VALUES ('2', '#', 'icon-facebook-with-circle');
INSERT INTO `social1` (`s1_id`, `s1_link`, `s1_icons`) VALUES ('3', '#', 'icon-linkedin-with-circle');
INSERT INTO `social1` (`s1_id`, `s1_link`, `s1_icons`) VALUES ('4', '#', 'icon-dribbble-with-circle');


CREATE TABLE `social2` (
  `s2_id` int(15) NOT NULL AUTO_INCREMENT,
  `s2_link` varchar(200) NOT NULL,
  `s2_icons` varchar(200) NOT NULL,
   PRIMARY KEY (`s2_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `social2` (`s2_id`, `s2_link`, `s2_icons`) VALUES ('1', '#', 'icon-twitter-with-circle');
INSERT INTO `social2` (`s2_id`, `s2_link`, `s2_icons`) VALUES ('2', '#', 'icon-facebook-with-circle');
INSERT INTO `social2` (`s2_id`, `s2_link`, `s2_icons`) VALUES ('3', '#', 'icon-linkedin-with-circle');
INSERT INTO `social2` (`s2_id`, `s2_link`, `s2_icons`) VALUES ('4', '#', 'icon-dribbble-with-circle');


CREATE TABLE `duedate` (
  `d_id` int(15) NOT NULL AUTO_INCREMENT,
  `year` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
   PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `duedate` (`d_id`, `year`, `month`, `day`) VALUES ('1', '2019', '01', '01');

CREATE TABLE `images` (
  `im_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
   PRIMARY KEY (`im_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `images` (`im_id`, `name`) VALUES ('1', 'img_bg_1.jpg');

CREATE TABLE `admin` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
   PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`) VALUES (1, 'angular', 'password');

CREATE TABLE `email_list` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `schedule` (
  `e_id` int(15) NOT NULL AUTO_INCREMENT,
  `event_name` text NOT NULL,
  `datepicker` date NOT NULL,
   PRIMARY KEY (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
