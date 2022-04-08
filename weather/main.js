const api = {key:"4185ba94a3064d918ca165521221103",
baseurl:"http://api.weatherapi.com/v1/current.json"};

const searchbox = document.querySelector('#search-box');
searchbox.addEventListener('keypress',setQuery);

function setQuery(attr){
    if(attr.keyCode==13){
        getResults(searchbox.value);
        // getResults2(searchbox.value);
        console.log(searchbox.value);
    }
}
//FIRST WAY
// function getResults(query){
//     // console.log('fetching: ',`${api.baseurl}?key=${api.key}&q=${query}&aqi=no`);
//     fetch(`${api.baseurl}?key=${api.key}&q=${query}&aqi=no`)
//     .then(weather => {return weather.json();}).then(displayResults);
// }

//SECOND WAY
async function data(query){
    let response = await fetch(`${api.baseurl}?key=${api.key}&q=${query}&aqi=no`);
    let res = await response.json();
    return res;
}
async function getResults(query){
    let weather = await data(query).then(displayResults);
}
async function getResults2(query){
    let weather2 = await data(query);
    let signe = document.getElementById('deg');
    let temp = document.getElementById('temp');
    if(signe.innerHTML == '°C'){
        signe.innerHTML = '°F';
        temp.innerHTML = weather2.current.temp_f;
    }else{
        signe.innerHTML = '°C';
        temp.innerHTML = weather2.current.temp_c;
    }
}

function displayResults(weather){
    let temp = document.getElementById('temp');
    let city = document.getElementById('city');
    let date = document.getElementById('date');
    let weathers = document.getElementById('weathers');
    temp.innerHTML = weather.current.temp_c;
    city.innerHTML = weather.location.name;
    date.innerHTML = weather.location.localtime;
    weathers.innerHTML = weather.current.condition.text;
    if(weathers.innerHTML.toLowerCase().includes("sunny")){
        document.body.style.backgroundImage = "url('sunny.jpg')";
    }
    else if(weathers.innerHTML.toLowerCase().includes("overcast") || weathers.innerHTML.toLowerCase().includes("rain") || weathers.innerHTML.toLowerCase().includes("drizzle")){
        document.body.style.backgroundImage = "url('rainy.jpg')";
    }
    else if(weathers.innerHTML.toLowerCase().includes("mist") || weathers.innerHTML.toLowerCase().includes("fog")){
        document.body.style.backgroundImage = "url('cold.jpg')";
    }
    else if(weathers.innerHTML.toLowerCase().includes("clear")){
        document.body.style.backgroundImage = "url('bluesky.jpg')";
    }
    // else if(weathers.innerHTML.toLowerCase().includes("rain")){
    //     document.body.style.backgroundImage = "url('rainy.jpg')";
    // }
    else if(weathers.innerHTML.toLowerCase().includes("cloudy")){
        document.body.style.backgroundImage = "url('cloudy.jpg')";
    }
    else if(weathers.innerHTML.toLowerCase().includes("snow")){
        document.body.style.backgroundImage = "url('snowy.jpg')";
    }
    // else if(weathers.innerHTML.toLowerCase().includes("fog")){
    //     document.body.style.backgroundImage = "url('cold.jpg')";
    // }
    else{
        document.body.style.backgroundImage = "url('bg2.jpg')";
    }
}

function convert(){
    getResults2(searchbox.value);
}

//FETCH TESTING
// console.log('second fetch');
// fetch('https://reqres.in/api/users')
//     .then(res => {
//         if(res.ok){
//             console.log('success');
//         }else{
//             console.log('fialure');
//         }
//     })
//     .then(obj => {return obj.json()})
//     .then(mk => console.log(mk));
