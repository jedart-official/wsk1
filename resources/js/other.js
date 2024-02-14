export function getSVGObject(event, officeMap) {

    const ctm = officeMap.getScreenCTM();
    const point = officeMap.createSVGPoint();
    point.x = event.clientX - 13;
    point.y = event.clientY - 13;
    return point.matrixTransform(ctm.inverse())
}

export function alertModal(message) {
    const modal = document.querySelector('.alert');
    const close = modal.querySelector('.alert__close');
    const content = modal.querySelector('.alert__message');
    modal.style.display = 'flex';
    content.innerText = message;
    close.addEventListener('click', () => {
        modal.style.display = 'none'
    })
}
