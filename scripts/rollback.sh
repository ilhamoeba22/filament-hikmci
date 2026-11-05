#!/usr/bin/env bash
# ==============================================================================
# PT BPRS HIK MCI - Instant Rollback Script
# Reverts production back to the original backup 'main' branch
# ==============================================================================

set -e

echo "======================================================"
echo " Emergency / Instant Rollback to 'main' (Original UI)"
echo "======================================================"

# 1. Fetch main from origin
echo "--> Fetching main from origin..."
git fetch origin main

# 2. Checkout main branch
echo "--> Checking out main branch..."
git checkout main
git pull origin main

# 3. Refresh caches
echo "--> Rebuilding caches for main branch..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "======================================================"
echo " Rollback Complete! Website restored to original main."
echo "======================================================"

