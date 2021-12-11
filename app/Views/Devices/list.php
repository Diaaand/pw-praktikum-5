<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body style="background-color:#F0F8FF;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Devices Page</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Device Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($devices as $t) : ?>
                            <tr>
                                <td><?= $t['Id'] ?></td>
                                <td><?= $t['device_name'] ?></td>
                                <td><?= $t['device_brand'] ?></td>
                                <td><?= $t['device_quantity'] ?></td>
                                <td><?= $t['device_status'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?= $this->endsection(); ?>