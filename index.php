<!DOCTYPE html>
<htmml lang = "en>"
    <head>
        <meta charset="UTF-8">
        <title> junior Devo Onboarding</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;

                display: flex;
                justify-content: center;
                align-items: center;

                background-color: #f2f4f7
                font-family Arial, helvetica, sabs-serif;
            }

            .card {
                background-color: #ffffff;
                width: 350px;
                padding: 25px;
                border-radius: 10px;

                box-shadow: 0 4px 12px rgba (0,0,0,0.1);
                text-align: center;
            }

            .card h1 {
                margin-bottom: 10px;
                font-size: 22px;
            }

            .bio {
                font-size: 14px;
                color: #555;
                margin-bottom: 15px;
            }

            ul {
                list-style-type: none;
                padding: 0;
                margin-bottom: 20px;
            }

            ul li {
                background-color: #f0f2f5;
                margin: 5px 0;
                padding: 8px;
                border-radius: 5px;
                font-size: 14px;
            }
            
            button {
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;

                background-color: #007bff;
                color: #ffffff;
                font-size: 14px;
            }

            button:hover {
                background-color: #0056b3;
            }

        </style>
    </head>


    <body>

        <div class="card">
            <h1>Charease</h1>

            <p class="bio">
                Junior Software Engineer passionate about web development, problem-solving, and continuous learning.
            </p>

            <h3>Technical Skills</h3>
            <ul>
                <li>HTML & CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Git & GitHub</li>
            </ul>

            <button id="initbtn">Initialize System</button>

            <p class="system-info">
                <h3> Server Status </h3>
                <p><strong>Date & Time: </strong></p> <?php echo date('F j, Y, g:i'); ?></p>
                <php><strong> PHP Version: </strong> <?php echo phpversion(); ?> </p>
            </div>





        </div>

        <script>
            document.getElementById("initBtn").addEventListener("click", function (){
                alert("Welcome to the team, Charease! System initialized successfully!");
            })
        </script>
    </body>
</html>