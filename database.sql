	
	CREATE TABLE IF NOT EXISTS `os_items` (
  `item_id` bigint(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `item_created_at` datetime NOT NULL,
  `item_updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `os_items`
--

INSERT INTO `os_items` (`item_id`, `item_name`, `item_body`, `item_created_at`, `item_updated_at`) VALUES
(1, 'test', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(2, 'test2', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(3, 'test3', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(4, 'test4', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(5, 'test5', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(6, 'test6', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(7, 'test7', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(8, 'test8', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(9, 'test9', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(10, 'test2', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(11, 'test10', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(12, 'test11', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(13, 'test12', 'test body', '2015-06-19 00:00:00', '2015-06-19 00:00:00'),
(14, 'test13', 'test2', '2015-06-19 00:00:00', '2015-06-19 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `os_items`
--
ALTER TABLE `os_items`
  ADD PRIMARY KEY (`item_id`), ADD KEY `item_name` (`item_name`), ADD KEY `item_created_at` (`item_created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `os_items`
--
ALTER TABLE `os_items`
  MODIFY `item_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
	
