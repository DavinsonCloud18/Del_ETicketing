USE proyek_psw2;

-- CreateTicket -- 
SELECT No_kursi,nama,mahasiswa.nim,prodi,nama_kegiatan,tanggal_kegiatan,
Jam_mulai,No_kursi FROM mahasiswa INNER JOIN tiket ON 
mahasiswa.nim = tiket.nim INNER JOIN acara ON 
acara.kode_acara = tiket.Kode_acara;

-- getAcara --
SELECT * FROM acara WHERE kode_acara = "KS01";

-- EditAcara -- 
UPDATE Acara SET kode_Acara = 'kode',nama_Kegiatan = 'nama',
                 tema_kegiatan = 'tema',gambar = 'gambar',tanggal_kegiatan = '2200-01-17',
                 Jam_mulai = '14:00:00',kuota = '8',Deskripsi = 'deskripsi' WHERE kode_acara = "PC01";
-- Select Acara --        
SELECT COUNT(kode_acara) FROM tiket WHERE kode_acara = "KS01"; 

-- Create Ticket --
INSERT INTO tiket VALUES('KS01','11318059','','3');


SELECT no_tiket,No_kursi,nama,mahasiswa.nim,prodi,nama_kegiatan,tanggal_kegiatan,
        Jam_mulai FROM mahasiswa INNER JOIN tiket ON 
        mahasiswa.nim = tiket.nim INNEmahasiswaR JOIN acara ON 
        acara.kode_acara = tiket.Kode_acara WHERE mahasiswa.nim = "11318015" AND no_tiket = 1;

INSERT INTO Acara VALUES('POK3','Mantp','merdeka','4.jpg','2001-10-23','13:40:00','500','Ngantukk !!!');


DELETE FROM acara WHERE kode_acara = 'POK3';
SELECT * FROM tiket INNER JOIN mahasiswa ON tiket.NIM = mahasiswa.NIM
SELECT tiket.NIM AS NIM,Nama,Prodi,no_kursi FROM tiket INNER JOIN mahasiswa ON tiket.NIM = mahasiswa.nim WHERE kode_acara = "KS01";
SELECT COUNT(kode_acara) AS total_peserta FROM tiket WHERE kode_acara = "KS01";
INSERT INTO tiket VALUES('','11318055','K808','1');

SELECT COUNT(NIM) AS NIM FROM tiket WHERE NIM = "11318066" AND kode_acara = "HK01";


SELECT * FROM akun WHERE username = "Davin77";
SELECT * FROM mahasiswa;

SELECT tiket.kode_acara,tiket.NIM,tanggal_kegiatan,nama_kegiatan,jam_mulai,
tema_kegiatan,lokasi,deskripsi,No_tiket FROM tiket INNER JOIN acara 
WHERE acara.kode_acara = tiket.kode_acara AND nim = '11318015' AND tiket.kode_acara = 'HK01';