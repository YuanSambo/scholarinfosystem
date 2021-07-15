<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<?= $this->include('./components/navbar') ?>


<div class="container-fluid mt-5">
    <table id="table" class="table" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->endSection() ?>