<?php
require 'vendor/autoload.php';
use Carbon\Carbon;

echo "Hola Mari Carmen";
echo "Nueva linea";

$fecha = Carbon::now();
echo $fecha->format('d-m-Y');