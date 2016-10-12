<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','46','泰迪贵宾训犬零食三明治400g','ECS000046','0','1','38.40','28.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('2','2','10','边境狗粮专用粮10kg','ECS000010','0','1','105.60','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('3','3','11','泰迪金毛博美宠物零食鸡肉磨牙零食','ECS000011','0','1','31.20','26.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('4','4','10','边境狗粮专用粮10kg','ECS000010','0','1','105.60','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('5','5','48','奶糕贵宾幼犬狗粮小型犬泰迪博美比熊专用','ECS000048','0','1','126.00','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','6','9','麦顿狗粮金典天然粮10kg金毛萨摩德牧大型犬','ECS000009','0','1','201.60','168.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('7','7','47','蓓味佳猫粮通用型三文鱼成猫猫粮','ECS000047','0','1','156.00','108.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('8','8','47','蓓味佳猫粮通用型三文鱼成猫猫粮','ECS000047','0','1','156.00','108.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','9','9','麦顿狗粮金典天然粮10kg金毛萨摩德牧大型犬','ECS000009','0','1','201.60','168.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('10','10','10','边境狗粮专用粮10kg','ECS000010','0','1','105.60','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('11','11','47','蓓味佳猫粮通用型三文鱼成猫猫粮','ECS000047','0','1','156.00','108.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('12','12','48','奶糕贵宾幼犬狗粮小型犬泰迪博美比熊专用','ECS000048','0','1','126.00','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','13','21','鸡肉拧丝安心宠物零食鸡肉条泰迪鸡肉干磨牙400g','ECS000021','0','1','55.19','46.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('14','14','45','狗狗肉类零食爱犬生活鸡胸肉整支特价','ECS000045','0','1','31.20','18.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('15','15','22','爱犬生活水晶鸡肉切丝800g','ECS000022','0','1','70.80','59.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('16','16','28','耐咬玩具球萨摩耶金毛宠物玩具','ECS000028','0','1','31.20','26.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('17','17','25','边牧泰迪狗玩具训犬玩具','ECS000025','0','1','14.39','12.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('18','18','29','誉丰优质宠物狗狗双节骨头纯棉线结绳玩具','ECS000029','0','1','14.39','12.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','19','22','爱犬生活水晶鸡肉切丝800g','ECS000022','0','1','70.80','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','20','11','泰迪金毛博美宠物零食鸡肉磨牙零食','ECS000011','0','1','31.20','0.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('21','21','48','奶糕贵宾幼犬狗粮小型犬泰迪博美比熊专用','ECS000048','0','1','126.00','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('22','22','48','奶糕贵宾幼犬狗粮小型犬泰迪博美比熊专用','ECS000048','0','1','126.00','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('23','23','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('24','24','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('25','25','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('26','26','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('27','27','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('28','28','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('29','29','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('30','30','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','31','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('32','32','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('33','33','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('34','34','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('35','35','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('36','36','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('37','37','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('38','38','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('39','39','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('40','40','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('41','41','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('42','42','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('43','43','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('44','44','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('45','45','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('46','46','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('47','47','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('48','48','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('49','49','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('50','50','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('51','51','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('52','52','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('53','53','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('54','54','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('55','55','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('56','56','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('57','57','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('58','58','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('59','59','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('60','60','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('61','61','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('62','62','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('63','63','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('64','64','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('65','65','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('66','66','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('67','67','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('68','68','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('69','69','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('70','70','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('71','71','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('72','72','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('73','73','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('74','74','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('75','75','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('76','76','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('77','77','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('78','78','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('79','79','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('80','80','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('81','81','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('82','82','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('83','83','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('84','84','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('85','85','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('86','86','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('87','87','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('88','88','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('89','89','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('90','90','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('91','91','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('92','92','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('93','93','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('94','94','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('95','95','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('96','96','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('97','97','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('98','98','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('99','99','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('100','100','49','1分钱支付测试商品','ECS000049','0','1','0.01','0.01','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('101','101','43','豪华可拆洗狗窝泰迪小狗狗用品狗房子','ECS000043','0','1','153.60','99.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('102','102','48','奶糕贵宾幼犬狗粮小型犬泰迪博美比熊专用','ECS000048','0','1','126.00','88.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('103','103','48','新疆巴尔鲁克生鲜牛排眼肉牛扒1200g','ECS000048','0','1','126.00','88.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('104','104','9','爱食派内蒙古呼伦贝尔冷冻生鲜牛腱子肉1000g','ECS000009','0','1','201.60','168.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('105','105','1','新鲜水果甜蜜香脆单果约800克','ECS000000','4','1','231.60','156.00','重量:500克 \n外观:红色 \n款式:时尚款 \n','0','1','','0','0','4,7,1');");
E_D("replace into `ecs_order_goods` values('106','106','47','日本蒜蓉粉丝扇贝270克6只装','ECS000047','0','1','156.00','108.00','','0','1','','0','0','');");

require("../../inc/footer.php");
?>