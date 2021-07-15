<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= session()->css ?>">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>

    </style>

    <title><?= session()->title ?></title>
</head>

<body>


    <?= $this->renderSection('content') ?>
    <!-- Optional JavaScript -->
    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({

                info: false,
                ajax: {
                    url: '<?= base_url('admin/dashboard/getPersonal') ?>',
                    dataSrc: ''
                },
                columns: [{

                        data: 'user_id'
                    },
                    {
                        data: 'user_email'
                    },



                ]
            });

            $('#table').on('click', 'tbody tr', function() {

                var id = table.rows(this).data()[0]['user_id'];
                window.location.href = "dashboard/profile/" + id;
            })



        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>