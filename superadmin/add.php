<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link for bulma css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-6">
        <section class="card" id="login">
            <header class="card-header">
                <p class="card-header-item">
                    <h1 class="">ADD ADMIN</h1>
                </p>
            </header>

            <div class="card-content">
                <div class="content">
                    <form action="" method="POST" id="addForm">
                    <div class="field">
                            <label class="label">Full Name</label>
                            <div class="control">
                            <input class="input" required id="fullname" name="fullname" type="text" placeholder="James Doe">
                            </div>
                        </div>
                        
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                            <input class="input" required id="email" name="email" type="email" placeholder="e.g. alex@example.com">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                            <input class="input" required id="password" name="password" type="password" placeholder="********">
                            </div>
                        </div>

                        <button name="submit" type="submit" class="button is-primary is-full">Add Admin</button>
                    </form>
                </div>
            </div>

            <footer class="card-footer">
                <a href="./" class="card-footer-item">Return to Dashboard</a>
                <!-- <p href="register.php" class="card-footer-item is-primary">OFFICE OF THE SPECIAL ASSISTANT TO THE GOVERNOR ON INNOVATION, SCIENCE AND TECHNOLOGY</p> -->
            </footer>
        </section>
    </div>

    <script>
        document.getElementById('addForm').addEventListener('submit', (e) => {
            e.preventDefault()

            const form = new FormData(e.currentTarget)
            form.append('submit', '')
            
            fetch('api/add.php?type=addForm', {
                method: 'POST',
                body: form
            }).then(e => e.text()).then(e => {
                if (e == true) {
                    alert('Added successfully!')
                    window.location.reload()
                }  else {
                    alert('Failed to add admin! Try again')
                }
            })
        })
    </script>
</body>
</html>