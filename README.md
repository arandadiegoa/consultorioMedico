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

## APP
Al iniciar la aplicación, se presenta un sistema de registro de pacientes. Una vez completado el registro, el usuario es redirigido automáticamente al listado de pacientes registrados.
También es posible agendar turnos, con un proceso similar: al finalizar la carga del turno se muestra el listado correspondiente.
Tanto los pacientes como los turnos pueden ser editados o eliminados desde sus respectivas listas.

## Dashboard
Se crea un panel para poder visualizar los pacientes con sus turnos.

Cuenta con acceso directo a pacientes y turnos.
