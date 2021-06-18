CREATE TABLE IF NOT EXISTS `room_avaliability` (
	avaliabilityid BIGINT(20) auto_increment primary key, 
	propertyid VARCHAR(255) , 
	year INT , 
	calendar LONGTEXT comment 'This should contain a JSON object.'
);
