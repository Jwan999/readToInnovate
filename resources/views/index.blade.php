<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/readToInnovateLogo.png">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Read To Innovate</title>
    <style>


    </style>
</head>
<body dir="rtl" class="relative bg-gray-50">
@if(session('success'))
    <div class="flex justify-center">
        <div class="ring-4 ring-yellow-100 px-5 py-3 bg-yellow-300 text-gray-900 text-xl lg:w-4/12 w-8/12 mt-16 fixed z-10 items-center text-center">
            {{ session()->pull('success')}}
        </div>
    </div>
@endif
{{--welcoming--}}
<div>
    <div class="flex justify-center w-full">
        <div class="grid grid-cols-1 justify-items-center lg:w-4/12 w-10/12 lg:mt-28 mt-20">
            <div class="grid grid-cols-1 justify-items-center">
                <div class="w-2/12 mb-10">
                    <img src="assets/readToInnovateLogo.png" alt="">
                </div>
                <div>
                    <p class="text-7xl FD4848">اقرأ لنبتكر</p>

                </div>
            </div>

            <div>
                <p class="lg:text-3xl text-2xl text-gray-800 text-center mt-10 text-justify">اذا كانت موهبتكم كتابة
                    القصص
                    وتمتلكون خيالا واسعاُ في
                    خلق اجواء مشوقة يستمتع بها كل من يقرأها
                    اذا مكانكم معنا في اكبر مسابقة لكتابة القصص في موسمها الثاني.</p>
            </div>

            <div>
                <a href="/signup">
                    <button class="blue px-5 py-3 text-white text-2xl mt-16 shadow focus:shadow-2xl focus:outline-none focus:ring-yellow-300 ring-4 ring-gray-300">
                        بدء التسجيل
                    </button>
                </a>

            </div>
        </div>


    </div>
    <div class="lg:w-3/12 w-5/12 lg:-mt-48 lg:mr-16 mt-8">
        <img src="assets/readingRobot.svg" alt="">
    </div>
</div>

<div class="lg:mx-36 mx-10 mt-32">
    <h1 class="text-4xl">
        شروط المسابقة:
    </h1>
    <div class="flex flex-wrap justify-center">

        <div class="lg:w-6/12 w-full">
            <div class="flex items-center mt-6">
                <img class="w-2/12 ml-8" src="assets/chalkboard.svg" alt="">
                <p class="text-2xl">
                    العمر من 7-15 سنة.
                </p>
            </div>
            <div class="flex items-center mt-6">
                <img class="w-2/12 ml-8" src="assets/mat.svg" alt="">
                <p class="text-2xl">
                    المواضيع من اختيار المشارك.
                </p>
            </div>
            <div class="flex items-center mt-6">
                <img class="w-2/12 ml-8" src="assets/pencil.svg" alt="">
                <p class="text-2xl">
                    عدد الكلمات 500 كلمة.
                </p>
            </div>
        </div>
        <div class="lg:w-6/12 w-full">
            <div class="flex items-center mt-6">
                <img class="w-2/12 ml-8" src="assets/book.svg" alt="">
                <p class="text-2xl">
                    ترسل القصة عن طريق نسخها ولصقها في الحقل المخصص لها في استمارة التقديم.
                </p>
            </div>
            <div class="flex items-center mt-6">
                <img class="w-2/12 ml-8" src="assets/clock.svg" alt="">
                <p class="text-2xl">
                    اخر موعد لاستلام القصص هو يوم 1/9/2021
                    ننتظر ابداعاتكم أصدقاءنا الابطال.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="lg:mx-36 mx-10 mt-32">
    <h1 class="text-4xl">
        المسابقة بتنظيم:
    </h1>
    <div class="lg:flex flex-none justify-evenly mt-10">
        <div class="flex flex-wrap justify-center lg:w-4/12 w-full bg-white ring-4 ring-purple-500 p-6 items-center">
            <div class="w-24 lg:w-3/12">
                <img src="assets/RtoIpost_0005_Layer-3.png" alt=""></div>
            <p class="text-lg lg:text-start text-justify lg:mt-0 mt-2 text-center w-full lg:w-9/12 p-2">
                تقديم البرامج التعليمية المتميزة للأطفال من أعمار 7 - 16 سنة
                تنمية قدرات الأطفال الذهنية مثل التركيز والذاكرة والسرعة والدقة
                تعليم الأطفال الحاسب الآلي وتدريبهم على كيفية استخدام تكنولوجيا المعلومات فى الحياة العملية. </p></div>
        <div class="flex flex-wrap justify-center lg:w-4/12 w-full lg:mt-0 mt-10 bg-white ring-4 ring-purple-500 p-6 items-center">
            <div class="w-24 lg:w-3/12">
                <img src="assets/RtoIpost_0006_Layer-2.png" alt=""></div>
            <p class="text-lg lg:text-start text-justify lg:mt-0 mt-2 text-center w-full lg:w-9/12 p-2">
                تقديم البرامج التعليمية المتميزة للأطفال من أعمار 7 - 16 سنة
                تنمية قدرات الأطفال الذهنية مثل التركيز والذاكرة والسرعة والدقة
                تعليم الأطفال الحاسب الآلي وتدريبهم على كيفية استخدام تكنولوجيا المعلومات فى الحياة العملية. </p></div>

        {{--        <div class="flex justify-center lg:w-4/12 bg-white ring-4 ring-yellow-100 p-4">--}}
        {{--            <img class="lg:w-6/12 w-4/12" src="assets/RtoIpost_0005_Layer-3.png" alt="">--}}
        {{--            <p class="lg:w-auto w-full">--}}
        {{--                IoT Kids--}}
        {{--                <br>--}}
        {{--                تقديم البرامج التعليمية المتميزة للأطفال من أعمار 7 - 16 سنة تنمية قدرات الأطفال الذهنية مثل التركيز--}}
        {{--                والذاكرة والسرعة والدقة تعليم الأطفال الحاسب الآلي وتدريبهم على كيفية استخدام تكنولوجيا المعلومات فى--}}
        {{--                الحياة العملية.--}}
        {{--            </p>--}}
        {{--        </div>--}}
        {{--        <div class="lg:flex flex-none lg:w-4/12 lg:mt-0 mt-6 bg-white ring-4 ring-yellow-100 p-4">--}}
        {{--            <img class="lg:w-8/12 w-11/12" src="assets/RtoIpost_0006_Layer-2.png" alt="">--}}
        {{--            <p>--}}
        {{--                مجلة اصدقائي--}}
        {{--                <br>--}}
        {{--                اطلالة الى عالم الطفولة، سنعيش معا مغامرات شيقة نعزف من خلالها لحنا في كل ما نتمناه لكم من ثقافة واخلاق--}}
        {{--                رفيعة ومتعة وابداع.--}}
        {{--            </p>--}}
        {{--        </div>--}}

    </div>
</div>

{{--footer--}}
<div class="w-full object-fit bg-no-repeat mt-64 relative">
    <svg class="z-1-" viewBox="0 0 1633 234" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Group-3" fill="#FD4848">
                <rect id="Rectangle" x="1483" y="117" width="150" height="117"></rect>
                <rect id="Rectangle" x="1334" y="177" width="150" height="57"></rect>
                <rect id="Rectangle" x="1195" y="0" width="150" height="234"></rect>
                <rect id="Rectangle" x="1051" y="120" width="150" height="114"></rect>
                <rect id="Rectangle" x="907" y="24" width="150" height="210"></rect>
                <rect id="Rectangle" x="758" y="73" width="150" height="161"></rect>
                <rect id="Rectangle" x="589" y="120" width="180" height="114"></rect>
                <rect id="Rectangle" x="148" y="91" width="150" height="143"></rect>
                <rect id="Rectangle" x="0" y="189" width="150" height="45"></rect>
                <rect id="Rectangle" x="295" y="24" width="150" height="210"></rect>
                <rect id="Rectangle" x="441" y="177" width="150" height="57"></rect>
            </g>
        </g>
    </svg>
    <p class="absolute text-center w-full bottom-0 lg:mb-6 lg:text-2xl text-base text-white mt-20">
        مسابقة اقرا لنبتكر
    </p>
</div>


{{--<div class="fixed bottom-0 left-0 lg:w-3/12 w-6/12">--}}
{{--    <p class="text-center text-2xl lg:mb-8 mb-2">المسابقة بتنظيم</p>--}}
{{--    <div class="grid grid-cols-2 justify-items-center items-center lg:mb-28 mb-10">--}}
{{--        <img class="lg:w-6/12 w-9/12" src="assets/RtoIpost_0005_Layer-3.png" alt="">--}}
{{--        <img class="lg:w-8/12 w-11/12" src="assets/RtoIpost_0006_Layer-2.png" alt="">--}}
{{--    </div>--}}
{{--</div>--}}


</body>
</html>