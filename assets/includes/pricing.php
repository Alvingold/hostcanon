<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Pricing Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            /* font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; */
            background: #ffffff;
            color: #333333;
            
            min-height: 100vh;
        }
        
        .pricing-container {
            padding: 30px;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .heading {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .heading h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #2D0050;
            display: inline-block;
        }
        
        .heading p {
            font-size: 18px;
            color: #555555;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .tab-container {
            display: flex;
            background: #f2f2f2;
            border-radius: 8px;
            overflow: hidden;
            width: fit-content;
            margin: 0 auto 30px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .tab {
            padding: 16px 32px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            letter-spacing: 0.5px;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            color: #555555;
        }
        
        .tab.active {
            background: #2D0050;
            color: white;
        }
        
        .tab.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #FFC107;
        }
        
        .tab:hover:not(.active) {
            background: #e5e5e5;
        }
        
        .table-container {
            width: 100%;
            overflow-x: auto;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #ffffff;
        }
        
        thead {
            /* background: #2D0050; */
            position: sticky;
            top: 0;
        }
        
        th, td {
            padding: 18px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        
        th {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
            color: #2D0050;
        }
        
        tr:hover:not(thead tr):not(.category-header) {
            background: #f9f9f9;
            transition: all 0.2s ease;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        .domain-name {
            font-weight: 700;
            font-size: 18px;
            display: flex;
            align-items: center;
            color: #2D0050;
        }
        
        .asterisk {
            font-size: 70%;
            vertical-align: super;
            color: #F57C00;
        }
        
        .original-price {
            text-decoration: line-through;
            opacity: 0.7;
            color: #777777;
        }
        
        .sale-tag {
            background: #FF3131;
            color: white;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .hot-tag {
            background: #F57C00;
            color: white;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .new-tag {
            background: #388E3C;
            color: white;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .premium-tag {
            background: #7B1FA2;
            color: white;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .special-text {
            display: inline-block;
            background: #FFC107;
            color: #000;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
        }
        
        .price {
            font-weight: 700;
            font-size: 18px;
            color: #2D0050;
        }
        
        .promo-text {
            font-weight: 600;
            font-size: 14px;
            line-height: 1.5;
            color: #555555;
        }
        
        /* .note {
            margin-top: 25px;
            font-size: 14px;
            color: #555555;
            line-height: 1.6;
            background: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #FFC107;
        }
        
        .highlight {
            color: #2D0050;
            font-weight: 600;
        } */
        
        /* .category-header {
            background: #f2f2f2;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            color: #2D0050;
        } */
        
        .filter-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
            background: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
        }
        
        .filter-group {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background: #e0e0e0;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            color: #555555;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: #2D0050;
            color: white;
            transform: translateY(-2px);
        }
        
        .filter-btn.active {
            border-bottom: 3px solid #FFC107;
        }
        
        .search {
            background: #ffffff;
            border: 1px solid #d0d0d0;
            padding: 10px 18px;
            border-radius: 6px;
            color: #333333;
            min-width: 250px;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .search:focus {
            outline: none;
            border-color: #2D0050;
            box-shadow: 0 0 0 3px rgba(45, 0, 80, 0.25);
        }
        
        .search::placeholder {
            color: #888888;
        }
        
        /* .cta-btn {
            background: #F57C00;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 25px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        } */
        
        .cta-btn:hover {
            background: #E65100;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 992px) {
            .filter-container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .heading h1 {
                font-size: 28px;
            }
        }
        
        @media (max-width: 768px) {
            .pricing-container {
                padding: 15px;
            }
            
            .heading h1 {
                font-size: 24px;
            }
            
            th, td {
                padding: 12px 10px;
            }
            
            .domain-name {
                font-size: 16px;
            }
            
            .tab {
                padding: 12px 20px;
                font-size: 13px;
            }
        }
        
        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 8px;
            vertical-align: middle;
        }
        
        .badge-success {
            background: rgba(56, 142, 60, 0.1);
            color: #2E7D32;
            border: 1px solid rgba(56, 142, 60, 0.3);
        }
        
        .badge-warning {
            background: rgba(245, 124, 0, 0.1);
            color: #E65100;
            border: 1px solid rgba(245, 124, 0, 0.3);
        }
        
        .badge-info {
            background: rgba(3, 169, 244, 0.1);
            color: #0277BD;
            border: 1px solid rgba(3, 169, 244, 0.3);
        }
        
        .tooltip {
            position: relative;
            display: inline-block;
            cursor: help;
        }
        
        .tooltip .tooltip-text {
            visibility: hidden;
            background-color: #333333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 10px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 12px;
            font-weight: normal;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        
        .tooltip .tooltip-text::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333333 transparent transparent transparent;
        }
        .show-less-btn {
                position: fixed;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                z-index: 1000;
                padding: 12px 18px;
                border: none;
                border-radius: 20px;
                cursor: pointer;
                background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
                color: white;
                font-size: 14px;
            }
        .see-more-btn{
            background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
                color: #ffffff;
                padding: 12px 18px;
                margin-top: 20px;
                border: none;
                border-radius: 20px;
                font-size: 14px;
                cursor: pointer;
                transition: transform 0.2s, box-shadow 0.2s;
        }
        @media (max-width: 600px) {
            /* .table-container {
                margin: 0 -15px;
                border-radius: 0;
            } */

            th, td {
                padding: 10px 8px;
                font-size: 14px;
            }

            .domain-name {
                font-size: 14px;
            }

            .sale-tag, .hot-tag, .new-tag, .premium-tag {
                font-size: 10px;
                padding: 2px 6px;
                margin-left: 5px;
            }

            .price, .original-price {
                font-size: 14px;
            }

            .badge {
                display: none;
            }

            .see-more-btn, .show-less-btn {
                width: 90%;
                margin: 10px auto;
                font-size: 12px;
                padding: 10px;
            }

            .tooltip {
                display: none;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
        
    </style>
</head>
<body>
    <div class="pricing-container">
        <div class="heading">
            <h1>Domain Name Registration Pricing</h1>
            <p>Find the perfect domain for your website with our competitive pricing. Take advantage of our limited-time sales and special promotions. All domains come with 24/7 customer support and our 30-day money-back guarantee.</p>
        </div>
        
        <!-- <div class="tab-container">
            <div class="tab active">Register</div>
            <div class="tab">Renew</div>
            <div class="tab">Transfer</div>
            <div class="tab">Bulk Orders</div>
            <div class="tab">Premium</div>
        </div> -->
        
        <div class="filter-container">
            <div class="filter-group">
                <span>Filter by:</span>
                <button class="filter-btn active">All</button>
                <button class="filter-btn">On Sale</button>
                <button class="filter-btn">Popular</button>
                <button class="filter-btn">New TLDs</button>
                <button class="filter-btn">Business</button>
                <button class="filter-btn">Personal</button>
            </div>
            <div class="filter-group">
                <input type="text" class="search" placeholder="Search domains...">
            </div>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Domain</th>
                        <th>Price</th>
                        <th>Promotion</th>
                        <th>Regular Price</th>
                        <th>Renewal Price</th>
                        <th>Features</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr class="category-header">
                        <td colspan="6">Popular Generic TLDs</td>
                    </tr> -->
                    
                    <!-- .com domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .com <span class="asterisk">*</span>
                                <span class="sale-tag">sale</span>
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$9.98</td>
                        <td class="promo-text">
                            SOLOPRENEUR SALE<br>
                            <span class="special-text">23% OFF</span>
                        </td>
                        <td><span class="original-price">$14.98</span></td>
                        <td>$16.98 / $11.48</td>
                        <td>Free email, DNS management <span class="badge badge-success">Fast</span></td>
                    </tr>
                    
                    <!-- .org domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .org <span class="asterisk">*</span>
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$6.98</td>
                        <td class="promo-text">
                            SOLOPRENEUR SALE<br>
                            <span class="special-text">SPECIAL</span>
                        </td>
                        <td><span class="original-price">$12.98</span></td>
                        <td>$14.98 / $10.98</td>
                        <td>Free WHOIS privacy <span class="badge badge-info">Private</span></td>
                    </tr>
                    
                    <!-- .net domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .net <span class="asterisk">*</span>
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$10.48</td>
                        <td class="promo-text">
                            SOLOPRENEUR SALE<br>
                            <span class="special-text">SPECIAL</span>
                        </td>
                        <td><span class="original-price">$14.98</span></td>
                        <td>$16.98 / $12.98</td>
                        <td>Free SSL certificate <span class="badge badge-success">Secure</span></td>
                    </tr>
                    
                    <!-- .info domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .info <span class="asterisk">*</span>
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$3.98</td>
                        <td class="promo-text">
                            <span class="special-text">60% OFF</span>
                        </td>
                        <td><span class="original-price">$9.98</span></td>
                        <td>$11.98 / $9.98</td>
                        <td>Free email forwarding</td>
                    </tr>
                    
                    <!-- .biz domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .biz <span class="asterisk">*</span>
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$5.98</td>
                        <td class="promo-text">
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$9.98</span></td>
                        <td>$11.98 / $9.48</td>
                        <td>Free DNS management</td>
                    </tr>
                    
                    <!-- Added .io domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .io <span class="asterisk">*</span>
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$29.98</td>
                        <td class="promo-text">
                            TECH STARTUP SPECIAL<br>
                            <span class="special-text">15% OFF</span>
                        </td>
                        <td><span class="original-price">$34.98</span></td>
                        <td>$34.98 / $29.98</td>
                        <td>Free SSL, WHOIS privacy <span class="badge badge-warning">Popular</span></td>
                    </tr>
                    
                    <!-- Added .dev domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .dev <span class="asterisk">*</span>
                                <span class="hot-tag">hot</span>
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$12.98</td>
                        <td class="promo-text">
                            DEVELOPER SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$15.98</span></td>
                        <td>$15.98 / $12.98</td>
                        <td>HTTPS required, enhanced security <span class="badge badge-success">Secure</span></td>
                    </tr>
                    
                    <!-- Added .app domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .app <span class="asterisk">*</span>
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$14.98</td>
                        <td class="promo-text">
                            APP DEVELOPER SPECIAL<br>
                            <span class="special-text">10% OFF</span>
                        </td>
                        <td><span class="original-price">$16.98</span></td>
                        <td>$16.98 / $14.98</td>
                        <td>Built-in HTTPS, Google-backed <span class="badge badge-info">Mobile</span></td>
                    </tr>
                    
                    <!-- <tr class="category-header">
                        <td colspan="6">Country Code TLDs</td>
                    </tr> -->
                    
                    <!-- .co.uk domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .co.uk
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$6.98</td>
                        <td class="promo-text">
                            <span class="special-text">SPECIAL</span>
                        </td>
                        <td><span class="original-price">$7.48</span></td>
                        <td>$9.48 / $7.98</td>
                        <td>UK local presence <span class="tooltip">?<span class="tooltip-text">UK address required for registration</span></span></td>
                    </tr>
                    
                    <!-- .ca domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .ca
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$11.98</td>
                        <td class="promo-text">
                            <span class="special-text">SPECIAL</span>
                        </td>
                        <td><span class="original-price">$13.98</span></td>
                        <td>$13.98 / $11.98</td>
                        <td>Canadian presence required</td>
                    </tr>
                    
                    <!-- Added .us domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .us
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$5.98</td>
                        <td class="promo-text">
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$9.98</span></td>
                        <td>$9.98 / $8.48</td>
                        <td>US presence required</td>
                    </tr>
                    
                    <!-- Added .de domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .de
                            </div>
                        </td>
                        <td class="price">$7.98</td>
                        <td class="promo-text">
                            EUROPEAN SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$9.98</span></td>
                        <td>$9.98 / $8.48</td>
                        <td>German address required</td>
                    </tr>
                    
                    <!-- Added .fr domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .fr
                            </div>
                        </td>
                        <td class="price">$8.98</td>
                        <td class="promo-text">
                            EUROPEAN SPECIAL<br>
                            <span class="special-text">15% OFF</span>
                        </td>
                        <td><span class="original-price">$10.48</span></td>
                        <td>$10.48 / $8.98</td>
                        <td>French presence required</td>
                    </tr>
                    
                    <!-- Added .au domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .com.au
                            </div>
                        </td>
                        <td class="price">$14.98</td>
                        <td class="promo-text">
                            ASIA-PACIFIC SPECIAL<br>
                        </td>
                        <td><span class="original-price">$14.98</span></td>
                        <td>$14.98 / $14.98</td>
                        <td>Australian ABN required</td>
                    </tr>
                    
                    <!-- <tr class="category-header">
                        <td colspan="6">Specialty TLDs</td>
                    </tr> -->
                    
                    <!-- Added .tech domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .tech
                                <span class="new-tag">new</span>
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$4.99</td>
                        <td class="promo-text">
                            TECH STARTUP SPECIAL<br>
                            <span class="special-text">75% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Perfect for tech businesses <span class="badge badge-warning">Trending</span></td>
                    </tr>
                    
                    <!-- Added .store domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .store
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$3.99</td>
                        <td class="promo-text">
                            E-COMMERCE SPECIAL<br>
                            <span class="special-text">80% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Ideal for online stores <span class="badge badge-info">E-commerce</span></td>
                    </tr>
                    
                    <!-- Added .online domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .online
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$3.99</td>
                        <td class="promo-text">
                            <span class="special-text">80% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$29.99 / $24.99</td>
                        <td>For any online business</td>
                    </tr>
                    
                    <!-- Added .blog domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .blog
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$12.99</td>
                        <td class="promo-text">
                            BLOGGER SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$19.99 / $17.99</td>
                        <td>Perfect for content creators <span class="badge badge-warning">Trending</span></td>
                    </tr>
                    
                    <!-- Added .ai domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .ai
                                <span class="hot-tag">hot</span>
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$79.99</td>
                        <td class="promo-text">
                            AI SPECIAL<br>
                            <span class="special-text">10% OFF</span>
                        </td>
                        <td><span class="original-price">$89.99</span></td>
                        <td>$89.99 / $79.99</td>
                        <td>Artificial intelligence businesses <span class="badge badge-success">Advanced</span></td>
                    </tr>
                    <!-- Added .cloud domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .cloud
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$9.99</td>
                        <td class="promo-text">
                            CLOUD SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$24.99 / $19.99</td>
                        <td>Cloud computing businesses <span class="badge badge-info">Cloud</span></td>
                    </tr>

                    <!-- Added .digital domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .digital
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$7.99</td>
                        <td class="promo-text">
                            DIGITAL SPECIAL<br>
                            <span class="special-text">60% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$29.99 / $24.99</td>
                        <td>Digital businesses and services</td>
                    </tr>

                    <!-- Added .shop domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .shop
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$4.99</td>
                        <td class="promo-text">
                            SHOP SPECIAL<br>
                            <span class="special-text">75% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>E-commerce and retail <span class="badge badge-warning">Popular</span></td>
                    </tr>

                    <!-- Added .pro domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .pro
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$14.99</td>
                        <td class="promo-text">
                            PROFESSIONAL SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$24.99 / $19.99</td>
                        <td>Professional services <span class="badge badge-info">Business</span></td>
                    </tr>

                    <!-- Added .site domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .site
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$3.99</td>
                        <td class="promo-text">
                            <span class="special-text">80% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$29.99 / $24.99</td>
                        <td>General purpose websites</td>
                    </tr>

                    <!-- Added .agency domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .agency
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            AGENCY SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Professional agencies <span class="badge badge-success">Business</span></td>
                    </tr>

                    <!-- Added .studio domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .studio
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$9.99</td>
                        <td class="promo-text">
                            CREATIVE SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$24.99 / $19.99</td>
                        <td>Creative professionals <span class="badge badge-info">Creative</span></td>
                    </tr>

                    <!-- Added .edu.au domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .edu.au
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            EDUCATION SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Australian educational institutions</td>
                    </tr>

                    <!-- Added .guru domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .guru
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$8.99</td>
                        <td class="promo-text">
                            EXPERT SPECIAL<br>
                            <span class="special-text">55% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$24.99 / $19.99</td>
                        <td>Expert consultants <span class="badge badge-warning">Trending</span></td>
                    </tr>
                    <!-- Added .academy domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .academy
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            EDUCATION SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Educational institutions <span class="badge badge-info">Education</span></td>
                    </tr>

                    <!-- Added .accountant domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .accountant
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            FINANCE SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$37.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Financial services <span class="badge badge-success">Business</span></td>
                    </tr>

                    <!-- Continue with more domains alphabetically... -->

                    <!-- Added .zone domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .zone
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            DEVELOPER SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$28.99</span></td>
                        <td>$29.99 / $24.99</td>
                        <td>Developer zones <span class="badge badge-info">Tech</span></td>
                    </tr>
                    <!-- Added .xyz domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .xyz
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$1.99</td>
                        <td class="promo-text">
                            <span class="special-text">90% OFF</span>
                        </td>
                        <td><span class="original-price">$19.99</span></td>
                        <td>$24.99 / $19.99</td>
                        <td>General purpose domain <span class="badge badge-warning">Popular</span></td>
                    </tr>

                    <!-- Added .support domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .support
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$15.99</td>
                        <td class="promo-text">
                            SUPPORT SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$24.99</span></td>
                        <td>$29.99 / $24.99</td>
                        <td>Customer support services <span class="badge badge-info">Service</span></td>
                    </tr>
                    
                    <!-- Added .live domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .live
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$17.99</td>
                        <td class="promo-text">
                            STREAMING SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Live streaming and events</td>
                    </tr>
                    <!-- Added .market domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .market
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$16.99</td>
                        <td class="promo-text">
                            MARKETPLACE SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$30.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Online marketplaces <span class="badge badge-info">Business</span></td>
                    </tr>

                    <!-- Added .design domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .design
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            DESIGNER SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Design professionals <span class="badge badge-success">Creative</span></td>
                    </tr>

                    <!-- Added .global domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .global
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            GLOBAL BUSINESS<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$30.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>International businesses <span class="badge badge-warning">Global</span></td>
                    </tr>

                    <!-- Added .expert domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .expert
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            EXPERT SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$43.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Professional experts <span class="badge badge-success">Professional</span></td>
                    </tr>

                    <!-- Added .solutions domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .solutions
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$14.99</td>
                        <td class="promo-text">
                            BUSINESS SOLUTIONS<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Business solutions <span class="badge badge-info">Business</span></td>
                    </tr>

                    <!-- Added .world domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .world
                                <span class="sale-tag">sale</span>
                            </div>
                        </td>
                        <td class="price">$12.99</td>
                        <td class="promo-text">
                            GLOBAL SPECIAL<br>
                            <span class="special-text">60% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Global websites <span class="badge badge-warning">International</span></td>
                    </tr>

                    <!-- Added .software domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .software
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            SOFTWARE SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$35.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Software companies <span class="badge badge-success">Tech</span></td>
                    </tr>

                    <!-- Added .services domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .services
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$15.99</td>
                        <td class="promo-text">
                            SERVICE PROVIDERS<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$28.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Service businesses <span class="badge badge-info">Services</span></td>
                    </tr>

                    <!-- Added .network domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .network
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$13.99</td>
                        <td class="promo-text">
                            NETWORK SPECIAL<br>
                            <span class="special-text">55% OFF</span>
                        </td>
                        <td><span class="original-price">$30.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Network services <span class="badge badge-warning">Tech</span></td>
                    </tr>

                    <!-- Added .consulting domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .consulting
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$27.99</td>
                        <td class="promo-text">
                            CONSULTANT SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$37.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Consulting firms <span class="badge badge-success">Business</span></td>
                    </tr>
                    <!-- Added .community domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .community
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$16.99</td>
                        <td class="promo-text">
                            COMMUNITY SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$28.99</span></td>
                        <td>$32.99 / $28.99</td>
                        <td>Community organizations <span class="badge badge-info">Social</span></td>
                    </tr>

                    <!-- Added .law domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .law
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$89.99</td>
                        <td class="promo-text">
                            LEGAL SPECIAL<br>
                            <span class="special-text">15% OFF</span>
                        </td>
                        <td><span class="original-price">$105.99</span></td>
                        <td>$109.99 / $99.99</td>
                        <td>Legal professionals <span class="badge badge-success">Legal</span></td>
                    </tr>

                    <!-- Added .media domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .media
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$18.99</td>
                        <td class="promo-text">
                            MEDIA SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Media companies <span class="badge badge-warning">Media</span></td>
                    </tr>

                    <!-- Added .education domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .education
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$14.99</td>
                        <td class="promo-text">
                            EDU SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Educational institutions <span class="badge badge-info">Education</span></td>
                    </tr>

                    <!-- Added .marketing domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .marketing
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            MARKETING PRO<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Marketing agencies <span class="badge badge-success">Business</span></td>
                    </tr>
                    <!-- Added .fitness domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .fitness
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            FITNESS SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Fitness businesses <span class="badge badge-info">Health</span></td>
                    </tr>

                    <!-- Added .restaurant domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .restaurant
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            RESTAURANT SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$52.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Restaurant businesses <span class="badge badge-success">Food</span></td>
                    </tr>

                    <!-- Added .photography domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .photography
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            PHOTO SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$35.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Photography websites <span class="badge badge-success">Creative</span></td>
                    </tr>

                    <!-- Added .guide domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .guide
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            GUIDE SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$30.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Guide & tutorial websites <span class="badge badge-info">Information</span></td>
                    </tr>

                    <!-- Added .health domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .health
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$49.99</td>
                        <td class="promo-text">
                            HEALTH SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$62.99</span></td>
                        <td>$64.99 / $59.99</td>
                        <td>Healthcare websites <span class="badge badge-success">Health</span></td>
                    </tr>

                    <!-- Added .finance domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .finance
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            FINANCE SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$46.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Financial services <span class="badge badge-warning">Business</span></td>
                    </tr>

                    <!-- Added .gallery domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .gallery
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$17.99</td>
                        <td class="promo-text">
                            ART SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$29.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Art galleries <span class="badge badge-info">Art</span></td>
                    </tr>

                    <!-- Added .events domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .events
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$22.99</td>
                        <td class="promo-text">
                            EVENT SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Event planning <span class="badge badge-warning">Events</span></td>
                    </tr>

                    <!-- Added .capital domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .capital
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$44.99</td>
                        <td class="promo-text">
                            INVESTMENT SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$56.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Investment firms <span class="badge badge-success">Finance</span></td>
                    </tr>

                    <!-- Added .systems domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .systems
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$16.99</td>
                        <td class="promo-text">
                            SYSTEMS SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$30.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>IT systems <span class="badge badge-info">Tech</span></td>
                    </tr>

                    <!-- Added .training domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .training
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$21.99</td>
                        <td class="promo-text">
                            TRAINING SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$33.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Training services <span class="badge badge-warning">Education</span></td>
                    </tr>

                    <!-- Added .ventures domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .ventures
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            VENTURE SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$52.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Venture capital <span class="badge badge-success">Business</span></td>
                    </tr>
                    <!-- Added .center domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .center
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$18.99</td>
                        <td class="promo-text">
                            CENTER SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$31.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Community centers <span class="badge badge-info">Community</span></td>
                    </tr>

                    <!-- Added .care domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .care
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            CARE SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Healthcare services <span class="badge badge-success">Health</span></td>
                    </tr>

                    <!-- Added .fund domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .fund
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            FUND SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Investment funds <span class="badge badge-warning">Finance</span></td>
                    </tr>

                    <!-- Added .charity domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .charity
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            CHARITY SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Charitable organizations <span class="badge badge-success">Nonprofit</span></td>
                    </tr>

                    <!-- Added .university domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .university
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$44.99</td>
                        <td class="promo-text">
                            EDU SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$59.99</span></td>
                        <td>$64.99 / $59.99</td>
                        <td>Educational institutions <span class="badge badge-success">Education</span></td>
                    </tr>
                    <!-- Added .careers domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .careers
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            CAREER SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$45.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Career websites <span class="badge badge-info">Jobs</span></td>
                    </tr>

                    <!-- Added .company domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .company
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            BUSINESS SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Business websites <span class="badge badge-warning">Business</span></td>
                    </tr>

                    <!-- Added .institute domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .institute
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            INSTITUTE SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$35.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Educational institutes <span class="badge badge-success">Education</span></td>
                    </tr>
                    <!-- Added .coach domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .coach
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            COACH SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$45.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Coaching services <span class="badge badge-info">Education</span></td>
                    </tr>

                    <!-- Added .group domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .group
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            GROUP SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$32.99</span></td>
                        <td>$34.99 / $29.99</td>
                        <td>Group organizations <span class="badge badge-warning">Business</span></td>
                    </tr>

                    <!-- Added .vision domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .vision
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            VISION SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$35.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Vision & mission sites <span class="badge badge-success">Business</span></td>
                    </tr>

                    <!-- Added .dental domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .dental
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            DENTAL SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$52.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Dental practices <span class="badge badge-success">Health</span></td>
                    </tr>

                    <!-- Added .style domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .style
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$22.99</td>
                        <td class="promo-text">
                            STYLE SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$41.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Fashion & style sites <span class="badge badge-info">Fashion</span></td>
                    </tr>

                    <!-- Added .wiki domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .wiki
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$18.99</td>
                        <td class="promo-text">
                            WIKI SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$37.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Knowledge bases <span class="badge badge-warning">Information</span></td>
                    </tr>

                    <!-- Added .clinic domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .clinic
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            CLINIC SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Medical clinics <span class="badge badge-success">Health</span></td>
                    </tr>

                    <!-- Added .foundation domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .foundation
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$26.99</td>
                        <td class="promo-text">
                            FOUNDATION SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$44.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Nonprofit foundations <span class="badge badge-info">Nonprofit</span></td>
                    </tr>

                    <!-- Added .international domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .international
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            GLOBAL SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$45.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>International businesses <span class="badge badge-success">Global</span></td>
                    </tr>

                    <!-- Added .productions domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .productions
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            PRODUCTION SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$44.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Production companies <span class="badge badge-warning">Media</span></td>
                    </tr>
                    <!-- Added .wedding domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .wedding
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            WEDDING SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Wedding websites <span class="badge badge-info">Events</span></td>
                    </tr>

                    <!-- Added .travel domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .travel
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$69.99</td>
                        <td class="promo-text">
                            TRAVEL SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$89.99</span></td>
                        <td>$94.99 / $89.99</td>
                        <td>Travel agencies <span class="badge badge-success">Tourism</span></td>
                    </tr>

                    <!-- Added .video domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .video
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            VIDEO SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Video content <span class="badge badge-warning">Media</span></td>
                    </tr>

                    <!-- Added .consulting domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .consulting
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            BUSINESS SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$54.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Consulting firms <span class="badge badge-success">Business</span></td>
                    </tr>

                    <!-- Added .luxury domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .luxury
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$499.99</td>
                        <td class="promo-text">
                            LUXURY SPECIAL<br>
                            <span class="special-text">15% OFF</span>
                        </td>
                        <td><span class="original-price">$599.99</span></td>
                        <td>$649.99 / $599.99</td>
                        <td>Luxury brands <span class="badge badge-success">Premium</span></td>
                    </tr>

                    <!-- Added .games domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .games
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$14.99</td>
                        <td class="promo-text">
                            GAMING SPECIAL<br>
                            <span class="special-text">60% OFF</span>
                        </td>
                        <td><span class="original-price">$34.99</span></td>
                        <td>$39.99 / $34.99</td>
                        <td>Gaming websites <span class="badge badge-warning">Gaming</span></td>
                    </tr>

                    <!-- Added .healthcare domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .healthcare
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$44.99</td>
                        <td class="promo-text">
                            HEALTH SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$64.99</span></td>
                        <td>$69.99 / $64.99</td>
                        <td>Healthcare providers <span class="badge badge-success">Health</span></td>
                    </tr>

                    <!-- Added .rent domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .rent
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            RENTAL SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$54.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Rental businesses <span class="badge badge-info">Real Estate</span></td>
                    </tr>

                    <!-- Added .flowers domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .flowers
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            FLORIST SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Florist businesses <span class="badge badge-info">Retail</span></td>
                    </tr>

                    <!-- Added .golf domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .golf
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            GOLF SPECIAL<br>
                            <span class="special-text">35% OFF</span>
                        </td>
                        <td><span class="original-price">$59.99</span></td>
                        <td>$64.99 / $59.99</td>
                        <td>Golf related <span class="badge badge-success">Sports</span></td>
                    </tr>

                    <!-- Added .pizza domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .pizza
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            FOOD SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Pizza restaurants <span class="badge badge-warning">Food</span></td>
                    </tr>

                    <!-- Added .soccer domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .soccer
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            SPORTS SPECIAL<br>
                            <span class="special-text">55% OFF</span>
                        </td>
                        <td><span class="original-price">$44.99</span></td>
                        <td>$49.99 / $44.99</td>
                        <td>Soccer related <span class="badge badge-info">Sports</span></td>
                    </tr>

                    <!-- Added .wine domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .wine
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$49.99</td>
                        <td class="promo-text">
                            WINE SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$69.99</span></td>
                        <td>$74.99 / $69.99</td>
                        <td>Wine businesses <span class="badge badge-success">Beverage</span></td>
                    </tr>

                    <!-- Added .yoga domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .yoga
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            WELLNESS SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Yoga studios <span class="badge badge-warning">Fitness</span></td>
                    </tr>

                    <!-- Added .eco domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .eco
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$59.99</td>
                        <td class="promo-text">
                            GREEN SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$79.99</span></td>
                        <td>$84.99 / $79.99</td>
                        <td>Environmental sites <span class="badge badge-success">Green</span></td>
                    </tr>

                    <!-- Added .house domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .house
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            REALTY SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$54.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Real estate <span class="badge badge-info">Property</span></td>
                    </tr>

                    <!-- Added .music domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .music
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            MUSIC SPECIAL<br>
                            <span class="special-text">60% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Music industry <span class="badge badge-warning">Entertainment</span></td>
                    </tr>

                    <!-- Added .pet domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .pet
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            PET SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$49.99</span></td>
                        <td>$54.99 / $49.99</td>
                        <td>Pet services <span class="badge badge-info">Pets</span></td>
                    </tr>

                    <!-- Added .security domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .security
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$79.99</td>
                        <td class="promo-text">
                            SECURITY SPECIAL<br>
                            <span class="special-text">20% OFF</span>
                        </td>
                        <td><span class="original-price">$99.99</span></td>
                        <td>$104.99 / $99.99</td>
                        <td>Security services <span class="badge badge-success">Security</span></td>
                    </tr>

                    <!-- Added .taxi domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .taxi
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$34.99</td>
                        <td class="promo-text">
                            TRANSPORT SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$59.99</span></td>
                        <td>$64.99 / $59.99</td>
                        <td>Taxi services <span class="badge badge-warning">Transport</span></td>
                    </tr>
                    <!-- Added .movie domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .movie
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$29.99</td>
                        <td class="promo-text">
                            ENTERTAINMENT SPECIAL<br>
                            <span class="special-text">45% OFF</span>
                        </td>
                        <td><span class="original-price">$54.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Movie industry <span class="badge badge-warning">Entertainment</span></td>
                    </tr>

                    <!-- Added .art domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .art
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$39.99</td>
                        <td class="promo-text">
                            ART SPECIAL<br>
                            <span class="special-text">30% OFF</span>
                        </td>
                        <td><span class="original-price">$56.99</span></td>
                        <td>$59.99 / $54.99</td>
                        <td>Art galleries & artists <span class="badge badge-success">Creative</span></td>
                    </tr>

                    <!-- Added .fit domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .fit
                                <span class="new-tag">new</span>
                            </div>
                        </td>
                        <td class="price">$19.99</td>
                        <td class="promo-text">
                            FITNESS SPECIAL<br>
                            <span class="special-text">50% OFF</span>
                        </td>
                        <td><span class="original-price">$39.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Fitness websites <span class="badge badge-info">Health</span></td>
                    </tr>

                    <!-- Added .farm domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .farm
                                <span class="hot-tag">hot</span>
                            </div>
                        </td>
                        <td class="price">$24.99</td>
                        <td class="promo-text">
                            AGRICULTURE SPECIAL<br>
                            <span class="special-text">40% OFF</span>
                        </td>
                        <td><span class="original-price">$41.99</span></td>
                        <td>$44.99 / $39.99</td>
                        <td>Agricultural businesses <span class="badge badge-warning">Agriculture</span></td>
                    </tr>

                    <!-- Added .casino domain -->
                    <tr>
                        <td>
                            <div class="domain-name">
                                .casino
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td class="price">$89.99</td>
                        <td class="promo-text">
                            GAMING SPECIAL<br>
                            <span class="special-text">25% OFF</span>
                        </td>
                        <td><span class="original-price">$119.99</span></td>
                        <td>$124.99 / $119.99</td>
                        <td>Gaming websites <span class="badge badge-success">Gaming</span></td>
                    </tr>
                </tbody>
            </table>
        </div> <br> <br>
        
        <!-- <div class="note">
            <span class="highlight">Note:</span> Prices shown are for the first term only. Domains marked with <span class="asterisk">*</span> require ICANN fees. All registrations include free DNS management and email forwarding. Bulk discounts available for orders of 5+ domains.
        </div> -->
</div>
</body>
</html>

        
        



            
            <script>
                // FILTER FUNCTIONALITY
                // Get all necessary elements
                const filterButtons = document.querySelectorAll('.filter-btn');
                const searchInput = document.querySelector('.search');
                const tableRows = document.querySelectorAll('tbody tr');
                const initialRowCount = 10;
                let isExpanded = false;

                // Filter state
                let currentFilter = 'all';
                let searchTerm = '';

                // Filter functions
                function filterDomains() {
                    let visibleCount = 0;
                    tableRows.forEach((row, index) => {
                        const domainCell = row.querySelector('.domain-name');
                        if (!domainCell) return;

                        const domain = domainCell.textContent.toLowerCase();
                        const hasOnSale = row.querySelector('.sale-tag') !== null;
                        const hasPopular = row.querySelector('.hot-tag') !== null;
                        const hasNew = row.querySelector('.new-tag') !== null;
                        const hasBusiness = row.querySelector('.badge-success') !== null;
                        const hasPersonal = !hasBusiness;

                        // Search filter
                        const matchesSearch = domain.includes(searchTerm.toLowerCase()) ||
                            row.textContent.toLowerCase().includes(searchTerm.toLowerCase());

                        // Category filter
                        let matchesFilter = true;
                        switch(currentFilter) {
                            case 'all':
                                matchesFilter = true;
                                break;
                            case 'on sale':
                                matchesFilter = hasOnSale;
                                break;
                            case 'popular':
                                matchesFilter = hasPopular;
                                break;
                            case 'new tlds':
                                matchesFilter = hasNew;
                                break;
                            case 'business':
                                matchesFilter = hasBusiness;
                                break;
                            case 'personal':
                                matchesFilter = hasPersonal;
                                break;
                        }

                        const shouldShow = matchesFilter && matchesSearch;
                        
                        if (shouldShow) {
                            visibleCount++;
                            if (!isExpanded && visibleCount > initialRowCount) {
                                row.style.display = 'none';
                            } else {
                                row.style.display = '';
                            }
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    // Update see more button visibility
                    const seeMoreBtn = document.querySelector('.see-more-btn');
                    if (seeMoreBtn) {
                        seeMoreBtn.style.display = (visibleCount > initialRowCount && !isExpanded) ? 'block' : 'none';
                    }
                }

                // Event listeners
                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Update active state
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        // Update filter and apply
                        currentFilter = button.textContent.toLowerCase();
                        filterDomains();
                    });
                });

                searchInput.addEventListener('input', (e) => {
                    searchTerm = e.target.value;
                    filterDomains();
                });

                // Initialize with "All" filter
                filterDomains();



                // SEE MORE FUNCTIONALITY AND SORTING ALPHABETICALLY BY DOMAIN NAME FUNCTIONALITY   
            document.addEventListener('DOMContentLoaded', function() {
                // Sort table rows alphabetically (excluding headers)
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr:not(.category-header)'));
                
                // Sort rows based on domain name text
                rows.sort((a, b) => {
                    const domainA = a.querySelector('.domain-name')?.textContent.trim().toLowerCase() || '';
                    const domainB = b.querySelector('.domain-name')?.textContent.trim().toLowerCase() || '';
                    return domainA.localeCompare(domainB);
                });

                // Reinsert sorted rows
                rows.forEach(row => tbody.appendChild(row));

                const initialRowCount = 10;
                let isExpanded = false;

                // Create See More button
                const seeMoreBtn = document.createElement('button');
                seeMoreBtn.className = 'see-more-btn';
                seeMoreBtn.innerHTML = 'View More Domains <span>↓</span>';
                tbody.parentElement.after(seeMoreBtn);

                // Create Show Less button
                const showLessBtn = document.createElement('button');
                showLessBtn.className = 'show-less-btn';
                showLessBtn.innerHTML = 'Show Less <span>↑</span>';
                showLessBtn.style.display = 'none';

                const scrollToTable = () => {
                    const table = document.querySelector('.table-container');
                    const headerOffset = 80;
                    const elementPosition = table.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                };

                const hideExtraRows = () => {
                    rows.forEach((row, index) => {
                        if (index >= initialRowCount) {
                            row.style.display = 'none';
                        } else {
                            row.style.display = '';
                        }
                    });
                };

                const showAllRows = () => {
                    rows.forEach((row, index) => {
                        row.style.display = '';
                        row.style.animation = `fadeInRow ${0.1 + index * 0.05}s ease-out`;
                    });
                };

                // Button click handlers
                seeMoreBtn.addEventListener('click', function() {
                    showAllRows();
                    seeMoreBtn.style.display = 'none';
                    document.body.appendChild(showLessBtn);
                    showLessBtn.style.display = 'block';
                    isExpanded = true;
                });

                showLessBtn.addEventListener('click', function() {
                    hideExtraRows();
                    seeMoreBtn.style.display = 'block';
                    showLessBtn.style.display = 'none';
                    showLessBtn.remove();
                    isExpanded = false;
                    scrollToTable();
                });

                // Add CSS animations
                const style = document.createElement('style');
                style.textContent = `
                    @keyframes fadeInRow {
                        from { opacity: 0; transform: translateY(10px); }
                        to { opacity: 1; transform: translateY(0); }
                    }

                    .see-more-btn, .show-less-btn {
                        background: linear-gradient(135deg, #4B0082 0%, #932C8B 100%);
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 25px;
                        font-size: 16px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        margin: 20px auto;
                        display: block;
                        box-shadow: 0 4px 15px rgba(75, 0, 130, 0.2);
                    }

                    .see-more-btn span, .show-less-btn span {
                        display: inline-block;
                        margin-left: 8px;
                        transition: transform 0.3s ease;
                    }

                    .see-more-btn:hover span {
                        transform: translateY(3px);
                    }

                    @media (max-width: 768px) {
                        .see-more-btn, .show-less-btn {
                            width: 90%;
                            font-size: 14px;
                            padding: 10px 20px;
                        }
                    }
                `;
                document.head.appendChild(style);

                // Initialize
                hideExtraRows();
            });
            </script>
            