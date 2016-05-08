
DROP TABLE application;

CREATE TABLE application (
    app_id char(36) PRIMARY KEY,
    url varchar(128),
    created DATETIME NOT NULL,
    updated DATETIME,
    deleted DATETIME
);
