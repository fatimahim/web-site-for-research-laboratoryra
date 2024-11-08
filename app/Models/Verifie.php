<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Verifie extends Model
{
    use HasFactory;
  
    public $table = "verifies";
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'id',
        'token',
    ];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}