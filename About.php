<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-image: url('path/to/your/background-image.jpg'); /* Replace 'path/to/your/background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #fff; /* Set text color to white for better contrast */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .content-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Update the background color's transparency */
        }

        /* Additional styling as needed */
        h2 {
            color: #fff;
            margin-top: 30px;
        }

        p {
            color: #ccc;
            line-height: 1.8;
        }

        /* Styling for the additional section */
        .additional-section {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <!-- Main Content -->
    <div class="content-section">
        <h2>Welcome to Our Store</h2>
        <p>
            We are a leading online fashion store that offers a wide range of trendy clothing and accessories for
            men and women. Our mission is to provide our customers with the latest fashion at affordable prices,
            without compromising on quality.
        </p>

        <h2>Our Story</h2>
        <p>
            Our journey started in 2010 when a group of passionate fashion enthusiasts came together to create a
            one-stop-shop for all fashion needs. Since then, we have grown and evolved, but our commitment to
            delivering exceptional customer service and stylish products remains unchanged.
        </p>

        <!-- Additional section -->
        <div class="additional-section">
            <h2>Our Vision</h2>
            <p>
                At our store, we envision a world where everyone can express their unique style and personality through
                fashion. We strive to be the go-to destination for fashion-forward individuals looking for the latest
                trends and timeless classics.
            </p>

            <h2>Our Mission</h2>
            <p>
                Our mission is to provide a seamless online shopping experience, offering high-quality products that
                inspire confidence and empower our customers to feel their best every day. We aim to build lasting
                relationships with our customers by exceeding their expectations in terms of style, service, and value.
            </p>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>

</html>
