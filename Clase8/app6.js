//Comparar tres numeros, cual es mayor, menor
const uno = parseInt(prompt("Numero uno: "))
const dos = parseInt(prompt("Numero dos: "))
const tres = parseInt(prompt("Numero tres: "))

//Vemos cual es mayor
if(uno === dos === tres){
    console.log("Los tres numeros son iguales")
} else {
    //Validamos cual es el mayor
    if(uno > dos && uno > tres){
        console.log("El numero uno es el mayor")
    } else if(dos > uno && dos > tres){
        console.log("El numero dos es el mayor")
    } else if(tres > uno && tres > dos){
        console.log("El numero tres es el mayor")
    }

    //Validamos cual es el mayor
    if(uno < dos && uno < tres){
        console.log("El numero uno es el menor")
    } else if(dos < uno && dos < tres){
        console.log("El numero dos es el menor")
    } else if(tres < uno && tres < dos){
        console.log("El numero tres es el menor")
    }

    //Validamos si son iguales
    if(uno === dos){
        console.log("El numero uno y el dos son iguales")
    } else if(uno === tres){
        console.log("El numero uno y tres son iguales")
    } else if(dos === tres){
        console.log("El numero dos y tres son iguales")
    } else {
        console.log("No hay numeros iguales")
    }
}