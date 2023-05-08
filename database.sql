CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `firstname` varchar(50) NOT NULL,
                         `lastname` varchar(50) NOT NULL,
                         `username` varchar(50) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `email` varchar(100) NOT NULL,
                         `mobile` varchar(20) NOT NULL,
                         `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `email`, `mobile`) VALUES
('John', 'Doe', 'johndoe', 'password1', 'johndoe@example.com', '555-1234'),
('Jane', 'Doe', 'janedoe', 'password2', 'janedoe@example.com', '555-5678'),
('Bob', 'Smith', 'bobsmith', 'password3', 'bobsmith@example.com', '555-2468'),
('Alice', 'Johnson', 'alicej', 'password4', 'alicej@example.com', '555-7890'),
('Mike', 'Brown', 'mikebrown', 'password5', 'mikebrown@example.com', '555-1357'),
('Emily', 'Davis', 'emilyd', 'password6', 'emilyd@example.com', '555-2468'),
('Tom', 'Wilson', 'tomw', 'password7', 'tomw@example.com', '555-4444'),
('Linda', 'Johnson', 'lindaj', 'password8', 'lindaj@example.com', '555-9876'),
('David', 'Jones', 'davidj', 'password9', 'davidj@example.com', '555-2222'),
('Karen', 'Miller', 'karenm', 'password10', 'karenm@example.com', '555-7777'),
('Steve', 'Lee', 'stevel', 'password11', 'stevel@example.com', '555-9999'),
('Samantha', 'Clark', 'samanthac', 'password12', 'samanthac@example.com', '555-8888'),
('Frank', 'Adams', 'franka', 'password13', 'franka@example.com', '555-3333'),
('Kelly', 'Martin', 'kellym', 'password14', 'kellym@example.com', '555-5555'),
('Paul', 'Taylor', 'pault', 'password15', 'pault@example.com', '555-1212'),
('Maria', 'Garcia', 'mariag', 'password16', 'mariag@example.com', '555-7878'),
('Kevin', 'Nguyen', 'kevinn', 'password17', 'kevinn@example.com', '555-6868'),
('Tiffany', 'Wong', 'tiffanyw', 'password18', 'tiffanyw@example.com', '555-9191'),
('Greg', 'Wilson', 'gregw', 'password19', 'gregw@example.com', '555-2323'),
('Vanessa', 'Kim', 'vanessak', 'password20', 'vanessak@example.com', '555-4545'),
('Gary', 'Lewis', 'garyl', 'password21', 'garyl@example.com', '555-6565'),
('Nicole', 'Harris', 'nicoleh', 'password22', 'nicoleh@example.com', '555-4646'),
('Jacob', 'Rivera', 'jacobr', 'password23', 'jacobr@example.com', '555-7979'),
('Melissa', 'Smith', 'melissas', 'password24', 'melissas@example.com', '555-1313'),
('Victor', 'Jones', 'victorj', 'password25', 'victorj@example.com', '555-1818');

