const icon = document.getElementById("icon");
function toggleDarkMode(){
    const nav = document.getElementById("nav");
    nav.classList.toggle("darkMode")
    if (nav.classList.contains("darkMode")) {
        icon.className = "fas fa-sun"
    } else {
        icon.className = "fas fa-moon"
    }
}

// dengan jquery
$('#mode').on('click', () => {
    var light = $('#light')
    var night = $('#night')

    if (light.css('display') == 'none') {
        light.css('display', 'inline')
        night.css('display', 'none')
    } else {
        light.css('display', 'none')
        night.css('display', 'inline')
    }

    $(document.body).toggleClass('dark')
})

const logo = document.getElementById('logo')
const desc = document.getElementById('desc')

logo.addEventListener('mouseover', () => {
    logo.style.color = '#FACBEA'
})

desc.addEventListener('click', () => {
    desc.style.rotate = '2deg'
})