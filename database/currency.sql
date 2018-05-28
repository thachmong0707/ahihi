create table roles
(
	id int primary key auto_increment,
    name text
);

create table users
(
	id int primary key auto_increment,
    username text,
    password text,
    fullname text,
    picture text,
    info text,
    role int,
    foreign key (role) references roles(id)
);

-- ex: N331 - phai tra cho nguoi ban
create table account_type
(
	id varchar(10) primary key,
    name text
);

create table warehouse
(
	id int primary key auto_increment,
    name text,
    address text
);

-- ex: USD - 2,2  , rates = USD/VND
create table money_type
(
	id int primary key auto_increment,
    unit text,
    name text,
    rate decimal(4,2)
);

create table customers
(
	id int primary key auto_increment,
    fullname text,
    address text,
    company text
);

-- table extension: info company
create table company
(
	name text,
    address text,
    founding date
);

-- 1: Phieu thu
-- 2: Phieu chi
create table form_type
(
	id int primary key,
    name text
);

create table form_status
(
	id int primary key,
	name text
);

-- receipt: chung tu
create table form
(
	id int primary key auto_increment,
    form_id text,
    date_create date,
	content text,
    total_money int,
    total_money_text text,
    form_type int,
    account_type varchar(10),
	receipt text,
    user int,
    customer int,
    warehouse int,
    money_type int,
	status int,
    foreign key (form_type) references form_type(id),
    foreign key (account_type) references account_type(id),
    foreign key (user) references users(id),
    foreign key (customer) references customers(id),
    foreign key (warehouse) references warehouse(id),
    foreign key (money_type) references money_type(id),
    foreign key (status) references form_status(id)
);

create table contract_type
(
	id int primary key auto_increment,
    name text
);

-- money: value follow form ( USD,..vv..)
-- money_vnd: parse money * rates
create table form_detail
(
	form_id int,
    account_type varchar(10),
    money int,
    money_vnd int,
    date_create date,
	contract_type int,
    primary key (form_id, account_type),
    foreign key (form_id) references form(id),
    foreign key (account_type) references account_type(id),
    foreign key (contract_type) references contract_type(id)
);

GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'admin' WITH GRANT OPTION;
 FLUSH PRIVILEGES;





