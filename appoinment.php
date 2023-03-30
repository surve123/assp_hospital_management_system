<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=66, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        /* body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        } */

        .container {

            max-width: 600px;
            padding: 50px;
            margin: 0 180px;
            box-shadow: 0 15px 20px #abb2b9;
        }

        h2 {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            color: #2f4f4f;
            padding-bottom: 8px;
            border-bottom: 1px solid silver;
        }

        .input-box {
            display: flex;
            /* flex-wrap: wrap; */
            width: 50%;
            padding-bottom: 15px;
        }

        .m {
            padding-top: 15px;
        }

        .input-box input {
            height: 30px;
            width: 164px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        .input-box select {
            height: 30px;
            width: 164px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .input-box input:is(:focus, :valid) {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .button-container button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            display: block;
            font-size: 20px;
            color: #fff;
            border: none;
            border-radius: 3px;
            background-image: linear-gradient(to right, #aa076b, #61045f);
        }

        .button-container button:hover {
            background-image: linear-gradient(to right, #61045f, #aa076b);
        }

        /* .content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
} */
        .grid {
            display: grid;
        }

        .item1 {
            grid-column: 1;
            width: 196px;
        }

        .item2 {
            grid-column: 2;
            padding-left: 50px;
            
        }
        .content{
            margin: 0px 0px;
            padding: 0px 47px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="post">
            <h2>Book Appoinment</h2>
            <div class="content">
                <div class="input-box m grid">
                    <div class="item1">
                        <label for="Speciallization">Speciallization</label>
                    </div>
                    <div class="item2">
                        <select name="department" id="department">
                            <option value="Cardiologist">Heart specialist</option>
                            <option value="General">General</option>
                            <option value="Dentist">Dentist</option>
                        </select>
                    </div>
                </div>
                <div class="input-box grid">
                    <div class="item1">
                        <label for="doctor">Doctor </label>
                    </div>
                    <div class="item2">
                        <select name="Doctors" id="Doctors">
                            <option value="">abc</option>
                            <option value="">def</option>
                            <option value="">ghi</option>
                        </select>
                    </div>
                </div>
                <div class="input-box grid ">
                    <div class="item1">
                        <label for="Consultancy_Fees">Consultancy_Fees</label>
                    </div>
                    <div class="item2">
                        <input type="text" name="" id="" disabled>
                    </div>
                </div>
                <div class="input-box grid">
                    <div class="item1">
                        <label for="date">Date</label>
                    </div>
                    <div class="item2">
                        <input type="date" name="date" id="date" required>
                    </div>
                </div>
                <div class="input-box grid">
                    <div class="item1">
                        <label for="time">Time</label>
                    </div>
                    <div class="item2">
                        <input type="time" name="" id="" required>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Book Appoinment</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>