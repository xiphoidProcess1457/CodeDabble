-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 09:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codedabble`
--

-- --------------------------------------------------------

--
-- Table structure for table `forumquestion`
--

CREATE TABLE `forumquestion` (
  `id` int(11) NOT NULL,
  `forum_title` text NOT NULL,
  `forum_body` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumquestion`
--

INSERT INTO `forumquestion` (`id`, `forum_title`, `forum_body`, `slug`, `user_id`, `created_at`) VALUES
(99, 'Can\'t open XAMPP & CodeIgniter Windows 10', '<p>In 2016/17 I had XAMPP working good but then I had one year rest and needed to reinstall Windows 10 and when I attempted to open the control panel it would not open.</p>\r\n<p>I then decided to download the latest version of XAMPP and also CodeIgniter. I have transferred all of the files from the old version to the new version. I am able to open&nbsp;<a href=\"../phpmyadmin\" rel=\"nofollow noreferrer\">http://localhost/phpmyadmin</a>&nbsp;and I have created a database with a table similar to that I had before. But if I enter&nbsp;<a href=\"../intro\" rel=\"nofollow noreferrer\">http://localhost/intro</a>&nbsp;I get the result of Object not found! - Error 404. I have checked routes.php and everything appears OK and I\'ve also placed the Intro file (which is simple text without reference to the database) in the root folders of Controllers &amp; Views, but get the same result. I have also checked config.php and changed $config[\'base_url\'] = \'<a href=\"../\" rel=\"nofollow noreferrer\">http://localhost/</a>\'; to $config[\'base_url\'] = \'<a href=\"http://127.0.0.1:8080/localhost/\" rel=\"nofollow noreferrer\">http://127.0.0.1:8080/localhost/</a>\'; but again it made no difference. I also changed the port number in the Control Panel to 8080 but again made no difference.</p>\r\n<p>I guess by being able to open&nbsp;<a href=\"../phpmyadmin\" rel=\"nofollow noreferrer\">http://localhost/phpmyadmin</a>&nbsp;that indicates Apache is working OK.</p>\r\n<p>Can somebody tell me where else I can check?</p>', 'Cant-open-XAMPP-CodeIgniter-Windows-10', 19, '2022-04-25 12:50:36'),
(103, 'Getting Codeigniter to work on localhost with xampp', '<p>I have Netbeans, Codeigniter, and xampp setup on a Windows 7 machine and I am simply trying to call up a simple object to display hello world.</p>\r\n<p>I keep getting the Object not found error after exhausting many tutorials. When I run my script it uses the following url</p>\r\n<pre class=\"language-markup\"><code>http://localhost/project1/CodeIgniter_2.1.0/application/controllers/hello.php</code></pre>\r\n<p>So xampp is working fine when I call up localhost/xampp from my browser although im not sure what else needs to be configured.</p>\r\n<p>I\'ve tried many different base urls although currently my&nbsp;<code>config.php</code>&nbsp;has it set as follows&nbsp;<code>$config[\'base_url\'] = \'\';</code></p>\r\n<p>I\'m a newbie just trying to get things setup so I can start working on projects but can\'t get past this for days.</p>', 'Getting-Codeigniter-to-work-on-localhost-with-xampp', 20, '2022-04-25 13:36:52'),
(104, 'Get an item from inside json with php code', '<p>I can show the FactorDate item with the following code.</p>\r\n<pre class=\"language-markup\"><code>$response=json_decode($response-&gt;getBody());\r\nforeach($response as $product)\r\n{\r\n    echo $product-&gt;FactorDate;\r\n}</code></pre>\r\n<p>but I can not show the Price item. please guide me.</p>\r\n<p>[ { \"CustomerCode\": 101, \"FactorNumber\": 53, \"FactorDate\": 14010201, \"FactorDetails\": [ { \"ProductCode\": 21901, \"Count\": 15, \"Price\": 96000000, \"VisitorID\": 0 } ] } ]</p>', 'Get-an-item-from-inside-json-with-php-code', 19, '2022-04-25 13:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `forumreply`
--

CREATE TABLE `forumreply` (
  `id` int(11) NOT NULL,
  `forum_reply` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forumreply`
--

INSERT INTO `forumreply` (`id`, `forum_reply`, `post_id`, `user_id`, `created_at`) VALUES
(31, '<p>If you are sure xampp is running perfectly then add&nbsp;<code>.htaccess</code>&nbsp;file in the main directory of the intro, add the following code into it:</p>\r\n<pre class=\"language-markup\"><code>RewriteEngine on\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule .* index.php/$1 [PT,L]</code></pre>\r\n<p>and try again. If you got any error let me help you.</p>', 99, 19, '2022-04-25 05:33:01'),
(32, '<p>My old system had a .htaccess file and there was not one in my new system. I copied &amp; pasted that file and everything works good now.</p>\r\n<p>My file contained the following.\\</p>\r\n<pre class=\"language-markup\"><code>&lt;IfModule mod_rewrite.c&gt;\r\nRewriteEngine on\r\nRewriteCond $1 !^(index\\.php|resources|robots\\.txt)\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule ^(.*)$ /index.php?/$1 [L]\r\n&lt;/IfModule&gt;\r\n\r\nHeader add Access-Control-Allow-Origin \"*\" </code></pre>\r\n<p>&nbsp;</p>', 99, 20, '2022-04-25 05:33:42'),
(33, '<p>That\'s not how CodeIgniter URLs work. It should be:</p>\r\n<pre class=\"language-markup\"><code>http://path/to/codeigniter/index.php/&lt;controller&gt;/&lt;function&gt;/&lt;param&gt;</code></pre>\r\n<p>So, in your case, it should be:</p>\r\n<pre class=\"language-markup\"><code>http://localhost/project1/CodeIgniter_2.1.0/index.php/hello</code></pre>\r\n<p><code>$config[\'base_url\']</code>&nbsp;should be set to the&nbsp;<code>index.php</code>, so it should be:</p>\r\n<pre class=\"language-php\"><code>$config[\'base_url\'] = \'http://localhost/project1/CodeIgniter_2.1.0/index.php\';</code></pre>\r\n<p>DOCS:&nbsp;<a href=\"http://codeigniter.com/user_guide/general/urls.html\" rel=\"noreferrer\">http://codeigniter.com/user_guide/general/urls.html</a></p>', 103, 19, '2022-04-25 05:38:23'),
(34, '<p>The JSON that you had provided looks like price is a part of an array within FactorDetails. Meaning that if you want to get the price you will likely have to do something like:</p>\r\n<p><code>$product-&gt;FactorDetails[0]-&gt;Price</code></p>\r\n<p>Or put into your example, something like this will display both Date and Price:</p>\r\n<pre class=\"language-php\"><code>$response=json_decode($response-&gt;getBody());\r\nforeach($response as $product)\r\n{\r\n    echo $product-&gt;FactorDate;\r\n    echo $product-&gt;FactorDetails[0]-&gt;Price;\r\n}</code></pre>\r\n<p>That should work.</p>\r\n<p>For future reference, you could use a tool like this JSON viewer to see a more readable version of your JSON which can be super helpful when dealing with formatting issues like this one:</p>\r\n<p><a href=\"https://codebeautify.org/jsonviewer\" rel=\"nofollow noreferrer\">https://codebeautify.org/jsonviewer</a></p>', 104, 19, '2022-04-25 05:43:09'),
(35, '<p>You can save the profiles in session array.</p>\r\n<pre class=\"language-php\"><code>$profiles = array(\'prof1\',\'prof2\',\'prof3\', ...);\r\nSession::put(\'userProfiles\', $profiles);</code></pre>\r\n<p>To show your session in a blade you can use a foreach:</p>\r\n<pre class=\"language-php\"><code>@foreach (Session::get(\'userProfiles\') as $profile)\r\n    {{$profile}}\r\n@endforeach</code></pre>\r\n<p>Note: this was one mode, for sure you can use other for same thing.</p>', 104, 20, '2022-04-25 05:49:34'),
(36, '<p>s</p>', 104, 20, '2022-04-25 06:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(19, 'Maggie Walker', 'jbareta2@gmail.com', '$2y$10$G/yhhGelCaN5E./8OEm4gutfqzXZO1In7nMYWVzdNuzglWr1rXZ3y', '2022-04-25 03:57:42'),
(20, 'Nieltot', 'nielniel@gmail.com', '$2y$10$wgoMk80MSvYeGcmnrQhC9.xkOTu251dyj1b2OZOvYvmx6uayFdUou', '2022-04-25 04:56:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forumquestion`
--
ALTER TABLE `forumquestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `forumreply`
--
ALTER TABLE `forumreply`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forumquestion`
--
ALTER TABLE `forumquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `forumreply`
--
ALTER TABLE `forumreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forumquestion`
--
ALTER TABLE `forumquestion`
  ADD CONSTRAINT `forumquestion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forumreply`
--
ALTER TABLE `forumreply`
  ADD CONSTRAINT `forumreply_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `forumquestion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forumreply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
