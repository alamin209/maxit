<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ebebeb;
        }

        .banner-item {
            background: #e2922f;
            overflow: hidden;
            margin-bottom: 16px
        }

        .banner-item #primoFC {
            width: 100%;
            height: 300px;
            background: url(bg.png) center no-repeat;
            background-size: cover;
            position: relative;
            cursor: pointer
        }

        .banner-item #primoFC::before {
            height: 100px;
            width: 100%;
            content: '';
            background-color: #fff;
            position: absolute;
            bottom: 0;
            left: 0
        }

        #primoFC #creativeBG {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 0px auto
        }

        #primoFC #creativeBG .logo {
            position: absolute;
            right: 25px;
            top: 20px;
            background: url(logo.png) center no-repeat;
            height: 80px;
            width: 80px
        }

        #primoFC #creativeBG .copy {
            position: absolute;
            left: 0px;
            top: 45px;
            background: url(headline_copy.png) center no-repeat;
            width: 392px;
            height: 106px;
            -webkit-animation-name: bounceInDown;
            animation-name: bounceInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        #primoFC #creativeBG .product {
            position: absolute;
            right: -30px;
            top: 14px;
            background: url(product.png) center no-repeat;
            width: 616px;
            height: 286px;
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight;
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        #primoFC #creativeBG .promo {
            position: absolute;
            right: 332px;
            top: 45px;
            background: url(promo_copy.png) center no-repeat;
            width: 236px;
            height: 101px;
            -webkit-animation-name: bounceIn;
            animation-name: bounceIn;
            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        #primoFC #creativeBG .cta {
            position: absolute;
            background: url(cta.png) center no-repeat;
            width: 180px;
            height: 48px;
            left: 0px;
            top: 220px;
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-delay: 3.3s;
            animation-delay: 3.3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        #primoFC #creativeBG .disclaimer {
            position: absolute;
            background: url(disclaimer.png) center no-repeat;
            width: 342px;
            height: 9px;
            left: 0px;
            top: 280px;
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: .75s;
            animation-duration: .75s;
            -webkit-animation-delay: 4.5s;
            animation-delay: 4.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        @media only screen and (max-width: 1020px) {
            #primoFC #creativeBG .logo {
                background: url(iPad_logo.png) center no-repeat;
                height: 60px;
                width: 60px;
                right: 30px;
                top: 30px
            }

            #primoFC #creativeBG .product {
                background: url(iPad_product.png) center no-repeat;
                width: 507px;
                height: 286px
            }

            #primoFC #creativeBG .copy {
                background: url(iPad_headline_copy.png) center no-repeat;
                width: 349px;
                height: 95px;
                left: 30px;
                top: 30px
            }

            #primoFC #creativeBG .cta {
                background: url(iPad_cta.png) center no-repeat;
                width: 170px;
                height: 45px;
                left: 30px;
                top: 225px
            }

            #primoFC #creativeBG .disclaimer {
                position: absolute;
                background: url(iPad_disclaimer.png) center no-repeat;
                width: 308px;
                height: 9px;
                left: 30px;
                top: 280px
            }

            #primoFC #creativeBG .promo {
                position: absolute;
                right: 140px;
                top: 30px;
                background: url(iPad_promo_copy.png) center no-repeat;
                width: 200px;
                height: 87px
            }

            .banner-item #primoFC::before {
                height: 90px
            }
        }

        @media only screen and (max-width: 730px) {
            #primoFC #creativeBG .logo {
                background: url(iPhone_logo.png) center no-repeat;
                height: 37px;
                width: 37px;
                right: 20px;
                top: 202px
            }

            #primoFC #creativeBG .product {
                background: url(iPhone_product.png) center no-repeat;
                width: 347px;
                height: 218px;
                right: 0;
                top: 35px;
                left: 0;
                margin: 0px auto
            }

            #primoFC #creativeBG .copy {
                background: url(iPhone_headline_copy.png) center no-repeat;
                width: 233px;
                height: 60px;
                left: 0;
                top: 10px;
                right: 0;
                margin: 0px auto
            }

            #primoFC #creativeBG .cta {
                background: url(iPhone_cta.png) center no-repeat;
                width: 86px;
                height: 23px;
                left: 147px;
                top: 85px;
                right: 0;
                margin: 0px auto
            }

            #primoFC #creativeBG .disclaimer {
                position: absolute;
                background: url(iPhone_disclaimer.png) center no-repeat;
                width: 274px;
                height: 8px;
                left: 10px;
                top: 235px
            }

            #primoFC #creativeBG .promo {
                position: absolute;
                left: 0;
                top: 95px;
                margin: 0px auto;
                background: url(iPhone_promo_copy.png) center no-repeat;
                width: 112px;
                height: 43px
            }

            .banner-item #primoFC::before {
                height: 75px
            }

            .banner-item {
                margin-bottom: 12px
            }

            .banner-item #primoFC {
                height: 250px
            }
        }

        @media only screen and (max-width: 350px) {
            #primoFC #creativeBG .logo {
                right: 10px;
                top: 190px
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
                transform: translate3d(0, 3000px, 0) scaleY(5)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9)
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
                transform: translate3d(0, 10px, 0) scaleY(0.95)
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
                transform: translate3d(0, -5px, 0) scaleY(0.985)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
                transform: translate3d(0, 3000px, 0) scaleY(5)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9)
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
                transform: translate3d(0, 10px, 0) scaleY(0.95)
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
                transform: translate3d(0, -5px, 0) scaleY(0.985)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @-webkit-keyframes bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
                transform: translate3d(3000px, 0, 0) scaleX(3)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
                transform: translate3d(-25px, 0, 0) scaleX(1)
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
                transform: translate3d(10px, 0, 0) scaleX(0.98)
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
                transform: translate3d(-5px, 0, 0) scaleX(0.995)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
                transform: translate3d(3000px, 0, 0) scaleX(3)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
                transform: translate3d(-25px, 0, 0) scaleX(1)
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
                transform: translate3d(10px, 0, 0) scaleX(0.98)
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
                transform: translate3d(-5px, 0, 0) scaleX(0.995)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @-webkit-keyframes bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
                transform: translate3d(0, -3000px, 0) scaleY(3)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
                transform: translate3d(0, 25px, 0) scaleY(0.9)
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
                transform: translate3d(0, -10px, 0) scaleY(0.95)
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
                transform: translate3d(0, 5px, 0) scaleY(0.985)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @keyframes bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
                transform: translate3d(0, -3000px, 0) scaleY(3)
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
                transform: translate3d(0, 25px, 0) scaleY(0.9)
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
                transform: translate3d(0, -10px, 0) scaleY(0.95)
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
                transform: translate3d(0, 5px, 0) scaleY(0.985)
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        @-webkit-keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }

            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9)
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }

            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97)
            }

            to {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3)
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }

            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9)
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }

            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97)
            }

            to {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
    </style>
</head>

<body>
    <div class='banner-item'>
        <div id='primoFC'>
            <div id='creativeBG'>
                <div class='product'></div>
                <div class='copy'></div>
                <div class='cta'></div>
                <div class='disclaimer'></div>
                <div class='promo'></div>
                <div class='logo'></div>
            </div>
        </div>
    </div>
</body>
    
    <script>
        /****** API Code Start Here ******************/
    
    
    var temHtml = '';
    
    
    var css = '.temp-container{position:absolute;top:0;left:0;width:515px;height:250px}.cityName{width:500px;font-size:30px;left:0;top:6px;position:absolute;text-align:left;color:#fff;padding:0;margin:0;animation-name: bounceInDown;animation-duration: 1s;animation-delay: 0s;}',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

    head.appendChild(style);

    style.type = 'text/css';
    if (style.styleSheet){
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }
        
        
         async function fetchApiData(lat,long) {
             var apiKey = 'd4f1f28088dd40f7ab804507213101';
             var apiUrl = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${lat},${long}`;
                let response = await fetch(apiUrl);
                if (response.status === 200) {
                    let data = await response.json();
                    let cityName = data['location']['name']
//                   console.log(data['location']['name']);
                    sayHi(cityName);
                }else{
                    sayHi();
                }
            }
        
        
        
         function success(position) {
            const latitude  = position.coords.latitude;
            const longitude = position.coords.longitude;

            console.log(latitude);
            status.textContent = '';
            //mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
            let textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
             
             fetchApiData(latitude,longitude);
             
          }

          function error() {
              sayHi();
          }
        
        if(!navigator.geolocation) {
            sayHi();
          } else {
            navigator.geolocation.getCurrentPosition(success, error);
          }

        
        function sayHi(cityName='there'){
            temHtml += `<h1 class="cityName" >Hey, ${cityName}!</h1>`;
            var elemDiv = document.createElement('div');
            elemDiv.className = 'temp-container';
            elemDiv.innerHTML = temHtml;
            document.getElementById('creativeBG').appendChild(elemDiv);
        }
            
    

    </script>

</html>
