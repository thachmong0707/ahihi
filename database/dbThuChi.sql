create table phanquyen(
    id int primary key auto_increment,
    ten_quyen text
);

create table nhanvien(
    id int primary key auto_increment,
    taikhoan text,
    matkhau text,
    hoten text,
    picture text,
    thongtin text,
    idPQ int,
    foreign key (idPQ) references phanquyen(id)
);

-- ex: N331 - phai tra cho nguoi ban
create table loaitaikhoan(
    id varchar(10) primary key,
    tenTK text
);

create table kho(
    id int primary key auto_increment,
    tenkho text,
    diachi text
);

-- ex: USD - 2,2  , rates = USD/VND
create table loaitien(
    id int primary key auto_increment,
    kyhieu text,
    ten text,
    tile decimal(4,2)
);

create table khachhang(
    id int primary key auto_increment,
    hoten text,
    diachi text,
    congty text
);

-- table extension: info company
create table company(
    name text,
    address text,
    founding date
);

-- 1: Phieu thu
-- 2: Phieu chi
create table loaiphieu(
    id int primary key,
    tenphieu text
);

create table trangthai(
    id int primary key,
    tentt text
);

-- receipt: chung tu
create table phieu
(
    id int primary key auto_increment,
    maphieu text,
    ngaytao date,
    noidung text,
    tongtien int,
    tongtien_text text,
    loaiphieuId int,
    loaiTK varchar(10),
    chungtugoc text,
    maNV int,
    maKH int,
    maKho int,
    maloaitien int,
    trangthai int,
    foreign key (loaiphieuId) references loaiphieu(id),
    foreign key (account_type) references account_type(id),
    foreign key (user) references users(id),
    foreign key (customer) references customers(id),
    foreign key (warehouse) references warehouse(id),
    foreign key (money_type) references money_type(id),
    foreign key (status) references form_status(id)
);