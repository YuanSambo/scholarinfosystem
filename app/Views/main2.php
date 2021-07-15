<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <!-- #################### NAVBAR ############################# -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PUP</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <?php if (!session()->logged_in) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/user/dashboard">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/login/logout">Logout</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
    <!-- #################### NAVBAR ############################# -->

    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
   
                


        //TODO JQUERY
        $(document).ready(function() {

            $('#search').keyup(function() {
                var value = $(this).val();


            });


            // $.ajax({
            //     type: "post",
            //     url: "url",
            //     data: "data",
            //     dataType: "dataType",
            //     success: function(response) {

            //     }
            // });
        });
    </script>

</body>



</html>