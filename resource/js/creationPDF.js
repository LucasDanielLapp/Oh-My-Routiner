"use strict";
//console
console.log("Hello world");
//calst
//Recordemos que querySelectorAll evuelve un array
//asi selecionamos un elemento dentro de una table 
const elementosDiv = document.querySelectorAll('td > .table');
const rowOne = document.querySelector('.rowOne');
const tableNum = document.querySelector('.table-num');
const rowAndColumn = document.querySelector('.rowAndColumn');


const buttonsAdd = document.querySelectorAll('.addInput');

//contar los elementos seleccionado
let rows = 5;
let columns = 1;
//
rowAndColumn.innerHTML += '<input name="rows" value="' + rows + '">';
rowAndColumn.innerHTML += '<input name="columns" value="' + columns + '">';
rowAndColumn.style.opacity = 0;
//cada 5 taskNum hay un un horario

function crearInput(){
     elementosDiv.forEach(elemento => {
          rows += 1;
         // Aquí puedes realizar operaciones con cada elemento seleccionado, por ejemplo:
         // Agregar contenido, modificar estilos, etc.
         elemento.innerHTML +='<td><input type="text" name="rows'+rows+'" placeholder="Task '+ rows +'" class="Task"></td>';
     });
     columns += 1;
     tableNum.innerHTML +='<td><input type="time" name="columns'+columns+'"></td>';     
     //input que me dicen la catidad no mas
     rowAndColumn.innerHTML = '<input name="rows" value="'+ rows + '">';
     rowAndColumn.innerHTML += '<input name="columns" value="'+ columns+'">';
     rowAndColumn.style.opacity = 0;
     return rows,columns;
}
//code
buttonsAdd.forEach(button => {
    button.addEventListener('click', () => {
        crearInput()
    });
});
//Enviamos la cantidad de columns and rows


