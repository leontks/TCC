DROP TABLE IF EXISTS LIGHT;
CREATE TABLE LIGHT(
	ID int NOT NULL AUTO_INCREMENT,
	ID_COSTUMER INT NOT NULL,
	ID_LIGHT INT NOT NULL,
	ID_HARDWARE INT NOT NULL,
	IP_HARDWARE VARCHAR(15) NOT NULL,
	NAME VARCHAR(60) NOT NULL,
	PRIMARY KEY (ID),
	FOREIGN KEY (ID_COSTUMER) REFERENCES HARDWARE(ID_COSTUMER),
	FOREIGN KEY (IP_HARDWARE) REFERENCES HARDWARE(IP_HARDWARE),
	FOREIGN KEY (ID_HARDWARE) REFERENCES HARDWARE(ID_HARDWARE)
);
INSERT INTO LIGHT(ID_COSTUMER,ID_LIGHT,ID_HARDWARE,IP_HARDWARE,NAME) VALUES (1,1,1,'192.168.0.116','Luz da sala');