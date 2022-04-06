
const deleteEvent = (e) => {
    const id = e.dataset.id;

    let conf = confirm('Are you sure you want to delete');

    if (conf) {
        fetch(`api/add.php?type=edelete&id=${id}`).then(s => s.text()).then(s => {
            if (s == true) {
                alert('Event deleted successfully!')

                if (window.location.pathname.includes('single-event')) {
                    window.location.href = "./"
                } else {
                    e.parentNode.parentNode.parentNode.parentNode.remove()
                }

            } else {
                alert('Failed to delete')
            }
        })
    }
}

const deleteProject = (e) => {
    const id = e.dataset.id;

    let conf = confirm('Are you sure you want to delete');

    if (conf) {
        fetch(`api/add.php?type=pdelete&id=${id}`).then(s => s.text()).then(s => {
            if (s == true) {
                alert('Project deleted successfully!')

                if (window.location.pathname.includes('single-project')) {
                    window.location.href = "./"
                } else {
                    e.parentNode.parentNode.parentNode.parentNode.remove()
                }

            } else {
                alert('Failed to delete')
            }
        })
    }
}

const deleteArticle = (e) => {
    const id = e.dataset.id;

    let conf = confirm('Are you sure you want to delete');

    if (conf) {
        fetch(`api/add.php?type=adelete&id=${id}`).then(s => s.text()).then(s => {
            if (s == true) {
                alert('Article deleted successfully!')

                if (window.location.pathname.includes('single-article')) {
                    window.location.href = "./"
                } else {
                    e.parentNode.parentNode.parentNode.parentNode.remove()
                }

            } else {
                alert('Failed to delete')
            }
        })
    }
}

const deleteappointment = (e) => {
    const id = e.dataset.id;

    let conf = confirm('Are you sure you want to delete');

    if (conf) {
        fetch(`api/add.php?type=appdelete&id=${id}`).then(s => s.text()).then(s => {
            if (s == true) {

                alert('Appointment deleted successfully!')
                e.parentNode.parentNode.parentNode.parentNode.remove()

            } else {
                alert('Failed to delete')
            }
        })
    }
}

const deletecontact = (e) => {
    const id = e.dataset.id;

    let conf = confirm('Are you sure you want to delete');

    if (conf) {
        fetch(`api/add.php?type=condelete&id=${id}`).then(s => s.text()).then(s => {
            if (s == true) {

                alert('Message deleted successfully!')
                e.parentNode.parentNode.parentNode.parentNode.remove()

            } else {
                alert('Failed to delete')
            }
        })
    }
}