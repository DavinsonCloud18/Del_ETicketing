<?php 
session_start();

    global $db;
    $db = mysqli_connect('localhost','root','','proyek_psw2'); 
    if(!$db){
        die("Database Connect Problem");
    }
   function ExecuteQuery($query){
        global $db;
        $result = mysqli_query($db,$query);

        return $result;
    }
    function CreateAcara($kode,$nama,$tema,$gambar,$tanggal,$jam,$lokasi,$kapasitas,$deskripsi){
        $query = "INSERT INTO Acara VALUES('$kode','$nama','$tema','$gambar','$tanggal','$jam','$lokasi','$kapasitas','$deskripsi')";
        $result = ExecuteQuery($query);

        return $result;
    }
    function GetAllAcara(){
        $query = "SELECT * FROM Acara";
        $result = ExecuteQuery($query);
        $data = [];

        while($acara = mysqli_fetch_assoc($result)){
            $data[] = $acara; 
        }

        return $data;
    }
    function GetAllMahasiswa(){
        $query = "SELECT * FROM mahasiswa";

        $AllMahasiswa = ExecuteQuery($query);

        $data = []; //array

        while($mahasiswa = mysqli_fetch_assoc($AllMahasiswa)){
            $data[] = $mahasiswa;
        }

        return $data;
    }
    function GetAcara($kode){
        $query = "SELECT * FROM Acara WHERE Kode_Acara = '$kode'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result); //untuk memakai fungsi ini,data harus merupakan sebuah row data dari database
        
        return $data;

    }
    function EditAcara($kode,$nama,$tema,$gambar,$tanggal,$jam,$lokasi,$kuota,$deskripsi){
        global $db;
        $query = "UPDATE Acara SET Kode_Acara = '$kode', nama_kegiatan = '$nama',
                 tema_kegiatan = '$tema',gambar = '$gambar',tanggal_kegiatan = '$tanggal',
                 jam_mulai = '$jam',lokasi = '$lokasi',kuota = '$kuota',deskripsi = '$deskripsi' WHERE Kode_Acara = '$kode'";

        // $result = ExecuteQuery($query);

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }
    function CreateTicket($kode,$nim){
        global $db;
        $no_kursi = count_kursi($kode);
        $total_kursi = mysqli_fetch_assoc($no_kursi);
        $total_kursi = $total_kursi['total_kursi']+1;
        $query = "INSERT INTO tiket VALUES('','$nim','$kode','$total_kursi')";

        $result = ExecuteQuery($query);

        return mysqli_affected_rows($db);
    }
    function TicketInfo($no_tiket,$no_kursi,$nim,$prodi,$kegiatan,$tanggal,$jam){
        $query = "SELECT no_tiket,No_kursi,nama,'mahasiswa.nim',prodi,nama_kegiatan,tanggal_kegiatan,
                  Jam_mulai FROM mahasiswa INNER JOIN tiket ON 
                  'mahasiswa.nim' = 'tiket.nim' INNER JOIN acara ON 
                  'acara.kode_acara' = 'tiket.Kode_acara' WHERE 'mahasiswa.nim' = '$nim' AND no_tiket = '$no_tiket'";

        $result = ExecuteQuery($query);

        return $result;
    }
    function count_kursi($kode_acara){
        $query = "SELECT COUNT(kode_acara) AS total_kursi FROM tiket WHERE kode_acara = '$kode_acara'";

        $result = ExecuteQuery($query);

        return $result;
    }
    function getAllPeserta($kode_acara){
        $query = "SELECT No_tiket,tiket.NIM AS NIM,Nama,Prodi,no_kursi FROM tiket INNER JOIN mahasiswa ON tiket.NIM = mahasiswa.NIM WHERE kode_acara = '$kode_acara'";
        // $query = "SELECT * FROM mahasiswa";
        $result = ExecuteQuery($query);
        $data = [];
            
        while($peserta = mysqli_fetch_assoc($result)){
            $data[] = $peserta;
        }

        return $data;
    }
    function cekTiket($kode,$nim){
        global $db;
        $query = "SELECT COUNT(NIM) AS NIM FROM tiket WHERE NIM = '$nim' AND kode_acara = '$kode'";

        $result = ExecuteQuery($query);

        $data = mysqli_fetch_assoc($result);

        return $data['NIM'];
    }
    function CekAkun($username,$nim){
        $query = "SELECT username FROM akun WHERE username = '$username' OR NIM = '$nim'";

        $result = ExecuteQuery($query);

        return mysqli_num_rows($result);
    }
    function GetKuota($kode_acara){
        $query = "SELECT kuota FROM acara WHERE kode_acara = '$kode_acara'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result);
        return $data['kuota'];
    }
    function jumlahTiketTerpakai($kode_acara){
        $query = "SELECT COUNT(*) AS jlh_tiket FROM tiket WHERE kode_acara = '$kode_acara'";
        $result = ExecuteQuery($query);
        $data = mysqli_fetch_assoc($result);
        return $data['jlh_tiket'];
    }
    function AddAccount($nim,$username,$password){
        global $db;
        $query = "INSERT INTO akun VALUES('$username','$nim','$password','2')";

        $result = ExecuteQuery($query);

        return mysqli_affected_rows($db);
    }
    function LoginAccount($username,$password){
        $query = "SELECT * FROM akun WHERE username='$username' AND PASSWORD='$password'";

        $user = ExecuteQuery($query);

        return $user;
    }
    function DeleteAcara($kode_acara){
        $query = "DELETE FROM acara WHERE kode_acara = '$kode_acara'";
        $result = ExecuteQuery($query);
        return $result;
    }
    function PrintTicket($nim,$kode_acara){
        $query = "SELECT tiket.kode_acara,tiket.NIM,tanggal_kegiatan,nama_kegiatan,jam_mulai,
                  tema_kegiatan,lokasi,deskripsi,No_tiket FROM tiket INNER JOIN acara 
                  WHERE acara.kode_acara = tiket.kode_acara AND nim = '$nim' AND tiket.kode_acara = '$kode_acara'";

        $result = ExecuteQuery($query);

        $data = mysqli_fetch_assoc($result);

        return $data;
        
    }
    function redirect($_location)
	{
	    header('Location: ' .$_location);
    }
    function GetAllAkun(){
        $query = "SELECT * FROM akun";
        $result = ExecuteQuery($query);
        $AllAkun = [];
        while($data = mysqli_fetch_assoc($result)){
            $AllAkun[] = $data;
        }
        return $AllAkun;
    }
    function GetAllTiketMahasiswa($nim){
        $query = "SELECT * FROM acara INNER JOIN tiket ON acara.kode_acara = tiket.kode_acara WHERE nim = '$nim'";
        $result = ExecuteQuery($query);
        $AllTiket = [];
        while($data = mysqli_fetch_assoc($result)){
            $AllTiket[] = $data;
        }
        return $AllTiket;
    }
    function GetAllGambar(){
        $query = "SELECT gambar FROM acara";
        $result = ExecuteQuery($query);
        $AllGambar = [];
        while($data = mysqli_fetch_assoc($result)){
            $AllGambar[] = $data;
        }
        return $AllGambar;
    }
