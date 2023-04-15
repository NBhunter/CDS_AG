-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2023 lúc 09:44 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `Id` int(11) NOT NULL,
  `IdCon` int(11) DEFAULT NULL,
  `NoiDung` text NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `TuongTac` int(11) NOT NULL DEFAULT 0,
  `Email` text NOT NULL,
  `TenNguoiBL` varchar(100) NOT NULL,
  `NguoiDung_id` int(11) DEFAULT NULL,
  `TinTuc_id` varchar(14) NOT NULL,
  `NgayCMT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`Id`, `IdCon`, `NoiDung`, `TrangThai`, `TuongTac`, `Email`, `TenNguoiBL`, `NguoiDung_id`, `TinTuc_id`, `NgayCMT`) VALUES
(1, NULL, 'demo chat', 1, 1, 'NguyenBang01072001@gmail.com', 'Nguyễn Băng', NULL, '20230405083654', '2023-04-05'),
(2, 1, 'Demo trả lời chat', 1, 0, 'MinhNgocAGU@gmail.com', 'Minh Ngọc', NULL, '20230405083654', '2023-04-05'),
(3, NULL, 'demo comment', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(4, NULL, 'demo alert', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(5, NULL, 'Demo alert 2', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(6, NULL, 'Demo alert 2', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(8, NULL, '123', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(9, NULL, 'test', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(10, NULL, '123', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(11, NULL, 'test abc', 0, 0, 'bangnguyen01072001@gmail.com', 'NguyenBang', NULL, '20230405083654', '2023-04-12'),
(12, NULL, 'Test comment', 0, 0, 'bangnguyen01072001@gmaul.com', 'Nguyen bang', NULL, '20230412085552', '2023-04-12'),
(13, NULL, 'Test reply', 0, 0, 'bangnguyen01072001@gmaul.com', 'Mint Ngoc', NULL, '20230412085552', '2023-04-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buoc_lotrinh`
--

CREATE TABLE `buoc_lotrinh` (
  `Id` int(11) NOT NULL,
  `IdCha` int(11) NOT NULL,
  `LoTrinh_id` int(11) NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `Id` int(11) NOT NULL,
  `TenCauHoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`Id`, `TenCauHoi`) VALUES
(20, 'Doanh nghiệp có trang web riêng không? Có/Không'),
(21, 'Doanh nghiệp có tương tác trên mạng xã hội không? Có/Không'),
(22, 'Tổng đầu tư vào hoạt động tiếp thị số'),
(23, 'Tổng số giao dịch bán sản phẩm trên sàn thương mại điện tử trong 03 tháng liền kề thời điểm đánh giá'),
(24, 'Tổng doanh thu từ thương mại điện tử của doanh nghiệp trong 03 tháng liền kề thời điểm đánh giá'),
(27, 'Tổng doanh thu từ thương mại điện tử xuyên biên giới của doanh nghiệp trong 03 tháng liền kề thời điểm đánh giá'),
(28, 'Doanh nghiệp có cung cấp danh mục sản phẩm dịch vụ trên môi trường số không? Có/Không'),
(29, 'Tổng số các cuộc giao tiếp với khách hàng thông qua các kênh số'),
(30, 'Doanh nghiệp có cung cấp công cụ/ tiện ích số cho khách hàng không? Có/Không'),
(31, 'Doanh nghiệp có tương tác nghiệp vụ với doanh nghiệp khác trên môi trường số không? Có/Không'),
(32, 'Doanh nghiệp có tương tác nghiệp vụ với cơ quan nhà nước trên môi trường số không? Có/Không'),
(33, 'Doanh nghiệp có sử dụng các dịch vụ ngân hàng trực tuyến không? Có/Không'),
(34, 'Tổng chi phí mua sắm trực tuyến hàng hoá phục vụ hoạt động của doanh nghiệp trong 3 tháng liền kề'),
(35, 'Doanh nghiệp có quan tâm đến chuyển đổi số không? Có/Không'),
(36, 'Doanh nghiệp có kết nối internet không? Có/Không'),
(37, 'Doanh nghiệp có sử dụng wifi không? Có/Không'),
(38, 'Doanh nghiệp có sử dụng mạng nội bộ không? Có/Không'),
(39, 'Doanh nghiệp có sử dụng mạng nội bộ không? Có/Không'),
(40, 'Tổng số bản ghi hồ sơ điện tử được doanh nghiệp lưu trữ'),
(41, 'Tổng số hoá đơn điện tử được doanh nghiệp phát hành trong kỳ đánh giá'),
(42, 'Doanh nghiệp có giải pháp chia sẻ thông tin, dữ liệu số không? Có/Không'),
(43, 'Doanh nghiệp có sử dụng dịch vụ/giải pháp điện toán đám mây không? Có/Không'),
(44, 'Doanh nghiệp có sử dụng hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ không? Có/Không'),
(45, 'Doanh nghiệp có sử dụng hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường không? Có/Không'),
(46, 'Doanh nghiệp có sử dụng hệ thống/nền tảng/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng (ví dụ như tường lửa, nền tảng giám sát an toàn mạng,…) không? Có/Không'),
(47, 'Doanh nghiệp có sử dụng thiết bị, giải pháp IoT không? Có/Không'),
(48, 'Doanh nghiệp có sử dụng công nghệ Blockchain không? Có/Không'),
(49, 'Doanh nghiệp có sử dụng robot hoặc máy in 3D không? Có/Không'),
(50, 'Doanh nghiệp có sử dụng quy trình tự động hóa không? Có/Không'),
(51, 'Doanh nghiệp có sử dụng các công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng không? Có/Không'),
(52, 'Doanh nghiệp có sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng không? Có/Không'),
(53, 'Doanh nghiệp có chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng không? Có/Không'),
(54, 'Doanh nghiệp có chính sách bảo vệ dữ liệu không? Có/Không'),
(55, 'Doanh nghiệp có chính sách bảo đảm chất lượng không? Có/Không'),
(56, 'Doanh nghiệp có chính sách đánh giá hiệu quả hoạt động không? Có/Không'),
(57, 'Doanh nghiệp trong 3 năm gần nhất có nâng cấp phần cứng/phần mềm không? Có/Không'),
(58, 'Tổng đầu tư vào mảng nâng cấp kiến trúc ICT'),
(59, 'Tổng số cán bộ chuyên trách IT/chuyển đổi số của doanh nghiệp'),
(62, 'Tổng số nhân viên tốt nghiệp STEM của doanh nghiệp'),
(63, 'Tổng số nhân viên phụ trách kinh doanh của doanh nghiệp'),
(64, 'Doanh nghiệp có giải pháp làm việc từ xa không?'),
(65, 'Tổng số nhân viên được tham dự ít nhất một khoá đào tạo về kỹ năng số hoặc về lĩnh vực ICT của doanh nghiệp trong kỳ đánh giá'),
(66, 'Tổng số nhân viên được tham dự ít nhất một khoá học trực tuyến của doanh nghiệp trong kỳ đánh giá'),
(67, 'Tổng số nhân viên thường xuyên truy cập kho tri thức và chuyên môn trực tuyến của doanh nghiệp trong kỳ đánh giá'),
(68, 'Tổng số nhân viên sử dụng máy tính (để bàn, xách tay) hoặc các ứng dụng chuyên môn trên điện thoại thông minh, máy tính bảng phục vụ cho công việc của doanh nghiệp'),
(69, 'Tổng số nhân viên sử dụng mạng máy tính, internet phục vụ cho công việc của doanh nghiệp'),
(70, 'Tổng số nhân viên thường xuyên sử dụng email tên miền doanh nghiệp trong công việc của doanh nghiệp trong kỳ đánh giá'),
(71, 'Tổng số nhân viên sử dụng ứng dụng/ phần mềm cơ bản'),
(72, 'Tổng số cuộc họp có áp dụng giải pháp họp trực tuyến'),
(73, 'Tổng số lượng cán bộ chuyên trách nghiên cứu phát triển (R&D) của doanh nghiệp'),
(74, 'Tổng kinh phí đầu tư cho R&D trong năm gần nhất'),
(78, 'Doanh nghiệp có sở hữu bằng sáng chế/ nhãn hiệu riêng không? <br /> \r\nCó/Không'),
(79, 'Vui lòng cho biết năng lực đổi mới trong nội bộ của doanh nghiệp\r\nRất kém\r\nKém\r\nTrung bình\r\nKhá\r\nTốt\r\nRất tốt (xuất sắc)'),
(80, 'Doanh nghiệp có hợp tác sáng tạo với các doanh nghiệp, đối tác khác không? hoặc có hợp tác nhưng chưa cho ra sản phẩm, dịch vụ nào thực sự đột phá (về doanh thu hoặc về số người sử dụng hoặc được giải cao trong các cuộc thi uy tín trong nước hoặc quốc tế về sản phẩm, dịch vụ liên quan trong năm gần nhất) không? Có/Không'),
(81, 'Tổng số nhân viên thường xuyên truy cập sử dụng cơ sở dữ liệu riêng của doanh nghiệp phục vụ công việc của doanh nghiệp trong kỳ đánh giá'),
(82, 'Doanh nghiệp có thu thập và sử dụng công nghệ dữ liệu lớn BigData không ? Có/Không'),
(83, 'Tổng số nhân viên thường xuyên sử dụng phần mềm/ứng dụng quản lý cơ sở dữ liệu để truy cập cơ sở dữ liệu của doanh nghiệp phục vụ công việc trong kỳ đánh giá'),
(84, 'Doanh nghiệp có sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số không? Có/Không'),
(85, 'Tổng doanh thu trong năm gần nhất từ các sản phẩm, dịch vụ của doanh nghiệp mà việc tạo ra các sản phẩm, dịch vụ đó có khai thác sử dụng các dữ liệu của doanh nghiệp'),
(86, 'Doanh nghiệp có sử dụng phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh (dashboard); công cụ quản trị tri thức phục vụ sản xuất kinh doanh? Có/Không'),
(87, 'Tổng số quyết định ban hành có sử dụng công cụ/tiện ích phân tích dữ liệu để hỗ trợ ra quyết định của doanh nghiệp trong kỳ đánh giá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi_p2`
--

CREATE TABLE `cauhoi_p2` (
  `Id` int(11) NOT NULL,
  `IdCha` int(11) DEFAULT NULL,
  `TenCauHoi` text NOT NULL,
  `Cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi_p2`
--

INSERT INTO `cauhoi_p2` (`Id`, `IdCha`, `TenCauHoi`, `Cap`) VALUES
(3, NULL, 'Lãnh đạo trong việc hướng dẫn và kiểm soát chiến lược chuyển đổi kỹ thuật số của doanh nghiệp', 1),
(4, 3, 'Nhận thức về tác động của chuyển đổi số đối với doanh nghiệp và hệ sinh thái của doanh nghiệp', 2),
(5, 3, 'Ủy thác, giao quyền cho các cấp cuộc doanh nghiệp được tham gia, thực hiện các dự án chuyển đổi số.', 2),
(6, 3, 'Phân bổ nguồn lực bao gồm một lịch trình khả thi để con người và hệ thống quyết tâm, cam kết thực hiện chuyển đổi số', 2),
(7, 3, 'Truyền tải thông điệp lãnh đạo cần truyền đạt, lan tỏa được chiến lược, khích lệ các sáng kiến chuyển đổi số tới nhân viên ở mọi cấp', 2),
(8, 3, 'Cộng tác giữa các bộ phận và các nhà cung cấp dịch vụ để tiến hành chuyển đổi số', 2),
(19, NULL, ' Lập kế hoạch, thực hiện và đo lường chiến lược chuyển đổi kỹ thuật số', 1),
(20, 19, 'Lập kế hoạch – doanh nghiệp có hay không một lộ trình rõ ràng để chuyển đổi kỹ thuật số', 2),
(21, 19, 'Sự nhất quán – doanh nghiệp duy trì chiến lược được một chuyển đổi kỹ thuật số nhất quán theo thời gian', 2),
(22, 19, 'Khả năng tương thích của mô hình kinh doanh với chiến lược chuyển đổi số', 2),
(23, 19, 'Trách nhiệm, quyền lợi được phân công rõ ràng với hệ thống vai trò - trách nhiệm được xác định', 2),
(24, 19, 'Đánh giá – Xác định các chỉ số đánh giá (KPI) cụ thể để giám sát, đánh giá quá trình chuyển đổi kỹ thuật số', 2),
(25, NULL, 'Cách thức nhân viên, ban quản lý và các bên liên quan tương tác với nhau trong đề xuất, thực hiện các sáng kiến, kiến thức về chuyển đổi số trong doanh nghiệp', 1),
(26, 25, 'Chia sẻ kiến thức về đổi mới sáng tạo và bài học kinh nghiệm', 2),
(27, 25, 'Đón nhận đổi mới sáng tạo và thay đổi', 2),
(28, 25, 'Sử dụng hiệu quả các hệ thống kỹ thuật số', 2),
(29, 25, 'Hưởng ứng quá trình chuyển đổi số ở mọi cấp độ trong toàn doanh nghiệp', 2),
(30, 25, 'Đồng sáng tạo – văn hóa đồng sáng tạo được khuyến khích, hỗ trợ ở mọi cấp độ', 2),
(31, NULL, ' Tiến trình của doanh nghiệp trong việc triển khai công nghệ và kết nối để chuyển đổi số', 1),
(32, 31, 'Chuẩn hóa dữ liệu cho phép chia sẻ thông tin một cách đồng bộ và cộng tác hiệu quả giữa các phòng ban và các nhà cung cấp đáng tin cậy', 2),
(33, 31, 'Các hệ thống và nền tảng cho phép truy cập nhanh chóng, đáng tin cậy và an toàn vào bộ dữ liệu toàn doanh nghiệp', 2),
(34, 31, 'Thí điểm kỹ thuật số để thử nghiệm các hệ thống mới nhằm thúc đẩy quá trình chuyển đổi số', 2),
(35, 31, 'Đa dạng hóa các kênh thu thập và phân tích dữ liệu', 2),
(36, 31, 'Tích hợp các sản phẩm và dịch vụ của doanh nghiệp trong các hệ thống kỹ thuật số', 2),
(37, NULL, ' Mức độ mà doanh nghiệp có thể gia tăng giá trị và hiểu hơn về lợi nhuận thông qua việc nắm bắt và phân tích dữ liệu hiệu suất chính đã được sử dụng', 1),
(38, 37, 'Dữ liệu là tài sản – hiểu được cách tạo ra giá trị tiềm năng thông qua dữ liệu', 2),
(39, 37, 'Kết quả phân tích từ dữ liệu khách hàng được tận dụng để thúc đẩy, định hướng chiến lược chuyển đổi số của công ty', 2),
(40, 37, 'Dữ liệu về hoạt động của doanh nghiệm (doanh thu, khách hàng, hiệu suất của nhà máy, v.v.) được tích hợp và phân tích', 2),
(41, 37, 'Dữ liệu theo thời gian thực – dữ liệu, phân tích liên quan ảnh hưởng tức thời đến các quyết định trong doanh nghiệp', 2),
(42, NULL, ' Năng lực của cả nhân viên và đội ngũ quản lý trong việc sử dụng các hệ thống kỹ thuật số hiện có và/hoặc áp dụng các hệ thống kỹ thuật số mới; cũng như mức độ liên kết với đối tác bên ngoài để hỗ trợ đào tạo và nâng cao kỹ năng', 1),
(43, 42, 'Trình độ về kỹ thuật số – nhân viên có đủ năng lực trong việc sử dụng các hệ thống kỹ thuật số hiện có không?', 2),
(44, 42, 'Sẵn sàng học hỏi – nhân viên có sẵn sàng chấp nhận các hệ thống kỹ thuật số mới không?', 2),
(45, 42, 'Nâng cao kỹ năng – doanh nghiệp đầu tư vào nâng cao kỹ năng và năng lực kỹ thuật số cho nguồn nhân lực', 2),
(46, 42, 'Chuyên môn kỹ thuật số của lãnh đạo và đội ngũ quản lý', 2),
(47, 42, 'Hợp tác với các trung tâm đào tạo, trường đại học và các tổ chức uy tín khác để nâng cao năng lực số trong toàn doanh nghiệp; và tuyển dụng nhân viên mới và các nhà lãnh đạo doanh nghiệp tương lai', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi_p3`
--

CREATE TABLE `cauhoi_p3` (
  `Id` int(11) NOT NULL,
  `TenCauHoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cauhoi_p3`
--

INSERT INTO `cauhoi_p3` (`Id`, `TenCauHoi`) VALUES
(25, 'Rào cản về chi phí đầu tư, ứng dụng công nghệ'),
(26, 'Khó khăn trong thay đổi thói quen, tập quán kinh doanh'),
(27, 'Thiếu nhân lực nội bộ để ứng dụng công nghệ số'),
(28, 'Thiếu cơ sở hạ tầng công nghệ số'),
(29, 'Thiếu thông tin về công nghệ số'),
(30, 'Khó khăn trong tích hợp các giải pháp công nghệ số'),
(31, 'Thiếu cam kết, hiểu biết của Ban lãnh đạo, quản lý doanh nghiệp'),
(32, 'Thiếu cam kết, hiểu biết của người lao động'),
(33, 'Sợ rò rỉ dữ liệu cá nhân/doanh nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet`
--

CREATE TABLE `chitiet` (
  `Id` int(11) NOT NULL,
  `IdCha` int(11) DEFAULT NULL,
  `NoiDung` text NOT NULL,
  `DiemToiDa` int(11) DEFAULT NULL,
  `Cap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiet`
--

INSERT INTO `chitiet` (`Id`, `IdCha`, `NoiDung`, `DiemToiDa`, `Cap`) VALUES
(35, NULL, 'Trải nghiệm số cho khách hàng', 65, 1),
(36, 35, 'Hiện diện trực tuyến', 45, 2),
(37, 36, 'Tiếp thị điện tử', NULL, 0),
(38, 37, 'Tần suất doanh nghiệp cập nhật website riêng', NULL, 3),
(39, 37, 'Tần suất doanh nghiệp có hoạt động trên mạng xã hội', NULL, 3),
(40, 37, 'Tỷ lệ đầu tư vào hoạt động tiếp thị số của doanh nghiệp', NULL, 3),
(41, 36, 'Thương mại điện tử', NULL, 0),
(42, 41, 'Tần suất doanh nghiệp sử dụng sàn thương mại điện tử để bán sản phẩm (B2C, B2B, B2G)', NULL, 3),
(43, 41, 'Tỷ lệ doanh thu của mảng thương mại điện tử của doanh nghiệp hàng năm', NULL, 3),
(46, 41, 'Tỷ lệ doanh thu của mảng thương mại điện tử xuyên biên giới của doanh nghiệp hàng năm', NULL, 3),
(47, 41, 'Tần suất doanh nghiệp cập nhật danh mục sản phẩm dịch vụ trên môi trường số', NULL, 3),
(48, 41, 'Mức độ giao tiếp của doanh nghiệp với khách hàng thông qua các kênh số', NULL, 3),
(49, 41, 'Khả năng của doanh nghiệp trong việc cung cấp công cụ /tiện ích số để khách hàng lựa chọn sản phẩm theo ý muốn', NULL, 3),
(50, 35, 'Hoạt động trực tuyến', 20, 2),
(51, 50, 'Hoạt động trực tuyến', NULL, 0),
(52, 51, 'Tần suất doanh nghiệp tương tác nghiệp vụ với doanh nghiệp khác trên môi trường số.', NULL, 3),
(53, 51, 'Tần suất doanh nghiệp tương tác nghiệp vụ với cơ quan nhà nước trên môi trường số', NULL, 3),
(54, 51, 'Tần suất doanh nghiệp sử dụng các dịch vụ ngân hàng trực tuyến', NULL, 3),
(55, 51, 'Mức độ doanh nghiệp mua sắm hàng hóa trực tuyến.', NULL, 3),
(56, NULL, 'Chiến lược', 25, 1),
(57, 56, 'Chiến lược/kế hoạch chuyển đổi số', 25, 2),
(58, 57, 'Chiến lược chuyển đổi số', NULL, 0),
(59, 58, 'Xây dựng chiến lược/kế hoạch chuyển đổi số của doanh nghiệp', NULL, 3),
(60, NULL, 'Hạ tầng và Công nghệ số', 80, 1),
(61, 60, 'Kết nối mạng', 10, 2),
(62, 61, 'Kết nối tới mạng Internet băng thông rộng', NULL, 0),
(63, 62, 'Mức độ sử dụng đường truyền Internet băng thông rộng cố định của doanh nghiệp', NULL, 3),
(64, 61, 'Kết nối internet không dây', NULL, 0),
(65, 64, 'Mức độ sử dụng Internet không dây (wifi) của doanh nghiệp', NULL, 3),
(66, 60, 'Cơ sở hạ tầng Công nghệ thông tin - truyền thông', 70, 2),
(67, 66, 'Công nghệ số cơ bản', NULL, 0),
(68, 67, 'Mức độ sử dụng sử dụng mạng nội bộ (Lan, Intranet) của doanh nghiệp', NULL, 3),
(70, 67, 'Mức độ sử dụng giải pháp lưu trữ bản ghi hồ sơ điện tử của doanh nghiệp', NULL, 3),
(71, 67, 'Mức độ sử dụng hóa đơn điện tử của doanh nghiệp', NULL, 3),
(72, 67, 'Mức độ sử dụng giải pháp chia sẻ thông tin, dữ liệu số của doanh nghiệp', NULL, 3),
(73, 66, 'Công nghệ số nâng cao', NULL, 0),
(74, 73, 'Doanh nghiệp có sử dụng dịch vụ/giải pháp điện toán đám mây không? (ví dụ Việc sử dụng máy chủ, lưu trữ, cơ sở dữ liệu, phần mềm, phân tích, v.v.,)', NULL, 3),
(75, 73, 'Doanh nghiệp có sử dụng hệ thống/ công cụ tích hợp/chuyên biệt thuộc nhóm quản trị và nghiệp vụ (ví dụ ERP) không?', NULL, 3),
(76, 73, 'Doanh nghiệp có sử dụng hệ thống/ công cụ tích hợp/chuyên biệt thuộc nhóm khách hàng và thị trường (ví dụ CRM) không?', NULL, 3),
(77, 73, 'Doanh nghiệp có sử dụng hệ thống/ công cụ tích hợp/chuyên biệt thuộc nhóm hạ tầng công nghệ và an ninh mạng (Ví dụ tường lửa) không?', NULL, 3),
(78, 73, 'Doanh nghiệp có sử dụng thiết bị, giải pháp IoT không?', NULL, 3),
(79, 73, 'Doanh nghiệp có sử dụng công nghệ Blockchain không?', NULL, 3),
(80, 66, 'Công nghệ số phục vụ sản xuất', NULL, 0),
(81, 80, 'Doanh nghiệp có sử dụng robot hoặc máy in 3D không?', NULL, 3),
(82, 80, 'Doanh nghiệp có áp dụng các quy trình tự động hóa?', NULL, 3),
(83, 80, 'Doanh nghiệp có sử dụng các công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng (ví dụ RFID…) không?', NULL, 3),
(84, 80, 'Doanh nghiệp có quản lý chuỗi cung ứng hoặc các đối tác hỗ trợ thông qua các giải pháp số hóa không?', NULL, 3),
(85, NULL, 'Vận hành', 65, 1),
(86, 85, 'Chính sách Công nghệ thông tin - truyền thông', 30, 2),
(87, 86, 'Chính sách Công nghệ thông tin - truyền thông', NULL, 0),
(88, 87, 'Doanh nghiệp có chính sách bảo mật ICT không', NULL, 3),
(89, 87, 'Doanh nghiệp có chính sách bảo vệ dữ liệu không?', NULL, 3),
(90, 87, 'Doanh nghiệp có chính sách bảo đảm chất lượng không?', NULL, 3),
(91, 87, 'Doanh nghiệp có chính sách cho việc đánh giá hiệu quả hoạt động không?', NULL, 3),
(92, 87, 'Tần suất doanh nghiệp nâng cấp hoặc cập nhật phần cứng/phần mềm?', NULL, 3),
(93, 87, 'Tỷ lệ đầu tư của doanh nghiệp vào việc cải thiện hoặc nâng cấp cơ sở hạ tầng ICT?', NULL, 3),
(94, 85, 'Nguồn nhân lực', 35, 2),
(95, 94, 'Cơ cấu tổ chức nhân sự', NULL, 0),
(96, 95, 'Doanh nghiệp có bộ phận IT chuyên trách không?', NULL, 3),
(100, 95, 'Tỷ lệ nhân viên của doanh nghiệp tốt nghiệp các khóa học liên quan đến ICT, lập trình hoặc STEM (các ngành liên quan đến khoa học, công nghệ, kỹ thuật và toán học)?', NULL, 3),
(101, 95, 'Tỷ lệ nhân viên đảm nhiệm vai trò chuyên gia kinh doanh của doanh nghiệp?', NULL, 3),
(102, 94, 'Kỹ năng nhân viên', NULL, 0),
(103, 102, 'Doanh nghiệp có sử dụng giải pháp làm việc từ xa?', NULL, 3),
(104, 102, 'Doanh nghiệp có đào tạo nhân viên về lĩnh vực ICT?', NULL, 3),
(105, 102, 'Doanh nghiệp có tạo điều kiện cho nhân viên tham gia các lớp đào tạo trực tuyến', NULL, 3),
(106, 102, 'Doanh nghiệp có xây dựng kho tri thức và chuyên môn', NULL, 3),
(107, NULL, 'Chuyển đổi số văn hóa doanh nghiệp', 50, 1),
(108, 107, 'Sử dụng ICT', 25, 2),
(109, 108, 'Sử dụng ICT', NULL, 0),
(110, 109, 'Tỷ lệ nhân viên của doanh nghiệp sử dụng máy tính hoặc điện thoại thông minh cho công việc?', NULL, 3),
(111, 109, 'Tỷ lệ nhân viên của doanh nghiệp sử dụng internet cho công việc?', NULL, 3),
(112, 109, 'Có email tên miền Doanh nghiệp không?', NULL, 3),
(113, 109, 'Tỷ lệ nhân viên của doanh nghiệp sử dụng các ứng dụng cơ bản hoặc phần mềm office cho công việc?', NULL, 3),
(114, 109, 'Doanh nghiệp sử dụng các giải pháp họp trực tuyến?', NULL, 3),
(115, 107, 'Cơ sở hạ tầng R&D (Nghiên cứu và phát triển)', 25, 2),
(116, 108, 'Cơ sở hạ tầng nghiên cứu và phát triển', NULL, 0),
(117, 116, 'Doanh nghiệp có bộ phận R&D không?', NULL, 3),
(118, 116, 'Tỷ lệ doanh nghiệp đầu tư hàng năm cho mảng R&D?', NULL, 3),
(124, 116, 'Doanh nghiệp có sở hữu bằng sáng chế/ nhãn hiệu riêng không?', NULL, 3),
(125, 116, 'Đánh giá về năng lực đổi mới trong nội bộ của doanh nghiệp?', NULL, 3),
(126, 116, 'Doanh nghiệp có hợp tác sáng tạo với các doanh nghiệp khác để cho ra những sản phẩm và dịch vụ đột phá không?', NULL, 3),
(127, NULL, 'Dữ liệu và tài sản thông tin', 35, 1),
(128, 127, 'Sử dụng và quản trị dữ liệu', 35, 2),
(129, 128, 'Sử dụng và quản trị dữ liệu', NULL, 0),
(130, 129, 'Doanh nghiệp có sở hữu cơ sở dữ liệu riêng của mình không?', NULL, 3),
(131, 129, 'Doanh nghiệp có thu thập và sử dụng dữ liệu lớn không?', NULL, 3),
(132, 129, 'Doanh nghiệp có sử dụng phần mềm/ứng dụng quản lý cơ sở dữ liệu không?', NULL, 3),
(133, 129, 'Doanh nghiệp có phương pháp thu thập dữ liệu riêng thông qua các kênh số không?', NULL, 3),
(134, 129, 'Doanh nghiệp đã tạo ra/nâng cao doanh thu từ việc khai thác dữ liệu của mình chưa?', NULL, 3),
(135, 129, 'Doanh nghiệp có sử dụng sử dụng phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu; công cụ quản trị tri thức', NULL, 3),
(136, 129, 'Doanh nghiệp có sử dụng công cụ/tiện ích hỗ trợ ra quyết định không?', NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_cauhoi`
--

CREATE TABLE `chitiet_cauhoi` (
  `Id` int(11) NOT NULL,
  `ChiTiet_id` int(11) DEFAULT NULL,
  `CauHoi_id` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `Diem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiet_cauhoi`
--

INSERT INTO `chitiet_cauhoi` (`Id`, `ChiTiet_id`, `CauHoi_id`, `MoTa`, `Diem`) VALUES
(18, 38, 20, 'Nếu có, vui lòng cho biết tần suất cập nhật thông tin trên website:\r\nKhông được cập nhật trong vòng 6 tháng gần nhất\r\nÍt nhất 1 lần trong 6 tháng\r\nÍt nhất 1 lần trong quý\r\nÍt nhất 1 lần trong tháng\r\nÍt nhất 1 lần trong tuần', NULL),
(19, 39, 21, 'Nếu có, vui lòng cho biết tần suất tương tác trên mạng xã hội\r\nTương tác với khách hàng trên mạng xã hội với tần suất kiểm tra và trả lời khách hàng lớn hơn 7 ngày\r\nTương tác với khách hàng trên mạng xã hội với tần suất kiểm tra và trả lời khách hàng trong tuần\r\nCó nhân viên tương tác với khách hàng trên mạng xã hội với tần suất kiểm tra và trả lời khách hàng trong tuần\r\nCó nhân viên tương tác với khách hàng trên mạng xã hội với tần suất kiểm tra và trả lời khách hàng trong vòng 4 tiếng\r\nCó nhân viên tương tác với khách hàng trên mạng xã hội với tần suất kiểm tra và trả lời khách hàng ngay lập tức', NULL),
(20, 40, 22, 'Tổng đầu tư vào hoạt động tiếp thị', NULL),
(21, 42, 23, 'Tổng số giao dịch bán sản phẩm của doanh nghiệp trong 03 tháng liền kề thời điểm đánh giá', NULL),
(22, 43, 24, 'Tổng doanh thu của doanh nghiệp trong 03 tháng liền kề thời điểm đánh giá', NULL),
(23, 46, 27, NULL, NULL),
(24, 47, 28, 'Nếu có, vui lòng cho biết tần suất cập nhật danh mục sản phẩm dịch vụ trên môi trường số\r\nKhông cập nhật trong 6 tháng\r\nÍt nhất một lần trong 6 tháng\r\nÍt nhất một lần trong quý\r\nÍt nhất một lần trong tháng\r\nÍt nhất một lần trong tuần', NULL),
(25, 48, 29, 'Tổng số các cuộc giao tiếp với khách hàng', NULL),
(26, 49, 30, 'Nếu có, vui lòng cho biết khả năng cung cấp công cụ /tiện ích số để khách hàng lựa chọn sản phẩm theo ý muốn\r\nCho phép lựa chọn hạn chế các thuộc tính bên ngoài theo danh mục một số ít thuộc tính có sẵn\r\nCho phép lựa chọn các thuộc tính bên ngoài theo danh mục đa dạng thuộc tính có sẵn\r\nCho phép tùy chỉnh các thuộc tính bên ngoài\r\nCho phép tùy chỉnh các thuộc tính bên ngoài và tính năng sản phẩm\r\nCó công cụ/tiện ích số để khách hàng đưa ra yêu cầu sản phẩm theo ý muốn', NULL),
(27, 52, 31, 'Nếu có, vui lòng cho biết tần suất tương tác nghiệp vụ với doanh nghiệp khác trên môi trường số\r\nTương tác với tần suất lớn hơn 1 tháng\r\nTương tác với tần suất hàng tháng\r\nTương tác với tần suất hàng tuần', NULL),
(28, 53, 32, 'Nếu có, vui lòng cho biết tần suất tương tác nghiệp vụ với cơ quan nhà nước trên môi trường số\r\nTương tác với tần suất lớn hơn 1 tháng\r\nTương tác với tần suất hàng tháng\r\nTương tác với tần suất hàng tuần', NULL),
(29, 54, 33, 'Nếu có, vui lòng cho biết tần suất sử dụng các dịch vụ ngân hàng trực tuyến\r\nSử dụng với tần suất lớn hơn 1 tháng\r\nSử dụng  các dịch vụ ngân hàng trực tuyến hàng tháng\r\nSử dụng  các dịch vụ ngân hàng trực tuyến hàng tuần', NULL),
(30, 55, 34, 'Tổng chi phí mua sắm hàng hoá phục vụ hoạt động của doanh nghiệp trong 3 tháng liền kề', NULL),
(31, 59, 35, 'Nếu có, vui lòng cho biết mức độ xây dựng chiến lược/kế hoạch chuyển đổi số của doanh nghiệp\r\nChưa có ý tưởng làm gì để chuyển đổi số\r\nCó những ý tưởng về chuyển đổi số và bắt đầu xây dựng phương án thực hiện\r\nCó định hướng và triển khai một số hoạt động chuyển đổi số\r\nĐã xây dựng chiến lược/kế hoạch chuyển đổi số\r\nBan hành chiến lược/kế hoạch chuyển đổi số và triển khai thực hiện', NULL),
(32, 63, 36, 'Nếu có, vui lòng cho biết tốc độ đường truyền internet mà d oanh nghiệp sử dụng\r\nTốc độ <50Mbps\r\nTốc độ từ 50-80 Mbps\r\nTốc độ từ 80-100 Mbps\r\nTốc độ từ 100-120 Mbps\r\nTốc độ trên 120Mbps', NULL),
(33, 65, 37, 'Nếu có, vui lòng cho biết mức độ sử dụng wifi của doanh nghiệp\r\nSử dụng Wifi tại một số phòng ban\r\nSử dụng Wifi tại tất cả phòng ban\r\nSử dụng Wifi tốc độ cao tại tất cả phòng ban và phục vụ công việc\r\nSử dụng Wifi tốc độ cao và có phân vùng mạng để quản lý, tác riêng mạng của các bộ phận quan trọng\r\nSử dụng Wifi tốc độ cao và có phân vùng mạng để quản lý, tác riêng mạng của các bộ phận quan trọng, có phân quyền truy cập và có kiểm soát theo đúng phân quyền', NULL),
(34, 68, 38, 'Nếu có, vui lòng cho biết mức độ sử dụng mạng nội bộ của doanh nghiệp\r\nSử dụng mạng LAN ở một số bộ phận\r\nSử dụng mạng LAN ở tất cả bộ phận\r\nSử dụng mạng LAN ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin\r\nSử dụng mạng LAN ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin và mạng Intranet cho một số bộ phận\r\nSử dụng mạng Intranet ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin', NULL),
(35, 69, 39, 'Nếu có, vui lòng cho biết mức độ sử dụng mạng nội bộ của doanh nghiệp\r\nSử dụng mạng LAN ở một số bộ phận\r\nSử dụng mạng LAN ở tất cả bộ phận\r\nSử dụng mạng LAN ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin\r\nSử dụng mạng LAN ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin và mạng Intranet cho một số bộ phận\r\nSử dụng mạng Intranet ở tất cả bộ phận với đầy đủ các chính sách, giải pháp đảm bảo an toàn thông tin', NULL),
(36, 70, 40, 'Tổng số bản ghi hồ sơ được doanh nghiệp lưu trữ', NULL),
(37, 71, 41, 'Tổng số hoá đơn được doanh nghiệp phát hành trong kỳ đánh giá', NULL),
(38, 72, 42, 'Nếu có, vui lòng cho biết mức độ sử dụng giải pháp chia sẻ thông tin dữ liệu số\r\nDoanh nghiệp có giải pháp chia sẻ thông tin, dữ liệu số chỉ trong nội bộ một số phòng, ban\r\nDoanh nghiệp có giải pháp kết nối, chia sẻ thông tin, dữ liệu số trong nội bộ một số phòng, ban và giữa một số phòng, ban với nhau\r\nDoanh nghiệp có giải pháp kết nối, chia sẻ thông tin, dữ liệu số giữa tất cả phòng, ban\r\nDoanh nghiệp có giải pháp kết nối, chia sẻ thông tin, dữ liệu số kết nối tất cả phòng, ban, cho phép kết xuất báo cáo theo các biểu mẫu quy định\r\nDoanh nghiệp có giải pháp kết nối, chia sẻ thông tin, dữ liệu số kết nối tất cả phòng, ban, cho phép kết xuất báo cáo và biểu đồ theo yêu cầu của từng cá nhân.', NULL),
(39, 74, 43, 'Nếu có, vui lòng cho biết mức độ sử dụng dịch vụ/giải pháp điện toán đám mây tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận sử dụng độc lập dịch vụ/giải pháp điện toán đám mây phục vụ cho hoạt động của mình\r\nMột số bộ phận sử dụng chung dịch vụ/giải pháp điện toán đám mây để chia sẻ dữ liệu, phục vụ cho hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận đều sử dụng thống nhất dịch vụ/giải pháp điện toán đám mây để chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận đều sử dụng thống nhất dịch vụ/giải pháp điện toán đám mây để chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp. Các hoạt động sản xuất kinh doanh chính của doanh nghiệp được thống nhất chung, tối ưu hóa, đồng bộ hóa và trực tuyến hóa dựa trên sử dụng dịch vụ/giải pháp điện toán đám mây\r\nTất cả hoạt động sản xuất kinh doanh của doanh nghiệp đều trên đám mây, sử dụng thống nhất dịch vụ/giải pháp điện toán đám mây để tối ưu hóa, đồng bộ hóa và trực tuyến hóa toàn bộ hoạt động của doanh nghiệp', NULL),
(40, 75, 44, 'Nếu có, vui lòng cho biết mức độ sử dụng hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ\r\nMột số bộ phận sử dụng độc lập hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ phục vụ cho hoạt động của mình\r\nMột số bộ phận sử dụng chung hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ để chia sẻ dữ liệu, phục vụ cho hoạt động chung của doanh nghiệp  \r\nTất cả các bộ phận đều sử dụng thống nhất hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ để chia sẻ dữ liệu, phục vụ cho các hoạt động quản trị và nghiệp vụ chung của doanh nghiệp\r\nTất cả các bộ phận đều sử dụng thống nhất hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ để chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp. Các hoạt động quản trị và nghiệp vụ chung của doanh nghiệp được đồng nhất, tối ưu hóa, đồng bộ hóa và trực tuyến hóa dựa trên sử dụng chung hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ\r\nTất cả các bộ phận đều sử dụng thống nhất hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ để chia sẻ dữ liệu, phục vụ cho các hoạt động quản trị và nghiệp vụ chung của doanh nghiệp. Các hoạt động quản trị và nghiệp vụ chung của doanh nghiệp được thống nhất, tối ưu hóa, đồng bộ hóa và trực tuyến hóa dựa trên sử dụng chung hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ\r\nTất cả các cá nhân, bộ phận trong doanh nghiệp đều sử dụng thành thạo, khai thác hiệu quả, chuyên nghiệp hệ thống công nghệ/nền tảng số quản trị và nghiệp vụ để tối ưu hóa, đồng bộ hóa và trực tuyến hóa toàn bộ hoạt động quản trị và nghiệp vụ chung', NULL),
(41, 76, 45, 'Nếu có, vui lòng cho biết mức độ sử dụng hệ thống/ nền tảng số quản lý khách hàng và thị trường tại các bộ phận (phòng, ban, đơn vị) của d oanh nghiệp\r\nMột số bộ phận sử dụng độc lập hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường phục vụ cho hoạt động của mình\r\nMột số bộ phận sử dụng chung hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường để chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận đều sử dụng thống nhất sử dụng hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường để chia sẻ dữ liệu, phục vụ cho các hoạt động liên quan đến khách hàng và thị trường (bán hàng, marketing, trải nghiệm khách hàng, phát triển thị trường, chăm sóc khách hàng và các hoạt động khác)\r\nTất cả các bộ phận đều sử dụng thống nhất sử dụng hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường. Hệ thống công nghệ/nền tảng số quản lý khách hàng, thị trường và CSDL khách hàng, thị trường của doanh nghiệp thống nhất, cập nhật, đồng bộ, liên thông để tối ưu hóa, đồng bộ hóa và trực tuyến hóa các hoạt động liên quan đến khách hàng và thị trường.\r\nTất cả các bộ phận đều sử dụng thống nhất sử dụng hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường. Hệ thống công nghệ/nền tảng số quản lý khách hàng, thị trường và CSDL khách hàng, thị trường của doanh nghiệp thống nhất, cập nhật, đồng bộ, liên thông để tối ưu hóa, đồng bộ hóa và trực tuyến hóa các hoạt động liên quan đến khách hàng và thị trường. Tất cả các cá nhân, bộ phận liên quan trực tiếp hoặc gián tiếp đến khách hàng và thị trường trong doanh nghiệp đều sử dụng thành thạo, khai thác hiệu quả, chuyên nghiệp hệ thống hệ thống công nghệ/nền tảng số quản lý khách hàng và thị trường để tối ưu hóa, đồng bộ hóa và trực tuyến hóa các hoạt động liên quan đến khách hàng và thị trường', NULL),
(42, 77, 46, 'Nếu có, vui lòng cho biết mức độ sử dụng hệ thống/nền tảng/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng tại các bộ phận (phòng, ban, đơn vị) của d oanh nghiệp\r\nMột số bộ phận sử dụng độc lập hệ thống/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng phục vụ cho hoạt động của mình\r\nMột số bộ phận sử dụng chung hệ thống/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng để đảm bảo an toàn thông tin trong các hoạt động của doanh nghiệp \r\nTất cả các bộ phận đều sử dụng thống nhất chung hệ thống/nền tảng/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng để bảo đảm an toàn thông tin trong các hoạt động của doanh nghiệp\r\nTất cả các bộ phận đều sử dụng thống nhất chung hệ thống/nền tảng/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng để bảo đảm an toàn thông tin trong các hoạt động của doanh nghiệp. Các hệ thống công nghệ của doanh nghiệp thường xuyên được giám sát, kiểm tra đánh giá an toàn an ninh mạng\r\nTất cả các bộ phận đều sử dụng thống nhất chung hệ thống/nền tảng/giải pháp về hạ tầng công nghệ và an toàn an ninh mạng để bảo đảm an toàn thông tin trong các hoạt động của doanh nghiệp. Các hệ thống công nghệ của doanh nghiệp thường xuyên được giám sát, kiểm tra đánh giá an toàn an ninh mạng và doanh nghiệp được bảo vệ an toàn an ninh mạng theo mô hình 4 lớp', NULL),
(43, 78, 47, 'Nếu có, vui lòng cho biết mức độ sử dụng thiết bị, giải pháp IoT\r\nMột số bộ phận sử dụng độc lập thiết bị, giải pháp IoT phục vụ cho hoạt động của mình\r\nMột số bộ phận sử dụng các thiết bị, giải pháp IoT để chia sẻ dữ liệu phục vụ cho các hoạt động chung của doanh nghiệp\r\nSử dụng IoT trong tất cả các bộ phận để giám sát, đo lường, phân tích, chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp\r\nSử dụng IoT trong tất cả các bộ phận để giám sát, đo lường, phân tích, chia sẻ dữ liệu, phục vụ cho các hoạt động chung của doanh nghiệp. Thiết bị IoT được sử dụng trong tất cả các quy trình, hoạt động chính của doanh nghiệp và tất cả các dữ liệu từ các thiết bị IoT đều được phân tích, xử lý chuyên nghiệp và sử dụng để ra các quyết định điều hành hoạt động cũng như điều chỉnh quy trình sản xuất kinh doanh của doanh nghiệp nhằm tối ưu hóa hoạt động\r\nSử dụng IoT trong tất cả các bộ phận để giám sát, đo lường, phân tích, chia sẻ dữ liệu, phục vụ cho các hoạt động chung. Thiết bị IoT được sử dụng trong tất cả các quy trình, hoạt động chính của doanh nghiệp và tất cả các dữ liệu từ các thiết bị IoT đều được phân tích, xử lý chuyên nghiệp và sử dụng để ra các quyết định điều hành hoạt động cũng như điều chỉnh quy trình sản xuất kinh doanh, và doanh nghiệp có cán bộ chuyên trách thường xuyên nghiên cứu áp dụng IoT vào các hoạt động nghiệp vụ, quy trình sản xuất kinh doanh của doanh nghiệp để tối ưu hóa, nâng cao năng suất, hiệu quả toàn bộ hoạt động', NULL),
(44, 79, 48, 'Nếu có, vui lòng cho biết mức độ sử dụng công nghệ Blockchain tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận sử dụng công nghệ Blockchain trong các hoạt động nghiệp vụ độc lập của mình\r\nMột số bộ phận sử dụng công nghệ Blockchain trong các hoạt động nghiệp vụ của mình và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nHầu hết các bộ phận có các nghiệp vụ, quy trình phù hợp với Blockchain đều có áp dụng công nghệ Blockchain để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với Blockchain đều có áp dụng công nghệ Blockchain để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với Blockchain đều có áp dụng công nghệ Blockchain để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung. Doanh nghiệp có cán bộ chuyên trách thường xuyên nghiên cứu áp dụng công nghệ Blockchain vào các hoạt động nghiệp vụ, quy trình sản xuất kinh doanh của doanh nghiệp để tối ưu hóa toàn bộ hoạt động của mình', NULL),
(45, 81, 49, 'Nếu có, vui lòng cho biết mức độ sử dụng robot hoặc máy in 3D tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận sử dụng robot hoặc máy in 3D trong các hoạt động nghiệp vụ độc lập của mình\r\nMột số bộ phận sử dụng robot hoặc máy in 3D trong các hoạt động nghiệp vụ độc lập của mình và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nHầu hết các bộ phận có các nghiệp vụ, quy trình phù hợp với robot hoặc máy in 3D đều có áp dụng robot hoặc máy in 3D để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với robot hoặc máy in 3D đều có áp dụng robot hoặc máy in 3D để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với robot hoặc máy in 3D đều có áp dụng công nghệ robot hoặc máy in 3D để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung. Doanh nghiệp có cán bộ/bộ phận chuyên trách thường xuyên nghiên cứu áp dụng robot hoặc máy in 3D vào các hoạt động nghiệp vụ, quy trình sản xuất kinh doanh để tối ưu hóa toàn bộ hoạt động của mình', NULL),
(46, 82, 50, 'Nếu có, vui lòng cho biết mức độ áp dụng các quy trình tự động hoá tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nCó ít nhất một bộ phận sử dụng độc lập quy trình tự động hóa trong các hoạt động nghiệp vụ sản xuất, kinh doanh\r\nCó nhiều bộ phận sử dụng độc lập quy trình tự động hóa trong các hoạt động nghiệp vụ sản xuất, kinh doanh\r\nCó giải pháp tổng thể về sử dụng quy trình tự động hóa cho tất cả các bộ phận có các nghiệp vụ, quy trình sản xuất, kinh doanh phù hợp để tối ưu hóa hoạt động, nâng cao năng suất lao động của doanh nghiệp\r\nCó giải pháp tổng thể về sử dụng quy trình tự động hóa cho tất cả các bộ phận có các nghiệp vụ, quy trình sản xuất, kinh doanh phù hợp để tối ưu hóa hoạt động, nâng cao năng suất lao động của doanh nghiệp và tự động hóa được xác định là ưu tiên quan trọng trong chiến lược phát triển\r\nCó giải pháp tổng thể về sử dụng quy trình tự động hóa cho tất cả các bộ phận có các nghiệp vụ, quy trình sản xuất, kinh doanh phù hợp để tối ưu hóa hoạt động, nâng cao năng suất lao động của doanh nghiệp và tự động hóa được xác định là ưu tiên quan trọng trong chiến lược phát triển. Doanh nghiệp có cán bộ/bộ phận chuyên trách thường xuyên nghiên cứu áp dụng quy trình tự động hóa vào các hoạt động nghiệp vụ, quy trình sản xuất kinh doanh để nâng cao năng suất lao động, tối ưu hóa toàn bộ hoạt động của doanh nghiệp', NULL),
(47, 83, 51, 'Nếu có, vui lòng cho biết mức độ sử dụng các công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng sản phẩm, dịch vụ\r\nSử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của ít nhất một sản phẩm, dịch vụ của mình\r\nSử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của nhiều sản phẩm, dịch vụ của mình\r\nCó giải pháp tổng thể về sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của tất cả các sản phẩm, dịch vụ của mình\r\nCó giải pháp tổng thể về sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của tất cả các sản phẩm, dịch vụ của mình và sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt được xác định là ưu tiên quan trọng trong chiến lược phát triển sản phẩm, dịch vụ và tối ưu hóa chuỗi cung ứng\r\nCó giải pháp tổng thể về sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của tất cả các sản phẩm, dịch vụ của mình và sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt được xác định là ưu tiên quan trọng trong chiến lược phát triển sản phẩm, dịch vụ và tối ưu hóa chuỗi cung ứng. Doanh nghiệp có cán bộ/bộ phận chuyên trách thường xuyên nghiên cứu áp dụng sử dụng công nghệ nhận diện thương hiệu và sản phẩm tự động/chuyên biệt trong chuỗi cung ứng của tất cả các sản phẩm, dịch vụ', NULL),
(48, 84, 52, 'Nếu có, vui lòng cho biết mức độ sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng trong sản phẩm, dịch vụ\r\nCó sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho ít nhất một sản phẩm, dịch vụ của mình\r\nCó sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho nhiều sản phẩm, dịch vụ của mình\r\nCó giải pháp, kế hoạch tổng thể về sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho tất cả các sản phẩm, dịch vụ của mình\r\nCó giải pháp, kế hoạch tổng thể về sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho tất cả các sản phẩm, dịch vụ của mình và sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng được xác định là ưu tiên quan trọng trong chiến lược phát triển sản phẩm, dịch vụ và tối ưu hóa chuỗi cung ứng\r\nCó giải pháp, kế hoạch tổng thể về sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho tất cả các sản phẩm, dịch vụ của mình và sử dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng được xác định là ưu tiên quan trọng trong chiến lược phát triển sản phẩm, dịch vụ và tối ưu hóa chuỗi cung ứng. Doanh nghiệp có cán bộ/bộ phận chuyên trách thường xuyên nghiên cứu việc áp dụng hệ thống công nghệ/nền tảng số quản lý chuỗi cung ứng cho tất cả các sản phẩm, dịch vụ của mình', NULL),
(49, 88, 53, 'Nếu có, vui lòng cho biết mức độ áp dụng chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nÍt nhất một bộ phận áp dụng chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng trong bộ phận mình\r\nNhiều bộ phận áp dụng chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng trong bộ phận mình\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO 27001 về an toàn an ninh mạng\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ an toàn an ninh mạng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO 27001 về an toàn an ninh mạng. Doanh nghiệp định kỳ đánh giá cập nhật đầy đủ chứng chỉ ISO 27001 về an toàn an ninh mạng cho toàn bộ doanh nghiệp', NULL),
(50, 89, 54, 'Nếu có, vui lòng cho biết mức độ áp dụng chính sách bảo vệ dữ liệu tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nÍt nhất một bộ phận áp dụng chính sách bảo vệ dữ liệu trong bộ phận mình\r\nNhiều bộ phận áp dụng chính sách bảo vệ dữ liệu trong bộ phận mình\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ dữ liệu theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ dữ liệu theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và xây dựng, đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo vệ dữ liệu cho toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo mật, bảo vệ dữ liệu theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và xây dựng, đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo vệ dữ liệu cho toàn bộ doanh nghiệp. Doanh nghiệp định kỳ đánh giá cập nhật đầy đủ chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo vệ dữ liệu cho toàn bộ doanh nghiệp', NULL),
(51, 90, 55, 'Nếu có, vui lòng cho biết mức độ áp dụng chính sách bảo đảm chất lượng tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nÍt nhất một bộ phận áp dụng chính sách bảo đảm chất lượng trong bộ phận mình\r\nNhiều bộ phận áp dụng chính sách bảo đảm chất lượng trong bộ phận mình\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo đảm chất lượng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo đảm chất lượng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo đảm chất lượng cho toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế bảo đảm chất lượng theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo đảm chất lượng cho toàn bộ doanh nghiệp. Doanh nghiệp định kỳ đánh giá cập nhật đầy đủ chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về bảo đảm chất lượng cho toàn bộ doanh nghiệp', NULL),
(52, 91, 56, 'Nếu có, vui lòng cho biết mức độ áp dụng chính sách đánh giá hiệu quả hoạt động tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nÍt nhất một bộ phận áp dụng chính sách đánh giá hiệu quả hoạt động\r\nNhiều bộ phận áp dụng chính sách đánh giá hiệu quả hoạt động trong bộ phận mình\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế đánh giá hiệu quả hoạt động theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế đánh giá hiệu quả hoạt động theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về đánh giá hiệu quả hoạt động cho toàn bộ doanh nghiệp\r\nCó quy định chi tiết và thực hiện áp dụng nghiêm ngặt chính sách, quy chế đánh giá hiệu quả hoạt động theo các tiêu chuẩn chuyên nghiệp trong toàn bộ doanh nghiệp và doanh nghiệp xây dựng và đạt chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về đánh giá hiệu quả hoạt động cho toàn bộ doanh nghiệp. Doanh nghiệp định kỳ đánh giá cập nhật đầy đủ chứng chỉ ISO/tiêu chuẩn chuyên nghiệp về đánh giá hiệu quả hoạt động cho toàn bộ doanh nghiệp', NULL),
(53, 92, 57, 'Nếu có, vui lòng cho biết tần suất nâng cấp hoặc cập nhật phần cứng/phần mềm trong 3 năm gần nhất\r\nCập nhật, nâng cấp phần cứng/phần mềm theo chu kỳ từ 2 năm đến < 3 năm\r\nCập nhật, nâng cấp phần cứng/phần mềm theo chu kỳ từ 1 năm đến < 2 năm\r\nCập nhật, nâng cấp phần cứng/phần mềm theo chu kỳ từ < 1 năm hoặc theo khuyến nghị của nhà cung cấp\r\nCập nhật, nâng cấp phần cứng/phần mềm theo chu kỳ từ < 1 năm hoặc theo khuyến nghị của nhà cung cấp và có cán bộ/bộ phận chuyên trách theo dõi, đánh giá hiệu năng hoạt động của các phần cứng/phần mềm sử dụng trong doanh nghiệp để thường xuyên khuyến nghị, thực hiện cập nhật, nâng cấp.\r\nCập nhật, nâng cấp phần cứng/phần mềm theo chu kỳ < 1 năm hoặc theo khuyến nghị của nhà cung cấp và có cán bộ/bộ phận chuyên trách theo dõi, đánh giá hiệu năng hoạt động của các phần cứng/phần mềm sử dụng trong doanh nghiệp để thường xuyên khuyến nghị, thực hiện cập nhật, nâng cấp. Doanh nghiệp dành một ngân quỹ riêng phục vụ việc thường xuyên cập nhật, nâng cấp phần cứng, phần mềm', NULL),
(54, 93, 58, 'Tổng đầu tư của doanh nghiệp', NULL),
(55, 96, 59, NULL, NULL),
(58, 100, 62, 'Tổng số nhân viên của doanh nghiệp', NULL),
(59, 101, 63, NULL, NULL),
(60, 103, 64, 'Nếu có, vui lòng cho biết mức độ sử dụng giải pháp làm việc từ xa tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận có áp dụng giải pháp làm việc từ xa\r\nHầu hết các bộ phận có áp dụng giải pháp làm việc từ xa\r\nTất cả các bộ phận đều có kế hoạch, quy trình, giải pháp/nền tảng số làm việc từ xa sẵn sàng cho từng nhân viên có thể làm việc từ xã một cách bình thường, hiệu quả, dài ngày như làm việc trực tiếp\r\nTất cả các bộ phận đều có kế hoạch, quy trình, giải pháp/nền tảng số làm việc từ xa sẵn sàng cho từng nhân viên có thể làm việc từ xã một cách bình thường, hiệu quả, dài ngày như làm việc trực tiếp. Doanh nghiệp có giải pháp/nền tảng làm việc từ xa chuyên nghiệp, tối ưu hóa, cho phép nhiều nhân viên thường xuyên làm việc từ xa\r\nTất cả các bộ phận đều có kế hoạch, quy trình, giải pháp/nền tảng số làm việc từ xa sẵn sàng cho từng nhân viên có thể làm việc từ xã một cách bình thường, hiệu quả, dài ngày như làm việc trực tiếp. Doanh nghiệp có giải pháp/nền tảng làm việc từ xa chuyên nghiệp, tối ưu hóa, cho phép nhiều nhân viên thường xuyên làm việc từ xa và có cán bộ chuyên trách phục vụ công tác làm việc từ xa và có một lực lượng nhân viên, công tác viên thường xuyên làm việc từ xa', NULL),
(61, 104, 65, NULL, NULL),
(62, 105, 66, NULL, NULL),
(63, 106, 67, NULL, NULL),
(64, 110, 68, NULL, NULL),
(65, 111, 69, NULL, NULL),
(66, 112, 70, NULL, NULL),
(67, 113, 71, NULL, NULL),
(68, 114, 72, 'Tổng số cuộc họp của doanh nghiệp trong kỳ đánh giá, bao gồm họp nội bộ (trong doanh nghiệp, trong từng bộ phận, các bộ phân), họp với đối tác, khách hàng, …)', NULL),
(69, 117, 73, NULL, NULL),
(70, 118, 74, 'Tổng kinh phí đầu tư của doanh nghiệp trong năm gần nhất', NULL),
(74, 124, 78, 'Nếu có, vui lòng cho biết số lượng bằng sáng chế/ nhãn hiệu riêng mà doanh nghiệp sở hữu.\nSở hữu 01 bằng sáng chế/nhãn hiệu riêng.\nSở hữu 02 bằng sáng chế/nhãn hiệu riêng.\nSở hữu 03 bằng sáng chế/nhãn hiệu riêng.\nSở hữu 04 bằng sáng chế/nhãn hiệu riêng.\nSở hữu 05 bằng sáng chế/nhãn hiệu riêng trở lên', NULL),
(75, 125, 79, NULL, NULL),
(76, 126, 80, 'Nếu có, vui lòng cho biết số lượng sản phẩm hoặc dịch vụ đột phá của doanh nghiệp khi hợp tác sáng tạo với các doanh nghiệp, đối tác khác.\r\nHợp tác sáng tạo với các doanh nghiệp, đối tác khác và cho ra được 01 sản phẩm hoặc dịch vụ đột phá.\r\nHợp tác sáng tạo với các doanh nghiệp, đối tác khác và cho ra được 02 sản phẩm hoặc dịch vụ đột phá.\r\nHợp tác sáng tạo với các doanh nghiệp, đối tác khác và cho ra được 03 sản phẩm hoặc dịch vụ đột phá.\r\nHợp tác sáng tạo với các doanh nghiệp, đối tác khác và cho ra được 04-05 sản phẩm hoặc dịch vụ đột phá.\r\nHợp tác sáng tạo với các doanh nghiệp, đối tác khác và cho ra cho ra trên 05 sản phẩm hoặc dịch vụ đột phá.', NULL),
(77, 130, 81, NULL, NULL),
(78, 131, 82, 'Nếu có, vui lòng cho biết mức độ thu thập và sử dụng công nghệ dữ liệu lớn BigData tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận thu thập và sử dụng công nghệ dữ liệu lớn BigData trong các hoạt động nghiệp vụ độc lập của mình\r\nMột số bộ phận thu thập và sử dụng công nghệ dữ liệu lớn BigData trong các hoạt động nghiệp vụ độc lập của mình và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nHầu hết các bộ phận có các nghiệp vụ, quy trình phù hợp với BigData đều có áp dụng thu thập và sử dụng công nghệ dữ liệu lớn BigData để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với BigData đều có áp dụng thu thập và sử dụng công nghệ dữ liệu lớn BigData để tối ưu hóa hoạt động và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nTất cả các bộ phận có các nghiệp vụ, quy trình phù hợp với BigData đều có áp dụng thu thập và sử dụng công nghệ dữ liệu lớn BigData, doanh nghiệp có cán bộ chuyên trách thường xuyên nghiên cứu áp dụng công nghệ BigData vào các hoạt động nghiệp vụ, quy trình sản xuất kinh doanh của doanh nghiệp để tối ưu hóa toàn bộ hoạt động của doanh nghiệp', NULL),
(79, 132, 83, NULL, NULL),
(80, 133, 84, 'Nếu có, vui lòng cho biết mức độ sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\r\nMột số bộ phận sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ độc lập của mình\r\nMột số bộ phận sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình và chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nHầu hết các bộ phận đều sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình để tối ưu hóa hoạt động và cập nhật vào cơ sở dữ liệu của doanh nghiệp để chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp\r\nHầu hết các bộ phận đều sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình để tối ưu hóa hoạt động và cập nhật vào cơ sở dữ liệu để chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp. Doanh nghiệp có quy trình, hướng dẫn, yêu cầu tất cả các bộ phận sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình và cập nhật vào cơ sở dữ liệu để chia sẻ phục vụ cho các hoạt động chung của mình. \r\nHầu hết các bộ phận đều sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình để tối ưu hóa hoạt động và cập nhật vào cơ sở dữ liệu để chia sẻ lẫn nhau phục vụ cho các hoạt động chung của doanh nghiệp. Doanh nghiệp có quy trình, hướng dẫn, yêu cầu tất cả các bộ phận sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số phục vụ cho các hoạt động nghiệp vụ của mình và cập nhật vào cơ sở dữ liệu để chia sẻ phục vụ cho các hoạt động chung. Doanh nghiệp có cán bộ/bộ phận chuyên trách hướng dẫn, đôn đốc tất cả các bộ phận thường xuyên sử dụng phương pháp thu thập dữ liệu riêng thông qua các kênh số để tối ưu hóa toàn bộ hoạt động của mình', NULL),
(81, 134, 85, 'Tổng doanh thu của doanh nghiệp trong năm gần nhất', NULL),
(82, 135, 86, 'Nếu có, vui lòng cho biết mức độ sử dụng phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức phục vụ sản xuất kinh doanh tại các bộ phận (phòng, ban, đơn vị) của doanh nghiệp\nMột số bộ phận sử dụng phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức phục vụ quy trình, nghiệp vụ hoạt động của từng bộ phận\nMột số bộ phận sử dụng phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức để chia sẻ dữ liệu, phục vụ quy trình, nghiệp vụ hoạt động của từng bộ phận và các hoạt động chung của doanh nghiệp\nTất cả các bộ phận đều thống nhất sử dụng chung phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức để chia sẻ dữ liệu, phục vụ cho các hoạt động của doanh nghiệp, tối ưu hóa hoạt động của doanh nghiệp\nTất cả các bộ phận đều thống nhất sử dụng chung phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức được sử dụng chung, thống nhất, cập nhật, đồng bộ, liên thông để tối ưu hóa, đồng bộ hóa và trực tuyến hóa các hoạt động sản xuất kinh doanh của doanh nghiệp\nTất cả các bộ phận đều thống nhất sử dụng chung phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức được sử dụng chung  và có cán bộ/bộ phận chuyên trách thúc đẩy sử dụng các phần mềm hỗ trợ kinh doanh thông minh, công cụ phân tích và biểu thị dữ liệu kinh doanh; công cụ quản trị tri thức trong doanh nghiệp\n', NULL),
(83, 136, 87, 'Tổng số quyết định ban hành của doanh nghiệp trong kỳ đánh giá', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_doanhnghiep`
--

CREATE TABLE `chitiet_doanhnghiep` (
  `id` int(11) NOT NULL,
  `DoanhNghiep_id` bigint(13) NOT NULL,
  `MaSoThue` varchar(20) NOT NULL,
  `NgayHoatDong` date NOT NULL,
  `LoaiHinhDN` int(11) NOT NULL,
  `TenVietTat` text DEFAULT NULL,
  `TenTiengAnh` text DEFAULT NULL,
  `VonDieuLe` bigint(20) DEFAULT NULL,
  `QuyMoNhanSu` bigint(20) NOT NULL,
  `DC_ThanhPho` int(11) NOT NULL,
  `DC_Huyen` int(11) NOT NULL,
  `DC_Phuong` int(11) NOT NULL,
  `DC_SoNha` text NOT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `FAX` int(11) DEFAULT NULL,
  `Website` text DEFAULT NULL,
  `Zipcode` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_doanhnghiep`
--

INSERT INTO `chitiet_doanhnghiep` (`id`, `DoanhNghiep_id`, `MaSoThue`, `NgayHoatDong`, `LoaiHinhDN`, `TenVietTat`, `TenTiengAnh`, `VonDieuLe`, `QuyMoNhanSu`, `DC_ThanhPho`, `DC_Huyen`, `DC_Phuong`, `DC_SoNha`, `SDT`, `FAX`, `Website`, `Zipcode`, `created_at`, `updated_at`) VALUES
(2, 2, '1600891913', '2007-08-05', 22, 'HUNG LAM JSC', 'HUNG LAM JOINT STOCK COMPANY', 120000000, 500, 89, 892, 30592, 'Số 1076 Quốc lộ 91, Ấp An Hòa', '0986222939', 986222939, 'https://masothue.com/1600891913-cong-ty-cp-hung-lam', '98000', '2023-03-23 07:39:38', '2023-03-23 07:41:07'),
(3, 1, '12345678912345', '2023-01-01', 10, 'N&B crops.', 'N&B solutions', 50000, 2, 89, 883, 30295, '18, Ung Văn Khiêm', '0988848653', 988848653, 'https://fit.agu.edu.vn/', '98000', '2023-03-23 07:42:43', NULL),
(7, 1602042520, '1602042520', '2023-04-01', 6, 'MOITRUONGXINH CO.,LTD', 'MOITRUONGXINH CONSTRUCT', 100000000000, 10, 89, 888, 30457, 'Số 203, ấp Mỹ Hóa 2', '0939486768', 939486768, NULL, '98000', '2023-04-12 08:46:56', NULL),
(8, 1602109020, '1602109020', '2019-09-26', 17, 'JV HOSPITAL', 'VIET NHAT INTERNATIONAL SCIENCE HOSPITAL CO. LTD', 100000000000, 150, 89, 883, 30295, 'Đường Ung Văn Khiêm (Nối dài)', '0986709867', 986709867, NULL, '98000', '2023-04-12 08:55:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_nguoidung`
--

CREATE TABLE `chitiet_nguoidung` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `DiaChi` text NOT NULL,
  `NguoiDung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_thuvien`
--

CREATE TABLE `chitiet_thuvien` (
  `Id` int(11) NOT NULL,
  `LoaiThuVien` int(11) NOT NULL,
  `MoTa` text NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `ThuVien_id` int(11) NOT NULL,
  `LinhVuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_tinnhan`
--

CREATE TABLE `chitiet_tinnhan` (
  `Id` int(11) NOT NULL,
  `IdCha` int(11) DEFAULT NULL,
  `TinNhan_id` int(11) NOT NULL,
  `NoiDung_TinNhan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiet_tinnhan`
--

INSERT INTO `chitiet_tinnhan` (`Id`, `IdCha`, `TinNhan_id`, `NoiDung_TinNhan`, `created_at`) VALUES
(3, NULL, 25, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-08 02:20:12'),
(4, NULL, 26, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:10:15'),
(5, NULL, 27, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:10:47'),
(6, NULL, 28, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:11:32'),
(7, NULL, 29, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:11:35'),
(8, NULL, 30, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:13:11'),
(9, NULL, 31, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 11:14:33'),
(10, NULL, 32, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 14:56:15'),
(11, NULL, 33, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 14:57:40'),
(12, NULL, 34, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 14:59:57'),
(13, NULL, 35, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 15:01:10'),
(14, NULL, 36, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-22 15:01:13'),
(15, NULL, 37, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:17:37'),
(16, NULL, 38, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:18:02'),
(17, NULL, 39, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:24:43'),
(18, NULL, 40, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:29:25'),
(19, NULL, 41, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:29:43'),
(20, NULL, 42, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:29:46'),
(21, NULL, 43, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:50:50'),
(22, NULL, 44, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:51:42'),
(23, NULL, 45, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:52:06'),
(24, NULL, 46, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 06:53:15'),
(25, NULL, 47, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-23 07:10:11'),
(26, NULL, 48, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-27 09:24:09'),
(27, NULL, 49, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-27 09:24:49'),
(28, NULL, 50, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-27 09:25:13'),
(29, NULL, 51, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-27 09:27:05'),
(30, NULL, 52, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-27 09:27:53'),
(31, NULL, 53, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-27 09:28:08'),
(32, NULL, 54, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-27 09:28:20'),
(33, NULL, 55, 'Doanh nghiệp chưa đánh giá trong quý này', '2023-03-28 02:08:29'),
(34, NULL, 56, 'Doanh nghiệp chưa đánh giá phiếu số 2  trong quý này', '2023-03-28 02:14:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_noidung_p2`
--

CREATE TABLE `danhmuc_noidung_p2` (
  `Id` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `NoiDung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_noidung_p2`
--

INSERT INTO `danhmuc_noidung_p2` (`Id`, `Ten`, `NoiDung_id`) VALUES
(3, 'Quản trị', 3),
(4, 'Quản trị', 4),
(5, 'Quản trị', 5),
(6, 'Quản trị', 6),
(7, 'Quản trị', 7),
(8, 'Quản trị', 8),
(18, 'Chiến lược', 19),
(19, 'Chiến lược', 20),
(20, 'Chiến lược', 21),
(21, 'Chiến lược', 22),
(22, 'Chiến lược', 23),
(23, 'Chiến lược', 24),
(24, 'Văn hóa', 25),
(25, 'Văn hóa', 26),
(26, 'Văn hóa', 27),
(27, 'Văn hóa', 28),
(28, 'Văn hóa', 29),
(29, 'Văn hóa', 30),
(30, 'Công nghệ và kết nối', 31),
(31, 'Công nghệ và kết nối', 32),
(32, 'Công nghệ và kết nối', 33),
(33, 'Công nghệ và kết nối', 34),
(34, 'Công nghệ và kết nối', 35),
(35, 'Công nghệ và kết nối', 36),
(36, 'Công nghệ và kết nối', 37),
(37, 'Công nghệ và kết nối', 38),
(38, 'Công nghệ và kết nối', 39),
(39, 'Công nghệ và kết nối', 40),
(40, 'Công nghệ và kết nối', 41),
(41, 'Nhân lực', 42),
(42, 'Nhân lực', 43),
(43, 'Nhân lực', 44),
(44, 'Nhân lực', 45),
(45, 'Nhân lực', 46),
(46, 'Nhân lực', 47);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dn_user`
--

CREATE TABLE `dn_user` (
  `id` int(11) NOT NULL,
  `DoanhNghiep_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `NguoiDung_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dn_user`
--

INSERT INTO `dn_user` (`id`, `DoanhNghiep_id`, `User_id`, `NguoiDung_id`) VALUES
(1, 1, 2, 0),
(3, 1, 1, NULL),
(4, 1, 4, NULL),
(5, 2, 3, NULL),
(6, 1602042520, 6, NULL),
(7, 1602109020, 7, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhnghiep`
--

CREATE TABLE `doanhnghiep` (
  `Id` int(13) NOT NULL,
  `TenDoanhNghiep` varchar(255) NOT NULL,
  `TenVietTat` varchar(256) NOT NULL,
  `DiaChiTruSo` text NOT NULL,
  `DiaPhuong` text NOT NULL,
  `LoaiHinhLaoDong` varchar(255) DEFAULT NULL,
  `SoLuongLaoDong` int(11) NOT NULL,
  `SoDienThoai` int(10) NOT NULL,
  `email` text DEFAULT NULL,
  `TrangThai_HienThi` int(11) NOT NULL,
  `LinhVuc_id` int(11) NOT NULL,
  `TrangThai_XacThuc` int(1) NOT NULL DEFAULT 0 COMMENT 'Nếu doanh nghiệp mới đăng ký sẽ có trạng thái là 0\r\nnéu doanh nghiệp được xác thực: 1\r\nnếu doanh nghiệp dừng hoạt động thì sẽ là 2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `doanhnghiep`
--

INSERT INTO `doanhnghiep` (`Id`, `TenDoanhNghiep`, `TenVietTat`, `DiaChiTruSo`, `DiaPhuong`, `LoaiHinhLaoDong`, `SoLuongLaoDong`, `SoDienThoai`, `email`, `TrangThai_HienThi`, `LinhVuc_id`, `TrangThai_XacThuc`) VALUES
(1, 'CTy lập trình N&B', 'N&B solution', '89', '883', 'gia công phần mềm', 2, 988848653, 'bangnguyen01072001@gmail.com', 1, 3, 0),
(2, 'CÔNG TY CP HƯNG LÂM\r\n', 'HungLam crop', '89', '892', 'Công ty cổ phần\r\n', 6, 986, 'letrongthuy82546@gmail.com', 1, 1, 0),
(3, 'CÔNG TY TNHH BỆNH VIỆN ĐA KHOA QUỐC TẾ VIỆT NHẬT\r\n', '0', '89', '883', 'Công ty trách nhiệm hữu hạn một thành viên\r\n', 150, 986709867, 'HoangKhang@Gmail.com', 1, 3, 0),
(1602042520, 'CÔNG TY TNHH MỘT THÀNH VIÊN XÂY DỰNG MÔI TRƯỜNG XINH', 'MOITRUONGXINH CO.,LTD', '89', '888', NULL, 10, 939486768, 'MTX.AG@gmail.com', 0, 2, 0),
(1602109020, 'CÔNG TY TNHH BỆNH VIỆN ĐA KHOA QUỐC TẾ VIỆT NHẬT', 'JV HOSPITAL', '89', '883', NULL, 150, 986709867, 'JVhospital@gmail.com', 0, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `lienket_website`
--

CREATE TABLE `lienket_website` (
  `Id` int(11) NOT NULL,
  `TenWebsite` varchar(255) NOT NULL,
  `LinkWebsite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `Id` int(11) NOT NULL,
  `TenLinhVuc` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`Id`, `TenLinhVuc`, `MoTa`) VALUES
(1, 'Nông Nghiệp', NULL),
(2, 'Công nghiệp & xây dựng', NULL),
(3, 'Thương mại & dịch vụ', NULL),
(4, 'Khác', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc_user`
--

CREATE TABLE `linhvuc_user` (
  `Id` int(11) NOT NULL,
  `LinhVuc_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhdoanhnghiep`
--

CREATE TABLE `loaihinhdoanhnghiep` (
  `Id` int(11) NOT NULL,
  `TenLoaiHinh` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihinhdoanhnghiep`
--

INSERT INTO `loaihinhdoanhnghiep` (`Id`, `TenLoaiHinh`) VALUES
(1, 'Doanh nghiệp tư nhân'),
(2, 'Công ty trách nhiệm hữu hạng'),
(3, 'Công ty trách nhiệm hữu hạng một thành viên( TNHH 1 TV)'),
(4, 'Công ty cổ phần'),
(5, 'Công ty hợp doanh'),
(6, 'Đơn vị phụ thuộc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `Id` int(11) NOT NULL,
  `TenLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lotrinh`
--

CREATE TABLE `lotrinh` (
  `Id` int(11) NOT NULL,
  `TenLoTrinh` varchar(255) NOT NULL,
  `User_id` int(11) NOT NULL,
  `LinhVuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_08_071209_create_sessions_table', 1),
(7, '2023_02_10_124438_create_roles_table', 1),
(8, '2018_06_30_113500_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mohinh`
--

CREATE TABLE `mohinh` (
  `Id` int(11) NOT NULL,
  `TenMoHinh` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mohinh`
--

INSERT INTO `mohinh` (`Id`, `TenMoHinh`, `NoiDung`) VALUES
(1, 'Mở rộng mạng lưới kết nối', 'Mở rộng mạng lưới kết nối là mô hình chuyển đổi số được hình thành khi doanh nghiệp có đủ cơ sở hạ tầng viễn thông và khả năng đào thải nhóm người dùng “phá đám” của hệ thống. Mô hình này hỗ trợ trao đổi thông tin, giao dịch giữa các nhóm người diễn ra dễ dàng, không bị giới hạn về mặt địa lý và được áp dụng cho các loại hình dịch vụ web.\r\n\r\nƯu điểm của mô hình này là giúp tăng tính kết nối cùng khả năng tương tác vật lý trực tiếp, từ đó thúc đẩy sự tin tưởng giữa hai bên. Đồng thời mô hình này cũng cho phép mở rộng kết nối giữa nhiều người trong cùng cộng đồng. \r\nNgược lại, mô hình này vẫn tồn đọng các nhược điểm như giới hạn số lượng kết nối thực tế. Điều này khiến doanh nghiệp có thể lỡ mất các cơ hội kết nối tiềm năng.\r\nHiện nay, các doanh nghiệp ứng dụng mô hình chuyển đổi số này một cách hiệu quả có thể kể đến như: các trang mạng xã hội (Facebook, Twitter, Instagram), các trang thương mại điện tử (Amazon, Rakuten, Tiki, Tokopedia), v.v…'),
(2, 'Giảm chi phí tìm kiếm và chi phí cơ hội', 'Giảm chi phí tìm kiếm và chi phí cơ hội là mô hình kích hoạt sự xuất hiện của bên trung gian – nhóm người chuyên tổng hợp, xử lý, sắp xếp lượng thông tin phức tạp sau đó cung cấp cho người dùng theo định dạng họ mong muốn.\r\n\r\nDoanh nghiệp muốn áp dụng mô hình này phải đáp ứng được yêu cầu về mặt chuyên môn, đồng thời đảm bảo được tính khách quan và tin cậy. Từ đó giúp người dùng dễ dàng so sánh và đưa ra những lựa chọn. Các lĩnh vực áp dụng mô hình này bao gồm bất động sản, dịch vụ tài chính, bảo hiểm, tuyển dụng…\r\n\r\nƯu điểm của mô hình chuyển đổi số này là người dùng có thể nhận tối đa số lượng thông tin, có thể tiếp cận nguồn thông tin có chọn lọc một cách hiệu quả giúp tiết kiệm chi phí tìm kiếm và chi phí cơ hội.\r\nNhược điểm là người dùng sẽ bị phân tâm do thu thập được lượng lớn thông tin từ nhiều nguồn khác nhau. Điều này dẫn đến việc chi phí tìm kiếm và chi phí cơ hội tăng lên'),
(3, 'Loại bỏ cấu trúc đa tầng và phân mảnh', 'Đây là mô hình chuyển đổi số phù hợp với các doanh nghiệp thuộc các ngành hàng yêu cầu tính chuyên môn, có chi phí hàng hóa, dịch vụ cao như giao dịch ô tô, xe máy, kim loại quý, tuyển dụng… Nếu muốn vận dụng mô hình này, doanh nghiệp cần xây dựng nền tảng có tính năng so sánh và tìm kiếm tiện lợi.\r\nMô hình này giúp người bán và đại lý trung gian có thể bán hàng dựa trên mạng lưới có sẵn cùng khả năng thương lượng giá. Đồng thời khách hàng có thể chọn mua từ người bán hoặc đại lý tin tưởng. \r\nNgược lại, với mô hình này thì quá trình giao dịch và thương lượng giá không được công khai. Điều này có thể mang lại cảm giác nhầm lẫn cho cả bên mua lẫn bên bán.'),
(4, 'Tổng hợp dữ liệu', 'Đây là mô hình chuyển đổi số đánh dấu sự thay đổi trong việc quản lý dữ liệu: doanh nghiệp chia sẻ dữ liệu vào kho tập trung, tạo điều kiện tối ưu hóa các cơ hội từ dữ liệu cho các bên tham gia. Từ đó, tạo tiền đề để xây dựng các dịch vụ giá trị gia tăng, thay vì sử dụng các công ty cung cấp dịch vụ quản lý dữ liệu người dùng. \r\n\r\nThông thường, các doanh nghiệp phải đảm bảo có dịch vụ và hệ thống độc lập được cấp quyền truy cập API vào dữ liệu nếu muốn vận dụng mô hình này. Tổng hợp dữ liệu là mô hình được các doanh nghiệp chuyên về SaaS, các nền tảng quản lý đơn hàng, marketplace sử dụng.\r\nMô hình Tổng hợp dữ liệu này giúp bên cung cấp có thể đề xuất, cá nhân hóa dịch vụ dựa trên kho dữ liệu người dùng của riêng minh, tối đa hóa các cơ hội có được từ dữ liệu như dịch vụ bổ sung, đưa ra các đề xuất có độ chính xác cao cho bên cung cấp.\r\nNhược điểm của mô hình này là việc cá nhân hóa dịch vụ khó đạt được chất lượng tối đa. Điều này xảy ra do nguồn thông tin dữ liệu thuộc quyền quản lý của các bên cung cấp khác nhau. Tình trạng này khiến doanh nghiệp gặp nhiều hạn chế trong việc tiếp xúc các cơ hội bán hàng mới.\r\n'),
(5, 'Tối đa hóa ROI và tài nguyên', 'Mô hình Tối đa hóa ROI và tài nguyên được vận dụng khi mạng lưới internet mở rộng và các dịch vụ số gia tăng. Lúc này, những thay đổi về giá trị và định hướng tiêu dùng do sự khan hiếm nguồn lực trở thành yếu tố mang lại hiệu quả tích cực.\r\nTối đa hóa ROI và tài nguyên được hình thành khi các bên trung gian là người trung lập, đáng tin cậy và có thể đưa ra các so sánh. Những lĩnh vực vận dụng mô hình này bao gồm Vận tải, Tài chính, Hàng tiêu dùng, Không gian, Dịch vụ cá nhân và Dịch vụ chuyên nghiệp, v.v.\r\n\r\nLợi thế của mô hình này là mang đến cảm giác gắn bó và thân thuộc cho cả nhà cung cấp dịch vụ lẫn người dùng cuối. Đồng thời cung cấp cho người dùng các dịch vụ cùng nguồn lực thích hợp với thời gian và giá cả tối ưu.\r\nNgược lại, nhược điểm vẫn còn tồn đọng là phân bổ nguồn lực không tối ưu dẫn đến tình trạng dư thừa hoặc thiếu hụt tài nguyên. '),
(6, 'Cung cấp phần cứng đi kèm phần mềm ', 'Cung cấp phần cứng đi kèm phần mềm là mô hình chuyển đổi thứ 6 trong danh sách. Mô hình này định nghĩa lại việc xây dựng mối quan hệ với khách hàng, bắt đầu từ phần mềm, được kích hoạt khi tốc độ phổ biến của đường truyền internet tăng nhanh, song song với sự phát triển của phương pháp phân tích dữ liệu.\r\n\r\nƯu điểm chính là giữ mối quan hệ với khách hàng thông qua việc cập nhật liên tục các phiên bản, giúp duy trì giá trị sử dụng của phần cứng trong thời gian dài. Đồng thời thúc đẩy quá trình cá nhân hóa trải nghiệm sử dụng phần cứng bằng phần mềm.\r\nNhược điểm của mô hình này là bán thuần phần cứng đơn lẻ với các sản phẩm được cố định chức năng và thông số kỹ thuật trong một lần bán duy nhất.'),
(7, 'Bán tự động', 'Bán tự động là mô hình chuyển đổi số vận dụng trong bối cảnh thiếu hụt lao động, đặc biệt là nhóm nhân lực chuyên môn cao. Nhu cầu về tính lưu động nguồn nhân lực tăng cao và quá trình chuyển giao công nghệ giữa các ngành là lý do khiến Bán tự động được nhiều doanh nghiệp vận dụng.\r\n\r\nVới mô hình này, doanh nghiệp có thể ứng dụng công nghệ thông tin vào các quy trình tự động hóa. Ngược lại, các quy trình cần sự can thiệp của con người như sáng tạo, kiểm tra chất lượng sản phẩm, chăm sóc khách hàng sẽ do con người đảm nhận.\r\n\r\nƯu điểm của mô hình này chính là có thể áp dụng công nghệ thông tin vào các chu trình trong ngành, giúp các quy trình phức tạp được vận hành trơn tru với hiệu suất tối ưu.\r\nNhược điểm của mô hình này chính là khó có thể vận dụng trong các chu trình thuộc các ngành truyền thống vẫn còn có nhiều sự can thiệp chủ đạo của con người (sáng tạo, kiểm tra chi tiết chất lượng sản phẩm, chăm sóc khách hàng, v.v…)'),
(8, 'Hiểu khách hàng trước khi sản xuất', 'Đây là mô hình chuyển đổi số đảo ngược quy trình sản xuất và bán hàng truyền thống, bắt đầu từ việc tiếp thị khách hàng mục tiêu trước khi sản xuất sản phẩm phù hợp. Mô hình này được vận dụng khi xu hướng cá nhân hóa và đa dạng hóa nhu cầu của người tiêu dùng.\r\n\r\nMô hình này giúp doanh nghiệp hiểu rõ nhu cầu người dùng trước khi sản xuất. Từ đó giúp giảm lượng hàng tồn và cải thiện quy trình sản xuất những gì bán được. \r\nTuy nhiên, doanh nghiệp sẽ tốn nhiều thời gian để thu thập nhận xét của người dùng từng mua sản phẩm trước khi đưa lại vào quy trình lên kế hoạch sản xuất.'),
(9, 'SaaS cung cấp giải pháp chuyên môn', 'SaaS là mô hình chuyển đổi số tập trung vào một hoặc vài nghiệp vụ chuyên môn, từ đó giải quyết bài toán nghiệp vụ. Hiện nay, các ngành vận dụng mô hình này bao gồm Kế toán, F&B, v.v.\r\n\r\nMô hình này giúp doanh nghiệp tiết kiệm chi phí, bao gồm chi phí nhân công và chi phí máy chủ do sử dụng công nghệ điện toán đám mây.\r\nMô hình này đòi hỏi tính chuyên môn hóa cao và có tính cạnh tranh bởi sự gia tăng số lượng người chơi tham gia kinh doanh SaaS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mohinh_doanhnghiep`
--

CREATE TABLE `mohinh_doanhnghiep` (
  `Id` int(11) NOT NULL,
  `LoTrinh_id` int(11) NOT NULL,
  `DoanhNghiep_id` bigint(11) NOT NULL,
  `MoHinh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `Id` int(11) NOT NULL,
  `TenNganhNghe` text NOT NULL,
  `LinhVuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`Id`, `TenNganhNghe`, `LinhVuc_id`) VALUES
(1, 'Nông nghiệp, lâm nghiệp và thủy sản', 1),
(2, 'Khai khoáng', 1),
(3, 'Công nghiệp chế biến, chế tạo', 2),
(4, 'Sản xuất và phân phối điện, khí đốt, nước nóng, hơi nước và điều hòa không khí', 3),
(5, 'Cung cấp nước, hoạt động quản lý và xử lý rác thải, nước thải', 3),
(6, 'Xây dựng', 2),
(7, 'Bán buôn và bán lẻ; sửa chữa ô tô, mô tô, xe máy và xe có động cơ khác', 3),
(8, 'Vận tải kho bãi', 3),
(9, 'Dịch vụ lưu trú và ăn uống', 3),
(10, 'Thông tin và Truyền thông', 3),
(11, 'Hoạt động tài chính, ngân hàng và bảo hiểm', 3),
(12, 'Hoạt động kinh doanh bất động sản', 3),
(13, 'Hoạt động chuyên môn, khoa học và công nghệ', 3),
(14, 'Hoạt động hành chính và dịch vụ hỗ trợ', 3),
(15, 'Hoạt động của Đảng Cộng sản, tổ chức chính trị - xã hội, quản lý nhà nước, an ninh quốc phòng; bảo đảm xã hội bắt buộc', 3),
(16, 'Giáo dục và Đào tạo', 3),
(17, 'Y tế và hoạt động trợ giúp xã hội', 3),
(18, 'Nghệ thuật, vui chơi và giải trí', 3),
(19, 'Hoạt động dịch vụ khác', 3),
(20, 'Hoạt động làm thuê các công việc trong hộ gia đinh, sản xuất sản phẩm vật chất và dịch vụ tự tiêu dùng của hộ gia đình', 3),
(21, 'Hoạt động của các tổ chức và cơ quan quốc tế', 3),
(22, 'Nông nghiệp và hoạt động dịch vụ có liên quan', 1),
(23, 'Lâm nghiệp và hoạt động dịch vụ có liên quan', 1),
(24, 'Khai thác, nuôi trồng thủy sản', 1),
(25, 'Khai thác than cứng và than non', 2),
(26, 'Khai thác dầu thô và khí đốt tự nhiên', 2),
(27, 'Khai thác quặng kim loại', 2),
(28, 'Khai khoáng khác', 2),
(29, 'Hoạt động dịch vụ hỗ trợ khai khoáng', 2),
(30, 'Sản xuất, chế biến thực phẩm', 2),
(31, 'Sản xuất đồ uống', 2),
(32, 'Sản xuất sản phẩm thuốc lá', 2),
(33, 'Dệt', 2),
(34, 'Sản xuất trang phục', 3),
(35, 'Sản xuất da và các sản phẩm có liên quan', 2),
(36, 'Chế biến gỗ và sản xuất sản phẩm từ gỗ, tre, nứa (trừ giường, tủ, bàn, ghế); sản xuất sản phẩm từ rơm, rạ và vật liệu tết bện', 2),
(37, 'Sản xuất giấy và sản phẩm từ giấy', 2),
(38, 'In, sao chép bản ghi các loại', 3),
(39, 'Sản xuất than cốc, sản phẩm dầu mỏ tinh chế', 2),
(40, 'Sản xuất hoá chất và sản phẩm hoá chất', 2),
(41, 'Sản xuất thuốc, hoá dược và dược liệu', 2),
(42, 'Sản xuất sản phẩm từ cao su và plastic', 2),
(43, 'Sản xuất sản phẩm từ khoáng phi kim loại khác', 2),
(44, 'Sản xuất kim loại', 2),
(45, 'Sản xuất sản phẩm từ kim loại đúc sẵn (trừ máy móc, thiết bị)', 2),
(46, 'Sản xuất sản phẩm điện tử, máy vi tính và sản phẩm quang học', 2),
(47, 'Sản xuất thiết bị điện', 2),
(48, 'Sản xuất máy móc, thiết bị chưa được phân vào đâu', 2),
(49, 'Sản xuất ô tô và xe có động cơ khác', 2),
(50, 'Sản xuất phương tiện vận tải khác', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `TenNguoiDung` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `Loai` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `DoanhNghiep_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidung_cauhoi`
--

CREATE TABLE `noidung_cauhoi` (
  `Id` int(11) NOT NULL,
  `CauHoi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `noidung_cauhoi`
--

INSERT INTO `noidung_cauhoi` (`Id`, `CauHoi_id`) VALUES
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `phieu1_diem`
--

CREATE TABLE `phieu1_diem` (
  `id` int(11) NOT NULL,
  `Phieu_id` varchar(16) NOT NULL,
  `ChiTiet_id` int(11) NOT NULL,
  `Diem` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phieu1_diem`
--

INSERT INTO `phieu1_diem` (`id`, `Phieu_id`, `ChiTiet_id`, `Diem`, `updated_at`, `created_at`) VALUES
(983, 'DG1-230309092655', 38, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(984, 'DG1-230309092655', 39, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(985, 'DG1-230309092655', 40, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(986, 'DG1-230309092655', 42, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(987, 'DG1-230309092655', 43, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(988, 'DG1-230309092655', 46, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(989, 'DG1-230309092655', 47, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(990, 'DG1-230309092655', 48, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(991, 'DG1-230309092655', 49, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(992, 'DG1-230309092655', 36, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(993, 'DG1-230309092655', 52, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(994, 'DG1-230309092655', 53, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(995, 'DG1-230309092655', 54, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(996, 'DG1-230309092655', 55, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(997, 'DG1-230309092655', 35, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(998, 'DG1-230309092655', 50, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(999, 'DG1-230309092655', 59, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1000, 'DG1-230309092655', 56, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1001, 'DG1-230309092655', 57, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1002, 'DG1-230309092655', 63, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1003, 'DG1-230309092655', 65, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1004, 'DG1-230309092655', 61, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1005, 'DG1-230309092655', 68, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1006, 'DG1-230309092655', 69, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1007, 'DG1-230309092655', 70, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1008, 'DG1-230309092655', 71, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1009, 'DG1-230309092655', 72, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1010, 'DG1-230309092655', 74, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1011, 'DG1-230309092655', 75, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1012, 'DG1-230309092655', 76, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1013, 'DG1-230309092655', 77, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1014, 'DG1-230309092655', 78, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1015, 'DG1-230309092655', 79, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1016, 'DG1-230309092655', 81, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1017, 'DG1-230309092655', 82, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1018, 'DG1-230309092655', 83, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1019, 'DG1-230309092655', 84, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1020, 'DG1-230309092655', 60, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1021, 'DG1-230309092655', 66, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1022, 'DG1-230309092655', 88, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1023, 'DG1-230309092655', 89, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1024, 'DG1-230309092655', 90, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1025, 'DG1-230309092655', 91, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1026, 'DG1-230309092655', 92, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1027, 'DG1-230309092655', 93, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1028, 'DG1-230309092655', 86, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1029, 'DG1-230309092655', 96, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1030, 'DG1-230309092655', 100, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1031, 'DG1-230309092655', 101, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1032, 'DG1-230309092655', 103, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1033, 'DG1-230309092655', 104, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1034, 'DG1-230309092655', 105, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1035, 'DG1-230309092655', 106, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1036, 'DG1-230309092655', 85, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1037, 'DG1-230309092655', 94, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1038, 'DG1-230309092655', 110, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1039, 'DG1-230309092655', 111, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1040, 'DG1-230309092655', 112, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1041, 'DG1-230309092655', 113, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1042, 'DG1-230309092655', 114, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1043, 'DG1-230309092655', 108, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1044, 'DG1-230309092655', 117, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1045, 'DG1-230309092655', 118, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1046, 'DG1-230309092655', 124, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1047, 'DG1-230309092655', 125, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1048, 'DG1-230309092655', 126, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1049, 'DG1-230309092655', 107, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1050, 'DG1-230309092655', 115, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1051, 'DG1-230309092655', 130, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1052, 'DG1-230309092655', 131, 0, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1053, 'DG1-230309092655', 132, 4, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1054, 'DG1-230309092655', 133, 4, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1055, 'DG1-230309092655', 134, 2, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1056, 'DG1-230309092655', 135, 4, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1057, 'DG1-230309092655', 136, 4, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1058, 'DG1-230309092655', 127, 18, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1059, 'DG1-230309092655', 128, 18, '2023-03-09 02:27:47', '2023-03-09 02:27:47'),
(1522, 'DG1-230404154912', 36, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1523, 'DG1-230404154912', 35, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1524, 'DG1-230404154912', 50, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1525, 'DG1-230404154912', 56, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1526, 'DG1-230404154912', 57, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1527, 'DG1-230404154912', 61, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1528, 'DG1-230404154912', 60, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1529, 'DG1-230404154912', 66, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1530, 'DG1-230404154912', 86, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1531, 'DG1-230404154912', 85, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1532, 'DG1-230404154912', 94, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1533, 'DG1-230404154912', 108, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1534, 'DG1-230404154912', 107, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1535, 'DG1-230404154912', 115, 0, '2023-04-04 08:49:13', '2023-04-04 08:49:13'),
(1536, 'DG1-230404155008', 36, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1537, 'DG1-230404155008', 35, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1538, 'DG1-230404155008', 50, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1539, 'DG1-230404155008', 56, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1540, 'DG1-230404155008', 57, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1541, 'DG1-230404155008', 61, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1542, 'DG1-230404155008', 60, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1543, 'DG1-230404155008', 66, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1544, 'DG1-230404155008', 86, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1545, 'DG1-230404155008', 85, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1546, 'DG1-230404155008', 94, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1547, 'DG1-230404155008', 108, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1548, 'DG1-230404155008', 107, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1549, 'DG1-230404155008', 115, 0, '2023-04-04 08:50:10', '2023-04-04 08:50:10'),
(1550, 'DG1-230404155008', 36, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1551, 'DG1-230404155008', 35, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1552, 'DG1-230404155008', 50, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1553, 'DG1-230404155008', 56, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1554, 'DG1-230404155008', 57, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1555, 'DG1-230404155008', 61, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1556, 'DG1-230404155008', 60, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1557, 'DG1-230404155008', 66, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1558, 'DG1-230404155008', 86, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1559, 'DG1-230404155008', 85, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1560, 'DG1-230404155008', 94, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1561, 'DG1-230404155008', 108, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1562, 'DG1-230404155008', 107, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1563, 'DG1-230404155008', 115, 0, '2023-04-04 08:50:17', '2023-04-04 08:50:17'),
(1564, 'DG1-230404155008', 36, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1565, 'DG1-230404155008', 35, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1566, 'DG1-230404155008', 50, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1567, 'DG1-230404155008', 56, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1568, 'DG1-230404155008', 57, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1569, 'DG1-230404155008', 61, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1570, 'DG1-230404155008', 60, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1571, 'DG1-230404155008', 66, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1572, 'DG1-230404155008', 86, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1573, 'DG1-230404155008', 85, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1574, 'DG1-230404155008', 94, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1575, 'DG1-230404155008', 108, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1576, 'DG1-230404155008', 107, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1577, 'DG1-230404155008', 115, 0, '2023-04-04 08:50:30', '2023-04-04 08:50:30'),
(1578, 'DG1-230404155125', 36, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1579, 'DG1-230404155125', 50, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1580, 'DG1-230404155125', 57, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1581, 'DG1-230404155125', 61, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1582, 'DG1-230404155125', 66, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1583, 'DG1-230404155125', 86, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1584, 'DG1-230404155125', 94, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1585, 'DG1-230404155125', 108, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1586, 'DG1-230404155125', 115, 0, '2023-04-04 08:51:26', '2023-04-04 08:51:26'),
(1587, 'DG1-230404155220', 36, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1588, 'DG1-230404155220', 35, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1589, 'DG1-230404155220', 50, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1590, 'DG1-230404155220', 56, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1591, 'DG1-230404155220', 57, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1592, 'DG1-230404155220', 61, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1593, 'DG1-230404155220', 60, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1594, 'DG1-230404155220', 66, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1595, 'DG1-230404155220', 86, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1596, 'DG1-230404155220', 85, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1597, 'DG1-230404155220', 94, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1598, 'DG1-230404155220', 108, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1599, 'DG1-230404155220', 107, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1600, 'DG1-230404155220', 115, 0, '2023-04-04 08:52:23', '2023-04-04 08:52:23'),
(1601, 'DG1-230404155330', 36, 0, '2023-04-04 08:53:39', '2023-04-04 08:53:39'),
(1602, 'DG1-230404155330', 35, 0, '2023-04-04 08:53:39', '2023-04-04 08:53:39'),
(1603, 'DG1-230404155330', 50, 0, '2023-04-04 08:53:39', '2023-04-04 08:53:39'),
(1604, 'DG1-230404155330', 56, 0, '2023-04-04 08:53:39', '2023-04-04 08:53:39'),
(1605, 'DG1-230404155330', 57, 0, '2023-04-04 08:53:39', '2023-04-04 08:53:39'),
(1606, 'DG1-230404155330', 61, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1607, 'DG1-230404155330', 60, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1608, 'DG1-230404155330', 66, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1609, 'DG1-230404155330', 86, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1610, 'DG1-230404155330', 85, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1611, 'DG1-230404155330', 94, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1612, 'DG1-230404155330', 108, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1613, 'DG1-230404155330', 107, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1614, 'DG1-230404155330', 115, 0, '2023-04-04 08:53:40', '2023-04-04 08:53:40'),
(1719, 'DG1-230404162141', 38, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1720, 'DG1-230404162141', 39, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1721, 'DG1-230404162141', 40, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1722, 'DG1-230404162141', 42, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1723, 'DG1-230404162141', 43, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1724, 'DG1-230404162141', 46, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1725, 'DG1-230404162141', 47, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1726, 'DG1-230404162141', 48, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1727, 'DG1-230404162141', 49, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1728, 'DG1-230404162141', 52, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1729, 'DG1-230404162141', 53, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1730, 'DG1-230404162141', 54, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1731, 'DG1-230404162141', 55, 3, '2023-04-04 09:21:53', '2023-04-04 09:21:53'),
(1732, 'DG1-230404162141', 36, 39, '2023-04-04 09:22:18', '2023-04-04 09:22:18'),
(1733, 'DG1-230404162141', 35, 39, '2023-04-04 09:22:18', '2023-04-04 09:22:18'),
(1734, 'DG1-230404162141', 59, 15, '2023-04-04 09:22:18', '2023-04-04 09:22:18'),
(1735, 'DG1-230404162141', 50, 15, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1736, 'DG1-230404162141', 56, 15, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1737, 'DG1-230404162141', 63, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1738, 'DG1-230404162141', 65, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1739, 'DG1-230404162141', 68, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1740, 'DG1-230404162141', 69, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1741, 'DG1-230404162141', 70, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1742, 'DG1-230404162141', 71, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1743, 'DG1-230404162141', 72, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1744, 'DG1-230404162141', 74, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1745, 'DG1-230404162141', 75, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1746, 'DG1-230404162141', 76, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1747, 'DG1-230404162141', 77, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1748, 'DG1-230404162141', 78, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1749, 'DG1-230404162141', 79, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1750, 'DG1-230404162141', 81, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1751, 'DG1-230404162141', 82, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1752, 'DG1-230404162141', 83, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1753, 'DG1-230404162141', 84, 5, '2023-04-04 09:23:51', '2023-04-04 09:23:51'),
(1754, 'DG1-230404162141', 57, 85, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1755, 'DG1-230404162141', 60, 85, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1756, 'DG1-230404162141', 88, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1757, 'DG1-230404162141', 89, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1758, 'DG1-230404162141', 90, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1759, 'DG1-230404162141', 91, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1760, 'DG1-230404162141', 92, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1761, 'DG1-230404162141', 93, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1762, 'DG1-230404162141', 96, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1763, 'DG1-230404162141', 100, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1764, 'DG1-230404162141', 101, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1765, 'DG1-230404162141', 103, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1766, 'DG1-230404162141', 104, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1767, 'DG1-230404162141', 105, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1768, 'DG1-230404162141', 106, 5, '2023-04-04 09:24:12', '2023-04-04 09:24:12'),
(1769, 'DG1-230404162141', 61, 65, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1770, 'DG1-230404162141', 85, 65, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1771, 'DG1-230404162141', 110, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1772, 'DG1-230404162141', 111, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1773, 'DG1-230404162141', 112, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1774, 'DG1-230404162141', 113, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1775, 'DG1-230404162141', 114, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1776, 'DG1-230404162141', 117, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1777, 'DG1-230404162141', 118, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1778, 'DG1-230404162141', 124, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1779, 'DG1-230404162141', 125, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1780, 'DG1-230404162141', 126, 5, '2023-04-04 09:24:25', '2023-04-04 09:24:25'),
(1781, 'DG1-230404162601', 38, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1782, 'DG1-230404162601', 39, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1783, 'DG1-230404162601', 40, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1784, 'DG1-230404162601', 42, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1785, 'DG1-230404162601', 43, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1786, 'DG1-230404162601', 46, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1787, 'DG1-230404162601', 47, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1788, 'DG1-230404162601', 48, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1789, 'DG1-230404162601', 49, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1790, 'DG1-230404162601', 52, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1791, 'DG1-230404162601', 53, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1792, 'DG1-230404162601', 54, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1793, 'DG1-230404162601', 55, 5, '2023-04-04 09:26:15', '2023-04-04 09:26:15'),
(1794, 'DG1-230404163045', 38, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1795, 'DG1-230404163045', 39, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1796, 'DG1-230404163045', 40, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1797, 'DG1-230404163045', 42, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1798, 'DG1-230404163045', 43, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1799, 'DG1-230404163045', 46, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1800, 'DG1-230404163045', 47, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1801, 'DG1-230404163045', 48, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1802, 'DG1-230404163045', 49, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1803, 'DG1-230404163045', 52, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1804, 'DG1-230404163045', 53, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1805, 'DG1-230404163045', 54, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1806, 'DG1-230404163045', 55, 5, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1807, 'DG1-230404163045', 50, 20, '2023-04-04 09:30:56', '2023-04-04 09:30:56'),
(1808, 'DG1-230404163045', 35, 65, '2023-04-04 09:31:11', '2023-04-04 09:31:11'),
(1809, 'DG1-230404163045', 59, 25, '2023-04-04 09:31:11', '2023-04-04 09:31:11'),
(1810, 'DG1-230404163045', 57, 25, '2023-04-04 09:31:11', '2023-04-04 09:31:11'),
(1811, 'DG1-230404163045', 56, 25, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1812, 'DG1-230404163045', 63, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1813, 'DG1-230404163045', 65, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1814, 'DG1-230404163045', 61, 10, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1815, 'DG1-230404163045', 68, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1817, 'DG1-230404163045', 70, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1818, 'DG1-230404163045', 71, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1819, 'DG1-230404163045', 72, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1820, 'DG1-230404163045', 74, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1821, 'DG1-230404163045', 75, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1822, 'DG1-230404163045', 76, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1823, 'DG1-230404163045', 77, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1824, 'DG1-230404163045', 78, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1825, 'DG1-230404163045', 79, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1826, 'DG1-230404163045', 81, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1827, 'DG1-230404163045', 82, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1828, 'DG1-230404163045', 83, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1829, 'DG1-230404163045', 84, 5, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1830, 'DG1-230404163045', 66, 70, '2023-04-04 09:31:35', '2023-04-04 09:31:35'),
(1831, 'DG1-230404163045', 60, 80, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1832, 'DG1-230404163045', 88, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1833, 'DG1-230404163045', 89, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1834, 'DG1-230404163045', 90, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1835, 'DG1-230404163045', 91, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1836, 'DG1-230404163045', 92, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1837, 'DG1-230404163045', 93, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1838, 'DG1-230404163045', 86, 30, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1839, 'DG1-230404163045', 96, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1840, 'DG1-230404163045', 100, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1841, 'DG1-230404163045', 101, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1842, 'DG1-230404163045', 103, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1843, 'DG1-230404163045', 104, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1844, 'DG1-230404163045', 105, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1845, 'DG1-230404163045', 106, 5, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1846, 'DG1-230404163045', 94, 35, '2023-04-04 09:31:53', '2023-04-04 09:31:53'),
(1847, 'DG1-230404163045', 85, 65, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1848, 'DG1-230404163045', 110, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1849, 'DG1-230404163045', 111, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1850, 'DG1-230404163045', 112, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1851, 'DG1-230404163045', 113, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1852, 'DG1-230404163045', 114, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1853, 'DG1-230404163045', 108, 25, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1854, 'DG1-230404163045', 117, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1855, 'DG1-230404163045', 118, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1856, 'DG1-230404163045', 124, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1857, 'DG1-230404163045', 125, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1858, 'DG1-230404163045', 126, 5, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1859, 'DG1-230404163045', 115, 25, '2023-04-04 09:32:02', '2023-04-04 09:32:02'),
(1860, 'DG1-230404163045', 107, 50, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1861, 'DG1-230404163045', 130, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1862, 'DG1-230404163045', 131, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1863, 'DG1-230404163045', 132, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1864, 'DG1-230404163045', 133, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1865, 'DG1-230404163045', 134, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1866, 'DG1-230404163045', 135, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1867, 'DG1-230404163045', 136, 5, '2023-04-04 09:32:14', '2023-04-04 09:32:14'),
(1868, 'DG1-230404163613', 38, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1869, 'DG1-230404163613', 39, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1870, 'DG1-230404163613', 40, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1871, 'DG1-230404163613', 42, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1872, 'DG1-230404163613', 43, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1873, 'DG1-230404163613', 46, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1874, 'DG1-230404163613', 47, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1875, 'DG1-230404163613', 48, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1876, 'DG1-230404163613', 49, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1877, 'DG1-230404163613', 52, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1878, 'DG1-230404163613', 53, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1879, 'DG1-230404163613', 54, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1880, 'DG1-230404163613', 55, 5, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1881, 'DG1-230404163613', 50, 20, '2023-04-04 09:36:24', '2023-04-04 09:36:24'),
(1882, 'DG1-230404163613', 35, 65, '2023-04-04 09:36:37', '2023-04-04 09:36:37'),
(1883, 'DG1-230404163613', 59, 25, '2023-04-04 09:36:37', '2023-04-04 09:36:37'),
(1884, 'DG1-230404163613', 57, 25, '2023-04-04 09:36:37', '2023-04-04 09:36:37'),
(1885, 'DG1-230404163613', 56, 25, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1886, 'DG1-230404163613', 63, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1887, 'DG1-230404163613', 65, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1888, 'DG1-230404163613', 61, 10, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1889, 'DG1-230404163613', 68, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1890, 'DG1-230404163613', 69, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1891, 'DG1-230404163613', 70, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1892, 'DG1-230404163613', 71, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1893, 'DG1-230404163613', 72, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1894, 'DG1-230404163613', 74, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1895, 'DG1-230404163613', 75, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1896, 'DG1-230404163613', 76, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1897, 'DG1-230404163613', 77, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1898, 'DG1-230404163613', 78, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1899, 'DG1-230404163613', 79, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1900, 'DG1-230404163613', 81, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1901, 'DG1-230404163613', 82, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1902, 'DG1-230404163613', 83, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1903, 'DG1-230404163613', 84, 5, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1904, 'DG1-230404163613', 66, 75, '2023-04-04 09:37:08', '2023-04-04 09:37:08'),
(1905, 'DG1-230404163745', 38, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1906, 'DG1-230404163745', 39, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1907, 'DG1-230404163745', 40, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1908, 'DG1-230404163745', 42, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1909, 'DG1-230404163745', 43, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1910, 'DG1-230404163745', 46, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1911, 'DG1-230404163745', 47, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1912, 'DG1-230404163745', 48, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1913, 'DG1-230404163745', 49, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1914, 'DG1-230404163745', 52, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1915, 'DG1-230404163745', 53, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1916, 'DG1-230404163745', 54, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1917, 'DG1-230404163745', 55, 5, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1918, 'DG1-230404163745', 50, 20, '2023-04-04 09:37:58', '2023-04-04 09:37:58'),
(1919, 'DG1-230404163745', 35, 65, '2023-04-04 09:38:13', '2023-04-04 09:38:13'),
(1920, 'DG1-230404163745', 59, 25, '2023-04-04 09:38:13', '2023-04-04 09:38:13'),
(1921, 'DG1-230404163745', 57, 25, '2023-04-04 09:38:13', '2023-04-04 09:38:13'),
(1922, 'DG1-230404163745', 56, 25, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1923, 'DG1-230404163745', 63, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1924, 'DG1-230404163745', 65, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1925, 'DG1-230404163745', 61, 10, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1926, 'DG1-230404163745', 68, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1927, 'DG1-230404163745', 69, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1928, 'DG1-230404163745', 70, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1929, 'DG1-230404163745', 71, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1930, 'DG1-230404163745', 72, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1931, 'DG1-230404163745', 74, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1932, 'DG1-230404163745', 75, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1933, 'DG1-230404163745', 76, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1934, 'DG1-230404163745', 77, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1935, 'DG1-230404163745', 78, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1936, 'DG1-230404163745', 79, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1937, 'DG1-230404163745', 81, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1938, 'DG1-230404163745', 82, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1939, 'DG1-230404163745', 83, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1940, 'DG1-230404163745', 84, 5, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1941, 'DG1-230404163745', 66, 75, '2023-04-04 09:38:30', '2023-04-04 09:38:30'),
(1942, 'DG1-230404163745', 60, 85, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1943, 'DG1-230404163745', 88, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1944, 'DG1-230404163745', 89, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1945, 'DG1-230404163745', 90, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1946, 'DG1-230404163745', 91, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1947, 'DG1-230404163745', 92, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1948, 'DG1-230404163745', 93, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1949, 'DG1-230404163745', 86, 30, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1950, 'DG1-230404163745', 96, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1951, 'DG1-230404163745', 100, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1952, 'DG1-230404163745', 101, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1953, 'DG1-230404163745', 103, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1954, 'DG1-230404163745', 104, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1955, 'DG1-230404163745', 105, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1956, 'DG1-230404163745', 106, 5, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1957, 'DG1-230404163745', 94, 35, '2023-04-04 09:38:51', '2023-04-04 09:38:51'),
(1958, 'DG1-230404163745', 85, 65, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1959, 'DG1-230404163745', 110, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1960, 'DG1-230404163745', 111, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1961, 'DG1-230404163745', 112, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1962, 'DG1-230404163745', 113, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1963, 'DG1-230404163745', 114, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1964, 'DG1-230404163745', 108, 25, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1965, 'DG1-230404163745', 117, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1966, 'DG1-230404163745', 118, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1967, 'DG1-230404163745', 124, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1968, 'DG1-230404163745', 125, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1969, 'DG1-230404163745', 126, 5, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1970, 'DG1-230404163745', 115, 25, '2023-04-04 09:39:22', '2023-04-04 09:39:22'),
(1971, 'DG1-230404163745', 107, 50, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1972, 'DG1-230404163745', 130, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1973, 'DG1-230404163745', 131, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1974, 'DG1-230404163745', 132, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1975, 'DG1-230404163745', 133, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1976, 'DG1-230404163745', 134, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1977, 'DG1-230404163745', 135, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1978, 'DG1-230404163745', 136, 5, '2023-04-04 09:39:57', '2023-04-04 09:39:57'),
(1979, 'DG1-230404164025', 38, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1980, 'DG1-230404164025', 39, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1981, 'DG1-230404164025', 40, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1982, 'DG1-230404164025', 42, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1983, 'DG1-230404164025', 43, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1984, 'DG1-230404164025', 46, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1985, 'DG1-230404164025', 47, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1986, 'DG1-230404164025', 48, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1987, 'DG1-230404164025', 49, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1988, 'DG1-230404164025', 52, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1989, 'DG1-230404164025', 53, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1990, 'DG1-230404164025', 54, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1991, 'DG1-230404164025', 55, 5, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1992, 'DG1-230404164025', 50, 20, '2023-04-04 09:40:47', '2023-04-04 09:40:47'),
(1993, 'DG1-230404164025', 35, 65, '2023-04-04 09:40:53', '2023-04-04 09:40:53'),
(1994, 'DG1-230404164025', 59, 25, '2023-04-04 09:40:53', '2023-04-04 09:40:53'),
(1995, 'DG1-230404164025', 57, 25, '2023-04-04 09:40:53', '2023-04-04 09:40:53'),
(1996, 'DG1-230404164025', 56, 25, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(1997, 'DG1-230404164025', 63, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(1998, 'DG1-230404164025', 65, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(1999, 'DG1-230404164025', 61, 10, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2000, 'DG1-230404164025', 68, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2001, 'DG1-230404164025', 69, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2002, 'DG1-230404164025', 70, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2003, 'DG1-230404164025', 71, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2004, 'DG1-230404164025', 72, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2005, 'DG1-230404164025', 74, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2006, 'DG1-230404164025', 75, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2007, 'DG1-230404164025', 76, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2008, 'DG1-230404164025', 77, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2009, 'DG1-230404164025', 78, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2010, 'DG1-230404164025', 79, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2011, 'DG1-230404164025', 81, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2012, 'DG1-230404164025', 82, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2013, 'DG1-230404164025', 83, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2014, 'DG1-230404164025', 84, 5, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2015, 'DG1-230404164025', 66, 70, '2023-04-04 09:41:48', '2023-04-04 09:41:48'),
(2016, 'DG1-230404164025', 60, 80, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2017, 'DG1-230404164025', 88, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2018, 'DG1-230404164025', 89, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2019, 'DG1-230404164025', 90, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2020, 'DG1-230404164025', 91, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2021, 'DG1-230404164025', 92, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2022, 'DG1-230404164025', 93, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2023, 'DG1-230404164025', 86, 30, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2024, 'DG1-230404164025', 96, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2025, 'DG1-230404164025', 100, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2026, 'DG1-230404164025', 101, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2027, 'DG1-230404164025', 103, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2028, 'DG1-230404164025', 104, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2029, 'DG1-230404164025', 105, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2030, 'DG1-230404164025', 106, 5, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2031, 'DG1-230404164025', 94, 35, '2023-04-04 09:42:03', '2023-04-04 09:42:03'),
(2032, 'DG1-230404164025', 85, 65, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2033, 'DG1-230404164025', 110, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2034, 'DG1-230404164025', 111, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2035, 'DG1-230404164025', 112, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2036, 'DG1-230404164025', 113, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2037, 'DG1-230404164025', 114, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2038, 'DG1-230404164025', 108, 25, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2039, 'DG1-230404164025', 117, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2040, 'DG1-230404164025', 118, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2041, 'DG1-230404164025', 124, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2042, 'DG1-230404164025', 125, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2043, 'DG1-230404164025', 126, 5, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2044, 'DG1-230404164025', 115, 25, '2023-04-04 09:42:12', '2023-04-04 09:42:12'),
(2045, 'DG1-230404164025', 107, 50, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2046, 'DG1-230404164025', 130, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2047, 'DG1-230404164025', 131, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2048, 'DG1-230404164025', 132, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2049, 'DG1-230404164025', 133, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2050, 'DG1-230404164025', 134, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2051, 'DG1-230404164025', 135, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2052, 'DG1-230404164025', 136, 5, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2053, 'DG1-230404164025', 127, 35, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2054, 'DG1-230404164025', 128, 35, '2023-04-04 09:42:22', '2023-04-04 09:42:22'),
(2055, 'DG1-230405145055', 35, 0, '2023-04-05 07:50:57', '2023-04-05 07:50:57'),
(2056, 'DG1-230405145055', 56, 0, '2023-04-05 07:50:58', '2023-04-05 07:50:58'),
(2057, 'DG1-230405145055', 60, 0, '2023-04-05 07:51:18', '2023-04-05 07:51:18'),
(2058, 'DG1-230405145055', 85, 0, '2023-04-05 07:51:20', '2023-04-05 07:51:20'),
(2059, 'DG1-230405145318', 35, 0, '2023-04-05 07:53:23', '2023-04-05 07:53:23'),
(2060, 'DG1-230405145318', 56, 0, '2023-04-05 07:53:23', '2023-04-05 07:53:23'),
(2061, 'DG1-230405145318', 60, 0, '2023-04-05 07:53:24', '2023-04-05 07:53:24'),
(2062, 'DG1-230405145318', 85, 0, '2023-04-05 07:53:24', '2023-04-05 07:53:24'),
(2063, 'DG1-230405145318', 107, 0, '2023-04-05 07:53:24', '2023-04-05 07:53:24'),
(2064, 'DG1-230405150121', 38, 5, '2023-04-05 08:01:35', '2023-04-05 08:01:35'),
(2065, 'DG1-230405150234', 38, 5, '2023-04-05 08:02:45', '2023-04-05 08:02:45'),
(2066, 'DG1-230405150234', 38, 5, '2023-04-05 08:02:49', '2023-04-05 08:02:49'),
(2067, 'DG1-230405150234', 38, 5, '2023-04-05 08:02:56', '2023-04-05 08:02:56'),
(2068, 'DG1-230405150234', 38, 5, '2023-04-05 08:02:57', '2023-04-05 08:02:57'),
(2069, 'DG1-230405150234', 38, 5, '2023-04-05 08:03:11', '2023-04-05 08:03:11'),
(2070, 'DG1-230405150234', 38, 5, '2023-04-05 08:03:27', '2023-04-05 08:03:27'),
(2071, 'DG1-230405150234', 38, 5, '2023-04-05 08:04:22', '2023-04-05 08:04:22'),
(2072, 'DG1-230405150426', 38, 5, '2023-04-05 08:05:18', '2023-04-05 08:05:18'),
(2073, 'DG1-230405150609', 38, 5, '2023-04-05 08:06:44', '2023-04-05 08:06:44'),
(2074, 'DG1-230405151827', 38, 5, '2023-04-05 08:18:40', '2023-04-05 08:18:40'),
(2075, 'DG1-230405151849', 38, 5, '2023-04-05 08:19:04', '2023-04-05 08:19:04'),
(2076, 'DG1-230405151915', 38, 5, '2023-04-05 08:19:22', '2023-04-05 08:19:22'),
(2077, 'DG1-230405151915', 38, 5, '2023-04-05 08:19:31', '2023-04-05 08:19:31'),
(2078, 'DG1-230405151915', 38, 5, '2023-04-05 08:19:46', '2023-04-05 08:19:46'),
(2079, 'DG1-230405152025', 38, 5, '2023-04-05 08:20:28', '2023-04-05 08:20:28'),
(2080, 'DG1-230405152025', 38, 5, '2023-04-05 08:20:34', '2023-04-05 08:20:34'),
(2081, 'DG1-230405152123', 38, 5, '2023-04-05 08:21:27', '2023-04-05 08:21:27'),
(2082, 'DG1-230405152123', 38, 5, '2023-04-05 08:21:33', '2023-04-05 08:21:33'),
(2083, 'DG1-230405152136', 38, 5, '2023-04-05 08:21:48', '2023-04-05 08:21:48'),
(2084, 'DG1-230405152136', 38, 5, '2023-04-05 08:21:50', '2023-04-05 08:21:50'),
(2085, 'DG1-230405152136', 38, 5, '2023-04-05 08:22:10', '2023-04-05 08:22:10'),
(2086, 'DG1-230405152217', 38, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2087, 'DG1-230405152217', 39, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2088, 'DG1-230405152217', 40, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2089, 'DG1-230405152217', 42, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2090, 'DG1-230405152217', 43, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2091, 'DG1-230405152217', 46, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2092, 'DG1-230405152217', 47, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2093, 'DG1-230405152217', 48, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2094, 'DG1-230405152217', 49, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2095, 'DG1-230405152217', 52, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2096, 'DG1-230405152217', 53, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2097, 'DG1-230405152217', 54, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2098, 'DG1-230405152217', 55, 5, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2099, 'DG1-230405152217', 35, 65, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2100, 'DG1-230405152217', 50, 20, '2023-04-05 08:23:20', '2023-04-05 08:23:20'),
(2101, 'DG1-230405152217', 59, 25, '2023-04-05 08:23:32', '2023-04-05 08:23:32'),
(2102, 'DG1-230405152217', 56, 25, '2023-04-05 08:23:32', '2023-04-05 08:23:32'),
(2103, 'DG1-230405152217', 57, 25, '2023-04-05 08:23:32', '2023-04-05 08:23:32'),
(2104, 'DG1-230405152217', 60, 0, '2023-04-05 08:24:55', '2023-04-05 08:24:55'),
(2105, 'DG1-230406091504', 35, 0, '2023-04-06 02:15:35', '2023-04-06 02:15:35'),
(2106, 'DG1-230406091504', 56, 0, '2023-04-06 02:15:37', '2023-04-06 02:15:37'),
(2107, 'DG1-230406091504', 60, 0, '2023-04-06 02:15:38', '2023-04-06 02:15:38'),
(2108, 'DG1-230406091504', 85, 0, '2023-04-06 02:15:39', '2023-04-06 02:15:39'),
(2109, 'DG1-230406091504', 107, 0, '2023-04-06 02:16:09', '2023-04-06 02:16:09'),
(2110, 'DG1-230406093456', 35, 0, '2023-04-06 02:35:59', '2023-04-06 02:35:59'),
(2111, 'DG1-230406095125', 35, 0, '2023-04-06 02:53:19', '2023-04-06 02:53:19'),
(2112, 'DG1-230406095125', 56, 0, '2023-04-06 02:53:26', '2023-04-06 02:53:26'),
(2113, 'DG1-230406095125', 60, 0, '2023-04-06 02:56:00', '2023-04-06 02:56:00'),
(2114, 'DG1-230406095125', 85, 0, '2023-04-06 02:56:09', '2023-04-06 02:56:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu2_diem`
--

CREATE TABLE `phieu2_diem` (
  `id` int(11) NOT NULL,
  `Phieu_id` varchar(16) NOT NULL,
  `CauHoi_id` int(11) NOT NULL,
  `DanhGia` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phieu2_diem`
--

INSERT INTO `phieu2_diem` (`id`, `Phieu_id`, `CauHoi_id`, `DanhGia`, `updated_at`, `created_at`) VALUES
(785, 'DG2-230403155851', 4, 3, '2023-04-03 09:02:20', '2023-04-03 09:02:12'),
(786, 'DG2-230403155851', 5, 3, '2023-04-03 09:02:55', '2023-04-03 09:02:12'),
(787, 'DG2-230403155851', 6, 4, '2023-04-03 09:02:55', '2023-04-03 09:02:12'),
(788, 'DG2-230403155851', 7, 4, '2023-04-03 09:02:55', '2023-04-03 09:02:12'),
(789, 'DG2-230403155851', 8, 5, '2023-04-03 09:02:55', '2023-04-03 09:02:12'),
(790, 'DG2-230403155851', 20, 2, '2023-04-03 09:03:12', '2023-04-03 09:03:12'),
(791, 'DG2-230403155851', 21, 3, '2023-04-03 09:03:12', '2023-04-03 09:03:12'),
(792, 'DG2-230403155851', 22, 3, '2023-04-03 09:03:12', '2023-04-03 09:03:12'),
(793, 'DG2-230403155851', 23, 3, '2023-04-03 09:03:12', '2023-04-03 09:03:12'),
(794, 'DG2-230403155851', 24, 3, '2023-04-03 09:03:12', '2023-04-03 09:03:12'),
(795, 'DG2-230403155851', 26, 3, '2023-04-03 09:03:15', '2023-04-03 09:03:15'),
(796, 'DG2-230403155851', 27, 2, '2023-04-03 09:03:15', '2023-04-03 09:03:15'),
(797, 'DG2-230403155851', 28, 3, '2023-04-03 09:03:15', '2023-04-03 09:03:15'),
(798, 'DG2-230403155851', 29, 3, '2023-04-03 09:03:15', '2023-04-03 09:03:15'),
(799, 'DG2-230403155851', 30, 3, '2023-04-03 09:03:15', '2023-04-03 09:03:15'),
(800, 'DG2-230403155851', 32, 3, '2023-04-03 09:03:18', '2023-04-03 09:03:18'),
(801, 'DG2-230403155851', 33, 3, '2023-04-03 09:03:18', '2023-04-03 09:03:18'),
(802, 'DG2-230403155851', 34, 3, '2023-04-03 09:03:18', '2023-04-03 09:03:18'),
(803, 'DG2-230403155851', 35, 3, '2023-04-03 09:03:18', '2023-04-03 09:03:18'),
(804, 'DG2-230403155851', 36, 3, '2023-04-03 09:03:18', '2023-04-03 09:03:18'),
(805, 'DG2-230403155851', 38, 3, '2023-04-03 09:03:20', '2023-04-03 09:03:20'),
(806, 'DG2-230403155851', 39, 3, '2023-04-03 09:03:20', '2023-04-03 09:03:20'),
(807, 'DG2-230403155851', 40, 3, '2023-04-03 09:03:20', '2023-04-03 09:03:20'),
(808, 'DG2-230403155851', 43, 3, '2023-04-03 09:03:28', '2023-04-03 09:03:28'),
(809, 'DG2-230403155851', 44, 3, '2023-04-03 09:03:28', '2023-04-03 09:03:28'),
(810, 'DG2-230403155851', 45, 2, '2023-04-03 09:03:28', '2023-04-03 09:03:28'),
(811, 'DG2-230403155851', 46, 3, '2023-04-03 09:03:28', '2023-04-03 09:03:28'),
(812, 'DG2-230403155851', 47, 3, '2023-04-03 09:03:28', '2023-04-03 09:03:28'),
(813, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:39', '2023-04-03 09:04:39'),
(814, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:39', '2023-04-03 09:04:39'),
(815, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:39', '2023-04-03 09:04:39'),
(816, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:39', '2023-04-03 09:04:39'),
(817, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:39', '2023-04-03 09:04:39'),
(818, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(819, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(820, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(821, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(822, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(823, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(824, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(825, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(826, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:41', '2023-04-03 09:04:41'),
(827, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(828, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(829, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(830, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(831, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(832, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(833, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(834, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(835, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(836, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(837, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(838, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(839, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(840, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:44', '2023-04-03 09:04:44'),
(841, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(842, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(843, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(844, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(845, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(846, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(847, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(848, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(849, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(850, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(851, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(852, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(853, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(854, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(855, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(856, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(857, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(858, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(859, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:47', '2023-04-03 09:04:47'),
(860, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(861, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(862, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(863, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(864, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(865, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:49', '2023-04-03 09:04:49'),
(866, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(867, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(868, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(869, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(870, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(871, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(872, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(873, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(874, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(875, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(876, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(877, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(878, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(879, 'DG2-230403160429', 38, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(880, 'DG2-230403160429', 39, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(881, 'DG2-230403160429', 40, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(882, 'DG2-230403160429', 41, 3, '2023-04-03 09:04:50', '2023-04-03 09:04:50'),
(883, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(884, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(885, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(886, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(887, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(888, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(889, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(890, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(891, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(892, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(893, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(894, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(895, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(896, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(897, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(898, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(899, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(900, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(901, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(902, 'DG2-230403160429', 38, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(903, 'DG2-230403160429', 39, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(904, 'DG2-230403160429', 40, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(905, 'DG2-230403160429', 41, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(906, 'DG2-230403160429', 43, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(907, 'DG2-230403160429', 44, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(908, 'DG2-230403160429', 45, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(909, 'DG2-230403160429', 46, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(910, 'DG2-230403160429', 47, 3, '2023-04-03 09:04:54', '2023-04-03 09:04:54'),
(911, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(912, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(913, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(914, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(915, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(916, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(917, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(918, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(919, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(920, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(921, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(922, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(923, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(924, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(925, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(926, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(927, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(928, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(929, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(930, 'DG2-230403160429', 38, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(931, 'DG2-230403160429', 39, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(932, 'DG2-230403160429', 40, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(933, 'DG2-230403160429', 41, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(934, 'DG2-230403160429', 43, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(935, 'DG2-230403160429', 44, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(936, 'DG2-230403160429', 45, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(937, 'DG2-230403160429', 46, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(938, 'DG2-230403160429', 47, 3, '2023-04-03 09:04:55', '2023-04-03 09:04:55'),
(939, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(940, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(941, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(942, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(943, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(944, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(945, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(946, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(947, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(948, 'DG2-230403160429', 24, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(949, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(950, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(951, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(952, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(953, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(954, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(955, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(956, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(957, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(958, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(959, 'DG2-230403160429', 38, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(960, 'DG2-230403160429', 39, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(961, 'DG2-230403160429', 40, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(962, 'DG2-230403160429', 41, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(963, 'DG2-230403160429', 43, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(964, 'DG2-230403160429', 44, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(965, 'DG2-230403160429', 45, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(966, 'DG2-230403160429', 46, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(967, 'DG2-230403160429', 47, 3, '2023-04-03 09:04:57', '2023-04-03 09:04:57'),
(968, 'DG2-230403160429', 4, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(969, 'DG2-230403160429', 5, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(970, 'DG2-230403160429', 6, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(971, 'DG2-230403160429', 7, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(972, 'DG2-230403160429', 8, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(973, 'DG2-230403160429', 20, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(974, 'DG2-230403160429', 21, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(975, 'DG2-230403160429', 22, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(976, 'DG2-230403160429', 23, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(977, 'DG2-230403160429', 24, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(978, 'DG2-230403160429', 26, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(979, 'DG2-230403160429', 27, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(980, 'DG2-230403160429', 28, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(981, 'DG2-230403160429', 29, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(982, 'DG2-230403160429', 30, 2, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(983, 'DG2-230403160429', 32, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(984, 'DG2-230403160429', 33, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(985, 'DG2-230403160429', 34, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(986, 'DG2-230403160429', 35, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(987, 'DG2-230403160429', 36, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(988, 'DG2-230403160429', 38, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(989, 'DG2-230403160429', 39, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(990, 'DG2-230403160429', 40, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(991, 'DG2-230403160429', 41, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(992, 'DG2-230403160429', 43, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(993, 'DG2-230403160429', 44, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(994, 'DG2-230403160429', 45, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(995, 'DG2-230403160429', 46, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(996, 'DG2-230403160429', 47, 3, '2023-04-03 09:04:59', '2023-04-03 09:04:59'),
(997, 'DG2-230403160429', 4, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(998, 'DG2-230403160429', 5, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(999, 'DG2-230403160429', 6, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1000, 'DG2-230403160429', 7, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1001, 'DG2-230403160429', 8, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1002, 'DG2-230403160429', 20, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1003, 'DG2-230403160429', 21, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1004, 'DG2-230403160429', 22, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1005, 'DG2-230403160429', 23, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1006, 'DG2-230403160429', 24, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1007, 'DG2-230403160429', 26, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1008, 'DG2-230403160429', 27, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1009, 'DG2-230403160429', 28, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1010, 'DG2-230403160429', 29, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1011, 'DG2-230403160429', 30, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1012, 'DG2-230403160429', 32, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1013, 'DG2-230403160429', 33, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1014, 'DG2-230403160429', 34, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1015, 'DG2-230403160429', 35, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1016, 'DG2-230403160429', 36, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1017, 'DG2-230403160429', 38, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1018, 'DG2-230403160429', 39, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1019, 'DG2-230403160429', 40, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1020, 'DG2-230403160429', 41, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1021, 'DG2-230403160429', 43, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1022, 'DG2-230403160429', 44, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1023, 'DG2-230403160429', 45, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1024, 'DG2-230403160429', 46, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1025, 'DG2-230403160429', 47, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1026, 'DG2-230403160429', 4, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1027, 'DG2-230403160429', 5, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1028, 'DG2-230403160429', 6, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1029, 'DG2-230403160429', 7, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1030, 'DG2-230403160429', 8, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1031, 'DG2-230403160429', 20, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1032, 'DG2-230403160429', 21, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1033, 'DG2-230403160429', 22, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1034, 'DG2-230403160429', 23, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1035, 'DG2-230403160429', 24, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1036, 'DG2-230403160429', 26, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1037, 'DG2-230403160429', 27, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1038, 'DG2-230403160429', 28, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1039, 'DG2-230403160429', 29, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1040, 'DG2-230403160429', 30, 2, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1041, 'DG2-230403160429', 32, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1042, 'DG2-230403160429', 33, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1043, 'DG2-230403160429', 34, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1044, 'DG2-230403160429', 35, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1045, 'DG2-230403160429', 36, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1046, 'DG2-230403160429', 38, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1047, 'DG2-230403160429', 39, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1048, 'DG2-230403160429', 40, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1049, 'DG2-230403160429', 41, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1050, 'DG2-230403160429', 43, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1051, 'DG2-230403160429', 44, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1052, 'DG2-230403160429', 45, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1053, 'DG2-230403160429', 46, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1054, 'DG2-230403160429', 47, 3, '2023-04-03 09:05:00', '2023-04-03 09:05:00'),
(1055, 'DG2-230403160429', 4, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1056, 'DG2-230403160429', 5, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1057, 'DG2-230403160429', 6, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1058, 'DG2-230403160429', 7, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1059, 'DG2-230403160429', 8, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1060, 'DG2-230403160429', 20, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1061, 'DG2-230403160429', 21, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1062, 'DG2-230403160429', 22, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1063, 'DG2-230403160429', 23, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1064, 'DG2-230403160429', 24, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1065, 'DG2-230403160429', 26, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1066, 'DG2-230403160429', 27, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1067, 'DG2-230403160429', 28, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1068, 'DG2-230403160429', 29, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1069, 'DG2-230403160429', 30, 2, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1070, 'DG2-230403160429', 32, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1071, 'DG2-230403160429', 33, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1072, 'DG2-230403160429', 34, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1073, 'DG2-230403160429', 35, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1074, 'DG2-230403160429', 36, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1075, 'DG2-230403160429', 38, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1076, 'DG2-230403160429', 39, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1077, 'DG2-230403160429', 40, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1078, 'DG2-230403160429', 41, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1079, 'DG2-230403160429', 43, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1080, 'DG2-230403160429', 44, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1081, 'DG2-230403160429', 45, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1082, 'DG2-230403160429', 46, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1083, 'DG2-230403160429', 47, 3, '2023-04-03 09:05:02', '2023-04-03 09:05:02'),
(1084, 'DG2-230403160429', 4, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1085, 'DG2-230403160429', 5, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1086, 'DG2-230403160429', 6, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1087, 'DG2-230403160429', 7, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1088, 'DG2-230403160429', 8, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1089, 'DG2-230403160429', 20, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1090, 'DG2-230403160429', 21, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1091, 'DG2-230403160429', 22, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1092, 'DG2-230403160429', 23, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1093, 'DG2-230403160429', 24, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1094, 'DG2-230403160429', 26, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1095, 'DG2-230403160429', 27, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1096, 'DG2-230403160429', 28, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1097, 'DG2-230403160429', 29, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1098, 'DG2-230403160429', 30, 2, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1099, 'DG2-230403160429', 32, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1100, 'DG2-230403160429', 33, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1101, 'DG2-230403160429', 34, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1102, 'DG2-230403160429', 35, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1103, 'DG2-230403160429', 36, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1104, 'DG2-230403160429', 38, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1105, 'DG2-230403160429', 39, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1106, 'DG2-230403160429', 40, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1107, 'DG2-230403160429', 41, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1108, 'DG2-230403160429', 43, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1109, 'DG2-230403160429', 44, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1110, 'DG2-230403160429', 45, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1111, 'DG2-230403160429', 46, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1112, 'DG2-230403160429', 47, 3, '2023-04-03 09:05:04', '2023-04-03 09:05:04'),
(1113, 'DG2-230403160653', 4, 2, '2023-04-03 09:06:57', '2023-04-03 09:06:57'),
(1114, 'DG2-230403160653', 5, 2, '2023-04-03 09:06:57', '2023-04-03 09:06:57'),
(1115, 'DG2-230403160653', 6, 2, '2023-04-03 09:06:57', '2023-04-03 09:06:57'),
(1116, 'DG2-230403160653', 7, 2, '2023-04-03 09:06:57', '2023-04-03 09:06:57'),
(1117, 'DG2-230403160653', 8, 2, '2023-04-03 09:06:57', '2023-04-03 09:06:57'),
(1118, 'DG2-230403160653', 4, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1119, 'DG2-230403160653', 5, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1120, 'DG2-230403160653', 6, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1121, 'DG2-230403160653', 7, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1122, 'DG2-230403160653', 8, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1123, 'DG2-230403160653', 20, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1124, 'DG2-230403160653', 21, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1125, 'DG2-230403160653', 22, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1126, 'DG2-230403160653', 23, 2, '2023-04-03 09:06:59', '2023-04-03 09:06:59'),
(1127, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1128, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1129, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1130, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1131, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1132, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1133, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1134, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1135, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1136, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1137, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1138, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1139, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1140, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:02', '2023-04-03 09:07:02'),
(1141, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1142, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1143, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1144, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1145, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1146, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1147, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1148, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1149, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1150, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1151, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1152, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1153, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1154, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1155, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1156, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1157, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1158, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1159, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:06', '2023-04-03 09:07:06'),
(1160, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1161, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1162, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1163, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1164, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1165, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1166, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1167, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1168, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1169, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1170, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1171, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1172, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1173, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1174, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1175, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1176, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1177, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1178, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1179, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1180, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1181, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1182, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:08', '2023-04-03 09:07:08'),
(1183, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1184, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1185, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1186, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1187, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1188, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1189, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1190, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1191, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1192, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1193, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1194, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1195, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1196, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1197, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1198, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1199, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1200, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1201, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1202, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1203, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1204, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1205, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1206, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1207, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1208, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1209, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1210, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:13', '2023-04-03 09:07:13'),
(1211, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1212, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1213, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1214, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1215, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1216, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1217, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1218, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1219, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1220, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1221, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1222, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1223, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1224, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1225, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1226, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1227, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1228, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1229, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1230, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1231, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1232, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1233, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1234, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1235, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1236, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1237, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1238, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:14', '2023-04-03 09:07:14'),
(1239, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1240, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1241, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1242, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1243, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1244, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1245, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1246, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1247, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1248, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1249, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1250, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1251, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1252, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1253, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1254, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1255, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1256, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1257, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1258, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1259, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1260, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1261, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1262, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1263, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1264, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1265, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1266, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1267, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:16', '2023-04-03 09:07:16'),
(1268, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1269, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1270, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1271, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1272, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1273, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1274, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1275, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1276, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1277, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1278, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1279, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1280, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1281, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1282, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1283, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1284, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1285, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1286, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1287, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1288, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1289, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1290, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1291, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1292, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1293, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1294, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1295, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1296, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:19', '2023-04-03 09:07:19'),
(1297, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1298, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1299, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1300, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1301, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1302, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1303, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1304, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1305, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1306, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1307, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1308, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1309, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1310, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1311, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1312, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1313, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1314, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1315, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1316, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1317, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1318, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1319, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1320, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1321, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1322, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1323, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1324, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1325, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1326, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1327, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1328, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1329, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1330, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1331, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1332, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1333, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1334, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1335, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1336, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:21', '2023-04-03 09:07:21'),
(1337, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1338, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1339, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1340, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1341, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1342, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1343, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1344, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1345, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1346, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1347, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1348, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1349, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1350, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1351, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1352, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1353, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1354, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:22', '2023-04-03 09:07:22'),
(1355, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1356, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1357, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1358, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1359, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1360, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1361, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1362, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1363, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1364, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1365, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1366, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1367, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1368, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1369, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1370, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1371, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1372, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1373, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1374, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1375, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1376, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1377, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1378, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1379, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1380, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1381, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1382, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1383, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:23', '2023-04-03 09:07:23'),
(1384, 'DG2-230403160653', 4, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1385, 'DG2-230403160653', 5, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1386, 'DG2-230403160653', 6, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1387, 'DG2-230403160653', 7, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1388, 'DG2-230403160653', 8, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1389, 'DG2-230403160653', 20, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1390, 'DG2-230403160653', 21, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1391, 'DG2-230403160653', 22, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1392, 'DG2-230403160653', 23, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1393, 'DG2-230403160653', 24, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1394, 'DG2-230403160653', 26, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1395, 'DG2-230403160653', 27, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1396, 'DG2-230403160653', 28, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1397, 'DG2-230403160653', 29, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1398, 'DG2-230403160653', 30, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1399, 'DG2-230403160653', 32, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1400, 'DG2-230403160653', 33, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1401, 'DG2-230403160653', 34, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1402, 'DG2-230403160653', 35, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1403, 'DG2-230403160653', 36, 2, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1404, 'DG2-230403160653', 38, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1405, 'DG2-230403160653', 39, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1406, 'DG2-230403160653', 40, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1407, 'DG2-230403160653', 41, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1408, 'DG2-230403160653', 43, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1409, 'DG2-230403160653', 44, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1410, 'DG2-230403160653', 45, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1411, 'DG2-230403160653', 46, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1412, 'DG2-230403160653', 47, 3, '2023-04-03 09:07:25', '2023-04-03 09:07:25'),
(1413, 'DG2-230403160747', 4, 2, '2023-04-03 09:07:51', '2023-04-03 09:07:51'),
(1414, 'DG2-230403160747', 5, 2, '2023-04-03 09:07:51', '2023-04-03 09:07:51'),
(1415, 'DG2-230403160747', 6, 2, '2023-04-03 09:07:51', '2023-04-03 09:07:51'),
(1416, 'DG2-230403160747', 7, 2, '2023-04-03 09:07:51', '2023-04-03 09:07:51'),
(1417, 'DG2-230403160747', 8, 2, '2023-04-03 09:07:51', '2023-04-03 09:07:51'),
(1418, 'DG2-230403160747', 4, 2, '2023-04-03 09:07:53', '2023-04-03 09:07:53'),
(1419, 'DG2-230403160747', 5, 2, '2023-04-03 09:07:53', '2023-04-03 09:07:53'),
(1420, 'DG2-230403160747', 6, 2, '2023-04-03 09:07:53', '2023-04-03 09:07:53');
INSERT INTO `phieu2_diem` (`id`, `Phieu_id`, `CauHoi_id`, `DanhGia`, `updated_at`, `created_at`) VALUES
(1421, 'DG2-230403160747', 7, 2, '2023-04-03 09:07:53', '2023-04-03 09:07:53'),
(1422, 'DG2-230403160747', 8, 2, '2023-04-03 09:07:53', '2023-04-03 09:07:53'),
(1423, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:06', '2023-04-03 09:08:06'),
(1424, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:06', '2023-04-03 09:08:06'),
(1425, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:06', '2023-04-03 09:08:06'),
(1426, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:06', '2023-04-03 09:08:06'),
(1427, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:06', '2023-04-03 09:08:06'),
(1428, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:08', '2023-04-03 09:08:08'),
(1429, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:08', '2023-04-03 09:08:08'),
(1430, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:08', '2023-04-03 09:08:08'),
(1431, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:08', '2023-04-03 09:08:08'),
(1432, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:08', '2023-04-03 09:08:08'),
(1433, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:12', '2023-04-03 09:08:12'),
(1434, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:12', '2023-04-03 09:08:12'),
(1435, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1436, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1437, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1438, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1439, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1440, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1441, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1442, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:13', '2023-04-03 09:08:13'),
(1443, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1444, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1445, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1446, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1447, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1448, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1449, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1450, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1451, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1452, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:14', '2023-04-03 09:08:14'),
(1453, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1454, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1455, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1456, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1457, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1458, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1459, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1460, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1461, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1462, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:15', '2023-04-03 09:08:15'),
(1463, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1464, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1465, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1466, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1467, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1468, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1469, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1470, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1471, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1472, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:16', '2023-04-03 09:08:16'),
(1473, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1474, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1475, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1476, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1477, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1478, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1479, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1480, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1481, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1482, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:18', '2023-04-03 09:08:18'),
(1483, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1484, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1485, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1486, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1487, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1488, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1489, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1490, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1491, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1492, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:20', '2023-04-03 09:08:20'),
(1493, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1494, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1495, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1496, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1497, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1498, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1499, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1500, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1501, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1502, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1503, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1504, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1505, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1506, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1507, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:23', '2023-04-03 09:08:23'),
(1508, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1509, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1510, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1511, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1512, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1513, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1514, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1515, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1516, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1517, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1518, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1519, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1520, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1521, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1522, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1523, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1524, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1525, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1526, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1527, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:28', '2023-04-03 09:08:28'),
(1528, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1529, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1530, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1531, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1532, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1533, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1534, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1535, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1536, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1537, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1538, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1539, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1540, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1541, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1542, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1543, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1544, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1545, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1546, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1547, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:29', '2023-04-03 09:08:29'),
(1548, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1549, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1550, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1551, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1552, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1553, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1554, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1555, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1556, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1557, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1558, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1559, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1560, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1561, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1562, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1563, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1564, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1565, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1566, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1567, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:31', '2023-04-03 09:08:31'),
(1568, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1569, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1570, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1571, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1572, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1573, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1574, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1575, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1576, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1577, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1578, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1579, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1580, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1581, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1582, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1583, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1584, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1585, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1586, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1587, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:45', '2023-04-03 09:08:45'),
(1588, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1589, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1590, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1591, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1592, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1593, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1594, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1595, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1596, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1597, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1598, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1599, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1600, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1601, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1602, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1603, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1604, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1605, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1606, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1607, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:51', '2023-04-03 09:08:51'),
(1608, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1609, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1610, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1611, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1612, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1613, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1614, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1615, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1616, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1617, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1618, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1619, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1620, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1621, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1622, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1623, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1624, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1625, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1626, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1627, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:55', '2023-04-03 09:08:55'),
(1628, 'DG2-230403160801', 4, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1629, 'DG2-230403160801', 5, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1630, 'DG2-230403160801', 6, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1631, 'DG2-230403160801', 7, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1632, 'DG2-230403160801', 8, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1633, 'DG2-230403160801', 20, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1634, 'DG2-230403160801', 21, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1635, 'DG2-230403160801', 22, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1636, 'DG2-230403160801', 23, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1637, 'DG2-230403160801', 24, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1638, 'DG2-230403160801', 26, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1639, 'DG2-230403160801', 27, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1640, 'DG2-230403160801', 28, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1641, 'DG2-230403160801', 29, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1642, 'DG2-230403160801', 30, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1643, 'DG2-230403160801', 38, 3, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1644, 'DG2-230403160801', 39, 3, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1645, 'DG2-230403160801', 40, 3, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1646, 'DG2-230403160801', 41, 3, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1647, 'DG2-230403160801', 43, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1648, 'DG2-230403160801', 44, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1649, 'DG2-230403160801', 45, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1650, 'DG2-230403160801', 46, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1651, 'DG2-230403160801', 47, 2, '2023-04-03 09:08:58', '2023-04-03 09:08:58'),
(1652, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1653, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1654, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1655, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1656, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1657, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1658, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1659, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1660, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1661, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1662, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1663, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1664, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1665, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1666, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1667, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1668, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1669, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1670, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1671, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1672, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1673, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1674, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1675, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:00', '2023-04-03 09:09:00'),
(1676, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1677, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1678, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1679, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1680, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1681, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1682, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1683, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1684, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1685, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1686, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1687, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1688, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1689, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1690, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1691, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1692, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1693, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1694, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1695, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1696, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1697, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1698, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1699, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:01', '2023-04-03 09:09:01'),
(1700, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1701, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1702, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1703, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1704, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1705, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1706, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1707, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1708, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1709, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1710, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1711, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1712, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1713, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1714, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1715, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1716, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1717, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1718, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1719, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1720, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1721, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1722, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1723, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:02', '2023-04-03 09:09:02'),
(1724, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1725, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1726, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1727, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1728, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1729, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1730, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1731, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1732, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1733, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1734, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1735, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1736, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1737, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1738, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1739, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1740, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1741, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1742, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1743, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1744, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1745, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1746, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1747, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1748, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1749, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1750, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1751, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1752, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:05', '2023-04-03 09:09:05'),
(1753, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1754, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1755, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1756, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1757, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1758, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1759, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1760, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1761, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1762, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1763, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1764, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1765, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1766, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1767, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1768, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1769, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1770, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1771, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1772, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1773, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1774, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1775, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1776, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1777, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1778, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1779, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1780, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1781, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:06', '2023-04-03 09:09:06'),
(1782, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1783, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1784, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1785, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1786, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1787, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1788, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1789, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1790, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1791, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1792, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1793, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1794, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1795, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1796, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1797, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1798, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1799, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1800, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1801, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1802, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1803, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1804, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1805, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1806, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1807, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1808, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1809, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1810, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:08', '2023-04-03 09:09:08'),
(1811, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1812, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1813, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1814, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1815, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1816, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1817, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1818, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1819, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1820, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1821, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1822, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1823, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1824, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1825, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1826, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1827, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1828, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1829, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1830, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1831, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1832, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1833, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1834, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1835, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1836, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1837, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1838, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1839, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:09', '2023-04-03 09:09:09'),
(1840, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1841, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1842, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1843, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1844, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1845, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1846, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1847, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1848, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1849, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1850, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1851, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1852, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1853, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1854, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1855, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1856, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1857, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1858, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1859, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1860, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1861, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1862, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1863, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1864, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1865, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1866, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1867, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1868, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:11', '2023-04-03 09:09:11'),
(1869, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1870, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1871, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1872, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1873, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1874, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1875, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1876, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1877, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1878, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1879, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1880, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1881, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1882, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1883, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1884, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1885, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1886, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1887, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1888, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1889, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1890, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1891, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1892, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1893, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1894, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1895, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1896, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1897, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:13', '2023-04-03 09:09:13'),
(1898, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1899, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1900, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1901, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1902, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1903, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1904, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1905, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1906, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1907, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1908, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1909, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1910, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1911, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1912, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1913, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1914, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1915, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1916, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1917, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1918, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1919, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1920, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1921, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1922, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1923, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1924, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1925, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1926, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:16', '2023-04-03 09:09:16'),
(1927, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1928, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1929, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1930, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1931, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1932, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1933, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1934, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1935, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1936, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1937, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1938, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1939, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1940, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1941, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1942, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1943, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1944, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1945, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1946, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1947, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1948, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1949, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1950, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1951, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1952, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1953, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1954, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1955, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:17', '2023-04-03 09:09:17'),
(1956, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1957, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1958, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1959, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1960, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1961, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1962, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1963, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1964, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1965, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1966, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1967, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1968, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1969, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1970, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1971, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1972, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1973, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1974, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1975, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1976, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1977, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1978, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1979, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1980, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1981, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1982, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1983, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1984, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:20', '2023-04-03 09:09:20'),
(1985, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1986, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1987, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1988, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1989, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1990, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1991, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1992, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1993, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1994, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1995, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1996, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1997, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1998, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(1999, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2000, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2001, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2002, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2003, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2004, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2005, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2006, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2007, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2008, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2009, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2010, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2011, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2012, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2013, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:44', '2023-04-03 09:09:44'),
(2014, 'DG2-230403160801', 4, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2015, 'DG2-230403160801', 5, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2016, 'DG2-230403160801', 6, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2017, 'DG2-230403160801', 7, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2018, 'DG2-230403160801', 8, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2019, 'DG2-230403160801', 20, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2020, 'DG2-230403160801', 21, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2021, 'DG2-230403160801', 22, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2022, 'DG2-230403160801', 23, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2023, 'DG2-230403160801', 24, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2024, 'DG2-230403160801', 26, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2025, 'DG2-230403160801', 27, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2026, 'DG2-230403160801', 28, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2027, 'DG2-230403160801', 29, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2028, 'DG2-230403160801', 30, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2029, 'DG2-230403160801', 32, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2030, 'DG2-230403160801', 33, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2031, 'DG2-230403160801', 34, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2032, 'DG2-230403160801', 35, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2033, 'DG2-230403160801', 36, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2034, 'DG2-230403160801', 38, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2035, 'DG2-230403160801', 39, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2036, 'DG2-230403160801', 40, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2037, 'DG2-230403160801', 41, 3, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2038, 'DG2-230403160801', 43, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2039, 'DG2-230403160801', 44, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2040, 'DG2-230403160801', 45, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2041, 'DG2-230403160801', 46, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2042, 'DG2-230403160801', 47, 2, '2023-04-03 09:09:45', '2023-04-03 09:09:45'),
(2043, 'DG2-230403161048', 4, 2, '2023-04-03 09:10:52', '2023-04-03 09:10:52'),
(2044, 'DG2-230403161048', 5, 2, '2023-04-03 09:10:52', '2023-04-03 09:10:52'),
(2045, 'DG2-230403161048', 6, 2, '2023-04-03 09:10:52', '2023-04-03 09:10:52'),
(2046, 'DG2-230403161048', 7, 2, '2023-04-03 09:10:52', '2023-04-03 09:10:52'),
(2047, 'DG2-230403161048', 8, 2, '2023-04-03 09:10:52', '2023-04-03 09:10:52'),
(2048, 'DG2-230403161048', 20, 2, '2023-04-03 09:10:58', '2023-04-03 09:10:58'),
(2049, 'DG2-230403161048', 21, 2, '2023-04-03 09:10:58', '2023-04-03 09:10:58'),
(2050, 'DG2-230403161048', 22, 2, '2023-04-03 09:10:58', '2023-04-03 09:10:58'),
(2051, 'DG2-230403161048', 23, 2, '2023-04-03 09:10:58', '2023-04-03 09:10:58'),
(2052, 'DG2-230403161048', 24, 2, '2023-04-03 09:10:58', '2023-04-03 09:10:58'),
(2053, 'DG2-230403161048', 26, 2, '2023-04-03 09:11:01', '2023-04-03 09:11:01');
INSERT INTO `phieu2_diem` (`id`, `Phieu_id`, `CauHoi_id`, `DanhGia`, `updated_at`, `created_at`) VALUES
(2054, 'DG2-230403161048', 27, 2, '2023-04-03 09:11:01', '2023-04-03 09:11:01'),
(2055, 'DG2-230403161048', 28, 2, '2023-04-03 09:11:01', '2023-04-03 09:11:01'),
(2056, 'DG2-230403161048', 29, 2, '2023-04-03 09:11:01', '2023-04-03 09:11:01'),
(2057, 'DG2-230403161048', 30, 2, '2023-04-03 09:11:01', '2023-04-03 09:11:01'),
(2058, 'DG2-230403161048', 43, 2, '2023-04-03 09:11:11', '2023-04-03 09:11:11'),
(2059, 'DG2-230403161048', 44, 2, '2023-04-03 09:11:11', '2023-04-03 09:11:11'),
(2060, 'DG2-230403161048', 45, 2, '2023-04-03 09:11:11', '2023-04-03 09:11:11'),
(2061, 'DG2-230403161048', 46, 2, '2023-04-03 09:11:11', '2023-04-03 09:11:11'),
(2062, 'DG2-230403161048', 47, 2, '2023-04-03 09:11:11', '2023-04-03 09:11:11'),
(2063, 'DG2-230403161048', 32, 2, '2023-04-03 09:11:31', '2023-04-03 09:11:31'),
(2064, 'DG2-230403161048', 33, 2, '2023-04-03 09:11:31', '2023-04-03 09:11:31'),
(2065, 'DG2-230403161048', 34, 2, '2023-04-03 09:11:31', '2023-04-03 09:11:31'),
(2066, 'DG2-230403161048', 35, 2, '2023-04-03 09:11:31', '2023-04-03 09:11:31'),
(2067, 'DG2-230403161048', 36, 2, '2023-04-03 09:11:31', '2023-04-03 09:11:31'),
(2068, 'DG2-230403161048', 38, 2, '2023-04-03 09:11:34', '2023-04-03 09:11:34'),
(2069, 'DG2-230403161048', 39, 2, '2023-04-03 09:11:34', '2023-04-03 09:11:34'),
(2070, 'DG2-230403161048', 40, 2, '2023-04-03 09:11:34', '2023-04-03 09:11:34'),
(2071, 'DG2-230403161048', 41, 2, '2023-04-03 09:11:34', '2023-04-03 09:11:34'),
(2072, 'DG2-230403161203', 4, 2, '2023-04-03 09:12:07', '2023-04-03 09:12:07'),
(2073, 'DG2-230403161203', 5, 2, '2023-04-03 09:12:07', '2023-04-03 09:12:07'),
(2074, 'DG2-230403161203', 6, 2, '2023-04-03 09:12:07', '2023-04-03 09:12:07'),
(2075, 'DG2-230403161203', 7, 2, '2023-04-03 09:12:07', '2023-04-03 09:12:07'),
(2076, 'DG2-230403161203', 8, 2, '2023-04-03 09:12:07', '2023-04-03 09:12:07'),
(2077, 'DG2-230403161227', 4, 3, '2023-04-03 09:12:32', '2023-04-03 09:12:32'),
(2078, 'DG2-230403161227', 5, 3, '2023-04-03 09:12:32', '2023-04-03 09:12:32'),
(2079, 'DG2-230403161227', 6, 2, '2023-04-03 09:12:32', '2023-04-03 09:12:32'),
(2080, 'DG2-230403161227', 7, 3, '2023-04-03 09:12:32', '2023-04-03 09:12:32'),
(2081, 'DG2-230403161227', 8, 3, '2023-04-03 09:12:32', '2023-04-03 09:12:32'),
(2082, 'DG2-230403161248', 4, 3, '2023-04-03 09:12:51', '2023-04-03 09:12:51'),
(2083, 'DG2-230403161248', 5, 2, '2023-04-03 09:12:51', '2023-04-03 09:12:51'),
(2084, 'DG2-230403161248', 6, 3, '2023-04-03 09:12:51', '2023-04-03 09:12:51'),
(2085, 'DG2-230403161248', 7, 2, '2023-04-03 09:12:51', '2023-04-03 09:12:51'),
(2086, 'DG2-230403161248', 8, 3, '2023-04-03 09:12:51', '2023-04-03 09:12:51'),
(2087, 'DG2-230403161248', 20, 2, '2023-04-03 09:12:54', '2023-04-03 09:12:54'),
(2088, 'DG2-230403161248', 21, 2, '2023-04-03 09:12:54', '2023-04-03 09:12:54'),
(2089, 'DG2-230403161248', 22, 2, '2023-04-03 09:12:54', '2023-04-03 09:12:54'),
(2090, 'DG2-230403161248', 23, 2, '2023-04-03 09:12:54', '2023-04-03 09:12:54'),
(2091, 'DG2-230403161248', 24, 2, '2023-04-03 09:12:54', '2023-04-03 09:12:54'),
(2092, 'DG2-230403161248', 26, 3, '2023-04-03 09:12:57', '2023-04-03 09:12:57'),
(2093, 'DG2-230403161248', 27, 2, '2023-04-03 09:12:57', '2023-04-03 09:12:57'),
(2094, 'DG2-230403161248', 28, 2, '2023-04-03 09:12:57', '2023-04-03 09:12:57'),
(2095, 'DG2-230403161248', 29, 2, '2023-04-03 09:12:57', '2023-04-03 09:12:57'),
(2096, 'DG2-230403161248', 30, 2, '2023-04-03 09:12:57', '2023-04-03 09:12:57'),
(2097, 'DG2-230403161248', 32, 3, '2023-04-03 09:13:00', '2023-04-03 09:13:00'),
(2098, 'DG2-230403161248', 33, 3, '2023-04-03 09:13:00', '2023-04-03 09:13:00'),
(2099, 'DG2-230403161248', 34, 2, '2023-04-03 09:13:00', '2023-04-03 09:13:00'),
(2100, 'DG2-230403161248', 35, 3, '2023-04-03 09:13:00', '2023-04-03 09:13:00'),
(2101, 'DG2-230403161248', 36, 3, '2023-04-03 09:13:00', '2023-04-03 09:13:00'),
(2102, 'DG2-230403161248', 38, 3, '2023-04-03 09:13:02', '2023-04-03 09:13:02'),
(2103, 'DG2-230403161248', 39, 3, '2023-04-03 09:13:02', '2023-04-03 09:13:02'),
(2104, 'DG2-230403161248', 40, 3, '2023-04-03 09:13:02', '2023-04-03 09:13:02'),
(2105, 'DG2-230403161248', 41, 3, '2023-04-03 09:13:02', '2023-04-03 09:13:02'),
(2106, 'DG2-230403161248', 43, 4, '2023-04-03 09:13:07', '2023-04-03 09:13:07'),
(2107, 'DG2-230403161248', 44, 3, '2023-04-03 09:13:07', '2023-04-03 09:13:07'),
(2108, 'DG2-230403161248', 45, 3, '2023-04-03 09:13:07', '2023-04-03 09:13:07'),
(2109, 'DG2-230403161248', 46, 3, '2023-04-03 09:13:07', '2023-04-03 09:13:07'),
(2110, 'DG2-230403161248', 47, 3, '2023-04-03 09:13:07', '2023-04-03 09:13:07'),
(2111, 'DG2-230403161442', 4, 1, '2023-04-03 09:14:48', '2023-04-03 09:14:48'),
(2112, 'DG2-230403161442', 5, 2, '2023-04-03 09:14:48', '2023-04-03 09:14:48'),
(2113, 'DG2-230403161442', 6, 1, '2023-04-03 09:14:48', '2023-04-03 09:14:48'),
(2114, 'DG2-230403161442', 7, 2, '2023-04-03 09:14:48', '2023-04-03 09:14:48'),
(2115, 'DG2-230403161442', 8, 1, '2023-04-03 09:14:48', '2023-04-03 09:14:48'),
(2116, 'DG2-230403161442', 20, 2, '2023-04-03 09:14:53', '2023-04-03 09:14:53'),
(2117, 'DG2-230403161442', 21, 2, '2023-04-03 09:14:53', '2023-04-03 09:14:53'),
(2118, 'DG2-230403161442', 22, 2, '2023-04-03 09:14:53', '2023-04-03 09:14:53'),
(2119, 'DG2-230403161442', 23, 2, '2023-04-03 09:14:53', '2023-04-03 09:14:53'),
(2120, 'DG2-230403161442', 24, 2, '2023-04-03 09:14:53', '2023-04-03 09:14:53'),
(2121, 'DG2-230403161442', 26, 3, '2023-04-03 09:14:59', '2023-04-03 09:14:59'),
(2122, 'DG2-230403161442', 27, 2, '2023-04-03 09:14:59', '2023-04-03 09:14:59'),
(2123, 'DG2-230403161442', 28, 3, '2023-04-03 09:14:59', '2023-04-03 09:14:59'),
(2124, 'DG2-230403161442', 29, 3, '2023-04-03 09:14:59', '2023-04-03 09:14:59'),
(2125, 'DG2-230403161442', 30, 3, '2023-04-03 09:14:59', '2023-04-03 09:14:59'),
(2126, 'DG2-230403161442', 32, 4, '2023-04-03 09:15:04', '2023-04-03 09:15:04'),
(2127, 'DG2-230403161442', 33, 3, '2023-04-03 09:15:04', '2023-04-03 09:15:04'),
(2128, 'DG2-230403161442', 34, 3, '2023-04-03 09:15:04', '2023-04-03 09:15:04'),
(2129, 'DG2-230403161442', 35, 3, '2023-04-03 09:15:04', '2023-04-03 09:15:04'),
(2130, 'DG2-230403161442', 36, 3, '2023-04-03 09:15:04', '2023-04-03 09:15:04'),
(2131, 'DG2-230403161559', 4, 1, '2023-04-03 09:16:05', '2023-04-03 09:16:05'),
(2132, 'DG2-230403161559', 5, 2, '2023-04-03 09:16:05', '2023-04-03 09:16:05'),
(2133, 'DG2-230403161559', 6, 2, '2023-04-03 09:16:05', '2023-04-03 09:16:05'),
(2134, 'DG2-230403161559', 7, 2, '2023-04-03 09:16:05', '2023-04-03 09:16:05'),
(2135, 'DG2-230403161559', 8, 2, '2023-04-03 09:16:05', '2023-04-03 09:16:05'),
(2136, 'DG2-230403161559', 20, 3, '2023-04-03 09:16:08', '2023-04-03 09:16:08'),
(2137, 'DG2-230403161559', 21, 3, '2023-04-03 09:16:08', '2023-04-03 09:16:08'),
(2138, 'DG2-230403161559', 22, 3, '2023-04-03 09:16:08', '2023-04-03 09:16:08'),
(2139, 'DG2-230403161559', 23, 3, '2023-04-03 09:16:08', '2023-04-03 09:16:08'),
(2140, 'DG2-230403161559', 24, 3, '2023-04-03 09:16:08', '2023-04-03 09:16:08'),
(2141, 'DG2-230403161559', 26, 3, '2023-04-03 09:16:11', '2023-04-03 09:16:11'),
(2142, 'DG2-230403161559', 27, 3, '2023-04-03 09:16:11', '2023-04-03 09:16:11'),
(2143, 'DG2-230403161559', 29, 3, '2023-04-03 09:16:11', '2023-04-03 09:16:11'),
(2144, 'DG2-230403161559', 30, 3, '2023-04-03 09:16:11', '2023-04-03 09:16:11'),
(2145, 'DG2-230403161559', 32, 3, '2023-04-03 09:16:14', '2023-04-03 09:16:14'),
(2146, 'DG2-230403161559', 33, 3, '2023-04-03 09:16:14', '2023-04-03 09:16:14'),
(2147, 'DG2-230403161559', 34, 3, '2023-04-03 09:16:14', '2023-04-03 09:16:14'),
(2148, 'DG2-230403161559', 35, 3, '2023-04-03 09:16:14', '2023-04-03 09:16:14'),
(2149, 'DG2-230403161559', 36, 3, '2023-04-03 09:16:14', '2023-04-03 09:16:14'),
(2150, 'DG2-230403161559', 38, 3, '2023-04-03 09:16:17', '2023-04-03 09:16:17'),
(2151, 'DG2-230403161559', 39, 3, '2023-04-03 09:16:17', '2023-04-03 09:16:17'),
(2152, 'DG2-230403161559', 40, 3, '2023-04-03 09:16:17', '2023-04-03 09:16:17'),
(2153, 'DG2-230403161559', 41, 3, '2023-04-03 09:16:17', '2023-04-03 09:16:17'),
(2154, 'DG2-230403161559', 43, 3, '2023-04-03 09:16:20', '2023-04-03 09:16:20'),
(2155, 'DG2-230403161559', 44, 3, '2023-04-03 09:16:20', '2023-04-03 09:16:20'),
(2156, 'DG2-230403161559', 45, 3, '2023-04-03 09:16:20', '2023-04-03 09:16:20'),
(2157, 'DG2-230403161559', 46, 3, '2023-04-03 09:16:20', '2023-04-03 09:16:20'),
(2158, 'DG2-230403161705', 4, 3, '2023-04-03 09:17:10', '2023-04-03 09:17:10'),
(2159, 'DG2-230403161705', 5, 3, '2023-04-03 09:17:10', '2023-04-03 09:17:10'),
(2160, 'DG2-230403161705', 6, 3, '2023-04-03 09:17:10', '2023-04-03 09:17:10'),
(2161, 'DG2-230403161705', 7, 3, '2023-04-03 09:17:10', '2023-04-03 09:17:10'),
(2162, 'DG2-230403161705', 8, 3, '2023-04-03 09:17:10', '2023-04-03 09:17:10'),
(2163, 'DG2-230403161705', 20, 3, '2023-04-03 09:17:13', '2023-04-03 09:17:13'),
(2164, 'DG2-230403161705', 21, 3, '2023-04-03 09:17:13', '2023-04-03 09:17:13'),
(2165, 'DG2-230403161705', 22, 2, '2023-04-03 09:17:13', '2023-04-03 09:17:13'),
(2166, 'DG2-230403161705', 23, 3, '2023-04-03 09:17:13', '2023-04-03 09:17:13'),
(2167, 'DG2-230403161705', 24, 2, '2023-04-03 09:17:13', '2023-04-03 09:17:13'),
(2168, 'DG2-230403161705', 26, 3, '2023-04-03 09:17:16', '2023-04-03 09:17:16'),
(2169, 'DG2-230403161705', 27, 3, '2023-04-03 09:17:16', '2023-04-03 09:17:16'),
(2170, 'DG2-230403161705', 28, 2, '2023-04-03 09:17:16', '2023-04-03 09:17:16'),
(2171, 'DG2-230403161705', 29, 3, '2023-04-03 09:17:16', '2023-04-03 09:17:16'),
(2172, 'DG2-230403161705', 30, 2, '2023-04-03 09:17:16', '2023-04-03 09:17:16'),
(2173, 'DG2-230403161705', 32, 3, '2023-04-03 09:17:19', '2023-04-03 09:17:19'),
(2174, 'DG2-230403161705', 33, 2, '2023-04-03 09:17:19', '2023-04-03 09:17:19'),
(2175, 'DG2-230403161705', 34, 3, '2023-04-03 09:17:19', '2023-04-03 09:17:19'),
(2176, 'DG2-230403161705', 35, 2, '2023-04-03 09:17:19', '2023-04-03 09:17:19'),
(2177, 'DG2-230403161705', 36, 3, '2023-04-03 09:17:19', '2023-04-03 09:17:19'),
(2178, 'DG2-230403161705', 38, 3, '2023-04-03 09:17:22', '2023-04-03 09:17:22'),
(2179, 'DG2-230403161705', 39, 2, '2023-04-03 09:17:23', '2023-04-03 09:17:23'),
(2180, 'DG2-230403161705', 40, 3, '2023-04-03 09:17:23', '2023-04-03 09:17:23'),
(2181, 'DG2-230403161705', 41, 3, '2023-04-03 09:17:23', '2023-04-03 09:17:23'),
(2182, 'DG2-230403161705', 43, 3, '2023-04-03 09:17:26', '2023-04-03 09:17:26'),
(2183, 'DG2-230403161705', 44, 2, '2023-04-03 09:17:26', '2023-04-03 09:17:26'),
(2184, 'DG2-230403161705', 45, 3, '2023-04-03 09:17:26', '2023-04-03 09:17:26'),
(2185, 'DG2-230403161705', 46, 3, '2023-04-03 09:17:26', '2023-04-03 09:17:26'),
(2186, 'DG2-230403161805', 4, 2, '2023-04-03 09:18:25', '2023-04-03 09:18:25'),
(2187, 'DG2-230403161805', 5, 2, '2023-04-03 09:18:25', '2023-04-03 09:18:25'),
(2188, 'DG2-230403161805', 6, 2, '2023-04-03 09:18:25', '2023-04-03 09:18:25'),
(2189, 'DG2-230403161805', 20, 2, '2023-04-03 09:18:29', '2023-04-03 09:18:29'),
(2190, 'DG2-230403161805', 21, 2, '2023-04-03 09:18:29', '2023-04-03 09:18:29'),
(2191, 'DG2-230403161805', 22, 2, '2023-04-03 09:18:29', '2023-04-03 09:18:29'),
(2192, 'DG2-230403161805', 23, 2, '2023-04-03 09:18:29', '2023-04-03 09:18:29'),
(2193, 'DG2-230403161805', 24, 2, '2023-04-03 09:18:29', '2023-04-03 09:18:29'),
(2194, 'DG2-230403161805', 26, 2, '2023-04-03 09:18:31', '2023-04-03 09:18:31'),
(2195, 'DG2-230403161805', 27, 2, '2023-04-03 09:18:31', '2023-04-03 09:18:31'),
(2196, 'DG2-230403161805', 28, 2, '2023-04-03 09:18:31', '2023-04-03 09:18:31'),
(2197, 'DG2-230403161805', 29, 2, '2023-04-03 09:18:31', '2023-04-03 09:18:31'),
(2198, 'DG2-230403161805', 30, 2, '2023-04-03 09:18:31', '2023-04-03 09:18:31'),
(2199, 'DG2-230403161805', 32, 2, '2023-04-03 09:18:34', '2023-04-03 09:18:34'),
(2200, 'DG2-230403161805', 33, 2, '2023-04-03 09:18:34', '2023-04-03 09:18:34'),
(2201, 'DG2-230403161805', 34, 2, '2023-04-03 09:18:34', '2023-04-03 09:18:34'),
(2202, 'DG2-230403161805', 35, 2, '2023-04-03 09:18:34', '2023-04-03 09:18:34'),
(2203, 'DG2-230403161805', 38, 2, '2023-04-03 09:18:35', '2023-04-03 09:18:35'),
(2204, 'DG2-230403161805', 39, 2, '2023-04-03 09:18:35', '2023-04-03 09:18:35'),
(2205, 'DG2-230403161805', 43, 2, '2023-04-03 09:18:41', '2023-04-03 09:18:41'),
(2206, 'DG2-230403161805', 44, 2, '2023-04-03 09:18:41', '2023-04-03 09:18:41'),
(2207, 'DG2-230403161954', 4, 2, '2023-04-03 09:19:58', '2023-04-03 09:19:58'),
(2208, 'DG2-230403161954', 5, 2, '2023-04-03 09:19:58', '2023-04-03 09:19:58'),
(2209, 'DG2-230403161954', 6, 2, '2023-04-03 09:19:58', '2023-04-03 09:19:58'),
(2210, 'DG2-230403161954', 7, 2, '2023-04-03 09:19:58', '2023-04-03 09:19:58'),
(2211, 'DG2-230403161954', 8, 2, '2023-04-03 09:19:58', '2023-04-03 09:19:58'),
(2212, 'DG2-230403162010', 4, 2, '2023-04-03 09:20:13', '2023-04-03 09:20:13'),
(2213, 'DG2-230403162010', 5, 2, '2023-04-03 09:20:13', '2023-04-03 09:20:13'),
(2214, 'DG2-230403162010', 6, 2, '2023-04-03 09:20:13', '2023-04-03 09:20:13'),
(2215, 'DG2-230403162010', 7, 2, '2023-04-03 09:20:13', '2023-04-03 09:20:13'),
(2216, 'DG2-230403162010', 8, 2, '2023-04-03 09:20:13', '2023-04-03 09:20:13'),
(2217, 'DG2-230403162050', 4, 2, '2023-04-03 09:20:53', '2023-04-03 09:20:53'),
(2218, 'DG2-230403162050', 5, 2, '2023-04-03 09:20:53', '2023-04-03 09:20:53'),
(2219, 'DG2-230403162050', 6, 2, '2023-04-03 09:20:53', '2023-04-03 09:20:53'),
(2220, 'DG2-230403162050', 7, 2, '2023-04-03 09:20:53', '2023-04-03 09:20:53'),
(2221, 'DG2-230403162050', 8, 2, '2023-04-03 09:20:53', '2023-04-03 09:20:53'),
(2222, 'DG2-230403162050', 20, 2, '2023-04-03 09:20:56', '2023-04-03 09:20:56'),
(2223, 'DG2-230403162050', 21, 1, '2023-04-03 09:20:56', '2023-04-03 09:20:56'),
(2224, 'DG2-230403162050', 22, 2, '2023-04-03 09:20:56', '2023-04-03 09:20:56'),
(2225, 'DG2-230403162050', 23, 2, '2023-04-03 09:20:56', '2023-04-03 09:20:56'),
(2226, 'DG2-230403162050', 26, 2, '2023-04-03 09:20:58', '2023-04-03 09:20:58'),
(2227, 'DG2-230403162050', 27, 2, '2023-04-03 09:20:58', '2023-04-03 09:20:58'),
(2228, 'DG2-230403162050', 28, 2, '2023-04-03 09:20:58', '2023-04-03 09:20:58'),
(2229, 'DG2-230403162050', 32, 2, '2023-04-03 09:21:01', '2023-04-03 09:21:01'),
(2230, 'DG2-230403162050', 33, 2, '2023-04-03 09:21:01', '2023-04-03 09:21:01'),
(2231, 'DG2-230403162050', 34, 2, '2023-04-03 09:21:01', '2023-04-03 09:21:01'),
(2232, 'DG2-230403162050', 35, 2, '2023-04-03 09:21:01', '2023-04-03 09:21:01'),
(2233, 'DG2-230403162050', 36, 2, '2023-04-03 09:21:01', '2023-04-03 09:21:01'),
(2234, 'DG2-230403162050', 38, 2, '2023-04-03 09:21:03', '2023-04-03 09:21:03'),
(2235, 'DG2-230403162050', 39, 2, '2023-04-03 09:21:03', '2023-04-03 09:21:03'),
(2236, 'DG2-230403162050', 40, 2, '2023-04-03 09:21:03', '2023-04-03 09:21:03'),
(2237, 'DG2-230403162050', 41, 2, '2023-04-03 09:21:03', '2023-04-03 09:21:03'),
(2238, 'DG2-230403162050', 43, 2, '2023-04-03 09:21:07', '2023-04-03 09:21:07'),
(2239, 'DG2-230403162050', 44, 2, '2023-04-03 09:21:07', '2023-04-03 09:21:07'),
(2240, 'DG2-230403162050', 45, 2, '2023-04-03 09:21:07', '2023-04-03 09:21:07'),
(2241, 'DG2-230403162050', 46, 2, '2023-04-03 09:21:07', '2023-04-03 09:21:07'),
(2242, 'DG2-230403162050', 47, 2, '2023-04-03 09:21:07', '2023-04-03 09:21:07'),
(2243, 'DG2-230403162050', 29, 2, '2023-04-03 09:21:22', '2023-04-03 09:21:22'),
(2244, 'DG2-230403162050', 30, 2, '2023-04-03 09:21:22', '2023-04-03 09:21:22'),
(2245, 'DG2-230403162050', 24, 2, '2023-04-03 09:21:27', '2023-04-03 09:21:27'),
(2246, 'DG2-230403162213', 4, 3, '2023-04-03 09:22:17', '2023-04-03 09:22:17'),
(2247, 'DG2-230403162213', 5, 3, '2023-04-03 09:22:17', '2023-04-03 09:22:17'),
(2248, 'DG2-230403162213', 6, 3, '2023-04-03 09:22:17', '2023-04-03 09:22:17'),
(2249, 'DG2-230403162213', 7, 3, '2023-04-03 09:22:17', '2023-04-03 09:22:17'),
(2250, 'DG2-230403162213', 8, 3, '2023-04-03 09:22:17', '2023-04-03 09:22:17'),
(2251, 'DG2-230403162251', 4, 2, '2023-04-03 09:22:54', '2023-04-03 09:22:54'),
(2252, 'DG2-230403162251', 5, 2, '2023-04-03 09:22:54', '2023-04-03 09:22:54'),
(2253, 'DG2-230403162251', 6, 2, '2023-04-03 09:22:54', '2023-04-03 09:22:54'),
(2254, 'DG2-230403162251', 7, 2, '2023-04-03 09:22:54', '2023-04-03 09:22:54'),
(2255, 'DG2-230403162251', 8, 2, '2023-04-03 09:22:54', '2023-04-03 09:22:54'),
(2256, 'DG2-230403162251', 43, 2, '2023-04-03 09:23:00', '2023-04-03 09:23:00'),
(2257, 'DG2-230403162251', 44, 2, '2023-04-03 09:23:00', '2023-04-03 09:23:00'),
(2258, 'DG2-230403162251', 45, 2, '2023-04-03 09:23:00', '2023-04-03 09:23:00'),
(2259, 'DG2-230403162251', 46, 2, '2023-04-03 09:23:00', '2023-04-03 09:23:00'),
(2260, 'DG2-230403162251', 47, 2, '2023-04-03 09:23:00', '2023-04-03 09:23:00'),
(2261, 'DG2-230403162251', 20, 2, '2023-04-03 09:23:03', '2023-04-03 09:23:03'),
(2262, 'DG2-230403162251', 21, 2, '2023-04-03 09:23:03', '2023-04-03 09:23:03'),
(2263, 'DG2-230403162251', 22, 2, '2023-04-03 09:23:03', '2023-04-03 09:23:03'),
(2264, 'DG2-230403162251', 23, 2, '2023-04-03 09:23:03', '2023-04-03 09:23:03'),
(2265, 'DG2-230403162251', 24, 2, '2023-04-03 09:23:03', '2023-04-03 09:23:03'),
(2266, 'DG2-230403162251', 26, 2, '2023-04-03 09:23:06', '2023-04-03 09:23:06'),
(2267, 'DG2-230403162251', 27, 2, '2023-04-03 09:23:06', '2023-04-03 09:23:06'),
(2268, 'DG2-230403162251', 28, 2, '2023-04-03 09:23:06', '2023-04-03 09:23:06'),
(2269, 'DG2-230403162251', 29, 2, '2023-04-03 09:23:06', '2023-04-03 09:23:06'),
(2270, 'DG2-230403162251', 30, 2, '2023-04-03 09:23:06', '2023-04-03 09:23:06'),
(2271, 'DG2-230403162251', 32, 2, '2023-04-03 09:23:09', '2023-04-03 09:23:09'),
(2272, 'DG2-230403162251', 33, 2, '2023-04-03 09:23:09', '2023-04-03 09:23:09'),
(2273, 'DG2-230403162251', 34, 2, '2023-04-03 09:23:09', '2023-04-03 09:23:09'),
(2274, 'DG2-230403162251', 35, 2, '2023-04-03 09:23:09', '2023-04-03 09:23:09'),
(2275, 'DG2-230403162251', 36, 2, '2023-04-03 09:23:09', '2023-04-03 09:23:09'),
(2276, 'DG2-230403162251', 38, 2, '2023-04-03 09:23:13', '2023-04-03 09:23:13'),
(2277, 'DG2-230403162251', 39, 2, '2023-04-03 09:23:13', '2023-04-03 09:23:13'),
(2278, 'DG2-230403162251', 40, 2, '2023-04-03 09:23:13', '2023-04-03 09:23:13'),
(2279, 'DG2-230403162251', 41, 2, '2023-04-03 09:23:13', '2023-04-03 09:23:13'),
(2280, 'DG1-230404152606', 38, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2281, 'DG1-230404152606', 39, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2282, 'DG1-230404152606', 40, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2283, 'DG1-230404152606', 43, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2284, 'DG1-230404152606', 46, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2285, 'DG1-230404152606', 47, 0, '2023-04-04 08:26:08', '2023-04-04 08:26:08'),
(2286, 'DG2-230406091405', 4, 4, '2023-04-06 02:14:30', '2023-04-06 02:14:15'),
(2287, 'DG2-230406091405', 5, 3, '2023-04-06 02:14:15', '2023-04-06 02:14:15'),
(2288, 'DG2-230406091405', 6, 4, '2023-04-06 02:14:30', '2023-04-06 02:14:15'),
(2289, 'DG2-230406091405', 7, 3, '2023-04-06 02:14:15', '2023-04-06 02:14:15'),
(2290, 'DG2-230406091405', 8, 3, '2023-04-06 02:14:15', '2023-04-06 02:14:15'),
(2291, 'DG2-230406091405', 20, 2, '2023-04-06 02:14:21', '2023-04-06 02:14:21'),
(2292, 'DG2-230406091405', 21, 3, '2023-04-06 02:14:21', '2023-04-06 02:14:21'),
(2293, 'DG2-230406091405', 22, 2, '2023-04-06 02:14:21', '2023-04-06 02:14:21'),
(2294, 'DG2-230406091405', 23, 3, '2023-04-06 02:14:43', '2023-04-06 02:14:43'),
(2295, 'DG2-230406091405', 24, 3, '2023-04-06 02:14:43', '2023-04-06 02:14:43'),
(2296, 'DG2-230406091405', 26, 4, '2023-04-06 02:14:46', '2023-04-06 02:14:46'),
(2297, 'DG2-230406091405', 27, 4, '2023-04-06 02:14:46', '2023-04-06 02:14:46'),
(2298, 'DG2-230406091405', 28, 4, '2023-04-06 02:14:46', '2023-04-06 02:14:46'),
(2299, 'DG2-230406091405', 29, 4, '2023-04-06 02:14:46', '2023-04-06 02:14:46'),
(2300, 'DG2-230406091405', 30, 4, '2023-04-06 02:14:46', '2023-04-06 02:14:46'),
(2301, 'DG2-230406093638', 4, 4, '2023-04-06 02:36:45', '2023-04-06 02:36:45'),
(2302, 'DG2-230406093638', 5, 3, '2023-04-06 02:37:24', '2023-04-06 02:36:45'),
(2303, 'DG2-230406093638', 6, 4, '2023-04-06 02:36:45', '2023-04-06 02:36:45'),
(2304, 'DG2-230406093638', 7, 3, '2023-04-06 02:37:24', '2023-04-06 02:36:45'),
(2305, 'DG2-230406093638', 8, 4, '2023-04-06 02:36:45', '2023-04-06 02:36:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu3_raocan`
--

CREATE TABLE `phieu3_raocan` (
  `id` varchar(16) NOT NULL,
  `DoanhNghiep_id` int(11) NOT NULL,
  `RaoCan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuso1`
--

CREATE TABLE `phieuso1` (
  `Id` varchar(16) NOT NULL,
  `TongDiem` text NOT NULL,
  `User_id` int(11) NOT NULL,
  `DoanhNghiep_Id` int(11) NOT NULL,
  `MoHinh_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phieuso1`
--

INSERT INTO `phieuso1` (`Id`, `TongDiem`, `User_id`, `DoanhNghiep_Id`, `MoHinh_id`, `created_at`, `updated_at`, `status`) VALUES
('DG1-230309092655', '18', 1, 1, NULL, '2022-11-09 02:27:47', '2022-11-02 07:00:09', 1),
('DG1-230404164025', '320', 1, 1, NULL, '2022-03-31 09:42:22', '2023-04-06 02:58:48', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuso2`
--

CREATE TABLE `phieuso2` (
  `Id` varchar(16) NOT NULL,
  `DoanhNghiep_Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phieuso2`
--

INSERT INTO `phieuso2` (`Id`, `DoanhNghiep_Id`, `User_id`, `created_at`, `updated_at`, `status`) VALUES
('DG1-230404152606', 1, 1, '2023-04-04 08:26:43', '2023-04-04 08:26:43', 0),
('DG2-230403150015', 1, 1, '2023-04-03 08:02:58', '2023-04-03 08:02:58', 0),
('DG2-230403150305', 1, 1, '2023-04-03 08:03:25', '2023-04-03 08:03:25', 0),
('DG2-230403150435', 1, 1, '2023-04-03 08:04:40', '2023-04-03 08:04:40', 0),
('DG2-230403150440', 1, 1, '2023-04-03 08:05:03', '2023-04-03 08:05:03', 0),
('DG2-230403150503', 1, 1, '2023-04-03 08:07:23', '2023-04-03 08:07:23', 0),
('DG2-230403150742', 1, 1, '2023-04-03 08:07:47', '2023-04-03 08:07:47', 0),
('DG2-230403150807', 1, 1, '2023-04-03 08:08:18', '2023-04-03 08:08:18', 0),
('DG2-230403150833', 1, 1, '2023-04-03 08:09:13', '2023-04-03 08:09:13', 0),
('DG2-230403151133', 1, 1, '2023-04-03 08:11:42', '2023-04-03 08:11:42', 0),
('DG2-230403151359', 1, 1, '2023-04-03 08:14:03', '2023-04-03 08:14:03', 0),
('DG2-230403151606', 1, 1, '2023-04-03 08:16:10', '2023-04-03 08:16:10', 0),
('DG2-230403151631', 1, 1, '2023-04-03 08:16:44', '2023-04-03 08:16:44', 0),
('DG2-230403151716', 1, 1, '2023-04-03 08:17:28', '2023-04-03 08:17:28', 0),
('DG2-230403151738', 1, 1, '2023-04-03 08:17:46', '2023-04-03 08:17:46', 0),
('DG2-230403151931', 1, 1, '2023-04-03 08:19:46', '2023-04-03 08:19:46', 0),
('DG2-230403152045', 1, 1, '2023-04-03 08:21:07', '2023-04-03 08:21:07', 0),
('DG2-230403152122', 1, 1, '2023-04-03 08:21:44', '2023-04-03 08:21:44', 0),
('DG2-230403152300', 1, 1, '2023-04-03 08:23:07', '2023-04-03 08:23:07', 0),
('DG2-230403153157', 1, 1, '2023-04-03 08:33:27', '2023-04-03 08:33:27', 0),
('DG2-230403154931', 1, 1, '2023-04-03 08:50:05', '2023-04-03 08:50:05', 0),
('DG2-230403155015', 1, 1, '2023-04-03 08:50:44', '2023-04-03 08:50:44', 0),
('DG2-230403155056', 1, 1, '2023-04-03 08:51:16', '2023-04-03 08:51:16', 0),
('DG2-230403155226', 1, 1, '2023-04-03 08:54:50', '2023-04-03 08:54:50', 0),
('DG2-230403155518', 1, 1, '2023-04-03 08:55:54', '2023-04-03 08:55:54', 0),
('DG2-230403155608', 1, 1, '2023-04-03 08:56:33', '2023-04-03 08:56:33', 0),
('DG2-230403155635', 1, 1, '2023-04-03 08:57:00', '2023-04-03 08:57:00', 0),
('DG2-230403155701', 1, 1, '2023-04-03 08:57:31', '2023-04-03 08:57:31', 0),
('DG2-230403155747', 1, 1, '2023-04-03 08:58:14', '2023-04-03 08:58:14', 0),
('DG2-230403155851', 1, 1, '2023-04-03 09:03:28', '2023-04-03 09:03:28', 0),
('DG2-230403160429', 1, 1, '2023-04-03 09:05:04', '2023-04-03 09:05:04', 0),
('DG2-230403160653', 1, 1, '2023-04-03 09:07:25', '2023-04-03 09:07:25', 0),
('DG2-230403160747', 1, 1, '2023-04-03 09:07:53', '2023-04-03 09:07:53', 0),
('DG2-230403160801', 1, 1, '2023-04-03 09:09:45', '2023-04-03 09:09:45', 0),
('DG2-230403161048', 1, 1, '2023-04-03 09:11:40', '2023-04-03 09:11:40', 0),
('DG2-230403161203', 1, 1, '2023-04-03 09:12:23', '2023-04-03 09:12:23', 0),
('DG2-230403161227', 1, 1, '2023-04-03 09:12:32', '2023-04-03 09:12:32', 0),
('DG2-230403161248', 1, 1, '2023-04-03 09:14:06', '2023-04-03 09:14:06', 0),
('DG2-230403161442', 1, 1, '2023-04-03 09:15:04', '2023-04-03 09:15:04', 0),
('DG2-230403161559', 1, 1, '2023-04-03 09:16:20', '2023-04-03 09:16:20', 0),
('DG2-230403161705', 1, 1, '2023-04-03 09:17:28', '2023-04-03 09:17:28', 0),
('DG2-230403161805', 1, 1, '2023-04-03 09:18:41', '2023-04-03 09:18:41', 0),
('DG2-230403161954', 1, 1, '2023-04-03 09:19:58', '2023-04-03 09:19:58', 0),
('DG2-230403162010', 1, 1, '2023-04-03 09:20:13', '2023-04-03 09:20:13', 0),
('DG2-230403162050', 1, 1, '2023-04-03 09:21:27', '2023-04-03 09:21:27', 0),
('DG2-230403162213', 1, 1, '2023-04-03 09:22:18', '2023-04-03 09:22:18', 0),
('DG2-230403162251', 1, 1, '2023-04-03 09:23:13', '2023-04-03 09:23:13', 0),
('DG2-230404144941', 1, 1, '2023-04-04 07:49:44', '2023-04-04 07:49:44', 0),
('DG2-230406091405', 1, 1, '2023-04-06 02:14:56', '2023-04-06 02:14:56', 0),
('DG2-230406093638', 1, 1, '2023-04-06 02:38:26', '2023-04-06 02:38:26', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuso3`
--

CREATE TABLE `phieuso3` (
  `Id` varchar(16) NOT NULL,
  `CauHoiP3_id` int(11) NOT NULL,
  `DoanhNghiep_id` int(11) NOT NULL,
  `DanhGia` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuso4`
--

CREATE TABLE `phieuso4` (
  `Id` int(11) NOT NULL,
  `NhuCau` text NOT NULL,
  `DeXuat` text NOT NULL,
  `DoanhNghiep_Id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'DoanhNghiep-BGD'),
(2, NULL, NULL, 'Admin'),
(3, NULL, NULL, 'QTV'),
(4, NULL, NULL, 'DoanhNghiep-NV'),
(6, NULL, NULL, 'Chuyên Gia'),
(8, NULL, NULL, 'Ban Chấp Hành'),
(9, NULL, NULL, 'Ban Kiểm Tra'),
(10, NULL, NULL, 'Ban Thường Trực'),
(11, NULL, NULL, 'Văn Thư'),
(12, NULL, NULL, 'Khách Hàng'),
(13, NULL, NULL, 'Nhà Đầu Tư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `Role_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `Role_id`, `User_id`) VALUES
(1, 2, 1),
(3, 1, 2),
(4, 1, 3),
(5, 8, 4),
(7, 1, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `TenBanner` varchar(255) NOT NULL,
  `Link` text NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `TenBanner`, `Link`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Năm Mới', '202302211349TopBaner_CDS_NewYear_2023_2.png', 1, '2023-02-21 06:49:53', '2023-02-21 06:49:53'),
(2, 'CDS_DEMO', '202302211405ChuyenDoiSo_Web_Main_4 (1).png', 1, '2023-02-21 07:05:37', '2023-02-21 07:05:37'),
(1, 'Năm Mới', '202302211349TopBaner_CDS_NewYear_2023_2.png', 1, '2023-02-20 23:49:53', '2023-02-20 23:49:53'),
(2, 'CDS_DEMO', '202302211405ChuyenDoiSo_Web_Main_4 (1).png', 1, '2023-02-21 00:05:37', '2023-02-21 00:05:37'),
(1, 'Năm Mới', '202302211349TopBaner_CDS_NewYear_2023_2.png', 1, '2023-02-21 06:49:53', '2023-02-21 06:49:53'),
(2, 'CDS_DEMO', '202302211405ChuyenDoiSo_Web_Main_4 (1).png', 1, '2023-02-21 07:05:37', '2023-02-21 07:05:37'),
(1, 'Năm Mới', '202302211349TopBaner_CDS_NewYear_2023_2.png', 1, '2023-02-20 23:49:53', '2023-02-20 23:49:53'),
(2, 'CDS_DEMO', '202302211405ChuyenDoiSo_Web_Main_4 (1).png', 1, '2023-02-21 00:05:37', '2023-02-21 00:05:37'),
(1, 'Năm Mới', '202302211349TopBaner_CDS_NewYear_2023_2.png', 1, '2023-02-20 23:49:53', '2023-02-20 23:49:53'),
(2, 'CDS_DEMO', '202302211405ChuyenDoiSo_Web_Main_4 (1).png', 1, '2023-02-21 00:05:37', '2023-02-21 00:05:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuvien`
--

CREATE TABLE `thuvien` (
  `Id` int(11) NOT NULL,
  `TenThuVien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinnhan`
--

CREATE TABLE `tinnhan` (
  `Id` int(11) NOT NULL,
  `ChuyenGia_id` int(11) DEFAULT NULL,
  `DoanhNghiep_id` int(11) NOT NULL,
  `Loai` int(11) NOT NULL COMMENT '1: Tin nhắn phản hồi\r\n2:yêu cầu đánh giá\r\n3:yêu cầu đánh giá P2\r\n4: yêu cầu đánh giá P3\r\n5: yêu cầu đánh giá P4\r\n6:thông báo gửi phiếu 1 đánh giá mới(dành cho chuyên gia)\r\n7:thông báo đánh tin tức mới (theo lĩnh vực)',
  `TieuDe` varchar(255) NOT NULL COMMENT 'Chỉ có giá trị khi Loai = 2,3',
  `status` int(11) DEFAULT NULL COMMENT 'Chỉ có giá trị khi Loai = 2,3\r\n',
  `Link` text DEFAULT NULL COMMENT 'Chỉ có giá trị khi Loai = 2,3\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tinnhan`
--

INSERT INTO `tinnhan` (`Id`, `ChuyenGia_id`, `DoanhNghiep_id`, `Loai`, `TieuDe`, `status`, `Link`) VALUES
(47, NULL, 2, 2, 'Thông Báo Đánh Giá', 1, 'phieudanhgia1'),
(48, 1, 2, 2, 'Thông Báo Đánh Giá', 1, 'phieudanhgia1'),
(53, 1, 3, 3, 'Thông Báo Đánh Giá', 1, 'phieudanhgia2'),
(54, 1, 3, 2, 'Thông Báo Đánh Giá', 1, 'phieudanhgia1'),
(55, NULL, 2, 2, 'Thông Báo Đánh Giá', 1, 'phieudanhgia1'),
(56, 1, 2, 3, 'Thông Báo Đánh Giá', 1, 'phieudanhgia2'),
(57, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(58, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(59, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(60, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(61, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(62, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(63, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(64, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(65, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(66, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(67, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(68, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM'),
(69, NULL, 1, 3, 'Có doanh nghiệp vừa đánh giá', 1, '/chuyengia/P1_DGM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucs`
--

CREATE TABLE `tintucs` (
  `Id` varchar(14) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `TomTat` text NOT NULL,
  `TacGia` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `LuotXem` int(11) DEFAULT NULL,
  `LinhVuc_id` int(11) DEFAULT NULL,
  `Website` text DEFAULT NULL,
  `LoaiTin_id` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintucs`
--

INSERT INTO `tintucs` (`Id`, `TieuDe`, `TomTat`, `TacGia`, `NoiDung`, `HinhAnh`, `LuotXem`, `LinhVuc_id`, `Website`, `LoaiTin_id`, `Status`, `created_at`, `updated_at`) VALUES
('20230224102627', 'Tháng Thanh niên: Tuổi trẻ tiên phong chuyển đổi số', 'Tháng Thanh niên năm 2023 là dịp để tăng cường chuyển đổi số đồng bộ trên tất cả các mặt công tác của Đoàn, phát huy vai trò của thanh niên tham gia tích cực công cuộc chuyển đổi số, ứng dụng công nghệ số.', 'Sỹ Đông', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:#222222\">Th&aacute;ng Thanh ni&ecirc;n năm 2023 l&agrave; dịp để tăng cường chuyển đổi số đồng bộ tr&ecirc;n tất cả c&aacute;c mặt c&ocirc;ng t&aacute;c của Đo&agrave;n, ph&aacute;t huy vai tr&ograve; của thanh ni&ecirc;n tham gia t&iacute;ch cực c&ocirc;ng cuộc chuyển đổi số, ứng dụng c&ocirc;ng nghệ số.</span></span></span></strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:#222222\"><img alt=\"demo img\" src=\"data:image/jpeg;base64,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\" style=\"height:720px; width:1079px\" /></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:#8f8f8f\">Tuổi trẻ thủ đ&ocirc; H&agrave; Nội trải nghiệm kh&ocirc;ng gian số - Ảnh: H&Agrave; THANH</span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.0pt\"><span style=\"font-family:Roboto\"><span style=\"color:#222222\">Ban B&iacute; thư&nbsp;<a href=\"https://tuoitre.vn/trung-uong-doan.html\" target=\"_blank\" title=\"Trung ương Đoàn\"><span style=\"color:#226ac5\">Trung ương Đo&agrave;n</span></a>&nbsp;vừa ban h&agrave;nh kế hoạch&nbsp;<a href=\"https://tuoitre.vn/thang-thanh-nien.html\" title=\"Tháng Thanh niên\"><span style=\"color:#226ac5\">Th&aacute;ng Thanh ni&ecirc;n</span></a>&nbsp;năm 2023 với chủ đề &quot;Tuổi trẻ ti&ecirc;n phong chuyển đổi số&quot;.</span></span></span></span></span></span></p>\r\n\r\n<p><strong><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\">Chuyển đổi số đồng bộ tr&ecirc;n c&aacute;c mặt c&ocirc;ng t&aacute;c Đo&agrave;n</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Theo đ&oacute;, Th&aacute;ng Thanh ni&ecirc;n 2023 nhằm khơi dậy niềm tự h&agrave;o về truyền thống vẻ vang của Đo&agrave;n TNCS Hồ Ch&iacute; Minh trong mỗi c&aacute;n bộ, đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">C&ugrave;ng đ&oacute; l&agrave; tạo phong tr&agrave;o thi đua s&ocirc;i nổi kỷ niệm 92 năm ng&agrave;y th&agrave;nh lập Đo&agrave;n TNCS Hồ Ch&iacute; Minh (26-3-1931 - 26-3-2023) v&agrave; triển khai thực hiện nghị quyết Đại hội Đo&agrave;n c&aacute;c cấp, nghị quyết Đại hội Đo&agrave;n to&agrave;n quốc l&acirc;̀n thứ XII, nhiệm kỳ 2022 - 2027.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Trong th&aacute;ng n&agrave;y, to&agrave;n Đo&agrave;n sẽ tăng cường chuyển đổi số đồng bộ tr&ecirc;n tất cả c&aacute;c mặt c&ocirc;ng t&aacute;c của Đo&agrave;n, ph&aacute;t huy vai tr&ograve; của thanh ni&ecirc;n trong tham gia t&iacute;ch cực c&ocirc;ng cuộc chuyển đổi số, vận dụng, ứng dụng c&ocirc;ng nghệ số trong thực tiễn cuộc sống v&agrave; n&acirc;ng cao năng lực số cho thanh thiếu nhi.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Đồng thời, ph&aacute;t huy vai tr&ograve; xung k&iacute;ch, t&igrave;nh nguyện, khả năng s&aacute;ng tạo của thanh ni&ecirc;n trong tham gia thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, ph&acirc;̀n việc g&oacute;p ph&acirc;̀n ho&agrave;n th&agrave;nh nhiệm vụ ch&iacute;nh trị, nhiệm vụ chuy&ecirc;n m&ocirc;n v&agrave; tham gia ph&aacute;t triển kinh tế - x&atilde; hội tại địa phương, đơn vị.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Th&ocirc;ng qua hoạt động t&igrave;nh nguyện g&oacute;p ph&acirc;̀n tăng cường đo&agrave;n kết, tập hợp thanh ni&ecirc;n; củng cố, n&acirc;ng cao chất lượng tổ chức Đo&agrave;n, Hội; khẳng định vị tr&iacute;, vai tr&ograve; của tổ chức Đo&agrave;n, Hội trong thanh ni&ecirc;n v&agrave; x&atilde; hội.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">B&ecirc;n cạnh đ&oacute;, tăng cường sự quan t&acirc;m của c&aacute;c cấp ủy Đảng, ch&iacute;nh quyền, c&aacute;c ng&agrave;nh, c&aacute;c cấp v&agrave; to&agrave;n x&atilde; hội đối với c&ocirc;ng t&aacute;c bồi dưỡng, đ&agrave;o tạo v&agrave; gi&aacute;o dục thế hệ trẻ; tạo m&ocirc;i trường cho thanh ni&ecirc;n r&egrave;n luyện, cống hiến, trưởng th&agrave;nh.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Về nội dung hoạt động, Đo&agrave;n sẽ ch&uacute; trọng chuyển đổi số trong c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, điểm nhấn l&agrave; sử dụng ứng dụng di động Thanh ni&ecirc;n Việt Nam, c&ocirc;ng cụ chatbot&hellip;</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Ngo&agrave;i ra l&agrave; x&acirc;y dựng bản đồ số, số h&oacute;a c&aacute;c t&agrave;i liệu, hiện vật, th&ocirc;ng tin về c&aacute;c địa danh lịch sử, địa chỉ đỏ.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Phối hợp với c&aacute;c đơn vị, doanh nghiệp ứng dụng c&ocirc;ng nghệ dữ liệu lớn (big data) để nắm bắt xu hướng, thị hiếu thanh ni&ecirc;n tr&ecirc;n địa b&agrave;n.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng c&aacute;c b&aacute;o c&aacute;o, khảo s&aacute;t tr&ecirc;n kh&ocirc;ng gian mạng về những vấn đề đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n quan t&acirc;m v&agrave; dự b&aacute;o xu hướng trong thời gian tới...</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:22px\"><span style=\"font-family:Calibri,sans-serif\">Hai ng&agrave;y cao điểm triển khai đồng loạt to&agrave;n quốc trong Th&aacute;ng Thanh ni&ecirc;n</span></span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Trong Th&aacute;ng Thanh ni&ecirc;n sẽ c&oacute; hai ng&agrave;y cao điểm được triển khai đồng loạt tới 100% Đo&agrave;n cơ sở tr&ecirc;n to&agrave;n quốc.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Đ&oacute; l&agrave; ng&agrave;y cao điểm t&igrave;nh nguyện hỗ trợ người d&acirc;n thực hiện dịch vụ c&ocirc;ng trực tuyến (ng&agrave;y 18-3-2023) v&agrave; ng&agrave;y Đo&agrave;n vi&ecirc;n (ng&agrave;y 26-3-2023).</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">B&ecirc;n cạnh đ&oacute;, nhiều hoạt động cũng tổ chức đồng loạt tạo kh&ocirc;ng kh&iacute; thi đua s&ocirc;i nổi trong đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n như: ng&agrave;y t&igrave;nh nguyện chung tay x&acirc;y dựng n&ocirc;ng th&ocirc;n mới; ng&agrave;y chủ nhật xanh, ng&agrave;y thứ bảy t&igrave;nh nguyện, ng&agrave;y cao điểm &quot;Thiếu nhi vui, khỏe&quot; - &quot;Tiến bước l&ecirc;n Đo&agrave;n&quot;...</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Ban B&iacute; thư Trung ương Đo&agrave;n y&ecirc;u cầu c&aacute;c cấp bộ Đo&agrave;n, Hội ch&uacute; trọng thực hiện ba li&ecirc;n kết trong việc thực hiện c&aacute;c hoạt động t&igrave;nh nguyện &quot;li&ecirc;n kết lực lượng, li&ecirc;n kết địa b&agrave;n, li&ecirc;n kết cộng đồng&quot;.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Đồng thời, y&ecirc;u cầu c&aacute;c hoạt động phải được triển khai s&acirc;u rộng từ cơ sở, c&oacute; t&iacute;nh h&agrave;nh động cao, đảm bảo thiết thực, hiệu quả, b&aacute;m s&aacute;t trọng t&acirc;m c&ocirc;ng t&aacute;c Đo&agrave;n v&agrave; phong tr&agrave;o thanh thiếu nhi năm 2023, ph&ugrave; hợp với chương tr&igrave;nh hoạt động v&agrave; nhu c&acirc;̀u của địa phương.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', NULL, 0, 1, NULL, NULL, 0, '2023-02-24 03:26:27', '2023-02-24 03:26:27');
INSERT INTO `tintucs` (`Id`, `TieuDe`, `TomTat`, `TacGia`, `NoiDung`, `HinhAnh`, `LuotXem`, `LinhVuc_id`, `Website`, `LoaiTin_id`, `Status`, `created_at`, `updated_at`) VALUES
('20230404141717', 'Cách làm dịch vụ công trực tuyến tiện như mua hàng online', 'Dù chính quyền khuyến khích nộp hồ sơ trực tuyến từ nhiều năm qua nhưng nhiều người dân vẫn băn khoăn không biết nộp ở đâu, cách làm như thế nào, hiệu lực ra sao?\r\n\r\nHiện dịch vụ công trực tuyến được quy định tại Nghị định 42/2022 của Chính phủ về việc cung cấp thông tin và dịch vụ công trực tuyến của cơ quan nhà nước trên môi trường mạng.\r\n\r\nĐể làm hồ sơ trực tuyến, người dân và doanh nghiệp phải đăng ký tài khoản dịch vụ công. Hiện việc đăng ký tài khoản tại Cổng dịch vụ công quốc gia (https://dichvucong.gov.vn) khá đơn giản, trong đó yêu cầu tiên quyết là sim điện thoại đăng ký chính chủ.', 'Sỹ Đông', '<p><strong>D&ugrave; ch&iacute;nh quyền khuyến kh&iacute;ch nộp hồ sơ trực tuyến từ nhiều năm qua nhưng nhiều người d&acirc;n vẫn băn khoăn kh&ocirc;ng biết nộp ở đ&acirc;u, c&aacute;ch l&agrave;m như thế n&agrave;o, hiệu lực ra sao?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiện&nbsp;<a href=\"https://thanhnien.vn/napas-hoan-tien-toi-500000-dong-khi-thanh-toan-dich-vu-cong-truc-tuyen-1851526263.htm\" title=\"dịch vụ công trực tuyến\">dịch vụ c&ocirc;ng trực tuyến</a>&nbsp;được quy định tại Nghị định 42/2022 của Ch&iacute;nh phủ về việc cung cấp th&ocirc;ng tin v&agrave; dịch vụ c&ocirc;ng trực tuyến của cơ quan nh&agrave; nước tr&ecirc;n m&ocirc;i trường mạng.</p>\r\n\r\n<p>Để l&agrave;m hồ sơ trực tuyến, người d&acirc;n v&agrave; doanh nghiệp phải đăng k&yacute; t&agrave;i khoản dịch vụ c&ocirc;ng. Hiện việc đăng k&yacute; t&agrave;i khoản tại Cổng dịch vụ c&ocirc;ng quốc gia (<a href=\"https://dichvucong.gov.vn/\" rel=\"nofollow\" target=\"_blank\">https://dichvucong.gov.vn</a>) kh&aacute; đơn giản, trong đ&oacute; y&ecirc;u cầu ti&ecirc;n quyết l&agrave; sim điện thoại đăng k&yacute; ch&iacute;nh chủ.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" id=\"image1718376\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080838065dich-vu-cong-quoc-gia-16798007882811721834561.jpg\" /><img alt=\"demo-1\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080838245xac-nhan-cu-tru-16787944386501062103111.jpg\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Muốn nộp hồ sơ trực tuyến, người d&acirc;n phải đăng k&yacute; t&agrave;i khoản th&ocirc;ng qua cổng dịch vụ c&ocirc;ng</em></p>\r\n\r\n			<p><em>CHỤP M&Agrave;N H&Igrave;NH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Khi nộp hồ sơ, người d&acirc;n v&agrave; doanh nghiệp truy cập v&agrave;o Cổng dịch vụ c&ocirc;ng quốc gia hoặc cổng dịch vụ c&ocirc;ng của c&aacute;c bộ, ng&agrave;nh, địa phương. Th&ocirc;ng thường, c&aacute;c&nbsp;<a href=\"https://thanhnien.vn/tphcm-hop-nhat-cong-dich-vu-cong-1851515847.htm\" title=\"cổng dịch vụ công\">cổng dịch vụ c&ocirc;ng</a>&nbsp;đều liệt k&ecirc; r&otilde; th&agrave;nh phần hồ sơ, biểu mẫu, thời gian giải quyết, mức ph&iacute;, lệ ph&iacute;.</p>\r\n\r\n<p>Người d&acirc;n c&oacute; thể tải biểu mẫu về điền c&aacute;c th&ocirc;ng tin, scan văn bản hoặc chụp h&igrave;nh giấy tờ li&ecirc;n quan đ&iacute;nh k&egrave;m tập tin rồi gửi l&ecirc;n hệ thống.&nbsp;</p>\r\n\r\n<p>L&atilde;nh đạo nhiều địa phương cho biết thời hạn giải quyết hồ sơ nộp trực tuyến v&agrave; trực tiếp th&ocirc;ng thường giống nhau.&nbsp;</p>\r\n\r\n<p>Khi tiếp nhận hồ sơ, nếu đầy đủ v&agrave; hợp lệ th&igrave; c&ocirc;ng chức cấp phiếu tiếp nhận hồ sơ v&agrave; hẹn trả kết quả; nếu chưa đủ hồ sơ th&igrave; hướng dẫn bổ sung, ho&agrave;n thiện; c&ograve;n nếu hồ sơ kh&ocirc;ng đủ điều kiện th&igrave; từ chối v&agrave; cấp phiếu từ chối tiếp nhận, giải quyết hồ sơ.&nbsp;</p>\r\n\r\n<p>Việc đồng &yacute;, từ chối hay hẹn ng&agrave;y trả kết quả c&oacute; thể gửi qua tin nhắn hoặc email.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" id=\"image1718370\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080837801anh-1-2-1679800372945332316262.jpg\" /><img alt=\"demo\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080838065dich-vu-cong-quoc-gia-16798007882811721834561.jpg\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Người d&acirc;n, doanh nghiệp ở TP.HCM c&oacute; thể l&agrave;m hồ sơ trực tuyến qua Hệ thống th&ocirc;ng tin giải quyết thủ tục h&agrave;nh ch&iacute;nh</em></p>\r\n\r\n			<p><em>NHẬT THỊNH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Thuận tiện như mua h&agrave;ng online</strong></p>\r\n\r\n<p>Hiện dịch vụ c&ocirc;ng trực tuyến c&oacute; 2 mức độ: to&agrave;n tr&igrave;nh v&agrave; một phần. Khi sử dụng dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh, người d&acirc;n c&oacute; thể thanh to&aacute;n trực tuyến, nhận kết quả trực tuyến hoặc đăng k&yacute; nhận kết quả qua bưu điện.</p>\r\n\r\n<p>Khi đ&oacute;, việc nộp hồ sơ c&oacute; thể thực hiện ở bất cứ đ&acirc;u, ngay cả ngo&agrave;i giờ h&agrave;nh ch&iacute;nh giống như mua h&agrave;ng online.</p>\r\n\r\n<p>Tại TP.HCM, trước đ&acirc;y người d&acirc;n phải truy cập v&agrave;o cổng dịch vụ c&ocirc;ng của từng sở, ng&agrave;nh, địa phương, th&igrave; nay ch&iacute;nh quyền th&agrave;nh phố đ&atilde; hợp nhất th&agrave;nh cổng d&ugrave;ng chung (địa chỉ&nbsp;<a href=\"https://dichvucong.hochiminhcity.gov.vn/\" rel=\"nofollow\" target=\"_blank\">https://dichvucong.hochiminhcity.gov.vn</a>). Hệ thống n&agrave;y kết nối với Cổng dịch vụ c&ocirc;ng quốc gia.</p>\r\n\r\n<p>Hiện TP.HCM c&oacute; 1.766 thủ tục h&agrave;nh ch&iacute;nh, trong đ&oacute; c&oacute; 805 thủ tục được cung cấp dịch vụ c&ocirc;ng trực tuyến mức độ 3, mức độ 4, chiếm gần 46%. Năm 2022, người d&acirc;n nộp gần 6 triệu hồ sơ trực tuyến, cao gần gấp đ&ocirc;i so với năm trước (năm 2021 c&oacute; hơn 3,2 triệu hồ sơ).</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" id=\"image1718386\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080838245xac-nhan-cu-tru-16787944386501062103111.jpg\" /><img alt=\"demo2\" src=\"http://localhost/userfiles/images/dvcong_Muahangtructuyen/1680080837801anh-1-2-1679800372945332316262.jpg\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Nhiều cổng dịch vụ t&iacute;ch hợp t&iacute;nh năng x&aacute;c thực, định danh từ cơ sở dữ liệu quốc gia về d&acirc;n cư</em></p>\r\n\r\n			<p><em>NHẬT THỊNH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>2 mức độ dịch vụ c&ocirc;ng trực tuyến</strong></p>\r\n\r\n<p>Theo Nghị định 42/2022 của Ch&iacute;nh phủ, dịch vụ c&ocirc;ng trực tuyến c&oacute; 2 mức độ (trước đ&acirc;y c&oacute; 4 mức độ) gồm dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh v&agrave; dịch vụ c&ocirc;ng trực tuyến một phần.</p>\r\n\r\n<p>Trong đ&oacute;, dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh l&agrave; dịch vụ bảo đảm cung cấp to&agrave;n bộ th&ocirc;ng tin về thủ tục h&agrave;nh ch&iacute;nh, việc thực hiện v&agrave; giải quyết thủ tục h&agrave;nh ch&iacute;nh đều l&agrave;m tr&ecirc;n m&ocirc;i trường mạng.&nbsp;</p>\r\n\r\n<p>Việc trả kết quả được thực hiện trực tuyến hoặc qua dịch vụ bưu ch&iacute;nh c&ocirc;ng &iacute;ch.&nbsp;</p>\r\n\r\n<p>Dịch vụ c&ocirc;ng trực tuyến một phần l&agrave; dịch vụ kh&ocirc;ng đ&aacute;p ứng được c&aacute;c điều kiện n&ecirc;u tr&ecirc;n.</p>\r\n\r\n<p><strong>Sỹ Đ&ocirc;ng</strong></p>\r\n\r\n<p><strong>Nguồn:&nbsp;thanhnien.vn</strong></p>', '202304041417171680080837801anh-1-2-1679800372945332316262.jpg', 0, 7, NULL, NULL, 0, '2023-04-04 07:17:17', '2023-04-04 07:17:17'),
('20230404142127', 'Cách làm dịch vụ công trực tuyến tiện như mua hàng online', 'Dù chính quyền khuyến khích nộp hồ sơ trực tuyến từ nhiều năm qua nhưng nhiều người dân vẫn băn khoăn không biết nộp ở đâu, cách làm như thế nào, hiệu lực ra sao?\r\n\r\nHiện dịch vụ công trực tuyến được quy định tại Nghị định 42/2022 của Chính phủ về việc cung cấp thông tin và dịch vụ công trực tuyến của cơ quan nhà nước trên môi trường mạng.\r\n\r\nĐể làm hồ sơ trực tuyến, người dân và doanh nghiệp phải đăng ký tài khoản dịch vụ công. Hiện việc đăng ký tài khoản tại Cổng dịch vụ công quốc gia (https://dichvucong.gov.vn) khá đơn giản, trong đó yêu cầu tiên quyết là sim điện thoại đăng ký chính chủ.', 'Sỹ Đông', '<p><strong>D&ugrave; ch&iacute;nh quyền khuyến kh&iacute;ch nộp hồ sơ trực tuyến từ nhiều năm qua nhưng nhiều người d&acirc;n vẫn băn khoăn kh&ocirc;ng biết nộp ở đ&acirc;u, c&aacute;ch l&agrave;m như thế n&agrave;o, hiệu lực ra sao?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiện&nbsp;<a href=\"https://thanhnien.vn/napas-hoan-tien-toi-500000-dong-khi-thanh-toan-dich-vu-cong-truc-tuyen-1851526263.htm\" title=\"dịch vụ công trực tuyến\">dịch vụ c&ocirc;ng trực tuyến</a>&nbsp;được quy định tại Nghị định 42/2022 của Ch&iacute;nh phủ về việc cung cấp th&ocirc;ng tin v&agrave; dịch vụ c&ocirc;ng trực tuyến của cơ quan nh&agrave; nước tr&ecirc;n m&ocirc;i trường mạng.</p>\r\n\r\n<p>Để l&agrave;m hồ sơ trực tuyến, người d&acirc;n v&agrave; doanh nghiệp phải đăng k&yacute; t&agrave;i khoản dịch vụ c&ocirc;ng. Hiện việc đăng k&yacute; t&agrave;i khoản tại Cổng dịch vụ c&ocirc;ng quốc gia (<a href=\"https://dichvucong.gov.vn/\" rel=\"nofollow\" target=\"_blank\">https://dichvucong.gov.vn</a>) kh&aacute; đơn giản, trong đ&oacute; y&ecirc;u cầu ti&ecirc;n quyết l&agrave; sim điện thoại đăng k&yacute; ch&iacute;nh chủ.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Cách làm dịch vụ công trực tuyến tiện như mua hàng online - Ảnh 1\" id=\"image1718376\" src=\"http://localhost:8000/userfiles/images/dvcong_Muahangtructuyen/1680080838065dich-vu-cong-quoc-gia-16798007882811721834561.jpg\" style=\"height:360px; width:640px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Muốn nộp hồ sơ trực tuyến, người d&acirc;n phải đăng k&yacute; t&agrave;i khoản th&ocirc;ng qua cổng dịch vụ c&ocirc;ng</em></p>\r\n\r\n			<p><em>CHỤP M&Agrave;N H&Igrave;NH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Khi nộp hồ sơ, người d&acirc;n v&agrave; doanh nghiệp truy cập v&agrave;o Cổng dịch vụ c&ocirc;ng quốc gia hoặc cổng dịch vụ c&ocirc;ng của c&aacute;c bộ, ng&agrave;nh, địa phương. Th&ocirc;ng thường, c&aacute;c&nbsp;<a href=\"https://thanhnien.vn/tphcm-hop-nhat-cong-dich-vu-cong-1851515847.htm\" title=\"cổng dịch vụ công\">cổng dịch vụ c&ocirc;ng</a>&nbsp;đều liệt k&ecirc; r&otilde; th&agrave;nh phần hồ sơ, biểu mẫu, thời gian giải quyết, mức ph&iacute;, lệ ph&iacute;.</p>\r\n\r\n<p>Người d&acirc;n c&oacute; thể tải biểu mẫu về điền c&aacute;c th&ocirc;ng tin, scan văn bản hoặc chụp h&igrave;nh giấy tờ li&ecirc;n quan đ&iacute;nh k&egrave;m tập tin rồi gửi l&ecirc;n hệ thống.&nbsp;</p>\r\n\r\n<p>L&atilde;nh đạo nhiều địa phương cho biết thời hạn giải quyết hồ sơ nộp trực tuyến v&agrave; trực tiếp th&ocirc;ng thường giống nhau.&nbsp;</p>\r\n\r\n<p>Khi tiếp nhận hồ sơ, nếu đầy đủ v&agrave; hợp lệ th&igrave; c&ocirc;ng chức cấp phiếu tiếp nhận hồ sơ v&agrave; hẹn trả kết quả; nếu chưa đủ hồ sơ th&igrave; hướng dẫn bổ sung, ho&agrave;n thiện; c&ograve;n nếu hồ sơ kh&ocirc;ng đủ điều kiện th&igrave; từ chối v&agrave; cấp phiếu từ chối tiếp nhận, giải quyết hồ sơ.&nbsp;</p>\r\n\r\n<p>Việc đồng &yacute;, từ chối hay hẹn ng&agrave;y trả kết quả c&oacute; thể gửi qua tin nhắn hoặc email.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Cách làm dịch vụ công trực tuyến tiện như mua hàng online - Ảnh 2\" id=\"image1718370\" src=\"http://localhost:8000/userfiles/images/dvcong_Muahangtructuyen/1680080837801anh-1-2-1679800372945332316262.jpg\" style=\"height:431px; width:640px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Người d&acirc;n, doanh nghiệp ở TP.HCM c&oacute; thể l&agrave;m hồ sơ trực tuyến qua Hệ thống th&ocirc;ng tin giải quyết thủ tục h&agrave;nh ch&iacute;nh</em></p>\r\n\r\n			<p><em>NHẬT THỊNH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Thuận tiện như mua h&agrave;ng online</strong></p>\r\n\r\n<p>Hiện dịch vụ c&ocirc;ng trực tuyến c&oacute; 2 mức độ: to&agrave;n tr&igrave;nh v&agrave; một phần. Khi sử dụng dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh, người d&acirc;n c&oacute; thể thanh to&aacute;n trực tuyến, nhận kết quả trực tuyến hoặc đăng k&yacute; nhận kết quả qua bưu điện.</p>\r\n\r\n<p>Khi đ&oacute;, việc nộp hồ sơ c&oacute; thể thực hiện ở bất cứ đ&acirc;u, ngay cả ngo&agrave;i giờ h&agrave;nh ch&iacute;nh giống như mua h&agrave;ng online.</p>\r\n\r\n<p>Tại TP.HCM, trước đ&acirc;y người d&acirc;n phải truy cập v&agrave;o cổng dịch vụ c&ocirc;ng của từng sở, ng&agrave;nh, địa phương, th&igrave; nay ch&iacute;nh quyền th&agrave;nh phố đ&atilde; hợp nhất th&agrave;nh cổng d&ugrave;ng chung (địa chỉ&nbsp;<a href=\"https://dichvucong.hochiminhcity.gov.vn/\" rel=\"nofollow\" target=\"_blank\">https://dichvucong.hochiminhcity.gov.vn</a>). Hệ thống n&agrave;y kết nối với Cổng dịch vụ c&ocirc;ng quốc gia.</p>\r\n\r\n<p>Hiện TP.HCM c&oacute; 1.766 thủ tục h&agrave;nh ch&iacute;nh, trong đ&oacute; c&oacute; 805 thủ tục được cung cấp dịch vụ c&ocirc;ng trực tuyến mức độ 3, mức độ 4, chiếm gần 46%. Năm 2022, người d&acirc;n nộp gần 6 triệu hồ sơ trực tuyến, cao gần gấp đ&ocirc;i so với năm trước (năm 2021 c&oacute; hơn 3,2 triệu hồ sơ).</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:640px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"Cách làm dịch vụ công trực tuyến tiện như mua hàng online - Ảnh 3\" id=\"image1718386\" src=\"http://localhost:8000/userfiles/images/dvcong_Muahangtructuyen/1680080838245xac-nhan-cu-tru-16787944386501062103111.jpg\" style=\"height:440px; width:640px\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><em>Nhiều cổng dịch vụ t&iacute;ch hợp t&iacute;nh năng x&aacute;c thực, định danh từ cơ sở dữ liệu quốc gia về d&acirc;n cư</em></p>\r\n\r\n			<p><em>NHẬT THỊNH</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>2 mức độ dịch vụ c&ocirc;ng trực tuyến</strong></p>\r\n\r\n<p>Theo Nghị định 42/2022 của Ch&iacute;nh phủ, dịch vụ c&ocirc;ng trực tuyến c&oacute; 2 mức độ (trước đ&acirc;y c&oacute; 4 mức độ) gồm dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh v&agrave; dịch vụ c&ocirc;ng trực tuyến một phần.</p>\r\n\r\n<p>Trong đ&oacute;, dịch vụ c&ocirc;ng trực tuyến to&agrave;n tr&igrave;nh l&agrave; dịch vụ bảo đảm cung cấp to&agrave;n bộ th&ocirc;ng tin về thủ tục h&agrave;nh ch&iacute;nh, việc thực hiện v&agrave; giải quyết thủ tục h&agrave;nh ch&iacute;nh đều l&agrave;m tr&ecirc;n m&ocirc;i trường mạng.&nbsp;</p>\r\n\r\n<p>Việc trả kết quả được thực hiện trực tuyến hoặc qua dịch vụ bưu ch&iacute;nh c&ocirc;ng &iacute;ch.&nbsp;</p>\r\n\r\n<p>Dịch vụ c&ocirc;ng trực tuyến một phần l&agrave; dịch vụ kh&ocirc;ng đ&aacute;p ứng được c&aacute;c điều kiện n&ecirc;u tr&ecirc;n.</p>\r\n\r\n<p><strong>Sỹ Đ&ocirc;ng</strong></p>\r\n\r\n<p><strong>Nguồn:&nbsp;thanhnien.vn</strong></p>', '202304041421271680080837801anh-1-2-1679800372945332316262.jpg', 10, 7, NULL, NULL, 0, '2023-04-04 07:21:27', '2023-04-04 07:21:27'),
('20230405081738', 'Phát triển thành phố Châu Đốc trở thành đô thị du lịch thông minh', '(Cổng TTĐT tỉnh AG)- Sáng 04/4, Ủy viên Ban Chấp hành Trung ương Đảng, Bí thư Tỉnh ủy An Giang Lê Hồng Quang đã đến dự Hội nghị Ban Thường vụ Thành ủy Châu Đốc sơ kết tình hình thực hiện nhiệm vụ chính trị quý I và đề ra nhiệm vụ quý II/2023. Bí thư Thành ủy, Chủ tịch UBND thành phố Châu Đốc Lâm Quang Thi chủ trì Hội nghị.', 'Thu Thảo', '<p>(Cổng TTĐT tỉnh AG)- S&aacute;ng 04/4, Ủy vi&ecirc;n Ban Chấp h&agrave;nh Trung ương Đảng, B&iacute; thư Tỉnh ủy An Giang L&ecirc; Hồng Quang đ&atilde; đến dự Hội nghị Ban Thường vụ Th&agrave;nh ủy Ch&acirc;u Đốc sơ kết t&igrave;nh h&igrave;nh thực hiện nhiệm vụ ch&iacute;nh trị qu&yacute; I v&agrave; đề ra nhiệm vụ qu&yacute; II/2023. B&iacute; thư Th&agrave;nh ủy, Chủ tịch UBND th&agrave;nh phố Ch&acirc;u Đốc L&acirc;m Quang Thi chủ tr&igrave; Hội nghị.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/phat-trien-tp-chau-doc-tro-thanh-do-thi-du-lich-thong-minh/image001.jpg\" style=\"height:564px; width:1430px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Quang cảnh Hội nghị</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/phat-trien-tp-chau-doc-tro-thanh-do-thi-du-lich-thong-minh/image003.jpg\" style=\"height:556px; width:911px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Đại biểu thảo luận</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/phat-trien-tp-chau-doc-tro-thanh-do-thi-du-lich-thong-minh/image005.jpg\" style=\"height:601px; width:1040px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Ủy vi&ecirc;n Ban Chấp h&agrave;nh Trung ương Đảng, B&iacute; thư Tỉnh ủy An Giang L&ecirc; Hồng Quang ph&aacute;t biểu chỉ đạo Hội nghị</strong></p>\r\n\r\n<p dir=\"ltr\">Tại Hội nghị đ&atilde; th&ocirc;ng qua dự thảo b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh thực hiện nhiệm vụ ph&aacute;t triển kinh tế - x&atilde; hội, thu, chi ng&acirc;n s&aacute;ch, thực hiện đầu tư x&acirc;y dựng, c&ocirc;ng t&aacute;c đ&agrave;o tạo, giải quyết việc l&agrave;m v&agrave; c&ocirc;ng t&aacute;c x&oacute;a ngh&egrave;o qu&yacute; I, nhiệm vụ trọng t&acirc;m qu&yacute; II/2023; th&ocirc;ng qua dự thảo b&aacute;o c&aacute;o c&ocirc;ng t&aacute;c chuẩn bị Lễ hội V&iacute;a B&agrave; Ch&uacute;a Xứ n&uacute;i Sam v&agrave; di t&iacute;ch lịch sử, văn h&oacute;a được xếp hạng năm 2023. Đồng thời, th&ocirc;ng qua c&aacute;c tờ tr&igrave;nh của UBND th&agrave;nh phố về việc xin chủ trương: X&acirc;y dựng đền thờ b&agrave; Ch&acirc;u Thị Tế; tiếp nhận t&agrave;i trợ kinh ph&iacute; tổ chức chương tr&igrave;nh s&acirc;n khấu h&oacute;a v&agrave; biểu diễn nghệ thuật Lễ hội V&iacute;a B&agrave; Ch&uacute;a Xứ n&uacute;i Sam năm 2023; tổ chức lễ đặt t&ecirc;n đường danh nh&acirc;n Phạm Văn Bạch&hellip;</p>\r\n\r\n<p dir=\"ltr\">Theo b&aacute;o c&aacute;o của UBND th&agrave;nh phố Ch&acirc;u Đốc, trong qu&yacute; I/2023, kinh tế - x&atilde; hội th&agrave;nh phố Ch&acirc;u Đốc tiếp tục ph&aacute;t triển. Đặc biệt, hoạt động du lịch nhiều khởi sắc, 3 th&aacute;ng đầu năm, th&agrave;nh phố đ&oacute;n 2,45 triệu lượt du kh&aacute;ch (so c&ugrave;ng kỳ tăng 41,86%, đạt 59,76% kế hoạch năm 2023). Lượt kh&aacute;ch lưu tr&uacute; ước đạt 13,5% so lượt kh&aacute;ch tham quan (đạt 112,5% kế hoạch). Tổng thu ng&acirc;n s&aacute;ch địa phương ước đạt tr&ecirc;n 166,7 tỷ đồng (đạt 34,48% so dự to&aacute;n tỉnh giao, đạt 33,78% so dự to&aacute;n th&agrave;nh phố giao, đạt 92,53% so c&ugrave;ng kỳ). C&aacute;c c&ocirc;ng tr&igrave;nh, dự &aacute;n đầu tư, x&acirc;y dựng được quan t&acirc;m, đ&ocirc;n đốc, đẩy nhanh tiến độ thực hiện, nhất l&agrave; c&aacute;c dự &aacute;n, c&ocirc;ng tr&igrave;nh trọng điểm. C&ocirc;ng t&aacute;c an sinh x&atilde; hội được thực hiện tốt. Quốc ph&ograve;ng - an ninh, trật tự an to&agrave;n x&atilde; hội được giữ vững.</p>\r\n\r\n<p dir=\"ltr\">C&ocirc;ng t&aacute;c X&acirc;y dựng đảng, x&acirc;y dựng hệ thống ch&iacute;nh trị được quan t&acirc;m chỉ đạo tr&ecirc;n c&aacute;c mặt ch&iacute;nh trị tư tưởng, tổ chức v&agrave; đạo đức; tạo quyết t&acirc;m ch&iacute;nh trị, sự đồng thuận trong Đảng bộ; tăng cường niềm tin của c&aacute;n bộ, đảng vi&ecirc;n v&agrave; nh&acirc;n d&acirc;n đối với cấp ủy đảng, ch&iacute;nh quyền; tạo động lực th&uacute;c đẩy phục hồi, ph&aacute;t triển kinh tế - x&atilde; hội của th&agrave;nh phố.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Ph&aacute;t biểu chỉ đạo Hội nghị, B&iacute; thư Tỉnh ủy An Giang L&ecirc; Hồng Quang ghi nhận, đ&aacute;nh gi&aacute; cao sự nỗ lực, phấn đấu của c&aacute;c cấp ủy Đảng, ch&iacute;nh quyền địa phương, đơn vị tr&ecirc;n địa b&agrave;n th&agrave;nh phố trong triển khai thực hiện nhiệm vụ ch&iacute;nh trị những th&aacute;ng đầu năm đạt nhiều kết quả. Để thực hiện thắng lợi nhiệm vụ năm 2023, B&iacute; thư Tỉnh ủy đề nghị, c&aacute;c cấp ủy Đảng, ch&iacute;nh quyền địa phương, đơn vị b&aacute;m s&aacute;t nghị quyết, kế hoạch năm 2023 chủ động triển khai thực hiện c&aacute;c đầu c&ocirc;ng việc được giao; phấn đấu thực hiện đạt v&agrave; vượt c&aacute;c chỉ ti&ecirc;u đề ra. Theo đ&oacute;, n&acirc;ng cao chất lượng c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, b&aacute;m s&aacute;t thực tế cơ sở, kịp thời tuy&ecirc;n truyền, tạo đồng thuận trong nh&acirc;n d&acirc;n trong thực hiện c&aacute;c nhiệm vụ ch&iacute;nh trị của th&agrave;nh phố. Tiếp tục thực hiện Kết luận 21/KL-TW (kh&oacute;a XIII)&nbsp;về&nbsp;đẩy mạnh x&acirc;y dựng, chỉnh đốn Đảng v&agrave; hệ thống ch&iacute;nh trị; ki&ecirc;n quyết ngăn chặn, đẩy l&ugrave;i, xử l&yacute; nghi&ecirc;m c&aacute;n bộ, đảng vi&ecirc;n suy tho&aacute;i về tư tưởng ch&iacute;nh trị, đạo đức lối sống, biểu hiện &ldquo;tự diễn biến&rdquo;, &ldquo;tự chuyển h&oacute;a&rdquo;,&nbsp;gắn với tiếp tục đẩy mạnh học tập v&agrave; l&agrave;m theo tư tưởng, đạo đức, phong c&aacute;ch Hồ Ch&iacute; Minh.</p>\r\n\r\n<p dir=\"ltr\">Đặc biệt, B&iacute; thư Tỉnh ủy y&ecirc;u cầu việc tổ chức sơ kết giữa nhiệm kỳ thực hiện Nghị quyết Đại hội Đảng bộ tỉnh, th&agrave;nh phố Ch&acirc;u Đốc v&agrave; c&aacute;c chi, đảng bộ cơ sở phải đồng bộ, nghi&ecirc;m t&uacute;c, chặt chẽ, đảm bảo t&iacute;nh khoa học, phản &aacute;nh đ&uacute;ng thực chất để c&aacute;c cấp ủy tiếp tục l&atilde;nh, chỉ đạo thực hiện thắng lợi nghị quyết đại hội trong những năm c&ograve;n lại của nhiệm kỳ.</p>\r\n\r\n<p dir=\"ltr\">Về kinh tế - x&atilde; hội, quốc ph&ograve;ng - an ninh, đồng ch&iacute; L&ecirc; Hồng Quang y&ecirc;u cầu địa phương cần triển khai hiệu quả chủ trương ph&aacute;t triển du lịch t&acirc;m linh gắn với du lịch sinh th&aacute;i. Tăng cường sự l&atilde;nh đạo của Đảng, quản l&yacute; nh&agrave; nước trong quy hoạch, x&acirc;y dựng, quản l&yacute; v&agrave; ph&aacute;t triển đ&ocirc; thị th&agrave;nh phố. Tập trung thực hiện c&aacute;c giải ph&aacute;p th&aacute;o gỡ kh&oacute; khăn cho doanh nghiệp, cải thiện m&ocirc;i trường kinh doanh, n&acirc;ng cao năng lực cạnh tranh. Quan t&acirc;m đầu tư x&acirc;y dựng kết cấu hạ tầng kỹ thuật, để ph&aacute;t triển th&agrave;nh phố trở th&agrave;nh đ&ocirc; thị du lịch th&ocirc;ng minh. Tổ chức chu đ&aacute;o Lễ hội cấp quốc gia V&iacute;a B&agrave; Ch&uacute;a Xứ N&uacute;i Sam 2023 để quảng b&aacute; c&aacute;c gi&aacute; trị văn h&oacute;a đặc sắc của Ch&acirc;u Đốc v&agrave; tỉnh An Giang&hellip;./.</p>\r\n\r\n<p dir=\"ltr\"><strong>Thu Thảo</strong></p>', '20230405081738image005.jpg', 0, 7, NULL, NULL, 0, '2023-04-05 01:17:38', '2023-04-05 01:17:38'),
('20230405083654', 'Liên minh Hợp tác xã tỉnh An Giang kỷ niệm 30 năm thành lập', '(Cổng TTĐT tỉnh AG)- Sáng 31/3, Ban Thường vụ Liên minh Hợp tác xã (HTX) tỉnh An Giang tổ chức buổi họp mặt kỷ niệm 30 năm Ngày thành lập Liên minh HTX tỉnh An Giang (30/3/1993 -30/3/2023); 77 năm Ngày truyền thống HTX Việt Nam (11/4/1946 - 11/4/2023) và Tổng kết công tác thi đua, khen thưởng khối các HTX, Quỹ tín dụng nhân dân năm 2022. Đại diện lãnh đạo Liên minh HTX Việt Nam, Phó Chủ tịch UBND tỉnh Trần Anh Thư cùng lãnh đạo các sở, ban ngành, đoàn thể tỉnh tham dự.', 'Trọng Tín', '<p>(Cổng TTĐT tỉnh AG)- S&aacute;ng 31/3, Ban Thường vụ Li&ecirc;n minh Hợp t&aacute;c x&atilde; (HTX) tỉnh An Giang tổ chức buổi họp mặt kỷ niệm 30 năm Ng&agrave;y th&agrave;nh lập Li&ecirc;n minh HTX tỉnh An Giang (30/3/1993 -30/3/2023); 77 năm Ng&agrave;y truyền thống HTX Việt Nam (11/4/1946 - 11/4/2023) v&agrave; Tổng kết c&ocirc;ng t&aacute;c thi đua, khen thưởng khối c&aacute;c HTX, Quỹ t&iacute;n dụng nh&acirc;n d&acirc;n năm 2022. Đại diện l&atilde;nh đạo Li&ecirc;n minh HTX Việt Nam, Ph&oacute; Chủ tịch UBND tỉnh Trần Anh Thư c&ugrave;ng l&atilde;nh đạo c&aacute;c sở, ban ng&agrave;nh, đo&agrave;n thể tỉnh tham dự.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/1%2B(5).jpg\" style=\"height:858px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Đại biểu tham dự buổi họp mặt</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/2%2B(3).jpg\" style=\"height:994px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Li&ecirc;n minh HTX tỉnh An Giang đ&atilde; k&yacute; kết bi&ecirc;n bản ghi nhớ phối hợp hoạt động với c&aacute;c đơn vị, địa phương v&agrave; doanh nghiệp trong c&ocirc;ng t&aacute;c ph&aacute;t triển kinh tế tập thể, HTX năm 2023</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/3%2B(3).jpg\" style=\"height:892px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c c&aacute; nh&acirc;n c&oacute; nhiều đ&oacute;ng g&oacute;p v&agrave;o sự nghiệp x&acirc;y dựng v&agrave; ph&aacute;t triển HTX được trao tặng Kỷ niệm chương &ldquo;V&igrave; sự nghiệp ph&aacute;t triển HTX&rdquo; của Li&ecirc;n minh HTX Việt Nam</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/5%2B(1).jpg\" style=\"height:885px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c tập thể, c&aacute; nh&acirc;n đ&atilde; c&oacute; th&agrave;nh t&iacute;ch ho&agrave;n th&agrave;nh xuất sắc nhiệm vụ năm 2022 nhận Bằng khen của Ban Chấp h&agrave;nh Li&ecirc;n minh HTX Việt Nam</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/6.jpg\" style=\"height:923px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/7.jpg\" style=\"height:893px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c tập thể, c&aacute; nh&acirc;n c&oacute; nhiều đ&oacute;ng g&oacute;p v&agrave;o qu&aacute; tr&igrave;nh đổi mới, ph&aacute;t triển kinh tế tập thể, HTX tr&ecirc;n địa b&agrave;n tỉnh giai đoạn 1993-2023</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/9.jpg\" style=\"height:1000px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c tập thể ho&agrave;n th&agrave;nh xuất sắc, to&agrave;n diện nhiệm vụ c&ocirc;ng t&aacute;c, dẫn đầu phong tr&agrave;o thi đua y&ecirc;u nước năm 2022 của Li&ecirc;n minh HTX tỉnh An Giang được nhận Cờ thi đua của UBND tỉnh</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/lien-minh-hop-tac-xa-tinh-an-giang-ky-niem-30-nam-thanh-lap/9.jpg\" style=\"height:1000px; width:1600px\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c tập thể c&oacute; th&agrave;nh t&iacute;ch trong phong tr&agrave;o thi đua y&ecirc;u nước năm 2022 của Li&ecirc;n minh HTX tỉnh An Giang được nhận Bằng khen của Chủ tịch UBND tỉnh</strong></p>\r\n\r\n<p dir=\"ltr\">Trải qua 30 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển (30/3/1993 - 30/3/2023) với nhiều t&ecirc;n gọi kh&aacute;c nhau như: Hội đồng l&acirc;m thời c&aacute;c doanh nghiệp ngo&agrave;i quốc doanh tỉnh An Giang; Hội đồng l&acirc;m thời Li&ecirc;n minh c&aacute;c HTX tỉnh An Giang; Hội đồng Li&ecirc;n minh HTX tỉnh An Giang v&agrave; Li&ecirc;n minh HTX tỉnh An Giang.</p>\r\n\r\n<p dir=\"ltr\">Dưới sự l&atilde;nh, chỉ đạo của Li&ecirc;n minh HTX Việt Nam, Tỉnh ủy, HĐND tỉnh, UBND tỉnh, sự hỗ trợ của c&aacute;c ng&agrave;nh, c&aacute;c cấp c&oacute; li&ecirc;n quan, c&aacute;c thế hệ l&atilde;nh đạo Li&ecirc;n minh HTX tỉnh An Giang đ&atilde; ph&aacute;t huy tinh thần d&acirc;n chủ, đo&agrave;n kết, tr&aacute;ch nhiệm, kh&ocirc;ng ngừng đổi mới s&aacute;ng tạo, c&aacute;ch l&agrave;m hay trong l&atilde;nh đạo điều h&agrave;nh, tổ chức thực hiện c&aacute;c hoạt động, phong tr&agrave;o ph&aacute;t triển kinh tế tập thể, HTX của tỉnh nh&agrave;. Nhiều m&ocirc; h&igrave;nh kinh tế tập thể, HTX được h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển, số lượng th&agrave;nh vi&ecirc;n tăng về số lượng, đảm bảo về chất lượng. Số HTX, tổ hợp t&aacute;c th&agrave;nh lập mới tăng h&agrave;ng năm, đa dạng về loại h&igrave;nh, sản xuất kinh doanh gắn với chuỗi gi&aacute; trị sản phẩm chủ lực ng&agrave;y c&agrave;ng được mở rộng, hiệu quả hoạt động được n&acirc;ng cao v&agrave; ph&aacute;t triển bền vững, mang lại nhiều lợi &iacute;ch cho th&agrave;nh vi&ecirc;n.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Đến nay to&agrave;n tỉnh đ&atilde; c&oacute; 278 HTX với khoảng 139.723 th&agrave;nh vi&ecirc;n, hoạt động tr&ecirc;n 6 lĩnh vực: n&ocirc;ng nghiệp, t&iacute;n dụng, giao th&ocirc;ng vận tải, tiểu thủ c&ocirc;ng nghiệp, thương mại - dịch vụ - du lịch v&agrave; khai kho&aacute;ng. Doanh thu b&igrave;nh qu&acirc;n của HTX, Li&ecirc;n hiệp HTX khoảng 5,5 tỷ đồng/năm, ri&ecirc;ng với HTX n&ocirc;ng nghiệp c&oacute; doanh thu b&igrave;nh qu&acirc;n tr&ecirc;n 2,7 tỷ đồng/năm. Qua đ&oacute; th&uacute;c đẩy ph&aacute;t triển kinh tế, tạo việc l&agrave;m, tăng thu nhập, x&oacute;a đ&oacute;i giảm ngh&egrave;o cho c&aacute;c th&agrave;nh vi&ecirc;n v&agrave; người lao động, g&oacute;p phần x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, bảo đảm an sinh x&atilde; hội, từng bước khẳng định vị tr&iacute;, vai tr&ograve; nền tảng của khu vực kinh tế tập thể, HTX trong nền kinh tế quốc d&acirc;n đ&oacute;ng g&oacute;p v&agrave;o sự ph&aacute;t triển kinh tế - x&atilde; hội của tỉnh nh&agrave;.</p>\r\n\r\n<p dir=\"ltr\">Tại buổi họp mặt, Li&ecirc;n minh HTX tỉnh An Giang đ&atilde; k&yacute; kết bi&ecirc;n bản ghi nhớ phối hợp hoạt động với c&aacute;c đơn vị, địa phương v&agrave; doanh nghiệp trong c&ocirc;ng t&aacute;c ph&aacute;t triển kinh tế tập thể, HTX năm 2023. Dịp n&agrave;y, 15 c&aacute; nh&acirc;n c&oacute; nhiều đ&oacute;ng g&oacute;p v&agrave;o sự nghiệp x&acirc;y dựng v&agrave; ph&aacute;t triển HTX được trao tặng Kỷ niệm chương &ldquo;V&igrave; sự nghiệp ph&aacute;t triển HTX&rdquo; của Li&ecirc;n minh HTX Việt Nam; 2 tập thể v&agrave; 13 c&aacute; nh&acirc;n đ&atilde; c&oacute; th&agrave;nh t&iacute;ch ho&agrave;n th&agrave;nh xuất sắc nhiệm vụ năm 2022 nhận Bằng khen của Ban Chấp h&agrave;nh Li&ecirc;n minh HTX Việt Nam. 7 tập thể ho&agrave;n th&agrave;nh xuất sắc, to&agrave;n diện nhiệm vụ c&ocirc;ng t&aacute;c, dẫn đầu phong tr&agrave;o thi đua y&ecirc;u nước năm 2022 của Li&ecirc;n minh HTX tỉnh An Giang được nhận Cờ thi đua của UBND tỉnh. 10 tập thể, 15 c&aacute; nh&acirc;n c&oacute; nhiều đ&oacute;ng g&oacute;p v&agrave;o qu&aacute; tr&igrave;nh đổi mới, ph&aacute;t triển kinh tế tập thể, HTX tr&ecirc;n địa b&agrave;n tỉnh giai đoạn 1993-2023 v&agrave; 13 tập thể c&oacute; th&agrave;nh t&iacute;ch trong phong tr&agrave;o thi đua y&ecirc;u nước năm 2022 của Li&ecirc;n minh HTX tỉnh An Giang được nhận Bằng khen của Chủ tịch UBND tỉnh./.</p>\r\n\r\n<p dir=\"ltr\"><strong>Trọng T&iacute;n</strong></p>', '202304050836547.jpg', 94, 8, NULL, NULL, 0, '2023-04-05 01:36:54', '2023-04-05 01:36:54'),
('20230412084921', 'Hướng dẫn quy trình xét chọn danh hiệu chứng nhận Hàng Việt Nam chất lượng cao và kinh nghiệm xúc tiến thị trường', '(Cổng TTĐT tỉnh AG)- Ngày 10/4, Sở Công Thương An Giang phối hợp Hiệp hội Doanh nghiệp An Giang và Hội Doanh nghiệp Hàng Việt Nam Chất lượng cao tổ chức khai giảng lớp tập huấn hướng dẫn hỗ trợ quy trình xét chọn danh hiệu chứng nhận Hàng Việt Nam Chất lượng cao và Bộ tiêu chí “Hàng Việt Nam Chất lượng cao - Chuẩn hội nhập”.', 'H.C', '<p>(Cổng TTĐT tỉnh AG)- Ng&agrave;y 10/4, Sở C&ocirc;ng Thương An Giang phối hợp Hiệp hội Doanh nghiệp An Giang v&agrave; Hội Doanh nghiệp H&agrave;ng Việt Nam Chất lượng cao tổ chức khai giảng lớp tập huấn hướng dẫn hỗ trợ quy tr&igrave;nh x&eacute;t chọn danh hiệu chứng nhận H&agrave;ng Việt Nam Chất lượng cao v&agrave; Bộ ti&ecirc;u ch&iacute; &ldquo;H&agrave;ng Việt Nam Chất lượng cao - Chuẩn hội nhập&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Tr&ecirc;n 80 học vi&ecirc;n l&agrave; đại diện sở, ban ng&agrave;nh tỉnh, ph&ograve;ng kinh tế; kinh tế - hạ tầng, doanh nghiệp sản xuất v&agrave; kinh doanh, hợp t&aacute;c x&atilde;, tổ hợp t&aacute;c sản xuất n&ocirc;ng nghiệp tham dự.</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/QuyTrinh/image019.jpg\" style=\"height:100%; width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Quang cảnh lớp tập huấn</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/QuyTrinh/image021.jpg\" style=\"width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Ph&oacute; Chủ tịch Hiệp Hội Doanh nghiệp tỉnh An Giang Nguyễn Thị Kim Chi ph&aacute;t biểu khai giảng tập huấn</strong></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"http://localhost:8000/userfiles/images/QuyTrinh/image023.jpg\" style=\"width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>C&aacute;c học vi&ecirc;n tham gia tập huấn</strong></p>\r\n\r\n<p dir=\"ltr\">Trong 2 ng&agrave;y (10 v&agrave; 11/4), c&aacute;c học vi&ecirc;n được trang bị 2 chuy&ecirc;n đề về: X&acirc;y dựng ti&ecirc;u chuẩn v&agrave; ph&aacute;t triển doanh nghiệp ph&ugrave; hợp cho H&agrave;ng Việt Nam Chất lượng cao v&agrave; kinh nghiệm x&uacute;c tiến thương mại, kết nối thị trường trong ngo&agrave;i nước - kỹ năng trưng b&agrave;y, giới thiệu sản phẩm th&agrave;nh c&ocirc;ng tại c&aacute;c sự kiện x&uacute;c tiến thương mại.&nbsp; Trong đ&oacute;, cung cấp c&aacute;c điều kiện cụ thể về ti&ecirc;u chuẩn chất lượng tối thiểu doanh nghiệp cần c&oacute; khi tham gia x&eacute;t chọn; quy tr&igrave;nh x&acirc;y dựng phiếu v&agrave; điều tra về người ti&ecirc;u d&ugrave;ng, th&ocirc;ng tin thị trường cho c&aacute;c doanh nghiệp sản xuất v&agrave; doanh nghiệp cung cấp dịch vụ. Đồng thời, lưu &yacute; doanh nghiệp việc x&acirc;y dựng c&aacute;c hạng mục (cải thiện chất lượng sản phẩm, dịch vụ, hướng đến chuy&ecirc;n nghiệp h&oacute;a từ kh&acirc;u quản l&yacute; đến sản xuất v&agrave; cung ứng, ph&aacute;t triển thương hiệu&hellip;) mang lại lợi thế cạnh tranh tr&ecirc;n thị trường.</p>\r\n\r\n<p dir=\"ltr\">Đ&acirc;y l&agrave; hoạt động trong dự &aacute;n tăng cường năng lực cạnh tranh khu vực tư nh&acirc;n Việt Nam (IPSC) do Cơ quan Ph&aacute;t triển Quốc tế Hoa Kỳ (USAID) t&agrave;i trợ; Cục Ph&aacute;t triển Doanh nghiệp (AED), Bộ Kế hoạch v&agrave; Đầu tư (MPI) l&agrave; chủ dự &aacute;n. Hội Doanh nghiệp H&agrave;ng Việt Nam Chất lượng cao phối hợp c&aacute;c Sở, ban ng&agrave;nh tỉnh, Hiệp Hội Doanh nghiệp tỉnh tổ chức, nhằm hỗ trợ doanh nghiệp khởi nghiệp, doanh nghiệp sản xuất hiểu r&otilde; c&aacute;c điều kiện x&acirc;y dựng nh&atilde;n hiệu, thương hiệu, quy tr&igrave;nh x&eacute;t chọn, gi&uacute;p năm 2024 An Giang c&oacute; tr&ecirc;n 20 doanh nghiệp đạt chứng nhận H&agrave;ng Việt Nam Chất lượng cao./.</p>\r\n\r\n<p dir=\"ltr\"><strong>H.C</strong></p>', '20230412084921image021.jpg', 0, 3, NULL, NULL, 0, '2023-04-12 01:49:21', '2023-04-12 01:49:21'),
('20230412085137', 'An Giang phấn đấu đến năm 2025 số lượng hợp tác xã đạt từ 380-400', '(Cổng TTĐT tỉnh AG) - Ngày 17/3, UBND tỉnh ban hành Kế hoạch số 192/KH-UBND để thực hiện Nghị quyết số 46/NQ-HĐND ngày 08/12/2021 của HĐND tỉnh về phát triển kinh tế tập thể (KTTT), hợp tác xã (HTX) tỉnh An Giang giai đoạn 2021-2025.', 'Hải Nhu', '<p>(Cổng TTĐT tỉnh AG) - Ng&agrave;y 17/3, UBND tỉnh ban h&agrave;nh Kế hoạch số 192/KH-UBND để thực hiện Nghị quyết số 46/NQ-HĐND ng&agrave;y 08/12/2021 của HĐND tỉnh về ph&aacute;t triển kinh tế tập thể (KTTT), hợp t&aacute;c x&atilde; (HTX) tỉnh An Giang giai đoạn 2021-2025.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Mục ti&ecirc;u nhằm cụ thể h&oacute;a v&agrave; triển khai c&aacute;c nội dung Nghị quyết số 46/NQ-HĐND về ph&aacute;t triển KTTT, HTX tỉnh An Giang giai đoạn 2021-2025. Đồng thời, củng cố, n&acirc;ng cao năng lực tổ chức v&agrave; hoạt động của khu vực KTTT, HTX tr&ecirc;n địa b&agrave;n tỉnh; x&acirc;y dựng mối li&ecirc;n kết chặt chẽ, hợp t&aacute;c đa dạng, bền vững giữa HTX, tổ hợp t&aacute;c (THT) với c&aacute;c chủ thể kinh tế kh&aacute;c g&oacute;p phần h&igrave;nh th&agrave;nh chuỗi gi&aacute; trị từ sản xuất đến chế&nbsp; biến, ti&ecirc;u thụ sản phẩm, h&agrave;ng h&oacute;a, dịch vụ.</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"https://angiang.gov.vn/wps/wcm/connect/f5118948-bfbf-432c-be07-bbf390e68feb/1/image001.jpg?MOD=AJPERES&amp;CVID=\" style=\"width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>An Giang sẽ x&acirc;y dựng 25-30 m&ocirc; h&igrave;nh tổ chức KTTT, HTX ứng dụng c&ocirc;ng nghệ cao, c&oacute; sản phẩm thuộc ng&agrave;nh h&agrave;ng chủ lực của tỉnh</strong></p>\r\n\r\n<p dir=\"ltr\">Đồng thời l&agrave;m căn cứ để c&aacute;c sở, ban, ng&agrave;nh tỉnh, UBND c&aacute;c huyện, thị x&atilde;, th&agrave;nh phố theo chức năng nhiệm vụ của m&igrave;nh triển khai thực hiện; kiểm tra, gi&aacute;m s&aacute;t, x&acirc;y dựng nội dung c&ocirc;ng việc, tr&igrave;nh cấp thẩm quyền ph&ecirc; duyệt theo quy định.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Mục ti&ecirc;u cụ thể l&agrave; duy tr&igrave;, củng cố v&agrave; n&acirc;ng cao hiệu quả hoạt động của tổ chức KTTT, HTX (bao gồm HTX phi n&ocirc;ng nghiệp) đ&atilde; được ph&acirc;n loại v&agrave; đ&aacute;nh gi&aacute; c&oacute; hiệu quả năm 2021. Đồng thời, n&acirc;ng cao chất lượng hoạt động của tổ chức&nbsp; KTTT, HTX xếp loại trung b&igrave;nh, yếu k&eacute;m.</p>\r\n\r\n<p dir=\"ltr\">Phấn đấu đến năm 2025, tr&ecirc;n địa b&agrave;n tỉnh c&oacute; &iacute;t nhất 80% tổng số n&ocirc;ng d&acirc;n, hộ sản xuất l&agrave; th&agrave;nh vi&ecirc;n HTX hay THT. Hằng năm, c&oacute; 03-05% THT hiện c&oacute; tại địa phương được n&acirc;ng chất ph&aacute;t triển l&ecirc;n HTX.&nbsp;&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Th&agrave;nh lập mới trung b&igrave;nh 28-33 HTX/năm để đạt số lượng 380-400 HTX v&agrave;o năm 2025, trong đ&oacute; c&oacute; hơn 70% tổng số HTX hoạt động từ loại kh&aacute; trở l&ecirc;n; 24% c&aacute;n bộ quản l&yacute; HTX tốt nghiệp đại học, cao đẳng trở l&ecirc;n trong tất cả c&aacute;c ng&agrave;nh, lĩnh vực.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">An Giang cũng triển khai ho&agrave;n thiện, nh&acirc;n rộng c&aacute;c m&ocirc; h&igrave;nh HTX kiểu mới hiệu quả tr&ecirc;n địa b&agrave;n tỉnh An Giang giai đoạn 2021-2025 theo Quyết định số 167/QĐ-TTg ng&agrave;y 03/02/2021 của Thủ tướng Ch&iacute;nh phủ, sau năm 2025 sẽ nh&acirc;n rộng cho c&aacute;c HTX trong tỉnh.</p>\r\n\r\n<p dir=\"ltr\">Đồng thời x&acirc;y dựng 25-30 m&ocirc; h&igrave;nh tổ chức KTTT, HTX ứng dụng c&ocirc;ng nghệ cao, c&oacute; sản phẩm thuộc ng&agrave;nh h&agrave;ng chủ lực của tỉnh (bao gồm sản phẩm OCOP đạt từ 03 sao); 50% tổng số tổ chức KTTT, HTX c&oacute; li&ecirc;n kết với doanh nghiệp, tổ chức KTTT, HTX kh&aacute;c ph&aacute;t triển theo hướng bền vững.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Trong giai đoạn 2021-2025, phấn đấu x&acirc;y dựng 01 li&ecirc;n hiệp HTX sản xuất v&agrave; chế biến l&uacute;a gạo quy m&ocirc; tỉnh để tham gia Li&ecirc;n hiệp HTX quy m&ocirc; v&ugrave;ng đồng bằng s&ocirc;ng Cửu Long.</p>\r\n\r\n<p dir=\"ltr\">Để đạt được c&aacute;c mục ti&ecirc;u đề ra, An Giang tổ chức c&aacute;c lớp tập huấn, cung cấp th&ocirc;ng tin, tư vấn th&agrave;nh lập HTX cho c&aacute;c s&aacute;ng lập vi&ecirc;n, th&agrave;nh vi&ecirc;n c&aacute;c THT v&agrave; người d&acirc;n c&oacute; nhu cầu th&agrave;nh lập tổ chức KTTT; tư vấn, hướng dẫn x&acirc;y dựng hoặc sửa đổi điều lệ; hỗ trợ thực hiện c&aacute;c thủ tục đăng k&yacute; th&agrave;nh lập v&agrave; x&acirc;y dựng bộ m&aacute;y tổ chức hoạt động của tổ chức KTTT, HTX theo quy định; tuy&ecirc;n truyền, phổ biến quy định ph&aacute;p luật về KTTT, HTX cho c&aacute;n bộ, c&ocirc;ng chức cấp x&atilde;, c&aacute;c th&agrave;nh vi&ecirc;n THT, HTX v&agrave; Nh&acirc;n d&acirc;n ở c&aacute;c địa phương.</p>\r\n\r\n<p dir=\"ltr\">Đồng thời tăng cường c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, vận động, qu&aacute;n triệt cho c&aacute;n bộ, đảng vi&ecirc;n v&agrave; người d&acirc;n về vị tr&iacute;, vai tr&ograve;, bản chất, tầm quan trọng của KTTT, HTX trong điều kiện mới, đặc biệt vai tr&ograve; của HTX trong cơ cấu lại ng&agrave;nh n&ocirc;ng nghiệp v&agrave; x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. Lựa chọn c&aacute;c m&ocirc; h&igrave;nh HTX trở th&agrave;nh kiểu mẫu để tuy&ecirc;n truyền, n&acirc;ng cao nhận thức, tạo sức h&uacute;t để người d&acirc;n, tổ chức, doanh nghiệp tham gia, li&ecirc;n kết với HTX v&agrave; l&agrave;m cơ sở để nh&acirc;n rộng trong cả nước.</p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute;, củng cố, xử l&yacute; dứt điểm đối với c&aacute;c HTX, li&ecirc;n hiệp HTX yếu k&eacute;m, đ&atilde; ngừng hoạt động hoặc hoạt động kh&ocirc;ng đ&uacute;ng quy định của Luật Hợp t&aacute;c x&atilde;. Ph&aacute;t huy vai tr&ograve; l&agrave;m chủ, tăng cường lợi &iacute;ch của th&agrave;nh vi&ecirc;n trong HTX; vận động th&agrave;nh vi&ecirc;n g&oacute;p vốn v&agrave; n&acirc;ng mức vốn g&oacute;p; thu h&uacute;t th&ecirc;m th&agrave;nh vi&ecirc;n mới nhằm huy động nguồn lực, n&acirc;ng cao tiềm lực t&agrave;i ch&iacute;nh v&agrave; quy m&ocirc; hoạt động của HTX.</p>\r\n\r\n<p dir=\"ltr\">Tiếp tục th&agrave;nh lập mới c&aacute;c HTX hoạt động thực chất, hiệu quả; coi trọng mở rộng quy m&ocirc; th&agrave;nh vi&ecirc;n HTX, THT, nhất l&agrave; nơi c&oacute; nhiều đồng b&agrave;o d&acirc;n tộc tham gia sản xuất, kinh doanh, ph&aacute;t triển đời sống. Tăng cường năng lực quản trị, đổi mới phương thức sản xuất, kinh doanh, n&acirc;ng cao năng lực cạnh tranh của c&aacute;c tổ chức KTTT, HTX.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">An Giang triển khai thực hiện tốt c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ ph&aacute;t triển HTX n&ocirc;ng nghiệp theo Quyết định số 1804/QĐ-TTg ng&agrave;y 13/11/2020 của Thủ tướng Ch&iacute;nh phủ ph&ecirc; duyệt Chương tr&igrave;nh hỗ trợ ph&aacute;t triển kinh tế tập thể, hợp t&aacute;c x&atilde; giai đoạn 2021-2025, Nghị định số 98/2018/NĐ-CP ng&agrave;y 05/7/2018 của Ch&iacute;nh phủ về ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch ph&aacute;t triển hợp t&aacute;c, li&ecirc;n kết trong sản xuất v&agrave; ti&ecirc;u thụ sản phẩm n&ocirc;ng nghiệp.</p>\r\n\r\n<p dir=\"ltr\">Đặc biệt l&agrave; ph&aacute;t huy vai tr&ograve; của Mặt trận Tổ quốc, c&aacute;c tổ chức ch&iacute;nh trị - x&atilde; hội, c&aacute;c hội quần ch&uacute;ng trong c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, vận động ph&aacute;t triển KTTT, HTX. N&acirc;ng cao tr&aacute;ch nhiệm của Li&ecirc;n minh Hợp t&aacute;c x&atilde; tỉnh, Hội N&ocirc;ng d&acirc;n tỉnh trong c&ocirc;ng t&aacute;c tư vấn, hỗ trợ, th&uacute;c đẩy KTTT, HTX, THT ph&aacute;t triển to&agrave;n diện. Triển khai thực hiện tốt ch&iacute;nh s&aacute;ch đ&agrave;o tạo v&agrave; thu h&uacute;t lao động trẻ về l&agrave;m việc tại c&aacute;c hợp t&aacute;c x&atilde;, đặc biệt đối với c&aacute;c HTX thuộc khu vực miền n&uacute;i.</p>\r\n\r\n<p dir=\"ltr\">Đồng thời tăng cường c&ocirc;ng t&aacute;c kiểm tra, gi&aacute;m s&aacute;t v&agrave; sơ kết, tổng kết hoạt động để tập trung th&aacute;o gỡ kh&oacute; khăn cho khu vực KTTT, HTX; kịp thời ph&aacute;t hiện, biểu dương, khen thưởng, nh&acirc;n rộng c&aacute;c m&ocirc; h&igrave;nh HTX hoạt động c&oacute; hiệu quả, từng bước khẳng định KTTT, HTX l&agrave; nh&acirc;n tố quan trọng, g&oacute;p phần ph&aacute;t triển kinh tế - x&atilde; hội của tỉnh&hellip;/.</p>', '202304120851371680080837801anh-1-2-1679800372945332316262.jpg', 0, 1, NULL, NULL, 0, '2023-04-12 01:51:37', '2023-04-12 01:51:37'),
('20230412085552', 'Liên minh Hợp tác xã tỉnh An Giang làm việc với huyện Thoại Sơn', '(Cổng TTĐT tỉnh AG)- Ngày 21-3, Đoàn công tác do ông Trần Văn Cứng, Chủ tịch Liên minh Hợp tác xã (HTX) tỉnh An Giang làm trưởng đoàn, có buổi làm việc với huyện Thoại Sơn, về phát triển kinh tế tập thể, HTX trong việc liên kết sản xuất và tiêu thụ nông sản trên địa bàn huyện.', 'Ngô Quyền', '<p>(Cổng TTĐT tỉnh AG)- Ng&agrave;y 21-3, Đo&agrave;n c&ocirc;ng t&aacute;c do &ocirc;ng Trần Văn Cứng, Chủ tịch Li&ecirc;n minh Hợp t&aacute;c x&atilde; (HTX) tỉnh An Giang l&agrave;m trưởng đo&agrave;n, c&oacute; buổi l&agrave;m việc với huyện Thoại Sơn, về ph&aacute;t triển kinh tế tập thể, HTX trong việc li&ecirc;n kết sản xuất v&agrave; ti&ecirc;u thụ n&ocirc;ng sản tr&ecirc;n địa b&agrave;n huyện.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"https://angiang.gov.vn/wps/wcm/connect/aa98ea96-a7ba-49a1-a123-c92a5a5e8576/1/lvlmhtx.jpg?MOD=AJPERES&amp;CVID=\" style=\"width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>Quang cảnh buổi l&agrave;m việc</strong></p>\r\n\r\n<p dir=\"ltr\">Tiếp v&agrave; l&agrave;m việc với đo&agrave;n c&oacute; &ocirc;ng Phạm Th&agrave;nh Được &ndash; Ph&oacute; Chủ tịch UBND huyện Thoại Sơn, đại diện l&atilde;nh đạo Ph&ograve;ng T&agrave;i ch&iacute;nh kế hoạch, Kinh tế hạ tầng, Ph&ograve;ng N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n, Ph&oacute; Chủ tịch UBND c&aacute;c x&atilde;, thị trấn c&ugrave;ng th&agrave;nh vi&ecirc;n c&aacute;c HTX đang hoạt động tr&ecirc;n địa b&agrave;n huyện.</p>\r\n\r\n<p dir=\"ltr\">Huyện Thoại Sơn c&oacute; 27 HTX, với 1.290 th&agrave;nh vi&ecirc;n. Trong đ&oacute; c&oacute; 9 HTX gắn kết với Tập đo&agrave;n Lộc Trời theo chuỗi gi&aacute; trị gắn với sản phẩm chủ lực của địa phương; c&oacute; 1 Li&ecirc;n hiệp HTX gồm 8 HTXNN l&agrave; th&agrave;nh vi&ecirc;n cụ thể: HTXNN Thắng Lợi, H&ograve;a T&acirc;n, B&igrave;nh Th&agrave;nh, Sơn H&ograve;a, Vọng Th&ecirc;, An B&igrave;nh, T&acirc;n Đ&ocirc;ng, T&acirc;y Ph&uacute; với vốn điều lệ l&agrave; 500 triệu đồng. Với vai tr&ograve; n&ograve;ng cốt về kinh tế tập thể, HTX thời gian qua đ&atilde; từng bước hoạt động đi v&agrave;o nề nếp v&agrave; đem lại hiệu quả kh&aacute; quan trọng về ph&aacute;t triển n&ocirc;ng nghiệp của địa phương cụ thể: Hỗ trợ n&ocirc;ng d&acirc;n tham gia ứng dụng khoa học c&ocirc;ng nghệ v&agrave;o sản xuất như c&aacute;c chương tr&igrave;nh &ldquo;một phải năm giảm&rdquo;, &ldquo;ba giảm ba tăng&rdquo;, sản xuất c&aacute;c m&ocirc; h&igrave;nh ứng dụng khoa học kỹ thuật trong x&acirc;y dựng NTM; Thực hiện cơ giới h&oacute;a v&agrave;o n&ocirc;ng nghiệp ng&agrave;y c&agrave;ng nhiều v&agrave; đa dạng c&aacute;c dịch vụ như: sạ l&uacute;a, phun xịt thuốc trừ s&acirc;u, sạ ph&acirc;n b&oacute;n bằng m&aacute;y bay kh&ocirc;ng người l&aacute;i (drone), sử dụng m&aacute;y m&oacute;c từ kh&acirc;u l&agrave;m đất đến thu hoạch bằng m&aacute;y gặt đập li&ecirc;n hợp; HTX c&ograve;n đ&oacute;ng vai tr&ograve; quan trọng trong li&ecirc;n kết ti&ecirc;u thụ gi&uacute;p n&ocirc;ng d&acirc;n giảm t&aacute;c động gi&aacute; vật tư, n&acirc;ng cao chất lượng sản xuất n&ocirc;ng nghiệp&hellip;</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"https://angiang.gov.vn/wps/wcm/connect/aa98ea96-a7ba-49a1-a123-c92a5a5e8576/2/lvlmhtx2.jpg?MOD=AJPERES&amp;CVID=\" style=\"width:100%\" title=\"\" /></p>\r\n\r\n<p dir=\"ltr\"><strong>M&ocirc; h&igrave;nh m&aacute;y bay kh&ocirc;ng người l&aacute;i tại HTX Vọng Đ&ocirc;ng</strong></p>\r\n\r\n<p dir=\"ltr\">Tại buổi l&agrave;m việc, Đo&agrave;n c&ocirc;ng t&aacute;c đ&atilde; chỉ ra những tồn tại hạn chế trong hoạt động của HTX hiện nay, đồng thời trao đổi v&agrave; chia sẻ kinh nghiệm về việc l&atilde;nh đạo, quản l&yacute;, điều h&agrave;nh, những m&ocirc; h&igrave;nh mới, ti&ecirc;u biểu, t&igrave;m đầu ra cho sản phẩm của c&aacute;c HTX. Qua đ&oacute;, nhằm n&acirc;ng cao hơn nữa c&ocirc;ng t&aacute;c tham mưu cho Cấp ủy, ch&iacute;nh quyền địa phương trong việc l&atilde;nh đạo, quản l&yacute;, cũng như việc định hướng, tư vấn, hỗ trợ ph&aacute;t triển kinh tế tập thể, củng cố, ho&agrave;n thiện v&agrave; ph&aacute;t triển hoạt động của c&aacute;c HTX th&agrave;nh vi&ecirc;n, g&oacute;p phần t&iacute;ch cực v&agrave;o sự ph&aacute;t triển kinh tế &ndash; x&atilde; hội, đặc biệt l&agrave; ph&aacute;t triển sản xuất kinh doanh gắn với chuỗi gi&aacute; trị, c&aacute;c sản phẩm OCOP v&agrave; x&acirc;y dựng n&ocirc;ng th&ocirc;n mới tại mỗi địa phương./.</p>\r\n\r\n<p dir=\"ltr\"><strong>Ng&ocirc; Quyền</strong></p>', '20230412085552image001.jpg', 7, 1, NULL, NULL, 0, '2023-04-12 01:55:52', '2023-04-12 01:55:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(1, 'nguyễn ra băng', 'bangnguyen01072001@gmail.com', NULL, '$2y$10$7tzUYRQCYhTeUobkriHWzeiU4xyExC5LbGldPofTmsGVx3TuXOoIe', NULL, NULL, NULL, NULL, NULL, NULL, '', '2023-02-10 06:03:23', '2023-02-10 06:03:23', 1),
(2, 'nguyenbang', 'nguyenvana@gmail.com', NULL, '$2y$10$Gk9GQu2UMMv/ya/b5PKyq.KD3LY5u6cuPgMsUvME6hkD0.MjJFdSG', NULL, NULL, NULL, NULL, NULL, NULL, '', '2023-02-10 06:20:26', '2023-02-10 06:20:26', 1),
(3, 'Nguyễn Văn B', 'hoangkhang123@gmail.com', NULL, '$2y$10$R.cZ5Slc1/nXNP9mAjgz6OqNTsUMixW9yQSn6PcOjj8QHW8aB8BC2', NULL, NULL, NULL, 'ZF6tqVNU4CMw3k0xezzQmo0dLUi8Taz4m9nqzI53yWkgG2c7kNr1j0YmBDYj', NULL, NULL, '', '2023-02-13 23:19:58', '2023-02-13 23:19:58', 1),
(4, 'Nguyễn Minh Ngọc', 'nn4966@gmail.com', NULL, '$2y$10$na0u0GeJCoz.UR/bLejcVeWl1o7gfKMZrFnJy.bn/lyGrTkQLL0US', NULL, NULL, NULL, NULL, NULL, NULL, '0941747540', '2023-02-20 18:27:17', '2023-02-20 18:27:17', 1),
(6, 'LÊ VĂN NHÂN', 'Lvnhan@gmail.com', NULL, 'a78834e57d3c88dd914ce9a67e2daa19', NULL, NULL, NULL, NULL, NULL, NULL, '0939486768', '2023-04-12 08:46:56', '2023-04-12 08:46:56', 0),
(7, 'ĐOÀN TRƯỜNG HUY', 'JVhospital@gmail.com', NULL, 'ede2aff78f1177a07ba064e3a12c0331', NULL, NULL, NULL, NULL, NULL, NULL, '0986709867', '2023-04-12 08:55:16', '2023-04-12 08:55:16', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_binhluan_binhluan` (`IdCon`),
  ADD KEY `FK_binhluan_nguoidung` (`NguoiDung_id`),
  ADD KEY `FK_binhluan_tintuc` (`TinTuc_id`);

--
-- Chỉ mục cho bảng `buoc_lotrinh`
--
ALTER TABLE `buoc_lotrinh`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_buoc_lotrinh_lotrinh` (`LoTrinh_id`),
  ADD KEY `IdCha` (`IdCha`);

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `cauhoi_p2`
--
ALTER TABLE `cauhoi_p2`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_cauhoi_p2_p3_cauhoi_p2_p3` (`IdCha`);

--
-- Chỉ mục cho bảng `cauhoi_p3`
--
ALTER TABLE `cauhoi_p3`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_chitiet_chitiet` (`IdCha`);

--
-- Chỉ mục cho bảng `chitiet_cauhoi`
--
ALTER TABLE `chitiet_cauhoi`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_chitiet_cauhoi_chitiet` (`ChiTiet_id`),
  ADD KEY `FK_chitiet_cauhoi_cauhoi` (`CauHoi_id`);

--
-- Chỉ mục cho bảng `chitiet_doanhnghiep`
--
ALTER TABLE `chitiet_doanhnghiep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_DoanhNghiep_id` (`DoanhNghiep_id`);

--
-- Chỉ mục cho bảng `chitiet_nguoidung`
--
ALTER TABLE `chitiet_nguoidung`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_nguoidung_chitietnguoidung` (`NguoiDung_id`);

--
-- Chỉ mục cho bảng `chitiet_thuvien`
--
ALTER TABLE `chitiet_thuvien`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_chitet_thuvien_thuvien` (`ThuVien_id`),
  ADD KEY `FK_chitet_thuvien_linhvuc` (`LinhVuc_id`);

--
-- Chỉ mục cho bảng `chitiet_tinnhan`
--
ALTER TABLE `chitiet_tinnhan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `IdCha` (`IdCha`,`TinNhan_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Chỉ mục cho bảng `danhmuc_noidung_p2`
--
ALTER TABLE `danhmuc_noidung_p2`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_danhmuc_noidung_noidung_cauhoi` (`NoiDung_id`);

--
-- Chỉ mục cho bảng `dn_user`
--
ALTER TABLE `dn_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_doanhnghiep_linhvuc` (`LinhVuc_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `lienket_website`
--
ALTER TABLE `lienket_website`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `linhvuc_user`
--
ALTER TABLE `linhvuc_user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_linhvuc_user_linhvuc` (`LinhVuc_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `loaihinhdoanhnghiep`
--
ALTER TABLE `loaihinhdoanhnghiep`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `lotrinh`
--
ALTER TABLE `lotrinh`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `FK_lotrinh_linhvuc` (`LinhVuc_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mohinh`
--
ALTER TABLE `mohinh`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `mohinh_doanhnghiep`
--
ALTER TABLE `mohinh_doanhnghiep`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_mohinh_doanhnghiep` (`DoanhNghiep_id`),
  ADD KEY `FK_mohinh_lotrinh` (`LoTrinh_id`),
  ADD KEY `FK_mohinh_doanhnghiep_mohinh` (`MoHinh_id`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_LinhVục` (`LinhVuc_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `noidung_cauhoi`
--
ALTER TABLE `noidung_cauhoi`
  ADD KEY `FK_noidung_cauhoi_cauhoi` (`CauHoi_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phieu1_diem`
--
ALTER TABLE `phieu1_diem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Phieu_id` (`Phieu_id`) USING BTREE,
  ADD KEY `ChiTiet_id` (`ChiTiet_id`) USING BTREE;

--
-- Chỉ mục cho bảng `phieu2_diem`
--
ALTER TABLE `phieu2_diem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_phieu2_diem_phieuso2` (`Phieu_id`) USING BTREE;

--
-- Chỉ mục cho bảng `phieuso1`
--
ALTER TABLE `phieuso1`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_phieuso1_doanhnghiep` (`DoanhNghiep_Id`),
  ADD KEY `FK_Users_id` (`User_id`) USING BTREE;

--
-- Chỉ mục cho bảng `phieuso2`
--
ALTER TABLE `phieuso2`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_phieuso2_doanhnghiep` (`DoanhNghiep_Id`);

--
-- Chỉ mục cho bảng `phieuso3`
--
ALTER TABLE `phieuso3`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_phieuso3_doanhnghiep` (`DoanhNghiep_id`),
  ADD KEY `FK_phieu3_Id_CauHoiP3_id` (`CauHoiP3_id`) USING BTREE;

--
-- Chỉ mục cho bảng `phieuso4`
--
ALTER TABLE `phieuso4`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_phieuso4_doanhnghiep` (`DoanhNghiep_Id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_id` (`User_id`),
  ADD KEY `Role_id` (`Role_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tinnhan`
--
ALTER TABLE `tinnhan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_tinnhan_doanhnghiep` (`DoanhNghiep_id`),
  ADD KEY `User_id` (`ChuyenGia_id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `buoc_lotrinh`
--
ALTER TABLE `buoc_lotrinh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `cauhoi_p2`
--
ALTER TABLE `cauhoi_p2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `cauhoi_p3`
--
ALTER TABLE `cauhoi_p3`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `chitiet_cauhoi`
--
ALTER TABLE `chitiet_cauhoi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `chitiet_doanhnghiep`
--
ALTER TABLE `chitiet_doanhnghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `chitiet_tinnhan`
--
ALTER TABLE `chitiet_tinnhan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc_noidung_p2`
--
ALTER TABLE `danhmuc_noidung_p2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `dn_user`
--
ALTER TABLE `dn_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  MODIFY `Id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1602109021;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `linhvuc_user`
--
ALTER TABLE `linhvuc_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaihinhdoanhnghiep`
--
ALTER TABLE `loaihinhdoanhnghiep`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lotrinh`
--
ALTER TABLE `lotrinh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mohinh`
--
ALTER TABLE `mohinh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `mohinh_doanhnghiep`
--
ALTER TABLE `mohinh_doanhnghiep`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phieu1_diem`
--
ALTER TABLE `phieu1_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2115;

--
-- AUTO_INCREMENT cho bảng `phieu2_diem`
--
ALTER TABLE `phieu2_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2306;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tinnhan`
--
ALTER TABLE `tinnhan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `buoc_lotrinh`
--
ALTER TABLE `buoc_lotrinh`
  ADD CONSTRAINT `FK_buoc_lotrinh_lotrinh` FOREIGN KEY (`LoTrinh_id`) REFERENCES `lotrinh` (`Id`);

--
-- Các ràng buộc cho bảng `cauhoi_p2`
--
ALTER TABLE `cauhoi_p2`
  ADD CONSTRAINT `FK_cauhoi_p2_p3_cauhoi_p2_p3` FOREIGN KEY (`IdCha`) REFERENCES `cauhoi_p2` (`Id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `linhvuc_user`
--
ALTER TABLE `linhvuc_user`
  ADD CONSTRAINT `FK_linhvuc_user_linhvuc` FOREIGN KEY (`LinhVuc_id`) REFERENCES `linhvuc` (`Id`);

--
-- Các ràng buộc cho bảng `lotrinh`
--
ALTER TABLE `lotrinh`
  ADD CONSTRAINT `FK_lotrinh_linhvuc` FOREIGN KEY (`LinhVuc_id`) REFERENCES `linhvuc` (`Id`);

--
-- Các ràng buộc cho bảng `mohinh_doanhnghiep`
--
ALTER TABLE `mohinh_doanhnghiep`
  ADD CONSTRAINT `FK_mohinh_doanhnghiep_mohinh` FOREIGN KEY (`MoHinh_id`) REFERENCES `mohinh` (`Id`),
  ADD CONSTRAINT `FK_mohinh_lotrinh` FOREIGN KEY (`LoTrinh_id`) REFERENCES `lotrinh` (`Id`);

--
-- Các ràng buộc cho bảng `noidung_cauhoi`
--
ALTER TABLE `noidung_cauhoi`
  ADD CONSTRAINT `FK_noidung_cauhoi_cauhoi` FOREIGN KEY (`CauHoi_id`) REFERENCES `cauhoi_p2` (`Id`);

--
-- Các ràng buộc cho bảng `phieuso3`
--
ALTER TABLE `phieuso3`
  ADD CONSTRAINT `FK_phieuso3_cauhoi_p3` FOREIGN KEY (`CauHoiP3_id`) REFERENCES `cauhoi_p3` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
