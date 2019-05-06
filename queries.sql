show databases;
use smart_home;
show tables;
desc user;
select * from user;
select * from userInfo;
update userInfo set cellPhoneNumber = 1234566666 where userID = 7;
insert into userInfo values (7, 'test', 'test', 1234566666, 'test@hotmail.com');
insert into user values (7, 'test', 'pass', 'admin');

desc userInfo;
ALTER TABLE `userInfo` MODIFY `userID` INT NOT NULL UNIQUE AUTO_INCREMENT;
ALTER TABLE `user` MODIFY `password` TEXT NULL; 

update user set password = sha1(password)
	WHERE userID = 1 or userID = 2 or userID = 7;

select username from user;

delete from user WHERE userID = 8;
delete from userInfo WHERE userID = 8;

INSERT INTO userInfo (firstName, lastName, cellPhoneNumber, email) values 
                    ('mail', 'mail', '1111111111','mail@mail.com');
SELECT LAST_INSERT_ID();
                INSERT INTO user (userID, username, password, permissions) values
                    (8, 'mail', sha1('mail'), 'user');
                    
select * from mysql.user;