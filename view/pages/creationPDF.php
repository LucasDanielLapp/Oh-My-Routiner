<main>
    <form action="index.php" method="GET">
    <h1 name="cd">Tu PDF</h1>

        <table border="1"  class="container table table-dark">
            <tr> <!-- Primera fila -->
                <td>hora</td>
                <td>Lunes</td>
                <td>Martes</td>
                <td>Miercoles</td>
                <td>Jueves</td>
                <td>Viernes</td>
            </tr>
            <tr class="rowOne"> <!-- Segunda fila -->
                <td><input type="time" class="hour" name="columns1"></td>
                <td><input type="text" placeholder="Task 1" class="Task Task1" name="rows1"></td>
                <td><input type="text" placeholder="Task 2" class="Task Task2" name="rows2"></td>
                <td><input type="text" placeholder="Task 3" class="Task Task3" name="rows3"></td>
                <td><input type="text" placeholder="Task 4" class="Task Task4" name="rows4"></td>
                <td><input type="text" placeholder="Task 5" class="Task Task5" name="rows5"></td>
            </tr>
            <tr class="rowTwo"> <!-- Tercera fila -->
                <td class="table-num"></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
            </tr>
        </table>
        <div class="conteiner">
            <button type="button" class="addInput btn btn-success" name="#" id="#" >+</button>
            <button type="submit" class="listo  btn btn-success">¡ Listo !</button>
        </div>
        <div class="rowAndColumn"></div>
    </form>
    <script src="resource/js/creationPDF.js"></script>
</main>