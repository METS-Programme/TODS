-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2017 at 02:04 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tods2`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `allocation_id` int(30) NOT NULL,
  `baseallocation_id` int(30) DEFAULT NULL,
  `print_order_delivary_id` int(30) DEFAULT NULL,
  `health_facility_level_id` int(10) NOT NULL,
  `tool_id` int(10) NOT NULL,
  `quantity` bigint(60) NOT NULL,
  `allocated_by` varchar(20) NOT NULL,
  `date_allocated` date NOT NULL,
  `created_at_in_db` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`allocation_id`, `baseallocation_id`, `print_order_delivary_id`, `health_facility_level_id`, `tool_id`, `quantity`, `allocated_by`, `date_allocated`, `created_at_in_db`, `date_updated`, `status`) VALUES
(1, 1, 1, 2, 1, 100, 'Steven', '2017-02-07', '2017-02-06 21:00:00', '0000-00-00', 0),
(2, 1, 1, 3, 2, 500, 'Steven', '2017-02-08', '2017-02-14 21:00:00', '0000-00-00', 0),
(3, 1, 1, 4, 3, 400, 'Steven', '2017-02-09', '2017-02-12 21:00:00', '0000-00-00', 0),
(4, 1, 1, 2, 4, 200, 'Steven', '2017-02-10', '2017-02-06 21:00:00', '0000-00-00', 0),
(5, 1, 1, 3, 5, 500, 'Steven', '2017-02-11', '2017-02-14 21:00:00', '0000-00-00', 0),
(6, 1, 1, 4, 6, 400, 'Steven', '2017-02-12', '2017-02-12 21:00:00', '0000-00-00', 1),
(7, 1, 2, 3, 1, 100, 'Kaaye', '2017-02-07', '2017-02-06 21:00:00', '0000-00-00', 0),
(8, 1, 2, 5, 1, 500, 'Kaaye', '2017-02-08', '2017-02-14 21:00:00', '0000-00-00', 0),
(9, 1, 2, 4, 1, 400, 'Kaaye', '2017-02-09', '2017-02-12 21:00:00', '0000-00-00', 0),
(10, 1, 2, 2, 2, 200, 'Kaaye', '2017-02-10', '2017-02-06 21:00:00', '0000-00-00', 0),
(11, 1, 2, 4, 2, 500, 'Kaaye', '2017-02-11', '2017-02-14 21:00:00', '0000-00-00', 0),
(12, 1, 2, 5, 2, 400, 'Kaaye', '2017-02-12', '2017-02-12 21:00:00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `base_allocation`
--

CREATE TABLE `base_allocation` (
  `baseallocation_id` int(10) UNSIGNED NOT NULL,
  `date_allocated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allocated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facilitylevel_id` int(10) UNSIGNED NOT NULL,
  `baseallocationtools_id` int(10) UNSIGNED NOT NULL,
  `printorder_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `base_allocation`
--

INSERT INTO `base_allocation` (`baseallocation_id`, `date_allocated`, `allocated_by`, `facilitylevel_id`, `baseallocationtools_id`, `printorder_id`, `created_at`, `updated_at`) VALUES
(1, '2017-02-08 00:00:00', 'Steven Okyaya', 1, 1, 1, '2017-02-07 21:00:00', NULL),
(2, '2017-02-08 00:00:00', 'Ocyaya', 2, 2, 2, '2017-02-13 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `base_allocation_tools`
--

CREATE TABLE `base_allocation_tools` (
  `baseallocationtools_id` int(10) UNSIGNED NOT NULL,
  `facility_level_id` int(10) UNSIGNED NOT NULL,
  `tools_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `base_allocation_tools`
--

INSERT INTO `base_allocation_tools` (`baseallocationtools_id`, `facility_level_id`, `tools_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-02-13 21:00:00', NULL),
(2, 2, 2, '2017-02-06 21:00:00', NULL),
(3, 2, 1, '2017-02-14 21:00:00', NULL),
(4, 3, 2, '2017-02-14 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(10) UNSIGNED NOT NULL,
  `lpo_number` int(30) NOT NULL,
  `date_delivered` date NOT NULL,
  `delivered_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `received_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `printingorder_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `total_tools_delivered` bigint(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `lpo_number`, `date_delivered`, `delivered_by`, `received_by`, `printingorder_id`, `comment`, `total_tools_delivered`, `created_at`, `updated_at`) VALUES
(1, 0, '2017-02-08', 'Inline', 'Steven', 1, '', 0, '2017-02-07 21:00:00', NULL),
(7, 23456, '2017-05-03', 'Inline', 'Kaye', 1, 'Next Week will deliver the balance', 0, NULL, NULL),
(8, 23456, '2017-05-01', 'Inline', 'Isaac', 1, 'Welldone', 0, NULL, NULL),
(9, 523452, '2017-05-03', 'Inline', 'Isaac', 1, 'fdsfsd', 0, NULL, NULL),
(10, 23456, '2017-05-03', 'Inline', 'Isaac', 1, 'gfdg', 0, NULL, NULL),
(11, 12345, '2017-05-11', 'Inline', 'Isaac', 1, 'ggdfgdfg', 0, NULL, NULL),
(12, 12345, '2017-05-11', 'Inline', 'Isaac', 1, 'ggdfgdfg', 0, NULL, NULL),
(13, 23456, '2017-05-09', 'Inline', 'Isaac', 1, 'Testing', 0, NULL, NULL),
(14, 1000, '2017-05-10', 'Inline', 'Isaac', 1, 'test', 1000, NULL, NULL),
(15, 1000, '2017-05-10', 'Inline', 'Isaac', 1, 'test', 1600, NULL, NULL),
(16, 1000, '2017-05-04', 'Inline', 'Isaac', 1, 'test', 4474, NULL, NULL),
(17, 1000, '2017-05-04', 'Inline', 'Isaac', 1, 'test', 4474, NULL, NULL),
(18, 1000, '2017-05-02', 'Inline', 'Isaac', 1, 'test', 3582, NULL, NULL),
(19, 1000, '2017-05-02', 'Inline', 'Isaac', 1, 'test', 920, NULL, NULL),
(20, 1000, '2017-05-03', 'Inline', 'Isaac', 1, 'test', 35240, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `distribution_id` int(10) UNSIGNED NOT NULL,
  `date_received` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distributed_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `received_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`distribution_id`, `date_received`, `distributed_by`, `received_by`, `comments`, `ip_id`, `created_at`, `updated_at`) VALUES
(1, '2017-02-13 00:00:00', 'IDI', 'Isaac Muwonge', 'Tools recieved', 1, '2017-02-14 21:00:00', NULL),
(2, '2017-02-10 00:00:00', 'MUJHU', 'Alice ', 'tools Recived', 5, '2017-02-13 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `name`, `code`, `latitude`, `longitude`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Kampala', '200', '0.7832794', '32.8908209', 1, '2017-02-14 21:00:00', NULL),
(2, 'Wakiso', '201', '0.121314', '32.890480', 1, '2017-02-12 21:00:00', NULL),
(3, 'Soroti', '201', '0.121314', '31.890480', 2, '2017-02-12 21:00:00', NULL),
(4, 'Mbarara', '203', '32.9889080', '0.89080323', 3, '2017-02-13 21:00:00', NULL),
(5, 'Kabalore', '204', '32.8889080', '0.89080323', 3, '2017-02-13 21:00:00', NULL),
(6, 'Gulu', '203', '32.0889080', '0.89080323', 4, '2017-02-13 21:00:00', NULL),
(7, 'Kalangala', '206', '32.0089080', '0.99080323', 5, '2017-02-14 03:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facility_level`
--

CREATE TABLE `facility_level` (
  `facilitylevel_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facility_level`
--

INSERT INTO `facility_level` (`facilitylevel_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Clinic', 'Clinics', NULL, NULL),
(2, 'HCII', 'Health Center Two', NULL, NULL),
(3, 'HCIII', 'Health Center Three', NULL, NULL),
(4, 'HCIV', 'Health Center four', NULL, NULL),
(5, 'Hospital', 'General Hospital', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funding_agency`
--

CREATE TABLE `funding_agency` (
  `funding_agency_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `funding_agency`
--

INSERT INTO `funding_agency` (`funding_agency_id`, `name`, `short_name`, `created_at`, `updated_at`) VALUES
(1, 'Center for Disease Control', 'CDC', '2017-02-11 21:00:00', '2017-02-11 21:00:00'),
(2, 'USAID', 'USAID', '2017-02-11 21:00:00', '2017-02-11 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `health_facility`
--

CREATE TABLE `health_facility` (
  `healthfacility_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_id` int(10) NOT NULL,
  `facilitylevel_id` int(10) NOT NULL,
  `subcounty_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `health_facility`
--

INSERT INTO `health_facility` (`healthfacility_id`, `name`, `code`, `ip_id`, `facilitylevel_id`, `subcounty_id`, `created_at`, `updated_at`) VALUES
(1, 'Kisenyi HCIV', '20333', 1, 2, 1, '2017-02-13 21:00:00', NULL),
(2, 'Komamboga HCIV', '7877829', 4, 3, 1, '2017-02-08 21:00:00', NULL),
(5, 'Kiswa', '3323', 1, 2, 1, '2017-04-08 18:50:58', '2017-04-08 18:50:58'),
(6, 'Kawaala HCII', '2010', 4, 2, 1, '2017-04-16 22:37:12', '2017-04-16 22:37:12'),
(7, 'hjkasf', '423', 1, 4, 1, '2017-04-17 00:03:28', '2017-04-17 00:03:28'),
(8, 'kjhkui', '657', 1, 1, 1, '2017-04-18 02:34:40', '2017-04-18 02:34:40'),
(9, 'rtrewye', '23442', 1, 1, 1, '2017-04-18 02:58:55', '2017-04-18 02:58:55'),
(10, 'fsaduifjhsd', '1241234', 4, 5, 1, '2017-04-18 05:03:29', '2017-04-18 05:03:29'),
(11, 'yyyyyyy', '22222', 5, 3, 1, '2017-04-18 05:19:21', '2017-04-18 05:19:21'),
(12, 'ppppp', '33333', 1, 2, 1, '2017-04-18 05:34:26', '2017-04-18 05:34:26'),
(13, 'qqqqqq', '53432', 1, 1, 1, '2017-04-18 05:36:32', '2017-04-18 05:36:32'),
(14, 'Kibiito', '33339', 4, 3, 1, '2017-04-21 06:54:38', '2017-04-21 06:54:38'),
(15, 'Kirudu', '1000', 4, 5, 1, '2017-04-21 06:57:02', '2017-04-21 06:57:02'),
(16, 'Matugga ', '242345', 4, 4, 1, '2017-04-23 08:59:32', '2017-04-23 08:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `h_facility_implementing_partner`
--

CREATE TABLE `h_facility_implementing_partner` (
  `id` int(10) NOT NULL,
  `health_facility_id` int(20) DEFAULT NULL,
  `facilitylevel_id` int(20) DEFAULT NULL,
  `ip_id` int(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `h_facility_implementing_partner`
--

INSERT INTO `h_facility_implementing_partner` (`id`, `health_facility_id`, `facilitylevel_id`, `ip_id`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 3, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 10, 5, 4, '2017-04-18 08:03:29', '2017-04-18 08:03:29'),
(4, 13, 1, 1, '2017-04-18 08:36:53', '2017-04-18 08:36:53'),
(5, 14, 3, 4, '2017-04-21 09:54:38', '2017-04-21 09:54:38'),
(6, 15, 5, 4, '2017-04-21 09:57:02', '2017-04-21 09:57:02'),
(7, 16, 4, 4, '2017-04-23 11:59:32', '2017-04-23 11:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `implementing_partner`
--

CREATE TABLE `implementing_partner` (
  `ip_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comprehensive_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `funding_agency_id` int(10) UNSIGNED NOT NULL,
  `regions` int(10) DEFAULT NULL,
  `districts` int(10) DEFAULT NULL,
  `vision` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `implementing_partner`
--

INSERT INTO `implementing_partner` (`ip_id`, `name`, `comprehensive_partner`, `funding_agency_id`, `regions`, `districts`, `vision`, `location`, `about`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IDI', 'Yes', 1, 0, 0, NULL, NULL, NULL, '', '2017-02-11 21:00:00', '2017-02-11 21:00:00'),
(4, 'Baylor', 'Yes', 1, 2, 30, 'A healthy and fulfilled life for every HIV infected and affected child & their family in Africa.', 'Head Office P.O.Box 72052, Clock Tower Tel: 0417-119100/200/125 Email: admin@baylor-uganda.org www.baylor-uganda.org', 'Program Areas:\r\nMaternal & Child Health,\r\nComprehensive HIV Care,\r\nHealth Systems Strengthening,', '1490365535.jpeg', '2017-02-12 10:03:53', '2017-02-12 10:03:53'),
(5, 'Mujuh', 'Yes', 1, 0, 0, NULL, NULL, NULL, '', '2017-02-12 10:05:48', '2017-02-12 10:05:48'),
(6, 'Assist', 'Yes', 2, 0, 0, NULL, NULL, NULL, '', '2017-02-12 10:07:27', '2017-02-12 10:07:27'),
(7, 'UPMB', 'No', 1, 0, 0, NULL, NULL, NULL, '', '2017-02-12 11:04:58', '2017-02-12 11:04:58'),
(18, 'Taso', 'Yes', 1, 0, 0, NULL, NULL, NULL, '', '2017-02-21 21:00:00', NULL),
(22, 'Kalangala Comprehensive', 'Yes', 1, 0, 0, NULL, NULL, NULL, '', '2017-02-26 03:39:34', '2017-02-26 03:39:34'),
(23, 'Isaac', 'No', 1, 0, 0, NULL, NULL, NULL, '', '2017-03-19 17:37:32', '2017-03-19 17:37:32'),
(24, 'RTI', 'No', 1, 4, 0, NULL, NULL, NULL, '', '2017-03-22 21:51:05', '2017-03-22 21:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `ip_order`
--

CREATE TABLE `ip_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `lpo_number` int(11) NOT NULL,
  `date_ordered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordered_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_order_details`
--

CREATE TABLE `ip_order_details` (
  `toolsordered_id` int(10) UNSIGNED NOT NULL,
  `lpo_number` int(50) NOT NULL,
  `order_id` int(50) NOT NULL,
  `tools_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_01_17_0001_create_user_table', 1),
('2017_01_17_0002_create_roles_table', 1),
('2017_01_17_0003_create_region1_table', 1),
('2017_01_17_0004_create_district1_table', 1),
('2017_01_17_0005_create_subcounty_table', 1),
('2017_01_17_0006_create_facilityLevel_table', 1),
('2017_01_17_0007_create_healthFacility_table', 1),
('2017_01_17_0008_create_serviceArea_table', 1),
('2017_01_17_0009_create_packaging_table', 1),
('2017_01_17_0010_create_toolsPicked_table', 1),
('2017_01_17_0011_create_tool_table', 1),
('2017_01_17_0012_create_baseAllocationTools_table', 1),
('2017_01_17_0013_create_printingOrder_table', 1),
('2017_01_17_0014_create_baseAllocation_table', 1),
('2017_01_17_0015_create_toolsOrderedForPrinting_table', 1),
('2017_01_17_0016_create_allocation_table', 1),
('2017_01_17_0017_create_delivery_table', 1),
('2017_01_17_0018_create_toolsDelivered_table', 1),
('2017_01_17_0019_create_fundingAgency_table', 1),
('2017_01_17_0020_create_implementingPartner_table', 1),
('2017_01_17_0021_create_pickUp_table', 1),
('2017_01_17_0022_create_order_table', 1),
('2017_01_17_0023_create_distribution_table', 1),
('2017_01_17_0024_create_toolsDistributed_table', 1),
('2017_01_17_0025_create_toolsOrdered_table', 1),
('2017_03_17_082337_entrust_setup_tables', 2),
('2017_03_17_084539_entrust_setup_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `package_id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`package_id`, `package_name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Passal', 500, '2017-02-13 21:00:00', NULL),
(2, 'Box', 20, '2017-02-14 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pick_up`
--

CREATE TABLE `pick_up` (
  `pickup_id` int(10) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_picked` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picked_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `given_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `toolspicked_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pick_up`
--

INSERT INTO `pick_up` (`pickup_id`, `number`, `date_picked`, `picked_by`, `given_by`, `comment`, `toolspicked_id`, `created_at`, `updated_at`) VALUES
(1, '26272', '2017-02-08 00:00:00', 'IDI - Edison', 'Mets - Kaye Militon', 'Will come back with balance', 1, '2017-02-07 21:00:00', NULL),
(2, '895435', '2017-02-14 00:00:00', 'Taso', 'Lyavera', 'Finished all what was allocated to', 2, '2017-02-13 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `printing_orders`
--

CREATE TABLE `printing_orders` (
  `printorder_id` int(10) UNSIGNED NOT NULL,
  `lpo_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_ordered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tools_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordered_by` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordered_to` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tools_id` int(10) UNSIGNED DEFAULT NULL,
  `total_tools_ordered` bigint(80) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `printing_orders`
--

INSERT INTO `printing_orders` (`printorder_id`, `lpo_number`, `date_ordered`, `tools_duration`, `ordered_by`, `ordered_to`, `comment`, `tools_id`, `total_tools_ordered`, `created_at`, `updated_at`) VALUES
(1, '12345', '2017-02-14 00:00:00', '1 Quoter', NULL, NULL, 'When should we get the first delivary', 1, 0, '2017-02-13 21:00:00', NULL),
(2, '23456', '2017-02-14 00:00:00', '1 Quoter', NULL, NULL, 'Urgent', 2, 0, '2017-02-13 21:00:00', NULL),
(4, '523452', '2017-04-28', 'gdsfg', 'rewte', 'wetwe', 'tgfdgfdsfg', NULL, 0, NULL, NULL),
(5, '4324', '2017-04-28', 'tsstr', 'fgfhgfh', 'fghfg', 'rtyshgfghgfxh', NULL, 0, '2017-04-28 13:01:48', '2017-04-28 13:01:48'),
(6, '1000', '2017-05-02', '1', 'METS', 'Inline', 'Testing', NULL, 2200, '2017-05-09 12:22:46', '2017-05-09 12:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `print_order_details`
--

CREATE TABLE `print_order_details` (
  `id` int(10) NOT NULL,
  `lpo_number` int(50) NOT NULL,
  `printorder_id` int(30) NOT NULL,
  `tools_id` int(20) NOT NULL,
  `quantity_ordered` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `print_order_details`
--

INSERT INTO `print_order_details` (`id`, `lpo_number`, `printorder_id`, `tools_id`, `quantity_ordered`, `created_at`) VALUES
(1, 523452, 4, 1, 53, '2017-04-28 11:47:44'),
(2, 523452, 4, 2, 53, '2017-04-28 11:47:44'),
(3, 523452, 4, 3, 54354, '2017-04-28 11:47:44'),
(4, 523452, 4, 4, 3453, '2017-04-28 11:47:44'),
(5, 523452, 4, 5, 34534, '2017-04-28 11:47:44'),
(6, 523452, 4, 6, 5345, '2017-04-28 11:47:44'),
(7, 4324, 5, 1, 454, '2017-04-28 13:01:48'),
(8, 4324, 5, 2, 453, '2017-04-28 13:01:48'),
(9, 4324, 5, 3, 4565, '2017-04-28 13:01:48'),
(10, 4324, 5, 4, 2545, '2017-04-28 13:01:48'),
(11, 4324, 5, 5, 56676, '2017-04-28 13:01:48'),
(12, 4324, 5, 6, 5235, '2017-04-28 13:01:48'),
(13, 1000, 6, 1, 500, '2017-05-09 12:22:46'),
(14, 1000, 6, 2, 300, '2017-05-09 12:22:46'),
(15, 1000, 6, 3, 200, '2017-05-09 12:22:46'),
(16, 1000, 6, 4, 700, '2017-05-09 12:22:46'),
(17, 1000, 6, 5, 400, '2017-05-09 12:22:46'),
(18, 1000, 6, 6, 100, '2017-05-09 12:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Central', '100', '2017-02-14 21:00:00', NULL),
(2, 'Estern', '101', '2017-02-14 21:00:00', NULL),
(3, 'Western', '102', '2017-02-14 23:00:00', NULL),
(4, 'Northan', '102', '2017-02-15 00:00:00', NULL),
(5, 'Southern', '102', '2017-02-15 02:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_1`
--

CREATE TABLE `roles_1` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles_1`
--

INSERT INTO `roles_1` (`role_id`, `name`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Active', 1, '2017-02-05 21:00:00', NULL),
(2, 'Implimenting Partner', 'Active', 2, '2017-02-13 21:00:00', NULL),
(3, 'Printing Company', 'Active', 9, '2017-01-31 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_area`
--

CREATE TABLE `service_area` (
  `servicearea_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `healthfacility_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_area`
--

INSERT INTO `service_area` (`servicearea_id`, `name`, `description`, `healthfacility_id`, `created_at`, `updated_at`) VALUES
(1, 'Kampala', 'Distributes in Kampala', 2, '2017-02-13 21:00:00', NULL),
(2, 'Mengo', 'Distribtus ariound Mengo Kisenyi', 1, '2017-02-11 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Capacity` varchar(60) NOT NULL,
  `Location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `Name`, `Capacity`, `Location`) VALUES
(1, 'Red Conatiner', '1000 torns', 'Mets office'),
(2, 'Grew Container', '1000 torns', 'Mets Offices'),
(3, 'Blue Conatiner', '1000 torns', 'Mets Offices'),
(4, 'WareHouse', '10000 torns', 'Industrial Area');

-- --------------------------------------------------------

--
-- Table structure for table `subcounty`
--

CREATE TABLE `subcounty` (
  `subcounty_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcounty`
--

INSERT INTO `subcounty` (`subcounty_id`, `name`, `code`, `longitude`, `latitude`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Kampala Central', '20kpc', '11242141', '12412414', 1, '2017-04-04 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tools_id` int(20) UNSIGNED NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `specification` varchar(100) DEFAULT NULL,
  `servicearea_id` int(10) UNSIGNED DEFAULT NULL,
  `package_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `stock_status` bigint(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tools_id`, `code`, `name`, `specification`, `servicearea_id`, `package_id`, `description`, `stock_status`, `created_at`, `updated_at`) VALUES
(1, '302', 'ART CARD', 'saggs', 1, 1, 'agasgdsaga', 37755, '2017-03-16 04:21:15', '2017-03-16'),
(2, '467', 'SMC CArds', 'yellow cards', 2, 2, 'bule cards', 964, '2017-03-16 04:22:16', '2017-03-16'),
(3, '035a', 'Safe Male Circumcission Client Form', 'SMC cards', 1, 2, NULL, 1176, '0000-00-00 00:00:00', NULL),
(4, '073', 'Child Register', 'Child Registration Cards', 2, 2, 'Child Registration Cards', 795, '0000-00-00 00:00:00', NULL),
(5, '096a', 'Heath Unit TB Register', 'Heath Unit TB Register', 2, 1, 'Heath Unit TB Register cards', 0, '2017-04-13 15:05:21', NULL),
(6, '089', 'TB Laboratory Register', 'TB Laboratory Register', 3, 4, 'TB Laboratory Register', 600, '2017-04-13 15:05:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools_delivered`
--

CREATE TABLE `tools_delivered` (
  `toolsdelivered_id` int(10) UNSIGNED NOT NULL,
  `lpo_number` int(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tools_id` int(10) UNSIGNED NOT NULL,
  `delivery_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tools_delivered`
--

INSERT INTO `tools_delivered` (`toolsdelivered_id`, `lpo_number`, `quantity`, `tools_id`, `delivery_id`, `created_at`, `updated_at`) VALUES
(1, 0, 200, 1, 1, '2017-02-14 21:00:00', NULL),
(2, 0, 300, 2, 1, '2017-02-14 21:00:00', NULL),
(3, 23456, 10, 1, 7, NULL, NULL),
(4, 23456, 20, 2, 7, NULL, NULL),
(5, 23456, 10, 3, 7, NULL, NULL),
(6, 23456, 20, 4, 7, NULL, NULL),
(7, 23456, 20, 5, 7, NULL, NULL),
(8, 23456, 30, 6, 7, NULL, NULL),
(9, 23456, 400, 1, 8, '2017-05-09 08:52:05', NULL),
(10, 23456, 200, 2, 8, '2017-05-09 08:52:05', NULL),
(11, 23456, 500, 3, 8, '2017-05-09 08:52:05', NULL),
(12, 23456, 300, 4, 8, '2017-05-09 08:52:05', NULL),
(13, 23456, 500, 5, 8, '2017-05-09 08:52:05', NULL),
(14, 23456, 100, 6, 8, '2017-05-09 08:52:05', NULL),
(15, 523452, 3202, 1, 9, '2017-05-09 08:56:04', NULL),
(16, 523452, 300, 2, 9, '2017-05-09 08:56:04', NULL),
(17, 523452, 2323, 3, 9, '2017-05-09 08:56:04', NULL),
(18, 523452, 343, 4, 9, '2017-05-09 08:56:04', NULL),
(19, 523452, 234, 5, 9, '2017-05-09 08:56:04', NULL),
(20, 523452, 234, 6, 9, '2017-05-09 08:56:04', NULL),
(21, 23456, 32, 1, 10, '2017-05-09 08:58:14', NULL),
(22, 23456, 554, 2, 10, '2017-05-09 08:58:14', NULL),
(23, 23456, 65, 3, 10, '2017-05-09 08:58:14', NULL),
(24, 23456, 453, 4, 10, '2017-05-09 08:58:14', NULL),
(25, 23456, 346, 5, 10, '2017-05-09 08:58:14', NULL),
(26, 23456, 75, 6, 10, '2017-05-09 08:58:14', NULL),
(27, 12345, 35345, 1, 11, '2017-05-09 09:24:06', NULL),
(28, 12345, 324, 2, 11, '2017-05-09 09:24:06', NULL),
(29, 12345, 243, 3, 11, '2017-05-09 09:24:06', NULL),
(30, 12345, 2345, 4, 11, '2017-05-09 09:24:06', NULL),
(31, 12345, 646, 5, 11, '2017-05-09 09:24:06', NULL),
(32, 12345, 4646, 6, 11, '2017-05-09 09:24:06', NULL),
(33, 12345, 35345, 1, 12, '2017-05-09 09:28:19', NULL),
(34, 12345, 324, 2, 12, '2017-05-09 09:28:19', NULL),
(35, 12345, 243, 3, 12, '2017-05-09 09:28:19', NULL),
(36, 12345, 2345, 4, 12, '2017-05-09 09:28:19', NULL),
(37, 12345, 646, 5, 12, '2017-05-09 09:28:19', NULL),
(38, 12345, 4646, 6, 12, '2017-05-09 09:28:19', NULL),
(39, 23456, 200, 1, 13, '2017-05-09 10:08:22', NULL),
(40, 23456, 100, 2, 13, '2017-05-09 10:08:22', NULL),
(41, 23456, 300, 3, 13, '2017-05-09 10:08:22', NULL),
(42, 23456, 150, 4, 13, '2017-05-09 10:08:22', NULL),
(43, 23456, 120, 5, 13, '2017-05-09 10:08:22', NULL),
(44, 23456, 350, 6, 13, '2017-05-09 10:08:22', NULL),
(45, 1000, 300, 1, 14, '2017-05-09 12:35:41', NULL),
(46, 1000, 0, 2, 14, '2017-05-09 12:35:41', NULL),
(47, 1000, 200, 3, 14, '2017-05-09 12:35:41', NULL),
(48, 1000, 0, 4, 14, '2017-05-09 12:35:41', NULL),
(49, 1000, 500, 5, 14, '2017-05-09 12:35:41', NULL),
(50, 1000, 0, 6, 14, '2017-05-09 12:35:41', NULL),
(51, 1000, 300, 1, 15, '2017-05-09 12:38:43', NULL),
(52, 1000, 300, 2, 15, '2017-05-09 12:38:43', NULL),
(53, 1000, 200, 3, 15, '2017-05-09 12:38:43', NULL),
(54, 1000, 100, 4, 15, '2017-05-09 12:38:43', NULL),
(55, 1000, 500, 5, 15, '2017-05-09 12:38:43', NULL),
(56, 1000, 200, 6, 15, '2017-05-09 12:38:43', NULL),
(57, 1000, 0, 1, 16, '2017-05-09 12:47:28', NULL),
(58, 1000, 8, 2, 16, '2017-05-09 12:47:28', NULL),
(59, 1000, 4234, 3, 16, '2017-05-09 12:47:28', NULL),
(60, 1000, 0, 4, 16, '2017-05-09 12:47:28', NULL),
(61, 1000, 232, 5, 16, '2017-05-09 12:47:28', NULL),
(62, 1000, 0, 6, 16, '2017-05-09 12:47:28', NULL),
(63, 1000, 0, 1, 17, '2017-05-09 12:48:40', NULL),
(64, 1000, 8, 2, 17, '2017-05-09 12:48:40', NULL),
(65, 1000, 4234, 3, 17, '2017-05-09 12:48:40', NULL),
(66, 1000, 0, 4, 17, '2017-05-09 12:48:40', NULL),
(67, 1000, 232, 5, 17, '2017-05-09 12:48:40', NULL),
(68, 1000, 0, 6, 17, '2017-05-09 12:48:40', NULL),
(69, 1000, 2423, 1, 18, '2017-05-09 12:52:45', NULL),
(70, 1000, 564, 2, 18, '2017-05-09 12:52:45', NULL),
(71, 1000, 0, 3, 18, '2017-05-09 12:52:45', NULL),
(72, 1000, 545, 4, 18, '2017-05-09 12:52:45', NULL),
(73, 1000, 0, 5, 18, '2017-05-09 12:52:45', NULL),
(74, 1000, 50, 6, 18, '2017-05-09 12:52:45', NULL),
(75, 1000, 34532, 1, 20, '2017-05-09 13:06:32', NULL),
(76, 1000, 0, 2, 20, '2017-05-09 13:06:32', NULL),
(77, 1000, 676, 3, 20, '2017-05-09 13:06:32', NULL),
(78, 1000, 0, 4, 20, '2017-05-09 13:06:32', NULL),
(79, 1000, 32, 5, 20, '2017-05-09 13:06:32', NULL),
(80, 1000, 0, 6, 20, '2017-05-09 13:06:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools_distributed`
--

CREATE TABLE `tools_distributed` (
  `toolsdistributed_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `toolspicked_id` int(10) UNSIGNED NOT NULL,
  `distribution_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tools_distributed`
--

INSERT INTO `tools_distributed` (`toolsdistributed_id`, `quantity`, `toolspicked_id`, `distribution_id`, `created_at`, `updated_at`) VALUES
(1, 50, 1, 1, '2017-02-13 21:00:00', NULL),
(2, 20, 2, 2, '2017-02-13 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools_ordered_for_printing`
--

CREATE TABLE `tools_ordered_for_printing` (
  `toolsforprinting_id` int(10) UNSIGNED NOT NULL,
  `tool` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `printingorder_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tools_picked`
--

CREATE TABLE `tools_picked` (
  `toolspicked_id` int(10) UNSIGNED NOT NULL,
  `quantity_ordered` int(11) NOT NULL,
  `tool_id` bigint(50) UNSIGNED NOT NULL,
  `quantity_authorized` int(11) NOT NULL,
  `quantity_collected` int(11) NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tools_picked`
--

INSERT INTO `tools_picked` (`toolspicked_id`, `quantity_ordered`, `tool_id`, `quantity_authorized`, `quantity_collected`, `comments`, `created_at`, `updated_at`) VALUES
(1, 200, 0, 150, 150, 'They have balance', '2017-02-14 21:00:00', NULL),
(2, 300, 0, 200, 100, 'They have balance to be collected', '2017-02-13 21:00:00', NULL),
(3, 500, 0, 400, 235, 'Should come back in second quoter ', '2017-02-16 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othernames` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonetwo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonethree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `othernames`, `password`, `remember_token`, `organization`, `email`, `phoneone`, `phonetwo`, `phonethree`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'imwota', 'Isaac', 'Mwoatsubi', 'Kisitu', 'kisss', '', 'Mets', 'isallzack16@gmail.com', '873837373', '949484949', '98484848', '', '2017-02-08 21:00:00', NULL),
(2, 'dkusiima', 'Daisy', 'Kusima', 'Tumusime', 'daisy', '', 'Mets', 'dkusiima@gmail.com', '8759275298', '940248602', '', '', '2017-02-09 21:00:00', NULL),
(8, 'DFDASFASD', '', 'dfsF', NULL, 'sagsag', '', NULL, 'sdgs@fsgfs.gsg', '2525245', '52462462', NULL, 'hdsf', '2017-02-09 14:26:56', '2017-02-09 14:26:56'),
(9, 'osx', '', 'Ocyaya', NULL, '', '', NULL, 'osx@mk.co', '958029590', '90368908609', NULL, 'Mets', '2017-02-09 14:32:35', '2017-02-09 14:32:35'),
(10, 'kvsadhfla', '', 'kjshdfkjsda', NULL, 'udafhasdkf', '', NULL, 'fdafjha@hjfkha.cdda', '4325235', '325325253', NULL, '425245', '2017-02-10 03:09:46', '2017-02-10 03:09:46'),
(11, 'smuwanga', '', 'muwanga', NULL, 'jdflk', '', NULL, 'sm@hdssd.cjd', '888888', '88888', NULL, '8888', '2017-02-10 03:11:08', '2017-02-10 03:11:08'),
(12, 'asdgsdg', 'fadfsd', 'asdgsadg', NULL, 'sddsa', '', NULL, 'sdgs@fsgfs.gsg', '423643', '324632', NULL, 'sgfsg', '2017-02-10 04:34:15', '2017-02-10 04:34:15'),
(16, 'isall', '', '', NULL, '$2y$10$nHxUrCksciqhFpGz4/iv0eW3G.PSHUlvYUy0rIVZIlj.anKBaf2JC', 'MWIw9MonioSHp1r8kaMc07mrJ4hnKb', NULL, 'isallzack@yahoo.com', '', NULL, NULL, '', '2017-03-18 15:08:56', '2017-05-10 07:30:11'),
(17, 'Isaac Mwotasubi', '', '', NULL, '$2y$10$.CHzl5Yd.PUE5sTZi7dEZO0vS0d/lVQImXBa313chSaRQJ1yhSv2G', '', NULL, 'isallzack@gmail.com', '', NULL, NULL, '', '2017-03-18 16:47:07', '2017-03-18 16:47:07'),
(18, 'hjkfah', '', '', NULL, '$2y$10$Se4nawfM7N6x3zrvIEH56u8mK8x0dQ1ZmU7GTl7JA4AhgpnoQudQC', '', NULL, 'jhdfkja@hjkdkf.sakdld', '', NULL, NULL, '', '2017-03-18 17:21:46', '2017-03-18 17:21:46'),
(19, 'fsfsd', '', '', NULL, '$2y$10$0hQ9Ybc3gF8CKJDTILQerebG3e8rkdg4FLWbIBIlz4vrQplNY95VK', '', NULL, 'dfads@fdffdd.cds', '', NULL, NULL, '', '2017-03-18 17:25:21', '2017-03-18 17:25:21'),
(20, 'dhafjhk', '', '', NULL, '$2y$10$aHyQ2PRFexeAPIWyJwXosuTJE.KFHu7LkPlHeD5VjEm4Irdj5Rnb6', '', NULL, 'assad@haj.ahjk', '', NULL, NULL, '', '2017-03-18 17:30:45', '2017-03-18 17:30:45'),
(21, 'dkfjaa', '', '', NULL, '$2y$10$mbHx98bqUKY47obeudbvdOcaBGiiT1ZqvpJ9VKqjPf50gmVOpa3Zu', '', NULL, 'asdfj@jksd.cioas', '', NULL, NULL, '', '2017-03-18 17:32:12', '2017-03-18 17:32:12'),
(22, 'fsdggs', '', '', NULL, '$2y$10$TX3EHsvhoijGP4Fj9bhVt.yXIe3.8IoeIuv.qtsDbPO0OhM.0qFEe', 'B59rcS2UQZ5HTJ5nLTFh4SFSRftk82', NULL, 'safds@gagas.dsd', '', NULL, NULL, '', '2017-03-18 17:33:36', '2017-03-18 17:41:42'),
(23, '', 'Im', 'TAATA', NULL, 'dmin', '', NULL, '', '774446829', '0774446829', NULL, 'IDI', '2017-03-19 17:40:22', '2017-03-19 17:40:22'),
(24, 'admin', '', '', NULL, '$2y$10$UMAikNSBA34ITgWfRoyceuKQpMwJC1acMwReyUknitdvtdivo9JVS', '80jFeJtIiM4DM53HKMLs5kPdelK8vf', NULL, 'admin@localhost.com', '', NULL, NULL, '', '2017-03-19 17:47:45', '2017-03-19 19:32:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `base_allocation`
--
ALTER TABLE `base_allocation`
  ADD PRIMARY KEY (`baseallocation_id`),
  ADD KEY `base_allocation_facilitylevel_id_foreign` (`facilitylevel_id`);

--
-- Indexes for table `base_allocation_tools`
--
ALTER TABLE `base_allocation_tools`
  ADD PRIMARY KEY (`baseallocationtools_id`),
  ADD KEY `base_allocation_tools_tools_id_foreign` (`tools_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `delivery_printingorder_id_foreign` (`printingorder_id`);

--
-- Indexes for table `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`distribution_id`),
  ADD KEY `distribution_ip_id_foreign` (`ip_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `district_region_id_foreign` (`region_id`);

--
-- Indexes for table `facility_level`
--
ALTER TABLE `facility_level`
  ADD PRIMARY KEY (`facilitylevel_id`);

--
-- Indexes for table `funding_agency`
--
ALTER TABLE `funding_agency`
  ADD PRIMARY KEY (`funding_agency_id`);

--
-- Indexes for table `health_facility`
--
ALTER TABLE `health_facility`
  ADD PRIMARY KEY (`healthfacility_id`);

--
-- Indexes for table `h_facility_implementing_partner`
--
ALTER TABLE `h_facility_implementing_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implementing_partner`
--
ALTER TABLE `implementing_partner`
  ADD PRIMARY KEY (`ip_id`),
  ADD KEY `implementing_partner_fundingagency_id_foreign` (`funding_agency_id`);

--
-- Indexes for table `ip_order`
--
ALTER TABLE `ip_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_ip_id_foreign` (`ip_id`);

--
-- Indexes for table `ip_order_details`
--
ALTER TABLE `ip_order_details`
  ADD PRIMARY KEY (`toolsordered_id`),
  ADD KEY `tools_ordered_tools_id_foreign` (`tools_id`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD PRIMARY KEY (`pickup_id`),
  ADD KEY `pick_up_toolspicked_id_foreign` (`toolspicked_id`);

--
-- Indexes for table `printing_orders`
--
ALTER TABLE `printing_orders`
  ADD PRIMARY KEY (`printorder_id`),
  ADD KEY `printing_order_tools_id_foreign` (`tools_id`);

--
-- Indexes for table `print_order_details`
--
ALTER TABLE `print_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `roles_1`
--
ALTER TABLE `roles_1`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `service_area`
--
ALTER TABLE `service_area`
  ADD PRIMARY KEY (`servicearea_id`),
  ADD KEY `service_area_healthfacility_id_foreign` (`healthfacility_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcounty`
--
ALTER TABLE `subcounty`
  ADD PRIMARY KEY (`subcounty_id`),
  ADD KEY `subcounty_district_id_foreign` (`district_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tools_id`);

--
-- Indexes for table `tools_delivered`
--
ALTER TABLE `tools_delivered`
  ADD PRIMARY KEY (`toolsdelivered_id`),
  ADD KEY `tools_delivered_tools_id_foreign` (`tools_id`),
  ADD KEY `tools_delivered_delivery_id_foreign` (`delivery_id`);

--
-- Indexes for table `tools_distributed`
--
ALTER TABLE `tools_distributed`
  ADD PRIMARY KEY (`toolsdistributed_id`),
  ADD KEY `tools_distributed_toolspicked_id_foreign` (`toolspicked_id`),
  ADD KEY `tools_distributed_distribution_id_foreign` (`distribution_id`);

--
-- Indexes for table `tools_ordered_for_printing`
--
ALTER TABLE `tools_ordered_for_printing`
  ADD PRIMARY KEY (`toolsforprinting_id`),
  ADD KEY `tools_ordered_for_printing_printingorder_id_foreign` (`printingorder_id`);

--
-- Indexes for table `tools_picked`
--
ALTER TABLE `tools_picked`
  ADD PRIMARY KEY (`toolspicked_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `allocation_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `base_allocation`
--
ALTER TABLE `base_allocation`
  MODIFY `baseallocation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `base_allocation_tools`
--
ALTER TABLE `base_allocation_tools`
  MODIFY `baseallocationtools_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `distribution`
--
ALTER TABLE `distribution`
  MODIFY `distribution_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `facility_level`
--
ALTER TABLE `facility_level`
  MODIFY `facilitylevel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `funding_agency`
--
ALTER TABLE `funding_agency`
  MODIFY `funding_agency_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `health_facility`
--
ALTER TABLE `health_facility`
  MODIFY `healthfacility_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `h_facility_implementing_partner`
--
ALTER TABLE `h_facility_implementing_partner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `implementing_partner`
--
ALTER TABLE `implementing_partner`
  MODIFY `ip_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ip_order`
--
ALTER TABLE `ip_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ip_order_details`
--
ALTER TABLE `ip_order_details`
  MODIFY `toolsordered_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `package_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pick_up`
--
ALTER TABLE `pick_up`
  MODIFY `pickup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `printing_orders`
--
ALTER TABLE `printing_orders`
  MODIFY `printorder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `print_order_details`
--
ALTER TABLE `print_order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles_1`
--
ALTER TABLE `roles_1`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_area`
--
ALTER TABLE `service_area`
  MODIFY `servicearea_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcounty`
--
ALTER TABLE `subcounty`
  MODIFY `subcounty_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `tools_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tools_delivered`
--
ALTER TABLE `tools_delivered`
  MODIFY `toolsdelivered_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tools_distributed`
--
ALTER TABLE `tools_distributed`
  MODIFY `toolsdistributed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tools_ordered_for_printing`
--
ALTER TABLE `tools_ordered_for_printing`
  MODIFY `toolsforprinting_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tools_picked`
--
ALTER TABLE `tools_picked`
  MODIFY `toolspicked_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `base_allocation`
--
ALTER TABLE `base_allocation`
  ADD CONSTRAINT `base_allocation_facilitylevel_id_foreign` FOREIGN KEY (`facilitylevel_id`) REFERENCES `facility_level` (`facilitylevel_id`);

--
-- Constraints for table `base_allocation_tools`
--
ALTER TABLE `base_allocation_tools`
  ADD CONSTRAINT `base_allocation_tools_tools_id_foreign` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`tools_id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_printingorder_id_foreign` FOREIGN KEY (`printingorder_id`) REFERENCES `printing_orders` (`printorder_id`);

--
-- Constraints for table `distribution`
--
ALTER TABLE `distribution`
  ADD CONSTRAINT `distribution_ip_id_foreign` FOREIGN KEY (`ip_id`) REFERENCES `implementing_partner` (`ip_id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `region` (`region_id`);

--
-- Constraints for table `implementing_partner`
--
ALTER TABLE `implementing_partner`
  ADD CONSTRAINT `implementing_partner_fundingagency_id_foreign` FOREIGN KEY (`funding_agency_id`) REFERENCES `funding_agency` (`funding_agency_id`);

--
-- Constraints for table `ip_order`
--
ALTER TABLE `ip_order`
  ADD CONSTRAINT `order_ip_id_foreign` FOREIGN KEY (`ip_id`) REFERENCES `implementing_partner` (`ip_id`);

--
-- Constraints for table `ip_order_details`
--
ALTER TABLE `ip_order_details`
  ADD CONSTRAINT `tools_ordered_tools_id_foreign` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`tools_id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `pick_up_toolspicked_id_foreign` FOREIGN KEY (`toolspicked_id`) REFERENCES `tools_picked` (`toolspicked_id`);

--
-- Constraints for table `printing_orders`
--
ALTER TABLE `printing_orders`
  ADD CONSTRAINT `printing_order_tools_id_foreign` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`tools_id`);

--
-- Constraints for table `roles_1`
--
ALTER TABLE `roles_1`
  ADD CONSTRAINT `roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_area`
--
ALTER TABLE `service_area`
  ADD CONSTRAINT `service_area_healthfacility_id_foreign` FOREIGN KEY (`healthfacility_id`) REFERENCES `health_facility` (`healthfacility_id`);

--
-- Constraints for table `subcounty`
--
ALTER TABLE `subcounty`
  ADD CONSTRAINT `subcounty_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `tools_delivered`
--
ALTER TABLE `tools_delivered`
  ADD CONSTRAINT `tools_delivered_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`delivery_id`),
  ADD CONSTRAINT `tools_delivered_tools_id_foreign` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`tools_id`);

--
-- Constraints for table `tools_distributed`
--
ALTER TABLE `tools_distributed`
  ADD CONSTRAINT `tools_distributed_distribution_id_foreign` FOREIGN KEY (`distribution_id`) REFERENCES `distribution` (`distribution_id`),
  ADD CONSTRAINT `tools_distributed_toolspicked_id_foreign` FOREIGN KEY (`toolspicked_id`) REFERENCES `tools_picked` (`toolspicked_id`);

--
-- Constraints for table `tools_ordered_for_printing`
--
ALTER TABLE `tools_ordered_for_printing`
  ADD CONSTRAINT `tools_ordered_for_printing_printingorder_id_foreign` FOREIGN KEY (`printingorder_id`) REFERENCES `printing_orders` (`printorder_id`);
