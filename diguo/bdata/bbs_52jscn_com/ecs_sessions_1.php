<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('16362156edc538fceb41bcc8349ec4ec','1474900135','12','0','127.0.0.1','52jscn','1','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1474870421\";s:7:\"last_ip\";s:9:\"127.0.0.1\";}');");
E_D("replace into `ecs_sessions` values('b86602dc1f9957fd72db84cbe1deec47','1474901735','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1474872935;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('acab008885172748302385a3594d3ba7','1474899374','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1474870560;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('9fed52d54715ef1f3861fd6f487ece1c','1474899340','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1474870418;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('46721329d8e33048f0580e244d57e9ff','1474900045','12','0','127.0.0.1','52jscn','1','1.00','0','');");
E_D("replace into `ecs_sessions` values('3de26c5971dc0edb2446d62e5263dde6','1474900146','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>