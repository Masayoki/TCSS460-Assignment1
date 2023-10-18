<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page Two</title>
    <style>
        .title {
            font-size: 25px;
            margin-bottom:10px;
        }
        

        table {
            width: 50%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
        }

        y.nav {
            font-size: 20px;
            border-bottom: 2px solid #ddd;
            margin:10;
        }

        .container {
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="tel"],
        input[type="password"],
        input[type="city"],
        input[type="country"] {
            width: 50%;
            box-sizing: border-box;
        }

        input[type="state"],
        input[type="zip"] {
            width: 25%;
            box-sizing: border-box;
        }

        input[type="email"],
        #address {
            width: 70%;
            box-sizing: border-box;
        }
        input[type="date"] {
            width:27%;
            box-sizing: border-box;
        }

        input[type="colorInput"] {
            width: 50px;
            height: 50px;
            border: 1px solid #ccc;
            margin-top: 10px;
        }
        input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        input[type="color"]::-webkit-color-swatch {
            border: none;
        }
        
        input[type="range"] {
            width: 25%;
        }

        label[for="myCheckbox"] {
            font-size: small;
        }

        button[type="submit"] {
            width: 10%;
            background-color: lightblue;
            color: black;
            border: none;
            cursor: pointer;
            border-color: black;
        
        }

        button[type="submit"]:hover {
            background-color: lightblue;
            border-color:black;
        }

    </style>
</head>

<body>
    <section class="box top-box">
        <h1><a class="nav" href="#">My Account</a></h1>
        <h2><a class="nav" href="#">Wish List</a></h2>
        <h3><a class="nav" href="#">Shopping Cart</a></h3>
        <h4><a class="nav" href="#">Checkout</a></h4>
    </section>

    <section class="top-content">
        <article>
            <art><b>Art Store</b></art>
        </article>
    </section>

    <section class="box top2-box">
        <b1><a class="nav" href="#">Home</a></b1>
        <b2><a class="nav" href="#">About Us</a></b2>
        <b3><a class="nav" href="#">Art Works</a></b3>
        <b4><a class="nav" href="#">Artists</a></b4>
    </section>
    <section class="middle-box">
        <form action="assign1.php" method="post">
            <t5 class="title"><b>Customer Registration</b></t5><br>
            <!-- User Info Section -->
            <y class="nav"><b>1. User Info</b></y>
            <table>
                <tr>
                    <th><label for="first">First Name</label></th>
                    <th><label for="last">Last Name</label></th>
                </tr>
                <tr>
                    <td><input type="text" id="first" name="first" required></td>
                    <td><input type="text" id="last" name="last" required></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="email">Email</label></th>
                </tr>
                <tr>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="password">Password</label></th>
                    <th><label for="password">Password Repeat</label></th>
                </tr>
                <tr>
                    <td><input type="password" id="password" name="password" required></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
            </table> <br>

            <!-- Location Section -->
            <y class="nav"><b>2. Location</b></y>
            <table>
                <tr>
                    <th><label for="address">Address</label></th>
                </tr>
                <tr>
                    <td><input type="text" id="address" name="address" required></td>
                </tr>
            </table>

            <table>
                <tr>
                    <th><label for="city">City</label></th>
                    <th><label for="state">State</label></th>
                    <th><label for="zip">Zip</label></th>
                </tr>
                <tr>
                    <td><input type="text" id="city" name="city" required></td>
                    <td><input type="text" id="state" name="state" required></td>
                    <td><input type="text" id="zip" name="zip" pattern="[0-9]{5}" required></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="phone">Phone</label></th>
                    <th><label for="country">Country</label></th>
                </tr>
                <tr>
                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required></td>
                    <td><select id="country" name="country">
                        <option value="us">United States</option></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label for="continent">Continent</label></th>
                </tr>
            </table>
                <input type="radio" id="option1" name="continent"><label for="continent">Africa</label> <br>
                <input type="radio" id="option2" name="continent"><label for="continent">Antartica</label> <br>
                <input type="radio" id="option3" name="continent"><label for="continent">Asia</label> <br>
                <input type="radio" id="option4" name="continent"><label for="continent">Australia</label> <br>
                <input type="radio" id="option5" name="continent"><label for="continent">Europe</label> <br>
                <input type="radio" id="option6" name="continent"><label for="continent">North America</label> <br>
                <input type="radio" id="option7" name="continent"><label for="continent">South America</label> <br>

            <!-- Personal Details Section -->
            <y class="nav"><b>3. Personal Details</b></y>
            <table>
                <!-- Add more personal details fields as needed -->
                <tr>
                    <th><label for="dob">Birth Day</label></th>
                    <th><label for="text">Favorite Color</label></th>
                </tr>
                <tr>
                    <td><input type="date" id="dob" name="dob" required></td>
                    <td><input type="color" id="colorInput" name="colorInput" onchange="updateColorPreview()"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th><label type="text">Interest In Art</label></th>
                </tr> 
            </table> <br>
                <label for="minimal" id="minimal">Minimal</label>
                <input type="range" id="bar">
                <label for="love" id="love">Love it!</label>
            <br>
            <!-- All Done Section -->
            <y class="nav"><b>4. All Done</b><y> <br>
            <input type="checkbox" id="myCheckbox" name="myCheckbox">
            <label for="myCheckbox">I agree to the <a href="#">Terms of the Site</a></label> <br>
            <button type="submit">
                <img src="start/images/button_ok.png" alt="Icon"> Sign me up!
            </button>
        </form>
    </section>

    <aside class="bottom-content">
        <!-- Your existing content here -->
    </aside>

    <section class="box bottom-box">
        <r>All images are copyright to their owners. This is just a hypothetical site &copy; 2014 Copyright Art Store</r>
    </section>
</body>

</html>
