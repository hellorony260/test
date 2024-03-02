-- Active: 1709178536510@@127.0.0.1@3306@developer
ALTER TABLE developer RENAME TO information;

SELECT * FROM information;

INSERT INTO
    information (
        developer_id, name, email, programming_languages, experience_years
    )
VALUES (
        2, 'rony', 'ronyrayhan@gmail', 'c', 2
    )

SELECT * FROM information;

DELETE FROM information WHERE developer_id