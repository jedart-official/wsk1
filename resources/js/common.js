import {renderAvatarAt} from "./render.js";
import {alertModal, getSVGObject} from "./other.js";

export function getPLace(officeMap, token) {
    officeMap.addEventListener('click', async (e) => {
        const room = e.target.closest('.room');
        if (room) {
            const roomId = room.getAttribute('data-room');
            if (roomId) {
                const svgPoint = getSVGObject(e, officeMap);
                const result = await setPlace(roomId, svgPoint.x, svgPoint.y, token);
                if (!result || !result.status) {
                    alertModal(result.message)
                }
            }
        }
    });
}

export async function setPlace(id, x, y, token) {
    return await fetch('/place', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({roomId: id, x: x, y: y})
    }).then(response => response.json())
        .then(data => {
            return data;
        });
}

export function setPositions(items) {
    items.forEach((item) => {
        if(item.x && item.y){
            renderAvatarAt(item.x, item.y, item.imagePath, item.user_id, item.name);
        }
    });
}

