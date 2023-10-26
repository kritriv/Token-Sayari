<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .timeline {}

        .iq-timeline {
            overflow: hidden;
            position: relative;
        }

        .iq-timeline:before {
            content: "";
            width: 3px;
            height: 100%;
            background: black;
            position: absolute;
            top: 0;
            left: 50%;
        }

        .iq-timeline .timeline {
            padding-right: 30px;
            position: relative;
        }

        .iq-timeline .timeline:before,
        .iq-timeline .timeline:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .iq-timeline .timeline:first-child:before,
        .iq-timeline .timeline:last-child:before {
            content: "";
            width: 13px;
            height: 13px;
            border-radius: 50%;
            margin: 0 auto;
            position: absolute;
            top: -50px;
            left: 0;
            right: -3px;
        }

        .iq-timeline .timeline:last-child:before {
            top: auto;
            bottom: 0;
        }

        .iq-timeline .timeline-icon {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #090136;
            border: 2px solid pink;
            box-sizing: content-box;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: -4px;
            text-align: center;
        }

        .iq-timeline .timeline-icon-new {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: black;
            border: 2px solid black;
            box-sizing: content-box;
            margin: auto;
            position: absolute;
            top: -150px;
            left: 0;
            bottom: 0;
            right: -4px;
            text-align: center;
        }

        .iq-timeline .timeline-icon-new:before {
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

        .iq-timeline .timeline-icon:before {
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

        .iq-timeline .year {
            font-weight: 500 !important;
            display: inline-block;
            padding: 30px;
            margin: 0;
            font-size: 1rem;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            color: black;
            border: 1px solid black;
            text-align: center;
            position: absolute;
            top: 60%;
            right: 35%;
            transform: translateY(-50%);
        }

        .timeline .timeline-numbers_1 {
            font-size: 2rem !important;
            font-weight: 500 !important;
            display: inline-block;
            padding: 30px;
            margin: 0;
            font-size: 0.8rem;
            width: 110px;
            height: 110px;
            color: black;
            text-align: center;
            position: absolute;
            top: 5%;
            right: 10%;
            opacity: 0.8;
            transform: translateY(-50%);
        }

        .timeline .timeline-numbers_2 {
            font-size: 2rem !important;
            font-weight: 500 !important;
            display: inline-block;
            padding: 30px;
            margin: 0;
            font-size: 0.8rem;
            width: 110px;
            height: 110px;
            color: black;
            text-align: center;
            position: absolute;
            top: 8%;
            right: 70%;
            opacity: 0.8;
            transform: translateY(-50%);
        }

        .iq-timeline .timeline-content {
            border-radius: 3px;
            width: 50%;
            padding: 30px;
            margin: 0 20px 0 0;
            position: relative;
        }


        .iq-timeline .timeline-content_line1:after {
            content: "";
            position: absolute;
            width: 40%;
            border: 1px solid;
            top: 18%;
            right: -20px;
            transform: translateY(-50%);
            z-index: -99;
        }

        .iq-timeline .timeline-content_line2:after {
            content: "";
            position: absolute;
            width: 40%;
            border: 1px solid;
            top: 18%;
            right: -20px;
            transform: translateY(-50%);
            z-index: -99;
        }

        .iq-timeline .timeline-content_line1::before {
            content: "";
            background: #000;
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 1px solid;
            top: 18%;
            right: 36%;
            transform: translateY(-50%);
        }

        .iq-timeline .timeline-content_line2::before {
            content: "";
            background: #000;
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 1px solid;
            top: 18%;
            right: 62%;
            transform: translateY(-50%);
        }

        @media (max-width:1000px) {
            .Journey_container {
                max-width: 1024px;
            }

            .iq-timeline .timeline-content_line1::before {
                top: 18%;
                right: 30%;
            }

            .iq-timeline .timeline-content_line2::before {
                top: 18%;
                left: 30%;
            }

            .iq-timeline .timeline-content_line1::after {
                width: 37%;
            }

            .iq-timeline .timeline-content_line2::after {
                width: 37%;
            }

        }

        .iq-timeline .invester_line1::before {
            content: "";
            position: absolute;
            width: 100%;
            border: 1px solid;
            top: -32%;
            left: -50px;
            transform: translateY(-50%);
            z-index: -99;
        }

        .iq-timeline .invester_line1::after {
            content: "";
            position: absolute;
            height: 33px;
            border: 1px solid black;
            top: -18%;
            right: 50px;
            transform: translateY(-50%);
            z-index: -99;
        }

        .iq-timeline .invester_line2::before {
            content: "";
            position: absolute;
            width: 100%;
            border: 1px solid;
            top: -42%;
            right: -56px !important;
            transform: translateY(-50%);
            z-index: -99;
        }

        .iq-timeline .invester_line2::after {
            content: "";
            position: absolute;
            height: 44px;
            border: 1px solid black;
            top: -22%;
            right: 50px;
            transform: translateY(-50%);
            z-index: -99;
        }


        .iq-timeline .timeline:nth-child(2n) {
            padding: 0 0 0 30px;
        }

        .iq-timeline .timeline:nth-child(2n) .year {
            right: auto;
            left: 35%;
        }

        .iq-timeline .timeline:nth-child(2n) .year:before {
            border: 20px solid transparent;
            /* border-right: none; */
            /* border-left: 18px solid yellow; */
            width: 100%;
            border: 1px solid;
            left: auto;
            right: -18px;
        }

        .iq-timeline .timeline:nth-child(2n) .timeline-content {
            text-align: right;
            float: right;
            margin: 0 0 0 20px;
        }

        .iq-timeline .timeline:nth-child(2n) .timeline-content:after {
            border-left: none;
            border-right: 20px solid gray;
            right: auto;
            left: -20px;
        }

        .timeline-content h4 {
            text-align: center;
        }

        .NewText2 {
            text-align: center;
            margin-top: 8px;
        }

        @media only screen and (max-width:1200px) {
            .iq-timeline .year {
                right: 30%;
            }

            .iq-timeline .timeline:nth-child(2n) .year {
                left: 30%;
            }
        }

        @media only screen and (max-width:990px) {
            .iq-timeline .year {
                right: 25%;
            }

            .iq-timeline .timeline:nth-child(2n) .year {
                left: 25%;
            }
        }

        @media only screen and (max-width:767px) {
            .iq-timeline:before {
                left: 10px;
            }

            .iq-timeline .timeline {
                padding: 0 0 0 30px;
                margin-bottom: 20px;
            }

            .iq-timeline .timeline:last-child {
                margin-bottom: 0;
            }

            .iq-timeline .timeline:first-child:before,
            .iq-timeline .timeline:last-child:before {
                display: none;
            }

            .iq-timeline .timeline-icon {
                margin: 0;
                position: absolute;
                top: 7px;
                left: 0;
            }

            .iq-timeline .year,
            .iq-timeline .timeline:nth-child(2n) .year {
                display: block;
                font-weight: bold;
                margin: 0 0 32px 30px;
                z-index: 1;
                position: relative;
                top: auto;
                left: auto;
                right: auto;
                transform: none;
            }

            .iq-timeline .timeline:nth-child(2n) .year:before {
                border-left: none;
                border-right: 18px solid var(--iq-primary);
                right: auto;
                left: -18px;
            }

            .iq-timeline .timeline-content {
                padding: 20px;
            }

            .iq-timeline .timeline-content,
            .iq-timeline .timeline:nth-child(2n) .timeline-content {
                width: auto;
                float: none;
                margin: 0 0 0 30px;
            }

            .iq-timeline .timeline-content:after,
            .iq-timeline .timeline:nth-child(2n) .timeline-content:after {
                border: none;
                border-bottom: 20px solid var(--iq-gray);
                border-left: 20px solid transparent;
                border-right: 20px solid transparent;
                top: -20px;
                left: 50%;
                right: auto;
                transform: translateX(-50%);
            }
        }

        @media only screen and (max-width:700px) {

            .iq-timeline .timeline-content_line1::before,
            .iq-timeline .timeline-content_line2::before {
                display: none;
            }

            .iq-timeline .timeline-content,
            .iq-timeline .timeline:nth-child(2n) .timeline-content {
                margin: 0;
            }

            .iq-timeline .timeline:nth-child(2n) .year:before {
                left: -50px;
            }

            .timeline-content h4 {
                text-align: left;
            }

            .iq-timeline .timeline:nth-child(2n) .timeline-content {
                text-align: left;
            }

            .iq-timeline .timeline-icon-new {
                right: 20%;
            }

            .timeline .timeline-numbers_2 {
                font-size: 2rem !important;
                font-weight: 500 !important;
                display: inline-block;
                padding: 30px;
                margin: 0;
                font-size: 0.8rem;
                width: 110px;
                height: 110px;
                color: black;
                text-align: center;
                position: absolute;
                top: 5%;
                right: 10%;
                opacity: 0.8;
                transform: translateY(-50%);
            }
        }

        @media only screen and (max-width:480px) {
            .iq-timeline .timeline-icon-new {
                right: -10%;
            }
            .iq-timeline .invester_line1::before{
                width: 88%;
                left: -35%;
            }
            .iq-timeline .timeline:nth-child(2n) .year:before{
                width: 88%;
                left: -35%;

            }
        }
        @media only screen and (max-width:375px) {
            .iq-timeline .timeline-icon-new{
                top: -70%;
                right: -25%;
            }
        }
        @media only screen and (max-width:350px) {
            .iq-timeline .timeline-icon-new{
                right: -55%;
            }
        }
        @media only screen and (max-width:480px) {

            .iq-timeline .year,
            .iq-timeline .timeline:nth-child(2n) .year {
                margin-left: 20px;
            }

            .iq-timeline .timeline-content,
            .iq-timeline .timeline:nth-child(2n) .timeline-content {
                margin-left: 10px;
            }
        }
    </style>
</head>

<body>
    <section class="">
        <div class="container Journey_container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iq-timeline">
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">Jan
                                    <br>2022
                                </p>
                            </span>
                            <span class="year invester_line1">0 Invester</span>
                            <div class="timeline-content timeline-content_line1">
                                <h5 class="timeline-numbers_1">01</h5>
                                <h4 class="mb-3">Begining</h4>
                                <!-- <h6 class="mb-3">0 Invester</h6> -->
                                <!-- <span>0 Invester</span> -->
                                <p class="iq-mt-10">
                                    Token Shayari's quality upgrade in this crucial phase drew investors from around the
                                    world. They offered security, good returns, a clear roadmap, and, most importantly,
                                    earned trust.
                                </p>
                                <h6 class="fs-6">Starting form $0</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">April <br> 2022</p>
                            </span>
                            <span class="year invester_line2">03 Invester</span>
                            <div class="timeline-content timeline-content_line2">
                                <h5 class="timeline-numbers_2">02</h5>
                                <h4 class="mb-3">1st Phase</h4>
                                <!-- <h6 class="mb-3">03 Invester</h6> -->
                                <!-- <span>03 Invester</span> -->
                                <p class="iq-mt-10">
                                    Our hard work paid off when we received a $1 million investment. This investment
                                    gave the entire company the courage to move forward and pursue our vision. We are
                                    grateful to management for their support and recognition of the quality of our
                                    product..</p>
                                <h6 class="fs-6">Closed at 1M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">July <br>2022</p>
                            </span>
                            <span class="year invester_line1">06 Invester</span>
                            <div class="timeline-content timeline-content_line1">
                                <h5 class="timeline-numbers_1">03</h5>
                                <h4 class="mb-3">2nd Phase</h4>
                                <!-- <h6 class="mb-3">06 Invester</h6> -->
                                <!-- <span>06 Invester</span> -->
                                <p class="iq-mt-10">
                                    We achieved another result that boosted the company's value and growth potential,
                                    and we also received a fresh investment of 2.5 million.</p>
                                <h6 class="fs-6">Closed at 1M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">Sept <br>2022</p>
                            </span>
                            <span class="year invester_line2">11 Invester</span>
                            <div class="timeline-content timeline-content_line2">
                                <h5 class="timeline-numbers_2">04</h5>
                                <h4 class="mb-3">3rd Phase</h4>
                                <!-- <h6 class="mb-3">11 Invester</h6> -->
                                <!-- <span>11 Invester</span> -->
                                <p class="iq-mt-10">
                                    Token Sayari, a company that develops gold-backed tokens, has made agreements with
                                    investors of all sizes, from small to large. And recently signed a joint venture
                                    worth
                                    approximately $300 million. In addition, Token Sayari has received a total of $7
                                    million from more investors.</p>
                                <h6 class="fs-6">Closed at 2.5M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">Dec <br>2022</p>
                            </span>
                            <span class="year invester_line1">20 Invester</span>
                            <div class="timeline-content timeline-content_line1">
                                <h5 class="timeline-numbers_1">05</h5>
                                <h4 class="mb-3">4th Phase</h4>
                                <!-- <h6 class="mb-3">20 Invester</h6> -->
                                <!-- <span>20 Invester</span> -->
                                <p class="iq-mt-10">
                                    We reached another major milestone! We received $780 million worth of assets from
                                    other gold mines, hysterical assets, properties, etc. This was a golden opportunity
                                    for us, and we proved our ability to deliver quality. As a result, we received
                                    another good investment. </p>
                                <h6 class="fs-6">Closed at 7M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">Mar <br>2023</p>
                            </span>
                            <span class="year invester_line2">32 Invester</span>
                            <div class="timeline-content timeline-content_line2">
                                <h5 class="timeline-numbers_2">06</h5>
                                <h4 class="mb-3">5th Phase</h4>
                                <!-- <h6 class="mb-3">32 Invester</h6> -->
                                <!-- <span>32 Invester</span> -->
                                <p class="iq-mt-10">
                                    Token Shayari's quality upgrade in this crucial phase drew investors from around the
                                    world. They offered security, good returns, a clear roadmap, and, most importantly,
                                    earned trust. </p>
                                <h6 class="fs-6">Closed at 10.5M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">July <br>2023</p>
                            </span>
                            <span class="year invester_line1">44 Invester</span>
                            <div class="timeline-content timeline-content_line1">
                                <h5 class="timeline-numbers_1">07</h5>
                                <h4 class="mb-3">6th Phase</h4>
                                <!-- <h6 class="mb-3">44 Invester</h6> -->
                                <!-- <span>44 Invester</span> -->
                                <p class="iq-mt-10">
                                    We surpassed our goal of 17.5 million in this phase, making significant inroads in
                                    the crypto market. </p>
                                <h6 class="fs-6">Closed at 15.5M $</h6>
                            </div>
                        </div>
                        <div class="timeline my-5">
                            <span class="timeline-icon-new text-white">
                                <p class="NewText2">Till <br>
                                    Now</p>
                            </span>
                            <span class="year invester_line2">65 Invester</span>
                            <div class="timeline-content timeline-content_line2">
                                <h5 class="timeline-numbers_2">08</h5>
                                <h4 class="mb-3">Ongoing</h4>
                                <!-- <h6 class="mb-3">65 Invester</h6> -->
                                <!-- <span>65 Invester</span> -->
                                <p class="iq-mt-10">
                                    Sayari Token has more than one billion dollars in assets, including gold mines,
                                    properties, and other investments. We have a large and growing number of wealthy
                                    investors, which will help us to improve the quality of our product even further.
                                </p>
                                <h6 class="fs-6">Closed at 17.5M $</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>