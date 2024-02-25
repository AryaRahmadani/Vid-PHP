<h3>Insert User</h3>
<div class="form-groub">

    <form action="" method="post"> 
        <div class="form-group">
            <label for="">User</label>
            <input type="text" name="user" required placeholder = "isi user" class="form-control">
        </div>
    <br>
    <form action="" method="post"> 
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder = "Email" class="form-control">
        </div>
    <br>
    <form action="" method="post"> 
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder = "Password" class="form-control">
        </div>
    <br>
    <form action="" method="post"> 
        <div class="form-groub">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder = "Konfirmasi Password" class="form-control">
        </div>
    <br>
    <form action="" method="post"> 
        <div class="form-group">
            <label for="">Level</label>
           <select name="level" id="">
            <option value="S">Class S</option>
            <option value="A">Class A</option>
            <option value="B">Class B</option>
           </select>

        </div>

    <br>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary" >
        </div>
    </form>

</div>

<?php
    

    if(isset($_POST['simpan'])){
        $user =$_POST['user'];
        $email =$_POST['email'];
        $password=hash('sha256',$_POST['password']);
        $konfirmasi=hash('sha256',$_POST['konfirmasi']);
        $level=$_POST['level'];

        if($password === $konfirmasi){
            $sql = "INSERT INTO dbuser VALUES ('','$user','$email','$password','$level',1)";
            $db -> runSQL($sql);
            header("location:?f=user&m=select");
            
        }else{
            echo "<h2>Password Tidak Valid</h2>";
        }

        
        
        
       
    }
?>