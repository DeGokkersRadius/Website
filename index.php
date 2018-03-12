<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De Gokkers - Home</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>De Gokkers</h1>
            <div>
                <div>
                    <a href="#info">Information</a>
                    <a href="#download">Download</a>
                </div>
                <a id="btnLogin"><i class="far fa-user"></i></a>
            </div>
        </div>
    </header>
    <main>
        <div id="login" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fas fa-times close"></i>
                    <h2>Login</h2>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div>
                            <input type="email" placeholder="Email" id="email" name="email">
                        </div>
                        <div>
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                        <div>
                            <input type="submit" value="Login" id="loginButton" name="loginButton">
                        </div>
                        <p>Don't yet have an account? <a href="">Click Here!</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div id="video">
            <div class="container">
                <video controls>
                    <source src="video.mp4" type="video/mp4">
                    <source src="video.ogg" type="video/ogg">
                    Your browser doesn't support video's!
                </video>
            </div>
        </div>

        <div id="info">
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquam, beatae delectus eligendi esse et
                    ipsa ipsam laborum magni nobis perspiciatis quasi quis tempore veniam. Aliquam error est obcaecati?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequatur dolorum expedita maiores
                    omnis, placeat, praesentium quasi quis, quos ratione recusandae sapiente similique. At fuga fugiat modi
                    nulla quia temporibus? <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut,
                    blanditiis commodi corporis culpa debitis doloribus dolorum ducimus eius facere fugiat id inventore
                    nostrum, porro quis rem repellat repudiandae sint?</span><span>A alias aliquid amet aperiam cumque
                    delectus dolorum error et eum fugiat id incidunt inventore iure minima natus nesciunt nihil nulla porro,
                    provident quisquam quod repellat reprehenderit repudiandae sapiente, ut.</span><span>Accusantium aliquam
                    atque est harum nulla numquam obcaecati, omnis perspiciatis quae quaerat quas repellendus voluptates?
                    Debitis doloribus esse ex exercitationem molestiae placeat! Ab, accusamus aspernatur eius labore
                    molestias recusandae vitae!</span><span>Ad alias aut cum delectus dicta doloribus ducimus eveniet
                    expedita fugiat id iste iusto laboriosam magni necessitatibus nihil obcaecati odit praesentium provident
                    quia, quos repellendus repudiandae tempore, ut velit veritatis!</span><span>Cumque, dicta, eius? Alias
                    asperiores blanditiis cumque est explicabo facere fugiat illo ipsa, iste iusto minus mollitia, natus
                    non, quaerat quia recusandae repellat soluta sunt temporibus vel veritatis vero voluptatem!</span>
                </p>
            </div>
        </div>

        <div id="download">

        </div>
    </main>
    <script>
        var modal = document.getElementById('login');

        var btn = document.getElementById("btnLogin");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>