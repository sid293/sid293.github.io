//Array literal
function one(){
    let dong = new Array(21,33,56,82);
    dong[2] = 2;
    
    let simpledong = [33,23,56,68,99];
    console.log(dong);
    console.log(simpledong);
    console.log(dong.length);
    console.log(dong.push(100));
    console.log(dong);
    let newarray = dong.pop();
    newarray = dong.shift();
    console.log(newarray);
}
// one();

function run(){
    alert('say hellow');
    var a = 10;
    var b = 20;
    var result = a+b;
    document.write("a + b is ",result);
    document.write("</br>");
    document.write('good');
    var myarray = [22,'sid',10,15,['a',346]];
    document.write(myarray[4]);
    myarray [2] = 'siddhesh';
    myarray.push('end');
    let the = myarray.pop();
    let start = myarray.shift();
    
    document.write("<br>");
    document.write(myarray.indexOf('siddhesh'));
    
    document.write("<br>");
    document.write(myarray[3][1]);
}    
// run();

//Object Literals
function two(){
    let animal = {
        which:'animal',
        group:'type',
        age:9,
        address: {
            place:'africa',
            grass:'yes',
            state:'jammu'
        }
    };
    document.write("<br>");
    document.write(animal.age);
    
    document.write("<br>");
    document.write(animal.group);
    document.write(animal['group']);
    document.write("<br>");
    document.write(animal.address.place);
    document.write("<br>");
    animal.tail='have';
    document.write(animal.tail);
    delete animal.tail;
    document.write(animal.tail);
}
// two();

//pull variables from object
function three(){
    const {which, group, address:{state}} = animal
    document.write("<br>");
    document.write(which, group,state);
}    
// three();

//objects within arrays
function fourth(){
    var organism = [{alien:'jajo',marko:'drugdealer'},{state:'maharashtra',moka:'rant'},{youtube:'google',mountain:'dagisthan'}];
    document.write("<br>");
    document.write(organism[1]);
}
// fourth();


//FROM FIRESHIP
//functions 
// function run(){
//     document.write('function');
// }
// run();

//closure
// function outer(){
//     console.log('outer');
//     var outer = 222;
//     var inner = 333;
//     function inner(){
//         console.log('inner',outer);
//         inner++;
//         return inner
//     }
//     document.write(inner);
//     inner();
// }
// outer();

//objects
// const myobject = new Object();
// myobject.name = 'siddhesh';
// document.write(myobject.name);
// const myobject2 = {
//     name:'rahul',
//     age:11
// }
// document.write(myobject2.name);

// DIFFERENCE BETWEEN FUNCTION DECLARATION AND EXPRESSION


function fifth(){
    const sobject = {
        age:22,
        say: function(){
            document.write('<br>');
            document.write('this is function in sobject');
        },
        sayaa: ()=>{
            document.write('<br>');
            document.write('man');
        }
    }
    sobject['age']=99;
    document.write(sobject.say());
    document.write(sobject.sayaa());
}
// fifth();

//TRUTHY
function sixth(){
    var x = 2==2? 1:2;
    document.write(x);
}
// sixth();

//SWITCH CASES
function seventh(){
    var y = 'yes';
    switch(y){
        case 'no':
            document.write('switch case is no');
            break;
        case 'yes':
            document.write('switch case is yes');
            break;
    }
}
// seventh();

//TRY CATCH FINALLY
function eighth(){
    try{
        aloro('this');
    }catch(error){
        document.write(error.message);
    }
    finally{
        document.write('finished');
    }
}
// eighth();
//HOISTING --skipped

//FUNCTION ON A SINGLE LINE
var yamir = 'eren';
var fan = (yamir)=>document.write(yamir,'is the founding titan');
// fan();

//ANNAMOUS FUNCTION 
var afunction = function(){
    document.write('anonamous function');
}
// afunction();

//JAVASCRIPT SUPPORT HIGHER ORDER FUNCTIONS(FUNCTIONS WHICH TAKE OTHER FUNCTIOS AS ARGURMNETS OR RETURN FUNCTION)
function ninth(){
    function food(rar){
        rar();
    }
    food(() => document.write('food'));
}
// ninth();

//CLOSURE
function tenth(){
    function outer(){
        var count = 36;
        function inner(){
            count++;
            document.write(count);
            // return count
        }
        // return inner
        inner();
    }
    outer();
    outer();
}
// tenth();

//NOTE : THERE ARE 4 WAYS TO CREATE OBJECTS IN JS
//OBJECTS, THIS KEYWORD, USING A CALL METHOD
function eleventh(){
    const object = new Object();
    object.name = "SIDHESH";
    object.area = 56;

    const object2 = {
        name:"titan",
        area:100,
        speak:function(){
            document.write('helow');
            document.write(this.name);
        },
        say:() =>{document.write(this);}
    }
    object2.speak();
    object2.say();
    object2.speak.call(object);
}
// eleventh();

//FUNCTION DECLARATION VS EXPRESSION
function twelvth(){
    hulk();
    function hulk(){
        document.write('this is declarative');
    }
    ironman();
    const ironman = function(){
        document.write('this is expression');
    }
}
// twelvth();

//IMMEDIATELY INVOKING FUNCTION EXPRESSION
function thirteen(){
    (function(){
        document.write('() means executing this function');
    })();
}
// thirteen();

//NAMED PARAMETERS 
function fourteen(){
    function avenger(choose){
        const {name,power,rank} = choose;
        document.write(name,power,rank);
    }
    avenger({name:'spiderman',power:'web',rank:'4'});

    //ANOTHER WAY
    function dc({name,age,gender}={}){
        document.write(name,age,gender);
    }
    dc({name:'batman',age:26,gender:'male'});
}
// fourteen();

//REST PARAMETERS
function fifteen(){
    function avenger(...select){
        document.write(select[2]);
    }
    avenger('yes','no','this','that');
}
// fifteen();

//REPEAT
function sixteen(){
    let slogan = 'yes ';
    document.write(slogan.repeat(10));
}
// sixteen();

//ARROW FUNCTIONS 
function seventeen(){
    const song = (sing) => {
        return 'yes'.repeat(sing)
    };
    document.write(song(6));
}
// seventeen();

//PURE FUNCTIONS (skip) NOTE: CALLBACK FUNCTIONS(FUNCTIOSN THOSE WHO CALL BACK ANOTHER FUCNTION)
function eighteen(){
    function testing(){
        console.log('pure function is one that depends on its local parameters and depends on it\'s local scope');
    }
    setTimeout(testing, 3000);
}
// eighteen();

//MAP
function nineteen(){
    const tame = [23,56,77,84];
    const rant = tame.map(x=>x**2);
    document.write(rant);
}
// nineteen();

//LEXICAL ENVIRONMENT -ENVIRONMENT INSIDE CURLY BRACES
function twenty(){
    function cat(){
        let name = 'cougar';
        return [
            ()=> `Meow ${name}`,
            (newName)=> name = newName
        ]
    }
    const [rain, cheeta] = cat();
    console.log(rain());
    cheeta("fast");
    console.log(rain());
}
// twenty();

//MAKING OBJECTS USIGN LITERAL SYNTAX
let room = {
    name:'red',
    type:'dark'
};
console.log(room.type);
room['type']='light';
console.log(room.type);
//CREATING OBJECT USING CONSTRUCTOR SYNTAX
let friends = new Object();
friends.cast = 6;
console.log(friends.cast);
//INHERTING OBJECS PROPERTY
const coworkers = Object.create(friends);
console.log(coworkers);
console.log(coworkers.cast);
//ADDING PROPERTY TO THE OBJECT (THERE ARE MORE)
Object.defineProperty(coworkers, 'name', {value:'chandler'}); //CURLEY BRACES OBJECT IS CALLED DESCRIPTOR
console.log(coworkers.name);
console.log(coworkers.describe);
//LITERAL SYNTAX
const eagle = 'FC';
const borz = 'wolf';
const generator = () => Math.random();
const animal = {
    eagle,
    borz,
    [generator()]:true, 
    //METHOD
    rant: function (){print_r(this)},
}
console.log(animal.borz);
console.log(animal.rant);
    //DESTRUCTURING
const {eagle:eyes, borz:instinct} = animal;
console.log(eyes,instinct);

//JS OBJECTS AS REFRENCES IN HEAP WHILE PRIMITIVES IN CALL STACK
var a = 'short';
var b = a;
a = 'long';
console.log(a,b);
var c = {only: 'one'};
var d = c;
c.only = 'two';
console.log(c,d);

//ASSIGNING OBJECTS PROPERTY TO OTHER OBJECTS
var e = {many:'hundred'};
Object.assign(c,e);
console.log(c);
console.log(Object.getOwnPropertyNames(c));

//THE SPREAD SYNTAX
var f = {...e,...a,...c};
console.log(f);

//LOOPING THROUGH OBJECTS
var i,k,t,v;
for ( i in f){
    console.log(i);
}
for(k of Object.values(f)){
    console.log(k);
}
for([t,v] of Object.entries(f)){
    console.log(t,v);
}

//OBJECTS USING FUNCITON
console.time();         //CONSOLE TIMER
function tractor(color){
    this.color = color;
    this.machine= '4 cylinder';
    this.speak = function (){
        return `my color is ${this.color}`;
    }
}
const mahindra = new tractor('red');
console.log(mahindra.speak());
console.timeLog();

//CONSOLE.TRACE
function ones(){
    function two(){
        console.trace("who called me");
    }
    two();
}
ones();

//CONSOLE + CSS
console.log("%c javascript","color:green; background:black;");

//CONSOLE ASSERT
console.assert(false,'second one');

//CONSOLE BRACES AND TABLE
var ram = 23;
var foot = 55;
console.log({ram,foot});
console.table([ram,foot]);

//CONSOLE GROUP
// console.group('this');
// console.group('and');
// console.group('that');
// console.groupCollapsed('everything');


//CONSOLE COUNT
console.count('clicked');
console.count('clicked');
console.count('clicked');

//CONSOLE TIME
console.timeLog();



export default ()=> {
    console.log("default action");
}
const rat = "madangle";
const motor = 'on';
export {
    rat,
    motor
}



