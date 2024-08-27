<?php  require_once 'inc/header.php'?>
    <title class="text-center">Crud Operations</title>
</head>

<body style="background: deepskyblue; ">
    <h1 class="text-center p-3 border border-white container rounded mt-3 mb-5">Crud Operations</h1>

    <div class="container">
        <table class="table table-bordered text-center">
            <thead>

                <tr>
                    <th>Br</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th colspan=2>Actions</th>
                </tr>
            </thead>
            <tbody id="tBody">
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a type="submit" class=" btn btn-warning" role="button" href="view/edit.php">Edit</a>
                </td>
                <td>
                    <form action="" method="POST">
                        <button name="btnDel" class="btn btn-danger ">Del</button>
                    </form>
                </td>
            </tbody>
        </table>
        <br><br>

        <div class=" d-flex justify-content-center">
            <a href="view/add.php" type="submit" role="button" class="btn btn-lg btn-success">Add new</a>
        </div>
    </div>


   <?php  require_once 'inc/footer.php'?>