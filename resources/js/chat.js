
function sendMessage() {
    const chatForm = document.querySelector('.chat__input');
    const chatInput = chatForm.querySelector('input')
    chatForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        return await fetch('/send/message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({message: chatInput.value})
        }).then(response => response.json())
            .then(data => {
                console.log(data)
                return data;
            });
    })

}
