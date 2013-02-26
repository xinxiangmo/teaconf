<?php

class m130226_133328_init extends CDbMigration
{
    public function up()
    {
        $this->execute("
-- MySQL dump 10.13  Distrib 5.6.10, for osx10.8 (x86_64)
--
-- Host: localhost    Database: forum
-- ------------------------------------------------------
-- Server version	5.6.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `node`
--

DROP TABLE IF EXISTS `node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `alias` varchar(255) DEFAULT NULL COMMENT '别名',
  `describe` varchar(255) DEFAULT NULL COMMENT '描述',
  `listorder` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '最后修改时间',
  `topics_count` int(11) DEFAULT '0' COMMENT '主题总数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node`
--

LOCK TABLES `node` WRITE;
/*!40000 ALTER TABLE `node` DISABLE KEYS */;
INSERT INTO `node` VALUES (1,'one','一','测试',0,0,0,19);
/*!40000 ALTER TABLE `node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) DEFAULT NULL,
  `reply_id` int(11) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `created_by` char(20) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `content` text,
  `likes_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,1,0,1992,'李恺',1,'string',1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `node_id` int(11) DEFAULT NULL COMMENT '所属节点',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `created_at` int(11) DEFAULT NULL,
  `created_by` char(20) DEFAULT NULL COMMENT '创建人',
  `creator_id` int(11) DEFAULT NULL COMMENT '创建人ID',
  `last_posted_at` int(11) DEFAULT NULL COMMENT '最后回复时间',
  `last_posted_by` char(20) DEFAULT NULL COMMENT '最后回复人',
  `last_poster_id` int(11) DEFAULT NULL COMMENT '最后回复人ID',
  `views` int(11) DEFAULT '0' COMMENT '查看数',
  `posts_count` int(11) DEFAULT '0' COMMENT '回复数',
  `watch_count` int(11) DEFAULT '0' COMMENT '关注数',
  `likes_count` int(11) DEFAULT '0' COMMENT '被顶次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,1,'111','bbbb',1361375921,'likai',1,1361375921,'likai',1,0,0,0,0),(2,1,'second','content\n',1361375921,'likai',1,1361375921,'likai',1,0,0,0,0),(3,1,'post 1','aaaa',1361796254,'likai',1,1361796254,'likai',1,0,0,0,0),(4,1,'post 1','aaaa',1361796311,'likai',NULL,1361796311,'likai',NULL,0,0,0,0),(5,1,'post 1','aaaa',1361796312,'likai',NULL,1361796312,'likai',NULL,0,0,0,0),(6,1,'post 1','aaaa',1361796382,'likai',NULL,1361796382,'likai',NULL,0,0,0,0);
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT NULL COMMENT '用户名',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `password` varchar(255) DEFAULT NULL COMMENT '密码 bcrypt',
  `secret_key` varchar(255) DEFAULT NULL COMMENT '密钥',
  `signature` varchar(255) DEFAULT NULL COMMENT '签名',
  `avatar_small` varchar(255) DEFAULT NULL COMMENT '小头像',
  `avatar_middle` varchar(255) DEFAULT NULL COMMENT '中头像',
  `avatar_large` varchar(255) DEFAULT NULL COMMENT '大头像',
  `twitter` varchar(255) DEFAULT NULL COMMENT 'twitter id',
  `github` varchar(255) DEFAULT NULL COMMENT 'github id',
  `google` varchar(255) DEFAULT NULL COMMENT 'google id',
  `weibo` varchar(255) DEFAULT NULL COMMENT 'weibo id',
  `qq` varchar(255) DEFAULT NULL COMMENT 'tecnet qq',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'李恺','tlikai@qq.com','1','1','1','1','1','1','1','1',NULL,'1',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-26 21:23:39
        ");

        return true;
	}

	public function down()
	{
        $this->dropTable('user');
        $this->dropTable('node');
        $this->dropTable('topic');
        $this->dropTable('post');
        return true;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
