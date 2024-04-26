<?php
include('Header.php');
?>

<div class="container bg-secondary bg-gradient rounded">
    <div class="m-5 ">
        <h1 class="text-center">Bienvenido a la Uefa Champions League</h1>
        <h2 class="text-center">Porfavor Ingresa tus datos personales</h2>
    </div>

    <div class="m-5 ">
        <form method="post" action="Inicio.php">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Francisco">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="Apellidos" class="form-label">Apellido</label>
                        <input type="text" name="Apellido" class="form-control" id="Apellidos" placeholder="Rivas">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Numero de Telefono</label>
                        <input type="number" name="telefono" class="form-control" id="telefono" placeholder="xxxx - xxxx">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="pais" class="form-label">País</label>
                        <input type="text" name="pais" class="form-control" id="pais" placeholder="Singapur">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="@gmail.com">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">Establezca una Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="x x x x x">
                    </div>
                </div>
                <div class="col-4">
                    <label for="sexo" class="form-label">Seleccione su Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="masculino" id="masculino">
                        <label class="form-check-label" for="masculino">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="femenino" id="femenino">
                        <label class="form-check-label" for="femenino">
                            Femenino
                        </label>
                    </div>
                </div>

                <div class="col-4 p-2 mx-auto">
                    <label for="equipo" class="form-label">Seleccione el Equipo con el que más se identifica</label>
                    <select name="equipo" class="bg-warning rounded" placeholder="Equipo">
                        <option value="value1" selected>Elegir a Mi Equipo</option>
                        <option value="value2">Antwerp</option>
                        <option value="value3">Arsenal</option>
                        <option value="value4">Atletico de Madrid</option>
                        <option value="value5">FC Barcelona</option>
                        <option value="value6">Bayer Münich</option>
                        <option value="value7">Benfica</option>
                        <option value="value8">Braga</option>
                        <option value="value9">Copenhagen</option>
                        <option value="value10">Crevena Zvezda</option>
                        <option value="value11">Borusia Dortmund</option>
                        <option value="value12">Feyenord</option>
                        <option value="value13">Galatasaray</option>
                        <option value="value14">Inter de Milán</option>
                        <option value="value15">Lazio</option>
                        <option value="value16">Leipzig</option>
                        <option value="value17">Lens</option>
                        <option value="value18">Manchester City</option>
                        <option value="value19">Manchester United</option>
                        <option value="value20">Milan</option>
                        <option value="value21">Napoli</option>
                        <option value="value22">Newcastle</option>
                        <option value="value23">Porto</option>
                        <option value="value24">PSG</option>
                        <option value="value25">PSV</option>
                        <option value="value26">Real Madrid</option>
                        <option value="value27">Real Sociedad</option>
                        <option value="value28">Salzburg</option>
                        <option value="value29">Sevilla</option>
                        <option value="value30">Shaktar Donestk</option>
                        <option value="value31">Union Berlín</option>
                        <option value="value32">Young Boys</option>
                    </select>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4 btn-lg p-2 mx-auto"> <input type="submit" value="Enviar" class="bg-danger rounded"></div>
            </div>
        </form>
    </div>
</div>

<?php
include('footer.php');

?>