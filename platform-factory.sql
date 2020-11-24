-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Nov-2020 às 03:17
-- Versão do servidor: 10.4.15-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u207526276_platformfactor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@platformfactory.co.uk', '6d4e0be30a4930cc23fbb47564e34119', '2020-10-09 05:43:36', '2020-10-09 20:15:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `capa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `capa`, `autor`, `categoria`, `titulo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, '7b60eb396952315e7260d27cfd1fb8bc.jpg', 'Administrador', 'Development', 'Introducing PHP 7.4: Performance, Features, Deprecations', '<p>PHP 7.4 has finally arrived! This new version, released November 28, 2019. Developers can expect improvements in code readability, maintenance, and ease of use. Let&rsquo;s look at some of the new features, performance tweaks and other reasons why you should migrate to PHP 7.4.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PHP continues to evolve, by releasing their newest PHP 7.4 update, full of new features. Like we have seen in previous PHP 7 releases &ndash; performance and speed keep improving. One of the most exciting new features is&nbsp;<strong>preloading</strong>. It helps speed-up script execution as well as introducing the ability to have faster and cleaner code, thanks to the simplification of common lines of code.</p>\r\n\r\n<p>The good people responsible for PHP have heard their audience&rsquo;s comments and requests and answered them in full force. They have since been continuously changing code to be more intuitive and easier to switch between programming languages.</p>\r\n\r\n<p>PHP is used in over 78.9% of all websites. According to&nbsp;<a href=\"https://w3techs.com/technologies/details/pl-php\" target=\"_blank\">W3techs</a>, the most popular sites using PHP are Wikipedia, Pinterest, and Facebook to name a few.</p>\r\n\r\n<p>If we specifically look at WordPress sites running PHP, comparing PHP 5 and 7, we can see a double speed increase. WordPress powered websites definitely gain the most by using the latest PHP version out there. Hostinger users can super-charge their WordPress sites to new heights with just a click of a button.</p>\r\n\r\n<p><img alt=\"PHP Usage Statistics\" src=\"https://www.hostinger.com/blog/wp-content/uploads/sites/4/2019/12/php-usage-statistics.png\" style=\"height:389px; width:500px\" /></p>\r\n\r\n<p>See all these cool figures? This graph is spitting some truth about websites actively using PHP. Are&nbsp;<a href=\"https://trends.builtwith.com/websitelist/PHP\" target=\"_blank\">39,191,714</a>&nbsp;live websites enough to grab your attention? That&rsquo;s how many are using PHP right now. Plus PHP 7.4 is already testing better than PHP 7.3 with improved performance and other quality of life improvements.</p>\r\n\r\n<p>The graph below shows the overall&nbsp;<a href=\"https://www.phoronix.com/scan.php?page=article&amp;item=php-74-benchmarks&amp;num=1\" target=\"_blank\">benchmark test</a>&nbsp;on new and old versions of PHP. Some of the criteria tested were ease of use, speed, and performance among others.</p>\r\n\r\n<p><img alt=\"PHP Geometric Mean of All Results\" src=\"https://www.hostinger.com/blog/wp-content/uploads/sites/4/2019/12/php-geometric-mean-of-all-results-1.png\" style=\"height:354px; width:500px\" /></p>\r\n\r\n<h2>Changing Your PHP Version</h2>\r\n\r\n<p>Ready to update? Thought so. Hostinger makes it as easy as ever with these four simple steps. You&rsquo;ll be fiddling around with your new-and-improved PHP version in no time.</p>\r\n\r\n<ol>\r\n	<li>Log into your Hostinger account and hit the&nbsp;<strong>Home</strong>&nbsp;button.</li>\r\n	<li>On your Home page, scroll down to the&nbsp;<strong>Hosting</strong>&nbsp;section and click on the&nbsp;<strong>Manage</strong>&nbsp;icon.</li>\r\n	<li>In the search box, type in&nbsp;<strong>PHP configuration</strong>&nbsp;and click on it.</li>\r\n	<li>Select PHP 7.4 and click&nbsp;<strong>Save</strong>.</li>\r\n</ol>\r\n\r\n<p><img alt=\"Enabling PHP 7.4 in Hostinger hPanel\" src=\"https://www.hostinger.com/blog/wp-content/uploads/sites/4/2019/12/enabling-php-7.4-hostinger-hpanel.gif\" style=\"height:217px; width:500px\" /></p>\r\n\r\n<p>Congrats! You now have the best and most up-to-date PHP version out there.</p>\r\n\r\n<p>To check your current PHP version, all you need to do is go to the&nbsp;<strong>Hosting</strong>&nbsp;tab and check the left side panel for&nbsp;<strong>PHP version</strong>. If it&rsquo;s anything less than 7.4, go ahead and update.</p>\r\n\r\n<h2>What&rsquo;s New in PHP 7.4?</h2>\r\n\r\n<p>Since 2016, PHP7 has been releasing annual updates without fail. Each year they deliver on new features, additions, and the possibility to write cleaner code that makes the language more reliable and user-friendly for those who run it on their websites.</p>\r\n\r\n<p>Let&rsquo;s dig in and take a closer look at some of the changes that were made with the addition of PHP 7.4. For a full list check out their changelog&nbsp;<a href=\"https://www.php.net/manual/en/migration74.php\" target=\"_blank\">here</a>.</p>\r\n\r\n<h3>Preloading</h3>\r\n\r\n<p>Let&rsquo;s talk about code. When using a framework or libraries, its files have to be loaded and linked on every request. Preloading is when you can load frameworks and libraries into the OPCache. It allows for the server to load the PHP files and store them in memory during startup and have them available for any future requests. Talk about getting things going quick!</p>\r\n\r\n<p>Preloading is run by a specific&nbsp;<strong>php.ini</strong>&nbsp;directive:&nbsp;<strong>opache.preload</strong>.This has the PHP script compiler and executes when the server starts-up. It can also be used to preload more files and choose to either include or compile them.</p>\r\n\r\n<p>This is awesome, however, if the source of the preloaded files is ever changed, the server must be restarted. The preloaded files also remain cached in OPCache memory forever.</p>\r\n\r\n<p>However, these preloaded files will continue to be available for any future requests in case you ever need to use them again.</p>\r\n', '2020-10-09 23:26:29', '2020-10-09 23:35:21'),
(3, '527619e5c5fde491cff830c30ac79d64.jpg', 'Administrador', 'Apps', 'How to make money with mobile apps using these 3 strategies', '<p>In this post, you can find out about the best business models that can help you earn money with your app.</p>\r\n\r\n<p>It all starts with an idea and a business model that matches best with your idea. It helps if you can put your idea down to paper and then try validating it. Ask your friends and family what do they think of it, ask your colleagues, ask the opinion of as many people as you can, or make an online survey and post it on social media, where you can find your audience. Alternatively, you can hire a company that does the validation for you, but this is up to you.</p>\r\n\r\n<p><strong>Strategy Number 1: </strong><strong>Free</strong></p>\r\n\r\n<p>The free apps are usually ad-supported or connected to a larger brand, for the promotion of a product or a service.</p>\r\n\r\n<p>Everybody loves free stuff, so it`s no surprise that this kind of apps are&nbsp;often downloaded, but we have to make money somehow. This strategy requires you places ads inside your app to make money. Every time someone sees the ad or clicks on it, you get paid an amount of money. You can go even further by removing the ads for the users who are willing to pay to use your app ad-free. The best example of this would be Youtube.</p>\r\n\r\n<p>Popular ad networks which you can use</p>\r\n\r\n<ul>\r\n	<li>Facebook Audience Network (FAN). More than 1 billion users view ads from this network each month, they help you with tools and support you to grow your money stack.</li>\r\n	<li>AdMob from Google more than 1 million apps use AdMob and is able to provide advertiser demand in more than 200 countries.</li>\r\n</ul>\r\n\r\n<p><strong>Strategy Number 2: </strong><strong>Freemium</strong></p>\r\n\r\n<p>It is free to download, but it includes one of the following</p>\r\n\r\n<ul>\r\n	<li>in-app billing and ads</li>\r\n	<li>subscriptions</li>\r\n	<li>donations</li>\r\n</ul>\r\n\r\n<p>You can offer the app for free, with limited features, or for a limited time. Two popular companies that use the freemium model successfully are Dropbox and Spotify. In the case of Dropbox you can sign up for free, you receive&nbsp; 2 GB of storage and you can access your files from anywhere, BUT if you need more space, and let`s be honest 2 GB is not a lot these days,&nbsp; you will have to purchase the subscription plan for which you have to pay monthly or yearly.</p>\r\n\r\n<p>Another commonly used and profitable solution in the freemium model is in-app billing. It allows you to sell durable or consumable digital goods.</p>\r\n\r\n<p>Game apps sell durable goods, for example, a feature of the game that will always be available to you, or consumable goods for example coins that you use in the game when playing. This way when you run out, you purchase again. These are two very profitable strategies as they are often purchased on&nbsp;impulse and they&nbsp;can be a big moneymaker, especially for game apps.</p>\r\n\r\n<p>The freemium model has successfully expanded to other categories such as music, dating, news, and messaging.</p>\r\n\r\n<p><strong>Strategy Number 3: </strong><strong>Premium</strong></p>\r\n\r\n<p>Premium apps require to be bought before downloading. It is a simple monetization model, but you have to do your homework to know how much you should charge. You set up a merchant account in the app store and you set your price. This can be a great approach, but you can achieve even greater revenue if you use a combination of ads and in-app purchases as well.</p>\r\n\r\n<p>Premium apps can be found many, just go to the Google play store and see the top paid chart, there are premium apps from driving theory tests, navigation apps, and even sky view.</p>\r\n\r\n<p>What you need to know, and take into consideration is that Google and Apple charge 30% commission for paid apps, in-app purchases, and subscriptions. The commission falls 15% for subscriptions after a year.</p>\r\n\r\n<p>In the end, it all comes down to your idea and your users. You need to carefully analyze every aspect of your business and not let the profit slip. You can test and vary these business models to get the best result.</p>\r\n\r\n<p>Contact us at <a href=\"https://platformfactory.co.uk/\">https://platformfactory.co.uk/</a> where we can offer you the best service to develop your app.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-10-25 18:00:23', '2020-10-25 18:05:32'),
(4, '316332a6f78f8d60174d83cb4985f1df.jpg', 'Administrador', 'Internet', 'What is a digital platform?', '<p><strong>What is a &nbsp;platform?</strong></p>\r\n\r\n<p>With the rise of the internet in the past decades, platform technologies have become the new cool. Apple, Google, and also before that, Microsoft and its operating system are all digital companies that have a particular technology at the heart of their business. These are technological building blocks that we call platforms. They are used by developers to develop software, apps, e-commerce sites, and services that are compatible with these digital platforms.</p>\r\n\r\n<p>A platform can be anything from an educational platform to social media or search platform.</p>\r\n\r\n<p>We will stay at the easy example of the Google platform.</p>\r\n\r\n<p>For example, Google and its Apps is a whole ecosystem of innovators all around the world. They have access to software development tools with which they will develop a wide array of products that will be compatible with the Android Smart Phone. The innovators and developers are not employees of Google and are also not suppliers in the traditional sense.&nbsp; This trend acts as a &nbsp;magnet to attracts developers.</p>\r\n\r\n<p>Google being a platform, the users get their information for free by typing their search into Google and getting the result. But how does Google get paid? They get paid by the advertisers, who in turn get access to the user, who at the right time are interested in the advertiser`s products or services.</p>\r\n\r\n<p>Google acts as an intelligent intermediary, connecting customers and advertisers, who don`t know where or when a customer happens to be searching for their product or service.</p>\r\n\r\n<p>This business model is incorporated into all the platforms we know about. It`s like a triangle where you have the platform in the middle and two different groups of users on each side. The users each get something by connecting to the platform, and one side partially or completely funds the other side.</p>\r\n\r\n<p>More examples of popular platforms that we all know, and regularly use are social media platforms like Facebook and Linkedin, media sharing platforms like Youtube, service platforms like Netflix and Airbnb or knowledge-oriented like Quora, and much more.</p>\r\n\r\n<p>Do you have an&nbsp;idea and you would like to have your own platform or app?&nbsp;</p>\r\n\r\n<p>Contact us at <a href=\"https://platformfactory.co.uk/\">platformfactory.co.uk</a> we are happy to help!</p>\r\n', '2020-10-25 18:04:00', '2020-10-25 18:04:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `status`, `id_blog`, `nome`, `email`, `website`, `comment`, `created_at`) VALUES
(1, 0, 3, 'Lucas', 'lucas.s.morais23@gmail.com', '', 'Very interesting', '2020-10-29 04:47:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `book_call`
--

CREATE TABLE `book_call` (
  `id` int(11) NOT NULL,
  `service` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `client_phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `book_call`
--

INSERT INTO `book_call` (`id`, `service`, `description`, `client_name`, `client_email`, `client_phone`, `created_at`) VALUES
(1, 'Develop a website or App', 'Fist test', 'Lucas da Silva Morais', 'Lucas da Silva Morais', '33988169097', '2020-09-29 18:08:16'),
(2, 'Develop a website or App', 'Test', 'Lucas', 'Lucas', '33988169097', '2020-09-29 20:35:07'),
(3, 'Develop a website or App', 'Jhjjbj teste', 'Graciane Augusto Martins', 'Graciane Augusto Martins', '21959037919', '2020-09-30 09:24:57'),
(4, 'Develop a website or App', 'teste', 'Graciane', 'Graciane', '121 9590379', '2020-10-22 16:16:39'),
(5, 'Validate an idea', 'fsadfadafdsafsafdsa', 'alguem', 'alguem', '12343', '2020-10-22 16:19:58'),
(6, 'Develop a website or App', 'Teste', 'Lucas da Silva Morais', 'Lucas da Silva Morais', '33988169097', '2020-10-29 04:33:28'),
(7, 'Develop a website or App', 'Teste', 'Lucas da Silva Morais', 'Lucas da Silva Morais', '33988169097', '2020-10-29 04:33:28'),
(8, 'Develop a website or App', 'vdvsdb', 's', 's', 's', '2020-11-09 11:47:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `update_at`) VALUES
(1, 'Lucas', 'lucas.s.morais23@gmail.com', 'Teste do contact us', 'Mensagem de teste', '2020-10-29 04:32:46', '2020-10-29 04:32:46'),
(2, 'Xxx', 'C.o.gabriel@gmail.com', 'Xxx', 'Xxxxx', '2020-11-19 09:06:07', '2020-11-19 09:06:07'),
(3, 'Graciane', 'cianecps@yahoo.com.br', 'teste', 'teste1', '2020-11-19 12:42:03', '2020-11-19 12:42:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `descr` text DEFAULT NULL,
  `technologies` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `name`, `descr`, `technologies`, `logo`) VALUES
(1, 'Prato Fit', 'Descrição do aplicativo', 'React JS, React Native, Node.JS', 'capa-prato-fit.png'),
(2, 'Horista', 'Descrição do app horista', 'PHP, MySql', 'capa-horista.png'),
(3, 'Idiomaster', 'Descrição do app idiomaster para aprender ingles', 'React Native, Node.JS, Mongodb', '049772afef4d79a51722f797fb9a9a10.png'),
(4, 'Busco Sócio', 'Descrição do app busco socio', 'ReactJS, React Native, Node.JS, Mongodb, Firebase', 'capa-busco-socio.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects_photos`
--

CREATE TABLE `projects_photos` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `descr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projects_photos`
--

INSERT INTO `projects_photos` (`id`, `project_id`, `photo`, `descr`) VALUES
(1, 1, 'tela-1 prato fit.png', 'Imagem 1'),
(2, 1, 'tela-2 prato fit.png', 'Imagem 2'),
(3, 1, 'tela-3 prato fit.png', 'Tela 3'),
(4, 2, 'tela-1 horista.jpg', ''),
(5, 2, 'tela-2 horista.jpg', ''),
(6, 2, 'tela-3 horista.jpg', ''),
(7, 3, 'login-idiomaster.png', ''),
(8, 3, 'idiomaster 1.png', ''),
(9, 3, 'idiomaster 2.png', ''),
(10, 4, 'tela-1-busco-socio.jpg', ''),
(11, 4, 'tela-2-busco-socio.jpg', ''),
(12, 4, 'tela-3-busco-socio.jpg', ''),
(13, 5, '94bade31dd34cd38624becfef6bbfcd5.png', NULL),
(14, 6, '9f39f2b34d21a758bb4448cf88e010e1.png', NULL),
(15, 6, '527feeabe6b7a97d4c1a20ccecc4d68f.png', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `book_call`
--
ALTER TABLE `book_call`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projects_photos`
--
ALTER TABLE `projects_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `book_call`
--
ALTER TABLE `book_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `projects_photos`
--
ALTER TABLE `projects_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
