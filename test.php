<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostCanon Services</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            
            background: #ffffff;
            color: #333;
        }
        .success{
            line-height: 1.4;
            margin: 0;
            padding: 15px 50px;
        }
        h2 {
            color: #4B0082;
            margin-bottom: 10px;
            font-size: 1.8em;
            font-weight: 700;
        }

        h2::after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            margin-top: 8px;
        }

        .sub {
            /* color: #932C8B; */
            color: black;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .featured-list {
            list-style: none;
            padding: 0;
        }

        .featured-list li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
        }

        .featured-list li:before {
            content: "✦";
            position: absolute;
            left: 0;
            color: #932C8B;
        }

        .calltoaction-button {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            color: white;
            text-decoration: none;
            border-radius: 20px;
            margin-top: 15px;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 0.9em;
            box-shadow: 0 3px 10px rgba(75, 0, 130, 0.2);
        }

        .calltoaction-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(75, 0, 130, 0.3);
        }

        .addon-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .addon-card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(75, 0, 130, 0.1);
            border: 1px solid rgba(75, 0, 130, 0.1);
            transition: all 0.3s ease;
            background: #f9f9f9;
            cursor: pointer;
        }

        .addon-card:hover {
            transform: translateY(-3px);
        }

        p {
            color: #666;
            font-size: 1em;
        }

        strong {
            color: #4B0082;
        }

        @media (max-width: 768px) {
            .success{
                padding: 15px;
            }
        h2 {
            color: #4B0082;
            margin-bottom: 10px;
            font-size: clamp(1.2em, 4vw, 1.8em);
            font-weight: 700;
        }

        h2::after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            margin-top: 8px;
        }

        .sub {
            color: #932C8B;
            font-size: clamp(1em, 3vw, 1.2em);
            margin-bottom: 15px;
        }

        .featured-list {
            list-style: none;
            padding: 0;
        }

        .featured-list li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
            font-size: clamp(0.9em, 2.5vw, 1em);
        }

        .featured-list li:before {
            content: "✦";
            position: absolute;
            left: 0;
            color: #932C8B;
        }

        .calltoaction-button {
            display: inline-block;
            padding: clamp(6px, 2vw, 8px) clamp(15px, 4vw, 20px);
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
            color: white;
            text-decoration: none;
            border-radius: 20px;
            margin-top: 15px;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: clamp(0.8em, 2.5vw, 0.9em);
            box-shadow: 0 3px 10px rgba(75, 0, 130, 0.2);
        }

        .calltoaction-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(75, 0, 130, 0.3);
        }

        .addon-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
    }
        @media (max-width: 576px) {
            .success{
                padding: 10px;
            }
            .addon-section {
                grid-template-columns: 1fr;
            }
        }

        .addon-card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(75, 0, 130, 0.1);
            border: 1px solid rgba(75, 0, 130, 0.1);
        }

        .addon-card:hover {
            transform: translateY(-3px);
        }

        p {
            color: #666;
            font-size: clamp(0.9em, 2.5vw, 1em);
        }

        strong {
            color: #4B0082;
        }
    </style>
</head>
<body>

    <section class="success">
        <h2>Everything You Need for Online Success</h2>
        <div class="addon-section">
            <div class="addon-card">
                <h3 class="sub">Domain Registration</h3>
                <p>Secure your perfect domain in minutes at competitive prices.</p>
                <a href="#" class="calltoaction-button">Get Started Now</a>
            </div>
            <div class="addon-card">
                <h3 class="sub">SSL Certificates</h3>
                <p>Protect your website with industry-leading security solutions.</p>
                <a href="#" class="calltoaction-button">View Pricing</a>
            </div>
            <div class="addon-card">
                <h3 class="sub">Advanced Server Management & Security</h3>
                <p>Keep your online business running smoothly with premium tools and services.</p>
                <a href="#" class="calltoaction-button">Explore More Solutions</a>
            </div>
        </div>
    </section>
</body>
</html>
