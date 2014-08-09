/*
User
*/
DROP TABLE IF EXISTS user;
CREATE TABLE user(
  openid varchar(32) NOT NULL PRIMARY KEY,
  name varchar(16) NOT NULL ,
  email varchar(32)  NOT NULL UNIQUE,
  phone varchar(11)  NOT NULL UNIQUE,
  psw  varchar(64) NOT NULL
);
/*
Article 
*/
DROP TABLE IF EXISTS article;
CREATE TABLE article(
    id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(32) NOT NULL,
    description varchar(128) NOT NULL,
    pic_ur varchar (128) NOT NULL,
    $article_type int(16) NOT NULL
);

/*
Admin
*/
DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
    id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name int(16) NOT NULL UNIQUE,
    psw  varchar(64),
    lv int(3) NOT NULL
);

INSERT INTO admin (name,psw,lv) VALUES('root','root',10);