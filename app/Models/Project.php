<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ["name", "slug", "image", "miniature", "client", "description", "localisation", "budget", "date_realisation", "capacite", "choix_site", "order_service", "fabrication_montage", "travaux_site", "mise_place", "demarrage_mise_service"];
}
