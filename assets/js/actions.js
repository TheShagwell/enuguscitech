
document.getElementById('footersubscribe').addEventListener('submit', (e) => {
    e.preventDefault()
    
    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('superadmin/api/add.php?type=subscribe', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Subscribed Successfully! You will receive a confirmation message!')
            document.getElementById('footersubscribe').reset()
        } else if (e == "exists") {
            alert('Email exists already!')
            document.getElementById('footersubscribe').reset()
        } else {
            alert('Failed to subscribe to newsletter!')
        }
    })
})

document.getElementById('contact').addEventListener('submit', (e) => {
    e.preventDefault()
    
    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('superadmin/api/add.php?type=contact', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Your message have been delivered successfully!')
            document.getElementById('contact').reset()
        } else {
            alert('Failed to deliver message!')
        }
    })
})

document.getElementById('appointment').addEventListener('submit', (e) => {
    e.preventDefault()
    
    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('superadmin/api/add.php?type=appointment', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Appointment booked successfully!')
            document.getElementById('appointment').reset()
        } else {
            alert('Failed to book appointment!')
        }
    })
})

document.getElementById('subscribe').addEventListener('submit', (e) => {
    e.preventDefault()
    
    const form = new FormData(e.currentTarget)
    form.append('submit', '')
    
    fetch('superadmin/api/add.php?type=subscribe', {
        method: 'POST',
        body: form
    }).then(e => e.text()).then(e => {
        if (e == true) {
            alert('Subscribed Successfully! You will receive a confirmation message!')
            document.getElementById('subscribe').reset()
        } else if (e == "exists") {
            alert('Email exists already!')
            document.getElementById('subscribe').reset()
        } else {
            alert('Failed to subscribe to newsletter!')
        }
    })
})