<html>
  <head>
     <style>
          body {
                  background-image:url("P/fd1.jpg");
                  background-repeat:no-repeat;
                  background-size:150%;
                  background-position:bottom right;
                }
            .d{
                  text-align:center;
                  word-spacing:10px;
                  line-height:40px;
                  width:500px;
                  height:300px;
                  margin:100px 0px 200px 350px;
                  box-shadow: 2px 2px 2px gray;
                  background-color:white;
               }
      </style>
  </head>
  <body>
       <?php 
                if(isset($_POST["username"]))
                 {
                   $con=new mysqli("localhost","root","","tour");
                   $sql=$con->prepare("insert into users(u_email,username,upwd,gender,u_contact_no)
		    values(?,?,?,?,?)");
	           $sql->bind_param("sssss",$u_email,$username,$upwd,$s,$ms);
                   $sql1="select *from users";
                   $result=$con->query($sql1);
                     $u_email=$_POST['u_email'];
                   if($result->num_rows>0)

                        while($row=$result->fetch_assoc())
                         {
                           if($u_email==$row['u_email'])
                             {
                               echo "<script>alert('$u_email is already taken,Insert correct one')</script>";
                               echo "<script>window.open('signup.php','_self');</script>";
                               exit;
                          }
                       }
                   
             
                   $username=$_POST['username'];
	           $upwd=$_POST['upwd'];
     
	         
	            if($_POST['gender']=="Male")
                       $s="Male";
                    else
                      $s="Female";
                  $ms=$_POST['u_contact_no'];
	          $sql->execute();
       
       
             }
      ?>   
 <div class=d name=d id=d>
     <h2> Details are </h2>
      Email Id: <?php echo $u_email ?><br>
      Username: <?php echo $username ?><br>
      Contact No: <?php echo $ms ?><br>
   
      Password: <?php echo $upwd ?><br>
      Gender:  <?php echo $s ?>
      <input type=button value=OK onclick=window.open("login_page.php","_self")>
      
  </div>
</body>
</html>