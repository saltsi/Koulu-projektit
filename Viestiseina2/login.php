<?php
session_start();

require('config/config.php');

if (isset($_POST['btn_login'])){

    include_once 'config/db_pdo.php';

    $email = trim($_POST['email']);

    $stmt = $conn->prepare("SELECT id, email, salasana FROM users WHERE email = :email");
    $stmt->bindParam(':email',$email);
    $stmt->execute();

    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();

    if (count($rows)){
        $passwd = $rows[0]['salasana'];
        if ( password_verify($_POST['passwd'], $passwd) ) {
            header('Location: admin.php');
        } else {
            echo "Kirjautuminen ei onnistunut";
            die();
        }
    }
}

include 'layout/header.php'; ?>

<div class="container">
    <div class="row">
        <h1>Login</h1>
    </div>
    <div class="row">
        <form action="login.php" method="post">

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" placeholder="Email" name="email">
            </div>

            <div class="form-group">
                <label for="passwd">Salasana</label>
                <input class="form-control" type="password" placeholder="Salasana" name="passwd">
            </div>

            <input type="submit" class="btn btn-primary" value="Kirjaudu" name="btn_login">

        </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>