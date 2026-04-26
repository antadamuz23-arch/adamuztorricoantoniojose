<?php

/**
 * Scrip práctica ejercicio DAW FFEOE para generar documentacíon con phpDocumentor.
 * * Este arcivo contiene dos funciones para utilizar las etiquetas básicas de documentación y el 
 * uso de DocBlocks y etiquetas de documentación.
 * 
 * @author Antonio José Adamuz Torrico <antadamuz23@gmail.com>
 * @version 1.0
 * @package FuncionesMatemáticas
 */

/**
 * Cálcula la suma de 2 números.
 * 
 * @param int $num1 Primer sumando
 * @param int $num2 Segundo sumando
 * @return int La suma de los 2 sumandos
 */
function sumar(int $num1, int $num2) {
    return $num1 + $num2;
}

/**
 * Cálcula el área de un círculo.
 * @param float $radio Radio del círculo en unidades métricas.
 * @return float Área calculada del círculo
 * *@internal  NOTA PARA DESARROLLADORES: Se utiliza la constante M_PI de PHP
 * para asegurar la máxima precisión decimal.
 */
function calcularAreaCirculo(float $radio) {
    return M_PI * pow($radio, 2);
}
