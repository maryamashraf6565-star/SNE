document.addEventListener('DOMContentLoaded', function() {
    fetch('../includes/navBar.html')
        .then(response => response.text())
        .then(html => {
            document.getElementById('navbar').innerHTML = html
        })
})
