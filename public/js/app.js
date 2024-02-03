document.addEventListener('DOMContentLoaded', () => {
    function setAvatar() {
        const form = document.querySelector('.auth')
        if (form) {
            const avatars = document.querySelectorAll('.avatars__item')
            const inputField = form.querySelector('.input-hidden')

            function clearAvatars() {
                avatars.forEach((avatar) => {
                    avatar.style.transform = 'scale(1.0)'
                })
            }

            form.addEventListener('submit', (e) => {
                e.preventDefault()
                if (inputField.value === "") {
                    const message = form.querySelector('.message')
                    message.innerText = 'Выберите аватар'
                } else {
                    form.submit()
                }
            })

            avatars.forEach((avatar) => {
                avatar.addEventListener('click', () => {
                    const id = avatar.getAttribute('data-id')
                    clearAvatars();
                    avatar.style.transform = 'scale(1.5)'
                    inputField.value = id;
                })
            })


        }


    }

    function timeFromStartSession() {
        const timeBlock = document.querySelector('.profile__time')

        setInterval(() => {
            const time = timeBlock.getAttribute('data-time');
            const date = new Date(time);
            const now = new Date();
            const diff = now - date;
            const hours = Math.floor(diff / 3600000);
            const minutes = Math.floor((diff % 3600000) / 60000);

            timeBlock.innerText = `Being at work ${hours.toString().padStart(2, '0')}h ${minutes.toString().padStart(2, '0')}m`;
        }, 1000)


    }

    setAvatar()
    timeFromStartSession()
})

