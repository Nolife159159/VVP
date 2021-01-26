<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>



<body>
    <div id="app">
        <div class="page">
            <navbar></navbar>
            <TopHeader></TopHeader>
            <div class="main-c">

                text
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/app.js')}}"></script>

</html>
<script>
    import TopHeader from "../js/components/TopHeader";
    export default {
        components: {TopHeader}
    }
</script>
