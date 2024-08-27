<?php require_once __DIR__ . '/../inc/header.php'; ?>
<title class="text-center">Add</title>
</head>

<body style="background: deepskyblue; ">
    <h1 class="text-center p-3 border border-white container rounded mt-3 mb-5">Add record</h1>
    <form id="frmOsoba" method="POST" action="__DIR__. '/../code/add.code.php'" class="container">
        <label for="" class="form-label text-white">First Name</label>
        <input class="form-control" name="firstName" type="text" autocomplete="on">

        <label for="" class="form-label text-white">Last Name</label>
        <input name="lastName" class="form-control" type="text">

        <label for="" class="form-label text-white">Address</label>
        <input name="address" class="form-control" type="text">
        
        <br>
        <div class="container">
            <div class="row">
                <div class="col-4 offset-3">

                </div>
                <div class="col-4 offset-2">
                    <button name="btnAdd" class="btn btn-success  ">Submit Data</button>
                </div>
                <div class="col-4">
                    <a type="submit" href="../index.php" class="btn btn-primary" role="button">Back</a>
                </div>
            </div>
        </div>
        <br><br>
    </form>
    <?php require_once __DIR__ . '/../inc/footer.php' ?>