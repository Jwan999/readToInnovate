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
    <link rel="stylesheet" href="{{asset('css/stylesheet.css?v=').time()}}">
    <title>Read To Innovate</title>
    <style>


    </style>
</head>
<body dir="rtl" class="relative bg-gray-50 overflow-x-hidden max-w-full">

@yield('content')


<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    let vue = new Vue({
        el: '#app',
        data: {
            applicants: [],
            id: '',
            applicant: {},

        },
        methods: {
            getApplicants() {
                axios.get(`/applicants/api/${this.id}`).then(response => {

                    if (this.id != '') {
                        console.log(response.data)
                        this.applicant = response.data[0]
                    } else {
                        this.applicants = response.data.data
                        // console.log(this.applicants)

                        this.applicants = this.applicants.filter(applicant => applicant.rating == '2')

                    }

                    // if (this.id != '') {
                    //
                    //     this.applicant = response.data[0]
                    //     this.heart = `/assets/heart${this.applicant.rating}.svg`
                    // }
                    // if (filter) {
                    //     this.filtering = filter
                    //     this.applicants = this.applicants.filter(application => application.rating == filter);
                    // }

                })
            },
        },

        mounted() {
            this.getApplicants()
        }
    })
</script>
</body>
</html>