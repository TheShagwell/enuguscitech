
document.getElementById('editproject').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=editproject', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Project Updated successfully!')
            window.location.href = "./"
        } else {
            alert('Failed to update')
        }
    })
})