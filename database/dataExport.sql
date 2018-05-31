-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 06:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `currency`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `id` varchar(10) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`id`, `name`) VALUES
('001', '  Tài sản thuê ngoài'),
('002', '  Vật tư, hàng hóa nhận giữ hộ, nhận gia công'),
('003', '  Hàng hóa nhận bán hộ, nhận ký gửi, ký cược'),
('004', '  Nợ khó đòi đã xử lý'),
('007', '  Ngoại tệ các loại'),
('008', '  Dự toán chi sự nghiệp, dự án'),
('1', 'I - Tài sản ngắn hạn'),
('1111', '   Tiền Việt Nam'),
('1112', '   Ngoại tệ'),
('1113', '   Vàng, bạc, kim khí quý, đá quý'),
('112', '  Tiền gửi ngân hàng'),
('11211', '    Tiền gửi NH TMCP Công Thương VN CN Tây Đô (VND)'),
('11212', '    Tiền gửi NH Ngoại Thương CT (VND)'),
('11213', '    Tiền giử NH TMCP Xăng Dầu PeTroLimex'),
('11214', '    Tiền gửi NH Hàng Hải TP Cần Thơ(VND)'),
('11215', '    Tiền gửi NH Eximbank Tây Đô ( Cần Thơ) (VND)'),
('11216', '    Tiền gửi NH TMCP A Châu . PGD Xuân Khánh(VND)'),
('11217', '    Tiền gửi NHTMCP Đầu tư và phát triển Việt Nam - Chi nhánh Tây Nam'),
('11218', '    Tiền gửi NH NN&PTNT VN CN Ninh Kiều (VND)'),
('11219', '    Tiền gửi NH Đầu tư và Phát triển CT (VND)'),
('1122', '   Ngoại tệ'),
('11220', '    Tiền gửi NH Ngoại Thương Sóc Trăng- PGD Bạc Liêu (VND)'),
('11221', '    Tiền gửi NH TMCP Công Thương VN CN Tây đô (Ngoại tệ)'),
('11222', '    Tiền gửi NH Ngoại Thương CT (Ngoại tệ)'),
('11223', '    Tiền gửi NH Hàng Hải CT (Ngoại tệ)'),
('11224', '    Tiền gửi NH Công Thương TP HCM (Ngoại tệ)'),
('1123', '   Vàng, bạc, kim khí quý, đá quý'),
('113', '  Tiền đang chuyển'),
('1131', '   Tiền Việt Nam'),
('1132', '   Ngoại tệ'),
('121', '  Chứng khoán kinh doanh'),
('1211', '   Cổ phiếu'),
('1212', '   Trái phiếu'),
('1218', '   Chứng khoán và công cụ tài chính'),
('128', '  Đầu tư nắm giữ đến ngày đáo hạn'),
('1281', '   Tiền gửi có kỳ hạn'),
('12811', '    Tiền gửi có kỳ hạn dưới 12 tháng'),
('128111', '    Tiền gửi có kỳ hạn tại NH TMCP Công Thương VN CN Tây đô'),
('128112', '    Tiền gửi có kỳ hạn tại NH Ngoại Thương CN CT'),
('128113', '    Tiền gửi có kỳ hạn tại  NH TMCP Xăng Dầu'),
('12812', '    Tiền gửi có kỳ hạn trên 12 tháng'),
('1282', '   Trái phiếu'),
('12821', '    Trái phiếu ngắn hạn'),
('12822', '    Trái phiếu dài hạn (trên 12 tháng)'),
('1283', '   Cho vay'),
('12831', '    Cho vay ngắn hạn'),
('12832', '    Cho vay dài hạn (trên 12 tháng)'),
('1288', '   Các khoản đầu tư khác nắm giữ đến ngày đáo hạn'),
('12881', '    Các khoản đầu tư khác nắm giữ đến ngày đáo hạn (ngắn hạn)'),
('12882', '    Các khoản đầu tư khác nắm giữ đến ngày đáo hạn trên 12 tháng'),
('131', '  Phải thu của khách hàng'),
('1311', '   Phải thu của khách hàng ngắn hạn'),
('1312', '   Phải thu của khách hàng trên 12 tháng'),
('133', '  Thuế GTGT được khấu trừ'),
('1331', '   Thuế GTGT được khấu trừ của hàng hóa dịch vụ'),
('1332', '   Thuế GTGT được khấu trừ của TSCĐ'),
('136', '  Phải thu nội bộ'),
('1361', '   Vốn kinh doanh ở các đơn vị trực thuộc'),
('1362', '   Phải thu nội bộ về chênh lệch tỷ giá'),
('1363', '   Phải thu nội bộ về chí phí đi vay đủ điều kiện được vốn hóa'),
('1368', '   Phải thu nội bộ khác'),
('138', '  Phải thu khác'),
('1381', '   Tài sản thiếu chờ xử lý'),
('1385', '   Phải thu về cổ phần hóa'),
('1388', '   Phải thu khác'),
('13881', '    Phải thu khác ngắn hạn'),
('13882', '    Phải thu khác dài hạn( trên 12 tháng)'),
('141', '  Tạm ứng'),
('1421', '   Chi phí trả trước ngắn hạn'),
('151', '  Hàng mua đang đi trên đường'),
('152', '  Nguyên liệu, vật liệu'),
('153', '  Công cụ, dụng cụ'),
('1531', '   Công cụ, dụng cụ'),
('1532', '   Bao bì luân chuyển'),
('1533', '   Đồ dùng cho thuê'),
('1534', '   Thiết bị, phụ tùng thay thế'),
('154', '  Chi phí sản xuất, kinh doanh dở dang'),
('155', '  Thành phẩm'),
('1551', '   Thành phẩm nhập kho'),
('1557', '   Thành phẩm bất động sản'),
('156', '  Hàng hóa'),
('1561', '   Giá mua hàng hóa'),
('1562', '   Chi phí thu mua hàng hóa'),
('1567', '   Hàng hoá bất động sản'),
('157', '  Hàng gửi đi bán'),
('158', '  Hàng hóa kho bảo thuế'),
('161', '  Chi sự nghiệp'),
('1611', '   Chi sự nghiệp năm trước'),
('1612', '   Chi sự nghiệp năm nay'),
('171', '  Giao dịch mua bán lại trái phiếu chính phủ'),
('2', 'II - Tài sản dài hạn'),
('211', '  Tài sản cố định hữu hình'),
('2111', '   Nhà cửa, vật kiến trúc'),
('2112', '   Máy móc, thiết bị'),
('2113', '   Phương tiện vận tải, truyền dẫn'),
('2114', '   Thiết bị, dụng cụ quản lý'),
('2115', '   Cây lâu năm, súc vật làm việc và cho sản phẩm'),
('2118', '   Tài sản cố định khác'),
('212', '  Tài sản cố định thuê tài chính'),
('2121', '   TSCĐ hữu hình thuê tài chính'),
('2122', '   TSCĐ vô hình thuê tài chính'),
('213', '  Tài sản cố định vô hình'),
('2131', '   Quyền sử dụng đất'),
('2132', '   Quyền phát hành'),
('2133', '   Bản quyền , bằng sáng chế'),
('2134', '   Nhãn hiệu, tên thương mại'),
('2135', '   Chương trình phần mềm'),
('2136', '   Giấy phép và giấy phép nhượng quyền'),
('2138', '   TSCĐ vô hình khác'),
('214', '  Hao mòn TSCĐ'),
('2141', '   Hao mòn TSCĐ hữu hình'),
('2142', '   Hao mòn TSCĐ thuê tài chính'),
('2143', '   Hao mòn TSCĐ vô hình'),
('2147', '   Hao mòn bất động sản đầu tư'),
('217', '  Bất động sản đầu tư'),
('221', '  Đầu tư vào công ty con'),
('222', '  Đầu tư vào công ty liên doanh, liên kết'),
('228', '  Đầu tư dài hạn khác'),
('2281', '   Đầu tư góp vốn vào đơn vị khác'),
('2288', '   Đầu tư khác'),
('229', '  Dự phòng tổn thất tài sản'),
('2291', '   Dự phòng giảm giá chứng khoán kinh doanh'),
('2292', '   Dự phòng tổn thất đầu tư vào đơn vị khác'),
('2293', '   Dự phòng phải thu khó đòi'),
('2294', '   Dự phòng giảm giá hàng tồn kho'),
('241', '  Xây dựng cơ bản dở dang'),
('2411', '   Mua sắm TSCĐ'),
('2412', '   Xây dựng cơ bản'),
('2413', '   Sửa chữa lớn TSCĐ'),
('242', '  Chi phí trả trước dài hạn'),
('2421', '   Chi phí trả trước ngắn hạn'),
('2422', '   Chi phí trả trước dài hạn (trên 12 tháng)'),
('243', '  Tài sản thuế thu nhập hoãn lại'),
('244', '  Ký quỹ, ký cược dài hạn'),
('2441', '   Cầm cố,thế chấp,ký quỹ, ký cược ngắn hạn'),
('24411', '    Ký quỹ tại NH TMCP Công Thương VN CN Tây đô'),
('24413', '    Ký quỹ tại Ngân hàng TMCP Xăng Dầu Petrolimex'),
('2442', '   Cầm cố,thế chấp,ký quỹ, ký cược dái hạn'),
('3', 'III - Nợ phải trả'),
('331', '  Phải trả cho người bán'),
('3311', '   Phải trả cho người bán ngắn hạn'),
('3312', '   Phải trả cho người bán trên 12 tháng'),
('333', '  Thuế và các khoản phải nộp Nhà nước'),
('3331', '   Thuế GTGT phải nộp'),
('33311', '    Thuế GTGT đầu ra phải nộp'),
('33312', '    Thuế GTGT hàng nhập khẩu phải nộp'),
('3332', '   Thuế tiêu thụ đặc biệt'),
('3333', '   Thuế xuất, nhập khẩu'),
('3334', '   Thuế thu nhập doanh nghiệp'),
('3335', '   Thuế thu nhập cá nhân'),
('3336', '   Thuế tài nguyên'),
('3337', '   Thuế nhà đất, tiền thuê đất'),
('3338', '   Thuế bảo vệ môi trường và các loại thuế khác'),
('33381', '    Thuế bảo vệ môi trường'),
('33382', '    Các loại thuế khác'),
('3339', '   Phí, lệ phí và các khoản phải nộp khác'),
('334', '  Phải trả người lao động'),
('3341', '   Phải trả công nhân viên'),
('3348', '   Phải trả người lao động khác'),
('335', '  Chi phí phải trả'),
('3351', '   Chi phí phải trả ngắn hạn'),
('3352', '   Chi phí phải trả dài hạn'),
('336', '  Phải trả nội bộ'),
('3361', '   Phải trả nội bộ về vốn kinh doanh'),
('3362', '   Phải trả nội bộ về chênh lệch giá'),
('3363', '   Phải trả nội bộ về chi phí đi vay đủ điều kiện được vốn hóa'),
('3368', '   Phải trả nội bộ khác'),
('337', '  Thanh toán theo tiến độ kế hoạch hợp đồng xây dựng'),
('338', '  Phải trả, phải nộp khác'),
('3381', '   Tài sản thừa chờ giải quyết'),
('3382', '   Kinh phí công đoàn'),
('3383', '   Bảo hiểm xã hội'),
('3384', '   Bảo hiểm y tế'),
('3385', '   Phải trả về cổ phần hóa'),
('3386', '   Bảo hiểm thất nghiệp'),
('3387', '   Doanh thu chưa thực hiện'),
('33871', '    Doanh thu chưa thực hiện ngắn hạn'),
('33872', '    Doanh thu chưa thực hiện trên 12 tháng'),
('3388', '   Phải trả, phải nộp khác'),
('341', '  Vay và nợ thuê tài chính'),
('3411', '   Các khoản đi vay'),
('34111', '    Vay Ngân hàng TMCP Công thương VN CN Tây đô (VND)'),
('34112', '    Vay Ngân hàng Ngoại thương CT (VND)'),
('34113', '    Vay Ngân hàng TMCP Xăng Dầu Petrolimex (VND)'),
('34117', '    Vay NHTMCP Đầu tư và phát triển Việt Nam - Chi nhánh Tây Nam'),
('34119', '    Vay cá nhân và các đơn vị khác'),
('3412', '   Nợ thuê tài chính'),
('343', '  Trái phiếu phát hành'),
('3431', '   Trái phiếu thường'),
('34311', '    Mệnh giá trái phiếu'),
('343111', '    Mệnh giá trái phiếu ngắn hạn'),
('343112', '    Mệnh giá trái phiếu dài hạn'),
('34312', '    Chiết khấu trái phiếu'),
('34313', '    Phụ trội trái phiếu'),
('3432', '   Trái phiếu chuyển đổi'),
('344', '  Nhận ký quỹ, ký cược'),
('347', '  Thuế thu nhập hoãn lại phải trả'),
('352', '  Dự phòng phải trả'),
('3521', '   Dự phòng bảo hành sản phẩm hàng hóa'),
('3522', '   Dự phòng bảo hành công trình xây dựng'),
('3523', '   Dự phòng tái cơ cấu doanh nghiệp'),
('3524', '   Dự phòng phải trả khác'),
('353', '  Quỹ khen thưởng phúc lợi'),
('3531', '   Quỹ khen thưởng'),
('3532', '   Quỹ phúc lợi'),
('3533', '   Quỹ phúc lợi đã hình thành TSCĐ'),
('3534', '   Quỹ thưởng ban quản lý điều hành công ty'),
('356', '  Quỹ phát triển khoa học và công nghệ'),
('3561', '   Quỹ phát triển khoa học và công nghệ'),
('3562', '   Quỹ phát triển khoa học và công nghệ đã hình thành TSCĐ'),
('357', '  Quỹ bình ổn giá'),
('4', 'IV - Vốn chủ sở hữu'),
('411', '  Vốn đầu tư của chủ sở hữu'),
('4111', '   Vốn góp của chủ sở hữu'),
('41111', '    Cổ phiếu phổ thông có quyền biểu quyết'),
('41112', '    Cổ phiếu ưu đãi'),
('4112', '   Thặng dư vốn cổ phần'),
('4113', '   Quyền chọn chuyển đổi trái phiếu'),
('4118', '   Vốn khác'),
('412', '  Chênh lệch đánh giá lại tài sản'),
('413', '  Chênh lệch tỷ giá hối đoái'),
('4131', '   Chênh lệch tỷ giá do đánh giá lại các khoản mục tiền tệ có gốc ngoại tệ'),
('4132', '   Chênh lệch tỷ giá hối đoái trong giai đoạn trước hoạt động'),
('414', '  Quỹ đầu tư phát triển'),
('417', '  Quỹ hỗ trợ sắp xếp doanh nghiệp'),
('418', '  Các quỹ khác thuộc vốn chủ sở hữu'),
('419', '  Cổ phiếu quỹ'),
('421', '  Lợi nhuận sau thuế chưa phân phối'),
('4211', '   Lợi nhuận sau thuế chưa phân phối năm trước'),
('4212', '   Lợi nhuận sau thuế chưa phân phối năm nay'),
('441', '  Nguồn vốn đầu tư xây dựng cơ bản'),
('461', '  Nguồn kinh phí sự nghiệp'),
('4611', '   Nguồn kinh phí sự nghiệp năm trước'),
('4612', '   Nguồn kinh phí sự nghiệp năm nay'),
('466', '  Nguồn kinh phí đã hình thành TSCĐ'),
('5', 'V - Doanh thu'),
('511', '  Doanh thu bán hàng và cung cấp dịch vụ'),
('5111', '   Doanh thu bán hàng hóa'),
('5112', '   Doanh thu bán các thành phẩm'),
('5113', '   Doanh thu cung cấp dịch vụ'),
('5114', '   Doanh thu trợ cấp, trợ giá'),
('5117', '   Doanh thu kinh doanh bất động sản đầu tư'),
('5118', '   Doanh thu khác'),
('515', '  Doanh thu hoạt động tài chính'),
('521', '  Các khoản giảm trừ doanh thu'),
('5211', '   Chiết khấu thương mại'),
('5212', '   Giảm giá hàng bán'),
('5213', '   Hàng bán bị trả lại'),
('6', 'VI - Chi phí sản xuất kinh doanh'),
('611', '  Mua hàng'),
('6111', '   Mua nguyên liệu, vật liệu'),
('6112', '   Mua hàng hóa'),
('621', '  Chi phí nguyên liệu, vật liệu trực tiếp'),
('622', '  Chi phí nhân công trực tiếp'),
('623', '  Chi phí sử dụng máy thi công'),
('6231', '   Chi phí nhân công'),
('6232', '   Chi phí nguyên, vật  liệu'),
('6233', '   Chi phí dụng cụ sản xuất'),
('6234', '   Chi phí khấu hao máy thi công'),
('6237', '   Chi phí dịch vụ mua ngoài'),
('6238', '   Chi phí bằng tiền khác'),
('627', '  Chi phí sản xuất chung'),
('6271', '   Chi phí nhân viên phân xưởng'),
('6272', '   Chi phí nguyên, vật liệu'),
('6273', '   Chi phí dụng cụ sản xuất'),
('6274', '   Chi phí khấu hao TSCĐ'),
('6277', '   Chi phí dịch vụ mua ngoài'),
('6278', '   Chi phí bằng tiền khác'),
('631', '  Giá thành sản xuất'),
('632', '  Giá vốn hàng bán'),
('635', '  Chi phí tài chính'),
('6351', '   Chi phí tài chính (Lãi tiền vay)'),
('6352', '   Chi phí tài chính khác'),
('641', '  Chi phí bán hàng'),
('6411', '   Chi phí nhân viên bán hàng'),
('64111', '    Chi phí tiền lương phục vụ kinh doanh'),
('64112', '    Các khoản trích BHXH, BHYT, KPCĐ phục vụ kinh doanh'),
('6412', '   Chi phí vật liệu, bao bì'),
('64121', '    Chi phí vật liệu, bao bì'),
('64122', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ'),
('641221', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ thép'),
('641222', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ xi măng'),
('641223', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ gạch, cát, đá'),
('641224', '    Chi phí vật liệu, nhiên liệu dùng cho cẩu hàng hóa'),
('641228', '    Chi phí vật liệu, nhiên liệu dùng cho PT, MM cho thuê lại'),
('64123', '    Chi phí nhiên vật liệu dùng cho sửa chữa TSCĐ dùng cho bộ phận bán hàng'),
('6413', '   Chi phí dụng cụ, đồ dùng'),
('64131', '    Chi phí trang bị máy vi tính, máy in'),
('64132', '    Chi phí mực in, ruban'),
('64133', '    Chi phí trang bị máy điều hoà nhiệt độ'),
('64138', '    Chi phí trang bị đồ dùng văn phòng khác'),
('6414', '   Chi phí khấu hao TSCĐ'),
('6415', '   Chi phí bảo hành'),
('6417', '   Chi phí dịch vụ mua ngoài'),
('64171', '    Chi phí sửa chữa TSCĐ phục vụ kinh doanh'),
('64172', '    Chi phí thuê kho bãi, thuê nhà'),
('64173', '    Chi phí tiền thuê bốc vác'),
('641731', '    Chi phí tiền thuê bốc vác thép'),
('641732', '    Chi phí tiền thuê bốc vác xi măng'),
('641733', '    Chi phí tiền thuê bốc vác gạch, cát, đá'),
('64174', '    Chi phí vận chuyển bán hàng'),
('641741', '    Chi phí vận chuyển bán hàng thép'),
('641742', '    Chi phí vận chuyển bán hàng xi măng'),
('641743', '    Chi phí vận chuyển bán hàng gạch, cát, đá'),
('641745', '    Chi phí thuê phương tiện vận chuyển hàng hóa'),
('64175', '    Chi phí điện thoại bộ phận bán hàng'),
('64176', '    Chi phí tiền điện bộ phận bán hàng'),
('64177', '    Chi phí tiền nước bộ phận bán hàng'),
('64178', '    Phí chuyển tiền ngân hàng'),
('64179', '    Chi phí dịch vụ mua ngoài phục vụ bán hàng khác'),
('6418', '   Chi phí bằng tiền khác'),
('64181', '    Chi phí tiếp khách'),
('64182', '    Chi phí giới thiệu sản phẩm, hàng hóa'),
('64183', '    Chi phí quảng cáo, chào hàng'),
('64184', '    Chi phí hội nghị khách hàng'),
('64185', '    Phí giao nhận ,công tác phí, xăng xe bộ phận bán hàng'),
('64186', '    Các khoản chi cho lao động nữ'),
('64187', '    Chi phí nghiên cứu, đào tạo bộ phận bán hàng'),
('64188', '    Chi phí bằng tiền phục vụ bán hàng khác'),
('642', '  Chi phí quản lý doanh nghiệp'),
('6421', '   Chi phí nhân viên quản lý'),
('64211', '    Chi phí nhân viên quản lý'),
('64212', '    Các khoản trích BHXH, BHYT, KPCĐ nhân viên quản lý'),
('6422', '   Chi phí vật liệu quản lý'),
('64221', '    Chi phí văn phòng phẩm'),
('64222', '    Chi phí vật liệu dùng cho sửa chữa TSCĐ'),
('64223', '    Chi phí sửa chữa máy vi tính, máy in'),
('6423', '   Chi phí đồ dùng văn phòng'),
('64231', '    Chi phí trang bị máy vi tính, máy in'),
('64232', '    Chi phí mực in, ruban'),
('64233', '    Chi phí trang bị máy điều hoà nhiệt độ'),
('64238', '    Chi phí trang bị đồ dùng văn phòng khác'),
('6424', '   Chi phí khấu hao TSCĐ'),
('64241', '    Khấu hao TSCĐ nhà cửa, vật kiến trúc'),
('64242', '    Khấu hao TSCĐ máy móc, thiết bị'),
('64243', '    Khấu hao TSCĐ phương tiện vận tải, truyền dẫn'),
('64244', '    Khấu hao TSCĐ thiết bị, dụng cụ quản lý'),
('64245', '    Khấu hao TSCĐ hữu hình khác'),
('64246', '    Khấu hao TSCĐ vô hình'),
('6425', '   Chi phí thuế môn bài,trước bạ, phí và lệ phí,đăng kiểm,bảo hiểm'),
('64251', '    Thuế môn bài,trước bạ,thuê đất, đăng kiểm,bảo hiểm xe ghe'),
('64252', '    Lệ phí giao thông, lệ phí qua cầu, phà'),
('6426', '   Chi phí dự phòng'),
('6427', '   Chi phí dịch vụ mua ngoài'),
('64271', '    Chi phí điện thoại'),
('64272', '    Chi phí tiền điện'),
('64273', '    Chi phí tiền nước'),
('64274', '    Chi phí sửa chữa TSCĐ một lần với giá trị nhỏ'),
('64275', '    Phí chuyển tiền ngân hàng'),
('64278', '    Chi phí dịch vụ mua ngoài khác'),
('6428', '   Chi phí bằng tiền khác'),
('64281', '    Chi phí hội nghị'),
('64282', '    Chi phí tiếp khách'),
('64283', '    Công tác phí, tàu xe, xăng xe con đi công tác'),
('64284', '    Các khoản chi cho lao động nữ'),
('64285', '    Chi phí nghiên cứu, đào tạo'),
('64286', '    Chi nộp phí tham gia hiệp hội'),
('64287', '    Chi phí giao dịch ngân hàng'),
('64288', '    Chi phí bằng tiền khác'),
('7', 'VII - Thu nhập khác'),
('711', '  Thu nhập khác'),
('71111', '    Thu nhập khác từ hàng thừa thép'),
('71112', '    Thu nhập khác từ hàng thừa xi măng'),
('71113', '    Thu nhập khác từ hàng thừa gạch, cát, đá,...'),
('71118', '    Thu nhập khác'),
('8', 'XIII - Chi phí khác'),
('811', '  Chi phí khác'),
('821', '  Chi phí thuế thu nhập doanh nghiệp'),
('8211', '   Chi phí thuế thu nhập doanh nghiệp hiện hành'),
('8212', '   Chi phí thuế thu nhập doanh nghiệp hoãn lại'),
('9', 'IX - Xác định kết quả kinh doanh'),
('911', '  Xác định kết quả kinh doanh');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` text,
  `address` text,
  `founding` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contract_type`
--

CREATE TABLE `contract_type` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contract_type`
--

INSERT INTO `contract_type` (`id`, `name`) VALUES
(1, 'HĐ 1'),
(2, 'HĐ 2'),
(3, 'HĐ 3');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` text,
  `address` text,
  `company` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `address`, `company`) VALUES
(1, 'Nguyễn Thị Hiền', 'UIT', 'UIT'),
(2, 'Trần Nguyễn Thị Thơm', 'KTX KHU B', 'KHTN'),
(3, 'Nguyễn Thị Kim Hoa', 'Ling Trung', 'UIT'),
(4, 'Thái thị phương hân', 'QUận 9', 'FPT'),
(5, 'Lê Thanh Quang', 'Linh Đông, Thủ Đức, Hồ Chí Minh', 'VNG Corporation'),
(6, 'Phan Minh Tâm', 'Bệnh viên Biên Hòa, Đồng Nai', 'Công ty thiết bị xây dựng Phú Hòa');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `form_id` text,
  `date_create` date DEFAULT NULL,
  `content` text,
  `total_money` int(11) DEFAULT NULL,
  `total_money_text` text,
  `form_type` int(11) DEFAULT NULL,
  `account_type` varchar(10) DEFAULT NULL,
  `receipt` text,
  `user` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL,
  `warehouse` int(11) DEFAULT NULL,
  `money_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `form_id`, `date_create`, `content`, `total_money`, `total_money_text`, `form_type`, `account_type`, `receipt`, `user`, `customer`, `warehouse`, `money_type`, `status`) VALUES
(6, 'CTM130-05-18', '2018-05-30', 'tytyywyet', 776767, 'Sáu  trăm  bảy  mươi sáu  nghìn, bảy  trăm  sáu  mươi bảy  đồng', 2, '1111', 'yẻtyertyety', 1, 2, 1, 1, 2),
(7, 'CTM730-05-18', '2018-05-30', 'khgkh', 6777878, 'Sáu  triệu, bảy  trăm  bảy  mươi bảy  nghìn, tám  trăm  bảy  mươi tám  đồng', 2, '1111', 'hjlhjklhjk', 3, 1, 2, 1, 2),
(8, 'CTM830-05-18', '2018-05-30', 'yuyoouipop', 987467, 'Chín  trăm  tám  mươi bảy  nghìn, bốn  trăm  sáu  mươi bảy  đồng', 2, '1111', 'iopiopuiop', 3, 1, 1, 1, 2),
(9, 'CTM931-05-18', '2018-05-31', 'gdfsghsdfghg', 555555, 'Năm  trăm  năm  mươi lăm  nghìn, năm  trăm  năm  mươi lăm  đồng', 2, '1111', 'dsdfhffhg', 4, 1, 1, 1, 1),
(10, 'CTM1031-05-18', '2018-05-31', 'No thue thu nhaop ca nhan', 10559999, 'Bốn  nghìn, bốn  trăm  bốn  mươi bốn  đồng', 2, '1111', 'HT10055', 4, 2, 1, 1, 1),
(11, 'CTM1131-05-18', '2018-05-31', 'hj,gkghk', 40005000, 'Bốn  mươi triệu, năm  nghìn đồng', 2, '1111', 'hjkghkghjk', 4, 2, 2, 1, 1),
(12, 'CTM1231-05-18', '2018-05-31', 'sdgdfggh', 600000, 'Sáu  trăm  nghìn đồng', 2, '1111', 'gdfhdfghdf', 4, 3, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `form_id` int(11) NOT NULL,
  `account_type` varchar(10) NOT NULL,
  `money` int(11) DEFAULT NULL,
  `money_vnd` int(11) DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  `contract_type` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_detail`
--

INSERT INTO `form_detail` (`form_id`, `account_type`, `money`, `money_vnd`, `date_create`, `contract_type`, `customer`) VALUES
(6, '11215', 676767, 676767, '2018-05-30', 1, 2),
(6, '11216', 100000, 100000, '2018-05-30', 1, 1),
(7, '11215', 6777878, 6777878, '2018-05-30', 1, 2),
(8, '11215', 987467, 987467, '2018-05-30', 1, 4),
(9, '11215', 555555, 555555, '2018-05-31', 1, 2),
(10, '11213', 4444, 4444, '2018-05-31', 1, 2),
(10, '11215', 10000000, 10000000, '2018-05-31', 1, 4),
(10, '11216', 555555, 555555, '2018-05-31', 1, 3),
(11, '11213', 40005000, 40005000, '2018-05-31', 1, 2),
(12, '11215', 600000, 600000, '2018-05-31', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `form_status`
--

CREATE TABLE `form_status` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_status`
--

INSERT INTO `form_status` (`id`, `name`) VALUES
(1, 'approved'),
(2, 'pending'),
(3, 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `form_type`
--

CREATE TABLE `form_type` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_type`
--

INSERT INTO `form_type` (`id`, `name`) VALUES
(1, 'input'),
(2, 'output');

-- --------------------------------------------------------

--
-- Table structure for table `money_type`
--

CREATE TABLE `money_type` (
  `id` int(11) NOT NULL,
  `unit` text,
  `name` text,
  `rate` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `money_type`
--

INSERT INTO `money_type` (`id`, `unit`, `name`, `rate`) VALUES
(1, 'VND', 'đồng', '1.00'),
(2, 'USD', 'dollar', '2.20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Nhân viên'),
(2, 'Quản lý'),
(3, 'Quản trị viên');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `fullname` text,
  `picture` text,
  `info` text,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) VALUES
(1, 'mongnt', 'admin', 'Nguyễn Thạch Mộng', 'mongnt.jpg', 'HTTT2014', 3),
(2, 'lingntd', 'admin', 'Nguyễn Trọng Duy Linh', 'linh.jpg', 'HTTT2014', 3),
(3, 'namtc', 'admin', 'Trần Chí Nam', 'nam.jpg', 'HTTT2014', 2),
(4, 'uyenvhl', 'admin', 'Võ Huyền Lan Uyên', 'uyen.png', 'HTTT2014', 1),
(5, 'tinhdk', 'admin', 'Đào Khả Tỉnh', 'tinhdk.jpg', 'HTTT2014', 1),
(6, 'quyenpc', 'admin', 'Phan Công Quyền', 'quyen.jpg', 'HTTT2014', 1),
(7, 'huynhntn', 'admin', 'Nguyễn Thị Như Huỳnh', 'huynh.jpg', 'HTTT2014', 1),
(8, 'duylt', 'admin', 'Lê Trung Duy', 'duy.jpg', 'HTTT2014', 1),
(9, 'baolt', 'admin', 'Lê Thiện Bảo', 'bao.jpg', 'HTTT2014', 1),
(10, 'hiennt', 'admin', 'Nguyễn Thị Hiền', 'hien.jpg', 'HTTT2014', 1);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` text,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `address`) VALUES
(1, 'UIT-Warehouse', 'Linh Trung, Thủ Đức'),
(2, 'KTX-WareHouse', 'KTX, Dĩ An, Bình Dương'),
(3, 'XYZ-warehouse', 'Hà Nội');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_type`
--
ALTER TABLE `contract_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_type` (`form_type`),
  ADD KEY `account_type` (`account_type`),
  ADD KEY `user` (`user`),
  ADD KEY `customer` (`customer`),
  ADD KEY `warehouse` (`warehouse`),
  ADD KEY `money_type` (`money_type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD PRIMARY KEY (`form_id`,`account_type`),
  ADD KEY `account_type` (`account_type`),
  ADD KEY `contract_type` (`contract_type`),
  ADD KEY `customer` (`customer`);

--
-- Indexes for table `form_status`
--
ALTER TABLE `form_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_type`
--
ALTER TABLE `form_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_type`
--
ALTER TABLE `money_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract_type`
--
ALTER TABLE `contract_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `money_type`
--
ALTER TABLE `money_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`form_type`) REFERENCES `form_type` (`id`),
  ADD CONSTRAINT `form_ibfk_2` FOREIGN KEY (`account_type`) REFERENCES `account_type` (`id`),
  ADD CONSTRAINT `form_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `form_ibfk_4` FOREIGN KEY (`customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `form_ibfk_5` FOREIGN KEY (`warehouse`) REFERENCES `warehouse` (`id`),
  ADD CONSTRAINT `form_ibfk_6` FOREIGN KEY (`money_type`) REFERENCES `money_type` (`id`),
  ADD CONSTRAINT `form_ibfk_7` FOREIGN KEY (`status`) REFERENCES `form_status` (`id`);

--
-- Constraints for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD CONSTRAINT `form_detail_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `form` (`id`),
  ADD CONSTRAINT `form_detail_ibfk_2` FOREIGN KEY (`account_type`) REFERENCES `account_type` (`id`),
  ADD CONSTRAINT `form_detail_ibfk_3` FOREIGN KEY (`contract_type`) REFERENCES `contract_type` (`id`),
  ADD CONSTRAINT `form_detail_ibfk_4` FOREIGN KEY (`customer`) REFERENCES `customers` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
