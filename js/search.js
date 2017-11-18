
    var searchbutton = document.getElementById('submit_search');
    var search = document.getElementById('search');
    var body = document.getElementById('body');
    searchbutton.addEventListener('click', function() {
        let search_value = search.value;
        window.location.replace('https://school.daniquedejong.nl/honeypot/index.php?search=' + search_value);
    });
