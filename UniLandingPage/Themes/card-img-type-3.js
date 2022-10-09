export function cardImgType3(title, date, src) {
    let div = document.createElement("div");
    let temp = `
    <div class="card"><img class="card-img-top w-100 d-block"
    src="${src}"
    style="max-width: 100%;">
    <div class="card-body" style="padding: 0px;padding-top: 21px;">
        <h4 class="card-title" style="margin-bottom: 2px;"><a href="#"
                style="color: #011F5B;">${title}</a></h4>
        <p style="color: #011F5B;">${date}</p>
    </div>
    </div>
        `;
    div.innerHTML = temp;
    return div;
}
export function cardImgType2(title) {
    return "hello";
}

export const NAME = "Chris Coyier";
