<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .journey_section {
            overflow: hidden;
            position: relative;
        }

        .journey_section:before {
            content: "";
            width: 3px;
            height: 100%;
            background: red;
            position: absolute;
            top: 0;
            left: 50%;
        }

        .journey_section .journey_hero_section {
            padding-right: 30px;
            position: relative;
        }

        .journey_section .journey_hero_section:first-child:before,
        .journey_section .journey_hero_section:last-child:before {
            content: "";
            width: 13px;
            height: 13px;
            border-radius: 50%;
            border: 2px solid black;
            background: purple;
            margin: 0 auto;
            position: absolute;
            top: -50px;
            left: 0;
            right: -3px;
        }

        .journey_section .journey_hero_section:before,
        .journey_section .journey_hero_section:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .journey_section .journey_year_section {
            vertical-align: middle;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #090136;
            border: 2px solid magenta;
            box-sizing: content-box;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: -4px;
            text-align: center;
        }

        .journey_section .journey_year_section:before {
            content: "";
            text-align: center;
            display: block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .journey_hero_section .NewText2 {
            margin-top: 0.65rem;
        }

        .journey_section .investor_section {
            display: inline-block;
            padding: 7px 20px;
            margin: 0;
            font-size: 14px;
            color: black;
            background: greenyellow;
            text-align: center;
            position: absolute;
            top: 50%;
            right: 35%;
            transform: translateY(-50%);
        }

        .journey_section .investor_section:before {
            content: "";
            border-right: 18px solid blueviolet;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            position: absolute;
            top: 0;
            left: -18px;
        }

        .journey_section .journey_content {
            border-radius: 3px;
            width: 46.5%;
            padding: 30px;
            margin: 0 20px 0 0;
            /* background: var(--iq-gray); */
            position: relative;
        }

        .journey_section .journey_hero_section:before,
        .journey_section .journey_hero_section:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .journey_section .journey_hero_section:nth-child(2n) {
            padding: 0 0 0 30px;
        }
    </style>
</head>

<body>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="journey_section">

                        <div class="journey_hero_section my-5">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">Jan
                                    <br>2022
                                </p>
                            </span>
                            <span class="investor_section">0 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">Begining</h4>
                                <!-- <h6 class="mb-3">0 Insvestor</h6> -->
                                <!-- <span>0 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    Token Shayari's quality upgrade in this crucial phase drew investors from around the world. They offered security, good returns, a clear roadmap, and, most importantly, earned trust.
                                </p>
                                <h4 class="fs-4">Starting form $0</h4>
                            </div>
                        </div>

                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">April <br> 2022</p>
                            </span>
                            <span class="investor_section">03 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">1st Phase</h4>
                                <!-- <h6 class="mb-3">03 Insvestor</h6> -->
                                <!-- <span>03 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    Our hard work paid off when we received a $1 million investment. This investment gave the entire company the courage to move forward and pursue our vision. We are grateful to management for their support and recognition of the quality of our product..</p>
                                <h4 class="fs-4">Closed at 1M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">July <br>2022</p>
                            </span>
                            <span class="investor_section">06 Insvestor</span>
                            <div class="journey_content ">
                                <h4 class="mb-3">2nd Phase</h4>
                                <!-- <h6 class="mb-3">06 Insvestor</h6> -->
                                <!-- <span>06 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    We achieved another result that boosted the company's value and growth potential, and we also received a fresh investment of 2.5 million.</p>
                                <h4 class="fs-4">Closed at 1M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">Sept <br>2022</p>
                            </span>
                            <span class="investor_section">11 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">3rd Phase</h4>
                                <!-- <h6 class="mb-3">11 Insvestor</h6> -->
                                <!-- <span>11 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    Token Sayari, a company that develops gold-backed tokens, has made agreements with investors of all sizes, from small to large. The company has also formed joint ventures with gold mines around the world, and recently signed a joint venture worth approximately $300 million. In addition, Token Sayari has received a total of $7 million from more investors.</p>
                                <h4 class="fs-4">Closed at 2.5M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">Dec <br>2022</p>
                            </span>
                            <span class="investor_section">20 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">4th Phase</h4>
                                <!-- <h6 class="mb-3">20 Insvestor</h6> -->
                                <!-- <span>20 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    We reached another major milestone! We received $780 million worth of assets from other gold mines, hysterical assets, properties, etc. This was a golden opportunity for us, and we proved our ability to deliver quality. As a result, we received another good investment. </p>
                                <h4 class="fs-4">Closed at 7M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">Mar <br>2023</p>
                            </span>
                            <span class="investor_section">32 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">5th Phase</h4>
                                <!-- <h6 class="mb-3">32 Insvestor</h6> -->
                                <!-- <span>32 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    Token Shayari's quality upgrade in this crucial phase drew investors from around the world. They offered security, good returns, a clear roadmap, and, most importantly, earned trust. </p>
                                <h4 class="fs-4">Closed at 10.5M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">July <br>2023</p>
                            </span>
                            <span class="investor_section">44 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">6th Phase</h4>
                                <!-- <h6 class="mb-3">44 Insvestor</h6> -->
                                <!-- <span>44 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    We surpassed our goal of 17.5 million in this phase, making significant inroads in the crypto market. </p>
                                <h4 class="fs-4">Closed at 15.5M $</h4>
                            </div>
                        </div>
                        <div class="journey_hero_section">
                            <span class="journey_year_section text-white">
                                <p class="NewText2">Till <br>
                                    Now</p>
                            </span>
                            <span class="investor_section">65 Insvestor</span>
                            <div class="journey_content">
                                <h4 class="mb-3">Ongoing</h4>
                                <!-- <h6 class="mb-3">65 Insvestor</h6> -->
                                <!-- <span>65 Insvestor</span> -->
                                <p class="iq-mt-10">
                                    Sayari Token has more than one billion dollars in assets, including gold mines, properties, and other investments. We have a large and growing number of wealthy investors, which will help us to improve the quality of our product even further.</p>
                                <h4 class="fs-4">Closed at 17.5M $</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>