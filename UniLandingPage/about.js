import { cardImgType3, cardImgType2 } from "./Themes/card-img-type-3.js";
import { NAME } from "./Themes/card-img-type-3.js";
console.log(cardImgType2());
console.log(NAME);

export function agamiCard(title, body, src) {
    let div = document.createElement("div");
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
