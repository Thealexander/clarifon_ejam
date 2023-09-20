<?php
// Obtén el ancho de la ventana del navegador
$width = $_SERVER['HTTP_USER_AGENT'];

// Define las rutas de tus páginas móvil y de escritorio (reemplaza con tus rutas)
$rutaMovil = 'mobile';
$rutaEscritorio = 'desktop';

// Redirige según el ancho de la ventana
if ($width <= 360) {
    header("Location: $rutaMovil");
    exit();
} else {
    header("Location: $rutaEscritorio");
    exit();
}
