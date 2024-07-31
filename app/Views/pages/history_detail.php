<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- History Section -->
<section id="history-detail" class="section">
    <div class="invoice p-3 mb-3" style="margin : 80px">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"></i> PT. Jewepe WO
                    <small class="float-right">Date: <?= date('d/m/Y'); ?></small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>PT. Jewepe WO</strong><br>
                    JL.Margonda Raya No:100<br>
                    Depok, West Java 16424<br>
                    Phone: (+62) 812-5432-1234<br>
                    Email: jwo@gunadarma.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong><?= $order['user_name']; ?></strong><br>
                    Email: <?= $order['email']; ?>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Status: <?= $order['status']; ?></b><br>
                <br>
                <b>Order ID:</b> <?= $order['order_id']; ?><br>
                <b>Purchase Date:</b> <?= $order['created_at']; ?><br>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Package Name</th>
                            <th>Event Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $order['order_id']; ?></td>
                            <td><?= $order['package_name']; ?></td>
                            <td><?= $order['event_date']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="<?= base_url('assets/dist/img/credit/visa.png') ?>" alt="Visa">
                <img src="<?= base_url('assets/dist/img/credit/mastercard.png') ?>" alt="Mastercard">
                <img src="<?= base_url('assets/dist/img/credit/bca.png') ?>" alt="BCA">
                <img src="<?= base_url('assets/dist/img/credit/mandiri.png') ?>" alt="Mandiri">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Pembayaran dapat dilakukan melalui kartu kredit Visa, Mastercard, serta bank transfer BCA, dan Mandiri.
                </p>
            </div>
            <!-- /.col -->
            <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>IDR <?= number_format($order['price'], 2); ?></td>
                        </tr>
                        <tr>
                            <th>PPN (11%)</th>
                            <td>IDR <?= number_format($order['price'] * 0.11, 2); ?></td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>IDR <?= number_format(($order['price'] * 1.11), 2); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <a onclick="window.print();" rel="noopener" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-print"></i> Generate PDF
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /History Section -->
<?= $this->endSection() ?>