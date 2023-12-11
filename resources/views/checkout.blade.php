<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rookie record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
</head>
<body>

@extends('partials.navbar')

<div class="cassette">
    <h2>Payment</h2>
</div>

<div class="barangpayment">
    <img src="/gambar/Sonic Youth Black Goo - L.png" alt="" style="width:300px" class="foto">
    <h2 class="harga">Rp.{{ $kaset->harga }}</h2>

    <div class="deskripsi">
        <h2>Artist: {{ $kaset->artist }}</h2>
        <h2>Album:{{$kaset->album}}</h2>
        <h2>Deskripsi barang:{{ $kaset->deskripsi }}</h2>
    </div>
<form action="/checkout"method="POST">
    @csrf
    {{-- untuk menginput biodata pembeli --}}
    <div class="container-biodata">
        <div class="baris1 mt-40">
            <input type="text" class="input-payment" id="name" name="name" placeholder="Your name.."><br><br>
            <input type="number" class="input-payment" id="qty" name="qty" placeholder="how much?"><br><br>
            <input type="text" class="input-payment" id="phone" name="phone" placeholder="Your phone number"><br><br>
            <textarea name="address" class="input-alamat" id="address" name="address" rows="3" placeholder="Your Address"></textarea>
        </div>

        <div class="tombol mt-40">
            <button type="submit" class="btn btn-primary">Checkout</button>

        </div>
    </form>
    </div>

    {{-- <br><br><br><br><br> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}

    {{-- menampilkan pilihan e-wallet apa saja yg dapat digunakan untuk membayar produknya --}}
    {{-- <h1 class="ml-30" style="color:white"><br>Payment Method:<br>
    </h1>
    <p style="color: white">(Please choose payment method with click the checkbox)</p>
    <div class="emoney mt-3">
        <div class="row">
            <div class="col">
                <h1 style="color: white">
                    <label><input type="checkbox" class="radio" value="1" name="fooby[2][]" /></label>Gopay
                </h1>
                <img src="/gambar/Logo GoPay (PNG-1080p) - FileVector69.png" alt="" style="width: 200px"><br><br>
            </div>

            <div class="col">
                <h1 style="color: white">
                    <label><input type="checkbox" class="radio" value="1" name="fooby[2][]" />OVO</label>
                </h1>
                <img src="/gambar/Logo OVO (PNG-1080p) - FileVector69.png" alt="" style="width: 200px"><br>
            </div>

            <div class="col">
                <h1 style="color: white">
                    <label><input type="checkbox" class="radio" value="1" name="fooby[2][]" />Shopee</label>
                </h1>
                <img src="/gambar/shopee-logo-40482.png" alt="" style="width: 200px"><br>
            </div>
        </div>
    </div> --}}

    {{-- untuk submit pembayaran --}}

    {{-- script yang akan mengeluarkan alert bahwa payment berhasil dilakukan --}}
    {{-- <script>
        function showPaymentAlert() {
            alert("Thank you for your purchase! Payment successful.");
        }
    </script> --}}
</div>

</body>
</html>
