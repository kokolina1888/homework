<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example of Bootstrap 3 Dropdowns within Buttons</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">
		.bs-example{
			margin: 20px;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="btn-group col-xs-8 col-xs-offset-2">
			<button type="button" data-toggle="dropdown" class="btn btn-warning btn-lg dropdown-toggle">
				<a name="top">
				</a>
				Programming Languages 
				<span class="caret">					
				</span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#PHP">PHP</a></li>
				<li><a href="#Java Script">Java Script</a></li>
				<li><a href="#Java">Java</a></li>
			</ul>
		</div>       
		<div class="col-xs-8 col-xs-offset-2">
			<h1><a name="PHP">
				PHP
			</a>
			<a class="btn btn-danger btn-xs" href="#top" role="button">Back to top</a>
		</h1>

		PHP is a server-side scripting language created in 1995 and designed for web development but also used as a general-purpose programming language. As of January 2013, PHP was installed on more than 240 million websites (39% of those sampled) and 2.1 million web servers.[3] Originally created by Rasmus Lerdorf in 1994,[4] the reference implementation of PHP (powered by the Zend Engine) is now produced by The PHP Group.[5] While PHP originally stood for Personal Home Page,[4] it now stands for PHP: Hypertext Preprocessor, which is a recursive backronym.[6]

		PHP code can be simply mixed with HTML code, or it can be used in combination with various templating engines and web frameworks. PHP code is usually processed by a PHP interpreter, which is usually implemented as a web server's native module or a Common Gateway Interface (CGI) executable. After the PHP code is interpreted and executed, the web server sends resulting output to its client, usually in form of a part of the generated web page; for example, PHP code can generate a web page's HTML code, an image, or some other data. PHP has also evolved to include a command-line interface (CLI) capability and can be used in standalone graphical applications.[7]

		The canonical PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.[8]

		Despite its popularity, no written specification or standard existed for the PHP language until 2014, leaving the canonical PHP interpreter as a de facto standard. Since 2014, there is ongoing work on creating a formal PHP specification.
	</div>
	<div class="col-xs-8 col-xs-offset-2">
		<h1>
			<a name="Java Script">
				Java Script
			</a>
			<a class="btn btn-danger btn-xs" href="#top" role="button">
				Back to top
			</a>
		</h1>
		JavaScript (/ˈdʒɑːvɑːˌskrɪpt/), also known as ECMAScript (the untrademarked name used for the standard), is a dynamic programming language.[5] It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.[5] JavaScript (at least the strict subset asm.js) is also considered an "assembly language of the web"[6] – a compile target of source-to-source compilers – for making client side web applications, using other programming languages, supported by all the major browsers without plug-ins. It is also used in server-side network programming with runtime environments such as Node.js, game development and the creation of desktop and mobile applications.

		JavaScript is classified as a prototype-based scripting language with dynamic typing and first-class functions. This mix of features makes it a multi-paradigm language, supporting object-oriented,[7] imperative, and functional[1][8] programming styles.

		Despite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.[9]

		JavaScript is also used in environments that aren't web-based, such as PDF documents, site-specific browsers, and desktop widgets. Newer and faster JavaScript virtual machines (VMs) and platforms built upon them have also increased the popularity of JavaScript for server-side web applications. On th

		e client side, JavaScript has been traditionally implemented as an interpreted language, but more recent browsers perform just-in-time compilation.

		JavaScript has been standardized in the ECMAScript language specification.

		
	</div>
	<div class="col-xs-8 col-xs-offset-2">
		<h1>
			<a name="Java">
				Java
			</a>
			<a class="btn btn-danger btn-xs" href="#top" role="button">
				Back to top
			</a>
		</h1>
		Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented,[12] and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywhere" (WORA),[13] meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.[14] Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture. As of 2015, Java is one of the most popular programming languages in use,[15][16][17][18] particularly for client-server web applications, with a reported 9 million developers.[citation needed] Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle Corporation) and released in 1995 as a core component of Sun Microsystems' Java platform. The language derives much of its syntax from C and C++, but it has fewer low-level facilities than either of them.

		The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licences. As of May 2007, in compliance with the specifications of the Java Community Process, Sun relicensed most of its Java technologies under the GNU General Public License. Others have also developed alternative implementations of these Sun technologies, such as the GNU Compiler for Java (bytecode compiler), GNU Classpath (standard libraries), and IcedTea-Web (browser plugin for applets).
	</div>

</div>

</body>
</html>                                		