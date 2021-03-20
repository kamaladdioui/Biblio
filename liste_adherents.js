const searchBar = document.querySelector(".recherche input"),
    searchIcon = document.querySelector(".recherche button"),
    infos_perso = document.querySelector(".liste-adherents .infos-perso");

searchIcon.onclick = () => {
    searchIcon.classList.toggle("active");
    if(searchIcon.classList.contains("active")){
    searchBar.focus();
    }
    if (searchBar.classList.contains("")) {
        searchBar.value = "";
        searchBar.classList.remove("active");
    }
}

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "treatment/recherche.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                infos_perso.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "treatment/liste_adherents.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    infos_perso.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500);