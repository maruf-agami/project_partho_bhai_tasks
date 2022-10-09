<script>
    // let castom = document.createElement('g');
    // console.log(castom);
    function agamiCard(title, body, src) {
        let div = document.createElement('div')
        let temp = `
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="${src}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">${title}</h5>
            <p class="card-text">${body}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
            `;
        div.innerHTML = temp;
        return div;
    }
</script>