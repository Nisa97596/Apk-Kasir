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
                                    <button class="btn btn-primary add-button" data-nama="<?= $data['nama_produk'] ?>"
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
                        Customer's Name
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
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <!-- Member -->
                                        <div class="mb-3">
                                            <label class="form-label">Member :</label>
                                            <input type="number" id="member" class="form-control"
                                                placeholder="Masukkan diskon" value="0" oninput="calculateChange()">
                                        </div>
                                        <div class="mb-3">
                                            <label for="diskon" class="form-label">Diskon Member (%) :</label>
                                            <input type="number" class="form-control" id="diskon"
                                                placeholder="Masukkan diskon">
                                        </div>
                                    </div>
                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="diskon" class="form-label">Diskon (%) :</label>
                                            <input type="number" class="form-control" id="diskon"
                                                placeholder="Masukkan diskon">
                                        </div>
                                        <div class="mb-3">
                                            <label for="uangPembayaran" class="form-label">Uang Pembayaran</label>
                                            <select id="paymentMethod" class="form-control">
                                                <option value="cash">Tunai</option>
                                                <option value="debit">Kartu Debit</option>
                                                <option value="credit">Kartu Kredit</option>
                                                <option value="ewallet">E-Wallet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="totalBelanja" class="form-label">Total Belanja</label>
                                        <input type="text" class="form-control" id="totalBelanja">
                                    </div>
                                    <div class="mb-3">
                                        <label for="uangPembayaran" class="form-label">Uang Pembayaran</label>
                                        <input type="text" class="form-control" id="uangPembayaran" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kembalian" class="form-label">Kembalian</label>
                                        <input type="text" class="form-control" id="kembalian" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" id="prosesPembayaran">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Script untuk Perhitungan Otomatis -->
    <script>
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
    </script>


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
                console.log('barcode:'${ idToSend });

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
                        addProductToOrder(product.nama_produk, res.image_url, product.harga_jual, product.diskon, product.potongan);
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
            }
            document.querySelectorAll('.add-button').forEach(button => {
                button.addEventListener('click', function () {
                    let namaProduk = this.dataset.nama;
                    let imgUrl = this.dataset.img;
                    let hargaJual = parseFloat(this.dataset.harga);
                    let diskon = parseFloat(this.dataset.diskon);
                    let potongan = parseFloat(this.dataset.potongan);

                    // Panggil fungsi untuk menambahkan produk ke dalam daftar belanja
                    addProductToOrder(namaProduk, imgUrl, hargaJual, diskon, potongan);

                    // Cek apakah elemen audio ada sebelum memutar suara
                    let successSound = document.getElementById('successSound');
                    if (successSound) {
                        successSound.currentTime = 0; // Reset audio agar bisa dimainkan ulang
                        successSound.play().catch(error => console.error('Audio playback failed:', error));
                    }
                });
            });

            function addProductToOrder(namaProduk, imgUrl, hargaJual, diskon, potongan) {
                const currencyFormat = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

                // Cek apakah produk sudah ada dalam keranjang
                if (document.getElementById(`product-${namaProduk}`)) {
                    Swal.fire({
                        title: 'Duplicate Item!',
                        text: 'This product is already in the cart.',
                        icon: 'warning',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return;
                }

                // Hitung harga setelah diskon
                let hargaAkhir = hargaJual;

                if (diskon > 0) {
                    hargaAkhir -= (hargaJual * diskon) / 100;
                } else if (potongan > 0) {
                    hargaAkhir -= potongan;
                }

                // Buat elemen produk di keranjang
                let productHtml = `
                    <div class="order-item" id="product-${namaProduk}">
                        <img alt="${namaProduk}" src="${imgUrl}" />
                        <div class="item-details">
                            <div class="item-name">${namaProduk}</div>
                            <div class="item-price">${currencyFormat.format(hargaJual)}</div>
                            <div class="product-discount" style="color: red;">
                                ${diskon > 0 ? `Diskon ${diskon}%` : (potongan > 0 ? `-${currencyFormat.format(potongan)}` : '')}
                            </div>
                        </div>
                        <div class="item-quantity">
                            <input id="quantity-${namaProduk}" class="form-control form-control-sm mx-1 quantity-input"
                                type="number" value="1" min="1"
                                data-harga="${hargaJual}" data-diskon="${diskon}" data-potongan="${potongan}" data-id="${namaProduk}"/>
                            <a class="btn btn-danger shadow btn-xs sharp" href="#" onclick="removeProduct('${namaProduk}')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                        <div class="item-price final-price" id="final-price-${namaProduk}">
                            ${currencyFormat.format(hargaAkhir)}
                        </div>
                    </div>`;

                document.getElementById('product-info').insertAdjacentHTML('beforeend', productHtml);
                document.getElementById('no-item-message').style.display = 'none';

                // Tambahkan event listener agar update otomatis saat jumlah berubah
                document.getElementById(`quantity-${namaProduk}`).addEventListener('input', function () {
                    updatePrice(this);
                });

                calculateTotal();
            }

            // Function to remove a product
            window.removeProduct = function (productId) {
                const productItem = document.getElementById(`product-${productId}`);
                if (productItem) {
                    productItem.remove(); // Remove product from DOM
                    calculateTotal(); // Recalculate total after removal
                }
            };

            function updatePrice(input) {
                let quantity = parseInt(input.value);
                let hargaJual = parseFloat(input.dataset.harga);
                let diskon = parseFloat(input.dataset.diskon);
                let potongan = parseFloat(input.dataset.potongan);
                let idProduk = input.dataset.id;

                let hargaAkhir = hargaJual;

                if (diskon > 0) {
                    hargaAkhir -= (hargaJual * diskon) / 100;
                } else if (potongan > 0) {
                    hargaAkhir -= potongan;
                }

                hargaAkhir *= quantity;

                document.getElementById(`final-price-${idProduk}`).textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(hargaAkhir);

                calculateTotal();
            }

            function calculateTotal() {
                let subtotal = 0;

                document.querySelectorAll('.final-price').forEach(priceElement => {
                    subtotal += parseFloat(priceElement.textContent.replace(/[^\d,-]/g, "").replace(',', '.'));
                });

                document.getElementById('subtotal').textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(subtotal);
                document.getElementById('total-akhir').textContent = document.getElementById('subtotal').textContent;
            }

            $(document).ready(function () {
                $("#diskon").on("input", function () {
                    let inputDiskon = parseFloat($(this).val()) || 0; // Ambil nilai input

                    $.ajax({
                        url: <?= base_url('diskon_member/') ?>, // Ganti dengan endpoint API backend
                        type: "GET",
                        dataType: "json",
                        success: function (response) {
                            let diskonList = response.map(item => item.diskon); // Ambil data diskon dari database

                            // Cek apakah input cocok dengan salah satu diskon di database
                            if (diskonList.includes(inputDiskon)) {
                                $("#diskon").css("border-color", "green"); // Jika valid, border hijau
                            } else {
                                $("#diskon").css("border-color", "red"); // Jika tidak cocok, border merah
                            }
                        },
                        error: function () {
                            console.error("Gagal mengambil data diskon dari database.");
                        }
                    });
                });
            });

            // Fungsi untuk memformat angka menjadi format Rupiah
            function formatRupiah(angka, addDecimal = true) {
                let formatter = new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: addDecimal ? 2 : 0, // Jika addDecimal true, tampilkan ,00
                });

                return formatter.format(angka).replace(/\u00A0/g, " "); // Menghilangkan spasi tak terlihat
            }

            // Fungsi untuk mendapatkan angka murni dari string Rupiah
            function parseRupiah(rupiahString) {
                let cleanedString = rupiahString.replace(/[^0-9,-]/g, "").replace(",", ".");
                return parseFloat(cleanedString) || 0;
            }

            // Saat modal pembayaran dibuka, salin nilai total belanja
            document.getElementById("paymentModal").addEventListener("show.bs.modal", function () {
                let totalAkhirElement = document.getElementById("total-akhir");

                if (totalAkhirElement) {
                    let totalAkhirValue = parseRupiah(totalAkhirElement.textContent.trim());
                    document.getElementById("totalBelanja").value = formatRupiah(totalAkhirValue);
                    calculateChange(); // Hitung kembalian saat modal dibuka
                } else {
                    console.error("Element #total-akhir tidak ditemukan.");
                }
            });

            // Fungsi menghitung kembalian
            function calculateChange() {
                let totalBelanja = parseRupiah(document.getElementById("totalBelanja").value);
                let uangPembayaran = parseRupiah(document.getElementById("uangPembayaran").value);
                let diskon = parseFloat(document.getElementById("diskon").value) || 0;

                // Hitung total setelah diskon
                let totalSetelahDiskon = totalBelanja - (totalBelanja * (diskon / 100));
                let kembalian = uangPembayaran - totalSetelahDiskon;

                // Format hasil kembalian ke Rupiah
                document.getElementById("kembalian").value = formatRupiah(kembalian);
            }


            // Saat input kehilangan fokus, tambahkan ,00 di akhir
            document.getElementById("uangPembayaran").addEventListener("blur", function () {
                let rawValue = this.value.replace(/[^0-9]/g, ""); // Ambil angka saja
                let numericValue = parseInt(rawValue, 10) || 0;
                this.value = formatRupiah(numericValue, true); // Format dengan ",00" setelah selesai mengetik
            });

            // document.getElementById("uangPembayaran").addEventListener("input", function (event) {
            //     let rawValue = this.value.replace(/[^0-9]/g, ""); // Hanya angka, tanpa karakter lain
            //     if (rawValue === "") rawValue = "0"; // Jika kosong, set ke 0

            //     let numericValue = parseInt(rawValue, 10) || 0; // Konversi ke angka
            //     this.value = formatRupiah(numericValue, false); // Format tanpa ",00" saat mengetik

            //     calculateChange(); // Hitung ulang kembalian
            // });

            // // Saat input kehilangan fokus, tambahkan ,00 di akhir
            // document.getElementById("uangPembayaran").addEventListener("blur", function () {
            //     let rawValue = this.value.replace(/[^0-9]/g, ""); // Ambil angka saja
            //     let numericValue = parseInt(rawValue, 10) || 0;
            //     this.value = formatRupiah(numericValue, true); // Format dengan ",00" setelah selesai mengetik
            // });

            // Event listener untuk tombol pembayaran
            document.getElementById("prosesPembayaran").addEventListener("click", function () {
                let totalBelanja = parseRupiah(document.getElementById("totalBelanja").value);
                let uangPembayaran = parseRupiah(document.getElementById("uangPembayaran").value);
                let diskon = parseFloat(document.getElementById("diskon").value) || 0;

                // Hitung total setelah diskon
                let totalSetelahDiskon = totalBelanja - (totalBelanja * (diskon / 100));
                let kembalian = uangPembayaran - totalSetelahDiskon;

                if (uangPembayaran < totalSetelahDiskon) {
                    alert("Uang pembayaran kurang! Kembalian: " + formatRupiah(kembalian));
                } else {
                    alert("Pembayaran berhasil! Kembalian: " + formatRupiah(kembalian));
                }
            });

            function onScanFailure(error) {
                console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: { width: 250, height: 250 } }, false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
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
    <!-- Bootstrap 5 JS (Bundle dengan Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ePVrZkK15EGE7Ku8HiRXP7sSPL5ReNpCfUbhVO2VODoQNp0WLvqN5PN4wvhOU5D2"
        crossorigin="anonymous"></script>
   <!-- Required vendors -->
    <script src="<?= base_url("assets/") ?>vendor/global/global.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
</body>

</html>
</body>