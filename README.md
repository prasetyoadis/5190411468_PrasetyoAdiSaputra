<p align="center"><a href="https://anibase.000webhostapp.com" target="_blank"><img src="https://anibase.000webhostapp.com/img/anibase.png" width="400"></a></p>

### <a href="https://anibase.000webhostapp.com" target="_blank">Live Demo Anibase Tugas M3 & M4</a>

# Isi Dari Project Tugas Ini

## Database

dapat diakses di public/db/anibase.sql kemudian import ke database anda dengan nama database anibase

## Login

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/login1.png"><br>
middleware('guest') digunakan untuk menjaga request /login hanya dapat diakses oleh pengunjung yang belum authtentifikasi login

app/Http/Controller/LoginController.php<br>
<img src="https://anibase.000webhostapp.com/img/login2.png">

## Logout

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/logout2.png"><br>
middleware('auth') digunakan untuk menjaga request /logout hanya dapat diakses oleh pengunjung yang sudah authtentifikasi login

app/Http/Controller/LoginController.php<br>
<img src="https://anibase.000webhostapp.com/img/logout.png"><br>
memanggil method fungsi userLogin(Request $request) pada LoginController lalu pada method fungsi tersebut dilakukan validasi dari $request dimana email dan password tidak boleh null dan email harus terdapat dns. kemudian pengkondisian jika Auth:attempt($formValid) menghasilkan true maka $request session() meregenerete kemudian me-return-kan redirect() identeded /admin. jika gagal akan return back() with pesan error Login Gagal

## Register

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/register.png">
middleware('guest') digunakan untuk menjaga request /login hanya dapat diakses oleh pengunjung yang belum authtentifikasi login

app/Http/Countroller/RegisterController.php<br>
<img src="https://anibase.000webhostapp.com/img/register2.png">

## Dashboard

routes/web.php<br>
<img src="https://anibase.000webhostapp.com/img/dashboard.png">
middleware('auth') digunakan untuk menjaga request /admin; /admin/dashboard; /admin/post-anime/ hanya dapat diakses oleh pengunjung yang sudah authtentifikasi login
