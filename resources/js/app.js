// Alpine
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// Turbo
import * as Turbo from '@hotwired/turbo'
window.Turbo = Turbo
Turbo.start()

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