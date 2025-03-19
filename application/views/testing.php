<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Bakery Order Page
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/html5-qrcode"></script>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA6u0Mgnw7H1PUnKjKp8hbAFvfCR7iqgAM+z9Pydz2R++uS8llPzGd1F5z3eG5" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert 2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .nav-item {
            text-align: center;
        }

        .nav-item .nav-link {
            color: #000;
        }

        .nav-item .nav-link.active {
            color: #007bff;
        }

        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
            position: relative;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 20rem;
            transition: box-shadow 0.3s;
        }

        .product-card img {
            display: flex;
            /* margin-left: 2rem; */
            /* position: absolute; */
            max-width: 100%;
            height: auto;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
        }

        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            max-width: 50%;
            height: auto;
            margin-bottom: 10px;
            justify-content: center;
            align-items: center;
        }

        .product-name {
            font-weight: bold;
            font-size: medium;
            /* margin: 10px 0; */
        }

        .product-tag {
            position: absolute;
            top: 0;
            /* Adjusted position */
            left: 0;
            /* Adjusted position */
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 0px 5px 5px 0px;
            font-size: 12px;
            margin-top: 2rem;
            /* margin-bottom: 10px; */
        }

        .product-price {
            font-size: 1.2em;
            font-size: medium;
            font-weight: bold;
            color: #007bff;
            /* margin-bottom: 10px; */
        }

        .add-button {
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-bottom: 1rem;
        }

        #product-info {
            height: 300px;
            max-height: 400px;
            /* Sesuaikan tinggi maksimal sesuai kebutuhan */
            overflow-y: auto;
            /* Aktifkan scroll vertikal */
            margin-bottom: 20px;
            /* Beri jarak dengan elemen di bawahnya */
        }

        .order-summary {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            max-width: 400px;
            height: 100%;
            /* overflow-y: auto; */
            display: flex;
            flex-direction: column;
        }

        .order-summary .order-header {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .order-summary .order-content {
            flex-grow: 1;
            overflow-y: auto;
        }

        .order-summary .order-footer {
            margin-top: auto;
        }

        .order-summary .order-total {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .final-price {
            font-weight: bold;
            position: absolute;
            margin-top: 4rem;
            right: 10px;
            /* Posisi di bawah kanan */
            color: black;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .menu-section {
            height: calc(100vh - 150px);
            overflow-y: auto;
        }

        .order-item {
            display: flex;
            position: relative;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .order-item img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
        }

        .order-item .item-details {
            flex-grow: 1;
            margin-left: 10px;
        }

        .order-item .item-details .item-name {
            font-size: 1rem;
            font-weight: bold;
        }

        .order-item .item-details .item-price {
            font-size: 0.9rem;
            color: rgb(0, 0, 0);
        }

        .order-item .item-quantity {
            display: flex;
            align-items: center;
        }

        .order-item .item-quantity input {
            width: 50px;
            text-align: center;
        }

        .navbar {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 1rem;
            top: -1rem;
            left: -1rem;
            width: 54rem;
            padding-left: 3rem;
            padding-right: 3rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Side -->
            <div class="col-md-8">
                <div class="navbar d-flex justify-content-between align-items-center my-3">
                    <div>
                        <span class="ms-2" id="date">
                        </span>
                    </div>
                    <div>
                        <span id="time">
                        </span>
                    </div>
                    <!-- Jam dan tanggal -->
                    <script>
                        // Fungsi untuk mengupdate tanggal dan waktu
                        // Fungsi untuk mengupdate tanggal dan waktu
                        function updateDateTime() {
                            const dateElement = document.getElementById('date');
                            const timeElement = document.getElementById('time');

                            // Mengambil tanggal dan waktu saat ini
                            const now = new Date();
                            const date = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
                            const hours = now.getHours().toString().padStart(2, '0');
                            const minutes = now.getMinutes().toString().padStart(2, '0');
                            const time = `${hours}:${minutes}`;

                            // Mengupdate elemen tanggal dan waktu
                            dateElement.textContent = date;
                            timeElement.textContent = time;
                        }

                        // Mengupdate tanggal dan waktu secara otomatis setiap detik
                        setInterval(updateDateTime, 1000);

                        // Memanggil fungsi updateDateTime untuk pertama kali
                        updateDateTime();
                    </script>
                    <div>
                        <a class="btn btn-outline-primary" href="<?= base_url('member/') ?>">
                            Member
                        </a>
                        <a class="btn btn-outline-primary" href="<?= base_url('Laporan/') ?>">
                            Laporan
                        </a>
                        <a class="btn btn-outline-primary" href="<?= base_url('log_out/') ?>">
                            Logout
                        </a>
                    </div>
                </div>
                <!-- Scanner -->
                <div class="tes">
                    <div style="width: 500px; left:10rem;" id="reader"></div>
                    <p>Result: <span id="result"></span></p>

                    <!-- Tambahkan elemen audio -->
                    <audio id="successSound" src="<?= base_url('assets/audio/scanner beep.mp3') ?>"></audio>
                </div>
                <!-- <form action="<?= base_url('Scan/') ?>"> -->
                <div class="input-group mb-3">
                    <input id="search" class="form-control" placeholder="Search something sweet on your mind..."
                        type="text" value="" />
                    <button id="searchButton" class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <!-- </form> -->
                <div class="menu-section">
                    <div class="row g-3" id="product-list">
                        <?php foreach ($datas as $data): ?>
                            <div class="col-12 col-md-6 col-lg-4 product-item">
                                <div class="product-card">
                                    <img alt="<?= $data['nama_produk'] ?>" class="product-image"
                                        src="<?= base_url("assets/images/product/") . $data['img'] ?>" />
                                    <div class="product-name">
                                        <?= $data['nama_produk'] ?>
                                    </div>
                                    <div class="product-tag">
                                        <?= $data['nama_kategori'] ?>
                                    </div>
                                    <div class="product-price">
                                        Rp<?= $data['harga_jual'] ?>
                                    </div>
                                    <button class="btn btn-primary add-button" data-id="<?= $data['id_produk'] ?>"
                                        data-nama="<?= $data['nama_produk'] ?>"
                                        data-img="<?= base_url('assets/images/product/') . $data['img'] ?>"
                                        data-harga="<?= $data['harga_jual'] ?>" data-diskon="<?= $data['diskon'] ?>"
                                        data-potongan="<?= $data['potongan'] ?>">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <!-- Right Side -->
            <div class="col-md-4">
                <div class="order-summary">
                    <div class="order-header">
                        Kasir
                    </div>
                    <div>
                        Order Number: #0000
                    </div>
                    <div class="my-3">
                        <div>
                            <div class="my-3">
                                <div id="product-info">
                                    <div id="no-item-message" class="text-center text-muted" style="display: none;">

                                        No Item Selected
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                Subtotal
                            </div>
                            <div id="subtotal">
                                Rp 0
                            </div>
                        </div>
                        <div class="d-flex justify-content-between order-total">
                            <div>
                                TOTAL
                            </div>
                            <div id="total-akhir">
                                Rp 0
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <!-- Button untuk membuka modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">
                            Proses Pembayaran
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal Pembayaran -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="paymentForm" method="post" action="<?= base_url('Transaksi/') ?>">
                                <div class="row">
                                    <!-- PETUGAS -->
                                    <input type="hidden" id="id_user" name="id_user"
                                        value="<?= $this->session->userdata('id_user') ?>">
                                    <!-- PRODUK LIST -->
                                    <div id="produkList">

                                    </div>
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <!-- Member -->
                                        <div class="mb-3">
                                            <label class="form-label">Barcode Pelanggan :</label>
                                            <input type="text" id="barcode" class="form-control" name="barcode"
                                                placeholder="Scan barcode pelanggan">
                                        </div>
                                        <div class="mb-3">
                                            <button id="search" class="btn btn-primary" type="button">Cek
                                                Diskon</button>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Diskon Member (%) :</label>
                                            <input type="number" class="form-control" id="diskon_member"
                                                name="diskon_member" placeholder="0" readonly>
                                        </div>
                                    </div>
                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for=" diskon" class="form-label">Diskon Musiman (%):</label>
                                            <input type="number" class="form-control" id="diskon_musiman" value="0"
                                                name="diskon_musiman" readonly>

                                        </div>
                                        <div class="mb-3">
                                            <label for="uangPembayaran" class="form-label">Uang Pembayaran</label>
                                            <select id="paymentMethod" class="form-control" name="payment_method">
                                                <option value="cash">Tunai</option>
                                                <option value="debit">Kartu Debit</option>
                                                <option value="credit">Kartu Kredit</option>
                                                <option value="ewallet">E-Wallet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="totalBelanja" class="form-label">Total Belanja</label>
                                        <input type="text" class="form-control" id="totalBelanja" name="total_harga">
                                    </div>
                                    <div class="mb-3">
                                        <label for="uangPembayaran" class="form-label">Uang Pembayaran</label>
                                        <input type="text" class="form-control" value="Rp" id="uangPembayaran"
                                            name="bayar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kembalian" class="form-label">Kembalian</label>
                                        <input type="text" class="form-control" id="kembalian" name="kembalian"
                                            readonly>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" id="prosesPembayaran">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Script untuk Perhitungan Otomatis -->
    <!-- <script>
        function calculateChange() {
            let total = parseFloat(document.getElementById('totalAmount').value) || 0;
            let amountPaid = parseFloat(document.getElementById('amountPaid').value) || 0;
            let discount = parseFloat(document.getElementById('discount').value) || 0;

            let discountedTotal = total - (total * discount / 100);
            let change = amountPaid - discountedTotal;

            document.getElementById('changeAmount').value = change > 0 ? change.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }) : "Rp 0";
        }

        function confirmPayment() {
            let method = document.getElementById('paymentMethod').value;
            let amountPaid = parseFloat(document.getElementById('amountPaid').value) || 0;
            let change = parseFloat(document.getElementById('changeAmount').value.replace(/[^\d.-]/g, '')) || 0;

            if (amountPaid < parseFloat(document.getElementById('totalAmount').value)) {
                alert("Uang pembayaran kurang!");
                return;
            }

            alert(`Pembayaran berhasil! Metode: ${method}, Kembalian: ${change.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}`);
            $('#paymentModal').modal('hide');
        }

        // Set Total Harga di Modal saat dibuka
        document.addEventListener("DOMContentLoaded", function () {
            let total = document.getElementById('total-akhir')?.innerText?.replace(/[^\d.-]/g, '') || 0;
            document.getElementById('totalAmount').value = total;
        });
    </script> -->

    <!-- Keranjang belanja -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let scannedBarcodes = [];

            function onScanSuccess(decodedText) {
                let idToSend = document.getElementById('search')?.value?.trim() || decodedText;

                if (!idToSend) {
                    Swal.fire({
                        title: 'Input Required',
                        text: 'Please scan a barcode or enter a search query.',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                processSearch(idToSend);

                const successSound = document.getElementById('successSound');
                if (successSound) {
                    successSound.play(); // Memastikan elemen sound ada
                }
            }

            document.getElementById('searchButton').addEventListener('click', function () {
                let idToSend = document.getElementById('search')?.value?.trim();

                if (!idToSend) {
                    Swal.fire({
                        title: 'Input Required',
                        text: 'Please enter a search query.',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                processSearch(idToSend);
                const successSound = document.getElementById('successSound');
                if (successSound) {
                    successSound.play(); // Memastikan elemen sound ada
                }
            });

            function processSearch(idToSend) {
                if (scannedBarcodes.includes(idToSend)) {
                    Swal.fire({
                        title: 'Duplicate Entry!',
                        text: 'This product is already in the cart.',
                        icon: 'warning',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return;
                }

                scannedBarcodes.push(idToSend);

                $.ajax({
                    url: "<?= base_url('Scan') ?>",
                    type: "POST",
                    dataType: "json",
                    data: { id: idToSend },
                    success: function (res) {
                        if (res.status !== 'success') {
                            Swal.fire({
                                title: 'Search Failed!',
                                text: res.message || 'An error occurred.',
                                icon: 'error',
                                timer: 3000,
                                showConfirmButton: false
                            });
                            return;
                        }

                        let product = res.data;
                        addProductToOrder(product.id_produk, product.nama_produk, res.image_url, product.harga_jual, product.diskon, product.potongan);
                        calculateTotal();
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.responseText);
                        Swal.fire({
                            title: 'Error',
                            text: 'An error occurred during the request.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
                console.log(idToSend);
            }

            document.querySelectorAll('.add-button').forEach(button => {
                button.addEventListener('click', function () {
                    let idProduk = this.dataset.id;
                    let namaProduk = this.dataset.nama;
                    let imgUrl = this.dataset.img;
                    let hargaJual = parseFloat(this.dataset.harga);
                    let diskon = parseFloat(this.dataset.diskon);
                    let potongan = parseFloat(this.dataset.potongan);

                    // Panggil fungsi untuk menambahkan produk ke dalam daftar belanja
                    addProductToOrder(idProduk, namaProduk, imgUrl, hargaJual, diskon, potongan);

                    // Cek apakah elemen audio ada sebelum memutar suara
                    let successSound = document.getElementById('successSound');
                    if (successSound) {
                        successSound.currentTime = 0; // Reset audio agar bisa dimainkan ulang
                        successSound.play().catch(error => console.error('Audio playback failed:', error));
                    }
                });
            });



            function addProductToOrder(idProduk, namaProduk, imgUrl, hargaJual, diskon, potongan) {
                const currencyFormat = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

                // Check if the product is already in the cart
                // if (document.getElementById(`product-${idProduk}`)) {
                //     Swal.fire({
                //         title: 'Duplicate Item!',
                //         text: 'This product is already in the cart.',
                //         icon: 'warning',
                //         timer: 2000,
                //         showConfirmButton: false
                //     });
                //     return;
                // }

                // Calculate the final price after discount
                let hargaAkhir = hargaJual;

                if (diskon > 0) {
                    hargaAkhir -= (hargaJual * diskon) / 100;
                } else if (potongan > 0) {
                    hargaAkhir -= potongan;
                }

                // Create product element in the cart
                let productHtml = `
                <div class="order-item" id="product-${idProduk}">
                    <img alt="${namaProduk}" src="${imgUrl}" />
                    <div class="item-details">
                        <div class="item-name">${namaProduk}</div>
                        <div class="item-price">${currencyFormat.format(hargaJual)}</div>
                        <div class="product-discount" id="product-discount-${idProduk}" style="color: red;">
                            ${diskon > 0 ? `Diskon ${diskon}%` : (potongan > 0 ? `-${currencyFormat.format(potongan)}` : '')}
                        </div>
                    </div>
                    <div class="item-quantity">
                        <input id="quantity-${idProduk}" class="form-control form-control-sm mx-1 quantity-input"
                            type="number" value="1" min="1"
                            data-harga="${hargaJual}" data-diskon="${diskon}" data-potongan="${potongan}" data-id="${idProduk}"/>
                        <a class="btn btn-danger shadow btn-xs sharp" href="#" onclick="removeProduct('${idProduk}')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                    <div class="item-price final-price" id="final-price-${idProduk}">
                        ${currencyFormat.format(hargaAkhir)}
                    </div>
                </div>`;

                document.getElementById('product-info').insertAdjacentHTML('beforeend', productHtml);
                document.getElementById('no-item-message').style.display = 'none';

                // Add hidden inputs to store product ID, quantity, original price, discount, and subtotal
                document.getElementById('produkList').insertAdjacentHTML('beforeend', `
        <input type="hidden" name="id_produk[]" value="${idProduk}" id="hidden-id-${idProduk}">
        <input type="hidden" name="jumlah[]" value="1" id="hidden-quantity-${idProduk}">
        <input type="hidden" name="hargaAwal[]" value="${hargaJual}" id="hidden-harga-awal-${idProduk}"> <!-- Original Price -->
        <input type="hidden" name="diskon[]" value="${diskon}" id="hidden-diskon-${idProduk}">
        <input type="hidden" name="potongan[]" value="${potongan}" id="hidden-potongan-${idProduk}"> <!-- Corrected ID -->
        <input type="hidden" name="harga[]" value="${hargaAkhir}" id="hidden-harga-${idProduk}"> <!-- Final Price -->
        <input type="hidden" name="subtotal[]" value="${hargaAkhir}" id="hidden-subtotal-${idProduk}"> <!-- Final Price -->
        `);

                // Add event listener to update automatically when quantity changes
                document.getElementById(`quantity-${idProduk}`).addEventListener('input', function () {
                    updatePrice(this);
                });

                calculateTotal();
            }

            function updatePrice(input) {
                let quantity = parseInt(input.value);
                let hargaJual = parseFloat(input.dataset.harga);
                let diskon = parseFloat(input.dataset.diskon);
                let potongan = parseFloat(input.dataset.potongan);
                let idProduk = input.dataset.id;

                // Hitung harga akhir berdasarkan diskon
                let hargaAkhir = hargaJual;

                // Hitung diskon atau potongan yang ada
                if (diskon > 0) {
                    hargaAkhir -= (hargaJual * diskon) / 100; // Diskon persentase
                } else if (potongan > 0) {
                    hargaAkhir -= potongan; // Potongan nominal
                }

                // Hitung total harga berdasarkan jumlah
                let totalHargaPerProduk = hargaAkhir * quantity;

                // Update harga akhir di DOM
                document.getElementById(`final-price-${idProduk}`).textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(totalHargaPerProduk);

                // Update jumlah di input tersembunyi
                document.getElementById(`hidden-quantity-${idProduk}`).value = quantity;

                // Update harga, diskon, dan subtotal di input tersembunyi
                document.getElementById(`hidden-harga-${idProduk}`).value = hargaJual;
                document.getElementById(`hidden-diskon-${idProduk}`).value = diskon;
                document.getElementById(`hidden-subtotal-${idProduk}`).value = totalHargaPerProduk;

                calculateTotal();
            }

            function calculateTotal() {
                let subtotal = 0;

                // Hitung subtotal dari semua produk di keranjang
                document.querySelectorAll('.final-price').forEach(priceElement => {
                    subtotal += parseFloat(priceElement.textContent.replace(/[^\d,-]/g, "").replace(',', '.'));
                });

                // Update subtotal di DOM
                document.getElementById('subtotal').textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(subtotal);
                document.getElementById('total-akhir').textContent = document.getElementById('subtotal').textContent;
                // document.getElementById(`hidden-quantity-${idProduk}`).value = quantity;


            }

            // Function to remove a product
            window.removeProduct = function (productId) {
                const productItem = document.getElementById(`product-${productId}`);
                if (productItem) {
                    productItem.remove(); // Remove product from DOM
                    calculateTotal(); // Recalculate total after removal
                }

                document.getElementById(`hidden-id-${productId}`).remove();
                document.getElementById(`hidden-quantity-${productId}`).remove();

            };

            // function updatePrice(input) {
            //     let quantity = parseInt(input.value);
            //     let hargaJual = parseFloat(input.dataset.harga);
            //     let diskon = parseFloat(input.dataset.diskon);
            //     let potongan = parseFloat(input.dataset.potongan);
            //     let idProduk = input.dataset.id;

            //     let hargaAkhir = hargaJual;

            //     if (diskon > 0) {
            //         hargaAkhir -= (hargaJual * diskon) / 100;
            //     } else if (potongan > 0) {
            //         hargaAkhir -= potongan;
            //     }

            //     hargaAkhir *= quantity;

            //     document.getElementById(`final-price-${idProduk}`).textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(hargaAkhir);

            //     calculateTotal();
            // }

            // Ketika jumlah produk ditambah, cek diskon
            // $(".input-jumlah-beli").on("input", function () {
            //     console.log("Input changed"); // Tambahkan log ini
            //     let id_produk = $(this).data("id-produk");
            //     let jumlah_beli = $(this).val();

            //     $.ajax({
            //         url: `<?= base_url('cek_diskon_paket/${id_produk}/${jumlah_beli}') ?>`, // Menggunakan base_url
            //         type: "GET",
            //         dataType: "json",
            //         success: function (response) {
            //             if (response.status === "success") {
            //                 console.log(`🎉 Diskon berlaku: ${response.data.nilai_diskon}% untuk pembelian ${jumlah_beli} produk!`);
            //             } else {
            //                 console.log(response.message); // Tampilkan pesan jika tidak ada diskon
            //             }
            //         },
            //         error: function (xhr, status, error) {
            //             console.error("Error:", error); // Tampilkan error jika ada
            //             console.log("Tidak ada diskon untuk jumlah beli ini.");
            //         }
            //     });
            // });



            function onScanFailure(error) {
                console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: { width: 250, height: 250 } }, false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        });
    </script>


    <!-- Pembayaran -->
    <script>
        $(document).ready(function () {
            function parseRupiah(rupiahString) {
                return parseFloat(rupiahString.replace(/[^0-9,-]/g, '').replace(',', '.')) || 0;
            }

            function formatRupiah(angka, denganDesimal = false) {
                let formatted = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: denganDesimal ? 2 : 0
                }).format(angka);
                return formatted.replace(",00", ""); // Saat mengetik, hilangkan ",00"
            }

            function debounce(func, delay) {
                let timer;
                return function () {
                    let context = this, args = arguments;
                    clearTimeout(timer);
                    timer = setTimeout(() => func.apply(context, args), delay);
                };
            }

            // Cek Diskon Member
            $(document).on('click', '#search', function () {
                let barcode = $('#barcode').val().trim();
                console.log("Tombol Cek Diskon diklik!", `Kode Member: ${barcode}`);

                if (barcode !== "") {
                    $.ajax({
                        url: "<?= base_url('cek_diskon_member/') ?>",
                        type: "POST",
                        data: { barcode: barcode },
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                let diskonMember = parseFloat(response.diskon) || 0;
                                $('#diskon_member').val(diskonMember);
                                updateTotalBelanja(); // Hitung ulang total setelah diskon diterapkan
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function (xhr) {
                            console.error('Error:', xhr.responseText);
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat mengambil data diskon.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });

            // Fungsi Update Total Belanja
            function updateTotalBelanja() {
                let totalAkhirElement = document.getElementById("total-akhir");

                if (!totalAkhirElement) {
                    console.error("⚠️ Element #total-akhir tidak ditemukan.");
                    return;
                }

                let totalBelanja = parseRupiah(totalAkhirElement.textContent.trim());

                if (totalBelanja <= 0) {
                    $("#diskon_musiman").val(0);
                    return;
                }

                // AJAX untuk mendapatkan diskon musiman
                $.ajax({
                    url: "<?= base_url('cek_diskon_musiman/') ?> ",
                    type: "POST",
                    data: { total_belanja: totalBelanja },
                    dataType: "json",
                    success: function (response) {
                        if (Array.isArray(response) && response.length > 0 && response[0].nilai_diskon !== undefined) {
                            let diskon = response[0];
                            $("#diskon_musiman").val(diskon.nilai_diskon);
                        } else {
                            $("#diskon_musiman").val(0);
                        }

                        // Setelah AJAX selesai, hitung ulang total belanja
                        calculateFinalTotal(totalBelanja);
                    },
                    error: function () {
                        alert("Gagal mengambil data diskon musiman");
                    }
                });
            }

            function calculateFinalTotal(totalBelanja) {
                let diskonMember = parseFloat($('#diskon_member').val()) || 0;
                let diskonMusiman = parseFloat($('#diskon_musiman').val()) || 0;

                // Calculate total after discounts
                let totalSetelahDiskon = totalBelanja * (1 - (diskonMusiman / 100));
                totalSetelahDiskon = totalSetelahDiskon * (1 - (diskonMember / 100));

                // Round to the nearest whole number
                totalSetelahDiskon = Math.round(totalSetelahDiskon);

                totalSetelahDiskon = totalSetelahDiskon < 0 ? 0 : totalSetelahDiskon;

                $('#totalBelanja').val(formatRupiah(totalSetelahDiskon));
                $('#totalBelanja').data('total', totalSetelahDiskon);

                calculateChange();
            }

            // Update total belanja setiap elemen #total-akhir berubah
            $(document).on("DOMSubtreeModified", "#total-akhir", debounce(updateTotalBelanja, 500));

            // Event Modal Pembayaran
            $('#paymentModal').on('show.bs.modal', function () {
                updateTotalBelanja();
                calculateChange();
            });

            // Event saat pengguna mengetik di "Uang Pembayaran"
            $('#uangPembayaran').on('input', function () {
                let inputValue = $(this).val().replace(/[^\d]/g, ""); // Hanya angka
                let numericValue = inputValue ? parseFloat(inputValue) : 0;

                $(this).val("Rp " + numericValue.toLocaleString('id-ID')); // Format saat mengetik
                calculateChange();
            });

            // Event saat pengguna selesai mengetik (blur) -> Format ke Rp x.xxx,00
            $('#uangPembayaran').on('blur', function () {
                let numericValue = parseRupiah($(this).val());
                $(this).val(formatRupiah(numericValue, true)); // Format dengan ,00
            });

            // Fungsi Menghitung Kembalian
            function calculateChange() {
                let totalBelanja = $('#totalBelanja').data('total') || 0;
                let uangPembayaran = parseRupiah($('#uangPembayaran').val().trim());

                if (isNaN(uangPembayaran) || uangPembayaran === 0) {
                    $('#kembalian').val("");
                    return;
                }

                let kembalian = uangPembayaran - totalBelanja;
                $('#kembalian').val(formatRupiah(kembalian >= 0 ? kembalian : 0, true));
            }
        });
    </script>

    <!-- MENU Search -->
    <script>
        const searchInput = document.getElementById('search');
        const productItems = document.querySelectorAll('.product-item');

        searchInput.addEventListener('keyup', function () {
            const filter = searchInput.value.toLowerCase();
            productItems.forEach(item => {
                const productName = item.querySelector('.product-name').textContent.toLowerCase();
                if (productName.includes(filter)) {
                    item.style.display = ''; // Tampilkan item
                } else {
                    item.style.display = 'none'; // Sembunyikan item
                }
            });
        });
    </script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Array untuk menyimpan barcode yang sudah discan
            let scannedBarcodes = [];

            function onScanSuccess(decodedText) {

                // Menangani scan duplikat
                let idToSend = document.getElementById('search')?.value?.trim() || decodedText;

                if (!idToSend) {
                    Swal.fire({
                        title: 'Input Required',
                        text: 'Please scan a barcode or enter a search query.',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                processSearch(idToSend);

                scannedBarcodes.push(decodedText); // Menambahkan barcode yang discan
                document.getElementById('searchButton').addEventListener('click', function () {
                    let idToSend = document.getElementById('search')?.value?.trim();

                    if (!idToSend) {
                        Swal.fire({
                            title: 'Input Required',
                            text: 'Please enter a search query.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    processSearch(idToSend);
                });
                // Play success sound
                const successSound = document.getElementById('successSound');
                if (successSound) {
                    successSound.play(); // Memastikan elemen sound ada
                }

                console.log("Sending POST request to:", "<?= base_url('Scan') ?>");
                // Send the scanned data to the server
                $.ajax({
                    url: "<?= base_url('Scan') ?>",  // Pastikan ini benar ketika diproses
                    type: "POST",
                    dataType: "json",
                    data: { id: decodedText, },
                    success: function (res) {
                        console.log('Server response:', res);  // Cek data yang diterima dari server

                        // Menangani respons dari server
                        if (res.status === 'success') {
                            // Ambil data produk dari respons
                            let product = res.data;
                            let diskonType = product.diskon_type;
                            let hargaJual = product.harga_jual;
                            let diskonText = '';
                            let diskonDisplay = '';

                            const currencyFormat = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

                            // Mengecek jenis diskon/potongan
                            let hargaAkhir = hargaJual; // Inisialisasi harga akhir
                            if (diskonType === 'diskon') {
                                // Jika hanya ada diskon
                                let diskon = product.diskon;
                                let potonganHarga = (hargaJual * diskon) / 100;
                                hargaAkhir = hargaJual - potonganHarga;
                                diskonText = `Diskon ${diskon}%`;
                                diskonDisplay = `<div class="product-discount" style="color: red;">${diskon}%</div>`;
                            } else if (diskonType === 'potongan') {
                                // Jika hanya ada potongan harga
                                let potongan = product.potongan;
                                hargaAkhir = hargaJual - potongan;
                                diskonText = `Potongan Rp  ${currencyFormat.format(potongan)}`;
                                diskonDisplay = `<div class="product-discount" style="color: red;">-${currencyFormat.format(potongan)}</div>`;
                            }

                            // Membuat HTML produk
                            let productHtml = ` 
                                        <div class="order-item" id="product-${product.id_produk}">
                                            <img alt="${product.nama_produk}" src="${res.image_url}" />
                                            <div class="item-details">
                                                <div class="item-name">${product.nama_produk}</div>
                                                <div class="item-price">${currencyFormat.format(hargaJual)}</div>
                                                ${diskonDisplay}
                                            </div>
                                            <div class="item-quantity">
                                                <input id="quantity-${product.id_produk}" class="form-control form-control-sm mx-1" type="number" value="1" min="1" onchange="updatePrice(this, ${hargaJual}, '${diskonType}', ${product.diskon || 0}, ${product.potongan || 0}, '${product.id_produk}')"/>
                                                <a class="btn btn-danger shadow btn-xs sharp" href="#" onclick="removeProduct(this)">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                            <div class="item-price final-price" style="float: right; font-weight: bold;" id="final-price-${product.id_produk}">
                                                ${currencyFormat.format(hargaAkhir)}
                                            </div>
                                        </div>
                                        `;

                            // Menambahkan HTML produk baru ke dalam elemen dengan ID 'product-info'
                            $('#product-info').append(productHtml);

                            // Sembunyikan pesan "No Item Selected" jika ada produk
                            $('#no-item-message').hide();

                            // Tampilkan notifikasi sukses
                            Swal.fire({
                                title: 'Scan Successful!',
                                text: res.message,
                                icon: 'success',
                                timer: 1000,
                                timerProgressBar: true,
                                showConfirmButton: false
                            });

                            // Hitung total belanja setelah produk ditambahkan
                            calculateTotal();

                        } else {
                            // Jika gagal, tampilkan pesan error
                            Swal.fire({
                                title: 'Scan Failed!',
                                text: res.message || 'An error occurred.',
                                icon: 'error',
                                timer: 3000,
                                timerProgressBar: true,
                                showConfirmButton: false
                            });
                        }
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.responseText);
                        Swal.fire({
                            title: 'Error',
                            text: 'An error occurred during the request.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });

                console.log(`Code matched = ${decodedText}`);
            }

            function removeProduct(button) {
                const productItem = button.closest('.order-item'); // Menemukan elemen produk terdekat
                if (productItem) {
                    productItem.remove(); // Menghapus produk dari DOM
                    calculateTotal(); // Hitung ulang total belanja setelah produk dihapus
                }
            }

            function addProductToOrder(nama_produk, img_url, hargaJual, diskon, potongan) {
                // Format mata uang IDR
                const currencyFormat = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

                // Cek apakah produk sudah ada di dalam keranjang (hindari duplikasi)
                if (scannedBarcodes.includes(nama_produk)) {
                    Swal.fire({
                        title: 'Duplicate Item!',
                        text: 'This product is already in the cart.',
                        icon: 'warning',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                    return; // Jangan tambahkan produk yang sudah ada
                }

                scannedBarcodes.push(nama_produk); // Tambahkan ke daftar produk yang sudah ada

                // Hitung harga setelah diskon
                let hargaAkhir = hargaJual;
                let diskonDisplay = '';

                if (diskon > 0) {
                    let potonganHarga = (hargaJual * diskon) / 100;
                    hargaAkhir -= potonganHarga;
                    diskonDisplay = `<div class="product-discount" style="color: red;">Diskon ${diskon}%</div>`;
                } else if (potongan > 0) {
                    hargaAkhir -= potongan;
                    diskonDisplay = `<div class="product-discount" style="color: red;">-${currencyFormat.format(potongan)}</div>`;
                }

                // Buat HTML untuk produk dalam keranjang
                let productHtml = `
                                <div class="order-item" id="product-${nama_produk.replace(/\s+/g, '-')}">
                                    <img alt="${nama_produk}" src="${img_url}" />
                                    <div class="item-details">
                                        <div class="item-name">${nama_produk}</div>
                                        <div class="item-price">${currencyFormat.format(hargaJual)}</div>
                                        ${diskonDisplay}
                                    </div>
                                    <div class="item-quantity">
                                        <input id="quantity-${nama_produk.replace(/\s+/g, '-')}" class="form-control form-control-sm mx-1" type="number" value="1" min="1" onchange="updatePrice(this, ${hargaJual}, 'diskon', ${diskon}, ${potongan}, '${nama_produk.replace(/\s+/g, '-')}')"/>
                                        <a class="btn btn-danger shadow btn-xs sharp" href="#" onclick="removeProduct(this)">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                    <div class="item-price final-price" style="float: right; font-weight: bold;" id="final-price-${nama_produk.replace(/\s+/g, '-')}">
                                        ${currencyFormat.format(hargaAkhir)}
                                    </div>
                                </div>`;

                // Tambahkan produk ke dalam keranjang
                $('#product-info').append(productHtml);

                // Sembunyikan pesan "No Item Selected" jika ada produk
                $('#no-item-message').hide();

                // Tampilkan notifikasi sukses
                Swal.fire({
                    title: 'Product Added!',
                    text: 'Product successfully added to the cart.',
                    icon: 'success',
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });

                // Hitung ulang total belanja
                calculateTotal();
            }

            function updatePrice(input, hargaJual, diskonType, diskon, potongan, id_produk) {
                const quantity = parseInt(input.value);
                let hargaAkhir = hargaJual;

                // Menghitung harga akhir berdasarkan diskon
                if (diskonType === 'diskon') {
                    let potonganHarga = (hargaJual * diskon) / 100;
                    hargaAkhir = hargaJual - potonganHarga;
                } else if (diskonType === 'potongan') {
                    hargaAkhir = hargaJual - potongan;
                }

                // Menghitung total harga berdasarkan jumlah produk
                hargaAkhir *= quantity;

                // Memperbarui tampilan harga akhir
                $(`#final-price-${id_produk}`).text(new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(hargaAkhir));

                // Hitung total belanja setelah harga diperbarui
                calculateTotal();
            }

            //                 $('#member').on('keydown', function (event) {
            //                     if (event.which === 13) { // 13 adalah kode untuk tombol Enter
            //                         event.preventDefault(); // Mencegah form submit (jika ada)
            //                         checkMemberDiscount();
            //                     }
            //                 });

            //                 function checkMemberDiscount() {
            //                     let memberCode = $('#member').val(); // Ambil nilai dari input member
            //                     if (memberCode) {
            //                         $.ajax({
            //                             url: "<?= base_url('member') ?>", // URL endpoint untuk cek member
            //                             type: "POST",
            //                             dataType: "json",
            //                             data: { member_code: memberCode },
            //                             success: function (res) {
            //                                 if (res.status === 'success') {
            //                                     // Jika kode member valid, sembunyikan input field dan tampilkan hasil
            //                                     $('#member-discount').hide(); // Sembunyikan input
            //                                     $('#member-result').html(` 
            //                 <div class="alert alert-success">
            //                     Kode Member Valid! (Diskon: ${res.discount}%)
            //                 </div>
            //             `);
            //                                     calculateTotal(res.discount); // Hitung ulang total dengan diskon member
            //                                 } else {
            //                                     // Jika kode member tidak valid, tampilkan pesan error
            //                                     $('#member-result').html(` 
            //                 <div class="alert alert-danger">
            //                     ${res.message}
            //                 </div>
            //             `);
            //                                 }
            //                             },
            //                             error: function (xhr) {
            //                                 console.error('Error:', xhr.responseText);
            //                                 $('#member-result').html(` 
            //             <div class="alert alert-danger">
            //                 Terjadi kesalahan saat memproses kode member.
            //             </div>
            //         `);
            //                             }
            //                         });
            //                     } else {
            //                         $('#member-result').html(` 
            //     <div class="alert alert-warning">
            //         Silakan masukkan kode member.
            //     </div>
            // `);
            //                     }
            //                 }

            function calculateTotal(memberDiscount = 0) {
                let subtotal = 0;

                // Menghitung total harga dari semua produk
                $('.final-price').each(function () {
                    const priceText = $(this).text().replace(/[^0-9,-]+/g, "").replace(',', '.');
                    subtotal += parseFloat(priceText);
                });

                // Tampilkan total belanja akhir
                $('#subtotal').text(new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(subtotal));

                let totalAkhir = subtotal;
                if (memberDiscount > 0) {
                    let discountAmount = (subtotal * memberDiscount) / 100;
                    totalAkhir -= discountAmount;
                }

                $('#total-akhir').text(new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(totalAkhir));

            }

            function onScanFailure(error) {
                // Log scan failure
                console.warn(`Code scan error = ${error}`);
            }

            // Menjalankan pemindai QR Code
            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10, qrbox: { width: 250, height: 250 } },
                false
            );
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        });
    </script> -->
    <!-- Bootstrap 5 JS (Bundle dengan Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ePVrZkK15EGE7Ku8HiRXP7sSPL5ReNpCfUbhVO2VODoQNp0WLvqN5PN4wvhOU5D2"
        crossorigin="anonymous"></script>
    <!-- Required vendors -->
    <script src="<?= base_url("assets/") ?>vendor/global/global.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= base_url("assets/") ?>vendor/apexchart/apexchart.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="<?= base_url("assets/") ?>vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="<?= base_url("assets/") ?>js/dashboard-1.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/owl-carousel/owl.carousel.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/custom.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/dlabnav-init.js"></script>
    <script src="<?= base_url("assets/") ?>js/demo.js"></script>
    <!-- <script src="<?= base_url("assets/") ?>js/styleSwitcher.js"></script> -->

</body>

</html>
</body>