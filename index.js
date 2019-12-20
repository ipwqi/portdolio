window.onload = function(){
    document.getElementById("style-wb").onclick = function(){
        const main = document.getElementById('style');
        main.classList.add('style-wb');
        main.classList.remove('style-yb','style-bw');
    }
    document.getElementById("style-yb").onclick = function(){
        const main = document.getElementById('style');
        main.classList.add('style-yb');
        main.classList.remove('style-wb','style-bw');
    }
    document.getElementById("style-bw").onclick = function(){
        const main = document.getElementById('style');
        main.classList.add('style-bw');
        main.classList.remove('style-wb','style-yb');
    }
}

