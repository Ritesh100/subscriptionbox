CREATE TABLE IF NOT EXISTS `registration` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 'phonenumber' varchar(10) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE registration
  ADD PRIMARY KEY (`email`);
  
  
  ALTER TABLE registration
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;