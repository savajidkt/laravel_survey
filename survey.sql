-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=main admin,2=sub admin',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Savji Rathod', 'admin@admin.com', '$2y$10$ww9YoiStdzrHI7cJcf5fY./C.PDZawSBHMuMkzp2GJmQ3/iyiu01W', '1', 1, NULL, '2022-10-12 10:45:12', '2022-10-12 10:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'testse', 1, '2022-11-06 12:53:46', '2022-11-06 12:53:46', NULL),
(2, 'sdfsdfgsdfgdfgsdfgsdfg', 1, '2022-11-06 12:53:51', '2022-11-06 12:53:51', NULL),
(3, 'Savaji', 1, '2022-11-06 12:54:09', '2022-11-06 12:54:09', NULL),
(4, 'Testst', 1, '2022-11-06 12:59:56', '2022-11-06 12:59:56', NULL),
(5, 'sdfsdfsdfsdfsdfsdfdsfdsfdsf', 1, '2022-11-06 13:00:10', '2022-11-06 13:00:10', NULL),
(6, 'Skyweb', 1, '2022-12-02 16:47:08', '2022-12-02 16:47:08', NULL),
(7, 'Webtual', 1, '2022-12-02 16:54:24', '2022-12-02 16:54:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_01_105340_create_admin_table', 1),
(6, '2022_09_30_042820_alter_user_table_fields', 1),
(7, '2022_10_06_041740_create_questions_table', 1),
(8, '2022_10_06_041820_create_question_options_table', 1),
(9, '2022_10_06_093750_create_user_surveys_table', 1),
(10, '2022_10_06_103109_create_user_servey_answers', 1),
(11, '2022_10_06_104220_create_user_survey_answer_options', 1),
(12, '2022_10_11_091947_alter_user_survey_answer_options_set_default', 1),
(13, '2022_10_15_175950_create_survey_time', 2),
(14, '2022_11_06_154453_create_companies_table', 3),
(15, '2022_11_06_154823_create_projects_table', 3),
(16, '2022_11_07_031037_add_company_project_to_users_table', 4),
(17, '2022_11_08_114432_remove_fields_to_user_survey_table', 5),
(21, '2022_11_09_084852_alter_question_options_table_formula_fields_add', 6),
(26, '2022_11_09_133440_alter_user_survey_answers_table_formula_fields_add', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('savaji.dkt@gmail.com', 'ozro5pYPzo9hTXQ4wGnk7SV3bMLBSGLrrplgeiLvwsy0lfUvAAfNh78lOMMPSInt', '2022-10-13 09:52:41'),
('savaji.dkt@gmail.com', 'DvvLIqSMiazGksATcRqGIAmfxzjTbBHP06MmIrzFFT433UHezIyuCYz7GRdRCASs', '2022-10-13 09:54:23'),
('savaji.dkt@gmail.com', 'Ns5LTv3Ffx5pmIFkkutrK99DcWyYHhM0DsfMC1RBmfW8ROjoUu2WbAgYtWONEUPC', '2022-10-13 09:56:57'),
('savaji.dkt@gmail.com', 'FoQDZbapsbckNVOGAnyZapxlKx8gR6WTEUwivU8q2OkroXvgV26la4aKxORhLtI6', '2022-10-13 09:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'teststetse', 1, '2022-11-08 17:38:40', '2022-11-08 17:38:40', NULL),
(2, 'CRM', 1, '2022-12-02 16:54:34', '2022-12-02 16:54:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Radio, 2=Drag',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `status`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'You have been appointed to lead a new project, and you are about to meet the new client for the first time. You know that your colleague has worked with the client before, and your colleague mentioned once that the client is “not the easiest person to dea', 1, 2, '2022-10-12 07:32:26', '2022-10-12 07:32:26', NULL),
(2, 'It is your third day on a new job. Today, you will be meeting with your direct manager for the first time. You have sensed that your new coworkers have mixed emotions about her. When you finally meet her, she spends little time introducing herself and imm', 1, 2, '2022-10-12 07:38:53', '2022-10-12 07:38:53', NULL),
(3, 'You have just taken a job with a very prestigious organization. You hear the CEO will be coming in on the following Monday to conduct a series of meetings at your site. You have heard from other employees that he tends to put down and belittle people. You', 1, 2, '2022-10-12 07:54:17', '2022-10-12 07:54:17', NULL),
(4, 'While driving to the first day of your new job, you get into a slight “fender-bender” with a middle-aged man. The accident is his fault. When you get to your job, you find out that one of your new colleagues is the man that hit you. What would you do?', 1, 2, '2022-10-12 07:55:54', '2022-10-12 07:55:54', NULL),
(5, 'You are about to have the first meeting with a new hire. There are several projects that need to begin quickly. The employee will also be doing most of her work remotely. It is important to acclimate her to the culture as soon as possible. What would you ', 1, 2, '2022-10-12 07:57:26', '2022-10-12 07:57:26', NULL),
(6, 'You are leading a cross-functional team on a project that has a quick turnaround. Your manager just had a long conversation with you to express criticism and dissatisfaction with the team’s progress. Most of the feedback is not your fault, since the team ', 1, 2, '2022-10-12 07:59:31', '2022-10-12 07:59:31', NULL),
(7, 'You have recently been promoted into a new leadership position. You have seven direct reports and you’re bringing the team together for your first off-site retreat. Some of the team members are new and some have been in their roles for many years. They ar', 1, 2, '2022-10-12 08:01:05', '2022-10-12 08:01:05', NULL),
(8, 'You are several months into a new job. You have had the opportunity to do some meet and greets with many of your new colleagues. A project is about to kick-off and you will be leading it. You need to get a sense of the talent and capabilities of the peopl', 1, 2, '2022-10-12 08:03:01', '2022-10-12 08:03:01', NULL),
(9, 'There was a recent change in senior leadership and you will be reporting to a new manager. You have heard that this leader can be difficult to work with. You will be working closely with him on several key initiatives over the next several months and need', 1, 2, '2022-10-12 08:04:40', '2022-10-12 08:04:40', NULL),
(10, 'A recent organizational restructuring has added a new member to your team. The employee is a black trans woman of color. After a week, she shares with you that she is uncomfortable at work because she senses that people are stigmatizing her based on her g', 1, 2, '2022-10-12 08:06:07', '2022-10-12 08:06:07', NULL),
(11, 'The Board of Directors of a consumer products company has begun the process of CEO Succession for their organization. They have identified two top candidates to succeed the incumbent CEO. One of the candidates is a Black man who has a successful track rec', 1, 2, '2022-10-12 08:07:39', '2022-10-12 08:07:39', NULL),
(12, 'A member of the team you lead is overly expressive and enthusiastic about their spirituality and religious beliefs. This individual tends to take every opportunity to let others know about their faith. You are starting to notice other team members become ', 1, 2, '2022-10-12 08:09:32', '2022-10-12 08:09:32', NULL),
(13, 'Sam, a member of your team, has approached you asking for some time off work for the next month. Her child has been diagnosed with autism and they need the time to coordinate new schooling and therapy sessions. Others on the team start to notice the absen', 1, 2, '2022-10-12 08:10:51', '2022-10-12 08:10:51', NULL),
(14, 'One of your direct reports came to you recently to request time off for some personal issues. This employee plays an important role in your current project, which is a key engagement of the year and is closing soon. They have requested to take three weeks', 1, 2, '2022-10-12 08:12:20', '2022-10-12 08:12:20', NULL),
(15, 'You are a team leader of a group that must complete a project deadline within two weeks. You divide the project into sections and assign each team member one area to work on. Everyone completes their part of the project on time, except one of your direct ', 1, 2, '2022-10-12 08:13:39', '2022-10-12 08:13:39', NULL),
(16, 'Recently, a new employee started working in the department you lead. You’ve seen him make several mistakes and neglect certain job responsibilities. Your team has started to get complaints from cross-functional colleagues as a result of his behaviors. You', 1, 2, '2022-10-12 08:14:58', '2022-10-12 08:14:58', NULL),
(17, 'One of your employees recently came to you about some mental health challenges that they have been facing the last few months. Personally, you have had periods in your professional work life where you have also struggled with mental health issues as well.', 1, 2, '2022-10-12 08:16:21', '2022-10-12 08:16:21', NULL),
(18, 'You are the lead director for your sales department. Your team is falling behind to meet their monthly quota. The overall morale of the team has been down. You also notice that a majority of the team is stressed and feeling burnout. As the leader of the t', 1, 2, '2022-10-12 08:17:44', '2022-10-12 08:17:44', NULL),
(19, 'You have just been reassigned to lead a new team in your organization. You are now working with direct reports that you have never worked with before. When you introduce yourself to your new team, many express their frustrations with the previous manager’', 1, 2, '2022-10-12 08:19:06', '2022-10-12 08:19:06', NULL),
(20, 'Your company is about to launch a new marketing campaign for a flagship product. Your marketing team has been working hard for months leading up to the product release. You found out today that the product is three months behind in production. You were fr', 1, 2, '2022-10-12 08:20:44', '2022-10-12 08:20:44', NULL),
(21, 'One of your mentees just got accepted to an executive MBA program, which is something she always wanted. The program is not prestigious or well-known. You heard from a peer that the department is interested in promoting her. This promotion means that she ', 1, 2, '2022-10-12 08:22:02', '2022-10-12 08:22:02', NULL),
(22, 'You lead an IT service team that must respond rapidly to employee IT problems. One of your team members made a mistake, which will not make or break anything. However, real-time feedback will inevitably slow down the team’s response rate today. On the oth', 1, 2, '2022-10-12 08:23:22', '2022-10-12 08:23:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_sorting` tinyint(4) DEFAULT NULL COMMENT '1=Best Likely, 2=Least Likely',
  `establishing_report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `understanding_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embracing_individual_differences` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developing_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultivating_influence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_self_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_social_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_serving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breaking_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poor_management_of_emotions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `option`, `question_id`, `order_sorting`, `establishing_report`, `understanding_others`, `embracing_individual_differences`, `developing_trust`, `cultivating_influence`, `lacking_self_awareness`, `lacking_social_awareness`, `self_serving`, `breaking_trust`, `poor_management_of_emotions`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(141, 'Welcome the client and share your agenda for the meeting. Ask if there are any other areas they would like to focus on during your time together.', 1, 0, '0.406324865', '0.646171638', '0', '0.205391687', '-0.232959965', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:25', '2022-11-11 14:30:25', NULL),
(142, 'Start the meeting and explain to the client that there have been some communication issues in the past and you want to avoid any moving forward.', 1, 2, '-1.117875033', '-0.849165689', '0', '-0.148374086', '-0.225612932', '1.32292204', '0.157711156', '0.452480115', '1.008175242', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(143, 'Greet the client and ask them if there have been any challenges in the past with how your team supports their group. Take notes so you can bring them back to your direct reports.', 1, 0, '0.167958993', '0.859073759', '0.205391687', '0.424264676', '0.252813008', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(144, 'Greet the client and spend the first 10-15 minutes learning about their background and experiences. Share some of your prior consulting experiences as well.', 1, 1, '1.387367303', '0.784280334', '0.509118691', '0.38096585', '0.561317623', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(145, 'Prepare to pay special attention to getting to know the client as a person because, for people like this, personally connecting with them is more important than discussing tasks with them.', 1, 0, '0.777498261', '0.754266635', '0.424264676', '0.424264676', '0.167958993', '0', '0', '0.693428443', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(146, 'Tell your manager you would like to get the work completed as soon as possible, but you need to spend some time discussing the tasks so you have a better understanding of the top priorities.', 2, 0, '-0.458572897', '0.575714865', '0.077238846', '0.290245702', '0.084854015', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(147, 'Offer to complete the list of tasks she has given you so you do not leave a bad impression.', 2, 2, '-0.404679769', '-0.404679769', '-0.179066837', '-0.364605481', '-0.179066837', '0', '0.777550487', '1.582102758', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(148, 'Inform your manager this is only your third day and you are still getting to know the team. Ask if you can partner with a colleague to do the work and get a better understanding of the team’s projects.', 2, 0, '-0.562846308', '-0.168327195', '0.077238846', '-0.020221245', '0', '0', '0.777550487', '0', '0', '0.686732227', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(149, 'Slow her down and start discussing other topics. She is your manager so getting to know her as a person is important in the long run.', 2, 0, '0.689470464', '-0.020551018', '0.205391687', '-0.065000972', '0.167958993', '0', '0', '0.977320672', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(150, 'Engage in a discussion about the list of tasks so you can get to know her better and demonstrate your enthusiasm for the work.', 2, 1, '0.501290226', '0.747484563', '0.333544528', '0.467947255', '0.296111834', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(151, 'Greet the CEO when you meet him and ask about his agenda and what he wants to cover on the site visit.', 3, 0, '0.412783693', '0.410979548', '0', '0.2448247', '0.090720147', '1.008175242', '1.32292204', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(152, 'Welcome the CEO and ask some questions to get to know him. Ask about his vision for the organization and what he wants people at your site to focus on for this year.', 3, 1, '0.909259393', '1.090657559', '0', '0.167958993', '0.090720147', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(153, 'Welcome the CEO and ask if he needs anything on the way to the site. Give him the space to prepare for his meetings on the ride over from the hotel.', 3, 0, '0.167958993', '-0.140758916', '0', '-0.075116669', '-0.225612932', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(154, 'Use this opportunity to discuss company-related topics with him so he is not bored and you  leave a good impression.', 3, 0, '0.38096585', '-0.383779471', '0', '-0.300729601', '-0.225612932', '0', '0.777550487', '0.357481341', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(155, 'Greet the CEO and then talk as little as possible. You want to avoid any conversation that may give him a bad impression of you.', 3, 2, '-1.246027874', '-0.849165689', '0', '-0.225612932', '-0.225612932', '1.174090924', '0.694907468', '0.38016067', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(156, 'Introduce yourself and say nothing about the accident. Tell your colleague that you are excited for the opportunity to work together and want to learn more about his role.', 4, 0, '0.497960953', '0.572754378', '0', '-0.003492674', '0.090720147', '0', '0.993038494', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(157, 'Approach your colleague and offer to take him out to lunch that day. Tell him that you do not want the accident to have a negative effect on your working relationship.', 4, 1, '0.905651102', '0.610187072', '0', '0.220995165', '0.002122176', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(158, 'Confront him. If you don’t set boundaries in front of all your new colleagues, he will gain an advantage over you.', 4, 2, '-0.97731853', '-1.374180715', '-0.43537252', '-1.532347255', '-0.819151991', '1.490051457', '1.855472035', '1.299344761', '0', '1.1441848', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(159, 'Pretend as if nothing happened. You will be working together for a long time and this little fender-bender is not worth it.', 4, 0, '-0.225612932', '-0.383779471', '0.077238846', '-0.094212821', '-0.179066837', '0.777550487', '0.77058898', '0.993038494', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(160, 'Approach him and apologize for the fender-bender even though it was not your fault. This  makes it easy for everyone.', 4, 0, '0.220995165', '0.015603478', '0', '0.015603478', '0', '0', '0.464282713', '1.299344761', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(161, 'Take time in your first meeting to learn more about your new employee, especially their personal and professional experiences.', 5, 1, '1.222418691', '0.747484563', '0.509118691', '0.19130471', '0.296111834', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(162, 'Take time at the start of the meeting to discuss the company’s culture and how teams have been working remotely.', 5, 0, '0.804338178', '-0.300729601', '0', '-0.232959965', '0.165053348', '0', '0', '0.686732227', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(163, 'Tell her about your work history and how you have gotten to this point in your career.', 5, 2, '0.454278374', '-0.148374086', '0', '0.296111834', '0.077238846', '1.300242712', '0.785725728', '0.977320672', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(164, 'Give your employee the list of projects and deadlines.', 5, 0, '-0.849165689', '-0.819151991', '-0.43537252', '-0.383779471', '-0.225612932', '1.182266165', '0.928112702', '1.09351102', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(165, 'Have her schedule one-on-one meet-and-greets with all team members.', 5, 0, '0.290245702', '0.146201739', '0.205391687', '0.296111834', '-0.189666352', '0', '0.777550487', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(166, 'Exchange observations with your manager to identify key developmental areas.', 6, 0, '-0.383779471', '-0.486464419', '0.333544528', '0.064632771', '0.290245702', '0', '1.174090924', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(167, 'Take notes on the feedback so you can have a conversation with your team to help them grow.', 6, 1, '0', '0.306172424', '0.290245702', '0.296111834', '0.738339914', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(168, 'Emphasize that you are not to blame since the team is still inexperienced.', 6, 2, '0', '0', '-0.43537252', '-0.819151991', '-1.056043491', '0.462134382', '0.747909652', '1.062391161', '0.993038494', '0.993038494', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(169, 'Share your dissatisfaction with the team and remind them they should ask for help if there are problems with meeting deadlines.', 6, 0, '0', '-0.69099915', '-0.307219678', '-0.660985451', '-0.660985451', '0.977320672', '2.055538443', '1.284840675', '1.276665433', '1.299344761', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(170, 'Inform the team you are disappointed with their lack of productivity.', 6, 0, '0', '-0.43537252', '-0.43537252', '-0.819151991', '-0.819151991', '1.008175242', '1.151411595', '0.970093876', '1.299344761', '1.599587473', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(171, 'Provide space for the team to build relationships with each other.', 7, 0, '0.975789845', '0.38096585', '0.38096585', '0.376311167', '-0.065000972', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(172, 'Start the off-site with an icebreaker for your team members to get to know one another.', 7, 1, '1.14539314', '0.932491019', '0.376311167', '0.148005885', '0.167958993', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(173, 'Greet your direct reports and provide them with the agenda for the meeting.', 7, 0, '-0.22168661', '-1.116070887', '0', '-0.225612932', '-0.383779471', '0', '0.531572265', '0.785725728', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(174, 'Welcome your team to the off-site and outline your expectations for their goals and priorities.', 7, 2, '-0.447978595', '-0.69099915', '-0.307219678', '-0.225612932', '-0.300729601', '0', '0.441338095', '0.147387583', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(175, 'Greet your team members and ask each of them what they would like to get out of the meeting.', 7, 0, '0.461165182', '0.900673175', '0.276158726', '0.205391687', '0.296111834', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(176, 'Rely on what you already know and find out their capabilities along the way.', 8, 0, '-0.383779471', '-1.116070887', '-0.927890649', '-0.179066837', '-0.404679769', '1.174090924', '0.754871158', '0', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(177, 'Schedule a thirty-minute meeting with each of the project team members to learn about their talents and interests.', 8, 1, '0.589318023', '1.2188104', '0.987226601', '0.5', '0.063151869', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(178, 'Ask your manager for feedback about each of the people on your team. He has been with the company for many years and knows people well.', 8, 0, '-0.179066837', '-0.003492674', '0.162092861', '-0.08834669', '-0.094212821', '0', '0', '0.464282713', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(179, 'Have a kick-off meeting with your team to get alignment on  key priorities.', 8, 0, '-0.003492674', '-0.844517535', '0.077238846', '0.167958993', '0.015603478', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(180, 'Conduct one-on-one meetings with each of your team members to introduce yourself and discuss some of your past experiences.', 8, 2, '0.539132389', '0.296111834', '0.205391687', '0.296111834', '0.167958993', '1.300242712', '1.182266165', '0.670749115', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(181, 'Be careful with your actions and observe what the new manager might like or dislike.', 9, 0, '-0.404679769', '-0.321306655', '0.002122176', '-0.08834669', '-0.179066837', '0', '0.686732227', '0.970359166', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(182, 'Find an opportunity for an informal chat with your new manager to learn more about him.', 9, 0, '0.747484563', '0.464338964', '0.205391687', '0.167958993', '0.077238846', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(183, 'Schedule a meeting with your new manager to understand his expectations for the work.', 9, 1, '0.38096585', '0.306172424', '0', '0.38096585', '0.205391687', '0', '0', '0.777550487', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(184, 'Email your new manager and tell him you are excited to start working together.', 9, 0, '0.19130471', '-0.179066837', '-0.179066837', '0.077238846', '0.077238846', '0', '0', '0.674929628', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(185, 'Find a way to connect with your new manager so he can help you accomplish your objectives.', 9, 2, '0.063151869', '0.454278374', '0.205391687', '0.205391687', '0.130275018', '0', '0', '0.739813915', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(186, 'Confront the entire team with this issue and emphasize that there should be no discrimination at workplace.', 10, 0, '-0.307219678', '-0.819151991', '-0.216499531', '-0.660985451', '-0.660985451', '1.174090924', '0.846319063', '0.686732227', '1.300242712', '1.046385471', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(187, 'Assure this person that you will address the issue and formally inform the Human Resources department.', 10, 2, '0.077238846', '0.252813008', '0.410979548', '0.205391687', '0.167958993', '0', '0.674929628', '0', '1.582102758', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(188, 'Assure this person that you will address the issue and speak with members of your team who seem to hold discriminatory thoughts.', 10, 0, '0.077238846', '0.162092861', '0.454278374', '-0.093533769', '0.205391687', '0.777550487', '1.174090924', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(189, 'Schedule a meeting to discuss the importance of diversity on your team.', 10, 0, '0.077238846', '0.077238846', '0.697298929', '0.296111834', '0.306172424', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(190, 'Take time to ask her to elaborate on what she has been experiencing.', 10, 1, '0.205391687', '1.220614545', '0.589318023', '0.185438579', '0.220995165', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(191, 'Focus the discussion on the two candidates and their advantages and disadvantages.', 11, 1, '-0.179066837', '-0.003492674', '0.859073759', '0.077238846', '0.084854015', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(192, 'Conduct another interview to form a better understanding of the two candidates.', 11, 0, '0.077238846', '-0.045586789', '0.296111834', '0.205391687', '-0.317819194', '0', '0', '0', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(193, 'Tell the Board who you think is the best candidate given the needs of the organization.', 11, 2, '-0.307219678', '-0.69099915', '-0.990401244', '-0.702277718', '-0.179066837', '0.777550487', '1.151411595', '0.464282713', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(194, 'Inform the Board that you would like to get feedback from members of the current executive leadership team.', 11, 0, '0.077238846', '0.464338964', '0.38096585', '0.454278374', '0.077238846', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(195, 'Assign a sub-committee of the Board to conduct follow-up interviews with each candidate to learn more about their backgrounds and experiences.', 11, 0, '0.077238846', '0.747484563', '0.667285231', '0.424264676', '0.290245702', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(196, 'Have a conversation with the individual to express that they need to stop bringing this topic to the workplace.', 12, 0, '-0.43537252', '-1.21421003', '-1.087861334', '-0.660985451', '-0.660985451', '0.777550487', '1.467372129', '0.686732227', '0.686732227', '0.686732227', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(197, 'Hold non-mandatory sessions and invite people to present their spirituality and religious beliefs.', 12, 0, '0.077238846', '0.38096585', '0.474615235', '-0.179066837', '0.252813008', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(198, 'Schedule a one-on-one meeting with your direct report to discuss the proper etiquette when sharing personal information with colleagues.', 12, 1, '-0.179066837', '-0.003492674', '-0.0782861', '-0.003492674', '0.076706658', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(199, 'Tell your direct report to stop speaking about religion with others. It is not a topic to be discussed in the workplace.', 12, 2, '-0.43537252', '-0.819151991', '-1.532347255', '-0.660985451', '-0.660985451', '0', '1.467372129', '1.167129417', '1.276665433', '0.686732227', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(200, 'Bring the team together to discuss the types of personal information that should be shared in the workplace.', 12, 0, '0.077238846', '0.167958993', '0.539132389', '0.296111834', '0.38096585', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(201, 'Have a conversation with your team member to find ways for her to handle personal issues without interfering with work.', 13, 0, '0', '0.326125533', '0.162092861', '0.252813008', '0.077238846', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(202, 'Offer to personally pick up the work and cover for her.', 13, 0, '0', '0.38096585', '0.290245702', '0.454278374', '0.38096585', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(203, 'Inform the team that your colleague will be taking some time off for personal matters and everyone must work together to meet project deadlines.', 13, 1, '0', '0.38096585', '0.418398544', '0.192785612', '0.450216387', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(204, 'Schedule a meeting with your team member to remind her that she should make sure her work responsibility is handled, either by herself or a colleague, before focusing on personal matters.', 13, 2, '0', '-0.701598665', '0.205391687', '-0.020221245', '-0.020221245', '0', '1.077793198', '0.7630464', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(205, 'Send the team an email informing them of the situation so they will understand what is going on.', 13, 0, '0', '-0.395058039', '-0.179066837', '-0.819151991', '-0.43537252', '1.299344761', '0.760000118', '0.448299601', '2.20436956', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(206, 'Schedule a meeting with your employee to discuss what they are working on so  you can assign their work to another team member.', 14, 0, '0', '0.148005885', '0.162092861', '0.454278374', '0.296111834', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(207, 'Hold a team meeting to brainstorm ideas about who can take on additional work to complete the project on time.', 14, 1, '0', '0.290245702', '0.290245702', '0.296111834', '0.539132389', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(208, 'Tell the team  your direct report is having some personal problems and everyone should collaborate to pick up the slack while they are out.', 14, 0, '0', '-0.574124876', '-0.179066837', '-1.086057189', '-0.404679769', '0.686466937', '1.450756357', '0.756084894', '1.37713796', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(209, 'Communicate with this person to find ways to help so they would not need to request the leave.', 14, 0, '0', '-0.61155757', '-0.179066837', '0.06981985', '0.06981985', '0', '0.686732227', '1.276665433', '0.686732227', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(210, 'Emphasize the importance of this project to convince this person to postpone their leave.', 14, 2, '0', '-1.056043491', '-0.830430559', '-1.056043491', '-0.660985451', '0', '0.985495913', '1.37713796', '0.993038494', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(211, 'Have a meeting with your direct report to determine why there have been delays with their work.', 15, 1, '0', '0.932491019', '0.205391687', '0.38096585', '0.252813008', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(212, 'Schedule a team meeting to discuss proper time management and prioritization of work so everyone is on the same page.', 15, 2, '0', '-0.317819194', '0.077238846', '0.326125533', '-0.068932507', '0', '0.693428443', '0.977320672', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(213, 'Ask your direct report about what is going on. They should have a reason for the delays with their work.', 15, 0, '0', '-0.22168661', '-0.148374086', '-0.063520071', '-0.148374086', '0', '1.174090924', '0.777550487', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(214, 'Do this person a favor by offering your help. They will become a great supporter in the future.', 15, 0, '0', '-0.216499531', '-0.307219678', '0.697298929', '0.539132389', '0', '0', '1.574875963', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(215, 'Be honest and tell this person that it will hurt the team if they don’t meet this deadline.', 15, 0, '0', '-0.637962978', '-0.43537252', '-0.447978595', '-0.562846308', '1.300242712', '0.686466937', '1.578806602', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(216, 'Schedule a meeting with your direct report to discuss how his work impacts members of the team and cross-functional colleagues.', 16, 1, '-0.094212821', '-0.319825753', '-0.179066837', '-0.131645515', '-0.455325628', '0', '0.777550487', '0.777550487', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(217, 'Meet with some of your cross-functional colleagues to get their perspectives on the employee’s work.', 16, 0, '-0.307219678', '-0.206438941', '0.205391687', '0.410979548', '0.167958993', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(218, 'Work with the Human Resources department to find ways to improve the talent selection process.', 16, 0, '0', '-0.304337892', '-0.307219678', '-0.483404729', '-0.344652372', '0.674929628', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(219, 'Talk to this person and see if there are any work-related incidents affecting their behavior.', 16, 0, '0.077238846', '0.932491019', '0.509118691', '0.534477706', '0.539132389', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(220, 'Meet with the team to emphasize that all new members deserve time to adjust and settle.', 16, 2, '-0.43537252', '-0.344652372', '0.326125533', '0.167958993', '0.167958993', '0.977320672', '0.664052898', '0', '0.674929628', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(221, 'Start the meeting by giving them an opportunity to discuss what has been going on with their mental health challenges.', 17, 1, '-0.027568278', '1.2188104', '0.619331722', '0.539132389', '0.539132389', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(222, 'Focus the meeting on the project deadlines and deliverables. It is critical that your people do their work this quarter.', 17, 2, '-0.43537252', '-1.21421003', '-1.056043491', '-0.97731853', '-0.819151991', '0.970359166', '1.855472035', '1.796357725', '1.299344761', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(223, 'Construct a work plan with the person that minimizes influences from their mental health challenges.', 17, 0, '0.077238846', '0.296111834', '0.539132389', '0.454278374', '0.461165182', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(224, 'Tell your direct report you know others who have had the same challenges and what they did to manage their mental health.', 17, 0, '0.077238846', '-0.227099046', '0.326125533', '-0.08834669', '0.002122176', '0', '0.693428443', '0.553973211', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(225, 'Guide the person to think more positively so  they can focus on their tasks.', 17, 0, '-0.179066837', '-1.086057189', '-0.927890649', '-0.53283261', '-0.607949279', '0', '0.860557861', '0.45369385', '0.993038494', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(226, 'Schedule a meeting to tell the team they can do better by increasing commitment to your goals.', 18, 0, '0', '-0.53283261', '-0.53283261', '-0.69099915', '-0.53283261', '1.575141252', '1.070831692', '1.757407417', '0.977320672', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(227, 'Tell your team members that they need to hit their monthly targets. The department will look bad if your team misses its goals.', 18, 2, '0', '-0.819151991', '-0.43537252', '-0.819151991', '-0.660985451', '1.299344761', '1.773678397', '1.458931598', '0.970359166', '0.693428443', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(228, 'Share a story about a time when you were behind on a monthly target and how you partnered with others to accomplish your goals.', 18, 0, '-0.15572112', '0.077238846', '0.205391687', '0.619331722', '1.090657559', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(229, 'Plan a team event where your people can relax and regroup. This will help them to refocus their efforts on meeting the monthly goals.', 18, 1, '0', '0.06981985', '0.162092861', '0.410979548', '0.497960953', '0', '0', '0.686732227', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(230, 'Announce that you will work overtime through the rest of the month.', 18, 0, '0', '0.167958993', '0.077238846', '0.569146088', '0.410979548', '0.977320672', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(231, 'Lead the team in your way. They will like your leadership style, just as many others did in the past.', 19, 0, '-0.43537252', '-0.660985451', '-0.819151991', '-0.660985451', '-0.819151991', '0.670749115', '1.590278', '1.257363587', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(232, 'Schedule one-on-one meetings with each of your direct reports to better understand how they prefer to be managed.', 19, 1, '0.333544528', '0.434325265', '0.424264676', '0.987226601', '0.509118691', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(233, 'Ensure the team that your leadership style is different from the previous manager. Provide them with examples to illustrate your style.', 19, 2, '0.205391687', '0.205391687', '0.077238846', '0.326125533', '0.410979548', '0.977320672', '1.008175242', '0.670749115', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(234, 'Ask each team member what they look for in a leader. Make sure to get everyone’s perspective.', 19, 0, '0.205391687', '1.090657559', '0.221318409', '0.619331722', '0.539132389', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(235, 'Lead by example and show that your leadership style is different from the previous manager.', 19, 0, '-0.179066837', '-0.179066837', '-0.179066837', '0.154673865', '0.312840405', '0.686732227', '0.993038494', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(236, 'Start the meeting by expressing your frustrations about the news that there have been production delays.', 20, 0, '0', '1', '-0.179066837', '0.173770017', '-0.094212821', '0.778764222', '1.167129417', '0.693428443', '0', '1.315960534', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(237, 'Tell your people how angry you are at the production team. They always make mistakes.', 20, 2, '0', '0', '-0.307219678', '0.090720147', '-0.216499531', '1.284840675', '0.992773204', '0.977320672', '0', '2.77500092', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(238, 'Share the news but reassure your team that their hard work has not gone unnoticed.', 20, 1, '-0.232959965', '0.084854015', '0.205391687', '0.539132389', '0.539132389', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(239, 'Tell the team you are meeting with the head of production to discuss what happened. These issues cannot take place in the future.', 20, 0, '0', '0', '0.077238846', '0.252813008', '0.38096585', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(240, 'Tell the team that you are also frustrated but there is not much you could do.', 20, 0, '0', '0.084854015', '0', '0.092842324', '0.077238846', '0.777550487', '1.151411595', '1.151411595', '0.977320672', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(241, 'Schedule a meeting with your mentee to discuss the pros and cons of starting the program now.', 21, 0, '0', '0.242292193', '0.077238846', '0.410979548', '0.572754378', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(242, 'Ask your mentee what direction she wants to take her career over the next several years. Help her figure out what the best path forward would be.', 21, 1, '0', '0.932491019', '0.296111834', '0.461165182', '0.70090722', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(243, 'Tell your mentee that going back to school is not important right now. She should focus on doing the best in her current role.', 21, 2, '0', '-0.959708493', '-0.702277718', '-0.637962978', '-0.319825753', '1.300242712', '1.174090924', '1.008175242', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(244, 'Inform her about the potential promotion possibility to encourage her to reapply to the MBA program at another time.', 21, 0, '0', '0.077238846', '-0.179066837', '-0.453391031', '-0.216499531', '0.977320672', '0', '0', '1.32292204', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(245, 'Let things naturally happen and provide advice only when she comes to you.', 21, 0, '0', '-0.225612932', '0', '-0.225612932', '-1.117875033', '0', '0', '1.151411595', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(246, 'Take the employee aside and discuss the mistake. It is important to correct these things as they occur.', 22, 1, '0', '-0.063520071', '0.077238846', '0.252813008', '0.339794413', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(247, 'Schedule a meeting later in the week to discuss the mistake that your employee made.', 22, 0, '0', '0.290245702', '0.077238846', '0.333740702', '0.175574163', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(248, 'Correct the mistake without providing any feedback. These types of situations happen all the time.', 22, 2, '0', '-0.383779471', '0', '-0.225612932', '-0.938808196', '0.785725728', '1.174090924', '1.151411595', '0.693428443', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(249, 'Wait until your monthly one-on-one to discuss their work productivity. Bring up the mistake during this meeting.', 22, 0, '0', '-0.734095561', '-0.307219678', '-0.741514557', '-0.899681097', '0', '0', '0', '0', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL),
(250, 'Call out the mistake so  the team can all be aware of this potential mistake, and they will learn to avoid it.', 22, 0, '0', '-0.734095561', '-0.179066837', '-0.849165689', '-0.606145134', '0.7630464', '1.144450089', '1.174090924', '0.867519367', '0', 1, '2022-11-11 14:30:26', '2022-11-11 14:30:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_report_masters`
--

CREATE TABLE `survey_report_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ri_points` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishing_report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `understanding_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embracing_individual_differences` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developing_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultivating_influence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_self_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_social_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_serving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breaking_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poor_management_of_emotions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=Admin, 2=User',
  `user_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Inactive, 1=Active',
  `is_first_time_login` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Password Not Change, 1=Password Change',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_id`, `project_id`, `first_name`, `last_name`, `address`, `email`, `gender`, `other_text`, `age`, `ethnicity`, `job_level`, `years`, `email_verified_at`, `password`, `user_type`, `user_status`, `is_first_time_login`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 2, 'Savji', 'Rathod', 'Dummy Address', 'savaji.dkt@gmail.com', 'male', NULL, '20-29', 'Other/Unknown', 'Manager', '6-10', '2022-10-12 10:45:12', '$2y$10$8G5bimu6kccwpPJ9Pg2cqeLpD3eG7eqfRrLa0mSppi9rzkMnj9zMy', 2, 1, 1, NULL, '2022-10-12 10:45:12', '2022-12-07 18:13:25', NULL),
(2, NULL, NULL, 'Savaji', 'Rathod', 'test', 'savaji@itccdigital.com', 'male', NULL, '20-29', 'Other/Unknown', 'Individual contributor', '1-5', '2022-10-12 10:45:12', '$2y$10$6BNKyzuIFfMlWoARiZ/4L.XC.tV85n8ccS7PuRygtF7ig3A0l9NIi', 2, 1, 1, NULL, '2022-10-21 11:42:06', '2022-12-15 18:03:54', NULL),
(3, NULL, NULL, 'Bhumika', 'Patel', 'dasdfsadfdsfdasf', 'bhumika@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Q/GQTS6UkxzjOG.aheFmse/IMwjLHcwhHt8lOfcFyNt12DxPdPB8.', 2, 1, 0, NULL, '2022-10-21 11:42:45', '2022-10-27 22:49:54', NULL),
(4, NULL, NULL, 'Sandy', 'Patel', 'kdafkjfjdaksf', 'sandy@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Z5HLL03lV4ETPto60k67JeWI9YHwvlzfsbuo9ev5Lk.KMSUgePb/y', 2, 0, 0, NULL, '2022-10-21 11:43:11', '2022-10-27 22:18:18', '2022-10-27 22:18:18'),
(5, NULL, NULL, 'savaji', 'rathod', 'adsfasfsdfasdf', 'sandy+1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$NK3Nb0z.HRFpjeBAWnpPved5x5.1x7NeRDD7hdPZ3vJHT3U2mGPn.', 2, 1, 0, NULL, '2022-11-05 12:08:26', '2022-11-05 12:08:43', NULL),
(11, 3, 1, 'Milan', 'Patel', 'dfsdfsdfdsfdsf', 'milanpatel@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$EYiLgOfORXpcV6h0x/.Okemq7LGrOstp1rGCuMwquvF3ZisUmiL3m', 2, 1, 1, NULL, '2022-11-08 17:47:36', '2022-11-08 17:48:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_surveys`
--

CREATE TABLE `user_surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ri_points` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishing_report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `understanding_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embracing_individual_differences` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developing_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultivating_influence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_self_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_social_awareness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_serving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breaking_trust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poor_management_of_emotions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1=Completed, 2=Inprograss, 3=Pending',
  `auto_stop` int(11) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_surveys`
--

INSERT INTO `user_surveys` (`id`, `user_id`, `ri_points`, `establishing_report`, `understanding_others`, `embracing_individual_differences`, `developing_trust`, `cultivating_influence`, `lacking_self_awareness`, `lacking_social_awareness`, `self_serving`, `breaking_trust`, `poor_management_of_emotions`, `status`, `auto_stop`, `created_at`, `updated_at`, `deleted_at`) VALUES
(94, 2, '0', '0.381', '0.476', '0.952', '0.143', '0.238', '0.905', '0.762', '0.19', '1', '0.857', 1, 0, '2022-12-15 18:46:03', '2022-12-15 19:00:46', NULL),
(96, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, '2022-12-20 15:59:28', '2022-12-20 15:59:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_survey_answers`
--

CREATE TABLE `user_survey_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_survey_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ri_points` tinyint(4) DEFAULT NULL,
  `establishing_report_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `understanding_others_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embracing_individual_differences_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developing_trust_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cultivating_influence_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_self_awareness_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacking_social_awareness_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_serving_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breaking_trust_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poor_management_of_emotions_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_survey_answers`
--

INSERT INTO `user_survey_answers` (`id`, `user_survey_id`, `user_id`, `question_id`, `ri_points`, `establishing_report_point`, `understanding_others_point`, `embracing_individual_differences_point`, `developing_trust_point`, `cultivating_influence_point`, `lacking_self_awareness_point`, `lacking_social_awareness_point`, `self_serving_point`, `breaking_trust_point`, `poor_management_of_emotions_point`, `created_at`, `updated_at`, `deleted_at`) VALUES
(338, 94, 2, 15, 1, '0', '0.404846236', '-0.287173156', '3.910550115', '0.736885709', '1.300242712', '7.675881924', '11.947813349', '0', '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00', NULL),
(339, 94, 2, 21, 0, '0', '0.09896481', '-1.892714814', '-0.24585362', '2.136316443', '7.155612192', '4.696363696', '5.184112563', '2.64584408', '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03', NULL),
(340, 94, 2, 11, 3, '-0.891862773', '0.558692629', '5.309196424', '1.59030534', '-0.683178135', '1.555100974', '2.30282319', '0.928565426', '4.049577768', '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29', NULL),
(341, 94, 2, 20, 0, '-0.46591993', '5.254562045', '-1.481712985', '3.161276799', '0.961338945', '9.810734297', '10.958151496', '8.527836498', '0.977320672', '17.67980635', '2022-12-15 18:59:32', '2022-12-15 18:59:32', NULL),
(342, 94, 2, 2, 0, '-2.467574559', '1.609032368', '0.774124163', '0.225308435', '0.50799154', '0', '4.665302922', '9.260373048', '0', '1.373464454', '2022-12-15 18:59:35', '2022-12-15 18:59:35', NULL),
(343, 94, 2, 19, 2, '-0.763709938', '-0.603385773', '-2.560105661', '2.379583532', '0.240327509', '7.3685836', '12.946855966', '7.628316165', '0', '0', '2022-12-15 18:59:37', '2022-12-15 18:59:37', NULL),
(344, 94, 2, 4, 0, '1.513861349', '-1.154962269', '-1.664251234', '-5.54687276', '-2.995707538', '6.737756315', '14.086235016', '8.78910706', '0', '4.5767392', '2022-12-15 18:59:41', '2022-12-15 18:59:41', NULL),
(345, 94, 2, 22, 3, '0', '-2.860558733', '-0.405576257', '-0.925907376', '-2.7815361', '2.334497856', '3.492631937', '3.476914114', '2.254376253', '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44', NULL),
(346, 94, 2, 8, 2, '0.97594633', '-0.967884724', '0.283753962', '1.599808406', '-1.701908368', '8.470940044', '6.13888812', '2.734346369', '3.37464814', '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47', NULL),
(347, 94, 2, 7, 1, '9.042145573', '5.80692582', '3.523958299', '2.470301442', '0.378080782', '0', '1.414248455', '1.080500894', '0', '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51', NULL),
(348, 94, 2, 14, 3, '0', '-2.13795372', '0.245682369', '0.437140887', '2.376203287', '1.372933874', '5.947205308', '6.719304047', '5.807511095', '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54', NULL),
(349, 94, 2, 14, 2, '0', '-2.964891604', '-0.22363017', '-2.100905175', '0.95789151', '2.745867748', '8.161985795', '6.954808402', '7.875054788', '0', '2022-12-15 18:59:57', '2022-12-15 18:59:57', NULL),
(350, 94, 2, 5, 3, '7.98075155', '-0.073497995', '1.444867582', '-0.238319221', '1.428745106', '6.147283919', '5.133340049', '7.982103312', '0', '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00', NULL),
(351, 94, 2, 16, 4, '-1.673617967', '-1.91546749', '-0.163674921', '-0.121993442', '-1.905136878', '3.677039184', '4.551805333', '3.887752435', '0.674929628', '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03', NULL),
(352, 94, 2, 12, 0, '-3.454919604', '-6.843669078', '-7.755327306', '-5.71502447', '-3.74225241', '3.887752435', '11.738977032', '6.935049386', '7.263657434', '5.493857816', '2022-12-15 19:00:07', '2022-12-15 19:00:07', NULL),
(353, 94, 2, 17, 2, '-1.159592711', '2.095613965', '1.80941811', '0.871293861', '1.479161773', '2.911077498', '7.813830852', '6.950713447', '4.891072777', '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10', NULL),
(354, 94, 2, 6, 2, '-1.918897355', '-3.716002369', '0.600928854', '-2.932801135', '-0.50960716', '4.864406022', '14.684300848', '6.949398223', '7.115418048', '7.483698744', '2022-12-15 19:00:13', '2022-12-15 19:00:13', NULL),
(355, 94, 2, 1, 0, '2.835642349', '4.659450589', '2.362404123', '2.849153669', '0.290286325', '5.29168816', '0.630844624', '2.503348903', '4.032700968', '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16', NULL),
(356, 94, 2, 9, 2, '2.365537106', '0.780245292', '0.500368804', '1.429142447', '0.186396129', '0', '3.433661135', '9.171499603', '4.049577768', '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20', NULL),
(357, 94, 2, 18, 0, '-0.62288448', '-4.505064946', '-2.747289294', '-2.044019651', '1.122412287', '12.751061215', '10.675193651', '14.537296333', '7.797680858', '2.080285329', '2022-12-15 19:00:24', '2022-12-15 19:00:24', NULL),
(358, 94, 2, 13, 0, '0', '0.334004216', '3.16049841', '2.112434415', '1.913267054', '1.299344761', '5.07117291', '3.500485201', '2.20436956', '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31', NULL),
(359, 94, 2, 10, 0, '-0.507404248', '-0.170481551', '3.84348946', '-2.395898278', '-1.231320774', '8.980656568', '10.952747895', '3.433661135', '11.247521834', '5.231927355', '2022-12-15 19:00:46', '2022-12-15 19:00:46', NULL),
(381, 96, 1, 3, 4, '6.217212542', '5.058204608', '0', '0.766671624', '-0.537196269', '5.206791892', '7.541696602', '1.095123352', '0', '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45', NULL),
(382, 96, 1, 7, 3, '9.952665516', '5.413671927', '3.931330418', '2.41291564', '0.166878071', '0', '1.504482625', '1.718839039', '0', '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56', NULL),
(383, 96, 1, 16, 4, '-1.903598799', '-0.580739628', '1.165274813', '1.79027327', '-0.508740752', '2.327179928', '4.551805333', '3.887752435', '0.674929628', '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05', NULL),
(384, 96, 1, 13, 0, '0', '1.416568731', '3.245352425', '2.586934034', '2.314454149', '1.299344761', '3.993379712', '2.737438801', '2.20436956', '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22', NULL),
(385, 96, 1, 1, 0, '1.006364997', '4.704230315', '1.973823104', '2.935751321', '-0.41157692', '5.29168816', '0.630844624', '3.196777346', '4.032700968', '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59', NULL),
(386, 96, 1, 14, 3, '0', '-2.13795372', '0.245682369', '0.437140887', '2.376203287', '1.372933874', '5.947205308', '6.719304047', '5.807511095', '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08', NULL),
(387, 96, 1, 14, 2, '0', '-2.619872335', '-0.405681353', '0.467154585', '2.119897605', '0.686466937', '5.481944864', '7.340357113', '5.423411629', '0', '2022-12-20 16:01:20', '2022-12-20 16:01:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_survey_answer_options`
--

CREATE TABLE `user_survey_answer_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_survey_answer_id` bigint(20) UNSIGNED NOT NULL,
  `question_option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `correct_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_survey_answer_options`
--

INSERT INTO `user_survey_answer_options` (`id`, `user_survey_answer_id`, `question_option_id`, `correct_order`, `created_at`, `updated_at`) VALUES
(1686, 338, 212, '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00'),
(1687, 338, 211, '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00'),
(1688, 338, 213, '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00'),
(1689, 338, 214, '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00'),
(1690, 338, 215, '0', '2022-12-15 18:04:00', '2022-12-15 18:04:00'),
(1691, 339, 241, '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03'),
(1692, 339, 243, '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03'),
(1693, 339, 242, '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03'),
(1694, 339, 244, '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03'),
(1695, 339, 245, '0', '2022-12-15 18:04:03', '2022-12-15 18:04:03'),
(1696, 340, 191, '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29'),
(1697, 340, 192, '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29'),
(1698, 340, 194, '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29'),
(1699, 340, 193, '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29'),
(1700, 340, 195, '0', '2022-12-15 18:59:29', '2022-12-15 18:59:29'),
(1701, 341, 236, '0', '2022-12-15 18:59:32', '2022-12-15 18:59:32'),
(1702, 341, 237, '0', '2022-12-15 18:59:32', '2022-12-15 18:59:32'),
(1703, 341, 239, '0', '2022-12-15 18:59:32', '2022-12-15 18:59:32'),
(1704, 341, 238, '0', '2022-12-15 18:59:32', '2022-12-15 18:59:32'),
(1705, 341, 240, '0', '2022-12-15 18:59:32', '2022-12-15 18:59:32'),
(1706, 342, 146, '0', '2022-12-15 18:59:35', '2022-12-15 18:59:35'),
(1707, 342, 147, '0', '2022-12-15 18:59:35', '2022-12-15 18:59:35'),
(1708, 342, 149, '0', '2022-12-15 18:59:35', '2022-12-15 18:59:35'),
(1709, 342, 148, '0', '2022-12-15 18:59:35', '2022-12-15 18:59:35'),
(1710, 342, 150, '0', '2022-12-15 18:59:35', '2022-12-15 18:59:35'),
(1711, 343, 231, '0', '2022-12-15 18:59:38', '2022-12-15 18:59:38'),
(1712, 343, 232, '0', '2022-12-15 18:59:38', '2022-12-15 18:59:38'),
(1713, 343, 235, '0', '2022-12-15 18:59:38', '2022-12-15 18:59:38'),
(1714, 343, 233, '0', '2022-12-15 18:59:38', '2022-12-15 18:59:38'),
(1715, 343, 234, '0', '2022-12-15 18:59:38', '2022-12-15 18:59:38'),
(1716, 344, 156, '0', '2022-12-15 18:59:41', '2022-12-15 18:59:41'),
(1717, 344, 158, '0', '2022-12-15 18:59:41', '2022-12-15 18:59:41'),
(1718, 344, 157, '0', '2022-12-15 18:59:41', '2022-12-15 18:59:41'),
(1719, 344, 160, '0', '2022-12-15 18:59:41', '2022-12-15 18:59:41'),
(1720, 344, 159, '0', '2022-12-15 18:59:41', '2022-12-15 18:59:41'),
(1721, 345, 246, '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44'),
(1722, 345, 247, '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44'),
(1723, 345, 249, '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44'),
(1724, 345, 248, '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44'),
(1725, 345, 250, '0', '2022-12-15 18:59:44', '2022-12-15 18:59:44'),
(1726, 346, 176, '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47'),
(1727, 346, 177, '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47'),
(1728, 346, 178, '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47'),
(1729, 346, 180, '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47'),
(1730, 346, 179, '0', '2022-12-15 18:59:47', '2022-12-15 18:59:47'),
(1731, 347, 171, '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51'),
(1732, 347, 175, '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51'),
(1733, 347, 172, '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51'),
(1734, 347, 174, '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51'),
(1735, 347, 173, '0', '2022-12-15 18:59:51', '2022-12-15 18:59:51'),
(1736, 348, 206, '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54'),
(1737, 348, 207, '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54'),
(1738, 348, 209, '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54'),
(1739, 348, 208, '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54'),
(1740, 348, 210, '0', '2022-12-15 18:59:54', '2022-12-15 18:59:54'),
(1741, 349, 206, '0', '2022-12-15 18:59:58', '2022-12-15 18:59:58'),
(1742, 349, 208, '0', '2022-12-15 18:59:58', '2022-12-15 18:59:58'),
(1743, 349, 207, '0', '2022-12-15 18:59:58', '2022-12-15 18:59:58'),
(1744, 349, 209, '0', '2022-12-15 18:59:58', '2022-12-15 18:59:58'),
(1745, 349, 210, '0', '2022-12-15 18:59:58', '2022-12-15 18:59:58'),
(1746, 350, 161, '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00'),
(1747, 350, 162, '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00'),
(1748, 350, 164, '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00'),
(1749, 350, 163, '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00'),
(1750, 350, 165, '0', '2022-12-15 19:00:00', '2022-12-15 19:00:00'),
(1751, 351, 216, '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03'),
(1752, 351, 218, '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03'),
(1753, 351, 217, '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03'),
(1754, 351, 219, '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03'),
(1755, 351, 220, '0', '2022-12-15 19:00:03', '2022-12-15 19:00:03'),
(1756, 352, 196, '0', '2022-12-15 19:00:07', '2022-12-15 19:00:07'),
(1757, 352, 197, '0', '2022-12-15 19:00:07', '2022-12-15 19:00:07'),
(1758, 352, 199, '0', '2022-12-15 19:00:07', '2022-12-15 19:00:07'),
(1759, 352, 198, '0', '2022-12-15 19:00:07', '2022-12-15 19:00:07'),
(1760, 352, 200, '0', '2022-12-15 19:00:07', '2022-12-15 19:00:07'),
(1761, 353, 221, '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10'),
(1762, 353, 223, '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10'),
(1763, 353, 222, '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10'),
(1764, 353, 224, '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10'),
(1765, 353, 225, '0', '2022-12-15 19:00:10', '2022-12-15 19:00:10'),
(1766, 354, 166, '0', '2022-12-15 19:00:13', '2022-12-15 19:00:13'),
(1767, 354, 167, '0', '2022-12-15 19:00:13', '2022-12-15 19:00:13'),
(1768, 354, 169, '0', '2022-12-15 19:00:13', '2022-12-15 19:00:13'),
(1769, 354, 168, '0', '2022-12-15 19:00:13', '2022-12-15 19:00:13'),
(1770, 354, 170, '0', '2022-12-15 19:00:13', '2022-12-15 19:00:13'),
(1771, 355, 141, '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16'),
(1772, 355, 142, '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16'),
(1773, 355, 144, '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16'),
(1774, 355, 143, '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16'),
(1775, 355, 145, '0', '2022-12-15 19:00:16', '2022-12-15 19:00:16'),
(1776, 356, 181, '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20'),
(1777, 356, 182, '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20'),
(1778, 356, 184, '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20'),
(1779, 356, 183, '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20'),
(1780, 356, 185, '0', '2022-12-15 19:00:20', '2022-12-15 19:00:20'),
(1781, 357, 226, '0', '2022-12-15 19:00:24', '2022-12-15 19:00:24'),
(1782, 357, 228, '0', '2022-12-15 19:00:24', '2022-12-15 19:00:24'),
(1783, 357, 227, '0', '2022-12-15 19:00:24', '2022-12-15 19:00:24'),
(1784, 357, 229, '0', '2022-12-15 19:00:24', '2022-12-15 19:00:24'),
(1785, 357, 230, '0', '2022-12-15 19:00:24', '2022-12-15 19:00:24'),
(1786, 358, 201, '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31'),
(1787, 358, 204, '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31'),
(1788, 358, 202, '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31'),
(1789, 358, 203, '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31'),
(1790, 358, 205, '0', '2022-12-15 19:00:31', '2022-12-15 19:00:31'),
(1791, 359, 186, '0', '2022-12-15 19:00:46', '2022-12-15 19:00:46'),
(1792, 359, 188, '0', '2022-12-15 19:00:46', '2022-12-15 19:00:46'),
(1793, 359, 187, '0', '2022-12-15 19:00:46', '2022-12-15 19:00:46'),
(1794, 359, 190, '0', '2022-12-15 19:00:46', '2022-12-15 19:00:46'),
(1795, 359, 189, '0', '2022-12-15 19:00:46', '2022-12-15 19:00:46'),
(1901, 381, 152, '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45'),
(1902, 381, 151, '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45'),
(1903, 381, 153, '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45'),
(1904, 381, 154, '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45'),
(1905, 381, 155, '0', '2022-12-20 15:59:45', '2022-12-20 15:59:45'),
(1906, 382, 171, '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56'),
(1907, 382, 172, '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56'),
(1908, 382, 175, '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56'),
(1909, 382, 173, '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56'),
(1910, 382, 174, '0', '2022-12-20 15:59:56', '2022-12-20 15:59:56'),
(1911, 383, 216, '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05'),
(1912, 383, 217, '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05'),
(1913, 383, 219, '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05'),
(1914, 383, 218, '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05'),
(1915, 383, 220, '0', '2022-12-20 16:00:05', '2022-12-20 16:00:05'),
(1916, 384, 201, '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22'),
(1917, 384, 202, '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22'),
(1918, 384, 204, '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22'),
(1919, 384, 203, '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22'),
(1920, 384, 205, '0', '2022-12-20 16:00:22', '2022-12-20 16:00:22'),
(1921, 385, 141, '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59'),
(1922, 385, 142, '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59'),
(1923, 385, 143, '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59'),
(1924, 385, 145, '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59'),
(1925, 385, 144, '0', '2022-12-20 16:00:59', '2022-12-20 16:00:59'),
(1926, 386, 206, '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08'),
(1927, 386, 207, '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08'),
(1928, 386, 209, '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08'),
(1929, 386, 208, '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08'),
(1930, 386, 210, '0', '2022-12-20 16:01:08', '2022-12-20 16:01:08'),
(1931, 387, 206, '0', '2022-12-20 16:01:20', '2022-12-20 16:01:20'),
(1932, 387, 207, '0', '2022-12-20 16:01:21', '2022-12-20 16:01:21'),
(1933, 387, 209, '0', '2022-12-20 16:01:21', '2022-12-20 16:01:21'),
(1934, 387, 210, '0', '2022-12-20 16:01:21', '2022-12-20 16:01:21'),
(1935, 387, 208, '0', '2022-12-20 16:01:21', '2022-12-20 16:01:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_options_question_id_foreign` (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_company_id_foreign` (`company_id`),
  ADD KEY `users_project_id_foreign` (`project_id`);

--
-- Indexes for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_surveys_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_survey_answers`
--
ALTER TABLE `user_survey_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_survey_answers_user_survey_id_foreign` (`user_survey_id`),
  ADD KEY `user_survey_answers_user_id_foreign` (`user_id`),
  ADD KEY `user_survey_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `user_survey_answer_options`
--
ALTER TABLE `user_survey_answer_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_survey_answer_options_user_survey_answer_id_foreign` (`user_survey_answer_id`),
  ADD KEY `user_survey_answer_options_question_option_id_foreign` (`question_option_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_surveys`
--
ALTER TABLE `user_surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `user_survey_answers`
--
ALTER TABLE `user_survey_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `user_survey_answer_options`
--
ALTER TABLE `user_survey_answer_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1936;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD CONSTRAINT `user_surveys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_survey_answers`
--
ALTER TABLE `user_survey_answers`
  ADD CONSTRAINT `user_survey_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_survey_answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_survey_answers_user_survey_id_foreign` FOREIGN KEY (`user_survey_id`) REFERENCES `user_surveys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_survey_answer_options`
--
ALTER TABLE `user_survey_answer_options`
  ADD CONSTRAINT `user_survey_answer_options_question_option_id_foreign` FOREIGN KEY (`question_option_id`) REFERENCES `question_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_survey_answer_options_user_survey_answer_id_foreign` FOREIGN KEY (`user_survey_answer_id`) REFERENCES `user_survey_answers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
