<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Sign up / Login Form</title>
    <link rel="stylesheet" href="{{ asset('forms/src/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('forms/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main text-white m-4" style="width: 90vw; height: auto;">
            <div class="signup">
                <div class="text-center my-4 mx-3">
                    <p class="fs-3 fw-semibold m-0">FORM PENDAFTARAN SISWA BARU SMK WIKRAMA 1 GARUT</p>
                    <p class="fs-3 fw-semibold m-0">TP 2023-2024</p>
                </div>
                <form class="row g-3 m-3">
                    <div class="col-md-6">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN Anda">
                    </div>
                    <div class="col-md-6">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
						<select name="jk" id="jk" class="form-select">
							<option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
                    </div>
                    <div class="col-12">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Anda">
                    </div>
                    <div class="col-12">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                            placeholder="Masukkan Asal Sekolah Anda">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email"
                            placeholder="Masukkan Email Anda">
                    </div>
                    <div class="col-12">
                        <label for="no_tlp" class="form-label">Nomor Telepon</label>
                        <input type="text" name="no_tlp" class="form-control" id="no_tlp"
                            placeholder="Masukkan Nomor Telepon Anda">
                    </div>
                    <div class="col-md-6">
                        <label for="no_tlp_ayah" class="form-label">Nomor Telepon Ayah</label>
                        <input type="text" name="no_tlp_ayah" class="form-control" id="no_tlp_ayah"
                            placeholder="Masukkan Nomor Telepon Ayah Anda">
                    </div>
                    <div class="col-md-6">
                        <label for="no_tlp_ibu" class="form-label">Nomor Telepon Ibu</label>
                        <input type="text" name="no_tlp_ibu" class="form-control" id="no_tlp_ibu"
                            placeholder="Masukkan Nomor Telepon Ibu Anda">
                    </div>
                    <div class="col-12">
                        <label for="referensi" class="form-label">Referensi</label>
						<select name="referensi" id="referensi" class="form-select">
							<option value="" selected disabled>-- Pilih Referensi --</option>
							<option value="Pegawai Wikrama">Guru/Staf/Laboran/Pegawai Wikrama</option>
							<option value="Siswa Wikrama">Siswa SMK Wikrama</option>
							<option value="Alumni Wikrama">Alumni SMK Wikrama</option>
							<option value="Guru SMP">Guru SMP</option>
							<option value="Calon Siswa Wikrama">Calon Siswa SMK Wikrama</option>
							<option value="Sosial Media">Sosial Media</option>
							<option value="Referensi Langsung">Referensi Langsung</option>
						</select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning w-100">Registrasi</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
    <!-- partial -->

</body>

</html>
