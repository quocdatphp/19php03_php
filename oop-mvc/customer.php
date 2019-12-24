<?php include "user.php"; ?>
<?php 
	class Customer
	{
		private $name;
		private $email;
		private $register;
		private $password;
		private $phone;
		private $address;
		private $add_ship;
		private $payment;
		private $code_customer;

		public function __construct ($register, $payment)
		{
			$register = $this->register;
			$payment = $this->payment;
		}
		public function Edit()
		{
			echo "Sửa";
		}
		public function Register()
		{
			return $this->register;
		}
		public function Login()
		{
			echo "Đăng nhập";
		}
		public function View()
		{
			echo "Hiển thị";
		}
		public function Payment()
		{
			return $this->payment;
		}
		public function Historypurchase()
		{
			echo "Lịch sử mua hàng";
		}
	}
 ?>

