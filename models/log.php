<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../classes/PHPMailer/src/Exception.php';
require __DIR__ . '/../classes/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../classes/PHPMailer/src/SMTP.php';


class LogModel extends Model {
    public function register() {
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['password'])){
			$password = password_hash($post['password'], PASSWORD_DEFAULT);
		} else {
			$password = '';
		}

		if(isset($post['submit'])){
			if($post['name'] == '' || $post['password'] == '' || $post['fullname'] == ''|| $post['email'] == ''|| $post['phone'] == ''){
				Messages::setMsg('Please fill in the required fields', 'error');
				return;
			}
            try {
                // Insert into mySQL
                $this->query('INSERT INTO users (Username, Password, FullName, Email, PhoneNumber, UserRole) VALUES (:name, :password, :fullname, :email, :phone, :userRole)');
                $this->bind(':name', $post['name']);
                $this->bind(':password', $password);
                $this->bind(':fullname',$post['fullname']);
                $this->bind(':email', $post['email']);
                $this->bind(':phone', $post['phone']);
                $this->bind(':userRole', 2); // Bind the default UserRole value

                $this->execute();

                // Verify
                if($this->lastInsertId()){
                    Messages::setMsg('Đăng ký thành công!', 'success');
                    // Redirect
                    header('Location: ' . ROOT_PATH . 'log/login');
                    exit(0);
			    }
            } catch (PDOException $e) {
                echo "Database error: " . $e->getMessage();

		}
		return;
    }
}
    public function ForgetPass() {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            $email = $post['email'];
    
            // Check if email exists
            $this->query('SELECT * FROM users WHERE Email = :email');
            $this->bind(':email', $email);
            $row = $this->single();
    
            if($row){
                // Generate a unique token
                $token = bin2hex(random_bytes(50));
                $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour
    
                // Save the token and expiry in the database
                $this->query('INSERT INTO password_reset_tokens (user_id, token, expiry) VALUES (:user_id, :token, :expiry)');
                $this->bind(':user_id', $row['UserID']);
                $this->bind(':token', $token);
                $this->bind(':expiry', $expiry);
                $this->execute();
    
                // Send the email with the reset link containing the token
                $resetLink = "http://localhost/php-mvc/log/Resetpass?token=" . $token;
    
                // PHPMailer code
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'mmoquanao@gmail.com';
                    $mail->Password = 'gjuylknqfwblwwgv';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
    
                    $mail->setFrom('from@example.com', 'Password Reset');
                    $mail->addAddress($email); // Add a recipient
    
                    $mail->isHTML(true);
                    $mail->Subject = 'Yêu cầu đặt lại mật khẩu ';
                    $mail->Body = 'Vui lòng nhấp vào liên kết sau để đặt lại mật khẩu của bạn:<a href="' . $resetLink . '">Reset Password</a>';
    
                    $mail->send();
                    Messages::setMsg('Hướng dẫn đặt lại mật khẩu đã được gửi tới email của bạn', 'success');
                } catch (Exception $e) {
                    Messages::setMsg("Không thể gửi tin nhắn. Lỗi gửi thư: {$mail->ErrorInfo}", 'error');
                }
            } else {
                Messages::setMsg('Email not found', 'error');
            }
        }
        return;
    }

    public function login() {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            if(empty($post['email']) || !isset($post['password'])){
                Messages::setMsg('Please fill in the required fields', 'error');
                return;
            }
            $this->query('SELECT * FROM users WHERE Email = :email');
            $this->bind(':email', $post['email']);
            $row = $this->single();
    
            if($row){
                if(password_verify($post['password'], $row['Password'])) {
                    $_SESSION['is_logged_in'] = true;
					$_SESSION['user_data'] = array(
                        "UserID" => $row['UserID'],
						"Username" => $row['Username'],
						"Email" => $row['Email']
					);
					header('Location: ' . ROOT_PATH . 'home/index');
					exit(0); // This line solves the issue where $_SESSION['successMsg'] is unset after header redirection
                } else {
                    Messages::setMsg('Password is incorrect', 'error');
                    return;
                }
            } else {
                Messages::setMsg('User not found', 'error');
            }
        }
    
        return;
	}

    public function Resetpass(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            $token = $post['token'];
            $newPassword = $post['password'];
            $confirmPassword = $post['confirm_password'];
    
            // Check if new password and confirm password are the same
            if($newPassword !== $confirmPassword){
                Messages::setMsg('Passwords do not match', 'error');
                return;
            }
    
            $this->query('SELECT * FROM password_reset_tokens WHERE token = :token');
            $this->bind(':token', $token);
            $tokenRow = $this->single();
    
            if($tokenRow && strtotime($tokenRow['expiry']) > time()){
                $userId = $tokenRow['user_id'];
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                
                $this->query('UPDATE users SET Password = :password WHERE UserID = :user_id');
                $this->bind(':password', $hashedPassword);
                $this->bind(':user_id', $userId);
                $this->execute();
    
                // Optional: Invalidate the token after use
                $this->query('DELETE FROM password_reset_tokens WHERE token = :token');
                $this->bind(':token', $token);
                $this->execute();
    
                Messages::setMsg('Password reset successfully', 'success');
                header('Location: ' . ROOT_PATH . 'log/login');
                exit(0);
            } else {
                Messages::setMsg('Invalid or expired token', 'error');
                return;
            }
        }
        return;
    
    }
}