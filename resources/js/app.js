
import './bootstrap';
import './auth';
import {positionListener, roomListener} from "./listeners.js";
import {getPLace, setPlace, setPositions} from "./common.js";

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const officeMap = document.querySelector('svg')


function startOffice(places, user){
    if (!user.x || !user.y) {
        const randomRoomId =  Math.floor(Math.random() * 11);
        const room = document.querySelector(`.room[data-room="${randomRoomId}"]`)
        const randomX = parseInt(room.getAttribute('x')) + Math.floor(Math.random() * 101)
        const randomY = parseInt(room.getAttribute('y')) + Math.floor(Math.random() * 101)
        setPlace(randomRoomId, randomX, randomY)
    }
    getPLace(officeMap, csrfToken)
    setPositions(places)
    positionListener()
    roomListener()
    // sendMessage();
}

window.startOfiice = startOffice
