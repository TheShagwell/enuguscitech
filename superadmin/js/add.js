
document.getElementById('event').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=event', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Event added successfully!')
            document.getElementById('event').reset()
            window.location.reload()
        } else {
            alert('Failed to add')
        }
    })
})

document.getElementById('project').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=project', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Project added successfully!')
            document.getElementById('event').reset()
            window.location.reload()
        } else {
            alert('Failed to add')
        }
    })
})

document.getElementById('article').addEventListener('submit', (e) => {
    e.preventDefault()

    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('api/add.php?type=article', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Article added successfully!')
            document.getElementById('article').reset()
            window.location.reload()
        } else {
            alert('Failed to add')
        }
    })
})