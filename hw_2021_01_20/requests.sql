-- Вставить несколько записей в таблицу People
INSERT INTO people(name, surname, age)
VALUES ('Bob', 'Marley', 35),
       ('Fidel', 'Castro', 28),
       ('Britney', 'Spears', 18),
       ('Johnny', 'Depp', 30),
       ('Marilyn', 'Monroe', 26),
       ('Bill', 'Gates', 27),
       ('Elvis', 'Presley', 21),
       ('Coco', 'Chanel', 22),
       ('Christopher', 'Columbus', 23);

-- Создать таблицу Hobbies и добавить в неё несколько записей
CREATE TABLE hobbies
(
    hobby_id    INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(30)  NOT NULL,
    description VARCHAR(300) NOT NULL
);
INSERT INTO hobbies(name, description)
VALUES ('football', 'Футбол — командная игра с мячом'),
       ('spearfishing', 'Подводная охота'),
       ('shopping', 'Форма времяпрепровождения в виде посещения магазинов'),
       ('Puzzles', 'Головоломка — непростая задача, для решения которой, как правило, требуется сообразительность'),
       ('Dance',
        'Та́нец — ритмичные, выразительные телодвижения, обычно выстраиваемые в определённую композицию и исполняемые с музыкальным сопровождением')
;

-- Создать таблицу people_hobbies с внешними ключами из таблиц people и hobbies
CREATE TABLE people_hobbies
(
    id        INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    people_id INT UNSIGNED,
    hobby_id  INT UNSIGNED,
    CONSTRAINT fk_people FOREIGN KEY (people_id) REFERENCES people (people_id),
    CONSTRAINT fk_hobby FOREIGN KEY (hobby_id) REFERENCES hobbies (hobby_id)
);

INSERT INTO people_hobbies(people_id, hobby_id)
VALUES (1, 1),
       (2, 2),
       (3, 3),
       (4, 4),
       (5, 5),
       (5, 1)