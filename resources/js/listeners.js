import {renderAvatarAt, renderRooms} from "./render.js";



export function roomListener() {
    window.Echo.channel('room')
        /**
         * @param {Object} data
         * @param {Array} data.rooms
         */
        .listen('.App\\Events\\RoomEvent', (data) => {
            renderRooms(data.rooms)
        })
}

export  function positionListener() {
    window.Echo.channel('position')
        .listen('.App\\Events\\ChangePositionEvent', (data) => {
            /**
             * @param {Object} data
             * @param {string} data.imagePath
             * @param {number} data.positionX
             * @param {number} data.positionY
             * @param {number} data.user_id
             * @param {string} data.name
             */
            renderAvatarAt(
                data.positionX, data.positionY,
                data.imagePath, data.user_id, data.name
            );
        })
}
