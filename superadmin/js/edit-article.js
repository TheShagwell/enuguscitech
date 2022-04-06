
document.getElementById('editarticle').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=editarticle', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Article Updated successfully!')
            window.location.href = "./"
        } else {
            alert('Failed to update')
        }
    })
})