-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 01:10 PM
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumquestion`
--

INSERT INTO `forumquestion` (`id`, `forum_title`, `forum_body`, `slug`, `created_at`) VALUES
(78, 'Is there any way to limit characters in echo $row-> variable in codeigniter', '<p>I am currently developing a CMS and want to add in the functionality of limiting an excerpt of text by its line length. Say I want to control the display of text and ensure all blocks are the same height by controlling the amount of lines of text that show.I am using for each to display inbox function message data. In the message section it shows full message and I want to limit it into 30</p>\n<pre class=\"language-php\"><code>&lt;?php\n\nif(isset($records)) :\nforeach($records as $row) :\n?&gt;\n                &lt;tr &gt;\n                    &lt;td class=\"right\"&gt;&lt;?php  echo $row-&gt;contactus_name; ?&gt;&lt;/td&gt;\n                    &lt;td class=\"right\"&gt;&lt;?php  echo $row-&gt;contactus_email; ?&gt;&lt;/td&gt;\n                    &lt;td class=\"right\"&gt;&lt;?php  echo $row-&gt;contactus_phone; ?&gt;&lt;/td&gt;\n                    &lt;td class=\"right tertiary-text-secondary text-justify\"&gt;&lt;?php  echo $row-&gt;contactus_comment; ?&gt;&lt;/td&gt;\n                &lt;/tr&gt;\n            &lt;?php  endforeach; ?&gt;\n            &lt;/tbody&gt;\n            &lt;tfoot&gt;&lt;/tfoot&gt;\n        &lt;/table&gt;\n        &lt;?php else : ?&gt;\n            &lt;p&gt;No records&lt;/p&gt;\n        &lt;?php  endif; ?&gt;</code></pre>', 'Is-there-any-way-to-limit-characters-in-echo-row-variable-in-codeigniter', '2022-03-14 11:53:46'),
(79, 'How to access the display property of a row inside a html table', '<p>I have an html table populated by sql, in a php file something like this:</p>\n<pre class=\"language-markup\"><code>&lt;table id=\'myTable\'&gt;\n    &lt;tr&gt; &lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Weight&lt;/th&gt; &lt;/tr&gt;\n     &lt;tbody id=\'budy\'&gt;\n      &lt;tr&gt;\n        &lt;td&gt; x &lt;/td&gt;&lt;td&gt; 3 kg&lt;/td&gt;\n      &lt;/tr&gt;\n      &lt;tr&gt;\n        &lt;td&gt; y &lt;/td&gt;&lt;td&gt; 9 kg&lt;/td&gt;\n      &lt;/tr&gt;\n      &lt;tr&gt;\n        &lt;td&gt; x &lt;/td&gt;&lt;td&gt; 1 kg&lt;/td&gt;\n      &lt;/tr&gt;\n       &lt;tr&gt;\n        &lt;td&gt; x &lt;/td&gt;&lt;td&gt; 6 kg&lt;/td&gt;\n      &lt;/tr&gt;\n       &lt;tr&gt;\n        &lt;td&gt; y &lt;/td&gt;&lt;td&gt; 7 kg&lt;/td&gt;\n      &lt;/tr&gt;\n      &lt;/tbody&gt;\n      &lt;/table&gt;</code></pre>\n<p>And this filter function to search either the name or the weight across the table:</p>\n<pre class=\"language-javascript\"><code>function doSearch() {\n    var searchText = document.getElementById(\'filterInput\').value;\n    var targetTable = document.getElementById(\'myTable\');\n    var btn=document.getElementById(\"totalbtn\");\n    var targetTableColCount;\n    document.getElementById(\"totalbtn\").disabled=false;\n    //Loop through table rows\n    for (var rowIndex = 0; rowIndex &lt; targetTable.rows.length; rowIndex++ ) {\n         var rowData = \'\';\n         //Get column count from header row\n          if (rowIndex == 0) {\n              targetTableColCount = targetTable.rows.item(rowIndex).cells.length;\n              continue; //do not execute further code for header row.\n            }\n           var rowCells = targetTable.rows.item(rowIndex).cells;\n           for (var colIndex = 0; colIndex &lt; 2; colIndex++) {\n                var cellText = \'\';\n\n                if (targetTable.rows.item(rowIndex).cells.item(colIndex)) {                      \n                    cellText = rowCells.item(colIndex)[(navigator.appName == \'Microsoft Internet \n                            Explorer\')? \"innerText\" : \"textContent\"];\n                 }\n                   rowData += cellText;\n            }\n\n             // Make search case insensitive.\n            rowData = rowData.toLowerCase();\n            searchText = searchText.toLowerCase();\n\n            //If search term is not found in row data\n            //then hide the row, else show\n            if (rowData.indexOf(searchText) == -1)\n                 targetTable.rows.item(rowIndex).style.display = \'none\';\n              else\n                  targetTable.rows.item(rowIndex).style.display = \'table-row\';\n            }\n        }</code></pre>', 'How-to-access-the-display-property-of-a-row-inside-a-html-table', '2022-03-14 11:57:28'),
(80, 'problem when using class wrapper (css), the word do not have the space?', '<p>I am newbie with html css and here is my problem.</p>\n<p>I code a very simple html css and here is my code</p>\n<pre class=\"lang-html s-code-block\"><code class=\"hljs language-xml\">https://github.com/anhbui2904/bai99\n</code></pre>\n<p>I want it to be like this</p>\n<p>GO TO NEXT APPROVAL OK TRY AGAIN</p>\n<p>But it become like this</p>\n<p>GO TO NEXT APPROVALOKTRY AGAIN</p>\n<p>I mean the text OK and APPROVAL and TRY stick together.</p>\n<p>Could you please give me some simple solutions for this problem ? Thank you in advance.</p>', 'problem-when-using-class-wrapper-css-the-word-do-not-have-the-space', '2022-03-14 12:00:04'),
(81, 'Adding tooltip inside <td> element using css and overflow hidden', '<p>basically, I\'m having issues displaying a tooltip inside a&nbsp;<code>&lt;td&gt;</code>&nbsp;element that has the&nbsp;<code>overflow hidden</code>&nbsp;property. The tooltip text class will pop up on hover, but it\'s cut off due to&nbsp;<code>overflow hidden</code>. The parent (div) must have the&nbsp;<code>relative</code>&nbsp;position and the child (tooltip) must have the&nbsp;<code>absolute</code>&nbsp;position, this is because it needs to be dynamic as every td needs to have it\'s own tooltip (popping up next to it). Fyi, the text is populated via a json string).</p>\r\n<p>I\'ve seen a lot of examples online, but I don\'t think they include a&nbsp;<strong><code>&lt;td&gt;</code>&nbsp;solution with overflow hidden and tooltip</strong>.</p>\r\n<p>Any help will be great, thanks.</p>\r\n<p>I have this html/css structure:</p>\r\n<pre class=\"language-markup\"><code>&lt;td&gt;\r\n  &lt;div class=\"advice-given-class\"&gt;\r\n    texttexttexttexttexttexttext\r\n    texttexttexttexttexttexttext\r\n    texttexttexttexttexttexttext\r\n    texttexttexttexttexttexttext\r\n    &lt;span class=\"tooltiptext\"&gt;\r\n      text from json string\r\n    &lt;/span&gt;\r\n  &lt;/div&gt;\r\n&lt;/td&gt;\r\n\r\n.advice-given-class {\r\n    position: relative;\r\n    display: -webkit-box;\r\n    overflow: hidden;\r\n    -webkit-line-clamp: 3;\r\n    -webkit-box-orient: vertical;\r\n}\r\n\r\n.advice-given-class .tooltiptext {\r\n    z-index: 10;\r\n    display: none;\r\n    padding: 14px 20px;\r\n    bottom: 20px;\r\n    left: 0;\r\n    width: 240px;\r\n    line-height: 16px;\r\n    position: absolute;\r\n}\r\n\r\n.advice-given-class:hover .tooltiptext {\r\n    display: inline;\r\n    color: #ffffff;\r\n    border: 1px solid #DCA;\r\n    background: #444;\r\n    -moz-border-radius: 11px;\r\n    -webkit-border-radius: 11px;\r\n    border-radius: 11px;\r\n}\r\n\r\n.tooltiptext:after {\r\n    position: absolute;\r\n    display: block;\r\n    content: \"\";\r\n    border-style: solid;\r\n    border-width: 8px;\r\n    height: 0;\r\n    width: 0;\r\n    border-color: #444 transparent transparent transparent;\r\n    bottom: -16px;\r\n    left: 14px;\r\n}</code></pre>', 'Adding-tooltip-inside-element-using-css-and-overflow-hidden', '2022-03-14 12:54:08'),
(83, 'Why CSS variables are not inherited in pseudo elements?', '<p>I have found something a bit strange, and could not find anything in the CSS custom properties spec about that. Here is a simple example:&nbsp;<a href=\"https://codepen.io/bakura10/pen/RwxNPxz\" rel=\"nofollow noreferrer\">https://codepen.io/bakura10/pen/RwxNPxz</a></p>\r\n<pre class=\"language-markup\"><code>&lt;div class=\"test\"&gt;\r\n  TEST\r\n&lt;/div&gt;</code></pre>\r\n<p>&nbsp;</p>\r\n<pre class=\"language-css\"><code>:root {\r\n  --background: red;\r\n}\r\n\r\n.test {\r\n  position: relative;\r\n}\r\n\r\n.test::before {\r\n  content: \'\';\r\n  width: 100%;\r\n  height: 100%;\r\n  top: 0;\r\n  left: 0;\r\n  background: var(--background);\r\n}</code></pre>\r\n<p>As you can see, despite the variable --background being defined at the root scope, it is simply not accessible from the before or after pseudo element.</p>\r\n<p>Why is that so?</p>', 'Why-CSS-variables-are-not-inherited-in-pseudo-elements', '2022-03-14 13:01:49'),
(84, 'How do I fix this error I\'m getting trying to include Dark Mode with CSS?', '<p>I am trying to make Dark Mode for my website, but my CSS file kept on saying:</p>\n<ul>\n<li>to include an&nbsp;<code>RBRACE ( } )</code>&nbsp;for every line</li>\n<li>line 9 is saying put a colon in character 5</li>\n<li>it says rule is empty for lines 5, 16, and 20</li>\n<li>for line 36, it says&nbsp;<code>Expected (&lt;color&gt; | inherit) but found \'var(--text-color)\'</code></li>\n<li>for line 26, it says that \'The universal selector (*) is known to be slow.\"</li>\n</ul>\n<p>Does anyone know how to fix this mess?</p>\n<p>Thanks in advance for responding.</p>\n<p>Here is my code for reference.</p>\n<pre class=\"language-css\"><code>body {\n  --text-color: #222;\n  --bkg-color: #fff;\n\nbody.dark-theme {\n  --text-color: #eee;\n  --bkg-color: #121212;\n}\n\n@media (prefers-color-scheme: dark) {\n  /* defaults to dark theme */\n  body {\n    --text-color: #eee;\n    --bkg-color: #121212;\n  }\n  body.light-theme {\n    --text-color: #222;\n    --bkg-color: #fff;\n  }\n}\n\n* {\n  font-family: Arial, Helvetica, sans-serif;\n}\n\nbody {\n  background: var(--bkg-color);\n}\n\nh1,\np {\n  color: var(--text-color);\n}</code></pre>', 'How-do-I-fix-this-error-Im-getting-trying-to-include-Dark-Mode-with-CSS', '2022-03-14 13:02:40'),
(85, 'My CSS only applied to a single page instead of all pages CodeIgniter', '<p>I am creating a simple website using the Codeigniter Framework. I have also downloaded a responsive HTML5 template. The problem is that the CSS is only applied to the base URL of the site. But when I visit other pages the CSS is not applied. See the screenshots below.</p>\r\n<p><strong>Controller-&gt;Pages.php</strong></p>\r\n<pre class=\"language-php\"><code>&lt;?php\r\ndefined(\'BASEPATH\') OR exit(\'No direct script access allowed\');\r\n\r\n\r\nclass Pages extends CI_Controller {\r\n\r\n    function index()\r\n    {\r\n         if ( ! file_exists(APPPATH.\'/views/index.php\'))\r\n        {\r\n                // Whoops, we don\'t have a page for that!\r\n                show_404();\r\n        }\r\n                $this-&gt;load-&gt;view(\'header\');\r\n                $this-&gt;load-&gt;view(\'index\');\r\n                $this-&gt;load-&gt;view(\'footer\');\r\n    }\r\n\r\n    function about()\r\n    {\r\n         if ( ! file_exists(APPPATH.\'/views/about.php\'))\r\n        {\r\n                // Whoops, we don\'t have a page for that!\r\n                show_404();\r\n        }\r\n                $this-&gt;load-&gt;view(\'header\');\r\n                $this-&gt;load-&gt;view(\'index\');\r\n                $this-&gt;load-&gt;view(\'footer\');\r\n    }\r\n}</code></pre>\r\n<p><strong>View-&gt;Header.php</strong></p>\r\n<pre class=\"language-markup\"><code>&lt;?php\r\ndefined(\'BASEPATH\') OR exit(\'No direct script access allowed\');\r\n?&gt;\r\n&lt;!DOCTYPE HTML&gt;\r\n\r\n&lt;html&gt;\r\n	&lt;head&gt;\r\n		&lt;title&gt;Official Website of Barangay Canlubang&lt;/title&gt;\r\n		&lt;meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" /&gt;\r\n		&lt;meta name=\"description\" content=\"\" /&gt;\r\n		&lt;meta name=\"keywords\" content=\"\" /&gt;\r\n		&lt;link href=\'http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700\' rel=\'stylesheet\' type=\'text/css\'&gt;\r\n		&lt;!--[if lte IE 8]&gt;&lt;script src=\"js/html5shiv.js\"&gt;&lt;/script&gt;&lt;![endif]--&gt;\r\n		&lt;script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"&gt;&lt;/script&gt;\r\n		&lt;script src=\"&lt;?php echo base_url();?&gt;js/skel.min.js\"&gt;&lt;/script&gt;\r\n		&lt;script src=\"&lt;?php echo base_url();?&gt;js/skel-panels.min.js\"&gt;&lt;/script&gt;\r\n		&lt;script src=\"&lt;?php echo base_url();?&gt;js/init.js\"&gt;&lt;/script&gt;\r\n		&lt;noscript&gt;\r\n			&lt;link rel=\"stylesheet\" href=\"&lt;?php echo base_url();?&gt;css/skel-noscript.css\" /&gt;\r\n			&lt;link rel=\"stylesheet\" href=\"&lt;?php echo base_url();?&gt;css/style.css\" /&gt;\r\n			&lt;link rel=\"stylesheet\" href=\"&lt;?php echo base_url();?&gt;css/style-desktop.css\" /&gt;\r\n		&lt;/noscript&gt;\r\n		&lt;!--[if lte IE 8]&gt;&lt;link rel=\"stylesheet\" href=\"css/ie/v8.css\" /&gt;&lt;![endif]--&gt;\r\n		&lt;!--[if lte IE 9]&gt;&lt;link rel=\"stylesheet\" href=\"css/ie/v9.css\" /&gt;&lt;![endif]--&gt;\r\n	&lt;/head&gt;</code></pre>', 'My-CSS-only-applied-to-a-single-page-instead-of-all-pages-CodeIgniter', '2022-03-14 13:09:45'),
(87, 'How to get Original response body in Spring cloud gateway (Webflux) Post filter', '<p>I\'ve implemented a Post filter in spring cloud gateway. But I need the readable format (JSON Format of response body) before sending to UI. I\'m getting exchange.getResponse(). (when i printed in console: org.springframework.http.server.reactive.ReactorServerHttpResponse@3891d61a)But it is in reactive object. I can\'t able to see the actual original response which is coming from api to post filter. I\'ve searched numerous stackoverflow topics but couldn\'t get actual solution. Please assist...</p>', 'How-to-get-Original-response-body-in-Spring-cloud-gateway-Webflux-Post-filter', '2022-03-14 18:03:51'),
(88, 'No converter found capable of converting from type [javax.script.ScriptEngineManager] to type [java.lang.String]', '<p>I\'m studying and trying an exploit which basically a web server parses a remote yml file to get code execution:&nbsp;<a href=\"https://github.com/artsploit/yaml-payload\" rel=\"nofollow noreferrer\">https://github.com/artsploit/yaml-payload</a>&nbsp;( everything is inside the /src directory of that project )</p>\r\n<p>Everything works fine until the last part, where the jar gets executed and I get this error: No converter found capable of converting from type [javax.script.ScriptEngineManager] to type [java.lang.String]</p>\r\n<p>What is wrong? I don\'t get it</p>', 'No-converter-found-capable-of-converting-from-type-javaxscriptScriptEngineManager-to-type-javalangString', '2022-03-14 18:04:19'),
(89, 'How can I unify 2 annotations into one in Java?', '<p>I want to know if there is a way to unify 2 annotations For example I want to use both @ToString.Exclude and @JsonIgnore on particular fields in classes throughout my code, but I would like to unify them into one custom annotation. (fields can also have other annotations apart from these) How can I do that in Java? (Java 11, Spring Boot) Thanks!</p>', 'How-can-I-unify-2-annotations-into-one-in-Java', '2022-03-14 18:05:12'),
(90, 'How to mock string array in Mockito', '<p>I\'m trying to mock a static method with Mockito</p>\r\n<pre class=\"language-markup\"><code>public class JavaMail {\r\n    public static void postMail(\r\n        String to[],\r\n        String subject,\r\n        String body,\r\n        String from,\r\n        String files[])\r\n        throws MessagingException {...}\r\n}</code></pre>\r\n<p>I tried to mock this static method using Mockito.</p>\r\n<pre class=\"language-markup\"><code>MockedStatic&lt;JavaMail&gt; javaMailMockedStatic = org.mockito.Mockito.mockStatic(JavaMail.class);\r\njavaMailMockedStatic.when(() -&gt; JavaMail.postMail(\r\n        any(String[].class),\r\n        anyString(),\r\n        anyString(),\r\n        anyString(),\r\n        any(String[].class)\r\n    )).then(invocation -&gt; null);</code></pre>\r\n<p>But I keep getting a InvalidUseOfMatchersException</p>', 'How-to-mock-string-array-in-Mockito', '2022-03-14 18:06:12'),
(91, 'How to design void method junit test?', '<pre class=\"language-markup\"><code>public class ParmsData {\r\n\r\n    @Autowired\r\n    private ParamsCache paramsCache;\r\n\r\n    private Map&lt;String, List&lt;String&gt;&gt; beanData = Collections.synchronizedMap(new HashMap&lt;&gt;());\r\n\r\n    public void init(){\r\n        this.beanData = Collections.synchronizedMap(paramsCache.allParams().stream()\r\n                .collect(Collectors.toMap(FxParams:: getSysPara, param -&gt; Arrays.stream(param.getSysParaValue().split(\",\")).collect(Collectors.toList()))));\r\n    }\r\n}</code></pre>\r\n<ol>\r\n<li>How to design init() method junit test?</li>\r\n<li>Please give me the exmple code thanks.</li>\r\n</ol>', 'How-to-design-void-method-junit-test', '2022-03-14 18:31:56'),
(92, 'Using the postman I try to test, various scenarios for my APIs. But I have a question, if I have an authentication API, how can I reuse a token?', '<p>But I have a question, if I have an authentication API (I don\'t use any authorization method), it generates a different token for me every time in response (after a POST request), to be used in other APIs, how can I add that token in the environment to be taken automatically and only called in the other APIs?</p>\r\n<p>For example, to be a little more specific: POST Request</p>\r\n<pre class=\"language-markup\"><code>{\r\n\"username\": \"test\",\r\n\"password\": \"password\"\r\n}</code></pre>', 'Using-the-postman-I-try-to-test-various-scenarios-for-my-APIs-But-I-have-a-question-if-I-have-an-authentication-API-how-can-I-reuse-a-token', '2022-03-14 18:33:27'),
(94, 'javax.naming.NameNotFoundException wildfly24.0.1', '<p>I have compiled my code using zulu jdk11 and I am deploying my .ear file on Wildfly 24.0.1.Final. (the .ear works fine with jdk 8 &amp; wildfly 24.0.1.final). I have to make this .ear file working with jdk11(zulu)</p>\r\n<p>Exception:</p>\r\n<pre class=\"language-markup\"><code>Caused by: javax.naming.NameNotFoundException: mailgate/messenger-server-ejb3-ejb/ScBackGroundOperations!com.tumbleweed.messenger.server.ejb3.api.ScBackGroundOperationsLocal -- service jboss.naming.context.java.global.mailgate.messenger-server-ejb3-ejb.\"ScBackGroundOperations!com.tumbleweed.messenger.server.ejb3.api.ScBackGroundOperationsLocal\"\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.ServiceBasedNamingStore.lookup(ServiceBasedNamingStore.java:106)\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.NamingContext.lookup(NamingContext.java:207)\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.NamingContext.lookup(NamingContext.java:184)\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.InitialContext$DefaultInitialContext.lookup(InitialContext.java:239)\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.NamingContext.lookup(NamingContext.java:193)\r\n    at org.jboss.as.naming@24.0.1.Final//org.jboss.as.naming.NamingContext.lookup(NamingContext.java:189)\r\n    at java.naming/javax.naming.InitialContext.lookup(InitialContext.java:409)\r\n    at java.naming/javax.naming.InitialContext.lookup(InitialContext.java:409)\r\n    at deployment.mailgate.ear.messenger-server-scheduler-jboss3.sar//com.tumbleweed.messenger.server.scheduler.jboss3.PackagePostScanTask.getScStartupOperations(PackagePostScanTask.java:120)</code></pre>', 'javaxnamingNameNotFoundException-wildfly2401', '2022-03-14 18:35:33'),
(95, 'How to modify StanfordNLP name [eg PERSON, ORGANIZATION,CITY,STATE,COUNTRY]and replace with specific IDs', '<p>I have been trying to extract data from a text files but as i need to feed output data in the database i require it to be recognized as an id tried using tag==PERSON then gave entity value of id but output is not satisfactory.</p>', 'How-to-modify-StanfordNLP-name-eg-PERSON-ORGANIZATIONCITYSTATECOUNTRYand-replace-with-specific-IDs', '2022-03-14 18:36:56'),
(96, 'Java Runtime execution not working in cron job @reboot showing error \"Unable to connect to X server\"', '<p>I have a bash script to be executed using a jar file, Im using the Runtime method as given below:</p>\r\n<pre class=\"language-java\"><code>Process proc = Runtime.getRuntime().exec(\"bash /location/to/bash.sh\");</code></pre>\r\n<p>It works well when executed from a terminal but when It comes to cron (sudo) it\'s not executing the script.</p>\r\n<p>I tried logging the process.ErrorStream(); and got an error&nbsp;<strong>\"unable to connect to X server\"</strong>&nbsp;I also tried using ProcessBuilder but still not working in cron. How to fix this error or is there any other way to execute another process in *background after booting using jar file?</p>', 'Java-Runtime-execution-not-working-in-cron-job-reboot-showing-error-Unable-to-connect-to-X-server', '2022-03-14 18:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `forumreply`
--

CREATE TABLE `forumreply` (
  `id` int(11) NOT NULL,
  `forum_reply` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forumreply`
--

INSERT INTO `forumreply` (`id`, `forum_reply`, `slug`, `created_at`) VALUES
(1, 'hello', '', '2022-03-13 04:35:00'),
(2, 'hello', '', '2022-03-13 04:35:03'),
(3, '<p>asdad</p>', 'asdad', '2022-03-13 04:37:05'),
(4, '<p>sample reply only</p>', 'sample-reply-only', '2022-03-13 04:38:11'),
(5, '<p>hello only</p>', 'hello-only', '2022-03-13 04:40:12'),
(6, '<p>hello only new</p>', 'hello-only-new', '2022-03-13 04:40:32'),
(7, '<p>asdasd</p>', 'asdasd', '2022-03-13 04:41:10'),
(8, '<p>asdasd</p>', 'asdasd', '2022-03-13 04:41:20'),
(9, '<p>testing</p>', 'testing', '2022-03-13 05:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'jbareta', 'jbareta2@gmail.com', 'qwerty', '2022-03-09 08:53:44'),
(2, 'jbareta', 'jbareta2@gmail.com', 'qwerty', '2022-03-09 08:53:48'),
(3, 'Virginia Harmon', 'sakiqu@mailinator.com', '$2y$10$QKF8H0RIep7.wqFquJMqZOTpKjbe2FJA7oG13I6IQfMYMKb9/s1WC', '2022-03-09 09:19:24'),
(4, 'benedict', 'jbareta22@gmail.com', '$2y$10$ntaEfLgBndv8tgxzIBLNhemneVpSgnlArhwN6fc5T842ZyMstEXWe', '2022-03-09 09:28:41'),
(5, 'gagogago', 'gago@gmail.com', '$2y$10$v2vJ369FovwkqNW89MSO1eb/nIFStxl73Tgv3qL8vHZZLXDYxM/1C', '2022-03-09 09:34:41'),
(6, 'qweqwe', 'qwe@gmail.com', '$2y$10$jg14IvSERjyQ9nAxUnpxoOn3yDY/nyHFXcfBBJz/2RdqJ68cPWwxG', '2022-03-09 09:36:36'),
(7, 'jaja', 'yuyu@gmail.com', '$2y$10$a1UXylzTe40GEIdLO2QnyurstohpqRn2.6do8CIpKTVOrUMLm5lTi', '2022-03-09 09:56:23'),
(8, 'kkk', 'kk@gmail.com', '$2y$10$zQ2A6GMDvIFdUjKm//sF6ee7fYjIimgThnKss.FlUA9qLbwCPCa0a', '2022-03-09 10:00:08'),
(9, 'Warren Russo', 'faziqyko@mailinator.com', '$2y$10$EAdEAeyr2hgj/sICFz79v.Nm7nO1KLvr7Gfu8KxR3iftLXubMjb.O', '2022-03-09 10:45:32'),
(10, 'qqq', 'qq@gmail.com', '$2y$10$qlhJwPYkN1FwbPGc8xsyjuyrh1cSLvVWuNk5IymjtTaTorbGLhr72', '2022-03-09 10:47:44'),
(11, 'Sade Duran', 'govybaba@mailinator.com', '$2y$10$KLoGCAfiO/ySjGs54WSeg.mJKxt1LHeFC4yS1038rUa4uBUZKh/HS', '2022-03-10 03:38:59'),
(12, 'Yoshi Madden', 'ryjowos@mailinator.com', '$2y$10$tDqKTIq2LIdVQVtoIoxyd.KoAEpYGuOe1FEZO91LE0rXp.GkLlTxm', '2022-03-10 03:42:04'),
(13, 'Enim anim qui necess', 'lylywika@mailinator.com', '$2y$10$Ny.FUIcJWV5n4u75GmOiPeCnMdD7zApOQHsVC7QSla2EQUyzExYsK', '2022-03-10 07:10:23'),
(14, '<p>asdadas</p>', 'qadur@mailinator.com', '$2y$10$1qkRYRUd/.OBghNldQXnaudgzU6Qj0Mv1FJHT3XnCKeCAKYHTqg7.', '2022-03-10 07:11:12'),
(15, '<p>asdadas</p>\r\n<p><strong>adasdadadas</strong></p>\r\n<pre class=\"language-markup\"><code>&lt;html&gt;', 'tezyzav@mailinator.com', '$2y$10$l4rN4pCkFtJu5w4Th8yZ1.qLUKLbjkQUkWBnLCPGj7GTcexyPtBVy', '2022-03-10 07:12:15'),
(16, 'Tatiana Haney', 'gebo@mailinator.com', '$2y$10$/IjtVbguQUdmRL.Ln0PmE.8ZrrKoaKyURxWdUYdFiG5/pUHNcLkM2', '2022-03-10 07:31:35'),
(17, 'asdas', 'jbareta2sss@gmail.com', '$2y$10$Ajg4S8KBZXnWqXK.PtL.WuRO4bFNJOq8Mb1tLrzR7lWtTssOdveC6', '2022-03-12 12:16:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forumquestion`
--
ALTER TABLE `forumquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forumreply`
--
ALTER TABLE `forumreply`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forumquestion`
--
ALTER TABLE `forumquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `forumreply`
--
ALTER TABLE `forumreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
