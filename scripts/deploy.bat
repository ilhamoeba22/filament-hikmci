@echo off
REM ==============================================================================
REM PT BPRS HIK MCI - Local Push & Deploy Helper
REM Pushes redesign-modern-ui to GitHub origin (keeping 'main' untouched as backup)
REM ==============================================================================

echo [1/3] Pushing redesign-modern-ui to GitHub origin...
git push origin redesign-modern-ui

echo.
echo [2/3] Verification:
echo Branch 'main' on GitHub remains untouched as the master backup.
echo Branch 'redesign-modern-ui' is live on GitHub.

echo.
echo [3/3] Deployment Options to Production Server:
echo - OPTION A (via SSH on server):
echo   ssh bprw7255@bprshikmciyk.co.id -p 2223
echo   cd /path/to/app && bash scripts/deploy.sh
echo.
echo - OPTION B (via direct git push if using bare repo hook):
echo   git push production redesign-modern-ui:main
echo.
echo - HOW TO ROLLBACK TO ORIGINAL VERSION ANYTIME:
echo   If using Option A: ssh and run 'bash scripts/rollback.sh'
echo   If using Option B: run 'git push -f production main:main'
echo.
pause
