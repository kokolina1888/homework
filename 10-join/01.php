Зад.1
Да се напише заявка, която извлича:
а) Всички устойчиви магии: това са магии, отнасящи се до чувства с продължителност над 60.

SELECT * FROM `magics` JOIN `feelings` ON `magics`.`feeling` = `feelings`.`feeling` WHERE `feelings`.`length` > 60

б) Всички леки магии: това са магии, отнасящи се до чувства със сила между 50 и 75.

SELECT * FROM `magics` JOIN `feelings` ON `magics`.`feeling` = `feelings`.`feeling` 
WHERE `feelings`.`strength` > 50 AND `feelings`.`strength`< 75

в) Всички развиващи магии: това са магии, отнасящи се до чувства свързани с нужди ‘understanding’, ‘development’ и ‘moving’ . 

SELECT * FROM `magics` JOIN `feelings` ON `magics`.`feeling`=`feelings`.`feeling` 
WHERE `feelings`.`need` = 'understanding' 
OR`feelings`.`need` = 'moving' 
OR `feelings`.`need` = 'development' 

Зад.2
Да се напише заявка, която показва:
а) Броя, средното тегло и общото тегло на всички длопи

SELECT COUNT(1), AVG(weight), SUM(weight) FROM `dlops` 

б) Броя, средното тегло и общото тегло на всички длопи групирани по статус

SELECT `status`, COUNT(*), AVG(weight), SUM(weight) FROM `dlops` GROUP BY `status`

в) Най-тежкият и най-лекият длоп 

най-тежкият длоп

SELECT * FROM `dlops` ORDER BY `weight` DESC LIMIT 1

най-лекият длоп

SELECT * FROM `dlops` ORDER BY `weight` ASC LIMIT 1 
/връща този с по-малък ID/

