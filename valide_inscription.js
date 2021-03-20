const form = document.querySelector(".valide-inscription form"),
    continueBtn = form.querySelector(".button"),
    errorText = form.querySelector(".error-text");

    form.onsubmit = (e) => {
        e.preventDefault();
    }
    
    continueBtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "treatment/valide_inscription.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                        errorText.style.display = "block";
                        errorText.textContent = data;
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    }