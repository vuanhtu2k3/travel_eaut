-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 09:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism1`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `createuser` varchar(255) DEFAULT NULL,
  `deleteuser` varchar(255) DEFAULT NULL,
  `createbid` varchar(255) DEFAULT NULL,
  `updatebid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `createuser`, `deleteuser`, `createbid`, `updatebid`) VALUES
(1, 'Superuser', NULL, '1', '1', '1'),
(2, 'Admin', NULL, '1', '1', '1'),
(3, 'User', NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `Staffid` varchar(255) DEFAULT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `Photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'avatar15.jpg',
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `Staffid`, `AdminName`, `UserName`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Status`, `Photo`, `Password`, `AdminRegdate`) VALUES
(2, '10002', 'Admin', 'admin', 'Vũ', 'Tú  ', 770546590, 'admin@gmail.com', 1, 'face19.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 10:18:39'),
(9, '10003', 'Admin', 'thanhtrung', 'Thành', 'Trung ', 757537271, 'tt@gmail.com', 1, 'face27.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 07:08:48'),
(29, 'U002', 'User', 'tienhao', 'Tiến', 'Hào', 770546590, 'th@gmail.com', 1, 'avatar15.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-07-21 14:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(13, 5, 'gerald@gmail.com', '2020-12-11', '2020-12-11', 'Tôi cần đặt chuyến đi du lịch Hạ Long', '2020-12-11 12:13:17', 1, '', '2021-01-14 18:35:06'),
(14, 2, 'tuvu@gmail.com', '2021-01-12', '2021-01-15', 'Một nơi tắm nắng', '2021-01-12 19:49:39', 2, 'u', '2021-01-14 11:20:42'),
(15, 4, 'boycodon@gmail.com', '2021-01-14', '2021-01-16', 'Một nơi du lịch văn hóa', '2021-01-14 08:19:44', 2, 'u', '2021-02-15 08:56:58'),
(16, 2, 'thanhtrung@gmail.com', '2021-03-26', '2021-03-31', 'Tôi thực sự muốn đi thăm nơi này', '2021-03-24 22:48:36', 0, NULL, NULL),
(17, 6, 'admin@gmail.com', '2021-07-28', '2021-07-30', 'Chuyến đi nghỉ mát', '2021-07-24 09:51:52', 2, 'a', '2021-07-24 10:04:22'),
(18, 1, 'admin@gmail.com', '2021-07-24', '2021-07-26', 'Chuyến đi vui vẻ', '2021-07-24 09:59:34', 1, NULL, '2021-07-24 10:01:21'),
(19, 2, 'admin@gmail.com', NULL, NULL, NULL, '2023-12-23 01:33:19', 1, NULL, '2023-12-23 01:34:18'),
(20, 2, 'admin@gmail.com', '2023-12-21', '2023-12-21', '123', '2023-12-23 02:16:59', 1, NULL, '2023-12-23 02:18:11'),
(21, 2, 'admin@gmail.com', '2023-12-15', '2023-12-21', '123', '2023-12-23 02:18:47', 2, 'a', '2023-12-23 02:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `companyname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `companyemail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `companyphone` int(10) NOT NULL,
  `companyaddress` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `companylogo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'avatar15.jpg',
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `developer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`id`, `regno`, `companyname`, `companyemail`, `country`, `companyphone`, `companyaddress`, `companylogo`, `status`, `developer`, `creationdate`) VALUES
(4, '1002', 'St.Tuvucoder', 'tuvux14@gmail.com', 'VietNam', 770546590, 'HaNoi', 'church.jpg', '1', 'tuvux14', '2021-02-02 12:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(2, 'Tour Đồng bằng sông Cửu Long trọn ngày với bữa trưa', 'Du lịch , ẩm thực', 'TP.Hồ Chí Minh', 400000, 'Trái cây,Dịch vụ hướng dẫn bằng tiếng Anh,Dịch vụ đưa đón tại khách sạn,Vé vào các điểm tham quan,Đi thuyền,Di chuyển bằng xe minivan có điều hòa,Bữa trưa (thực đơn có sẵn),Nước khoáng,Đi xe ngựa,Thuê xe đạp,Trà mật ong.', 'Tour trọn ngày này sẽ đưa bạn ra khỏi Thành phố Hồ Chí Minh và đi du lịch khắp vùng Đồng bằng sông Cửu Long.\r\n\r\nBạn sẽ đến thành phố Mỹ Tho và bắt đầu một cuộc phiêu lưu ở vùng nông thôn. Trong tour, bạn sẽ có thể khám phá những cánh đồng lúa rộng lớn, đồn điền dừa và trái cây nhiệt đới. Bạn sẽ được tìm hiểu cuộc sống hằng ngày ở cộng đồng địa phương, ngắm cảnh nông thôn và đến thăm một số làng truyền thống.', 'Tour2.jpg', '2024-05-13 15:24:26', '2023-12-23 08:41:11'),
(3, 'Tour ẩm thực đường phố trên xe máy', 'Du lịch Văn hoá , Ẩm thực', 'TP.Hồ Chí Minh', 490000, 'Đưa đón tại khách sạn, Dịch vụ hướng dẫn, Thử món ăn ,Thuê mũ bảo hiểm, Đồ uống có cồn, Áo mưa (nếu cần), Bảo hiểm tai nạn (lên đến 5.000 USD mỗi trường hợp).', 'Trong tour ẩm thực này, bạn sẽ có dịp dạo quanh các quầy hàng ăn uống của chợ Bến Thành nổi tiếng trên chiếc xe máy.\r\n\r\nKhi đi cùng hướng dẫn viên địa phương, bạn sẽ nếm thử 9–10 món khác nhau, bao gồm bánh khọt và bánh xèo, gỏi đu đủ khô bò độc đáo và bún bò Huế cay cay được hầm trong 8 giờ. Bạn cũng sẽ được nếm thử bánh tráng nướng và bánh mì.\r\n\r\nBạn còn được thưởng thức bia địa phương, nước mía và một món thức uống truyền thống nữa là nước dừa tắc hoặc dừa thơm. Tráng miệng với món chuối nướng ăn kèm nước cốt dừa.', 'Tour3.jpg', '2024-05-13 16:00:58', '2023-12-23 08:46:08'),
(4, 'Tour địa đạo Củ Chi và đồng bằng sông Cửu Long', 'Khám phá , tham quan', 'TP.Hồ Chí Minh', 980000, 'Đưa đón tại khách sạn (các khách sạn ở trung tâm) Dịch vụ hướng dẫn Bữa trưa Đi thuyền Di chuyển bằng xe có trang bị điều hòa Biểu diễn âm nhạc truyền thống Vé vào các điểm tham quan Bảo hiểm du lịch Nước uống', 'Trong tour này, bạn sẽ được khám phá địa đạo Củ Chi và đồng bằng sông Cửu Long với hướng dẫn viên chuyên nghiệp. Bạn sẽ có cơ hội nhìn thấy mạng lưới đường hầm ở huyện Củ Chi, Thành phố Hồ Chí Minh. Bạn sẽ tìm hiểu về các loại bẫy khác nhau được sử dụng trong chiến tranh và chui qua một trong các đường hầm.\r\n\r\nTiếp theo, bạn sẽ đến Mỹ Tho, cách Thành phố Hồ Chí Minh khoảng 86 km. Tại đây, bạn sẽ thấy những cánh đồng lúa bát ngát, những trang trại dừa, vườn trái cây nhiệt đới và hơn thế nữa. Chuyến tham quan cũng bao gồm bữa trưa, đi thuyền và xem biểu diễn âm nhạc truyền thống.', 'Tour4.jpg', '2024-05-13 22:42:10', '2023-12-23 09:00:00'),
(5, 'Tour tham quan Sài Gòn nửa ngày bằng xích lô', 'Du ngoạn', 'TP.Hồ Chí Minh', 250000, 'Có hướng dẫn viên du lịch', 'Trong hành trình này, bạn sẽ có cơ hội khám phá thành phố Sài Gòn trên chiếc xe 3 bánh nổi tiếng của Việt Nam - xích lô. Trong chuyến đi xích lô, bạn sẽ thăm nhiều điểm tham quan và địa danh biểu tượng của Sài Gòn như Bảo tàng Chứng tích Chiến tranh, Dinh Độc Lập, Chùa Bà Thiên Hậu, chợ Bến Thành và nhiều hơn nữa. Bạn cũng sẽ khám phá các khu chợ nổi tiếng của Việt Nam, lúc nào cũng đông đúc người dân địa phương và khách du lịch.', 'Tour5.jpg', '2024-05-13 22:42:10', '2023-12-24 03:45:53'),
(6, 'Tour Bà Nà Hills trọn ngày với bữa trưa buffet', 'Tham quan', 'Đà Nẵng', 18500000, 'Buffet trưa tại nhà hàng Đi cáp treo Đón và trả khách (tại một số khách sạn)', 'Trong chuyến tham quan trong ngày này, bạn sẽ khám phá những nét nổi bật về văn hóa và lịch sử của Bà Nà Hills. Sau khi bạn được đón tại khách sạn hoặc gặp hướng dẫn viên, bạn sẽ di chuyển đến ga cáp treo Bà Nà. Trên tuyến cáp treo hiện đại, trước tiên bạn sẽ đến thăm Cầu Vàng, chiếc cầu nổi tiếng với hai bàn tay khổng lồ được điêu khắc tinh xảo. Sau đó, bạn sẽ tiếp tục đi cáp treo để khám phá 9 khu vườn của Le Jardin D\'Amour và Chùa Linh Ứng. Từ đây, bạn sẽ đến thăm Làng Pháp, Thiền viện, Nhà Bia và Trà quán.\r\n\r\nSau đó bạn sẽ dùng buffet trưa tại một nhà hàng địa phương. Sau bữa trưa, bạn sẽ có thời gian tự do để khám phá Fantasy Park, nơi bạn có thể đi dạo trong khu rừng cổ tích, chơi nhiều trò chơi khác nhau và đi các chuyến tàu lượn của công viên giải trí. Sau đó bạn sẽ đi cáp treo trở lại nhà ga.', 'Tour6.jpg', '2024-05-14 08:01:08', '2023-12-24 03:50:27'),
(7, 'Tour tham quan địa đạo Củ Chi theo nhóm nhỏ', 'Tham quan', 'TP.Hồ Chí Minh', 350000, 'Tham quan , Bảo hiểm du lịch,Dịch vụ hướng dẫn bằng tiếng Anh,Dịch vụ đưa đón tại khách sạn,Di chuyển bằng xe minivan hoặc xe buýt có điều hòa,Nước đóng chai và khăn giấy mát.', 'Trong chuyến tham quan theo nhóm nhỏ vào buổi sáng hoặc buổi chiều này, bạn sẽ được khám phá mạng lưới đường hầm dưới lòng đất tại địa đạo Củ Chi và tìm hiểu về lịch sử lâu đời và tầm quan trọng của nó với thành phố. Bạn sẽ xem một bộ phim 3D về cuộc hành quân trên bộ lớn nhất của Mỹ trong Chiến tranh Việt Nam. Trong các đường hầm dưới lòng đất, bạn sẽ được hiểu rõ hơn về cách thức hoạt động của khu phức hợp và cuộc sống trong các đường hầm từ năm 1961 đến năm 1972 đã diễn ra như thế nào. Bạn sẽ có cơ hội đi thử một lối vào nhỏ ẩn trong đường hầm để hiểu cách mọi người từng di chuyển trong đó. Trong các đường hầm sẽ có các kho chứa, cửa bẫy, nhà máy sản xuất vũ khí, trung tâm chỉ huy và bệnh viện dã chiến.\r\n\r\nBạn sẽ được nếm thử một loại thực phẩm phổ biến trong những năm tháng chiến tranh, đó là sắn. Khi trả thêm một khoản phí, bạn sẽ được bắn súng trường M16 tại một địa điểm bắn súng.', '130013605.jpg', '2023-12-23 08:35:50', NULL),
(8, 'Tour nửa ngày Thánh Địa Mỹ Sơn', 'Tham quan', 'Đà Nẵng', 400000, 'Có hướng dẫn viên du lịch', 'Trong tour này, bạn sẽ được khám phá một Mỹ Sơn ấn tượng, khu bảo tồn của những ngôi đền Hindu được xây dựng giữa thế kỷ 4 và 14. Bạn sẽ bắt đầu chuyến tham quan vào buổi sáng và khám phá khu đất rộng lớn được bao quanh bởi cảnh quan thiên nhiên tuyệt đẹp. Bạn cũng có thể chiêm ngưỡng các di tích lúc hoàng hôn và thưởng thức một điệu múa Chăm truyền thống.', 'Tour7.jpg', '2023-12-24 03:53:01', '2023-12-24 03:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(14, 'Tu Vu', '0770546590', 'gerald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-01-15 14:00:35', '2024-07-24 09:49:44'),
(15, 'TienHao', '0770546591', 'john@gmail.com', '12345', '2024-07-24 08:34:08', NULL),
(16, 'Thanh Trung', '0770546590', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-07-24 08:34:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
