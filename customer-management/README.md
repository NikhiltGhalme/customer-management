# ImpactGuru Mini CRM

A Customer Management System built with Laravel, featuring Authentication, RBAC, Customer & Order Management, Dashboard, and REST API.

## Project Description
This application helps manage customers, their orders, and access roles (Admin, Staff). It demonstrates Laravel fundamentals including authentication, routing, Eloquent ORM, Blade templating, file uploads, middleware, notifications, and REST APIs.

## Installation Steps
1. Clone the repository.
2. Run `composer install`.
3. Run `npm install && npm run build`.
4. Copy `.env.example` to `.env` and configure database.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate --seed`.
7. Serve the application: `php artisan serve`.

## Feature List
- **Authentication**: Login, Registration, Password Reset (via Breeze).
- **RBAC**: Admin (full access) and Staff (restricted access) roles.
- **Customer Management**: CRUD, Profile Image Upload, Pagination.
- **Order Management**: CRUD, Status Tracking, Email Notifications.
- **Dashboard**: Key statistics and recent customers.
- **REST API**: Secure API for customer management using Sanctum.
- **Search & Filtering**: Filter orders by status.

## Role Permissions Summary
- **Admin**: Can manage all modules (Customers, Orders, Users). Can delete data.
- **Staff**: Can view/add/edit customers and orders. Cannot delete users or data.

## API Documentation
- `GET /api/customers`: List customers.
- `POST /api/customers`: Create customer.
- `GET /api/customers/{id}`: View customer.
- `PUT /api/customers/{id}`: Update customer (Admin only).
- `DELETE /api/customers/{id}`: Delete customer (Admin only).
