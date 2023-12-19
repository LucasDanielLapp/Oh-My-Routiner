<main>
    <form action="index.php" method="GET">
    <h1 name="cd">Tu PDF</h1>

        <table border="1">
            <tr> <!-- Primera fila -->
                <td>hora</td>
                <td>Lunes</td>
                <td>Martes</td>
                <td>Miercoles</td>
                <td>Jueves</td>
                <td>Viernes</td>
            </tr>
            <tr class="rowOne"> <!-- Segunda fila -->
                <td><input type="time" class="hour" name="hour1"></td>
                <td><input type="text" placeholder="Task 1" class="Task Task1" name="Task1"></td>
                <td><input type="text" placeholder="Task 2" class="Task Task2" name="Task2"></td>
                <td><input type="text" placeholder="Task 3" class="Task Task3" name="Task3"></td>
                <td><input type="text" placeholder="Task 4" class="Task Task4" name="Task4"></td>
                <td><input type="text" placeholder="Task 5" class="Task Task5" name="Task5"></td>
            </tr>
            <tr class="rowTwo"> <!-- Tercera fila -->
                <td><div class="table-num"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
                <td><div class="table"></div></td>
            </tr>
        </table>
        <button type="button" class="addInput" name="#" id="#">+</button>
        <button type="submit" class="listo">¡ Listo !</button>

        <div class="rowAndColumn"></div>
    </form>
    <script src="resource/js/creationPDF.js"></script>
</main>