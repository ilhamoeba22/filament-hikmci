@echo off
title Rollback PT BPRS HIK MCI - Production
color 0C
echo ========================================================
echo   ROLLBACK PT BPRS HIK MCI - PRODUCTION SERVER
echo   Mengembalikan server produksi ke branch 'main' (Backup Awal)
echo ========================================================
echo.
echo Silakan masukkan password jika diminta di bawah ini:
echo.
cd /d "c:\laragon\www\filament-hikmci"
git push -f production main:main
if %ERRORLEVEL% EQU 0 (
    echo.
    echo ========================================================
    echo   ROLLBACK SUKSES!
    echo   Server produksi telah dikembalikan ke tampilan awal.
    echo ========================================================
) else (
    echo.
    echo ========================================================
    echo   Rollback belum berhasil. Silakan periksa password atau koneksi.
    echo ========================================================
)
echo.
pause
