<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Companies</title>
    <style>
        /* Styles for Featured Companies */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .company-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .company-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .company-details {
            flex: 1;
        }
        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .company-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .company-link {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #198754;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .company-link:hover {
            background-color: #198754;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Featured Companies</h1>
        <!-- Marvel Entertainment Company -->
        <div class="company-card">
            <img src="{{asset('assets/images/f1.png')}}" alt="F1Soft International Pvt. Ltd." class="company-logo">
            <div class="company-details">
                <h2 class="company-name">F1Soft International Pvt. Ltd.</h2>
                <p class="company-description">F1Soft International Pvt. Ltd. is a software company based in Nepal. It is one of the leading IT companies in the country and specializes in providing software solutions and services. F1Soft offers a range of products and services, including mobile banking solutions, payment gateways, remittance solutions, and software development services.</p>
            </div>
            <a href="https://www.f1soft.com/" class="company-link">Visit Website</a>
        </div>

        <!-- Microsoft -->
        

        <!-- Google -->
        <div class="company-card">
            <img src="{{asset('assets/images/deer.png')}}" alt="Deerwalk " class="company-logo">
            <div class="company-details">
                <h2 class="company-name">Deerwalk</h2>
                <p class="company-description">Deerwalk is a software company based in Nepal that focuses on providing healthcare analytics and data management solutions. It was founded in 2009 by Rudra Pandey, a prominent figure in Nepal's IT industry. Deerwalk's primary goal is to revolutionize healthcare data analysis and management by leveraging advanced technologies and analytics.</p>
            </div>
            <a href="http://deerwalkgroup.com/" class="company-link">Visit Website</a>
        </div>


        <div class="company-card">
            <img src="{{asset('assets/images/word.png')}}" alt="WorldLink Communications Pvt. Ltd. " class="company-logo">
            <div class="company-details">
                <h2 class="company-name">WorldLink Communications Pvt. Ltd.</h2>
                <p class="company-description">WorldLink Communications Pvt. Ltd. is one of the largest internet service providers (ISPs) in Nepal. Established in 1995, WorldLink has played a significant role in the development of telecommunications and internet services in the country. The company offers a wide range of services including broadband internet, digital TV, and enterprise solutions.</p>
            </div>
            <a href="https://worldlink.com.np/" class="company-link">Visit Website</a>
        </div>

        <div class="company-card">
            <img src="{{asset('assets/images/nabil.png')}}" alt="Nabil Bank Limited" class="company-logo">
            <div class="company-details">
                <h2 class="company-name">Nabil Bank Limited</h2>
                <p class="company-description">Nabil Bank Limited is one of the leading commercial banks in Nepal. Established in 1984, Nabil Bank has a long history of providing a wide range of banking and financial services to individuals, businesses, and institutions. The bank has a strong presence across Nepal with a network of branches, ATMs, and digital banking channels.</p>
            </div>
            <a href="https://www.nabilbank.com/individual" class="company-link">Visit Website</a>
        </div>

        <div class="company-card">
            <img src="{{asset('assets/images/nepal.png')}}" alt="Nepal Doorsanchar Company Ltd." class="company-logo">
            <div class="company-details">
                <h2 class="company-name">Nepal Doorsanchar Company Ltd.</h2>
                <p class="company-description">Nepal Telecom (NT), also known as Nepal Doorsanchar Company Limited, is the largest telecommunications service provider in Nepal. It was established in 2032 BS (1975 AD) as a state-owned company under the Ministry of Communications. Nepal Telecom offers a wide range of telecommunications services, including landline and mobile phone services, internet services, and various value-added services.</p>
            </div>
            <a href="https://www.ntc.net.np/" class="company-link">Visit Website</a>
        </div>

        <div class="company-card">
            <img src="{{asset('assets/images/air.png')}}" alt="Nepal Airlines Corporation" class="company-logo">
            <div class="company-details">
                <h2 class="company-name">Nepal Airlines Corporation</h2>
                <p class="company-description">
                    Nepal Airlines Corporation, commonly known as Nepal Airlines, is the flag carrier airline of Nepal. Established in 1958 as Royal Nepal Airlines Corporation (RNAC), it is one of the oldest airlines in Asia. Nepal Airlines operates domestic and international flights, serving various destinations within Nepal and several international destinations in Asia and the Middle East.</p>
            </div>
            <a href="https://www.nepalairlines.com.np/" class="company-link">Visit Website</a>
        </div>

        <div class="company-card">
            <img src="{{asset('assets/images/vianet.png')}}" alt="Vianet Communications Pvt. Ltd." class="company-logo">
            <div class="company-details">
                <h2 class="company-name">Vianet Communications Pvt. Ltd.</h2>
                <p class="company-description">Vianet Communications Pvt. Ltd. is one of the leading Internet service providers (ISPs) in Nepal. It was established in 1999 and has since grown to become a prominent player in the telecommunications and broadband industry in the country. Vianet offers a range of services including high-speed internet, digital TV, and enterprise solutions.</p>
            </div>
            <a href="https://www.vianet.com.np/" class="company-link">Visit Website</a>
        </div>
    </div>
</body>
</html>
