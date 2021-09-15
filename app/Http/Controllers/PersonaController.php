<?php

namespace App\Http\Controllers;
use App\Models\VinPersona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
 public function index()
 {
 return VinPersona::all();
 }
 public function show($id)
 {
 return VinPersona::find($id);
 }
}
