-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 06:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ant_socar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_journal`
--

CREATE TABLE `about_journal` (
  `id` int(11) NOT NULL,
  `foundingDateAz` text DEFAULT NULL,
  `founderAz` text DEFAULT NULL,
  `profileAz` text DEFAULT NULL,
  `languagesAz` text DEFAULT NULL,
  `periodicityAz` text DEFAULT NULL,
  `formatAz` text DEFAULT NULL,
  `volumeAz` text DEFAULT NULL,
  `quantityAz` text DEFAULT NULL,
  `typographyAz` text DEFAULT NULL,
  `registrationNumAz` text DEFAULT NULL,
  `textAreaAz` longtext DEFAULT NULL,
  `ISSN` text DEFAULT NULL,
  `cover_photo` text DEFAULT NULL,
  `foundingDateRu` text DEFAULT NULL,
  `foundingDateEn` text DEFAULT NULL,
  `founderRu` text DEFAULT NULL,
  `founderEn` text DEFAULT NULL,
  `profileRu` text DEFAULT NULL,
  `profileEn` text DEFAULT NULL,
  `languagesRu` text DEFAULT NULL,
  `languagesEn` text DEFAULT NULL,
  `periodicityRu` text DEFAULT NULL,
  `periodicityEn` text DEFAULT NULL,
  `formatRu` text DEFAULT NULL,
  `formatEn` text DEFAULT NULL,
  `volumeRu` text DEFAULT NULL,
  `volumeEn` text DEFAULT NULL,
  `quantityRu` text DEFAULT NULL,
  `quantityEn` text DEFAULT NULL,
  `typographyRu` text DEFAULT NULL,
  `typographyEn` text DEFAULT NULL,
  `registrationNumRu` text DEFAULT NULL,
  `registrationNumEn` text DEFAULT NULL,
  `textAreaRu` longtext DEFAULT NULL,
  `textAreaEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_journal`
--

INSERT INTO `about_journal` (`id`, `foundingDateAz`, `founderAz`, `profileAz`, `languagesAz`, `periodicityAz`, `formatAz`, `volumeAz`, `quantityAz`, `typographyAz`, `registrationNumAz`, `textAreaAz`, `ISSN`, `cover_photo`, `foundingDateRu`, `foundingDateEn`, `founderRu`, `founderEn`, `profileRu`, `profileEn`, `languagesRu`, `languagesEn`, `periodicityRu`, `periodicityEn`, `formatRu`, `formatEn`, `volumeRu`, `volumeEn`, `quantityRu`, `quantityEn`, `typographyRu`, `typographyEn`, `registrationNumRu`, `registrationNumEn`, `textAreaRu`, `textAreaEn`, `created_at`, `updated_at`) VALUES
(0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '<p>1884-c&uuml; ildə Bakıda sahibkarların x&uuml;susi təşkilatı olan &laquo;Bakı neft sənaye&ccedil;ilərini şurası&raquo; yaradıldı. Bu Şuraya 1898-ci ilə kimi Lyudviq Nobel rəhbərlik etmişdir. 1898-ci ildə Bakı neft sənaye&ccedil;ilərinin qurultayında &laquo;Neft işi&raquo; qəzet-jurnalının təsis olunması haqqında qərar qəbul etdi. 10 yanvar 1899-cu ildən ayda iki dəfə bu qəzet-jurnal nəşr olunmağa başladı. Sonralar 1920-ci ilin may ayından etibarən jurnalın adı dəyişdirilərək &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; qoyuldu. Jurnal bu g&uuml;n də ayda bir dəfə nəşr olunur. &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; jurnalının təsis&ccedil;isi Azərbaycan D&ouml;vlət Neft Şirkətidir (SOCAR).</p>', 'issn', 'about_journal_photo/1604277825.jpg', '124124', NULL, '12412', '5345', '6341241', '457457', '412412', '456456', '4124124', '0', 'sdsadf', '1', 'dsfv', '2', 'sdfsd', '3', 'fsd', '4', 'fsdfsd', '5', '<p>sgeseg</p>', '<p>3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n<img alt=\"\" src=\"http://127.0.0.1:8000/images/seWCMX-PTTw_1604277747.jpg\" style=\"height:379px; width:250px\" />3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n3yt24n</p>', '2020-10-31 23:51:25', '2020-11-13 00:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `accept_articles`
--

CREATE TABLE `accept_articles` (
  `id` int(11) NOT NULL,
  `articlesAz` longtext DEFAULT NULL,
  `articlesRu` longtext DEFAULT NULL,
  `articlesEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accept_articles`
--

INSERT INTO `accept_articles` (`id`, `articlesAz`, `articlesRu`, `articlesEn`, `created_at`, `updated_at`) VALUES
(0, '<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/HD_wallpaper_Starry_Night_painting,_artwork,_Vincent_van_Gogh,_The_1604490683.jfif\" style=\"height:450px; width:800px\" />rererfeafafe</p>', '<p>trarar</p>', '<p>3t3wtw3t</p>', '2020-10-31 22:47:59', '2020-11-13 00:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `page_num` varchar(191) NOT NULL,
  `category_id` int(11) NOT NULL,
  `UOT_code` varchar(255) NOT NULL,
  `DOI_code` varchar(255) NOT NULL,
  `authorsAz` text DEFAULT NULL,
  `authorsRu` text DEFAULT NULL,
  `authorsEn` text DEFAULT NULL,
  `titleAz` text NOT NULL,
  `keywordsAz` text NOT NULL,
  `abstractAz` mediumtext DEFAULT NULL,
  `referencesAz` mediumtext DEFAULT NULL,
  `titleRu` text NOT NULL,
  `keywordsRu` text NOT NULL,
  `abstractRu` mediumtext DEFAULT NULL,
  `referencesRu` mediumtext DEFAULT NULL,
  `titleEn` text NOT NULL,
  `keywordsEn` text NOT NULL,
  `abstractEn` mediumtext DEFAULT NULL,
  `referencesEn` mediumtext DEFAULT NULL,
  `_token` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `journal_id`, `page_num`, `category_id`, `UOT_code`, `DOI_code`, `authorsAz`, `authorsRu`, `authorsEn`, `titleAz`, `keywordsAz`, `abstractAz`, `referencesAz`, `titleRu`, `keywordsRu`, `abstractRu`, `referencesRu`, `titleEn`, `keywordsEn`, `abstractEn`, `referencesEn`, `_token`, `updated_at`, `created_at`) VALUES
(1, 1, '56-57', 3, '23ewqe', 'qweqw', '', '', '', 'asd', 'test1,test2,test3,test4', 'hello', '                        <br>1. B.Ə.Orucov, H.M.Hüseynov. Struktur geologiya və geoloji xəritə-alma. Maarif. Bakı, 1985\r\n                        <br>2. B.Sultanov, S.Salayev, T.Məmmədov. Struktur geologiya və geoloji xəritəalma. Azərtədrisnəşr. Bakı, 1964\r\n                        <br>3. V.Y.Kərimov və b. Neft-qaz axtarışı və neft-mədən geologiyası. Maarif. Bakı, 1991\r\n                        <br>4. H.M.Hüseynov, N.R.Nərimanov, S.M.Rzayeva. Neft-qaz geologiyasının əsasları. Azərnəşr. Bakı, 2011\r\n                        <br>5. H.M.Hüseynov, A.Q.Abbasov. Neft-qaz yataqlarının axtarışı və kəşfiyyatı. Dərslik. ADNA. Bakı, 2006\r\n                        <br>6. Ş.A.Pənahi. Ümumi geologiyanın qısa kursu. Adiloğlu nəşriyyat. Bakı, 2009\r\n                        <br>7. Ə.Əlizadə, M.Babayev. Ümumi geologiya. Maarif. Bakı, 1973\r\n                        <br>8. A.Əhmədov. Geofiziki məlumatlar və onların interpretasiyası. P-Elnur. Bakı, 2001', 'ruu', '', '', '', 'eng', '', '', '', '', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(7, 50, 'test', 5, 'test', 'test', '', '', '', 'test', 'test', NULL, NULL, 'test', 'test', NULL, NULL, 'test', 'test', NULL, NULL, 'PUeFx24H0ohyvbiCiTfWa8LkVMaKtCcZiEXO0ECw', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(8, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(9, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(10, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(11, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(12, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(13, 51, 'test', 6, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'test', 'test', '<p>test</p>', '<p>test</p>', 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(14, 48, 'test', 5, 'test', 'test', '', '', '', 'test', 'test', '<p>test</p>', NULL, 'test', 'test', '<p>test</p>', NULL, 'test', 'test', NULL, NULL, 'OV1N0zTQQ1ZgfF3g1OjLbHeXDWohd1RuyBRnDzr7', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(15, 50, 'test', 7, 'test', 'test', '[\"test (MSc, test, test)\",\"test (MSc, test, test)\",\"test (MSc, test, test)\"]', '[\"e (PhD, e, e)\"]', '[\"e (PhD, e, e)\"]', 'test', 'test', NULL, NULL, 'test', 'test', NULL, NULL, 'test', 'test', NULL, NULL, 'xzqONM9MhHCiqw10lzh1T8cyiVkeOZW30MTVXo0q', '2020-10-28 23:37:08', '2020-10-28 23:37:08'),
(16, 52, '11', 13, '22', '33', '[\"test (PhD, test, test)\",\"test (PhD, test, test)\"]', '[\"11 (PhD, 11, 11)\",\"11 (PhD, 11, 11)\",\"11 (PhD, 11, 11)\"]', '[\"2222 (PhD, 2222, 2222)\"]', '13123', '12312', '<p>ttt</p>', '<p>t</p>', '2321', '13123', '<p>tt</p>', '<p>test</p>', 't112', 'test', '<p>t</p>', '<p>tset</p>', 'xzqONM9MhHCiqw10lzh1T8cyiVkeOZW30MTVXo0q', '2020-10-28 19:45:04', '2020-10-28 23:37:08'),
(20, 50, '52-88', 7, '4648646', '486486486', '[\"124 (MPh, 44444, 4422)\"]', '[\"41 (PhD, 44, 444)\"]', '[\"1 (PhD, 1, 444)\",\"test (MPh, test, test)\",\"3 (MPh, 3, 3)\"]', 'as', 'as', '<h2>1898-ci ildə Bakı Neft Sənaye&ccedil;iləri Qurultayları Şurası ilk nəşrini &ndash; &laquo;Neftyanoe Delo&raquo; (&laquo;Neft işi&raquo;) qəzet-jurnalını təsis etdi. Mətbu orqanın ilk sayı rus dilində 1899-cu il yanvarın 10-da işıq &uuml;z&uuml; g&ouml;rd&uuml;.<br />\r\n<br />\r\nBeləliklə, bu jurnal nəinki Bakıda, b&uuml;t&ouml;vl&uuml;kdə d&uuml;nyada neft sənayesinin nailiyyətləri və problemlərini işıqlandıran ilk sahə mətbu orqan oldu.<br />\r\n<br />\r\nAzərbaycanda sovet hakimiyyəti qurulanadək jurnal ayda iki dəfə nəşr edilirdi. &laquo;Neft işi&raquo; (Nİ) jurnalının ilk sayında dərc olunan &laquo;Redaksiyadan&raquo; adlı m&uuml;raciətdə qeyd olunurdu ki, bu nəşr b&uuml;t&ouml;vl&uuml;kdə neft sənayesinin problemlərini və ehtiyaclarını, habelə bu və ya digər şəkildə onunla bağlı olan məsələləri əks etdirəcək, neft hasilatı, neft və neft məhsullarının sərf olunması və paylanması, həm&ccedil;inin neftayırma zavodlarının işi barədə məlumatları dərc edəcək. Habelə neft hasilatının və emalının texniki və iqtisadi tərəflərinə, onun nəqlinə, saxlanmasına və satışına, neft sənayesinin buxar gəmi&ccedil;iliyi ilə əlaqələrinə, Rusiya (Bakı) və xarici neft bazalarının vəziyyətinin təhlilinə x&uuml;susi diqqət yetirilirdi.<br />\r\n<br />\r\nNİ Rusiya imperiyasının aparıcı m&uuml;təxəssislərinin və mədən m&uuml;həndislərinin elmi məqalələr toplusuna, bir n&ouml;v neft sorğu kitab&ccedil;asına &ccedil;evrilmişdir.<br />\r\n<br />\r\nMaraqlıdır ki, qəzet-jurnalın ilk saylarından birində Rusiya neft sənayesinə xarici sərmayə qoyuluşu barədə əhatəli analitik məqalə dərc olunmuşdur.<br />\r\n<br />\r\nQeyd etmək lazımdır ki, qəzet-jurnalın səhifələrində sırf neft-qaz sahəsindəki elmi və iqtisadi problemlərlə yanaşı, Rusiyada (o c&uuml;mlədən Azərbaycanda) və xaricdə neft-mədən geologiyası məsələlərinə, Qafqazda və Abşeronda neft ehtiyatlarının vəziyyətinə, habelə Volqaboyu, Sibir və Uzaq Şərqdə yeni neft rayonlarının mənimsənilməsinin perspektivlərinə x&uuml;susi diqqət yetirilirdi.<br />\r\n<br />\r\nBurada m&uuml;ntəzəm olaraq Bakı Neft Sənaye&ccedil;iləri Qurultaylarının stenoqrafik hesabatları, habelə ildə bir dəfə Rusiya imperiyasının neft sənayesinin əsas aparıcı g&uuml;c&uuml; kimi &laquo;Bakı neft sənayesinin x&uuml;lasələri&raquo; dərc olunurdu. D&uuml;nyada neft işinin tarixini &ouml;yrənən xarici m&uuml;təxəssislərin əksəriyyətinin etiraf etdiyinə g&ouml;rə, məhz Neft Sənaye&ccedil;iləri Qurultaylarının Bakı nəşrinin (&laquo;Neft işi&raquo; və &laquo;Bakı neft sənayesinin x&uuml;lasələri&raquo;) n&uuml;munəsi əsas g&ouml;t&uuml;r&uuml;lərək gələcəkdə d&uuml;nyanın bir &ccedil;ox &ouml;lklərində neft statistikasının hazırlanması və işlənməsi prinsipləri m&uuml;əyyənləşdirilmişdir.<br />\r\n<br />\r\nMaraqlıdır ki, jurnalın ayrı-ayrı b&ouml;lmələrində Bakı Neft Sənaye&ccedil;iləri qurultaylarında sosial məsələlərin həllinə x&uuml;susi diqqət yetirilirdi. Həmin b&ouml;lmələrdə &laquo;mədən və zavod rayonlarının h&uuml;dudları &ccedil;ər&ccedil;ivəsində daxili məsələləri, o c&uuml;mlədən fəhlələrin və b&uuml;t&ouml;vl&uuml;kdə qulluq&ccedil;uların həyat şəraitinin yaxşılaşdırılması, səhiyyə və sanitar işinin təşkili, &ouml;l&uuml;m halları və ya şikəst olduqda fəhlələrin sığortası, nəqliyyat işinin nizamlanması, habelə su təchizatı, &uuml;mumtəhsil məktəblərinin, qiraətxanalarının, kitabxanaların yaradılması&raquo; məsələləri əks olunurdu.<br />\r\n<br />\r\nQafqazdakı neft nəşrinin &ouml;z&uuml;nəməxsusluğu, elm aləmində populyarlığının durmadan artması onun Xəzər regionunun sərhədlərindən kənarda yayılmasına imkan verdi. 1900-c&uuml; ildə bu mətbu nəşrin artıq Londonda m&uuml;xbir b&uuml;rosu vardı. 1910-cu ildə Rusiyanın b&uuml;t&uuml;n iri şəhərlərində abunə məntəqələri fəaliyyət g&ouml;stərirdi, bir &ccedil;ox yerli və xarici d&ouml;vri neft nəşrlərilə jurnal m&uuml;badiləsi həyata ke&ccedil;irilirdi.<br />\r\n<br />\r\n&laquo;Neft işi&raquo; jurnalında neft sənayesinin əsasını qoyan nəhəng m&uuml;təxəssislərin məqalələri &ccedil;ap olunurdu.<br />\r\n<br />\r\nMəhz bu jurnalda Peterburqda (1898-ci il) və Bakıda (1904-c&uuml; il) təsis olunan və bug&uuml;nk&uuml; ictimaiyyətə az məlum olan Rusiya Nobel m&uuml;kafatları haqqında tam və dolğun informasiya dərc edilmişdir. Xatırlatmaq yerinə d&uuml;şərdi ki, Peterburqda təsis edilən, metallurgiya və neft sənayesi sahəsində ən yaxşı tədqiqatlara g&ouml;rə verilən L&uuml;dviq Nobel adına m&uuml;kafat &uuml;&ccedil; dəfə &ndash; 1896, 1898 və 1905-ci illərdə təqdim edilmişdir. Amma Bakıda təsis edilən və neft işi sahəsində ən yaxşı əsərlərə və ixtiralara g&ouml;rə verilən Emanuil Nobel adına m&uuml;kafat isə d&ouml;rd dəfə &ndash; 1909, 1910, 1911 və 1914-c&uuml; illərdə təqdim edilmişdir. Qeyd etmək lazımdır ki, Bakıda verilən m&uuml;kafat beynəlxalq m&uuml;kafat hesab olunurdu. Belə ki, m&uuml;kafatın Nizamnaməsinin 2-ci paraqrafında &laquo;həm Rusiya, həm də xarici təbəələr m&uuml;kafata namizəd ola bilərlər&raquo; qeyd olunurdu.<br />\r\n<br />\r\n1917-ci il Oktyabr inqilabından sonra &laquo;Neft işi&raquo; jurnalı Rusiya imperiyasında nəşr olunan əksər jurnallar kimi 1918-ci ilin may ayında bolşeviklərin Xalq Komissarları Bakı Sovetinin qərarına əsasən bağlandı.<br />\r\n<br />\r\nQeyd etmək lazımdır ki, I D&uuml;nya m&uuml;haribəsi illərində belə jurnal m&uuml;haribənin &ouml;lkə iqtisadiyyatını tamamilə iflic etdiyini vurğulayaraq, neft sənayesinin vəziyyəti haqqında məlumatları dərc etmyə davam etdi. Jurnalın 1917-ci ildə dərc olunan saylarının birində qeyd olunurdu: &laquo;Neft sənayesi 1918-ci ilin gəlişini olduqca ağır şəraitdə qarşılayır və vəziyyət son dərəcə &ccedil;ıxılmazdır&raquo;.<br />\r\n<br />\r\nAzərbaycan Demokratik Respublikası 1918-ci ilin sentyabr ayında jurnalın nəşrini bərpa etdi. 1920-ci ilin martında jurnalın əvvəlki adı ilə son n&ouml;mrəsi &ccedil;ıxdı.<br />\r\n<br />\r\n1920-ci ilin may ayında Azərbaycan SSR Xalq Komissarları Şurasının sərəncamı ilə &laquo;Neft işi&raquo; jurnalının adı dəyişdirilərək &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; (ANT) adı altında işıq &uuml;z&uuml; g&ouml;rm&uuml;şd&uuml;r.<br />\r\n<br />\r\nBu g&uuml;n jurnalda &uuml;&ccedil; dildə &minus; azərbaycan, rus və ingiliscə materiallar dərc olunur.<br />\r\n<br />\r\nSahə &uuml;zrə ən qocaman mətbu orqan olan bu jurnal b&ouml;y&uuml;k n&uuml;fuz qazanaraq, nəinki respublikamızda, eləcə də onun h&uuml;dudlarından kənarda da, y&uuml;ksək peşəkarlıqlı elmi-texniki və istehsalat informasiya mənbəyi kimi tanınmışdır. Fəaliyyətinin b&uuml;t&uuml;n d&ouml;vr&uuml; ərzində jurnal &ouml;z səhifələrində olduqca sanballı materiallar toplamış, &ouml;z&uuml;nəməxsus ki&ccedil;ik bir ensiklopediya rolunu oynamışdır.<br />\r\n<br />\r\nNeft sənayesi sahəsində texniki tərəqqinin &ccedil;oxsaylı başlıca prioritetlərini əks etdirən materialların dərc olunması məhz ANT jurnalına məxsusdur.<br />\r\n<br />\r\nJurnalın m&uuml;əllif kollektivini neft sənayesi və ona yaxın sahələrdə &ouml;z intellektual potensialını sərf edən milli və xarici m&uuml;təxəssislər, m&uuml;həndis və alimlər təşkil edir.<br />\r\n<br />\r\nJurnal neft sahəsi &uuml;&ccedil;&uuml;n &ccedil;oxsaylı, tanınmış, y&uuml;ksəkixtisaslı kadrlar nəslinin yetişdirilməsində b&ouml;y&uuml;k rol oynayır.<br />\r\n<br />\r\nJurnalın fəaliyyəti d&ouml;vr&uuml;ndə onun səhifələrində &ccedil;ox tanınmış alimlər, m&uuml;təxəssislər və istehsalat rəhbərlərinin elmi-texniki məqalələri dərc olunmuş və bu g&uuml;n də olunmaqdadır. Bunlardan L.S.Leybenzon, D.V.Qolubyatnikov, M.F.Mir&ccedil;ink, M.V.Barinov, İ.M.Qubkin, M.V.Abramovi&ccedil;, V.Q.Şuxov, Y.H.Məmmədəliyev, S.A.Vəzirov, V.N.Şelka&ccedil;ev, A.Asan-Nuri, E.İ.Tağıyev, P.Şumilov, M.T.Qusman, Ə.Ə.Əlizadə, V.F.Neqreyev, Ə.Ə.Yaqubov, S.M.Quliyev, R.İ.Şişşenko, S.Y.Litvinov, İ.Q.Yesman, AX.Mirzəcanzadə, M.T.Abasov, A.C.Əmirov, Ə.B.S&uuml;leymanov, İ.M.Əsədov, M.K.Seyid-Rza, M.P.Quluzadə, N.C.Tahirov, Q.N.Cəlilov A.A.Əlizadə, X.B.Yusifzadə, A.Q.Əliyev, R.S.Qurbanov, F.İ.Səmədova, İ.S.Quliyev, Z.H.Kərimov, A.M.Xasayev, A.M. Quliyev, Z.M.Əhmədov, M.B.Xeyirov, İ.Ə.Nəsrullayev və başqalarını qeyd etmək olar.<br />\r\n<br />\r\nB&uuml;t&uuml;n d&ouml;vr ərzində jurnala milli neft sənayesinin fəxri sayılan baş redaktorların b&ouml;y&uuml;k bir pleyadası rəhbərlik etmişdir. Bunlardan İ.M.Əsədovu, Ə.C.Əmirovu, M.K.Seyid-Rzanı, A.X.Mirzəcanzadəni və başqalarını g&ouml;stərmək lazımdır. M&uuml;xtəlif vaxtlarda akademiklərdən İ.M.Qubkin, Y.H.Məmmədəliyev redaksiya heyətinin &uuml;zvləri olmuşlar.<br />\r\n<br />\r\nBu g&uuml;n jurnal fəaliyyətini davam etdirməklə nəinki oxucuların sayının artırılmasına, habelə səhifələrində &ouml;z yaradıcı əməyi və elmi axtarışları ilə neft sənayesinin aktual məsələlərinin həllinə k&ouml;məklik g&ouml;stərən, yeni-yeni milli və xarici m&uuml;əlliflərin &ccedil;ıxış etməsinə &uuml;mid bəsləyir. Redaksiyanın kollektivi, neft sənayesinin aparıcı alim və m&uuml;təxəssislərindən ibarət redaksiya heyəti ilə birlikdə jurnalın elmi-texniki səviyyəsini, istiqamətini bundan sonra da qoruyub saxlamaq və daha da inkişaf etdirmək &uuml;&ccedil;&uuml;n m&uuml;əllif aktivi ilə b&ouml;y&uuml;k və səmərəli iş aparır.<br />\r\n<br />\r\nElmi-praktiki maraq kəsb edən və jurnalın fəaliyyət sahəsinə uyğun gələn məqalələri dərc etmək &uuml;&ccedil;&uuml;n biz həmişə hazırıq. Jurnal Azərbaycan Respublikasının D&ouml;vlət Neft Şirkətinin b&uuml;t&uuml;n m&uuml;əssisə və təşkilatlarına, sahə elmi-tədqiqat və layihə institutlarına, ali məktəblərə, m&uuml;ştərək m&uuml;əssisələrə, xarici şirkət və firmalara, eləcə də xarici &ouml;lkələrə abunə yazılışı yolu ilə və İnternet vasitəsilə yayımlanır.<br />\r\n<br />\r\nJurnalın əsas b&ouml;lmə və yarım b&ouml;lmələri<br />\r\n<br />\r\n<strong>B&Ouml;LMƏLƏR</strong><br />\r\nI. Geologiya və geofizika<br />\r\nII. Quyuların qazılması<br />\r\nIII. Neft və qaz yataqlarının işlənməsi və istismarı<br />\r\nIV. Neft və dəniz<br />\r\nV. Neft emalı və neft kimyası<br />\r\nVI. Neft-mədən avadanlığı<br />\r\nVII. İqtisadiyyat, idarəetmə, h&uuml;quq<br />\r\nVIII. Ekologiya<br />\r\nIX. Neftin, qazın hazırlanması və nəqli<br />\r\nX.İstehsalat proseslərinin avtomatlaşdırılması<br />\r\nXİ.Neftqaz sənayesində nanotexnologiyalar<br />\r\nXİİ. Gənc alim və m&uuml;təxəssislər<br />\r\n<br />\r\n<strong>YARIMB&Ouml;LMƏLƏR</strong><br />\r\n1. İstehsalat-təcr&uuml;bə m&uuml;badiləsi<br />\r\n2. Xarici təcr&uuml;bə<br />\r\n3. Gənclərə veteranlar haqqında<br />\r\n4. Neft sənayesinin inkişaf tarixindən<br />\r\n5. &Ccedil;apdan &ccedil;ıxmış kitablara rəylər<br />\r\n6. Yubilyarları təbrik edirik<br />\r\n7. Jurnalın arxivindən<br />\r\n8. İnformasiya</h2>\r\n\r\n<h1>&nbsp;</h1>', '<p>as</p>', 'as', 'as', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/33308678_1679740338768796_5918006270035492864_o_1604176253.jpg\" style=\"float:left; height:300px; width:300px\" /><img alt=\"\" src=\"http://127.0.0.1:8000/images/0_1604179033.png\" style=\"height:200px; width:200px\" />wafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaawafawfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '<p>test</p>', 'test', 'test', '<p>as<img alt=\"\" src=\"http://127.0.0.1:8000/images/0_1604176587.png\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>test</td>\r\n			<td>test</td>\r\n		</tr>\r\n		<tr>\r\n			<td>test</td>\r\n			<td>test</td>\r\n		</tr>\r\n		<tr>\r\n			<td>test</td>\r\n			<td>test</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p>test</p>', 'zIYO7BQkitScFYbkBHrmnUodMZwDO20DZBtCbB89', '2020-10-31 17:24:48', '2020-10-28 23:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryAz` mediumtext NOT NULL,
  `categoryRu` text NOT NULL,
  `categoryEn` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryAz`, `categoryRu`, `categoryEn`, `updated_at`, `created_at`) VALUES
(5, 'Geologiya ve fizikaaaazzzzeeee', 'Геология и Физикаsss', 'Geology and physicsenenenenenenen', '2020-10-21 02:43:15', '2020-10-21 06:43:15'),
(6, 'az', 'ru', 'en', '2020-10-21 06:38:01', '2020-10-21 06:38:01'),
(7, '[\"AZE432\",\"RUS\",\"END\"]', '', '', '2020-10-16 09:54:05', '2020-10-16 13:54:05'),
(8, '[\"AZE111\",\"RUS\",\"ENG\"]', '', '', '2020-10-16 09:53:28', '2020-10-16 13:53:28'),
(12, 'aaa', 'rrr', 'eee', '2020-10-21 08:19:16', '2020-10-21 08:19:16'),
(13, 'aze test', 'rus test', 'eng test', '2020-10-21 13:12:48', '2020-10-21 13:12:48'),
(14, '111', '222', '333', '2020-10-21 13:12:59', '2020-10-21 13:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `addressAz` mediumtext DEFAULT NULL,
  `phonesAz` mediumtext DEFAULT NULL,
  `emailAz` mediumtext DEFAULT NULL,
  `addressRu` mediumtext DEFAULT NULL,
  `phonesRu` mediumtext DEFAULT NULL,
  `emailRu` mediumtext DEFAULT NULL,
  `addressEn` mediumtext DEFAULT NULL,
  `phonesEn` mediumtext DEFAULT NULL,
  `emailEn` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `addressAz`, `phonesAz`, `emailAz`, `addressRu`, `phonesRu`, `emailRu`, `addressEn`, `phonesEn`, `emailEn`, `created_at`, `updated_at`) VALUES
(0, 'Bakı, Az 1012, H.Zərdabi küç., 88', '994 (12) 521-15-18 <br>521-15-48 <br>433-89-64', 'ofice.aoi@socar.az', 'Баку, Аз1012, ул. Г.Зардаби, 88', '994 (12) 521-15-18 <br>521-15-48 <br>433-89-64', 'ofice.aoi@socar.az', 'AZ1012, Baku, 88 Zardabi ave.', '994 (12) 521-15-18 <br>521-15-48 <br>433-89-64', 'ofice.aoi@socar.az', NULL, '2020-11-04 08:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `editorial_board`
--

CREATE TABLE `editorial_board` (
  `id` int(11) NOT NULL,
  `editor_photo` mediumtext DEFAULT NULL,
  `nameAz` mediumtext DEFAULT NULL,
  `titleAz` mediumtext DEFAULT NULL,
  `nameRu` mediumtext DEFAULT NULL,
  `titleRu` mediumtext DEFAULT NULL,
  `nameEn` mediumtext DEFAULT NULL,
  `titleEn` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editorial_board`
--

INSERT INTO `editorial_board` (`id`, `editor_photo`, `nameAz`, `titleAz`, `nameRu`, `titleRu`, `nameEn`, `titleEn`, `created_at`, `updated_at`) VALUES
(0, 'editor_photo/1604569580.jpg', 'İ.S.Quliyev', 'Baş', 'fef', 'efef', 'fe', 'fefef', '2020-11-05 09:42:39', '2020-11-05 05:46:20'),
(2, 'editor_photo/1605238582.jpg', '12.e3', '12', '1222', '1222', '244', '2444', '2020-11-05 09:42:39', '2020-11-12 23:36:22'),
(3, 'editor_photo/1605238599.jpg', '12e', '12', '45', '45', '78', '78', '2020-11-05 09:42:39', '2020-11-12 23:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `editorial_council`
--

CREATE TABLE `editorial_council` (
  `id` int(11) NOT NULL,
  `editor_photo` mediumtext DEFAULT NULL,
  `nameAz` mediumtext DEFAULT NULL,
  `titleAz` mediumtext DEFAULT NULL,
  `nameRu` mediumtext DEFAULT NULL,
  `titleRu` mediumtext DEFAULT NULL,
  `nameEn` mediumtext DEFAULT NULL,
  `titleEn` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editorial_council`
--

INSERT INTO `editorial_council` (`id`, `editor_photo`, `nameAz`, `titleAz`, `nameRu`, `titleRu`, `nameEn`, `titleEn`, `created_at`, `updated_at`) VALUES
(1, 'editor_photo/1604569171.jpg', 'A.Rzayev', '1233', 'awe', 'awe', 'awe', 'awe', '2020-11-05 09:39:17', '2020-11-05 05:39:57'),
(2, 'editor_photo/1604569236.jpg', '23423423', 'testjmjmjm', 'a4t', 'gwe', 'ega', 'wegaw', '2020-11-05 09:40:11', '2020-11-06 09:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` int(11) NOT NULL,
  `foundersAz` longtext DEFAULT NULL,
  `foundersRu` longtext DEFAULT NULL,
  `foundersEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`id`, `foundersAz`, `foundersRu`, `foundersEn`, `created_at`, `updated_at`) VALUES
(0, '<p>1884-c&uuml; ildə Bakıda sahibkarların x&uuml;susi təşkilatı olan &laquo;Bakı neft sənaye&ccedil;ilərini şurası&raquo; yaradıldı. Bu Şuraya 1898-ci ilə kimi Lyudviq Nobel rəhbərlik etmişdir. 1898-ci ildə Bakı neft sənaye&ccedil;ilərinin qurultayında &laquo;Neft işi&raquo; qəzet-jurnalının təsis olunması haqqında qərar qəbul etdi. 10 yanvar 1899-cu ildən ayda iki dəfə bu qəzet-jurnal nəşr olunmağa başladı. Sonralar 1920-ci ilin may ayından etibarən jurnalın adı dəyişdirilərək &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; qoyuldu. Jurnal bu g&uuml;n də ayda bir dəfə nəşr olunur. &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; jurnalının təsis&ccedil;isi Azərbaycan D&ouml;vlət Neft Şirkətidir (SOCAR).</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/logo_1605159553.png\" style=\"height:114px; width:400px\" /></p>', '<p>1884-c&uuml; ildə Bakıda sahibkarların x&uuml;susi təşkilatı olan &laquo;Bakı neft sənaye&ccedil;ilərini şurası&raquo; yaradıldı. Bu Şuraya 1898-ci ilə kimi Lyudviq Nobel rəhbərlik etmişdir. 1898-ci ildə Bakı neft sənaye&ccedil;ilərinin qurultayında &laquo;Neft işi&raquo; qəzet-jurnalının təsis olunması haqqında qərar qəbul etdi. 10 yanvar 1899-cu ildən ayda iki dəfə bu qəzet-jurnal nəşr olunmağa başladı. Sonralar 1920-ci ilin may ayından etibarən jurnalın adı dəyişdirilərək &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; qoyuldu. Jurnal bu g&uuml;n də ayda bir dəfə nəşr olunur. &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; jurnalının təsis&ccedil;isi Azərbaycan D&ouml;vlət Neft Şirkətidir (SOCAR).</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/logo_1605159553.png\" style=\"height:114px; width:400px\" /></p>', '<p>1884-c&uuml; ildə Bakıda sahibkarların x&uuml;susi təşkilatı olan &laquo;Bakı neft sənaye&ccedil;ilərini şurası&raquo; yaradıldı. Bu Şuraya 1898-ci ilə kimi Lyudviq Nobel rəhbərlik etmişdir. 1898-ci ildə Bakı neft sənaye&ccedil;ilərinin qurultayında &laquo;Neft işi&raquo; qəzet-jurnalının təsis olunması haqqında qərar qəbul etdi. 10 yanvar 1899-cu ildən ayda iki dəfə bu qəzet-jurnal nəşr olunmağa başladı. Sonralar 1920-ci ilin may ayından etibarən jurnalın adı dəyişdirilərək &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; qoyuldu. Jurnal bu g&uuml;n də ayda bir dəfə nəşr olunur. &laquo;Azərbaycan neft təsərr&uuml;fatı&raquo; jurnalının təsis&ccedil;isi Azərbaycan D&ouml;vlət Neft Şirkətidir (SOCAR).</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/logo_1605159553.png\" style=\"height:114px; width:400px\" /></p>', '2020-10-31 22:47:59', '2020-11-12 01:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `from_editor`
--

CREATE TABLE `from_editor` (
  `id` int(11) NOT NULL,
  `headerAz` longtext DEFAULT NULL,
  `contentAz` longtext DEFAULT NULL,
  `headerRu` longtext DEFAULT NULL,
  `headerEn` longtext DEFAULT NULL,
  `contentRu` longtext DEFAULT NULL,
  `contentEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `from_editor`
--

INSERT INTO `from_editor` (`id`, `headerAz`, `contentAz`, `headerRu`, `headerEn`, `contentRu`, `contentEn`, `created_at`, `updated_at`) VALUES
(0, 'az', '<p>&lt;script&gt;alert(&quot;test&quot;);&lt;/script&gt;</p>', 'ru', 'en', '<p>ru test</p>', '<p>en test<img alt=\"\" src=\"http://127.0.0.1:8000/images/33308678_1679740338768796_5918006270035492864_o_1604600690.jpg\" style=\"height:200px; width:200px\" /></p>', '2020-10-31 23:01:39', '2020-11-07 20:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `year`, `month`, `cover_photo`, `pdf_file`, `updated_at`, `created_at`) VALUES
(48, 2022, '[\"1\",\"12\"]', 'cover_photo/1603280439.jpg', NULL, '2020-10-21 09:11:13', '2020-10-16 11:34:35'),
(49, 2222, '[\"2\",\"3\"]', 'cover_photo/1602848189.jpg', 'pdf_file/1602848190.pdf', '2020-10-16 11:36:30', '2020-10-16 11:36:30'),
(50, 2099, '[\"1\",\"2\"]', 'cover_photo/1603279721.jpg', 'pdf_file/1603279721.pdf', '2020-10-21 07:28:41', '2020-10-16 11:36:43'),
(51, 2022, '[\"2\",\"3\",\"4\",\"5\",\"6\",\"7\"]', NULL, NULL, '2020-10-21 06:55:02', '2020-10-16 12:00:31'),
(52, 2222, '[\"1\",\"2\"]', 'cover_photo/1602849641.jpg', 'pdf_file/1602849641.pdf', '2020-10-16 12:00:41', '2020-10-16 12:00:41'),
(53, 2000, '[\"2\",\"3\",\"4\"]', NULL, NULL, '2020-10-21 04:33:53', '2020-10-16 12:00:52'),
(54, 1212, '[\"2\",\"3\"]', 'cover_photo/1602849788.jpg', 'pdf_file/1602849788.pdf', '2020-10-16 12:03:08', '2020-10-16 12:03:08'),
(55, 2020, '[\"3\",\"4\",\"5\"]', 'cover_photo/1602849800.jpg', 'pdf_file/1602849800.pdf', '2020-10-16 12:03:21', '2020-10-16 12:03:21'),
(56, 2000, '[\"1\",\"2\"]', 'cover_photo/1602849813.jpg', 'pdf_file/1602849813.pdf', '2020-11-12 23:50:10', '2020-10-16 12:03:33'),
(62, 2020, '[\"1\",\"2\",\"3\"]', 'cover_photo/1603447900.jpg', 'pdf_file/1603447924.pdf', '2020-10-23 06:12:04', '2020-10-21 08:20:34'),
(65, 2020, '[\"2\",\"4\"]', 'cover_photo/1603459144.jpg', 'pdf_file/1603459157.pdf', '2020-11-12 23:50:00', '2020-10-23 13:19:04'),
(66, 2020, '[\"1\",\"2\"]', 'cover_photo/1603920884.png', NULL, '2020-10-28 21:34:45', '2020-10-28 21:34:45'),
(67, 2020, '[\"2\"]', 'cover_photo/1603959362.jpg', NULL, '2020-10-29 08:16:03', '2020-10-29 08:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `journal_advertisement`
--

CREATE TABLE `journal_advertisement` (
  `id` int(11) NOT NULL,
  `advertisementAz` longtext DEFAULT NULL,
  `advertisementRu` longtext DEFAULT NULL,
  `advertisementEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_advertisement`
--

INSERT INTO `journal_advertisement` (`id`, `advertisementAz`, `advertisementRu`, `advertisementEn`, `created_at`, `updated_at`) VALUES
(0, '<p>faefafw</p>', '<p>testing russian language</p>', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/HD_wallpaper_Starry_Night_painting,_artwork,_Vincent_van_Gogh,_The_1604489570.jfif\" style=\"height:281px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>testing the english one</p>', '2020-10-31 22:47:59', '2020-11-04 07:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `journal_subscribe`
--

CREATE TABLE `journal_subscribe` (
  `id` int(11) NOT NULL,
  `subscribeAz` longtext DEFAULT NULL,
  `subscribeRu` longtext DEFAULT NULL,
  `subscribeEn` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_subscribe`
--

INSERT INTO `journal_subscribe` (`id`, `subscribeAz`, `subscribeRu`, `subscribeEn`, `created_at`, `updated_at`) VALUES
(0, '<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/HD_wallpaper_starry_night,_Hokusai,_Vincent_van_Gogh,_The_Great_1604490366.jfif\" style=\"height:519px; width:800px\" /></p>', '<p>subscriberu</p>', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/images/HD_wallpaper_starry_night,_Hokusai,_Vincent_van_Gogh,_The_Great_1604490330.jfif\" style=\"height:519px; width:800px\" /></p>', '2020-10-31 22:47:59', '2020-11-04 07:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `main_page`
--

CREATE TABLE `main_page` (
  `id` int(11) NOT NULL,
  `titleAz` mediumtext NOT NULL,
  `titleEn` mediumtext NOT NULL,
  `titleRu` mediumtext NOT NULL,
  `contentAz` longtext NOT NULL,
  `contentEn` longtext NOT NULL,
  `contentRu` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_page`
--

INSERT INTO `main_page` (`id`, `titleAz`, `titleEn`, `titleRu`, `contentAz`, `contentEn`, `contentRu`, `created_at`, `updated_at`) VALUES
(9, '\"Azərbaycan Neft Təsərrüfatı\" jurnalı 2014-cü ildən RSCI beynəlxalq xülasələndirmə və indeksləşdirmə sisteminə daxil edilib', '\"Azərbaycan Neft Təsərrüfatı\" jurnalı 2014-cü ildən RSCI beynəlxalq xülasələndirmə və indeksləşdirmə sisteminə daxil edilib', '\"Azərbaycan Neft Təsərrüfatı\" jurnalı 2014-cü ildən RSCI beynəlxalq xülasələndirmə və indeksləşdirmə sisteminə daxil edilib', '<p>1898-ci ildə Bakı Neft Sənaye&ccedil;iləri Qurultayları Şurası ilk nəşrini &ndash; &laquo;Neftyanoe Delo&raquo; (&laquo;Neft işi&raquo;) qəzet-jurnalını təsis etdi. Mətbu orqanın ilk sayı rus dilində 1899-cu il yanvarın 10-da işıq &uuml;z&uuml; g&ouml;rd&uuml;. Beləliklə, bu jurnal nəinki Bakıda, b&uuml;t&ouml;vl&uuml;kdə d&uuml;nyada neft sənayesinin nailiyyətləri və problemlərini işıqlandıran ilk sahə mətbu orqan oldu. Azərbaycanda sovet hakimiyyəti qurulanadək jurnal ayda iki dəfə nəşr edilirdi. &laquo;Neft işi&raquo; (Nİ) jurnalının ilk sayında dərc olunan &laquo;Redaksiyadan&raquo; adlı m&uuml;raciətdə qeyd olunurdu ki, bu nəşr b&uuml;t&ouml;vl&uuml;kdə neft sənayesinin problemlərini və ehtiyaclarını, habelə bu və ya digər şəkildə onunla bağlı olan məsələləri əks etdirəcək, neft hasilatı, neft və neft məhsullarının sərf olunması və paylanması, həm&ccedil;inin neftayırma zavodlarının işi barədə məlumatları dərc edəcək. Habelə neft hasilatının və emalının texniki və iqtisadi tərəflərinə, onun nəqlinə, saxlanmasına və satışına, neft sənayesinin buxar gəmi&ccedil;iliyi ilə əlaqələrinə, Rusiya (Bakı) və xarici neft bazalarının vəziyyətinin təhlilinə x&uuml;susi diqqət yetirilirdi.</p>', '<p>1898-ci ildə Bakı Neft Sənaye&ccedil;iləri Qurultayları Şurası ilk nəşrini &ndash; &laquo;Neftyanoe Delo&raquo; (&laquo;Neft işi&raquo;) qəzet-jurnalını təsis etdi. Mətbu orqanın ilk sayı rus dilində 1899-cu il yanvarın 10-da işıq &uuml;z&uuml; g&ouml;rd&uuml;. Beləliklə, bu jurnal nəinki Bakıda, b&uuml;t&ouml;vl&uuml;kdə d&uuml;nyada neft sənayesinin nailiyyətləri və problemlərini işıqlandıran ilk sahə mətbu orqan oldu. Azərbaycanda sovet hakimiyyəti qurulanadək jurnal ayda iki dəfə nəşr edilirdi. &laquo;Neft işi&raquo; (Nİ) jurnalının ilk sayında dərc olunan &laquo;Redaksiyadan&raquo; adlı m&uuml;raciətdə qeyd olunurdu ki, bu nəşr b&uuml;t&ouml;vl&uuml;kdə neft sənayesinin problemlərini və ehtiyaclarını, habelə bu və ya digər şəkildə onunla bağlı olan məsələləri əks etdirəcək, neft hasilatı, neft və neft məhsullarının sərf olunması və paylanması, həm&ccedil;inin neftayırma zavodlarının işi barədə məlumatları dərc edəcək. Habelə neft hasilatının və emalının texniki və iqtisadi tərəflərinə, onun nəqlinə, saxlanmasına və satışına, neft sənayesinin buxar gəmi&ccedil;iliyi ilə əlaqələrinə, Rusiya (Bakı) və xarici neft bazalarının vəziyyətinin təhlilinə x&uuml;susi diqqət yetirilirdi.</p>', '<p>1898-ci ildə Bakı Neft Sənaye&ccedil;iləri Qurultayları Şurası ilk nəşrini &ndash; &laquo;Neftyanoe Delo&raquo; (&laquo;Neft işi&raquo;) qəzet-jurnalını təsis etdi. Mətbu orqanın ilk sayı rus dilində 1899-cu il yanvarın 10-da işıq &uuml;z&uuml; g&ouml;rd&uuml;. Beləliklə, bu jurnal nəinki Bakıda, b&uuml;t&ouml;vl&uuml;kdə d&uuml;nyada neft sənayesinin nailiyyətləri və problemlərini işıqlandıran ilk sahə mətbu orqan oldu. Azərbaycanda sovet hakimiyyəti qurulanadək jurnal ayda iki dəfə nəşr edilirdi. &laquo;Neft işi&raquo; (Nİ) jurnalının ilk sayında dərc olunan &laquo;Redaksiyadan&raquo; adlı m&uuml;raciətdə qeyd olunurdu ki, bu nəşr b&uuml;t&ouml;vl&uuml;kdə neft sənayesinin problemlərini və ehtiyaclarını, habelə bu və ya digər şəkildə onunla bağlı olan məsələləri əks etdirəcək, neft hasilatı, neft və neft məhsullarının sərf olunması və paylanması, həm&ccedil;inin neftayırma zavodlarının işi barədə məlumatları dərc edəcək. Habelə neft hasilatının və emalının texniki və iqtisadi tərəflərinə, onun nəqlinə, saxlanmasına və satışına, neft sənayesinin buxar gəmi&ccedil;iliyi ilə əlaqələrinə, Rusiya (Bakı) və xarici neft bazalarının vəziyyətinin təhlilinə x&uuml;susi diqqət yetirilirdi.</p>', '2020-11-13 03:22:41', '2020-11-13 03:22:41'),
(10, '\"Azərbaycan Neft Təsərrüfatı\" Nəşriyyat Evinin DOI-prefiksi: 10.24888', '\"Azərbaycan Neft Təsərrüfatı\" Nəşriyyat Evinin DOI-prefiksi: 10.24888', '\"Azərbaycan Neft Təsərrüfatı\" Nəşriyyat Evinin DOI-prefiksi: 10.24888', '<p>B&uuml;t&uuml;n d&ouml;vr ərzində jurnala milli neft sənayesinin fəxri sayılan baş redaktorların b&ouml;y&uuml;k bir pleyadası rəhbərlik etmişdir. Bunlardan İ.M.Əsədovu, Ə.C.Əmirovu, M.K.Seyid-Rzanı, A.X.Mirzəcanzadəni və başqalarını g&ouml;stərmək lazımdır. M&uuml;xtəlif vaxtlarda akademiklərdən İ.M.Qubkin, Y.H.Məmmədəliyev redaksiya heyətinin &uuml;zvləri olmuşlar.</p>', '<p>B&uuml;t&uuml;n d&ouml;vr ərzində jurnala milli neft sənayesinin fəxri sayılan baş redaktorların b&ouml;y&uuml;k bir pleyadası rəhbərlik etmişdir. Bunlardan İ.M.Əsədovu, Ə.C.Əmirovu, M.K.Seyid-Rzanı, A.X.Mirzəcanzadəni və başqalarını g&ouml;stərmək lazımdır. M&uuml;xtəlif vaxtlarda akademiklərdən İ.M.Qubkin, Y.H.Məmmədəliyev redaksiya heyətinin &uuml;zvləri olmuşlar.</p>', '<p>B&uuml;t&uuml;n d&ouml;vr ərzində jurnala milli neft sənayesinin fəxri sayılan baş redaktorların b&ouml;y&uuml;k bir pleyadası rəhbərlik etmişdir. Bunlardan İ.M.Əsədovu, Ə.C.Əmirovu, M.K.Seyid-Rzanı, A.X.Mirzəcanzadəni və başqalarını g&ouml;stərmək lazımdır. M&uuml;xtəlif vaxtlarda akademiklərdən İ.M.Qubkin, Y.H.Məmmədəliyev redaksiya heyətinin &uuml;zvləri olmuşlar.</p>', '2020-11-13 03:23:32', '2020-11-13 03:23:32'),
(11, 'test', 'test', 'test', '<p>testefef</p>', '<p>test</p>', '<p>test</p>', '2020-11-13 05:16:12', '2020-11-13 01:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `subject` mediumtext DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `email`, `phone`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'garay.vahidli@caspianic.com', NULL, 'aliram', NULL, '2020-10-08 03:30:03', '2020-10-08 03:30:03'),
(2, 'Gəray Vahidli', 'garay.vahidli@caspianic.com', '32434', 'aliram', NULL, '2020-10-08 03:30:52', '2020-10-08 03:30:52'),
(3, 'Gəray Vahidli', 'garay.vahidli@caspianic.com', '2342423423', 'sffssf', NULL, '2020-10-08 03:32:16', '2020-10-08 03:32:16'),
(4, 'Gəray Vahidli', 'garay.vahidli@caspianic.com', '32434', 'aliram', 'dasdas', '2020-10-08 03:32:57', '2020-10-08 03:32:57'),
(5, 'Gəray Vahidli', 'garay.vahidli@caspianic.com', '32434', 'aliram', 'asdasd', '2020-10-08 03:48:43', '2020-10-08 03:48:43'),
(6, 'test', 'test@test.com', '123', 'test', 'test', '2020-11-10 23:28:23', '2020-11-10 23:28:23'),
(7, 'test', 'test@test.com', '123', 'tset', 'test', '2020-11-10 23:28:44', '2020-11-10 23:28:44'),
(8, 'test', 'test@test.com', '123', 'tset', 'test', '2020-11-10 23:29:30', '2020-11-10 23:29:30'),
(9, 'test', 'test@test.com', '123', 'tset', 'test', '2020-11-10 23:30:11', '2020-11-10 23:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_24_055733_create_journals_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Aydin Rzayev', 'aydinrzyv@gmail.com', NULL, '$2y$10$0/U4qbZHb2wZI0au7v6wTulbDJO2GfYOhY7RQDc/DIC8hCUlce8uO', 'CsLpzGqBpnNj80hBpgSZJHS5GpjzFmB6cTxUBKPdoPSkDGMYcbY1rrMROoUz', '2020-10-20 08:13:10', '2020-10-20 08:13:10'),
(3, 'test', 'test@test.com', NULL, '$2y$10$j4xkx4h.dcvsMMjI0atn2OB6X7NacW9GaEy9cmrc0EkGK1EI7ktt.', NULL, '2020-11-12 00:05:12', '2020-11-12 00:05:12'),
(4, 'test', '2test@test.com', NULL, '$2y$10$AbS2bPRE.XeZedkxHjAzyuYwZqpX86LAg0fMBd9IjkNV1T7TIlfnO', NULL, '2020-11-12 00:23:02', '2020-11-12 00:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_journal`
--
ALTER TABLE `about_journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accept_articles`
--
ALTER TABLE `accept_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial_board`
--
ALTER TABLE `editorial_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial_council`
--
ALTER TABLE `editorial_council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `from_editor`
--
ALTER TABLE `from_editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_advertisement`
--
ALTER TABLE `journal_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_subscribe`
--
ALTER TABLE `journal_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_page`
--
ALTER TABLE `main_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_journal`
--
ALTER TABLE `about_journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accept_articles`
--
ALTER TABLE `accept_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `editorial_board`
--
ALTER TABLE `editorial_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `editorial_council`
--
ALTER TABLE `editorial_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `from_editor`
--
ALTER TABLE `from_editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `journal_advertisement`
--
ALTER TABLE `journal_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journal_subscribe`
--
ALTER TABLE `journal_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_page`
--
ALTER TABLE `main_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
