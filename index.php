<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            height: 100vh;
            overflow: scroll;
            align-content: flex-start;
        }

        nav {
            display: flex;
            background-color: #007bff;
            overflow: hidden;
            margin: 0px 0px;
            width: 100%;
            height: fit-content;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 10px;
            text-decoration: none;
            background-color: transparent;
            border: none;
        }

        nav label {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            float: left;

        }

        nav li a:hover {
            /* background-color: #111; */
            font-weight: bold;
        }

        select {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            background-color: transparent;
            border: none;
            outline: none;
        }

        select option:disabled {
            display: none;
        }

        select option {
            color: white;
            background-color: #007bff;

        }

        .icon {
            width: 3%;
            height: 100%;
            padding: 5px;
        }

        .icon img {
            height: 33px;
            width: 33px;
        }

        .imagecontainer_main {
            width: 100%;
            height: 60vh;
        }

        .imagecontainer_main img {
            width: 100%;
            height: 100%;
        }

        .firstcard {
            width: 90%;
            height: fit-content;
            /* border: 1px solid black; */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 10px;
        }

        .headerdiv {
            width: 80%;
            height: fit-content;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .headerdiv_icon {
            width: 50%;
            height: 35vh;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
            align-content: center;
            border-bottom: 1px solid black;
        }

        .headerdiv_icon img {
            width: 50%;
            height: 80%;
        }

        .headerdiv_name {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
            align-content: flex-start;
            border-bottom: 1px solid black;
        }

        .headerdiv_name h1 {
            font-size: 45px;
        }

        .headerdiv_content {
            width: 100%;
            height: fit-content;
            padding: 10px;
        }

        .secondcard,
        .department_cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            width: 85%;
            margin-top: 30px;
            margin-bottom: 20px;
            height: 60vh;
            box-shadow: 0px 10px 10px 10px gray;
            padding: 10px;
        }

        .department_cards {
            height: 75vh;
        }

        .secondcard_image-size {
            width: 30%;
            height: 100%;
        }

        .secondcard_text {
            display: flex;
            width: 66%;
            text-align: center;
            flex-direction: column;
            align-content: center;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .secondcard_text2 {
            text-align: left;
            margin-top: 10px;
        }

        .Aboutus_text {
            display: flex;
            width: 66%;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;
        }


        .Aboutus_text2 {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            margin-top: 20px;
        }

        .department_menu {
            display: flex;
            justify-content: center;
            text-align: center;
            width: 50%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .department_menu a {
            width: 50%;
            display: block;
            border: 1px solid;
            padding: 5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .secondcard_text h4 {
            margin-top: 20px;
        }

        .secondcard_image-size img {
            width: 100%;
            height: 100%;
        }

        .contactus {
            margin-top: 35px;
            height: fit-content;
            display: flex;
            width: 85%;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            /* border: 1px solid; */
            box-shadow: 0px 10px 10px 10px gray;
        }

        .contactheading {
            font-size: 20px;
            width: 100%;
            height: 15vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            align-content: center;
        }

        .contactform,
        form {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
        }

        /* .contactform form {
            width: 100%;
        } */

        .contactpersonal {
            display: flex;
            width: 50%;
            flex-wrap: wrap;
            justify-content: flex-start;
            flex-direction: column;
            align-items: flex-start;
            align-content: center;
        }

        .contactpersonal label,
        .contactmessage label {
            margin-bottom: 3px;
        }

        .contactpersonal input {
            margin-bottom: 13px;
            width: 60%;
            font-size: 16px;
            outline: none;
            padding: 5px;
        }

        .contactmessage {
            display: flex;
            width: 50%;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            flex-direction: column;
            align-content: center;

        }

        .contactmessage textarea {
            resize: none;
            padding: 5px;
            outline: none;
            font-family: 'Arial';
            font-size: 16px;
            line-height: 5px;
            width: 60%;
            height: 60%;
        }

        .contactbtn {
            display: flex;
            width: 100%;
            justify-content: center;
            height: 10vh;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
        }

        .submit_contact {
            height: 50%;
            width: 20%;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 18px;
        }

        .department_heading {
            display: flex;
            width: 100%;
            height: 15vh;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
        }

        .department_content {
            /* border: 1px solid; */
            width: 70%;
            padding: 5px 80px;
            height: 100%;
            line-height: 30px;
            font-size: 17px;
        }

        .deparment_secondary_card {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            height: 57vh;
        }

        .secondlast {
            width: 100%;
            height: 5vh;
            background-color: gray;
            margin-top: 10vh;
        }

        .secondlast a {
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .pagefooter {
            display: flex;
            width: 100%;
            height: 50vh;
            /* border: 1px solid; */
            background-color: black;
            color: white;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .pagefooterbox1,
        .pagefooterbox2 {
            width: 40%;
            /* border: 1px solid; */
            height: fit-content;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        #general,
        #neurology {
            flex-direction: row-reverse;
        }

        .callnow {
            width: 100%;
            height: 7vh;
            background-color: black;
            color: white;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        @media only screen and (max-width:500px) {
            .icon {
                width: 13%;
            }

            nav {
                justify-content: center;
            }

            .imagecontainer_main {
                height: 40vh;
            }

            .headerdiv_icon {
                width: 100%;
                height: 30vh;
                border: none;
            }

            .headerdiv_name {
                width: 100%;
                align-content: center;
                border: none;
            }

            .headerdiv_name p {
                text-align: center;
            }

            .headerdiv {
                width: 100%;
            }

            .firstcard {
                width: 95%;
            }

            .headerdiv_content {
                margin-top: 10px;
            }

            .secondcard,
            .department_cards,

            .contactus {
                width: 95%;
                height: fit-content;
            }

            .secondcard_image-size {
                width: 100%;
                /* width: 100%; */
            }

            .secondcard_image-size img {
                width: 100%;
                height: 100%;
            }

            .secondcard_text,
            .Aboutus_text,
            .deparment_secondary_card,
            .contactpersonal,
            .contactmessage {
                width: 100%;
                text-align: center;
                padding: 20px;
                height: fit-content;
            }

            .submit_contact {
                width: 50%;
            }

            .contactpersonal input,
            .contactmessage textarea {
                width: 80%;
            }

            .department_menu a {
                width: 100%;
            }

            .department_content {
                width: 100%;
                padding: 5px;
            }

            .pagefooter {
                height: fit-content;
            }

            .pagefooterbox1,
            .pagefooterbox2 {
                width: 90%;
                height: fit-content;
                justify-content: center;
                padding: 30px 0px;
            }

            .callnow {
                font-size: 15px;
            }
.department_menu{
width:100%;
}
        }
    </style>
</head>

<body>
    <nav>
        <div class="icon" id="Home">
            <img src="image/solidarity.png">
        </div>
        <label for="hospital">ASSP Hospital</label>
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#secondcard">About us</a></li>
            <li><a href="#contactus">Contact us</a></li>
            <li>
                <form action="loginpage.php" method="post">
                    <select name="login" id="login" onchange="this.form.submit()">
                        <option value="null" disabled selected>Login</option>
                        <option value="patient">user</option>
                        <option value="doctor">doctor</option>
                        <option value="admin">admin</option>
                    </select>
                </form>
            </li>
        </ul>
    </nav>
    <div class="callnow">
        <p>Emergency Toll Free Number    xxx-xxx-xxxx</p>
    </div>
    <div class="imagecontainer_main">
        <img src="image/head1.jpeg">
    </div>
    <div class="firstcard">
        <div class="headerdiv">
            <div class="headerdiv_icon">
                <img src="image/solidarity1.png" class="icon_image">
            </div>
            <div class="headerdiv_name">
                <h1>Assp Hospital</h1>
                <p>kothrud,pune</p>
            </div>

            <div class="secondcard_text">
                <div style="width: 100%;">
                    <h4>The pain itself is very important, and it will be followed. For I came to the smallest </h4>
                </div>
                <div class="secondcard_text2">
                    <p>The customer is very happy</p>
                    <p> Adipisicion will be obtained, but I do</p>
                    <p>They fall in the same time as labor</p>
                </div>
            </div>
        </div>
    </div>
    <div class="secondcard" id="secondcard">
        <div class="secondcard_image-size">
            <img src="image/hm1.jpeg" alt="">
        </div>
        <div class="Aboutus_text">
            <div style="width: 100%; text-align: center; ">
                <h1>Departments</h1>
            </div>
            <div class="Aboutus_text2">
                <div class="department_menu">
                    <a href="#cardiology">Cardiology</a>
                </div>
                <div class="department_menu">
                    <a href="#General">General</a>
                </div>
                <div class="department_menu">
                    <a href="#Neurology">Neurology</a>
                </div>
                <div class="department_menu">
                    <a href="#Pediatrician">Pediatrician</a>
                </div>
            </div>
        </div>
    </div>
    <div class="department_cards" id="cardiology">
        <div class="department_heading">
            <h1>Cardiology</h1>
        </div>
        <div class="deparment_secondary_card">
            <div class="secondcard_image-size">
                <img src="image/hm3.jpeg" alt="">
            </div>
            <div class="department_content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia in natus perspiciatis hic cumque minus
                odit tenetur nostrum quas at consectetur ad obcaecati libero eius nemo, ullam harum doloribus sapiente
                rerum
                quisquam tempore. Provident error corporis ea officiis asperiores, laboriosam praesentium? Animi ab sed
                dignissimos ullam non commodi delectus, excepturi necessitatibus labore neque provident quis nulla
                voluptatem ipsum aut nemo corrupti perferendis vitae. Quis perspiciatis dolore dicta? Ratione provident
                nemo
                dolor? Ea voluptates a ab maiores dolor facilis inventore architecto veritatis vitae cum voluptatibus,
                esse
                labore soluta corporis nam porro accusamus aut iusto! Alias obcaecati inventore dolore ipsa repudiandae
                nam!
            </div>
        </div>
    </div>
    <div class="department_cards" id="General">
        <div class="department_heading">
            <h1>General</h1>
        </div>
        <div class="deparment_secondary_card" id="general">
            <div class="secondcard_image-size">
                <img src="image/hm14.jpeg" alt="">
            </div>
            <div class="department_content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia in natus perspiciatis hic cumque minus
                odit tenetur nostrum quas at consectetur ad obcaecati libero eius nemo, ullam harum doloribus sapiente
                rerum
                quisquam tempore. Provident error corporis ea officiis asperiores, laboriosam praesentium? Animi ab sed
                dignissimos ullam non commodi delectus, excepturi necessitatibus labore neque provident quis nulla
                voluptatem ipsum aut nemo corrupti perferendis vitae. Quis perspiciatis dolore dicta? Ratione provident
                nemo
                dolor? Ea voluptates a ab maiores dolor facilis inventore architecto veritatis vitae cum voluptatibus,
                esse
                labore soluta corporis nam porro accusamus aut iusto! Alias obcaecati inventore dolore ipsa repudiandae
                nam!
            </div>
        </div>
    </div>
    <div class="department_cards" id="Pediatrician">
        <div class="department_heading">
            <h1>Pediatrician</h1>
        </div>
        <div class="deparment_secondary_card">
            <div class="secondcard_image-size">
                <img src="image/hm12.jpeg" alt="">
            </div>
            <div class="department_content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia in natus perspiciatis hic cumque minus
                odit tenetur nostrum quas at consectetur ad obcaecati libero eius nemo, ullam harum doloribus sapiente
                rerum
                quisquam tempore. Provident error corporis ea officiis asperiores, laboriosam praesentium? Animi ab sed
                dignissimos ullam non commodi delectus, excepturi necessitatibus labore neque provident quis nulla
                voluptatem ipsum aut nemo corrupti perferendis vitae. Quis perspiciatis dolore dicta? Ratione provident
                nemo
                dolor? Ea voluptates a ab maiores dolor facilis inventore architecto veritatis vitae cum voluptatibus,
                esse
                labore soluta corporis nam porro accusamus aut iusto! Alias obcaecati inventore dolore ipsa repudiandae
                nam!
            </div>
        </div>
    </div>
    <div class="department_cards" id="Neurology">
        <div class="department_heading">
            <h1>Neurology</h1>
        </div>
        <div class="deparment_secondary_card" id="neurology">
            <div class="secondcard_image-size">
                <img src="image/hm10.jpeg" alt="">
            </div>
            <div class="department_content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia in natus perspiciatis hic cumque minus
                odit tenetur nostrum quas at consectetur ad obcaecati libero eius nemo, ullam harum doloribus sapiente
                rerum
                quisquam tempore. Provident error corporis ea officiis asperiores, laboriosam praesentium? Animi ab sed
                dignissimos ullam non commodi delectus, excepturi necessitatibus labore neque provident quis nulla
                voluptatem ipsum aut nemo corrupti perferendis vitae. Quis perspiciatis dolore dicta? Ratione provident
                nemo
                dolor? Ea voluptates a ab maiores dolor facilis inventore architecto veritatis vitae cum voluptatibus,
                esse
                labore soluta corporis nam porro accusamus aut iusto! Alias obcaecati inventore dolore ipsa repudiandae
                nam!
            </div>
        </div>
    </div>
    <div class="contactus">
        <div class="contactheading">
            <h2>Leave us a Message</h2>
        </div>
        <div class="contactform">
            <form action="feedback.php" method="post">
                <div class="contactpersonal">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="contact">Contact</label>
                    <input type="number" name="contact" id="contact" required>
                </div>
                <div class="contactmessage">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="20" required></textarea>
                </div>
                <div class="contactbtn">
                    <button type="submit" name="contact_submit" class="submit_contact">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="secondlast">
        <center><a href="#Home">&#8657;&nbsp;Top</a></center>
    </div>
    <div class="pagefooter" id="contactus">
        <div class="pagefooterbox1">
            <h1>Contact details</h1>
            <br>
            <table>
                <tr>
                    <td>contact no.</td>
                    <td>xxx-xxx-xxxxx</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><a href="mailto:xxxx@gmail.com"></a>xxxxx@gmail.com</td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td>
                        <address>xxxxxxxxxxxx<br>xxxxxxxx</address>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pagefooterbox2">
            <h1>Disclaimer</h1>
            <br>
            <p>This is a hospital appointment booking system project.
                It is a third year capstone project of our group for the Academic year 2022 - 2023
                the project is build using Html , css , PHP</p>
            <br>
            <p>Team Members of our Group :-</p>
            <div style="text-align: left;">
                <ol>
                    <li>Shreyas Surve</li>
                    <li>Shashikant Surve</li>
                    <li>Prabhat Singh</li>
                    <li>Altaf Jhamkhandi</li>
                </ol>
            </div>
        </div>
    </div>
</body>

</html>
