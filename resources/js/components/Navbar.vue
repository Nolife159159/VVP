<template>
    <div class="nav">
        <div class="logo">
            <img src="img/main-logo.png" alt="">
        </div>
        <div class="logo-top">
            <img src="img/corner-logo.png" alt="">
        </div>
        <div class="nav-items">
            <div class="item active">
                <img src="img/svg/forum-white.svg" alt="">
                <a href="">FORUMAS</a>
            </div>
            <div class="item">
                <img src="img/svg/search-white.svg" alt="">
                <a href="">IEŠKOTI</a>
            </div>
            <div class="item item1">
                <img src="img/svg/profilis-white.svg" alt="">
                <a href="">PROFILIS</a>
            </div>
            <div class="item">
                <img src="img/svg/top-white.svg" alt="">
                <a href="">TOP10</a>
            </div>
            <div class="item">
                <img src="img/svg/icon-logout-white.svg" alt="">
                <a href="">Atsijungti</a>
            </div>
        </div>

    </div>
</template>

<script>

export default {

}
</script>

<style lang="scss" scoped>
.logo {
    display:none
}
.logo-top {
    z-index: 9999;
    position: absolute;
}
.nav {
    background: #0f1118;
    display:flex;
    justify-content: center;
    .nav-items {
        display:flex;
        flex-direction: column;
        justify-content: center;
        .item {
            display: flex;
            align-items: center;
            padding: .5rem 10px;
            border:3px solid transparent;
            justify-content: center;
            margin-right: 1rem;
            img {
                width: 20px;
            }
            a {
                display: none;
                font-size: small;
                text-transform: uppercase;
            }
            &:hover {
                margin-right: unset;
                border-left: 6px solid #e3242b;
                a {
                    display:inherit;
                    color: #e3242b;
                    text-decoration: none;
                }
                img {
                    display:none;
                }
            }
        }
        .active {
            border-left: 6px solid #e3242b;
        }
    }
}

@media (min-width: 768px) {
    .nav {
        position: absolute;
        left:0;
        height: 100%;
        width: 4rem;
    }
}

@media (max-width: 768px) {
    .nav {
        flex-direction: column;
        .nav-items {
            flex-direction: row;
            align-items: center;
            .item {
                &:hover {
                    border-left: none !important;
                    margin-right: unset;
                    border-top: 6px solid #e3242b;
                }
            }
        }
    }
    .logo {
        display: block;
        margin: 0 auto;
    }
    .logo-top {
        display: none;
    }
    .active {
        border-left: none !important;
        border-top: 6px solid #e3242b !important;
    }
}

</style>
