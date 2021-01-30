<?php 
    class MyApp
    {
        private $server = "mysql:host=localhost;dbname=jobfindph_db";
        private $user = "root";
        private $pass = "";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $con;

        public function openConnection(){
            try{
    
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
                return $this->con;
    
            }catch(PDOException $e){
                echo "There is a problem in the connection :". $e->getMessage();
            }
        }
        public function closeConnection(){
            $this->con = null;
        }
        public function getUsers(){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM user_login");
            $stmt->execute();
            $users = $stmt->fetchAll();
            $userCount = $stmt->rowCount();
    
            if($userCount > 0){
                return $users;
            }else{
                return 0;
            }
        }
        public function signin()
        {

            if(isset($_POST['submit']))
            {
            
                $password = md5($_POST['password']);
                $username = $_POST['email'];
               

                $connection = $this->openConnection();
                $stmt = $connection->prepare("SELECT * FROM user_login WHERE email = ? AND password = ?");
                
                $stmt->execute([$username,$password]);
                $user = $stmt->fetch();
                $total = $stmt->rowCount();


                            
                if($total > 0){
                    echo "Welcome ".$user['first_name']." ".$user['last_name'];
                    $this->set_userdata($user);
                    
                    if($user['usertype'] == "applicant"){
                        echo "You Log in as ".$user['usertype'];
                        header("Location: applicant.php");
                    }
                    if($user['usertype'] == "employer"){
                        echo "You Log in as ".$user['usertype'];
                        header("Location: employer.php");
                    }
                    
                }else{
                    echo "Login Failed! invalid password or email";
                }
            }
        }
        public function set_userdata($array)
        {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['userdata'] = array(
                    "fullname" => $array['first_name']." ".$array['last_name'],
                    "usertype" => $array['usertype']
                    
            );
            return $_SESSION['userdata']; 
        }
        public function get_userdata()
        {
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION['userdata'])){
                return $_SESSION['userdata'];
            }else{
                return null;
            }
           
        }
        public function logout()
        {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['userdata'] = null;
            unset($_SESSION['userdata']);
        }
        public function check_user_exist($email)
        {
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM user_login WHERE email = ?");
            $stmt->execute([$email]);
            $total = $stmt->rowCount();

            return $total;
        }
        public function signup()
        {

            if(isset($_POST['add'])){

                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = md5($_POST['password']);
                $usertype = $_POST['usertype'];
               
                if($this->check_user_exist($email)==0){
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO user_login (`first_name`,`last_name`,`email`,`phone`,`password`,`usertype`)VALUES(?,?,?,?,?,?)");
                    $stmt->execute([$fname,$lname,$email,$phone,$password,$usertype]);
                   
                }else{
                    echo "Users Already exist!";
                }  
            }
        }
        public function changePass()
        {
            if(isset($_POST['change'])){
              
                $password = md5($_POST['password']);
                $newpassword = md5($_POST['newpassword']);
               /* $id =$_SESSION['id'];*/
                /*$rnewpassword = md5($_POST['rnewpassword']);*/

                $connection = $this->openConnection();
                $stmt = $connection->prepare("SELECT * FROM user_login WHERE password=?");
  
                $stmt->execute(array($_POST['password']));
                $user = $stmt->fetch();
                $total = $stmt->rowCount();

                if($total > 0){
                    $stmt = $connection->prepare("UPDATE user_login set password = ? WHERE id=?");
                $stmt->execute(array($_POST['data']['newpassword'], $_POST['data']['id']));
                    echo "Password Change Successfully!";
                }else{
                    echo "Password Does not match!";
                }
            }
        }
        public function companyProfile()
        {

            if(isset($_POST['save'])){

                $cname = $_POST['companyName'];
                $cperson = $_POST['contactPerson'];
                $cphone = $_POST['contact_phone'];
                $caddress = $_POST['companyAddress'];
                $zcode = $_POST['zip_code'];
                $ind = $_POST['industry_type'];
                $country = $_POST['country'];
                $province = $_POST['province'];
                $city = $_POST['city'];
                $weburl = $_POST['website_url'];
                $des = $_POST['description'];

                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO `company_profile`(`companyName`, `contactPerson`, `contact_phone`, `companyAddress`, `zip_code`, `industry_type`, `country`, `province`, `city`, `website_url`, `description`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->execute([$cname,$cperson,$cphone,$caddress,$zcode,$ind,$country,$province,$city,$weburl,$des]);
                   
                
            }
        }
        public function addBranch()
        {

            if(isset($_POST['addbranch'])){

                $bname = $_POST['branchName'];
                $bphone = $_POST['branchPhone'];
                $baddress = $_POST['branchAddress'];
                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO `company_location` (`branchName`,`branchPhone`,`branchAddress`)VALUES(?,?,?)");
                $stmt->execute([$bname,$bphone,$baddress]);
                   
                
            }
        }
        public function applicantProfile()
        {
            if(isset($_POST['addp'])){

                $fname = $_POST['fullName'];
                $pNo = $_POST['phoneNo'];
                $current_employer = $_POST['current_employer'];
                $current_job = $_POST['current_job'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $birthmonth = $_POST['birthmonth'];
                $country = $_POST['country'];
                $province = $_POST['province'];
                $city = $_POST['city'];
                $self_description = $_POST['self_description'];

                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO `applicant_profile`(`fullName`, `phoneNo`, `current_employer`, `current_job`, `gender`,`address`, `birthmonth`, `country`, `province`, `city`, `self_description`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->execute([$fname,$pNo,$current_employer,$current_job,$gender,$address,$birthmonth,$country,$province,$city,$self_description]);
            }
        }

    }
     $App = new MyApp();  

?>
