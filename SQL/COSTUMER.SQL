DROP TABLE IF EXISTS COSTUMER;
CREATE TABLE COSTUMER(
	ID INT NOT NULL AUTO_INCREMENT,
	ID_HARDWARE INT NOT NULL,
	LOGIN VARCHAR(20) NOT NULL,
	PASSWORD VARCHAR(20) NOT NULL,
	IP_HARDWARE VARCHAR(15) NOT NULL,
	ADDRESS VARCHAR(255),
	NAME VARCHAR(60) NOT NULL,
	PRIMARY KEY (ID),
	FOREIGN KEY (IP_HARDWARE) REFERENCES HARDWARE(IP_HARDWARE)
);
