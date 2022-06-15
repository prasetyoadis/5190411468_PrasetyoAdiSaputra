<p align="center"><a href="https://anibase.000webhostapp.com" target="_blank"><img src="https://anibase.000webhostapp.com/img/anibase.png" width="400"></a></p>

### <a href="https://anibase.000webhostapp.com" target="_blank">Live Demo Anibase Tugas M3 & M4</a>

# Isi Dari Project Tugas Ini
<ul>
    <li><a href="#Login">Login</a></li>
    <li><a href="#Logout">Logout</a></li>
    <li><a href="#Register">Register</a></li>
    <li><a href="#Dashboard">Dashboard</a></li>
</ul>
    
## Database

dapat diakses di public/db/anibase.sql kemudian import ke database anda dengan nama database anibase

## Login

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/login1.png"><br>
middleware('guest') digunakan untuk menjaga request /login hanya dapat diakses oleh pengunjung yang belum authtentifikasi login

app/Http/Controller/LoginController.php<br>
<img src="https://anibase.000webhostapp.com/img/login2.png"><br>
memanggil method fungsi userLogin(Request $request) pada LoginController, pada method fungsi tersebut dilakukan validasi dari $request dimana email dan password tidak boleh null dan email harus terdapat dns. kemudian pengkondisian jika Auth:attempt($formValid) menghasilkan true maka $request session() meregenerete kemudian me-return-kan redirect() identeded /admin. jika gagal akan return back() with pesan error Login Gagal

## Logout

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/logout2.png"><br>
middleware('auth') digunakan untuk menjaga request /logout hanya dapat diakses oleh pengunjung yang sudah authtentifikasi login

app/Http/Controller/LoginController.php<br>
<img src="https://anibase.000webhostapp.com/img/logout.png"><br>
memanggil method fungsi userLogout(Request $request) pada LoginController, pada method fungsi tersebut dilakukan Auth::Logout, invalidate $request->seasson(), dan regenerateToken pada $request->seasson() setelah dilakukan akan me-return redirect /

## Register

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/register.png"><br>
middleware('guest') digunakan untuk menjaga request /login hanya dapat diakses oleh pengunjung yang belum authtentifikasi login

app/Http/Countroller/RegisterController.php<br>
<img src="https://anibase.000webhostapp.com/img/register2.png"><br>
memanggil method fungsi userRegister(Request $request) pada RegisterController, pada method fungsi tersebut dilakukan validasi dari $request dimana email, nama dan password tidak boleh null; nama maksimal 255 karakter; email harus terdapat dns dan unik berbeda antar user pada tabel users; password harus minimal 5 karakter dan maksimal 255 karakter. kemudian melakukan enkripsi password user baru dengan menimpa $dataValid['password'] dengan hash::make($dataValid['password']) setelah dienkripsi passwordnya kemudian disimpan pada database dengan memanggil Modal User dengan fungsi create($dataValid) setelah disimpan akan di return redirect ke /login dengan pessan sukses Regristrasi Berhasil

## Dashboard

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/dashboard.png"><br>
middleware('auth') digunakan untuk menjaga request /admin; /admin/dashboard; /admin/post-anime/ hanya dapat diakses oleh pengunjung yang sudah authtentifikasi login
