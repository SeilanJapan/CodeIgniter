<?php

/*
Като спазвате конвенциите за писане на PHP си направете контролер, който има следните методи:
а) метод, който отпечатва директно в контролера (без view) заглавие и съдържание: 
любим ваш десерт и негова рецепта със снимка.
б) метод, който отпечатва чрез view същото нещо съдържание в подточка а).
*/

	echo "My favorite desert is cake!<br/>";
	echo "<img style='width:150px' src='http://calendars-birthdays.com/wp-content/uploads/2015/04/Birthday-Cake-Candles.jpeg'>";
	echo "<br/> Recipes:";
	echo "<ul>
			<li>flour</li>
			<li>sugar</li>
			<li>cherry</li>
			<li>milk</li>
			<li>eggs</li>
		</ul>
		";
?>
