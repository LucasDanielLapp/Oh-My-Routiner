"use strict";
//console
console.log("Hello world");
//calst
//Recordemos que querySelectorAll evuelve un array
const buttonsAdd = document.querySelectorAll('.addInput');
//asi selecionamos un elemento dentro de una table 
const elementosDiv = document.querySelectorAll('td > .table');
const rowOne = document.querySelector('.rowOne');
const tableNum = document.querySelector('.table-num');
const rowAndColumn = document.querySelector('.rowAndColumn');
//contar los elementos seleccionado
let taskNum = 5;
let hourNum = 1;
//
rowAndColumn.innerHTML += '<input name="taskNum" value="' + taskNum + '">';
rowAndColumn.innerHTML += '<input name="hourNum" value="' + hourNum + '">';
rowAndColumn.style.opacity = 0;
//cada 5 taskNum hay un un horario

function crearInput(){
     elementosDiv.forEach(elemento => {
          taskNum += 1;
         // Aquí puedes realizar operaciones con cada elemento seleccionado, por ejemplo:
         // Agregar contenido, modificar estilos, etc.
         elemento.innerHTML +='<td> <input type="text" name="taskNum'+taskNum+'" placeholder="Task '+ taskNum +'" class="Task '+ taskNum +'"</td>';
     });
     hourNum += 1;
     tableNum.innerHTML +='<td><input type="time" name="hour'+hourNum+'" placeholder="06:00/07:00" class="hour' + hourNum +'"</td>';     
     rowAndColumn.innerHTML = '<input name="taskNum" value="'+ taskNum + '">';
     rowAndColumn.innerHTML += '<input name="hourNum" value="' + hourNum + '">';
     rowAndColumn.style.opacity = 0;
     return taskNum,hourNum;
}
//code
buttonsAdd.forEach(button => {
    button.addEventListener('click', () => {
        crearInput()
    });
});
//Enviamos la cantidad de columns and rows


