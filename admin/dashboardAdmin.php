<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="adminDashboard">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Account aanmaken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Camping plaatsen aanmaken</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="pt-5">Account aanmaken</h2>
                <form action="../php/dashboardAdmin.php" method="POST">
                    <div class="form-group">
                        <label for="inputAcount_Role">Acount Role</label>
                        <input type="text" class="form-control" name="inputAccount_Role">
                    </div>
                    <div class="form-group">
                        <label for="inputFull_Name">Full Name</label>
                        <input type="text" class="form-control" name="inputFull_Name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="text" class="form-control" name="inputEmail">
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber">Phone Number</label>
                        <input type="text" class="form-control" name="inputPhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="text" class="form-control" name="inputPassword">
                    </div>
                    <button type="submit" name="create-account" class="btn btn-outline-success">Account aanmaken</button>
                </form>
            </div>


            <div class="col-md-6">
                <h2 class="pt-5">Camping plaatsen aanmaken</h2>
                <form>
                    <div class="form-group">
                        <label for="inputId">ID</label>
                        <input type="text" name="id" class="form-control" id="inputId">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Camping Name</label>
                        <input type="text" name="camping_name" class="form-control" id="inputName">
                    </div>
                    <div class="form-group">
                        <label for="inputCost_Per_Day">Cost Per Day</label>
                        <input type="text" name="cost_per_day" class="form-control" id="inputCost_Per_Day">
                    </div>
                    <div class="form-group">
                        <label for="inputInUse">In Use</label>
                        <input type="text" name="in_use" class="form-control" id="inputIn_Use">
                    </div>
                    <div class="form-group">
                        <label for="inputCleaned">Cleaned</label>
                        <input type="text" name="cleaned" class="form-control" id="inputCleaned">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <input type="text" name="description" class="form-control" id="inputDescription">
                    </div>
                    <div class="form-group">
                        <label for="inputImage">Image Link</label>
                        <input type="text" name="image" class="form-control" id="inputImage">
                    </div>
                    <button type="submit" naam="create-camping" class="btn btn-outline-success">Camping plaats aanmaken</button>
                </form>
            </div>

            <div class="col-12">
                <h3 class="pt-5">Camping plaatsen</h3>
                <?php 
                include_once('../includes/connect.php');

                $stmt = $conn->prepare("SELECT * FROM camping_place");
                $stmt->execute();
                $camping_place = $stmt->fetchAll();
                
                foreach ($camping_place as $camping_place) { ?>

                <ul class="dashBoardList">
                    <li>
                        <?php echo $camping_place['name']; ?>
                        <?php echo $camping_place['cost_per_day']; ?>
                        <?php echo $camping_place['description']; ?>
                    </li>
                </ul>    
            <?php }
            ?>
            </div>

            <div class="col-12">
            <h3 class="pt-5">Accounts</h3>

            <?php 
                include_once('../includes/connect.php');

                $stmt = $conn->prepare("SELECT * FROM account");
                $stmt->execute();
                $account = $stmt->fetchAll();
                
                foreach ($account as $accounts) { ?>

                <ul class="dashBoardList">
                    <li>
                        <?php echo $accounts['id']; ?>
                        <?php echo $accounts['full_name']; ?>
                        <?php echo $accounts['email']; ?>
                        <?php echo $accounts['phonenumber']; ?>
                        <?php echo $accounts['password']; ?>
                        <?php echo $accounts['account_role']; ?>
                    </li>
                </ul>    
            <?php }
            ?>
            </div>
        </div>
    </div>