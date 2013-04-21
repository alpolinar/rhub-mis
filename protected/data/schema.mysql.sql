DROP TABLE IF EXISTS mis_user;
CREATE TABLE mis_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO mis_user (username, password, email) VALUES ('admin', 'admin', 'admin@example.com');
INSERT INTO mis_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO mis_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO mis_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');

DROP TABLE IF EXISTS mis_tag_types;
CREATE TABLE  mis_tag_types (
    id SERIAL,
    tag_type VARCHAR(100) NOT NULL,
    PRIMARY KEY(id),
    UNIQUE INDEX i_tag_type(tag_type) COMMENT 'prevent duplicate tag type'
) COMMENT 'example tag type are behavioral segmentation, demographic segmentation, etc.';

DROP TABLE IF EXISTS mis_tags;
CREATE TABLE mis_tags (
    id SERIAL,
    tag_type_id BIGINT UNSIGNED NOT NULL COMMENT 'a constant in the application',
    tag VARCHAR(100) NOT NULL,
    PRIMARY KEY(id),
    UNIQUE INDEX i_unique_tag (tag_type_id, tag) COMMENT 'prevent duplicate tag under same type/segment'
);

DROP TABLE IF EXISTS mis_files;
CREATE TABLE mis_files (
    id SERIAL,
    file_type_id BIGINT UNSIGNED NOT NULL COMMENT 'a constant in the application',
    name VARCHAR(70),
    description TEXT,
    start DATE COMMENT 'start date at which this file is effective',
    end DATE COMMENT 'end date at which this file is effective',
    created DATETIME COMMENT 'date the file was created',
    updated TIMESTAMP COMMENT 'date the file was last updated',
    PRIMARY KEY(id),
    UNIQUE INDEX i_type(file_type_id, name) COMMENT 'unique name per type',
    INDEX i_name(name),
    INDEX(start),
    INDEX(end)
) COMMENT 'common field among other tables';

DROP TABLE IF EXISTS mis_file_tags;
CREATE TABLE mis_file_tags (
    file_id BIGINT UNSIGNED NOT NULL,
    tag_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (file_id, tag_id)
) COMMENT 'list of tags assigned to file';

DROP TABLE IF EXISTS mis_people;
CREATE TABLE mis_people (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    population DOUBLE UNSIGNED NOT NULL,
    age_start TINYINT UNSIGNED NOT NULL,
    age_end TINYINT UNSIGNED NOT NULL,
    country CHAR(2),
    state CHAR(5),
    city VARCHAR(60),
    zip_code INT UNSIGNED NOT NULL,
    PRIMARY KEY(file_id),
    INDEX i_population(population),
    INDEX i_age_start(age_start),
    INDEX i_age_end(age_end),
    INDEX i_country(country),
    INDEX i_state(state),
    INDEX i_city(city),
    INDEX i_zip_code(zip_code)
);

DROP TABLE IF EXISTS mis_business_components;
CREATE TABLE mis_business_components (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    value_propositions TEXT,
    PRIMARY KEY (file_id)
);

DROP TABLE IF EXISTS mis_external_environments;
CREATE TABLE mis_external_environments (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    external_environment TEXT,
    PRIMARY KEY (file_id)
);

DROP TABLE IF EXISTS mis_target_markets;
CREATE TABLE mis_target_markets (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    target_market TEXT,
    PRIMARY KEY (file_id)
);

DROP TABLE IF EXISTS mis_swot_tags;
CREATE TABLE mis_swot_tags (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    tag_id BIGINT UNSIGNED NOT NULL,
    area_id INT UNSIGNED NOT NULL COMMENT 'indicator if tag is used for stregnths, weaknesses, opportunity, threats',
    description TEXT,
    PRIMARY KEY (file_id, tag_id, area_id)
);

DROP TABLE IF EXISTS mis_swot_files;
CREATE TABLE mis_swot_files (
    file_id BIGINT UNSIGNED NOT NULL COMMENT 'foreign key from files table',
    child_file_id BIGINT UNSIGNED NOT NULL COMMENT '',
    area_id INT UNSIGNED NOT NULL COMMENT 'indicator if tag is used for stregnths, weaknesses, opportunity, threats',
    description TEXT,
    PRIMARY KEY (file_id, child_file_id, area_id)
);