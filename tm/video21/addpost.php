<?php 
    require('config/index.php')
    require('config/db.php')


    ?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1> Add Post </h1>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div Class="form-group"
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn-primary">
        </form>
    </div>
<?php include('inc/footer.php'); ?>