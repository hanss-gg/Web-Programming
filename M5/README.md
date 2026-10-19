# Tugas M5 - Pemrograman Web: Bootstrap

## 1. Pengertian Bootstrap
**Soal:** Jelaskan apa itu Bootstrap dan apa kegunaannya!

**Jawaban:**
Bootstrap adalah *CSS framework front-end* open-source yang menyediakan kumpulan komponen antarmuka siap pakai (seperti navbar, tombol, kartu/card, formulir) serta sistem layout berbasis flexbox/grid.

**Kegunaan:**
- Mempercepat pembuatan tampilan web karena komponen dan utility class sudah tersedia, tanpa menulis CSS dari nol.
- Membuat website responsif sehingga tampilan menyesuaikan ukuran layar (PC, tablet, ponsel).
- Menjaga tampilan tetap konsisten antar halaman dan antar browser.

---

## 2. Memasang Bootstrap
**Soal:** Ada beberapa cara untuk mengimpor atau menggunakan Bootstrap pada project. Sebutkan cara-caranya!

**Jawaban:**
Ada beberapa cara umum untuk memasang/menggunakan Bootstrap ke dalam project web:
1. **Menggunakan CDN (Content Delivery Network):**

    Memasukkan tag `<link>` untuk CSS dan tag `<script>` untuk JavaScript bundle langsung dari penyedia CDN (seperti jsDelivr atau cdnjs) di dalam file HTML tanpa mengunduh file lokal.

2. **Mengunduh File Secara Lokal (Compiled CSS & JS):**

   Mengunduh arsip Bootstrap dari situs resmi (`getbootstrap.com`), lalu diekstrak ke folder project, lalu memanggil file CSS dan JS secara lokal via tag `<link>` dan `<script>`.

3. **Menggunakan Package Manager (npm / yarn / pnpm):**

    Menginstal paket Bootstrap melalui terminal (contoh: `npm install bootstrap`), yang umumnya digunakan pada project berbasis build tool/bundler seperti Vite, Webpack, Laravel, atau React/Vue.

---

## 3. Grid dan Breakpoint
**Soal:** Jelaskan mengenai class grid dan kegunaan breakpoint!

**Jawaban:**
* **Class Grid Bootstrap:**

  Sistem grid Bootstrap adalah sistem tata letak berbasis 12 kolom yang memanfaatkan Flexbox. Grid dibangun dengan tiga elemen utama:
  - `.container` / `.container-fluid`: Wadah penampung dengan margin/lebar responsif.
  - `.row`: Baris yang membungkus kolom dan memberikan margin negatif horizontal agar padding kolom seimbang.
  - `.col-*`: Kolom tempat konten diletakkan. Total lebar kolom dalam satu baris adalah akumulasi hingga nilai 12 (misal `.col-6` + `.col-6`, atau `.col-4` + `.col-8`).

* **Kegunaan Breakpoint:**

  Breakpoint adalah titik batas lebar viewport/layar tertentu di mana tata letak (layout) dan gaya tampilan web berubah sesuai ukuran layar (Media Queries). Breakpoint memungkinkan pembuatan tata letak responsif (*responsive web design*).

  Breakpoint pada Bootstrap 5:
  | Breakpoint | Prefix Kelas | Dimensi Layar |
  | :--- | :--- | :--- |
  | **Extra small (xs)** | `.col-` | < 576px |
  | **Small (sm)** | `.col-sm-` | ≥ 576px |
  | **Medium (md)** | `.col-md-` | ≥ 768px |
  | **Large (lg)** | `.col-lg-` | ≥ 992px |
  | **Extra large (xl)** | `.col-xl-` | ≥ 1200px |
  | **Extra extra large (xxl)** | `.col-xxl-` | ≥ 1400px |

---

## 4. Class Bootstrap
**Soal:** Sebutkan minimal lima class yang disediakan oleh Bootstrap beserta kegunaannya!

**Jawaban:**
1. **`.container` / `.container-fluid`**: Berfungsi sebagai pembungkus utama yang memberikan batasan lebar maksimum responsif dan meratakan posisi konten di tengah (*auto horizontal margin*).
2. **`.btn` & variasinya (misal `.btn-primary`, `.btn-success`)**: Mengubah elemen tautan (`<a>`) atau tombol (`<button>`) menjadi tombol bergaya standar Bootstrap lengkap dengan padding, border-radius, dan efek transisi saat dihover.
3. **`.card`**: Komponen wadah fleksibel dengan batas border, padding, dan bayangan yang digunakan untuk membingkai sekelompok konten/informasi.
4. **`.d-flex`, `.justify-content-*`, `.align-items-*`**: Utility class Flexbox untuk mengatur tata letak, arah flex, perataan horizontal, dan perataan vertikal elemen anak secara instan.
5. **`.form-control`**: Memberi styling seragam pada elemen input form (`<input>`, `<textarea>`, `<select>`), termasuk border fokus, ukuran teks, dan padding yang optimal.

---

## 5. Gambar Responsif
**Soal:** Bagaimana cara agar foto atau gambar pada website responsif menyesuaikan ukuran layar perangkat?

**Jawaban:**
Di Bootstrap, cara agar gambar menjadi responsif adalah dengan menambahkan class **`.img-fluid`** pada tag `<img>`.

Contoh implementasi:
```html
<img src="gambar.jpg" class="img-fluid" alt="Deskripsi Gambar">
```

Secara internal di CSS, class `.img-fluid` menerapkan aturan:
```css
max-width: 100%;
height: auto;
```
Dengan aturan ini, lebar gambar akan otomatis menyesuaikan lebar elemen induknya (tidak melebihi ukuran container dan tidak keluar layar), sementara rasio aspek gambar tetap terjaga secara proporsional.

---

## 6. Membuat Tampilan dengan Bootstrap
File implementasi: [`index.html`](index.html)

Seluruh tampilan dibuat **hanya dengan komponen dan utility class Bootstrap 5.3.3 (via CDN)**, tanpa custom CSS.

**Fitur & Komponen yang Diterapkan:**
- **Navbar** (`.navbar .navbar-expand-md .navbar-dark .bg-success`):
  - Warna hijau memakai `.bg-success`, teks putih memakai `.navbar-dark`.
  - Nama merek **"Ruang Baca"** di sisi kiri (`.navbar-brand`).
  - Menu **"Beranda"**, **"Tentang"**, dan **"Bantuan"** di sisi kanan memakai `.ms-auto`.
  - Tombol hamburger (`.navbar-toggler` + `.collapse`) untuk layar ponsel.
- **Layout halaman** (`.bg-light .d-flex .flex-column .min-vh-100`, `.d-flex .justify-content-center .align-items-center`):
  - Latar abu-abu muda, dan card diposisikan di tengah secara horizontal dan vertikal.
- **Card login** (`.card .shadow`):
  - `.card-body .p-4 .text-center` untuk judul *"Masuk ke Ruang Baca"* dan subjudul *"Temukan bacaan untuk hari ini."* (`.text-muted .small`).
  - Form: `Username` dan `Password` memakai `.form-label` + `.form-control` dan `.mb-3` untuk jarak.
  - Checkbox *"Ingat saya"* memakai `.form-check`.
  - Tombol *"Masuk"* memakai `.btn .btn-success .w-100` (lebar penuh).
  - `.card-footer .bg-light` berisi tautan *"Lupa password?"* (`.link-success`), dipisah garis dari form seperti contoh.
- **Grid & Responsivitas**:
  - Kartu dibungkus `.container > .row > .col-12 .col-sm-10 .col-md-6 .col-lg-4` agar mengisi lebar layar di ponsel dan menyempit di layar besar.