@extends('index')

@section('content')

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
                    <div class="lg:w-2/12 w-3/12 mb-10">
                        <img src="assets/readToInnovateLogo.png" alt="">
                    </div>
                    <div>
                        <p class="text-7xl FD4848">نقرأ لنبتكر</p>

                    </div>
                </div>

                {{--            <div>--}}
                {{--                <p class="lg:text-3xl text-2xl text-gray-800 text-center mt-10 text-justify">اذا كانت موهبتكم كتابة--}}
                {{--                    القصص--}}
                {{--                    وتمتلكون خيالا واسعاُ في--}}
                {{--                    خلق اجواء مشوقة يستمتع بها كل من يقرأها--}}
                {{--                    اذا مكانكم معنا في اكبر مسابقة لكتابة القصص في موسمها الثاني.</p>--}}
                {{--            </div>--}}

                <div>
                    <p class="lg:text-3xl text-2xl text-gray-800 text-center mt-10 text-justify">
                        مسابقة لكتابة
                        القصص حيث يمكنكم استثمار خيالكم في خلق اجواء مشوقة يستمتع بها كل من يقراها.
                        وتمتلكون خيالا واسعاُ في
                    </p>
                </div>


                <div>
                    <p class="lg:text-4xl text-2xl text-blue-400 mt-10 text-center font-bold">
                        قصص اطفال الفائزين لسنة 2021
                    </p>
                </div>

                <div>
                    <a href="/winners">
                        <button class="blue px-5 py-3 text-white text-2xl mt-16 shadow focus:shadow-2xl hover:ring-red-500 focus:outline-none focus:ring-yellow-300 ring-4 ring-gray-300">
                            القصص
                        </button>
                    </a>

                </div>
            </div>


        </div>
        <div class="lg:w-3/12 w-5/12 lg:-mt-48 lg:mr-16 mt-8">
            <img src="assets/readingRobot.svg" alt="">
        </div>
    </div>

    <div class="lg:mx-36 mx-10 mt-44">
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

    <div class="lg:mx-36 mx-10 mt-44">
        <h1 class="text-4xl">
            المسابقة بتنظيم:
        </h1>
        <div class="lg:flex flex-none justify-evenly mt-10">
            <div class="flex flex-wrap justify-center lg:w-5/12 w-full bg-white ring-4 ring-gray-200 px-10 py-8 items-center">
                <div class="w-24 lg:w-3/12">
                    <img src="assets/RtoIpost_0006_Layer-2.png" alt=""></div>
                <p class="text-lg lg:text-start text-justify lg:mt-0 mt-2 text-center w-full lg:w-9/12 p-2">
                    اول مجلة تفاعلية، ثقافية، مسلية لأطفال العراق.. تهدف الى الارتقاء بالمستوى الاخلاقي، الثقافي
                    والمعرفي
                    للاطفال فضلا عن تنمية مواهبهم والبحث عن مواطن الابداع في شخصيتهم وتشجيعهم ليكونوا مميزين.
                </p>
            </div>

            <div class="flex flex-wrap justify-center lg:w-5/12 w-full lg:mt-0 mt-10 bg-white ring-4 ring-gray-200 px-10 py-8 items-center">
                <div class="w-24 lg:w-3/12">
                    <img src="assets/RtoIpost_0005_Layer-3.png" alt=""></div>
                <p class="text-lg lg:text-start text-justify lg:mt-0 mt-2 text-center w-full lg:w-9/12 p-2">
                    تقديم البرامج التعليمية الحديثة للأطفال من عمر 7 - 16 سنة لتنمية المهارات الذهنية كالتركيز والذاكرة
                    والسرعة لدى الاطفال بالاضافة الى تعلم اساسيات الحاسب الالي وتدريبهم على كيفية استخدام التكنولوجيا في
                    الحياة العملية.
                </p>
            </div>

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

    <div class="lg:mx-36 mx-10 mt-44">
        <h1 class="text-4xl">
            المسابقة برعاية:
        </h1>
        <div class="lg:flex flex-none justify-evenly mt-10">
            <div class="flex flex-wrap justify-center lg:w-5/12 w-full bg-white ring-4 ring-gray-200 px-10 py-8 items-center">
                <div class="w-6/12 lg:w-4/12">
                    <img src="assets/icfpng.png" alt=""></div>

            </div>

        </div>
    </div>

    {{--footer--}}
    <div class="w-full lg:mt-64 mt-44 relative">
        <svg class="z-1- w-full" viewBox="0 0 1633 234" version="1.1" xmlns="http://www.w3.org/2000/svg"
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
        <p class="absolute text-center w-full bottom-0 lg:mb-6 mb-2 lg:text-2xl text-base text-white mt-20">
            مسابقة نقرأ لنبتكر
        </p>
    </div>
@endsection