<?php require_once '../../header.php';?>


    <form class="col-md-4 col-md-push-4" action="../../../app/controllers/contactsController.php" method="POST">
        <h1 class="text-center">Add Contact</h1>

        <input type="hidden" name="type" value="add"/>

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="username"> Username </label>
            <input type="text" name="username" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control"/>
        </div>

        <input type="submit" value="Create" class="btn btn-primary"/>

    </form>


<?php require_once '../../footer.php' ;?>