<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Los atributos que se pueden asignar masivamente (CRUD).
     * Se han añadido 'password_plain' y 'profesion' para que Laravel permita guardarlos.
     */
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'password_plain', // Necesario para el "ojo" en la vista Ver
        'profesion',
    ];

    /**
     * Los atributos que deben permanecer ocultos en listados JSON.
     * Mantenemos ocultos los tokens y las contraseñas por seguridad.
     */
    protected $hidden = [
        'password',
        'password_plain',
        'remember_token',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     * El 'hashed' asegura que Laravel maneje la encriptación automáticamente.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}