-- Data form status
INSERT INTO `form_status`(`id`, `name`) VALUES (1, 'approved');
INSERT INTO `form_status`(`id`, `name`) VALUES (2, 'pending');
INSERT INTO `form_status`(`id`, `name`) VALUES (3, 'blocked');

-- money_status
INSERT INTO `money_type`(`id`, `name`, `rate`) VALUES (1,'VND', 1.0);
INSERT INTO `money_type`(`id`, `name`, `rate`) VALUES (2,'USD', 2.2);
-- form_status
INSERT INTO `form_status`(`id`, `name`) VALUES (1, 'approved');
INSERT INTO `form_status`(`id`, `name`) VALUES (2, 'pending');
INSERT INTO `form_status`(`id`, `name`) VALUES (3, 'blocked');

-- money_status
INSERT INTO `money_type`(`id`, `name`, `rate`) VALUES (1,'VND', 1.0);
INSERT INTO `money_type`(`id`, `name`, `rate`) VALUES (2,'USD', 2.2);

-- roles
INSERT INTO `roles`(`id`, `name`) VALUES (1, 'employee');
INSERT INTO `roles`(`id`, `name`) VALUES (2, 'manager');
INSERT INTO `roles`(`id`, `name`) VALUES (3, 'admin');

-- form_type
INSERT INTO `form_type`(`id`, `name`) VALUES (1, 'input');
INSERT INTO `form_type`(`id`, `name`) VALUES (2, 'output');

-- receipt_status


-- units
INSERT INTO `units`(`id`, `name`, `address`) VALUES (1, 'UIT Company', 'Nhà em ở Suối Tiên');

-- warehouse
INSERT INTO `warehouse`(`id`, `name`, `address`) VALUES (1, 'UIT warehouse', 'Linh Trung, Thủ Đức');

-- users
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (1,'mongnt','admin','Nguyen Thach Mong', '', 'HTTT2014', 1);
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (2,'lingntd','admin','Duy Linh', '', 'HTTT2014', 2);
INSERT INTO `users`(`id`, `username`, `password`, `fullname`, `picture`, `info`, `role`) 
	VALUES (3,'namtc','admin','Tran Chi Nam', '', 'HTTT2014', 3);
-- roles
INSERT INTO `roles`(`id`, `name`) VALUES (1, 'employee');
INSERT INTO `roles`(`id`, `name`) VALUES (2, 'manager');
INSERT INTO `roles`(`id`, `name`) VALUES (3, 'admin');

-- form_type
