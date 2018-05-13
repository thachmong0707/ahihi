-- Data form status
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
