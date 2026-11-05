#!/usr/bin/env bash
# ==============================================================================
# PT BPRS HIK MCI - Production Deployment Script
# Branch Default: redesign-modern-ui
# ==============================================================================

set -e

# Target branch (default to redesign-modern-ui, or pass as $1)
TARGET_BRANCH="${1:-redesign-modern-ui}"

echo "======================================================"
echo " Starting PT BPRS HIK MCI Deployment"
echo " Target Branch: ${TARGET_BRANCH}"
echo "======================================================"

# 1. Fetch latest changes from GitHub origin
echo "--> Fetching updates from origin..."
git fetch origin "${TARGET_BRANCH}"

# 2. Checkout target branch
echo "--> Checking out ${TARGET_BRANCH}..."
git checkout "${TARGET_BRANCH}"
git pull origin "${TARGET_BRANCH}"

# 3. Optimize PHP dependencies
echo "--> Installing / optimizing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# 4. Run database migrations safely
echo "--> Running database migrations..."
php artisan migrate --force

# 5. Clear and rebuild application caches
echo "--> Rebuilding production caches..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Ensure storage link exists
echo "--> Verifying storage symlink..."
php artisan storage:link || true

echo "======================================================"
echo " Deployment Successfully Completed!"
echo " Active Branch on Server: ${TARGET_BRANCH}"
echo " To rollback to original main: bash scripts/rollback.sh"
echo "======================================================"

