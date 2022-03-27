import cone from './index.js';
console.log("index 2 working");
console.log(cone);
import {rat as cat,motor} from './index.js';
console.log(cat,motor);
console.log("hey");

//PROMISES
let p = new Promise((resolve, reject) => {
    let a = "maybe";
    if(a == "yes"){
        resolve("delivered");
    }
    else if(a == "maybe"){
        resolve("i dont know");
    }
    else{
        reject('Failed');
    }
})

p.then((message)=>{
    console.log(message)
}).then((message)=>{
    console.log(message);
}).catch((message)=>{
    console.log(message)
})

//PROMISE ALL, PROMISE RACE
// let a = 1, b = 1;
// let p2 = new Promise((resolve, reject) => {
//     if(a){
//         resolve('yes');
//     }else{
//         reject('no');
//     }
// })
// let p3 = new Promise((resolve, reject) => {
//     if(b){
//         resolve('yes b');
//     }else{
//         reject('no b');
//     }
// })
// Promise.all([
//     p2,
//     p3
// ]).then((message)=>{
//     console.log(message);
// })

//FINDING LOCATION
function location(){
    function success(pos){
        var cor = pos.coord;
        console.log('successfuls');
        console.log(pos);
    }
    function error(err){
        console.log('unsucessful',err);
    }
    navigator.geolocation.getCurrentPosition(success,error);    
}