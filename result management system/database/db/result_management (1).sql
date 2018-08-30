-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 10:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'College of sciences', '2018-05-09 20:12:40', '2018-05-09 20:12:40'),
(2, 'college of education', '2018-05-10 09:47:02', '2018-05-10 09:47:02'),
(3, 'college of Engineering', '2018-05-16 18:52:49', '2018-05-16 18:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `course_code`, `unit`, `department_id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Chemistry', 'che101', 4, 2, 1, '2018-05-15 10:40:47', '2018-05-15 10:40:47'),
(2, 'Internet technology', 'CST802', 3, 1, 1, '2018-05-15 10:50:43', '2018-05-15 10:50:43'),
(3, 'Computer system Engineering', 'CST804', 2, 1, 1, '2018-05-15 10:51:43', '2018-05-15 10:51:43'),
(4, 'Operating system', 'CST 808', 3, 1, 1, '2018-05-15 10:52:44', '2018-05-15 10:52:44'),
(5, 'Visual programming', 'CST 810', 1, 1, 1, '2018-05-15 10:53:11', '2018-05-15 10:53:11'),
(6, 'Internet technology', 'CST 802', 3, 1, 2, '2018-05-15 10:54:15', '2018-05-15 10:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` int(11) NOT NULL,
  `hod_id` int(11) NOT NULL,
  `course_advicer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `college_id`, `hod_id`, `course_advicer_id`, `created_at`, `updated_at`) VALUES
(1, 'Computer science', 1, 1, NULL, '2018-05-10 10:42:06', '2018-05-10 10:42:06'),
(2, 'data analysis', 1, 1, NULL, '2018-05-10 10:43:00', '2018-05-10 10:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_05_210009_create_results_table', 2),
(4, '2018_05_07_092158_create_students_table', 2),
(5, '2018_05_07_092353_create_colleges_table', 2),
(6, '2018_05_07_092451_create_departments_table', 2),
(7, '2018_05_07_092514_create_reports_table', 2),
(8, '2018_05_07_092543_create_transcripts_table', 2),
(9, '2018_05_07_220643_create_courses_table', 2),
(10, '2015_01_15_105324_create_roles_table', 3),
(11, '2015_01_15_114412_create_role_user_table', 3),
(12, '2015_01_26_115212_create_permissions_table', 3),
(13, '2015_01_26_115523_create_permission_role_table', 3),
(14, '2015_02_09_132439_create_permission_user_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_by_id` int(11) NOT NULL,
  `report_to_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `session` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `submitted_by` int(11) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0' COMMENT '''1'' for approved byexamofficer,''2'' for approvedbyhod and ''3'' $ ''4'' for reject vice versa',
  `reject_reason` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `course_id`, `student_id`, `session`, `department_id`, `semester`, `score`, `point`, `submitted_by`, `approved`, `reject_reason`, `created_at`, `updated_at`) VALUES
(1, 2, 10, '11', 1, 1, 45, 6, 2, 2, 'Not satisfiable', '2018-05-18 16:31:41', '2018-05-24 11:55:07'),
(2, 2, 12, '11', 1, 1, 65, 12, 2, 2, 'Not satisfiable', '2018-05-18 16:31:41', '2018-05-24 11:55:07'),
(3, 3, 10, '11', 1, 1, 70, 10, 2, 2, 'Not satisfiable', '2018-05-18 16:32:46', '2018-05-24 11:55:07'),
(4, 3, 12, '11', 1, 1, 55, 6, 2, 2, 'Not satisfiable', '2018-05-18 16:32:46', '2018-05-24 11:55:07'),
(5, 4, 10, '11', 1, 1, 60, 12, 2, 2, 'Not satisfiable', '2018-05-18 16:33:16', '2018-05-24 11:55:07'),
(6, 4, 12, '11', 1, 1, 65, 12, 2, 2, 'Not satisfiable', '2018-05-18 16:33:16', '2018-05-24 11:55:07'),
(7, 5, 10, '11', 1, 1, 65, 4, 1, 2, 'Not satisfiable', '2018-05-18 20:13:41', '2018-05-24 11:55:07'),
(8, 5, 12, '11', 1, 1, 50, 3, 1, 2, 'Not satisfiable', '2018-05-18 20:13:41', '2018-05-24 11:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Admin Role', 1, '2018-05-09 23:00:00', '2018-05-09 23:00:00'),
(2, 'Hod', 'Hod', 'final authorise result', 2, '2018-05-09 23:00:00', '2018-05-09 23:00:00'),
(3, 'Course adviser', 'course.adviser', 'input result', 3, '2018-05-09 23:00:00', '2018-05-09 23:00:00'),
(4, 'Exam officer', 'exam.officer', 'authorise result after being posted', 4, '2018-05-09 23:00:00', '2018-05-09 23:00:00'),
(5, 'Student', 'student', 'student can update and register their and check result', 5, '2018-05-09 23:00:00', '2018-05-09 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-05-09 23:00:00', '2018-05-09 23:00:00'),
(2, 3, 2, '2018-05-14 10:54:37', '2018-05-14 10:54:37'),
(8, 5, 8, '2018-05-14 12:49:20', '2018-05-14 12:49:20'),
(9, 2, 9, '2018-05-15 06:46:04', '2018-05-15 06:46:04'),
(11, 5, 10, '2018-05-15 09:56:55', '2018-05-15 09:56:55'),
(12, 5, 11, '2018-05-16 09:40:02', '2018-05-16 09:40:02'),
(13, 5, 12, '2018-05-16 09:42:37', '2018-05-16 09:42:37'),
(14, 4, 13, '2018-05-18 23:07:52', '2018-05-18 23:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `sch_session`
--

CREATE TABLE `sch_session` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_session`
--

INSERT INTO `sch_session` (`id`, `name`, `description`) VALUES
(1, '07/08', 'session frm 2007 to 2008'),
(2, '08/09', 'session frm 2008 to 2009'),
(3, '09/010', 'session frm 2009 to 2010'),
(4, '010/011', 'session frm 2010 to 2011'),
(5, '011/012', 'session frm 2011 to 2012'),
(6, '012/013', 'session frm 2012 to 2013'),
(7, '013/014', 'session frm 2013 to 2014'),
(8, '014/015', 'session frm 2014 to 2015'),
(9, '015/016', 'session frm 2015 to 2016'),
(10, '016/017', 'session frm 2016 to 2017'),
(11, '017/018', 'session frm 2017 to 2018');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_course_id` text COLLATE utf8mb4_unicode_ci,
  `second_course_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `session` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_course_id`, `second_course_id`, `user_id`, `session`, `created_at`, `updated_at`) VALUES
(1, '2,3,4,5', NULL, 10, 11, '2018-05-16 12:22:37', '2018-05-16 12:22:37'),
(3, '2,3,4,5', NULL, 12, 11, '2018-05-17 08:53:20', '2018-05-17 08:53:20'),
(5, NULL, '6', 12, 11, '2018-05-22 09:54:49', '2018-05-22 09:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(169) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_set` text COLLATE utf8mb4_unicode_ci,
  `student_type` text COLLATE utf8mb4_unicode_ci COMMENT '1 for full-time,2 for part-time',
  `guardian_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `department_id`, `password`, `id_no`, `phone`, `birthday`, `address`, `gender`, `student_set`, `student_type`, `guardian_email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adedeji mariam', 'mariamadedeji3@gmail.com', 1, '$2y$10$VXUV2aAgNZ3RtMG8jsvKcefkLwzVOHItWc9oKVzgaw/PBm4evwKIG', 'ma875', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ir6Z4cgaLmOYMNgwgiyExKIXSWcxSMcg0Ulr8KymUSDRA4NQJaYcUVAHpGI0', '2018-05-09 20:54:57', '2018-05-09 20:54:57'),
(2, 'John doe', 'courseadviser@gmail.com', 1, '$2y$10$ezW8z9lT7fSEMh3BaPPuwOnVUiZCoE/gxmagwzJw0Qef438qXlPSi', 'jd987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a7QNDYuvEqLQq6xAc6rlMS0AUia7VJLG6gGkc1KfS2r07Z6ZghC21oiSc35i', '2018-05-14 10:54:36', '2018-05-14 10:54:36'),
(8, 'Tunde', 'bamgbose.ab@gmail.com', 2, '$2y$10$ItCU5Ld1WW5h8sq1l0n6wOdS14MncIdU9yfsFwqNAWxbTwvu9VV8m', 'tb123', NULL, NULL, NULL, NULL, NULL, '2', NULL, 'PF54hIePuF59qdw6AYt5kwJe1CvGoZdTqOjnQR9MGgObnM28AYtpHer4UhwB', '2018-05-14 12:49:20', '2018-05-14 12:49:20'),
(9, 'Adeleke tobi', 'hod@gmail.com', 1, '$2y$10$svRcaD9buwBPl8a.u6/D3OIjgjKBmm.EVn9eDZVwQ4w9JHKScF4yi', 'ad456hod', '08113056853', '18/04/1993', '3,Yusuf/Sadiku close, Agidingb', 'female', NULL, NULL, NULL, 'HMFttOQsREjJCkMbWcKlUTJyXMNRTM10bjKHgmEwMD17tuAZqxaAUxsfVnKB', '2018-05-15 06:46:04', '2018-05-24 13:07:27'),
(10, 'Akintola Akinade', 'akin@gmail.com', 1, '$2y$10$naxY8bWb1P1iA47rOdzqLebC.Kr3tvDqvIvhBh5bzWyMU5dlUJsVC', 'ak000eng', NULL, NULL, NULL, NULL, '11', '1', 'k@gmail.com', NULL, '2018-05-15 09:56:54', '2018-05-15 09:56:54'),
(11, 'Okunuga Soji', 'soki@gmail.com', 2, '$2y$10$Zf.gnuk3Jneuecx8lX.wJerKBNHDtlSICN4YHajd4WcxVtLETLMUC', 'soj101', NULL, NULL, NULL, NULL, '11', '1', NULL, 'sdLqFrueeG5jwoVI3kLC4W12W7KuLTE0vwZKidDuae8GnhznHJbtYyrLABy9', '2018-05-16 09:40:02', '2018-05-16 09:40:02'),
(12, 'Victor', 'vic@gmail.com', 1, '$2y$10$D/YCM5gtW0oP4AlQEmqjL.rJMJr2zeMGjxT34ahd0N018znuCvYUG', 'vic192', NULL, NULL, NULL, NULL, '11', '1', 'bola@gmail.com', 'gLK5brHVWfi9Q9VOv3i7hTyMfKRUaIjiUfg7DBmT64pZiZkGCQpFdm97Q7lR', '2018-05-16 09:42:37', '2018-05-16 09:42:37'),
(13, 'exam officer', 'exam@gmail.com', 2, '$2y$10$NARi3Lx.YIwl5wYEnKzxn.SHnYoTAYHQ0MCi3gbjVIu9hyJLn8FAO', 'ex10294', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YM2PoFeuMsO8LccG3bJCToZvXJlm121TfCZ5G3WmhzXGqllFu2BtlDjSU3iT', '2018-05-18 23:07:52', '2018-05-18 23:07:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `sch_session`
--
ALTER TABLE `sch_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_session`
--
ALTER TABLE `sch_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
