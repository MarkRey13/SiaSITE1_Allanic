<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'allanicsia1';
    // column sa table
        protected $fillable = [
        'username', 'password'
         ];

    public $timestaps = false;

    protected $primaryKey = 'id';
 }