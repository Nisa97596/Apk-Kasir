<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .receipt {
            width: 320px;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        hr {
            border: none;
            border-top: 1px dashed black;
            margin: 8px 0;
        }

        .item {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .print-btn {
            display: block;
            margin-top: 15px;
            padding: 10px 15px;
            font-size: 16px;
            font-weight: bold;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-btn:hover {
            background: #0056b3;
        }

        @media print {
            .print-btn {
                display: none;
            }

            body {
                background: white;
            }
        }
    </style>
</head>

<body>

    <div class="receipt">
        <div class="bold"><img src="<?= base_url('assets/images/svg/walmart.svg') ?>" width="100px" alt=""></div>
        <div>Jl. Jend. Ahmad Yani</div>
        <div>IG: @walmart</div>
        <hr>

        <!-- Informasi Transaksi -->
        <div class="item"><span>Tanggal</span><span><?= date('d-m-Y', strtotime($transaksi['tanggal'])) ?></span></div>
        <!-- <div class="item"><span>Jam</span><span><?= date('H:i:s', strtotime($transaksi['tanggal'])) ?></span></div> -->
        <div class="item"><span>Kasir</span><span><?= $user_name ?></span></div>
        <hr>

        <!-- Daftar Produk -->
        <?php
        $subtotalAfterDiscount = 0; // Initialize subtotal after discount
        foreach ($detail_transaksi as $item):
            $totalPrice = $item['harga'] * $item['jumlah']; // Calculate total price for the product
            $discountAmount = 0;

            // Calculate the discount amount
            if ($item['diskon'] > 0) {
                $discountAmount = ($totalPrice * $item['diskon']) / 100; // Percentage discount
            } elseif ($item['potongan'] > 0) {
                $discountAmount = $item['potongan']; // Fixed discount
            }


            $priceAfterDiscount = $totalPrice - $discountAmount; // Price after discount
            $subtotalAfterDiscount += $priceAfterDiscount; // Accumulate subtotal after discount
            ?>
            <div class="item">
                <span><?= $item['nama_produk'] ?> (x<?= $item['jumlah'] ?>)</span>
                <span>Rp <?= number_format($item['harga'], 0, ',', '.') ?></span> <!-- Harga Jual -->
            </div>
            <div class="item">
                <span>Total Harga</span>
                <span>Rp <?= number_format($totalPrice, 0, ',', '.') ?></span> <!-- Total Harga -->
            </div>

            <?php if ($item['diskon'] > 0 || $item['potongan'] > 0): ?>
                <div class="item">
                    <span>Diskon</span>
                    <span>
                        <?php if ($item['diskon'] > 0): ?>
                            -<?= $item['diskon'] ?>% <!-- Diskon Persen -->
                        <?php else: ?>
                            -Rp <?= number_format($item['potongan'], 0, ',', '.') ?> <!-- Diskon Potongan -->
                        <?php endif; ?>
                    </span>
                </div>
            <?php endif; ?>

            <div class="item">
                <span></span>
                <span>Rp <?= number_format($priceAfterDiscount, 0, ',', '.') ?></span> <!-- Harga Setelah Diskon -->
            </div>
        <?php endforeach; ?>
        <hr>

        <!-- Total Pembayaran -->
        <div class="item"><span>Subtotal</span><span>Rp <?= number_format($subtotalAfterDiscount, 0, ',', '.') ?></span>
        </div>
        <div class="item"><span>Diskon
                Member</span><span><?= number_format($transaksi['diskon_member'], 0, ',', '.') ?>%</span></div>
        <div class="item"><span>Diskon
                Musiman</span><span><?= number_format($transaksi['diskon_musiman'], 0, ',', '.') ?>%</span></div>
        <div class="item bold">
            <span>Total</span>
            <span>Rp
                <?= number_format($subtotalAfterDiscount - ($subtotalAfterDiscount * $transaksi['diskon_member'] / 100) - ($subtotalAfterDiscount * $transaksi['diskon_musiman'] / 100), 0, ',', '.') ?></span>
        </div>
        <div class="item"><span>Cash</span><span>Rp <?= number_format($transaksi['bayar'], 0, ',', '.') ?></span></div>
        <div class="item"><span>Kembali</span><span>Rp <?= number_format($transaksi['kembalian'], 0, ',', '.') ?></span>
        </div>
        <hr>

        <!-- Footer Struk -->
        <div>Terima Kasih</div>
        <div>Selamat Datang Kembali</div>
    </div>

    <!-- Tombol Cetak -->
    <button onclick="printStruk()" class="print-btn">🖨️ Cetak Struk</button>

    <script>
        function printStruk() {
            window.print();
        }
    </script>

</body>

</html>