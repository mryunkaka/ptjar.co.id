# ptjar.co.id

CodeIgniter application for PT Jhonlin Agro Raya.

## Local setup

1. Copy `application/config/database.php.example` to `application/config/database.php`.
2. Edit local database credentials manually.
3. Import required database dump manually. SQL dumps are excluded from Git.
4. Configure local PHP/Nginx environment.

Never commit `.env`, database credentials, SQL dumps, logs, private keys, or machine-specific configuration.

## Manual deployment files

Git tracks application code and configuration only. These large runtime/content paths stay ignored and must be uploaded separately:

- `assets/`
- `web/assets/`
- `vendor/`
- `user_guide/`
- `web/user_guide/`
- `ptjar.co.id/`

Upload `ptjar-manual-upload.zip` to the hosting project root, then extract it while preserving directory structure. Run `git pull origin main` first so tracked code matches the asset archive.
