## Device Management Monolith

This is a small Laravel monolith used to manage two types of products:

- **Phones**: full CRUD UI, listing, creation, update, and deletion
- **Watches**: full CRUD UI, listing, creation, update, and deletion

It also includes a simple marketing-style home page that highlights featured phones and watches from the database.

---

## Features

- **Home page**
  - Hero section with quick links to phone and watch dashboards
  - Search bar (UI) for searching products
  - Product section showing featured phones and watches
  - Footer section with basic links

- **Phone management**
  - `phones/` dashboard listing all phones
  - Create / edit forms with validation
  - Delete action with confirmation

- **Watch management**
  - `watches/` dashboard listing all watches
  - Create / edit forms with validation
  - Delete action with confirmation

- **Seed data**
  - `PhoneFactory` and `WatchFactory` generate realistic demo data
  - `DatabaseSeeder` creates sample phones and watches

---

## Getting Started

### 1. Install dependencies

```bash
composer install
npm install    # optional, if you want to compile frontend assets
```

### 2. Configure environment

Copy `.env.example` to `.env` (if not already done) and set up the database.  
This project is configured to use **SQLite** by default:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

Create the SQLite file if it does not exist:

```bash
touch database/database.sqlite
```

### 3. Run migrations and seeders

```bash
php artisan migrate --seed
```

This will create the `phones` and `watches` tables and insert demo records.

### 4. Start the development server

```bash
php artisan serve
```

Open `http://127.0.0.1:8000` in your browser to view the home page.

---

## Main Routes

- `GET /` – Home page with hero, search, and featured products
- `GET /phones` – Phone dashboard
- `GET /phones/create` – Create phone form
- `GET /watches` – Watch dashboard
- `GET /watches/create` – Create watch form

All CRUD operations are available via the UI for both phones and watches.

---

## Notes

- This project is intended for learning and training purposes.
- Authentication and authorization are not enabled; all routes are public.
