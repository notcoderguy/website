// Alpine
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// Flowbite
import 'flowbite'

// Turbolinks
// import Turbolinks from 'turbolinks'
// Turbolinks.start()

// Theme Changer
// Icons
let sunIcon = document.querySelector('.sun')
let moonIcon = document.querySelector('.moon')

// Theme Vars
let userTheme = localStorage.getItem('theme')
let systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'

// Icon Toggling
let toggleIcon = () => {
    moonIcon.classList.toggle('display-none')
    sunIcon.classList.toggle('display-none')
}

// Initial Theme Check
let checkTheme = () => {
    if (userTheme === 'dark' || (!('theme' in localStorage) && systemTheme === 'dark')) {
        document.documentElement.classList.add('dark')
        moonIcon.classList.add('display-none')
        return
    }
    sunIcon.classList.add('display-none')
}

// Theme Toggle
let toggleTheme = () => {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark')
        localStorage.setItem('theme', 'light')
        toggleIcon()
        console.log('Theme: Light')
        return
    }
    document.documentElement.classList.add('dark')
    localStorage.setItem('theme', 'dark')
    console.log('Theme: Dark')
    toggleIcon()
}

// Theme Toggle Event
sunIcon.addEventListener('click', toggleTheme)
moonIcon.addEventListener('click', toggleTheme)

// Initial Theme Check
checkTheme()


// Clock
let secondTick = false;
// this function relies on the "secondTick" flag, set above
function DisplayCurrentTime() {
    let date = new Date();
    let hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
    let am_pm = date.getHours() >= 12 ? "PM" : "AM";
    let minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    let secondDelimiter = (secondTick) ? '<span class=" text-gray-500 dark:text-gray-100">:</span>' : ':';
    secondTick = !secondTick;
    document.getElementById('time').innerHTML = hours + secondDelimiter + minutes + " " + am_pm;
    let time = setTimeout(DisplayCurrentTime, 500);
};

function DisplayCurrentDate() {
    let now = new Date();
    let days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    let months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    let dayOfWeek = days[ now.getDay() ];
    let month = months[ now.getMonth() ];
    let day = now.getDate();
    let year = now.getFullYear();
    document.getElementById('date').innerHTML = dayOfWeek + ", " + month + " " + day + " " + year;
    let time = setTimeout(DisplayCurrentDate, 500);
}

if( document.getElementById('time') ) {
    DisplayCurrentTime();
}

if( document.getElementById('date') ) {
    DisplayCurrentDate();
}