# 🚀 Laravel Starter Kit

A **modern Laravel Starter Kit** built to speed up development with a **clean structure**, **powerful tools**, and **developer-friendly commands**.
This project is based on **Laravel 12** and comes with everything you need to start building production-ready applications fast.

---

## ✨ Features

- ⚡ **Fast local development** → concurrent processes for Laravel, queues, logs, and Vite.
- 🧩 **IDE support** → better autocompletion with Laravel IDE Helper.
- 🧹 **Automatic code formatting** → Laravel Pint & ESLint.
- 🧠 **Static analysis & type safety** → powered by Larastan (PHPStan).
- 🧪 **Testing setup** → Pest included with parallel support.
- 🔄 **Automated refactoring** → Rector integration.
- 🐛 **Debugging made easy** → Telescope & Laradumps pre-installed.
- 📊 **Code quality checks** → typos, linting, types, and refactor tests.

---

## 📦 Prerequisites

Before installing, ensure you have the following installed:

- **PHP** `>= 8.2`
- **Composer** `>= 2.5`
- **Node.js** `>= 18`
- **npm** `>= 9`
- **MySQL** or **PostgreSQL** (optional for local development)
- **Git**

---

## 🚀 Installation

### **Option 1 — Recommended (Fastest)** ✅

Install a **new Laravel project** directly with the starter kit

```bash
laravel new my-app --using justchr1s/starter-kit
cd my-app

```

That’s it! Your project is ready to go 🚀

---

### **Option 2 — Manual Installation**

If you prefer cloning manually

```bash
git clone https://github.com/justchr1s/starter-kit.git my-app
cd my-app
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

```

---

## 🛠 Available Commands

This starter kit comes with **custom Composer scripts** to simplify your workflow.

### 📌 Development

```bash
composer dev
```

> Starts everything you need for local development **in parallel** :

- Laravel server → `php artisan serve`
- Queue listener → `php artisan queue:listen`
- Log watcher → `php artisan pail`
- Vite → `npm run dev`

---

### 🧩 IDE Helpers

```bash
composer ide
```

Generates IDE helpers for:

- Model metadata.
- Helper functions.
- Better autocompletion in your IDE.

---

### 🧹 Linting & Code Style

```bash
composer lint
```

Runs:

- **Laravel Pint** → PHP code formatting.
- **ESLint** → JavaScript/Vue code linting.

To automatically fix issues:

```bash
composer fix
```

This also:

- Generates IDE helpers.
- Runs PHPStan for types.
- Applies Rector refactors.
- Fixes PHP & JS code style.

---

### 🧪 Testing

#### Run all tests

```bash
composer test
```

#### Run unit tests only

```bash
composer test:unit
```

#### Run unit tests with coverage

```bash
composer test:unit:coverage
```

#### Check for code typos

```bash
composer test:typos
```

---

### 🔎 Static Analysis

```bash
composer test:types
```

Uses **PHPStan** (via Larastan) to detect type-related issues.

If you want to regenerate the baseline:

```bash
composer phpstan-baseline
```

---

### 🔄 Refactoring

```bash
composer refactor
```

Automatically refactors your codebase using **Rector** .

---

### 🧪 Test Your Refactors

```bash
composer test:refactor
```

Runs Rector in **dry-run mode** to preview refactoring changes before applying them.

---

## 📂 Project Structure

starter-kit/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/

---

## 🧑‍💻 Recommended Workflow

```bash
# Start development environment
composer dev

# Run migrations
php artisan migrate

# Run tests before pushing changes
composer test

# Fix code style & refactor automatically
composer fix

# Update IDE helpers for better autocompletion
composer ide

```

---

## 🛠 Included Packages

| Package                         | Purpose                             |
| --------------------------------- | ------------------------------------- |
| **laravel/telescope**           | Debugging & monitoring              |
| **laradumps/laradumps**         | Real-time debugging in terminal     |
| **barryvdh/laravel-ide-helper** | Better IDE autocompletion           |
| **laravel/pint**                | Automatic PHP code formatting       |
| **larastan/larastan**           | PHPStan integration for type safety |
| **pestphp/pest**                | Simple & fast testing framework     |
| **rector/rector**               | Automated code refactoring          |
| **peckphp/peck**                | Detect typos in code                |

---

## 🤝 Contributing

Contributions are welcome!

Feel free to fork the repository, create a branch, and submit a pull request.

---

## 📄 License

This project is released under the **MIT License** .

---

## 💡 Tips

- Always run `composer fix` before committing.
- Use `composer test` to validate your changes.
- Check your IDE helpers regularly with `composer ide`.
- Use Telescope & Laradumps to debug faster.

---

## 🛡️ Badges

You can add these to make the README more visual:

![Laravel](https://img.shields.io/badge/Laravel-12.x-red)
![PHP](https://img.shields.io/badge/PHP-%5E8.2-blue)
![Tests](https://img.shields.io/badge/Tests-Pest-brightgreen)
![Code Quality](https://img.shields.io/badge/Code_Quality-PHPStan-orange)
![License](https://img.shields.io/badge/License-MIT-lightgrey)
