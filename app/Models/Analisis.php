<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nombre_imagen', 'resultado'];

    protected $table = 'analisis'; // 👈 Forzamos el nombre correcto

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

