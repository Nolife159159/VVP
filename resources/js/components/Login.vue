<template>
    <div class="col-sm-10 login-box">
        <img class="login-logo" src="img/login-logo.png" alt="logo" width="238px" height="203px">
        <br>
        <br>
        <div class="text">Sveiki atvykę į LERG!</div>
        <div class="login-klaida">{{ message }}</div>
        <div class="input-bg py-3">
            <input type="text" name="username" v-model="formData.username" class="inputas mb-2" placeholder="Vartotojo vardas"/>
            <input type="password" name="password" v-model="formData.password" class="inputas" placeholder="Slaptažodis"/>
            <br>
            <br>
            <input class="button" @click="submitForm" :disabled="disabled" value="Prisijungti">
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div class="align-items-center justify-content-center lerg-text">
            LERG
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            formData: {
                username: null,
                password: null
            },
            message: '',
            disabled:false
        }
    },
    methods: {
        submitForm: function() {
            this.disabled = true;
            axios.post('/login', this.formData)
                .then((response) => {
                    this.message = response.data;
                    this.disabled = false
                })
                .catch((error) => {
                    this.message = error.response.data
                    //this.body = error.data
                    this.disabled = false

                })
        }
    }
}
</script>

<style lang="scss" scoped>
    .text {
        height: 50px;
        text-align: center;
        vertical-align: middle;
        line-height: 50px;
        width: 300px;
        background: #e3242b;
        border: 2px solid #e3242b;
        border-radius: 15px 15px 0 0;
        text-transform: uppercase;
        color: #0f1118;
        font-weight: 600;
        box-shadow: 0 0 5px 0 rgba(177, 28, 34, 1);
    }
    .button {
        height: 50px;
        text-align: center;
        vertical-align: middle;
        line-height: 50px;
        width: 300px;
        background: #ffffff;
        border: 2px solid #ffffff;
        border-radius: 0 0 15px 15px;
        text-transform: uppercase;
        color: #0f1118;
        font-weight: 600;
        box-shadow: 0 2px 0 0 rgba(172, 172, 173, 1),
        0 0 5px 0 rgba(255, 255, 255, 0.4);
        &:hover {
            height: 50px;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            width: 300px;
            border: 2px solid #e3242b;
            border-radius: 0 0 15px 15px;
            text-transform: uppercase;
            color: #0f1118;
            font-weight: 600;
            box-shadow: 0 2px 0 0 rgba(177, 28, 34, 1),
            0 0 5px 0 rgba(277, 36, 43, 0.4);
            background: -moz-linear-gradient(90deg,
                rgb(227, 36, 43) 0%,
                rgb(227, 36, 43) 100%);
            background: -webkit-linear-gradient(90deg,
                rgb(227, 36, 43) 0%,
                rgb(227, 36, 43) 100%);
            background: -ms-linear-gradient(90deg,
                rgb(227, 36, 43) 0%,
                rgb(227, 36, 43) 100%);
            background: linear-gradient(90deg,
                rgb(227, 36, 43) 0%,
                rgb(227, 36, 43) 100%);
        }
    }
    .inputas {
        background: #151821;
        border: solid #151821 1px;
        width: 100%;
        outline: none;
        box-shadow: 0 2px 5px 0 rgba(15, 17, 24, 1);
        color: #e3242b;
    }
    .input-bg {
        background: #0f1118;
        width: 300px;
        height: 11rem;
        border-color: #0f1118;
        box-shadow: 0 2px 0 0 rgba(177, 28, 34, 1) inset;
    }
    .login-klaida {
        color: #e3242b;
    }
    .login-logo {
        margin-left: 20px;
    }
    .lerg-text {
        font-size: 72px;
        color: #e3242b;
        text-transform: uppercase;
        line-height: 1.2;
        text-align: center;
        font-family: "CRASSROOTSOFLREG";
        -moz-transform: matrix(1.35, 0, 0, 1.35097493036212, 0, 0);
        -webkit-transform: matrix(1.35, 0, 0, 1.35097493036212, 0, 0);
        -ms-transform: matrix(1.35, 0, 0, 1.35097493036212, 0, 0);
        transform: matrix(1.35, 0, 0, 1.35097493036212, 0, 0);
        left: 35%;
        padding-top: 10px;
        position: absolute;
    }
    .login-box {
        width: 300px;
        height: 100px;
        position: absolute;
        top: 150px;
        bottom: 0;
        left: -5%;
        right: 0;
        margin: 0 auto auto 0;
        transform: translateY(-50%);
    }
    :-ms-input-placeholder {
        color: #e3242b;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
    }
    ::-ms-input-placeholder {
        color: #e3242b;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
    }
    ::placeholder {
        color: #e3242b;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        opacity: 1;
    }
    @font-face {
        font-family: "CRASSROOTSOFLREG";
        src: url('/font/CRASSROOTSOFLREG.ttf') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

</style>
