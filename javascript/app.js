/*
//----------search button----------//

document.getElementById('searchButton').addEventListener('click', function() {
    var searchQuery = document.getElementById('searchInput').value;
    
    // Perform AJAX request to send the search query to the server
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'search.php?q=' + searchQuery, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('searchResults').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});



//-----------dark mode-----------//

// selectors
const themeTogg1eBtn
= document.querySe1ector( ' . theme-toggle' ) ;
// state
const theme =
// on mount
localStorage. getItem( 'theme ' ) ;
theme && document. body. classList.add(theme);
// handlers
handleThemeTogg1e = document. body. classList . toggle( 'dark-mode ' ) ;
if (document.body.classList.contains( 'dark-mode')) {
localStorage.setItem( 'theme', 'dark-mode' ) ;
} else {
localStorage. removeltem( ' theme ' ) ;
}
// events
themeTogg1eBtn .addEventListener( ' click ' , handleThemeTogg1e) ;


    alert("Register if you are a student")

    let n1 = prompt("first name");
    let n2 = prompt("enter second name");
    
    alert("thank you : "+n1+" "+n2);
*/