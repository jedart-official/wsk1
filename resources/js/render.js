export function renderAvatarAt(x, y, imagePath, user_id, username) {
    const officeMap = document.querySelector('svg');
    const existImage = officeMap.querySelector(`image[data-id="${user_id}"]`);
    if (existImage) {
        let existedText = officeMap.querySelector(`text[data-id="${user_id}"]`)
        existImage.setAttributeNS(null, "x", x);
        existImage.setAttributeNS(null, "y", y);

        existedText.setAttributeNS(null, "x", x);
        existedText.setAttributeNS(null, "y", y + 150);
    } else {
        let svgNS = "http://www.w3.org/2000/svg";
        let img = document.createElementNS(svgNS, "image");


        img.setAttributeNS(null, "height", "100");
        img.setAttributeNS(null, "width", "100");
        img.setAttributeNS(null, "data-id", user_id);
        img.setAttributeNS('http://www.w3.org/1999/xlink', 'href', imagePath); // Ссылка на изображение аватара
        img.setAttributeNS(null, "x", x);
        img.setAttributeNS(null, "class", 'smooth');
        img.setAttributeNS(null, "y", y);
        img.setAttributeNS(null, "visibility", "visible");

        let text = document.createElementNS(svgNS, "text");

        text.setAttributeNS(null, "fill", "black");
        text.setAttributeNS(null, "font-size", "36");
        text.setAttributeNS(null, "font-family", "Arial, sans-serif");
        text.setAttributeNS(null, "y", y + 150);
        text.setAttributeNS(null, "x", x );
        text.setAttributeNS(null, "class", 'smooth');
        text.setAttributeNS(null, "data-id", user_id);
        text.textContent = username;
        officeMap.appendChild(img);
        officeMap.appendChild(text)
    }

}
/**
 * @param {Object} rooms
 */
export function renderRooms(rooms) {
    const container = document.querySelector('.room__items');
    container.innerHTML = '';

    let roomsHTML = '';
    rooms.forEach((room) => {
        /**
         * @param {Object} room
         * @param {Array} room.places
         * @param {Array} room.users
         */
        const seats = room.places
        const takenSeats = room.users.length;

        let usersHTML = '';

        room.users.forEach((user) => {
            usersHTML +=
                `
                        <div class="room__user">
                            <img src="${user.imagePath}" alt="">
                            <span>${user.name}</span>
                        </div>
                    `;
        })


        roomsHTML += `
            <div class="room__item">
                <div class="room__title">${room.name} ( ${takenSeats} / ${seats} ) </div>
                <div class="room__users">
                    ${usersHTML}
                </div>
            </div>`;
    })

    container.innerHTML = roomsHTML;
}
