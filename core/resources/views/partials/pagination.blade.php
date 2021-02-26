<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name="ad.size" content="width=300,height=250">
    <title>970x250_Animated</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            margin: 0;
        }

        .banner-wrapper {
            width: 100%;
            height: 250px;
        }

        .wrapBan {
            width: 970px;
            height: 250px;
            background: #FFFFFF;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .innerBannerW {
            width: 970px;
            height: 250px;
            background: #FFFFFF;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .flipper_515x250.active {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .flipper_455x125_Down.active {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .flipper_455x125_Up.active {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .flipper_515x250 {
            -webkit-transition: 1.6s;
            -webkit-transform-style: preserve-3d;

            -moz-transition: 1.6s;
            -moz-transform-style: preserve-3d;

            -o-transition: 1.6s;
            -o-transform-style: preserve-3d;

            transition: 1.6s;
            transform-style: preserve-3d;

            position: relative;
        }

        .flipper_455x125_Up {
            -webkit-transition: 1.6s;
            -webkit-transform-style: preserve-3d;

            -moz-transition: 1.6s;
            -moz-transform-style: preserve-3d;

            -o-transition: 1.6s;
            -o-transform-style: preserve-3d;

            transition: 1.6s;
            transform-style: preserve-3d;

            position: relative;
        }

        .flipper_455x125_Down {
            -webkit-transition: 1.6s;
            -webkit-transform-style: preserve-3d;

            -moz-transition: 1.6s;
            -moz-transform-style: preserve-3d;

            -o-transition: 1.6s;
            -o-transform-style: preserve-3d;

            transition: 1.6s;
            transform-style: preserve-3d;

            position: relative;
        }

        .flip-container_515x250,
        .front_515x250,
        .back_515x250 {
            width: 515px;
            height: 250px;
        }

        .front_515x250,
        .back_515x250 {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;

            position: absolute;
            top: 0;
            left: 0;
        }

        .front_515x250 {
            background: url(frame1_515x250.png) 0 0 no-repeat;
            z-index: 0;
        }

        .back_515x250 {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);

            background: #f8f8f8;
        }

        .back_515x250 p {
            position: absolute;
            bottom: 35px;
            left: 0px;
            right: 0;
            text-align: center;
            /*! padding: 0 20px; */
            font-family: arial;
            /*! line-height: 2em; */
        }

        .flip-container_515x250 {
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -o-perspective: 1000;
            perspective: 1000;
        }

        /* 515x250 Finish*/

        .flip-container_455x125_Up,
        .front_455x125_Up,
        .back_455x125_Up {
            width: 455px;
            height: 125px;
        }

        .front_455x125_Up,
        .back_455x125_Up {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;

            position: absolute;
            top: 0;
            left: 0;
        }

        .front_455x125_Up {
            background: url(frame1_455x125_Up.png) 0 0 no-repeat;
            z-index: 0;
        }

        .back_455x125_Up {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);

            background: #f8f8f8;
        }

        .back_455x125_Up p {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            text-align: center;
            padding: 0 20px;
            font-family: arial;
            line-height: 2em;
        }

        .flip-container_455x125_Up {
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -o-perspective: 1000;
            perspective: 1000;
        }

        .flip-container_455x125_Up {
            position: absolute;
            top: 0;
            right: 0;
        }

        /* up finished */
        .flip-container_455x125_Down,
        .front_455x125_Down,
        .back_455x125_Down {
            width: 455px;
            height: 125px;
        }

        .front_455x125_Down,
        .back_455x125_Down {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;

            position: absolute;
            top: 0;
            left: 0;
        }

        .front_455x125_Down {
            background: url(frame1_455x125_Down.png) 0 0 no-repeat;
            z-index: 0;
        }

        .back_455x125_Down {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);

            background: #f8f8f8;
        }

        .back_455x125_Down p {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            text-align: center;
            padding: 0 20px;
            font-family: arial;
            line-height: 2em;
        }

        .flip-container_455x125_Down {
            -webkit-perspective: 1000;
            -moz-perspective: 1000;
            -o-perspective: 1000;
            perspective: 1000;
        }

        .flip-container_455x125_Down {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .topRightBG {
            background: url(frame2_450x120_Up.png);
            height: 120px;
            width: 450px;
            position: absolute;
            left: 0px;
            top: 0px;
            border: 1px solid rgb(0, 0, 0);
            box-sizing: border-box;
        }

        .bottomRightBG {
            background: url(frame2_450x120_Down.png);
            height: 120px;
            width: 450px;
            position: absolute;
            left: 0px;
            top: 0px;
            border: 1px solid rgb(0, 0, 0);
            box-sizing: border-box;
        }

        .leftCenterBG {
            background: url(frame2_510x245.png);
            height: 245px;
            width: 510px;
            position: absolute;
            left: 0px;
            top: 0px;
            border: 1px solid rgb(0, 0, 0);
            box-sizing: border-box;
        }



        .transpOverlay {
            height: 120px;
            width: 450px;
            position: absolute;
            left: 0px;
            top: 0px;
            opacity: 0;
            background-color: rgba(0, 0, 0, 1);
        }

        .transpOverlayLC {
            height: 245px;
            width: 510px;
            position: absolute;
            left: 0px;
            top: 0px;
            opacity: 0;
            background-color: rgba(0, 0, 0, 1);
        }

        .back_515x250:hover .transpOverlayLC {
            opacity: 0.2;
            transition: opacity 0.5s ease 0s;
        }

        .back_455x125_Up:hover .transpOverlay,
        .back_455x125_Down:hover .transpOverlay {
            opacity: 0.2;
            transition: opacity 0.5s ease 0s;
        }

        .expandTopRight {
            opacity: 0;
            position: relative;
        }

        .expandTopRight.active {
            background: black;
            position: absolute;
            right: 0px;
            top: 0px;
            opacity: 1;
            z-index: 2;
            width: 455px;
            height: 125px;
            overflow: hidden;
            transition: all .3s ease-in-out;
        }

        .expandBottomRight.active {
            background: black;
            position: absolute;
            right: 0px;
            bottom: 0px;
            opacity: 1;
            z-index: 2;
            width: 455px;
            height: 125px;
            overflow: hidden;
            transition: all .3s ease-in-out;
        }

        .expandTopRight.active.expand {
            background: black;
            position: absolute;
            right: 0px;
            top: 0px;
            opacity: 1;
            z-index: 2;
            width: 970px;
            height: 250px;
            text-align: center;
            transition: all .8s ease-in-out;
            transition-delay: .2s;
        }

        .expandBottomRight.active.expand {
            background: black;
            position: absolute;
            right: 0px;
            bottom: 0px;
            opacity: 1;
            z-index: 2;
            width: 970px;
            height: 250px;
            text-align: center;
            transition: all .8s ease-in-out;
            transition-delay: .2s;
        }

        .expandTopRight .innerExt {
            width: 100%;
            height: 250px;
            background: url(frame3_hotspots.png);
            position: absolute;
            top: 0;
            right: 0;
            transform: translateX(100%);
        }

        .expandBottomRight .innerExt {
            width: 100%;
            height: 250px;
            background: url(frame3_content.png);
            position: absolute;
            top: 0;
            right: 0;
            transform: translateX(100%);
        }

        .expandTopRight.active.expand .innerExt,
        .expandBottomRight.active.expand .innerExt {
            animation: RightToLeft .5s 1s linear both;
        }

        @keyframes RightToLeft {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0%);
            }
        }

        .expandTopRight span.back,
        .expandBottomRight span.back {
            color: white;
            border: 1px solid #111;
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            display: inline;
            position: absolute;
            right: 12px;
            top: 10px;
            padding: 5px 10px;
            border-radius: 15px;
            opacity: 0;
            z-index: 10;
            transform: translateX(0%);
            background-color: rgba(0,0,0,0.7);
        }

        .expandTopRight.active.expand span.back,
        .expandBottomRight.active.expand span.back {
            animation: RightToLeftBTN .5s 1.2s linear both;
        }

        @keyframes RightToLeftBTN {
            from {
                opacity: 0;
                transform: translateX(120%);
            }

            to {
                opacity: 1;
                transform: translateX(0%);
            }
        }

        .expandTopRight.active.expand.closingState span.back,
        .expandBottomRight.active.expand.closingState span.back {
            animation: RightToLeftBTNOut 1s 0s linear both;
        }

        @keyframes RightToLeftBTNOut {
            from {
                opacity: 1;
                transform: translateX(0%);
            }

            to {
                opacity: 0;
                transform: translateX(-95%);
            }
        }

        .expandTopRight.active.expand.closingState .innerExt,
        .expandBottomRight.active.expand.closingState .innerExt {
            animation: LeftToRight .5s 0s linear both;
        }

        @keyframes LeftToRight {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .expandTopRight.active.expand.closingState,
        .expandBottomRight.active.expand.closingState {
            width: 455px;
            height: 125px;
            text-align: center;
            transition: all .8s ease-in-out;
            transition-delay: 0.6s;
        }

        .hotspot {
            position: absolute;
            display: block;
            width: 30px;
            height: 30px;
            overflow: visible;
            border-radius: 50% 50%;
            /* background-color: #e3446d; */
            background-color: #111;
            color: #ffffff;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
            backface-visibilty: hidden;
            -webkit-transition: all 0.3s ease 0.1, border-radius 0.1s ease 0.2;
            transition: all 0.3s ease 0.1, border-radius 0.1s ease 0.2;
            z-index: 20;
        }

        .hotspot.open {
            border-radius: 0 0;
            width: 250px;
            height: 67px;
            max-height: 100px;
            /* -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out; */
        }

        .hotspot.open .icon {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .hotspot .content{
            display: none;
        }
        .hotspot.open .content {
            display: block;
            opacity: 1;
        }

        .hotspot .icon {
            position: absolute;
            display: block;
            width: 30px;
            height: 30px;
            overflow: auto;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            z-index: 20;
        }

        .hotspot .content {
            margin: 0;
            overflow: auto;
            opacity: 0;
            -webkit-transition: opacity 0.1s ease 0s;
            transition: opacity 0.1s ease 0s;
            font-family: 'Roboto', sans-serif;
        }

        .hotspot .content p {
            margin: 0 0 0px 0;
            font-family: 'Roboto', sans-serif;
            padding: 5px 18px 5px 18px;
        }


        .hotspot.left-top .icon {
            top: 0;
            left: 0;
        }

        .hotspot.right-top .icon {
            left: auto;
            top: 0;
            right: 0;
        }

        .hotspot.left-bottom .icon {
            left: 0;
            bottom: 0;
        }

        .hotspot.right-bottom .icon {
            bottom: 0;
            right: 0;
        }

        span.buttonBuy {
            padding: 7px 13px;
            display: block;
            position: absolute;
            right: 45px;
            bottom: 7px;
            z-index: 30;
            color: black;
            background: white;
            border-radius: 20px;
            font-family: 'Roboto', sans-serif;
        }

        .hotspot::before {
            content: '';
            border-radius: 50%;
            width: 22px;
            height: 22px;
            top: 2px;
            left: 2px;
            /* border: 2px solid #e3446d; */
            border: 2px solid #111;
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            /* border-color: #e3446d; */
            border-color: #111;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-animation: ringPulse 4s infinite;
            animation: ringPulse 4s infinite;
            position: absolute;
        }

        .hotspot.open::before {
            display: none;
        }


        @-webkit-keyframes ringPulse {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }
        }

        @keyframes ringPulse {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }
        }
     .temp-container
     {
     	position:absolute;
     	top:0;
     	width:515px;
     	height:250px
     }
       .conditionText{height: 45px;font-size:16px;left:40px;position:absolute;bottom:0;text-align:center;width:130px;background-color: #99cc33;}
        .currentTemp{width:100px;font-size:80px;left:190px;top:-29px;position:absolute;text-align:right;background-color:#ccf3d9}


    </style>
</head>

<body>
    <div class="banner-wrapper">
        <div class="wrapBan">
            <div class="innerBannerW" id="ACbanner">
                <div class="flip-container_515x250">
                    <div class="flipper_515x250">
                        <div class="front_515x250">
                        </div>
                        <div class="back_515x250">
                            <div class="leftCenterBG"></div>
                            <div class="transpOverlayLC"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-container_455x125_Up">
                    <div class="flipper_455x125_Up">
                        <div class="front_455x125_Up">
                        </div>
                        <div class="back_455x125_Up HelperExpnd">
                            <div class="topRightBG"></div>
                            <div class="transpOverlay"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-container_455x125_Down">
                    <div class="flipper_455x125_Down">
                        <div class="front_455x125_Down">
                        </div>
                        <div class="back_455x125_Down HelperExpnd">
                            <div class="bottomRightBG"></div>
                            <div class="transpOverlay"></div>
                        </div>
                    </div>
                </div>
                <div class="expandTopRight">
                    <div class="innerExt">
                        <div class='hotspot' style='top: 13%;right: 26%;'>
                            <div class='icon'>+</div>
                            <div class='content'>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class='hotspot' style='top: 41%;left: 24%;'>
                            <div class='icon'>+</div>
                            <div class='content'>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                            </div>
                        </div>
                        <div class='hotspot' style='bottom: 26%;left: 84%;'>
                            <div class='icon'>+</div>
                            <div class='content'>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <span class="back">Back</span>
                </div>
                <div class="expandBottomRight">
                    <div class="innerExt">
                    </div>
                    <span class="back">Back</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var allBannerImages = [], uploadImagesCount = 0;
    allBannerImages[0] = 'frame1_515x250.png';
    allBannerImages[1] = 'frame1_455x125_Up.png';
    allBannerImages[2] = 'frame1_455x125_Down.png';
    allBannerImages[3] = 'frame2_450x120_Down.png';
    allBannerImages[4] = 'frame2_450x120_Up.png';
    allBannerImages[5] = 'frame2_510x245.png';
    allBannerImages[6] = 'frame3_content.png';
    allBannerImages[7] = 'frame3_hotspots.png';

    allBannerImages.forEach(function (imgSrc) {
        var newImgTag = parent.document.createElement('img');
        newImgTag.src = imgSrc;
        newImgTag.addEventListener('load', function () {
            newImgTag.remove();
            uploadImagesCount++;

            if (allBannerImages.length == uploadImagesCount) {

                document.getElementById("ACbanner").style.display = "block";


                var Click1 = '%%CLICK_URL_UNESC%%https://www.google.com/'
                var Click2 = 'https://www.google.com/'
                var Click3 = 'https://www.google.com/'
                $(".back_515x250").click(function () {
                    window.open(Click1, '_blank');
                });

                $(".expandBottomRight .innerExt").click(function () {
                    window.open(Click2, '_blank');
                });

                $(".buttonBuy").click(function () {
                    window.open(Click3, '_blank');
                });

                $('.back_455x125_Up').click(function () {
                    // on mouse in, start a timeout
                    $('.expandTopRight').addClass("active");
                    setTimeout(function () {
                        $(".expandTopRight").addClass("expand");
                    }, 500);
                })

                $('.back_455x125_Down').click(function () {
                    // on mouse in, start a timeout
                    $('.expandBottomRight').addClass("active");
                    setTimeout(function () {
                        $(".expandBottomRight").addClass("expand");
                    }, 500);
                })


                var timer;
                var delay = 1000;

                $('.back_455x125_Up').hover(function () {
                    // on mouse in, start a timeout

                    timer = setTimeout(function () {
                        $('.expandTopRight').addClass("active");
                        setTimeout(function () {
                            $(".expandTopRight").addClass("expand");
                        }, 500);
                    }, delay);
                }, function () {
                    // on mouse out, cancel the timer
                    clearTimeout(timer);
                });

                $('.back_455x125_Down').hover(function () {
                    // on mouse in, start a timeout

                    timer = setTimeout(function () {
                        $('.expandBottomRight').addClass("active");
                        setTimeout(function () {
                            $(".expandBottomRight").addClass("expand");
                        }, 500);
                    }, delay);
                }, function () {
                    // on mouse out, cancel the timer
                    clearTimeout(timer);
                });

                $(".back").click(function () {
                    $(".expandTopRight").addClass("closingState");
                    setTimeout(function () {
                        $('.expandTopRight').removeClass("closingState");
                        $(".expandTopRight").removeClass("expand");
                        $('.expandTopRight').removeClass("active");
                    }, 1800);
                });

                $(".back").click(function () {
                    $(".expandBottomRight").addClass("closingState");
                    setTimeout(function () {
                        $('.expandBottomRight').removeClass("closingState");
                        $(".expandBottomRight").removeClass("expand");
                        $('.expandBottomRight').removeClass("active");
                    }, 1800);
                });

                $('.hotspot .icon').click(function () {
                    var $parent = $(this).parent();
                    $parent.toggleClass('open');
                    $('.hotspot.open').not($parent).removeClass('open');

                });

                $('.hotspot').each(function (e, i) {
                    var $this = $(this);
                    var css = detectPosition($this, e);
                    $(this).addClass(css.css).attr('style', css.styles)
                });

                function detectPosition($elem, ind) {
                    var container = $('.wrapBan'),
                        height = container.innerHeight(),
                        width = container.innerWidth(),
                        p = $elem.position(),
                        x = p.left,
                        y = p.top,
                        w = $elem.width(),
                        h = $elem.height(),
                        cssClass = [],
                        style = '';

                    if (x >= width / 2) { // Right half
                        cssClass.push('right');
                        style += 'right:' + ((width - x - w) / width * 100) + '%;left: auto;';

                    } else { // Left half
                        cssClass.push('left');
                        style += 'left:' + (x / width * 100) + '%;right: auto;';

                    }

                    if (y >= height / 2) { // Lower half
                        cssClass.push('bottom');
                        style += 'bottom:' + ((height - y - h) / height * 100) + '%;top: auto;';

                    } else { // Upper half
                        cssClass.push('top');
                        style += 'top:' + (y / height * 100) + '%;bottom: auto;';
                    }

                    return {
                        css: cssClass.join('-'),
                        styles: style
                    };
                }
            }
        });


    });
    
    
    
    /****** API Code Start Here ******************/
    var apiKey = 'd4f1f28088dd40f7ab804507213101';
    var apiUrl = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=dhaka`;
    
    var currentTemp = 0;
    var conditionText = '';
    var currentTempMeter = 'F';
    var resData = {
        currentTemp: {C:0,F:0},        
        cloudIcon: '',
        conditionText: '',
    };    
    var temHtml = '';
    
   
    async function fetchApiData() {
        let response = await fetch(apiUrl);

        console.log(response);
        if (response.status === 200) {
            let data = await response.json();
            
            resData['conditionText'] = data['current']['condition']['text'];
            resData['currentTemp']['C'] = parseInt(data['current']['temp_c']);
            resData['currentTemp']['F'] = parseInt(data['current']['temp_f']);
            
            temHtml += `<h1  style="" class="currentTemp" >${resData['currentTemp'][currentTempMeter]}</h1>`;
            temHtml += `<h1  class="conditionText" >${resData['conditionText']}</h1>`;
            
            var elemDiv = document.createElement('div');
             elemDiv.className = 'temp-container';
            elemDiv.innerHTML = temHtml;
            document.body.appendChild(elemDiv);
        }
    }
    fetchApiData();
    
    /****** API Code End Here ******************/
    
</script>

</html>
