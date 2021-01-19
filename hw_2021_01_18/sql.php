<?php
?>
<pre>
Выведите имена пассажиров улетевших в Москву (Moscow) на самолете TU-134
SELECT name
FROM Passenger
WHERE id in (
    SELECT Passenger
    FROM Pass_in_trip
    WHERE trip in (
        SELECT id
        FROM Trip
        WHERE plane = 'TU-134' and town_to = 'Moscow'
    )
)

<hr>
Вывести пассажиров с самым длинным именем
SELECT name
FROM Passenger
where LENGTH(name) = (
    SELECT MAX(LENGTH(name))
    FROM Passenger
)

<hr>
Сколько обучающихся в 10 B классе ?
SELECT COUNT(*) count
FROM Student_in_class
WHERE class in (
    SELECT id
    FROM Class
    WHERE name = '10 B'
)

<hr>
Вывести всех членов семьи с фамилией Quincey.
SELECT *
FROM  FamilyMembers
WHERE member_name like '%Quincey'

<hr>
В какие города летал Bruce Willis
SELECT town_to
FROM Trip
WHERE id in (
    SELECT trip
    FROM Pass_in_trip
    WHERE passenger in (
        SELECT id
        FROM Passenger
        WHERE name = 'Bruce Willis'
    )
)

<hr>
Вывести id и количество пассажиров для всех прошедших полётов
SELECT a.id trip, COUNT(*) count
FROM Trip a, Pass_in_trip b
where a.id = b.trip
GROUP BY a.id

<hr>
Определить, кто из членов семьи покупал картошку (potato)
SELECT status
FROM FamilyMembers
WHERE member_id in (
    SELECT family_member
    FROM Payments
    WHERE good in (
        SELECT good_id
        FROM Goods
        WHERE good_name = 'potato'
    )
)

<hr>
Вывести все названия самолётов, на которых можно улететь в Москву (Moscow)
SELECT DISTINCT plane
FROM Trip
WHERE town_to = 'Moscow'

<hr>
В каких классах введет занятия преподаватель "Krauze" ?
SELECT name
FROM Class
WHERE id in (
    SELECT class
    FROM Schedule
    WHERE teacher in (
        SELECT id
        FROM Teacher
        WHERE last_name= 'Krauze'
    )
)
</pre>