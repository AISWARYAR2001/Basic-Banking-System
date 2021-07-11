
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` text,
  `receiver` text,
  `balance` int(8) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'R.AISWARYA', 'aiswarya942001@gmail.com', 25000),
(2, 'R.PALRAJ', 'palrai987@gmai.com', 20000),
(3, 'D.RAMACHANDRA BOOPATHI', 'ramachandraboopathi@gmail.com', 30000),
(4, 'R.MARIMUTHU', 'marimuthu987@gmail.com', 29000),
(5, 'A.ASHWIN', 'ashwin942000@gmail.com', 25000),
(6, 'R.MADHIVATHANI', 'madhivathni0904@gmail.com', 25000),
(7, 'M.RITHIKA', 'rithika19@gmail.com', 21000),
(8, 'M.DHANSIKQA', 'dhansika67@gmail.com', 15000),
(9, 'M.HARI', 'hariharan@gmail.com', 13000),
(10, 'R.JANANI', 'janani12@gmail.com', 17000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

