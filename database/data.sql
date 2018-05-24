-- customers
INSERT INTO `customers`(`id`, `fullname`, `address`, `company`) VALUES (1,'Nguyen Thi Hien', 'UIT', 'UIT');
INSERT INTO `customers`(`id`, `fullname`, `address`, `company`) VALUES (2,'Nguyen Thi Cho', 'UIT', 'UIT');
INSERT INTO `customers`(`id`, `fullname`, `address`, `company`) VALUES (3,'Nguyen Thi Kim Hoa', 'UIT', 'UIT');

-- money_status
INSERT INTO `money_type`(`id`,`unit`, `name`, `rate`) VALUES (1,'VND','đồng', 1.0);
INSERT INTO `money_type`(`id`,`unit`, `name`, `rate`) VALUES (2,'USD','dollar', 2.2);
-- form_status
INSERT INTO `form_status`(`id`, `name`) VALUES (1, 'approved');
INSERT INTO `form_status`(`id`, `name`) VALUES (2, 'pending');
INSERT INTO `form_status`(`id`, `name`) VALUES (3, 'blocked');

-- roles
INSERT INTO `roles`(`id`, `name`) VALUES (1, 'employee');
INSERT INTO `roles`(`id`, `name`) VALUES (2, 'manager');
INSERT INTO `roles`(`id`, `name`) VALUES (3, 'admin');

-- form_type
INSERT INTO `form_type`(`id`, `name`) VALUES (1, 'input');
INSERT INTO `form_type`(`id`, `name`) VALUES (2, 'output');

-- warehouse
INSERT INTO `warehouse`(`id`, `name`, `address`) VALUES (1, 'UIT warehouse', 'Linh Trung, Thủ Đức');

-- users
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (1,'mongnt','admin','Nguyen Thach Mong', '', 'HTTT2014', 1);
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (2,'lingntd','admin','Duy Linh', '', 'HTTT2014', 2);
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (3,'namtc','admin','Tran Chi Nam', '', 'HTTT2014', 3);

-- account_type
INSERT INTO account_type VALUES ('001', '  Tài sản thuê ngoài');
INSERT INTO account_type VALUES ('002', '  Vật tư, hàng hóa nhận giữ hộ, nhận gia công');
INSERT INTO account_type VALUES ('003', '  Hàng hóa nhận bán hộ, nhận ký gửi, ký cược');
INSERT INTO account_type VALUES ('004', '  Nợ khó đòi đã xử lý');
INSERT INTO account_type VALUES ('007', '  Ngoại tệ các loại');
INSERT INTO account_type VALUES ('008', '  Dự toán chi sự nghiệp, dự án');
INSERT INTO account_type VALUES ('1', 'I - Tài sản ngắn hạn');
INSERT INTO account_type VALUES ('1111', '   Tiền Việt Nam');
INSERT INTO account_type VALUES ('1112', '   Ngoại tệ');
INSERT INTO account_type VALUES ('1113', '   Vàng, bạc, kim khí quý, đá quý');
INSERT INTO account_type VALUES ('112', '  Tiền gửi ngân hàng');
INSERT INTO account_type VALUES ('11211', '    Tiền gửi NH TMCP Công Thương VN CN Tây Đô (VND)');
INSERT INTO account_type VALUES ('11212', '    Tiền gửi NH Ngoại Thương CT (VND)');
INSERT INTO account_type VALUES ('11213', '    Tiền giử NH TMCP Xăng Dầu PeTroLimex');
INSERT INTO account_type VALUES ('11214', '    Tiền gửi NH Hàng Hải TP Cần Thơ(VND)');
INSERT INTO account_type VALUES ('11215', '    Tiền gửi NH Eximbank Tây Đô ( Cần Thơ) (VND)');
INSERT INTO account_type VALUES ('11216', '    Tiền gửi NH TMCP A Châu . PGD Xuân Khánh(VND)');
INSERT INTO account_type VALUES ('11217', '    Tiền gửi NHTMCP Đầu tư và phát triển Việt Nam - Chi nhánh Tây Nam');
INSERT INTO account_type VALUES ('11218', '    Tiền gửi NH NN&PTNT VN CN Ninh Kiều (VND)');
INSERT INTO account_type VALUES ('11219', '    Tiền gửi NH Đầu tư và Phát triển CT (VND)');
INSERT INTO account_type VALUES ('1122', '   Ngoại tệ');
INSERT INTO account_type VALUES ('11220', '    Tiền gửi NH Ngoại Thương Sóc Trăng- PGD Bạc Liêu (VND)');
INSERT INTO account_type VALUES ('11221', '    Tiền gửi NH TMCP Công Thương VN CN Tây đô (Ngoại tệ)');
INSERT INTO account_type VALUES ('11222', '    Tiền gửi NH Ngoại Thương CT (Ngoại tệ)');
INSERT INTO account_type VALUES ('11223', '    Tiền gửi NH Hàng Hải CT (Ngoại tệ)');
INSERT INTO account_type VALUES ('11224', '    Tiền gửi NH Công Thương TP HCM (Ngoại tệ)');
INSERT INTO account_type VALUES ('1123', '   Vàng, bạc, kim khí quý, đá quý');
INSERT INTO account_type VALUES ('113', '  Tiền đang chuyển');
INSERT INTO account_type VALUES ('1131', '   Tiền Việt Nam');
INSERT INTO account_type VALUES ('1132', '   Ngoại tệ');
INSERT INTO account_type VALUES ('121', '  Chứng khoán kinh doanh');
INSERT INTO account_type VALUES ('1211', '   Cổ phiếu');
INSERT INTO account_type VALUES ('1212', '   Trái phiếu');
INSERT INTO account_type VALUES ('1218', '   Chứng khoán và công cụ tài chính');
INSERT INTO account_type VALUES ('128', '  Đầu tư nắm giữ đến ngày đáo hạn');
INSERT INTO account_type VALUES ('1281', '   Tiền gửi có kỳ hạn');
INSERT INTO account_type VALUES ('12811', '    Tiền gửi có kỳ hạn dưới 12 tháng');
INSERT INTO account_type VALUES ('128111', '    Tiền gửi có kỳ hạn tại NH TMCP Công Thương VN CN Tây đô');
INSERT INTO account_type VALUES ('128112', '    Tiền gửi có kỳ hạn tại NH Ngoại Thương CN CT');
INSERT INTO account_type VALUES ('128113', '    Tiền gửi có kỳ hạn tại  NH TMCP Xăng Dầu');
INSERT INTO account_type VALUES ('12812', '    Tiền gửi có kỳ hạn trên 12 tháng');
INSERT INTO account_type VALUES ('1282', '   Trái phiếu');
INSERT INTO account_type VALUES ('12821', '    Trái phiếu ngắn hạn');
INSERT INTO account_type VALUES ('12822', '    Trái phiếu dài hạn (trên 12 tháng)');
INSERT INTO account_type VALUES ('1283', '   Cho vay');
INSERT INTO account_type VALUES ('12831', '    Cho vay ngắn hạn');
INSERT INTO account_type VALUES ('12832', '    Cho vay dài hạn (trên 12 tháng)');
INSERT INTO account_type VALUES ('1288', '   Các khoản đầu tư khác nắm giữ đến ngày đáo hạn');
INSERT INTO account_type VALUES ('12881', '    Các khoản đầu tư khác nắm giữ đến ngày đáo hạn (ngắn hạn)');
INSERT INTO account_type VALUES ('12882', '    Các khoản đầu tư khác nắm giữ đến ngày đáo hạn trên 12 tháng');
INSERT INTO account_type VALUES ('131', '  Phải thu của khách hàng');
INSERT INTO account_type VALUES ('1311', '   Phải thu của khách hàng ngắn hạn');
INSERT INTO account_type VALUES ('1312', '   Phải thu của khách hàng trên 12 tháng');
INSERT INTO account_type VALUES ('133', '  Thuế GTGT được khấu trừ');
INSERT INTO account_type VALUES ('1331', '   Thuế GTGT được khấu trừ của hàng hóa dịch vụ');
INSERT INTO account_type VALUES ('1332', '   Thuế GTGT được khấu trừ của TSCĐ');
INSERT INTO account_type VALUES ('136', '  Phải thu nội bộ');
INSERT INTO account_type VALUES ('1361', '   Vốn kinh doanh ở các đơn vị trực thuộc');
INSERT INTO account_type VALUES ('1362', '   Phải thu nội bộ về chênh lệch tỷ giá');
INSERT INTO account_type VALUES ('1363', '   Phải thu nội bộ về chí phí đi vay đủ điều kiện được vốn hóa');
INSERT INTO account_type VALUES ('1368', '   Phải thu nội bộ khác');
INSERT INTO account_type VALUES ('138', '  Phải thu khác');
INSERT INTO account_type VALUES ('1381', '   Tài sản thiếu chờ xử lý');
INSERT INTO account_type VALUES ('1385', '   Phải thu về cổ phần hóa');
INSERT INTO account_type VALUES ('1388', '   Phải thu khác');
INSERT INTO account_type VALUES ('13881', '    Phải thu khác ngắn hạn');
INSERT INTO account_type VALUES ('13882', '    Phải thu khác dài hạn( trên 12 tháng)');
INSERT INTO account_type VALUES ('141', '  Tạm ứng');
INSERT INTO account_type VALUES ('1421', '   Chi phí trả trước ngắn hạn');
INSERT INTO account_type VALUES ('151', '  Hàng mua đang đi trên đường');
INSERT INTO account_type VALUES ('152', '  Nguyên liệu, vật liệu');
INSERT INTO account_type VALUES ('153', '  Công cụ, dụng cụ');
INSERT INTO account_type VALUES ('1531', '   Công cụ, dụng cụ');
INSERT INTO account_type VALUES ('1532', '   Bao bì luân chuyển');
INSERT INTO account_type VALUES ('1533', '   Đồ dùng cho thuê');
INSERT INTO account_type VALUES ('1534', '   Thiết bị, phụ tùng thay thế');
INSERT INTO account_type VALUES ('154', '  Chi phí sản xuất, kinh doanh dở dang');
INSERT INTO account_type VALUES ('155', '  Thành phẩm');
INSERT INTO account_type VALUES ('1551', '   Thành phẩm nhập kho');
INSERT INTO account_type VALUES ('1557', '   Thành phẩm bất động sản');
INSERT INTO account_type VALUES ('156', '  Hàng hóa');
INSERT INTO account_type VALUES ('1561', '   Giá mua hàng hóa');
INSERT INTO account_type VALUES ('1562', '   Chi phí thu mua hàng hóa');
INSERT INTO account_type VALUES ('1567', '   Hàng hoá bất động sản');
INSERT INTO account_type VALUES ('157', '  Hàng gửi đi bán');
INSERT INTO account_type VALUES ('158', '  Hàng hóa kho bảo thuế');
INSERT INTO account_type VALUES ('161', '  Chi sự nghiệp');
INSERT INTO account_type VALUES ('1611', '   Chi sự nghiệp năm trước');
INSERT INTO account_type VALUES ('1612', '   Chi sự nghiệp năm nay');
INSERT INTO account_type VALUES ('171', '  Giao dịch mua bán lại trái phiếu chính phủ');
INSERT INTO account_type VALUES ('2', 'II - Tài sản dài hạn');
INSERT INTO account_type VALUES ('211', '  Tài sản cố định hữu hình');
INSERT INTO account_type VALUES ('2111', '   Nhà cửa, vật kiến trúc');
INSERT INTO account_type VALUES ('2112', '   Máy móc, thiết bị');
INSERT INTO account_type VALUES ('2113', '   Phương tiện vận tải, truyền dẫn');
INSERT INTO account_type VALUES ('2114', '   Thiết bị, dụng cụ quản lý');
INSERT INTO account_type VALUES ('2115', '   Cây lâu năm, súc vật làm việc và cho sản phẩm');
INSERT INTO account_type VALUES ('2118', '   Tài sản cố định khác');
INSERT INTO account_type VALUES ('212', '  Tài sản cố định thuê tài chính');
INSERT INTO account_type VALUES ('2121', '   TSCĐ hữu hình thuê tài chính');
INSERT INTO account_type VALUES ('2122', '   TSCĐ vô hình thuê tài chính');
INSERT INTO account_type VALUES ('213', '  Tài sản cố định vô hình');
INSERT INTO account_type VALUES ('2131', '   Quyền sử dụng đất');
INSERT INTO account_type VALUES ('2132', '   Quyền phát hành');
INSERT INTO account_type VALUES ('2133', '   Bản quyền , bằng sáng chế');
INSERT INTO account_type VALUES ('2134', '   Nhãn hiệu, tên thương mại');
INSERT INTO account_type VALUES ('2135', '   Chương trình phần mềm');
INSERT INTO account_type VALUES ('2136', '   Giấy phép và giấy phép nhượng quyền');
INSERT INTO account_type VALUES ('2138', '   TSCĐ vô hình khác');
INSERT INTO account_type VALUES ('214', '  Hao mòn TSCĐ');
INSERT INTO account_type VALUES ('2141', '   Hao mòn TSCĐ hữu hình');
INSERT INTO account_type VALUES ('2142', '   Hao mòn TSCĐ thuê tài chính');
INSERT INTO account_type VALUES ('2143', '   Hao mòn TSCĐ vô hình');
INSERT INTO account_type VALUES ('2147', '   Hao mòn bất động sản đầu tư');
INSERT INTO account_type VALUES ('217', '  Bất động sản đầu tư');
INSERT INTO account_type VALUES ('221', '  Đầu tư vào công ty con');
INSERT INTO account_type VALUES ('222', '  Đầu tư vào công ty liên doanh, liên kết');
INSERT INTO account_type VALUES ('228', '  Đầu tư dài hạn khác');
INSERT INTO account_type VALUES ('2281', '   Đầu tư góp vốn vào đơn vị khác');
INSERT INTO account_type VALUES ('2288', '   Đầu tư khác');
INSERT INTO account_type VALUES ('229', '  Dự phòng tổn thất tài sản');
INSERT INTO account_type VALUES ('2291', '   Dự phòng giảm giá chứng khoán kinh doanh');
INSERT INTO account_type VALUES ('2292', '   Dự phòng tổn thất đầu tư vào đơn vị khác');
INSERT INTO account_type VALUES ('2293', '   Dự phòng phải thu khó đòi');
INSERT INTO account_type VALUES ('2294', '   Dự phòng giảm giá hàng tồn kho');
INSERT INTO account_type VALUES ('241', '  Xây dựng cơ bản dở dang');
INSERT INTO account_type VALUES ('2411', '   Mua sắm TSCĐ');
INSERT INTO account_type VALUES ('2412', '   Xây dựng cơ bản');
INSERT INTO account_type VALUES ('2413', '   Sửa chữa lớn TSCĐ');
INSERT INTO account_type VALUES ('242', '  Chi phí trả trước dài hạn');
INSERT INTO account_type VALUES ('2421', '   Chi phí trả trước ngắn hạn');
INSERT INTO account_type VALUES ('2422', '   Chi phí trả trước dài hạn (trên 12 tháng)');
INSERT INTO account_type VALUES ('243', '  Tài sản thuế thu nhập hoãn lại');
INSERT INTO account_type VALUES ('244', '  Ký quỹ, ký cược dài hạn');
INSERT INTO account_type VALUES ('2441', '   Cầm cố,thế chấp,ký quỹ, ký cược ngắn hạn');
INSERT INTO account_type VALUES ('24411', '    Ký quỹ tại NH TMCP Công Thương VN CN Tây đô');
INSERT INTO account_type VALUES ('24413', '    Ký quỹ tại Ngân hàng TMCP Xăng Dầu Petrolimex');
INSERT INTO account_type VALUES ('2442', '   Cầm cố,thế chấp,ký quỹ, ký cược dái hạn');
INSERT INTO account_type VALUES ('3', 'III - Nợ phải trả');
INSERT INTO account_type VALUES ('331', '  Phải trả cho người bán');
INSERT INTO account_type VALUES ('3311', '   Phải trả cho người bán ngắn hạn');
INSERT INTO account_type VALUES ('3312', '   Phải trả cho người bán trên 12 tháng');
INSERT INTO account_type VALUES ('333', '  Thuế và các khoản phải nộp Nhà nước');
INSERT INTO account_type VALUES ('3331', '   Thuế GTGT phải nộp');
INSERT INTO account_type VALUES ('33311', '    Thuế GTGT đầu ra phải nộp');
INSERT INTO account_type VALUES ('33312', '    Thuế GTGT hàng nhập khẩu phải nộp');
INSERT INTO account_type VALUES ('3332', '   Thuế tiêu thụ đặc biệt');
INSERT INTO account_type VALUES ('3333', '   Thuế xuất, nhập khẩu');
INSERT INTO account_type VALUES ('3334', '   Thuế thu nhập doanh nghiệp');
INSERT INTO account_type VALUES ('3335', '   Thuế thu nhập cá nhân');
INSERT INTO account_type VALUES ('3336', '   Thuế tài nguyên');
INSERT INTO account_type VALUES ('3337', '   Thuế nhà đất, tiền thuê đất');
INSERT INTO account_type VALUES ('3338', '   Thuế bảo vệ môi trường và các loại thuế khác');
INSERT INTO account_type VALUES ('33381', '    Thuế bảo vệ môi trường');
INSERT INTO account_type VALUES ('33382', '    Các loại thuế khác');
INSERT INTO account_type VALUES ('3339', '   Phí, lệ phí và các khoản phải nộp khác');
INSERT INTO account_type VALUES ('334', '  Phải trả người lao động');
INSERT INTO account_type VALUES ('3341', '   Phải trả công nhân viên');
INSERT INTO account_type VALUES ('3348', '   Phải trả người lao động khác');
INSERT INTO account_type VALUES ('335', '  Chi phí phải trả');
INSERT INTO account_type VALUES ('3351', '   Chi phí phải trả ngắn hạn');
INSERT INTO account_type VALUES ('3352', '   Chi phí phải trả dài hạn');
INSERT INTO account_type VALUES ('336', '  Phải trả nội bộ');
INSERT INTO account_type VALUES ('3361', '   Phải trả nội bộ về vốn kinh doanh');
INSERT INTO account_type VALUES ('3362', '   Phải trả nội bộ về chênh lệch giá');
INSERT INTO account_type VALUES ('3363', '   Phải trả nội bộ về chi phí đi vay đủ điều kiện được vốn hóa');
INSERT INTO account_type VALUES ('3368', '   Phải trả nội bộ khác');
INSERT INTO account_type VALUES ('337', '  Thanh toán theo tiến độ kế hoạch hợp đồng xây dựng');
INSERT INTO account_type VALUES ('338', '  Phải trả, phải nộp khác');
INSERT INTO account_type VALUES ('3381', '   Tài sản thừa chờ giải quyết');
INSERT INTO account_type VALUES ('3382', '   Kinh phí công đoàn');
INSERT INTO account_type VALUES ('3383', '   Bảo hiểm xã hội');
INSERT INTO account_type VALUES ('3384', '   Bảo hiểm y tế');
INSERT INTO account_type VALUES ('3385', '   Phải trả về cổ phần hóa');
INSERT INTO account_type VALUES ('3386', '   Bảo hiểm thất nghiệp');
INSERT INTO account_type VALUES ('3387', '   Doanh thu chưa thực hiện');
INSERT INTO account_type VALUES ('33871', '    Doanh thu chưa thực hiện ngắn hạn');
INSERT INTO account_type VALUES ('33872', '    Doanh thu chưa thực hiện trên 12 tháng');
INSERT INTO account_type VALUES ('3388', '   Phải trả, phải nộp khác');
INSERT INTO account_type VALUES ('341', '  Vay và nợ thuê tài chính');
INSERT INTO account_type VALUES ('3411', '   Các khoản đi vay');
INSERT INTO account_type VALUES ('34111', '    Vay Ngân hàng TMCP Công thương VN CN Tây đô (VND)');
INSERT INTO account_type VALUES ('34112', '    Vay Ngân hàng Ngoại thương CT (VND)');
INSERT INTO account_type VALUES ('34113', '    Vay Ngân hàng TMCP Xăng Dầu Petrolimex (VND)');
INSERT INTO account_type VALUES ('34117', '    Vay NHTMCP Đầu tư và phát triển Việt Nam - Chi nhánh Tây Nam');
INSERT INTO account_type VALUES ('34119', '    Vay cá nhân và các đơn vị khác');
INSERT INTO account_type VALUES ('3412', '   Nợ thuê tài chính');
INSERT INTO account_type VALUES ('343', '  Trái phiếu phát hành');
INSERT INTO account_type VALUES ('3431', '   Trái phiếu thường');
INSERT INTO account_type VALUES ('34311', '    Mệnh giá trái phiếu');
INSERT INTO account_type VALUES ('343111', '    Mệnh giá trái phiếu ngắn hạn');
INSERT INTO account_type VALUES ('343112', '    Mệnh giá trái phiếu dài hạn');
INSERT INTO account_type VALUES ('34312', '    Chiết khấu trái phiếu');
INSERT INTO account_type VALUES ('34313', '    Phụ trội trái phiếu');
INSERT INTO account_type VALUES ('3432', '   Trái phiếu chuyển đổi');
INSERT INTO account_type VALUES ('344', '  Nhận ký quỹ, ký cược');
INSERT INTO account_type VALUES ('347', '  Thuế thu nhập hoãn lại phải trả');
INSERT INTO account_type VALUES ('352', '  Dự phòng phải trả');
INSERT INTO account_type VALUES ('3521', '   Dự phòng bảo hành sản phẩm hàng hóa');
INSERT INTO account_type VALUES ('3522', '   Dự phòng bảo hành công trình xây dựng');
INSERT INTO account_type VALUES ('3523', '   Dự phòng tái cơ cấu doanh nghiệp');
INSERT INTO account_type VALUES ('3524', '   Dự phòng phải trả khác');
INSERT INTO account_type VALUES ('353', '  Quỹ khen thưởng phúc lợi');
INSERT INTO account_type VALUES ('3531', '   Quỹ khen thưởng');
INSERT INTO account_type VALUES ('3532', '   Quỹ phúc lợi');
INSERT INTO account_type VALUES ('3533', '   Quỹ phúc lợi đã hình thành TSCĐ');
INSERT INTO account_type VALUES ('3534', '   Quỹ thưởng ban quản lý điều hành công ty');
INSERT INTO account_type VALUES ('356', '  Quỹ phát triển khoa học và công nghệ');
INSERT INTO account_type VALUES ('3561', '   Quỹ phát triển khoa học và công nghệ');
INSERT INTO account_type VALUES ('3562', '   Quỹ phát triển khoa học và công nghệ đã hình thành TSCĐ');
INSERT INTO account_type VALUES ('357', '  Quỹ bình ổn giá');
INSERT INTO account_type VALUES ('4', 'IV - Vốn chủ sở hữu');
INSERT INTO account_type VALUES ('411', '  Vốn đầu tư của chủ sở hữu');
INSERT INTO account_type VALUES ('4111', '   Vốn góp của chủ sở hữu');
INSERT INTO account_type VALUES ('41111', '    Cổ phiếu phổ thông có quyền biểu quyết');
INSERT INTO account_type VALUES ('41112', '    Cổ phiếu ưu đãi');
INSERT INTO account_type VALUES ('4112', '   Thặng dư vốn cổ phần');
INSERT INTO account_type VALUES ('4113', '   Quyền chọn chuyển đổi trái phiếu');
INSERT INTO account_type VALUES ('4118', '   Vốn khác');
INSERT INTO account_type VALUES ('412', '  Chênh lệch đánh giá lại tài sản');
INSERT INTO account_type VALUES ('413', '  Chênh lệch tỷ giá hối đoái');
INSERT INTO account_type VALUES ('4131', '   Chênh lệch tỷ giá do đánh giá lại các khoản mục tiền tệ có gốc ngoại tệ');
INSERT INTO account_type VALUES ('4132', '   Chênh lệch tỷ giá hối đoái trong giai đoạn trước hoạt động');
INSERT INTO account_type VALUES ('414', '  Quỹ đầu tư phát triển');
INSERT INTO account_type VALUES ('417', '  Quỹ hỗ trợ sắp xếp doanh nghiệp');
INSERT INTO account_type VALUES ('418', '  Các quỹ khác thuộc vốn chủ sở hữu');
INSERT INTO account_type VALUES ('419', '  Cổ phiếu quỹ');
INSERT INTO account_type VALUES ('421', '  Lợi nhuận sau thuế chưa phân phối');
INSERT INTO account_type VALUES ('4211', '   Lợi nhuận sau thuế chưa phân phối năm trước');
INSERT INTO account_type VALUES ('4212', '   Lợi nhuận sau thuế chưa phân phối năm nay');
INSERT INTO account_type VALUES ('441', '  Nguồn vốn đầu tư xây dựng cơ bản');
INSERT INTO account_type VALUES ('461', '  Nguồn kinh phí sự nghiệp');
INSERT INTO account_type VALUES ('4611', '   Nguồn kinh phí sự nghiệp năm trước');
INSERT INTO account_type VALUES ('4612', '   Nguồn kinh phí sự nghiệp năm nay');
INSERT INTO account_type VALUES ('466', '  Nguồn kinh phí đã hình thành TSCĐ');
INSERT INTO account_type VALUES ('5', 'V - Doanh thu');
INSERT INTO account_type VALUES ('511', '  Doanh thu bán hàng và cung cấp dịch vụ');
INSERT INTO account_type VALUES ('5111', '   Doanh thu bán hàng hóa');
INSERT INTO account_type VALUES ('5112', '   Doanh thu bán các thành phẩm');
INSERT INTO account_type VALUES ('5113', '   Doanh thu cung cấp dịch vụ');
INSERT INTO account_type VALUES ('5114', '   Doanh thu trợ cấp, trợ giá');
INSERT INTO account_type VALUES ('5117', '   Doanh thu kinh doanh bất động sản đầu tư');
INSERT INTO account_type VALUES ('5118', '   Doanh thu khác');
INSERT INTO account_type VALUES ('515', '  Doanh thu hoạt động tài chính');
INSERT INTO account_type VALUES ('521', '  Các khoản giảm trừ doanh thu');
INSERT INTO account_type VALUES ('5211', '   Chiết khấu thương mại');
INSERT INTO account_type VALUES ('5212', '   Giảm giá hàng bán');
INSERT INTO account_type VALUES ('5213', '   Hàng bán bị trả lại');
INSERT INTO account_type VALUES ('6', 'VI - Chi phí sản xuất kinh doanh');
INSERT INTO account_type VALUES ('611', '  Mua hàng');
INSERT INTO account_type VALUES ('6111', '   Mua nguyên liệu, vật liệu');
INSERT INTO account_type VALUES ('6112', '   Mua hàng hóa');
INSERT INTO account_type VALUES ('621', '  Chi phí nguyên liệu, vật liệu trực tiếp');
INSERT INTO account_type VALUES ('622', '  Chi phí nhân công trực tiếp');
INSERT INTO account_type VALUES ('623', '  Chi phí sử dụng máy thi công');
INSERT INTO account_type VALUES ('6231', '   Chi phí nhân công');
INSERT INTO account_type VALUES ('6232', '   Chi phí nguyên, vật  liệu');
INSERT INTO account_type VALUES ('6233', '   Chi phí dụng cụ sản xuất');
INSERT INTO account_type VALUES ('6234', '   Chi phí khấu hao máy thi công');
INSERT INTO account_type VALUES ('6237', '   Chi phí dịch vụ mua ngoài');
INSERT INTO account_type VALUES ('6238', '   Chi phí bằng tiền khác');
INSERT INTO account_type VALUES ('627', '  Chi phí sản xuất chung');
INSERT INTO account_type VALUES ('6271', '   Chi phí nhân viên phân xưởng');
INSERT INTO account_type VALUES ('6272', '   Chi phí nguyên, vật liệu');
INSERT INTO account_type VALUES ('6273', '   Chi phí dụng cụ sản xuất');
INSERT INTO account_type VALUES ('6274', '   Chi phí khấu hao TSCĐ');
INSERT INTO account_type VALUES ('6277', '   Chi phí dịch vụ mua ngoài');
INSERT INTO account_type VALUES ('6278', '   Chi phí bằng tiền khác');
INSERT INTO account_type VALUES ('631', '  Giá thành sản xuất');
INSERT INTO account_type VALUES ('632', '  Giá vốn hàng bán');
INSERT INTO account_type VALUES ('635', '  Chi phí tài chính');
INSERT INTO account_type VALUES ('6351', '   Chi phí tài chính (Lãi tiền vay)');
INSERT INTO account_type VALUES ('6352', '   Chi phí tài chính khác');
INSERT INTO account_type VALUES ('641', '  Chi phí bán hàng');
INSERT INTO account_type VALUES ('6411', '   Chi phí nhân viên bán hàng');
INSERT INTO account_type VALUES ('64111', '    Chi phí tiền lương phục vụ kinh doanh');
INSERT INTO account_type VALUES ('64112', '    Các khoản trích BHXH, BHYT, KPCĐ phục vụ kinh doanh');
INSERT INTO account_type VALUES ('6412', '   Chi phí vật liệu, bao bì');
INSERT INTO account_type VALUES ('64121', '    Chi phí vật liệu, bao bì');
INSERT INTO account_type VALUES ('64122', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ');
INSERT INTO account_type VALUES ('641221', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ thép');
INSERT INTO account_type VALUES ('641222', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ xi măng');
INSERT INTO account_type VALUES ('641223', '    Chi phí vật liệu, nhiên liệu dùng cho vchuyển hhóa tiêu thụ gạch, cát, đá');
INSERT INTO account_type VALUES ('641224', '    Chi phí vật liệu, nhiên liệu dùng cho cẩu hàng hóa');
INSERT INTO account_type VALUES ('641228', '    Chi phí vật liệu, nhiên liệu dùng cho PT, MM cho thuê lại');
INSERT INTO account_type VALUES ('64123', '    Chi phí nhiên vật liệu dùng cho sửa chữa TSCĐ dùng cho bộ phận bán hàng');
INSERT INTO account_type VALUES ('6413', '   Chi phí dụng cụ, đồ dùng');
INSERT INTO account_type VALUES ('64131', '    Chi phí trang bị máy vi tính, máy in');
INSERT INTO account_type VALUES ('64132', '    Chi phí mực in, ruban');
INSERT INTO account_type VALUES ('64133', '    Chi phí trang bị máy điều hoà nhiệt độ');
INSERT INTO account_type VALUES ('64138', '    Chi phí trang bị đồ dùng văn phòng khác');
INSERT INTO account_type VALUES ('6414', '   Chi phí khấu hao TSCĐ');
INSERT INTO account_type VALUES ('6415', '   Chi phí bảo hành');
INSERT INTO account_type VALUES ('6417', '   Chi phí dịch vụ mua ngoài');
INSERT INTO account_type VALUES ('64171', '    Chi phí sửa chữa TSCĐ phục vụ kinh doanh');
INSERT INTO account_type VALUES ('64172', '    Chi phí thuê kho bãi, thuê nhà');
INSERT INTO account_type VALUES ('64173', '    Chi phí tiền thuê bốc vác');
INSERT INTO account_type VALUES ('641731', '    Chi phí tiền thuê bốc vác thép');
INSERT INTO account_type VALUES ('641732', '    Chi phí tiền thuê bốc vác xi măng');
INSERT INTO account_type VALUES ('641733', '    Chi phí tiền thuê bốc vác gạch, cát, đá');
INSERT INTO account_type VALUES ('64174', '    Chi phí vận chuyển bán hàng');
INSERT INTO account_type VALUES ('641741', '    Chi phí vận chuyển bán hàng thép');
INSERT INTO account_type VALUES ('641742', '    Chi phí vận chuyển bán hàng xi măng');
INSERT INTO account_type VALUES ('641743', '    Chi phí vận chuyển bán hàng gạch, cát, đá');
INSERT INTO account_type VALUES ('641745', '    Chi phí thuê phương tiện vận chuyển hàng hóa');
INSERT INTO account_type VALUES ('64175', '    Chi phí điện thoại bộ phận bán hàng');
INSERT INTO account_type VALUES ('64176', '    Chi phí tiền điện bộ phận bán hàng');
INSERT INTO account_type VALUES ('64177', '    Chi phí tiền nước bộ phận bán hàng');
INSERT INTO account_type VALUES ('64178', '    Phí chuyển tiền ngân hàng');
INSERT INTO account_type VALUES ('64179', '    Chi phí dịch vụ mua ngoài phục vụ bán hàng khác');
INSERT INTO account_type VALUES ('6418', '   Chi phí bằng tiền khác');
INSERT INTO account_type VALUES ('64181', '    Chi phí tiếp khách');
INSERT INTO account_type VALUES ('64182', '    Chi phí giới thiệu sản phẩm, hàng hóa');
INSERT INTO account_type VALUES ('64183', '    Chi phí quảng cáo, chào hàng');
INSERT INTO account_type VALUES ('64184', '    Chi phí hội nghị khách hàng');
INSERT INTO account_type VALUES ('64185', '    Phí giao nhận ,công tác phí, xăng xe bộ phận bán hàng');
INSERT INTO account_type VALUES ('64186', '    Các khoản chi cho lao động nữ');
INSERT INTO account_type VALUES ('64187', '    Chi phí nghiên cứu, đào tạo bộ phận bán hàng');
INSERT INTO account_type VALUES ('64188', '    Chi phí bằng tiền phục vụ bán hàng khác');
INSERT INTO account_type VALUES ('642', '  Chi phí quản lý doanh nghiệp');
INSERT INTO account_type VALUES ('6421', '   Chi phí nhân viên quản lý');
INSERT INTO account_type VALUES ('64211', '    Chi phí nhân viên quản lý');
INSERT INTO account_type VALUES ('64212', '    Các khoản trích BHXH, BHYT, KPCĐ nhân viên quản lý');
INSERT INTO account_type VALUES ('6422', '   Chi phí vật liệu quản lý');
INSERT INTO account_type VALUES ('64221', '    Chi phí văn phòng phẩm');
INSERT INTO account_type VALUES ('64222', '    Chi phí vật liệu dùng cho sửa chữa TSCĐ');
INSERT INTO account_type VALUES ('64223', '    Chi phí sửa chữa máy vi tính, máy in');
INSERT INTO account_type VALUES ('6423', '   Chi phí đồ dùng văn phòng');
INSERT INTO account_type VALUES ('64231', '    Chi phí trang bị máy vi tính, máy in');
INSERT INTO account_type VALUES ('64232', '    Chi phí mực in, ruban');
INSERT INTO account_type VALUES ('64233', '    Chi phí trang bị máy điều hoà nhiệt độ');
INSERT INTO account_type VALUES ('64238', '    Chi phí trang bị đồ dùng văn phòng khác');
INSERT INTO account_type VALUES ('6424', '   Chi phí khấu hao TSCĐ');
INSERT INTO account_type VALUES ('64241', '    Khấu hao TSCĐ nhà cửa, vật kiến trúc');
INSERT INTO account_type VALUES ('64242', '    Khấu hao TSCĐ máy móc, thiết bị');
INSERT INTO account_type VALUES ('64243', '    Khấu hao TSCĐ phương tiện vận tải, truyền dẫn');
INSERT INTO account_type VALUES ('64244', '    Khấu hao TSCĐ thiết bị, dụng cụ quản lý');
INSERT INTO account_type VALUES ('64245', '    Khấu hao TSCĐ hữu hình khác');
INSERT INTO account_type VALUES ('64246', '    Khấu hao TSCĐ vô hình');
INSERT INTO account_type VALUES ('6425', '   Chi phí thuế môn bài,trước bạ, phí và lệ phí,đăng kiểm,bảo hiểm');
INSERT INTO account_type VALUES ('64251', '    Thuế môn bài,trước bạ,thuê đất, đăng kiểm,bảo hiểm xe ghe');
INSERT INTO account_type VALUES ('64252', '    Lệ phí giao thông, lệ phí qua cầu, phà');
INSERT INTO account_type VALUES ('6426', '   Chi phí dự phòng');
INSERT INTO account_type VALUES ('6427', '   Chi phí dịch vụ mua ngoài');
INSERT INTO account_type VALUES ('64271', '    Chi phí điện thoại');
INSERT INTO account_type VALUES ('64272', '    Chi phí tiền điện');
INSERT INTO account_type VALUES ('64273', '    Chi phí tiền nước');
INSERT INTO account_type VALUES ('64274', '    Chi phí sửa chữa TSCĐ một lần với giá trị nhỏ');
INSERT INTO account_type VALUES ('64275', '    Phí chuyển tiền ngân hàng');
INSERT INTO account_type VALUES ('64278', '    Chi phí dịch vụ mua ngoài khác');
INSERT INTO account_type VALUES ('6428', '   Chi phí bằng tiền khác');
INSERT INTO account_type VALUES ('64281', '    Chi phí hội nghị');
INSERT INTO account_type VALUES ('64282', '    Chi phí tiếp khách');
INSERT INTO account_type VALUES ('64283', '    Công tác phí, tàu xe, xăng xe con đi công tác');
INSERT INTO account_type VALUES ('64284', '    Các khoản chi cho lao động nữ');
INSERT INTO account_type VALUES ('64285', '    Chi phí nghiên cứu, đào tạo');
INSERT INTO account_type VALUES ('64286', '    Chi nộp phí tham gia hiệp hội');
INSERT INTO account_type VALUES ('64287', '    Chi phí giao dịch ngân hàng');
INSERT INTO account_type VALUES ('64288', '    Chi phí bằng tiền khác');
INSERT INTO account_type VALUES ('7', 'VII - Thu nhập khác');
INSERT INTO account_type VALUES ('711', '  Thu nhập khác');
INSERT INTO account_type VALUES ('71111', '    Thu nhập khác từ hàng thừa thép');
INSERT INTO account_type VALUES ('71112', '    Thu nhập khác từ hàng thừa xi măng');
INSERT INTO account_type VALUES ('71113', '    Thu nhập khác từ hàng thừa gạch, cát, đá,...');
INSERT INTO account_type VALUES ('71118', '    Thu nhập khác');
INSERT INTO account_type VALUES ('8', 'XIII - Chi phí khác');
INSERT INTO account_type VALUES ('811', '  Chi phí khác');
INSERT INTO account_type VALUES ('821', '  Chi phí thuế thu nhập doanh nghiệp');
INSERT INTO account_type VALUES ('8211', '   Chi phí thuế thu nhập doanh nghiệp hiện hành');
INSERT INTO account_type VALUES ('8212', '   Chi phí thuế thu nhập doanh nghiệp hoãn lại');
INSERT INTO account_type VALUES ('9', 'IX - Xác định kết quả kinh doanh');
INSERT INTO account_type VALUES ('911', '  Xác định kết quả kinh doanh');

-- form
INSERT INTO `form`(`id`, `form_id`, `date_create`, `content`, `total_money`, `total_money_text`, `form_type`, `account_type`, `receipt`, `user`, `customer`, `warehouse`, `money_type`, `status`) 
VALUES (1, 'CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,1);
INSERT INTO `form`(`id`, `form_id`, `date_create`, `content`, `total_money`, `total_money_text`, `form_type`, `account_type`, `receipt`, `user`, `customer`, `warehouse`, `money_type`, `status`) 
VALUES (2, 'CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,2);

INSERT INTO `form`(`id`, `form_id`, `date_create`, `content`, `total_money`, `total_money_text`, `form_type`, `account_type`, `receipt`, `user`, `customer`, `warehouse`, `money_type`, `status`) 
VALUES (3, 'CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,2);