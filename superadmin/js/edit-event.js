
document.getElementById('editevent').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=editevent', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Event Updated successfully!')
            window.location.href = "./"
        } else {
            alert('Failed to update')
        }
    })
})