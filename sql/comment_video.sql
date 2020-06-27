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
-- Table structure for table `comment_video`
--

CREATE TABLE `comment_video` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `publish` date NOT NULL,
  `edit` date NOT NULL,
  `uid` int(11) NOT NULL,
  `state` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_video`
--

INSERT INTO `comment_video` (`id`, `pid`, `content`, `publish`, `edit`, `uid`, `state`) VALUES
(0, 0, 'সবচেয়ে গুরুত্বপূর্ণ এবং প্রধান চরিত্র ব্যাটম্যানের ভূমিকায় তিনি বেছে নেন সদ্য ‘দ্য মেশিনিস্ট’ সিনেমার কাজ শেষ করা ক্রিশ্চিয়ান বেলকে। ‘দ্য মেশিনিস্ট’ সিনেমার জন্য নিজের শরীরে ওজন অস্বাভাবিকভাবে কমিয়ে ফেলেছিলেন বেল। সেসময় এমন একজনকে ব্যাটম্যান হিসেবে মনোনীত করা হয়তো কেবল নোলানের পক্ষেই সম্ভব ছিলো। ব্যাটম্যানের উপযোগী শারীরিক গঠন তৈরি করার জন্য তিনি বেলকে ৬ মাস সময় দেন। আর ৬ মাসের পর পেয়ে যান তার কাঙ্ক্ষিত ব্যাটম্যানরুপী ক্রিশ্চিয়ান বেলকে। দর্শকদের মন জয় করে ‘ব্যাটম্যান বিগিন্স’ আয় করে প্রায় ২৩ কোটি ৫০ লাখ ডলার।', '2019-12-23', '2019-12-23', 0, 'active'),
(1, 1, 'এরপর ২০০৬ সালে ১৯ শতকের দুই প্রতিদ্বন্দ্বী জাদুকরের কাহিনী নিয়ে নোলান তৈরি করেন ‘দ্য প্রেস্টিজ’ নামক মিস্ট্রি থ্রিলার ঘরানার সিনেমা যার সূত্র ক্রিস্টোফার প্রিস্টের একই নামের বই। নোলান ভ্রাতাদ্বয়ের চিত্রনাট্যের এই সিনেমা যৌথভাবে প্রযোজনা করেন ক্রিস্টোফার নোলানের স্ত্রী এমা এবং বন্ধু এরন রাইডার।', '2019-12-23', '2019-12-23', 1, 'active'),
(2, 2, 'নোলানের অসাধারণ নৈপুণ্য আর নির্মাণশৈলীর কারণে সিনেমাটি জয় করে নেয় বিশ্বের লাখো দর্শকের মন। ৪০ মিলিয়ন ডলার বাজেটের এই সিনেমাটি আয় করে নেয় প্রায় ১০৯ মিলিয়ন ডলার। তারই সাথে বেস্ট সিনেমাটোগ্রাফি এবং বেস্ট আর্ট ডিরেকশন ক্যাটাগরিতে একাডেমি এওয়ার্ডের জন্য মনোনীত হয় ‘দ্য প্রেস্টিজ’। সিনেমাতে মুখ্য চরিত্রে অভিনয় করেন ব্যাটম্যান এবং উলভারিন খ্যাত ক্রিশ্চিয়ান বেল এবং হিউ জ্যাকম্যান।', '2019-12-23', '2019-12-23', 2, 'active'),
(3, 3, 'এরপরের সময়টা ইতিহাস তৈরির। ‘ব্যাটম্যান বিগিন্স’ এর বহুল আলোচিত এবং প্রতীক্ষিত সিক্যুয়াল ‘দ্য ডার্ক নাইট’ এর ইতিহাস। এই সিনেমায় নোলান হিথ লেজারকে দেন জোকারের এক ভিন্ন রূপ। নোলান কি জানতেন, হিথ লেজারের অমায়িক অভিনয় দক্ষতায় সুপারহিরোকে ছাপিয়ে ভিলেনকেই সবাই আপন করে নেবে? আর মুক্তির কয়েক সপ্তাহ পরেই তার সিনেমা কালজয়ী হয়ে উঠবে?', '2019-12-23', '2019-12-23', 3, 'active'),
(4, 4, 'হয়তো জানতেন না। কারণ শুনতে অবাক লাগলেও এটাই সত্যি যে, নিজের দীর্ঘ সময় ধরে পুষে রাখা স্বপ্নকে বাস্তবায়িত করার জন্য যে টাকার দরকার ছিল, তার যোগানের জন্য জন্যই মূলত ‘ব্যাটম্যান’ সিরিজ নিয়ে কাজ করার সিদ্ধান্ত নিয়েছিলেন নোলান। কিন্তু নামটা যখন ক্রিস্টোফার নোলান, তখন ভেবে নেয়াই চলে আর পাঁচটা সাধারণ সুপারহিরো সিনেমার মতন হতে যাচ্ছে না সেটি, হয়েছেও তাই। এই সিনেমায় তিনি প্রচলিত সুপারহিরো সিনেমার সংজ্ঞা বদলে দিয়ে দুর্নীতি, রাজনীতি, নৈরাজ্য, ভালোবাসা, আত্মত্যাগ সবকিছু মিলিয়ে এক অসাধারণ মনস্তত্তের অবতারণা ঘটিয়েছেন। যার ফলস্বরূপ চলচ্চিত্রপ্রেমীদের মনে আজীবন জায়গা দখল করে নিয়েছেন অভিনেতা হিথ লেজার এবং নির্মাতা ক্রিস্টোফার নোলান।', '2019-12-29', '2019-12-29', 4, 'active'),
(5, 5, '২০১০ সালকে নোলানের ক্যারিয়ারের অন্যতম গুরুত্বপূর্ণ বছর হিসেবেই বলা যায়। কারণ এই বছর তিনি তার দীর্ঘ ১০ বছরের কল্পনা, পরিকল্পনা এবং স্বপ্নকে বাস্তবে রূপান্তরিত করে তৈরি করেন সাই-ফাই ঘরানার সিনেমা ‘ইনসেপশন’। স্বপ্নকে বুনিয়াদ করে নিজের লেখা চিত্রনাট্যকে চলচ্চিত্রে রূপ দিয়ে তিনি প্রমাণ করে দেন, তার চিন্তার গভীরতা, অতুলনীয় সৃষ্টিশীলতা এবং অনন্য শিল্পীস্বত্ত্বাকে।', '2019-12-29', '2019-12-29', 5, 'active'),
(6, 6, 'আধুনিক প্রযুক্তির এই যুগেও নোলান এই সিনেমায় ব্যবহার করেন ফটো ক্যামিকেল টাইমিং যা সিনেমায় ব্যবহৃত অনেক পুরনো প্রযুক্তি। সিনেমার মুখ্য চরিত্র হিসেবে তিনি বেছে নেন লিওনার্দো ডিক্যাপ্রিওকে। বিশ্বজোড়া হাজারো বিমোহিত দর্শককে সিনেমার শেষ দৃশ্য নিয়ে সংশয়ে ফেলে ‘ইনসেপশন’ আয় করে নেয় প্রায় ৮২৫ মিলিয়ন ডলার।', '2019-12-29', '2019-12-29', 6, 'active'),
(7, 7, '‘ইনসেপশন’ দর্শকদের মন যতটা জয় করে নিয়েছিল, ঠিক ততটাই হতাশ করেছিল ব্যাটম্যান সিরিজের শেষ অধ্যায় ‘দ্য ডার্ক নাইট রাইজেস’। সিনেমায় গল্পের কিছু অসামঞ্জস্যতার ফলে সমালোচনার মুখোমুখি হন নোলান।', '2019-12-29', '2019-12-29', 7, 'active'),
(8, 8, '‘দ্য ডার্ক নাইট রাইজেস’ সিনেমার ব্যর্থতা নিয়ে বসে থাকেননি নোলান। বরং আরো অনেক বেশি উদ্দীপনা নিয়ে তার পরবর্তী সিনেমার কাজ শুরু করেন। কল্পবিজ্ঞানপ্রিয় সিনেমা পিপাসুদের মনে আনন্দের জোয়ার নিয়ে আসে ২০১৪ সালে তার নির্মিত গ্র্যাভিটেশনাল ফিজিক্স এবং অ্যাস্ট্রোফিজিক্সের সূত্রনির্ভর সিনেমা ‘ইন্টারস্টেলার’। সিনেমার চিত্রনাট্য লিখতে তিনি সাহায্য নিয়েছেন তাত্ত্বিক পদার্থবিদ কিপ স্টেফান থোর্নের। সিনেমার ভিএফএক্স উপদেষ্টা হিসেবে কাজও করেছেন।', '2019-12-29', '2019-12-29', 0, 'active'),
(9, 9, 'ওয়ার্ম-হোল, ব্ল্যাকহোল, স্পেস-টাইম রিপ্রেজেন্টেশন ভিজুয়ালি যতটা সম্ভব নির্ভুলভাবে চিত্রায়িত করার চেষ্টা করেন নোলান। ৮৭তম একাডেমি এওয়ার্ডে সর্বোচ্চ ২৬টি বিভাগে মনোনয়ন লাভ করার পাশাপাশি সে বছর সর্বোচ্চ সাতটি বিভাগে অস্কার লাভ করে ছবিটি।', '2019-12-29', '2019-12-29', 1, 'active'),
(10, 10, 'থ্রিলার, সাই-ফাই, সুপারহিরো ঘরানার একেক পর এক অনবদ্য সিনেমা উপহার দেবার পর নোলান সিদ্ধান্ত নিলেন যুদ্ধের পটভূমিতে সিনেমা তৈরি করবেন। চলতি বছরের জুলাই মাসে মুক্তি পেল তার পরিচালিত সিনেমা ‘ডানকার্ক‘।\r\n\r\n', '2019-12-29', '2019-12-29', 2, 'active'),
(36, 10, '&lt;p&gt;টানা ৩দিন নীলক্ষেতের টাইপ-দানবের সাথে রীতিমতো কুস্তি লড়ে ৩য় কবিতার বইটা কমপোজ করিয়েছিলাম। করিয়ে অনিবার্য কারণে দীর্ঘ দিন বসে ছিলাম। বহু সাধনা করে প্রেসের শিডিউল পেলাম। আজ আড়াইটায় প্রেসে গিয়ে দেখি প্রেসওয়ালা উধাও, এক ঘণ্টার কথা বলে মহাশয় সোয়া চার ঘণ্টা বাদে এলেন! এই সোয়া চার ঘণ্টা ফকিরাপুলের এক রেস্তোরাঁয় ফকিরের মতো ঝিমিয়েছি। প্রেসের কমপিউটারে পেন ড্রাইভ ঢুকিয়ে দেখি ভাইরাসের আক্রমণে লেখা উধাও! ৭টায় ছুটলাম নীলক্ষেতে লোকাল বাসের হাতলে ঝুলে, পুরোনো ফাইল ঘাঁটিয়ে ডাটা নিয়ে ফকিরাপুল এসে শুনি প্রেসমানব বাসায় চম্পট! কাল আবার তার সাথে দেখা হতেও পারে। এখনো কত কাজ বাকি!&lt;/p&gt;&lt;p&gt;এভাবে ৪টা বইকে আলোর মুখ দেখাতে গিয়ে কত রাস্তা মেপেছি, কত রেস্তোরাঁয় ঝিমিয়েছি, প্রকাশক-প্রেসমানবদের কতটা প্রেশারে কতটা তিক্ত হয়েছি, চোখের জলে নাকের জলে কতটা সিক্ত হয়েছি, গাঁটের পয়সা খরচ করে কতটা রিক্ত হয়েছি; তা কেই বা জানে, কেই বা জানতে চায়!&lt;br&gt;৪টা বই প্রকাশ করতে গিয়ে চামড়া যতটা পুরু হয়েছে, তাতে সুঠামদেহী কোনো বল্লাও আমার গায়ে হুল ফুটিয়ে সুবিধে করতে পারবে না।&lt;/p&gt;&lt;p&gt;এই অকথ্য অবর্ণনীয় যন্ত্রণা-যাতনার পুরস্কার হিসেবে বইমেলায় শুনতে পাব ৩টি অমৃতপ্রশ্ন --&lt;/p&gt;&lt;p&gt;অমৃত ১ : বই বেইচ্চা এইবার কত কামাইলা?&lt;br&gt;অমৃত ২ : প্রকাশক তোমারে দিছে, না তুমি প্রকাশকরে দিছো?&lt;br&gt;অমৃত ৩ : আমাগো সৌজন্য কপি কই?&lt;/p&gt;', '2020-02-01', '2020-02-01', 1, 'active'),
(37, 9, '&lt;p&gt;জীবনের প্রথম ভোটটি, এখন থেকে দশ বছর এক দিন আগে, কোন দলকে দিয়েছিলাম— আমার নিয়মিত পাঠকদের প্রত্যেকেই জানেন। ঐ একই প্রার্থী পরবর্তী সাধারণ নির্বাচনে বিনা প্রতিদ্বন্দ্বিতায় সাংসদ হয়ে যাওয়ায় আর ভোট দিতে হয়নি। ঢাকা সিটি করপোরেশনে সর্বশেষ যে নির্বাচন হলো, তাতেও একই দলের প্রার্থীকে ভোট দিয়েছি। দুই নির্বাচনেই ভোট দিয়েছি বিনা বাধায়।&lt;/p&gt;&lt;p&gt;দশ বছর আগে যাকে ভোট দিয়ে ভোটার হিশেবে অভিষিক্ত হয়েছিলাম, আজও তাকেই ভোট দেওয়ার জন্য ভোটকেন্দ্রে (ঢাকা-৯) গিয়েছি। ব্যালটপত্রটি হাতে নিয়ে যখনই পর্দাঘেরা কুঠুরিতে ঢুকলাম, লক্ষ করলাম আমার পেছনে দাঁড়িয়ে আছেন ছয় ফুট উচ্চতাবিশিষ্ট হৃষ্ট-পুষ্ট-বলিষ্ঠ একটি ভাই। চোখে চোখ রেখে \'আপনি কে\' শুধোতেই ভাইটি লাজুক হেসে \'এই তো আমি আর কী\' বলে জবাব দিলেন। দাঁড়িয়ে থাকার কারণ হিশেবে তিনি বললেন \'এই তো আছি আর কী\'।&lt;/p&gt;&lt;p&gt;আমি \'ভোট গোপনে দেব, প্রকাশ্যে দেব না\' বলার পর তিনি \'দেন আপনে, সমস্যা নাই\' বলে ঠায় দাঁড়িয়েই রইলেন। বিরস বদনে বললাম, \'যে মার্কার তরফ থেকে আপনি টহল দিচ্ছেন, ভোট আমি ঐ মার্কায়ই দিতে এসেছি।\' ভাইটি তাতেও সরলেন না; বললেন, \'অনেকে ব্যালট ঠিকমতো ভাঁজ করতে পারে না, আমি ভাঁজ ঠিক করে দিই আর কী।\'&lt;/p&gt;&lt;p&gt;শেষে ওনার সামনেই ব্যালটে সিল মারলাম, ভাই ব্যালটটি নিয়ে আলতো করে ভাঁজ করে কুঠুরি থেকে ব্যালট বাকশো অবধি আমাকে প্রোটোকল দিয়ে নিয়ে এসে ব্যালটখানি নিজে বাকশে ঢুকিয়ে দিলেন।&lt;/p&gt;&lt;p&gt;আগে যে দুইবার ভোট দিয়েছি, দুইবারই ব্যালটপত্র নিজেকে ভাঁজ করতে হয়েছে এবং তা বাকশে নিজেকেই ঢোকাতে হয়েছে; যা ছিল অত্যন্ত শ্রমসাধ্য একটি কাজ। ছয়ফুটি ভাইটি আজ সেই শ্রম থেকে রেহাই দিয়ে, ত্রাণকর্তা হিশেবে আবির্ভূত হয়ে, আমাকে নিঃস্বার্থভাবে সহযোগিতা করলেন। এমন জনদরদি ভাই-ব্রাদার একমাত্র আমার কেন্দ্রেই ছিল— গর্ব করে এ কথা আমি বলতেই পারি। সকাল থেকে শুধু ভাবছি— এত ভালো মানুষ পৃথিবীতে এখনও আছে!&lt;/p&gt;&lt;p&gt;হোটেল-রেস্তোরাঁয় কোনো বেয়ারা এভাবে টিশু এগিয়ে ভাঁজ করে গ্লাসে সেঁধিয়ে দিয়ে গেলে ভোজনশেষে তাকে সাধারণত আমরা কিছু টিপস দিয়ে আসি। আজ খুব ইচ্ছে করছিল এই দরদি ভাইটিকে কিছু টাকা টিপস দিয়ে আসতে। পরক্ষণেই মনে হলো— এমন একজন মানুষকে টাকা দিয়ে অপমানিত করতে নেই, ভালোবাসা টাকা দিয়ে কেনা যায় না, ভাইটির জন্য শুধুই ভালোবাসা।&lt;/p&gt;', '2020-02-01', '2020-02-01', 2, 'active'),
(38, 8, '&lt;p&gt;একটি রাষ্ট্রের কার্যক্রম তিনটি বিভাগকে ঘিরে আবর্তিত হওয়ার কথা— আইন বিভাগ, শাসন বিভাগ আর বিচার বিভাগ। এই তিন বিভাগের কর্মকাণ্ডে সমন্বয় থাকলে রাষ্ট্র সুস্থ থাকে, না থাকলে রাষ্ট্র অসুস্থ হয়ে পড়ে। কিন্তু বাংলাদেশ এখন আবর্তিত হচ্ছে একটিমাত্র জিনিশকে কেন্দ্র করে। ঐ জিনিশটি না থাকলে এখন আইন বিভাগের আকাশে সূর্য উদিত হয় না, শাসন বিভাগের শ্বাসনালীতে বায়ু প্রবাহিত হয় না, বিচার বিভাগের বিরানভূমিতে ফসল ফলে না। এমন দিন হয়তো শিগগিরই ঘনিয়ে আসছে— ঐ জিনিশটি ছাড়া যেদিন গাছের পাতা নড়বে না, মাছেরা পোনা ছাড়বে না, পাখিরা ডিম পাড়বে না, স্থগিত থাকবে গর্ভবতীদের বাচ্চাপ্রসবের তারিখ। জিনিশটি প্রধানমন্ত্রীর নির্দেশ।&lt;/p&gt;', '2020-02-01', '2020-02-01', 1, 'active'),
(39, 6, '&lt;p&gt;বিচারপ্রার্থী যখন টের পায় পুলিশকে দিয়ে কাজ হবে না, পুলিশ অভিযুক্তকে গ্রেপ্তার করবে না, গ্রেপ্তার করলেও সক্রিয়ভাবে তদন্ত করবে না এবং বিচারকরা আন্তরিকভাবে বিচার না করে রাজনৈতিক চাপের কাছে নতি স্বীকার করে অভিযুক্তকে খালাশ করে দেবেন; তখন বিচারের ব্যাপারে ইহলোকে প্রধানমন্ত্রী আর পরলোকে ঈশ্বরের ওপর ভরসা করা ছাড়া আর কোনো উপায় থাকে না। বিচারপ্রার্থীদের এই প্রধানমন্ত্রীনির্ভরতা চোখে আঙুল-কনুই-থুতনি ঢুকিয়ে বলে দেয়— দেশের পুলিশপ্রশাসন ও বিচার বিভাগ অকার্যকর, টানা এক যুগ ক্ষমতায় থেকেও রাষ্ট্রের এই দুই গুরুত্বপূর্ণ অঙ্গকে তিনি নিজপায়ে চলতে শেখাতে পারেননি।&lt;/p&gt;', '2020-02-01', '2020-02-01', 1, 'active'),
(40, 2, '&lt;p&gt;আওয়ামি লিগ বাংলাদেশে একাদিক্রমে রেকর্ডসংখ্যক তৃতীয়বারের মতো ক্ষমতাসীন। এই তিন মেয়াদের প্রথম মেয়াদে সরকার এতটা প্রধানমন্ত্রীনির্ভর ছিল না, দেশে তখন প্রধানমন্ত্রীর নির্দেশেরও এত প্রাদুর্ভাব ছিল না। তৎকালীন মন্ত্রিসভা অপেক্ষাকৃত সফলও ছিল, মন্ত্রীদের মুখে উদ্ভট উক্তির ফুলঝুড়ি তুলনামূলক কম ছিল, গোটা মন্ত্রিসভার যৌথ তৎপরতার কারণে তখন প্রধানমন্ত্রীকেও নির্দেশ কম দিতে হতো। কারণ ঐ সরকারটি ক্ষমতায় এসেছিল দিবা ভোটে। এর পরের নির্বাচনে আওয়ামি লিগ ওয়াকওভার পেয়েছে, সর্বশেষ নির্বাচনে যাবতীয় কর্ম সম্পাদিত হয়েছে রাতে। নিশিকালীন ভোটে নির্বাচিত জনবিচ্ছিন্ন সাংসদ-মন্ত্রীরা প্রধানমন্ত্রীর নির্দেশ ছাড়া যে ইদের কোলাকুলি কিংবা হাই তোলাতুলিও করতে পারবেন না, সেটিই স্বাভাবিক।&lt;/p&gt;', '2020-02-01', '2020-02-01', 1, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_video`
--
ALTER TABLE `comment_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_video`
--
ALTER TABLE `comment_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
