create TABLE news (
    id mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    text TEXT NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted_at timestamp DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE news ADD INDEX created_at (created_at);
ALTER TABLE news ADD INDEX deleted_at_created_at (deleted_at, created_at);


INSERT INTO news VALUES (1, 'Test name 1', 'Test text 1', '2022-11-05 00:00:00', null);
INSERT INTO news VALUES (2, 'Test name 2', 'Test text 2', '2022-11-05 00:00:00', null);
INSERT INTO news VALUES (3, 'Test name 3', 'Test text 3', '2022-11-05 00:00:00', null);
INSERT INTO news VALUES (4, 'Test name 4', 'Test text 4', '2022-11-04 00:00:00', null);
INSERT INTO news VALUES (5, 'Test name 5', 'Test text 5', '2022-11-04 00:00:00', null);
INSERT INTO news VALUES (6, 'Test name 6', 'Test text 6', '2022-11-04 00:00:00', null);
INSERT INTO news VALUES (7, 'Test name 7', 'Test text 7', '2022-11-03 00:00:00', null);
INSERT INTO news VALUES (8, 'Test name 8', 'Test text 8', '2022-11-03 00:00:00', null);
INSERT INTO news VALUES (9, 'Test name 9', 'Test text 9', '2022-11-03 00:00:00', null);
INSERT INTO news VALUES (10, 'Test name 10', 'Test text 10', '2022-11-02 00:00:00', null);
INSERT INTO news VALUES (11, 'Test name 11', 'Test text 11', '2022-11-02 00:00:00', null);
INSERT INTO news VALUES (12, 'Test name 12', 'Test text 12', '2022-11-02 00:00:00', null);
INSERT INTO news VALUES (13, 'Test name 13', 'Test text 13', '2022-11-01 00:00:00', null);
INSERT INTO news VALUES (14, 'Test name 14', 'Test text 14', '2022-11-01 00:00:00', null);
INSERT INTO news VALUES (15, 'Test name 15', 'Test text 15', '2022-11-01 00:00:00', null);
