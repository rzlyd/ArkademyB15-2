<html>
<head>
    <title></title>
</head>
<body>
    
    <form method="POST">
        <table>
            <tr>
                <td>Username</td> 
                <td>:</td>
                <td><input type="text" name="username"></td>                

            <tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>                

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    
    <h3>Output :</h3>
   <?php

    

        if(isset($_POST['submit'])){
            $username = trim($_POST['username']);
            
            // validasi input data
            if(!preg_match("/^[a-z]*$/", $username)){
                echo "Input hanya menggunakan huruf kecil !<br>";
                
            }
            
            else if(!empty($_POST['username'])){
                //Tulis query disini
               echo "DATA USENAME BENAR<br>";
                
            }    
        } 
         if(isset($_POST['submit'])){
            $password = trim($_POST['password']);
            
            // validasi input data
            if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
                echo "Input harus menggunakan kombinasi huruf kecil, huruf besar dan angka<br>";
                
            }
    
            // jika validasi input hanya huruf dan angka terpenuhi
          
            else if(!empty($_POST['password'])){
                //Tulis query disini
               echo "DATA PASSWORD BENAR<br>";
                
            }    
        }       
    ?>
</body>
</html>