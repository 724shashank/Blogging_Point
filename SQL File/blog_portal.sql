-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 01:08 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` varchar(10) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `category` varchar(400) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `stext` varchar(20000) NOT NULL,
  `wtext` varchar(43700) NOT NULL,
  `blogby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `dname`, `category`, `title`, `date`, `image`, `stext`, `wtext`, `blogby`) VALUES
('1', 'Shashank Yadav', 'clanguage', 'C-Language', '2021-01-04', 'images/Clanguage-768x256.png', 'Like most procedural languages in the ALGOL tradition, C has facilities for structured programming and allows lexical variable scope and recursion. Its static type system prevents unintended operations. In C, all executable code is contained within subroutines (also called "functions", though not strictly in the sense of functional programming). Function parameters are always passed by value (except arrays). Pass-by-reference is simulated in C by explicitly passing pointer values. C program source text is free-format, using the semicolon as a statement terminator and curly braces for grouping blocks of statementsss.\r\n', 'Like most procedural languages in the ALGOL tradition, C has facilities for structured programming and allows lexical variable scope and recursion. Its static type system prevents unintended operations. In C, all executable code is contained within subroutines (also called "functions", though not strictly in the sense of functional programming). Function parameters are always passed by value (except arrays). Pass-by-reference is simulated in C by explicitly passing pointer values. C program source text is free-format, using the semicolon as a statement terminator and curly braces for grouping blocks of statements. The C language also exhibits the following characteristics: The language has a small, fixed number of keywords, including a full set of control flow primitives: if/else, for, do/while, while, and switch. User-defined names are not distinguished from keywords by any kind of sigil. It has a large number of arithmetic, bitwise, and logic operators: +, +=, ++, &, ||, etc. More than one assignment may be performed in a single statement. Functions: Function return values can be ignored, when not needed. Function and data pointers permit ad hoc run-time polymorphism. Functions may not be defined within the lexical scope of other functions. Data typing is static, but weakly enforced; all data has a type, but implicit conversions are possible. Declaration syntax mimics usage context. C has no "define" keyword; instead, a statement beginning with the name of a type is taken as a declaration. There is no "function" keyword; instead, a function is indicated by the presence of a parenthesized argument list. User-defined (typedef) and compound types are possible. Heterogeneous aggregate data types (struct) allow related data elements to be accessed and assigned as a unit. Union is a structure with overlapping members; only the last member stored is valid. Array indexing is a secondary notation, defined in terms of pointer arithmetic. Unlike structs, arrays are not first-class objects: they cannot be assigned or compared using single built-in operators. There is no "array" keyword in use or definition; instead, square brackets indicate arrays syntactically, for example month[11]. Enumerated types are possible with the enum keyword. They are freely interconvertible with integers. Strings are not a distinct data type, but are conventionally implemented as null-terminated character arrays. Low-level access to computer memory is possible by converting machine addresses to typed pointers. Procedures (subroutines not returning values) are a special case of function, with an untyped return type void. A preprocessor performs macro definition, source code file inclusion, and conditional compilation. There is a basic form of modularity: files can be compiled separately and linked together, with control over which functions and data objects are visible to other files via static and extern attributes. Complex functionality such as I/O, string manipulation, and mathematical functions are consistently delegated to library routines. While C does not include certain features found in other languages (such as object orientation and garbage collection), these can be implemented or emulated, often through the use of external libraries.\r\n', 'shashankyadav724@gmail.com'),
('2', 'Shashank Yadav', 'cpp', 'C++', '2021-01-04', 'images/titleShadow.png', 'In 1979, Bjarne Stroustrup, a Danish computer scientist, began work on "C with Classes", the predecessor to C++.[16] The motivation for creating a new language originated from Stroustrups experience in programming for his PhD thesis. Stroustrup found that Simula had features that were very helpful for large software development, but the language was too slow for practical use, while BCPL was fast but too low-level to be suitable for large software development. When Stroustrup started working in AT&T Bell Labs, he had the problem of analyzing the UNIX kernel with respect to distributed computing. ', 'In 1979, Bjarne Stroustrup, a Danish computer scientist, began work on "C with Classes", the predecessor to C++. The motivation for creating a new language originated from Stroustrups experience in programming for his PhD thesis. Stroustrup found that Simula had features that were very helpful for large software development, but the language was too slow for practical use, while BCPL was fast but too low-level to be suitable for large software development. When Stroustrup started working in AT&T Bell Labs, he had the problem of analyzing the UNIX kernel with respect to distributed computing. Remembering his Ph.D. experience, Stroustrup set out to enhance the C language with Simula-like features. C was chosen because it was general-purpose, fast, portable and widely used. As well as C and Simulas influences, other languages also influenced this new language, including ALGOL 68, Ada, CLU and ML.\r\n\r\nInitially, Stroustrups "C with Classes" added features to the C compiler, Cpre, including classes, derived classes, strong typing, inlining and default arguments.\r\n\r\nIn 1982, Stroustrup started to develop a successor to C with Classes, which he named "C++" (++ being the increment operator in C) after going through several other names. New features were added, including virtual functions, function name and operator overloading, references, constants, type-safe free-store memory allocation (new/delete), improved type checking, and BCPL style single-line comments with two forward slashes (//). Furthermore, Stroustrup developed a new, standalone compiler for C++, Cfront.\r\n\r\nIn 1984, Stroustrup implemented the first stream input/output library. The idea of providing an output operator rather than a named output function was suggested by Doug McIlroy (who had previously suggested Unix pipes).\r\n\r\nIn 1985, the first edition of The C++ Programming Language was released, which became the definitive reference for the language, as there was not yet an official standard. The first commercial implementation of C++ was released in October of the same year.\r\n\r\nIn 1989, C++ 2.0 was released, followed by the updated second edition of The C++ Programming Language in 1991. New features in 2.0 included multiple inheritance, abstract classes, static member functions, const member functions, and protected members. In 1990, The Annotated C++ Reference Manual was published. This work became the basis for the future standard. Later feature additions included templates, exceptions, namespaces, new casts, and a Boolean type.', 'shashankyadav724@gmail.com'),
('3', 'Shashank Yadav', 'java', 'JAVA', '2021-01-04', 'images/Java-768x256.png', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA),meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client-server web applications, with a reported 9 million developers.', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA)meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client-server web applications, with a reported 9 million developers.\r\n\r\nJava was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle) and released in 1995 as a core component of Sun Microsystems Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GNU General Public License. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open source software and used by most developers and is the default JVM for almost all Linux distributions.\r\n\r\nAs of September 2020, the latest version is Java 15, with Java 11, a currently supported long-term support (LTS) version, released on September 25, 2018. Oracle released the last zero-cost public update for the legacy version Java 8 LTS in January 2019 for commercial use, although it will otherwise still support Java 8 with public updates for personal use indefinitely. Other vendors have begun to offer zero-cost builds of OpenJDK 8 and 11 that are still receiving security and other upgrades.\r\n\r\nOracle (and others) highly recommend uninstalling outdated versions of Java because of serious risks due to unresolved security issues. Since Java 9, 10, 12, 13 and 14 are no longer supported, Oracle advises its users to immediately transition to the latest version (currently Java 15) or an LTS release.', 'shashankyadav724@gmail.com'),
('4', 'Shashank Yadav', 'python', 'Python', '2021-01-04', 'images/Python-Programming-Language.png', 'Python is a high-level, general-purpose and a very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting edge technology in Software Industry. Python Programming Language is very well suited for Beginners, also for experienced programmers with other programming languages like C++ and Java.', 'Python is a high-level, general-purpose and a very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting edge technology in Software Industry. Python Programming Language is very well suited for Beginners, also for experienced programmers with other programming languages like C++ and Java.\r\nThis specially designed Python tutorial will help you learn Python Programming Language in most efficient way, with the topics from basics to advanced (like Web-scraping, Django, Deep-Learning, etc.) with examples.\r\n\r\n\r\nBelow are some facts about Python Programming Language:\r\n\r\nPython is currently the most widely used multi-purpose, high-level programming language.\r\nPython allows programming in Object-Oriented and Procedural paradigms.\r\nPython programs generally are smaller than other programming languages like Java. Programmers have to type relatively less and indentation requirement of the language, makes them readable all the time.\r\nPython language is being used by almost all tech-giant companies like – Google, Amazon, Facebook, Instagram, Dropbox, Uber… etc.\r\nThe biggest strength of Python is huge collection of standard library which can be used for the following:\r\nMachine Learning\r\nGUI Applications (like Kivy, Tkinter, PyQt etc. )\r\nWeb frameworks like Django (used by YouTube, Instagram, Dropbox)\r\nImage processing (like OpenCV, Pillow)\r\nWeb scraping (like Scrapy, BeautifulSoup, Selenium)\r\nTest frameworks\r\nMultimedia\r\nScientific computing\r\nText processing and many more.', 'shashankyadav724@gmail.com'),
('5', 'Shashank Yadav', 'php', 'PHP', '2021-01-04', 'images/php-1-768x256.png', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.\r\nPHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications and robotic drone control. Arbitrary PHP code can also be interpreted and executed via command-line interface (CLI).\r\n\r\nThe standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.\r\n\r\nThe PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.\r\n\r\nAs of December 2020, 72% of PHP websites use discontinued versions of PHP, i.e. PHP 7.2 or lower, which are no longer supported by The PHP Development Team. A large additional fraction uses PHP 7.3, which is now "supported for critical security issues only." Over 40% of all PHP websites use version 5.6 or older, that not even Debian supports (Debian 9 supported version 7.0 and 7.1).', 'shashankyadav724@gmail.com'),
('6', 'Shashank Yadav', 'ruby', 'RUBY', '2021-01-04', 'images/ruby2.png', 'Ruby is an interpreted, high-level, general-purpose programming language. It was designed and developed in the mid-1990s by Yukihiro "Matz" Matsumoto in Japan.\r\n\r\nRuby is dynamically typed and uses garbage collection. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. According to the creator, Ruby was influenced by Perl, Smalltalk, Eiffel, Ada, BASIC, and Lisp', 'Ruby is a dynamic, reflective, object-oriented, general-purpose programming language. Ruby is a pure Object-Oriented language developed by Yukihiro Matsumoto. Everything in Ruby is an object except the blocks but there are replacements too for it i.e. procs and lambda. The objective of Ruby development was to make it act as a sensible buffer between human programmers and the underlying computing machinery.\r\nMatsumoto has said that Ruby was conceived in 1993. In a 1999 post to the ruby-talk mailing list, he describes some of his early ideas about the language:[16]\r\n\r\nI was talking with my colleague about the possibility of an object-oriented scripting language. I knew Perl (Perl4, not Perl5), but I did not like it really, because it had the smell of a toy language (it still has). The object-oriented language seemed very promising. I knew Python then. But I did not like it, because I did not think it was a true object-oriented language – OO features appeared to be add-on to the language. As a language maniac and OO fan for 15 years, I really wanted a genuine object-oriented, easy-to-use scripting language. I looked for but could not find one. So I decided to make it.\r\n\r\nMatsumoto describes the design of Ruby as being like a simple Lisp language at its core, with an object system like that of Smalltalk, blocks inspired by higher-order functions, and practical utility like that of Perl.\r\nThe name "Ruby" originated during an online chat session between Matsumoto and Keiju Ishitsuka on February 24, 1993, before any code had been written for the language. Initially two names were proposed: "Coral" and "Ruby". Matsumoto chose the latter in a later e-mail to Ishitsuka.[19] Matsumoto later noted a factor in choosing the name "Ruby" – it was the birthstone of one of his colleagues.\r\n', 'shashankyadav724@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `value` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`value`, `category`) VALUES
('clanguage', 'C-language'),
('cpp', 'C++'),
('java', 'Java'),
('php', 'PHP'),
('python', 'Python'),
('ruby', 'Ruby');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `date`, `subject`, `message`) VALUES
('shashankyadav724@gmail.com', '2021-01-04', 'Greetings', 'Congratulation on successful run of your website.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pswd`, `utype`) VALUES
('724.harsh.724@gmail.com', '12345678', 'user'),
('admin', '12345', 'admin'),
('harsh@gmail.com', '12345678', 'author'),
('shashankyadav724@gmail.com', '12345678', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`) VALUES
('1', 'Dear User You can upload \r\nFree article. '),
('2', 'You can give your valuable feedback.'),
('3', 'Kindly check your status.'),
('4', 'Only upload reliable article.'),
('5', 'In case you cant upload article contact admin.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mob` int(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uphoto` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `name`, `pswd`, `state`, `city`, `address`, `dob`, `mob`, `utype`, `uphoto`, `status`) VALUES
('724.harsh.724@gmail.com', 'Harsh Yadav', '12345678', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', 1234567890, 'User', 'images/passport_picture.jpg', 'allowed'),
('harsh@gmail.com', 'Harsh', '12345678', 'UP', 'Sitapur', 'Lohar Bagh', '28-12-2001', 2147483647, 'author', 'images/Photo.JPG', 'allowed'),
('shashankyadav724@gmail.com', 'Shashank yadav', '12345678', 'UP', 'Sitapur', 'Loharbagh', '28-12-2001', 1234556789, 'author', 'images/passport_picture_.jpg', 'allowed');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `username` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `review` varchar(10000) NOT NULL,
  `author` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
