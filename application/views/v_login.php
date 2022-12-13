

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>klimik_nanda</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>
<body>
    <div class="box">
    <!-- <img class="mb-4" src="<?= base_url(); ?>assets/anjay.png"  alt="" width="150px" id="gambar"> -->
    <form class="form-signin" method="post" action="<?= base_url('auth/login_aksi'); ?>"> 
        <div class="form">
            <h2>Klinik Nakama</h2>
            <div class="inputBox">
                <input type="text" required="required" type="text" id="Username" name="username">
                <span>Username</span>
                <i></i>
            </div> 
            <div class="inputBox">
                <input type="password" required="required" type="password" id="Password" name="password">
                <span>Password</span>
                <i></i>
            </div> 
            <div class="link">
                <!-- <a href="#">Forgot Password</a> -->
                <!-- <a href="#">Signup</a> -->
            </vdi>
            <button type="submit"> login</button> 
        </div>
      </form>
    </div>
</body>
</html>