<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Proyect

Desarrollo de una aplicación web para la gestión de pacientes y turnos en un consultorio médico.

## Conection BD

Se encuentra en el archivo `.env.example`.

Se adjunta la base de datos utilizada en el archivo `database/bd`.

## 🛠️ Tecnologías Utilizadas

- **Laravel**: Framework principal del proyecto.
- **PHP**: Lenguaje de programación backend.
- **Blade**: Motor de plantillas para las vistas.
- **Laragon**: Entorno de desarrollo local.
- **MySQL**: Base de datos relacional.
- **Migraciones**: Gestión de estructura de base de datos.

---

🖥️ Vista de la Aplicación

Al iniciar la aplicación:

Se muestra el formulario de registro de pacientes.

Tras registrar un paciente, se redirige automáticamente al listado de pacientes.

Desde el menú también se puede acceder a la agenda de turnos, con flujo similar: carga ➝ listado.

Los registros de pacientes y turnos se pueden editar o eliminar desde sus respectivas listas.

Se crea un panel para poder visualizar los pacientes con sus turnos.

---
✅ Requisitos

PHP >= 8.x

Composer

MySQL

Laragon o equivalente (XAMPP, MAMP, etc.)
