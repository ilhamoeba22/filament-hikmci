@echo off
title Deploy PT BPRS HIK MCI - Production
color 0A
echo ========================================================
echo   DEPLOY PT BPRS HIK MCI - PRODUCTION SERVER
echo   Remote: production (ssh://bprw7255@bprshikmciyk.co.id:2223)
echo   Branch: redesign-modern-ui -^> production:main
echo ========================================================
echo.
echo Silakan masukkan password jika diminta di bawah ini:
echo.
cd /d "c:\laragon\www\filament-hikmci"
git push production redesign-modern-ui:main
if %ERRORLEVEL% EQU 0 (
    echo.
    echo ========================================================
    echo   DEPLOY SUKSES KE SERVER PRODUKSI!
    echo   Tampilan baru BPRS HIK MCI kini telah aktif di server.
    echo ========================================================
) else (
    echo.
    echo ========================================================
    echo   Deploy belum berhasil. Silakan periksa password atau koneksi.
    echo ========================================================
)
echo.
pause
