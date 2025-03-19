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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert 2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA6u0Mgnw7H1PUnKjKp8hbAFvfCR7iqgAM+z9Pydz2R++uS8llPzGd1F5z3eG5" crossorigin="anonymous">


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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">
                            Proses Pembayaran
                        </button>
                    </div>
                </div>
                <!-- Scanner -->
                <div class="tes">
                    <div style="width: 500px; left:10rem;" id="reader"></div>
                    <p>Result: <span id="result"></span></p>

                    <!-- Tambahkan elemen audio -->
                    <audio id="successSound" src="<?= base_url('assets/audio/scanner beep.mp3') ?>"></audio>


                </div>
                <div class="input-group mb-3">
                    <input id="search" class="form-control" placeholder="Search something sweet on your mind..."
                        type="text" value="" />
                    <button id="searchButton" class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
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
                                    <button class="btn btn-primary add-button"
                                        onclick="addProductToOrder('<?= $data['nama_produk'] ?>', '<?= base_url('assets/images/product/') . $data['img'] ?>', <?= $data['harga_jual'] ?>, <?= $data['diskon'] ?>, <?= $data['potongan'] ?>)">
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
                        <div class="d-flex justify-content-between">
                            <div>
                                Diskon Member
                            </div>
                            <div class="input-group mb-3" id="member-discount">
                                <form action="<?= base_url('Member') ?>" method="post">
                                </form>
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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">
                            Proses Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Bootstrap -->
        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="paymentModalLabel">Konfirmasi Pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="paymentForm">
                            <!-- Total Belanja -->
                            <div class="mb-3">
                                <label class="form-label">Total Belanja (IDR):</label>
                                <input type="text" id="totalAmount" class="form-control" readonly>
                            </div>

                            <!-- Metode Pembayaran -->
                            <div class="mb-3">
                                <label class="form-label">Metode Pembayaran:</label>
                                <select id="paymentMethod" class="form-control">
                                    <option value="cash">Tunai</option>
                                    <option value="debit">Kartu Debit</option>
                                    <option value="credit">Kartu Kredit</option>
                                    <option value="ewallet">E-Wallet</option>
                                </select>
                            </div>

                            <!-- Uang Pembayaran -->
                            <div class="mb-3">
                                <label class="form-label">Uang Pembayaran (IDR):</label>
                                <input type="number" id="amountPaid" class="form-control"
                                    placeholder="Masukkan jumlah uang" oninput="calculateChange()">
                            </div>

                            <!-- Diskon -->
                            <div class="mb-3">
                                <label class="form-label">Diskon (%):</label>
                                <input type="number" id="discount" class="form-control" placeholder="Masukkan diskon"
                                    value="0" oninput="calculateChange()">
                            </div>

                            <!-- Kembalian -->
                            <div class="mb-3">
                                <label class="form-label">Kembalian (IDR):</label>
                                <input type="text" id="changeAmount" class="form-control" readonly>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="confirmPaymentBtn" data-bs-dismiss="modal">
                            Bayar Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

        // Array untuk menyimpan barcode yang sudah discan
        let scannedBarcodes = [];

        function onScanSuccess(decodedText) {
            // Menangani scan duplikat
            if (scannedBarcodes.includes(decodedText)) {
                Swal.fire({
                    title: 'Duplicate Scan!',
                    text: 'This product is already in the cart.',
                    icon: 'warning',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
                return; // Jangan proses barcode yang sama
            }

            scannedBarcodes.push(decodedText); // Menambahkan barcode yang discan

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
    </script> -->

    <script>
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
    </script>

    <!-- Bootstrap 5 JS (Bundle dengan Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ePVrZkK15EGE7Ku8HiRXP7sSPL5ReNpCfUbhVO2VODoQNp0WLvqN5PN4wvhOU5D2"
        
        crossorigin="anonymous"></script>
        
</body>

</html>
</body>