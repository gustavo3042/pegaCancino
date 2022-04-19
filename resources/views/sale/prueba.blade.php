<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="Demostrar capacidades de plugin de
            impresión para impresora térmica en JavaScript">
    <meta name="author" content="Parzibyte">
    <title>Imprimir texto con acentos en impresora térmica - By Parzibyte</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<main role="main" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Imprimir texto con acentos</h1>
            <p>Imprimir texto que puede llevar acentos o letras ñ, entre otros caracteres especiales</p>
            <a class="mb-2 btn btn-info btn-sm" href="../index.html">Ir al índice de los ejemplos</a>
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <select class="form-control" id="listaDeImpresoras"></select>
            </div>
            <div class="form-group">
                <button class="btn btn-success" id="btnImprimir">Imprimir
                    en impresora seleccionada
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h2>Log</h2>
            <button class="btn btn-warning btn-sm" id="btnLimpiarLog">Limpiar
                log
            </button>
            <pre id="estado"></pre>
        </div>
    </div>
</main>
<!-- Cargar el script conector -->
<script src="{{asset('js/ConectorPlugin.js')}}"></script>
<!-- Cargar el script del ejemplo -->
<script type="text/javascript">

const $estado = document.querySelector("#estado"),
    $listaDeImpresoras = document.querySelector("#listaDeImpresoras"),
    $btnLimpiarLog = document.querySelector("#btnLimpiarLog"),
    $btnImprimir = document.querySelector("#btnImprimir");

const obtenerListaDeImpresoras = () => {
    loguear("Cargando lista...");
    ConectorPlugin.obtenerImpresoras()
        .then(listaDeImpresoras => {
            loguear("Lista cargada");
            listaDeImpresoras.forEach(nombreImpresora => {
                const option = document.createElement('option');
                option.value = option.text = nombreImpresora;
                $listaDeImpresoras.appendChild(option);
            })
        })
        .catch(() => {
            loguear("Error obteniendo impresoras. Asegúrese de que el plugin se está ejecutando");
        });
}

const loguear = texto => $estado.textContent += (new Date()).toLocaleString() + " " + texto + "\n";
const limpiarLog = () => $estado.textContent = "";

$btnLimpiarLog.addEventListener("click", limpiarLog);


$btnImprimir.addEventListener("click", async () => {
    let nombreImpresora = $listaDeImpresoras.value;
    if (!nombreImpresora) return loguear("Selecciona una impresora");
    const cadenaConAcentos = "María José come Ñampi\n";
    const respuestaAlImprimir = await new ConectorPlugin()
        .texto("Tratando de imprimir acentos sin forzar:\n")
        .texto(cadenaConAcentos)
        .texto("Ahora tratando de imprimir acentos, pero forzando:\n")
        /*
        Nota: solo hace falta llamar a "textoConAcentos" una vez, eso "habilita" los acentos
        y las siguientes llamadas a "text" ya deben soportar acentos
        */
        .textoConAcentos(cadenaConAcentos)
        .texto("Texto con acentos y centrado:")
        .establecerJustificacion(ConectorPlugin.Constantes.AlineacionCentro)
        .texto(cadenaConAcentos)
        .feed(3) // Dejar 3 saltos de línea. Esto es muy importante
        .cortar()
        .imprimirEn(nombreImpresora); // Siempre debes invocar a "imprimirEn" al final, pasando el nombre de la impresora
    if (respuestaAlImprimir === true) {
        loguear("Impreso correctamente");
    } else {
        loguear("Error. La respuesta es: " + respuestaAlImprimir);
    }
});

obtenerListaDeImpresoras();


</script>
</body>

</html>