<?php
function connect()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi gagal terhubung ke Database");
    mysqli_select_db($conn, "db_music_store") or die("Nama Database salah!");
    return $conn;
}

function query($sql)
{
    $conn = connect();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    if ($error == 4) {
        // echo "<script>
        //       alert('Pilih gambar terlebih dahulu');
        //       </script>";
        return 'user.png';
    }

    $format_gambar = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $format_gambar)) {
        echo "<script>
          alert('Format Gambar Tidak Cocok!');
          </script>";
        return false;
    }

    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
          alert('Yang anda pilih bukan format gambar!');
          </script>";
        return false;
    }

    if ($ukuran_file > 5000000) {
        echo "<script>
    alert('Ukuran gambar terlalu besar!');
    </script>";
        return false;
    }
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/guitar/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = connect();
    $category = htmlspecialchars($data['kategori']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $rekomendasi = htmlspecialchars($data['rekomendasi']);

    $gambar =  upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO  music VALUES (null,'$category','$gambar','$nama','$deskripsi','$harga','$rekomendasi')";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = connect();
    $music_gambar = query("SELECT * FROM music WHERE id=$id;")[0];

    if ($music_gambar['image'] != 'user.png') {
        unlink('../assets/img/guitar/' . $music_gambar['image']);
    }

    mysqli_query($conn, "DELETE FROM music WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapususer($id)
{
    $conn = connect();
    $admin = query("SELECT * FROM user");
    if ($admin['priority'] == 1) {
        "<script>
          alert('Anda tidak bisa menghapus admin!');
          </script>";
        return false;
    }
    mysqli_query($conn, "DELETE FROM user WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = connect();
    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama =  htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $rekomendasi =  htmlspecialchars($data['rekomendasi']);
    $gambar = upload();

    if (!$gambar) {
        return false;
    }
    if ($gambar == 'user.png') {
        $gambar = $gambar_lama;
    }

    $queryubah = "UPDATE music SET 
        image = '$gambar',
        nama = '$nama',
        deskripsi = '$deskripsi',
        harga = '$harga',
        rekomendasi = '$rekomendasi'
        WHERE ID='$id'";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = connect();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confpassword = mysqli_escape_string($conn, $data['confirmpassword']);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username telah digunakan');
            </script>";
        return false;
    } else if ($password !== $confpassword) {
        echo "<script>
        alert('password tidak sama');
        </script>";
        return false;
    } else if (empty($username) && empty($password) && empty($confpassword)) {
        echo "<script>
        alert('Username & Password tidak boleh kosong!');
        </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_register = "INSERT INTO user VALUES ('','$username','$password',4)";
    mysqli_query($conn, $query_register);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = connect();
    $query = ("SELECT * FROM music WHERE
        category LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' OR
        rekomendasi LIKE '%$keyword%'");

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = connect();

    $username_login = htmlspecialchars($data['username']);
    $password_login = htmlspecialchars($data['password']);
    $admin = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username_login' && priority = 1");
    $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username_login' && priority = 4");

    if (mysqli_num_rows($admin) > 0) {
        $row = mysqli_fetch_assoc($admin);
        if (password_verify($password_login, $row['password'])) {
            $_SESSION['login'] = $username_login;
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            $_SESSION['priority'] = $row['priority'];
            if (isset($_POST['remember'])) {
                setcookie('login', $row['username'], time() + 60 * 60 * 24);
                setcookie('hash', hash('sha256', $row['id']), time() + 60 * 60 * 24);
            }
            header("Location: index_login.php");
            exit;
        }
    }
    if (mysqli_num_rows($user) > 0) {
        $rowuser = mysqli_fetch_assoc($user);
        if (password_verify($password_login, $rowuser['password'])) {
            $_SESSION['login'] = $username_login;
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            $_SESSION['id'] = $rowuser['id'];
            $_SESSION['priority'] = $rowuser['priority'];
            if (isset($_POST['remember'])) {
                setcookie('login', $rowuser['username'], time() + 60 * 60 * 24);
                setcookie('hash', hash('sha256', $rowuser['id']), time() + 60 * 60 * 24);
            }
            header("Location: index_login.php");
            exit;
        }
    }

    return [
        'error' => true,
        'message' => "Username dan Password Salah!"
    ];
}
