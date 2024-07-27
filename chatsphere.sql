-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 04:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatsphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(10) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_email`, `ad_pwd`) VALUES
(1, 'adminchatsphere@gmail.com', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `description`, `created`) VALUES
(1, 'Java', 'What is java\'s main application domain?', 'Java is a most popular, object-oriented, widely used programming language and platform that is utilized for Android development, web development, artificial intelligence, cloud applications, and much more. So, mastering this gives you great opportunities in bigger organizations.', '2023-11-13 08:04:10'),
(2, 'Python', 'What is python\'s primary use case?', 'Python is currently the most widely used multi-purpose, high-level programming language, which allows programming in Object-Oriented and Procedural paradigms.', '2023-11-13 08:06:03'),
(3, 'C++', 'What are pointers in C++ used for?', 'C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs. C++ is portable and can be used to develop applications that can be adapted to multiple platforms.', '2023-11-13 08:06:03'),
(4, 'JavaScript', 'What is JavaScript\'s role in web development?', 'JavaScript (JS) is the most popular lightweight, interpreted compiled programming language. It can be used for both Client-side as well as Server-side developments.', '2023-11-13 08:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(10) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(9, 'let allows variable reassignment and has block scope.\r\nconst declares a constant and cannot be reassigned after initialization.\r\nvar has function scope and is hoisted to the top of the function.\r\n\r\nIt was introduced in the ES6 update.', 29, 8, '2023-12-03 18:32:05'),
(10, 'The main difference is the, Lists are mutable, and their elements can be changed after creation. Tuples are immutable, and their elements cannot be modified once they are assigned.', 28, 8, '2023-12-03 18:33:33'),
(11, 'ArrayList and LinkedList are both implementations of the List interface, but they differ in their underlying data structures.\r\n\r\nArrayList uses a dynamic array to store elements, which allows for fast random access but can be slower for insertions and deletions.\r\nLinkedList uses a doubly-linked list, making insertions and deletions faster, but random access slower compared to ArrayList.', 26, 8, '2023-12-03 18:36:13'),
(14, 'The try block contains the code that may throw an exception.\r\nThe catch block handles the exception, providing a specific response or taking corrective action.\r\nC++ does not have a finally block. Resource management is often done using RAII (Resource Acquisition Is Initialization).', 27, 8, '2023-12-03 18:46:10'),
(15, 'The output will be:\r\nException: / by zero\r\nFinally block executed.\r\n\r\nExplanation:\r\n\r\nDivision by zero (10 / 0) throws an ArithmeticException.\r\nThe catch block is executed, printing the exception message.\r\nThe finally block is always executed, regardless of whether an exception occurs or not.\r\n\r\n\r\n\r\n', 33, 10, '2023-12-03 18:54:08'),
(16, 'The static keyword in Java is used to create class-level variables and methods.\r\n\r\n1) For variables, it means the variable belongs to the class and not to any instance of the class. There is only one copy of a static variable shared by all instances of the class.\r\n2) For methods, it means the method belongs to the class and can be called without creating an instance of the class.', 34, 10, '2023-12-03 19:18:47'),
(17, 'ArrayList uses an array, which allows for fast random access but slow insertion and deletion. While LinkedList uses a doubly linked list, which allows for fast insertion and deletion but slow random access. Also one of the major difference lies in the access time.', 26, 10, '2023-12-03 19:29:05'),
(18, 'The key difference between tuples and lists is that while tuples are immutable objects, lists are mutable. This means tuples cannot be changed while lists can be modified', 28, 10, '2023-12-03 19:30:42'),
(19, 'Exception: / by zero\r\nFinally block executed.', 33, 11, '2023-12-03 19:38:35'),
(20, 'ArrayList uses an array for storage and provides faster random access but slower insertions. LinkedList employs nodes connected by references, excelling in insertions and deletions but with slower random access.\r\n', 26, 11, '2023-12-03 19:41:42'),
(21, 'The static keyword in Java is mainly used for memory management. The static keyword in Java is used to share the same variable or method of a given class.', 34, 11, '2023-12-03 20:03:50'),
(22, 'The try statement allows you to define a block of code to be tested for errors while it is being executed. The throw keyword throws an exception when a problem is detected, which lets us create a custom error. The catch statement allows you to define a block of code to be executed, if an error occurs in the try block.', 27, 11, '2023-12-03 20:09:42'),
(23, ' const is used when you want to declare something which will not change its value throughout the program. But if you accidentally try to rewrite its value, the compiler will through an error. Most of the time it is recommended to declare a variable of int type so you can redefine its value when it is required.', 37, 11, '2023-12-03 20:12:17'),
(24, 'Lambda functions are anonymous functions created using the lambda keyword.\r\n Example:\r\nadd = lambda a, b: a + b\r\nprint(add(5, 7)) \r\n # Output: 12', 35, 11, '2023-12-03 20:13:13'),
(25, 'The difference between let and var is in the scope of the variables they create: Variables declared by let are only available inside the block where they are defined. Variables declared by var are available throughout the function in which they are declared.', 29, 11, '2023-12-03 20:14:27'),
(26, 'Arrow functions are a concise way to write function expressions in JavaScript. \r\nExample:\r\nconst add = (a, b) => a + b;\r\nconsole.log(add(5, 7));\r\n  // Output: 12', 36, 11, '2023-12-03 20:15:16'),
(27, 'Java supports multithreading through the Thread class or implementing the Runnable interface.\r\n\r\nThe synchronized keyword is used to control access to critical sections of code. When a method or block is declared as synchronized, only one thread can access it at a time, preventing data corruption in multithreaded environments.', 41, 9, '2023-12-03 20:19:17'),
(28, 'The output will be:\r\n\r\n5\r\n7\r\n7', 40, 9, '2023-12-03 20:20:04'),
(29, 'The output will be:\r\n\r\n5\r\n6', 39, 9, '2023-12-03 20:20:31'),
(30, 'JavaScript uses an event-driven, non-blocking I/O model. The Event Loop continuously checks the message queue and executes callback functions when the stack is empty, allowing for asynchronous behavior.', 38, 9, '2023-12-03 20:20:57'),
(31, 'The main purpose of using the static keyword in Java is to save memory. When we create a variable in a class that will be accessed by other classes, we must first create an instance of the class and then assign a new value to each variable instance – even if the value of the new variables are supposed to be the same across all new classes/objects.', 34, 9, '2023-12-03 20:21:47'),
(32, 'It will return output :\r\nException: / by zero\r\nFinally block executed', 33, 9, '2023-12-03 20:22:17'),
(34, 'Lambda functions are similar to user-defined functions but without a name', 35, 9, '2023-12-03 20:24:38'),
(35, 'The const keyword specifies that a variables value is constant and tells the compiler to prevent the programmer from modifying it.', 37, 9, '2023-12-03 20:25:54'),
(36, 'An arrow function expression is a compact alternative to a traditional function expression, with some semantic differences and deliberate limitations in usage: Arrow functions do not have their own bindings to this , arguments , or super , and should not be used as methods.', 36, 9, '2023-12-03 20:26:48'),
(37, 'Synchronization in java is the capability to control the access of multiple threads to any shared resource. In the Multithreading concept, multiple threads try to access the shared resources at a time to produce inconsistent results. The synchronization is necessary for reliable communication between threads', 41, 8, '2023-12-03 20:28:14'),
(38, 'yes it output will be 5 and 6', 39, 8, '2023-12-03 20:29:19'),
(39, 'The output of the given C++ code snippet will be:\r\n\r\n5\r\n7\r\n7', 40, 8, '2023-12-03 20:30:22'),
(40, 'Asynchronous programming is a technique that enables your program to start a potentially long-running task and still be able to be responsive to other events while that task runs, rather than having to wait until that task has finished', 38, 8, '2023-12-03 20:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `feedback` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `firstName`, `lastName`, `email`, `phoneNo`, `feedback`, `timestamp`) VALUES
(7, 'Anuj', 'Kumar', 'anuj@gmail.com', 2147483647, ' Such a awesome platform i never seen like that.', '2023-12-03 20:32:38'),
(8, 'Shivangi', 'Roy', 'shivangiroy@gmail.com', 1234567890, ' Add filter option in the thread. It would be best for filtering post and comment.', '2023-12-03 20:34:04'),
(9, 'Kumari', 'Ankita', 'ankita@gmail.com', 2147483647, ' Please think about the web development technologies and add thread for it like HTML, CSS.', '2023-12-03 20:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `threadlist`
--

CREATE TABLE `threadlist` (
  `thread_id` int(10) NOT NULL,
  `thread_title` text NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `thread_cat_id` int(8) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threadlist`
--

INSERT INTO `threadlist` (`thread_id`, `thread_title`, `thread_desc`, `thread_user_id`, `thread_cat_id`, `created`) VALUES
(26, 'I am Exploring Java Concepts please provide my answer anyone.', 'What is the difference between ArrayList and LinkedList in Java?', 9, 1, '2023-12-03 18:21:44'),
(27, 'Explain the purpose of the try, catch, and finally blocks in exception handling in C++.', 'please anybody help my with a perfect answer.\r\n', 9, 3, '2023-12-03 18:26:41'),
(28, 'What is the difference between a list and a tuple in Python?', 'please give me 5 point about it.', 9, 2, '2023-12-03 18:27:42'),
(29, 'What is the difference between let, const, and var in JavaScript for variable declaration?', 'in which version of the java script let and const introduced ?', 9, 4, '2023-12-03 18:29:34'),
(33, 'What will be the output of the following code involving exception handling?', 'public class ExceptionOutput {\n    public static void main(String[] args) {\n        try {\n            int result = 10 / 0;\n            System.out.println(\"Result: \" + result);\n        } catch (ArithmeticException e) {\n            System.out.println(\"Exception: \" + e.getMessage());\n        } finally {\n            System.out.println(\"Finally block executed.\");\n        }\n    }\n}\n', 8, 1, '2023-12-03 18:51:06'),
(34, 'Explain the purpose of the static keyword in Java?', 'write two best point\r\n', 8, 1, '2023-12-03 18:53:11'),
(35, 'What are lambda functions in Python?', ' Provide an example.', 10, 2, '2023-12-03 19:21:18'),
(36, 'What are arrow functions in JavaScript?', ' Provide an example.', 10, 4, '2023-12-03 19:21:54'),
(37, 'What is the significance of the const keyword in C++?', 'anybody please help me in this question', 10, 3, '2023-12-03 19:37:36'),
(38, 'How does asynchronous programming work in JavaScript? ', 'What is the Event Loop?', 11, 4, '2023-12-03 20:15:46'),
(39, 'Explain the output of the following Python code snippet:', 'x = 5\r\nprint(x)\r\nx += 1\r\nprint(x)', 11, 2, '2023-12-03 20:16:29'),
(40, 'Explain the output of the following C++ code snippet:', '#include <iostream>\r\nint main() {\r\n    int x = 5;\r\n    std::cout << x++ << std::endl;\r\n    std::cout << ++x << std::endl;\r\n    std::cout << x << std::endl;\r\n    return 0;\r\n}', 11, 3, '2023-12-03 20:17:24'),
(41, 'How does multithreading work in Java, and what is the synchronized keyword used for?', 'please write the answer in brief.', 11, 1, '2023-12-03 20:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(8, 'tamanna@gmail.com', '$2y$10$NjeBsihcsrIWCmSLScEFY.bd0e35eKuwRmOUn82gWB6j09owtcDhm', '2023-12-03 18:12:12'),
(9, 'anuj@gmail.com', '$2y$10$9UGjOqNAbSaRNllYf5c4deUps0dalk1pvZcWyxcZqC8/PhJz0ZtTu', '2023-12-03 18:12:35'),
(10, 'ankita@gmail.com', '$2y$10$YSwJx5JSRfUzHxzzE4t70eTaMQptiUo9pvpHVKi2SGbG3RZPCwfXy', '2023-12-03 18:13:38'),
(11, 'shivangiroy@gmail.com', '$2y$10$RKZSlG.1kssQGeX3WQWBjOlHXa3OLC0qXDc2qnLz7PTYl8.TJ0RiC', '2023-12-03 18:14:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `threadlist`
--
ALTER TABLE `threadlist`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threadlist` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `threadlist`
--
ALTER TABLE `threadlist`
  MODIFY `thread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
