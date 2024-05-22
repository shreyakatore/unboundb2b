
// navbar toggle
document.getElementById('navbar-toggler').addEventListener('click', function() {
    var navList = document.getElementById('site-header');
    navList.classList.toggle('show');
});

document.querySelectorAll('.dropdown-toggle').forEach(function(dropdownToggle) {
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle('show');
    });
});

/////search button  
document.addEventListener('DOMContentLoaded', function() {
    // Toggle navigation menu
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        var navList = document.getElementById('primary-menu');
        navList.classList.toggle('show');
    });
});
    // Toggle dropdown menus
    document.querySelectorAll('.dropdown-toggle').forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function(e) {
            e.preventDefault();
            this.nextElementSibling.classList.toggle('show');
        });
    });

    // Toggle search bar visibility
    document.getElementById('search-btn').addEventListener('click', function() {
        var searchInput = document.getElementById('search');
        searchInput.style.display = searchInput.style.display === 'block' ? 'none' : 'block';
        if (searchInput.style.display === 'block') {
            searchInput.focus();
        }
    });
    