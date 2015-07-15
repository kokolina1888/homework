<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>задача 5</title>
</head>
<body>
	<p>Имаме двумерен асоциативен масив, 
		който съхранява информация за 5 популярни уеб сайта: 
		име, кратко описание, създател, брой потребители, използвана технология . 
		Да се направи списък с линкове (List group -> Linked items), който съдържа имената на уеб сайтовете.  
		При натискане на всеки от елементите в списъка да ни се отваря нова страница с цялата информация за сайта.
		б)* За всеки сайт да се добави информация в масива 
		и за логото (линк към файла). При показване на цялата информация да се показва и логото.
	</p>
	<?php 
	$sites = array(array());
	$sites[0] = array(	'name' => 'IMBD.com',
		'short info' => 'IMDb is the world’s most popular and authoritative source for movie, TV and celebrity content.',
		'creator' => 'Colin Needham',
		'users' => '57 mln/month',
		'technology' => 'Java Script, JQuery, HTML');
	$sites[1] = array(	'name' => 'Amazon.com',
		'short info' => ' It is the largest Internet-based retailer in the United States.',
		'creator' => 'Jeff Bezos',
		'users' => '270 mln/year',
		'technology' => '');
	$sites[2] = array(	'name' => 'Ok.ru',
		'short info' => 'Russian: Одноклассники -Classmates is a social network service for classmates and old friends. It is popular in Russia and former Soviet Republics.',
		'creator' => 'Albert Popkov',
		'users' => '200 million registered users and 45 million daily unique visitors',
		'technology' => 'The programming language used on the site is Java and the main language used for the site`s textual content is Russian. The site is using the Apache Tomcat web server.');
	$sites[3] = array(	'name' => 'GitHub', 
		'short info' => 'GitHub is a web-based Git repository hosting service, which offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features.',
		'creator' => 'Tom Preston Werner, PJ Heyett, Chris Wanstrath',
		'users' => '9 million',
		'technology' => 'http://zachholman.com/talk/how-to-build-a-github/');
	$sites[4] = array(	'name' => 'Kat.cr',
		'short info' => 'KickassTorrents (sometimes abbreviated KAT) is a website, founded in 2008, that provides torrent files and magnet links to facilitate peer-to-peer file sharing using the BitTorrent protocol.',
		'creator' => 'unknown',
		'users' => 'unknown',
		'technology' => 'unknown');
		?>
	</p>
</body>
</html>