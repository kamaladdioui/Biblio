const infos_retard = document.querySelector(".retard .infos-retard");

 

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "treatment/retard.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                infos_retard.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);