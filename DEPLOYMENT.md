# Panduan Deploy & Rollback PT BPRS HIK MCI

Dokumen ini menjelaskan alur deployment desain baru dan prosedur *instant rollback* agar branch `main` di GitHub tetap tersimpan utuh sebagai master backup awal.

---

## 1. Strategi Branching & Backup
- **Branch `main` (GitHub):** Tetap tidak diubah (untouched) sebagai salinan master backup tampilan awal.
- **Branch `redesign-modern-ui`:** Branch aktif berisi seluruh pembaruan desain modern fintech, optimasi kecepatan, distributed caching, dan keamanan.

Untuk mendorong perubahan terbaru ke GitHub:
```bash
git push origin redesign-modern-ui
```

---

## 2. Pilihan Deployment ke Server Produksi

### Pilihan A: Menggunakan Script Deploy di Server (Recommended)
Bila server memiliki akses shell/SSH atau Git pull langsung:
1. Masuk ke server:
   ```bash
   ssh bprw7255@bprshikmciyk.co.id -p 2223
   ```
2. Jalankan script deploy:
   ```bash
   cd /home/bprw7255/public_html   # sesuaikan path web root
   bash scripts/deploy.sh
   ```
   Script ini otomatis:
   - Melakukan `git fetch` dan checkout branch `redesign-modern-ui`.
   - Mengoptimalkan autoloader Composer (`composer install --no-dev --optimize-autoloader`).
   - Menjalankan migrasi database aman (`php artisan migrate --force`).
   - Mengompilasi cache rute, config, dan blade (`php artisan optimize:clear && php artisan config:cache && php artisan route:cache && php artisan view:cache`).

---

### Pilihan B: Menggunakan Git Push Langsung ke Remote Production
Bila server menggunakan Git bare repository dengan hook `post-receive` yang memantau cabang tertentu:
```bash
# Push branch redesign-modern-ui ke remote production
git push production redesign-modern-ui:main
```
*Catatan:* Perintah di atas mengirimkan commit dari `redesign-modern-ui` ke branch target di remote production tanpa mengubah branch `main` di GitHub `origin`.

---

## 3. Cara Instant Rollback (Kembali ke Tampilan Awal Kapan Saja)

Bila sewaktu-waktu ingin mengembalikan website ke tampilan awal, prosesnya sangat mudah dan instan:

### Jika Menggunakan Pilihan A (SSH di Server):
```bash
bash scripts/rollback.sh
```
Script ini akan:
- Mengembalikan checkout ke branch `main`.
- Mengompilasi ulang cache Laravel untuk branch `main`.
- Tampilan lama langsung aktif kembali dalam hitungan detik.

### Jika Menggunakan Pilihan B (Git Push):
```bash
git push -f production main:main
```
Server akan langsung kembali ke commit terakhir dari branch `main`.

