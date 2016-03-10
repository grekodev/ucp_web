<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas</title>
</head>
<body>
<form action="">

    <h1><marquee direction="right">
         "LIZ PEREZ LA TORRE"
    </marquee></h1>

    <!--Carlita-->
    <table width="70%" align="center" border="2">
        <thead>
        <tr>
            <td align="center" colspan="7">
                <h1>FORMULARIO</h1>
            </td>
        </tr>
        </thead>
        </tbody>
        <tr>
            <td align="center" rowspan="6">Bloque 1</td>
            <td align="center" >Nombres</td>
            <td colspan="2"><input placeholder="NOMBRE">
            </td>
            <td align="center">Apellidos</td>
            <td colspan="2"><input placeholder="APELLIDO">
            </td>

        </tr>
        <tr>

            <td align="center">Email</td>
            <td><input placeholder="EMAIL">
            </td>
            <td align="center">Cumpleaños</td>
            <td colspan="3"><input type="date">
            </td>


        </tr>
        <tr>

            <td rowspan="2">Preguntas</td>

            <td colspan="5"><input type="checkbox" name="Opcion1" id="Opcion1">
                <label for="Opcion1">Option1</label>
                <input type="checkbox" name="Opcion1" id="Opcion2">
                <label for="Opcion2">Option2</label>
                <input type="checkbox" name="Opcion1" id="Opcion3">
                <label for="Opcion3">Option3</label>
                <input type="checkbox" name="Opcion1" id="Opcion4">
                <label for="Option4">Option4</label>
                <input type="checkbox" name="Opcion1" id="Opcion5">
                <label for="Opcion5">Option5</label>
                <input type="checkbox" name="Opcion1" id="Opcion6">
                <label for="Opcion6">Option6</label>
        </tr>
        <tr>


            <td colspan="5">
                <input type="radio" name="Opcion2" id="Opcion11">
                <label for="Opcion11">Option1</label>
                <input type="radio" name="Opcion2" id="Opcion12">
                <label for="Opcion12">Option2</label>
                <input type="radio" name="Opcion2" id="Opcion13">
                <label for="Opcion13">Option3</label>
                <input type="radio" name="Opcion2" id="Opcion14">
                <label for="Opcion14">Option4</label>
                <input type="radio" name="Opcion2" id="Opcion15">
                <label for="Opcion15">Option5</label>
                <input type="radio" name="Opcion2" id="Opcion16">
                <label for="Opcion16">Option6</label>
            </td>

        </tr>
        <tr>

            <td>Categoria</td>
            <td align="center"><select>
                <optgroup label="Pera">
                    <option value="">Pera</option>
                    <option value="">Uvas</option>
                    <option value="">Sandia</option>
                    <option value="">Manzana</option>
                </optgroup>
            </select></td>
            <td colspan="4">
                <details open="">
                <summary>''Resumen''</summary>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda blanditiis debitis eaque, exercitationem inventore quisquam tempore? Amet deserunt excepturi iste maxime officia recusandae sint vel, voluptates? Atque, nemo, nostrum.
            </details>
            </td>

        </tr>
        <tr>

            <td><mark style="background-color:yellow">
                Etiqueta Marcada
            </mark></td>
            <td><mark style="background-color:lightskyblue ">Etiqueta Marcada</mark></td>
            <td align="center" colspan="2">
                <datalist id="lista">
                    <option value="resumen">

                    </option>

                    <option value="sabe">

                    </option>

                    <option value="Item">

                    </option>

                </datalist>
                <input list="lista">
            </td>

            <td align="center" colspan="2">
                <progress value="10" max="100" min="0">

            </progress>
                </meter>
                <br>   "Descargado"
            </td>

        </tr>
        <tr>
            <td rowspan="6" align="center">Bloque 2</td>
            <td rowspan="6">
                <figure>
                    <img src="minion-mujer.jpg" alt="Imagen" title="titulo de imagen">
                    <figcaption><center> IMAGEN DE LOGO </center></figcaption>
                </figure>
            </td>
            <td align="center">Item1</td>
            <td align="center" colspan="3"><input type="range" value="50">
            </td>
            <td align="center">Espacio</td>
        </tr>
        <tr>


            <td align="center">Item2</td>
            <td colspan="2"><fieldset>
                <legend>Datos personales</legend>
                <textarea  rows="5" cols="30" placeholder="">

                </textarea>

            </fieldset></td>
            <td>

            </td>
            <td align="center"><p draggable="true">Parrafo Draggable</p>
            </td>
        </tr>
        <tr>

            <td align="center">Item3</td>
            <td colspan="2">
                <table border="1" width="100%">
                    <tbody>
                    <tr>
                        <td colspan="2" align="center">1</td>
                    </tr>
                    <tr>
                        <td align="center">
                            2
                        </td>
                        <td align="center">
                            3
                        </td>
                    </tr>
                    </tbody></table>
                <!--Carlita-->
            </td>
            <td align="center">Espacio en Blanco</td>
            <td align="center">Espacio en Blanco</td>
        </tr>
        <tr>


            <td align="center">Item4</td>
            <td colspan="6" align="center"><p contenteditable="true">
                parrafo editable Lorem ipurem dolor sit amet , consectetur adipisicing elit. voluptalum corrupti aliquid optio unde ducimos .deleniti molestias mgnam nesciun,impedit perspiciatis?
            </p></td>
        </tr>
        <tr>

        </tr>
        <tr>


            <td colspan="7" align="center"><input type="submit"></td>

        </tr>

        </tbody>



    </table>


</form>

</body>
</html>