
<?php
 
use Illuminate\Support\Facades\Route;
 Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/categorias', function () {

    $categorias = json_decode(json_encode([

        ["codigo"=>"A02","categoria"=>"Medicamentos para el tratamiento de Trastornos causados por Ácidos"],

        ["codigo"=>"A03","categoria"=>"Medicamentos contra Trastornos Funcionales Gastrointestinales"],

        ["codigo"=>"A04","categoria"=>"Medicamentos Antieméticos y Antinauseosos"],

        ["codigo"=>"A06","categoria"=>"Medicamentos para el Estreñimiento"],

        ["codigo"=>"A07","categoria"=>"Medicamentos Antidiarreicos, Antiinflamatorios y Antiinfecciosos Intestinales"],

        ["codigo"=>"A10","categoria"=>"Medicamentos usados en Diabetes"],

        ["codigo"=>"A11","categoria"=>"Vitaminas"],

        ["codigo"=>"A12","categoria"=>"Suplementos Minerales"]

    ]));

    $html="<h1>Categorías</h1>";

    $html.="<table border='1' cellpadding='8'>";

    $html.="<tr><th>Código</th><th>Categoría</th></tr>";

    foreach($categorias as $categoria){

        $html.="<tr>";

        $html.="<td>$categoria->codigo</td>";

        $html.="<td>$categoria->categoria</td>";

        $html.="</tr>";

    }

    $html.="</table>";

    return $html;

});

Route::get('/medicamentos', function () {

    $medicamentos = json_decode(json_encode([

["codigo"=>"A02BA02","numero"=>1,"nombre"=>"Ranitidina","dosis"=>"50 mg","forma"=>"Líquidos parenterales","via"=>"IM/IV"],

["codigo"=>"A02BA03","numero"=>2,"nombre"=>"Famotidina","dosis"=>"40 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A02BC01","numero"=>3,"nombre"=>"Omeprazol","dosis"=>"20 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A02BC01","numero"=>4,"nombre"=>"Omeprazol","dosis"=>"40 mg","forma"=>"Sólidos parenterales","via"=>"IV"],

["codigo"=>"A03BA01","numero"=>1,"nombre"=>"Atropina (Sulfato)","dosis"=>"0.5–1 mg/mL","forma"=>"Líquidos parenterales","via"=>"SC/IM/IV"],

["codigo"=>"A03BA03","numero"=>2,"nombre"=>"Hiosciamina","dosis"=>"10 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A03BA03","numero"=>3,"nombre"=>"Hiosciamina","dosis"=>"20 mg/mL","forma"=>"Líquidos parenterales","via"=>"IM/IV"],

["codigo"=>"A03FA01","numero"=>4,"nombre"=>"Metoclopramida","dosis"=>"5 mg/mL","forma"=>"Líquidos parenterales","via"=>"IM/IV"],

["codigo"=>"A03FA01","numero"=>5,"nombre"=>"Metoclopramida","dosis"=>"10 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A04AA01","numero"=>1,"nombre"=>"Ondansetron","dosis"=>"8 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A04AA01","numero"=>2,"nombre"=>"Ondansetron","dosis"=>"2 mg/mL","forma"=>"Líquidos parenterales","via"=>"IV"],

["codigo"=>"A04AA02","numero"=>3,"nombre"=>"Granisetron","dosis"=>"1 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"A04AA02","numero"=>4,"nombre"=>"Granisetron","dosis"=>"1 mg/mL","forma"=>"Líquidos parenterales","via"=>"IV"],

["codigo"=>"R06AA11","numero"=>5,"nombre"=>"Dimenhidrinato","dosis"=>"50 mg","forma"=>"Sólidos orales","via"=>"VO"],

["codigo"=>"R06AA11","numero"=>6,"nombre"=>"Dimenhidrinato","dosis"=>"50 mg/mL","forma"=>"Líquidos parenterales","via"=>"IM/IV"]

]));

$html="<h1>Medicamentos</h1>";

$html.="<table border='1' cellpadding='8'>";

$html.="<tr>

<th>Código</th>

<th>N°</th>

<th>Nombre</th>

<th>Dosis</th>

<th>Forma farmacéutica</th>

<th>Vía</th>

</tr>";

foreach($medicamentos as $m){

$html.="<tr>";

$html.="<td>$m->codigo</td>";

$html.="<td>$m->numero</td>";

$html.="<td>$m->nombre</td>";

$html.="<td>$m->dosis</td>";

$html.="<td>$m->forma</td>";

$html.="<td>$m->via</td>";

$html.="</tr>";

}

$html.="</table>";

return $html;

});

Route::get('/clientes/vip', function () {
    $clientes = [
        (object)['id' => 1, 'nombre' => 'Ana Torres', 'telefono' => '7000-1111', 'puntos_altruistas' => 150],
        (object)['id' => 2, 'nombre' => 'Carlos Pérez', 'telefono' => '7000-2222', 'puntos_altruistas' => 320],
        (object)['id' => 3, 'nombre' => 'Lucía Gómez', 'telefono' => '7000-3333', 'puntos_altruistas' => 90],
    ];
 
    $html = "<h1>Catálogo de Clientes VIP</h1>";
    $html .= "<table border='1' cellpadding='5'>";
    $html .= "<tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Puntos Altruistas</th></tr>";
    foreach ($clientes as $cliente) {
        $html .= "<tr>";
        $html .= "<td>{$cliente->id}</td>";
        $html .= "<td>{$cliente->nombre}</td>";
        $html .= "<td>{$cliente->telefono}</td>";
        $html .= "<td>{$cliente->puntos_altruistas}</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
 
    echo $html;
});
 

Route::get('/proveedores/internacionales', function () {
    $proveedores = [
        (object)['empresa' => 'PharmaCorp', 'pais_origen' => 'Alemania', 'medicamento_principal' => 'Insulina', 'tiempo_entrega_dias' => 10],
        (object)['empresa' => 'MediGlobal', 'pais_origen' => 'India', 'medicamento_principal' => 'Paracetamol', 'tiempo_entrega_dias' => 20],
        (object)['empresa' => 'BioSalud', 'pais_origen' => 'Brasil', 'medicamento_principal' => 'Amoxicilina', 'tiempo_entrega_dias' => 7],
    ];
 
    $html = "<h1>Proveedores Internacionales</h1>";
    $html .= "<table border='1' cellpadding='5'>";
    $html .= "<tr><th>Empresa</th><th>País de Origen</th><th>Medicamento Principal</th><th>Tiempo de Entrega (días)</th></tr>";
    foreach ($proveedores as $p) {
        $advertencia = $p->tiempo_entrega_dias > 15 ? " (Demora Crítica)" : "";
        $html .= "<tr>";
        $html .= "<td>{$p->empresa}</td>";
        $html .= "<td>{$p->pais_origen}</td>";
        $html .= "<td>{$p->medicamento_principal}</td>";
        $html .= "<td>{$p->tiempo_entrega_dias}{$advertencia}</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
 
    echo $html;
});
 
Route::get('/lotes/inventario', function () {
    $lotes = [
        (object)['codigo_lote' => 'L001', 'nombre_medicamento' => 'Vacuna X', 'cantidad_cajas' => 50, 'temperatura_requerida_celsius' => 4],
        (object)['codigo_lote' => 'L002', 'nombre_medicamento' => 'Jarabe Tos', 'cantidad_cajas' => 100, 'temperatura_requerida_celsius' => 20],
        (object)['codigo_lote' => 'L003', 'nombre_medicamento' => 'Insulina', 'cantidad_cajas' => 30, 'temperatura_requerida_celsius' => 3],
    ];
 
    $html = "<h1>Inventario de Lotes</h1>";
    $html .= "<table border='1' cellpadding='5'>";
    $html .= "<tr><th>Código de Lote</th><th>Medicamento</th><th>Cantidad de Cajas</th><th>Temperatura Requerida (°C)</th></tr>";
    foreach ($lotes as $lote) {
        $etiquetaFrio = $lote->temperatura_requerida_celsius <= 5 ? " [Requiere Cadena de Frío]" : "";
        $html .= "<tr>";
        $html .= "<td>{$lote->codigo_lote}</td>";
        $html .= "<td>{$lote->nombre_medicamento}{$etiquetaFrio}</td>";
        $html .= "<td>{$lote->cantidad_cajas}</td>";
        $html .= "<td>{$lote->temperatura_requerida_celsius}</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
 
    echo $html;
});
 
