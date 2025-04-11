# Laravel Chennai PR Assist Script

> 🤝 Community Maintained by [Laravel Chennai](https://laravelchennai.in/)

This shell script is designed to assist **Laravel Chennai** contributors in creating consistent and well-documented Pull Requests (PRs). It guides developers through a checklist, collects important PR information, and generates a properly formatted PR template output.

---

## 📦 Features

- ✅ ASCII header and branding for Laravel Chennai
- ✅ Interactive CLI-based PR checklist
- ✅ Automatically fetches:
  - Changed files
  - Branch name
  - GitHub org/repo
  - Contributor name
- ✅ Detects special files and suggests required commands (e.g., migrations, config changes)
- ✅ Automatically runs `php artisan insights` for code quality
- ✅ Optionally opens GitHub PR page in the browser

---

## 🛠️ Requirements

Ensure the following are installed and configured on your machine:

- Git
- PHP >= 8.0
- Composer dependencies installed (including `nunomaduro/phpinsights`)
- A proper remote GitHub origin is set (`git remote -v`)

---

## 🚀 Usage

Run the script from your terminal:

```bash
./scripts/pr.sh
