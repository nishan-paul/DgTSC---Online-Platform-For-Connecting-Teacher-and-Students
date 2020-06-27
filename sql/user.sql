-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15_dreams_for_tomorrow`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `username` text CHARACTER SET utf8 NOT NULL,
  `phone` text CHARACTER SET utf8 NOT NULL,
  `education` text CHARACTER SET utf8 DEFAULT NULL,
  `profession` text CHARACTER SET utf8 DEFAULT NULL,
  `bio` text CHARACTER SET utf8 DEFAULT NULL,
  `address` text CHARACTER SET utf8 DEFAULT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `role` text CHARACTER SET utf8 NOT NULL,
  `publish` date NOT NULL,
  `edit` date NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `state` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `phone`, `education`, `profession`, `bio`, `address`, `email`, `password`, `role`, `publish`, `edit`, `rating`, `state`) VALUES
(0, 'Nishan Paul', 'nishan', '01843083677', '&lt;p&gt;But I know the rage that drives you. That impossible anger strangling the grief, until the memory of your loved ones is just poison in your veins. And one day you catch yourself wishing the person you loved had never existed, so you\'d be spared your pain.&lt;/p&gt;', '&lt;p&gt;Programming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots.&lt;/p&gt;', '&lt;p&gt;As you know, madness is like gravity, all it takes is a little push.&lt;/p&gt;', '&lt;p&gt;Home is where love resides, memories are created, friends always belong, and laughter never ends.&lt;/p&gt;', 'nishan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2019-11-14', '2019-11-14', 0, 'active'),
(1, 'Saikat SMD', 'saikat', '01843083678', '&lt;p&gt;It\'s not who you are underneath, it\'s what you do that defines you.&lt;/p&gt;', '&lt;p&gt;It?s hard enough to find an error in your code when you?re looking for it; its even harder when you?ve ASSUMED your code is ERROR-FREE.&lt;/p&gt;', '&lt;p&gt;If you?re good at something, never do it for free&lt;/p&gt;', '&lt;p&gt;In this home? We do second chances. We do real. We do mistakes. We do I?m sorrys. We do loud really well. We do hugs. We do together best of all.&lt;/p&gt;', 'saikat@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'teacher', '2019-11-15', '2019-11-15', 205, 'active'),
(2, 'Ayan Chakraborty', 'ayan', '01843083679', '&lt;p&gt;People need dramatic examples to shake them out of apathy, and I can\'t do that as Bruce Wayne. As a man, I\'m flesh and blood. I can be ignored. I can be destroyed. But as a symbol, as a symbol I can be incorruptible, I can be everlasting.&lt;/p&gt;', '&lt;p&gt;When words become unclear, I shall focus with photographs. When images become inadequate, I shall be content with silence.&lt;/p&gt;', '&lt;p&gt;Introduce a little anarchy. Upset the established order, and everything becomes chaos. I\'m an agent of chaos.&lt;/p&gt;', '&lt;p&gt;You will never be completely at home again, because part of your heart will always be elsewhere. That is the price you pay for the richness of loving and knowing people in more than one place.&lt;/p&gt;', 'ayan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'teacher', '2019-11-16', '2019-11-16', 160, 'active'),
(3, 'Akanda Pavel', 'pavel', '01843083680', '&lt;p&gt;A vigilante is just a man lost in the scramble for his own gratification. He can be destroyed, or locked up. But if you make yourself more than just a man, if you devote yourself to an ideal, and if they can\'t stop you, then you become something else entirely.&lt;/p&gt;', '&lt;p&gt;Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever? It remembers little things, long after you have forgotten everything.&lt;/p&gt;', '&lt;p&gt;Do I really look like a guy with a plan? You know what I am? I\'m a dog chasing cars. I wouldn\'t know what to do with one if I caught it! You know, I just... *do* things.&lt;/p&gt;', '&lt;p&gt;Bless out house as we come and go. Bless our home as the children grow. Bless our families as they gather in. Bless our home with love and friends.&lt;/p&gt;', 'pavel@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', '2019-11-17', '2019-11-17', 0, 'active'),
(4, 'Pulak Goswami', 'pulak', '01843083681', '&lt;p&gt;Over the ages, our weapons have grown more sophisticated. With Gotham, we tried a new one: Economics. But we underestimated certain of Gotham\'s citizens... such as your parents. Gunned down by one of the very people they were trying to help. Create enough hunger and everyone becomes a criminal. Their deaths galvanized the city into saving itself... and Gotham has limped on ever since. We are back to finish the job. And this time no misguided idealists will get in the way. Like your father, you lack the courage to do all that is necessary. If someone stands in the way of true justice... you simply walk up behind them and stab them in the heart.&lt;/p&gt;', '&lt;p&gt;We must learn to reawaken and keep ourselves awake, not by mechanical aid, but by an infinite expectation of the dawn.&lt;/p&gt;', '&lt;p&gt;I believe that whatever doesn\'t kill you simply makes you stranger.&lt;/p&gt;', '&lt;p&gt;I believe that being successful means having a balance of success stories across the many areas of your life. You can\'t truly be considered successful in your business life if your home life is in shambles.&lt;/p&gt;', 'pulak@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', '2019-12-08', '2019-12-08', 0, 'active'),
(5, 'Sajid Ahmed', 'sajid', '01843083682', '&lt;p&gt;You have learned to bury your guilt with anger. I will teach you to confront it, and to face the truth. You know how to fight six men. We can teach you how to engage six hundred. You know how to disappear. We can teach you to become truly invisible.&lt;/p&gt;', '&lt;p&gt;If a man does not keep pace with his companions, perhaps it is because he hears a different drummer. Let him step to the music which he hears, however measured or far away.&lt;/p&gt;', '&lt;p&gt;Their morals, their code; it\'s a bad joke. Dropped at the first sign of trouble. They\'re only as good as the world allows them to be. You\'ll see- I\'ll show you. When the chips are down these, uh, civilized people? They\'ll eat each other. See I\'m not a monster, I\'m just ahead of the curve.&lt;/p&gt;', '&lt;p&gt;I believe that being successful means having a balance of success stories across the many areas of your life. You can\'t truly be considered successful in your business life if your home life is in shambles.&lt;/p&gt;', 'sajid@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', '2019-12-24', '2019-12-24', 0, 'active'),
(6, 'Mehedi Tonmoy', 'tonmoy', '01843083683', ' Oh, you think darkness is your ally. But you merely adopted the dark; I was born in it, molded by it. I didn\'t see the light until I was already a man, by then it was nothing to me but BLINDING! The shadows betray you, because they belong to me! I will show you where I have made my home while preparing to bring justice. Then I will break you.', '&lt;p&gt;Architecture is the learned game, correct and magnificent, of forms assembled in the light.&lt;/p&gt;', 'Those mob fools want you gone. So they can get back to the way things were. But I know the truth, there?s no going back. You?ve changed things?forever.', 'I believe that being successful means having a balance of success stories across the many areas of your life. You can\'t truly be considered successful in your business life if your home life is in shambles.', 'tonmoy@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', '2020-01-17', '2020-01-17', 0, 'inactive'),
(7, 'Shihab Kabir', 'shihab', '01843083684', NULL, NULL, NULL, NULL, 'shihab@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'student', '2020-01-24', '2020-01-24', 0, 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
