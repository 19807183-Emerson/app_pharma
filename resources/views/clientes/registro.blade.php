<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: radial-gradient(circle at top left, #2c2f6f, #14152b 70%);
    margin: 0;
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.tarjeta {
    background: rgba(30, 32, 60, 0.9);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 35px;
    max-width: 560px;
    width: 100%;
    color: #eaeaf5;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
}

.encabezado {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 25px;
}

.encabezado .icono {
    font-size: 2rem;
    background: rgba(80, 200, 180, 0.15);
    padding: 10px;
    border-radius: 10px;
}

.encabezado h1 {
    margin: 0 0 5px 0;
    font-size: 1.4rem;
}

.encabezado p {
    margin: 0;
    font-size: 0.85rem;
    color: #a9abc9;
}

.fila {
    display: flex;
    gap: 20px;
    margin-bottom: 18px;
}

.fila-simple {
    max-width: 48%;
}

.campo {
    flex: 1;
    display: flex;
    flex-direction: column;
}

label {
    font-size: 0.8rem;
    margin-bottom: 6px;
    color: #c4c6e0;
}

input,
select,
textarea {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 8px;
    padding: 10px 12px;
    color: #c4c6e0;
    font-size: 0.9rem;
    font-family: inherit;
}

input::placeholder,
textarea::placeholder {
    color: #8385a6;
}

input:focus,
select:focus,
textarea:focus {
    outline: none;
    border-color: #4fd1c5;
}

textarea {
    resize: none;
}

select option {
    color: #1a1c33;
    background-color: #ffffff;
}

select option:disabled {
    color: #8385a6;
}

.botones {
    display: flex;
    justify-self: center;
    gap: 15px;
    margin-top: 10px;
    
}

.btn-guardar {
    background: #2dd4bf;
    color: #0b1220;
    border: none;
    padding: 12px 22px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
}

.btn-guardar:hover {
    background: #22b8a4;
}

.btn-cancelar {
    background: transparent;
    color: #c4c6e0;
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 12px 22px;
    border-radius: 8px;
    cursor: pointer;
}

.btn-cancelar:hover {
    border-color: #fff;
    color: #fff;
}

@media (max-width: 500px) {
    .fila {
        flex-direction: column;
        gap: 12px;
    }
    .fila-simple {
        max-width: 100%;
    }
}
</style>
<body>

    <div class="tarjeta">

        <div class="encabezado">
            <span class="icono">🧑‍💼</span>
            <div>
                <h1>Registro de Cliente</h1>
                <p>Ingrese los detalles para crear un nuevo registro de cliente.</p>
            </div>
        </div>

        <form>
            <div class="fila">
                <div class="campo">
                    <label for="codigo">Código del Cliente</label>
                    <input type="text" id="codigo" name="codigo" placeholder="CL0001">
                </div>

                <div class="campo">
                    <label for="telefono">Teléfono de Contacto</label>
                    <input type="text" id="telefono" name="telefono" placeholder="+503 7123 4567">
                </div>
            </div>

            <div class="fila">
                <div class="campo">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ana María García">
                </div>

                <div class="campo">
                    <label for="municipio">Municipio</label>
                    <select id="municipio" name="municipio">
                        <option value="" disabled selected>Seleccionar Municipio...</option>
                        <option value="apopa">Apopa</option>
                        <option value="san_salvador">San Salvador</option>
                        <option value="soyapango">Soyapango</option>
                    </select>
                </div>
            </div>

            <div class="fila">
                <div class="campo">
                    <label for="direccion">Dirección Completa</label>
                    <textarea id="direccion" name="direccion" rows="2" placeholder="Av. Las Camelias, No. 123"></textarea>
                </div>

                <div class="campo">
                    <label for="distrito">Distrito</label>
                    <select id="distrito" name="distrito">
                        <option value="" disabled selected>Seleccionar Distrito...</option>
                        <option value="distrito1">Distrito 1</option>
                        <option value="distrito2">Distrito 2</option>
                    </select>
                </div>
            </div>

            <div class="fila fila-simple">
                <div class="campo">
                    <label for="departamento">Departamento</label>
                    <select id="departamento" name="departamento">
                        <option value="" disabled selected>Seleccionar Departamento...</option>
                        <option value="san_salvador">San Salvador</option>
                        <option value="la_libertad">La Libertad</option>
                        <option value="santa_ana">Santa Ana</option>
                    </select>
                </div>
            </div>

            <div class="botones">
                <button type="submit" class="btn-guardar">Guardar Registro 💾</button>
                <button type="button" class="btn-cancelar">Cancelar</button>
            </div>
        </form>

    </div>

</body>
</html>