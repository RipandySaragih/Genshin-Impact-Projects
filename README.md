# Genshin Impact Fan Wiki

Proyek ini adalah sebuah platform berbasis web yang berfungsi sebagai ensiklopedia sederhana (Wiki) untuk karakter game Genshin Impact. Dibuat sebagai bagian dari portofolio pengembangan web, proyek ini mendemonstrasikan integrasi desain antarmuka (UI) yang interaktif, penggunaan multimedia, dan manajemen data menggunakan JSON serta PHP.

**Fitur Utama**

- **Interactive Landing Page:** Halaman beranda dengan integrasi video background dan efek *typewriter* pada teks sambutan untuk memberikan pengalaman pengguna yang imersif.
- **Character Encyclopedia:** Daftar karakter interaktif dengan efek *hover* yang halus dan navigasi responsif.
- **Dynamic Content Loading:** Implementasi PHP untuk mengambil dan menampilkan data karakter secara dinamis dari file JSON.
- **Detailed Character Profiles:** Halaman detail yang kaya informasi (Hu Tao, dkk) mencakup statistik, skill talent, hingga konstelasi karakter.
- **Responsive Navigation:** Memudahkan pengguna berpindah antar halaman karakter dengan fitur *quick-switch*.

## Teknologi yang Digunakan

- **Frontend:** HTML5, CSS3 (Custom Styles), JavaScript (Vanilla JS)
- **Backend:** PHP (untuk pengolahan data JSON)
- **Data Format:** JSON (sebagai database lokal karakter)
- **Multimedia:** MP4 Video Background, CSS Flexbox untuk tata letak.

## Struktur Proyek

- `Beranda.html`: Halaman utama dengan efek typewriter dan video background.
- `character.html`: Katalog karakter utama berbasis HTML/JS.
- `Character2.php`: Implementasi katalog menggunakan PHP untuk manajemen data yang lebih dinamis.
- `character-details.php`: Script backend untuk memproses data dari folder `data/`.
- `HuTao.html`: Contoh halaman detail karakter dengan styling khusus.
- `style.css` & `stylechar.css`: File stylesheet untuk memastikan tampilan konsisten dan menarik.

## 📸 Tampilan Web (Demo)
*Anda dapat menyisipkan screenshot web Anda di sini untuk menarik perhatian HRD*

![Home Page Screenshot](link-ke-foto-beranda)
![Character List Screenshot](link-ke-foto-list)

## Cara Menjalankan Secara Lokal

1. Clone repositori ini:
   ```bash
   git clone [https://github.com/RipandySaragih/nama-repo-anda.git](https://github.com/RipandySaragih/nama-repo-anda.git)
