export default function test(a, b, c) {
    return `
        <div>
            <ul class="list-unstyled d-flex">
                <li style="margin-right: 10px;color: #767676;"><a href="#"
                        style="color: #767676;">${a}</a>&nbsp; /</li>
                <li style="margin-right: 10px;color: #767676;"><a href="#"
                        style="color: #767676;">${b}</a>&nbsp; /</li>
                <li><a href="#" style="color: #767676;">${c}</a></li>
            </ul>
        </div>
        `;
}
