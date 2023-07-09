CREATE TABLE web_db.users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  gender VARCHAR(5) NOT NULL,
  date_of_birth TIMESTAMP not null,
  marital_status VARCHAR(5) NOT NULL,
  email_address VARCHAR(255) NOT NULL,
  pass_word VARCHAR(255) NOT NULL,
  con_pass_word VARCHAR(255) NOT NULL,
  phone_no int NOT NULL,
  address_no VARCHAR(50) NOT NULL,
  states VARCHAR(50) NOT NULL,
  hobbies VARCHAR(50) NOT NULL,
  photo blob(255) not null,
  declaretion bit not null,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);