<?php require_once __DIR__ . '/../../header.php'; ?>

<div class="container">
    <form class="col-md-4 col-md-push-4" action="<?= HTTP . 'app/controllers/authController.php' ?>" method="post">
        <h1 class="text-center">Login</h1>
        <input name="type" value="login" type="hidden"/>
        <div class="form-group">
            <label for="">username</label>
            <input class="form-control" type="text" name="username" id=""/>
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="" class="form-control"/>
        </div>

        <input type="submit" value="Inloggen" class="btn btn-primary"/>
    </form>
</div>





<?php require_once __DIR__ . '/../../footer.php'; ?>